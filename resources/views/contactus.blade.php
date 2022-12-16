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
@endsection