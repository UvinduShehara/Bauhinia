@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Users</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $item)
                       <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->telephone }}</td>
                            <td>
                                <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-info btn-sm">View</a>
                            </td>
                       </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

