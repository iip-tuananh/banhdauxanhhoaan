@extends('layouts.main.master')
@section('title')
Kết quả tìm kiếm
@endsection
@section('description')
Đã tìm thấy {{$countproduct}} kết quả phù hợp cho từ khóa "{{$keyword}}"
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('content')
<div id="page-wrapper">
	<div class="container">
	<div class="">
		<div id="page">
			<div id="content-center" class="">
				<div class="wrap-all-product">
				<div class="row">
					<div class="title-global">
						<h2>Đã tìm thấy {{$countproduct}} kết quả phù hợp</h2>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
					<div id="product-wrap">
						<div class="row">
							@foreach ($resultPro as $product)
							<div class="col-sm-6 col-md-3 item-product fadeInUp wow" >
							@include('layouts.product.item', ['product'=>$product])
							</div>
							@endforeach
							<div class="clearfix"></div>
						</div>
						{{-- <div style="text-align:center">
							{{$list->links()}}
						</div> --}}
						<!-- end col-xs-12-->
						<div class="clearfix"></div>
					</div>
				</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	</div>
</div>
<div class="clearfix"></div>
@endsection