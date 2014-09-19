<?php namespace Sukohi\Menco;

class Menco {
	
	public function get($params=array(), $data=array()) {

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
		$hidden = $this->hiddenTag($data);
		
		return '<form'. $form_property .'>'. $hidden .'<button type="submit"'. $class .'>'. $label .'</button></form>';
		
	}
	
	private function property($properties) {
		
		$return = '';
		
		foreach ($properties as $key => $property) {
			
			$return .= ' '. $key .'="'. $property .'"';
			
		}
		
		return $return;
		
	}
	
	private function hiddenTag($data) {
		
		$return = '';
		
		foreach ($data as $name => $value) {
			
			$return .= '<input type="hidden" name="'. $name .'" value="'. $value .'">';
			
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
	), array(
	    'data' => 'data', 
	    'data2' => 'data2', 
	    'data3' => 'data3'
	));

	// All of the parameters are skippable.

 ***/