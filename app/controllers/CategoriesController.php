<?php

class CategoriesController extends BaseController {

	function __construct(){
		$this->beforeFilter('csrf',array('on' => 'post'));
	}

	public function showCategories()
	{
		return View::make('admin.categories')
			->with('categories',Category::all());
	}

	public function postCreate()
	{
		$validator = Vallidator::make(Input::all(),Category::$rules);

		if($validator->passses()){
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

	public function postCreate(){
		$category = Category::find(Input::get('id'));

		if($category){
			$category->delete();
			return 'sss';
		}

	}
}
