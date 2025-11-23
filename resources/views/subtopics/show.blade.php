@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('topics.index') }}">Temas ENARM</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('topics.show', $subtopic->topic) }}">{{ $subtopic->topic->name }}</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                {{ $subtopic->title }}
            </li>
        </ol>
    </nav>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">{{ $subtopic->title }}</h1>

        <a
            href="{{ route('flashcards.create', ['topic_id' => $subtopic->topic_id, 'subtopic_id' => $subtopic->id]) }}"
            class="btn btn-primary"
        >
            + Crear tarjeta Anki de este subtema
        </a>
    </div>

    @if($subtopic->summary)
        <p class="lead">{{ $subtopic->summary }}</p>
    @endif

    @if($subtopic->content)
        <div class="mb-4">
            {!! nl2br(e($subtopic->content)) !!}
        </div>
    @endif

    <h2 class="h4 mt-4 mb-3">Recursos multimedia</h2>

    @if($subtopic->resources->isEmpty())
        <div class="alert alert-info">
            Aún no hay recursos registrados para este subtema.
        </div>
    @else
        <div class="row">
            @foreach($subtopic->resources as $resource)
                <div class="col-md-6 mb-3">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title mb-0">{{ $resource->title }}</h5>
                                <span class="badge bg-secondary text-uppercase">
                                    {{ $resource->type }}
                                </span>
                            </div>

                            @if($resource->description)
                                <p class="card-text">
                                    {{ \Illuminate\Support\Str::limit($resource->description, 150) }}
                                </p>
                            @endif

                            <a href="{{ $resource->url }}" target="_blank" rel="noopener"
                               class="btn btn-sm btn-outline-primary mt-auto">
                                Abrir recurso
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <h2 class="h4 mt-4 mb-3">Tarjetas Anki de este subtema</h2>

    @if($subtopic->flashcards->isEmpty())
        <p class="text-muted">Aún no hay tarjetas asociadas a este subtema.</p>
    @else
        <div class="row">
            @foreach($subtopic->flashcards as $card)
                <div class="col-md-6 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <p class="fw-bold">Pregunta</p>
                            <p>{{ $card->front }}</p>
                            <hr>
                            <p class="fw-bold">Respuesta</p>
                            <p>{{ $card->back }}</p>

                            @if($card->extra)
                                <hr>
                                <p class="fw-bold">Nota adicional</p>
                                <p>{{ $card->extra }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
