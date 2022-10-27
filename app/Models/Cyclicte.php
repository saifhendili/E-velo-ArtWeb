<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cyclicte extends Model
{
    use HasFactory;
    protected $table='cyclictes';
    protected $primaryKey='id';
    protected $fillable = ['name','description','nbrpersonnes','tarif','outilsdetest','event_id'];
    public function Event()
    {
        return $this->belongsTo(Event::class,'event_id','id');
    }

}
