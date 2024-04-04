<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flowers = Flower::Orderby('id','desc')->paginate(10);
        return view('flower.index', compact('flowers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('flower.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $flower = new Flower();
        $flower->name = $request->input('name');
        $flower->description = $request->input('description');
        $filename = 'cat4.jpg'; //OIP.jpg
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ex = $file->getClientOriginalExtension(); //lấy phần mở rộng (phần sau dấu .png,....)
            $filename = time().'.'.$ex;
            $file->move('uploads/image',$filename);
            $flower->image_url = $filename;
        }
        else{
            $flower->image_url = $filename;
        }
        $flower->save();
        return redirect()->route('flower.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $flower = Flower::with('regions')->find($id);
        $region ='';
        foreach ($flower->regions as $reg){
            $region=$region.$reg->region_name.', ';
        }
        return view('flower.detail', compact('flower','region'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $flower = Flower::with('regions')->find($id);
        $region ='';
        foreach ($flower->regions as $reg){
            $region=$region.$reg->region_name.', ';
        }
        return view('flower.edit', compact('flower','region'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $flower = Flower::find($id);
        $name = $request['name'];
        $de = $request['description'];
        $image = $flower->image_url;
        if($request->hasFile('image')){
            $file = $request->file('image');
            //echo $file;
            $ex = $file->getClientOriginalExtension(); //lấy phần mở rộng (phần sau dấu .png,....)
            $filename = time().'.'.$ex;
            $file->move('uploads/image',$filename);
            $image = $filename;
        }

        $rename = $request['location'];

        $dataF = [
            'name' => $name,
            'description' => $de,
            'image_url' => $image,
        ];
        $dataR = [
            'region_name' => $rename,
        ];


        Flower::where('id', $id)->update($dataF);
        if (Region::where('flower_id',$id)->get()->isEmpty()){
            $region = new Region();
            $region->flower_id=$id;
            $region->region_name=$rename;
            $region->save();
        } else {
            Region::where('flower_id', $id)->update($dataR);

        }


        return redirect()->route('flower.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $regionsDeleted = Region::where('flower_id', $id)->delete();
        $flowerDeleted = Flower::where('id', $id)->delete();

        if ($regionsDeleted || $flowerDeleted) {
            return redirect()->route('flower.index')->with('success', 'Deletion successful.');
        } else {
            return redirect()->route('flower.index')->with('error', 'Deletion failed.');
        }
    }
}
