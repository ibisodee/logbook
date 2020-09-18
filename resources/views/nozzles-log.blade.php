@include('inc.header1')
<body class="sidebar-noneoverflow">
@include('inc.header2')

    

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                
                <div class="row layout-top-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    
                    <!-- New Model -->
                    <div id="modalCustom" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                
                                <div class="widget-content widget-content-area  text-center advance-content signinModal-content">

                                    <!-- Modal -->
                                    <div class="modal fade modal-notification" id="standardModal" tabindex="-1" role="dialog" aria-labelledby="standardModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document" id="standardModalLabel">
                                        <div class="modal-content">
                                          <div class="modal-body text-center">
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
                                            <form class="mt-0" action="{{url('/add-nozzles')}}" method="post">
                                                {{csrf_field()}}
                                            <div class="form-row mb-4">
                                                <div class="col">
                                                    <input name="date_recorded" type="text" class="form-control mb-2" id="" placeholder="Date Recorded" required>
                                                </div>
                                                <div class="col-7">
                                                    <input name="manufacturer" type="text" class="form-control mb-2" id="" placeholder="Manufacturer" required>
                                                </div>                                                
                                            </div>
                                            <div class="form-row mb-4">
                                                <div class="col-7">
                                                    <input name="category" type="text" class="form-control mb-2" id="" value="Rotary Nozzles" readonly>
                                                </div>
                                                <div class="col">
                                                    <input name="model" type="text" class="form-control mb-2" id="" placeholder="Model" required>
                                                </div>
                                            </div>
                                            <div class="form-row mb-4">
                                                <div class="col">
                                                    <input name="max_pressure" type="text" class="form-control mb-2" id="" placeholder="Max Working Pressure" required>
                                                </div>
                                            </div>
                                            <div class="form-row mb-4">
                                                <div class="col">
                                                    <input name="working_pressure" type="text" class="form-control mb-2" id="" placeholder="Working Pressure" required>
                                                </div>
                                            </div>
                                            <div class="form-row mb-4">
                                                <div class="col">
                                                    <input name="working_flow" type="text" class="form-control mb-2" id="" placeholder="Working Flow" required>
                                                </div>
                                            </div>                                            
                                            <div class="form-row mb-4">
                                                <div class="col">
                                                    <input name="assested_visual" type="text" class="form-control mb-2" id="" placeholder="Record of assessed visual condition (score)" required>
                                                </div>
                                            </div>
                                            <div class="form-row mb-4">
                                                <div class="col">
                                                    <input name="inspection_comments" type="text" class="form-control mb-2" id="" placeholder="Inspection Comments" required>
                                                </div>
                                            </div>
                                            <div class="form-row mb-4">
                                                <div class="col">
                                                    <input name="inspection_date" type="text" class="form-control mb-2" id="" placeholder="Inspection Date" required>
                                                </div>
                                                <div class="col">
                                                    <input name="inspection_by" type="text" class="form-control mb-2" id="" placeholder="Inspection By" required>
                                                </div>
                                            </div>
                                            <div class="form-row mb-4">
                                                <div class="col">
                                                    <input name="maintenance_carried" type="text" class="form-control mb-2" id="" placeholder="Maintenance Carried" required>
                                                </div>
                                            </div>
                                            <div class="form-row mb-4">    
                                                <div class="col">
                                                    <input  name="maintenance_completed_date" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Maintenance Completed Date">
                                                </div>
                                            </div>

                                            <div class="form-row mb-4">
                                                <div class="col">
                                                    <input name="current_location" type="text" class="form-control mb-2" id="" placeholder="Current Location" required>
                                                </div>
                                            </div>
                                        
                                           </div>
                                          <div class="modal-footer justify-content-between">
                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                            <button type="submit" type="button" class="btn btn-primary">Insert New Log</button>
                                          </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                        <div class="widget-content widget-content-area br-6">
                        <h4> •	Rotary Nozzles</h4>
                
                            <div class="table-responsive mb-4 mt-4">
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#standardModal">Add New Log </button>

                            <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Date Recorded </th>
                                            <th>Supplier / Manufacturer</th>
                                            <th>Category</th>
                                            <th>Model</th>
                                            <th>Max Working Pressure</th>
                                            <th>Working Pressure</th>
                                            <th>Working Flow</th>
                                            <th>Inspection Date</th>
                                            <th>Inspection Comments</th>
                                            <th>Assessed visual condition (score)</th>
                                            <th>Maintenance Carried</th>
                                            <th>Maintenance Completed On</th>
                                            <th>Inspected By</th>                                            
                                            <th>Current Location</th>
                                            <th></th>                                                                                      
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($nozzles as $log1s)   
                                        <tr>       
                                            <td>{{ $log1s->date_recorded }}</td>
                                            <td>{{ $log1s->manufacturer}}</td>
                                            <td>{{ $log1s->category }}</td>
                                            <td>{{ $log1s->model  }}</td>
                                            <td>{{ $log1s->max_pressure }}</td>
                                            <td>{{ $log1s->working_pressure }}</td>
                                            <td>{{ $log1s->working_flow }}</td>
                                            <td>{{ $log1s->inspection_date }}</td>
                                            <td>{{ $log1s->inspection_comments }}</td>
                                            <td>{{ $log1s->assested_visual }}</td>
                                            <td>{{ $log1s->maintenance_carried }}</td>
                                            <td>{{ $log1s->maintenance_completed_date }}</td>
                                            <td>{{ $log1s->inspection_by }}</td>                                            
                                            <td>{{ $log1s->current_location }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-dark btn-sm">Action</button>
                                                    <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                                                         <button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal"><p colour="#fff">Update Location</p></button>
                                                         <button type="submit" class="dropdown-item" data-toggle="modal" data-target=".bd-example-modal-xl"><p colour="#fff">Add Inspection/Maintenace</p></button>
                                                         
                                                    </div>
                                                  </div>
                                            </td>
                                        </tr>
                                    @endforeach     
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!--2nd  New Model -->
                    <div id="modalBasic" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                
                                <div class="widget-content widget-content-area  text-center advance-content signinModal-content">
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">                                            
                                            <div class="modal-body">
                                                <div id="basic" class="col-lg-12 layout-spacing">
                                                    <div class="statbox widget box box-shadow">                                                        
                                                        
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

                                                         <form class="mt-0" action="{{url('/add-nozzles')}}" method="post">
                                                            {{csrf_field()}}

                                                            <p>Please Note New Location will be updated, but the old Location will still be recorded for Report Purpose</p>
                                            
                                                            <input name="date_recorded" type="hidden" class="form-control mb-2" id="" value="{{ $log1s->date_recorded }}" required>

                                                            <input name="manufacturer" type="hidden" class="form-control mb-2" id="" value="{{ $log1s->manufacturer}}" required>

                                                            <input name="category" type="hidden" class="form-control mb-2" id="" value="{{ $log1s->category }}" readonly>

                                                            <input name="model" type="hidden" class="form-control mb-2" id="" value="{{ $log1s->model  }}" required>

                                                            <input name="max_pressure" type="hidden" class="form-control mb-2" id="" value="{{ $log1s->max_pressure }}" required>

                                                            <input name="working_pressure" type="hidden" class="form-control mb-2" id="" value="{{ $log1s->working_pressure }}" required>

                                                            <input name="working_flow" type="hidden" class="form-control mb-2" id="" value="{{ $log1s->working_flow }}" required>

                                                            <input name="assested_visual" type="hidden" class="form-control mb-2" id="" value="{{ $log1s->assested_visual }}" required>

                                                            <input name="inspection_comments" type="hidden" class="form-control mb-2" id="" value="{{ $log1s->inspection_comments }}" required>

                                                            <input name="inspection_date" type="hidden" class="form-control mb-2" id="" value="{{ $log1s->inspection_date }}" required>

                                                            <input name="inspection_by" type="hidden" class="form-control mb-2" id="" value="{{ $log1s->inspection_by }}" required>

                                                            <input name="maintenance_carried" type="hidden" class="form-control mb-2" id="" value="{{ $log1s->maintenance_carried }}" required>

                                                            <input  name="maintenance_completed_date" class="form-control flatpickr flatpickr-input active" type="hidden" value="{{ $log1s->maintenance_completed_date }}">


                                                            <div class="form-row mb-4">
                                                                <div class="col">
                                                                    <input name="current_location" type="text" class="form-control mb-2" id="" placeholder="New Location" required>
                                                                </div>
                                                            </div>
                                                        
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                            <button type="submit" type="button" class="btn btn-primary">Record New location</button>
                                                        </div>
                                                    </form>                                                               
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <!--3rd New Modal -->
                    <div id="modalOptionalSizes" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">                                
                                <div class="widget-content widget-content-area">
                                    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myExtraLargeModalLabel">More Inspections/Maintenance Carried Out on this Mechine on the Same Location. </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                </button>
                                            </div>
                                            <div class="modal-body">                                                
                                            <div id="basic" class="col-lg-12 layout-spacing">
                                                    <div class="statbox widget box box-shadow"> 
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
                                                         <form class="mt-0" action="{{url('/add-nozzles')}}" method="post">
                                                            {{csrf_field()}}

                                                            <p>Please Note Inspection or Maintenace will be Added to existing Record for Report Purpose</p>
                                            
                                                            <input name="date_recorded" type="hidden" class="form-control mb-2" id="" value="{{ $log1s->date_recorded }}" required>

                                                            <input name="manufacturer" type="hidden" class="form-control mb-2" id="" value="{{ $log1s->manufacturer}}" required>

                                                            <input name="category" type="hidden" class="form-control mb-2" id="" value="{{ $log1s->category }}" readonly>

                                                            <input name="model" type="hidden" class="form-control mb-2" id="" value="{{ $log1s->model  }}" required>

                                                            <input name="max_pressure" type="hidden" class="form-control mb-2" id="" value="{{ $log1s->max_pressure }}" required>

                                                            <input name="working_pressure" type="hidden" class="form-control mb-2" id="" value="{{ $log1s->working_pressure }}" required>

                                                            <input name="working_flow" type="hidden" class="form-control mb-2" id="" value="{{ $log1s->working_flow }}" required>

                                                            <input name="current_location" type="hidden" class="form-control mb-2" id="" value="{{ $log1s->current_location }}" required>                                                                                                                                                                                         
                                                            
                                                            <div class="form-row mb-4">
                                                                <div class="col">
                                                                    <input name="inspection_date" type="text" class="form-control mb-2" id="" placeholder="Inspection Date" required>
                                                                </div>
                                                            
                                                                <div class="col-7">
                                                                    <input name="inspection_comments" type="text" class="form-control mb-2" id="" placeholder="Inspection Comments" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-row mb-4">
                                                                <div class="col">
                                                                    <input name="inspection_by" type="text" class="form-control mb-2" id="" placeholder="Inspection By" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-row mb-4">
                                                                <div class="col">
                                                                    <input name="assested_visual" type="text" class="form-control mb-2" id="" placeholder="Record of assessed visual condition (score)" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-row mb-4">
                                                                <div class="col">
                                                                    <input name="maintenance_carried" type="text" class="form-control mb-2" id="" placeholder="New Maintenance Carried" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-row mb-4">
                                                                <div class="col">
                                                                    <input  name="maintenance_completed_date" class="form-control flatpickr flatpickr-input active" type="text" placeholder="New Maintenance Completed Date">
                                                                </div>
                                                            </div>    
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                            <button type="submit" type="button" class="btn btn-primary">Insert New Inspection/Maintenace at Current Location</button>
                                                        </div>
                                                    </form>                                                               
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                            </div>
                                        </div>
                                     
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        @include('inc.footer')