@extends('layout.layout')
@section('title','Room Category')
@section('action','Edit')
@section('admin')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- jquery validation -->
      <div class="card card-primary">
       
        <!-- /.card-header -->
        <!-- form start -->
        <form id="quickForm" action="{{route('admin.room_category.update',$roomCategory->id)}}" method="post" >
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="">Category Name</label>
              <input type="text" name="room_category_name" class="form-control" value="{{$roomCategory->room_category_name}}" id="" placeholder="Enter category name">
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