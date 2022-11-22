<div class="section footer_wwap">
   <footer class="footer lazyload" data-src="{{url('frontend/images/bg-footer.png')}}">
         <div class="site-footer">
         <div class="mid-footer section">
            <div class="container">
               <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                     <div class="widget-ft first">
                        <h4 class="title-menu">
                           <span class="collapsed">
                           Liên hệ với chúng tôi 
                           </span>
                        </h4>
                        <div class="time_work">
                           <div class="itemfooter cont">
                                 <div class="r">
                                 <i class="fas fa-map-marker-alt"></i>
                                 <span>
                                 {{$setting->address1}}
                                 </span>
                                 </div>
                                 <div class="r">
                                 <i class="fas fa-phone"></i>
                                 <span class="span_fone">Hotline:</span><a class="fone" href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a>
                                 </div>
                                 <div class="r">
                                 <i class="far fa-clock"></i>
                                 <span>Trực 8h00-17h30 từ thứ 2 đến thứ 6</span>
                                 </div>
                           </div>
                        </div>
                     </div>
                     </div>
                     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                     <div class="widget-ft">
                        <h4 class="title-menu">
                           <a role="button" class="collapsed" data-toggle="collapse" aria-expanded="false" data-target="#collapseListMenu01" aria-controls="collapseListMenu01">
                           Hỗ trợ khách hàng <i class="fa fa-plus" aria-hidden="true"></i>
                           </a>
                        </h4>
                        <div class="collapse" id="collapseListMenu01">
                           <ul class="list-menu">
                                 <li class="li_menu"><a href="{{route('home')}}">Trang chủ</a></li>
                                 <li class="li_menu"><a href="{{route('aboutUs')}}">Giới thiệu</a></li>
                                 <li class="li_menu"><a href="{{route('allProduct')}}">Sản phẩm</a></li>
                                 <li class="li_menu"><a href="{{route('allListBlog')}}">Tin tức</a></li>
                                 <li class="li_menu"><a href="{{route('lienHe')}}">Liên hệ</a></li>
                           </ul>
                        </div>
                     </div>
                     </div>
                     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                     <div class="widget-ft">
                        <h4 class="title-menu">
                           <a role="button" class="collapsed" data-toggle="collapse" aria-expanded="false" data-target="#collapseListMenu02" aria-controls="collapseListMenu03">
                           Chính sách hỗ trợ<i class="fa fa-plus" aria-hidden="true"></i>
                           </a>
                        </h4>
                        <div class="collapse" id="collapseListMenu02">
                           <ul class="list-menu">
                              @foreach ($helpCus as $item)
                              <li class="li_menu"><a href="{{route('helpCus', ['slug'=>$item->slug])}}">{{$item->title}}</a></li>
                              @endforeach
                           </ul>
                        </div>
                     </div>
                     </div>
                     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                     <div class="widget-ft">
                        <h4 class="title-menu">
                           <a role="button" class="collapsed" data-toggle="collapse" aria-expanded="false" data-target="#collapseListMenu03" aria-controls="collapseListMenu03">
                           Google Map <i class="fa fa-plus" aria-hidden="true"></i>
                           </a>
                        </h4>
                        <div class="collapse" id="collapseListMenu03">
                           {!!$setting->iframe_map!!}
                        </div>
                     </div>
                     </div>
               </div>
            </div>
         </div>
         <div class="bg-footer-bottom copyright clearfix">
            <div class="inner clearfix container">
               <div class="row tablet">
                     <div id="copyright" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 a-left fot_copyright">
                     <span class="wsp"><span class="mobile">© Bản quyền thuộc về <b>Hòa An</b><span class="hidden-xs line_footer"> | </span></span><span class="opacity1">Cung cấp bởi</span> 
                     <a href="https://sbtsoftware.vn/" rel="nofollow" title="SBT" target="_blank">SBT</a>
                     </span>
                     </div>
               </div>
            </div>
            <a href="#"  class="backtop"  title="Lên đầu trang"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
         </div>
         </div>
   </footer>
</div>