<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	// ini code untuk merubah halaman login agar langsung ke database
	// kode untuk login sendiri sudah disediakan dari Yii Framework
	// kita cukup edit bagian ini untuk modifikasi loginnya.
	

	private $_id;
	public function authenticate()
	{
		//else if(!$user->validatePassword($this->password))
		$username = strtolower($this->username);
		$user = MemUser::model()->find('LOWER(username)=?', array($username));

		if($user===null)
		    $this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!CPasswordHelper::verifyPassword($this->password, $user->password))
		{
		    $this->errorCode = self::ERROR_PASSWORD_INVALID;
		}
		else
		{
		    $this->_id = $user->id;
		    $this->username = $user->username;
		    $this->errorCode = self::ERROR_NONE;
		    $user->last_login=date('Y-m-d h:i:s');
		    $user->save();
			
	  	}
	   	return $this->errorCode == self::ERROR_NONE;
	}	
	
	public function getId()
	{
		return $this->_id;
	}
}