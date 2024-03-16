@extends('layout.layout')
@section('title','Category')
@section('action','Add')
@section('admin')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- jquery validation -->
      <div class="card card-primary">
       
        <!-- /.card-header -->
        <!-- form start -->
        <form id="quickForm" action="{{route('admin.category.store')}}" method="post" >
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="">Room Category Name</label>
              <input type="text" name="room_category_name" class="form-control" id="" placeholder="Enter category name">
            </div>
            
            
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
      </div>
    <!--/.col (left) -->
    <!-- right column -->
  
    <!--/.col (right) -->
  </div>
@endsection