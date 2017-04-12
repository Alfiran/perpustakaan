<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contact\ContactCreateRequest;
use App\Http\Requests\Contact\ContactEditRequest;
use Illuminate\Http\Request;
use App\Domain\Contracts\ContactInterface;

class ContactController extends Controller
{

    /**
     * @var ContactInterface
     */
    protected $contact;

    /**
     * ContactController constructor.
     * @param ContactInterface $contact
     */
    public function __construct(ContactInterface $contact)
    {
        $this->contact = $contact;
    }

    /**
     * @api {get} api/contacts Request Contact with Paginate
     * @apiName GetContactWithPaginate
     * @apiGroup Contact
     *
     * @apiParam {Number} page Paginate contact lists
     */
    public function index(Request $request)
    {
        return $this->contact->paginate(10, $request->input('page'), $column = ['*'], '', $request->input('search'));
    }

    /**
     * @api {get} api/contacts/id Request Get Contact
     * @apiName GetContact
     * @apiGroup Contact
     *
     * @apiParam {Number} id id_contact
     * @apiSuccess {Number} id id_contact
     * @apiSuccess {Varchar} name name of contact
     * @apiSuccess {Varchar} address name of address
     * @apiSuccess {Varchar} email email of contact
     * @apiSuccess {Number} phone phone of contact
     */
    public function show($id)
    {
        return $this->contact->findById($id);
    }

    /**
     * @api {post} api/contacts/ Request Post Contact
     * @apiName PostContact
     * @apiGroup Contact
     *
     *
     * @apiParam {Varchar} name name of contact
     * @apiParam {Varchar} email email of contact
     * @apiParam {Varchar} address email of address
     * @apiParam {Float} phone phone of contact
     * @apiSuccess {Number} id id of contact
     */
    public function store(ContactCreateRequest $request)
    {
        return $this->contact->create($request->all());
    }

    /**
     * @api {put} api/contacts/id Request Update Contact by ID
     * @apiName UpdateContactByID
     * @apiGroup Contact
     *
     *
     * @apiParam {Varchar} name name of contact
     * @apiParam {Varchar} email email of contact
     * @apiParam {Varchar} address address of contact
     * @apiParam {Float} phone phone of contact
     *
     *
     * @apiError EmailHasRegitered The Email must diffrerent.
     */
    public function update(ContactEditRequest $request, $id)
    {
        return $this->contact->update($id, $request->all());
    }

    /**
     * @api {delete} api/contacts/id Request Delete Contact by ID
     * @apiName DeleteContactByID
     * @apiGroup Contact
     *
     * @apiParam {Number} id id of contact
     *
     *
     * @apiError ContactNotFound The <code>id</code> of the Contact was not found.
     * @apiError NoAccessRight Only authenticated Admins can access the data.
     */
    public function destroy($id)
    {
        return $this->contact->delete($id);
    }

}