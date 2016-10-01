<?php

namespace app\models;

use Yii;
use yii\base\Model;


/**
* 
*/
class Test1Form extends Model
{
	public $name;
	public $password;
	public $password_repeat;
	public $email;

	public function rules()
	{
		return [
			['name', 'required', 'message' => 'Name khong duoc bo trong!'],
			['password', 'required', 'message' => 'Password khong duoc bo trong'],
			['password_repeat', 'required', 'message' => 'Vui long nhap lai password'],
			['email', 'required', 'message' => 'Email khong duoc bo trong'],
			[['name', 'password', 'password_repeat', 'email'], 'string', 'min' => 6, 'max' => 24],

			//xac nhan pass
			['password', 'compare', 'message' => 'Password phai duoc lap lai'],
			['password_repeat', 'safe'],

			['email', 'email', 'message' => 'Khong dung dinh dang email'],
		];
	}
}