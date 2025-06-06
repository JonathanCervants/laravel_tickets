<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Category extends Model
{
    protected $fillable =['name'];

    public function Products()
    {
        return $this->hasMany(Product::class);
    }
}
