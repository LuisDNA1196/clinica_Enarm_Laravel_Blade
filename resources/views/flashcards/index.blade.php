@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Tarjetas Anki</h1>

        <a href="{{ route('flashcards.create') }}" class="btn btn-primary">
            + Nueva tarjeta
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($flashcards->isEmpty())
        <div class="alert alert-info">
            Aún no has creado tarjetas. Comienza creando la primera.
        </div>
    @else
        <div class="mb-3">
            <p class="text-muted mb-1">
                Total de tarjetas: {{ $flashcards->total() }}
            </p>
        </div>

        <div class="row">
            @foreach($flashcards as $card)
                <div class="col-md-6 mb-3">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
    <div class="mb-2">
        <span class="badge bg-dark">
            {{ $card->topic?->name ?? 'Sin tema' }}
        </span>
        @if($card->subtopic)
            <span class="badge bg-secondary">
                {{ $card->subtopic->title }}
            </span>
        @endif
    </div>

    <p class="fw-bold mb-1">Pregunta</p>
    <p>{{ $card->front }}</p>

    <div class="mt-2 mb-2">
        <button
            type="button"
            class="btn btn-sm btn-outline-primary toggle-answer-btn"
            data-target="#answer-{{ $card->id }}"
        >
            Mostrar respuesta
        </button>
    </div>

    <div id="answer-{{ $card->id }}" class="mt-3 d-none">
        <p class="fw-bold mb-1">Respuesta</p>
        <p>{{ $card->back }}</p>

        @if($card->extra)
            <hr>
            <p class="fw-bold mb-1">Nota adicional</p>
            <p>{{ $card->extra }}</p>
        @endif

        @if($card->source)
            <p class="small text-muted mt-2 mb-0">
                Fuente: {{ $card->source }}
            </p>
        @endif
    </div>

    <div class="mt-3 d-flex justify-content-between">
        <a href="{{ route('flashcards.edit', $card) }}"
           class="btn btn-sm btn-warning">
            Editar
        </a>

        <form action="{{ route('flashcards.destroy', $card) }}"
              method="POST"
              onsubmit="return confirm('¿Seguro que deseas eliminar esta tarjeta?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">
                Eliminar
            </button>
        </form>
    </div>
</div>

                    </div>
                </div>
            @endforeach
        </div>

        <div>
            {{ $flashcards->links() }}
        </div>
    @endif
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const buttons = document.querySelectorAll('.toggle-answer-btn');

        buttons.forEach(btn => {
            btn.addEventListener('click', function () {
                const targetSelector = this.getAttribute('data-target');
                const target = document.querySelector(targetSelector);

                if (!target) return;

                const isHidden = target.classList.contains('d-none');

                if (isHidden) {
                    target.classList.remove('d-none');
                    this.textContent = 'Ocultar respuesta';
                } else {
                    target.classList.add('d-none');
                    this.textContent = 'Mostrar respuesta';
                }
            });
        });
    });
</script>
@endpush
