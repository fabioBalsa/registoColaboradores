<?php
namespace registoColaboradores\Repositories\Employee;
use registoColaboradores\Http\Requests\EmployeesRequest;

/**
 * It makes the connection between the "Repositories\Employee" and the 
 * "controllers\employeeController" to allow a greater uncoupling.
 * 
 * @author Fábio Balsa <fabioslbalsa@gmail.com>
 * @since  Class available since Release 1.0
 */
interface EmployeeInterface {
    
    public function getAllEmployeePaginate();
    
    public function deletePhotoFileById($id);
    
    public function setPhotoById(EmployeesRequest $request, $idEmployee, $action);
    
    public function getEmployeeById($id);
    
    public function createEmployee();
    
    public function updateEmployee($id);
    
    public function getPhotoById($id);
    
    public function deleteEmployeeById($id);
 
}
