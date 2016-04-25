<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppModel', 'Model');

class Salon extends AppModel {

    public $useTable = 'salons';

    var $actsAs = array(
        'Upload' => array('filename')
    );
    public $validate = array(
        'name' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            ),
            'TylkoAlfabet'=> array(
                'rule'=>array('custom','/^[a-zA-ZąćęłńóśźżĄĘŁŃÓŚŹŻ\s]+$/'),
                'message'=>'Nazwa salonu musi składać się z samych liter!'
            ),
        ),
        'city' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            ),
            'TylkoAlfabet'=> array(
                'rule'=>array('custom','/^[a-zA-ZąćęłńóśźżĄĘŁŃÓŚŹŻ\s]+$/'),
                'message'=>'Nazwa miasta musi składać się z samych liter!'
            ),
        ),
        'adress' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'tel' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            ),
            'Numeric' => array(
                'rule' => 'numeric',
                'message' => 'Numer telefonu musi składać się wyłącznie z cyfr'
            ),
            'length' => array(
                'rule'      => array('between', 9,11),
                'message'   => 'Numer telefonu musi skłdać się z 9 do 11 cyfr',
                'allowEmpty' => true
            ),
        ),
        'email' => array(
            'email' => array(
                'rule' => array('email'),
            ),
            'notBlank' => array(
                'rule' => array('notBlank'),
            ),
        ),
    );

}
