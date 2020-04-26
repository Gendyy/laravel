<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Agency;
use App\Models\Category;
class Offer extends Model
{
    protected $dates = [ 'start_date', 'end_date' ];

    protected $fillable = [
        'name', 'agency_id', 'status', 'start_date', 'end_date', 'rooms_num', 'agency_price', 'user_price',
    ];

    
    public function agency() {

        return $this->belongsTo(Agency::class);
    }


    public function categories() {

        return $this->belongsToMany(Category::class);

    }

    public function details()
    {
    	return $this->hasMany(Detail::class);
    }

    public function photos() {
        return $this->hasMany(Photo::class);
    }
}
