  <table>
  <tbody>
    <tr>
      <td style="font-weight:bold; padding-right:15px">ID</td>
      <td style="font-weight:bold; padding-right:50px">Nome</td>
      <td style="font-weight:bold; padding-right:20px">Preço</td>
      <td style="font-weight:bold; padding-right:20px">Imagem</td>
      <td style="font-weight:bold; padding-right:50px">Última atualização</td>
      <td style="font-weight:bold; padding-right:50px">Data de criação</td>
    </tr>
    @foreach ($ps as $p)
    <tr>
      <td> {{ $p->id }}</td>
      <td> {{ $p->name }}</td>
      <td> {{ $p->price }}</td>
      <td> {{ $p->image }}</td>
      <td> {{ $p->updated_at }}</td>
      <td> {{ $p->created_at }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
