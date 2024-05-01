@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Update tag</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('tags.index')}}">Tags</a></li>
                            <li class="breadcrumb-item active">{{$tag->title}}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->

        <div class="col-12">
            <form action="{{route('tags.update', $tag->id)}}" method="POST">
                @method('patch')
                @csrf
                <div class="w-25 form-group">
                    <label>Title</label>
                    <input type="text" name="title" value="{{$tag->title}}" class="form-control" placeholder="Title tag" required>
                    @error('title')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <input class="button col-2 btn btn-block btn-warning" type="submit" value="Update">
            </form>
        </div>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
