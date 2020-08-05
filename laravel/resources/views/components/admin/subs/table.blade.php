
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
                            <th>Email Address</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($subsrcibers as $sub)

                            <tr>
                                <td>{{ $sub->id_sub }}</td>
                                <td>{{ $sub->email }}</td>


                                <td><a href="{{ route("sub.delete", $id = $sub->id_sub) }}" class="btn btn-danger waves-effect btn-xs"><i class="material-icons">delete</i></a></td>
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

