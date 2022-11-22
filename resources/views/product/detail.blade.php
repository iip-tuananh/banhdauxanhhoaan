@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
$priceDiscount = $product->price - $product->price * ($product->discount / 100);
@endphp
{{url(''.$imgs[0])}}
@endsection
@section('css')
<link href="{{asset('frontend/css/product_style.scss.css')}}" rel="stylesheet" type="text/css" />
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
               <li>
                  <a class="changeurl"  href="{{route('allProduct')}}"><span >Sản phẩm</span></a>						
                  <span class="mr_lr">&nbsp;<i class="fa">/</i>&nbsp;</span>
               </li>
               <li><strong><span>{{languageName($product->name)}}</span></strong></li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="product details-main  f-left w_100" itemscope itemtype="https://schema.org/Product">
   <form enctype="multipart/form-data" data-cart-form id="add-to-cart-form" action="" method="post" class="form_background form-inline margin-bottom-0">
      <div class="container">
         <div class="section wrap-padding-15 wp_product_main">
            <div class="details-product section">
               <div class="row ">
                  <div class="product-detail-left product-images col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                     <div class="col_large_default large-image">
                        <a  href="{{$imgs[0]}}" data-rel="prettyPhoto[product-gallery]" >
                        <img class="checkurl img-responsive" id="img_01" src="{{$imgs[0]}}" alt="{{languageName($product->name)}}">
                        </a>
                        <div class="hidden">
                           @foreach ($imgs as $key=>$img)
                           @if ($key != 0)
                           <div class="item">
                              <a href="{{$img}}" title="{{languageName($product->name)}}" data-image="{{$img}}" data-zoom-image="{{$img}}"  data-rel="prettyPhoto[product-gallery]" >	
                              </a>
                           </div>
                           @endif
                           @endforeach
                        </div>
                     </div>
                     <div class="section owlthumb_relative_product_1 owl_nav_custome1">
                        <div id="gallery_02" class="owl-carousel owl-theme thumbnail-product thumb_product_details thumbdetail_modile_v1 not-thuongdq">
                           @foreach ($imgs as $img)
                           <div class="item">
                              <a href="javascript:void(0)"  data-zoom-image="{{$img}}">
                              <img class="lazyload" data-img="{{$img}}" src="{{$img}}" alt="{{languageName($product->name)}}">
                              </a>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 details-pro">
                     <h1 class="title-product">{{languageName($product->name)}}</h1>
                     <div class="fw w_100">
                        <div class="price-box">
                           @if ($product->price > 0 && $product->discount > 0)
                           <span class="special-price">
                              <span class="price product-price">{{number_format($priceDiscount,0,'','.')}}₫</span>
                           </span>
                           <!-- Giá Khuyến mại -->
                           <span class="old-price">
                              <del class="price product-price-old sale">{{number_format($product->price,0,'','.')}}₫</del>
                           </span>
                           <!-- Giá gốc -->
                           @elseif($product->price > 0 && $product->discount == 0)
                           <span class="special-price">
                              <span class="price product-price">{{number_format($product->price,0,'','.')}}₫</span>
                           </span>
                           @else
                           <span class="special-price">
                              <span class="price product-price">Liên hệ</span>
                           </span>
                           @endif
                        </div>
                        <div class="product-summary">
                           <div class="rte">
                              {!!languageName($product->description)!!}
                           </div>
                        </div>
                     </div>
                     <div class="form-product col-sm-12 col-lg-12 col-md-12 col-xs-12">
                        {{-- <div class="box-variant clearfix ">
                           <input type="hidden" name="variantId" value="4148204" />
                        </div>
                        <div class="form-group form_button_details margin-top-10">
                           <div class="form_product_content type1 ">
                              <div class="soluong soluong_type_1 show">
                                 <label>Số lượng</label>
                                 <div class="custom input_number_product custom-btn-number form-control">									
                                    <button class="btn_num num_1 button button_qty" onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro &gt; 1 ) result.value--;return false;" type="button"><i class="fa fa-minus"></i></button>
                                    <input type="text" id="qtym" name="quantity" value="1" maxlength="3" class="form-control prd_quantity " onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
                                    <button class="btn_num num_2 button button_qty" onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;" type="button"><i class="fa fa-plus"></i></button>
                                 </div>
                              </div>
                              <div class="button_actions clearfix">
                                 <button type="submit" class="btn btn_base btn_add_cart btn-cart add_to_cart">
                                 <span class="text_1">Mua ngay</span>
                                 </button>									
                              </div>
                           </div>
                        </div>
                        <div class="tagslist">
                           <label class="inline">TAGS: </label>
                           <a href="/search?query=tags:(Bát-sứ)" title="Bát sứ">Bát sứ</a>						
                        </div> --}}
                        <div class="social_pro">
                           <div class="social-media" data-permalink="{{url()->current()}}">
                              <label>Share: </label>
                              <a target="_blank" href="//www.facebook.com/sharer.php?u={{url()->current()}}" class="share-facebook" title="Chia sẻ lên Facebook">
                              <i class="fab fa-facebook-f"></i>
                              </a>
                              <a target="_blank" href="//twitter.com/share?text={{languageName($product->name)}}c&amp;url={{url()->current()}}" class="share-twitter" title="Chia sẻ lên Twitter">
                              <i class="fab fa-twitter"></i>
                              </a>
                              <a target="_blank" href="//pinterest.com/pin/create/button/?url={{url()->current()}}&amp;media=&amp;description={{languageName($product->name)}}c" class="share-pinterest" title="Chia sẻ lên pinterest">
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
            </div>
         </div>
      </div>
   </form>
   <section class="section sec_tab ">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="wrap_tab_ed">
                  <div class="row">
                     <div class="tab_h col-xs-12 col-lg-12 col-sm-12 col-md-12">
                        <div class="section bg_white">
                           <!-- Nav tabs -->
                           <div class="product-tab e-tabs not-dqtab">
                              <ul class="tabs tabs-title clearfix">
                                 <li class="tab-link" data-tab="tab-1">
                                    <h3><span>Thông tin sản phẩm</span></h3>
                                 </li>
                              </ul>
                              <div class="tab-float">
                                 <div id="tab-1" class="tab-content content_extab">
                                    <div class="rte product_getcontent">
                                       {!!languageName($product->content)!!}
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
   </section>
   <div class="container">
      <div class="section_wishlist section_prd_feature section margin-bottom-40">
         <div class="title_module a-left">
            <h2 class="bf_flower">
               <a href="#" title="Sản phẩm liên quan">Sản phẩm liên quan</a>
            </h2>
         </div>
         <div class="owl_product_news slick_wishlist">
            @foreach ($productlq as $pro)
               @if ($product->id != $pro->id)
                  <div class="item">
                     @include('layouts.product.item', ['product'=>$pro])
                  </div>
               @endif
            @endforeach
         </div>
      </div>
   </div>
</section>
<script>
   $(document).ready(function (e) {
      $('.slick_wishlist').slick({
         autoplay: true,
         autoplaySpeed: 5000,
         dots: false,
         arrows: false,
         infinite: true,
         speed: 300,
         rows: 1,
         loop: false,
         infinite:false,
         slidesToShow: 4,
         slidesToScroll: 4,
         responsive: [
            {
               breakpoint: 1200,
               settings: {
                  slidesToShow: 4,
                  slidesToScroll: 4
               }
            },
            {
               breakpoint: 1024,
               settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3
               }
            },
            {
               breakpoint: 991,
               settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3
               }
            },
            {
               breakpoint: 767,
               settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
               }
            }
         ]
      });
      var wDW = $(window).width();
   
      $("#gallery_02").slick({
         autoplay: true,
         autoplaySpeed: 6000,
         dots: false,
         arrows: false,
         infinite: true,
         speed: 300,
         slidesToShow: 4,
         slidesToScroll: 4
      });
   
      $('#gallery_02 img, .swatch-element label').click(function(e){
         e.preventDefault();
         var ths = $(this).attr('data-img');
         $('.large-image .checkurl').attr('src', ths);
   
         $('.large-image .checkurl img').attr('src', ths);
   
         /*** xử lý active thumb -- ko variant ***/
         var thumbLargeimg = $('.details-product .large-image a').attr('href');
         var thumMedium = $('#gallery_02 .owl-item .item a').find('img').attr('src');
         var url = [];
   
         $('#gallery_02 .owl-item .item').each(function(){
            var srcImg = '';
            $(this).find('a img').each(function(){
               var current = $(this);
               if(current.children().size() > 0) {return true;}
               srcImg += $(this).attr('src');
            });
            url.push(srcImg);
            var srcimage = $(this).find('a img').attr('src');
            if (srcimage == thumbLargeimg) {
               $(this).find('a').addClass('active');
            } else {
               $(this).find('a').removeClass('active');
            }
         });
      })
   
   });
   
   
   
</script>
@endsection