<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/10/25
 * Time: 18:04
 */

namespace app\models;

use yii\base\Model;
class Student extends Model
{

    public $firstname;
    public $lastname;
    public $faculty;
    public $email;

    public function rules()
    {
        return [
            [['firstname','lastname'],'required', 'message'=>'This cannot be empty '],
            ['email','email'],
        ];
    }

/*
    public function setFirstname($fnval){
        $this->firstname=$fnval;
    }
    public function getFirstname(){
        return $this->firstname;
    }

    public function setLastname($lnval){
        $this->lastname=$lnval;
    }
    public function getLastname(){
        return $this->lastname;
    }
*/

}