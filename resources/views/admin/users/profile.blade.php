@extends('layouts.app')


@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
    
        <div class="panel-heading">
        
            Edit your profiles

        </div>

        <div class="panel-body">
        
            <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
            
                {{ csrf_field() }}

                <div class="for-group">
                
                    <label for="name">Username</label>

                    <input type="text" name="name" value="{{ $user->name }}" class="form-control">

                </div>

                <div class="for-group">
                
                    <label for="name">Email</label>

                    <input type="email" name="email" value="{{ $user->email }}" class="form-control">

                </div>

                <div class="for-group">
                
                    <label for="name">New Password</label>

                    <input type="password" name="password"  class="form-control">

                </div>

                <div class="for-group">
                
                    <label for="name">Upload new avatar</label>

                    <input type="file" name="avatar" class="form-control" enctype="multipart/form-data">

                </div>

                <div class="for-group">
                
                    <label for="name">Facebook profile</label>

                    <input type="text" name="facebook" value="{{ $user->facebook }}" class="form-control">

                </div>

                <div class="for-group">
                
                    <label for="name">Youtube Profile</label>

                    <input type="text" name="youtube" value="{{ $user->youtube }}" class="form-control">

                </div>

                <div class="form-group">
                
                    <label for="about">About you</label>

                    <textarea name="about" id="about" cols="6" rows="6" class="form-control">value="{{ $user->about }}"</textarea>
                
                </div>

                <br>

                <div class="form-group text-center">
                
                    <button class="btn btn-success" type="submit">
                    
                        Update profile
                    
                    </button>
                
                </div>
 
            </form>
        
        </div>

    </div>

@stop