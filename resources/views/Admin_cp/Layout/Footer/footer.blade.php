<!-- Footer -->
<footer class="footer ptb-20">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="copy_right">
                <p>
                    {{date('Y')}} © donpv

                </p>
            </div>

        </div>
    </div>
</footer>
<!-- Footer_End -->
</div>
<script type="text/javascript" src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>


<!--datatables-->
<script src="{{asset('backend/assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/assets/js/dataTables.bootstrap4.min.js')}}"></script>


<script type="text/javascript" src="{{asset('backend/assets/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('backend/assets/js/custom.js')}}" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('#bs4-table').DataTable();
    });
</script>
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
