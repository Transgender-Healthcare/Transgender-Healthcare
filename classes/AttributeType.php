<?php

namespace TGHC;

interface AttributeType
{

    const NAME = 'AttributeName';

    static public function renderInput(string $htmlId, array $cssClasses = array(), array $otherTags = array()): string;

    static public function renderOutput(string $htmlId, array $cssClasses = array(), array $otherTags = array()): string;

}

class AttributeName implements AttributeType
{
    static public function renderInput(string $htmlId, array $cssClasses = array(), array $otherTags = array()): string
    {
        // TODO: Implement renderInput() method.
    }

    static public function renderOutput(string $htmlId, array $cssClasses = array(), array $otherTags = array()): string
    {
        // TODO: Implement renderOutput() method.
    }
}