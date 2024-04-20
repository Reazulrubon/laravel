@extends('admin.index')

@section('title')
    Admin | Panel
@endsection

@section('adminc')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper ">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid bg-gradient">

                <h1 class="bg-info p-2 text-center">Slider List</h1> <br>
                <a href="{{ route('slider.create') }}" class="btn btn-primary btn-md">Add New Slider</a> <br> <br>
                <div class="row mb-2">
                    <hr>
                    <table border="1" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $d)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset('pictures/' . $d->photo) }}" alt="photo" height="100"
                                            width="70"></td>
                                    <td>{{ $d->name }}</td>
                                    <td>{{ $d->designation }}</td>
                                    <td>
                                        <form action="{{ route('slider.destroy', $d->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-md"
                                                onclick="return confirm('Are You Confirm to Delete')">Delete</button>
                                        </form>
                                        <a class="btn btn-primary btn-md" href="{{ route('slider.edit', $d->id) }}">Edit
                                        </a>
                                        <a class="btn btn-info btn-md" href="{{ route('slider.show', $d->id) }}">Show</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>No Data Found!! </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    @endsection
