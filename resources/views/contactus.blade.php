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
		</div>
	</div>
</div>
</div>
<div class="page_contact">
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-xs-last">
			<div class="page-login page_cotact">
			<h1 class="title-head-contact a-left"><span>Liên hệ</span></h1>
			<div id="pagelogin">
				<form accept-charset="UTF-8" action="{{route('postcontact')}}" id="contacts" method="post">
					@csrf
					<div class="form-signup clearfix">
						<div class="row group_contact">
						<fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Họ và tên:<span style="color:red;">*</span></label>
							<input type="text" class="form-control  form-control-lg" required value="" name="name">
						</fieldset>
						<fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Số điện thoại:<span style="color:red;">*</span></label>
							<input type="text" class="form-control  form-control-lg" required value="" name="phone">
						</fieldset>
						<fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Email:<span style="color:red;">*</span></label>
							<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required id="emails" class="form-control form-control-lg" value="" name="email">
						</fieldset>
						<fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Ý kiến:<span style="color:red;">*</span></label>
							<textarea name="mess" id="comments" class="form-control content-area form-control-lg" rows="6" Required></textarea>
						</fieldset>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<button type="submit" class="btn btn-comment">Gửi liên hệ</button>
						</div>
						</div>
					</div>
				</form>
			</div>
			</div>
		</div>
		<div class="select_mapss padding-top-40 col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="aa mid_fot_h contact_r page_cotact">
			<a href="{{route('home')}}" class="logo-wrapper ">	
			<img src="{{$setting->logo}}" alt="Bánh đậu xanh Hòa An">
			</a>
			<span class="text_sum_contact">{{$setting->webname}}</span>
			<div class="hotline_footer">
				<ul class="contact padding-0">
					<li class="li_footer_h">
						<span class="txt_content_childs">
						<i class="fas fa-phone"></i>
						<a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a>
						</span>
					</li>
					<li class="li_footer_h">
						<span class="txt_content_childs">
						<i class="far fa-envelope"></i>
						<a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
						</span>
					</li>
				</ul>
			</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection