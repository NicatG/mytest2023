

@extends('Master.master')
@section('content-title','Role Permession')
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

<!-- DataTables -->
<script src="\AdminLTE-2.4.18\bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="\AdminLTE-2.4.18\bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="\AdminLTE-2.4.18\bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
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