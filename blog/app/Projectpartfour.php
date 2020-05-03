<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class Projectpartfour extends Model
{
    protected $fillable = ['name', 'description'];

    public function tasks()
    {
      return $this->hasMany(Taskpartfour::class,'project_id','id');
    }
}
