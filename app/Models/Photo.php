<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $fillable = [
        'photo',
    ];

    public function offer() {

        return $this->belongsTo(Offer::class);
    }
}
