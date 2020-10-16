@extends('layout.form')
@section('form')
@dd($student)
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Cognome</th>
        <th scope="col">Età</th>
      </tr>
    </thead>
    <tbody>
        
        <tr>
        <th scope="row">{{$item->nome}}</th>
            <td>{{$item->cognome}}</td>
            <td>{{$item->eta}}</td>
        </tr>
     
    </tbody>
        <button type="button" class="btn btn-dark">Aggiungi un campo</button>
  </table>
@endsection