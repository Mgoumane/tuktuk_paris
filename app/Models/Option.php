<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;



    public function reservations()
    {
        return $this->hasMany(Reservation::class, "option_id");
    }

    public function ppOptions()
    {
        return $this->belongsToMany(PointPassage::class, "pp_option")->using(PpOption::class)->withTimestamps();
    }
}
