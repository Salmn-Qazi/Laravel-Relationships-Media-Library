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
}
