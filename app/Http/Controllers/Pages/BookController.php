<?php

namespace App\Http\Controllers\Pages;

use App\Http\Requests\Book\BookCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\BookRepository;
use App\Http\Controllers\Controller;

class BookController extends Controller
{

    /**
     * @var BookRepository
     */
    protected $book;

    /**
     * BookController constructor.
     * @param BookRepository $book
     */
    public function __construct(BookRepository $book)
    {
        $this->book = $book;
    }

     public function index(Request $request)
    {
        $books = $this->book->paginate(10, $request->input('name'), $column = ['*'], '', $request->input('search'));
        return view('pages.list-book', ['books' => $books]); 
    }

    public function create()
    {
        return view('pages.create-book'); 
    }

    public function edit($id)
    {
        $book = $this->book->findById($id);
        return view('pages.edit-book',compact('book')); 
    }
    public function getList()
    {
        return $this->book->getList();
    }
}