<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Repositories\CategoryRepository;

class CategoriesController extends Controller
{
	protected $category;

	public function __construct(Category $category){
		$this->category = new CategoryRepository($category);
	}

	public function index(){
		$categories = Category::orderBy('created_at', 'desc')->get();

		return view('home', compact('categories'));
	}


	public function create(Request $request){
		$this->category->create($request->only(['title', 'description', 'photo']));

		return redirect()->back();
	}

	public function delete($id){
		$this->category->delete($id);

		return redirect()->home();
	}


    public function itemList($id){
	    $items = Category::find($id)->items()->get();

		return view('categories.item-list', compact('items'));
    }

}
