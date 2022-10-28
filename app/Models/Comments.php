<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{    
    use HasFactory;
    protected $table='comments';
    protected $primaryKey='id';
    protected $fillable = ['cmnt','blog_id'];
    public function Blog()
    {
        return $this->belongsTo(Blog::class,'blog_id','id');
    }
}
