<?php

namespace App\Http\Controllers;

use App\Http\Requests\Member\MemberCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\MemberRepository;

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
        $this->member = $member;
    }

    /**
     * @api {get} api/contacts Request Member with Paginate
     * @apiName GetMemberWithPaginate
     * @apiGroup Member
     *
     * @apiParam {Number} page Paginate member lists
     */
    public function index(Request $request)
    {
        return $this->member->paginate(10, $request->input('name'), $column = ['*'], '', $request->input('search'));
    }

    /**
     * @api {get} api/contacts/id Request Get Member
     * @apiName GetMember
     * @apiGroup Member
     *
     * @apiSuccess {Varchar} name of users
     * @apiSuccess {Varchar} class of users
     * @apiSuccess {Varchar} address of users
     * @apiSuccess {Varchar} phone of users
     * @apiSuccess {Integer} level of users
     */
    public function show($id)
    {
        return $this->member->findById($id);
    }

    /**
     * @api {post} api/contacts/ Request Post Member
     * @apiName PostMember
     * @apiGroup Member
     *
     *
     * @apiParam {Varchar} name of users
     * @apiParam {Varchar} class of users
     * @apiParam {Varchar} address of users
     * @apiParam {Varchar} phone of users
     * @apiParam {Integer} level of users
     * @apiSuccess {Number} id id of member
     */
    public function store(MemberCreateRequest $request)
    {
        return $this->member->create($request->all());
    }

    /**
     * @api {put} api/contacts/id Request Update Member by ID
     * @apiName UpdateMemberByID
     * @apiGroup Member
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
    public function update(MemberCreateRequest $request, $id)
    {
        return $this->member->update($id, $request->all());
    }

    /**
     * @api {delete} api/contacts/id Request Delete Member by ID
     * @apiName DeleteMemberByID
     * @apiGroup Member
     *
     * @apiParam {Number} id id of member
     *
     *
     * @apiError MemberNotFound The <code>id</code> of the Member was not found.
     * @apiError NoAccessRight Only authenticated Admins can access the data.
     */
    public function destroy($id)
    {
        return $this->member->delete($id);
    }

}