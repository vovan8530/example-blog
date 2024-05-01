<?php
/**@var App\Models\Comment[] $comments */

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
                        <h1 class="m-0">Comments</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('personal.main.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Comments</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="col-2 mb-3">
            <a type="button" href="{{route('tags.create')}}" class="btn btn-block btn-primary">Create</a>
        </div>
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th colspan="3">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $comment)
                            <tr>
                                <td>{{$comment->id}}</td>
                                <td>{!!$comment->message !!}</td>
                                <td>{{$comment->created_at}}</td>
                                <td><a href="{{route('comments.show', $comment->id)}}"><i class="fa-regular fa-eye"></i></a>
                                </td>
                                <td><a href="{{route('comments.edit', $comment->id)}}"><i
                                                class="fa-solid fa-pen text-success"></i></a></td>
                                <td>
                                    <form action="{{route('comments.destroy', $comment->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="border-0 bg-transparent"><i
                                                    class="fa-solid fa-trash text-danger"></i></button>
                                    </form>
                                </td>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
