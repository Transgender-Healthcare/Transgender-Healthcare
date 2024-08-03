<?php

namespace App\Attributes;

class PropHandlerLgbtqIdentified extends PropGenericYesNo
{
    public function getLabel(): string
    {
        return 'Is the provider LGBTQIA2S+ identified?';
    }
}