<?php
namespace registoColaboradores\Http\Controllers;

use registoColaboradores\Http\Requests\EmployeesRequest;
use registoColaboradores\Repositories\Employee\EmployeeInterface;

/**
 * Receive web requests and determines what to do with them.
 * 
 * This class contains methods responsible for presenting the form to create 
 * employees, delete the record of an employee database, edit the data 
 * of an employee, present 6 employees per page, display detailed information 
 * about an employee, store employee data in the database and update the data 
 * of an employee.
 * 
 * @author Fábio Balsa <fabioslbalsa@gmail.com>
 * @since  Class available since Release 1.0
 */
class employeeController extends Controller
{
    
    /**
    * Starts "auth" middleware and inject EmployeeInterface in the employeeController 
    * 
    * @author Fábio Balsa <fabioslbalsa@gmail.com> 
    *
    * @param object $employee
    * 
    * @access public
    * @since Method available since the release of version 1.0
    * 
    * @return void
    */
    public function __construct(EmployeeInterface $employee)
    {
        $this->employee = $employee;

        $this->middleware('auth', 
            ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $employees = $this->employee->getAllEmployeePaginate();
        
        return view('employees.employees')
            ->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeesRequest $request)
    {
        $employee = $this->employee->createEmployee();
        
        if ($request->hasFile('photo')) {
            $this->employee->setPhotoById($request, $employee->id, 'store');
        }

        return redirect()->action('employeeController@index')
                         ->withInput($request->only('c_name_emplo'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $employee = $this->employee->getEmployeeById($id);
        
        if($employee) {
            return view('employees.details')->with('employee', $employee);
        } else {
            return redirect()->action('employeeController@index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = $this->employee->getEmployeeById($id);
        
        if($employee) {
            return view('employees.update')->with('employee', $employee);
        } else {
            return redirect()->action('employeeController@index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeesRequest $request, $id)
    {
        $this->employee->updateEmployee($id);
        
        if ($request->hasFile('photo')) {
            $result = $this->employee->getPhotoById($id);
            $actionSetPhoto = empty($result) ? 'store' : 'update';
            $this->employee->setPhotoById($request, $id, $actionSetPhoto);
        }
        
        return redirect()->action('employeeController@index')
                    ->withInput($request->only(['c_name_emplo', 'update']));
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->employee->deletePhotoFileById($id);
        $this->employee->deleteEmployeeById($id);
        
        return redirect()->action('employeeController@index');
    }
    
}
