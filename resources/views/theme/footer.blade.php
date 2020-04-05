 <!-- start footer -->
 <footer class="footer-standard-dark bg-extra-dark-gray">
     <div class="footer-widget-area padding-five-tb sm-padding-30px-tb">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-3 col-md-6 widget border-right border-color-medium-dark-gray md-no-border-right md-margin-30px-bottom sm-text-center">
                     <!-- start logo -->
                     <a href="index.html" class="margin-20px-bottom d-inline-block"><img class="footer-logo" src="{{asset($information->logo_image)}}" data-rjs="{{asset($information->logo_image)}}" alt=""></a>
                     <!-- end logo -->
                     <p class="h6 width-95 sm-width-100 text-justify text-white-2 ">
                         {{$information->description}}

                 </div>
                 <!-- start additional links -->
                 <div class="col-lg-3 col-md-6 widget border-right border-color-medium-dark-gray padding-45px-left md-padding-15px-left md-no-border-right md-margin-30px-bottom text-center text-md-left">
                     <div class="widget-title alt-font h5 text-medium-gray text-uppercase margin-10px-bottom font-weight-600 text-blue">
                         我們的服務</div>
                     <ul class="list-unstyled">
                         @foreach($categoryies as $category )
                         <li><a class="h6 text-white-2" href="{{route('slug.category',['id'=> $category->id])}}">{{$category->name}}</a>
                         </li>
                         @endforeach
                     </ul>
                 </div>
                 <!-- end additional links -->



                 <!-- start contact information -->
                 <div class="col-lg-3 col-md-6 widget border-right border-color-medium-dark-gray padding-45px-left md-padding-15px-left md-clear-both md-no-border-right sm-margin-30px-bottom text-center text-md-left">
                     <div class="widget-title alt-font h5 text-medium-gray text-uppercase margin-10px-bottom font-weight-600 text-blue">
                         聯繫方式</div>
                     <p class="h6 d-block margin-15px-bottom width-80 sm-width-100 text-white-2 ">
                         桃園市龜山區忠義路一段1070-1號
                     </p>
                     <div class="h6 text-white-2">Email: <a href="mailto:{{$information->email}}" class="text-white-2">{{$information->email}}</a>
                     </div>
                     <div class="h6 text-white-2">電話 : {{$information->tel}}</div>
                     <div class="h6 text-white-2">傳真 : {{$information->map}}</div>
                     <div class="h6 text-white-2">Line ID :a888888</div>

                 </div>
                 <!-- end contact information -->
                 <!-- start instagram -->
                 <div class="col-lg-3 col-md-6 widget border-right border-color-medium-dark-gray padding-45px-left md-padding-15px-left md-clear-both md-no-border-right sm-margin-30px-bottom text-center text-md-lef">
                     <div class="widget-title alt-font h5 text-medium-gray text-uppercase margin-10px-bottom font-weight-600 text-blue">
                         位置地圖</div>
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14460.96058997992!2d121.3533116152337!3d25.02592304592928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34681e077a40798d%3A0xd7ce79eb7e5e9620!2zMzMz5qGD5ZyS5biC6b6c5bGx5Y2A5b-g576p6Lev5LiA5q61MTA3MC0x6Jmf!5e0!3m2!1szh-TW!2stw!4v1571056549934!5m2!1szh-TW!2stw" width="" height="" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


                 </div>

             </div>
         </div>
     </div>
     <div class="bg-dark-footer padding-50px-tb text-center sm-padding-30px-tb">
         <div class="container">
             <div class="row">
                 <!-- start copyright -->
                 <div class="col-md-6 text-md-left text-small text-center">&copy; 2019 - 2020 POWER-TONG, ALL RIGHTS
                     RESERVED.
                 </div>
                 <div class="col-md-6 text-md-right text-small text-center">
                     <a href="https://www.yisi.com.tw/" class="text-dark-gray">YISI WEB
                         DESIGN</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.yisi.com.tw/" class="text-dark-gray">逸思網頁設計</a>
                 </div>
                 <!-- end copyright -->
             </div>
         </div>
     </div>
 </footer>
 <!-- end footer -->