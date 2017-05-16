<?php

namespace App\Http\Controllers\Pages;

use App\Http\RequestsUser\UserCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\UserRepository;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    /**
     * @var UserRepository
     */
    protected $user;

    /**
     * UserController constructor.
     * @param UserRepository $user
     */
    public function __construct(UserRepository $user)
    {
        $this->middleware('auth');
        $this->user = $user;
    }

     public function index(Request $request)
    {
        $users = $this->user->paginate(10, $request->input('name'), $column = ['*'], '', $request->input('search'));
        return view('pages.list-user', ['users' => $users]); 
    }

    public function create()
    {
        return view('pages.create-user'); 
    }

    public function edit($id)
    {
        $user = $this->user->findById($id);
        return view('pages.edit-user',compact('user')); 
    }
    public function getList()
    {
        return $this->user->getList();
    }
}