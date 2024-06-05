<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/css/adminlte.min.css">
    <link rel="stylesheet" href="../assets/css/mystyles.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
     <link rel="stylesheet" href="../assets/tables/datatables-bs4/css/dataTables.bootstrap4.min.css">
     <title>{{ config('app.name') }}</title>   
     <style type="text/css">
        td p {
           margin: -0.3rem;
           font-size: 0.9rem;
        }
        aside.main-sidebar{
           background-color: #05445E;
           color:#ddd;
        }
        nav ul li a p{
           color:#ddd;
        }
        nav ul li a i{
           color:#ddd;
        }
     </style>
</head>
    <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <x-partials.message/>
        {{$header}}
    </nav>
    {{$content}}
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        {{$slot}}
    </aside>
    </div>

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- ChartJS -->
<script src="../assets/plugins/chart.js/Chart.min.js"></script>
<!-- overlayScrollbars -->
<script src="../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/js/adminlte.js"></script>   
 <!-- DataTables  & Plugins -->
 <script src="../assets/tables/datatables/jquery.dataTables.min.js"></script>
 <script src="../assets/tables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="../assets/tables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
 <script src="../assets/tables/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

<script>
    $(function () {
       $("#example1").DataTable();
    });
 </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>