<?php

namespace PointOfSale\Controller;

use App\Controller\AppController as BaseController;
use Cake\Event\Event;

class AppController extends BaseController
{

    public function initialize()
    {
        // $this->Authentication->allowUnauthenticated(['view', 'index']);
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');


        $this->loadComponent('Auth', [
            
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'Email',
                        'password' => 'Password'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
             // If unauthorized, return them to page they were just on
            'unauthorizedRedirect' => $this->referer()
        ]);

        // Allow the display action so our PagesController
        // continues to work. Also enable the read only actions.
        // $this->Auth->allow(['display', 'view', 'index']);

        // $this->loadComponent('Authentication.Authentication');

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');

        
    }
    public function isAuthorized($user)
    {
        // By default deny access.
        return false;
    }

}
