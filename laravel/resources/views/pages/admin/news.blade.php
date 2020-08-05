@extends("layouts/admin")
@section("centar")

    @empty($form)
        @include("components.admin.news.table")
    @endempty

    @isset($form)
        @switch($form)
            @case('edit')
            @include('components.admin.news.edit_form')
            @break
            @case('insert')
            @include('components.admin.news.insert_form')
            @break
        @endswitch
    @endisset

@endsection
