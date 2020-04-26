<?php

namespace App\Models;

use App\Models\Offer;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{


    protected $fillable = [
        'offer_id', 'from', 'to', 'dep_time', 'arr_time', 'trip_num', 'transportation',
    ];

    
    public function offer() {

        return $this->belongsTo(Offer::class);
    }

}