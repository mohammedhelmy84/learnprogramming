@extends("../home")
@section('content')
    <h1 id="title">Edit Post</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @endif
<div class="container">
    <div class="row mx-auto d-flex justify-content-right text-center bg-light">
        <!-- Create Post Form -->
        <form method="POST" action="{{ route('posts.update',$post->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mx-auto">
            <div class="col-md-6 my-2">
                <div>
                    <label for="title" style="text-align: left; width:100%;">Title:</label>
                </div>
                <input type="text" name="title"  class="form-control" value="{{$post->title}}">
            </div>
            <div class="col-md-6 my-2">
                <div>
                    <label for="category_id" style="text-align: left; width:100%;">Category:</label>
                </div>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="" disabled selected>select category</option>
                    @foreach ($categories as $category)
                        <option {{$category->id == $post->category_id  ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            </div>
            <div class="row mx-auto py-2">
                <div class="col-md-6 my-2">
                    <label for="text" style="text-align: left; width:100%;">Text:</label>
                    <textarea name="text" id="text" class="form-control">{{$post->text}}</textarea>
                </div>
                <div class="col-md-6 my-2 text-left">
                    <label for="formFileLg" style="text-align: left; width:100%;">Large file input example</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file" name="pic">
                    <img src="{{ asset('/assets/img/'.$post->pic) }}" alt="" width="35px" height="30px">
                </div>
            </div>
            <div class="row mx-auto py-2">
            <div class="col-md-1">
                <button type="submit" class="btn btn-success">
                    Update
                </button>
            </div>
            </div>
        </form>
    </div>
</div>

@endsection