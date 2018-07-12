@extends('layouts.app')


@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
    
        <div class="panel-heading">
        
            Edit Blog Setting

        </div>

        <div class="panel-body">
        
            <form action="{{ route('settings.update') }}" method="post">
            
                {{ csrf_field() }}

                <div class="for-group">
                
                    <label for="name">Site Name</label>

                    <input type="text" name="site_name" class="form-control" value="">

                </div>

                <div class="for-group">
                
                    <label for="name">Address</label>

                    <input type="text" name="address" class="form-control" value="">

                </div>

                <div class="for-group">
                
                    <label for="name">Contact Phone</label>

                    <input type="text" name="contact_number" class="form-control" value="">

                </div>

                <div class="for-group">
                
                    <label for="name">Contact Email</label>

                    <input type="text" name="contact_email" class="form-control" value="">

                </div>

                <br>

                <div class="form-group text-center">
                
                    <button class="btn btn-success" type="submit">
                    
                        Update settings
                    
                    </button>
                
                </div>
 
            </form>
        
        </div>

    </div>

@stop