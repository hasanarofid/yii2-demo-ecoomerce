<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <?php $this->head() ?>
</head>
<body >

<!-- <div id="preloder">
		<div class="loader"></div>
	</div> -->
<?php $this->beginBody() ?>
<!-- Header section -->
<header class="header-section clearfix">
		<div class="container-fluid">
            
			<a href="index.html" class="site-logo">
                <?= Html::img(Yii::getAlias('@web') . '/crypto/img/logo.png', ['alt' => 'Logo']) ?>
			</a>
			<div class="responsive-bar"><i class="fa fa-bars"></i></div>
			<a href="" class="user"><i class="fa fa-user"></i></a>
			<a href="" class="site-btn">Sign Up Free</a>
			<nav class="main-menu">
				<ul class="menu-list">
					<li><a href="">Solution</a></li>
					<li><a href="">Features</a></li>
					<li><a href="">News</a></li>
					<li><a href="">About</a></li>
					<li><a href="">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->
<!-- <header> -->
    
    <?php
    // NavBar::begin([
    //     'brandLabel' => Yii::$app->name,
    //     'brandUrl' => Yii::$app->homeUrl,
    //     'options' => [
    //         'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
    //     ],
    // ]);
    // $menuItems = [
    //     ['label' => 'Home', 'url' => ['/site/index']],
    //     ['label' => 'About', 'url' => ['/site/about']],
    //     ['label' => 'Contact', 'url' => ['/site/contact']],
    // ];
    // if (Yii::$app->user->isGuest) {
    //     $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
    // }

    // echo Nav::widget([
    //     'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
    //     'items' => $menuItems,
    // ]);
    // if (Yii::$app->user->isGuest) {
    //     echo Html::tag('div',Html::a('Login',['/site/login'],['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]);
    // } else {
    //     echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
    //         . Html::submitButton(
    //             'Logout (' . Yii::$app->user->identity->username . ')',
    //             ['class' => 'btn btn-link logout text-decoration-none']
    //         )
    //         . Html::endForm();
    // }
    // NavBar::end();
    ?>
<!-- </header> -->
<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 hero-text">
					<h2>Invest in <span>Bitcoin</span> <br>Bitcoin Trading</h2>
					<h4>Use modern progressive technologies of Bitcoin to earn money</h4>
					<form class="hero-subscribe-from">
						<input type="text" placeholder="Enter your email">
						<button class="site-btn sb-gradients">Get Started</button>
					</form>
				</div>
				<div class="col-md-6">
					<img src="img/laptop.png" class="laptop-image" alt="">
				</div>
			</div>
		</div>
	</section>
<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-start">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="float-end"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
