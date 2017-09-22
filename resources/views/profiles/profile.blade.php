@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Artur <small>Medlimur i 3 vikur</small></h1>
        </div>
    </div>
    <br>
    
    <div class="col-md-6 col-md-offset-2">
        @foreach($threads as $thread)
        <ul class="list-group">
            <li class="list-group-item">{{ $thread['eigandi'] }} published <a href="#">{{ $thread['title'] }}</a></li>
            <li class="list-group-item">{{ $thread['body'] }}</li>
        </ul>
        @endforeach
    </div>

    <div class="panel panel-default col-md-3 ">
        <div class="panel-body">
            <h4>Nafn</h4>
            <h5>Artur</h5>
            <h4>Netfang</h4>
            <h5>fs453486@fss.is</h5>
            <h5>Fjoldi trada: 14</h5>
        </div>
    </div>
</div>
@endsection
