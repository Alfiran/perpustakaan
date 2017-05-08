<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

/**
* Class UserCreateRequest
*
* @package App\Http\Requests\User
*/
class LoginRequest extends Request
{
    /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
    public function authorize()
    {
        return true;
    }
    
    /**
    * Declaration an attributes
    *
    * @var array
    */
    protected $attrs = [
    'email'   => 'Email',
    'password' => 'Password',
    ];
    
    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        return [
        'email'   => 'required',
        'password' => 'required|max:60',
        ];
    }
    
    /**
    * @param $validator
    *
    * @return mixed
    */
    public function validator($validator)
    {
        return $validator->make($this->all(), $this->container->call([$this, 'rules']), $this->messages(), $this->attrs);
    }
    
}