@extends('layout.layout')
@section('title', 'Room')
@section('action', 'Add')
@section('admin')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">

                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" action="{{ route('admin.room.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Room Name</label>
                            <input type="text" name="room_name" class="form-control" id=""
                                placeholder="Enter category name">
                        </div>
                        <div class="form-group">
                            <label for="">Room Count</label>
                            <input type="text" name="count" class="form-control" id=""
                                placeholder="Enter category name">
                        </div>
                        <div class="form-group">
                            <label for="">Room Price</label>
                            <input type="text" name="price" class="form-control" id=""
                                placeholder="Enter category name">
                        </div>
                        <div class="form-group">
                            <label for="">Room Image</label>
                            <input type="file" name="image" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectBorder">Room Category </label>
                            <select name="room_category_id" class="custom-select form-control-border" id="exampleSelectBorder">
                                @foreach ($room_category as $item)
                                    <option value="{{ $item->id }}">{{ $item->room_category_name }}</option>
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
