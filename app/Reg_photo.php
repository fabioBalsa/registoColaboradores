<?php

namespace registoColaboradores;

use Illuminate\Database\Eloquent\Model;

class Reg_photo extends Model
{   
    protected $fillable = ["c_path_phot",
                           "c_extension_phot",
                           "c_name_phot",
                           "i_emploid_phot"];
}
