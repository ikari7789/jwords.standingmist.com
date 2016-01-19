@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                        @if (! is_null($word))
                            <div>
                                <span>Word:</span>
                                <span>{{ $word->word }}</span>
                                <div>
                                    <span>Categories:</span>
                                    @forelse ($word->categories as $category)
                                        <span>Category:</span>
                                        <span>{{ $category->name }}</span>
                                    @empty
                                        <span>No categories.</span>
                                    @endforelse
                                </div>
                            </div>
                        @else
                            <div><span>Word not found.</span></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection