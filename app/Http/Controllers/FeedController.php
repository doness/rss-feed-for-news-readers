<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FeedController extends Controller
{
    public function generate()
    {
        $posts = \App\Post::published()->latest()->take(10)->get();

        $feed = \App::make('feed');
        $feed->title = 'My blog';
        $feed->description = 'This is my blog about this';
        // $feed->logo = asset('img/logo.png'); //optional
        $feed->link = url('feed');
        $feed->setDateFormat('datetime'); // 'datetime', 'timestamp' or 'carbon'
        $feed->pubdate = $posts[0]->created_at;
        $feed->lang = 'en';
        $feed->setShortening(true); // true or false
        $feed->setTextLimit(100); // maximum length of description text

        foreach ($posts as $post)
        {
            // set item's title, author, url, pubdate, description and content
            $feed->add($post->title, 'Author', url('posts/' . $post->id), $post->created_at, $post->content, $post->content);
        }

        return $feed->render('rss'); // or atom
    }
}
