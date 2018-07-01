@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center; font-size: 20px"><b>ALL POSTS</b></div>
                    @if($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{$message}}</p>
                        </div>
                    @endif
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Title</th>
                            <th>Post</th>
                            <th>Author</th>
                            <th>Edit</th>
                        </tr>
                        @foreach($posts as $row)
                            <tr>
                                <td>{{$row['title']}}</td>
                                <td>{{$row['post']}}</td>
                                <td>{{$row['author']}}</td>
                                <td>
                                    <a href="{{action('IndexController@edit', $row['id'])}}" class="btn btn-warning">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
    </div>

@endsection