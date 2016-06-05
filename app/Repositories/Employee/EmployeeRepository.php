<?php
namespace registoColaboradores\Repositories\Employee;

use registoColaboradores\Http\Requests\EmployeesRequest;
use Illuminate\Support\Facades\Request;
use registoColaboradores\Reg_emplo;
use registoColaboradores\Reg_photo;
use registoColaboradores\Repositories\Employee\EmployeeInterface;

/**
 * Create a layer between the model and the employeeController
 * 
 * This class contains methods responsible for creating employees, 
 * delete an employee according to the id, delete the photo file 
 * according to the id, get all employees with paging, get employee 
 * according to the id, get the picture according to the id, save the 
 * photo according to the id and update employee data.
 * 
 * @author     Fábio Balsa <fabioslbalsa@gmail.com>
 * @since      Class available since Release 1.0
 */
class employeeRepository implements EmployeeInterface
{
    
    /**
    * Gets all employees organized by pages
    * 
    * @author Fábio Balsa <fabioslbalsa@gmail.com> 
    *
    * @access public
    * @since Method available since the release of version 1.0
    * 
    * @return object
    */
    public function getAllEmployeePaginate()
    {
        return Reg_emplo::select('reg_emplos.id', 'reg_emplos.c_name_emplo', 
                'reg_emplos.c_area_emplo', 'rf.c_name_phot', 
                'rf.c_extension_phot', 'rf.c_path_phot')
            ->leftJoin('reg_photos as rf', 
                    'reg_emplos.id', '=', 'rf.i_emploid_phot')
            ->orderBy('c_name_emplo', 'asc')->paginate(6);
    }
    
    /**
    * Gets the picture of an employee from id
    * 
    * @author Fábio Balsa <fabioslbalsa@gmail.com> 
    *
    * @param int $id
    * 
    * @access public
    * @since Method available since the release of version 1.0
    * 
    * @return object
    */
    public function getPhotoById($id)
    {
        return Reg_photo::where('i_emploid_phot', $id)->first();
    }
    
    /**
    * Delete data from an employee from id
    * 
    * @author Fábio Balsa <fabioslbalsa@gmail.com> 
    *
    * @param int $id
    * 
    * @access public
    * @since Method available since the release of version 1.0
    * 
    * @return object
    */
    public function deleteEmployeeById($id)
    {
        return Reg_emplo::destroy($id);
    }
    
    /**
    * Delete photo as the id of the employee
    * 
    * @author Fábio Balsa <fabioslbalsa@gmail.com> 
    *
    * @param int $id
    *
    * @access public
    * @since Method available since the release of version 1.0
    * 
    * @return true if the photo exists or false otherwise 
    */
    public function deletePhotoFileById($id) 
    {
        $oldPhoto = Reg_photo::where('i_emploid_phot', $id)->first();

        if(empty($oldPhoto)){
            return false;
        } else {
            $fullPath = $oldPhoto->c_path_phot . '/' . $oldPhoto->c_name_phot 
                    . '.' . $oldPhoto->c_extension_phot;
            if (file_exists(public_path($fullPath))) {
                unlink(public_path($fullPath));
            }
            return true;
        }
    }
    
    /**
    * Receives photo data stores them in the database
    * and writes its file in the "uploads" folder
    * 
    * @author Fábio Balsa <fabioslbalsa@gmail.com> 
    *
    * @param \Illuminate\Http\Request $request
    * @param int $idEmployee
    * @param string $action  
    *
    * @access public
    * @since Method available since the release of version 1.0
    * 
    * @return void
    */
    public function setPhotoById(EmployeesRequest $request, $idEmployee, $action)
    {
        
        $photo['c_path_phot'] = 'uploads';
        $photo['c_extension_phot'] = $request->file('photo')
                ->getClientOriginalExtension();
        $photo['c_name_phot'] = rand(11111,99999);
        
        if($action === 'store') {
            $photo['i_emploid_phot'] = $idEmployee;
            Reg_photo::create($photo);
        } else {
            $this->deletePhotoFileById($idEmployee);
            Reg_photo::where('i_emploid_phot', $idEmployee)->update($photo);
        }

        $photo['c_name_phot'] .= '.'.$photo['c_extension_phot'];
        $request->file('photo')->move($photo['c_path_phot'], 
                $photo['c_name_phot']);
    }
    
    /**
    * Get employee data according to the id indicated
    * 
    * @author Fábio Balsa <fabioslbalsa@gmail.com> 
    *
    * @param int $id
    *
    * @access public
    * @since Method available since the release of version 1.0
    * 
    * @return false if the employee does not exist and array with its data otherwise  
    */
    public function getEmployeeById($id)
    {
        $employee = Reg_emplo::with('reg_photo')->find($id);

        if(empty($employee)) {
           return false;
        } else{
           return $employee; 
        }
    }
    
    /**
    * Save in the database data from a new employee
    * 
    * @author Fábio Balsa <fabioslbalsa@gmail.com> 
    * 
    * @access public
    * @since Method available since the release of version 1.0
    * 
    * @return object  
    */
    public function createEmployee()
    {
        return Reg_emplo::create(Request::all());
    }
    
    /**
    * Updates the data of an employee according to his id
    * 
    * @author Fábio Balsa <fabioslbalsa@gmail.com>
    * 
    * @param int $id 
    * 
    * @access public
    * @since Method available since the release of version 1.0
    * 
    * @return object  
    */
    public function updateEmployee($id)
    {
        return Reg_emplo::find($id)->update(Request::all());
    }

    
}
