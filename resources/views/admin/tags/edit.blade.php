@extends('layouts.app')


@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
    
        <div class="panel-heading">
        
            Edit Tag : {{ $tag->tag }}

        </div>

        <div class="panel-body">
        
            <form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="post">
            
                {{ csrf_field() }}

                <div class="for-group">
                
                    <label for="name">Tag</label>

                    <input type="text" name="tag" value="{{ $tag->tag }}" class="form-control">

                </div>

                <br>

                <div class="form-group text-center">
                
                    <button class="btn btn-success" type="submit">
                    
                        Update Tag
                    
                    </button>
                
                </div>
 
            </form>
        
        </div>

    </div>

@stop