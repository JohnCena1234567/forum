@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <form>
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

                    <ul>
                        @foreach($tasks as $task)
                            @if($task['complete'] == false)
                                <li>
                                    <a href="{{ $task['anchor'] }}">{{ $task['title'] }}</a>
                                </li>
                            @else
                                <li>
                                    <s>
                                        <a href="{{ $task['anchor'] }}">{{ $task['title']}}</a>
                                    </s>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
