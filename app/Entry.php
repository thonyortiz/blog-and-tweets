<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Entry extends Model
{
        //$entry->user
        //Entry N - 1 User
        //Eager loading
    public function user()
    {

        return $this->belongsTo('App\User');
    }

    //mutator
    public function SetTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str::slug($value);
    }

    //public function getRouteKeyName()
   // {
    //    return 'slug';
    //} 
    public function geturl()
    {
        return url('entries/'.$this->slug.'-'.$this->id);
    }

}
