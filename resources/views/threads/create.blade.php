@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a New Thread</div>

                <div class="panel-body">
                    <label>Title:</label>
                    <input type="text" class="form-control">
                </div>

                <div class="panel-body">
                    <label>Body:</label>
                    <textarea rows="8" class="form-control"></textarea>
                </div>

                <div class="panel-body">
                    <button type="button" class="btn btn-primary">Publish</button>
                </div>

                @foreach ($countries as $country)
                    @if($country === 'Island')
                        <h1>{{ $country }}</h1>
                    @elseif ($country === 'Irland')
                        <p>{{ $country }}</p>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
