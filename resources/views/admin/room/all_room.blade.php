@extends('layout.layout')
@section('title', 'Room')
@section('action', 'All')
@section('admin')
    <div class="row">
        <div class="col-12">


            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.room.add') }}" class="card-title btn btn-primary">Add Room</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Room Name</th>
                                <th>Price</th>
                                <th>Count</th>
                                <th>Room Category</th>
                                <th>Room Image</th>
                                <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($room as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->room_name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->count }}</td>
                                    <td>{{ $item->roomCategory->room_category_name }}</td>
                                    <td>
                                        <img src="{{ asset($item->image) }}" alt="Room Image" width="90px" height="90px">
                                    </td>


                                    <td colspan="2">
                                        <a class="btn btn-warning"
                                            href="{{ route('admin.room.edit', $item->id) }}">Edit</a>
                                        <a class="btn btn-danger" href="#"
                                            onclick="confirmDelete('{{ route('admin.room.delete', $item->id) }}')">Delete</a>

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
            if (confirm("Are you sure you want to delete this Room?")) {
                window.location.href = deleteUrl;
            }
        }
    </script>
@endsection
