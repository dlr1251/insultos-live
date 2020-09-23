@extends('layout')

@section('content')
<div class="jumbotron">        
    <h1 class="text-center display-2">Dear gonorreas hijueputas</h1>   
</div>
<div class="container">
    <p>El propósito de este repositorio es del aprendizaje en el despliegue de containers en Digital Ocean siguiendo este <a target="_blank" href="https://www.digitalocean.com/community/tutorials/como-instalar-en-ubuntu-18-04-la-pila-lamp-linux-apache-mysql-y-php-es">tutorial</a></p>
    <p>El código fuente se encuentra <a href="https://github.com/dlr1251/insultos-live">aquí</a>, en caso de que alguien quiera ayudar a alimentar esta base de datos con seeders de laravel.</p>
    <p>¿Corto en la respuesta? Tranquil@, aquí puede mirar algunas palabrotas para su inspiración, lok hp.</p> 
    @livewire('insult-component')
</div>    
@endsection