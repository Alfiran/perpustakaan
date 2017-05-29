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
        $users = $this->user->getList();
        $user = $this->user->findById($id);
        $class = ['Staff','Guru'];
        $arr= [$users, $user, $class];
        return view('pages.edit-user',compact('user','class',$arr)); 
    }
    public function getList()
    {
        return $this->user->getList();
    }
}