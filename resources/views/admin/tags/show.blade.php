@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex mr-2 align-items-center">
                        <h1 class="mr-2">{{$tag->title}}</h1>
                        <a href="{{route('tags.edit', $tag->id)}}" ><i class="fa-solid fa-pen text-success"></i></a>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->

        <div class="col-12">
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <tbody>
                    <tr>
                        <td>ID</td>
                        <td>{{$tag->id}}</td>

                    </tr>
                    <tr>
                        <td>Title</td>
                        <td>{{$tag->title}}</td>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
