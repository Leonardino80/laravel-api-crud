<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;

class MovieController extends Controller
{
  public function index(){
    $Movie = Movie::All();
    // restituiamo un json, preparando una response
    return response()->json($Movie);
  }

  public function show($id){
    $movie = Movie::find($id);
    if(!empty($movie)){
     return response()->json($movie);
    } else{
     return response()->json([
       'error'=> 'film con id: '.$id.' non presente'
     ]);
    }
  }
}
