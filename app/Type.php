<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
    	'cod_category','code', 'description', 'depreciation'
    ];

    protected $primaryKey = 'code';
    
}
