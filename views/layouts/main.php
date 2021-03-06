<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
AppAsset::register($this);
$this->title = 'Студия моды и стиля SPAS';

$this->registerMetaTag(['encoding' => 'utf-8']);
$this->registerMetaTag(['name' => 'google-site-verification', 'content' => '3cC7iPXqFi5UUoRZt8MjYO7HyAq1QFCjIrhzbXL_Aq8']);
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1']);
$this->registerMetaTag([
        'name' => 'description',
        'content' => 'Витебск Беларусь студия моды и стиля, ателье.
        Пошив одежды по индивидуальным заказам.
        Изготовление Сценические костюмы.
        Разработка и пошив вечерних и свадебных нарядов платьев.
        Разработка фирменного стиля и форменной одежды.
        Оформление интерьера.
    '],
    'meta-description'
);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="height100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body class="height100">

<?php $this->beginBody() ?>

<div class="container-fluid height100">
    <?= $content ?>
</div>

<?php $this->endBody() ?>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-49911531-1', 'studiospas.tk');
    ga('send', 'pageview');

</script>
</body>
</html>
<?php $this->endPage() ?>
