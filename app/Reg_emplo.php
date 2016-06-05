<?php

namespace registoColaboradores;

use Illuminate\Database\Eloquent\Model;

class Reg_emplo extends Model
{ 
    protected $fillable = ['c_name_emplo',
                            'created_at',
                            'e_sex_emplo', 
                            'c_area_emplo', 
                            'd_datebirth_emplo', 
                            'c_email_emplo', 
                            'i_phone_emplo'];
    
    /**
     * Get the photo associated with the registration employee
     * 
     * @author Fábio Balsa <fabioslbalsa@gmail.com> 
     *
     * @access public
     * @since Method available since the release of version 1.0
     * 
     * @return void
     */
    public function Reg_photo()
    {
        return $this->hasOne('registoColaboradores\Reg_photo', 'i_emploid_phot');
    }
}
