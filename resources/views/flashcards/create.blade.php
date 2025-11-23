@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4">Crear nueva tarjeta Anki</h1>

    <a href="{{ url()->previous() }}" class="btn btn-link mb-3">
        ← Volver
    </a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <p class="mb-1"><strong>Revisa los siguientes errores:</strong></p>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('flashcards.store') }}" method="POST" class="mb-5">
        @csrf

        <div class="mb-3">
            <label for="topic_id" class="form-label">Tema ENARM</label>
            <select
                name="topic_id"
                id="topic_id"
                class="form-select @error('topic_id') is-invalid @enderror"
                required
            >
                <option value="">Selecciona un tema</option>
                @php
                    $selectedTopic = old('topic_id', request('topic_id'));
                    $selectedSubtopic = old('subtopic_id', request('subtopic_id'));
                @endphp

                @foreach($topics as $topic)
                    <option
                        value="{{ $topic->id }}"
                        {{ (int)$selectedTopic === $topic->id ? 'selected' : '' }}
                    >
                        {{ $topic->name }}
                    </option>
                @endforeach
            </select>
            @error('topic_id')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="subtopic_id" class="form-label">
                Subtema (opcional, pero recomendado)
            </label>
            <select
                name="subtopic_id"
                id="subtopic_id"
                class="form-select @error('subtopic_id') is-invalid @enderror"
            >
                <option value="">Sin subtema específico</option>

                @foreach($topics as $topic)
                    @if($topic->subtopics->isNotEmpty())
                        <optgroup label="{{ $topic->name }}">
                            @foreach($topic->subtopics as $subtopic)
                                <option
                                    value="{{ $subtopic->id }}"
                                    {{ (int)$selectedSubtopic === $subtopic->id ? 'selected' : '' }}
                                >
                                    {{ $subtopic->title }}
                                </option>
                            @endforeach
                        </optgroup>
                    @endif
                @endforeach
            </select>
            @error('subtopic_id')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="front" class="form-label">
                Pregunta (lado frontal)
            </label>
            <textarea
                name="front"
                id="front"
                rows="3"
                class="form-control @error('front') is-invalid @enderror"
                required
            >{{ old('front') }}</textarea>
            @error('front')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div class="form-text">
                Puedes escribir una pregunta directa, un caso clínico corto o un concepto clave.
            </div>
        </div>

        <div class="mb-3">
            <label for="back" class="form-label">
                Respuesta (lado trasero)
            </label>
            <textarea
                name="back"
                id="back"
                rows="3"
                class="form-control @error('back') is-invalid @enderror"
                required
            >{{ old('back') }}</textarea>
            @error('back')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div class="form-text">
                Incluye la respuesta principal. Si lo deseas, un pequeño razonamiento.
            </div>
        </div>

        <div class="mb-3">
            <label for="extra" class="form-label">
                Nota adicional / mnemotecnia (opcional)
            </label>
            <textarea
                name="extra"
                id="extra"
                rows="2"
                class="form-control @error('extra') is-invalid @enderror"
            >{{ old('extra') }}</textarea>
            @error('extra')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div class="form-text">
                Mnemotecnias, tips para recordar, clasificación, etc.
            </div>
        </div>

        {{-- Fuente --}}
        <div class="mb-3">
            <label for="source" class="form-label">
                Fuente / guía clínica (opcional)
            </label>
            <input
                type="text"
                name="source"
                id="source"
                class="form-control @error('source') is-invalid @enderror"
                value="{{ old('source') }}"
                placeholder="Ej. GPC Insuficiencia Cardiaca 2019, Nelson, Uptodate..."
            >
            @error('source')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">
            Guardar tarjeta
        </button>
    </form>
@endsection
