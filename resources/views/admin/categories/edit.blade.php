@extends('layouts.app')


@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
    
        <div class="panel-heading">
        
            Update Category: {{ $category->name }}

        </div>

        <div class="panel-body">
        
            <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post">
            
                {{ csrf_field() }}

                <div class="for-group">
                
                    <label for="name">Title</label>

                    <input type="text" name="name" value="{{ $category->name }}" class="form-control">

                </div>

                <br>

                <div class="form-group text-center">
                
                    <button class="btn btn-success" type="submit">
                    
                        Update category
                    
                    </button>
                
                </div>

            </form>
        
        </div>

    </div>

@stop 