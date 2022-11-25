<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Str;
use DB;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderBy('id','DESC')->get();
        return view('backend.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'title'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'string|required',
            'status'=>'nullable|in:active,inactive',
            'condition'=>'nullable|in:banner,promo',
        ]);

        $data= $request->all();
        $slug = Str::slug($request->input('title'));
        $slug_count = Banner::where('slug',$slug)->count();
        if($slug_count>0){
            $slug .= time();
        }
        $data['slug'] = $slug;

        $status = Banner::create($data);
        if($status){
            return redirect()->route('banner.index')->with('success','Banner Created Successfully');
        }else{
            return redirect()->back()->with('error','Somthing Want Wrong');
        }
        $notification = array('messege'=>"Category Inserted Successfully",'alert-type'=>'success');
        return Redirect()->back()->with($notification);
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
        DB::table('banners')->where('id',$id)->delete();
        return redirect()->back();
    }

    public function banner_status(Request $request){
        if($request->mode=='true'){
            DB::table('banners')->where('id',$request->id)->update(['status'=>'active']);
        }else{
            DB::table('banners')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        $notification = array('messege'=>"Category Inserted Successfully",'alert-type'=>'success');
        return response()->json(['msg'=>'Status Change Successfully','status'=>true]);
    }
}
