@extends('layout.layout')

@section('content')
  <h1>Formulário para Cadastro de Produtos</h1>
  <hr>
  <form class="form-horizontal col-md-6">
    <div class="form-group">
      <label for="productName">Produto</label>
      <input id="productName" type="text" name="name" class="form-control" placeholder="Nome ou descrição do produto" />
    </div>
    <div class="form-group">
      <label for="productPrice">Preço</label>
      <div class="input-group">
        <div class="input-group-addon">R$</div>
        <input id="productPrice" min="0" type="number" name="name" class="form-control" placeholder="Preço do produto" />
        <div class="input-group-addon">.00</div>
      </div>
    </div>
    <div class="form-group">
      <label for="productImg">Foto do produto</label>
      <input id="productImg" type="file" name="image" class="form-control" />
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-default">Cadastrar</button>
    </div>
  </form>
@stop
