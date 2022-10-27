<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locale extends Model
{
    use HasFactory;
    protected $table='locales';
    protected $primaryKey='id';
    protected $fillable = ['libelle','emplacement','responsable','superficie','association_id'];



    public function Association()
    {
        return $this->belongsTo(Association::class,'association_id','id');
    }

}
