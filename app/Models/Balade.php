<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balade extends Model
{
    use HasFactory;
    protected $table = 'balades';
    protected $primaryKey = 'id';
    protected $fillable = ['adresse', 'nombalade', 'numero','dateajout','datefin','picture'];
   
   
    public function getSubscription()
    {
        return $this->hasMany(Subscription::class,'balade_id','id');	
    }
}
