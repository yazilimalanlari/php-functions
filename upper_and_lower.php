<?php


function upper_and_lower($str, $option = true){
	$TR_characters = [
		'ç' => 'Ç',
		'ğ' => 'Ğ',
		'i' => 'İ',
		'ı' => 'I',
		'ö' => 'Ö',
		'ş' => 'Ş',
		'ü' => 'Ü'
	];
	$upper = array_values($TR_characters);
	$lower = array_keys($TR_characters);
	if($option == true){
		return strtoupper(str_replace($lower, $upper, $str));
	}else{
		return strtolower(str_replace($upper, $lower, $str));
	}
}

$text = "Çarşamba";
echo upper_and_lower($text, true);
