<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Clínica ENARM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        :root {
            --primary-main: #2563eb;
            --primary-soft: #dbeafe;
            --bg-page: #f3f4f6;
            --text-main: #0f172a;
        }

        body {
            background-color: var(--bg-page);
            font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: var(--text-main);
        }

        .navbar {
            background: linear-gradient(90deg, #0f172a, #1e293b);
        }

        .navbar-brand {
            font-weight: 600;
            letter-spacing: 0.04em;
        }

        .nav-link {
            font-weight: 500;
        }

        .nav-link.active {
            color: #bfdbfe !important;
        }

        .page-wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main.container {
            flex: 1;
        }

        .card-soft {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.08);
        }

        .card-soft-outline {
            border-radius: 1rem;
            border: 1px solid #e5e7eb;
            background-color: #ffffff;
        }

        .badge-topic {
            background-color: var(--primary-soft);
            color: #1d4ed8;
            font-weight: 500;
        }

        .hero {
            border-radius: 1.5rem;
            background: radial-gradient(circle at top left, #dbeafe, #eff6ff, #ffffff);
            padding: 2.5rem 2rem;
        }

        .hero-title {
            font-weight: 700;
        }

        .hero-subtitle {
            color: #4b5563;
        }

        footer {
            border-top: 1px solid #e5e7eb;
            color: #6b7280;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark mb-4">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                    <i class="bi bi-heart-pulse me-2"></i>
                    Clínica ENARM
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="{{ route('home') }}"
                                class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                                <i class="bi bi-house-door me-1"></i> Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('topics.index') }}"
                                class="nav-link {{ request()->routeIs('topics.*') ? 'active' : '' }}">
                                <i class="bi bi-journal-medical me-1"></i> Temas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('flashcards.index') }}"
                                class="nav-link {{ request()->routeIs('flashcards.*') ? 'active' : '' }}">
                                <i class="bi bi-card-text me-1"></i> Tarjetas Anki
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link bi-cloud-arrow-up {{ request()->routeIs('cloud-services') ? 'active' : '' }}"
                                href="{{ route('cloud-services') }}">
                                Servicios en la Nube
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('media') ? 'active' : '' }}"
                                href="{{ route('media') }}">
                                <i class="bi bi-film me-1"></i>
                                Multimedia
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container mb-5">
            @yield('content')
        </main>

        <footer class="py-3 mt-auto">
            <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
                <span>© {{ date('Y') }} Clínica ENARM · Plataforma de estudio médico</span>
                <span class="mt-2 mt-md-0">
                    <i class="bi bi-lightning-charge"></i> Desarrollado en Laravel
                </span>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>

</html>
