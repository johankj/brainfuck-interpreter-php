<?php

if ($_SERVER['argc'] == 2) {
	$file = $_SERVER['argv'][1];
	if (file_exists($file)) {
		$code = file_get_contents($file);
	} else if (file_exists(__DIR__.'/'.$file)) {
		$code = file_get_contents(__DIR__.'/'.$file);
	} else {
		exit("Could not open file: $file\n");
	}
	evaluate($code);
} else {
	echo "Usage: php brainfuck.php brainfuck.b\n";
}

function evaluate($codestring) {
	$code = cleanup(str_split($codestring));
	$jumpmap = buildjumpmap($code);
	
    $cells = [0];
	$codeptr = 0;
	$cellptr = 0;
	
	while ($codeptr < count($code)) {
		$command = $code[$codeptr];
		
		switch ($command) {
			case '>':
				$cellptr++;
				if ($cellptr == count($cells)) {
					$cells[] = 0;
				}
				break;
			case '<':
				$cellptr = ($cellptr <= 0 ? 0 : $cellptr-1);
				break;
			case '+':
				$cells[$cellptr] = ($cells[$cellptr] < 255 ? $cells[$cellptr] + 1 : 0);
				break;
			case '-':
				$cells[$cellptr] = ($cells[$cellptr] > 0 ? $cells[$cellptr] - 1 : 255);
				break;
			case '.':
				echo chr($cells[$cellptr]);
				break;
			case ',':
				$c = fgetc(STDIN);
				if (!$c) exit(0);
				$cells[$cellptr] = ord($c);
				break;
			case '[':
				if ($cells[$cellptr] == 0) {
					$codeptr = $jumpmap[$codeptr];
				}
				break;
			case ']':
				if ($cells[$cellptr] != 0) {
					$codeptr = $jumpmap[$codeptr];
				}
				break;
		}
		
		$codeptr++;
	}
	
}

function cleanup($code) {
	return array_values(array_filter($code, function($v) {
		return in_array($v, ['.', ',', '[', ']', '<', '>', '+', '-']);
	}));
}

function buildjumpmap($code) {
	$temp_jumpstack = []; // Array
	$jumpmap = []; // Map (thx PHP)

	foreach ($code as $position => $command) {
		if ($command == "[") {
			$temp_jumpstack[] = $position;
		}
		if ($command == "]") {
			$start = array_pop($temp_jumpstack);
			$jumpmap[$start] = $position;
			$jumpmap[$position] = $start;
		}
	}
	return $jumpmap;
}
