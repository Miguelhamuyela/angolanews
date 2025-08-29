@extends('_admin.layout.main')

@section('title', 'Ngola News - Criar Autor')

@section('content-authorCreate')
    <!-- [ Craete Form ] -->
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Autor</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Create</li>
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
                        {{-- <a href="javascript:void(0);" class="btn btn-light-brand successAlertMessage">
                            <i class="feather-layers me-2"></i>
                            <span>Save as Draft</span>
                        </a> --}}
                        <a href="{{ route('admin.news.index') }}" class="btn btn-danger">
                            <i class="feather-chevron-left me-2"></i>
                            <span>Visualizar</span>
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
                                    <span class="d-block mb-2">Author Status :</span>
                                    <span class="fs-12 fw-normal text-muted text-truncate-1-line">Typically refers to
                                        adding a new potential customer or sales prospect</span>
                                </h5>
                                <a href="{{ route('admin.author.index') }}" class="btn btn-sm btn-light-brand">Listar
                                    Autor</a>
                            </div>
                            <form action="{{ route('admin.author.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')

                                <div class="row">

                                    {{-- Autor --}}
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Nome do Autor</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ old('name') }}" placeholder="Ex: INFOSI ou João Silva">
                                    </div>

                                    {{-- Image --}}
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Foto de Perfil</label>
                                        <input type="file" name="foto" class="form-control">
                                        <small class="text-muted">Formatos suportados: jpg, jpeg, png, gif</small>
                                    </div>

                                    {{-- Biography --}}
                                    <div class="col-12 mb-4">
                                        <label class="form-label">Biográfia</label>
                                        <textarea name="biography" class="form-control" rows="4" placeholder="Escreve a sua biográfia...">{{ old('biography') }}</textarea>
                                    </div>

                                    {{-- Botão de Enviar --}}
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-danger"> Salvar
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
