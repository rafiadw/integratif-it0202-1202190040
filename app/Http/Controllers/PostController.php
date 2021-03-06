<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Posts;

use DB;

class PostController extends Controller
{
    public function index(){
        $this->kumparan();
        $this->tempo();
        $this->vice();
        $posts = DB::select('select * from posts where image != ""');
        return view('post',['posts'=>$posts]);
    }

    public function kumparan()
    {  
        $xml = simplexml_load_file("https://lapi.kumparan.com/v2.0/rss/");
        $i = 0;
        foreach ($xml->channel->item as $data) if ($i < 5){
            $values = array('id' => 0, 'title' => $data->title, 'link' => $data->link, 'image' => $data->enclosure['url'], 'description' => $data->description);
            DB::table('posts')->insert($values);     
            $i += 1;
        }
    }

    public function tempo()
    {  
        $xml = simplexml_load_file("https://rss.tempo.co/nasional");
       
        $i = 0;
        foreach ($xml->channel->item as $data) if ($i < 5){
            $values = array('id' => 0, 'title' => $data->title, 'link' => $data->link, 'image' => $data->img, 'description' => $data->description);       
            DB::table('posts')->insert($values);
            $i += 1;
        }
    }

    public function vice()
    {  
        $xml = simplexml_load_file("https://www.vice.com/id/rss?locale=id_id");
        $i = 0;
        foreach ($xml->channel->item as $data) if ($i < 5){
            $values = array('id' => 0, 'title' => $data->title, 'link' => $data->link, 'image' => $data->enclosure['url'], 'description' => $data->description);
            DB::table('posts')->insert($values);     
            $i += 1;
        }
    }

    public function getNews(){
        // get from news
        $posts = Posts::get();
        return response()->json($posts, 200);
    }
    
}