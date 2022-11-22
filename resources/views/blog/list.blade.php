@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
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
               <li><strong ><span>{{$title_page}}</span></strong></li>
            </ul>
         </div>
      </div>
   </div>
</section>
<div class="blog_wrapper" itemscope itemtype="https://schema.org/Blog">
   <div class="container">
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
         <div class="right-content col-xl-9 col-lg-9 col-md-12 margin-top-0">
            <h1>{{$title_page}}</h1>
            <div class="content_blog_new list-blogs blog-main">
               @foreach ($blogs as $blog)
               <div class="blogwp blog_page">
                  <a class="image-blog" href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">
                  <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$blog->image}}"  alt="{{languageName($blog->title)}}">
                  </a>
                  <div class="content_blog">
                     <h3>
                        <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a>
                     </h3>
                     <span class="time">
                     {{date('d/m/Y', strtotime($blog->created_at))}}
                     </span>
                     <p class="justify"> {{languageName($blog->description)}}</p>
                     <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" class="btn btn-style btn-readmore" title="Đọc thêm">Đọc thêm <i class="fas fa-book"></i></a>
                  </div>
               </div>
               @endforeach
            </div>
            <div class="col-xs-12 text-right">
               <div class="paginate">
                  {{$blogs->links()}}
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="ab-module-article-mostview"></div>
@endsection