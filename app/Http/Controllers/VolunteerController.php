<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Volunteer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VolunteerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Volunteer $volunteer)
    {
        

        $id = Auth::user()->id;
        $data = array();
        $volunteers = Volunteer::all()->where('user_id',$id);
        return view('volunteer.index',compact('volunteers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('volunteer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'organization' => '',
            'position' => '',
            'website' => '',
            'startDate' => '',
            'endDate' => '',
            'summary' => 'max:1000',
        ]);

        $volunteer = new Volunteer();
        $volunteer->organization = $request->organization;
        $volunteer->position = $request->position;
        $volunteer->website = $request->website;
        $volunteer->startDate = $request->startDate;
        $volunteer->endDate = $request->endDate;
        $volunteer->summary = $request->summary;
        $volunteer->user_id = Auth::user()->id;
        $volunteer->save();
        return redirect('/volunteer/index')->with('record_added','Slider Successfully Saved');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $volunteer = Volunteer::find($id);
        return view('volunteer.edit',compact('volunteer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[
            'organization' => '',
            'position' => '',
            'website' => '',
            'startDate' => '',
            'endDate' => '',
            'summary' => 'max:1000',
        ]);
        $slug = str::slug($request->organization);
        $volunteer = Volunteer::find($id);
        $volunteer->organization = $request->organization;
        $volunteer->position = $request->position;
        $volunteer->website = $request->website;
        $volunteer->startDate = $request->startDate;
        $volunteer->endDate = $request->endDate;
        $volunteer->summary = $request->summary;
        $volunteer->user_id = Auth::user()->id;
        $volunteer->save();
        return redirect('/volunteer/index')->with('record_updated','Slider Successfully Saved');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $volunteer = Volunteer::find($id);
        if (file_exists('uploads/volunteer/'.$volunteer->image))
        {
            unlink('uploads/volunteer/'.$volunteer->image);
        }
        $volunteer->delete();
        return redirect()->back()->with('record_deleted','volunteer Successfully Deleted');
    }
}