<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Publisher;
use App\Models\Category;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $data = Book::all();
        $categories = Category::all();

        return view('home',['books' => $data, 'categories' => $categories]);
    }

    public function detail($id){
        $categories = Category::all();
        $book = Book::where('books.id',$id)->join('publishers','publishers.id','=','books.publisher_id')->first();
        return view('detail',['books' => $book, 'categories' => $categories]);
    }
    public function category($id){
        $categories = Category::all();
        $namecategory = Category::where('id',$id)->first();
        $book = Book::where('bookdetails.category_id',$id)
                    ->join('bookdetails','bookdetails.book_id','=','books.id')
                    ->join('categories','categories.id','=','bookdetails.category_id')
                    ->get();
        

        return view('category',['books' => $book, 'categories' => $categories,'namecategory' => $namecategory]);
    }

    public function listpublisher(){
        $categories = Category::all();
        $publisher = Publisher::get();
        
        return view('listpublisher',['categories' => $categories, 'publisher' => $publisher]);
    }
    public function detailpublisher($id){
        $book = Publisher::where('publishers.id',$id)->join('books','books.publisher_id','=','publishers.id')->count();
        if($book < 1){
            $book = "nodata";
        }else{
            $book = Publisher::where('publishers.id',$id)->leftJoin('books','books.publisher_id','=','publishers.id')->get();
        }
        $publisherdetail = Publisher::where('publishers.id',$id)->leftJoin('books','books.publisher_id','=','publishers.id')->first();
        
        $categories = Category::all();

        return view('detailpublisher',['categories' => $categories, 'publisherdetail' => $publisherdetail,'books' => $book]);
    }
    public function contact(){
        
        $categories = Category::all();

        return view('contact',['categories' => $categories]);
    }
}
