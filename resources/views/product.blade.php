@extends('layouts.main')

@section('title', 'Product')

@section('content')
  @if($id)
    <p>Exibindo produto de id: {{ $id }}</p>

    @if($color)
      <p>A cor selecionada do produto foi: {{ $color }}</p>
    @endif
  @endif
@endsection
