@extends('layouts.website')

@section('content')

<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
        		@foreach($posts as $post)
                <div class="post">
                            <div class="post-media post-thumb">
                            @if($post->gallery && $post->gallery->image)
                                <a href="blog-single.html">
                                    <img src="/images/posts/{{$post->gallery->image}}" alt="" style="width:70%">
                                </a>
                                @endif
                            </div>
                            <h3 class="post-title"><a href="#">{{$post->title}}</a></h3>
                            <div class="post-meta">
                                <ul>
                                <li>
                                    <i class="ion-calendar"></i> {{$post->created_at}}
                                </li>
                                
                                </ul>
                            </div>

                            <div class="post-content">
                                <p>{!!Str::limit($post->description,200)!!} </p>
                                <a href="{{route('website.posts.show',$post->id)}}" class="btn btn-main">Lire la suite</a>
                            </div>

                </div>

                @endforeach
                 
                <div class="d-flex custom-pagination">
                      {{ $posts->links('vendor.pagination.bootstrap-5') }}
                </div>





@endsection




















