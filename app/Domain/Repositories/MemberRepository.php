<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\User;
use App\Domain\Contracts\MemberInterface;
use App\Domain\Contracts\Crudable;


/**
 * Class MemberRepository
 * @package App\Domain\Repositories
 */
class MemberRepository extends AbstractRepository implements MemberInterface, Crudable
{

    /**
     * @var Member
     */
    protected $model;

    /**
     * MemberRepository constructor.
     * @param Member $member
     */
    public function __construct(User $user)
    {
        $this->model = $user;
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
         $user = $this->model
        ->where('name', 'like', '%' . $search . '%')
        ->where('level','0')
        ->paginate($limit);
        
        return $user;
        // query to aql
    }

    /**
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(array $data)
    {
        // execute sql insert
        return parent::create([
            'name'    => e($data['name']),
            'class'   => e($data['class']),
            'address' => e($data['address']),
            'phone'   => e($data['phone']),
            'level'   => e($data['level'])
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
           'name'    => e($data['name']),
           'class'   => e($data['class']),
           'address' => e($data['address']),
           'phone'   => e($data['phone']),
           'level'   => e($data['level'])
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
        $members = $this->model->all();
        // if data null
        if (null == $members) {
            // set response header not found
            return $this->errorNotFound('Data belum tersedia');
        }

        return $members;

    }
}