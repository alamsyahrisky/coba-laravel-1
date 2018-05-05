<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        //insert biasa
        // $blog = new Blog;
        // $blog->title = "halo surabaya";
        // $blog->description = "ini isi dari halo surabaya";
        // $blog->save();


        //insert mass assigment
        // Blog::create([
        //     'title' => 'halo jakarta',
        //     'description' => 'isi dari blog halo jakarta',
        //     'created_at' => '0000-00-00 00:00:00',
        //     'modified_at' => '0000-00-00 00:00:00',
        // ]);


        //update data
        // $blog = Blog::where('id',1)->first();
        // $blog->title = "halo surabaya";
        // $blog->save();


        //update mass assigment
        // Blog::find(2)->update([
        //     'title' => 'halo bandung',
        //     'description' => 'ini detail halo bandung'
        // ]);

        //delete
        // $blog = Blog::find(1);
        // $blog->delete();

        //delete destroy
        // Blog::destroy([5,6]);

        //soft delete
        // $blog = Blog::find(7);
        // $blog->delete();

        // show all data with soft delete
        // $blogs = Blog::withTrashed()->get();

        //restore soft delete
        // $blog = Blog::withTrashed()->find(7);
        // $blog->restore();


        // $blogs = Blog::all();
        $blogs = Blog::paginate(10);


    	return view('page/home',['blogs'=>$blogs]);
    }

    public function show($id)
    {
    	// $link = "ini adalah link nya".$id;
       
        // $users = ['rama','adit','bagus'];

        //insert
        // DB::table('users')->insert([
        //     [
        //         'username' => 'testing',
        //         'password' => '123'
        //     ]
        // ]);

        //update
        // DB::table('users')
        //     ->where('id', 1)
        //     ->update(['username' => "riskyalam"]);

        //show
        // $users = DB::table('users')->where('id',1)->get();
        // $users = DB::table('users')->where('username','like','%a%')->get();

        //delete
        // DB::table('users')->where('id', '>', 3)->delete();


        // $users = DB::table('users')->get();
    	
        // $unexp = "<b>alert('a')</b>";
        // return view('page/single',['blog'=>$link, 'users'=>$users, 'unexp'=>$unexp]);

        $blogs = Blog::find($id);

        if (!$blogs) {
            abort(404);
        }

    	return view('page/single',['blog'=>$blogs]);
    }

    public function edit($id){
        $blogs = Blog::find($id);

        if (!$blogs) {
            abort(404);
        }

        return view('page/edit',['blog'=>$blogs]);   
    }

    public function update(Request $request,$id){
        $blog               = Blog::find($id);
        $blog->title        = $request->title;
        $blog->description  = $request->description;
        $blog->save();

        return redirect('blog/'.$id);
    }

    public function create(){

        return view('page/create');
    }
    public function store(Request $request){
        
        $this->validate($request,[
            'title' => 'required|min:5',
            'description' => 'required|min:10'
        ]);
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->save();

        return redirect('blog');
    }

    public function destroy($id){
        $blog = Blog::find($id);
        $blog->delete();

        return redirect('blog');
    }
}
