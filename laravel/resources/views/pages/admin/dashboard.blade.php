@extends("layouts/admin")
@section("centar")

    @empty($form)
        @include("components.admin.users.table")
    @endempty

    @isset($form)
        @switch($form)
            @case('edit')
            @include('components.admin.users.edit_form')
            @break
            @case('insert')
            @include('components.admin.users.insert_form')
            @break
        @endswitch
    @endisset

@endsection
