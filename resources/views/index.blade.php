@extends('layout.form')
@section('form')
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Cognome</th>
        <th scope="col">Età</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item) 
        <tr>
        <th scope="row">{{$item->nome}}</th>
            <td>{{$item->cognome}}</td>
            <td>{{$item->eta}}</td>
        </tr>
      @endforeach
    </tbody>
        <a href="{{ route('students.create') }}"><button type="button" class="btn btn-dark">Aggiungi un campo</button></a>
  </table>
@endsection