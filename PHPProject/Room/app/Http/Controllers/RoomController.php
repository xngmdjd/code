<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::Orderby('id','desc')->paginate(10);
        return view('room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('room.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $number = $request->roomNumber;
        $type = $request->roomType;
        $ava = $request->roomAva;

        $room = new Room();
        $room->RoomNumber = $number;
        $room->RoomType = $type;
        $room->Availability = $ava;

        $room->save();

//        $valiDate = $request -> validate([
//           'ipName' => 'required',
//            'ipEmail' => 'required',
//            'ipAddress'=> 'required',
//            'ipPhone' => 'required|mix:10',
//        ]);
//
//        Employee::create($valiDate);

        return redirect()->route('flower.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $room = Room::find($id);
        return view('room.detail',compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $room = Room::find($id);
        return view('room.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $number = $request['roomNumber'];
        $type = $request['roomType'];
        $ava = $request['roomAva'];

        $data = [
            'RoomNumber' => $number,
            'RoomType' => $type,
            'Availability' => $ava,
        ];
        Room::where('id', $id)->update($data);

        return redirect()->route('room.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Booking::where('RoomID',$id)->delete();
        Room::where('id', $id)->delete();
        return redirect()->route('room.index');
    }
}
