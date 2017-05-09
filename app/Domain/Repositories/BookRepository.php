<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Book;
use App\Domain\Contracts\BookInterface;
use App\Domain\Contracts\Crudable;


/**
 * Class BookRepository
 * @package App\Domain\Repositories
 */
class BookRepository extends AbstractRepository implements BookInterface, Crudable
{

    /**
     * @var Book
     */
    protected $model;

    /**
     * BookRepository constructor.
     * @param Book $book
     */
    public function __construct(Book $book)
    {
        $this->model = $book;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * @param int $limit
     * @param int $page
     * @param array $column
     * @param string $field
     * @param string $search
     * @return \Illuminate\Pagination\Paginator
     */
    public function paginate($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
    {
         // query to aql
        $books = $this->model
        ->orderBy('created_at', 'desc')
        ->where('judul', 'like', '%' . $search . '%')
        ->paginate($limit);
        
        return $books;
        }

    /**
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(array $data)
    {
        // execute sql insert
        return parent::create([
            'kode_buku'    => e($data['kode_buku']),
            'judul'   => e($data['judul']),
            'pengarang' => e($data['pengarang']),
        ]);

    }

    /**
     * @param $id
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function update($id, array $data)
    {
        return parent::update($id, [
            'kode_buku'    => e($data['kode_buku']),
            'judul'   => e($data['judul']),
            'pengarang' => e($data['pengarang']),
        ]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function delete($id)
    {
        return parent::delete($id);
    }


    /**
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function findById($id, array $columns = ['*'])
    {
        return parent::find($id, $columns);
    }
    
    public function getList()
    {
        // query to aql
        $books = $this->model->all();
        // if data null
        if (null == $books) {
            // set response header not found
            return $this->errorNotFound('Data belum tersedia');
        }

        return $books;

    }
}