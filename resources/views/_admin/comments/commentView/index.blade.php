@extends('_admin.layout.main')
@section('title', 'Ngola News - Visualizar Comentário')
@section('content-categoryView')

    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Category</h5>
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
                        {{--  <a href="javascript:void(0);" class="btn btn-light-brand" data-bs-toggle="offcanvas" data-bs-target="#proposalSent">
                        <i class="feather-layers me-2"></i>
                        <span>Save & Send</span>
                    </a> --}}
                        <a href="{{ route('admin.comments.index') }}" class="btn btn-danger">
                            <i class="feather-chevron-left me-2"></i>
                            Voltar</a>
                    </div>
                </div>
                <div class="d-md-none d-flex align-items-center">
                    <a href="javascript:void(0)" class="page-header-right-open-toggle">
                        <i class="feather-align-right fs-20"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                    <div class="card card-body general-info">
                        <div class="mb-4 d-flex align-items-center justify-content-between">
                            <h5 class="fw-bold mb-0">
                                <span class="d-block mb-2">General Information :</span>
                                <span class="fs-12 fw-normal text-muted d-block">General information for your
                                    Comment</span>
                            </h5>
                            <a href="{{ route('admin.comments.index') }}" class="btn btn-sm btn-light-brand">List
                                Comment</a>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">ID</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $comment->id }}</span>
                                </a>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Texto do Comentário</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $comment->text_comment }}</span>
                                </a>
                            </div>
                        </div>
                        {{-- <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Slug</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $category->slug }}</span>
                                </a>
                            </div>
                        </div> --}}
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Autor do Comentário</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $comment->author_comment }}</span>
                                </a>
                            </div>
                        </div>
                        {{-- <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Status</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $category->status }}</span>
                                </a>
                            </div>
                        </div> --}}
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Data do Comentário</div>
                            <div class="col-lg-10 hstack gap-1">{{ $comment->date }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
