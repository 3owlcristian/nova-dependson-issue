<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Users authorized to make the request are:
        // - users updating themselves.
        // - staff
        // - guests creating a new user.

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $rules = self::ruleGetter($this);

        // if (empty($this->user())) {
        //     $rules = array_merge_recursive($rules, self::creationRuleGetter($this));
        // } else {
        //     $rules = array_merge_recursive($rules, self::updateRuleGetter($this));
        // }

        return $rules;
    }

    public static function ruleGetter($request, $rule = null)
    {

        $rules = [
            'address[email]' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
            'address[state]' => [
                'required',
                'string',
                'max:255',
            ],
        ];

        if (!empty($rule)) {
            if (isset($rules[$rule])) {
                return $rules[$rule];
            }
            return '';
        }
        return $rules;
    }

    public static function creationRuleGetter($request, $rule = null)
    {
        $rules = [
            // 'email' => [
            //     'unique:users,email'
            // ],

            // 'nickname' => [
            //     'required',
            //     'unique:users,nickname'
            // ],

            // 'password' => [
            //     'sometimes',
            //     'required',
            //     'string',
            //     'min:8',
            //     'confirmed'
            // ],
        ];

        if (!empty($rule)) {
            if (isset($rules[$rule])) {
                return $rules[$rule];
            }
            return '';
        }
        return $rules;

    }

    public static function updateRuleGetter($request, $rule = null)
    {

        $rules = [
            // 'email' =>  [
            //     Rule::unique('users', 'email')->ignore($request->user()->id)
            // ],

            // 'nickname' => [
            //     Rule::unique('users', 'nickname')->ignore($request->user()->id)
            // ],

            // 'password' => [
            //     'sometimes',
            //     'nullable',
            //     'string',
            //     'min:8',
            //     'confirmed'
            // ],
        ];

        if (!empty($rule)) {
            if (isset($rules[$rule])) {
                return $rules[$rule];
            }
            return '';
        }
        return $rules;
    }
}
