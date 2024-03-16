@extends('layout.layout')
@section('title', 'Category')
@section('action', 'All')
@section('admin')
    <div class="row">
        <div class="col-12">


            <div class="card">
                <div class="card-header">
                    <a href="{{route('admin.category.add')}}" class="card-title btn btn-primary">Add Category</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($categories as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->category_name}}</td>
                                <td colspan="2">

                                    <a class="btn btn-warning" href="{{ route('admin.category.edit', $item->id) }}">Edit</a>
                                    <a class="btn btn-danger" href="#"
                                        onclick="confirmDelete('{{ route('admin.category.delete', $item->id) }}')">Delete</a>

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
        function confirmDelete(deleteUrl) {
            if (confirm("Are you sure you want to delete this category?")) {
                window.location.href = deleteUrl;
            }
        }

    </script>
@endsection
