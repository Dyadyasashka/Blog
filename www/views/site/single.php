<?php
use yii\widgets\LinkPager;
use yii\data\Pagination;
use yii\helpers\Url;
?>
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <a href="<?=Url::toRoute(['site/view','id'=>$article->id]);?>"><img src="<?= $article->getImage();?>" alt=""></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6><a href="#">Мои проекты</a></h6>

                            <h1 class="entry-title"><a href="<?=Url::toRoute(['site/view','id'=>$article->id]);?>"><?= $article->title?></a></h1>


                        </header>
                        <div class="entry-content">
                            <?= $article->content?>
                        </div>
                        <div class="social-share">
							<span
                                class="social-share-title pull-left text-capitalize">Гайдаренко Александр <?= $article->date ?></span>
                            <ul class="text-center pull-right">

                                <li><a class="s-twitter" href="#twitter" onclick="window.open('https://twitter.com/intent/tweet?url='+ window.location.href +'')"><i class="fa fa-twitter"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </article>
<?php if(!Yii::$app->user->isGuest):?>
                <?php if(!empty($comments)):?>

                    <?php foreach ($comments as $comment):?>

                        <div class="bottom-comment"><!--bottom comment-->




                            <div class="comment-text">

                                <h5><?=$comment->user->name;?></h5>

                                <p class="comment-date">
                                    <?= $comment->getDate();?>
                                </p>


                                <p class="para"><?= $comment->text ;?></p>
                            </div>
                        </div>
                    <?php endforeach;?>

                <?php endif;?>


                <!-- end bottom comment-->


                <div class="leave-comment"><!--leave comment-->
                    <h4>Комментарии</h4>
<?php if(Yii::$app->session->getFlash('comment')):?>
                    <div class="alert alert-success" role="alert";?>
                        <?=Yii::$app->session->getFlash('comment');?>
                    </div>
<?php endif;?>
<?php $form = \yii\widgets\ActiveForm::begin([
        'action'=>['site/comment','id'=>$article->id],
    'options'=>['class'=>"form-horizontal contact-form", 'role'=>'form']])?>


                        <div class="form-group">
                            <div class="col-md-12">
  <?= $form->field($commentForm, 'comment')->textarea(['class'=>'form-control','placeholder'=>'Что-то хотите написать?)'])->label(false)?>

                            </div>
                        </div>
                        <button type="submit" class="btn send-btn">Отправить</button>
 <?php \yii\widgets\ActiveForm::end();?>

                </div><!--end leave comment-->
<?php endif;?>
            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">

                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Последние посты</h3>

                        <?php foreach ($popular as $article):?>

                            <div class="popular-post">


                                <a href="<?=Url::toRoute(['site/view','id'=>$article->id]);?>" class="popular-img"><img src="<?= $article->getImage();?>" alt="">

                                    <div class="p-overlay"></div>
                                </a>

                                <div class="p-content">
                                    <a href="<?=Url::toRoute(['site/view','id'=>$article->id]);?>" class="text-uppercase"><?= $article->title?></a>
                                    <span class="p-date"><?= $article->date?></span>

                                </div>
                            </div>

                        <?php endforeach;?>

                    </aside>


                </div>
            </div>
        </div>
    </div>
</div>
