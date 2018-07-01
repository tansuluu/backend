@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{route('savePost')}}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('post') ? ' has-error' : '' }}">
                                <label for="post" class="col-md-4 control-label">Post</label>

                                <div class="col-md-6">
                                    <textarea id="post" class="form-control" name="post" value="{{ old('post') }}" required></textarea>

                                    @if ($errors->has('post'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('post') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
                                <label for="author" class="col-md-4 control-label">Author</label>

                                <div class="col-md-6">
                                    <input id="author" type="text" class="form-control" name="author" required>

                                    @if ($errors->has('author'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('author') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        ADD POST
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
