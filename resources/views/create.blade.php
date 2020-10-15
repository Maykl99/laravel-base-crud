@extends('layout.form')

  @section('form')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <form action="{{ route('students.store') }}" method="post">
          @csrf
          @method('POST')
          <div class="form-group">
            <label for="name">Nome</label>
            <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" >{{ old('name') }}
            <small id="emailHelp" class="form-text text-muted">Non lasciare nessun campo vuoto!</small>
          </div>
          <div class="form-group">
            <label for="lastname">Cognome</label>
            <input name="lastname" type="text" class="form-control" id="lastname" >{{ old('lastname') }}
          </div>
          <div class="form-group">
            <label class="form-check-label" for="age">Età</label>
            <input name="age" type="text" class="form-control" id="age" >{{ old('age') }}
          </div>
          <div class="form-group">
              <label for="descrizione">Descrizione</label>
              <textarea name="descrizione" class="form-control" id="descrizione" rows="3" >{{ old('descrizione') }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Invia</button>
        </form>  
      </div>
    </div>
</div>
@endsection

