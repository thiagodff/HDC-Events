@extends('layouts.main')

@section('title', 'Home')

@section('content')
  <h1>Site do {{ $name }}</h1>

  <!-- <img src="/img/banner.jpg" alt="eventos presenciais"> -->

  @if(10 > 5)
    <p>true</p>
  @else
    <p>false</p>
  @endif

  <ul>
    @for($i = 0; $i < count($categories); $i++)
      <li>{{ $categories[$i] }}</li>
    @endfor
  </ul>

  <ul>
    @foreach($categories as $category)
      <li>{{ $loop->index}} - {{ $category }}</li>
    @endforeach
  </ul>

  @php

    echo $name
  @endphp

  {{-- Comentário --}}
@endsection
