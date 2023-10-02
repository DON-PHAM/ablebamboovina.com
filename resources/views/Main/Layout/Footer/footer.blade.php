<footer class="footer-area">
    <div id="footer_wrap">
        <div id="footer">
            @if(session()->get('setting') && session()->get('payment'))
                <div class="Layout_footer">
                    <div class="layoutFooter1st -moveDom">
                        <div class="foot_info">
                            <div class="foot_info_list_1">
                                <a href="{{route('contact-page')}}" class="btn_business">고객의소리</a> |
                                <a href="{{route('contact-page')}}" class="btn_business">제휴문의</a>
                            </div>
                        </div>

                        <div class="footerSns">
                            <ul>
                                <li><a href="#none" target="_blank"
                                       onmouseover="changeImg(this,'/data/skin/front/mplshop/_mplshop/images/snsico_over_02.png')"
                                       onmouseout="changeImg(this,'https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_02.png')"><img
                                            src="https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_02.png"
                                            alt="카카오스토리"></a></li>

                                <li><a href="{{session()->get('setting')->intagram}}" target="_blank"
                                       onmouseover="changeImg(this,'/data/skin/front/mplshop/_mplshop/images/snsico_over_03.png')"
                                       onmouseout="changeImg(this,'https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_03.png')"><img
                                            src="https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_03.png"
                                            alt="인스타그램"></a></li>
                                <li><a href="{{session()->get('setting')->facebook}}" target="_blank"
                                       onmouseover="changeImg(this,'/data/skin/front/mplshop/_mplshop/images/snsico_over_04.png')"
                                       onmouseout="changeImg(this,'https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_04.png')"><img
                                            src="https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_04.png"
                                            alt="페이스북"></a></li>
                                <li><a href="{{session()->get('setting')->kakaotalk}}" target="_blank"
                                       onmouseover="changeImg(this,'/data/skin/front/mplshop/_mplshop/images/snsico_over_06.png')"
                                       onmouseout="changeImg(this,'https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_06.png')"><img
                                            src="https://cdn-pro-web-155-169.cdn-nhncommerce.com/withna_godomall_com/data/skin/front/mplshop/_mplshop/images/snsico_06.png"
                                            alt="카카오톡"></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="layoutFooter2nd -moveDom">
                        <div class="footerCs">
                            <ul>
                                <li class="num">
                                    <span>TEL</span>
                                    <a href="tel:{{session()->get('setting')->phone}}">{{session()->get('setting')->phone}}</a>
                                </li>
                                <li class="content"><span>영업시간 :</span> {{session()->get('setting')->morningstart}} /</li>
                                <li class="content"></li>
                                <li class="content"><span>점심시간 : </span>{{session()->get('setting')->lunchstart}}</li>
                                <li class="content"><span>휴일 : </span> 토, 일요일, 공휴일</li>
                            </ul>
                        </div>
                        <div class="footerBank">
                            <ul>
                                <li class="content">신한은행: {{session()->get('payment')->sotaikhoan}}</li>
                                <li class="content2"><span class="emphasis">예금주 (주)위드나</span></li>
                            </ul>
                        </div>
                        <div class="footerReturn">
                            <ul>
                                <li class="title_big">반품주소 : {{session()->get('setting')->address}}</li>
                                <li class="content">타택배 이용시 분실이나 비용문제가 발생할 수 있으니</li>
                                <li class="content">지정 택배를 이용해주시기 바랍니다</li>
                            </ul>
                        </div>
                    </div>

                    <div class="layoutFooter3rd -moveDom">
                        <div class="foot_info">
                            <div class="foot_info_list">
                                <strong>회사명</strong> : {{session()->get('setting')->company}}
                                <dl>
                                    <dt>사업자등록번호:</dt>
                                    <dd>{{session()->get('setting')->tax}}</dd>
                                </dl>
                            </div>
                            <div class="foot_info_list">
                                <dl>
                                    <dt>주소:</dt>
                                    <dd>{{session()->get('setting')->address}}</dd>
                                </dl>
                            </div>
                            <strong>고객센터</strong> : {{session()->get('setting')->phone}}<br>
                            <strong>이메일</strong> : <a href="{{session()->get('setting')->email}}"
                                                      class="btn_email">{{session()->get('setting')->email}}</a>
                            <!-- // -->

                        </div>
                        <!-- //foot_info -->
                    </div>
                </div>
            @endif
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
