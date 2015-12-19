<?php 
/**
 * Copyright (c) 2015 SCHENCK Simon
 * 
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) SCHENCK Simon
 * @since         0.0.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 *
 */

return [
	'default' => [
		'namespace' => 'PHPMyMongoAdmin',
		'action'    => 'index'
	],
	'paginator'=>[
		'limit' => 1,
		'page'  => 1,
		'count' => 1,
		'range' => 1,
		'pages' => 1,
	],
	'request'    => ['historyLimit'=>10],
	'autoloader' => [
		'Entity'     => 'Model',
		'Collection' => 'Model',
		'Behavior'   => 'Model',
	],
	'PHPMyMongoAdmin'  => ['version'=>'0.0.1'],
	'Module'=>['PHPMyMongoAdmin'],
];
