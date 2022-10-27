<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'place',
        'nameevent',
        'dateajout',
        'datefin',
        'picture',
        'velo_id',
        
    ];
    public function getCyclicte()
    {
        return $this->hasMany(Cyclicte::class,'event_id','id');	
    }
}
