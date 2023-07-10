@extends('Admin_cp.Layout.master')
@section('title',trans('payment.title'))
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="" aria-hidden="true"></i> Chức năng thanh toán
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="https://demo.s-cart.org/sc_admin"><i
                                    class="fa fa-home fa-1x"></i> Trang chủ</a></li>
                        <li class="breadcrumb-item active">Chức năng thanh toán</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#" aria-controls="custom-tabs-four-home"
                                       aria-selected="true">Đã lưu trên máy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://demo.s-cart.org/sc_admin/plugin/payment/online">Tải
                                        từ thư viện</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" target="_new"
                                       href="https://demo.s-cart.org/sc_admin/plugin/import"><span><i
                                                class="fas fa-save"></i> Import plugin</span></a>
                                </li>
                                <li class="btn-group float-right m-2">
                                    <a href="https://s-cart.org/vi/plugin.html" target="_new"><i class="fa fa-download"
                                                                                                 aria-hidden="true"></i>
                                        Download đầy đủ Ở ĐÂY</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body" id="pjax-container">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                                <div class="table-responsive">
                                    <table class="table table-hover text-nowrap table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Hình ảnh</th>
                                            <th>Mã code</th>
                                            <th>Tên chức năng</th>
                                            <th>Phiên bản</th>
                                            <th>Tác giả</th>
                                            <th>Liên kết</th>
                                            <th>Thứ tự</th>
                                            <th>Hành động</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><img alt="Chuyển khoản ngân hàng" title=""
                                                     src="https://demo.s-cart.org/Plugins/Payment/BankTransfer/images/logo.png"
                                                     style=" width:50px;"></td>
                                            <td>BankTransfer</td>
                                            <td>Chuyển khoản ngân hàng</td>
                                            <td>1.2</td>
                                            <td>Lanh Le</td>
                                            <td><a href="https://S-Cart.Org" target="_new"><i class="fa fa-link"
                                                                                              aria-hidden="true"></i>Link</a>
                                            </td>
                                            <td>0</td>
                                            <td>
                                                <span onclick="disablePlugin($(this),'BankTransfer');" title="Tắt"
                                                      type="button" class="btn btn-flat btn-warning btn-flat"><i
                                                        class="fa fa-power-off"></i></span>&nbsp;<a
                                                    href="https://demo.s-cart.org/sc_admin/plugin/payment?action=config&amp;pluginKey=BankTransfer"><span
                                                        title="Cấu hình" class="btn btn-flat btn-primary"><i
                                                            class="fas fa-cog"></i></span>&nbsp;</a><span
                                                    onclick="uninstallPlugin($(this),'BankTransfer', 1);"
                                                    title="Chỉ xóa dữ liệu" class="btn btn-flat btn-danger"><i
                                                        class="fas fa-times"></i></span> <span
                                                    onclick="uninstallPlugin($(this),'BankTransfer');" title="Gỡ bỏ"
                                                    class="btn btn-flat btn-danger"><i class="fa fa-trash"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img alt="Thanh toán tiền mặt" title=""
                                                     src="https://demo.s-cart.org/Plugins/Payment/Cash/images/logo.png"
                                                     style=" width:50px;"></td>
                                            <td>Cash</td>
                                            <td>Thanh toán tiền mặt</td>
                                            <td>1.2</td>
                                            <td>Lanh Le</td>
                                            <td><a href="https://S-Cart.Org" target="_new"><i class="fa fa-link"
                                                                                              aria-hidden="true"></i>Link</a>
                                            </td>
                                            <td>0</td>
                                            <td>
                                                <span onclick="disablePlugin($(this),'Cash');" title="Tắt" type="button"
                                                      class="btn btn-flat btn-warning btn-flat"><i
                                                        class="fa fa-power-off"></i></span>&nbsp;<span
                                                    onclick="uninstallPlugin($(this),'Cash', 1);"
                                                    title="Chỉ xóa dữ liệu" class="btn btn-flat btn-danger"><i
                                                        class="fas fa-times"></i></span>
                                            </td>
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
    </section>

@endsection
