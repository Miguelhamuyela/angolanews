<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::orderByDesc('id')->get();
        return view('_admin.videos.video.index', compact('videos'));
    }
    public function create()
    {
        return view('_admin.videos.videoCreate.index');
    }
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'title' => 'required|string|max:1000',
            'detach' => 'required|string|max:1000',
            'description' => 'nullable|string|max:1000',
            'url' => 'required|url',
        ], [
            'title.required' => 'O título é obrigátorio.',
            'detach.required' => 'O campo "detach" é obrigátorio.',
            'url.required' => 'A URL é obrigátorio.',
            'url.url' => 'A URL deve ser um link válido.',
            'description.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
        ]);
        Video::create($request->only('title', 'detach', 'description', 'url'));
        return redirect()->route('admin.video.index')->with('success', 'Vídeo criado com sucesso.');
    }
    public function show(Video $video)
    {
        return view('_admin.videos.videoView.index', compact('video'));
    }
    public function edit(Video $video)
    {
        return view('_admin.videos.videoEdit.index', compact('video'));
    }
    public function update(Request $request, Video $video)
    {
        //
        $request->validate([
            'title' => 'required|string|max:1000',
            'detach' => 'required|string|max:1000',
            'description' => 'nullable|string|max:1000',
            'url' => 'required|url',
        ], [
            'title.required' => 'O título é obrigátorio.',
            'detach.required' => 'O campo "detach" é obrigátorio.',
            'url.required' => 'A URL é obrigátorio.',
            'url.url' => 'A URL deve ser um link válido.',
            'description.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
        ]);
        $video->update($request->only('title', 'detach', 'description', 'url'));
        return redirect()->route('admin.video.index')->with('success', 'Vídeo atualizado com sucesso.');    
    }
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('admin.video.index')->with('success', 'Vídeo deletado com sucesso.');
    }
}
