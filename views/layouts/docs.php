<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => '@web/favicon.ico']);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header" class="header">
<div class="header__top"></div>
			<div class="header__logo">
				<div class="container">
					<span class="header__title">Официальный интернет-портал правовой информации г. Череповца</span>
					<a href="" class="logo" alt="Документы">Документы</a>
				</div>
			</div>
			
			<div class="header__panelsort">
				<div class="container">

					<div class="header__rowsort">
						<div class="header__search">
							<form id="search" class="search" method="get" action="/">
								<div class="input-group">
								  <input type="hidden" name="module" value="search" />
								  <input type="text" id="query" class="form-control search text" name="query" value="" />	
								  <span class="input-group-btn">
									  <button class="btn btn-info search button" type="submit">
										  <i class="glyphicon glyphicon-search"></i>
									  </button>
								  </span>
								</div>  
							</form>
						</div>
						<div class="header__filter">
							<a href="#" class="filter-show" alt="Фильтр документов"><i></i></a>
							<div class="main-title"><small>фильтр</small>документов</div>
							<div class="sort-bloc-line"></div>
						</div>
						
					</div>
				</div>
			</div>
</header>


<main id="main" class="main flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="footer mt-auto py-3 bg-light">
    <div class="container">
		<div class="footer__info">
			<span class="rate">16+</span>
			<p>Сетевое издание «Официальный интернет-портал правовой информации г. Череповца». </p>
			<p>Свидетельство о регистрации СМИ: серия Эл  № ФС77-76582 от 15.08.2019 г. выдано Федеральной службой по надзору в сфере связи, информационных технологий и массовых коммуникаций (Роскомнадзор).</p>
			<p>Учредитель: муниципальное казенное учреждение «Информационное мониторинговое агентство «Череповец».</p>
			<p>Главный редактор: Е.В. Попова</p>
			<p>адрес электронной почты редакции: ima@cherinfo.ru | телефон редакции 8 (8202) 44-67-30</p>
		</div>
	</div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
