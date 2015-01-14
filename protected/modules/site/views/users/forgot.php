<?php
$baseUrl = Yii::app()->baseUrl;
$themeUrl = Yii::app()->theme->baseUrl;
?>

<body class="minimal login-page">
    <script> var boxtest = localStorage.getItem('boxed');
        if (boxtest === 'true') {
            document.body.className += ' boxed-layout';
        }</script> 
    <a href="<?php echo Yii::app()->baseUrl?>" id="return-arrow"> <i class="fa fa-arrow-circle-left fa-3x text-light"></i> <span class="text-light"> Return <br>
            to Website </span> </a> 

    <!-- Start: Main -->
    <div id="main">
        <div id="content">
            <div class="row">
                <div id="page-logo"> </div>
            </div>
            <div class="row">
                <div class="panel-bg">
                    <?php
                    $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'users-form',
                        'enableAjaxValidation' => true,
                        'clientOptions' => array(
                            'validateOnSubmit' => true,
                        ),
                        'htmlOptions' => array('class' => 'form-signin cmxform', 'role' => 'form')
                    ));

                    ?> 
                    <div class="panel">
                        <div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock text-purple2"></span> Lost Password </span> 
                            <span class="panel-header-menu pull-right mr15 text-muted fs12"><?php echo CHtml::link('Login >>', array('/site/users/login'))?></span> </div>
                        <div class="panel-body">
                            <?php
                            foreach (Yii::app()->user->getFlashes() as $key => $message) {
                                echo '<div class="alert flash-' . $key . '">' . $message . "</div>\n";
                            }
                            ?>
                            <div class="login-avatar"> <img src="<?php echo $themeUrl; ?>/css/frontend/img/avatars/login.png" width="150" height="112" alt="avatar"> </div>
                            <div class="form-group">
                                <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> </span>
                                    <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'autocomplete' => 'off', 'autofocus', 'placeholder' => 'User Email')); ?>
                                    <!--<input type="text" class="form-control" placeholder="User Name">-->
                                </div>
                                <?php echo $form->error($model, 'username', array('class' => 'error')); ?>
                            </div>
                            
                        </div>
                        <div class="panel-footer"> <span class="text-muted fs12 lh30"></span>
                            <?php echo CHtml::button('Get Reset Link', array("class" => "btn btn-sm bg-purple2 pull-right", "type" => "submit", 'name' => 'forgot')); ?>
              <!--              <a class="btn btn-sm bg-purple2 pull-right" href="#"><i class="fa fa-home"></i> Login</a>-->
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <?php $this->endWidget(); ?>
                </div>
                <div class="panel-bg1">© Copyright 2015. All Rights Reserved.</div>
            </div>
        </div>
    </div>
    <!-- End: Main -->

    <div class="overlay-black"></div>
    <script type="text/javascript">
        jQuery(document).ready(function () {

            "use strict";

            // Init Theme Core 	  
            Core.init();

            // Enable Ajax Loading 	  
            Ajax.init();

            // Init Full Page BG(Backstretch) plugin
            $.backstretch("<?php echo $themeUrl; ?>/css/frontend/img/stock/splash/6.jpg");


            $('.oAuthLogin').click(function (e) {
                var _frameUrl = "<?php echo Yii::app()->createAbsoluteUrl('/site/users/signupsocial'); ?>?provider=" + $(this).data('provider');
                window.open(_frameUrl, "SignIn", "width=580,height=410,toolbar=0,scrollbars=0,status=0,resizable=0,location=0,menuBar=0,left=400,top=150");
                e.preventDefault();
                return false;
            });

        });
    </script>
</body>
