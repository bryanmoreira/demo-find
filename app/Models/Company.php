<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'cnpj',
        'address',
        'email',
        'website',
        'telephone'
    ];

    /**
     * Users that belong to the company.
     */
    public function users()
    {
        return $this->belongsToMany(\App\Models\User::class);
    }
}
