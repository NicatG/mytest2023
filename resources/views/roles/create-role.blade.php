@extends('Master.master')
@section('content-title','Device insert')

@section('content')
<section class="content">
<!-- Small boxes (Stat box) -->
<div class="row">
 <div class="col-xs-4">


        <form action="{{ route('createFormRole')}}" method="post">
            @csrf
           
                
               
                <div class="form-group">
                    <label for="exampleInputPassword1">Role Name</label>
                    <input type="text" class="form-control"  placeholder="Role name" name="name">
                </div>
                
               <br>
                <button type="submit" class="btn btn-primary">Create</button>
        </form>
</div>
</div>
</section>
<script>
$('.datepicker').datepicker({
    startDate: '-3d'
});
  </script>  
@endsection