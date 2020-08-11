@extends('../masterlayout')

@section('title', 'Tugas')

@section('content')
<div class="container">
  <div class="row h-100 justify-content-center mt-4">
    <div class="col-xs-1-12">

      @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
      @endif

      <table class="table table-hovered table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Merek</th>
            <th scope="col">Categori</th>
            <th scope="col">Harga Beli</th>
            <th scope="col">Harga Jual</th>
            <th scope="col">Stock</th>
            <th scope="col">Discount</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($product as $barang)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $barang->name }}</td>
            <td>{{ $barang->merk }}</td>
            <td>{{ $barang->category->name }}</td>
            <td>{{ $barang->harga_beli }}</td>
            <td>{{ $barang->harga_jual }}</td>
            <td>{{ $barang->stock }}</td>
            <td>{{ $barang->disc }}</td>
            <td>
              <a href="/product/{{ $barang->id }}/edit" class="btn btn-success btn-sm">Edit</a>
              <form action="/delete/{{ $barang->id }}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

          

    </div>
  </div>
</div>

@endsection