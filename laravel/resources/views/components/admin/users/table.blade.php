
<div class="content-wrapper">
<div class="main-wrap">
    <div class="section section-padding news-single-section">
        <div class="container">
            <div class="row">

                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" align="right">x</button>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        @if($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                        @if($message = Session::get('error'))
                            <div class="alert alert-warning alert-block">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                            <table id="" class="table table-striped">
                                <br>
                                <br>
                                <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Created at</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->firstName }}</td>
                                        <td>{{ $user->lastName }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td><a href="{{ route("users.show", $id = $user->id_user) }}" class="btn btn-info waves-effect btn-xs"><i class="material-icons">edit</i></a></td>
                                        <td><a href="{{ route("users.delete", $id = $user->id_user) }}" class="btn btn-danger waves-effect btn-xs"><i class="material-icons">delete</i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
            <br><br><br>

            </div>
        </div>
    </div>
</div>
</div>
