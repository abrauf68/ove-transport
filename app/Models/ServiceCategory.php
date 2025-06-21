<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;

    public function ServiceSubCategories()
    {
        return $this->hasMany(ServiceSubCategory::class)
                    ->where('is_active', 'active');
    }
}
