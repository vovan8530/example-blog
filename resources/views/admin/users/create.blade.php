@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create user</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('users.index')}}">Users</a></li>
                            <li class="breadcrumb-item active">Create user</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->

        <div class="col-12">
            <form action="{{route('users.store')}}" method="POST">
                @csrf
                <div class="w-25 form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Name user" required>
                    @error('name')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="w-25 form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email user" required>
                    @error('email')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="w-50 form-group">
                    <select class="form-control" name="role">
                        @foreach($roles as $key => $role)
                            <option value="{{$key}}"
                                {{old('role') == $role ? 'selected' : ''}}
                            >{{$role}}</option>
                        @endforeach
                    </select>
                    @error('role')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <input class="button col-2 btn btn-block btn-success" type="submit" value="Create">
            </form>
        </div>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
