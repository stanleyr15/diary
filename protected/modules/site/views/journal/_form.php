<?php
$baseUrl = Yii::app()->baseUrl;
$themeUrl = Yii::app()->theme->baseUrl;
?>

<!-- Start: Content -->
<section id="content_wrapper">
    <div id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active"><a>WRITE A JOURNAL</a></li>
                <li class="crumb-link"><a href="<?php echo SITEURL; ?>">Home</a></li>
                <li class="crumb-trail">WRITE AN JOURNAL</li>
            </ol>
        </div>
    </div>
    <div id="content">
        <div class="row">
            <div class="col-md-6">
                <div class="panel">
                    <div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock"></span> Details </span> </div>
                    <div class="panel-body">

                        <?php
                        $form = $this->beginWidget('CActiveForm', array(
                            'id' => 'diary-form',
                            // Please note: When you enable ajax validation, make sure the corresponding
                            // controller action is handling ajax validation correctly.
                            // There is a call to performAjaxValidation() commented in generated controller code.
                            // See class documentation of CActiveForm for details on this.
                            'enableAjaxValidation' => false,
                            'htmlOptions' => array('enctype' => 'multipart/form-data'),
                            'clientOptions' => array(
                                'validateOnSubmit' => true,
                            ),
                        ));
                        ?>

                        <?php echo $form->errorSummary($model); ?>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'diary_title'); ?>
                            <?php echo $form->textField($model, 'diary_title', array('class' => 'form-control', 'size' => 60, 'maxlength' => 250)); ?>
                            <?php echo $form->error($model, 'diary_title'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'diary_category_id'); ?>
                            <?php echo $form->dropDownList($model, 'diary_category_id', Myclass::getCategorywithOthers(), array('type' => 'text', 'empty' => '--Select Your Category--', 'class' => 'form-control ')); ?>
                            <?php //echo $form->textField($model,'diary_category_id',array('class'=>'form-control','size'=>20,'maxlength'=>20)); ?>
                            <?php echo $form->error($model, 'diary_category_id'); ?>
                        </div>
                        <div class="form-group hidden" id="div_category">
                            <?php echo $form->labelEx($model, 'diary_category'); ?>
                            <?php echo $form->textField($model, 'diary_category', array('class' => 'form-control', 'size' => 60, 'maxlength' => 250)); ?>
                            <?php echo $form->error($model, 'diary_category'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'diary_tags'); ?>
                            <?php echo $form->textField($model, 'diary_tags', array('class' => 'form-control', 'size' => 60, 'maxlength' => 250)); ?>
                            <?php echo $form->error($model, 'diary_tags'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'diary_current_date'); ?>
                            <div class="form-group">
                                <div class="input-group"> <span class="input-group-addon"><i class="fa fa-calendar"></i> </span>
                                    <?php //echo $form->textField($model,'diary_current_date',array('id'=>'datepicker','class'=>'form-control'));  ?>

                                    <?php
                                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                        'name' => 'diary_current_date',
                                        'model' => $model,
                                        'attribute' => 'diary_current_date',
                                        'options' => array(
                                            'dateFormat' => JS_SHORT_DATE_FORMAT,
                                            'altFormat' => JS_SHORT_DATE_FORMAT,
                                        ),
                                        'htmlOptions' => array(
                                            'value' => date(PHP_SHORT_DATE_FORMAT, strtotime($model->diary_current_date)),
                                            'id' => 'datepicker',
                                            'class' => 'form-control',
                                            'size' => '10', // textField size
                                            'maxlength' => '10', // textField maxlength
                                        ),
                                    ));
                                    ?>
                                    <?php echo $form->error($model, 'diary_current_date'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php //echo $form->labelEx($model, 'diary_upload'); ?>
                            <?php //echo $form->fileField($model, 'diary_upload'); ?>
                            <?php //echo $form->error($model, 'diary_upload'); ?>
                            
                         <?php $this->widget('CMultiFileUpload', array(
     'model'=>$model,
     'attribute'=>'photos',
     //'accept'=>'jpg|gif|png',
     'options'=>array(
        // 'onFileSelect'=>'function(e, v, m){ alert("onFileSelect - "+v) }',
        // 'afterFileSelect'=>'function(e, v, m){ alert("afterFileSelect - "+v) }',
        // 'onFileAppend'=>'function(e, v, m){ alert("onFileAppend - "+v) }',
        // 'afterFileAppend'=>'function(e, v, m){ alert("afterFileAppend - "+v) }',
        // 'onFileRemove'=>'function(e, v, m){ alert("onFileRemove - "+v) }',
        // 'afterFileRemove'=>'function(e, v, m){ alert("afterFileRemove - "+v) }',
     ),
     'denied'=>'File is not allowed',
     'max'=>10, // max 10 files
     'htmlOptions' => array(
              'multiple' => 'true', 
     ),
 
 
  )); ?>
                            
                        </div>
                        <div class="form-group">
                            <!--                  <label class="col-md-3 control-label">Select Mood</label>-->
                            <?php echo $form->labelEx($model, 'diary_user_mood_id', array('class' => 'col-md-3 control-label')); ?>

                            <div class="col-md-9">
                                <?php
                                $moods = CHtml::listData(MoodType::model()->findAll(), 'mood_id', 'mood_type');
                                foreach ($moods as $key => $mood) {
                                    ?>
                                    <label class="radio-inline mr10">
                                        <?php echo $form->radioButton($model, 'diary_user_mood_id', array('value' => $key, 'uncheckValue' => null)); ?>
                                        <img src="<?php echo $themeUrl; ?>/css/frontend/img/mood_<?php echo $key ?>.png"> </label>
                                <?php } ?>

                            </div>
                        </div>
                        <br>
                        <br><br>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel">
                    <div class="panel-body">
                        <div id="content">
                            <div class="panel">
                                <div class="panel-body pn">
                                    <!--                      <div class="summernote" style="height: 100px;">This is the <b>Summernote</b> Editor...</div>-->
                                    <?php //echo $form->textArea($model,'diary_description',array('class'=>'summernote','rows'=>6, 'cols'=>50));   ?>
                                    <script src="<?php echo Yii::app()->baseUrl . '/ckeditor/ckeditor.js'; ?>"></script>

                                    <div class="">
                                        <?php //echo $form->labelEx($model,'diary_description');   ?>
                                        <?php echo $form->textArea($model, 'diary_description', array('id' => 'editor1', 'style' => 'height:800px')); ?>
                                        <?php echo $form->error($model, 'diary_description'); ?>
                                    </div>



                                    <script type="text/javascript">
                                        CKEDITOR.replace('editor1', {
                                            height: '282px',
                                            filebrowserBrowseUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/browse.php?type=files',
                                            filebrowserImageBrowseUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/browse.php?type=images',
                                            filebrowserFlashBrowseUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/browse.php?type=flash',
                                            filebrowserUploadUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/upload.php?type=files',
                                            filebrowserImageUploadUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/upload.php?type=images',
                                            filebrowserFlashUploadUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/upload.php?type=flash'
                                        });
                                    </script>
                                </div>



                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save', array('class' => 'submit btn bg-purple pull-right')); ?>
                        </div>
                <!--                  <input class="submit btn bg-purple pull-right" type="submit" value="Submit" />-->
                    </div>

                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- End: Content -->

<?php 
//$js = <<< EOD
//    $(docue)
//EOD;
//
//Yii::app()->clientScript->registerScript('_journal_form', $js);
?>

<script>
    $(document).ready(function(){
        $('#Diary_diary_category_id').val() == 'others' ? $('#div_category').removeClass('hidden') : $('#div_category').addClass('hidden');
        $('#Diary_diary_category_id').on('change', function(){
            $(this).val() == 'others' ? $('#div_category').removeClass('hidden') : $('#div_category').addClass('hidden');
        });
    });
</script>