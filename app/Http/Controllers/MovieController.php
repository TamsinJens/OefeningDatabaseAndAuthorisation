<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        //echo "movieHome";

        //arrays associatief met params
        //$ar_params = array('titel' => "The Matrix");
        $films = DB::select("SELECT * FROM tbl_films"); //WHERE titel=:titel", $ar_params);
        //var_dump($films[0]->titel);
        //foreach ($films as $film){
        //    echo "$film->titel, $film->jaar<br>";
        //}

        return view('movies', array('movies'=>$films));
    }
}
