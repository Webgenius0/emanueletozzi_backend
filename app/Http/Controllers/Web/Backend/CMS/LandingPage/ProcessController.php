<?php

namespace App\Http\Controllers\Web\Backend\CMS\LandingPage;

use App\Helpers\Helper;
use App\Models\Process;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class ProcessController extends Controller
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
        $data = Process::latest();
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
                                  <a href="' . route('process.edit',  $data->id) . '" type="button" class="btn btn-success text-white" title="Edit">
                                  <i class="bi bi-pencil"></i>
                                  </a>
                                  <a href="#" onclick="showDeleteConfirm(' . $data->id . ')" type="button" class="btn btn-danger text-white" title="Delete">
                                  <i class="bi bi-trash"></i>
                                </a>
                                </div>';
                })
                ->addColumn('image', function ($data) {
                    $url = asset($data->feature_image);
                    return '<img src="' . $url . '" alt="image" width="50px" height="50px" style="margin-left:20px;">';
                })
                ->rawColumns(['status', 'action','image'])
                ->make(true);
        }

        return view('backend.layouts.process.index');
    }


    /**
     * Show the form for creating a new clinical dynamic page.
     */
    public function create()
    {
        return view('backend.layouts.process.create');
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
            'feature_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $data = new Process();
        $data->title = $request->title;
        $data->description = $request->description;

        // Image store in local
        $featuredImage = Helper::fileUpload( $request->file( 'feature_image' ), 'process', $request->feature_image );
        $data->feature_image = $featuredImage;
        $data->save();

        return redirect()->route('process.index')->with('t-success', 'Data Created Successfully');
    }

    /**
     * Display the specified process to edit and update.
     *
     * @param  string  $id
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */

    public function edit($id)
    {
        return view('backend.layouts.process.edit',['data' => Process::find($id)]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'feature_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $data = Process::find($id);
        $data->title = $request->title;
        $data->description = $request->description;

        // Check Image Update
        if ( $request->feature_image != null ) {

            // Remove old image
            if ( File::exists( $data->feature_image ) ) {
                File::delete( $data->feature_image );
            }
            // Image store in local
            $featuredImage = Helper::fileUpload( $request->file( 'feature_image' ), 'process', $request->feature_image);
            $data->feature_image = $featuredImage;
        }
        $data->save();

        return redirect()->route('process.index')->with('t-success', 'Data Updated Successfully');
    }
    /**
     * Delete the specified dynamic page from the process database.
     *
     * @param int $id
     */
    public function destroy($id)
    {

        $data = Process::find($id);
        if (file_exists($data->feature_image)) {
            unlink($data->feature_image);
        }
        $data->delete();

        return response()->json([
            'success' => true,
            'message'   => 'Deleted successfully.',
        ]);
    }


    /**
     * Update the status of a process.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function status($id)
    {
        $data = Process::findOrFail($id);
        //        return $data;


        if ($data->status == 'active') {
            $data->status = 'inactive';
            $data->save();
            return response()->json([
                'success' => false,
                'message' => 'Unpublished Successfully.',
                'data'    => $data,
            ]);
        } else {
            $data->status = 'active';
            $data->save();
            return response()->json([
                'success' => true,
                'message' => 'Published Successfully.',
                'data'    => $data,
            ]);
        }
    }
}
