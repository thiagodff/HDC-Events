<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  use HasFactory;

  protected $casts = [
    'items' => 'array'
  ];

  protected $dates = [
    'date'
  ];

  // fala que tudo que for enviado pelo POST pode ser atualizado sem restrição
  protected $guarded = []; // o campo que eu colocar no [] o Laravel não deixa ser atualizado

  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }

  public function users()
  {
    return $this->belongsToMany('App\Models\User');
  }
}
