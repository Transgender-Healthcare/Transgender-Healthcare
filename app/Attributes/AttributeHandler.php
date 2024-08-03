<?php

namespace App\Attributes;

abstract class AttributeHandler
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    abstract public function getEdit(): string;
    abstract public function getValueDisplay(): string;
    abstract public function getLabel(): string;
}