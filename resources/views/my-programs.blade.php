@extends('layouts.app')

@section('title', __('Mis Cursos')." | eLearning")

@section('content')

<div class="container-fluid">

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">{{__("Inicio")}}</a></li>
        <li class="breadcrumb-item active">{{__("Mis Programas")}}</li>
    </ol>

    <div class="media align-items-center mb-headings">
        <div class="media-body">
            <h1 class="h2">{{__("Mis Programas")}}</h1>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">


        @foreach ($courses as $course)

            @if($courses->count()<3)
                <div class="col-md-12 col-lg-6 colmaxwidth_course_list">
                     @include('courses.partials.myprogramscard')
                </div>
            @elseif($courses->count()>=3)
                <div class="col-md-12 col-lg-6 col-xl-4 colmaxwidth_course_list">
                     @include('courses.partials.myprogramscard')
                </div>
            @endif

        @endforeach

{{-- FOR COLUMNS COURSES --}}
{{--
         @foreach ($courses as $course)

            @if($courses->count()<3)
                <div class="col-md-12 col-lg-6 colmaxwidth_course_list">
                     @include('courses.partials.myprogramscard')
                </div>
            @elseif($courses->count()>=3)
                <div class="col-md-12 col-lg-6 col-xl-4 colmaxwidth_course_list">
                     @include('courses.partials.myprogramscard')
                </div>
            @endif

        @endforeach --}}

    </div>

</div>

@endsection





