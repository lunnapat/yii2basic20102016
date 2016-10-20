<?php
//ส่วนหัว  ท้ายของ page
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
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

<div class="wrap">
    
  
    <div>
        <img src="<?=  Yii::getAlias('@web')?>/img/header.png" class="img-responsive" alt="header" >
    </div> 
    
    <?php
    NavBar::begin([
        'brandLabel' => '<span class="glyphicon glyphicon-heart-empty"></span>  Web site', //HTML โชว์รูปสัญลักษณ์ span
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse', //navbar-fixed-top
        ],
    ]);
    
      //สร้างตัวแปร เพื่อทำ Sub Manu
           $setting = [
                      ['label' => 'สถานะคอมพิวเตอร์', 'url' => ['/comstatus']],
                      ['label' => 'ประเภทคอมพิวเตอร์', 'url' => ['/com-type']],
                      ];
        
           
           $regis= [
                      ['label' => 'ทะเบียนคอม', 'url' => ['/com']],
                      ];
            $report = [
                      ['label' => 'รายละเอียดประเภท', 'url' => ['/reportcometype']],
                      ['label' => 'รายละเอียดคอมพิวเตอร์', 'url' => ['/report_come_deail']],
                      ];
   
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'], 
        'encodeLabels'=> FALSE, //ใส่เพื่อให้แสดงสัญลักษณ์หน้าเมนูต่าง ๆได้
        
      
        'items' => [
            ['label' => '<span class="glyphicon glyphicon-home"> </span> หน้าแรก', 'url' => ['/site/index']],
            ['label' => 'ลงทะเบียน', 'items' => $regis],
            ['label' => '<span class="glyphicon glyphicon-search"> </span> เกี่ยวกับ', 'url' => ['/site/about']],
            ['label' => 'ติดต่อ', 'url' => ['/site/contact']],
            ['label' => 'ทดสอบ1', 'url' => ['/first1/index']],
            ['label' => 'ตั้งค่าระบบ', 'items' => $setting],
            ['label' => 'รายงาน', 'items' => $report],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
