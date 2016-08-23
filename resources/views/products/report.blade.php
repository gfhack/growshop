@extends('layout.layout')

@section('content')
<h1>Produtos</h1>
<hr>
<table class="table table-striped table-hover">
  <thead>
    <th>Nome</th>
    <th>Preço</th>
    <th>Imagem</th>
    <th>Editar</th>
    <th>Excluir</th>
  </thead>
  <tbody>
    @foreach ($ps as $p)
    <tr>
      <td> {{ $p->name }}</td>
      <td>R$ {{ $p->price }}</td>
      <td> {{ $p->image }}</td>
      <td>
        <a href="edit/{{ $p->id }}" class="btn btn-success"><i class="fa fa-pencil fa-1x"></i></a>
      </td>
      <td>
        <form method="POST" action="destroy/{{ $p->id }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-1x"></i></button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<a href="pdf" class="btn btn-danger"><i class="fa fa-file-pdf-o fa-2x"></i></a>

<img src="/img/bottini.jpg" />
@stop
