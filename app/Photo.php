<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $fillable = [
    'user_id',
  ];
  public function usersTable()
  {
    return $this->belongsTo('App\User');
  }
}
