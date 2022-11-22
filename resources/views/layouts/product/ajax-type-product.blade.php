<div class="row">
    @foreach ($products as $product)
    <div class="col-md-3">
        @include('layouts.product.item', ['product'=>$product])
    </div>
    @endforeach
</div>