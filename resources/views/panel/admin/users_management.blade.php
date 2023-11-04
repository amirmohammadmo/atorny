@extends('panel.admin.index')
@section('contend')

    @include('panel.admin.layouts.success')
    <div class="card">
        <h5 class="card-header">جدول کاربران</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th> نام و نام خانوادگی</th>
                    <th>ایمیل</th>
                    <th>شماره تلفن</th>
                    <th>کد ملی</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($users as $user)
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$user->name}}</strong></td>
                    <td>{{$user->email}}</td>

                    <td><span class="badge bg-label-primary me-1">{{$user->phone}}</span></td>
                    <td><span class="badge bg-label-primary me-1">{{$user->National_Code}}</span></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{Route('admin.user.edit',$user->id)}}"><i class="bx bx-edit-alt me-1"></i> ویرایش</a>
                                <a class="dropdown-item" href="{{Route('admin.Documents_users.show',$user->id)}}"><i class="bx bxs-file-doc"></i> مشاهده ی پرونده</a>
                            </div>
                        </div>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
