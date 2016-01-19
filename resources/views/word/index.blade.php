@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Words</div>

                    <div class="panel-body">
                        @forelse ($words as $word)
                            <div>
                                <span><a href="{{url("/word/{$word->id}") }}">{{ $word->word }}</a></span>
                            </div>
                        @empty
                            <div><span>No Words.</span></div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection