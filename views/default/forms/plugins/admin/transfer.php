<?php

echo "<b>" . elgg_echo('plugins:admin:transfer:title') . "</b>";

echo elgg_view('input/userpicker');

echo elgg_view('output/longtext', array(
	'value' => elgg_echo('plugins:admin:transfer:help'),
	'class' => 'elgg-subtext'
));

echo elgg_view('input/hidden', array('name' => 'project_guid', 'value' => $vars['project']->getGUID()));

echo elgg_view('input/submit', array('value' => 'Submit'));