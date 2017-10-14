<?php 
class Helper{
	public static function messageError($params)
	{
		$xhtml = "<div class='alert alert-warning' role='alert'>";
		if(!empty($params)){
			foreach ($params as $value) {
				$xhtml .= "<li>$value</li>";
			}
		}
		$xhtml .= '</div>';
		return $xhtml;
	}
}
?>
