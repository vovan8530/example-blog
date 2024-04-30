@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Update post</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->

        <div class="col-12">
            <form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="w-25 form-group">
                    <label>Title</label>
                    <input type="text" name="title" value="{{$post->title}}" class="form-control"
                           placeholder="Title post" required>
                    @error('title')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="w-75 form-group">
                    <textarea id="summernote" name="description">{{$post->description}}</textarea>
                    @error('description')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="w-50 form-group">
                    <label>Main image</label>
                    <div class="w-25">
                        <img src="{{asset('storage/'.$post->main_image)}}" width="150" height="200" alt="{{asset('storage/'.$post->main_image)}}">
                    </div>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="main_image" class="custom-file-input"
                                   value="{{$post->main_image}}">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                    @error('main_image')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="w-50 form-group">
                    <label>Preview image</label>
                    <div class="w-25">
                        <img src="{{asset('storage/'.$post->preview_image)}}" width="150" height="200" alt="{{asset('storage/'.$post->preview_image)}}">
                    </div>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="preview_image" class="custom-file-input"
                                   value="{{$post->preview_image}}">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                    @error('preview_image')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="w-50 form-group">
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}"
                                {{$post->category_id == $category->id ? 'selected' : ''}}
                            >{{$category->title}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="w-50 form-group">
                    <label>Tags</label>
                    <select name="tags[]" class="select2" multiple="multiple" data-placeholder="Select a State"
                            style="width: 100%;">
                        @foreach($tags as $tag)
                            <option
                                {{ in_array($tag->id, $post->tags->pluck('id')->toArray()) ? ' selected' : ''}}  value="{{$tag->id}}">{{$tag->title}}</option>
                        @endforeach
                    </select>
                    @error('tags')
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
