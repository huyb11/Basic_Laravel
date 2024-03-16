@extends('layout.layout')
@section('title','Product')
@section('action','Add')
@section('admin')


<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- jquery validation -->
      <div class="card card-primary">
       
        <!-- /.card-header -->
        <!-- form start -->
        <form id="quickForm" action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data" >
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="">Product Name</label>
              <input type="text" name="product_name" class="form-control" id="" placeholder="Enter product name">
            </div>
            <div class="form-group">
                <label for="">Product Price</label>
                <input type="text" name="product_price" class="form-control" id="" placeholder="Enter product price">
              </div>
              <div class="form-group">
                <label for="">Product Amount</label>
                <input type="text" name="product_amount" class="form-control" id="" placeholder="Enter product amount">
              </div>
              <div class="form-group">
                <label for="">Product Image</label>
                <input type="file" name="product_img" class="form-control" id="" >
              </div>
              <div class="form-group">
                <label for="exampleSelectBorder">Danh mục </label>
                <select name="category_id" class="custom-select form-control-border" id="exampleSelectBorder">
                    @foreach($category as $item)
                              <option value="{{$item->id}}">{{$item->category_name}}</option>
                  @endforeach
                </select>
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