<?php
/* @var $this FaqController */
/* @var $dataProvider CActiveDataProvider */
$baseUrl = Yii::app()->baseUrl;
$themeUrl = Yii::app()->theme->baseUrl;
?>
<section id="content_wrapper">
    <div id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active"><a href="<?php echo $baseUrl;?>/site/faq">FAQ</a></li>
                <li class="crumb-link"><a href="<?php echo $baseUrl;?>">Home</a></li>
                <li class="crumb-trail">FAQ</li>
            </ol>
        </div>
    </div>
    <div id="content">
        <div class="row">
            <div class="col-md-10 center-column">
                <div class="panel faq-panel mt50">
                    <div class="panel-heading"> <span class="panel-title"> <span class="glyphicon"><img src="<?php echo $themeUrl; ?>/css/frontend/img/faq-img.png" width="17" height="17"></span> Faq </span> </div>
                    <div class="panel-body pn">
                        <div class="row table-layout">                
                            <div class="col-abt col-xs-12 va-m p60">                  
                                <div class="panel-group accordion mta25" id="accordion1">
                                    
<?php
echo $data->answer;
?>
                                    <div class="panel">
                                        <div class="panel-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accord1_1">
                                                <div class="accordion-toggle-icon pull-left"> <i class="fa fa-minus-square-o text-light4"></i> <i class="fa fa-plus-square-o text-purple2"></i> </div>
                                                Lorem Ipsum </a> </div>
                                        <div id="accord1_1" class="panel-collapse collapse in">
                                            <div class="panel-body"> Lorem Ipsum cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-heading"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accord1_2">
                                                <div class="accordion-toggle-icon pull-left"> <i class="fa fa-minus-square-o text-light4"></i> <i class="fa fa-plus-square-o text-purple2"></i> </div>
                                                Lorem Ipsum </a> </div>
                                        <div id="accord1_2" class="panel-collapse collapse">
                                            <div class="panel-body"> Lorem Ipsum cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-heading"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accord1_3">
                                                <div class="accordion-toggle-icon pull-left"> <i class="fa fa-minus-square-o text-light4"></i> <i class="fa fa-plus-square-o text-purple2"></i> </div>
                                                Lorem Ipsum </a> </div>
                                        <div id="accord1_3" class="panel-collapse collapse">
                                            <div class="panel-body"> Lorem Ipsum cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>