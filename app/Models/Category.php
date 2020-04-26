<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Offer;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    public function offers() {

        return $this->belongsToMany(Offer::class);
        
    }
}
