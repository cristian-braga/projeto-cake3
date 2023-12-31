<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3/en/controllers.html#the-app-controller
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
                'controller' => 'welcome',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'users',
                'action' => 'login'
            ],
            'authError' => false
        ]);

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

    public function beforeRender(Event $event)
    {
        $prefix = null;

        if ($this->request->getParam(['prefix']) !== null) {
            $prefix = $this->request->getParam(['prefix']);
        }

        if ($prefix == 'admin') {
            if (($this->request->getParam(['action']) !== null) && (($this->request->getParam(['action']) == 'login') || ($this->request->getParam(['action']) == 'cadastrar') || ($this->request->getParam(['action']) == 'recuperarSenha') || ($this->request->getParam(['action']) == 'atualizarSenha'))) {
                $this->viewBuilder()->setLayout('login');
            } else {
                $user = TableRegistry::getTableLocator()->get('Users');
                $perfilUser = $user->getUserDados($this->Auth->user('id'));

                $this->set(compact('perfilUser'));

                $this->viewBuilder()->setLayout('admin');
            }
        }
    }
}
