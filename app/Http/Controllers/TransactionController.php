<?php

namespace App\Http\Controllers;

use App\Http\Requests\Transaction\TransactionCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Contracts\TransactionInterface;

class TransactionController extends Controller
{

    /**
     * @var TransactionInterface
     */
    protected $transaction;

    /**
     * TransactionController constructor.
     * @param TransactionInterface $transactions
     */
    public function __construct(TransactionInterface $transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * @api {get} api/transactions Request Transaction with Paginate
     * @apiName GetTransactionWithPaginate
     * @apiGroup Transaction
     *
     * @apiParam {Number} page Paginate transactions lists
     */
    public function index(Request $request)
    {
        return $this->transaction->paginate(10, $request->input('page'), $column = ['*'], '', $request->input('search'));
    }

    /**
     * @api {get} api/transactions/id Request Get Transaction
     * @apiName GetTransaction
     * @apiGroup Transaction
     *
     * @apiSuccess {Integer} book_id of transactions
     * @apiSuccess {Integer} user_id of transactions
     * @apiSuccess {String} petugas of transactions
     * @apiSuccess {String} status of transactions
     * @apiSuccess {Date} expired of transactions
     */
    public function show($id)
    {
        return $this->transaction->findById($id);
    }

    /**
     * @api {post} api/transactions/ Request Post Transaction
     * @apiName PostTransaction
     * @apiGroup Transaction
     *
     *
     * @apiParam {Integer} book_id of transactions
     * @apiParam {Integer} user_id of transactions
     * @apiParam {String} petugas of transactions
     * @apiParam {String} status of transactions
     * @apiParam {Date} expired_at of transactions
     * @apiSuccess {Number} id id of transactions
     */
    public function store(TransactionCreateRequest $request)
    {
        return $this->transaction->create($request->all());
    }

    /**
     * @api {put} api/transactions/id Request Update Transaction by ID
     * @apiName UpdateTransactionByID
     * @apiGroup Transaction
     *
     *
     * @apiParam {Integer} book_id of transactions
     * @apiParam {Integer} user_id of transactions
     * @apiParam {String} petugas of transactions
     * @apiParam {String} status of transactions
     * @apiParam {Date} expired_at of transactions
     *
     *
     * @apiError EmailHasRegitered The Email must diffrerent.
     */
    public function update(TransactionCreateRequest $request, $id)
    {
        return $this->transaction->update($id, $request->all());
    }

    /**
     * @api {delete} api/transactions/id Request Delete Transaction by ID
     * @apiName DeleteTransactionByID
     * @apiGroup Transaction
     *
     * @apiParam {Number} id id of transactions
     *
     *
     * @apiError TransactionNotFound The <code>id</code> of the Transaction was not found.
     * @apiError NoAccessRight Only authenticated Admins can access the data.
     */
    public function destroy($id)
    {
        return $this->transaction->delete($id);
    }

}