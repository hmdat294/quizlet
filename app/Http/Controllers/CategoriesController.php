<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'title' => 'required',
            'image' => 'required|image|max:2048',
            'status' => 'required'
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('/frontend/img/category/');
            $image->move($destinationPath, $imageName);
            $validatedData['image'] = $imageName;
        }

        // Create the new record
        Category::create($validatedData);

        // Return a response or redirect as needed
        return redirect()->route('categories.index')
            ->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function updateStatus(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->status = $request->input('status');
        $category->save();

        return response()->json([
            'message' => 'Trạng thái danh mục đã được cập nhật thành công.'
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $category = Category::findOrFail($id);
        return view('backend.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Lấy thông tin category cần cập nhật
        $category = Category::findOrFail($id);

        // Validate input data
        $validatedData = $request->validate([
            'title' => 'required',
            'status' => 'required'
        ]);

        // Kiểm tra xem có file ảnh mới được upload không
        if ($request->hasFile('image')) {
            // Validate file ảnh mới
            $validatedData = $request->validate([
                'image' => 'image|max:2048'
            ]);

            // Xóa ảnh cũ
            $oldImagePath = public_path('/frontend/img/category/') . $category->image;
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            // Lưu ảnh mới
            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('/frontend/img/category/');
            $image->move($destinationPath, $imageName);
            $validatedData['image'] = $imageName;
        } else {
            // Sử dụng lại ảnh cũ
            $validatedData['image'] = $category->image;
        }

        // Cập nhật thông tin category
        $category->update($validatedData);

        // Trả về phản hồi hoặc chuyển hướng như cần thiết
        return redirect()->route('categories.index')
            ->with('success', 'Cập nhật chủ đề thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
