<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index()
    {
        $galeries = Galery::orderByDesc('id')->get();
        return view('_admin.galeries.galery.index', compact('galeries'));
    }
    public function create()
    {
        return view('_admin.galeries.galeryCreate.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image',
        ], [
            'title.required' => 'O título é obrigatório.',
            'image.required' => 'A imagem é obrigatória.',
            'image.image' => 'O arquivo deve ser uma imagem válida.',
            'image.max' => 'A imagem não pode ser maior que 2MB.',
        ]);
        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img/galeries'), $imageName);
        }
        Galery::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $imageName,
        ]);
        return redirect()->route('admin.galery.index')->with('success', 'Galeria criada com sucesso.');
    }
    public function show(Galery $galery)
    {
        return view('_admin.galeries.galeryView.index', compact('galery'));
    }
    public function edit(Galery $galery)
    {
        return view('_admin.galeries.galeryEdit.index', compact('galery'));
    }
    public function update(Request $request, Galery $galery)
    {
       // Validação
        $validated = $request->validate([
            'title'      => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'sometimes|image|mimes:jpg,jpeg,png', // Alterado para 'sometimes'
        ], [
            'title.required' => 'O título é obrigatório.',
            'image.image' => 'A image deve ser uma imagem válida.',
            'image.mimes' => 'A image deve ser nos formatos: jpg, jpeg, png.',
        ]);


        // Processar imagem se for enviada
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Remover imagem antiga se existir
            if ($galery->image && file_exists(public_path('img/galerys/' . $galery->image))) {
                unlink(public_path('img/galerys/' . $galery->image));
            }

            $image = $request->file('image');
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $image->move(public_path('img/galerys'), $imageName);
            $validated['image'] = $imageName;
        }

        // Atualizar data de modificação
        $validated['lastModifyedDate'] = now()->format('Y-m-d');

        // Atualizar o galery
        $galery->update($validated);

        return redirect()->route('admin.galery.index')->with('success', 'Autor atualizado com sucesso!');
        return redirect()->back()->with('error', 'Ocorreu um erro ao atualizar Autor!');
    }
    public function destroy(Galery $galery)
    {
        $galery->delete();
        return redirect()->route('admin.galery.index')->with('success', 'Galeria removida com sucesso.');
    }
}
