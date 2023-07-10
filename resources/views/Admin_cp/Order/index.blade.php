@extends('Admin_cp.Layout.master')
@section('title','order.title')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-indent" aria-hidden="true"></i> Danh sách đơn hàng
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="https://demo.s-cart.org/sc_admin"><i
                                    class="fa fa-home fa-1x"></i> Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách đơn hàng</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header with-border">
                            <div class="card-tools">
                                <div class="menu-right">
                                    <form action="https://demo.s-cart.org/sc_admin/order" id="button_search">
                                        <div class="input-group float-left">
                                            <div style="width:130px">
                                                <div class="form-group">
                                                    <label>Sắp xếp:</label>
                                                    <div class="input-group">
                                                        <select
                                                            class="form-control rounded-0 select2 select2-hidden-accessible"
                                                            name="sort_order" id="sort_order"
                                                            data-select2-id="sort_order" tabindex="-1"
                                                            aria-hidden="true">
                                                            <option value="id__desc" data-select2-id="2">ID giảm dần
                                                            </option>
                                                            <option value="id__asc">ID tăng dần</option>
                                                            <option value="email__desc">Email theo thứ tự z-a</option>
                                                            <option value="email__asc">Email theo thứ tự a-z</option>
                                                            <option value="created_at__desc">Date giảm dần</option>
                                                            <option value="created_at__asc">Date tăng dần</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" data-select2-id="1" style="width: 130px;"><span
                                                                class="selection"><span
                                                                    class="select2-selection select2-selection--single"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="0"
                                                                    aria-disabled="false"
                                                                    aria-labelledby="select2-sort_order-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-sort_order-container" role="textbox"
                                                                        aria-readonly="true" title="ID giảm dần">ID giảm dần</span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span>
                                                    </div>
                                                </div>
                                            </div> &nbsp;
                                            <div style="width:130px">
                                                <div class="form-group">
                                                    <label>Từ:</label>
                                                    <div class="input-group">
                                                        <input type="text" name="from_to" id="from_to"
                                                               class="form-control input-sm date_time rounded-0 hasDatepicker"
                                                               data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                                    </div>
                                                </div>
                                            </div> &nbsp;
                                            <div style="width:130px">
                                                <div class="form-group">
                                                    <label>Đến:</label>
                                                    <div class="input-group">
                                                        <input type="text" name="end_to" id="end_to"
                                                               class="form-control input-sm date_time rounded-0 hasDatepicker"
                                                               data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                                    </div>
                                                </div>
                                            </div> &nbsp;
                                            <div style="width:150px">
                                                <div class="form-group">
                                                    <label>Trạng thái:</label>
                                                    <div class="input-group">
                                                        <select class="form-control rounded-0" name="order_status">
                                                            <option value="">Tìm trạng thái đơn hàng</option>
                                                            <option value="1">New</option>
                                                            <option value="2">Processing</option>
                                                            <option value="3">Hold</option>
                                                            <option value="4">Canceled</option>
                                                            <option value="5">Done</option>
                                                            <option value="6">Failed</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> &nbsp;
                                            <div style="width:150px">
                                                <div class="form-group">
                                                    <label>Tìm email:</label>
                                                    <div class="input-group">
                                                        <input type="text" name="email"
                                                               class="form-control rounded-0 float-right"
                                                               placeholder="Tìm email" value="">
                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-primary  btn-flat"><i
                                                                    class="fas fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="float-left">
                            </div>

                        </div>
                        <div class="card-header with-border">
                            <div class="card-tools">
                                <div class="menu-right">
                                    <a href="https://demo.s-cart.org/sc_admin/order/create"
                                       class="btn  btn-success  btn-flat" title="New" id="button_create_new">
                                        <i class="fa fa-plus" title="Thêm mới"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="float-left">
                                <div class="menu-left">
                                    <button type="button" class="btn btn-default grid-select-all"><i
                                            class="far fa-square"></i></button>
                                </div>
                                <div class="menu-left">
                                    <span class="btn btn-flat btn-danger grid-trash" title="Xóa"><i
                                            class="fas fa-trash-alt"></i></span>
                                </div>
                                <div class="menu-left">
                                    <span class="btn btn-flat btn-primary grid-refresh" title="Làm mới"><i
                                            class="fas fa-sync-alt"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-0" id="pjax-container">
                            <div class="table-responsive">
                                <table class="table table-hover box-body text-wrap table-bordered">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th><i class="fas fa-envelope" aria-hidden="true" title="Email"></i></th>
                                        <th><i class="fa fa-shopping-cart" aria-hidden="true" title="Tiền hàng"></i>
                                        </th>
                                        <th><i class="fa fa-truck" aria-hidden="true" title="Vận chuyển"></i></th>
                                        <th><i class="fa fa-tags" aria-hidden="true" title="Giảm giá"></i></th>
                                        <th>Thuế</th>
                                        <th><i class="fas fa-coins" aria-hidden="true" title="Tổng tiền"></i></th>
                                        <th><i class="fa fa-credit-card" aria-hidden="true" title="Payment method"></i>
                                        </th>
                                        <th>Trạng thái</th>
                                        <th><i class="fab fa-shopify" aria-hidden="true" title="Danh sách cửa hàng"></i>
                                        </th>
                                        <th>Tạo lúc</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                 aria-disabled="false" style="position: relative;"><input
                                                    class="checkbox grid-row-checkbox" type="checkbox"
                                                    data-id="O-JFhTD-8JA6e"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </td>
                                        <td>gs24746.gs@gmail.com</td>
                                        <td>1,200,000₫</td>
                                        <td>400,000₫</td>
                                        <td>0₫</td>
                                        <td>120,000₫</td>
                                        <td>1,720,000₫</td>
                                        <td>Cash<br>(VND/20000.00)</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="http://s-cart-template-pro.s-cart.org">demo-store2</a>
                                        </td>
                                        <td>2023-06-27 01:55:13</td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-JFhTD-8JA6e"><span
                                                    title="Chỉnh sửa" type="button"
                                                    class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('O-JFhTD-8JA6e');" title="Xóa"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                 aria-disabled="false" style="position: relative;"><input
                                                    class="checkbox grid-row-checkbox" type="checkbox"
                                                    data-id="O-3T4ur-sU408"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </td>
                                        <td>bertojunikrisnanto@gmail.com</td>
                                        <td>$56</td>
                                        <td>$20</td>
                                        <td>$0</td>
                                        <td>$5.60</td>
                                        <td>$81.60</td>
                                        <td>Cash<br>(USD/1.00)</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="https://demo.s-cart.org">s-cart</a>
                                        </td>
                                        <td>2023-06-26 15:54:39</td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-3T4ur-sU408"><span
                                                    title="Chỉnh sửa" type="button"
                                                    class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('O-3T4ur-sU408');" title="Xóa"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                 aria-disabled="false" style="position: relative;"><input
                                                    class="checkbox grid-row-checkbox" type="checkbox"
                                                    data-id="O-WbiyN-cLvh4"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </td>
                                        <td>bertojunikrisnanto@gmail.com</td>
                                        <td>$25</td>
                                        <td>$20</td>
                                        <td>$0</td>
                                        <td>$2.50</td>
                                        <td>$47.50</td>
                                        <td>Cash<br>(USD/1.00)</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="https://demo.s-cart.org">s-cart</a>
                                        </td>
                                        <td>2023-06-26 15:51:15</td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-WbiyN-cLvh4"><span
                                                    title="Chỉnh sửa" type="button"
                                                    class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('O-WbiyN-cLvh4');" title="Xóa"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                 aria-disabled="false" style="position: relative;"><input
                                                    class="checkbox grid-row-checkbox" type="checkbox"
                                                    data-id="O-FZUxD-CXHHr"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </td>
                                        <td>mutharasuram561@gmail.com</td>
                                        <td>$50</td>
                                        <td>$20</td>
                                        <td>$0</td>
                                        <td>$5</td>
                                        <td>$75</td>
                                        <td>BankTransfer<br>(USD/1.00)</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="https://demo.s-cart.org">s-cart</a>
                                        </td>
                                        <td>2023-06-19 12:57:13</td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-FZUxD-CXHHr"><span
                                                    title="Chỉnh sửa" type="button"
                                                    class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('O-FZUxD-CXHHr');" title="Xóa"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                 aria-disabled="false" style="position: relative;"><input
                                                    class="checkbox grid-row-checkbox" type="checkbox"
                                                    data-id="O-1KMOJ-g7T7d"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </td>
                                        <td>nabilamandap@gmail.com</td>
                                        <td>$25</td>
                                        <td>$20</td>
                                        <td>$0</td>
                                        <td>$2.50</td>
                                        <td>$47.50</td>
                                        <td>Cash<br>(USD/1.00)</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="https://demo.s-cart.org">s-cart</a>
                                        </td>
                                        <td>2023-06-19 11:00:06</td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-1KMOJ-g7T7d"><span
                                                    title="Chỉnh sửa" type="button"
                                                    class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('O-1KMOJ-g7T7d');" title="Xóa"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                 aria-disabled="false" style="position: relative;"><input
                                                    class="checkbox grid-row-checkbox" type="checkbox"
                                                    data-id="O-fuJVW-ss2zc"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </td>
                                        <td>1@gmail.com</td>
                                        <td>$82</td>
                                        <td>$20</td>
                                        <td>$0</td>
                                        <td>$8.20</td>
                                        <td>$110.20</td>
                                        <td>BankTransfer<br>(USD/1.00)</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="https://demo.s-cart.org">s-cart</a>
                                        </td>
                                        <td>2023-06-16 21:24:56</td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-fuJVW-ss2zc"><span
                                                    title="Chỉnh sửa" type="button"
                                                    class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('O-fuJVW-ss2zc');" title="Xóa"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                 aria-disabled="false" style="position: relative;"><input
                                                    class="checkbox grid-row-checkbox" type="checkbox"
                                                    data-id="O-4ol5u-mgRzz"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </td>
                                        <td>jefoly@mailinator.com</td>
                                        <td>$190</td>
                                        <td>$20</td>
                                        <td>$0</td>
                                        <td>$19</td>
                                        <td>$229</td>
                                        <td>Cash<br>(USD/1.00)</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="https://demo.s-cart.org">s-cart</a>
                                        </td>
                                        <td>2023-06-16 01:25:50</td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-4ol5u-mgRzz"><span
                                                    title="Chỉnh sửa" type="button"
                                                    class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('O-4ol5u-mgRzz');" title="Xóa"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                 aria-disabled="false" style="position: relative;"><input
                                                    class="checkbox grid-row-checkbox" type="checkbox"
                                                    data-id="O-c5DMD-iLfo7"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </td>
                                        <td>slkdfjwelk232@gmail.com</td>
                                        <td>$175</td>
                                        <td>$20</td>
                                        <td>$0</td>
                                        <td>$17.50</td>
                                        <td>$212.50</td>
                                        <td>Cash<br>(USD/1.00)</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="https://demo.s-cart.org">s-cart</a>
                                        </td>
                                        <td>2023-06-13 10:03:19</td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-c5DMD-iLfo7"><span
                                                    title="Chỉnh sửa" type="button"
                                                    class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('O-c5DMD-iLfo7');" title="Xóa"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                 aria-disabled="false" style="position: relative;"><input
                                                    class="checkbox grid-row-checkbox" type="checkbox"
                                                    data-id="O-ghWGw-Hfwou"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </td>
                                        <td>becef92254@soombo.com</td>
                                        <td>$100</td>
                                        <td>$20</td>
                                        <td>$0</td>
                                        <td>$10</td>
                                        <td>$130</td>
                                        <td>BankTransfer<br>(USD/1.00)</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="https://demo.s-cart.org">s-cart</a>
                                        </td>
                                        <td>2023-06-12 23:18:48</td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-ghWGw-Hfwou"><span
                                                    title="Chỉnh sửa" type="button"
                                                    class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('O-ghWGw-Hfwou');" title="Xóa"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                 aria-disabled="false" style="position: relative;"><input
                                                    class="checkbox grid-row-checkbox" type="checkbox"
                                                    data-id="O-hWexk-Losxb"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </td>
                                        <td>qweqwe@yopmail.com</td>
                                        <td>$32</td>
                                        <td>$20</td>
                                        <td>$0</td>
                                        <td>$3.20</td>
                                        <td>$55.20</td>
                                        <td>BankTransfer<br>(USD/1.00)</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="https://demo.s-cart.org">s-cart</a>
                                        </td>
                                        <td>2023-06-08 16:39:01</td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-hWexk-Losxb"><span
                                                    title="Chỉnh sửa" type="button"
                                                    class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('O-hWexk-Losxb');" title="Xóa"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                 aria-disabled="false" style="position: relative;"><input
                                                    class="checkbox grid-row-checkbox" type="checkbox"
                                                    data-id="O-hVEPA-6HML0"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </td>
                                        <td>qweqwe@yopmail.com</td>
                                        <td>$82</td>
                                        <td>$20</td>
                                        <td>$0</td>
                                        <td>$8.20</td>
                                        <td>$110.20</td>
                                        <td>Cash<br>(USD/1.00)</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="https://demo.s-cart.org">s-cart</a>
                                        </td>
                                        <td>2023-06-08 16:38:24</td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-hVEPA-6HML0"><span
                                                    title="Chỉnh sửa" type="button"
                                                    class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('O-hVEPA-6HML0');" title="Xóa"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                 aria-disabled="false" style="position: relative;"><input
                                                    class="checkbox grid-row-checkbox" type="checkbox"
                                                    data-id="O-uJ4fy-IDTAt"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </td>
                                        <td>mail@mail.com</td>
                                        <td>$32</td>
                                        <td>$20</td>
                                        <td>$0</td>
                                        <td>$3.20</td>
                                        <td>$55.20</td>
                                        <td>BankTransfer<br>(USD/1.00)</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="https://demo.s-cart.org">s-cart</a>
                                        </td>
                                        <td>2023-06-08 05:26:17</td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-uJ4fy-IDTAt"><span
                                                    title="Chỉnh sửa" type="button"
                                                    class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('O-uJ4fy-IDTAt');" title="Xóa"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                 aria-disabled="false" style="position: relative;"><input
                                                    class="checkbox grid-row-checkbox" type="checkbox"
                                                    data-id="O-OSeoV-nIOTm"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </td>
                                        <td>yafiw38872@ekcsoft.com</td>
                                        <td>$75</td>
                                        <td>$20</td>
                                        <td>$0</td>
                                        <td>$7.50</td>
                                        <td>$102.50</td>
                                        <td>Cash<br>(USD/1.00)</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="https://demo.s-cart.org">s-cart</a>
                                        </td>
                                        <td>2023-05-31 18:54:19</td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-OSeoV-nIOTm"><span
                                                    title="Chỉnh sửa" type="button"
                                                    class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('O-OSeoV-nIOTm');" title="Xóa"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                 aria-disabled="false" style="position: relative;"><input
                                                    class="checkbox grid-row-checkbox" type="checkbox"
                                                    data-id="O-nRtvR-x1CJP"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </td>
                                        <td>yafiw38872@ekcsoft.com</td>
                                        <td>$75</td>
                                        <td>$20</td>
                                        <td>$0</td>
                                        <td>$7.50</td>
                                        <td>$102.50</td>
                                        <td>Cash<br>(USD/1.00)</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="https://demo.s-cart.org">s-cart</a>
                                        </td>
                                        <td>2023-05-31 02:19:51</td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-nRtvR-x1CJP"><span
                                                    title="Chỉnh sửa" type="button"
                                                    class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('O-nRtvR-x1CJP');" title="Xóa"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                 aria-disabled="false" style="position: relative;"><input
                                                    class="checkbox grid-row-checkbox" type="checkbox"
                                                    data-id="O-YGMoS-xZLZk"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </td>
                                        <td>hutytasami@mailinator.com</td>
                                        <td>$100</td>
                                        <td>$20</td>
                                        <td>$0</td>
                                        <td>$10</td>
                                        <td>$130</td>
                                        <td>BankTransfer<br>(USD/1.00)</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="https://demo.s-cart.org">s-cart</a>
                                        </td>
                                        <td>2023-05-25 17:54:39</td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-YGMoS-xZLZk"><span
                                                    title="Chỉnh sửa" type="button"
                                                    class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('O-YGMoS-xZLZk');" title="Xóa"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                 aria-disabled="false" style="position: relative;"><input
                                                    class="checkbox grid-row-checkbox" type="checkbox"
                                                    data-id="O-xVjbi-EACI9"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </td>
                                        <td>VGvg@hff.gg</td>
                                        <td>$32</td>
                                        <td>$20</td>
                                        <td>$0</td>
                                        <td>$3.20</td>
                                        <td>$55.20</td>
                                        <td>Cash<br>(USD/1.00)</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="https://demo.s-cart.org">s-cart</a>
                                        </td>
                                        <td>2023-05-23 03:34:17</td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-xVjbi-EACI9"><span
                                                    title="Chỉnh sửa" type="button"
                                                    class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('O-xVjbi-EACI9');" title="Xóa"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                 aria-disabled="false" style="position: relative;"><input
                                                    class="checkbox grid-row-checkbox" type="checkbox"
                                                    data-id="O-K304m-tpQ7W"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </td>
                                        <td>aa_hh_1980@hotmail.com</td>
                                        <td>$67</td>
                                        <td>$20</td>
                                        <td>$0</td>
                                        <td>$6.70</td>
                                        <td>$93.70</td>
                                        <td>Cash<br>(USD/1.00)</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="https://demo.s-cart.org">s-cart</a>
                                        </td>
                                        <td>2023-05-04 17:35:44</td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-K304m-tpQ7W"><span
                                                    title="Chỉnh sửa" type="button"
                                                    class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('O-K304m-tpQ7W');" title="Xóa"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                 aria-disabled="false" style="position: relative;"><input
                                                    class="checkbox grid-row-checkbox" type="checkbox"
                                                    data-id="O-F93lw-UzGMI"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </td>
                                        <td>cvdfcv@gmail.com</td>
                                        <td>$85</td>
                                        <td>$20</td>
                                        <td>$0</td>
                                        <td>$8.50</td>
                                        <td>$113.50</td>
                                        <td>Cash<br>(USD/1.00)</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="https://demo.s-cart.org">s-cart</a>
                                        </td>
                                        <td>2023-05-04 14:28:28</td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-F93lw-UzGMI"><span
                                                    title="Chỉnh sửa" type="button"
                                                    class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('O-F93lw-UzGMI');" title="Xóa"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                 aria-disabled="false" style="position: relative;"><input
                                                    class="checkbox grid-row-checkbox" type="checkbox"
                                                    data-id="O-sav9S-2CLaN"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </td>
                                        <td>admin@admin.com</td>
                                        <td>$32</td>
                                        <td>$20</td>
                                        <td>$0</td>
                                        <td>$3.20</td>
                                        <td>$55.20</td>
                                        <td>BankTransfer<br>(USD/1.00)</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="https://demo.s-cart.org">s-cart</a>
                                        </td>
                                        <td>2023-05-03 17:32:04</td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-sav9S-2CLaN"><span
                                                    title="Chỉnh sửa" type="button"
                                                    class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('O-sav9S-2CLaN');" title="Xóa"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                 aria-disabled="false" style="position: relative;"><input
                                                    class="checkbox grid-row-checkbox" type="checkbox"
                                                    data-id="O-nICPs-GlmHU"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </td>
                                        <td>a@gmail.com</td>
                                        <td>$35</td>
                                        <td>$20</td>
                                        <td>$0</td>
                                        <td>$3.50</td>
                                        <td>$58.50</td>
                                        <td>Cash<br>(USD/1.00)</td>
                                        <td><span class="badge badge-info">New</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="https://demo.s-cart.org">s-cart</a>
                                        </td>
                                        <td>2023-04-27 21:00:08</td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/order/detail/O-nICPs-GlmHU"><span
                                                    title="Chỉnh sửa" type="button"
                                                    class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('O-nICPs-GlmHU');" title="Xóa"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="block-pagination clearfix m-10">
                                <div class="ml-3 float-left">
                                    Hiển thị <b>1</b>-<b>20</b> của <b>68</b> kết quả
                                </div>
                                <div class="pagination pagination-sm mr-3 float-right">
                                    <ul class="pagination pagination-sm no-margin pull-right">

                                        <li class="page-item disabled"><span class="page-link pjax-container">«</span>
                                        </li>


                                        <li class="page-item active"><span class="page-link pjax-container">1</span>
                                        </li>
                                        <li class="page-item"><a class="page-link"
                                                                 href="https://demo.s-cart.org/sc_admin/order?page=2">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link"
                                                                 href="https://demo.s-cart.org/sc_admin/order?page=3">3</a>
                                        </li>
                                        <li class="page-item"><a class="page-link"
                                                                 href="https://demo.s-cart.org/sc_admin/order?page=4">4</a>
                                        </li>

                                        <li class="page-item"><a class="page-link pjax-container"
                                                                 href="https://demo.s-cart.org/sc_admin/order?page=2"
                                                                 rel="next">»</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer clearfix">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
