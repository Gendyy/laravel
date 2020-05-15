<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Offer;
use App\Models\Subcategory;

class Category extends Model
{

    Use SoftDeletes;

    protected $fillable = [
        'name',
    ];
    
    protected $dates = ['deleted_at'];

    public function offers() {

        return $this->belongsToMany(Offer::class);
        
    }

    public function subcategories() {

        return $this->hasMany(Subcategory::class);
    }
}
