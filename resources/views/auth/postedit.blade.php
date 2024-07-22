@extends('layouts.auth')

@section('title' , 'Edit Post')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection


@section('content')
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Posts</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('posts.index')}}">Posts</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Post</li>
                </ol>
              </nav>
            </div>
            
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Post</h4>
                    
                    @if ($errors->any())
                      <div class="alert alert-danger">
                           <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                     </div>
                    @endif

                    <h1>Edit Post</h1>
    <form method="POST" action="{{ route('posts.update', $post->id) }}" class="forms-sample" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ old('title', $post->title) }}" required>
        </div>

        <div class="form-group">
            <label>Pages</label>
            <select name="category" class="form-control" required>
                <option disabled selected>Choose Option</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category', $post->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Published</label>
            <select name="is_publish" class="form-control">
                <option disabled selected>Choose Option</option>
                <option value="1" {{ old('is_publish', $post->is_publish) == 1 ? 'selected' : '' }}>Publish</option>
                <option value="0" {{ old('is_publish', $post->is_publish) == 0 ? 'selected' : '' }}>Draft</option>
            </select>
        </div>

        <div class="form-group">
            <label>File upload</label>
            <input type="file" name="file" class="form-control">
            @if($post->image)
                <img src="{{ asset('images/posts/' . $post->image) }}" alt="Current Image" style="width: 100px; height: auto;">
            @endif
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea id="summernote" name="description" class="form-control" cols="30" rows="10">{{ old('description', $post->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
    </form>
                  
           
</div>
                </div>
              </div>

            </div>
          </div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
$(document).ready(function() {
  $('#summernote').summernote();
});

</script>



@endsection