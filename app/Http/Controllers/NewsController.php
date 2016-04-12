<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //
	 public function index()
   {
      //
	  $newss = json_decode(file_get_contents('https://offline-news-api.herokuapp.com/stories'), true);
	  //echo print_r($newss) ;die;
	  return view('news.index',compact('newss'));
   }
   
   
    public function show($id)
   {
      $newss = json_decode(file_get_contents('https://offline-news-api.herokuapp.com/stories'), true);
	  foreach ($newss as $key => $val) {
		   if ($val['guid'] === $id) {
			   $k= $key;
			   break;
			}
		}
	  $news = $newss[$k];
	  //echo print_r($news) ;die;
	  return view('news.show',compact('news'));
   }
}
