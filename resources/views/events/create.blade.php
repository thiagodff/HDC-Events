@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie o seu evento</h1>

  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="image">Imagem do Evento</label>
      <input type="file" name="image" id="image" class="from-control-file">
    </div>

    <div class="form-group">
      <label for="title">Evento</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" />
    </div>

    <div class="form-group">
      <label for="date">Data do evento</label>
      <input type="date" class="form-control" id="date" name="date">
    </div>

    <div class="form-group">
      <label for="title">Cidade</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" />
    </div>

    <div class="form-group">
      <label for="title">O evento é privado?</label>
      <select name="private" id="private" class="form-select">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>

    <div class="form-group">
      <label for="title">Descrição</label>
      <textarea class="form-control" id="description" name="description" placeholder="O que vai acontecer no evento"></textarea>
    </div>

    <div class="form-group infra-items">
      <label for="title">Adicione itens de infraestrutura:</label>
      <div class="form-group">
        <input type="checkbox" name="items[]" id="cadeiras" value="Cadeiras">
        <label class="label-infra" for="cadeiras">Cadeiras</label>
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" id="stage" value="Palco">
        <label class="label-infra" for="stage">Palco</label>
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" id="beer" value="Cerveja grátis">
        <label class="label-infra" for="beer">Cerveja grátis</label>
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" id="food" value="Open Food">
        <label class="label-infra" for="food">Open food</label>
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" id="gifts" value="Brindes">
        <label class="label-infra" for="gifts">Brindes</label>
      </div>
    </div>

    <input type="submit" value="Criar Evento" class="btn btn-primary">
  </form>
</div>
@endsection
