@extends('_admin.layout.main')
@section('title', 'Ngola News - Visualizar Autor')
@section('content-authorView')
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Authors</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">View</li>
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
                        <a href="javascript:void(0);" class="btn btn-icon btn-light-brand">
                            <i class="feather-printer"></i>
                        </a>
                        <a href="leads-create.html" class="btn btn-icon btn-light-brand">
                            <i class="feather-edit"></i>
                        </a>
                        <div class="dropdown">
                            <a class="btn btn-icon btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10"
                                data-bs-auto-close="outside">
                                <i class="feather-more-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="feather-user-x me-3"></i>
                                    <span>Make as Lost</span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="feather-delete me-3"></i>
                                    <span>Make as Junk</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="feather-trash-2 me-3"></i>
                                    <span>Delete as Lead</span>
                                </a>
                            </div>
                        </div>

                        <a href="{{ route('admin.author.index') }}" class="btn btn-danger ">
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
        <div class="main-content">
            <div class="col-xxl-10">
                <div class="row">
                    <div class="col">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="mb-4 text-center">
                                    <div class="wd-150 ht-150 mx-auto mb-3 position-relative">
                                        <div class="avatar-image wd-150 ht-150 border border-5 border-gray-3">
                                            <img src="{{ asset('img/authors/' . $author->foto) }}" alt="{{ $author->foto }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="wd-10 ht-10 text-success rounded-circle position-absolute translate-middle"
                                            style="top: 76%; right: 10px">
                                            <i class="bi bi-patch-check-fill"></i>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <a href="javascript:void(0);" class="fs-14 fw-bold d-block">
                                            {{ $author->name }}</a>
                                    </div>
                                    <div class="fs-12 fw-normal text-muted text-center d-flex flex-wrap gap-3 mb-4">
                                        <div
                                            class="flex-fill py-3 px-4 rounded-1 d-none d-sm-block border border-dashed border-gray-5">
                                            <h6 class="fs-15 fw-bolder">Biography</h6>
                                            <p class="fs-12 text-muted mb-0">{{ $author->biography }}</p>
                                        </div>
                                        {{--  <div
                                            class="flex-fill py-3 px-4 rounded-1 d-none d-sm-block border border-dashed border-gray-5">
                                            <h6 class="fs-15 fw-bolder">38.85K</h6>
                                            <p class="fs-12 text-muted mb-0">Following</p>
                                        </div>
                                        <div
                                            class="flex-fill py-3 px-4 rounded-1 d-none d-sm-block border border-dashed border-gray-5">
                                            <h6 class="fs-15 fw-bolder">43.67K</h6>
                                            <p class="fs-12 text-muted mb-0">Engagement</p>
                                        </div> --}}
                                    </div>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    {{-- <li class="hstack justify-content-between mb-4">
                                        <span class="text-muted fw-medium hstack gap-3"><i
                                                class="feather-map-pin"></i>Location</span>
                                        <a href="javascript:void(0);" class="float-end">California, USA</a>
                                    </li>
                                    <li class="hstack justify-content-between mb-4">
                                        <span class="text-muted fw-medium hstack gap-3"><i
                                                class="feather-phone"></i>Phone</span>
                                        <a href="javascript:void(0);" class="float-end">+01 (375) 2589 645</a>
                                    </li>
                                    <li class="hstack justify-content-between mb-0">
                                        <span class="text-muted fw-medium hstack gap-3"><i
                                                class="feather-mail"></i>Email</span>
                                        <a href="javascript:void(0);" class="float-end">alex.della@outlook.com</a>
                                    </li> --}}
                                </ul>
                                <div class="d-flex gap-2 text-center pt-4">
                                    <a href="{{ route('admin.author.delete', ['author' => $author]) }}"
                                        class="w-50 btn btn-light-brand">
                                        <i class="feather-trash-2 me-2"></i>
                                        <span>Deletar</span>
                                    </a>
                                    <a href="{{ route('admin.author.edit', ['author' => $author]) }}"
                                        class="w-50 btn btn-danger">
                                        <i class="feather-edit me-2"></i>
                                        <span>Editar Perfil</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Social</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown"
                                        data-bs-offset="25,25">
                                        <i class="feather feather-more-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather feather-lock me-3"></i>
                                                <span>Only Me</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather feather-globe me-3"></i>
                                                <span>Everyone</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather feather-users me-3"></i>
                                                <span>Anonymous</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather feather-user-check me-3"></i>
                                                <span>People I Follow</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather feather-eye me-3"></i>
                                                <span>People Follow Me</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather feather-settings me-3"></i>
                                                <span>Custom Selections Ever</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-text bg-gray-100">
                                        <i class="feather feather-facebook"></i>
                                    </div>
                                    <span class="mx-2 text-gray-300">/</span>
                                    <a href="https://www.facebook.com/wrapcoders" target="_blank"
                                        class="text-truncate-1-line">https://www.facebook.com/<span
                                            class="text-muted">wrapcoders</span></a>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-text bg-gray-100">
                                        <i class="feather feather-twitter"></i>
                                    </div>
                                    <span class="mx-2 text-gray-300">/</span>
                                    <a href="https://www.twitter.com/wrapcoders" target="_blank"
                                        class="text-truncate-1-line">https://www.twitter.com/<span
                                            class="text-muted">wrapcoders</span></a>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-text bg-gray-100">
                                        <i class="feather feather-github"></i>
                                    </div>
                                    <span class="mx-2 text-gray-300">/</span>
                                    <a href="https://www.github.com/wrapcoders" target="_blank"
                                        class="text-truncate-1-line">https://www.github.com/<span
                                            class="text-muted">wrapcoders</span></a>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-text bg-gray-100">
                                        <i class="feather feather-linkedin"></i>
                                    </div>
                                    <span class="mx-2 text-gray-300">/</span>
                                    <a href="https://www.linkedin.com/wrapcoders" target="_blank"
                                        class="text-truncate-1-line">https://www.linkedin.com/<span
                                            class="text-muted">wrapcoders</span></a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-text bg-gray-100">
                                        <i class="feather feather-youtube"></i>
                                    </div>
                                    <span class="mx-2 text-gray-300">/</span>
                                    <a href="https://www.youtube.com/wrapcoders" target="_blank"
                                        class="text-truncate-1-line">https://www.youtube.com/<span
                                            class="text-muted">wrapcoders</span></a>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="ladda-button zoom-out" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="Refresh Now">
                                <span>Refresh</span>
                                <span class="spinner"></span>
                            </a>
                        </div> --}}
                        {{-- <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h2 class="card-title">Suggestions</h2>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown"
                                        data-bs-offset="25,25">
                                        <i class="feather feather-more-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather feather-lock me-3"></i>
                                                <span>Only Me</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather feather-globe me-3"></i>
                                                <span>Everyone</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather feather-users me-3"></i>
                                                <span>Anonymous</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather feather-user-check me-3"></i>
                                                <span>People I Follow</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather feather-eye me-3"></i>
                                                <span>People Follow Me</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather feather-settings me-3"></i>
                                                <span>Custom Selections Ever</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="avatar-image flex-shrink-0 me-3">
                                        <img src="assets/images/avatar/1.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div>
                                            <h5 class="fs-13 mb-1">Alexandra Della</h5>
                                            <p class="fs-12 text-muted mb-0">Frontend Developer</p>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <a href="javascript:void(0);" class="avatar-text avatar-md"><i
                                                class="feather feather-user-plus align-middle"></i></a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="bg-warning text-white avatar-text">B</div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div>
                                            <h5 class="fs-13 mb-1">Bryan Waters</h5>
                                            <p class="fs-12 text-muted mb-0">UI/UX Designer</p>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <a href="javascript:void(0);" class="avatar-text avatar-md"><i
                                                class="feather feather-user-plus align-middle"></i></a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-4">
                                    <div class="avatar-image flex-shrink-0 me-3">
                                        <img src="assets/images/avatar/2.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div>
                                            <h5 class="fs-13 mb-1">Curtis Green</h5>
                                            <p class="fs-12 text-muted mb-0">Backend Developer</p>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <a href="javascript:void(0);" class="avatar-text avatar-md"><i
                                                class="feather feather-user-plus align-middle"></i></a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="bg-danger text-white avatar-text">E</div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div>
                                            <h5 class="fs-13 mb-1">Edward Andrade</h5>
                                            <p class="fs-12 text-muted mb-0">Fullstack Designer</p>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <a href="javascript:void(0);" class="avatar-text avatar-md"><i
                                                class="feather feather-user-plus align-middle"></i></a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-image flex-shrink-0 me-3">
                                        <img src="assets/images/avatar/3.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div>
                                            <h5 class="fs-13 mb-1">Marianne Audrey</h5>
                                            <p class="fs-12 text-muted mb-0">Fullstack Developer</p>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <a href="javascript:void(0);" class="avatar-text avatar-md"><i
                                                class="feather feather-user-plus align-middle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="ladda-button zoom-out" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="Refresh Now">
                                <span>Refresh</span>
                                <span class="spinner"></span>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
