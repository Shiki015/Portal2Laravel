
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
                                <th>id</th>
                                <th>Comment</th>
                                <th>Date</th>
                                <th>User ID</th>
                                <th>For Post ID</th>
                                <th>Parent ID</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comments as $comm)
                                <tr>
                                    <td>{{ $comm->id_comment }}</td>
                                    <td>{{ $comm->commnet }}</td>
                                    <td>{{ $comm->created_at_commnet }}</td>
                                    <td>{{ $comm->id_user }}</td>
                                    <td>{{ $comm->id_news }}</td>
                                    <td>{{ $comm->parent_id }}</td>

                                    <td><a href="{{ route("comment.delete", $id = $comm->id_comment) }}" class="btn btn-danger waves-effect btn-xs"><i class="material-icons">delete</i></a></td>
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
