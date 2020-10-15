@extends('layout.form')
@section('form')
<form action="{{ route('students.store') }}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="name">Nome</label>
      <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="surname">Cognome</label>
      <input name="surname" type="text" class="form-control" id="surname" required>
    </div>
    <div class="form-group">
      <label class="form-check-label" for="age">Età</label>
      <input name="age" type="text" class="form-control" id="age" required>
    </div>
    <div class="form-group">
        <label for="descrizione">Descrizione</label>
        <textarea name="descrizione" class="form-control" id="descrizione" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Invia</button>
  </form>
@endsection