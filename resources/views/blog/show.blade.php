@extends('layouts.app')

@section('title')
    Blog Details | Easy Online Shop
@endsection

@section('content')

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Blog Details</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="row">
			<div class="blog-page">
				<div class="col-md-9">
					<div class="blog-post wow fadeInUp">
	<img class="img-responsive" src="{{ asset('uploads/blog/' . $blog->image) }}" alt="">
	<h1>
        {{ session()->get('language') == 'Hindi' ? $blog->title_hin : $blog->title_en }}
    </h1>
	<span class="author">John Doe</span>
	<span class="review">7 Comments</span>
	<span class="date-time">{{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</span>
	<div class="addthis_inline_share_toolbox"></div>
	<p>
        {!! session()->get('language') == 'Hindi' ? $blog->description_hin : $blog->description_en !!}   
    </p>
	<div class="">
		<span>share post:</span>
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
        <div class="addthis_inline_share_toolbox"></div>
    </div>


	<div class="row">
		<div class="col-md-12">
			<h3 class="title-review-comments">{{ count($comments) }} comments</h3>
		</div>

		@foreach($comments as $comment)
		<div class="col-md-2 col-sm-2">
			<img src="{{ asset('uploads/user/' . $comment->user->profile_photo_path) }}" alt="Responsive image" class="img-rounded img-responsive">
		</div>
		<div class="col-md-10 col-sm-10 blog-comments outer-bottom-xs">
			<div class="blog-comments inner-bottom-xs">
				<h4>{{ $comment->user->name }}</h4>
				<p>{{ $comment->comment }}</p>
			</div>
		</div>
		@endforeach
	</div>

</div>



@auth
	<div class="blog-write-comment outer-bottom-xs outer-top-xs">
		<div class="row">
			<div class="col-md-12">
				<h4>Leave A Comment</h4>
			</div>
			{{-- <div class="col-md-4">
				<form class="register-form" role="form">
					<div class="form-group">
					<label class="info-title" for="exampleInputName">Your Name <span>*</span></label>
					<input type="email" class="form-control unicase-form-control text-input" id="exampleInputName" placeholder="">
				</div>
				</form>
			</div>
			<div class="col-md-4">
				<form class="register-form" role="form">
					<div class="form-group">
					<label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
					<input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="">
				</div>
				</form>
			</div>
			<div class="col-md-4">
				<form class="register-form" role="form">
					<div class="form-group">
					<label class="info-title" for="exampleInputTitle">Title <span>*</span></label>
					<input type="email" class="form-control unicase-form-control text-input" id="exampleInputTitle" placeholder="">
				</div>
				</form>
			</div> --}}
			<form class="register-form" role="form" method="POST" action="{{ route('comments.store', $blog->id) }}">
				@csrf
				<div class="col-md-12">
					<div class="form-group">
						<label class="info-title" for="exampleInputComments">Your Comments <span>*</span></label>
						<textarea class="form-control unicase-form-control" id="comment" name="comment" required></textarea>
					</div>
				</div>
				<div class="col-md-12 outer-bottom-small m-t-20">
					<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Submit Comment</button>
				</div>
			</form>
	</div>
	</div>
@endauth
				</div>
				<div class="col-md-3 sidebar">
                
                
                
					<div class="sidebar-module-container">
						{{-- <div class="search-area outer-bottom-small">
    <form>
        <div class="control-group">
            <input placeholder="Type to search" class="search-field">
            <a href="#" class="search-button"></a>   
        </div>
    </form>
</div>		 --}}

<div class="home-banner outer-top-n outer-bottom-xs">
<img src="{{ asset('frontend/images/banners/LHS-banner.jpg') }}" alt="Image">
</div>
				<!-- ==============================================CATEGORY============================================== -->
                <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
                    <h3 class="section-title">Category</h3>
                    <div class="sidebar-widget-body m-t-10">
                        <div class="accordion">

                            @foreach($blogCategories as $blogCategory)
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="{{ route('blog.category', $blogCategory->id) }}">
                                        {{ session()->get('language') == 'Hindi' ? $blogCategory->name_hin : $blogCategory->name_en }}
                                    </a>
                                </li>
                            </ul>
                            @endforeach

                        </div><!-- /.accordion -->
                    </div><!-- /.sidebar-widget-body -->
                </div><!-- /.sidebar-widget -->
	<!-- ============================================== CATEGORY : END ============================================== -->				

	</div>
</div>
						<!-- ============================================== PRODUCT TAGS ============================================== -->

<!-- ============================================== PRODUCT TAGS : END ============================================== -->					
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-61c854b2571e42ee"></script>

@endsection