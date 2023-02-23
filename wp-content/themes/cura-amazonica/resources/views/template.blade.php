{{--
  Template Name: teste
--}}

@extends('layouts.app')

@section('content')   
  <div>
    Nossa home 

    {{ get_the_title() }}
    {{ the_content() }}

    @include('sections.teste')
  </div>
@endsection
