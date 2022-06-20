<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class,"user_id");
    }
    public function chauffeur(){
        return $this->belongsTo(Chauffeur::class,"chauffeur_id");
    }
    public function option(){
        return $this->belongsTo(Option::class,"option_id");
    }


}
