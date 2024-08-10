
@extends("../home")

 @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("add category") }} 
                <div class="col-lg-4 col-md-6 col-sm-12 py-2 px-2 my-2">
                 <form method="post" action="{{route('categories.store')}}">
                    @csrf
                    <input class="form-control" type="text" name="name" placeholder="enter category">
                    <input class="btn btn-primary mt-2" type="submit" name="save" value="save">
                 </form> 
                </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
