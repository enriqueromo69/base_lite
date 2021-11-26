@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

    
    <h1>Hola
    <span class="ion-android-arrow-dropright-circle"></span>
    </h1>

    <h1>h
        <span class="step size-96">
        <i class="icon ion-android-bar"></i>
        </span>
        
    </h1>


    <livewire:counter /> 
    
    <div id="app">
        <example-component> </example-component>
    </div>

    </div>
</div>

@endsection

@push('scripts')
    <script>
        // Your custom JavaScript...
    //alert('hola');
    new Vue({
        el: '#app',
    });
    </script>
@endpush