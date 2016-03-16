@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                @if ( $is_admin )
                        echo "Admin ";
                @endif
                        Dashboard</div>

                <div class="panel-body">
                @if (session('status'))
    <div class="alert alert-warning">
        {{ session('status') }}
    </div>
@endif
               
                    You are logged in!
                   @if ( empty( $profile->id ))
                    <div>You haven't created a profile yet! <a class="btn btn-link" href="{{ url('/profile/create') }}">Create one now</a></div>
                   @endif
                   @if ( !empty( $is_admin ))
                    <div>View Profiles:  <a class="btn btn-link" href="{{ url('/admin') }}">here</a></div>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
