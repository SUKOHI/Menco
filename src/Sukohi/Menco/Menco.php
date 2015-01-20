<?php namespace Sukohi\Menco;

class Menco {
	
	public function get($params=array(), $data=array()) {

		$id = (isset($params['id'])) ? 'menco_'. $params['id'] : 'menco_'. md5(uniqid(rand(),1));
		$url = (isset($params['url'])) ? $params['url'] : '';
		$method = (isset($params['method'])) ? strtoupper($params['method']) : 'POST';
		$label = (isset($params['label'])) ? $params['label'] : 'submit';
		$class = (isset($params['class'])) ? ' class="'. $params['class'] .'" ' : '';
		$message = (isset($params['message'])) ? $params['message'] : 'Are you sure?';

		if($method == 'PUT' || $method == 'DELETE') {
				
			$data += array('_method' => $method);
			$method = 'POST';
				
		}
		
		$form_property = $this->property(array(
			'id' => $id,
			'action' => $url, 
			'method' => $method
		));

		$hidden = $this->hiddenTag($data);
		
		$propertyies = '';
		unset(
				$params['id'], 
				$params['url'], 
				$params['method'], 
				$params['label'], 
				$params['class'], 
				$params['message']
		);
		
		if(count($params) > 0) {
			
			foreach ($params as $property_key => $property_value) {
				
				$propertyies .= $property_key .'="'. $property_value .'" ';
				
			}
			
		} 
		
		return '<form'. $form_property .' style="display:none;">'. $hidden .'</form>'.
					'<a href="#" '. $class . $propertyies .'onclick="if(confirm(\''. $message .'\')){ document.getElementById(\''. $id .'\').submit(); } return false;">'. $label .'</a>';

		
		$hidden = $this->hiddenTag($data);
		
		return '<form'. $form_property .' style="display:none;">'. $hidden .'</form>'.
					'<a href="#" '. $class .'onclick="if(confirm(\''. $message .'\')){ document.getElementById(\''. $id .'\').submit(); } return false;">'. $label .'</a>';

		
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