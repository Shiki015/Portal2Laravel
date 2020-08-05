@extends("layouts/admin")
@section("centar")

    @empty($form)
        @include("components.admin.comments.table")
    @endempty



@endsection
