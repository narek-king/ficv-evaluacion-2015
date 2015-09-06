<?php 

class Venue extends Model {
	protected $table = 'venues';

	protected static $rules = [
        'name' => 'required',
        'description' => 'required',
        'lat' => 'required',
        'lng' => 'required'
    ];

	/*public function plays() {
        return $this->hasMany('Play');
    }*/
}