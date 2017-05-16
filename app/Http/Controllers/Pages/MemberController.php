<?php

namespace App\Http\Controllers\Pages;

use App\Http\Requests\Member\MemberCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\MemberRepository;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{

    /**
     * @var MemberInterface
     */
    protected $member;

    /**
     * MemberController constructor.
     * @param MemberInterface $member
     */
    public function __construct(MemberRepository $member)
    {
        $this->middleware('auth');
        $this->member = $member;
    }

    public function index(Request $request)
    {
        $members = $this->member->paginate(10, $request->input('name'), $column = ['*'], '', $request->input('search'));
        return view('pages.list-member',compact('members')); 
    }

    public function create()
    {
        return view('pages.create-member'); 
    }

    public function edit($id)
    {
        $member = $this->member->findById($id);
        return view('pages.edit-member',compact('member')); 
    }
    public function getList()
    {
        return $this->member->getList();
    }
}