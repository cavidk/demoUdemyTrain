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
    'user_id',
];

//protected $guarded = [
//    'id',
//];


}
