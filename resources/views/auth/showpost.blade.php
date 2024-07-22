@extends('layouts.auth')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
@endsection
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Messages </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Messages</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tous les messages</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                                         
                <h4 class="card-title">Details de Post</h4>        
                <p><strong>Titre:</strong> {{ $post->title }}</p>
                <p><strong>Image:</strong>
                @if($post->gallery && !is_null($post->gallery->image))
                <img src="/images/posts/{{ $post->gallery->image }}"  style="width:50px;height:50px"  alt="image" />
                @else
                <img alt="No image available" />
                @endif        
                 </p>  
                <p><strong>Pages:</strong> {{$post->category->name}}</p>
                <p><strong>Etat:</strong>{{$post->is_publish== 1 ? 'Published' : 'Draft'}}</p>
                <p><strong>description:</strong>  {{strip_tags($post->description) }}</p>
                <p><strong>creé à:</strong> {{ $post->created_at->translatedFormat('d F Y') }}</p>
                 <a href="{{ url()->previous() }}">Retour</a>


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