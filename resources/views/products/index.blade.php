@extends('layout.layout')

@section('content')
<div class="col-md-8">
  <h1>Produtos</h1>
  <hr>
  <table class="table table-bordered" id="products">
    @foreach ($ps as $p)
    <tr>
      <td> {{ $p->name }}</td>
      <td> {{ $p->price }}</td>
      <td> {{ $p->image }}</td>
    </tr>
    @endforeach
  </table>
</div>
<div class="col-md-4">
  <h1>Busca</h1>
  <hr>
  <form class="form-inline">
    <div class="form-group">
      <input type="text" class="form-control" id="param" placeholder="Nome do produto">
    </div>
    <div class="form-group">
      <button class="btn btn-primary" id="search"><i class="fa fa-search fa-1x"></i></button>
    </div>
  </form>
</div>
@stop

@section('script')
<script src="js/search.js"></script>
@endsection
