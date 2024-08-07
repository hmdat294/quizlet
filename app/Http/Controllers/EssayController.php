<?php

namespace App\Http\Controllers;

use App\Models\Essay;
use Illuminate\Http\Request;

class EssayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Essay $Essay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Essay $Essay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $blanks = implode(',', $request->dapan);

        // $data = [];

        $essay = Essay::findOrFail($id);
        $flag = $essay->update(['blanks'=>$blanks]);
        if (!$flag) {
            return redirect()->back()->with('error', 'Sửa thông tin thất bại');
        }

        return redirect()->back()->with('success', 'Sửa thông tin thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Essay $Essay)
    {
        $Essay->delete();

        return redirect()->back()->with('success', 'Xoá dữ liệu câu hỏi thành công');
    }
}
