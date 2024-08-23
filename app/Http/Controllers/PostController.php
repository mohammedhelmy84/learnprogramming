<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\StorePostRequest;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$posts = Post::with('category')->get(); 
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest  $request)
   // public function store(Request $request)
    {
        
       $request->validate([
          'title'=>'required',
          'text'=>'required',
          'category_id' => 'required',
          'pic'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048'

       ],
       [
        'title.required'=>'Title is required',
        'text.required'=>'Text is required',
        'category_id.required'=>'Category id is required',
        'pic.required'=>'Image is required'
       ]
    );

       $this->validate($request, $request->messages());
     
            $imageName = time().'.'.$request->pic->extension();
            $request->pic->move(public_path('assets/img'), $imageName);
            $post = new Post();
            $post->title = $request->title;
            $post->text = $request->text;
            $post->category_id = $request->category_id;
            $post->pic = $imageName;
            $post->save();

      
      //  Post::create($request->validated());
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::where('id','=',$id)->first();
        return view('posts.details',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
      
        return view('posts.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->update([
           'title'=>$request->input('title'),
           'text'=>$request->input('text'),
           'category_id'=>$request->input('category_id'),
        ]);

      
            if($request->hasFile('pic')){
                $path = public_path('assets/img/');
                $file = $request->file('pic');
                $extension = $file->getClientOriginalExtension();
                $file_name = time().'.'.$extension;
                $file->move($path,$file_name);
                $post->pic = $file_name;
                $post->save();
            }
            
       

         return redirect()->route('posts.index');
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
