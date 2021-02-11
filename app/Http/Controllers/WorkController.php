<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Work;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WorkController extends Controller
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
    public function index(Work $work)
    {
        

        $id = Auth::user()->id;
        $data = array();
        $works = Work::all()->where('user_id',$id);
        return view('work.index',compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('work.create');
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
            'company' => '',
            'position' => '',
            'website' => '',
            'startDate' => '',
            'endDate' => '',
            'summary' => 'max:1000',
        ]);

        $work = new Work();
        $work->company = $request->company;
        $work->position = $request->position;
        $work->website = $request->website;
        $work->startDate = $request->startDate;
        $work->endDate = $request->endDate;
        $work->summary = $request->summary;
        $work->user_id = Auth::user()->id;
        $work->save();
        return redirect('/work/index')->with('record_added','Slider Successfully Saved');
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
        $work = Work::find($id);
        return view('work.edit',compact('work'));
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
            'company' => '',
            'position' => '',
            'website' => '',
            'startDate' => '',
            'endDate' => '',
            'summary' => 'max:1000',
        ]);
        $slug = str::slug($request->company);
        $work = Work::find($id);
        $work->company = $request->company;
        $work->position = $request->position;
        $work->website = $request->website;
        $work->startDate = $request->startDate;
        $work->endDate = $request->endDate;
        $work->summary = $request->summary;
        $work->user_id = Auth::user()->id;
        $work->save();
        return redirect('/work/index')->with('record_updated','Slider Successfully Saved');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Work::find($id);
        if (file_exists('uploads/work/'.$work->image))
        {
            unlink('uploads/work/'.$work->image);
        }
        $work->delete();
        return redirect()->back()->with('record_deleted','work Successfully Deleted');
    }
}