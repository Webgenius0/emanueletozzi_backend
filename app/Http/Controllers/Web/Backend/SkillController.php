<?php

namespace App\Http\Controllers\Web\Backend;

use App\Models\Skill;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class SkillController extends Controller
{
     /**
     * Displays the list of process.
     *
     * This method handles AJAX requests to fetch and return clinical data
     * in a format suitable for DataTables, including columns for publish
     * products. If not an AJAX request, it returns the main view for process.
     *
     * @param Request $request The incoming HTTP request.
     */
    public function index(Request $request)
    {
        $data = Skill::with('expert')->get();

        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($data) {
                    $status = ' <div class="form-check form-switch" style="margin-left:10px;">';
                    $status .= ' <input onclick="showStatusChangeAlert(' . $data->id . ')" type="checkbox" class="form-check-input" style="width: 2em;" id="customSwitch' . $data->id . '" getAreaid="' . $data->id . '" name="status"';
                    if ($data->status == "active") {
                        $status .= "checked";
                    }
                    $status .= '><label for="customSwitch' . $data->id . '" class="form-check-label" for="customSwitch"></label></div>';

                    return $status;
                })
                ->addColumn('action', function ($data) {

                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                  <a href="' . route('skills.edit',  $data->id) . '" type="button" class="btn btn-success text-white" title="Edit">
                                  <i class="bi bi-pencil"></i>
                                  </a>
                                  <a href="#" onclick="showDeleteConfirm(' . $data->id . ')" type="button" class="btn btn-danger text-white" title="Delete">
                                  <i class="bi bi-trash"></i>
                                </a>
                                </div>';
                })
                ->addColumn('image', function ($data) {
                    $url = asset($data->image_url);
                    return '<img src="' . $url . '" alt="image" width="50px" height="50px" style="margin-left:20px;">';
                })
                ->rawColumns(['status', 'action','image'])
                ->make(true);
        }

        return view('backend.layouts.tools.index');
    }


    /**
     * Show the form for creating a new clinical dynamic page.
     */
    public function create()
    {
        return view('backend.layouts.tools.create');
    }



    /**
     * Store a newly created clinical page in the database.
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'excel_file' => 'required|mimes:xls,xlsx',
        ]);


        $data = new Skill();

        $data->description = $request->description;

        $data->save();

        return redirect()->route('skills.index')->with('t-success', 'Data Created Successfully');
    }

    /**
     * Display the specified process to edit and update.
     *
     * @param  string  $id
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */

    public function edit($id)
    {
        return view('backend.layouts.tools.edit',['data' => Skill::find($id)]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'excel_file' => 'nullable|mimes:xls,xlsx',
        ]);


        $data = Skill::find($id);
        $data->title = $request->title;
        $data->description = $request->description;

        $data->save();

        return redirect()->route('skills.index')->with('t-success', 'Data Updated Successfully');
    }
    /**
     * Delete the specified dynamic page from the tools database.
     *
     * @param int $id
     */
    public function destroy($id)
    {

        $data = Skill::find($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message'   => 'Deleted successfully.',
        ]);
    }


}
