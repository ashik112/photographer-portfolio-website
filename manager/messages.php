<?php
	if(basename($_SERVER['PHP_SELF']) == basename(__FILE__)){
		die("<center><h3>Forbidden...</h3><h4>Sorry, Direct access not allowed<h4></center>");
	}
	$success_message = '<ul class="tickets metro"><li class="ticket blue"><span class="content">
						<span class="status">Status: [ Complete ]</span></li></ul>';
	$fail_message = 	'<ul class="tickets metro"><li class="ticket red"><span class="content">
						<span class="status">Status: [ Fail ]</span></li></ul>';
	$over_message = 	'<ul class="tickets metro"><li class="ticket red"><span class="content">
						<span class="status">Status: [ Already  Inserted ]</span></li></ul>';
	$invalid_message = 	'<ul class="tickets metro"><li class="ticket red"><span class="content">
	<span class="status">Status: [ Invalid Data ]</span></li></ul>';
	$invalid_type = 	'<ul class="tickets metro"><li class="ticket red"><span class="content">
	<span class="status">Status: [ Not an image ]</span></li></ul>';
	$invalid_Size = 	'<ul class="tickets metro"><li class="ticket red"><span class="content">
	<span class="status">Status: [ Invalid Size ]</span></li></ul>';
	$Success_fade =	'<div class="fade in"> 	
						<a style="margin-bottom: -20px; padding-top: 8px;" href="#" class="close" data-dismiss="alert" aria-label="close">×</a>									 
					<ul class="tickets metro"><li class="ticket blue"><span class="content">
						<span class="status">Status: [ Complete ]</span></li></ul>
					</div>';
	$fail_fade	=	'<div class="fade in"> 					
					<a style="margin-bottom: -20px; padding-top: 8px;" href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
					<ul class="tickets metro"><li class="ticket red"><span class="content">
						<span class="status">Status: [ Fail ]</span></li></ul>
					</div>';
	$over_fade	=	'<div class="fade in"> 					
					<a style="margin-bottom: -20px; padding-top: 8px;" href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
					<ul class="tickets metro"><li class="ticket red"><span class="content">
						<span class="status">Status: [ Already Inserted ]</span></li></ul>
					</div>';
	$invalid_fade	=	'<div class="fade in"> 					
					<a style="margin-bottom: -20px; padding-top: 8px;" href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
					<ul class="tickets metro"><li class="ticket red"><span class="content">
						<span class="status">Status: [ Invalid Data ]</span></li></ul>
					</div>';
					
	$limit_fade  = '<div class="fade in"> 					
					<a style="margin-bottom: -20px; padding-top: 8px;" href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
					<ul class="tickets metro"><li class="ticket red"><span class="content">
						<span class="status">Status: [ Max 10 ]</span></li></ul>
					</div>';
?>	