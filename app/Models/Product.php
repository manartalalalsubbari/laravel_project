<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table="products";
    protected $fillable=[
        'name',
        'price',
        'img',
        'categorie_id'
    ];

    public function categories(){
        return $this->belongsTo(Category::class,'categorie_id');
    }
}
