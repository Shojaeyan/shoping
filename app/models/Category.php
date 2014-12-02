<?php

/**
* 
*/
class Category extends Eloquent
{
	protected $fillable = array('name','parent');

	public static  $rules = array('name' => 'required|min:2');

}