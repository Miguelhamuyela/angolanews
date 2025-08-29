@extends('_admin.layout.main')

@section('title', 'Ngola News - Editar Notícia')

@section('content-newsEdit')
    <!-- [ Craete Form ] -->
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Notícias</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Editar</li>
                </ul>
            </div>
            <div class="page-header-right ms-auto">
                <div class="page-header-right-items">
                    <div class="d-flex d-md-none">
                        <a href="javascript:void(0)" class="page-header-right-close-toggle">
                            <i class="feather-arrow-left me-2"></i>
                            <span>Back</span>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                        {{--  <a href="javascript:void(0);" class="btn btn-light-brand successAlertMessage">
                            <i class="feather-layers me-2"></i>
                            <span>Save as Draft</span>
                        </a> --}}
                        <a href="{{ route('admin.news.index') }}" class="btn btn-danger">
                            <i class="feather-chevron-left me-2"></i>
                            <span>Voltar</span>
                        </a>
                    </div>
                </div>
                <div class="d-md-none d-flex align-items-center">
                    <a href="javascript:void(0)" class="page-header-right-open-toggle">
                        <i class="feather-align-right fs-20"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- [ page-header ] end -->
        <!-- [ Main Content ] start -->
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card stretch stretch-full">
                        <div class="card-body lead-status">
                            <div class="mb-5 d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0 me-4">
                                    <span class="d-block mb-2">Editando Notícia :</span>
                                    <span class="fs-12 fw-normal text-muted text-truncate-1-line">Typically refers to
                                        adding a new potential customer or sales prospect</span>
                                </h5>
                                <a href="{{ route('admin.news.index') }}" class="btn btn-sm btn-light-brand">Listar
                                    Notícia</a>
                            </div>
                            <form action="{{ route('admin.news.update', ['news' => $news]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    {{-- Categoria --}}
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Categoria da Notícia</label>
                                        <select class="form-control" name="category_id" data-select2-selector="category">
                                            <option value="">-- Selecione uma categoria --</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ old('category_id', $news->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- Titlo --}}
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Titlo da Notícia</label>
                                        <input type="text" name="title" class="form-control"
                                            value="{{ old('title', $news->title ?? '') }}"
                                            placeholder="Ex: INFOSI recebe novos estagiarios">
                                    </div>

                                    {{-- Subtitlo --}}
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Subtitlo da Notícia</label>
                                        <input type="text" name="subtitle" class="form-control"
                                            value="{{ old('subtitle', $news->subtitle ?? '') }}"
                                            placeholder="Ex: Estão a desenvolver um projeto">
                                    </div>

                                    {{-- Destaque --}}
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Destaque</label>
                                        <select class="form-control" name="detach">
                                            <option value="{{ old('detach', $news->detach ?? '') }}" disabled selected>
                                                Selecione o destaque
                                            </option>
                                            <option value="normal">Normal</option>
                                            <option value="destaque">Destaque</option>
                                            <option value="urgente">Urgente</option>
                                        </select>
                                    </div>

                                    {{-- Status --}}
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Status</label>
                                        <select class="form-control" name="status" data-select2-selector="status">
                                            <option value="{{ old('status', $news->status ?? '') }}" disabled selected>
                                                Selecione o status
                                            </option>
                                            <option value="draft" data-bg="bg-success"> Rascunho</option>
                                            <option value="published" data-bg="bg-danger"> Publicado</option>
                                            <option value="filed" data-bg="bg-warning"> Arquivado</option>
                                        </select>
                                    </div>

                                    {{-- Image --}}
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Imagem da Notícia</label>
                                        <input type="file" name="image" class="form-control"
                                            value="{{ old('image', $news->image ?? '') }}" accept="image/*">
                                        <small class="text-muted">Formatos suportados: jpg, jpeg, png, gif</small>
                                    </div>

                                    {{-- Date --}}
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Data de Publicação</label>
                                        <input type="date" name="date" class="form-control"
                                            value="{{ old('date', $news->date ?? date('Y-m-d')) }}">
                                    </div>

                                    {{-- @if ($news->image)
                                        <div class="col-lg-4 mb-4">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="remove_image" name="remove_image">
                                                <label class="form-check-label text-danger" for="remove_image">Remover imagem atual</label>
                                            </div>
                                            <div class="mt-2">
                                                <img src="{{ asset('storage/' . $news->image) }}" alt="Imagem atual" class="img-thumbnail" style="max-width: 200px;">
                                            </div>
                                        </div>
                                     @endif --}}

                                    {{-- Descrição --}}
                                    <div class="col-12 mb-4">
                                        <label class="form-label">Texto</label>
                                        <textarea name="description" class="form-control" rows="4" placeholder="Escreve o corpo da notícia...">{{ old('description', $news->description ?? '') }}</textarea>
                                    </div>

                                    {{-- Botão de Enviar --}}
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-danger"> Atualizar
                                            <i class="feather-save ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
@endsection
