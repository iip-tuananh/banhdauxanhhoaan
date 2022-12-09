
<header class="header header_menu">
   <div class="mid-header wid_100">
         <div class="container">
         <div class="content_header">
            <div class="header-main">
               <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                     <div class="logo_center">
                        <div class="logo">
                           <a href="{{route('home')}}" class="logo-wrapper ">	
                           <img width="100" height="100" src="{{$setting->logo}}" alt="Bánh đậu xanh Hòa An">
                           </a>
                        </div>
                     </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-12 a-center right_header_mid hidden-sm">
                     <div class="header_nav_main section hidden-xs hidden-sm">
                        <div class="heade_menu">
                           <div class="wrap_main d-none d-lg-block d-xl-block">
                                 <div class="bg-header-nav">
                                 <div class= "row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                       <nav class="header-nav">
                                             <ul class="item_big">
                                             <li class="nav-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">				
                                                <a class="a-img" href="{{route('home')}}" title="Trang chủ">
                                                <span>Trang chủ</span>							</a>
                                             </li>
                                             <li class="nav-item {{ Route::currentRouteName() == 'aboutUs' ? 'active' : '' }}">				
                                                <a class="a-img" href="{{route('aboutUs')}}" title="Giới thiệu">
                                                <span>Giới thiệu</span>							</a>
                                             </li>
                                             <li class="nav-item {{ Route::currentRouteName() == 'allProduct' || Route::currentRouteName() == 'allListProCate' || Route::currentRouteName() == 'allListProType' || Route::currentRouteName() == 'detailProduct' ? 'active' : '' }}">
                                                <a class="a-img" href="{{route('allProduct')}}" title="Sản phẩm">
                                                   <span>Sản phẩm</span>
                                                   @if (count($categoryhome) > 0)
                                                   <i class="fa fa-angle-down"></i>
                                                   @endif
                                                </a>
                                                @if (count($categoryhome) > 0)
                                                <ul class="item_small">
                                                   @foreach ($categoryhome as $cate)
                                                   <li>
                                                         <a href="{{route('allListProCate',['cate'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}
                                                            @if (count($cate->typeCate) > 0)
                                                            <i class="fa fa-angle-right"></i>
                                                            @endif
                                                         </a>
                                                         <ul>
                                                            @foreach ($cate->typeCate as $type)
                                                            <li>
                                                               <a href="{{route('allListProType', ['cate'=>$type->cate_slug, 'typeCate'=>$type->slug])}}" title="{{languageName($type->name)}}" class="a3">{{languageName($type->name)}}</a>
                                                            </li>
                                                            @endforeach
                                                         </ul>
                                                   </li>
                                                   @endforeach
                                                </ul>
                                                @endif
                                             </li>
                                             <li class="nav-item {{ Route::currentRouteName() == 'allListBlog' ||  Route::currentRouteName() == 'listCateBlog' ? 'active' : '' }}">
                                                <a class="a-img" href="{{route('allListBlog')}}" title="Tin tức">
                                                   <span>Tin tức</span>
                                                   @if (count($blogCate) > 0)
                                                   <i class="fa fa-angle-down"></i>		
                                                   @endif
                                                </a>
                                                <ul class="item_small">
                                                   @foreach ($blogCate as $cate)
                                                   <li>
                                                         <a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}
                                                         </a>
                                                   </li>
                                                   @endforeach
                                                </ul>
                                             </li>
                                             
                                             <li class="nav-item {{ Route::currentRouteName() == 'lienHe' ? 'active' : '' }}">				
                                                <a class="a-img" href="{{route('lienHe')}}" title="Liên hệ">
                                                <span>Liên hệ</span>							</a>
                                             </li>
                                             </ul>
                                       </nav>
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
   </div>
</header>
<div class="header_nav_main section visible-xs visible-sm hidden-md hidden-lg hidden-xl">
   <div class="container">
         <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="heade_menunav">
               <div class="wapnav d-lg-none d-xl-none">
                     <span class="cloed hidden-lg hidden-md">
                     <i class="fa fa-bars"></i> Menu
                     </span>
               </div>
            </div>
         </div>
         </div>
   </div>
   <div class="wrapmenu d-xl-none d-lg-none">
         <div class="wrapmenu_full menumain_full" style="display:none;">
         <div class="containers">
            <!-- Menu mobile -->
            <div class="menu_mobile">
               <ul class="ul_collections">
                     <li class="level0 level-top parent">
                     <a href="{{route('home')}}">Trang chủ</a>
                     </li>
                     <li class="level0 level-top parent">
                        <a href="{{route('aboutUs')}}">Giới thiệu</a>
                     </li>
                     <li class="level0 level-top parent">
                     <a href="{{route('allProduct')}}">Sản phẩm</a>
                     @if (count($categoryhome) > 0)
                     <i class="fa fa-plus"></i>
                     <ul class="level0" style="display:none;">
                        @foreach ($categoryhome as $cate)
                        <li class="level1 ">
                           <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}"> <span>{{languageName($cate->name)}}</span> </a>
                           @if (count($cate->typeCate) > 0)
                           <i class="fa fa-plus"></i>
                           <ul class="level1" style="display:none;">
                              @foreach ($cate->typeCate as $type)
                                 <li class="level2 ">
                                 <a href="{{route('allListProType', ['cate'=>$type->cate_slug, 'typeCate'=>$type->slug])}}"><span>{{languageName($type->name)}}</span></a>
                                 </li>
                              @endforeach
                           </ul>
                           @endif
                        </li>
                        @endforeach
                     </ul>
                     @endif
                     </li>
                     <li class="level0 level-top parent">
                     <a href="{{route('allListBlog')}}">Tin tức</a>
                     <i class="fa fa-plus"></i>
                     <ul class="level0" style="display:none;">
                        @foreach ($blogCate as $cate)
                        <li class="level1 "> 
                           <a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}"> <span>{{languageName($cate->name)}}</span> </a>
                        </li>
                        @endforeach
                     </ul>
                     </li>
                     <li class="level0 level-top parent">
                     <a href="{{route('lienHe')}}">Liên hệ</a>
                     </li>
               </ul>
            </div>
         </div>
         </div>
   </div>
</div>