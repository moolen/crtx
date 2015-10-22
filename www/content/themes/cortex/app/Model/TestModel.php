<?php

namespace App\Model;

use Cortex\Model\Acf\Field;
use Cortex\Model\Acf\Post;

class TestModel{
	
	protected $field;
	protected $post;
	protected $nestedFlex = array();

	public function __construct(Field $field)
	{
		$this->field = $field;
		$this->post = $field->getPost();
	}
}