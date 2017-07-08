<?php

namespace App\Models;
use App\Traits\UuidModelTrait;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use UuidModelTrait;

    protected $fillable = [
        'name', 'status', 'rigiToba',
    ];
    protected $casts = [
    'name' =>'string',
    'status'=> 'string',
    'rigiToba'=> 'integer',
    ];
}
