@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<section class="awe-section-1">
   <section class="sectionslider">
         <div class="section home-slider">
            @foreach ($banners as $banner)
            <div class="items">
               <a href="{{$banner->link}}">
                  <picture>
                        <source 
                        media="(min-width: 1200px)"
                        srcset="{{$banner->image}}">
                        <source 
                        media="(min-width: 992px)"
                        srcset="{{$banner->image}}">
                        <source 
                        media="(min-width: 569px)"
                        srcset="{{$banner->image}}">
                        <source 
                        media="(min-width: 480px)"
                        srcset="{{$banner->image}}">
                        <img width="1920" height="747" src="{{$banner->image}}" alt="Bánh đậu xanh"/>
                  </picture>
               </a>
            </div>
            @endforeach
         </div>
   </section>
</section>
<section class="awe-section-2">
   <section class="section_pro_policy">
         <div class="section_product_news">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 bg_white">
                     <div class="section_title_base">
                     <h2 class="title_modules">
                        <a href="#" title="Sản nổi bật">Sản nổi bật</a>
                     </h2>
                     </div>
                     <div class="section owl_nav_custome2 section_content">
                     <div class="owl_product_news Slickowl slick_margin">
                        @foreach ($homeProduct as $product)
                           @include('layouts.product.item', ['product'=>$product])
                        @endforeach
                     </div>
                     </div>
               </div>
            </div>
         </div>
         </div>
         <div class="section_policy lazyload" data-src="">
         <div class="container">
            <div class="row">
               <div class="col-xs-12 col-sm-6 col-lg-6">
                     <div class="box-info-pro text-xs-center text-sm-left">
                        <h4>Giới thiệu</h4>
                        <h3>{{$setting->company}}</h3>
                        <div>
                           {!!$aboutUs->description!!}
                        </div>
                     </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-lg-6">
                     <div class="box-info-pro text-xs-center text-sm-left">
                     <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$aboutUs->image}}" alt="giới thiệu">
                     </div>
               </div>
            </div>
         </div>
         </div>
   </section>
</section>
{{-- <section class="awe-section-3">
   <div class="section_product_sale lazyload" data-src="//bizweb.dktcdn.net/100/091/139/themes/880352/assets/bg_sec_pro_sale.jpg?1665384631842">
         <div class="container">
         <div class="row">
            <div class="col-lg-12 bg_white">
               <div class="section_title_base">
                     <h2 class="title_modules">
                     <a href="/san-pham-noi-bat" title="Sản phẩm khuyến mãi">Sản phẩm khuyến mãi</a>
                     </h2>
               </div>
               <div class="section owl_nav_custome2 section_content">
                     <div class="owl_product_news Slickowl2 slick_margin">
                     <div class="item_product_main">
                        <div class="product-loop-base product-loop-big">
                           <div class="product-thumbnail">
                                 <a class="image_link display_flex" href="/dung-cu-cat-dua-hau-dcti01" title="Dụng cụ cắt dưa hấu - DCTI01">
                                 <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/091/139/products/dung-cu-cat-dua-hau-1m4g3-dmcymx-simg-d0daf0-800x1200-max-min.jpg?v=1469238355000" alt="Dụng cụ cắt dưa hấu - DCTI01">
                                 </a>
                                 <div class="product-action clearfix hidden-xs">
                                 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-3216777" enctype="multipart/form-data">
                                    <div class="group_action">
                                       <input type="hidden" name="variantId" value="4858510" />
                                       <button class="btn-buy btn-cart btn btn-circle left-to add_to_cart" title="Đặt hàng ngay">
                                       <i class="fas fa-shopping-basket"></i>
                                       </button>
                                       <a title="Xem nhanh" href="/dung-cu-cat-dua-hau-dcti01" data-handle="dung-cu-cat-dua-hau-dcti01" class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                       <i class="far fa-eye"></i>
                                       </a>
                                    </div>
                                 </form>
                                 </div>
                           </div>
                           <div class="product-info a-left">
                                 <h3 class="product-name"><a href="/dung-cu-cat-dua-hau-dcti01" title="Dụng cụ cắt dưa hấu - DCTI01">Dụng cụ cắt dưa hấu - DCTI01</a></h3>
                                 <div class="product-hideoff">
                                 <div class="product-hide">
                                    <div class="price-box clearfix">
                                       <div class="special-price">
                                             <span class="price product-price">120.000₫</span>
                                       </div>
                                    </div>
                                 </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <div class="item_product_main">
                        <div class="product-loop-base product-loop-big">
                           <div class="product-thumbnail">
                                 <a class="image_link display_flex" href="/coi-gia-thuc-pham" title="Cối giã thực phẩm">
                                 <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/091/139/products/imgpro1-bf486609-5b9f-4774-9cd1-3823f8583631.jpg?v=1464079849767" alt="Cối giã thực phẩm">
                                 </a>
                                 <div class="product-action clearfix hidden-xs">
                                 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-2767876" enctype="multipart/form-data">
                                    <div class="group_action">
                                       <input type="hidden" name="variantId" value="4148216" />
                                       <button class="btn-buy btn-cart btn btn-circle left-to add_to_cart" title="Đặt hàng ngay">
                                       <i class="fas fa-shopping-basket"></i>
                                       </button>
                                       <a title="Xem nhanh" href="/coi-gia-thuc-pham" data-handle="coi-gia-thuc-pham" class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                       <i class="far fa-eye"></i>
                                       </a>
                                    </div>
                                 </form>
                                 </div>
                           </div>
                           <div class="product-info a-left">
                                 <h3 class="product-name"><a href="/coi-gia-thuc-pham" title="Cối giã thực phẩm">Cối giã thực phẩm</a></h3>
                                 <div class="product-hideoff">
                                 <div class="product-hide">
                                    <div class="price-box clearfix">
                                       <div class="special-price">
                                             <span class="price product-price">250.000₫</span>
                                       </div>
                                    </div>
                                 </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <div class="item_product_main">
                        <div class="product-loop-base product-loop-big">
                           <div class="product-thumbnail">
                                 <a class="image_link display_flex" href="/thot-go-ichigo-ig-4942" title="Thớt gỗ Ichigo IG-4942">
                                 <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/091/139/products/imgpro2.jpg?v=1464079848350" alt="Thớt gỗ Ichigo IG-4942">
                                 </a>
                                 <div class="product-action clearfix hidden-xs">
                                 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-2767875" enctype="multipart/form-data">
                                    <div class="group_action">
                                       <input class="hidden" type="hidden" name="variantId" value="4849623" />
                                       <button class="btn btn-cart btn btn-circle left-to btn_tuychon" title="Tùy chọn" type="button" onclick="window.location.href='/thot-go-ichigo-ig-4942'" >
                                       <i class="fas fa-cog"></i>
                                       </button>
                                       <a title="Xem nhanh" href="/thot-go-ichigo-ig-4942" data-handle="thot-go-ichigo-ig-4942" class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                       <i class="far fa-eye"></i>
                                       </a>
                                    </div>
                                 </form>
                                 </div>
                           </div>
                           <div class="product-info a-left">
                                 <h3 class="product-name"><a href="/thot-go-ichigo-ig-4942" title="Thớt gỗ Ichigo IG-4942">Thớt gỗ Ichigo IG-4942</a></h3>
                                 <div class="product-hideoff">
                                 <div class="product-hide">
                                    <div class="price-box clearfix">
                                       <div class="special-price">
                                             <span class="price product-price">129.000₫</span>
                                       </div>
                                    </div>
                                 </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <div class="item_product_main">
                        <div class="product-loop-base product-loop-big">
                           <span class="saleright ">
                           -
                           11% 
                           </span>
                           <div class="product-thumbnail">
                                 <a class="image_link display_flex" href="/ong-dung-h11xdia13-5" title="Ống đựng H11xDia13.5">
                                 <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/091/139/products/12a.png?v=1464079838523" alt="Ống đựng H11xDia13.5">
                                 </a>
                                 <div class="product-action clearfix hidden-xs">
                                 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-2767865" enctype="multipart/form-data">
                                    <div class="group_action">
                                       <input type="hidden" name="variantId" value="4148191" />
                                       <button class="btn-buy btn-cart btn btn-circle left-to add_to_cart" title="Đặt hàng ngay">
                                       <i class="fas fa-shopping-basket"></i>
                                       </button>
                                       <a title="Xem nhanh" href="/ong-dung-h11xdia13-5" data-handle="ong-dung-h11xdia13-5" class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                       <i class="far fa-eye"></i>
                                       </a>
                                    </div>
                                 </form>
                                 </div>
                           </div>
                           <div class="product-info a-left">
                                 <h3 class="product-name"><a href="/ong-dung-h11xdia13-5" title="Ống đựng H11xDia13.5">Ống đựng H11xDia13.5</a></h3>
                                 <div class="product-hideoff">
                                 <div class="product-hide">
                                    <div class="price-box clearfix">
                                       <div class="special-price">
                                             <span class="price product-price">89.000₫</span>
                                       </div>
                                       <div class="old-price">															 
                                             <span class="price product-price-old">
                                             100.000₫			
                                             </span>
                                       </div>
                                    </div>
                                 </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     </div>
               </div>
            </div>
         </div>
         </div>
   </div>
</section> --}}
<section class="awe-section-4">
   <section class="section_tab_allproduct">
         <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="section_title_base">
                     <h2 class="title_modules">
                     <a href="{{route('allProduct')}}" title="Tất cả sản phẩm">Tất cả sản phẩm</a>
                     </h2>
               </div>
               <div class="section tabwrap not-dqtab e-tabs ajax-tab-1" data-section="ajax-tab-1">
                     <div class="section uwrap_tab">
                     <div class="tab-content tab-1">
                        <div class="content_module">
                           <div class="wrap_content contentfill">
                                 <div class="slick_margin slick_product slicktwo_frist ajax-carousel">
                                    @foreach ($allProduct as $product)
                                       <div class="item">
                                          @include('layouts.product.item', ['product'=>$product])
                                       </div>
                                    @endforeach
                                 </div>
                                 <div class="xemthem_btn">
                                 <a href="{{route('allProduct')}}" class="btn-more" title="Xem thêm">Xem thêm
                                 </a>
                                 </div>
                           </div>
                        </div>
                     </div>
                     </div>
               </div>
            </div>
         </div>
         </div>
   </section>
</section>
@if (isset($bannerAds))
<section class="awe-section-5">
   <section class="section_feedback lazyload" data-src="{{$bannerAds->image}}">
         {{-- <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="section_title_base">
                     <h2 class="title_modules">
                     <span>Ý kiến khách hàng</span>
                     </h2>
               </div>
               <div class="owltesti">
                     <div class="items">
                     <div class="item dgwrap current" data-text="Là đơn vị bán hàng online, tôi rất hài lòng với giao diện của Bizweb, Love Kitchen thu hút được rất nhiều khách hàng. Cảm ơn đội ngũ chăm sóc khách hàng tận tình và luôn tư vấn, giới thiệu cho Love Kitchen những tính năng mới..">
                        <div class="right">
                           <p>
                                 Là đơn vị bán hàng online, tôi rất hài lòng với giao diện của Bizweb, Love Kitchen thu hút được rất nhiều khách hàng. Cảm ơn đội ngũ chăm sóc khách hàng tận tình và luôn tư vấn, giới thiệu cho Love Kitchen những tính năng mới..
                           </p>
                        </div>
                     </div>
                     </div>
                     <div class="items">
                     <div class="item dgwrap " data-text="Là đơn vị bán hàng online, tôi rất hài lòng với giao diện của Bizweb, Love Kitchen thu hút được rất nhiều khách hàng. Cảm ơn đội ngũ chăm sóc khách hàng tận tình và luôn tư vấn, giới thiệu cho Love Kitchen những tính năng mới..">
                        <div class="right">
                           <p>
                                 Là đơn vị bán hàng online, tôi rất hài lòng với giao diện của Bizweb, Love Kitchen thu hút được rất nhiều khách hàng. Cảm ơn đội ngũ chăm sóc khách hàng tận tình và luôn tư vấn, giới thiệu cho Love Kitchen những tính năng mới..
                           </p>
                        </div>
                     </div>
                     </div>
                     <div class="items">
                     <div class="item dgwrap " data-text="Là đơn vị bán hàng online, tôi rất hài lòng với giao diện của Bizweb, Love Kitchen thu hút được rất nhiều khách hàng. Cảm ơn đội ngũ chăm sóc khách hàng tận tình và luôn tư vấn, giới thiệu cho Love Kitchen những tính năng mới..">
                        <div class="right">
                           <p>
                                 Là đơn vị bán hàng online, tôi rất hài lòng với giao diện của Bizweb, Love Kitchen thu hút được rất nhiều khách hàng. Cảm ơn đội ngũ chăm sóc khách hàng tận tình và luôn tư vấn, giới thiệu cho Love Kitchen những tính năng mới..
                           </p>
                        </div>
                     </div>
                     </div>
               </div>
            </div>
         </div>
         </div> --}}
   </section>
</section>
@endif
<section class="awe-section-6">
   <section class="section_blog">
         <div class="container">
         <h2 class="title_modules_2">
            <a href="{{route('allListBlog')}}" title="Tin tức">Tin tức</a>
         </h2>
         <div class="section">
            <div class="slickblog owl-blog slick_margin">
               @foreach ($homeBlog as $blog)
               <div class="blocg_item">
                     <div class="blogwp">
                     <div class="news-datetime">
                        <span>{{date('d', strtotime($blog->created_at))}}</span>
                        <p>Thg {{date('m', strtotime($blog->created_at))}}</p>
                     </div>
                     <a class="image-blog" href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">
                     <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$blog->image}}"  alt="{{languageName($blog->title)}}">
                     </a>
                     <div class="content_blog">
                        <h3>
                           <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a>
                        </h3>
                        <p class="justify desc"> {{languageName($blog->description)}}</p>
                        <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" class="btn btn-style btn-readmore" title="Đọc thêm">Đọc thêm <i class="fas fa-arrow-right"></i></a>
                     </div>
                     </div>
               </div>
               @endforeach
            </div>
         </div>
         </div>
   </section>
</section>
@endsection