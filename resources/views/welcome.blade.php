@extends('layouts.app2')

@section('content')
    <div class="container-xxl bg-white p-0">
        @include('includes.about')

        @include('includes.newsletter')

        @include('includes.services')
        
        @include('includes.features')
        
        @include('includes.client')

        @include('includes.testimonial')
        
        @include('includes.team')
    </div>
@endsection
