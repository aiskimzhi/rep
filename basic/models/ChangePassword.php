<?php

namespace app\models;

use yii\base\Model;
use Yii;
use yii\db\ActiveRecord;
use yii\db\Query;
use app\models\User;
//use yii\db\BaseActiveRecord;

class ChangePassword extends Model
{
    public $oldPassword;
    public $password;
    public $confirmPassword;

    public function rules()
    {
        return [
            [['oldPassword', 'password', 'confirmPassword'], 'required'],
            ['password', 'string', 'min' => 6],
            ['confirmPassword', 'compare', 'compareAttribute' => 'password', 'operator' => '==']
        ];
    }

    public function changePassword()
    {
        $user = User::findOne(['id' => Yii::$app->user->identity->getId()]);
        if (Yii::$app->request->post()) {
            if (Yii::$app->security->validatePassword($_POST['ChangePassword']['oldPassword'], $user->password)) {
                $user->password = Yii::$app->security->generatePasswordHash($_POST['ChangePassword']['password']);
                if ($user->save()) {
                    //Yii::$app->session->setFlash('success', 'Your password changed successfully');
                    return true;
                } //else {
//                    Yii::$app->session->setFlash('error', 'Your password was not changed');
//                }
            }
        }

        return null;
    }
}
