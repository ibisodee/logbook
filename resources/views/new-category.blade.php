@include('inc.header1')
<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">
@include('inc.header2')
    
   

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#" class="active nav-link">New Category</a>                            
                        </div>
                    </div>
                    
                    <div class="row">
                        <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                            <div class="box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Add Equipment Category</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">    
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
                                    <form class="needs-validation" action="{{url('/add-category')}}" method="post" novalidate >
                                        {{csrf_field()}}                            
                                        
                                        <div class="form-row">
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom03">Category Name</label>
                                                <input name="category" type="text" class="form-control" id="validationCustom03" required>
                                                <div class="invalid-feedback">
                                                    Please provide a Category Full Name.
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom04">Department</label>
                                                <input  name="department" type="text" class="form-control" id="validationCustom04" required>
                                                <div class="invalid-feedback">
                                                    Please provide a Deparment in Charge.
                                                </div>
                                            </div>
                                                                                  
                                        </div>     
                                        <button class="btn btn-primary mt-3" type="submit">Add Category</button>
                                    </form>
                                    <div class="table-responsive">
                                    <table class="table table-bordered mb-4">
                                        <thead>
                                            <tr>
                                                <th>Category Name</th>
                                                <th>Department in Control</th>
                                                <th class="text-center">Dated Added</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($category as $categorys)    
                                            <tr>
                                                <td>{{ $categorys->category }}</td>
                                                <td>{{ $categorys->department }}</td>
                                                <td class="text-center"><span class="text-success">{{ $categorys->created_at }}</span></td>
                                            </tr>
                                        @endforeach    
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>                
                </div>
            </div>              
        
        @include('inc.footer')