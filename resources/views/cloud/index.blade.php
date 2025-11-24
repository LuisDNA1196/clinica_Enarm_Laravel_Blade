@extends('layouts.app')

@section('content')
    <div class="mb-3">
        <a href="{{ route('home') }}" class="btn btn-link px-0">
            <i class="bi bi-arrow-left"></i> Volver al inicio
        </a>
    </div>

    <div class="card card-soft mb-4">
        <div class="card-body">
            <h1 class="h4 mb-2">
                <i class="bi bi-cloud-arrow-up text-primary me-2"></i>
                Servicios en la nube
            </h1>
            <p class="text-muted mb-0">
                Esta sección describe cómo se despliega la aplicación <strong>Clínica ENARM</strong>
                en un servicio de la nube, cumpliendo con el producto integrador de la materia.
            </p>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-md-6">
            <div class="card card-soft-outline h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-diagram-3 me-2 text-primary"></i>
                        Arquitectura general
                    </h5>
                    <p class="card-text text-muted">
                        La aplicación está desarrollada en <strong>Laravel</strong> con vistas
                        en <strong>Blade</strong>. El frontend y backend están integrados en el mismo
                        proyecto, lo que permite manejar rutas web, controladores y vistas desde un
                        solo framework.
                    </p>
                    <ul class="small text-muted mb-0">
                        <li>Servidor web: Apache dentro de un contenedor Docker.</li>
                        <li>Aplicación: PHP 8.x + Laravel.</li>
                        <li>Base de datos: SQLite (archivo <code>database.sqlite</code>).</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-soft-outline h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-cloud-check me-2 text-primary"></i>
                        Despliegue en Render
                    </h5>
                    <p class="card-text text-muted">
                        La aplicación se despliega en <strong>Render</strong> utilizando un
                        contenedor <strong>Docker</strong>. Render clona el repositorio de GitHub,
                        construye la imagen, instala dependencias y deja el servicio disponible
                        en una URL pública.
                    </p>
                    <ul class="small text-muted mb-0">
                        <li>Repositorio conectado a Render como Web Service (Docker).</li>
                        <li>Construcción automática al hacer <code>git push</code>.</li>
                        <li>Instalación de Composer y ejecución de migraciones/seeders dentro del contenedor.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-soft-outline h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-database-up me-2 text-primary"></i>
                        Base de datos en la nube
                    </h5>
                    <p class="card-text text-muted">
                        Para simplificar el despliegue, la base de datos de la aplicación utiliza
                        <strong>SQLite</strong>, almacenando la información en un archivo dentro del
                        contenedor. Durante el build se ejecutan las migraciones y seeders para
                        crear los temas, subtemas, recursos y tarjetas de estudio.
                    </p>
                    <ul class="small text-muted mb-0">
                        <li>Conexión configurada con <code>DB_CONNECTION=sqlite</code>.</li>
                        <li>Ruta del archivo: <code>/var/www/html/database/database.sqlite</code>.</li>
                        <li>Datos de ejemplo cargados con seeders para demostrar la funcionalidad.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-soft-outline h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-shield-lock me-2 text-primary"></i>
                        Ventajas del uso de la nube
                    </h5>
                    <p class="card-text text-muted">
                        Al hospedar la aplicación en la nube se logra que cualquier usuario
                        con acceso al enlace pueda consultar los temas, recursos médicos y
                        tarjetas Anki sin necesidad de instalar nada en su computadora.
                    </p>
                    <ul class="small text-muted mb-0">
                        <li>Acceso vía navegador web desde cualquier dispositivo.</li>
                        <li>Actualizaciones centralizadas mediante despliegues desde Git.</li>
                        <li>Separación entre entorno local de desarrollo y entorno de producción.</li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- Sección: Plataformas populares de servicios en la nube --}}
<div class="mt-5">
    <h2 class="h5 mb-3">
        <i class="bi bi-clouds text-primary me-2"></i>
        Plataformas populares de servicios en la nube
    </h2>

    <div class="row g-3">

        {{-- Azure --}}
        <div class="col-md-4">
            <div class="card card-soft-outline h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-microsoft me-2 text-primary"></i>
                        Microsoft Azure
                    </h5>
                    <p class="card-text text-muted">
                        Plataforma empresarial para aplicaciones a gran escala, IA, bases de datos,
                        contenedores y servicios integrados para producción.
                    </p>
                    <a href="https://azure.microsoft.com" target="_blank" class="btn btn-sm btn-outline-primary">
                        Ir a Azure
                    </a>
                </div>
            </div>
        </div>

        {{-- AWS --}}
        <div class="col-md-4">
            <div class="card card-soft-outline h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-cloud-check-fill me-2 text-primary"></i>
                        Amazon Web Services (AWS)
                    </h5>
                    <p class="card-text text-muted">
                        La plataforma de nube más usada del mundo. Ofrece servicios para cómputo,
                        almacenamiento, bases de datos, seguridad y despliegue global.
                    </p>
                    <a href="https://aws.amazon.com" target="_blank" class="btn btn-sm btn-outline-primary">
                        Ir a AWS
                    </a>
                </div>
            </div>
        </div>

        {{-- Google Cloud --}}
        <div class="col-md-4">
            <div class="card card-soft-outline h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-google me-2 text-primary"></i>
                        Google Cloud Platform (GCP)
                    </h5>
                    <p class="card-text text-muted">
                        Ofrece servicios modernos para análisis de datos, IA, contenedores,
                        Kubernetes y despliegue de aplicaciones globales.
                    </p>
                    <a href="https://cloud.google.com" target="_blank" class="btn btn-sm btn-outline-primary">
                        Ir a Google Cloud
                    </a>
                </div>
            </div>
        </div>

        {{-- Vercel --}}
        <div class="col-md-4">
            <div class="card card-soft-outline h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-lightning-charge-fill me-2 text-primary"></i>
                        Vercel
                    </h5>
                    <p class="card-text text-muted">
                        Plataforma enfocada en sitios y aplicaciones modernas con despliegues rápidos,
                        ideal para Next.js, React y frontend en general.
                    </p>
                    <a href="https://vercel.com" target="_blank" class="btn btn-sm btn-outline-primary">
                        Ir a Vercel
                    </a>
                </div>
            </div>
        </div>

        {{-- Netlify --}}
        <div class="col-md-4">
            <div class="card card-soft-outline h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-upload me-2 text-primary"></i>
                        Netlify
                    </h5>
                    <p class="card-text text-muted">
                        Perfecto para sitios estáticos y aplicaciones JAMStack con despliegue
                        continuo conectado a GitHub.
                    </p>
                    <a href="https://netlify.com" target="_blank" class="btn btn-sm btn-outline-primary">
                        Ir a Netlify
                    </a>
                </div>
            </div>
        </div>

        {{-- Railway --}}
        <div class="col-md-4">
            <div class="card card-soft-outline h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-speedometer me-2 text-primary"></i>
                        Railway
                    </h5>
                    <p class="card-text text-muted">
                        Plataforma moderna para desplegar apps con bases de datos integradas y
                        CI/CD automático desde GitHub.
                    </p>
                    <a href="https://railway.app" target="_blank" class="btn btn-sm btn-outline-primary">
                        Ir a Railway
                    </a>
                </div>
            </div>
        </div>

        {{-- Render --}}
        <div class="col-md-4">
            <div class="card card-soft-outline h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-box-seam me-2 text-primary"></i>
                        Render
                    </h5>
                    <p class="card-text text-muted">
                        La plataforma que utiliza esta aplicación. Permite desplegar contenedores
                        Docker, bases de datos y servicios web de forma automática.
                    </p>
                    <a href="https://render.com" target="_blank" class="btn btn-sm btn-outline-primary">
                        Ir a Render
                    </a>
                </div>
            </div>
        </div>

        {{-- Supabase --}}
        <div class="col-md-4">
            <div class="card card-soft-outline h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-database-fill-gear me-2 text-primary"></i>
                        Supabase
                    </h5>
                    <p class="card-text text-muted">
                        Alternativa open-source a Firebase con base de datos Postgres, API REST
                        automática y autenticación integrada.
                    </p>
                    <a href="https://supabase.com" target="_blank" class="btn btn-sm btn-outline-primary">
                        Ir a Supabase
                    </a>
                </div>
            </div>
        </div>

        {{-- Firebase --}}
        <div class="col-md-4">
            <div class="card card-soft-outline h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-fire me-2 text-primary"></i>
                        Firebase
                    </h5>
                    <p class="card-text text-muted">
                        Plataforma de Google para aplicaciones con backend serverless, hosting,
                        autenticación y base de datos en tiempo real.
                    </p>
                    <a href="https://firebase.google.com" target="_blank" class="btn btn-sm btn-outline-primary">
                        Ir a Firebase
                    </a>
                </div>
            </div>
        </div>

        {{-- DigitalOcean --}}
        <div class="col-md-4">
            <div class="card card-soft-outline h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-droplet-half me-2 text-primary"></i>
                        DigitalOcean
                    </h5>
                    <p class="card-text text-muted">
                        Plataforma simple y económica para VPS, contenedores, bases de datos
                        administradas y almacenamiento.
                    </p>
                    <a href="https://digitalocean.com" target="_blank" class="btn btn-sm btn-outline-primary">
                        Ir a DigitalOcean
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

    </div>
@endsection
