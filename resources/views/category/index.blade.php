@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Categories</div>

                    <div class="panel-body">
                        @forelse ($categories as $category)
                            <div>
                                <span><a href="{{url("/category/{$category->id}") }}">{{ $category->name }}</a></span>
                            </div>
                        @empty
                            <div><span>No Categories.</span></div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection