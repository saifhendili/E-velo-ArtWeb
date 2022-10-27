<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;
    protected $table='associations';
    protected $primaryKey='id';
    protected $fillable = ['nom','description','owner','nbdepersonne','picture','objective','user_id'];


    public function getLocals()
    {
        return $this->hasMany(Locale::class,'association_id','id');	
    }


    // public function Users()
    // {
    //     return $this->belongsTo(User::class,'user_id','id');
    // }

}
