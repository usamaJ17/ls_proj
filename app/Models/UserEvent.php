<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEvent extends Model
{
    use HasFactory;
    protected $table="user_events";
    public function event(){
        return $this->belongsTo(Event::class,'event_id');
    }
}
