@include('inc.header1')
<body class="sidebar-noneoverflow">
@include('inc.header2')

    

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                
                
                <div class="row layout-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Track All Maintenance</h4>
                                    </div>    
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="individual-col-search" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th>Equipment</th>
                                                <th>Model</th>
                                                <th>Maintenance Carried</th>
                                                <th>Date of Completion</th>
                                                <th>Maintenance Location </th>
                                                <th></th>
                                            </tr>                                             
                                        </thead>
                                        <tbody>
                                            @foreach($maintenance as $log1s) 
                                            <tr>
                                                <td class="text-center">{{ $log1s->id }}</td>
                                                <td>{{ $log1s->category }}</td>
                                                <td>{{ $log1s->model }}</td>
                                                <td>{{ $log1s->maintenance_carried }}</td>
                                                <td>{{ $log1s->maintenance_completed_date }}</td>
                                                <td>{{ $log1s->current_location }}</td>                                              
                                                <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                                            </tr>
                                            @endforeach                                              
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th class="text-center">ID</th>
                                                <th>Equipment</th>
                                                <th>Model</th>
                                                <th>Maintenance Carried</th>
                                                <th>Date of Completion</th>
                                                <th>Maintenance Location </th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                @include('inc.footer')