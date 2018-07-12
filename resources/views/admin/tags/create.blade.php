@extends('layouts.app')


@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
    
        <div class="panel-heading">
        
            Create a new Tag

        </div>

        <div class="panel-body">
        
            <form action="{{ route('tag.store') }}" method="post">
            
                {{ csrf_field() }}

                <div class="for-group">
                
                    <label for="name">Tag</label>

                    <input type="text" name="tag" class="form-control">

                </div>

                <br>

                <div class="form-group text-center">
                
                    <button class="btn btn-success" type="submit">
                    
                        Store Tag
                    
                    </button>
                
                </div>
 
            </form>
        
        </div>

    </div>

@stop