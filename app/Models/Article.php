<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table='Article';
    protected $primaryKey ='id';

    protected $fillable = [
            'title',
            'content',
        ];
    protected $quarded = ['_token','_method'];
}
