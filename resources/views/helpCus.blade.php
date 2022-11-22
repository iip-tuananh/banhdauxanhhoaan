@extends('layouts.main.master')
@section('title')
{{$pageContent->title}}
@endsection
@section('description')
@endsection
@section('css')
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
            <li><strong ><span>{{$pageContent->title}}</span></strong></li>
            </ul>
        </div>
    </div>
</div>
</section>
<section class="page">
<div class="container">
    <div class="wrap_background_aside padding-top-15 margin-bottom-40">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="page-title category-title">
                <h1 class="title-head"><a href="#">{{$pageContent->title}}</a></h1>
            </div>
            <div class="content-page rte">
                {!!($pageContent->content)!!}
            </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection