@extends('panel.admin.index')
@section('contend')


    <div class="card">
        <h5 class="card-header">فایل های ارسال شده از طرف وکیل</h5>
        <h5 class="card-header"></h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>نام ارسال شده</th>
                        <th>عملیات</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($document_send as $document_sends)
                        <tr>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$document_sends->category->name}}</strong>
                            </td>



                            <td>
                                <button type="button" class="btn btn-icon btn-outline-primary">
                                    <a href="{{Route('admin.show',$document_sends->id)}}"><span class="bx bxs-file-doc"></span></a>
                                </button>
                                <button type="button" class="btn btn-icon btn-outline-primary">
                                    <a href="{{Route('admin.Documents_admin.delete',$document_sends->id)}}"><span class="bx bxs-message-alt-x"></span></a>
                                </button>
                            </td>
                        </tr>
                    @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr class="my-5">

    <div class="card">
        <h5 class="card-header">فایل های ارسال شده از طرف موکل</h5>
        <h5 class="card-header"></h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>نام ارسال شده</th>
                        <th>عملیات</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($document_reseave as $document_reseaves)
                        <tr>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$document_reseaves->type}}</strong>
                            </td>



                            <td>
                                <button type="button" class="btn btn-icon btn-outline-primary">
                                    <a href="{{Route('admin.Documents_received.download',$document_reseaves->id)}}"><span class="bx bxs-file-doc"></span></a>

                                </button>
                                <button type="button" class="btn btn-icon btn-outline-primary">
                               <a href="{{Route('admin.Documents_users.delete',$document_reseaves->id)}}"> <span class="bx bxs-message-alt-x"></span></a>
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
