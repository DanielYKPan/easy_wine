<?php

/*
|--------------------------------------------------------------------------
| HTML and From Macros
|--------------------------------------------------------------------------
|
| Here is the place have all custom HTML Macros and Form Macros
|
*/



HTML::macro('action_image', function($actionName,
									$parameters=array(),
									$link_attributes=array(),
									$img,
									$atr,
									$img_attributes=array(),
									$absolute = true,
									$secure = null)
{
	$url = URL::action($actionName, $parameters, $absolute);
	$url = URL::to($url, array(), $secure);
	$attr = HTML::attributes($link_attributes);
	$image = HTML::image($img, $atr, $img_attributes, $secure);

	return '<a href="'.$url.'"'.$attr.'>'.$image.'</a>';
});

HTML::macro('linkAction_span', function($actionName, 
										$title = null, 
										$parameters=array(), 
										$attributes=array(), 
										$position=null)
{
	$url = URL::action($actionName, $parameters).$position;
	$url = URL::to($url, array(), null);
	$attr = HTML::attributes($attributes);
	if (is_null($title) || $title === false) $title = $url;
	$enti = HTML::entities($title);

	return '<a href="'.$url.'"'.$attr.'>'.'<span>'.$enti.'</span>'.'</a>'; 
});