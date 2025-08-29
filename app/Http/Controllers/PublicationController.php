<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::orderByDesc('id')->get();
        return view('_admin.publications.publication.index', compact('publications'));
    }
    public function create()
    {
        return view('_admin.publications.publicationCreate.index');
    }

    public function store(Request $request)
    {
        // Validação básica
        $request->validate([
            'title' => 'required|string|max:1000',
            'date' => 'required|date|after_or_equal:today',
            'file' => 'required|file|mimes:pdf,doc,docx',
            'cover' => 'nullable|image|mimes:jpg,jpeg,png',
        ], [
            'title.required' => 'O título é obrigatório.',
            'file.required' => 'O arquivo é obrigatório.',
            'date.required' => 'A data é obrigatória.',
            'cover.image' => 'A capa deve ser um arquivo de imagem válido.',
            'cover.mimes' => 'A capa deve ser do tipo: jpg, jpeg, png.',
        ]);

        // Upload da imagem
        $imageName = null;
        if ($request->hasFile('cover') && $request->file('cover')->isValid()) {
            $image = $request->file('cover');
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $image->move(public_path('img/publication'), $imageName);
        }

        //upload do arquivo
        $fileName = null;
        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $file = $request->file('file');
            $extension = $file->extension();
            $fileName = md5($file->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $file->move(public_path('files/publication'), $fileName);
        }

        // Criação do evento
        Publication::create([
            'title' => $request->title,
            'date' => $request->date,
            'file' => $fileName,
            'cover' => $imageName,
           
        ]);

        return redirect()->route('admin.publication.index')->with('success', 'Publicação criada com sucesso!');
        return redirect()->back()->with('error', 'Ocorreu um erro ao salvar a Publicação!');
    }


    public function show(Publication $publication)
    {
        return view('_admin.publications.publicationView.index', compact('publication'));
    }

    public function edit(Publication $publication)
    {
        return view('_admin.publications.publicationEdit.index', compact('publication'));
    }

    public function update(Request $request, Publication $publication)
    {
        // Validação básica
        $request->validate([
            'title' => 'required|string|max:1000',
            'date' => 'required|date|after_or_equal:today',
            'file' => 'nullable|file|mimes:pdf,doc,docx',
            'cover' => 'nullable|image|mimes:jpg,jpeg,png',
        ], [
            'title.required' => 'O título é obrigatório.',
            'file.required' => 'O arquivo é obrigatório.',
            'date.required' => 'A data é obrigatória.',
            'cover.required' => 'A capa é obrigatória.',
            'cover.image' => 'A capa deve ser um arquivo de imagem válido.',
            'cover.mimes' => 'A capa deve ser do tipo: jpg, jpeg, png.',
        ]);

        // Upload da imagem
        if ($request->hasFile('cover') && $request->file('cover')->isValid()) {
            $image = $request->file('cover');
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $image->move(public_path('img/publication'), $imageName);
            // Deleta a imagem antiga se existir
            if ($publication->cover && file_exists(public_path('img/publication/' . $publication->cover))) {
                unlink(public_path('img/publication/' . $publication->cover));
            }
            $publication->cover = $imageName;
        }

        //upload do arquivo
        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $file = $request->file('file');
            $extension = $file->extension();
            $fileName = md5($file->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $file->move(public_path('files/publication'), $fileName);
            // Deleta o arquivo antigo se existir
            if ($publication->file && file_exists(public_path('files/publication/' . $publication->file))) {
                unlink(public_path('files/publication/' . $publication->file));
            }
            $publication->file = $fileName;
        }

        // Atualização da publicação
        $publication->title = $request->title;
        $publication->date = $request->date;
        $publication->save();
        return redirect()->route('admin.publication.index')->with('success', 'Publicação atualizada com sucesso!');
    }

    public function destroy(Publication $publication)
    {
        $publication->delete();
        return redirect()->route('admin.publication.index')->with('success', 'Publicação excluída com sucesso!');
    }

}