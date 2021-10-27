@extends('admin.layouts.main')
@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 d-flex">
            <h1 class="m-0 pr-2">{{ $category->title }}</h1>
            <a class="btn btn-outline-success" href="{{ route('category.edit', $category->id) }}"><i class="fas fa-edit"></i></a>
            <form action="{{route('category.delete', $category->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="ml-2 btn btn-outline-danger " type="submit">
                  <i class="fas fa-trash-alt" role="button"></i>
              </button>
          </form>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Category Table</h3>
      
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <tbody>
                          <tr>
                            <td>ID</td>
                            <td>{{$category['id']}}</td>
                          </tr>
                          <tr>
                            <td>Title</td>
                            <td>{{$category['title']}}</td>
                          </tr>
                        </tbody>

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