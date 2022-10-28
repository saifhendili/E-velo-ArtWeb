<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $table = 'subscriptions';
    protected $primaryKey = 'id';
    protected $fillable = ['nomsubscriber','biketype','age','gender', 'adress','balade_id'];
    
    public function Balade()
    {
        return $this->belongsTo(Balade::class,'balade_id','id');
    }
}
