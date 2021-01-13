<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;
use Ramsey\Uuid\Uuid;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $uid;
    public $branch_id;
    public $emp_id;
    public $username;
    public $email;
    public $password;
    public $connect_status;
    public $permission;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            [['username', 'branch_id', 'emp_id', 'permission'], 'required'],
            [['branch_id', 'emp_id', 'connect_status', 'permission'], 'integer'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    public function genUid(){
        try {

            // Generate a version 1 (time-based) UUID object
            $uuid = Uuid::uuid1();
            $id = $uuid->toString(); // i.e. e4eaaaf2-d142-11e1-b3e4-080027620cdd
            return $id;
            
        } catch (UnsatisfiedDependencyException $e) {

            // Some dependency was not met. Either the method cannot be called on a
            // 32-bit system, or it can, but it relies on Moontoast\Math to be present.
            echo 'Caught exception: ' . $e->getMessage() . "\n";

        }
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->uid = $this->genUid();
        $user->branch_id = $this->branch_id;
        $user->emp_id = $this->emp_id;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->permission = $this->permission;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        return $user->save() && $this->sendEmail($user);

    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
