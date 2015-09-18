<?php

namespace app\models;

use yii\base\Model;
use Yii;
use app\models\Advert;
use app\models\User;
use app\models\Region;
use app\models\City;
use app\models\Category;
use app\models\Subcategory;
use app\models\Bookmark;

class AdvertUse extends Model
{
    public $region_id;
    public $city_id;
    public $category_id;
    public $subcategory_id;
    public $title;
    public $text;
    public $created_at;
    public $updated_at;
    public $views;

    public function rules()
    {
        return [
            [['title', 'text'], 'required'],
            [['created_at', 'updated_at', 'views'], 'integer']
        ];
    }

    public function create()
    {
        //var_dump($this->validate()); die;

        if ($this->validate()) {
            $advert = new Advert();
            echo $this->title;
            echo $this->text;

            $advert->created_at = time();
            echo $advert->created_at;
            $advert->updated_at = time();
            echo $advert->updated_at;
            return $advert;
        }
        return null;
    }


}