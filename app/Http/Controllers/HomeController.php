<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Faker\Generator;
use Illuminate\Container\Container;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $faker = Container::getInstance()->make(Generator::class);
        $user = User::firstOrcreate(
            ['session_id' => session()->getId()],
            ['name' => $faker->name]
        );
        $posts = $user->getPosts();
        return view('home', compact('user', 'posts'));
    }
}
