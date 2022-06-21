<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointPassage extends Model
{
    use HasFactory;

    public function ppOptions()
    {
        return $this->belongsToMany(Option::class, "options")->using(PpOption::class)->withTimestamps();
    }
}
