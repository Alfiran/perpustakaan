<?php

namespace App\Http\Controllers;

use App\Http\Requests\Book\BookCreateRequest;
use App\Http\Requests\Book\BookEditRequest;
use Illuminate\Http\Request;
use App\Domain\Contracts\BookInterface;

class BookController extends Controller
{

    /**
     * @var BookInterface
     */
    protected $book;

    /**
     * BookController constructor.
     * @param BookInterface $book
     */
    public function __construct(BookInterface $book)
    {
        $this->book = $book;
    }

    /**
     * @api {get} api/contacts Request Book with Paginate
     * @apiName GetBookWithPaginate
     * @apiGroup Book
     *
     * @apiParam {Number} page Paginate book lists
     */
    public function index(Request $request)
    {
        return $this->book->paginate(10, $request->input('page'), $column = ['*'], '', $request->input('search'));
    }

    /**
     * @api {get} api/contacts/id Request Get Book
     * @apiName GetBook
     * @apiGroup Book
     *
     * @apiSuccess {Varchar} kode_buku of books
     * @apiSuccess {Varchar} judul of books
     * @apiSuccess {Varchar} pengarang of books
     */
    public function show($id)
    {
        return $this->book->findById($id);
    }

    /**
     * @api {post} api/contacts/ Request Post Book
     * @apiName PostBook
     * @apiGroup Book
     *
     *
     * @apiParam {Varchar} kode_buku of books
     * @apiParam {Varchar} judul of books
     * @apiParam {Varchar} pengarang of books
     * @apiSuccess {Number} id id of book
     */
    public function store(BookCreateRequest $request)
    {
        return $this->book->create($request->all());
    }

    /**
     * @api {put} api/contacts/id Request Update Book by ID
     * @apiName UpdateBookByID
     * @apiGroup Book
     *
     *
     * @apiParam {Varchar} kode_buku of books
     * @apiParam {Varchar} judul of books
     * @apiParam {Varchar} pengarang of books
     *
     *
     * @apiError EmailHasRegitered The Email must diffrerent.
     */
    public function update(BookCreateRequest $request, $id)
    {
        return $this->book->update($id, $request->all());
    }

    /**
     * @api {delete} api/contacts/id Request Delete Book by ID
     * @apiName DeleteBookByID
     * @apiGroup Book
     *
     * @apiParam {Number} id id of book
     *
     *
     * @apiError BookNotFound The <code>id</code> of the Book was not found.
     * @apiError NoAccessRight Only authenticated Admins can access the data.
     */
    public function destroy($id)
    {
        return $this->book->delete($id);
    }

}