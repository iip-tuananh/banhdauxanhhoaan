{{-- <div class="tophead section">
   <div class="container">
         <div class="contenttop">
         <div class="topbar_left f-left">
            <ul>
               <li class="hidden-xs">
                     <i class="fas fa-map-marker-alt"></i>
                     <span>
                     {{$setting->address1}}
                     </span>
               </li>
            </ul>
         </div>
         <div class="topbar_right f-right account_xs">
            <ul class="ul_account">
               <li>
                  <img src="{{url('frontend/images/icon-fb-medium.png')}}" alt="">
               </li>
               <li>
                  <img src="{{url('frontend/images/icon-gg-medium.png')}}" alt="">
               </li>
               <li>
                  <img src="{{url('frontend/images/icon-tw-medium.png')}}" alt="">
               </li>
               <li>
                  <img src="{{url('frontend/images/icon-yt-medium.png')}}" alt="">
               </li>
            </ul>
         </div>
         </div>
   </div>
</div> --}}
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
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                       <nav class="header-nav">
                                             <ul class="item_big">
                                             <li class="nav-item  active ">				
                                                <a class="a-img" href="{{route('home')}}" title="Trang chủ">
                                                <span>Trang chủ</span>							</a>
                                             </li>
                                             <li class="nav-item ">				
                                                <a class="a-img" href="{{route('aboutUs')}}" title="Giới thiệu">
                                                <span>Giới thiệu</span>							</a>
                                             </li>
                                             {{-- <li class="nav-item  has-mega">
                                                <a class="a-img" href="{{route('allProduct')}}" title="Sản phẩm">
                                                <span>Sản phẩm</span><i class="fa fa-angle-down"></i>							</a>
                                                <div class="mega-content">
                                                   <div class="level0-wrapper2">
                                                         <div class="nav-block nav-block-center">
                                                         <ul class="level0">
                                                            <li class="level1 item">
                                                               <h2 class="h4"><a href="/frontpage" title="Sản phẩm mới"><span>Sản phẩm mới</span></a> </h2>
                                                            <li class="level1 parent item">
                                                               <h2 class="h4"><a href="/san-pham-ban-chay" title="Sản phẩm bán chạy">Sản phẩm bán chạy</a></h2>
                                                               <ul class="level1">
                                                                     <li class="level2"><a href="/nhat-tuan" title="Nhất tuần"><span>Nhất tuần</span></a> </li>
                                                                     <li class="level2"><a href="/nhat-thang" title="Nhất tháng"><span>Nhất tháng</span></a> </li>
                                                                     <li class="level2"><a href="/nhat-nam" title="Nhất năm"><span>Nhất năm</span></a> </li>
                                                               </ul>
                                                            </li>
                                                            <li class="level1 item">
                                                               <h2 class="h4"><a href="/san-pham-noi-bat" title="Sản phẩm nổi bật"><span>Sản phẩm nổi bật</span></a> </h2>
                                                            <li class="level1 item">
                                                               <h2 class="h4"><a href="/san-pham-khuyen-mai" title="Sản phẩm khuyến mại"><span>Sản phẩm khuyến mại</span></a> </h2>
                                                            <li class="level1 item">
                                                               <h2 class="h4"><a href="/bat-coc" title="Bát, cốc, đĩa"><span>Bát, cốc, đĩa</span></a> </h2>
                                                            <li class="level1 item">
                                                               <h2 class="h4"><a href="/may-che-bien" title="Máy chế biến"><span>Máy chế biến</span></a> </h2>
                                                            <li class="level1 item">
                                                               <h2 class="h4"><a href="/phu-kien-nha-bep" title="Phụ kiện nhà bếp"><span>Phụ kiện nhà bếp</span></a> </h2>
                                                            <li class="level1 item">
                                                               <h2 class="h4"><a href="/phu-kien-nau-nuong" title="Phụ kiện nấu"><span>Phụ kiện nấu</span></a> </h2>
                                                         </ul>
                                                         </div>
                                                   </div>
                                                </div>
                                             </li> --}}
                                             <li class="nav-item ">
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
                                                         <a href="{{route('allListProCate',['cate'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}<i class="fa fa-angle-right"></i></a>
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
                                             <li class="nav-item ">
                                                <a class="a-img" href="{{route('allListBlog')}}" title="Tin tức">
                                                <span>Tin tức</span><i class="fa fa-angle-down"></i>							</a>
                                                <ul class="item_small">
                                                   @foreach ($blogCate as $cate)
                                                   <li>
                                                         <a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}<i class="fa fa-angle-right"></i></a>
                                                   </li>
                                                   @endforeach
                                                </ul>
                                             </li>
                                             
                                             <li class="nav-item ">				
                                                <a class="a-img" href="{{route('lienHe')}}" title="Liên hệ">
                                                <span>Liên hệ</span>							</a>
                                             </li>
                                             </ul>
                                       </nav>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                       {{-- <div class="search_mobile showsearchfromtop inline-block">
                                             <div class="search_button_mobile"> --}}
                                             {{-- <button class="btn icon-fallback-text">
                                             <span class="fas fa-search" ></span> 
                                             </button> --}}
                                             {{-- </div>
                                       </div> --}}
                                       {{-- <div class="searchboxlager"> --}}
                                             {{-- <div class="searchfromtop">
                                             <form action="/search" method="get" autocomplete="off">
                                                <input type="text" class="form-control" maxlength="70" name="query" placeholder="Nhập từ khóa tìm kiếm ...">                           
                                             </form>
                                             </div> --}}
                                       {{-- </div> --}}
                                       <div class="btn-hotline zoom-in-out-box">
                                          <a href="tel:0946.986.333">Gọi ngay</a>
                                       </div>
                                       {{-- <div class="cartgroup ">
                                             <div class="header-right inline-block">
                                             <div class="top-cart-contain f-right">
                                                
                                                <div class="text-xs-center mini-cart content_cart_header block-cart">
                                                   <div class="heading-cart cart_header hidden-md hidden-sm hidden-xs">
                                                         <a class="iconcart_mobi" href="/cart" title="Giỏ hàng">
                                                         <i class="fas fa-shopping-basket"></i>
                                                         <span class="count_item cartCount count_item_pr"></span>
                                                         </a>
                                                   </div>
                                                   <div class="top-cart-content">
                                                         <div class="CartHeaderContainer">
                                                         </div>
                                                   </div>
                                                </div>
                                             </div>
                                             </div>
                                       </div> --}}
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
                     {{-- <div class="search_mobile showsearchfromtop hidden-md hidden-lg">
                     <div class="search_button_mobile">
                        <button class="btn icon-fallback-text">
                        <span class="fas fa-search" ></span> 
                        </button>
                     </div>
                     </div>
                     <div class="searchboxlager hidden-lg">
                     <div class="searchfromtop">
                        <form action="/search" method="get" autocomplete="off">
                           <input type="text" class="form-control" maxlength="70" name="query" placeholder="Tìm kiếm ...">                           
                        </form>
                     </div>
                     </div>
                     <a class="iconcart_mobi hidden-lg hidden-xl" href="/cart" title="Giỏ hàng">
                     <i class="fa fa-shopping-basket iconcart"></i>
                     <span class="count_item cartCount count_item_pr"></span>
                     </a> --}}
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