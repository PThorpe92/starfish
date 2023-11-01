<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderResource extends Model
{
    use HasFactory;
<<<<<<< HEAD:app/Models/ProviderResource.php

    protected $fillable = [
        'resource_id',                   // Course ID
        'type',                 // ENUM ProviderResourceType
        'external_resource_id', // External Resource ID
        'provider_id',          // ProviderPlatform ID
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
=======
>>>>>>> 8b2e792 (fix: upgraded to meet schema):middleware/app/Models/ProviderResource.php
}
