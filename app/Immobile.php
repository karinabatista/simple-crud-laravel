<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Immobile extends Model
{
    protected $fillable = [
    	'immobile_title',
    	'immobile_code',
    	'immobile_type',
    	'immobile_address_name',
    	'immobile_address_number',
    	'immobile_address_district',
    	'immobile_address_CEP',
    	'immobile_address_city',
    	'immobile_address_state',
    	'immobile_price',
    	'immobile_area',
    	'immobile_bedroom',
    	'immobile_suite',
    	'immobile_toilet',
    	'immobile_room',
    	'immobile_garage',
    	'immobile_description',
    	'immobile_image'
    ];
}
