<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Depoimento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class DepoimentoController extends Controller
{
    private $depoimento;

    public function __construct(Depoimento $depoimento)
    {
        $this->depoimento = $depoimento;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $depoimentos = $this->depoimento->paginate(10);

        return view('admin.depoimentos.index', compact('depoimentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.depoimentos.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * validação do depoimento 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     * 
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $imagem = $request->file('imagem')->store('depoimentos', 'public');
        $data['imagem'] = $imagem;

        // Redimensionando a imagem
        $imagem = Image::make(public_path("storage/{$imagem}"))->fit(150, 150);
        $imagem->save();

        $this->depoimento->create($data);

        flash('Depoimento criado com sucesso!')->success();
        return redirect()->route('admin.depoimentos.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($depoimento)
    {
        $depoimento = $this->depoimento->findOrFail($depoimento);
        return view('admin.depoimentos.edit', compact('depoimento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $depoimento)
    {
        $data = $request->all();
        
        $depoimento = $this->depoimento->find($depoimento);

        if ($request->hasFile('imagem')) {

            if (Storage::exists($depoimento->imagem)) {
                Storage::delete($depoimento->imagem);
            }

            $imagem = $request->file('imagem')->store('depoimentos', 'public');
            $data['imagem'] = $imagem;

            // Redimensionando a imagem
            $imagem = Image::make(public_path("storage/{$imagem}"))->fit(150, 150);
            $imagem->save();
        }

        $depoimento->update($data);

        flash('Depoimento atualizado com sucesso!')->success();
        return redirect()->route('admin.depoimentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;

        $depoimento = $this->depoimento->find($id);

        if ($depoimento->delete() == TRUE) {

            if (Storage::exists($depoimento->imagem)) {
                Storage::delete($depoimento->imagem);
            }

            flash('Depoimento removido com sucesso!')->success();
            return redirect()->route('admin.depoimentos.index');

        }
        
    }
}
