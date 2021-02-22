<?php

namespace app\models;

use Yii;
use yii\base\Model;

class FormularioDeRegistro extends Model
{
    public $nome;
    public $e_mail;

    public function rules()
    {
        return [
            [['nome', 'e_mail'], 'required'],
            [['e_mail'], 'email'],
        ];
    }

    # Form
/*     $model = new FormularioDeRegistro();
    $model->nome = 'Fulano';
    $model->e_mail = 'emailruim';
    if ($model->validate()) {
        // Bom!
    } else {
        // Falhou!
        // Utilize $model->getErrors()
    } */
}