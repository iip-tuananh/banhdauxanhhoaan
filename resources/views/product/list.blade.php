@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
<link href="{{asset('frontend/css/sidebar_style.scss.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/css/collection_style.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div id="menu-overlay" class=""></div>
<section class="awe-section-1">
   <section class="sectionslider">
         <div class="section home-slider">
            @foreach ($banners as $banner)
            <div class="items">
               <a href="{{$banner->link}}">
                  <picture>
                        <source 
                        media="(min-width: 1200px)"
                        srcset="{{url($banner->image)}}">
                        <source 
                        media="(min-width: 992px)"
                        srcset="{{url($banner->image)}}">
                        <source 
                        media="(min-width: 569px)"
                        srcset="{{url($banner->image)}}">
                        <source 
                        media="(min-width: 480px)"
                        srcset="{{url($banner->image)}}">
                        <img width="1920" height="747" src="{{url(''.$banner->image)}}" alt="Bánh đậu xanh"/>
                  </picture>
               </a>
            </div>
            @endforeach
         </div>
   </section>
</section>
<div class="section wrap_background">
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
                  <li><strong ><span> {{$title}}</span></strong></li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <div class="container ">
      <div class="bg_collection section">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center mb-3">
               <img style="max-width: 700px;" src="{{url('frontend/images/image.jpg')}}" alt="bg_collection">
            </div>
            <aside class="dqdt-sidebar sidebar left-content col-lg-3 col-md-12 col-sm-12">
               <div class="wrap_background_aside asidecollection">
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
                  <div class="section_best_sale aside-filter">
                     <div class="aside-item aside-mini-list-product">
                        <div class="left-content">
                           <div class="aside-title">
                              <h2 class="title-head" title="Sản phẩm nổi bật">
                                 <a href="#">Sản phẩm nổi bật</a>
                              </h2>
                           </div>
                        </div>
                        <div class="related-products">
                           <div class="product-mini-lists">
                              @foreach ($hotProduct as $product)
                              @php
                                 $img = json_decode($product->images);
                                 $discountPrice = $product->price - $product->price * ($product->discount / 100);
                              @endphp
                              <div class="products itemss">
                                 <div class="item_small">
                                    <div class="product-box-3 product-loop-3 product-loop-4 product-box-5">
                                       <div class="product-thumbnail">
                                          <a class="image_link display_flex" href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}">
                                          <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="{{url($img[0])}}" alt="{{languageName($product->name)}}">
                                          </a>
                                       </div>
                                       <div class="product-info a-left">
                                          <h3 class="product-name"><a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}">{{languageName($product->name)}}</a></h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </aside>
            <div class="main_container collection col-lg-9 col-md-12 col-sm-12">
               <div class="collectiontitle">
                  <h1 class="cat-heading">{{$title}}</h1>
               </div>
               <div class="category-products products">
                  <section class="products-view products-view-grid collection_reponsive list_hover_pro">
                     <div class="row">
                        @foreach ($list as $product)
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 product-col">
                           @include('layouts.product.item',['product'=>$product])
                        </div>
                        @endforeach
                     </div>
                  </section>
                  <div class="section pagenav a-center">
                     <nav class="clearfix relative nav_pagi w_100">
                        {{$list->links()}}
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection