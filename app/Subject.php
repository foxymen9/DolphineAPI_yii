<?php

namespace DolphinApi;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
  protected $fillable = ['name'];
  protected $visible  = ['id', 'name'];

  public function getCreatedAtAttribute( $value )
  {
    return date( 'U', strtotime( $value ) );
  }

  function posts()
  {
    return $this->belongsToMany( 'DolphinApi\User', 'users_subjects' );
  }

}