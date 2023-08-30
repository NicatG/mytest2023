@extends('Master.master')
@section('content-title','Device insert')

@section('content')
<section class="content">
<!-- Small boxes (Stat box) -->
<div class="row">
 <div class="col-xs-4">


        <form action="{{route('devices.store')}}" method="post">
            @csrf
            <input type="hidden" name="uid" value="{{ uniqid() }}">
                <div class="form-group bg-white">
                    <label for="exampleInputEmail1">Type</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Type" name="type">
                    
                </div>
               
                <div class="form-group">
                    <label for="exampleInputPassword1">Model</label>
                    <input type="text" class="form-control"  placeholder="Model" name="model">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Serial Number</label>
                    <input type="text" class="form-control"  placeholder="Serial Number" name="serial_number">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Purchase Price</label>
                    <input type="text" class="form-control"  placeholder="Purchase Price" name="purchase_price">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">worker</label>
                    <input type="text" class="form-control"  placeholder="Purchase Price" name="worker">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Purchase of Date</label>
                    <div class="input-group date" data-provide="datepicker">
                    <input type="text" class="form-control" placeholder="Date" name="date_of_purchase">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
                 </div> 
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