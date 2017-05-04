<?php

namespace App\Http\Controllers\Pages;

use App\Http\Requests\User\UserCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\UserRepository;
use App\Http\Controllers\Controller;

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

    public function index(Request $request)
    {
        $users = $this->user->paginate(10, $request->input('name'), $column = ['*'], '', $request->input('search'));
        return view('pages.list-user',compact('users')); 
    }

    public function create()
    {
        $user = $this->user->findById($id);
        return view('pages.create-user'); 
    }

    public function edit($id)
    {
        return view('pages.edit-user',compact('user')); 
    }
    public function getList()
    {
        return $this->user->getList();
    }
}