<?php
namespace registoColaboradores\Repositories\Employee;

use Illuminate\Support\ServiceProvider;

/**
 * When instantiating an object that has the dependency of this interface
 * instantiates this class: 
 * 'registoColaboradores\Repositories\Employee\EmployeeRepository'.
 *
 * @author Fábio Balsa <fabioslbalsa@gmail.com>
 * @since  Class available since Release 1.0
 */
class EmployeeRepoServiceProvide extends ServiceProvider 
{
    
    /**
     * Register the application services.
     *
     * @author Fábio Balsa <fabioslbalsa@gmail.com>
     * 
     * @access public
     * @since Method available since the release of version 1.0
     * @return void
     */
    public function register()
    {
        $this->app->bind('registoColaboradores\Repositories\Employee\EmployeeInterface', 
                'registoColaboradores\Repositories\Employee\EmployeeRepository');
    }
}
