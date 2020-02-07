<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Belonging extends Model
{
    protected $fillable = [
    	'correlative','complete_code','description','purchase_date', 'quantity', 'purchase_order', 'serial', 'origin', 'price', 'status', 'category_id', 'type_id', 'dependence_id'
    ];
}
