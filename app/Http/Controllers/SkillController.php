<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Skill;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SkillController extends Controller
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
    public function index(Skill $skill)
    {
        

        $id = Auth::user()->id;
        $data = array();
        $skills = Skill::all()->where('user_id',$id);
        return view('skill.index',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skill.create');
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
            'skill' => '',
        ]);

        $skill = new Skill();
        $skill->skill = $request->skill;
        $skill->user_id = Auth::user()->id;
        $skill->save();
        return redirect('/skill/index')->with('record_added','Slider Successfully Saved');
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
        $skill = Skill::find($id);
        return view('skill.edit',compact('skill'));
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
            'skill' => '',
            ]);
        $slug = str::slug($request->skill);
        $skill = Skill::find($id);
        $skill->skill = $request->skill;
        $skill->user_id = Auth::user()->id;
        $skill->save();
        return redirect('/skill/index')->with('record_updated','Slider Successfully Saved');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::find($id);
        if (file_exists('uploads/skill/'.$skill->image))
        {
            unlink('uploads/skill/'.$skill->image);
        }
        $skill->delete();
        return redirect()->back()->with('record_deleted','skill Successfully Deleted');
    }
}