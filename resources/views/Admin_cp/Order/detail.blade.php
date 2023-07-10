@extends('Admin_cp.Layout.master')
@section('title',trans('order.title-detail'))
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i> Chi tiết đơn hàng
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="https://demo.s-cart.org/sc_admin"><i
                                    class="fa fa-home fa-1x"></i> Trang chủ</a></li>
                        <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header with-border">
                            <h3 class="card-title">Chi tiết đơn hàng #O-JFhTD-8JA6e</h3>
                            <div class="card-tools not-print">
                                <div class="btn-group float-right" style="margin-right: 0px">
                                    <a href="https://demo.s-cart.org/sc_admin/order" class="btn btn-flat btn-default"><i
                                            class="fa fa-list"></i>&nbsp;Trở lại danh sách</a>
                                </div>
                                <div class="btn-group float-right" style="margin-right: 10px;border:1px solid #c5b5b5;">
                                    <a class="btn btn-flat" target="_new" title="Invoice"
                                       href="https://demo.s-cart.org/sc_admin/order/invoice?order_id=O-JFhTD-8JA6e"><i
                                            class="far fa-file-pdf"></i><span class="hidden-xs"> Hóa đơn</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="order-body">
                            <div class="col-sm-6">
                                <table class="table table-hover box-body text-wrap table-bordered">
                                    <tbody>
                                    <tr>
                                        <td class="td-title">Tên:</td>
                                        <td><a href="#" class="updateInfoRequired editable editable-click"
                                               data-name="first_name" data-type="text" data-pk="O-JFhTD-8JA6e"
                                               data-url="https://demo.s-cart.org/sc_admin/order/update"
                                               data-title="Tên">Govind</a></td>
                                    </tr>
                                    <tr>
                                        <td class="td-title">Họ:</td>
                                        <td><a href="#" class="updateInfoRequired editable editable-click"
                                               data-name="last_name" data-type="text" data-pk="O-JFhTD-8JA6e"
                                               data-url="https://demo.s-cart.org/sc_admin/order/update" data-title="Họ">Nathawat</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-title">Điện thoại:</td>
                                        <td><a href="#" class="updateInfoRequired editable editable-click"
                                               data-name="phone" data-type="text" data-pk="O-JFhTD-8JA6e"
                                               data-url="https://demo.s-cart.org/sc_admin/order/update"
                                               data-title="Điện thoại">+918116292901</a></td>
                                    </tr>
                                    <tr>
                                        <td class="td-title">Email:</td>
                                        <td>gs24746.gs@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td class="td-title">Tỉnh/Thành:</td>
                                        <td><a href="#" class="updateInfoRequired editable editable-click"
                                               data-name="address1" data-type="text" data-pk="O-JFhTD-8JA6e"
                                               data-url="https://demo.s-cart.org/sc_admin/order/update"
                                               data-title="Tỉnh/Thành">238 GREEN PARK BENAD ROAD NEAR KAUSHIK</a></td>
                                    </tr>
                                    <tr>
                                        <td class="td-title">Quận/Huyện:</td>
                                        <td><a href="#" class="updateInfoRequired editable editable-click"
                                               data-name="address2" data-type="text" data-pk="O-JFhTD-8JA6e"
                                               data-url="https://demo.s-cart.org/sc_admin/order/update"
                                               data-title="Quận/Huyện">238</a></td>
                                    </tr>
                                    <tr>
                                        <td class="td-title">Quốc gia:</td>
                                        <td><a href="#" class="updateInfoRequired editable editable-click"
                                               data-name="country" data-type="select"
                                               data-source="{&quot;AL&quot;:&quot;Albania&quot;,&quot;DZ&quot;:&quot;Algeria&quot;,&quot;DS&quot;:&quot;American Samoa&quot;,&quot;AD&quot;:&quot;Andorra&quot;,&quot;AO&quot;:&quot;Angola&quot;,&quot;AI&quot;:&quot;Anguilla&quot;,&quot;AQ&quot;:&quot;Antarctica&quot;,&quot;AG&quot;:&quot;Antigua and Barbuda&quot;,&quot;AR&quot;:&quot;Argentina&quot;,&quot;AM&quot;:&quot;Armenia&quot;,&quot;AW&quot;:&quot;Aruba&quot;,&quot;AU&quot;:&quot;Australia&quot;,&quot;AT&quot;:&quot;Austria&quot;,&quot;AZ&quot;:&quot;Azerbaijan&quot;,&quot;BS&quot;:&quot;Bahamas&quot;,&quot;BH&quot;:&quot;Bahrain&quot;,&quot;BD&quot;:&quot;Bangladesh&quot;,&quot;BB&quot;:&quot;Barbados&quot;,&quot;BY&quot;:&quot;Belarus&quot;,&quot;BE&quot;:&quot;Belgium&quot;,&quot;BZ&quot;:&quot;Belize&quot;,&quot;BJ&quot;:&quot;Benin&quot;,&quot;BM&quot;:&quot;Bermuda&quot;,&quot;BT&quot;:&quot;Bhutan&quot;,&quot;BO&quot;:&quot;Bolivia&quot;,&quot;BA&quot;:&quot;Bosnia and Herzegovina&quot;,&quot;BW&quot;:&quot;Botswana&quot;,&quot;BV&quot;:&quot;Bouvet Island&quot;,&quot;BR&quot;:&quot;Brazil&quot;,&quot;IO&quot;:&quot;British Indian Ocean Territory&quot;,&quot;BN&quot;:&quot;Brunei Darussalam&quot;,&quot;BG&quot;:&quot;Bulgaria&quot;,&quot;BF&quot;:&quot;Burkina Faso&quot;,&quot;BI&quot;:&quot;Burundi&quot;,&quot;KH&quot;:&quot;Cambodia&quot;,&quot;CM&quot;:&quot;Cameroon&quot;,&quot;CA&quot;:&quot;Canada&quot;,&quot;CV&quot;:&quot;Cape Verde&quot;,&quot;KY&quot;:&quot;Cayman Islands&quot;,&quot;CF&quot;:&quot;Central African Republic&quot;,&quot;TD&quot;:&quot;Chad&quot;,&quot;CL&quot;:&quot;Chile&quot;,&quot;CN&quot;:&quot;China&quot;,&quot;CX&quot;:&quot;Christmas Island&quot;,&quot;CC&quot;:&quot;Cocos (Keeling) Islands&quot;,&quot;CO&quot;:&quot;Colombia&quot;,&quot;KM&quot;:&quot;Comoros&quot;,&quot;CG&quot;:&quot;Congo&quot;,&quot;CK&quot;:&quot;Cook Islands&quot;,&quot;CR&quot;:&quot;Costa Rica&quot;,&quot;HR&quot;:&quot;Croatia (Hrvatska)&quot;,&quot;CU&quot;:&quot;Cuba&quot;,&quot;CY&quot;:&quot;Cyprus&quot;,&quot;CZ&quot;:&quot;Czech Republic&quot;,&quot;DK&quot;:&quot;Denmark&quot;,&quot;DJ&quot;:&quot;Djibouti&quot;,&quot;DM&quot;:&quot;Dominica&quot;,&quot;DO&quot;:&quot;Dominican Republic&quot;,&quot;TP&quot;:&quot;East Timor&quot;,&quot;EC&quot;:&quot;Ecuador&quot;,&quot;EG&quot;:&quot;Egypt&quot;,&quot;SV&quot;:&quot;El Salvador&quot;,&quot;GQ&quot;:&quot;Equatorial Guinea&quot;,&quot;ER&quot;:&quot;Eritrea&quot;,&quot;EE&quot;:&quot;Estonia&quot;,&quot;ET&quot;:&quot;Ethiopia&quot;,&quot;FK&quot;:&quot;Falkland Islands (Malvinas)&quot;,&quot;FO&quot;:&quot;Faroe Islands&quot;,&quot;FJ&quot;:&quot;Fiji&quot;,&quot;FI&quot;:&quot;Finland&quot;,&quot;FR&quot;:&quot;France&quot;,&quot;FX&quot;:&quot;France, Metropolitan&quot;,&quot;GF&quot;:&quot;French Guiana&quot;,&quot;PF&quot;:&quot;French Polynesia&quot;,&quot;TF&quot;:&quot;French Southern Territories&quot;,&quot;GA&quot;:&quot;Gabon&quot;,&quot;GM&quot;:&quot;Gambia&quot;,&quot;GE&quot;:&quot;Georgia&quot;,&quot;DE&quot;:&quot;Germany&quot;,&quot;GH&quot;:&quot;Ghana&quot;,&quot;GI&quot;:&quot;Gibraltar&quot;,&quot;GK&quot;:&quot;Guernsey&quot;,&quot;GR&quot;:&quot;Greece&quot;,&quot;GL&quot;:&quot;Greenland&quot;,&quot;GD&quot;:&quot;Grenada&quot;,&quot;GP&quot;:&quot;Guadeloupe&quot;,&quot;GU&quot;:&quot;Guam&quot;,&quot;GT&quot;:&quot;Guatemala&quot;,&quot;GN&quot;:&quot;Guinea&quot;,&quot;GW&quot;:&quot;Guinea-Bissau&quot;,&quot;GY&quot;:&quot;Guyana&quot;,&quot;HT&quot;:&quot;Haiti&quot;,&quot;HM&quot;:&quot;Heard and Mc Donald Islands&quot;,&quot;HN&quot;:&quot;Honduras&quot;,&quot;HK&quot;:&quot;Hong Kong&quot;,&quot;HU&quot;:&quot;Hungary&quot;,&quot;IS&quot;:&quot;Iceland&quot;,&quot;IN&quot;:&quot;India&quot;,&quot;IM&quot;:&quot;Isle of Man&quot;,&quot;ID&quot;:&quot;Indonesia&quot;,&quot;IR&quot;:&quot;Iran (Islamic Republic of)&quot;,&quot;IQ&quot;:&quot;Iraq&quot;,&quot;IE&quot;:&quot;Ireland&quot;,&quot;IL&quot;:&quot;Israel&quot;,&quot;IT&quot;:&quot;Italy&quot;,&quot;CI&quot;:&quot;Ivory Coast&quot;,&quot;JE&quot;:&quot;Jersey&quot;,&quot;JM&quot;:&quot;Jamaica&quot;,&quot;JP&quot;:&quot;Japan&quot;,&quot;JO&quot;:&quot;Jordan&quot;,&quot;KZ&quot;:&quot;Kazakhstan&quot;,&quot;KE&quot;:&quot;Kenya&quot;,&quot;KI&quot;:&quot;Kiribati&quot;,&quot;KP&quot;:&quot;Korea,Democratic People\\s Republic of&quot;,&quot;KR&quot;:&quot;Korea, Republic of&quot;,&quot;XK&quot;:&quot;Kosovo&quot;,&quot;KW&quot;:&quot;Kuwait&quot;,&quot;KG&quot;:&quot;Kyrgyzstan&quot;,&quot;LA&quot;:&quot;Lao People\\s Democratic Republic&quot;,&quot;LV&quot;:&quot;Latvia&quot;,&quot;LB&quot;:&quot;Lebanon&quot;,&quot;LS&quot;:&quot;Lesotho&quot;,&quot;LR&quot;:&quot;Liberia&quot;,&quot;LY&quot;:&quot;Libyan Arab Jamahiriya&quot;,&quot;LI&quot;:&quot;Liechtenstein&quot;,&quot;LT&quot;:&quot;Lithuania&quot;,&quot;LU&quot;:&quot;Luxembourg&quot;,&quot;MO&quot;:&quot;Macau&quot;,&quot;MK&quot;:&quot;Macedonia&quot;,&quot;MG&quot;:&quot;Madagascar&quot;,&quot;MW&quot;:&quot;Malawi&quot;,&quot;MY&quot;:&quot;Malaysia&quot;,&quot;MV&quot;:&quot;Maldives&quot;,&quot;ML&quot;:&quot;Mali&quot;,&quot;MT&quot;:&quot;Malta&quot;,&quot;MH&quot;:&quot;Marshall Islands&quot;,&quot;MQ&quot;:&quot;Martinique&quot;,&quot;MR&quot;:&quot;Mauritania&quot;,&quot;MU&quot;:&quot;Mauritius&quot;,&quot;TY&quot;:&quot;Mayotte&quot;,&quot;MX&quot;:&quot;Mexico&quot;,&quot;FM&quot;:&quot;Micronesia, Federated States of&quot;,&quot;MD&quot;:&quot;Moldova, Republic of&quot;,&quot;MC&quot;:&quot;Monaco&quot;,&quot;MN&quot;:&quot;Mongolia&quot;,&quot;ME&quot;:&quot;Montenegro&quot;,&quot;MS&quot;:&quot;Montserrat&quot;,&quot;MA&quot;:&quot;Morocco&quot;,&quot;MZ&quot;:&quot;Mozambique&quot;,&quot;MM&quot;:&quot;Myanmar&quot;,&quot;NA&quot;:&quot;Namibia&quot;,&quot;NR&quot;:&quot;Nauru&quot;,&quot;NP&quot;:&quot;Nepal&quot;,&quot;NL&quot;:&quot;Netherlands&quot;,&quot;AN&quot;:&quot;Netherlands Antilles&quot;,&quot;NC&quot;:&quot;New Caledonia&quot;,&quot;NZ&quot;:&quot;New Zealand&quot;,&quot;NI&quot;:&quot;Nicaragua&quot;,&quot;NE&quot;:&quot;Niger&quot;,&quot;NG&quot;:&quot;Nigeria&quot;,&quot;NU&quot;:&quot;Niue&quot;,&quot;NF&quot;:&quot;Norfolk Island&quot;,&quot;MP&quot;:&quot;Northern Mariana Islands&quot;,&quot;NO&quot;:&quot;Norway&quot;,&quot;OM&quot;:&quot;Oman&quot;,&quot;PK&quot;:&quot;Pakistan&quot;,&quot;PW&quot;:&quot;Palau&quot;,&quot;PS&quot;:&quot;Palestine&quot;,&quot;PA&quot;:&quot;Panama&quot;,&quot;PG&quot;:&quot;Papua New Guinea&quot;,&quot;PY&quot;:&quot;Paraguay&quot;,&quot;PE&quot;:&quot;Peru&quot;,&quot;PH&quot;:&quot;Philippines&quot;,&quot;PN&quot;:&quot;Pitcairn&quot;,&quot;PL&quot;:&quot;Poland&quot;,&quot;PT&quot;:&quot;Portugal&quot;,&quot;PR&quot;:&quot;Puerto Rico&quot;,&quot;QA&quot;:&quot;Qatar&quot;,&quot;RE&quot;:&quot;Reunion&quot;,&quot;RO&quot;:&quot;Romania&quot;,&quot;RU&quot;:&quot;Russian Federation&quot;,&quot;RW&quot;:&quot;Rwanda&quot;,&quot;KN&quot;:&quot;Saint Kitts and Nevis&quot;,&quot;LC&quot;:&quot;Saint Lucia&quot;,&quot;VC&quot;:&quot;Saint Vincent and the Grenadines&quot;,&quot;WS&quot;:&quot;Samoa&quot;,&quot;SM&quot;:&quot;San Marino&quot;,&quot;ST&quot;:&quot;Sao Tome and Principe&quot;,&quot;SA&quot;:&quot;Saudi Arabia&quot;,&quot;SN&quot;:&quot;Senegal&quot;,&quot;RS&quot;:&quot;Serbia&quot;,&quot;SC&quot;:&quot;Seychelles&quot;,&quot;SL&quot;:&quot;Sierra Leone&quot;,&quot;SG&quot;:&quot;Singapore&quot;,&quot;SK&quot;:&quot;Slovakia&quot;,&quot;SI&quot;:&quot;Slovenia&quot;,&quot;SB&quot;:&quot;Solomon Islands&quot;,&quot;SO&quot;:&quot;Somalia&quot;,&quot;ZA&quot;:&quot;South Africa&quot;,&quot;GS&quot;:&quot;South Georgia South Sandwich Islands&quot;,&quot;SS&quot;:&quot;South Sudan&quot;,&quot;ES&quot;:&quot;Spain&quot;,&quot;LK&quot;:&quot;Sri Lanka&quot;,&quot;SH&quot;:&quot;St. Helena&quot;,&quot;PM&quot;:&quot;St. Pierre and Miquelon&quot;,&quot;SD&quot;:&quot;Sudan&quot;,&quot;SR&quot;:&quot;Suriname&quot;,&quot;SJ&quot;:&quot;Svalbard and Jan Mayen Islands&quot;,&quot;SZ&quot;:&quot;Swaziland&quot;,&quot;SE&quot;:&quot;Sweden&quot;,&quot;CH&quot;:&quot;Switzerland&quot;,&quot;SY&quot;:&quot;Syrian Arab Republic&quot;,&quot;TW&quot;:&quot;Taiwan&quot;,&quot;TJ&quot;:&quot;Tajikistan&quot;,&quot;TZ&quot;:&quot;Tanzania, United Republic of&quot;,&quot;TH&quot;:&quot;Thailand&quot;,&quot;TG&quot;:&quot;Togo&quot;,&quot;TK&quot;:&quot;Tokelau&quot;,&quot;TO&quot;:&quot;Tonga&quot;,&quot;TT&quot;:&quot;Trinidad and Tobago&quot;,&quot;TN&quot;:&quot;Tunisia&quot;,&quot;TR&quot;:&quot;Turkey&quot;,&quot;TM&quot;:&quot;Turkmenistan&quot;,&quot;TC&quot;:&quot;Turks and Caicos Islands&quot;,&quot;TV&quot;:&quot;Tuvalu&quot;,&quot;UG&quot;:&quot;Uganda&quot;,&quot;UA&quot;:&quot;Ukraine&quot;,&quot;AE&quot;:&quot;United Arab Emirates&quot;,&quot;GB&quot;:&quot;United Kingdom&quot;,&quot;US&quot;:&quot;United States&quot;,&quot;UM&quot;:&quot;United States minor outlying islands&quot;,&quot;UY&quot;:&quot;Uruguay&quot;,&quot;UZ&quot;:&quot;Uzbekistan&quot;,&quot;VU&quot;:&quot;Vanuatu&quot;,&quot;VA&quot;:&quot;Vatican City State&quot;,&quot;VE&quot;:&quot;Venezuela&quot;,&quot;VN&quot;:&quot;Vietnam&quot;,&quot;VG&quot;:&quot;Virgin Islands (British)&quot;,&quot;vi&quot;:&quot;Virgin Islands (U.S.)&quot;,&quot;WF&quot;:&quot;Wallis and Futuna Islands&quot;,&quot;EH&quot;:&quot;Western Sahara&quot;,&quot;YE&quot;:&quot;Yemen&quot;,&quot;ZR&quot;:&quot;Zaire&quot;,&quot;ZM&quot;:&quot;Zambia&quot;,&quot;ZW&quot;:&quot;Zimbabwe&quot;}"
                                               data-pk="O-JFhTD-8JA6e"
                                               data-url="https://demo.s-cart.org/sc_admin/order/update"
                                               data-title="Quốc gia" data-value="IN">India</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td class="td-title">Trạng thái đơn hàng:</td>
                                        <td><a href="#" class="updateStatus editable editable-click" data-name="status"
                                               data-type="select"
                                               data-source="{&quot;1&quot;:&quot;New&quot;,&quot;2&quot;:&quot;Processing&quot;,&quot;3&quot;:&quot;Hold&quot;,&quot;4&quot;:&quot;Canceled&quot;,&quot;5&quot;:&quot;Done&quot;,&quot;6&quot;:&quot;Failed&quot;}"
                                               data-pk="O-JFhTD-8JA6e" data-value="1"
                                               data-url="https://demo.s-cart.org/sc_admin/order/update"
                                               data-title="Trạng thái đơn hàng">New</a></td>
                                    </tr>
                                    <tr>
                                        <td>Trạng thái vận chuyển:</td>
                                        <td><a href="#" class="updateStatus editable editable-click"
                                               data-name="shipping_status" data-type="select"
                                               data-source="{&quot;1&quot;:&quot;Not sent&quot;,&quot;2&quot;:&quot;Sending&quot;,&quot;3&quot;:&quot;Shipping done&quot;}"
                                               data-pk="O-JFhTD-8JA6e" data-value="1"
                                               data-url="https://demo.s-cart.org/sc_admin/order/update"
                                               data-title="Trạng thái vận chuyển">Not sent</a></td>
                                    </tr>
                                    <tr>
                                        <td>Trạng thái thanh toán:</td>
                                        <td><a href="#" class="updateStatus editable editable-click"
                                               data-name="payment_status" data-type="select"
                                               data-source="{&quot;1&quot;:&quot;Unpaid&quot;,&quot;2&quot;:&quot;Partial payment&quot;,&quot;3&quot;:&quot;Paid&quot;,&quot;4&quot;:&quot;Refurn&quot;}"
                                               data-pk="O-JFhTD-8JA6e" data-value="1"
                                               data-url="https://demo.s-cart.org/sc_admin/order/update"
                                               data-title="Trạng thái thanh toán">Unpaid</a></td>
                                    </tr>
                                    <tr>
                                        <td>Phương thức vận chuyển:</td>
                                        <td><a href="#" class="updateStatus editable editable-click"
                                               data-name="shipping_method" data-type="select"
                                               data-source="{&quot;ShippingStandard&quot;:&quot;Shipping Standard&quot;}"
                                               data-pk="O-JFhTD-8JA6e" data-value="ShippingStandard"
                                               data-url="https://demo.s-cart.org/sc_admin/order/update"
                                               data-title="Phương thức vận chuyển">ShippingStandard</a></td>
                                    </tr>
                                    <tr>
                                        <td>Phương thức thanh toán:</td>
                                        <td><a href="#" class="updateStatus editable editable-click"
                                               data-name="payment_method" data-type="select"
                                               data-source="{&quot;Cash&quot;:&quot;Thanh to\u00e1n ti\u1ec1n m\u1eb7t&quot;,&quot;BankTransfer&quot;:&quot;Chuy\u1ec3n kho\u1ea3n ng\u00e2n h\u00e0ng&quot;}"
                                               data-pk="O-JFhTD-8JA6e" data-value="Cash"
                                               data-url="https://demo.s-cart.org/sc_admin/order/update"
                                               data-title="Phương thức thanh toán">Cash</a></td>
                                    </tr>
                                    <tr>
                                        <td>Tên miền:</td>
                                        <td>https://s-cart-template-pro.s-cart.org</td>
                                    </tr>
                                    <tr>
                                        <td> Tạo lúc:</td>
                                        <td>2023-06-27 01:55:13</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="table table-hover box-body text-wrap table-bordered">
                                    <tbody>
                                    <tr>
                                        <td class="td-title"><i class="far fa-money-bill-alt nav-icon"></i> Tiền tệ:
                                        </td>
                                        <td>VND</td>
                                    </tr>
                                    <tr>
                                        <td class="td-title"><i class="fas fa-chart-line"></i> Tỉ giá:</td>
                                        <td>20000.00</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <form id="form-add-item" action="" method="">
                            <input type="hidden" name="_token" value="gUeDIP7PYOIq3azeyv6H52HfXAyInLu3I2Lu2Xyk"> <input
                                type="hidden" name="order_id" value="O-JFhTD-8JA6e">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card collapsed-card">
                                        <div class="table-responsive">
                                            <table class="table table-hover box-body text-wrap table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Tên</th>
                                                    <th>Mã SKU</th>
                                                    <th class="product_price">Giá</th>
                                                    <th class="product_qty">Số lượng</th>
                                                    <th class="product_total">Tổng tiền</th>
                                                    <th class="product_tax">Thuế</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Com Chien Hai San
                                                    </td>
                                                    <td>COM-CHIEN-HAI-SAN</td>
                                                    <td class="product_price"><a href="#"
                                                                                 class="edit-item-detail editable editable-click"
                                                                                 data-value="700000.00"
                                                                                 data-name="price" data-type="text"
                                                                                 min="0"
                                                                                 data-pk="99814a00-0cfe-475b-bccc-df75c6f28b31"
                                                                                 data-url="https://demo.s-cart.org/sc_admin/order/edit_item"
                                                                                 data-title="Giá">700000.00</a></td>
                                                    <td class="product_qty">x <a href="#"
                                                                                 class="edit-item-detail editable editable-click"
                                                                                 data-value="1" data-name="qty"
                                                                                 data-type="number" min="0"
                                                                                 data-pk="99814a00-0cfe-475b-bccc-df75c6f28b31"
                                                                                 data-url="https://demo.s-cart.org/sc_admin/order/edit_item"
                                                                                 data-title="Số lượng"> 1</a></td>
                                                    <td class="product_total item_id_99814a00-0cfe-475b-bccc-df75c6f28b31">
                                                        700,000₫
                                                    </td>
                                                    <td class="product_tax"><a href="#"
                                                                               class="edit-item-detail editable editable-click"
                                                                               data-value="70000.00" data-name="tax"
                                                                               data-type="text" min="0"
                                                                               data-pk="99814a00-0cfe-475b-bccc-df75c6f28b31"
                                                                               data-url="https://demo.s-cart.org/sc_admin/order/edit_item"
                                                                               data-title="Thuế"> 70000.00</a></td>
                                                    <td>
                                                        <span
                                                            onclick="deleteItem(99814a00-0cfe-475b-bccc-df75c6f28b31);"
                                                            class="btn btn-danger btn-xs" data-title="Delete"><i
                                                                class="fa fa-trash" aria-hidden="true"></i></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Cam Sanh Mong Nuoc
                                                    </td>
                                                    <td>CAM-SANH-MONG-NUOC</td>
                                                    <td class="product_price"><a href="#"
                                                                                 class="edit-item-detail editable editable-click"
                                                                                 data-value="500000.00"
                                                                                 data-name="price" data-type="text"
                                                                                 min="0"
                                                                                 data-pk="99814a00-0fea-4d92-ac9a-c7551bd16f0e"
                                                                                 data-url="https://demo.s-cart.org/sc_admin/order/edit_item"
                                                                                 data-title="Giá">500000.00</a></td>
                                                    <td class="product_qty">x <a href="#"
                                                                                 class="edit-item-detail editable editable-click"
                                                                                 data-value="1" data-name="qty"
                                                                                 data-type="number" min="0"
                                                                                 data-pk="99814a00-0fea-4d92-ac9a-c7551bd16f0e"
                                                                                 data-url="https://demo.s-cart.org/sc_admin/order/edit_item"
                                                                                 data-title="Số lượng"> 1</a></td>
                                                    <td class="product_total item_id_99814a00-0fea-4d92-ac9a-c7551bd16f0e">
                                                        500,000₫
                                                    </td>
                                                    <td class="product_tax"><a href="#"
                                                                               class="edit-item-detail editable editable-click"
                                                                               data-value="50000.00" data-name="tax"
                                                                               data-type="text" min="0"
                                                                               data-pk="99814a00-0fea-4d92-ac9a-c7551bd16f0e"
                                                                               data-url="https://demo.s-cart.org/sc_admin/order/edit_item"
                                                                               data-title="Thuế"> 50000.00</a></td>
                                                    <td>
                                                        <span
                                                            onclick="deleteItem(99814a00-0fea-4d92-ac9a-c7551bd16f0e);"
                                                            class="btn btn-danger btn-xs" data-title="Delete"><i
                                                                class="fa fa-trash" aria-hidden="true"></i></span>
                                                    </td>
                                                </tr>
                                                <tr id="add-item" class="not-print">
                                                    <td colspan="7">
                                                        <button type="button" class="btn btn-flat btn-success"
                                                                id="add-item-button" title="Thêm mới"><i
                                                                class="fa fa-plus"></i> Thêm mới
                                                        </button>
                                                        &nbsp;&nbsp;&nbsp;<button
                                                            style="display: none; margin-right: 50px" type="button"
                                                            class="btn btn-flat btn-warning" id="add-item-button-save"
                                                            title="Save"><i class="fa fa-save"></i> Lưu lại
                                                        </button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card collapsed-card">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td class="td-title-normal">SubTotal:</td>
                                            <td style="text-align:right" class="data-subtotal">1,200,000</td>
                                        </tr>
                                        <tr>
                                            <td class="td-title-normal">Tax:</td>
                                            <td style="text-align:right" class="data-tax">120,000</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping Standard:</td>
                                            <td style="text-align:right"><a href="#"
                                                                            class="updatePrice data-shipping editable editable-click"
                                                                            data-name="shipping" data-type="text"
                                                                            data-pk="99814a00-0707-4eda-862f-b2f82e59c8c3"
                                                                            data-url="https://demo.s-cart.org/sc_admin/order/update"
                                                                            data-title="Vận chuyển">400000.00</a></td>
                                        </tr>
                                        <tr>
                                            <td>Discount(-):</td>
                                            <td style="text-align:right"><a href="#"
                                                                            class="updatePrice data-discount editable editable-click"
                                                                            data-name="discount" data-type="text"
                                                                            data-pk="99814a00-070e-41c3-9b75-865f7f201b29"
                                                                            data-url="https://demo.s-cart.org/sc_admin/order/update"
                                                                            data-title="Giảm giá">0.00</a></td>
                                        </tr>
                                        <tr>
                                            <td>Other fee:</td>
                                            <td style="text-align:right"><a href="#"
                                                                            class="updatePrice data-other_fee editable editable-click"
                                                                            data-name="other_fee" data-type="text"
                                                                            data-pk="99814a00-0717-4c46-bada-c70ba12f7141"
                                                                            data-url="https://demo.s-cart.org/sc_admin/order/update"
                                                                            data-title="Other fee">0.00</a></td>
                                        </tr>
                                        <tr style="background:#f5f3f3;font-weight: bold;">
                                            <td>Total:</td>
                                            <td style="text-align:right" class="data-total">1,720,000</td>
                                        </tr>
                                        <tr>
                                            <td>Received(-):</td>
                                            <td style="text-align:right"><a href="#"
                                                                            class="updatePrice data-received editable editable-click"
                                                                            data-name="received" data-type="text"
                                                                            data-pk="99814a00-0725-4393-9cf8-0d7928260503"
                                                                            data-url="https://demo.s-cart.org/sc_admin/order/update"
                                                                            data-title="Đã nhận">0.00</a></td>
                                        </tr>
                                        <tr style="font-weight:bold;" class="data-balance">
                                            <td>Còn lại:</td>
                                            <td style="text-align:right">1,720,000</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <table class="table table-hover box-body text-wrap table-bordered">
                                        <tbody>
                                        <tr>
                                            <td class="td-title">Ghi chú:</td>
                                            <td>
                                                <a href="#" class="updateInfo editable editable-click editable-empty"
                                                   data-name="comment" data-type="text" data-pk="O-JFhTD-8JA6e"
                                                   data-url="https://demo.s-cart.org/sc_admin/order/update"
                                                   data-title="">Empty</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card collapsed-card"
                                "="">
                                <div class="card-header border-transparent">
                                    <h3 class="card-title">Lịch sử đơn hàng</h3>
                                    <div class="order-info">
                                        <span><b>Agent:</b> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36</span>
                                        <span><b>IP:</b> 162.158.23.8</span>
                                    </div>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="card-body p-0 out">
                                    <div class="table-responsive">
                                        <table class="table m-0" id="history">
                                            <tbody>
                                            <tr>
                                                <th>Nhân viên</th>
                                                <th>Nội dung</th>
                                                <th>Thời gian</th>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <div class="history">New order</div>
                                                </td>
                                                <td>2023-06-27 01:55:13</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
