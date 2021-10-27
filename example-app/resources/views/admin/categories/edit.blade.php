@extends('admin.layouts.main')
@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Category</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('category.update', $category->id) }}" method="POST" class="w-25">
                  @csrf
                  @method('PATCH')
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" value="{{$category->title}}" placeholder="Edit Category">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Update">
                </form>
                @error('title')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection