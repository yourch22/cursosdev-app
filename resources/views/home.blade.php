@extends('layouts.app')
@section('title','Cursos online - en cualquier momento y en cualquier lugar')
@section('meta_title','Cursos online - en cualquier momento y en cualquier lugar')
@section('meta_description','Somos una marca afiliada a Udemy, principal destino del mundo para cursos en línea. Descubre un curso en línea y empieza ya a aprender una nueva habilidad.')
@section('meta_keyword','cursos online, cursos gratis,cupones gratis, desarrollo, negocios, it y software, productividad, desarrollo personal, diseño, marketing, música, salud y fitness, fotografía, estilo de vida, idiomas')
@section('meta_url', url('/udemy'))
@section('meta_image', asset('img/plantilla/cupones-udemy-gratis.jpg'))
@section('meta_language_es', 'https://cursosdev.com/')
@section('meta_language_en', 'https://en.cursosdev.com/')
@section('content')
    @include('home.inicio1')
    @include('home.inicio2')
    @include('home.inicio3')
    @include('newsletter.subscribe')
@endsection