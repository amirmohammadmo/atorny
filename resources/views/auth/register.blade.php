<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Register Basic - Pages | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('panel/assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('panel/assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('panel/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('panel/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('panel/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('panel/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{asset('panel/assets/vendor/css/pages/page-auth.css')}}" />
    <!-- Helpers -->
    <script src="{{asset('panel/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{'panel/assets/js/config.js'}}"></script>
  </head>

  <body>
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
             <center><h4 class="mb-2">فرم ثبت نام 🚀</h4></center>
              <p class="mb-4"></p>

              <form id="formAuthentication" class="mb-3" action="{{Route('register.store')}}" method="POST">
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
                    value="{{old('name')}}"
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

                    value="{{old('phone')}}"
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
                    value="{{old('National_Code')}}"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">ایمیل</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="ایمیل خود را وارد نمایید" required value="{{old('email')}}"/>
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
                      required
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
                              required
                          />
                          <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                      </div>
                  </div>

                <button class="btn btn-primary d-grid w-100">ثبت نام</button>
              </form>

              <p class="text-center">
                <span>آیا شما اکانت دارید؟</span>
                <a href="auth-login-basic.html">
                  <span>فرم ورود</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('panel/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('panel/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('panel/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('panel/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('panel/assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{asset('panel/assets/js/main.js')}}"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
