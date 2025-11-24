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
                <i class="bi bi-play-circle text-primary me-2"></i>
                Recursos multimedia: audio y video
            </h1>
            <p class="text-muted mb-0">
                En esta sección se integran los recursos multimedia producidos a lo largo del curso:
                clips de audio y videos relacionados con el estudio para el ENARM.
                El objetivo es ofrecer un espacio donde el usuario pueda escuchar y ver el contenido
                con un breve contexto que facilite su comprensión.
            </p>
        </div>
    </div>

    <h2 class="h5 mb-3">Clips de audio / Podcast</h2>

    <div class="row g-3 mb-4">
        <div class="col-md-6">
            <div class="card card-soft-outline h-100">
                <div class="card-body">
                                            <a href="https://soundcloud.com/luis-narvaez-929279557/clinica-enarm-episodio-1-introduccion">
<h5 class="card-title">Audio 1 – Clinica Enarm Episodio 1: Introduccion</h5></a>
                    <p class="card-text text-muted small">
                        En este clip se explica brevemente el objetivo de la plataforma Clínica ENARM
                        y cómo utilizarla para repasar los temas mediante tarjetas de estudio.
                    </p>
                        <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/soundcloud%253Atracks%253A2171008014&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/luis-narvaez-929279557" title="Luis Narvaez" target="_blank" style="color: #cccccc; text-decoration: none;">Luis Narvaez</a> · <a href="https://soundcloud.com/luis-narvaez-929279557/clinica-enarm-episodio-1-introduccion" title="Clinica Enarm Episodio 1: Introduccion" target="_blank" style="color: #cccccc; text-decoration: none;">Clinica Enarm Episodio 1: Introduccion</a></div>
                            </a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-soft-outline h-100">
                <div class="card-body">
                   <a href="https://soundcloud.com/luis-narvaez-929279557/clinica-enarm-ep1-con-musica-de-fondo"> <h5 class="card-title">Audio 2 – Clinica Enarm ep1 con musica de fondo</h5></a>
                    <p class="card-text text-muted small">
                        En este audio es una versión mejoarada del Audio 1, con mejor edición y música de fondo.
                    </p>
                       <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/soundcloud%253Atracks%253A2175677136&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/luis-narvaez-929279557" title="Luis Narvaez" target="_blank" style="color: #cccccc; text-decoration: none;">Luis Narvaez</a> · <a href="https://soundcloud.com/luis-narvaez-929279557/clinica-enarm-ep1-con-musica-de-fondo" title="Clinica Enarm ep1 con musica de fondo" target="_blank" style="color: #cccccc; text-decoration: none;">Clinica Enarm ep1 con musica de fondo</a></div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="h5 mb-3">Videos</h2>

    <div class="row g-3">
        <div class="col-md-6">
            <div class="card card-soft-outline h-100">
                <div class="card-body">
                    <h5 class="card-title">Video 1 –
Actividad 3.3. Producción de video. Enfermedades del corazón</h5>
                    <p class="card-text text-muted small">
                        Video donde se habla sobre el tema de "Enfermedades del corazón" donde se habla a grandes rasgos sobre las mismas y como prevenirlas
                    </p>
                    <div class="ratio ratio-16x9">
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/ykVAgebB-tI?si=JFRRy0OBy32KIcki" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-soft-outline h-100">
                <div class="card-body">
                    <h5 class="card-title">Video 2 –
3 4 Edición de video Enfermedades del corazón</h5>
                    <p class="card-text text-muted small">
                        Versión mejoarada dle video 1, donde se agregan imagenes al video para hacerlo más dinamico, asi como musica de fondo y un titulo e imagen de introducción. Musica de intro y outro.
                    </p>
                    <div class="ratio ratio-16x9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/uIEFR7v8cOk?si=HD8zhR-QbEpE6XL-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
