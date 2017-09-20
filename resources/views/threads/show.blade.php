@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><label>{{ $thread[0]->title }}</label></div>

                <div class="panel-body">               
                    <div class="body">
                        {{ $thread[0]->content }}  
                    </div>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
