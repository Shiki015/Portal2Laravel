@extends("layouts/admin")
@section("centar")

    @empty($form)
        @include("components.admin.categories.table")
    @endempty

    @isset($form)
        @switch($form)
            @case('edit')
            @include('components.admin.categories.edit_form')
            @break
            @case('insert')
            @include('components.admin.categories.insert_form')
            @break
        @endswitch
    @endisset

@endsection
