<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Gallery extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'travel_packages_id',
        'image',
    ];

    protected $hidden = [];

    public function travel_package()
    {
        return $this->belongsTo('App\Models\TravelPackage', 'travel_packages_id', 'id');
    }
}