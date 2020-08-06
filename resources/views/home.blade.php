@extends('adminlte::page')

@section('title', 'Coders Free')

@section('content_header')
    <h1>Tablero</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Hola Mundo!</h1>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum hic, inventore accusantium, dolore repudiandae distinctio sint sit quisquam maiores rem rerum explicabo cupiditate eveniet exercitationem! Labore eum nobis blanditiis obcaecati!</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
