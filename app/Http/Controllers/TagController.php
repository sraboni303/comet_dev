<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TagController extends Controller
{
    // Index
    public function index(){
        return view('admin.blog.tag.index');
    }

    // Store
    public function store(Request $request){
        Tag::create([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name')),
        ]);
        return true;
    }

    // Get Records
    public function getRecords(){
        $tags = Tag::all();
        $output = '';
        $i = 1;

        foreach ($tags as $tag) {
            $output .= '<tr>';

            $output .= '<td>'. $i .'</td>';
            $output .= '<td>'. $tag->name .'</td>';
            $output .= '<td>'. $tag->slug .'</td>';

            $output .= '<td>
                            <div class="status-toggle">
                                <input type="checkbox" tag_id="'. $tag->id .'" id="status_'.$i.'" class="check tag_check" '. ( $tag->status == true ? "checked" : "") .'>
                                <label for="status_'.$i.'" class="checktoggle">checkbox</label>
                            </div>
                        </td>';

            $output .= '<td>
                            <div class="actions">
                                <a edit_tag_id="'.$tag->id.'" href="#" class="btn btn-sm bg-success-light mr-2 edit_tag_btn">
                                    <i class="fe fe-pencil"></i> Edit
                                </a>
                                <a delete_tag_id="'.$tag->id.'" class="btn btn-sm bg-danger-light delete_tag_btn" href="#">
                                    <i class="fe fe-trash"></i> Delete
                                </a>
                            </div>
                        </td>';

            $output .= '</tr>';

            $i++;
        }
        return $output;
    }


    // Edit
    public function edit($id){
        $get_id = Tag::find($id);

        return [
            'id' => $get_id->id,
            'name' => $get_id->name,
        ];
    }

    // Update
    public function update(Request $request){
        $id = $request->input('get_id');
        $update_id = Tag::find($id);

        $update_id-> name = $request->input('name');
        $update_id->slug = Str::slug($request->input('name'));
        $update_id->update();
    }

    // active Status
    public function active($id){
        $get_id = Tag::find($id);
        $get_id->status = false;
        $get_id->update();
    }

    // Inactive Status
    public function inactive($id){
        $get_id = Tag::find($id);
        $get_id->status = true;
        $get_id->update();
    }



    // Delete
    public function delete($id){
        $delete_id = Tag::find($id);
        $delete_id->delete();
        return true;
    }

}
