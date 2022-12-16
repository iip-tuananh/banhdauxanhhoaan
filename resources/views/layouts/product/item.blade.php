
@php
$img = json_decode($product->images);
$discountPrice = $product->price - $product->price * ($product->discount / 100);
@endphp
<div class="item_product_main">
<div class="product-loop-base">
      <div class="product-thumbnail">
      <a class="image_link display_flex" href="{{route('detailProduct',['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}">
      <img class="lazyload zoom" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="{{url($img[0])}}" alt="{{languageName($product->name)}}">
      </a>
      </div>
      <div class="product-info a-left">
      <h3 class="product-name"><a href="{{route('detailProduct',['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}">{{languageName($product->name)}}</a></h3>
      </div>
</div>
</div>
