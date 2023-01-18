<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <nav class="navbar main-menu navbar-default">
        <div class="container">
            <div class="menu-content">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="/public/images/logo.png" alt=""></a>
                </div>


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav text-uppercase">

                    </ul>
                    <div class="i_con">
                        <ul class="nav navbar-nav text-uppercase">
                            <?php if(Yii::$app->user->isGuest):?>
                                <li><a href="<?= Url::toRoute(['auth/login'])?>">Вхід</a></li>
                                <li><a href="<?= Url::toRoute(['auth/signup'])?>">Реєстрація</a></li>
                            <?php else: ?>
                                <?= Html::beginForm(['/auth/logout'], 'post')
                                . Html::submitButton(
                                    'Вихід (' . Yii::$app->user->identity->name . ')',
                                    ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
                                )
                                . Html::endForm() ?>
                            <?php endif;?>
                        </ul>
                    </div>

                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>


    <?= $content ?>


    <footer class="footer-widget-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <aside class="footer-widget">
                        <div class="about-img"><img src="/public/images/logo2.png" alt=""></div>
                        <div class="about-content">Документи не потрібно передавати до рук правоохоронців, достатньо їх показати, тримаючи у своїх руках.
                        </div>
                        <div class="address">
                            <h4 class="text-uppercase">Контактна інформація</h4>

                            <p> 14529/12 GBR, PL, UA</p>

                            <p> Телефон: +696969696969</p>

                            <p>site.com</p>
                        </div>
                    </aside>
                </div>

                <div class="col-md-4">
                    <aside class="footer-widget">
                        <h3 class="widget-title text-uppercase">Ми вам допоможемо</h3>

                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!--Indicator-->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="single-review">
                                        <div class="review-text">
                                            <p>Зустрічі, відрядження, ремонт службового авто... Знайомі ситуації для будь-якого бізнесу. Оренда авто під потреби компанії на кілька днів або тижнів - це просте і швидке вирішення подібних питань. Підготовка та видача авто за 1 день!</p>
                                        </div>
                                        <div class="author-id">
                                            <img src="/public/images/author.png" alt="">

                                            <div class="author-text">
                                                <h4>Байрактар</h4>

                                                <h4>CEO, ReadyTheme</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="single-review">
                                        <div class="review-text">
                                            <p>Насолоджуйтесь поїздкою сповна, про все інше подбаємо ми.

                                                Додайте опцію Повна страховка у свою заявку і не думайте про ризики, пов'язані з пошкодженням кузова. Усі витрати покриватимуться страховкою.</p>
                                        </div>
                                        <div class="author-id">
                                            <img src="/public/images/author.png" alt="">

                                            <div class="author-text">
                                                <h4>Sophia</h4>

                                                <h4>CEO, ReadyTheme</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="single-review">
                                        <div class="review-text">
                                            <p>Якщо ви не додаєте Повну страховку до своєї заявки та повертаєте автомобіль з пошкодженнями, то вартість ремонту вираховуватиметься з вашої застави.</p>
                                        </div>
                                        <div class="author-id">
                                            <img src="/public/images/author.png" alt="">

                                            <div class="author-text">
                                                <h4>Sophia</h4>

                                                <h4>CEO, ReadyTheme</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </aside>
                </div>
                <div class="col-md-4">
                    <aside class="footer-widget">
                        <h3 class="widget-title text-uppercase">Пости про авто та все що з ним пов'язано</h3>


                        <div class="custom-post">
                            <div>
                                <a href="#"><img src="/public/images/footer-img.png" alt=""></a>
                            </div>
                            <div>
                                <span class="p-date">January 12, 2023</span>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <div class="footer-copy">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">&copy; 2023 <a href="#">blog-transport, </a> Developers <i
                                    class="fa fa-heart"></i> <a href="#">Зубченко Єгор, Сахно Анастасія, Квітка Євген</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>