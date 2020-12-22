<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
   protected $fillable =[
       'title', 'description'
   ];

//    protected $guarded =[];    ==> No protection
  public function tasks()
  {
      return $this->hasMany(Task::class);
  }
}
