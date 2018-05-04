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
        // $blog->title = "halo batu";
        // $blog->description = "ini isi dari halo batu";
        // $blog->save();


        //insert mass assigmen
        Blog::create([
            'title' => 'halo jakarta',
            'description' => 'isi dari blog halo jakarta',
            'created_at' => '0000-00-00 00:00:00',
            'modified_at' => '0000-00-00 00:00:00',
        ]);

        $blogs = Blog::all();

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


    	return view('page/single',['blog'=>$blogs]);
    }
}
