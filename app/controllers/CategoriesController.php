<?php

class CategoriesController extends BaseController {

	function __construct(){
		$this->beforeFilter('csrf',array('on' => 'post'));
	}

	public function getIndex()
	{
		$categories = Category::where('del' ,'=','0')->paginate(1);
		return View::make('admin.categories')
			->with('categories',$categories);
	}

	public function postCreate()
	{
		$validator = Validator::make(Input::all(),Category::$rules);

		if($validator->passes()){
			$category = new Category;
			$category->name =Input::get('name');
			$category->parent = Input::get('parent');
			$category->save();

			return Redirect::to('admin/categories')
				->with('flash_success',' Create');
		}

		return Redirect::to('admin/categories')
			->withErrors($validator)
			->withInput();
	}	

	public function postEdit($id){
		$cat = Category::find($id);
		return View::make('admin.categories')->with('cat',$cat);
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
