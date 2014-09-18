<?php namespace Sukohi\Menco;

class Menco {
	
	public function get($params=array()) {

		$id = (isset($params['id'])) ? $params['id'] : md5(uniqid(rand(),1));
		$url = (isset($params['url'])) ? $params['url'] : '';
		$method = (isset($params['method'])) ? $params['method'] : 'POST';
		$label = (isset($params['label'])) ? $params['label'] : 'submit';
		$class = (isset($params['class'])) ? ' class="'. $params['class'] .'"' : '';
		$message = (isset($params['message'])) ? $params['message'] : 'Are you sure?';

		$form_property = $this->property(array(
			'id' => $id,
			'action' => $url, 
			'method' => $method, 
			'onsubmit' => 'if(!confirm(\''. $message .'\')){return false}'
		));
		
		return '<form'. $form_property .'><button type="submit"'. $class .'>'. $label .'</button></form>';
		
	}
	
	private function property($properties) {
		
		$return = '';
		
		foreach ($properties as $key => $property) {
			
			$return .= ' '. $key .'="'. $property .'"';
			
		}
		
		return $return;
		
	}
	
}

/*** Example

	echo Menco::get(array(
		'id' => 'remove', 
		'label' => 'remove', 
		'url' => URL::to('/'), 
		'class' => 'btn btn-danger', 
		'message' => 'Are you sure?'
	));

	// All of the parameters are skippable.

 ***/