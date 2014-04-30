<?php
function getRequiredValue($name) {
	if(!isset($_POST[$name]) || $_POST[$name] == "") {
		echo "please enter the required field : " . $name;
	} else {
		return $_POST[$name];
	}
}

function getOptionalValue($name) {
	if(isset($_POST[$name])) {
		return $_POST[$name];
	}
}

function getOption($optionName) {
	if(isset($_POST[$optionName])) {
		$optionValue = 1;
	} else {
		$optionValue = 0;
	}
	return $optionValue;
}