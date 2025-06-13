<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comentario;

class Ticket extends Model
{
    use HasFactory;
    // protected $table = 'yourCustomTableName';
    protected $fillable =['title','content','slug','status','user_id'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    } 
    public function comments()
    {
        return $this->hasMany('App\Models\Comment','post_id');
    }
}
