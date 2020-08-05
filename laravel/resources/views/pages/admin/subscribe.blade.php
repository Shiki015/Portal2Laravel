@extends("layouts/admin")
@section("centar")

    @empty($form)
        @include("components.admin.subs.table")
    @endempty



@endsection

