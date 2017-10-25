@extends('layouts.app')

@section('content')
<div class="container">
    @include('common.errors')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><label>{{ $thread->title }}</label></div>

                <div class="panel-body">               
                    <div class="body">
                        {{ $thread->body }}  
                    </div>                  
                </div>
            </div>
            @guest
            @else
            <form method="POST" action="/threads/{{$thread->id}}" class="panel">
                {{ csrf_field() }}
                <div class="panel-body">
                    <label>New Comment</label>
                    <textarea name="comment" class="form-control" rows="3"></textarea>
                </div>
                <div class="panel-body">
                    <button type="submit" class="btn btn-primary">Submit</button> 
                </div>
            </form>
            @endguest
            @foreach($comments as $comment)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <small class="text-muted">
                            Published by {{ $thread->user->name }}
                        </small>
                        <p class="font-italic">
                            {{ $comment->comment }}
                        </p> 
                    </div>                 
                </div>
            @endforeach     
        </div>
    </div>
</div>
@endsection
