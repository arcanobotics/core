<?php

namespace Arcanobotics\Core\Attributes\Contracts;

interface AttributeModifier
{
    public function getAttribute(): Attribute;

    public function getValue(): int;

    public function canStack(): bool;

    public function is(?AttributeModifier $modifier = null): bool;
}