<?php

namespace App\Domain\Contracts;

/**
 * Interface Crudable
 * @package App\Domain\Contracts
 */
interface Crudable
{

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id);

    /**
     * @param int $limit
     * @param int $page
     * @param array $column
     * @param $field
     * @param string $search
     * @return mixed
     */
    public function paginate($limit = 10, $page = 1, array $column, $field, $search = '');

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

}