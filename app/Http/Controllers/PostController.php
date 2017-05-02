<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\User;
use Session;
use Log;
class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }



    public function index(Request $request)
    {
        if($request->has('sort')){

            $posts = Post::orderBy("$request->sort", 'desc')->paginate(4);
        }else{
            $posts = Post::paginate(4);
        }

        if($request->has('search')){

            $posts = Post::where('title','like',"%$request->search%")->paginate(4);
        }else{
            $posts = Post::paginate(4);
        }

        $data = [];
        $data['posts'] = $posts;
        return view('posts.index')->with($data);
    }
    public function create(Request $request)
    {
        //if -> redirect
        return view('posts.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //if -> redirect
        $this->validate($request, Post::$rules);
        $post = new Post();
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->created_by = User::all()->random()->id;
        $post->save();
        Log::info("New post saved", $request->all());
        $request->session()->flash('successMessage', 'Post saved successfully');
        return redirect()->action('PostController@show', [$post->id]);
    }
    public function show(Request $request, $id)
    {
        $post = Post::find($id);
        if(!$post) {
            Log::error("Post with id of $id not found.");
            abort(404);
        }
        $data = [];
        $data['post'] = $post;
        return view('posts.show')->with($data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //if -> redirect
        $post = Post::find($id);
        if (!$post) {
            Log::error("Post with id of $id not found.");
            abort(404);
        }
        $data = [];
        $data['post'] = $post;
        return view('posts.edit')->with($data);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //if -> redirect
        $this->validate($request, Post::$rules);
        $post = Post::find($id);
        if (!$post) {
            Log::error("Post with id of $id not found.");
            abort(404);
        }
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->created_by = $request->created_by;
        $post->save();
        $request->session()->flash('successMessage', 'Post updated successfully');
        return redirect()->action('PostController@show', [$post->id]);
    }
    public function destroy(Request $request, $id)
    {
        //if -> redirect
        $post = Post::find($id);
        if (!$post) {
            Log::error("Post with id of $id not found.");
            abort(404);
        }
        $post->delete();
        $request->session()->flash('successMessage', 'Post deleted successfully');
        return view('posts.index');
    }
}