@extends('panel.admin.index')
@section('contend')
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
@include('panel.admin.layouts.validat')
              <!-- /Logo -->
             <center><h4 class="mb-2">ویرایش کاربران</h4></center>
              <p class="mb-4"></p>

              <form id="formAuthentication" class="mb-3" action="{{Route('admin.user.edit.Store',$id->id)}}" method="POST">
              @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">نام و نام خانوادگی</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="نام و نام خانوادگی خود را وارد نمایید"
                    autofocus
                    value="{{$id->name}}"
                    required
                  />
                </div>
                  <div class="mb-3">
                  <label for="phone" class="form-label">شماره موبایل</label>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="phone"
                    placeholder="شماره موبایل خود را وارد نمایید"

                    value="{{$id->phone}}"
                    required
                  />
                </div>
                  <div class="mb-3">
                  <label for="National_Code" class="form-label">کد ملی</label>
                  <input
                    type="text"
                    class="form-control"
                    id="National_Code"
                    name="National_Code"
                    placeholder="کد ملی"
                    value="{{$id->National_Code}}"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">ایمیل</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="ایمیل خود را وارد نمایید" required value="{{$id->email}}"/>
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">رمز عبور</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"

                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                  <div class="mb-3 form-password-toggle">
                      <label class="form-label" for="password_confirmation">تکرار رمز عبور</label>
                      <div class="input-group input-group-merge">
                          <input
                              type="password"
                              id="password_confirmation"
                              class="form-control"
                              name="password_confirmation"
                              placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                              aria-describedby="password"

                          />
                          <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                      </div>
                  </div>

                <button class="btn btn-primary d-grid w-100">ثبت نام</button>
              </form>


            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->
@endsection
