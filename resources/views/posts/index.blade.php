
@extends("../home")

 @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{route('posts.create')}}">add post</a>
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }} 
                    <table class="table"> 
                        <thead>
                            <?php
                              $counter = 0;    
                            ?>
                            <tr>
                                <th>#</th>
                                <th>title</th>
                                <th>category</th>
                                <th>text</th>
                                <th>image</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td><?php echo ++$counter; ?></td>
                                    <td>{{$post->title}}</td>
                                    <td>{{ $post->category->name }}</td> 
                                    <td>{{ $post->text }}</td> 
                                    <td><img src="{{ asset('/assets/img/'.$post->pic) }}" alt="" width="35px" height="30px"></td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('posts.edit', $post) }}">Edit</a>    
                                    </td>
                                    <td>
                                        <form method="post" action="{{ route('posts.destroy', $post) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>
    @endsection
