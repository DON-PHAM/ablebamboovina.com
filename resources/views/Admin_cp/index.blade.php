@extends('Admin_cp.Layout.master')
@section('title',trans('home.title'))
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class aria-hidden="true"></i> Tổng hợp
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="https://demo.s-cart.org/sc_admin"><i class="fa fa-home fa-1x"></i> Trang chủ</a></li>
                        <li class="breadcrumb-item active">Tổng hợp</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Tổng đơn hàng</span>
                            <span class="info-box-number">68</span>
                            <a href="https://demo.s-cart.org/sc_admin/order" class="small-box-footer">
                                Xem thêm&nbsp;
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-tags"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Tổng sản phẩm</span>
                            <span class="info-box-number">36</span>
                            <a href="https://demo.s-cart.org/sc_admin/product" class="small-box-footer">
                                Xem thêm&nbsp;
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Tổng khách hàng</span>
                            <span class="info-box-number">26</span>
                            <a href="https://demo.s-cart.org/sc_admin/customer" class="small-box-footer">
                                Xem thêm&nbsp;
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-map-signs"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Tổng blog</span>
                            <span class="info-box-number">6</span>
                            <a href="https://demo.s-cart.org/sc_admin/news" class="small-box-footer">
                                Xem thêm&nbsp;
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Đơn hàng trong tháng</h5>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="chart-days" style="width:100%; height:auto;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Đơn hàng trong năm</h5>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="chart-month" style="width:100%; height:auto;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Đơn hàng mới</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Trạng thái đơn hàng</th>
                                        <th>Tạo lúc</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-JFhTD-8JA6e">#O-JFhTD-8JA6e</a></td>
                                        <td>gs24746.gs@gmail.com</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td>2023-06-27 01:55:13</td>
                                    </tr>
                                    <tr>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-3T4ur-sU408">#O-3T4ur-sU408</a></td>
                                        <td>bertojunikrisnanto@gmail.com</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td>2023-06-26 15:54:39</td>
                                    </tr>
                                    <tr>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-WbiyN-cLvh4">#O-WbiyN-cLvh4</a></td>
                                        <td>bertojunikrisnanto@gmail.com</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td>2023-06-26 15:51:15</td>
                                    </tr>
                                    <tr>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-FZUxD-CXHHr">#O-FZUxD-CXHHr</a></td>
                                        <td>mutharasuram561@gmail.com</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td>2023-06-19 12:57:13</td>
                                    </tr>
                                    <tr>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-1KMOJ-g7T7d">#O-1KMOJ-g7T7d</a></td>
                                        <td>nabilamandap@gmail.com</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td>2023-06-19 11:00:06</td>
                                    </tr>
                                    <tr>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-fuJVW-ss2zc">#O-fuJVW-ss2zc</a></td>
                                        <td>1@gmail.com</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td>2023-06-16 21:24:56</td>
                                    </tr>
                                    <tr>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-4ol5u-mgRzz">#O-4ol5u-mgRzz</a></td>
                                        <td>jefoly@mailinator.com</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td>2023-06-16 01:25:50</td>
                                    </tr>
                                    <tr>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-c5DMD-iLfo7">#O-c5DMD-iLfo7</a></td>
                                        <td>slkdfjwelk232@gmail.com</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td>2023-06-13 10:03:19</td>
                                    </tr>
                                    <tr>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-ghWGw-Hfwou">#O-ghWGw-Hfwou</a></td>
                                        <td>becef92254@soombo.com</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td>2023-06-12 23:18:48</td>
                                    </tr>
                                    <tr>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-hWexk-Losxb">#O-hWexk-Losxb</a></td>
                                        <td>qweqwe@yopmail.com</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td>2023-06-08 16:39:01</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Khách hàng mới mới</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <tr>
                                        <th>Email</th>
                                        <th>Tên</th>
                                        <th>Provider</th>
                                        <th>Tạo lúc</th>
                                    </tr>
                                    <tbody>
                                    <tr>
                                        <td><a href="https://demo.s-cart.org/sc_admin/customer/edit/99830c0c-5019-45f6-a8ac-46466bb091a3">bertojunikrisnanto@gmail.com</a></td>
                                        <td>Berto Krisnanto</td>
                                        <td>google</td>
                                        <td>2023-06-27 22:53:39</td>
                                    </tr>
                                    <tr>
                                        <td><a href="https://demo.s-cart.org/sc_admin/customer/edit/998072aa-0d88-4dd9-911b-9e05dc8ca5ff">bertojunikrisnanto@gmail.com</a></td>
                                        <td>Berto Krisnanto</td>
                                        <td></td>
                                        <td>2023-06-26 15:53:06</td>
                                    </tr>
                                    <tr>
                                        <td><a href="https://demo.s-cart.org/sc_admin/customer/edit/99447cf3-b6d4-4d9b-b3df-f95edd5f9246">hackerkill8442@gmail.com</a></td>
                                        <td>Thà Lê Thanh </td>
                                        <td>google</td>
                                        <td>2023-05-27 20:32:11</td>
                                    </tr>
                                    <tr>
                                        <td><a href="https://demo.s-cart.org/sc_admin/customer/edit/993f5366-f75b-4f52-b94e-71a4f6f076f7">refiloeraselane@gmail.com</a></td>
                                        <td>Refiloe Raselane</td>
                                        <td></td>
                                        <td>2023-05-25 06:56:52</td>
                                    </tr>
                                    <tr>
                                        <td><a href="https://demo.s-cart.org/sc_admin/customer/edit/990cf31d-39e6-418d-ba46-5997a90f0aa5">fyds.arts@gmail.com</a></td>
                                        <td>fyds fyds </td>
                                        <td>google</td>
                                        <td>2023-04-30 05:56:14</td>
                                    </tr>
                                    <tr>
                                        <td><a href="https://demo.s-cart.org/sc_admin/customer/edit/9909b42e-fce7-4ffd-b7b7-69c34894c932">test@test.com</a></td>
                                        <td>js lee</td>
                                        <td></td>
                                        <td>2023-04-28 15:12:47</td>
                                    </tr>
                                    <tr>
                                        <td><a href="https://demo.s-cart.org/sc_admin/customer/edit/99068fe1-fe8c-452b-8a4d-69a0fa9329c5">qemadawep@mailinator.com</a></td>
                                        <td>Ori Carver</td>
                                        <td></td>
                                        <td>2023-04-27 01:43:48</td>
                                    </tr>
                                    <tr>
                                        <td><a href="https://demo.s-cart.org/sc_admin/customer/edit/9905ccdb-3350-4c88-8632-bd621f886e04">tienhm@beetsoft.com.vn</a></td>
                                        <td>Hoang Tien</td>
                                        <td></td>
                                        <td>2023-04-26 16:38:28</td>
                                    </tr>
                                    <tr>
                                        <td><a href="https://demo.s-cart.org/sc_admin/customer/edit/99046fe1-ff68-43ca-8d6a-56535edcc602">yan1477@gmail.com</a></td>
                                        <td>Yan Nykonorov </td>
                                        <td>google</td>
                                        <td>2023-04-26 00:22:40</td>
                                    </tr>
                                    <tr>
                                        <td><a href="https://demo.s-cart.org/sc_admin/customer/edit/98fa08ec-2b51-4e87-ad40-88eddae564f7">hbh@gmail.com</a></td>
                                        <td>dems hbdha</td>
                                        <td></td>
                                        <td>2023-04-20 20:16:29</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
    <script src="{{asset('backend/assets/admin/plugin/chartjs/highcharts.js')}}"></script>
    <script src="{{assert('backend/assets/admin/plugin/chartjs/highcharts-3d.js')}}"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            var myChart = Highcharts.chart('chart-days', {
                credits: {
                    enabled: false
                },
                title: {
                    text: 'Thống kê trong 1 tháng'
                },
                xAxis: {
                    categories: ["06-01","06-02","06-03","06-04","06-05","06-06","06-07","06-08","06-09","06-10","06-11","06-12","06-13","06-14","06-15","06-16","06-17","06-18","06-19","06-20","06-21","06-22","06-23","06-24","06-25","06-26","06-27","06-28","06-29","06-30","07-01"],
                    crosshair: false

                },

                yAxis: [{
                    min: 0,
                    title: {
                        text: 'Tổng đơn hàng'
                    },
                }, {
                    title: {
                        text: 'Tổng số tiền (Bit)'
                    },
                    opposite: true
                },
                ],

                legend: {
                    align: 'left',
                    verticalAlign: 'top',
                    borderWidth: 0
                },

                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.0f} </b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    },
                },

                series: [
                    {
                        type: 'column',
                        name: 'Tổng đơn hàng',
                        data: [0,0,0,0,0,0,0,3,0,0,0,1,1,0,0,2,0,0,2,0,0,0,0,0,0,2,1,0,0,0,0],
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.0f}'
                        }
                    },
                    {
                        type: 'line',
                        name: 'Tổng số tiền (Bit)',
                        color: '#c7730c',
                        yAxis: 1,
                        data: [0,0,0,0,0,0,0,220.6,0,0,0,130,212.5,0,0,339.2,0,0,122.5,0,0,0,0,0,0,129.1,86,0,0,0,0],
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            borderRadius: 3,
                            backgroundColor: 'rgba(252, 255, 197, 0.7)',
                            borderWidth: 0.5,
                            borderColor: '#AAA',
                            y: -6
                        }
                    },
                ]
            });
        });



        // Set up the chart
        var chart = new Highcharts.Chart({
            chart: {
                renderTo: 'chart-month',
                type: 'column',
                options3d: {
                    enabled: true,
                    alpha: 0,
                    beta: 10,
                    depth: 50,
                    viewDistance: 25
                }
            },
            title: {
                text: 'Thống kê trong 12 tháng'
            },
            subtitle: {
                text: 'Dữ liệu so sánh bằng tổng số tiền của đơn hàng, đơn vị Bit'
            },
            legend: {
                enabled: false,
            },
            credits: {
                enabled: false
            },
            xAxis: {
                categories: ["2022-07","2022-08","2022-09","2022-10","2022-11","2022-12","2023-01","2023-02","2023-03","2023-04","2023-05","2023-06","2023-07"],
                crosshair: false,
            },
            yAxis: [
                {
                    min: 0,
                    title: {
                        text: 'Tổng số tiền (Bit)'
                    },
                }
            ],
            plotOptions: {
                column: {
                    depth: 25
                },
                series: {
                    dataLabels: {
                        enabled: true,
                        borderRadius: 3,
                        backgroundColor: 'rgba(252, 255, 197, 0.7)',
                        borderWidth: 0.5,
                        borderColor: '#AAA',
                        y: -6
                    }
                }
            },
            series: [
                {
                    name : 'Tổng số tiền (Bit)',
                    data: [0,0,0,0,0,0,681,2542.5,913.3,2438.6,652.6,1239.9,0],
                },
                {
                    type : 'line',
                    color: '#d05135',
                    name : 'Tổng số tiền (Bit)',
                    data: [0,0,0,0,0,0,681,2542.5,913.3,2438.6,652.6,1239.9,0]
                }
            ]
        });

        function showValues() {
            $('#alpha-value').html(chart.options.chart.options3d.alpha);
            $('#beta-value').html(chart.options.chart.options3d.beta);
            $('#depth-value').html(chart.options.chart.options3d.depth);
        }

        // Activate the sliders
        $('#sliders input').on('input change', function () {
            chart.options.chart.options3d[this.id] = parseFloat(this.value);
            showValues();
            chart.redraw(false);
        });

        showValues();
    </script>
    <script>
        Highcharts.chart('chart-pie', {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45,
                    beta: 0
                }
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Thống kê tổng số đơn hàng'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    depth: 35,
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}:{point.y}'
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Loại thiết bị',
                data: [{"name":"(2022-07)","y":0,"sliced":true,"selected":false},{"name":"(2022-08)","y":0,"sliced":true,"selected":false},{"name":"(2022-09)","y":0,"sliced":true,"selected":false},{"name":"(2022-10)","y":0,"sliced":true,"selected":false},{"name":"(2022-11)","y":0,"sliced":true,"selected":false},{"name":"(2022-12)","y":0,"sliced":true,"selected":false},{"name":"(2023-01)","y":6,"sliced":true,"selected":false},{"name":"(2023-02)","y":13,"sliced":true,"selected":false},{"name":"(2023-03)","y":13,"sliced":true,"selected":false},{"name":"(2023-04)","y":17,"sliced":true,"selected":false},{"name":"(2023-05)","y":7,"sliced":true,"selected":false},{"name":"(2023-06)","y":12,"sliced":true,"selected":false},{"name":"(2023-07)","y":0,"sliced":true,"selected":true}],
            }]
        });
    </script>
    <script type="text/javascript">
        $(function () {
            $('input.checkbox').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });

        $(document).on('ready pjax:end', function(event) {
            $('input.checkbox').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        })

    </script>
    <script>
        $(function () {
            $(".date_time").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>
    <script type="text/javascript">
        (function( $ ){

            $.fn.filemanager = function(type, options) {
                type = type || 'other';

                this.on('click', function(e) {
                    type = $(this).data('type') || type;//sc
                    var route_prefix = (options && options.prefix) ? options.prefix : 'https://demo.s-cart.org/sc_admin/uploads';
                    var target_input = $('#' + $(this).data('input'));
                    var target_preview = $('#' + $(this).data('preview'));
                    window.open(route_prefix + '?type=' + type, 'Quản lý file', 'width=900,height=600');
                    window.SetUrl = function (items) {
                        var file_path = items.map(function (item) {
                            return item.url;
                        }).join(',');

                        // set the value of the desired input to image url
                        target_input.val('').val(file_path).trigger('change');

                        // clear previous preview
                        target_preview.html('');

                        // set or change the preview image src
                        items.forEach(function (item) {
                            target_preview.append(
                                $('<img>').attr('src', item.thumb_url)
                            );
                        });

                        // trigger change event
                        target_preview.trigger('change');
                    };
                    return false;
                });
            }

        })(jQuery);

        $('.lfm').filemanager();
    </script>
    <script type="text/javascript">
        // Select row
        $(function () {
            //Enable check and uncheck all functionality
            $(".grid-select-all").click(function () {
                var clicks = $(this).data('clicks');
                if (clicks) {
                    //Uncheck all checkboxes
                    $(".box-body input[type='checkbox']").iCheck("uncheck");
                    $(".far", this).removeClass("fa-check-square").addClass('fa-square');
                } else {
                    //Check all checkboxes
                    $(".box-body input[type='checkbox']").iCheck("check");
                    $(".far", this).removeClass("fa-square").addClass('fa-check-square');
                }
                $(this).data("clicks", !clicks);
            });

        });
        // == end select row

        function format_number(n) {
            return n.toFixed(0).replace(/./g, function(c, i, a) {
                return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "," + c : c;
            });
        }

        // active tree menu
        $('.nav-treeview > li.active').parents('.has-treeview').addClass('active menu-open');
        // ==end active tree menu

    </script>
    <script>
        function LA() {}
        LA.token = "or4dNZFkgdG5IwqIdKVpJziHZloXFMnJj5CNdUkF";

        function alertJs(type = 'error', msg = '') {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            Toast.fire({
                type: type,
                title: msg
            })
        }

        function alertMsg(type = 'error', msg = '', note = '') {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: true,
            });
            swalWithBootstrapButtons.fire(
                msg,
                note,
                type
            )
        }

        function alertConfirm(type = 'warning', msg = '') {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            Toast.fire({
                type: type,
                title: msg
            })
        }
        $('[data-toggle="tooltip"]').tooltip();
        $('.select2').select2();
    </script>
@endsection
