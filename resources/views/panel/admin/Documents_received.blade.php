@extends('panel.admin.index')
@section('contend')
    @if($file && count($file) >0)
        @foreach($file as $fil)

            <div class="card">
                <h5 class="card-header">جدول مدارک ارسال شده از کاربر</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>نام کاربر</th>
                                <th>نوع فایل ارسالی</th>
                                <th>عملیات</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$user->where('id','=',$fil->user_id)->first()->name}}</strong>
                                </td>
                                <td>{{$fil->type}}</td>

                                <td>
                                    <a href="{{Route('admin.Documents_received.download',$fil->id)}}"><button type="button" class="btn btn-success">دانلود</button></a>
                                </td>
                            </tr>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

{{--                        <a href="{{Route('admin.Documents_received.download',$fil->id)}}"><button type="button" class="btn btn-success">دانلود</button></a>--}}


        @endforeach
    @else <div class="alert alert-primary" role="alert">هنوز فایلی برای شما بارگزاری نشده</div>@endif
@endsection
