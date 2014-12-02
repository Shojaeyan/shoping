<?php

class CategoriesController extends BaseController {

	function __construct(){
		$this->beforeFilter('csrf',array('on' => 'post'));
	}

	public function getIndex()
	{
		return View::make('admin.categories')
			->with('categories',Category::all());
	}

	public function postCreate()
	{
		$validator = Validator::make(Input::all(),Category::$rules);

		if($validator->passes()){
			$category = new Category;
			$category->name =Input::get('name');
			$category->save();

			return Redirect::to('admin/categories')
				->with('flash_success',' Create');
		}

		return Redirect::to('admin/categories')
			->with('flash_error','Error')
			->withErrors($validator)
			->withInput();
	}	

	public function postDelete(){
		$category = Category::find(Input::get('id'));

		if($category){
			$category->delete();
			return Redirect::to('admin/categories')
			->with('flash_success','Done');
		}

	}
}
