<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\modules\blog\Module as Blog;
use app\modules\admin\Module as Admin;
use app\modules\lang\widgets\selector\LanguageSelectorWidget;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use app\assets\AppAsset;
use xtetis\bootstrap4glyphicons\assets\GlyphiconAsset;

AppAsset::register($this);
GlyphiconAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Blog::t('blog', 'Administrator'),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => ['navbar-dark', 'bg-dark', 'navbar-expand-md'],
        ],
    ]);
    $menuItems = [
        ['label' => Yii::t('app', 'Home'), 'url' => ['/site/index']],
        ['label' => Blog::t('blog', 'Article'), 'url' => ['/blog/article']],
        ['label' => Blog::t('blog', 'Comment'), 'url' => ['/blog/comment']],
        ['label' => Blog::t('blog', 'Category'), 'url' => ['/blog/category']],
        ['label' => Blog::t('blog', 'Tag'), 'url' => ['/blog/tag']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => Yii::t('app', 'Sign In'), 'url' => ['/auth/sign-in']];
        $menuItems[] = ['label' => Yii::t('app', 'Sign Up'), 'url' => ['/auth/sign-up']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/auth/logout'], 'post')
            . Html::submitButton(
                Yii::t('app', 'Logout (') . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav mr-auto'],
        'items' => $menuItems
    ]);
    try {
        echo LanguageSelectorWidget::widget();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        </div>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

