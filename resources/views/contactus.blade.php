@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/contact_style.scss.css')}}" rel="stylesheet" type="text/css" />
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
			<li><strong ><span>Liên hệ</span></strong></li>
			</ul>
		</div>
	</div>
</div>
</section>
<div class="section_maps">
<div class="box-maps">
	<div class="iFrameMap">
		<div class="google-map">
			<div class="maps_iframe">
			{!!$setting->iframe_map!!}
			</div>
			<div class="bg-contact">
				<img src="{{url('frontend/images/bg-contact.jpg')}}" alt="contact" style="width: 100%">
			</div>
		</div>
	</div>
</div>
</div>
{{-- <div class="page_contact">
<div class="container">
	<div class="row">
		<div class="select_mapss padding-top-40 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<div class="aa mid_fot_h contact_r page_cotact">
			<a href="{{route('home')}}" class="logo-wrapper ">	
			<img src="{{$setting->logo}}" alt="Bánh đậu xanh Hòa An">
			</a>
			<span class="text_sum_contact">{{$setting->webname}}</span>
			<div class="hotline_footer">
				<ul class="contact padding-0">
					<li class="li_footer_h">
						<span class="txt_content_childs">
						Hotline: 
						<a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a>
						</span>
					</li>
					<li class="li_footer_h">
						<span class="txt_content_childs">
						Email: 
						<a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
						</span>
					</li>
					<li class="li_footer_h">
						<span class="txt_content_childs">
						Địa chỉ: 
						<a href="https://www.google.com/maps/place/{{$setting->address1}}">{{$setting->address1}}</a>
						</span>
					</li>
				</ul>
			</div>
			</div>
		</div>
	</div>
</div>
</div> --}}
@endsection