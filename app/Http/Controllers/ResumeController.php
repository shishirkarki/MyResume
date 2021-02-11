<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basic;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Volunteer;
use App\Models\Work;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;
class ResumeController extends Controller
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
    public function index()
    {
        $id = Auth::user()->id;
        $data = array();
        $basics = Basic::all()->where('user_id',$id);
        $skills = Skill::all()->where('user_id',$id);
        $volunteers = Volunteer::all()->where('user_id',$id);
        $works = Work::all()->where('user_id',$id);
        $educations = Education::all()->where('user_id',$id);
        return view('resume.index',compact('basics','skills','volunteers','works','educations'));
    }
    

    public function download()
    {
        $id = Auth::user()->id;
        $data= array();

        $basics = Basic::all()->where('user_id',$id);
        $skills = Skill::all()->where('user_id',$id);
        $volunteers = Volunteer::all()->where('user_id',$id);
        $works = Work::all()->where('user_id',$id);
        $educations = Education::all()->where('user_id',$id);


        PDF::setOptions(['dpi' => 500, 'defaultFont' => 'sans-serif']);
        // $pdf = \PDF::loadView('download.pdf', ['data' => $some_data])->setPaper('a4', 'landscape');
        $pdf = PDF::loadView('resume.index',compact('basics','skills','volunteers','works','educations'))->setPaper('a4');
        return $pdf->download('MyResume.pdf');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
