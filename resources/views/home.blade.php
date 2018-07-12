@extends('layouts.app')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome Admin, you are logged in!
                </div>
            </div>
       
@endsection
