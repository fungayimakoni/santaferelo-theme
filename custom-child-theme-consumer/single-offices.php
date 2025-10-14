<?php
if(get_field('contents') && get_field('new_template')) {
	include_once('templates/single-offices.php');}
else {
	include_once('templates/old/single-offices.php');}