@extends('layouts.app')


@section('content')

   <div class="panel panel-default">

    <div class="panel-heading text-center">
        Trashed Post
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
                    
                        Restore
                    
                    </th>

                    <th>
                    
                        Destroy
                    
                    </th>
                
                </thead>

                <tbody> 
                
                    @if($posts->count() > 0)

                        @foreach($posts as $post)

                            <tr>
                            
                                <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="22px" height="108px"></td>

                                <td>{{ $post->title }}</td>
        
                                <td>Edit</td>

                                <td><a href="{{ route('posts.restore', ['id' => $post->id]) }}" class="btn btn-xs btn-success">Restore</a></td>

                                <td><a href="{{ route('posts.kill', ['id' => $post->id]) }}" class="btn btn-xs btn-danger">Delete</a></td>
                            
                            </tr>   

                        @endforeach
                    @else

                        <tr>
                        
                            <th colspan="5" class="text-center">No trashed post</th>
                        
                        </tr>

                    @endif
                
                </tbody>
    
            </table>
    
        </div>  
   
    </div>   


@stop
