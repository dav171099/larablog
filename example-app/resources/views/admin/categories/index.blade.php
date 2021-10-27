@extends('admin.layouts.main')
@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Category</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <a href="{{route('category.create')}}" class="btn btn-block btn-primary">Add</a>
                {{-- <form action="#"class="w-25">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Send Category">
                    </div>
                    <input type="submit" class="btn btn-primary" value="+ Add">
                </form> --}}
            </div>
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Category Table</h3>
      
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Category Title</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        @foreach ($categories as $item)

                        <tbody>
                          <tr>
                            <td>{{$item['id']}}</td>
                            <td>{{$item['title']}}</td>
                            <td><a class="btn btn-outline-secondary" href="{{ route('category.show', $item->id) }}"><i class="far fa-eye"></i></a></td>
                            <td><a class="btn btn-outline-success" href="{{ route('category.edit', $item->id) }}"><i class="fas fa-edit"></i></a></td>
                            <td>
                                <form action="{{route('category.delete', $item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger " type="submit">
                                        <i class="fas fa-trash-alt" role="button"></i>
                                    </button>
                                </form>
                            </td>
                          </tr>
                        </tbody>

                        @endforeach
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
            </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection