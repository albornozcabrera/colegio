@extends('principal.master')
@section('content')
@section("javascript-ini")    
<?= HTML::script('js/angular/controllers/home.js') ?>
@stop
<div class="" ng-controller="ctrlHome">
    <div>
        <h1 id="home">contenido</h1>
    </div>
</div>
@stop
