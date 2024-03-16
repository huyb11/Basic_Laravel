@extends('layout.layout')
@section('title','Product')
@section('action','Edit')
@section('admin')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- jquery validation -->
      <div class="card card-primary">
       
        <!-- /.card-header -->
        <!-- form start -->
        <form id="quickForm" action="{{route('admin.product.update',$product->id)}}" method="post" >
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="">Product Name</label>
              <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}" id="" placeholder="Enter product name">
            </div>
            <div class="form-group">
                <label for="">Product Price</label>
                <input type="text" name="product_price" class="form-control" value="{{$product->product_price}}" id="" placeholder="Enter product price">
              </div>
              <div class="form-group">
                <label for="">Product Amount</label>
                <input type="text" name="product_amount" class="form-control" value="{{$product->product_amount}}" id="" placeholder="Enter product amount">
              </div>
              <div class="form-group">
                <label for="exampleSelectBorder">Danh mục </label>
                <select name="category_id" class="custom-select form-control-border" id="exampleSelectBorder">
                    @foreach($category as $item)
                              <option value="{{$item->id}}">{{$item->category_name}}</option>
                  @endforeach
                </select>
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