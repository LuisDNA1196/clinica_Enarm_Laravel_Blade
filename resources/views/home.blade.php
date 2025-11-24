@extends('layouts.app')

@section('content')
    <div class="hero mb-4">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h1 class="display-6 hero-title mb-3">
                    Tu plataforma de estudio para el ENARM
                </h1>
                <p class="hero-subtitle mb-4">
                    Revisa rápidamente los temas clave, consulta recursos en la nube y crea tarjetas tipo Anki
                    para repasar conceptos de alta frecuencia en el examen.
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('topics.index') }}" class="btn btn-primary btn-lg">
                        <i class="bi bi-journal-text me-2"></i> Ver temas
                    </a>
                    <a href="{{ route('flashcards.index') }}" class="btn btn-outline-primary btn-lg">
                        <i class="bi bi-card-checklist me-2"></i> Practicar tarjetas
                    </a>
                </div>
            </div>

            <div class="col-lg-5 mt-4 mt-lg-0">
                <div class="card card-soft p-3">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-primary-subtle p-3 me-3">
                            <i class="bi bi-graph-up-arrow fs-4 text-primary"></i>
                        </div>
                        <div>
                            <p class="mb-0 fw-semibold">Resumen rápido</p>

                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-6 mb-3">
                            <h2 class="mb-0">{{ $topicsCount }}</h2>
                            <small class="text-muted">Temas</small>
                        </div>
                        <div class="col-6 mb-3">
                            <h2 class="mb-0">{{ $flashcardsCount }}</h2>
                            <small class="text-muted">Tarjetas</small>
                        </div>
                    </div>

                    <hr>

                    <ul class="list-unstyled small mb-0">
                        <li class="d-flex align-items-center mb-1">
                            <i class="bi bi-check-circle text-success me-2"></i>
                            Organización por especialidad
                        </li>
                        <li class="d-flex align-items-center mb-1">
                            <i class="bi bi-check-circle text-success me-2"></i>
                            Recursos externos en la nube
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="bi bi-check-circle text-success me-2"></i>
                            Tarjetas listas para exportar a Anki
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<div class="mt-5">
    <h2 class="h5 mb-3">
        <i class="bi bi-play-circle text-primary me-2"></i>
        Video destacado de estudio
    </h2>

    <div class="card card-soft p-3">
        <div class="ratio ratio-16x9">
            <iframe
                src="https://www.youtube.com/embed/VIDEO_ID"
                title="Clase ENARM - Introducción"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
            ></iframe>
        </div>

        <p class="mt-3 text-muted small">
            Este video complementa los temas clave del ENARM y te ayuda a reforzar conceptos de alta frecuencia.
        </p>
    </div>
</div>

    <h2 class="h5 mb-3 mt-1">¿Cómo usar Clínica ENARM?</h2>
    <div class="row g-3">
        <div class="col-md-4">
            <div class="card card-soft-outline h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-journal-medical me-2 text-primary"></i> Explora los temas
                    </h5>
                    <p class="card-text text-muted">
                        Revisa los temas de Cardiología, Nefrología, Neumología y más, con resúmenes enfocados
                        en puntos clave para el examen.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card card-soft-outline h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-card-heading me-2 text-primary"></i> Crea tus flashcards
                    </h5>
                    <p class="card-text text-muted">
                        Genera tarjetas tipo Anki ligadas a cada subtema para repasar rápidamente
                        diagnósticos, criterios y tratamientos.
                    </p>
                </div>
            </div>
        </div>
         <div class="col-md-4">
        <div class="card card-soft-outline h-100">
            <div class="card-body">
                <h5 class="card-title">
                    <i class="bi bi-cloud-arrow-up me-2 text-primary"></i>
                    Servicios en la nube
                </h5>
                <p class="card-text text-muted">
                    Consulta cómo se despliega la aplicación en un servicio de la nube
                    utilizando Docker y Render, incluyendo la base de datos y el flujo
                    de despliegue desde GitHub.
                </p>
                <a href="{{ route('cloud-services') }}" class="btn btn-sm btn-outline-primary">
                    Ver detalles del despliegue
                </a>
            </div>
        </div>
    </div>
</div>
    </div>
@endsection
