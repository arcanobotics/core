<?php

namespace Arcanobotics\Core\Attributes\Contracts;

use Ds\Vector;

interface Attribute
{
    public function getValue(): int;

    public function getBaseValue(): int;

    public function getModifiers(): Vector;

    public function addModifier(AttributeModifier $attributeModifier);
}