<?php 

class Movie extends Model {
	protected $table = 'movies';

	protected static $rules = [
        'name' => 'required',
        'description' => 'required',
        'img_url' => 'required'
    ];

	/*public function plays() {
        return $this->hasMany('Play');
    }*/
}