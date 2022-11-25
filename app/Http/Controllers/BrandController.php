<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use DB;
use Illuminate\Support\Str;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::orderBy('id','DESC')->get();
        return view('backend.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'string|required',
            'photo'=>'string|required',
        ]);

        $data=$request->all();
        $slug=Str::slug($request->title);
        if(Brand::where('slug',$slug)->count()>0){
            $slug = $slug ."-". time();
        }
        $data['slug']=$slug;

        Brand::create($data);
        return redirect()->route('brand.index')->with('Banner Created Successfully');
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
       $brand= Brand::where('id',$id)->first();
        return view('backend.brand.edit',compact('brand'));
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
        $request->validate([
            'title'=>'string|required',
            'photo'=>'string|required',
        ]);

        $data=$request->all();
        $slug=Str::slug($request->title);
        if(Brand::where('slug',$slug)->count()>0){
            $slug = $slug ."-". time();
        }
        $data['slug']=$slug;

        Brand::find($id)->update($data);
        return redirect()->route('brand.index')->with('Banner Updated Successfully');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Brand::where('id',$id)->delete();
        return redirect()->back()->with("deleted Successfully");
    }

    function brand_status(Request $request){
        $id = $request->id;
        if($request->mode=='true'){
            Brand::where('id',$id)->update(['status'=>'active']);
        }else{
            Brand::where('id',$id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Status Change Successfully','status'=>true]);
    }
}
