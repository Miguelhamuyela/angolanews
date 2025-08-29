@extends('_admin.layout.main')
@section('title', 'Ngola News - Visualizar Evento')
@section('content-eventView')
    <div class="nxl-content">
       <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Events</h5>
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
                        <a href="{{ route('admin.event.edit', ['event' => $event])}}" class="btn btn-icon btn-light-brand">
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
                        <a href="{{ route('admin.event.index') }}" class="btn btn-danger ">
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
        <!-- Main Content -->
        <div class="container my-4">
            
            <!-- Event Title and Subtitle -->
            <div class="mb-4">
                <h1 class="event-title">{{ $event->title }}</h1>
                <div class="event-subtitle">{{ $event->subtitle }}</div>
            </div>
            <!-- Event Image -->
            <div class="event-image-container">
                <a href="{{ asset('img/events/' . $event->image) }}">
                    <img src="{{ asset('img/events/' . $event->image) }}" alt="{{ $event->title }}" class="event-image rounded shadow">
                </a>
            </div>
            
            <!-- Event Information -->
            <div class="row">
                <!-- Basic Info -->
                <div class="col-md-6 mb-4">
                    <div class="info-card">
                        <h5><i class="fas fa-info-circle me-2"></i>Detalhes do Evento</h5>
                        
                        {{-- <div class="info-item">
                            <div class="info-label">Autor:</div>
                            <div class="info-value">
                                <span class="author-badge">
                                    <i class="fas fa-user"></i>
                                    {{ $event->author->name ?? 'Autor não Identificado' }}
                                </span>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-label">Categoria:</div>
                            <div class="info-value">
                                <span class="category-badge">
                                    <i class="fas fa-tag"></i>
                                    {{ $event->category->name ?? 'Categoria não Identificada' }}
                                </span>
                            </div>
                        </div> --}}
                        
                        <div class="info-item">
                            <div class="info-label">Estado:</div>
                            <div class="info-value">
                                <span class="badge bg-{{ $event->status == 1 ? 'success' : 'warning' }}">
                                    @if( $event->status == 1)
                                    Ativo
                                    @else
                                    Inativo
                                    @endif
                                </span>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-label">Data do Evento:</div>
                            <div class="info-value">
                                <i class="fas fa-calendar me-1"></i>
                                {{ \Carbon\Carbon::parse($event->event_date)->format('F j, Y') }}
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-label">Última Atualização:</div>
                            <div class="info-value">
                                <i class="fas fa-history me-1"></i>
                                {{ \Carbon\Carbon::parse($event->updated_at)->format('F j, Y \a\t g:i a') }}
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Location Info -->
                <div class="col-md-6 mb-4">
                    <div class="info-card">
                        <h5><i class="fas fa-map-marker-alt me-2"></i>Localização</h5>
                        
                        <div class="location-container">
                            <div class="location-item">
                                <i class="fas fa-globe-americas"></i>
                                <strong>País:</strong> {{ $state->country->name}}
                            </div>
                            
                            <div class="location-item">
                                <i class="fas fa-map"></i>
                                <strong>Província:</strong> {{ $cities->state->name}}
                            </div>
                            
                            <div class="location-item">
                                <i class="fas fa-city"></i>
                                <strong>Distrito:</strong> {{ $cities->name}}
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <!-- Map placeholder - you would integrate a real map here -->
                            <div style="height: 200px; background-color: #e9ecef; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center;">
                                <div class="text-center">
                                    <i class="fas fa-map-marked-alt fa-2x mb-2"></i>
                                    <p>Map of {{ $cities->name }}, {{ $state->country->name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Event Description -->
            <div class="description-container">
                <h5 class="mb-4"><i class="fas fa-align-left me-2"></i>Descrição do Evento</h5>
                <div class="event-description">
                    {!! $event->description !!}
                </div>
            </div>
            
            {{-- <!-- Additional Info -->
            <div class="row mt-4">
                <div class="col-md-4 mb-4">
                    <div class="info-card">
                        <h5><i class="fas fa-users me-2"></i>Participants</h5>
                        <div class="text-center py-4">
                            <i class="fas fa-user-friends fa-3x mb-3 text-secondary"></i>
                            <p>Information about participants would appear here</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="info-card">
                        <h5><i class="fas fa-images me-2"></i>Media</h5>
                        <div class="text-center py-4">
                            <i class="fas fa-camera fa-3x mb-3 text-secondary"></i>
                            <p>Additional photos and videos would appear here</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="info-card">
                        <h5><i class="fas fa-file-alt me-2"></i>Documents</h5>
                        <div class="text-center py-4">
                            <i class="fas fa-file-pdf fa-3x mb-3 text-secondary"></i>
                            <p>Related documents would appear here</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

     <style>
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #6c757d;
            --success-color: #198754;
            --light-bg: #f8f9fa;
            --dark-bg: #212529;
            --border-color: #dee2e6;
        }
        
        .event-header {
            background-color: var(--light-bg);
            border-bottom: 1px solid var(--border-color);
            padding: 1.5rem 0;
        }
        
        .event-image-container {
            height: 400px;
            overflow: hidden;
            border-radius: 0.5rem;
            margin-bottom: 0;
        }
        
        .event-image {
            width: 80%;
            height: 80%;
            object-fit: cover;
            justify-content: center;
            display: block;
            margin: 0 auto;
            border-radius: 0.5rem;
            transition: transform 0.3s ease;
        }
        
        .event-image-container:hover .event-image {
            transform: scale(1.03);
        }
        
        .event-title {
             font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--dark-bg);
            margin: 2rem 2rem;
        }
        
        .event-subtitle {
             font-size: 1.25rem;
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
            margin: 0 1rem;
        }
        
        .info-card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            height: 100%;
        }
        
        .info-card h5 {
            color: var(--primary-color);
            border-bottom: 2px solid var(--border-color);
            padding-bottom: 0.75rem;
            margin-bottom: 1.25rem;
        }
        
        .info-item {
            margin-bottom: 1rem;
            display: flex;
        }
        
        .info-label {
            font-weight: 600;
            min-width: 120px;
            color: var(--secondary-color);
        }
        
        .info-value {
            flex: 1;
        }
        
        .author-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background-color: rgba(13, 110, 253, 0.1);
            color: var(--primary-color);
            padding: 0.5rem 1rem;
            border-radius: 50px;
        }
        
        .category-badge {
            background-color: rgba(25, 135, 84, 0.1);
            color: var(--success-color);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            display: inline-block;
        }
        
        .description-container {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
            padding: 2rem;
            margin-top: 1.5rem;
            font-size: 1.1rem;
            line-height: 1.7;
        }
        
        .location-container {
            display: flex;
            gap: 1rem;
            margin-top: 0.5rem;
        }
        
        .location-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .action-buttons {
            display: flex;
            gap: 0.75rem;
            justify-content: flex-end;s
            margin-top: 1.5rem;
        }
        
        @media (max-width: 768px) {
            .event-title {
                font-size: 2rem;
            }
            
            .event-image-container {
                height: 300px;
            }
            
            .location-container {
                flex-direction: column;
                gap: 0.5rem;
            }
        }
    </style>
@endsection
