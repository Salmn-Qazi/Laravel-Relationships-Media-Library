<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        // $user = User::find(3);
        // return $user->post;

        $post = Post::find(2);
        return $post->user->name;
    }

    public function add_contact()
    {
       $user = User::find(3);
       $contact = new Contact();
       //$contact->user_id = '3';
       $contact->home_contact = '0911234567';
       $contact->office_contact = '03211234567';
       $contact->email = 'xy@gmail.com';

       $user->contact()->save($contact);
    }

    public function add_user()
    {
        return view('Home.add');
    }

    public function add(Request $request)
    {
        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            $user = User::Create(['name' => $request->name]);
            $user->addMediaFromRequest('image')->toMediaCollection('Images');
        }
        else
        {
            return 'fail';
        }
    }

    public function list()
    {
        $users = User::all();
        return view('home.list', compact('users'));
    }
}
