@extends('../masterlayout')

@section('title', 'Edit ' . $product->name . ' Form')

@section('content')
<div class="container">
  <div class="row justify-content-center mt-3 mb-5  ">
    <div class="col col-6">
      <div class="card">
        <div class="card-header bg-success text-light font-weight-bold">Edit Your Product</div>
        <div class="card-body">
          <form action="/update/{{ $product->id }}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
              <label for="name">Product Name</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}">
            </div>
            <div class="form-group">
              <label for="merk">Product Merk</label>
              <input type="text" class="form-control" name="merk" id="merk" value="{{ $product->merk }}">
            </div>
            <div class="form-group">
              <label for="category">Kategori</label>
              <select class="form-control" name="category" id="category">
                <option selected disabled>Pilih Kategori</option>
                @foreach ($category as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="harga_beli">Harga Beli</label>
              <input type="number" class="form-control" name="harga_beli" id="harga_beli" value="{{ $product->harga_beli }}">
            </div>
            <div class="form-group">
              <label for="harga_jual">Harga Jual</label>
              <input type="number" class="form-control" name="harga_jual" id="harga_jual" value="{{ $product->harga_jual }}">
            </div>
            <div class="form-group">
              <label for="stock">Stock</label>
              <input type="number" class="form-control" name="stock" id="stock" value="{{ $product->stock }}">
            </div>
            <div class="form-group">
              <label for="disc">Discount Price</label>
              <input type="number" class="form-control" name="disc" id="disc" value="{{ $product->disc }}">
            </div>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
            <a href="/" class="btn btn-danger float-right mr-3">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
@endsection