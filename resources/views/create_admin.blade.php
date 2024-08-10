@extends("home")

 @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="/">Home</a>
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
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                            <a class="btn btn-success" href="{{ route('admin.edit',$user->id) }}">Edit</a>
                                    </td>
                                    <td>
                                        <form method="post" action="{{route('admin.destroy',$user->id)}}">
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
