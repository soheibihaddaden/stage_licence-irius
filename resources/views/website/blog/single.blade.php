@extends('layouts.website')

@section('content')

>

<section class="page-wrapper">	
<button onclick="history.back()" class="btn-return">Retour</button>
<div class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="post post-single">
					<h2 class="post-title">{{$post? $post->title:''}}</h2>
					<div class="post-meta">
			            <ul>
			              <li>
			                <i class="ion-calendar"></i> {{$post->created_at}}
			              </li>
			    			              
			            </ul>
		          	</div>
					<div class="post-thumb">
                        @if($post->gallery && $post->gallery->image)
                        <img src="/images/posts/{{$post->gallery->image}}" alt="" style="width:90%">
                        @endif
					</div>

					<div class="post-content post-excerpt">
	                     	    
                    <p><b>Description:</b>{!!$post->description!!}</p>
                    
                    </div>

	

				</div>

			</div>
		</div>
	</div>
</section>



@endsection