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
@endsection