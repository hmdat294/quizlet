 <!-- Bootstrap JS -->
 <script src="{{ asset('backend/js/bootstrap.bundle.min.js') }}"></script>
 <!--plugins-->
 <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
 <script src="{{ asset('backend/plugins/simplebar/js/simplebar.min.js') }}"></script>
 <script src="{{ asset('backend/plugins/metismenu/js/metisMenu.min.js') }}"></script>
 <script src="{{ asset('backend/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
 <script src="{{ asset('backend/plugins/chartjs/chart.min.js') }}"></script>
 <script src="{{ asset('backend/plugins/peity/jquery.peity.min.js') }}"></script>
 <script src="{{ asset('backend/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('backend/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
 <script src="{{ asset('backend/js/dashboard-analytics.js') }}"></script>
 <!--app JS-->
 <script src="{{ asset('backend/js/app.js') }}"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
 {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
 @yield('custom_script')
 <script type="text/javascript">
     $('.show_confirm').click(function(event) {
         var form = $(this).closest("form");
         var name = $(this).data("name");
         event.preventDefault();
         swal({
                 title: `Bạn có chắc muốn xoá dữ liệu này kể cả những dữ liệu liên quan`,
                 text: "Khi xoá sẽ không thể khôi phục được!",
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
             })
             .then((willDelete) => {
                 if (willDelete) {
                     form.submit();
                 }
             });
     });
 </script>
 <script>
     $(document).ready(function() {
         $('#example').DataTable();
     });
 </script>
 <script>
     $(document).ready(function() {
         var table = $('#example2').DataTable({
             lengthChange: false,
             buttons: ['excel', 'pdf', 'print']
         });

         table.buttons().container()
             .appendTo('#example2_wrapper .col-md-6:eq(0)');
     });
 </script>
 <script>
     //  new PerfectScrollbar('.product-list');
     //  new PerfectScrollbar('.customers-list');
 </script>
 <script>
     // Example starter JavaScript for disabling form submissions if there are invalid fields
     (function() {
         'use strict'

         // Fetch all the forms we want to apply custom Bootstrap validation styles to
         var forms = document.querySelectorAll('.needs-validation')

         // Loop over them and prevent submission
         Array.prototype.slice.call(forms)
             .forEach(function(form) {
                 form.addEventListener('submit', function(event) {
                     if (!form.checkValidity()) {
                         event.preventDefault()
                         event.stopPropagation()
                     }

                     form.classList.add('was-validated')
                 }, false)
             })
     })()
 </script>
