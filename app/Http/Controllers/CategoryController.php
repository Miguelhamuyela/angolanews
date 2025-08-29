<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\TypeCategory;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('typeCategory')->orderByDesc('id')->get();
        //$categories = Category::all();
        return view('_admin.categories.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*  $typeCategories = typeCategory::where('name->name')->get(); */
        $typeCategories = TypeCategory::all();
        return view('_admin.categories.categoryCreate.index', compact('typeCategories'));
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
            /* 'type' => 'required|string|max:50', */
            'description' => 'nullable|string|max:1000',
            'typecategory_id' => 'required|exists:type_categories,id',
        ], [
            'name.required' => 'O nome é obrigátorio.',
            /* 'type.required' => 'O tipo é obrigátorio.', */
            'description.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
            'typecategory_id.required' => 'O tipo de categoria é obrigatória.',
            'typecategory_id.exists' => 'O tipo de categoria selecionada é inválida.',
        ]);
        Category::create([
            'name' => $request->name,
            /* 'type' => $request->type, */
            'description' => $request->description,
            'typecategory_id' => $request->typecategory_id,
        ], [
            'name' => $request->name,
            /* 'type' => $request->type, */
            'description' => $request->description,
            'typecategory_id.required' => 'O tipo de categoria é obrigatória.',
            'typecategory_id.exists' => 'O tipo de categoria selecionada é inválida.',
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Categória criada com sucesso!');
        return redirect()->back()->with('error', 'Ocorreu um erro ao salvar Categória!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //

        return view('_admin.categories.categoryView.index', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        $typeCategories = TypeCategory::all();
        return view('_admin.categories.categoryEdit.index', compact('category', 'typeCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            /* 'slug' => 'required|string|max:255|unique:categories,slug,' . $category->id, */
            'type' => 'required|string|max:50',
            /* 'status' => 'required|in:active,inactive', */
            'description' => 'nullable|string|max:1000',
            'typecategory_id' => 'required|exists:type_categories,id',
        ], [
            'name.required' => 'O nome é obrigátorio.',
            /* 'slug.required' => 'O Slug é obrigátorio.', */
            /* 'slug.unique' => 'O Slug deve ser unico.', */
            'type.required' => 'O tipo é obrigátorio.',
            /* 'status.required' => 'Obrigátorio seleciona um status.', */
            'description.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
            'typecategory_id.required' => 'O tipo de categoria é obrigatória.',
            'typecategory_id.exists' => 'O tipo de categoria selecionada é inválida.',
        ]);

        $category->update([
            'name' => $request->name,
            /* 'slug' => $request->slug, */
            'type' => $request->type,
            /* 'status' => $request->status === 'active' ? 'active' : 'inactive', */
            'description' => $request->description,
            'typecategory_id' => $request->typecategory_id,
        ], [
            'name' => $request->name,
            /* 'slug' => $request->slug, */
            'type' => $request->type,
            /* 'status' => $request->status === 'active' ? 'active' : 'inactive', */
            'description' => $request->description,
            'typecategory_id.required' => 'O tipo de categoria é obrigatória.',
            'typecategory_id.exists' => 'O tipo de categoria selecionada é inválida.',
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Categória atualizada com sucesso!');
        return redirect()->back()->with('error', 'Ocorreu um erro ao atualizar Categória!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category = Category::findOrFail($category->id);

        // Verifica se a categoria está associada a algum artigo
        if (!$category) {
            return redirect()->back()->with('error', 'categoria não encontrada!');
        }


        // Exclui a categoria do banco de dados

        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Categoria apagado com sucesso!');
    }
}
