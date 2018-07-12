@extends('layouts.app')


@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
    
        <div class="panel-heading">
        
            Create a new category

        </div>

        <div class="panel-body">
        
            <form action="{{ route('category.store') }}" method="post">
            
                {{ csrf_field() }}

                <div class="for-group">
                
                    <label for="name">Title</label>

                    <input type="text" name="name" class="form-control">

                </div>

                <br>

                <div class="form-group text-center">
                
                    <button class="btn btn-success" type="submit">
                    
                        Store category
                    
                    </button>
                
                </div>

            </form>
        
        </div>

    </div>

@stop