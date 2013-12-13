<?php 
class LeXMLParser {


	function printmeh($lexml){
		if (phpversion() >= 5) {
			echo '<div>', PHP_EOL;
			foreach (simplexml_load_string($lexml) as $more) {
				foreach ($more as $evenmore) {
					echo '<div class="box">';
					foreach ($evenmore as $key=>$value) {
				echo  '<p><em>' ,$key, '</em> : ', $value, '</p>', PHP_EOL;
				}
			echo '</div>';
				}
			}
			echo '</div>', PHP_EOL;
		}
		echo '<br style="clear:both;">';
		if (phpversion() >= 5) {
			echo '<div>', PHP_EOL;
			foreach (simplexml_load_string($lexml) as $evenmore) {

					echo '<div class="box">';
					foreach ($evenmore as $key=>$value) {
				echo  '<p><em>' ,$key, '</em> : ', $value, '</p>', PHP_EOL;
				}
			echo '</div>';
				
			}
			echo '</div>', PHP_EOL;
		}
	}

	function lotofprintmeh($array){
		foreach ($array as $url) {
			$lexml = file_get_contents($url);
			$this->printmeh($lexml);
		}
	}
}
?>