<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
    	'code','description', 'code_pres'
    ];

    protected $primaryKey = 'code';

}
