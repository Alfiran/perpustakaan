<?php

namespace App\Http\Controllers\Pages;

use App\Http\Requests\Transaction\TransactionCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\TransactionRepository;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{

    /**
     * @var TransactionRepository
     */
    protected $transaction;

    /**
     * TransactionController constructor.
     * @param TransactionRepository $transactions
     */
    public function __construct(TransactionRepository $transaction)
    {
        $this->transaction = $transaction;
    }

    
    public function index(Request $request)
    {
        $transactions = $this->transaction->paginate(10, $request->input('name'), $column = ['*'], '', $request->input('search'));
        return view('pages.list-transaction', ['transactions' => $transactions]); 
    }

    public function create()
    {
        return view('pages.create-transaction'); 
    }

    public function edit($id)
    {
        return view('pages.edit-transaction'); 
    }

}