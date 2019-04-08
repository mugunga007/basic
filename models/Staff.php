<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/10/29
 * Time: 0:50
 */

namespace app\models;

use yii\base\Model;


class Staff extends Model
{

    public function rules()
    {
        return [

            [['firstname','lastname'],'required'],

        ];
    }

    public $firstname;
    public $lastname;
    public $position;
    public $department;

    public function setFirstname($firstval){
        $this->firstname = $firstval;
    }
    public function getFirstname(){
        return $this->firstname;
    }


    public function insertstaff()
    {
        if (!$this->validate()) {
            return null;
        }

        $staff = new Staff();
        $staff->firstname = $this->firstname;
        $staff->lastname = $this->lastname;
        $staff->position = $this->position;
        $staff->department = $this->department;


        $staff->generateAuthKey();
        return $staff->save()?:null;


    }


}