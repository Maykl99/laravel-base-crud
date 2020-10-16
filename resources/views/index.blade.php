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
            <th scope="row"><a href="{{ route('students.show', $item->id ) }}">{{$item->nome}}</th></a>
            <td>{{$item->cognome}}</td>
            <td>{{$item->eta}}</td>
            <td>
              <form action="{{ route( 'students.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" value="cancella" class="btn btn-danger">Danger</button>
              </form>
            </td>
          </tr>
      @endforeach
    </tbody>
        <a href="{{ route('students.create') }}"><button type="button" class="btn btn-dark">Aggiungi un campo</button></a>
  </table>
  @endsection