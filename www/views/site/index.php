<?php
use yii\widgets\LinkPager;
use yii\data\Pagination;
use yii\helpers\Url;
?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php foreach ($articles as $article):?>
                    <article class="post">
                        <div class="post-thumb">
                            <a href="<?=Url::toRoute(['site/view','id'=>$article->id]);?>"><img src="<?= $article->getImage(); ?>" alt=""></a>

                            <a href="<?=Url::toRoute(['site/view','id'=>$article->id]);?>" class="post-thumb-overlay text-center">
                                <div class="text-uppercase text-center">View Post</div>
                            </a>
                        </div>
                        <div class="post-content">
                            <header class="entry-header text-center text-uppercase">
                                <h6><a href="#">Мои проекты</a></h6>

                                <h1 class="entry-title"><a href="<?=Url::toRoute(['site/view','id'=>$article->id]);?>"><?= $article->title ?></a></h1>


                            </header>
                            <div class="entry-content">
                                <p><?= $article->description?>
                                </p>

                                <div class="btn-continue-reading text-center text-uppercase">
                                    <a href="<?=Url::toRoute(['site/view','id'=>$article->id]);?>" class="more-link">Подробнее</a>
                                </div>
                            </div>
                            <div class="social-share">
                                <span class="social-share-title pull-left text-capitalize">Гайдаренко Александр <?= $article->date ?></span>

                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>

                <?php

                    echo LinkPager::widget([
                         'pagination' => $pagination,
                    ]);
                ?>
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