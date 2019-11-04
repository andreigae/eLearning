@extends('layouts.app')

@section('title', __('Mis Cursos')." | eLearning")

@section('content')
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

        @php
            $data = 1;
        @endphp


        @for ($i=1; $i<=$data;$i++)
            @if($data<3)
                @include('partials.course.list.l3item-courseslist')
            @elseif($data==3)
                @include('partials.course.list.3item-courseslist')
            @elseif($data>3)
                @include('partials.course.list.m3item-courseslist')
            @endif
        @endfor
    </div>
@endsection





