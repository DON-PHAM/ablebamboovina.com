<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard 1 | Zircos - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Table datatable css -->
    <link href="{{asset('backend/assets/libs/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/libs/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/libs/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/libs/datatables/fixedHeader.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/libs/datatables/scroller.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/libs/datatables/dataTables.colVis.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/libs/datatables/fixedColumns.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />


    <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <link href="{{asset('backend/assets/css/custom.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet" />

</head>

<body>

<!-- Begin page -->
<div id="wrapper">


    <!-- Topbar Start -->
    @include('Admin_cp.Layout.Topbar.topbar')
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    @include('Admin_cp.Layout.Siderbar.siderbar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
            <!-- Start Content-->
            @yield('content')
            <!-- end container-fluid -->
            </div>
        </div>
        <!-- end content -->
        <!-- Footer Start -->
        @include('Admin_cp.Layout.Footer.footer')
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- Vendor js -->
<script src="{{asset('backend/assets/js/vendor.min.js')}}"></script>

<script src="{{asset('backend/assets/libs/raphael/raphael.min.js')}}"></script>


<!-- Datatable plugin js -->
<script src="{{asset('backend/assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{asset('backend/assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>

<script src="{{asset('backend/assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>

<script src="{{asset('backend/assets/libs/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables/buttons.print.min.js')}}"></script>

<script src="{{asset('backend/assets/libs/datatables/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables/dataTables.fixedHeader.min.j')}}s"></script>
<script src="{{asset('backend/assets/libs/datatables/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables/dataTables.fixedColumns.min.js')}}"></script>


<!-- App js -->
<script src="{{asset('backend/assets/js/app.min.js')}}"></script>

<script src="{{asset('backend/assets/js/custom.js')}}" type="text/javascript"></script>

@yield('scripts')
<script>

    $(document).ready(function() {
        $('#language').change(function() {
            let language = $('#language').find(":selected").val();
            $.ajax({
                url: "{{ route('change-language',':language') }}".replace(':language',language),
                type: "get",
                success: function(response) {
                    // reload trang để hiển thị nội dung mới
                    localStorage.setItem('locale',language);
                    location.reload();
                }
            });
        });
        let language = localStorage.getItem('locale');
        $("#language").val(language);
    });

</script>

</body>

</html>
