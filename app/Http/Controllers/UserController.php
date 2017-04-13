<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\UserRepository;

class UserController extends Controller
{

    /**
     * @var UserInterface
     */
    protected $user;

    /**
     * UserController constructor.
     * @param UserInterface $user
     */
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    /**
     * @api {get} api/contacts Request User with Paginate
     * @apiName GetUserWithPaginate
     * @apiGroup User
     *
     * @apiParam {Number} page Paginate user lists
     */
    public function index(Request $request)
    {
        return $this->user->paginate(10, $request->input('name'), $column = ['*'], '', $request->input('search'));
    }

    /**
     * @api {get} api/contacts/id Request Get User
     * @apiName GetUser
     * @apiGroup User
     *
     * @apiSuccess {Varchar} name of users
     * @apiSuccess {Varchar} class of users
     * @apiSuccess {Varchar} address of users
     * @apiSuccess {Varchar} phone of users
     * @apiSuccess {Integer} level of users
     */
    public function show($id)
    {
        return $this->user->findById($id);
    }

    /**
     * @api {post} api/contacts/ Request Post User
     * @apiName PostUser
     * @apiGroup User
     *
     *
     * @apiParam {Varchar} name of users
     * @apiParam {Varchar} class of users
     * @apiParam {Varchar} address of users
     * @apiParam {Varchar} phone of users
     * @apiParam {Integer} level of users
     * @apiSuccess {Number} id id of user
     */
    public function store(UserCreateRequest $request)
    {
        return $this->user->create($request->all());
    }

    /**
     * @api {put} api/contacts/id Request Update User by ID
     * @apiName UpdateUserByID
     * @apiGroup User
     *
     *
     * @apiParam {Varchar} name of users
     * @apiParam {Varchar} class of users
     * @apiParam {Varchar} address of users
     * @apiParam {Varchar} phone of users
     * @apiParam {Integer} level of users
     *
     *
     * @apiError EmailHasRegitered The Email must diffrerent.
     */
    public function update(UserCreateRequest $request, $id)
    {
        return $this->user->update($id, $request->all());
    }

    /**
     * @api {delete} api/contacts/id Request Delete User by ID
     * @apiName DeleteUserByID
     * @apiGroup User
     *
     * @apiParam {Number} id id of user
     *
     *
     * @apiError UserNotFound The <code>id</code> of the User was not found.
     * @apiError NoAccessRight Only authenticated Admins can access the data.
     */
    public function destroy($id)
    {
        return $this->user->delete($id);
    }

}