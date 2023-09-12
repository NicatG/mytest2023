
@extends('Master.master')
@section('css')
<link rel="stylesheet" href="\AdminLTE-2.4.18\plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="\AdminLTE-2.4.18\dist/css/skins/_all-skins.min.css">
@endsection
@section('content')
 

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 col-xs-6">
        <div class="box-body pad">
              <form action="" method="" >
                @csrf
                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                                            Nicat 
                    </textarea>
              </form>
            </div>
        
        <!-- right col -->
      </div>
      </div>
      <!-- /.row (main row) -->

    </section>
    
 @endsection

 @section('js')

<!-- AdminLTE for demo purposes -->
<!-- CK Editor -->
<script src="\AdminLTE-2.4.18\bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="\AdminLTE-2.4.18\plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
    <!-- /.content -->
 
  <!-- /.content-wrapper -->
 @endsection