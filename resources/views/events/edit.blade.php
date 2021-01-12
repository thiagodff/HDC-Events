 @extends('layouts.main')

 @section('title', 'Editando: ' . $event->title)

 @section('content')

 <div id="event-create-container" class="col-md-6 offset-md-3">
   <h1>Editando: {{ $event->title }}</h1>
   <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
     @csrf
     @method('PUT')
     <div class="form-group">
       <label for="image">Imagem do Evento:</label>
       <input type="file" id="image" name="image" class="from-control-file">
       <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
     </div>
     <div class="form-group">
       <label for="title">Evento:</label>
       <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" value="{{ $event->title }}">
     </div>
     <div class="form-group">
       <label for="date">Data do evento:</label>
       <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
     </div>
     <div class="form-group">
       <label for="title">Cidade:</label>
       <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" value="{{ $event->city }}">
     </div>
     <div class="form-group">
       <label for="title">O evento é privado?</label>
       <select name="private" id="private" class="form-select">
         <option value="0">Não</option>
         <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }}>Sim</option>
       </select>
     </div>
     <div class="form-group">
       <label for="title">Descrição:</label>
       <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?">{{ $event->description }}</textarea>
     </div>
     <div class="form-group">
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
     <input type="submit" class="btn btn-primary" value="Editar Evento">
   </form>
 </div>

 @endsection
