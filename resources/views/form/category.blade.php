@extends('../masterlayout')

@section('title', 'Category Form')

@section('content')
  <div class="container">
    <div class="row h-100 justify-content-center mt-4">
      <div class="col col-4">
        <div class="card">
          <div class="card-header bg-success text-light font-weight-bold">Add Your Category</div>
          <div class="card-body">
            <form action="/add-category" method="POST">
            @csrf
            <div class="form-group">
              <label for="Name">Category Name</label>
                  <input type="text" class="form-control" name="name" id="Name" placeholder="makanan...">
                </div>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
                <a href="/" class="btn btn-danger float-right mr-2">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
@endsection