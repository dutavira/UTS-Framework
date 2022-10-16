<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('todo.index')->with([
            'todos' =>Todo::paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create');
    }

    public function store(Request $request)
    {
        DB::table('todos')->insert([
			'Judul' => $request->Judul,
			'Deskripsi' => $request->Deskripsi,
			'Tenggat' => $request->Tenggat,
			'Status' => $request->Status,
        ]);
        return redirect('/todo')->with('success', 'Berhasil Menambahkan Tugas');
    }

    public function show($id)
    {
        $todos = DB::table('todos')->where('id',$id)->get();
        return view('todo.detail',['todos' => $todos]);
    }

    public function edit($id)
    {
        $todos = DB::table('todos')->where('id',$id)->get();
		return view('todo.edit',['todos' => $todos]);
    }

    public function update(Request $request )
    {
        DB::table('todos')->where('id',$request->id)->update([
			'Judul' => $request->Judul,
			'Deskripsi' => $request->Deskripsi,
			'Tenggat' => $request->Tenggat,
			'Status' => $request->Status,
        ]);
        return redirect('/todo')->with('success', 'Berhasil Mengedit Tugas');
    }

    public function hapus($id)
    {
        DB::table('todos')->where('id',$id)->delete();

        return redirect('/todo')->with('success', 'Berhasil Menghapus Tugas');
    }

    
}
