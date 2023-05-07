<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show Geo Code in Datatable</title>
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
  
    @include('admin.sidebar')

    <div class="container-fluid page-body-wrapper">
        <div align="center" style="padding-top: 100px;">
    
        {{-- <table>
            <tr style="background-color:black;">
                <th style="padding:10px;">Customer Name</th>
                <th style="padding:10px;">Email</th>
                <th style="padding:10px;">Phone</th>
                <th style="padding:10px;">Doctor</th>
                <th style="padding:10px;">Date</th>
                <th style="padding:10px;">Message</th>
                <th style="padding:10px;">Status</th>
                <th style="padding:10px;">Approved</th>
                <th style="padding:10px;">Cancelled</th>
            </tr>
                @foreach($data as $appoint)

            <tr align="center" style="background-color:aqua;">
                <td>{{$appoint->name}}</td>
                <td>{{$appoint->email}}</td>
                <td>{{$appoint->phone}}</td>
                <td>{{$appoint->doctor}}</td>
                <td>{{$appoint->date}}</td>
                <td>{{$appoint->message}}</td>
                <td>{{$appoint->status}}</td>
                <td>
                    <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a>
                </td>
                
                <td>
                    
                    <a class="btn btn-danger" href="{{url('cancelled',$appoint->id)}}">Cancelled</a>
                
                </td>
            </tr>

            @endforeach
        </table> --}}

        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th style="padding:10px;">ID</th>
                        <th style="padding:10px;">FIRST NAME</th>
                        <th style="padding:10px;">LAST NAME</th>
                        <th style="padding:10px;">GENDER</th>
                        <th style="padding:10px;">LOCATION</th>
                        <th style="padding:10px;">LATITUDE</th>
                        <th style="padding:10px;">LONGITUDE</th>
                        <th style="padding:10px;">DELETE</th>
                        <th style="padding:10px;">UPDATE</th>
                </tr>
            </thead>

                @foreach($geo as $geodata)

                    {{-- <tr align="center" style="background-color:rgb(49, 49, 49);"> --}}
                        <tr>
                        <td>{{$geodata->id}}</td>
                        <td>{{$geodata->fname}}</td>
                        <td>{{$geodata->lname}}</td>
                        <td>{{$geodata->gender}}</td>
                        <td>{{$geodata->location}}</td>
                        <td>{{$geodata->latitude}}</td>
                        <td>{{$geodata->longitude}}</td>
                        <td>{{$geodata->delete}}</td>
                        <td>{{$geodata->update}}</td>
                        <td>{{$geodata->message}}</td>
                        <td>{{$geodata->status}}</td>
                        
                        <td>
                            <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a>
                        </td>
                
                        <td>
                            <a class="btn btn-danger" href="{{url('cancelled',$appoint->id)}}">Cancelled</a>
                        </td>

                    </tr>

                @endforeach


        </table> 
          
    </div>

    </div>
</div>
@include('admin.footer')
</body>
</html>