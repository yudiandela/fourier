<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Pangkat;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Anggota $anggota)
    {
        $anggotas = $anggota->with('pangkat')
                            ->orderBy('id', 'desc')
                            ->paginate(env('PER_PAGE', 5));

        return view('anggota.index', compact('anggotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Pangkat $pangkat)
    {
        $pangkats = $pangkat->all();
        return view('anggota.create', compact('pangkats'));
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
            'name'    => ['required', 'string', 'min:3', 'max:255'],
            'pangkat' => ['required'],
            'nrp'     => ['required', 'integer', 'unique:anggota,nrp'],
        ]);

        Anggota::create([
            'name'       => $request->name,
            'pangkat_id' => $request->pangkat,
            'nrp'        => $request->nrp,
        ]);

        return redirect()->route('anggota.index')->with('success', 'Berhasil input data baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
        return view('anggota.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit(Pangkat $pangkat, Anggota $anggota)
    {
        $pangkats = $pangkat->all();
        return view('anggota.edit', compact('pangkats', 'anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anggota $anggota)
    {
        $request->validate([
            'name'    => ['required', 'string', 'min:3', 'max:255'],
            'pangkat' => ['required'],
            'nrp'     => ['required', 'integer', 'unique:anggota,nrp,' . $anggota->id],
        ]);

        Anggota::where('id', $anggota->id)->update([
            'name'       => $request->name,
            'pangkat_id' => $request->pangkat,
            'nrp'        => $request->nrp,
        ]);

        return redirect()->route('anggota.index')->with('success', 'Berhasil ubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anggota $anggota)
    {
        $anggota->delete();

        return redirect()->route('anggota.index')->with('success', 'Berhasil menghapus data anggota');
    }
}
