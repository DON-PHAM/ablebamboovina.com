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
                        <div class="card-body" id="pjax-container">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                                <div class="table-responsive">
                                    <table class="table table-hover text-nowrap table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Hình ảnh</th>
                                            <th>Mã code</th>
                                            <th>Tên chức năng</th>
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
                                            <td>
                                                <a
                                                    href="" data-toggle="modal" data-target="#exampleModalCenter"><span
                                                        title="Cấu hình" class="btn btn-flat btn-primary"><i
                                                            class="fas fa-cog"></i></span>&nbsp;</a>
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

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông tin chuyển khoản</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" value="{{$payments->id ?? ""}}" >
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tên ngân hàng:</label>
                            <input type="text" class="form-control" id="tennganhang" value="{{$payments->tennganhang ?? ""}}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Chủ tài khoản:</label>
                            <input type="text" class="form-control" id="chutaikhoan" value="{{$payments->chutaikhoan ?? ""}}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Số tài khoản:</label>
                            <input type="text" class="form-control" id="sotaikhoan" value="{{$payments->sotaikhoan ?? ""}}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">QRCode:</label>
                            <input type="file" class="form-control" id="qrcode">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-send">Send message</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
           $('.btn-send').click(function() {
               let tenNganHang = document.getElementById('tennganhang').value;
               let chuTaiKhoan = document.getElementById('chutaikhoan').value;
               let soTaiKhoan = document.getElementById('sotaikhoan').value;
               let qrCode = document.getElementById('qrcode').files[0];
               let id = $('#id').val();
               let formData = new FormData();
               formData.append('id',id);
               formData.append('tennganhang',tenNganHang);
               formData.append('chutaikhoan',chuTaiKhoan);
               formData.append('sotaikhoan',soTaiKhoan);
               formData.append('qrcode',qrCode);
               formData.append('_token', '{{ csrf_token() }}');

               $.ajax({
                   url:'{{route("update")}}',
                   data: formData,
                   type: 'POST',
                   contentType: false,
                   processData: false,
                   success:function (res)
                   {
                       if(res.status)
                       {
                           toastr.success(res.message);
                           window.location.reload();
                       }
                   }
               })
           })

        })

    </script>
@endsection
