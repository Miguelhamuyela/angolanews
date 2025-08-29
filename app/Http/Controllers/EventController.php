<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Author;
use App\Models\Cities;
use App\Models\Country;
use App\Models\State;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::with('cities')->orderByDesc('id')->get(); // obter todos eventos e também o nome da cidade
        return view('_admin.events.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //trazendo as categorias

        $categories = Category::all();
        //trazendo os autores
        $authors = Author::all();
        //trazendo as cidades
        $locations = Cities::all();

        return view('_admin.events.eventCreate.index', compact('categories', 'authors', 'locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Validação básica
        $request->validate([
            'title' => 'required|string|max:1000',
            'subtitle' => 'required|string|max:10000',
            'description' => 'required|string',
            'status' => 'required|string',
            'event_date' => 'required|date|after_or_equal:today',
            'category_id' => 'required|exists:categories,id',
            'author_id' => 'required|exists:authors,id',
            'location' => 'required|exists:cities,id',
            'image' => 'required|image|mimes:jpg,jpeg,png',
        ], [
            'title.required' => 'O título é obrigatório.',
            'subtitle.required' => 'O subtítulo é obrigatório.',
            'description.required' => 'A descrição é obrigatória.',
            'status.required' => 'O status é obrigatório.',
            'event_date.required' => 'A data do evento é obrigatória.',
            'event_date.after_or_equal' => 'A data do evento deve ser hoje ou uma data futura.',
            'category_id.required' => 'A categoria é obrigatória.',
            'author_id.required' => 'O autor é obrigatório.',
            'location.required' => 'A Loacalizaçao é obrigatória.',
            'image.required' => 'A imagem é obrigatória.',
            'image.image' => 'A imagem deve ser um arquivo de imagem válido.',
            'image.mimes' => 'A imagem deve ser do tipo: jpg, jpeg, png.',
        ]);

        // Upload da imagem
        $imageName = null;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $image->move(public_path('img/events'), $imageName);
        }

        // Criação do evento
        Event::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'status' => $request->status,
            'image' => $imageName,
            'description' => $request->description,
            'event_date' => $request->event_date,
            'category_id' => $request->category_id,
            'author_id' => $request->author_id,
            'location' => $request->location,
        ]);

        return redirect()->route('admin.event.index')->with('success', 'Evento criado com sucesso!');
        return redirect()->back()->with('error', 'Ocorreu um erro ao salvar Evento!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $cities = Cities::with('state')->find($event->location);
        $event = Event::with('author', 'category')->find($event->id);
        $state = State::with('country')->find($cities->state_id);
        return view('_admin.events.eventView.index', compact('event', 'cities', 'state'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
        $categories = Category::all();
        $authors = Author::all();
        $locations = Cities::all();
        return view('_admin.events.eventEdit.index', ['event' => $event], compact('categories', 'authors', 'locations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        // Validação
        $validated = $request->validate([
            'title' => 'required|string|max:1000',
            'subtitle' => 'required|string|max:10000',
            'author_id' => 'required|exists:authors,id',
            'description' => 'required|string',
            'status' => 'required|string',
            'event_date' => 'required|date|after_or_equal:today',
            'category_id' => 'required|exists:categories,id',
            'image' => 'sometimes|image|mimes:jpg,jpeg,png', // Alterado para 'sometimes'
            'location' => 'required|exists:cities,id',
        ], [
            'title.required' => 'O título é obrigatório.',
            'subtitle.required' => 'O subtítulo é obrigatório.',
            'author_id.required' => 'O autor é obrigatório.',
            'description.required' => 'A descrição é obrigatória.',
            'status.required' => 'O status é obrigatório.',
            'event_date.required' => 'A data do evento é obrigatória.',
            'event_date.after_or_equal' => 'A data do evento deve ser hoje ou uma data futura.',
            'category_id.required' => 'A categoria é obrigatória.',
            'location.required' => 'A Localização é obrigatória.',
            'image.image' => 'A imagem deve ser um arquivo de imagem válido.',
            'image.mimes' => 'A imagem deve ser do tipo: jpg, jpeg, png.',
            'image.sometimes' => 'A imagem é opcional, mas se fornecida, deve ser uma imagem válida.',
        ]);

        // Processar imagem se for enviada
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Remover imagem antiga se existir
            if ($event->image && file_exists(public_path('img/events/' . $event->image))) {
                unlink(public_path('img/events/' . $event->image));
            }

            $image = $request->file('image');
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $image->move(public_path('img/events'), $imageName);
            $validated['image'] = $imageName;
        }

        // Atualizar o evento
        $event->update($validated);

        return redirect()->route('admin.event.index')->with('success', 'Evento atualizado com sucesso!');
        return redirect()->back()->with('error', 'Ocorreu um erro ao atualizar o evento!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.event.index')->with('msg', 'Envento apagado com sucesso!');
    }
}
