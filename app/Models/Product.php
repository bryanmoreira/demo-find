<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'description', 'image_url', 'company_id'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
