<?php
namespace api\models;

use Yii;
use yii\base\Model;
use common\models\SignupForm;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'خطأ في اسم المستخدم او كلمة المرور!');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */
    Const EXPIRE_TIME = 604800; //token expiration time, 7 days valid
    public function login()
    {
        if ($this->validate()) {
            //return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
            if ($this->getUser()) {
                $access_token = $this->_user->generateAccessToken();
                $this->_user->expire_at = time() + static::EXPIRE_TIME;
                $this->_user->save();
                Yii::$app->user->login($this->_user, static::EXPIRE_TIME);
                return $access_token;
            }
        }
        
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }

    public function attributeLabels()
    {
        return [
            
            'username' => 'اسم المستخدم',
            'password' => 'كلمة المرور',
            'rememberMe' => 'تذكرني',
        ];
    }
}
