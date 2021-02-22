<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Pais;
use Yii;

class PaisController extends Controller
{
    public function actionIndex()
    {
      // $row = Yii::$app->db->createCommand("SELECT sqlite_version();")
      //   ->queryOne();
      // var_dump($row);
        // urlparam: ?r=pais/index

        $query = Pais::find();

        #https://www.yiiframework.com/doc/api/2.0/yii-data-pagination
        $paginacao = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $paises = $query->orderBy('nome')
            ->offset($paginacao->offset)
            ->limit($paginacao->limit)
            ->all();

        return $this->render('index', [
            'paises' => $paises,
            'paginacao' => $paginacao,
        ]);
    }
}