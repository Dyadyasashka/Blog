<?php

use app\models\Article;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ArticleSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if(!empty($comments)):?>



        <table class="table">
            <thead>
            <tr>
                <td>Коментарий ID</td>
                <td>Автор ID</td>
                <td>Текст</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($comments as $comment):?>
            <tr>
                <td><?= $comment->id?></td>
                <td><?= $comment->user_id?></td>
                <td><?= $comment->text?></td>
                <td>
                    <?php if($comment->isAllowed()):?>
                        <a class="btn btn-warning" href="<?= Url::toRoute(['comment/disallow', 'id'=>$comment->id]);?>">Заблокировать</a>
                    <?php else:?>
                        <a class="btn btn-success" href="<?= Url::toRoute(['comment/allow', 'id'=>$comment->id]);?>">Опубликовать</a>
                    <?php endif?>

                    <a class="btn btn-danger" href="<?= Url::toRoute(['comment/delete', 'id'=> $comment->id]);?>">Удалить</a>
                </td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>



    <?php endif;?>


</div>
