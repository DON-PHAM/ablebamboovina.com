<footer class="footer-area">
{{--    <div class="footer-top">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <!-- footer single wedget -->--}}
{{--                <div class="col-md-3 col-lg-3">--}}
{{--                    <!-- footer logo -->--}}
{{--                    <div class="footer-logo">--}}
{{--                        <a href="{{route('homepage')}}">--}}
{{--                            @if(session('setting'))--}}
{{--                                <img style="width: 100%"--}}
{{--                                     src="{{session()->get('setting')->logo}}"--}}
{{--                                     alt="{{session('setting')->slogan}}"--}}
{{--                                />--}}
{{--                            @endif--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- footer logo -->--}}
{{--                    <div class="about-footer">--}}
{{--                        @if(session('setting'))--}}
{{--                            <p class="text-info">--}}
{{--                                {{ session('setting')->slogan }}--}}
{{--                            </p>--}}
{{--                        @endif--}}

{{--                        <div class="need-help">--}}
{{--                            <p class="phone-info">--}}
{{--                                {{trans('homepage.needHelp')}}?--}}
{{--                                @if(session('setting'))--}}
{{--                                    <span>{{ session('setting')->phone }}</span>--}}
{{--                                @endif--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        @if(session('setting'))--}}
{{--                            <div class="social-info">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ session('setting')->facebook }}"><i class="ion-social-facebook"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ session('setting')->tiktok }}">--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"--}}
{{--                                                 viewBox="0 0 24 24">--}}
{{--                                                <path fill="currentColor"--}}
{{--                                                      d="M16.6 5.82s.51.5 0 0A4.278 4.278 0 0 1 15.54 3h-3.09v12.4a2.592 2.592 0 0 1-2.59 2.5c-1.42 0-2.6-1.16-2.6-2.6c0-1.72 1.66-3.01 3.37-2.48V9.66c-3.45-.46-6.47 2.22-6.47 5.64c0 3.33 2.76 5.7 5.69 5.7c3.14 0 5.69-2.55 5.69-5.7V9.01a7.35 7.35 0 0 0 4.3 1.38V7.3s-1.88.09-3.24-1.48z"/>--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ session('setting')->intagram }}">--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"--}}
{{--                                                 viewBox="0 0 24 24">--}}
{{--                                                <path fill="currentColor"--}}
{{--                                                      d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3Z"/>--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ session('setting')->kakaotalk }}">--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"--}}
{{--                                                 viewBox="0 0 24 24">--}}
{{--                                                <path fill="currentColor"--}}
{{--                                                      d="M22.125 0H1.875C.839 0 0 .84 0 1.875v20.25C0 23.161.84 24 1.875 24h20.25C23.161 24 24 23.16 24 22.125V1.875C24 .839 23.16 0 22.125 0zM12 18.75c-.591 0-1.17-.041-1.732-.12c-.562.396-3.813 2.679-4.12 2.722c0 0-.125.049-.232-.014s-.088-.229-.088-.229c.032-.22.843-3.018.992-3.533c-2.745-1.36-4.57-3.769-4.57-6.513c0-4.246 4.365-7.688 9.75-7.688s9.75 3.442 9.75 7.688c0 4.245-4.365 7.687-9.75 7.687zM8.05 9.867h-.878v3.342c0 .296-.252.537-.563.537s-.562-.24-.562-.537V9.867h-.878a.552.552 0 0 1 0-1.101h2.88a.552.552 0 0 1 0 1.101zm10.987 2.957a.558.558 0 0 1 .109.417a.559.559 0 0 1-.219.37a.557.557 0 0 1-.338.114a.558.558 0 0 1-.45-.224l-1.319-1.747l-.195.195v1.227a.564.564 0 0 1-.562.563a.563.563 0 0 1-.563-.563V9.328a.563.563 0 0 1 1.125 0v1.21l1.57-1.57a.437.437 0 0 1 .311-.126c.14 0 .282.061.388.167a.555.555 0 0 1 .165.356a.438.438 0 0 1-.124.343l-1.282 1.281l1.385 1.835zm-8.35-3.502c-.095-.27-.383-.548-.75-.556c-.366.008-.654.286-.749.555l-1.345 3.541c-.171.53-.022.728.133.8a.857.857 0 0 0 .357.077c.235 0 .414-.095.468-.248l.279-.73h1.715l.279.73c.054.153.233.248.468.248a.86.86 0 0 0 .357-.078c.155-.071.304-.268.133-.8l-1.345-3.54zm-1.311 2.443l.562-1.596l.561 1.596H9.376zm5.905 1.383a.528.528 0 0 1-.539.516h-1.804a.528.528 0 0 1-.54-.516v-3.82c0-.31.258-.562.575-.562s.574.252.574.562v3.305h1.195c.297 0 .54.231.54.515z"/>--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- footer single wedget -->--}}
{{--                <div class="col-md-3 col-lg-3 mt-res-sx-30px mt-res-md-30px">--}}
{{--                    <div class="single-wedge">--}}
{{--                        <h4 class="footer-herading">{{trans('homepage.info')}}</h4>--}}
{{--                        <div class="footer-links">--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">{{trans('homepage.intro')}}</a></li>--}}
{{--                                <li><a href="#">{{trans('homepage.contact')}}</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3 col-lg-3 mt-res-sx-30px mt-res-md-30px">--}}
{{--                    <div class="single-wedge">--}}
{{--                        <h4 class="footer-herading">{{trans('homepage.info')}}</h4>--}}
{{--                        <div class="footer-links">--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">{{trans('homepage.intro')}}</a></li>--}}
{{--                                <li><a href="#">{{trans('homepage.contact')}}</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- footer single wedget -->--}}
{{--                <div class="col-md-3 col-lg-3 mt-res-md-50px mt-res-sx-30px mt-res-md-30px">--}}
{{--                    <div class="single-wedge">--}}
{{--                        <h4 class="footer-herading">Links</h4>--}}
{{--                        <div class="footer-links">--}}
{{--                            <ul>--}}
{{--                                <li><a href="{{route('login-page')}}">{{trans('homepage.login')}}</a></li>--}}
{{--                                <li><a href="{{route('my-account-page')}}">{{trans('homepage.account')}}</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- footer single wedget -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div id="footer_wrap">
        <div id="footer">
            <div class="Layout_footer">
                <div class="layoutFooter1st -moveDom">
                    <div class="foot_info">
                        <div class="foot_info_list_1">
                            <a href="https://www.hayanhayan.com/board/write.php?&amp;bdId=customer" class="btn_business" target="_blank">고객의소리</a> |
                            <a href="https://www.hayanhayan.com/board/write.php?bdId=cooperation" class="btn_business" target="_blank">제휴문의</a> |
                            <a href="https://www.ilogen.com/web/personal/tkSearch" class="btn_business" target="_blank">택배조회</a>
                        </div>
                    </div>
                    <div class="footerEtc"><ul>
                            <li class="content"><a href="../service/company.php">회사소개</a> | </li>
                            <li class="content"><a href="../service/agreement.php">이용약관</a> | </li>
                            <li class="content"><a href="../service/private.php">개인정보취급방침</a> | </li>
                            <li class="content"><a href="../service/guide.php">이용안내</a></li>
                        </ul></div>
                    <div class="footerSns"><ul>
                            <!-- <li><a href="#none" target="_blank" onmouseover="changeImg(this,'/data/skin/front/mplshop/_mplshop/images/snsico_over_01.png')" onmouseout="changeImg(this,'https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_01.png')"><img src="https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_01.png" alt="카페"></a></li>
                            <li><a href="#none" target="_blank" onmouseover="changeImg(this,'/data/skin/front/mplshop/_mplshop/images/snsico_over_02.png')" onmouseout="changeImg(this,'https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_02.png')"><img src="https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_02.png" alt="카카오스토리"></a></li> -->
                            <li><a href="https://www.instagram.com/hayanhayan_official/" target="_blank" onmouseover="changeImg(this,'/data/skin/front/mplshop/_mplshop/images/snsico_over_03.png')" onmouseout="changeImg(this,'https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_03.png')"><img src="https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_03.png" alt="인스타그램"></a></li>
                            <li><a href="https://www.facebook.com/hayanhayanofficial" target="_blank" onmouseover="changeImg(this,'/data/skin/front/mplshop/_mplshop/images/snsico_over_04.png')" onmouseout="changeImg(this,'https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_04.png')"><img src="https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_04.png" alt="페이스북"></a></li>
                            <!--li><a href="https://twitter.com/fpshf222" target="_blank" onmouseover="changeImg(this,'/data/skin/front/mplshop/_mplshop/images/snsico_over_05.png')" onmouseout="changeImg(this,'https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_05.png')"><img src="https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_05.png" alt="트위터"></a></li-->
                            <li><a href="http://pf.kakao.com/_kgrCT/" target="_blank" onmouseover="changeImg(this,'/data/skin/front/mplshop/_mplshop/images/snsico_over_06.png')" onmouseout="changeImg(this,'https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_06.png')"><img src="https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_06.png" alt="카카오톡"></a></li>
                            <li><a href="https://blog.naver.com/bluebluebl" target="_blank" onmouseover="changeImg(this,'/data/skin/front/mplshop/_mplshop/images/snsico_over_07.png')" onmouseout="changeImg(this,'https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_07.png')"><img src="https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_07.png" alt="블로그"></a></li>
                            <!--<li><a href="#none" target="_blank" onmouseover="changeImg(this,'/data/skin/front/mplshop/_mplshop/images/snsico_over_08.png')" onmouseout="changeImg(this,'https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_08.png')"><img src="https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_08.png" alt="유튜브"></a></li> -->
                            <li><a href="https://post.naver.com/hipjo0706?isHome=1#" target="_blank" onmouseover="changeImg(this,'/data/skin/front/mplshop/_mplshop/images/snsico_over_09.png')" onmouseout="changeImg(this,'https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_09.png')"><img src="https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_09.png" alt="포스트"></a></li>
                        </ul></div>
                </div>
                <div class="layoutFooter2nd -moveDom">
                    <div class="footerCs">
                        <ul>
                            <li class="num">
                                <span>TEL</span>
                                <a href="tel:1800-7654"> 1800-7654</a>
                            </li>
                            <li class="content"><span>영업시간 :</span> AM 09:30 ~ PM 06:00 / </li><li class="content"></li><li class="content"><span>점심시간 : </span>PM 12:30 ~ PM 01:30</li><li class="content"><span>휴일 : </span> 토, 일요일, 공휴일</li></ul>
                    </div>
                    <div class="footerBank">
                        <ul>
                            <li class="content">신한은행&nbsp;&nbsp;140-012-442960</li><li class="content2"><span class="emphasis">예금주 (주)위드나</span></li></ul>
                    </div>
                    <div class="footerReturn"><ul>
                            <li class="title_big">반품주소 : 서울특별시 마포구 와우산로 70 (군봉빌딩) 3층</li>
                            <li class="content">타택배 이용시 분실이나 비용문제가 발생할 수 있으니</li>
                            <li class="content">지정 택배를 이용해주시기 바랍니다</li>
                        </ul></div>
                </div>

                <div class="layoutFooter3rd -moveDom">
                    <div class="foot_info">
                        <div class="foot_info_list">
                            <strong>회사명</strong> : ㈜위드나 | <strong>대표</strong> : 서기성
                            <dl>
                                <dt>사업자등록번호 </dt>
                                <dd>542-88-01137  <a href="#" class="btn_licensee_info" onclick="gd_popup_bizInfo('5428801137'); return false;">조회</a> </dd>
                            </dl>
                            <dl>
                                <dt>통신판매업신고 </dt>
                                <dd>제 2019-서울마포-1506호</dd>
                            </dl>
                        </div>
                        <div class="foot_info_list">
                            <dl>
                                <dt>주소 </dt>
                                <dd>서울특별시 마포구 와우산로 70 (군봉빌딩) 3층</dd>
                            </dl>
                        </div>
                        <strong>고객센터</strong> : 1800-7654 | <strong>팩스</strong> : 070-4032-3033<br>
                        <strong>이메일</strong> : <a href="mailto:godo@godo.co.kr" class="btn_email">hayanhayan@withna.kr</a>
                        <!-- // -->

                    </div>
                    <!-- //foot_info -->
                </div>
            </div>

            <div class="foot_certify displaynone">
                <span></span>
                <span></span>
            </div>
            <!-- //foot_certify -->


        </div>
    </div>
    <!--  Footer Bottom Area start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 text-center mt-4">
                    <p class="copy-text">
                        Copyright © <a href="#"> Ablebamboovina</a>. All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--  Footer Bottom Area End-->
</footer>
