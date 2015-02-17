<div class="sidebar-menu">
    <?php
    $test = array('/site/cms/view', 'slug' => 'about-us');
    $this->widget('zii.widgets.CMenu', array(
        'activateParents' => true,
        'items' => array(
            array('label' => '<span class="glyphicon glyphicon-info-sign"></span><span class="sidebar-title">About</span>', 'url' => Myclass::getPageUrl(1)),
            array('label' => '<span class="glyphicons glyphicons-book"></span><span class="sidebar-title">Your Personal Diary</span>', 'url' => array('/site/journal/dashboard')),
            array('label' => '<span class="glyphicon glyphicon-random"></span><span class="sidebar-title">Connect with</span>', 'url' => '',
                'linkOptions' => array('class' => 'accordion-toggle'),
                'items' => array(
                    array('label' => '<span class="glyphicons glyphicons glyphicons-user"></span> Life Style Counselor / Psychologist', 'url' => array('/site/default/underdevelopment')),
                    array('label' => '<span class="glyphicons glyphicons-picture"></span> Image Consultant', 'url' => array('/site/default/underdevelopment')),
                ),
            ),
            array('label' => '<span class="glyphicon glyphicon-thumbs-up"></span><span class="sidebar-title">All your needs</span>', 'url' => array('/site/default/underdevelopment')/*Myclass::getPageUrl(4)*/),
            array('label' => '<span class="glyphicon glyphicon-text-width"></span><span class="sidebar-title">Testimonial</span>', 'url' => array('/site/default/underdevelopment')),
            array('label' => '<span class="glyphicon glyphicon-th"></span><span class="sidebar-title">Feedback</span>', 'url' =>array('/site/feedback/create')),
            array('label' => '<span class="glyphicon glyphicon-earphone"></span><span class="sidebar-title">Contact</span>', 'url' =>array('/site/contact/create')),
            
            array('label' => '<span class="glyphicon glyphicon-tasks"></span><span class="sidebar-title">Categories</span>', 'url' => array('/site/category/index')),
            array('label' => '<span class="glyphicons glyphicons-pencil"></span><span class="sidebar-title">Writing Tips</span>', 'url' => array('/site/default/underdevelopment')/*Myclass::getPageUrl(3)*/),
            array('label' => '<span class="glyphicon glyphicon-question-sign"></span><span class="sidebar-title">FAQ</span>', 'url' => array('/site/faq/')),
            array('label' => '<span class="glyphicon glyphicon-lock"></span><span class="sidebar-title">Privacy</span>', 'url' => Myclass::getPageUrl(2)),
            /*          array('label' => '<span class="glyphicons glyphicons-calendar"></span><span class="sidebar-title">Careers</span>', 'url' => array('/site/carriers/')),
              array('label' => '<span class="glyphicons glyphicons-globe"></span><span class="sidebar-title">Contact us</span>', 'url' => array('/site/default/underdevelopment')),
              array('label' => '<span class="glyphicons glyphicons-settings"></span><span class="sidebar-title">All your needs</span>', 'url' => array('/site/default/underdevelopment')),
              array('label' => '<span class="glyphicons glyphicons-pencil"></span><span class="sidebar-title">Tell a Friend</span>', 'url' => array('/site/default/underdevelopment')),
              array('label' => '<span class="glyphicons glyphicons-edit"></span><span class="sidebar-title">Feedback</span>', 'url' => array('/site/default/underdevelopment')),
              array('label' => '<span class="glyphicons glyphicons-inbox"></span><span class="sidebar-title">About us</span>', 'url' => Myclass::getPageUrl(1)),
             */
        ),
        'htmlOptions' => array('class' => 'nav sidebar-nav'),
        'submenuHtmlOptions' => array('class' => 'nav sub-nav'),
        'encodeLabel' => false,
    ));
    ?>

</div>