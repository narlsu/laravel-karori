<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\RecipePost;
use \Carbon\Carbon;
use Auth;
// use App\Comment;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd('$pageNum is '.$pageNum);
        //throw new Exception();
        $allRecipePosts = RecipePost::orderBy('created_at','desc')->paginate(9);
       
        return view('recipes.index', compact('allRecipePosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // Validate
        $this->validate($request,[
            'title' => 'required|min:10|max:70',
            'content' => 'required|max:65535',
            'image' => 'required|image',
            'alt_text' =>'required',
            ]);

            // Save
            $image = Image::make($request->image);

            switch($image->mime){
                case '';
                    $fileExtension = '.jpg';
                break;
                case 'image/jpeg':
                    $fileExtension = '.jpg';
                break;
                case 'image/jpg':
                    $fileExtension = '.jpg';
                break;

                case 'image/png':
                    $fileExtension = '.png';
                break;

                case 'image/gif':
                    $fileExtension = '.gif';
                break;
            }
        

        $filename = uniqid() . $fileExtension;
        $image->fit(800,600);
        // Save Image
        $image->save("images/recipes/$filename");
        // Instantiate and Save Thumbnail of Image
        $img = Image::make($image);
        $img->fit(300, 300);
        $img->save("images/recipes/thumbnails/$filename");

        $savedPost = $this->savePostData($request, $filename);

        // Redirect Post
        return redirect('/recipes/'.$savedPost->id);
    }
        

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        //
        $post = RecipePost::findOrFail($id);

        return view('recipes.show', compact('post'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //
        // Find the Recipe post to be edited
        $post = RecipePost::findOrFail($id);
        
        // Show the edit form
        return view('recipes.edit', compact('post'));
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
        //
        // Validation
        $this->validate($request, [
            'title'          => 'required|min:5',
            'content'   => 'required|min:10',
            'image'         => 'image',
            'alt_text'      => 'required|min:10',

            ]);
        // find the product that is being updated
        $post = RecipePost::findOrFail($id);


        // Override the values with new ones
        $post->title = $request['title'];
        $post->content = $request['content'];


        // did the user upload an image

        if ($request->hasFile('image')){
            
            // Remove the old image and thumbnail
            unlink('images/recipes/' . $post->image);
            unlink('images/recipes/thumbnails/' . $post->image);
            

            $image = Image::make($request->image);
            $image->fit(1100,600);
            $filename = uniqid().'.jpg';
            $image->save("images/recipes/".$filename);
            // Instantiate and save updated Thumbnail Image
            $img = Image::make($image);
            $img->fit(300, 300);
            $img->save('images/recipes/thumbnails/'.$filename);

            $post->image = $filename;
            // Make sure the file has successfully uploaded
        }

        // Push to database
        $post->save();

        // Redirect back to product page
        return redirect("/recipes/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = RecipePost::findOrFail($id);
        $post->delete();

        return redirect('/recipes');
    }

    // public function newComment(Request $request) {
    //     // Validation
    //     $this->validate($request, [
    //         'comment' => 'required|max:1000|min:20',
    //         'posts_id'=> 'required|exists:posts,id'
    //         ]);
    //     // Create new comment

    //     $data = $request->all();
    //     $data['users_id'] = \Auth::user()->id;

    //     $comment = Comment::create($data);

    //     // Redirect back to post
    //     return redirect('/recipes/'.$request->posts_id);

    // }

    private function savePostData($request, $filename){
        $newPost = $request->all();

        $newPost['image']= $filename;
        $newPost['users_id'] = \Auth::user()->id;
        $post = RecipePost::create($newPost);

        $post->title    = $request['title'];
        $post->content  = $request['content'];
        $post->image    = $filename;
        $post->alt_text = $request['alt_text'];

        $post->save();
        return $post;
    }
}