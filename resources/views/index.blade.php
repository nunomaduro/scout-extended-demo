@extends('layouts.app')

@section('content')
    @foreach ($models as $model)
        <div class="col-md-4">
            @include('show')
        </div>
    @endforeach
@endsection
