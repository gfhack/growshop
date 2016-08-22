@extends('layout.layout')

@section('content')
  <h1>Produtos</h1>

  <table class="table table-bordered">
  @foreach ($ps as $p)
    <tr>
      <td> {{ $p->name }}</td>
      <td> {{ $p->price }}</td>
      <td> {{ $p->image }}</td>
    </tr>
  @endforeach
</table>

  <img src="/img/bottini.jpg" />
@stop
