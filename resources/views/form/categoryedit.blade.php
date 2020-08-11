@extends('../masterlayout')

@section('title', 'Edit ' . $category->name . ' Form')

@section('content')
<div class="container">
  <div class="row justify-content-center mt-3 mb-5  ">
    <div class="col col-6">
      <div class="card">
        <div class="card-header bg-success text-light font-weight-bold">Edit Your Category</div>
        <div class="card-body">
          <form action="/category/update/{{ $category->id }}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
              <label for="name">Category Name</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}">
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