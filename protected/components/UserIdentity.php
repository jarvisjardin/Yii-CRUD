<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	 
	public function authenticate()
	{
		$user = Users::model()->findByAttributes(array('email' => $this->username));
		if($user === null)
		    $this->errorCode = self::ERROR_USERNAME_INVALID;
		else if($user->password_hash !== md5($this->password) )
		    $this->errorCode = self::ERROR_PASSWORD_INVALID;
		else
		{
		    $this->setState('userData', $user);
		    $this->errorCode = self::ERROR_NONE;
		}
		return !$this->errorCode;
/*

		$email = $this->username;
		$password = $this->password;
		
		$user = Users::Model()->find(array('condition'=>"email='".$email."'"));
					
		if(!empty($user)){
			$hashPW = md5($password);
			if($hashPW == $user->password_hash){
				$this->errorCode=self::ERROR_NONE;

				$session = Yii::app()->session;
				$session->open();
				$session['user'] = array(
					'id'				=> $user->id,
					'email'				=> $user->email,
					'expectedcalories'	=> $user->expectedcalories,
				)
			}else{
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
			}
		}else{
			$this->errorCode=self::ERROR_USERNAME_INVALID;			
		}
		return !$this->errorCode;
*/
	}

/*
    public function getId()
    {
        return $this->_id;
    }	
*/
}