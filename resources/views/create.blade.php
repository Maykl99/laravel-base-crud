@extends('layout.form')

@section('form')
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
      <form id="app-1" name="myForm" action="{{ !empty($student) ? route('students.update', $student->id) : route('students.store') }}" method="post">
          @csrf
          @if(!empty($student))
            @method('PATCH')
            <input name="id" type="text" class="form-control" id="id" value="{{ $student->id }}">
          @else
            @method('POST')
          @endif
          
          <div class="form-group">
            <label for="name">Nome</label>
            <input v-bind:title="message" name="nome" type="text" class="form-control" id="nome" aria-describedby="emailHelp" value="{{ !empty($student) ? $student->nome : old('nome') }}">
            <small id="emailHelp" class="form-text text-muted">Non lasciare nessun campo vuoto!</small>
          </div>
          <div class="form-group">
            <label for="lastname">Cognome</label>
            <input v-bind:title="message" name="cognome" type="text" class="form-control" id="cognome" value="{{ !empty($student) ? $student->cognome : old('cognome') }}">
          </div>
          <div class="form-group">
            <label class="form-check-label" for="age">Età</label>
            <input v-bind:title="message" name="eta" type="text" class="form-control" id="eta" value="{{ !empty($student) ? $student->eta : old('eta') }}">
          </div>
          <div class="form-group">
              <label for="descrizione">Descrizione</label>
              <textarea v-bind:title="message" name="descrizione" class="form-control" id="descrizione" rows="3" value="{{ !empty($student) ? $student->descrizione : old('descrizione') }}"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Invia</button>
        </form>  
      </div>
    </div>
</div>
@endsection

