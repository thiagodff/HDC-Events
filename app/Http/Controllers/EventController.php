<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
  public function index() {
    $nome = 'Thiago';

    $categories = ['jardinagem', 'eletrodomésticos', 'esportes', 'videogames'];

    return view('welcome', [
      'name' => $nome,
      'categories' => $categories
    ]);
  }

  public function create() {
    return view('events.create');
  }
}
