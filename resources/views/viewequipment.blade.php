@include('inc.header1')
<body class="sidebar-noneoverflow">
@include('inc.header2')

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                
                
                <div class="row layout-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            
                            <div class="widget-content widget-content-area">
                            <div id="modalCustom" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">                                
                                <div class="widget-content widget-content-area  text-center advance-content signinModal-content">
                                <h4>Equipments </h4>
                                    <!-- Modal -->
                                    <div class="modal fade register-modal" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                          <div class="modal-body">
                                          @if (count($errors)>0)
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div><br />
                                            @endif
                                            @if(\Session::has('success'))
                                            <div class="alert alert-success">
                                                <p>{{ \Session::get('success') }}</p>
                                            </div>
                                            @endif
                                            <form class="mt-0" action="{{url('/add-equipment')}}" method="post">
                                                {{csrf_field()}}

                                               <div class="form-group">
                                                <select name="category" class="selectpicker form-control" data-style="btn btn-outline-primary" required>
                                                        <option>Select Equipment Category</option>
                                                        <option value="High-pressure water pump Units" >High-pressure water pump Units</option>
                                                        <option value="High-pressure Lines">High-pressure Lines</option>  
                                                        <option value="Hand lance Gun" >Hand lance Gun</option>
                                                        <option value="Rotary Nozzles">Rotary Nozzles</option>                                                         
                                                </select>
                                              </div>
                                              <div class="form-group">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                                                <input name="model" type="text" class="form-control mb-2" id="" placeholder="Equipment Model" required>
                                              </div>
                                              <div class="form-group">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-codepen"><polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"></polygon><line x1="12" y1="22" x2="12" y2="15.5"></line><polyline points="22 8.5 12 15.5 2 8.5"></polyline><polyline points="2 15.5 12 8.5 22 15.5"></polyline><line x1="12" y1="2" x2="12" y2="8.5"></line></svg>
                                                <input name="engine_no" type="text" class="form-control mb-2" id="" placeholder="Engine No">
                                              </div>
                                              <div class="form-group">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                               <input name="reg_no" type="text" class="form-control mb-2" id="" placeholder="Registration ID">
                                              </div>
                                              
                                              <button type="submit" class="btn btn-primary mt-2 mb-2 btn-block">Add Equipment</button>
                                            </form>
                                            </div>
                                        </div>
                                      </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#registerModal">Add New Equipment </button>
                                <div class="toggle-list">
                                    <a class="btn toggle-vis mb-4 ml-2" data-column="0">ID</a>
                                    <a class="btn toggle-vis mb-4 ml-2" data-column="1">Equipment Type</a>
                                    <a class="btn toggle-vis mb-4 ml-2" data-column="2">Model Name</a>
                                    <a class="btn toggle-vis mb-4 ml-2" data-column="3">Model ID</a>
                                    <a class="btn toggle-vis mb-4 ml-2" data-column="4">Engine No </a>
                                    <a class="btn toggle-vis mb-4 ml-2" data-column="5">Reg. No</a>
                                </div>                                
                                <div class="table-responsive mb-4">
                                    <table id="show-hide-col" class="table table-hover" style="width:100%">
                                        <thead style="border-bottom: none;">
                                            <tr>
                                                <th>ID</th>
                                                <th>Equipment Type</th>
                                                <th>Model</th>
                                                <th>Engine No</th>    
                                                <th>Reg. No</th>                                             
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($equipments as $equipment)    
                                        <tr>
                                            <td>{{ $equipment->id }}</td>
                                            <td>{{ $equipment->category }}</td>
                                            <td>{{ $equipment->model }}</td>
                                            <td>{{ $equipment->engine_no }}</td>                                            
                                            <td>{{ $equipment->reg_no }}</td>
                                        </tr>
                                        @endforeach      
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>ID</th>
                                                <th>Equipment Type</th>
                                                <th>Model</th>
                                                <th>Engine No</th>    
                                                <th>Reg. No</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
        <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com/">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
    
    
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="plugins/table/datatable/datatables.js"></script>
    <script src="plugins/table/datatable/custom_miscellaneous.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->    
</body>

</html>