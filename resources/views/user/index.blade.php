@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center; font-size: 20px"><b>User's data</b></div>
                        @if($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{$message}}</p>
                            </div>
                        @endif
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone number</th>
                                <th>Town</th>
                                <th>Edit</th>
                            </tr>
                            @foreach($users as $row)
                                <tr>
                                    <td>{{$row['name']}}</td>
                                    <td>{{$row['email']}}</td>
                                    <td>{{$row['phone_number']}}</td>
                                    <td>{{$row['town']}}</td>
                                    <td>
                                        @if(\Illuminate\Support\Facades\Auth::id()==$row['id'])
                                        <a href="{{action('HomeController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
                                        @endif
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection