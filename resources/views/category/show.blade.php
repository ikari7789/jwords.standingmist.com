@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Category</div>

                    <div class="panel-body">
                        @if (! is_null($category))
                            <div>
                                <span>Category:</span>
                                <span>{{ $category->name }}</span>
                                <div>
                                    <span>Words:</span>
                                    <ul>
                                    @forelse ($category->words as $word)
                                        <li><a href="{{ url("/word/{$word->id}") }}">{{ $word->word }}</a></li>
                                    @empty
                                        <li>No words.</li>
                                    @endforelse
                                    </ul>
                                </div>
                            </div>
                        @else
                            <div><span>Category not found.</span></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
