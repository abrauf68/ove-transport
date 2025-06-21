<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInfoCategory extends Model
{
    use HasFactory;

    public function companyInfo()
    {
        return $this->hasMany(CompanyInfo::class)->where('is_active', 'active');
    }
}
