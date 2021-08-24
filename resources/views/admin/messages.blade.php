<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <x-app-layout>

    </x-app-layout>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Doctor Appoinment Admin</title>
        <!-- base:css -->
        <link rel="stylesheet" href="admin/vendors/typicons/typicons.css">
        <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="admin/css/vertical-layout-light/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="admin/images/favicon.png" />
    </head>

    <body>
        <div class="main-panel">
            <div class="content-wrapper">
                <!--find the relavant div -->
                @include("admin.navbar")
                <div style="position: relative; top:60px; right: -150px ">
                    <table bgcolor="lightblue" border="3px">
                        <tr>
                            <th style="padding: 30px">Name</th>
                            <th style="padding: 30px">Email</th>
                            <th style="padding: 30px">Phone</th>
                            <th style="padding: 30px" align="center">Message</th>
                            <th style="padding: 30px">Data & Time</th>
                            <th style="padding: 30px">Status</th>
                            <th style="padding: 30px">Response</th>
                        </tr>
                        @foreach($message as $message)
                        <tr align="center">
                            <td style="padding: 10px">{{$message->name}}</a></td>
                            <td style="padding: 10px">{{$message->email}}</a></td>
                            <td style="padding: 10px">{{$message->phone}}</a></td>
                            <td style="padding: 10px">{{$message->message}}</a></td>
                            <td style="padding: 10px">{{$message->created_at}}</a></td>

                            @if($message->email=="0")
                            <td style="padding: 10px">Registered</a></td>
                            @else
                            <td style="padding: 10px">Not Registered</a></td>
                            @endif

                            <td style="padding: 10px"><a href="www.gmail.com">Reply</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <!-- container-scroller -->

        <!-- base:js -->
        <script src="vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <script src="vendors/chart.js/Chart.min.js"></script>
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="js/off-canvas.js"></script>
        <script src="js/hoverable-collapse.js"></script>
        <script src="js/template.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="js/dashboard.js"></script>
        <!-- End custom js for this page-->
    </body>

    </html>


</body>

</html>