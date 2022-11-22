
@php
$img = json_decode($product->images);
$discountPrice = $product->price - $product->price * ($product->discount / 100);
@endphp
<div class="item_product_main">
   <div class="product-loop-base">
      @if ($product->discount > 0)
      <span class="saleright ">
      -
      {{$product->discount}}% 
      </span>
      @endif
         <div class="product-thumbnail">
         <a class="image_link display_flex" href="{{route('detailProduct',['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}">
         <img class="lazyload zoom" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="{{$img[0]}}" alt="{{languageName($product->name)}}">
         </a>
         {{-- <div class="product-action clearfix hidden-xs">
            <form action="/cart/add" method="post" data-cart-form class="variants form-nut-grid" data-id="product-actions-2767865" enctype="multipart/form-data">
               <div class="group_action">
                     <input type="hidden" name="variantId" value="4148191" />
                     <button class="btn-buy btn-cart btn btn-circle left-to add_to_cart" title="Đặt hàng ngay">
                     <i class="fas fa-shopping-basket"></i>
                     </button>
                     <a title="Xem nhanh" href="{{route('detailProduct',['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" data-handle="ong-dung-h11xdia13-5" class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                     <i class="far fa-eye"></i>
                     </a>
               </div>
            </form>
         </div> --}}
         </div>
         <div class="product-info a-left">
         <h3 class="product-name"><a href="{{route('detailProduct',['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}">{{languageName($product->name)}}</a></h3>
         <div class="product-hideoff">
            <div class="product-hide">
               <div class="price-box clearfix">
                  @if ($product->price > 0 && $product->discount > 0)
                     <div class="special-price">
                     <span class="price product-price">{{number_format($discountPrice,0,'','.')}}₫</span>
                     </div>
                     <div class="old-price">															 
                     <span class="price product-price-old">
                     {{number_format($product->price,0,'','.')}}₫			
                     </span>
                     </div>
                  @elseif($product->price > 0 && $product->discount == 0)
                     <div class="special-price">
                     <span class="price product-price">{{number_format($product->price,0,'','.')}}₫</span>
                     </div>
                  @else
                     <div class="special-price">
                     <span class="price product-price">Liên hệ</span>
                     </div>
                  @endif
               </div>
            </div>
         </div>
         </div>
   </div>
</div>
