@extends('layout.main')

@section('content')
    <div class="card p-3">
        <h3>Data Students</h3>
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-success">
                <i class="fas fa-plus-circle"></i>
                Add New Data
            </button>
        </div>
        <div class="card-body">
            <table class="table table-sm table-striped table-bordered">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Id Students</th>
                        <th>Full Name</th>
                        <th>Genre</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>a</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $row)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->idstudents }}</td>
                            <td>{{ $row->fullname }}</td>
                            <td>{{ ($row->genre == 'M') ? 'Male' : 'Female' }}</td>
                            <td>{{ $row->address }}</td>
                            <td>{{ $row->emailaddress }}</td>
                            <td>{{ $row->phone }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
