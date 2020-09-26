<?php
namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Core\Configure;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Adminusers',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Adminusers',
                'action' => 'login'
            ],
            'authenticate' => [
                'Form' => [
                  'userModel' => 'Adminusers',
                  'fields' => [
                    'username' => 'username',
                    'password' => 'password'
                  ]
                ]
            ],
        ]);
 
        $this->Auth->allow(['login']);
    }
}