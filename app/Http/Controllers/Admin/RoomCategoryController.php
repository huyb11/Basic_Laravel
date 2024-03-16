<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RoomCategory;
use Illuminate\Http\Request;

class RoomCategoryController extends Controller
{
    public function AllRoomCategory()
    {
        $roomCategory = RoomCategory::all();
        return view('admin.roomcate.all_room_category', compact("roomCategory"));

    }
    public function AddRoomCategory()
    {
        return view('admin.roomcate.add_room_category');
    }


    public function StoreRoomCategory(Request $request)
    {
        RoomCategory::create($request->all());
        return redirect()->route('admin.room_category.all')->with('success', 'Successfully Created');
    }
    public function EditRoomCategory($id)
    {
        $roomCategory = RoomCategory::findOrFail($id);
        return view('admin.roomcate.edit_room_category', compact('roomCategory'));
    }
    public function UpdateRoomCategory(Request $request, $id)
    {
        $roomCategory = RoomCategory::findOrFail($id);
        $roomCategory->update($request->all());
        return redirect()->route('admin.room_category.all')->with('success', 'Successfully Created');
    }
    public function DeleteRoomCategory(Request $request, $id)
    {
        $roomCategory = RoomCategory::findOrFail($id);
        $roomCategory->delete();
        return redirect()->route('admin.room_category.all')->with('success', 'Deleted Successfully ');
    }
}

