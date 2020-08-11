@extends('../masterlayout')

@section('title', 'Tugas')

@section('content')
<div class="container">
  <div class="row h-100 justify-content-center mt-4">
    <div class="col col-6">
      <a href="/form-category" class="btn btn-primary mb-3">Add new category</a>
      <table class="table table-hovered table-striped">
        <thead class="table-info text-secondary">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($category as $list)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $list->name }}</td>
            <td>
              <a href="/category/{{ $list->id }}/edit" class="btn btn-success btn-sm">Edit</a>
              <form action="/category/delete/{{ $list->id }}" method="POST" class="d-inline">
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