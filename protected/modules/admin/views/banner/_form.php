<?php
/* @var $this BannerController */
/* @var $model Banner */
/* @var $form CActiveForm */
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading"><?php echo ($model->isNewRecord) ? "Add Banner Layout" : "Update Banner Layout"; ?></header>
            <div class="panel-body">
                <div class="position-left">
                    <?php
                    $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'banner-form',
                        'enableAjaxValidation' => true,
                        'clientOptions' => array(
                            'validateOnSubmit' => true,
                        ),
                        'htmlOptions' => array('enctype' => 'multipart/form-data', 'class' => 'form-horizontal', 'role' => 'form'),
                    ));
                    ?>
                    <?php echo $form->errorSummary(array($model)); ?>
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'banner_layout_id', array('class' => 'col-lg-3 col-sm-2 control-label')); ?>
                        <div class="col-lg-3">
                            <?php echo $form->dropDownList($model, 'banner_layout_id', CHtml::listData(BannerLayout::model()->findAll(), 'banner_layout_id', 'banner_layout_name'), array('type' => 'text', 'empty' => '--Select Page--', 'class' => 'form-control ')); ?>
                            <?php // echo $form->error($model, 'banner_layout_page'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'banner_title', array('class' => 'col-lg-3 col-sm-2 control-label')); ?>
                        <div class="col-lg-9">
                            <?php echo $form->textField($model, 'banner_title', array('class' => 'form-control')); ?>
                            <?php //echo $form->error($model, 'banner_layout_dimensions'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'banner_url', array('class' => 'col-lg-3 col-sm-2 control-label')); ?>
                        <div class="col-lg-9">
                            <?php echo $form->textField($model, 'banner_url', array('class' => 'form-control')); ?>
                            <?php //echo $form->error($model, 'banner_layout_dimensions'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'banner_image', array('class' => 'col-lg-3 col-sm-2 control-label')); ?>
                        <div class="col-lg-9">
                            <?php echo $form->fileField($model, 'banner_image'); ?>
                            <?php //echo $form->error($model, 'banner_layout_dimensions'); ?>
                        </div>
                    </div>
                    <?php if (!$model->isNewRecord) { ?>
                        <div class="form-group">
                            <label class="col-lg-3 col-sm-2 control-label">Old Image</label>
                            <div class="col-lg-9">
                                <div id="gallery" class="media-gal">
                                    <div class="images item " >
                                        <a href="#myModal" data-toggle="modal">
                                        <?php
                                            $banner = Banner::model()->findByPk($model->banner_id);
                                            echo CHtml::image(
                                                    $this->createUrl("/themes/site/image/banners/" . $banner->banner_path . $banner->banner_image), 
                                                    $banner->banner_title
                                                    );
                                            ?>
                                            </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title"><?php echo $banner->banner_title?></h4>
                                    </div>

                                    <div class="modal-body row">

                                        <div class="col-md-12 img-modal">
                                                <?php 
                                                echo CHtml::image(
                                                    $this->createUrl("/themes/site/image/banners/" . $banner->banner_path . $banner->banner_image), 
                                                    $banner->banner_title
                                                    );
                                                ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    
                    <?php } ?>
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'banner_status', array('class' => 'col-lg-3 col-sm-2 control-label')); ?>
                        <div class="col-lg-9">
                            <?php 
                            if($model->isNewRecord){
                                if($model->banner_status == 'on'){
                                    $checked = 'checked';
                                }
                            }else{
                                if($model->banner_status == '1' || $model->banner_status == 'on'){
                                    $checked = 'checked';
                                }
                            }
                            ?>
                                <input type="checkbox" <?php echo $checked ?>
                                       data-on="success"
                                       data-off="danger"
                                       class="switch-mini"
                                       name="Banner[banner_status]"/>
                            <?php // echo $form->checkBoxList($model, 'banner_status', array('checked' => ''), array('class' => 'switch-mini')); ?>
                            <?php //echo $form->error($model, 'banner_layout_dimensions'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-9">
                            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
                        </div>
                    </div>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- form -->
