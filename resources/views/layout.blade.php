<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gleason</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/aa999a9d02.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <style>
        .container{
            height: 100%;
        }
        .floatingbar {
            height: 100px;
        }
        li{
            padding: 15px 0;
        }
        .floatingbar{
            background-color: #fff;
            height: 50px;
            box-sizing: border-box;
        }
        .title{
            background-color: #ebfbff;

        }
        .s{
            padding: 10px;
        }
        .footer{
            position: absolute;
            bottom: 0px;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-2 title">
                <h3>Gleason</h3>

            </div>
            <div class="col-md-10">
                <div class="floatingbar">

                </div>
            </div>
        </div>
        
        <div class="row ">
            <div class="col-md-2">
                <li><a href="{{url('dashboard')}}">Dashboard</a></li>
                <li>Applications</li>
                <li>Data Centers</li>
                <li>Customers</li>
                <li><a href="{{url('users')}}">User Management</a> </li>
            </div>
            <div class="col-md-10 title s">
               @section('maincontent')
                   
               @show

            </div>
        </div>
        <footer class="footer">
            <div class="row">
                <div class="col-md-8">
                    <span>Applications</span>&nbsp;<span>Terms & Conditions</span>
                </div>
                <div class="col-md-4">
                    @ 2019 Gleason Corporation
                </div>
            </div>
        </footer>
    </div>



</body>

</html>
