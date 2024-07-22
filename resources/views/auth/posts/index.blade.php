@extends('layouts.auth')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
@endsection
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Posts </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Posts</a></li>
                  <li class="breadcrumb-item active" aria-current="page">All Posts</li>
                </ol>
              </nav>
            </div>
            <div class="row">


              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  @if(count($posts)>0) 
                  <h4 class="card-title">Post</h4>
                 
                    <table id="posts-table" class="table table-striped">
                      <thead>
                        <tr>
                          <th>Image </th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Category</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($posts as $post)
                         <tr>
                          
                         <td class="py-1">
                          @if($post->gallery && !is_null($post->gallery->image))
                          <img src="/images/posts/{{ $post->gallery->image }}"  style="width:50px;height:50px"  alt="image" />
                          @else
                          <img alt="No image available" />
                          @endif
                         </td>


                          <td> 
                            {{$post->title}}
                          </td>

                          <td>
                          {{Str::limit(strip_tags($post->description), 15) }}

                          </td>

                          <td> {{$post->category->name}}</td>
                         
                          <td> {{$post->is_publish== 1 ? 'Published' : 'Draft'}}</td>
                         
                          <td>
                        
                          <div class="d-flex align-items-center">
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-success mr-1">
                    <i class="fa-solid fa-eye"></i>
                </a>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-info mr-1">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');" class="m-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </div>


                        </td>
                        </tr>
                         @endforeach
                      </tbody>
                    </table>
                    @else 
                    <h3 class="text-center text-danger">No Posts found</h3>
                    @endif

                  </div>
                </div>
              </div>


            </div>
          </div>

@endsection

@section('scripts')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

<script>

$(document).ready( function () {
    $('#posts-table').DataTable();
} );


  </script>
@endsection