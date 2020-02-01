<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $appends = ['tutorial_url'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function uploads(){
        return $this->hasMany('App\Models\Upload');
    }
    public function planning_development_officers()
    {
        return $this->hasMany('App\Models\PlanningDevelopmentOfficer');
    }

    public function getTutorialUrlAttribute(){
        $tutorial_url = route('designation.show', [$this->category->category_slug, $this->slug]);
        return $tutorial_url;
    }
    public function registers()
    {
        return $this->hasMany('App\Models\Register');
    }
}
