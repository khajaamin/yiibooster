<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

$this->widget(
'booster.widgets.TbButton',
array(
'label' => 'Top popover',
'context' => 'primary',
'htmlOptions' => array(
'data-title' => 'A Title',
'data-placement' => 'top',
'data-content' => "And here's some amazing content. It's very engaging. right?",
'data-toggle' => 'popover'
),
)
);
echo '&nbsp;';
$this->widget(
'booster.widgets.TbButton',
array(
'label' => 'Left popover',
'context' => 'danger',
'htmlOptions' => array(
'data-title' => 'A Title',
'data-placement' => 'left',
'data-content' => "And here's some amazing content. It's very engaging. right?",
'data-toggle' => 'popover'
),
)
);