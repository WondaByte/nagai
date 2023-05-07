<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <style type="text/css">
        label{
            display:inline-block;
            width:400px;
        }
        </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ADD GEODATA HERE</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar') 
      {{-- partial  --}}
      @include('admin.navbar') 
      
      
       
      <div class="container-fluid page-body-wrapper">

            
        <div class="container" align="center" style="padding-top:50px;;"> 

            @if(session()->has('message'))

            <div class="alert alert-success">
                <button type="button"class="close" data-dismiss="alert">
                x
                </button>
                {{session()->get('message')}}
            </div>
            
            @endif

            <form action="{{('upload')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding:50px;">
                    <label>FIRST NAME</label>
                    <input type="text" style="color:black;"name="fname"placeholder="Enter your first name here" required="">
                </div>

                <div style="padding:10px;">
                    <label>LAST NAME</label>
                    <input type="text" style="color:black;"name="lname"placeholder="Enter your last name here" required="">
                </div>

                <div style="padding:15px;">
                    <label>GENDER</label>
                    {{-- <input type="text" style="color:black;"name="gender"placeholder="Type in the NAME" required="">
                     --}}
                    
                    
                    <select name="gender" style="color:black; width: 200px;"required="">
                        <option>--Select--</option>
                        <option value="male">MALE</option>
                        <option value="female">FEMALE</option>

                    </select>
                </div>

                <div style="padding:30px;">
                    <label>PRODUCT CATEGORY</label>
                    <select name="productcategory" style="color:black; width: 200px;"required="">
                        <option>--SELECT--</option>
                        <option value="food">FOOD</option>
                        <option value="consummables">CONSUMMABLES</option>
                        <option value="infrastructure">INFRASTRUCTURE</option>
                        
                    </select>
                </div>

                <div style="padding:15px;">
                    <label>LOCATION</label>
                    <input type="text" style="color:black;"name="location"placeholder="TYPE IN YOUR LOCATION"required="">
                </div>

                <div style="padding:15px;">
                    <label>IMAGE OF STORE/BUSINESS</label>
                    <input type ="file" name="file"required="">
                </div>
                <div style="padding:15px;">
                    
                    <input type ="submit" class="btn btn-success">
                </div>
                
                
                
                {{-- <<--THIS IS THE OLD FORM ->> --}}
                {{-- <form class="forms-sample">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted text-success"><span class="fa fa-info mt-1"></span>  We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control p-input" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea">Example textarea</label>
                        <textarea class="form-control p-input" id="exampleTextarea" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                    </div>
                    <fieldset class="form-group">
                        <legend class="mb-4 mt-5">Radio buttons</legend>
                        <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                              Option one is this and that—be sure to include why it's great
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                              Option two can be something else and selecting it will deselect option one
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                              Option three is disabled
                            </label>
                        </div>
                    </fieldset>
                    <div class="form-check col-12">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                          Check me out
                        </label>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form> --}}


   </form> 
        </div>
      </div>
    </div>

  <!-- page-body-wrapper ends 
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    <!-- End custom js for this page -->

    @include('admin.script')
    @include('admin.footer')
  </body>
</html>