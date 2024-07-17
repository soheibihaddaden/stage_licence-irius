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
                                <p>{!!Str::limit(html_entity_decode($post->description),200)!!} </p>
                                <a href="{{route('website.posts.show',$post->id)}}" class="btn btn-main">Lire la suite</a>
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
		<h4 class="widget-title">Latest Posts</h4>
		<div class="media">
			<a class="pull-left" href="blog-single.html">
				<img class="media-object" src="images/blog/post-thumb.jpg" alt="Image">
			</a>
			<div class="media-body">
				<h4 class="media-heading"><a href="blog-single.html">Introducing Swift for Mac</a></h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, officia.</p>
			</div>
		</div>
		<div class="media">
			<a class="pull-left" href="blog-single.html">
				<img class="media-object" src="images/blog/post-thumb-2.jpg" alt="Image">
			</a>
			<div class="media-body">
				<h4 class="media-heading"><a href="blog-single.html">Welcome to Themefisher Family</a></h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, officia.</p>
			</div>
		</div>
		<div class="media">
			<a class="pull-left" href="blog-single.html">
				<img class="media-object" src="images/blog/post-thumb-3.jpg" alt="Image">
			</a>
			<div class="media-body">
				<h4 class="media-heading"><a href="blog-single.html">Warm welcome from swift</a></h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, officia.</p>
			</div>
		</div>
		<div class="media">
			<a class="pull-left" href="blog-single.html">
				<img class="media-object" src="images/blog/post-thumb-4.jpg" alt="Image">
			</a>
			<div class="media-body">
				<h4 class="media-heading"><a href="blog-single.html">Introducing Swift for Mac</a></h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, officia.</p>
			</div>
		</div>
	</div>
	<!-- End Latest Posts -->

	<!-- Widget Category -->
	<div class="widget widget-category">
		<h4 class="widget-title">Categories</h4>
		<ul class="widget-category-list">
	        <li><a href="#">Animals</a>
	        </li>
	        <li><a href="#">Landscape</a>
	        </li>
	        <li><a href="#">Portrait</a>
	        </li>
	        <li><a href="#">Wild Life</a>
	        </li>
	        <li><a href="#">Video</a>
	        </li>
	    </ul>
	</div> <!-- End category  -->

	<!-- Widget tag -->
	<div class="widget widget-tag">
		<h4 class="widget-title">Tag Cloud</h4>
		<ul class="widget-tag-list">
	        <li><a href="#">Animals</a>
	        </li>
	        <li><a href="#">Landscape</a>
	        </li>
	        <li><a href="#">Portrait</a>
	        </li>
	        <li><a href="#">Wild Life</a>
	        </li>
	        <li><a href="#">Video</a>
	        </li>
	    </ul>
	</div> <!-- End tag  -->


</aside>
      		</div>
		</div>
	</div>
</div>

@endsection




















