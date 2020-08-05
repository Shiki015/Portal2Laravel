@extends("layouts/admin")
@section("centar")

    @empty($form)
        @include("components.admin.tags.table")
    @endempty

    @isset($form)
        @switch($form)
            @case('edit')
            @include('components.admin.tags.edit_form')
            @break
            @case('insert')
            @include('components.admin.tags.insert_form')
            @break
        @endswitch
    @endisset

@endsection
