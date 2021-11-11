<div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright @ {{ $year = date("Y") }} <a target="_blank" href="#">Forever Solutions </a>, All rights reserved.</p>
                    </div>
                    <div class="footer-section f-section-2">
                        <p class="">To be Used by Maintenance Team</p>
                    </div>
                </div>

            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('plugins/apex/apexcharts.min.js')}}"></script>
    <script src="{{ asset('assets/js/dashboard/dash_2.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
	
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('plugins/table/datatable/datatables.js')}}"></script>
    <script>
        /* Custom filtering function which will search data in column four between two values */
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min = parseInt( $('#min').val(), 10 );
                var max = parseInt( $('#max').val(), 10 );
                var age = parseFloat( data[3] ) || 0; // use data for the age column
         
                if ( ( isNaN( min ) && isNaN( max ) ) ||
                     ( isNaN( min ) && age <= max ) ||
                     ( min <= age   && isNaN( max ) ) ||
                     ( min <= age   && age <= max ) )
                {
                    return true;
                }
                return false;
            }
        );         
        $(document).ready(function() {
            var table = $('#range-search').DataTable({
                "oLanguage": {
                    "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                   "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [7, 10, 20, 50],
                "pageLength": 7 
            });             
            // Event listener to the two range filtering inputs to redraw on input
            $('#min, #max').keyup( function() { table.draw(); } );
        } );
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
	
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('plugins/table/datatable/datatables.js')}}"></script>
    <script src="{{ asset('plugins/table/datatable/custom_miscellaneous.js')}}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->    
	
	<!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{ asset('assets/js/scrollspyNav.js')}}"></script>
    <script src="{{ asset('plugins/select2/select2.min.js')}}"></script>
    <script src="{{ asset('plugins/select2/custom-select2.js')}}"></script>
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
	
	<!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{ asset('assets/js/scrollspyNav.js')}}"></script>
    <script src="{{ asset('assets/js/forms/bootstrap_validation/bs_validation_script.js')}}"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
	
	<!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="plugins/table/datatable/datatables.js"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="{{ asset('plugins/table/datatable/button-ext/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('plugins/table/datatable/button-ext/jszip.min.js')}}"></script>    
    <script src="{{ asset('plugins/table/datatable/button-ext/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('plugins/table/datatable/button-ext/buttons.print.min.js')}}"></script>
    <script>
        $('#html5-extension').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn' },
                    { extend: 'csv', className: 'btn' },
                    { extend: 'excel', className: 'btn' },
                    { extend: 'print', className: 'btn' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
	
	<!--  BEGIN CUSTOM SCRIPT FILE  -->
    <script src="{{ asset('assets/js/scrollspyNav.js')}}"></script>
    <script>
        $('#yt-video-link').click(function () {
            var src = 'https://www.youtube.com/embed/YE7VzlLtp-4';
            $('#videoMedia1').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia1 .video-container');
        });
        $('#vimeo-video-link').click(function () {
            var src = 'https://player.vimeo.com/video/1084537';
            $('#videoMedia2').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia2 .video-container');
        });
        $('#videoMedia1 button, #videoMedia2 button').click(function () {
            $('#videoMedia1 iframe, #videoMedia2 iframe').removeAttr('src');
        });
    </script>    
    <!--  END CUSTOM SCRIPT FILE  -->

     <!-- BEGIN PAGE LEVEL SCRIPTS -->
     <script src="{{ asset('assets/js/scrollspyNav.js')}}"></script>
    <script src="{{ asset('plugins/flatpickr/flatpickr.js')}}"></script>
    <script src="{{ asset('plugins/noUiSlider/nouislider.min.js')}}"></script>

    <script src="{{ asset('plugins/flatpickr/custom-flatpickr.js')}}')}}"></script>
    <script src="plugins/noUiSlider/custom-nouiSlider.js')}}"></script>
    <script src="plugins/bootstrap-range-Slider/bootstrap-rangeSlider.js')}}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('plugins/highlight/highlight.pack.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="{{ asset('assets/js/scrollspyNav.js')}}"></script>
    <script>
        checkall('todoAll', 'todochkbox');
        $('[data-toggle="tooltip"]').tooltip()
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->


</body>

</html>