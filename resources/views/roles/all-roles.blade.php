

@extends('Master.master')
@section('content-title','Role Permession');
@section('css')
<link rel="stylesheet" href="\AdminLTE-2.4.18\bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="\AdminLTE-2.4.18\bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="\AdminLTE-2.4.18\bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="\AdminLTE-2.4.18\bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="\AdminLTE-2.4.18\dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="\AdminLTE-2.4.18\dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
@endsection
@section('content')
 

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
           <div class="box">
            <div class="box-header">
              <a href="{{route('createRole')}}"><button type="button" class="btn btn-warning">Create Role</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Role Name</th>
                  <th>Guard Name</th>
                  <th>Created At</th>
                </tr>
                </thead>

                <tbody>
                    @foreach($role as $key=>$value)
                    
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$value['name']}}</td>
                  <td>{{$value['guard_name']}}</td>
                  <td>{{$value['created_at']}}</td>
                </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

        
        <!-- right col -->
      
      <!-- /.row (main row) -->

    
    <!-- /.content -->
 
  <!-- /.content-wrapper -->
 @endsection

   
<!-- Bootstrap 3.3.7 -->
@section('js');
<script src="\AdminLTE-2.4.18\bower_components/jquery/dist/jquery.min.js"></script>
<script src="\AdminLTE-2.4.18\bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="\AdminLTE-2.4.18\bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="\AdminLTE-2.4.18\bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="\AdminLTE-2.4.18\bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="\AdminLTE-2.4.18\bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="\AdminLTE-2.4.18\dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="\AdminLTE-2.4.18\dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

@endsection