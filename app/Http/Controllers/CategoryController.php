<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Index Page View
    public function index(){
        return view('admin.blog.category.index');
    }

    // Storing Data into Database
    public function store(Request $request){
        Category::create([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name')),
        ]);
        return redirect()->route('index.category')->with('message', 'Category added successfully');
    }






    // Show all Data from Database
    public function getRecords(){
        $categories = Category::all();
        $output = '';
        $i = 1;


        foreach($categories as $category){
            $output .= '<tr>';

            $output .= '<td>'. $i .'</td>';
            $output .= '<td>'. $category->name .'</td>';
            $output .= '<td>'. $category->slug .'</td>';
            $output .= '
                        <td>
                            <div class="status-toggle">
                                <input type="checkbox" cat_id="'. $category->id .'" id="status_'.$i.'" class="check cat_check" '. ( $category->active == true ? "checked" : "") .'>
                                <label for="status_'.$i.'" class="checktoggle">checkbox</label>
                            </div>
                        </td>';
            $output .= '<td>
                            <div class="actions">

                                <a edit_cat_id="'. $category->id .'" class="btn btn-sm bg-success-light mr-2 edit_cat_btn" href="#">
                                    <i class="fe fe-pencil"></i> Edit
                                </a>

                                <a delete_cat_id="'. $category->id .'" class="btn btn-sm bg-danger-light delete_cat_btn"  href="#">
                                    <i class="fe fe-trash"></i> Delete
                                </a>



                            </div>
                        </td>';

            $output .= '</tr>';
            $i++;
        }

        return $output;
    }


    // active status
    public function active($id){
        $get_id = Category::find($id);
        $get_id->active = false;
        $get_id->update();
    }

    // inactive status
    public function inactive($id){
        $get_id = Category::find($id);
        $get_id->active = true;
        $get_id->update();
    }




    // Edit
    public function edit($id){
        $get_id = Category::find($id);
        return [
            'id' => $get_id->id,
            'name' => $get_id->name,
        ];
    }


    // Update
    public function update(Request $request){
        $id = $request->input('get_id');
        $get_id = Category::find($id);

        $get_id->name = $request->input('name');
        $get_id->slug = Str::slug($request->input('name'));
        $get_id->update();

    }


    // Delete
    public function delete($id){
        $get_id = Category::find($id);
        $get_id->delete();
        return "deleted";
    }










}
