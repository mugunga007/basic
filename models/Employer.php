<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/10/06
 * Time: 12:56
 */

namespace app\models;


use yii\base\Model;

class Employer extends Model
{

    public $id;
    public $names;
    public $email;
    public $phone;

public function rules()
{
    return [
        [['names'],'string','max'=>5],
        ['email','email','message'=>'Email format is not corrected'],
    ];
}

    public function insertemployer()
    {
        if (!$this->validate()) {
            return null;
        }

        $employer = new Employer();
        $employer->names = $this->names;
        $employer->email = $this->email;
        $employer->phone = $this->phone;


        $employer->generateAuthKey();
        return $employer->save()?:null;


    }

}