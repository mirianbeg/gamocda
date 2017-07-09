<?php

namespace App\Models;
use App\Traits\UuidModelTrait;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use UuidModelTrait;
    protected $fillable = [
         'title','photos','description','category_id','count','author_name','author_email','status',
    ];
    protected $casts = [
    'title'=> 'string',
    'photos'=> 'string',
    'description'=> 'string',
    'count'=> 'integer',
    'author_name'=> 'string',
    'author_email'=> 'string',
    'status'=> 'string',
    ];

    public function category()
    {
    	return $this->belongsTo('App\Models\Category');
    }
}