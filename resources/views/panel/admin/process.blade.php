@extends('panel.admin.index')
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
                <form action="{{Route('admin.process.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input class="form-control" type="file" id="formFile" name="file">
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">روند پرونده</label>
                        <textarea id="basic-default-message" class="form-control" name="message"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect2" class="form-label">کاربر</label>
                        <select multiple="" class="form-select" id="exampleFormControlSelect2" aria-label="Multiple select example" name="user">
                            <option selected="">کاربر مورد نظر را انتخاب نمایید</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option> @endforeach

                        </select>
                    </div>

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
