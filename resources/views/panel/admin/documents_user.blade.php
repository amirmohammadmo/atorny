@extends('panel.admin.index')
@section('contend')
    <div class="card">
        <h5 class="card-header"></h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>نام کاربر</th>
                        <th>عملیات</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>
                            <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$user->name}}</strong>
                        </td>



                        <td>
                            <button type="button" class="btn btn-icon btn-outline-primary">
                                <a href="{{Route('admin.Documents_users.show',$user->id)}}"><span class="bx bxs-file-doc"></span></a>
                            </button>
                        </td>
                    </tr>
                    @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
