<?php namespace Ffy\Photogallery;

class Album extends \Eloquent {
    protected $table = 'ffy_albums';
    protected $fillable = ['name', 'description', 'tags'];
    public static $rules = array(
        'name' => 'required'
    );

    public function photos(){
        return range(0, floor(rand(0, 20)));
    }

}