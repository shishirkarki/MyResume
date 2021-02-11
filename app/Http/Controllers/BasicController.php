<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Basic;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BasicController extends Controller
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
    public function index(Basic $basic)
    {
        // $id = Auth::user()->id;
        // $data = array();
        // $data = Certificate::all()->where('user_id',$id);
        // return view('certificate.index',compact('data'));
        // $basics = DB::table('basics')->latest('id')->first();
        

        $id = Auth::user()->id;
        $data = array();
        $basics = Basic::all()->where('user_id',$id);
        return view('basic.index',compact('basics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('basic.create');
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
            'name' => 'required',
            'label' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'website' => 'required',
            'country' => 'required',
            'address' => 'required',
            'city' => 'required',
            'post_code' => 'required',
            'summary' => 'max:1000',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);


        $image = $request->file('image');
        $slug = str::slug($request->name);
        // $slider = Slider::find($id);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. 
            $image->getClientOriginalExtension();
            if (!file_exists('uploads/basic'))
            {
                mkdir('uploads/basic', 0777 , true);
            }
            $image->move('uploads/basic',$imagename);
        }else {
            $imagename = 'dafault.png';
        }
        $basic = new Basic();
        $basic->name = $request->name;
        $basic->label = $request->label;
        $basic->email = $request->email;
        $basic->phone = $request->phone;
        $basic->website = $request->website;
        $basic->country = $request->country;
        $basic->address = $request->address;
        $basic->city = $request->city;
        $basic->post_code = $request->post_code;
        $basic->summary = $request->summary;
        $basic->image = $imagename;
        $basic->user_id = Auth::user()->id;
        $basic->save();
        return redirect('/basic/index')->with('record_added','Slider Successfully Saved');
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
        $basic = Basic::find($id);
        return view('basic.edit',compact('basic'));
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
            'name' => 'required',
            'label' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'website' => 'required',
            'country' => 'required',
            'address' => 'required',
            'city' => 'required',
            'post_code' => 'required',
            'summary' => 'max:1000',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);


        $image = $request->file('image');
        $slug = str::slug($request->name);
        $basic = Basic::find($id);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. 
            $image->getClientOriginalExtension();
            if (!file_exists('uploads/basic'))
            {
                mkdir('uploads/basic', 0777 , true);
            }
            $image->move('uploads/basic',$imagename);
        }else {
            $imagename = $basic->image;
        }
        
        $basic->name = $request->name;
        $basic->label = $request->label;
        $basic->email = $request->email;
        $basic->phone = $request->phone;
        $basic->website = $request->website;
        $basic->country = $request->country;
        $basic->address = $request->address;
        $basic->city = $request->city;
        $basic->post_code = $request->post_code;
        $basic->summary = $request->summary;
        $basic->image = $imagename;
        $basic->user_id = Auth::user()->id;
        $basic->save();
        return redirect('/basic/index')->with('record_updated','Slider Successfully Saved');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $basic = Basic::find($id);
        if (file_exists('uploads/basic/'.$basic->image))
        {
            unlink('uploads/basic/'.$basic->image);
        }
        $basic->delete();
        return redirect()->back()->with('record_deleted','basic Successfully Deleted');
    }
}