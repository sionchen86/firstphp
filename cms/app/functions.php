<?php

function e($text) {
	return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
	// added security to protect against script attacks
}

?>