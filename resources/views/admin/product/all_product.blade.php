@extends('layout.layout')
@section('title', 'Product')
@section('action', 'All')
@section('admin')
    <div class="row">
        <div class="col-12">


            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.product.add') }}" class="card-title btn btn-primary">Add Product</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Amount</th>
                                <th> Status</th>
                                <th> Category </th>
                                <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($product as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->product_name }}</td>
                                    <td>{{ $item->product_price }}</td>
                                    <td>{{ $item->product_amount }}</td>
                                    <td>
                                        <img src="{{ asset($item->product_img) }}" width="90px" height="90px" />
                                    </td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->category_name }}</td>

                                    <td colspan="2">

                                        <a class="btn btn-warning"
                                            href="{{ route('admin.product.edit', $item->id) }}">Edit</a>
                                        <a class="btn btn-danger" href="#"
                                            onclick="confirmDeletes('{{ route('admin.product.delete', $item->id) }}')">Delete</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <script>
        function confirmDeletes(deleteUrls) {
            if (confirm("Are you sure you want to delete this Product?")) {
                window.location.href = deleteUrls;
            }
        }
    </script>
@endsection
