
@extends('Master.master')
@section('content')
 

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
        <form action="{{route('upload')}}" method="post"  enctype="multipart/form-data">
            @csrf
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
    <button type="submit"> upload</button>
  </div>
</form>
        
        <!-- right col -->
      </div>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
 
  <!-- /.content-wrapper -->
 @endsection