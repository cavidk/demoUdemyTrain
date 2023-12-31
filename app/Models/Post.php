<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'post';

protected $fillable = [
    'title',
    'description',
    'views',
    'status',
    'publish_date',
    'category_id',
    'user_id',
];


  public function category(){
        return $this->belongsTo(Category::class);
  }


  public function tags(){
        return $this->belongsToMany(Tag::class);
  }

}
