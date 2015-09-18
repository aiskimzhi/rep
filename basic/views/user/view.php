<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'My Data';
//$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'first_name',
            'last_name',
            'email:email',
            'skype',
            'phone',
        ],
    ]) ?>

    <p>
        <?= Html::a('Update data', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

        <a class="btn btn-success" href="http://new.loc/user/change-password">Change password</a>

        <?= Html::a('Delete account', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>

        <a class="btn btn-warning" href="http://new.loc">Create Advert</a>

        <a class="btn btn-info" href="http://new.loc">My Adverts</a>

        <a class="btn btn-info" href="http://new.loc">My Bookmarks</a>

    </p>
</div>
