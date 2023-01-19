<?php

namespace App\Http\Controllers;

use App\Models\CreateBook;
use App\Models\CreateCategory;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function user()
    {
        $registrasi = User::all();
        return view('admin.user', compact('registrasi'));
    }

    public function book()
    {
        $data = CreateCategory::all();
        $book = CreateBook::all();

        return view('admin.book', compact('data', 'book'));
    }

    public function edit($id)
    {
        $edit = CreateBook::where('id', $id)->first();
        $data = CreateCategory::all();

        return view('admin.edit', compact('edit', 'data'));
    }

    public function destroy($id)
    {
        CreateBook::where('id', $id)->delete();

        return view('admin.dashboard')->with('successDelete', 'Berhasil menghapus data!');
    }

    public function destroy_category($id)
    {
        CreateCategory::where('id', $id)->delete();

        return view('admin.dashboard')->with('successDelete', 'Berhasil menghapus data!');
    }

    public function destroy_user($id)
    {
        User::where('id', $id)->delete();

        return view('admin.dashboard')->with('successDelete', 'Berhasil menghapus data!');
    }

    public function category()
    {
        $data = CreateCategory::all();
        return view('admin.category', compact('data'));
    }




    public function createBook(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'writer' => 'required',
            'publisher' => 'required',
            'no_isbn' => 'required',
            'synopsis' => 'required',
            'image' => 'image|file|max:3000',
            'image_pdf' => 'mimes:pdf',
        ]);
        CreateBook::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'writer' => $request->writer,
            'publisher' => $request->publisher,
            'no_isbn' => $request->no_isbn,
            'synopsis' => $request->synopsis,
            'image' => $request->file('image')->store('post-image'),
            'image_pdf' => $request->file('image_pdf')->store('upload-pdf'),
        ]);
        return redirect()->back()->with('addBook', 'Berhasil membuat');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'writer' => 'required',
            'publisher' => 'required',
            'no_isbn' => 'required',
            'synopsis' => 'required',
            'image' => 'image|file|max:3000',
            'image_pdf' => 'mimes:pdf',
        ]);
        CreateBook::where('id', $id)->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'writer' => $request->writer,
            'publisher' => $request->publisher,
            'no_isbn' => $request->no_isbn,
            'synopsis' => $request->synopsis,
            'image' => $request->file('image')->store('post-image'),
            'image_pdf' => $request->file('pdf')->store('upload-pdf'),
        ]);
        return redirect('/book-admin')->with('addBook', 'Berhasil membuat');
    }

    public function createCategory(Request $request)
    {
        $request->validate([
            'category' => 'required',
        ]);
        CreateCategory::create([
            'category' => $request->category,
        ]);
        return redirect()->back()->with('addCategory', 'Berhasil membuat Category');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
}
