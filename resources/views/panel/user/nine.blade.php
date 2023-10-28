@extends('panel.user.index')
@section('contend')
    @include('panel.admin.layouts.validat')
    @include('panel.admin.layouts.success')
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">ارسال مدارک</h5>
                <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form action="{{Route('user.send_protest.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
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
@endsection
