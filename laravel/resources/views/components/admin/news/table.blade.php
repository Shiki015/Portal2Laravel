
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
                                <th>ID</th>
                                <th>Title</th>
                                <th>Created at</th>
                                <th>Created by</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news as $n)
                                <tr>
                                    <td>{{ $n->id_news }}</td>
                                    <td>{{ $n->title_news }}</td>
                                    <td>{{ $n->created_at_news }}</td>
                                    <td>{{ $n->firstName }}</td>


                                    <td><a href="{{ route("news.show", $id = $n->id_news) }}" class="btn btn-info waves-effect btn-xs"><i class="material-icons">edit</i></a></td>
                                    <td><a href="{{ route("news.delete", $id = $n->id_news) }}" class="btn btn-danger waves-effect btn-xs"><i class="material-icons">delete</i></a></td>
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
