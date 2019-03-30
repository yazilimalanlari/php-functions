<?php

function sefLink($str){

	$characters_to_change = [
		'ç' => 'c',
		'Ç' => 'C',
		'ü' => 'u',
		'Ü' => 'U',
		'ş' => 's',
		'Ş' => 'S',
		'ö' => 'o',
		'Ö' => 'O',
		'ı' => 'i',
		'İ' => 'i',
		'ğ' => 'g',
		'Ğ' => 'G',
		' ' => '-',
		'_' => '-'
	];
	$changeStr = str_replace(array_keys($characters_to_change), array_values($characters_to_change), $str);
	$changeStr = strtolower($changeStr);

	$allowed_characters = range('a', 'z');
	array_push($allowed_characters, '-');

	$newStr = "";
	foreach(str_split($changeStr, 1) as $letter){
		if(in_array($letter, $allowed_characters))
			$newStr .= $letter;
	}


	return $newStr;
}

$text = "Çamaşır Makinası$#²|~ deneme yazısı";
echo sefLink($text);
