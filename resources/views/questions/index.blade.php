@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1>All Questions</h1></div>
                <div class="card-body">
                   @foreach ($questions as $question)
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mt-0">{{ $question->title }}</h3>
                                {{ \Illuminate\Support\Str::limit($question->body, 250) }}
                            </div>                        
                        </div>
                        <hr>
                   @endforeach

                    <div style="text-align: center" class="mx-auto">
                        {{ $questions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection