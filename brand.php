<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;

    protected $primaryKey = 'brand_id';
    protected $fillable = ['brand_name'];
}

//public function products()
//{
  //  return $this->hasMany(Product::class, 'brand_id');
//}
//}