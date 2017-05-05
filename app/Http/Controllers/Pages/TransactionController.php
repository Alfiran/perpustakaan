<?php

namespace App\Http\Controllers\Pages;

use App\Http\Requests\Transaction\TransactionCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\TransactionRepository;
use App\Domain\Repositories\BookRepository;
use App\Domain\Repositories\MemberRepository;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{

    /**
     * @var TransactionRepository
     */
    protected $transaction;

    protected $book;

    protected $user;

    /**
     * TransactionController constructor.
     * @param TransactionRepository $transactions
     */
    public function __construct(TransactionRepository $transaction, BookRepository $book, MemberRepository $user)
    {
        $this->transaction = $transaction;
        $this->book = $book;
        $this->user = $user;
    }

    
    public function index(Request $request)
    {
        $transactions = $this->transaction->paginate(10, $request->input('name'), $column = ['*'], '', $request->input('search'));
        return view('pages.list-transaction', compact('transactions')); 
    }

    public function create()
    {
        $books = $this->book->getList();
        $users = $this->user->getList();
        $arr= [$books,$users];
        return view('pages.create-transaction', compact('books','users',$arr)); 
    }

    public function edit($id)
    {
        $books = $this->book->getList();
        $users = $this->user->getList();
        $transaction = $this->transaction->findById($id);
        $arr= [$books, $users, $transaction];
        return view('pages.edit-transaction',compact('books','users','transaction',$arr)); 
    }

}