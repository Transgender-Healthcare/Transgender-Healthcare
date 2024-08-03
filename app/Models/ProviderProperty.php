<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderProperty extends Model
{
    use HasFactory;

    protected $fillable = ['provider_id', 'property_name', 'property_value'];

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
}
