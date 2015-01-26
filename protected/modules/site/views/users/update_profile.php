<?php
$baseUrl = Yii::app()->baseUrl;
$themeUrl = Yii::app()->theme->baseUrl;
?>

<!-- Start: Content -->
<section id="content_wrapper">
    <div id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active"><a href="#">Update Profile</a></li>
            </ol>
        </div>
    </div>
    <div id="content">
        <div class="row">
            <div class="col-md-6">
                <div class="panel">
                    <?php
                    $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'users-form',
                        'htmlOptions' => array('class' => 'form-signin cmxform', 'role' => 'form')
                    ));
                    ?>

                    <div class="panel-heading"> <span class="panel-title">
                            <span class="glyphicon glyphicon-lock text-purple2"></span> Update Profile </span>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> </span>
                                <!--<input type="text" class="form-control" placeholder="Name">-->
                                <?php echo $form->textField($model, 'user_name', array('placeholder' => 'Name', 'class' => 'form-control', 'size' => 60, 'maxlength' => 250)); ?>
                            </div>
                            <?php echo $form->error($model, 'user_name'); ?>
                        </div>
                        <div class="form-group">
                            <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> </span>
<!--                                    <input type="text" class="form-control" placeholder="E-mail Address">-->
                                <?php echo $form->textField($model, 'user_email', array('placeholder' => Users::model()->getAttributeLabel('user_email'), 'class' => 'form-control', 'size' => 60, 'maxlength' => 250)); ?>
                            </div>
                            <?php echo $form->error($model, 'user_email'); ?>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <?php echo CHtml::submitButton('Save', array('name' => 'update', 'class' => 'btn btn-sm bg-purple2 pull-right',)); ?>
                        <div class="clearfix"></div>
                    </div>
                    <?php $this->endWidget(); ?>

                </div>
            </div>

            <div class="col-md-6">
                <div class="panel">
                    <div class="panel-heading"> <span class="panel-title">
                            <span class="glyphicon glyphicon-lock text-purple2"></span>Change Password</span>
                    </div>
                    <div class="panel-body">
                        <?php
                        $form = $this->beginWidget('CActiveForm', array(
                            'id' => 'change-password-form',
                            'htmlOptions' => array('class' => 'form-signin cmxform', 'role' => 'form')
                        ));
                        ?>
                        <div class="form-group">
                            <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> </span>
                                <?php echo $form->passwordField($model, 'currentpassword', array('class' => 'form-control','placeholder'=>$model->getAttributeLabel('currentpassword'))); ?>
                            </div>
                            <?php echo $form->error($model, 'currentpassword'); ?>
                        </div>

                        <div class="form-group">
                            <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> </span>
                                <?php echo $form->passwordField($model, 'new_password', array('class' => 'form-control','placeholder'=>$model->getAttributeLabel('new_password'))); ?>
                            </div>
                            <?php echo $form->error($model, 'new_password'); ?>
                        </div>
                        <div class="form-group">
                            <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> </span>
                                <?php echo $form->passwordField($model, 'confirm_password', array('class' => 'form-control','placeholder'=>$model->getAttributeLabel('confirm_password'))); ?>
                            </div>
                            <?php echo $form->error($model, 'confirm_password'); ?>
                        </div>

                    </div>

                    <div class="panel-footer">
                        <?php echo CHtml::submitButton('Save', array('name' => 'forgot', 'class' => 'btn btn-sm bg-purple2 pull-right',)); ?>
                        <div class="clearfix"></div>
                    </div>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End: Content -->
