<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller
{
 /*    public function __construct()
    {
        $this->middleware('auth', ['except', [ 'index' , 'show' ] ]) ;
    } */
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $post = Posts::all();
        // dd($post);

        return view('blog.index')
            ->with('posts', Posts::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newImageName = '';
        $newAudioName = '';
        $newVideoName = '';
        $newYoutubeName = '';

        //dd($request);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_path' => 'nullable|mimes:jpeg,jpg,png,gif|max:5048', // 5MB
            'audio' => 'nullable|file|mimes:audio/mpeg,mpga,mp3,wav,aac|max:32768', //32MB
            'video' => 'nullable|file|mimes:mp4,avi|max:32768', // 32MB
        ]);
        
        if( $request->hasFile('image') )
        {
            $newImageName = uniqid() . '_' . $request->title . '.' . $request->image->extension();
            //dd($newImageName);
            $request->image->move(public_path('img'), $newImageName);
        }

        if( $request->hasFile('audio') )
        {
            $newAudioName = uniqid() . '_' . $request->title . '.' . $request->audio->extension();
            //dd($newAudioName);
            $request->audio->move(public_path('audio'), $newAudioName);
        }

        if( $request->hasFile('video') )
        {
            $newVideoName = uniqid() . '_' . $request->title . '.' . $request->video->extension();
            //dd($newVideoName);
            $request->video->move(public_path('video'), $newVideoName);
        }

        if( $request->filled('youtube_path') )
        {
            $newYoutubeName = $request->youtube_path;
            //dd($newYoutubeName);
        }

        $slug = SlugService::createSlug(Posts::class, 'slug', $request->title);

        //dd($slug);
        Posts::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => SlugService::createSlug(Posts::class, 'slug', $request->title),
                'image_path' => $newImageName,
                'audio_path' => $newAudioName,
                'video_path' => $newVideoName,
                'youtube_path' => $newYoutubeName,
                'user_id' => auth()->user()->id
        ]);
        return redirect('/blog')
            ->with('message', 'Your post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('blog.show')
            ->with('post', Posts::where( 'slug', $slug )->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('blog.edit')
            ->with('post', Posts::where( 'slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Posts::where( 'slug', $slug)
            ->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => SlugService::createSlug(Posts::class, 'slug', $request->title),
             /*    'image_path' => $request->input('image'),
                'audio_path' => $request->input('audio'),
                'video_path' => $request->input('video'),
                'youtube_path' => $request->input('youtube_path'), */
                'user_id' => auth()->user()->id
            ]);

            return redirect('/blog',)
                ->with('message', 'Your post has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Posts::where('slug', $slug);
        $post->delete();

        return redirect('/blog',)
            ->with('message', 'Your post has been deleted.');
    }
}
