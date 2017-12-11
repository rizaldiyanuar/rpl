<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tabel Pemesanan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
  <!-- Tell the browser to be responsive to screen width -->
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/iCheck/flat/blue.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('plugins/morris/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('plugins/datepicker/datepicker3.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="homeadmin" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Admin</span>
    </a>
    <nav class="navbar navbar-static-top">

    </nav>
  </header>
  <!-- Sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
         <li class="treeview">
         
          <a href="{{url('/indexadminprodukv')}}">
            <i class="fa fa-table"></i>
            <span>Pemesanan Produk</span>
          </a>
          <a href="indexadminwebv">
            <i class="fa fa-table"></i>
            <span>Pemesanan Web</span>
          </a>
          <a href="indexadmineditingfotov">
            <i class="fa fa-table"></i>
            <span>Pemesanan Editing Foto</span>
          </a>
          <a href="indexadmineditingvideov">
            <i class="fa fa-table"></i>
            <span>Pemesanan Editing Video</span>
          </a>
        </li>
        
          
          </ul>
        
       
    </section>
    <!-- /.sidebar -->
  </aside>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
       Table Pemesanan
      </h1>
      

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
       <section class="col-lg-12 connectedSortable">
          
          <div class="box box-info" style="padding:10px">
<legend>Produk</legend>
  <table class="table table-striped">
    <thead>
        <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Zip</th>
        <th>Project Description</th>
        <th>Status</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
    @forelse($pesan as $i => $rpl)
          <tr>
           <td>{{ $rpl->first_name }} {{ $rpl->last_name }}</td>
           <td>{{ $rpl->email }}</td>
           <td>{{ $rpl->phone }}</td>
           <td>{{ $rpl->zip }}</td>
           <td>{{ $rpl->comment }}</td>
           @if($rpl->status == 0)
            <td width="10%" style="text-align:center">Belum Selesai</td>
            @elseif ($rpl->status == 1)
            <td width="10%" style="text-align:center">Sedang Proses</td>
            @endif
            <td>
              @if($rpl->status == 0)
              <a href="{{url('indexadminwebvv')}}" class="btn btn-success btn-xs">
              <i class="fa fa-pencil-square-o"></i> Proses</a>
              @endif

          </tr>
          @empty

          @endforelse
    </tbody>
  </table>


          </div>

          </section>
          </div>
          </section>
          </div>



  <style>
  .current{  
      font-weight: bold;
      color: #367fa9;    
  }

  a:hover{
     color: #367fa9;
  }  

  </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

 <!-- Include Bootstrap Combobox -->
<link rel="stylesheet" href="{{asset('plugins/morris/morris.css')}}bootstrap-combobox/css/bootstrap-combobox.css">

<script src="{{asset('plugins/morris/morris.css')}}bootstrap-combobox/js/bootstrap-combobox.js"></script>

<style type="text/css">
/* Adjust feedback icon position */
#productForm .selectContainer .form-control-feedback,
#productForm .inputGroupContainer .form-control-feedback {
    right: -15px;
}
</style>
<!-- jQuery 2.2.3 -->
<script src="{{asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{asset('plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/app.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>



</body>
</html>

  
 <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>&copy; 2017 Rizaldi Yanuar</strong> 
  </footer>