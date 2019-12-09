<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
use Validator;
use Session;
use DB;

class CategoriesController extends Controller
{
        public function index() {
        
        $categories = Category::select('categories.*','cat.name as parent_category')
                                ->where('categories.is_deleted','=',0)
                                ->leftJoin('categories as cat', 'categories.parent_id', '=', 'cat.id')
								->orderby('categories.id','desc')
								->get();
         echo '<pre>'; print_r($categories); die;
        return view('admin.categories.index', compact('categories'));
    }

    public function create() {
        
        $categories = $this->category_drop_down();
        return view('admin.categories.create', compact('categories'));
    }

    public function store(Request $request) {
        
        $input = $request->all();
       
        Category::create($input);
        Session::flash('message', 'Category added successfully');
        Session::flash('alert-class', 'alert-success');
        return redirect('admin/categories');
    }
}
