<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class AuthornbookController extends Controller
{
    // public function index()
    // {
        //many-to-many (belongsToMany, For all data) based on author 
    //     $all = Author::with('book')->get(); // Get Author model with function "book" details 
    //     // dd($all->toArray()); //check all in array format
    //     foreach($all as $item)
    //     {
    //         echo $item->name.'<br>'; //getting details of authors name

    //         foreach($item->book as $item2)
    //         {
    //             echo $item2->title.'<br>'; //second loop we will fetch details of book model
    //         }
    //         echo '<br>';
    //     }
    // }
        
    //many-to-many(For single data)
    // public function index()
    // {
    //     $data = Author::with('book')->where('id',5)->first(); // Fetch Author model with its book function details where id is 5 for single data
    //     echo $data->name.'<br>';

    //     foreach($data->book as $item)
    //     {
    //         echo $item->title.'<br>';
    //     }
    // }

    //many-to-many(belongsToMany, Inverse with fetching all data)
        // public function index()
        // {
        //     $all = Book::with('author')->get();
        //     // dd($all->toArray());
        //     foreach($all as $item)
        //     {
        //         echo $item->title.'<br>';

        //         foreach($item->author as $item2)
        //         {
        //             echo $item2->name.'<br>';
        //         }
        //         echo '<br>';
        //     }
        // }

        //many-to-many(Inverse with fetching single data) 

        public function index()
        {
            $data = Book::with('author')->where('id',1)->first(); // Fetch book model with its book function details where id is 5 for single data
            echo $data->title.'<br>';
            
            foreach($data->author as $item)
            {
                echo $item->name.'<br>';
            }
        }
}