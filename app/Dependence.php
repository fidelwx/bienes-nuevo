<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependence extends Model
{
    protected $fillable = [
    	'code','dependence', 'ubication'
    ];

    protected $primaryKey = 'code';

    public function incharges(){
    	return $this->hasMany(Incharge::class);
    }
}
