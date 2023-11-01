
@include('panel.admin.layouts.validat')
@include('panel.admin.layouts.success')
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">ارسال مدارک</h5>
                <small class="text-muted float-end"></small>
            </div>
            <div class="card-body">
                <form action="{{Route('user.send_protest.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="defaultFormControlInput" class="form-label">نوع مدرک</label>
                        <input type="text" class="form-control" id="defaultFormControlInput"  aria-describedby="defaultFormControlHelp" name="type">
                        <div id="defaultFormControlHelp" class="form-text">
                            نوع مدرک خود را وارد نمایید برای مثال "فیش پرداختی"
                        </div>
                    </div>
                    <input class="form-control" type="file" id="formFile" name="file">
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">ارسال</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@if($file_users && count($file_users) > 0)
<div class="card">
    <h5 class="card-header">جدول فایل های ارسالی</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
            <tr>
                <th>نوع مدرک</th>
                <th>عملیات</th>

            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            <tr>
                @foreach($file_users as $file_user)
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$file_user->type}}</strong></td>
                <td>
                   <a href="{{Route('user.downloadUserFile',$file_user->id)}}"> <button type="button" class="btn rounded-pill btn-success">دانلود</button></a>

                </td>
            </tr>
            @endforeach
            </tbody>

        </table>@else



            <div class="card">
                <h5 class="card-header">جدول فایل های ارسالی</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>نوع مدرک</th>
                            <th>عملیات</th>

                        </tr>
                        </thead> <tbody class="table-border-bottom-0"> <td>  موردی یافت نشد</td>   </tbody>

        @endif

    </div>
</div>

</div>
</div>
