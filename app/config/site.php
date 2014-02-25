<?php
/**
 * site.php
 * 
 * @author: Cyw
 * @email: chenyunwen01@bianfeng.com
 * @created: 2014-2-21 下午2:19:36
 * @logs: 
 *       
 */

return array (
	'title_suffix' => 'Vanilla\'s Toolkit',
	'author' => 'rose1988.c@gmail.com',
	'email' => 'rose1988.c@gmail.com',
	'menu' => array(
		'Home' => array(
			'name' => 'Home',
			'url' => '/',
			'children' => array(

			),
		),
		'Blog' => array(
			'name' => 'Blog',
			'url' => '/',
			'children' => array(
				'技术摘要' => array(
					'name' => '技术摘要',
					'url' => 'javascript:void(0);',
					'children' => array(
						'atchen' => array(
							'name' => 'GitHub ATCHEN',
							'url' => 'http://www.atchan.tk',
							'target' => 'target="_blank"',
							'children' => array(
								
							)
						),
						'duapp' => array(
							'name' => 'Duapp ATCHEN',
							'url' => 'http://atchen.duapp.com',
							'target' => 'target="_blank"',
							'children' => array(
								
							)
						)
					)
				),
				'生活感想' => array(
					'name' => '生活感想',
					'url' => 'javascript:void(0);',
					'children' => array(
						'163' => array(
							'name' => 'Sunshine',
							'url' => 'http://blog.163.com/ayu-wen',
							'target' => 'target="_blank"',
							'children' => array(
								
							)
						),
						'review' => array(
							'name' => 'Season',
							'url' => 'http://www.atchan.tk/review',
							'target' => 'target="_blank"',
							'children' => array(
								
							)
						)
					)
				),
			),
		),
		'Toolkit' => array(
			'name' => 'Toolkit',
			'url' => '/tool',
			'children' => array(
				array(
					'name' => '在线PHP测试 工具',
					'url' => 'javascript:void(0);',
					'children' => array(
					)
				),
				array(
					'name' => 'ICurl 工具',
					'url' => 'javascript:void(0);',
					'children' => array(
					)
				),
				array(
					'name' => 'DB2models 工具',
					'url' => 'javascript:void(0);',
					'children' => array(
					)
				),
			),
		),

	),
	'top-social' => array (
		'weibo' => array (
			'title' => 'weibo',
			'url' => 'http://www.weibo.com',
			'class' => 'fa fa-weibo',
			'show' => true
		),
		'dropbox' => array (
			'title' => 'dropbox',
			'url' => 'https://www.dropbox.com',
			'class' => 'fa fa-dropbox',
			'show' => true
		),
		'twitter' => array (
			'title' => 'twitter',
			'url' => 'https://www.twitter.com',
			'class' => 'fa fa-twitter',
			'show' => true
		),
		'facebook' => array (
			'title' => 'facebook',
			'url' => 'https://www.facebook.com',
			'class' => 'fa fa-facebook',
			'show' => true
		),
		'google-plus' => array (
			'title' => 'google-plus',
			'url' => 'https://www.googleplus.com',
			'class' => 'fa fa-google-plus',
			'show' => true
		),
		'tumblr' => array (
			'title' => 'tumblr',
			'url' => 'https://www.tumblr.com',
			'class' => 'fa fa-tumblr',
			'show' => true
		),
		'github' => array (
			'title' => 'github',
			'url' => 'https://www.tumblr.com',
			'class' => 'fa fa-github',
			'show' => true
		),
		'skype' => array (
			'title' => 'skype',
			'url' => 'https://www.skype.com',
			'class' => 'fa fa-skype',
			'show' => false
		),
	) 
);