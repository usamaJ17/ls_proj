<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table="event";
    protected $fillable = ['image_path','link', 'long' ,'short', 'speaker', 'name','end','start','image_path'];
}
