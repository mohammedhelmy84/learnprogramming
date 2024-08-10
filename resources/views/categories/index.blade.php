
@extends("../home")

 @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{route('categories.create')}}">add category</a>
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }} 
                    <table class="table"> 
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                            <a class="btn btn-success" href="{{ route('categories.edit',$category->id) }}">Edit</a>
                                    </td>
                                    <td>
                                        <form method="post" action="{{route('categories.destroy',$category->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger" type="submit" name="delete" value="delete" onclick="return confirm('Are you sure?')">
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
