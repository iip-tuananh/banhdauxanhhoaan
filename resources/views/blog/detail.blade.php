@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/blog_article_style.scss.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/css/sidebar_style.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
@endsection
@section('content')
<div id="menu-overlay" class=""></div>
<section class="bread-crumb">
<span class="crumb-border"></span>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<ul class="breadcrumb">
			<li class="home">
				<a  href="{{route('home')}}" ><span >Trang chủ</span></a>						
				<span class="mr_lr">&nbsp;<i class="fa">/</i>&nbsp;</span>
			</li>
			<li >
				<a  href="{{route('allListBlog')}}"><span >Tin tức</span></a>	
				<span class="mr_lr">&nbsp;<i class="fa">/</i>&nbsp;</span>
			</li>
			<li><strong><span >{{languageName($blog_detail->title)}}</span></strong></li>
			</ul>
		</div>
	</div>
</div>
</section>
<section class="blogpage">
<div class="container article-wraper" itemscope itemtype="https://schema.org/Article">
	<div class="wrap_background_aside padding-top-0 margin-bottom-40 blog-main">
		<div class="row">
			<section class="right-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<article class="article-main">
				<div class="row">
					<div class="blog_left_base col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 order-xs-last order-sm-last order-md-last">
						<aside class="aside-item sidebar-category collection-category margin-bottom-20">
						<div class="aside-title">
							<h2 class="title-head margin-top-0 cate"><i class="fas fa-bars"></i><span>Danh mục tin tức</span></h2>
						</div>
						<div class="aside-content">
							<nav class="nav-category navbar-toggleable-md">
								<ul class="nav navbar-pills">
									<li class="nav-item iconh"><a class="nav-link a1" href="{{route('home')}}">Trang chủ
									</a>
									</li>
									<li class="nav-item iconh"><a class="nav-link a1" href="{{route('aboutUs')}}">Giới thiệu
									</a>
									</li>
									<li class="nav-item iconh">
									<a href="{{route('allProduct')}}" class="nav-link a1">Sản phẩm
									</a>
									@if (count($categoryhome) > 0)
									<i class="fa fa-caret-right"></i>
									<ul class="dropdown-menu">
										@foreach ($categoryhome as $cate)
										<li class="dropdown-submenu nav-item">
											<a class="nav-link" href="{{route('allListProCate', ['cate'=>$cate->slug])}}">{{languageName($cate->name)}}
											</a>
											@if (count($cate->typeCate) > 0)
											<i class="fa fa-caret-right"></i>
											<ul class="dropdown-menu">
												@foreach ($cate->typeCate as $type)
												<li class="nav-item lv3">
												<a class="nav-link" href="{{route('allListProType', ['cate'=>$type->cate_slug,'typeCate'=>$type->slug])}}">{{languageName($type->name)}}
												</a>
												</li>
												@endforeach
											</ul>
											@endif
										</li>
										@endforeach
									</ul>
									@endif
									</li>
									<li class="nav-item iconh">
									<a href="{{route('allListBlog')}}" class="nav-link a1">Tin tức
									</a>
									<i class="fa fa-caret-right"></i>
									<ul class="dropdown-menu">
										@foreach ($blogCate as $cate)
										<li class="nav-item">
											<a class="nav-link" href="{{route('listCateBlog', ['slug'=>$cate->slug])}}">{{languageName($cate->name)}}
											</a>
										</li>
										@endforeach
									</ul>
									</li>
									<li class="nav-item iconh"><a class="nav-link a1" href="{{route('lienHe')}}">Liên hệ
									</a>
									</li>
								</ul>
							</nav>
						</div>
						</aside>
					</div>
					<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
						<div class="article-details">
						<div class="article-image">
							<div class="news-datetime">
								<span>{{date('d', strtotime($blog_detail->created_at))}}</span>
								<p>Thg {{date('m', strtotime($blog_detail->created_at))}}</p>
							</div>
							<span>
								<picture>
									<source media="(max-width: 480px)" srcset="{{$blog_detail->image}}">
									<source media="(min-width: 481px) and (max-width: 767px)" srcset="{{$blog_detail->image}}">
									<source media="(min-width: 768px) and (max-width: 1023px)" srcset="{{$blog_detail->image}}">
									<source media="(min-width: 1024px) and (max-width: 1199px)" srcset="{{$blog_detail->image}}">
									<source media="(min-width: 1200px)" srcset="{{$blog_detail->image}}">
									<img class="img-fluid" src="{{$blog_detail->image}}" title="{{languageName($blog_detail->title)}}" alt="{{languageName($blog_detail->title)}}">
								</picture>
							</span>
						</div>
						<div class="content_item_blogs">
							<div class="blog_home_title margin-top-20 margin-bottom-10">
								<h1 class="news_home_content_short_info">
									{{languageName($blog_detail->title)}}
								</h1>
							</div>
							<div class="content_day_blog">
								<span class="time">
									{{date('d/m/Y', strtotime($blog_detail->created_at))}}
								</span>
							</div>
						</div>
						<div class="article-content">
							<div class="rte">
								{!!languageName($blog_detail->content)!!}
							</div>
						</div>
						<div class="social_pro">
							<div class="social-media" >
								<label>Share: </label>
								<a target="_blank" href="//www.facebook.com/sharer.php?u={{url()->current()}}" class="share-facebook" title="Chia sẻ lên Facebook">
								<i class="fab fa-facebook-f"></i>
								</a>
								<a target="_blank" href="//twitter.com/share?text={{languageName($blog_detail->title)}}&amp;url={{url()->current()}}" class="share-twitter" title="Chia sẻ lên Twitter">
								<i class="fab fa-twitter"></i>
								</a>
								<a target="_blank" href="//pinterest.com/pin/create/button/?url={{url()->current()}}&amp;media={{$blog_detail->image}}&amp;description={{languageName($blog_detail->title)}}" class="share-pinterest" title="Chia sẻ lên pinterest">
								<i class="fab fa-pinterest"></i>
								</a>
								<a target="_blank" href="//plus.google.com/share?url={{url()->current()}}" class="share-google" title="+1">
								<i class="fab fa-google"></i>
								</a>
							</div>
						</div>
						</div>
					</div>
				</div>
			</article>
			</section>
		</div>
	</div>
</div>
</section>
@endsection