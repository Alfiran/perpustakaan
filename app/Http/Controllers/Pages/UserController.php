<?php

namespace App\Http\Controllers\Pages;

use App\Http\RequestsUser\BookCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\BookRepository;
use App\Http\Controllers\Controller;

class BookController extends Controller
{

    /**
     * @var BookRepository
     */
    protected $user;

    /**
     * BookController constructor.
     * @param BookRepository $user
     */
    public function __construct(BookRepository $user)
    {
        $this->user = $user;
    }

     public function index(Request $request)
    {
        $books = $this->user->paginate(10, $request->input('name'), $column = ['*'], '', $request->input('search'));
        return view('pages.list-user', ['books' => $books]); 
    }

    public function create()
    {
        return view('pages.create-user'); 
    }

    public function edit($id)
    {
        $user = $this->user->findById($id);
        return view('pages.edit-user',compact('user')); 
    }
    public function getList()
    {
        return $this->user->getList();
    }
}