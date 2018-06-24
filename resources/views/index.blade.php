@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 align="center">User's Data</h3>
            <br />
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif
            <table class="table table-bordered table-striped">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($users as $row)
                    <tr>
                        <td>{{$row['name']}}</td>
                        <td>{{$row['email']}}</td>
                        <td><a href="{{action('IndexController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection