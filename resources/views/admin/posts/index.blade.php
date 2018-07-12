@extends('layouts.app')


@section('content')

   <div class="panel panel-default">

    <div class="panel-heading text-center">
        Published Post
    </div>
   
        <div class="panel panel-body">
    
            <table class="table table-hover">
    
                <thead>

                    <th>
                    
                        Image
                    
                    </th>

                    <th>
                    
                        Title
                    
                    </th>

                    <th>
                    
                        Edit
                    
                    </th>

                    <th>
                    
                        Trash
                    
                    </th>
                
                </thead>

                <tbody>   

                    @if($posts->count() > 0)
                
                        @foreach($posts as $post)

                            <tr>
                            
                                <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="22px" height="108px"></td>

                                <td>{{ $post->title }}</td>
        
                                <td><a href="{{ route('posts.edit', ['id' => $post->id]) }}" class="btn btn-xs btn-info">Edit</a></td>

                                <td><a href="{{ route('posts.delete', ['id' => $post->id]) }}" class="btn btn-xs btn-danger">Trash</a></td>
                            
                            </tr>   

                        @endforeach
                    
                    @else

                        <tr>
                        
                            <th colspan="5" class="text-center">No published post</th>
                        
                        </tr>

                    @endif
                
                </tbody>
    
            </table>
    
        </div>  
   
    </div>   


@stop