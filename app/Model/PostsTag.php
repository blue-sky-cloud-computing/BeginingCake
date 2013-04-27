<?php
App::uses('AppModel', 'Model');
/**
 * PostsTag Model
 *
 * @property Post $Post
 * @property Tag $Tag
 */
class PostsTag extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'post_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'post_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tag' => array(
			'className' => 'Tag',
			'foreignKey' => 'tag_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
