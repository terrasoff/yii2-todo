<?php

return [
    // REST rules
    'POST <controller:\w+>'            => '<controller>/create',
	'PUT <controller:\w+>/<id:\d+>'    => '<controller>/update',
	'GET <controller:\w+>/<id:\d+>'    => '<controller>/view',
	'DELETE <controller:\w+>/<id:\d+>' => '<controller>/delete',

    '/'=>'site/index',
    '<controller:\pL+>/<action:\pL+>' => '<controller>/<action>',
    '<module:\pL+>/<controller:\pL+>/<action:\pL+>' => '<module>/<controller>/<action>',
    '<action:\pL+>'=>'<action>',
];