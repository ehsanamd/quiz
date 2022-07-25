<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Battleroyale extends Model
{
    use HasFactory;

    public function battleroyaleQuestions()
    {
        return $this->hasMany('App\Models\BattleroyaleQuestion');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
