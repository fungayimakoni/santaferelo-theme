<?php 
/*
Template Name: Test Email
*/

get_header();
wp_mail( "oyic@outlook.com", "sample email", "this is a sample email", ['cc: christopher.alberto@santaferelo.com','cc: vladimircampos81@gmail.com'], [] );
get_footer();
