<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\RoomCategory;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function AllRoom()
    {
        $room = Room::all();
        $roomCategory = Room::with('roomCategory')->get();
        return view("admin.room.all_room", compact("room","roomCategory"));
    }
    public function AddRoom()
    {
        $roomCategory = RoomCategory::all();
        return view('admin.room.add_room', compact('roomCategory'));
    }


    public function StoreRoom(Request $request)
    {
        if ($request->hasFile('image')) {
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('room_img'), $imageName);
        }

        $room = new Room();

        $room->room_name = $request->room_name;
        $room->price = $request->price;
        $room->count = $request->count;
        $room->room_category_id = $request->room_category_id;

        $room->image = 'room_img/' . $imageName;

        $room->save();
        
        return redirect()->route('admin.room.all')->with('success', 'Add Thanh Cong');
    }
    public function EditRoom($id)
    {
        $room = Room::findOrFail($id);
        return view('admin.room.all_room', compact('room'));
    }
    public function UpdateRoom(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        $room->update($request->all());
        return redirect()->route('admin.room.all')->with('success', 'Edit Thanh Cong');
    }
    public function DeleteRoom(Request $request, $id)
    {
        Room::findOrFail($id)->delete();
        return redirect()->route('admin.room.all')->with('success', 'Xoa Thanh Cong');
    }

}
