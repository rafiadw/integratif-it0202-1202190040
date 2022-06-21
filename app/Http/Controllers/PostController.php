<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use DB;

class PostController extends Controller
{
    public function index(){
        $this->kumparan();
        $this->tempo();
        $posts = DB::select('select * from posts where image != ""');
        return view('post',['posts'=>$posts]);
    }

    public function kumparan()
    {  
        $xml = simplexml_load_file("");
        $i = 0;
        foreach ($xml->channel->item as $data) if ($i < 5){
            //  echo '<h5> ' . $data->title . '</ h5>';
            //  echo '<p> ' . $data->link . '</p>';
            //  echo '<p>' . $data->enclosure['url'] . '</p>';
            //  echo 'insert ' . $data->description . '</ br>';
         
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
            //  echo '<h5> ' . $data->title . '</ h5>';
            //  echo '<p> ' . $data->link . '</p>';
            //  echo '<p>' . $data->enclosure['url'] . '</p>';
            //  echo 'insert ' . $data->description . '</ br>';
         
            $values = array('id' => 0, 'title' => $data->title, 'link' => $data->link, 'image' => $data->img, 'description' => $data->description);
            
            DB::table('posts')->insert($values);
            $i += 1;
        }
    }

    
}