<?php
/**@var App\Models\Comment $comment */
?>

@extends('personal.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Update comment</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('personal.main.index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('comments.index')}}">Comments</a></li>
                            <li class="breadcrumb-item active">comment</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->

        <div class="col-12">
            <form action="{{route('comments.update', $comment->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="w-75 form-group">
                    <textarea id="summernote" name="message">{{$comment->message}}</textarea>
                    @error('message')
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
