<?php

namespace App\Attributes;

class PropGenericYesNo extends AttributeHandler
{
    public function getEdit(): string
    {
        $uniqueId = $this->generateUniqueId();
        $displayLabel = $this->getLabel();
        $valueDisplay = $this->getValueDisplay();

        $returnData = '<label for="' . $uniqueId . '">' . $displayLabel . '</label>';
        $returnData .= '<select id="' . $uniqueId . '" name="attributes[' . $this->getLabel() . ']">';
        $returnData .= '<option value="1"' . ($this->value ? ' selected' : '') . '>Yes</option>';
        $returnData .= '<option value="0"' . (!$this->value ? ' selected' : '') . '>No</option>';
        $returnData .= '</select>';

        return $returnData;
    }

    public function getValueDisplay(): string
    {
        return $this->value ? 'Yes' : 'No';
    }

    public function getLabel(): string
    {
        return 'Yes/No';
    }

    private function generateUniqueId(): string
    {
        return bin2hex(random_bytes(5));
    }
}
