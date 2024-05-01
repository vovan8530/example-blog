@extends('personal.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Home</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('personal.main.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Personal panel</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="col-12">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>10</h3>

                            <p>Like posts</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-clipboard"></i>
                        </div>
                        <a href="{{route('likes.index')}}" class="small-box-footer">More info <i class="fa-regular fa-heart"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>10</h3>

                            <p>Comments</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-list"></i>
                        </div>
                        <a href="{{route('comments.index')}}" class="small-box-footer">More info
                            <i class="fa-regular fa-comment"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div>
    </div>

@endsection
