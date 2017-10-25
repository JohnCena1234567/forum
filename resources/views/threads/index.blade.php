@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        @foreach ($threads as $thread)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <label>
                        <a href="/threads/{{$thread->id}}">
                            <strong>{{ $thread->title }}</strong> 
                        </a>
                        <small class="text-muted">
                            Owner {{ $thread->user->name }}
                        </small>
                    </label>
                </div>
                <div class="panel-body">
                    <article>
                        <div class="body">
                            {{ $thread->body }}
                        </div>
                    </article>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
