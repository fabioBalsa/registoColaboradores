<?php
namespace registoColaboradores\Http\Requests;

use registoColaboradores\Http\Requests\Request;

/**
 * Validate data form sent by request.
 * 
 * This class contains methods responsible for determining the user's 
 * authorization and validation.
 * 
 * @author Fábio Balsa <fabioslbalsa@gmail.com>
 * @since  Class available since Release 1.0
 */
class EmployeesRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @author Fábio Balsa <fabioslbalsa@gmail.com>
     * 
     * @access public
     * @since Method available since the release of version 1.0
     * 
     * @return array
     */
    public function rules() 
    {
        return [
            'c_name_emplo'      => 'required|max:30',
            'e_sex_emplo'       => 'required',
            'c_area_emplo'      => 'required|max:20',
            'd_datebirth_emplo' => 'required',
            'c_email_emplo'     => 'required|email',
            'i_phone_emplo'     => 'required|numeric'
        ];
    }
}
