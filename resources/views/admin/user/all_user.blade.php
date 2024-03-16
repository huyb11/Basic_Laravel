@extends('layout.layout')
@section('title','User')
@section('action','All')
@section('admin')
<div class="row">
    <div class="col-12">


        <div class="card">
           
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>

                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>

                            <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->user_name}}</td>
                            <td>{{$user->user_email}}</td>
                            
                            <td colspan="2">

                                <a class="btn btn-warning" href="{{ route('admin.user.edit', $item->id) }}">Edit</a>
                                <a class="btn btn-danger" href="#"
                                    onclick="confirmDelete('{{ route('admin.user.delete', $item->id) }}')">Delete</a>

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
        if (confirm("Are you sure you want to delete this Product?")) {
            window.location.href = deleteUrl;
        }
    }

</script>
@endsection