<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comentario;

class Ticket extends Model
{
    use HasFactory;
    // protected $table = 'yourCustomTableName';
    protected $fillable =['titulo','contenido','slug','estado','user_id'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    } 
    public function comentarios()
    {
        return $this->hasMany('App\Models\Comentario','post_id');
    }
}
