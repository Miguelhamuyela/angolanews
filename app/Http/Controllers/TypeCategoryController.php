<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeCategory;
use App\Models\Category;

class TypeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // This method can be used to return a list of type categories.
        $typeCategories = TypeCategory::orderByDesc('id')->get();
        return view('_admin.typeCategories.typeCategory.index', compact('typeCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // This method can be used to return a view for creating a new type category.
        return view('_admin.typeCategories.typeCategoryCreate.index');
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
        $request->validate([
            'name' => 'required|string|max:255',
            /* 'slug' => 'required|string|max:255|unique:type_categories,slug', */
            /* 'type' => 'required|string|max:50', */
            /* 'status' => 'required|in:active,inactive', */
            'description' => 'nullable|string|max:1000',
        ], [
            'name.required' => 'O nome é obrigátorio.',
            /* 'slug.required' => 'O Slug é obrigátorio.', */
            /* 'slug.unique' => 'O Slug deve ser unico.', */
            /* 'type.required' => 'O tipo é obrigátorio.', */
            /* 'status.required' => 'Obrigátorio seleciona um status.', */
            'description.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
        ]);

        TypeCategory::create([
            'name' => $request->name,
            /* 'slug' => $request->slug, */
            /* 'type' => $request->type, */
            /* 'status' => $request->status === 'active' ? 'active' : 'inactive', */
            'description' => $request->description,
        ]);

        return redirect()->route('admin.typeCategories.index')->with('success', 'Tipo de categoria criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(typeCategory $typeCategory)
    {
        //
        // This method can be used to show a specific type category.
        return view('_admin.typeCategories.typeCategoryView.index', ['typeCategory' => $typeCategory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeCategory $typeCategory)
    {
        //
        // This method can be used to return a view for editing a specific type category.
        return view('_admin.typeCategories.typeCategoryEdit.index', ['typeCategory' => $typeCategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeCategory $typeCategory)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            /* 'slug' => 'required|string|max:255|unique:type_categories,slug,' . $typeCategory->id, */
            /* 'type' => 'required|string|max:50', */
            /* 'status' => 'required|in:active,inactive', */
            'description' => 'nullable|string|max:1000',
        ], [
            'name.required' => 'O nome é obrigátorio.',
            /* 'slug.required' => 'O Slug é obrigátorio.', */
            /* 'slug.unique' => 'O Slug deve ser unico.', */
            /* 'type.required' => 'O tipo é obrigátorio.', */
            /* 'status.required' => 'Obrigátorio seleciona um status.', */
            'description.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
        ]);

        $typeCategory->update([
            'name' => $request->name,
            /* 'slug' => $request->slug, */
            /* 'type' => $request->type, */
            /* 'status' => $request->status === 'active' ? 'active' : 'inactive', */
            'description' => $request->description,
        ]);

        return redirect()->route('admin.typeCategories.index')->with('success', 'Tipo de categoria atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeCategory $typeCategory)
    {
        //
        $typeCategory->delete();
        return redirect()->route('admin.typeCategories.index')->with('success', 'Tipo de categoria excluído com sucesso!');
    }
}
