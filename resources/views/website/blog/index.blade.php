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
                                <a href="#">
                                    <img src="/images/posts/{{$post->gallery->image}}" alt="" style="width:70%;height:70%">
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
                         <p>{!!Str::limit(html_entity_decode($post->description),200)!!}</p>  
                        <a href="{{route('website.posts.show',$post->id)}}" class="btn btn-main">Lire la Suite</a>
                        </div>

                </div>

                
                @endforeach

				<div class="d-flex custom-pagination">
                      {{ $posts->links('vendor.pagination.bootstrap-5') }}
                </div>

 

                       

      		</div>
      		<div class="col-md-4">
				<aside class="sidebar">
	<!-- Widget Latest Posts -->
	<div class="widget widget-latest-post">
		<h4 class="widget-title">dernières publications</h4>
     
		@if(count($latestposts))
		
			@foreach($latestposts as $post)
			<div class="media">
			@if($post->gallery && $post->gallery->image)
			<a class="pull-left" href="{{route('website.posts.show',$post->id)}}">
				<img class="media-object" src="/images/posts/{{$post->gallery->image}}" alt="">
			</a>            
			@endif
		
			<div class="media-body">
				<h4 class="media-heading"><a href="{{route('website.posts.show',$post->id)}}">{{$post->title}}</a></h4>
				<p>{!!Str::limit(html_entity_decode($post->description),15)!!}</p>
			</div>
		    <hr>
			</div>
			@endforeach
		@else
		<h4 class="text-center text-danger">"Aucune Publication</h4>
		@endif
		

	</div>
	<!-- End Latest Posts -->



	





</aside>
      		</div>
		</div>
	</div>
</div>


@endsection




















