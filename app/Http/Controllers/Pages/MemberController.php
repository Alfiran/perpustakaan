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
        $members = $this->member->getList();
        $member = $this->member->findById($id);
        $class = ['X RPL 1','X RPL 2','X RPL 3','XI RPL 1','XI RPL 2','XI RPL 3','XII RPL 1','XII RPL 2','XII RPL 3','X TEI 1','X TEI 2','X TEI 3','XI TEI 1','XI TEI 2','XI TEI 3','XII TEI 1','XII TEI 2','XII TEI 3','X TKJ 1','X TKJ 2','X TKJ 3','XI TKJ 1','XI TKJ 2','XI TKJ 3','XII TKJ 1','XII TKJ 2','XII TKJ 3','X TKR 1','X TKR 2','X TKR 3','XI TKR 1','XI TKR 2','XI TKR 3','XII TKR 1','XII TKR 2','XII TKR 3','X TSM 1','X TSM 2','X TSM 3','XI TSM 1','XI TSM 2','XI TSM 3','XII TSM 1','XII TSM 2','XII TSM 3'];
        $arr= [$members, $class];
        return view('pages.edit-member',compact('member')); 
    }
    public function getList()
    {
        return $this->member->getList();
    }
}