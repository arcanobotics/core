<?php

namespace Arcanobotics\Core\Attributes;

use Arcanobotics\Core\Attributes\Contracts\Attribute as Contract;
use Arcanobotics\Core\Attributes\Contracts\AttributeModifier;
use Ds\Vector;

abstract class Attribute implements Contract
{
    private int    $value;

    private int    $baseValue;

    private Vector $modifiers;

    public function __construct(int $value = 0)
    {
        $this->value     = $this->baseValue = $value;
        $this->modifiers = new Vector;
    }

    public function getBaseValue(): int
    {
        return $this->baseValue;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    /** @noinspection PhpIncompatibleReturnTypeInspection */
    public function getModifiers(): Vector
    {
        return $this->modifiers->copy();
    }

    public function addModifier(AttributeModifier $attributeModifier): self
    {
        if ($this->modifiers->contains($attributeModifier) && ! $attributeModifier->canStack()) {
            return $this;
        }

        $this->modifiers->push($attributeModifier);
        $this->value += $attributeModifier->getValue();

        return $this;
    }
}