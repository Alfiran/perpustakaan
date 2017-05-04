<?php

namespace App\Http\Controllers\Pages;

use App\Http\Requests\Transaction\TransactionCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\TransactionRepository;
use App\Domain\Repositories\BookRepository;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{

    /**
     * @var TransactionRepository
     */
    protected $transaction;

    protected $book;

    /**
     * TransactionController constructor.
     * @param TransactionRepository $transactions
     */
    public function __construct(TransactionRepository $transaction, BookRepository $book)
    {
        $this->transaction = $transaction;
        $this->book = $book;
    }

    
    public function index(Request $request)
    {
        $transactions = $this->transaction->paginate(10, $request->input('name'), $column = ['*'], '', $request->input('search'));
        return view('pages.list-transaction', ['transactions' => $transactions, 'books' => $books]); 
    }

    public function create()
    {
        $books = $this->book->getList();
        return view('pages.create-transaction', compact('books')); 
    }

    public function edit($id)
    {
        return view('pages.edit-transaction'); 
    }

}