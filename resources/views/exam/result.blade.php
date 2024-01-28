@extends('master')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card-body mt-5">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Batch No</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student->student_name }}</td>
                            <td>{{ $student->student_id }}</td>
                            <td>{{ $student->batch_no }}</td>
                            <td>
                                <a href="{{ route('edit', ['id' => $student->student_id]) }}" class="btn btn-success">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
