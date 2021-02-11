<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Education;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EducationController extends Controller
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
    public function index(Education $education)
    {
        

        $id = Auth::user()->id;
        $data = array();
        $educations = Education::all()->where('user_id',$id);
        return view('education.index',compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education.create');
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
            'institution' => '',
            'studyType' => '',
            'gpa' => '',
            'startDate' => '',
            'endDate' => '',
        ]);

        $education = new Education();
        $education->institution = $request->institution;
        $education->studyType = $request->studyType;
        $education->gpa = $request->gpa;
        $education->startDate = $request->startDate;
        $education->endDate = $request->endDate;
        $education->user_id = Auth::user()->id;
        $education->save();
        return redirect('/education/index')->with('record_added','Slider Successfully Saved');
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
        $education = Education::find($id);
        return view('education.edit',compact('education'));
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
            'institution' => '',
            'studyType' => '',
            'gpa' => '',
            'startDate' => '',
            'endDate' => '',
        ]);
        $slug = str::slug($request->institution);
        $education = Education::find($id);
        $education->institution = $request->institution;
        $education->studyType = $request->studyType;
        $education->gpa = $request->gpa;
        $education->startDate = $request->startDate;
        $education->endDate = $request->endDate;
        $education->user_id = Auth::user()->id;
        $education->save();
        return redirect('/education/index')->with('record_updated','Slider Successfully Saved');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education = Education::find($id);
        if (file_exists('uploads/education/'.$education->image))
        {
            unlink('uploads/education/'.$education->image);
        }
        $education->delete();
        return redirect()->back()->with('record_deleted','education Successfully Deleted');
    }
}