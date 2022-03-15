<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Icat CDMX') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <base href="/">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>



  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <style type="text/css">
    .btn-outline-success{
      color: #ffffff !important;
      margin-right: 5px;
    }
    .sidebar-nav .nav-link{
      background: #ffffff;
      color: #495057;
    }
    .sidebar-nav .nav-link i{
      color: #899bbd;
    }
    .footer {
      border-top: none;
    }
            .bg-success{
            background: #691C32 !important;
        }
        .btn-success {
            background: #fff !important;
            color: #691C32 !important;
            border-color: #691C32 !important;
        }

        .btn-success:hover{
            background: #691C32 !important;
            color: #ffffff !important;
        }

        .btn-scs {
            color: #fff;
            border-color: #BC955C;
            background: #BC955C;
        }

        .btn-scs:hover{
            background: #DDc9A3;
            color: #ffffff;
        }

        .content {
            text-align: center;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .position-ref {
            position: relative;
        }
        .section1{
            padding: 30px;
            color: #ffffff;
        }

        .subtitle {
            font-size: 40px;
            font-family: 'Source Sans Pro', sans-serif;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .text-green{
            color: #235B4E;
        }

        .text-success{
            color: #691C32 !important;
        }
        .text-b{
            font-weight: 600;
        }

        .text-w{
            line-height: 1.2;
        }

        .title {
            font-size: 84px;
            font-family: 'Source Sans Pro', sans-serif;
        }

        .top-right{
            padding-top: 15px;
        }

        .image{
            height: 100px !important;
        }




        .En{
            color: #4472C4;
        }
        .Aceptado{
            color: #00B050;
        }
        .Rechazado{
            color: #FF0000;
        }
        .competente{
            color: #178266;
        }
        .nocompetente{
            color: #9F2241;
        }

        .Competente{
            color: #178266;
        }
        .No{
            color: #9F2241;
        }

        .profile{
    background: #fcfcfc;
    border-right: 1px rgba(0,0,0,.1) solid;
  }

  .form-info{
    background: #e3eefb;
    color: #0070C0;
    padding: 0px 10px 0px 15px;
  }
  .link-info{
    color: #0f4c42 !important;
  }
  .step-title{
    font-size: 20px;
  }

  .number-list{
    background: #691C32;
    border-radius: 50%;
    padding: 1px 7px 1px 7px;
    color: #fff;
    font-size: 14px;
    margin-right: 10px;
  }
  .list-unstyled li{
    margin-bottom: 15px;
    font-size: 18px;
  }
  .title-steps{
    color: #691C32;
    font-size: 22px;
  }
  .steps{
    background: #eaeaea;
    padding: 25px;
  }
  .link-step{
    margin-right: 10px;
    padding-right: 10px;
    color: #999 !important;
  }
  .link-active{
    font-weight: 600;
    color: #606060;
  }
  .nav-pro{
    font-size: 25px;
  }
  .text-tg{
    font-size: 18px;
  }
  .step-active{
    color: #BC955C;
    font-weight: 600;
  }
  .text-notify{
    color: #235B4E;
  }


  </style>
  <style type="text/css">
    
    @charset "UTF-8";/*!
 * Bootstrap v5.1.3 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */:root{--bs-blue:#0d6efd;--bs-indigo:#6610f2;--bs-purple:#6f42c1;--bs-pink:#d63384;--bs-red:#dc3545;--bs-orange:#fd7e14;--bs-yellow:#ffc107;--bs-green:#198754;--bs-teal:#20c997;--bs-cyan:#0dcaf0;--bs-white:#fff;--bs-gray:#6c757d;--bs-gray-dark:#343a40;--bs-gray-100:#f8f9fa;--bs-gray-200:#e9ecef;--bs-gray-300:#dee2e6;--bs-gray-400:#ced4da;--bs-gray-500:#adb5bd;--bs-gray-600:#6c757d;--bs-gray-700:#495057;--bs-gray-800:#343a40;--bs-gray-900:#212529;--bs-primary:#0d6efd;--bs-secondary:#6c757d;--bs-success:#198754;--bs-info:#0dcaf0;--bs-warning:#ffc107;--bs-danger:#dc3545;--bs-light:#f8f9fa;--bs-dark:#212529;--bs-primary-rgb:13,110,253;--bs-secondary-rgb:108,117,125;--bs-success-rgb:25,135,84;--bs-info-rgb:13,202,240;--bs-warning-rgb:255,193,7;--bs-danger-rgb:220,53,69;--bs-light-rgb:248,249,250;--bs-dark-rgb:33,37,41;--bs-white-rgb:255,255,255;--bs-black-rgb:0,0,0;--bs-body-color-rgb:33,37,41;--bs-body-bg-rgb:255,255,255;--bs-font-sans-serif:system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--bs-font-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--bs-gradient:linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));--bs-body-font-family:var(--bs-font-sans-serif);--bs-body-font-size:1rem;--bs-body-font-weight:400;--bs-body-line-height:1.5;--bs-body-color:#212529;--bs-body-bg:#fff}*,::after,::before{box-sizing:border-box}@media (prefers-reduced-motion:no-preference){:root{scroll-behavior:smooth}}body{margin:0;font-family:var(--bs-body-font-family);font-size:var(--bs-body-font-size);font-weight:var(--bs-body-font-weight);line-height:var(--bs-body-line-height);color:var(--bs-body-color);text-align:var(--bs-body-text-align);background-color:var(--bs-body-bg);-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}hr{margin:1rem 0;color:inherit;background-color:currentColor;border:0;opacity:.25}hr:not([size]){height:1px}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{margin-top:0;margin-bottom:.5rem;font-weight:500;line-height:1.2}.h1,h1{font-size:calc(1.375rem + 1.5vw)}@media (min-width:1200px){.h1,h1{font-size:2.5rem}}.h2,h2{font-size:calc(1.325rem + .9vw)}@media (min-width:1200px){.h2,h2{font-size:2rem}}.h3,h3{font-size:calc(1.3rem + .6vw)}@media (min-width:1200px){.h3,h3{font-size:1.75rem}}.h4,h4{font-size:calc(1.275rem + .3vw)}@media (min-width:1200px){.h4,h4{font-size:1.5rem}}.h5,h5{font-size:1.25rem}.h6,h6{font-size:1rem}p{margin-top:0;margin-bottom:1rem}abbr[data-bs-original-title],abbr[title]{-webkit-text-decoration:underline dotted;text-decoration:underline dotted;cursor:help;-webkit-text-decoration-skip-ink:none;text-decoration-skip-ink:none}address{margin-bottom:1rem;font-style:normal;line-height:inherit}ol,ul{padding-left:2rem}dl,ol,ul{margin-top:0;margin-bottom:1rem}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}dt{font-weight:700}dd{margin-bottom:.5rem;margin-left:0}blockquote{margin:0 0 1rem}b,strong{font-weight:bolder}.small,small{font-size:.875em}.mark,mark{padding:.2em;background-color:#fcf8e3}sub,sup{position:relative;font-size:.75em;line-height:0;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}a{color:#0d6efd;text-decoration:underline}a:hover{color:#0a58ca}a:not([href]):not([class]),a:not([href]):not([class]):hover{color:inherit;text-decoration:none}code,kbd,pre,samp{font-family:var(--bs-font-monospace);font-size:1em;direction:ltr;unicode-bidi:bidi-override}pre{display:block;margin-top:0;margin-bottom:1rem;overflow:auto;font-size:.875em}pre code{font-size:inherit;color:inherit;word-break:normal}code{font-size:.875em;color:#d63384;word-wrap:break-word}a>code{color:inherit}kbd{padding:.2rem .4rem;font-size:.875em;color:#fff;background-color:#212529;border-radius:.2rem}kbd kbd{padding:0;font-size:1em;font-weight:700}figure{margin:0 0 1rem}img,svg{vertical-align:middle}table{caption-side:bottom;border-collapse:collapse}caption{padding-top:.5rem;padding-bottom:.5rem;color:#6c757d;text-align:left}th{text-align:inherit;text-align:-webkit-match-parent}tbody,td,tfoot,th,thead,tr{border-color:inherit;border-style:solid;border-width:0}label{display:inline-block}button{border-radius:0}button:focus:not(:focus-visible){outline:0}button,input,optgroup,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,select{text-transform:none}[role=button]{cursor:pointer}select{word-wrap:normal}select:disabled{opacity:1}[list]::-webkit-calendar-picker-indicator{display:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]:not(:disabled),[type=reset]:not(:disabled),[type=submit]:not(:disabled),button:not(:disabled){cursor:pointer}::-moz-focus-inner{padding:0;border-style:none}textarea{resize:vertical}fieldset{min-width:0;padding:0;margin:0;border:0}legend{float:left;width:100%;padding:0;margin-bottom:.5rem;font-size:calc(1.275rem + .3vw);line-height:inherit}@media (min-width:1200px){legend{font-size:1.5rem}}legend+*{clear:left}::-webkit-datetime-edit-day-field,::-webkit-datetime-edit-fields-wrapper,::-webkit-datetime-edit-hour-field,::-webkit-datetime-edit-minute,::-webkit-datetime-edit-month-field,::-webkit-datetime-edit-text,::-webkit-datetime-edit-year-field{padding:0}::-webkit-inner-spin-button{height:auto}[type=search]{outline-offset:-2px;-webkit-appearance:textfield}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-color-swatch-wrapper{padding:0}::-webkit-file-upload-button{font:inherit}::file-selector-button{font:inherit}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}output{display:inline-block}iframe{border:0}summary{display:list-item;cursor:pointer}progress{vertical-align:baseline}[hidden]{display:none!important}.lead{font-size:1.25rem;font-weight:300}.display-1{font-size:calc(1.625rem + 4.5vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-1{font-size:5rem}}.display-2{font-size:calc(1.575rem + 3.9vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-2{font-size:4.5rem}}.display-3{font-size:calc(1.525rem + 3.3vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-3{font-size:4rem}}.display-4{font-size:calc(1.475rem + 2.7vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-4{font-size:3.5rem}}.display-5{font-size:calc(1.425rem + 2.1vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-5{font-size:3rem}}.display-6{font-size:calc(1.375rem + 1.5vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-6{font-size:2.5rem}}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;list-style:none}.list-inline-item{display:inline-block}.list-inline-item:not(:last-child){margin-right:.5rem}.initialism{font-size:.875em;text-transform:uppercase}.blockquote{margin-bottom:1rem;font-size:1.25rem}.blockquote>:last-child{margin-bottom:0}.blockquote-footer{margin-top:-1rem;margin-bottom:1rem;font-size:.875em;color:#6c757d}.blockquote-footer::before{content:"— "}.img-fluid{max-width:100%;height:auto}.img-thumbnail{padding:.25rem;background-color:#fff;border:1px solid #dee2e6;border-radius:.25rem;max-width:100%;height:auto}.figure{display:inline-block}.figure-img{margin-bottom:.5rem;line-height:1}.figure-caption{font-size:.875em;color:#6c757d}.container,.container-fluid,.container-lg,.container-md,.container-sm,.container-xl,.container-xxl{width:100%;padding-right:var(--bs-gutter-x,.75rem);padding-left:var(--bs-gutter-x,.75rem);margin-right:auto;margin-left:auto}@media (min-width:576px){.container,.container-sm{max-width:540px}}@media (min-width:768px){.container,.container-md,.container-sm{max-width:720px}}@media (min-width:992px){.container,.container-lg,.container-md,.container-sm{max-width:960px}}@media (min-width:1200px){.container,.container-lg,.container-md,.container-sm,.container-xl{max-width:1140px}}@media (min-width:1400px){.container,.container-lg,.container-md,.container-sm,.container-xl,.container-xxl{max-width:1320px}}.row{--bs-gutter-x:1.5rem;--bs-gutter-y:0;display:flex;flex-wrap:wrap;margin-top:calc(-1 * var(--bs-gutter-y));margin-right:calc(-.5 * var(--bs-gutter-x));margin-left:calc(-.5 * var(--bs-gutter-x))}.row>*{flex-shrink:0;width:100%;max-width:100%;padding-right:calc(var(--bs-gutter-x) * .5);padding-left:calc(var(--bs-gutter-x) * .5);margin-top:var(--bs-gutter-y)}.col{flex:1 0 0%}.row-cols-auto>*{flex:0 0 auto;width:auto}.row-cols-1>*{flex:0 0 auto;width:100%}.row-cols-2>*{flex:0 0 auto;width:50%}.row-cols-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-4>*{flex:0 0 auto;width:25%}.row-cols-5>*{flex:0 0 auto;width:20%}.row-cols-6>*{flex:0 0 auto;width:16.6666666667%}.col-auto{flex:0 0 auto;width:auto}.col-1{flex:0 0 auto;width:8.33333333%}.col-2{flex:0 0 auto;width:16.66666667%}.col-3{flex:0 0 auto;width:25%}.col-4{flex:0 0 auto;width:33.33333333%}.col-5{flex:0 0 auto;width:41.66666667%}.col-6{flex:0 0 auto;width:50%}.col-7{flex:0 0 auto;width:58.33333333%}.col-8{flex:0 0 auto;width:66.66666667%}.col-9{flex:0 0 auto;width:75%}.col-10{flex:0 0 auto;width:83.33333333%}.col-11{flex:0 0 auto;width:91.66666667%}.col-12{flex:0 0 auto;width:100%}.offset-1{margin-left:8.33333333%}.offset-2{margin-left:16.66666667%}.offset-3{margin-left:25%}.offset-4{margin-left:33.33333333%}.offset-5{margin-left:41.66666667%}.offset-6{margin-left:50%}.offset-7{margin-left:58.33333333%}.offset-8{margin-left:66.66666667%}.offset-9{margin-left:75%}.offset-10{margin-left:83.33333333%}.offset-11{margin-left:91.66666667%}.g-0,.gx-0{--bs-gutter-x:0}.g-0,.gy-0{--bs-gutter-y:0}.g-1,.gx-1{--bs-gutter-x:0.25rem}.g-1,.gy-1{--bs-gutter-y:0.25rem}.g-2,.gx-2{--bs-gutter-x:0.5rem}.g-2,.gy-2{--bs-gutter-y:0.5rem}.g-3,.gx-3{--bs-gutter-x:1rem}.g-3,.gy-3{--bs-gutter-y:1rem}.g-4,.gx-4{--bs-gutter-x:1.5rem}.g-4,.gy-4{--bs-gutter-y:1.5rem}.g-5,.gx-5{--bs-gutter-x:3rem}.g-5,.gy-5{--bs-gutter-y:3rem}@media (min-width:576px){.col-sm{flex:1 0 0%}.row-cols-sm-auto>*{flex:0 0 auto;width:auto}.row-cols-sm-1>*{flex:0 0 auto;width:100%}.row-cols-sm-2>*{flex:0 0 auto;width:50%}.row-cols-sm-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-sm-4>*{flex:0 0 auto;width:25%}.row-cols-sm-5>*{flex:0 0 auto;width:20%}.row-cols-sm-6>*{flex:0 0 auto;width:16.6666666667%}.col-sm-auto{flex:0 0 auto;width:auto}.col-sm-1{flex:0 0 auto;width:8.33333333%}.col-sm-2{flex:0 0 auto;width:16.66666667%}.col-sm-3{flex:0 0 auto;width:25%}.col-sm-4{flex:0 0 auto;width:33.33333333%}.col-sm-5{flex:0 0 auto;width:41.66666667%}.col-sm-6{flex:0 0 auto;width:50%}.col-sm-7{flex:0 0 auto;width:58.33333333%}.col-sm-8{flex:0 0 auto;width:66.66666667%}.col-sm-9{flex:0 0 auto;width:75%}.col-sm-10{flex:0 0 auto;width:83.33333333%}.col-sm-11{flex:0 0 auto;width:91.66666667%}.col-sm-12{flex:0 0 auto;width:100%}.offset-sm-0{margin-left:0}.offset-sm-1{margin-left:8.33333333%}.offset-sm-2{margin-left:16.66666667%}.offset-sm-3{margin-left:25%}.offset-sm-4{margin-left:33.33333333%}.offset-sm-5{margin-left:41.66666667%}.offset-sm-6{margin-left:50%}.offset-sm-7{margin-left:58.33333333%}.offset-sm-8{margin-left:66.66666667%}.offset-sm-9{margin-left:75%}.offset-sm-10{margin-left:83.33333333%}.offset-sm-11{margin-left:91.66666667%}.g-sm-0,.gx-sm-0{--bs-gutter-x:0}.g-sm-0,.gy-sm-0{--bs-gutter-y:0}.g-sm-1,.gx-sm-1{--bs-gutter-x:0.25rem}.g-sm-1,.gy-sm-1{--bs-gutter-y:0.25rem}.g-sm-2,.gx-sm-2{--bs-gutter-x:0.5rem}.g-sm-2,.gy-sm-2{--bs-gutter-y:0.5rem}.g-sm-3,.gx-sm-3{--bs-gutter-x:1rem}.g-sm-3,.gy-sm-3{--bs-gutter-y:1rem}.g-sm-4,.gx-sm-4{--bs-gutter-x:1.5rem}.g-sm-4,.gy-sm-4{--bs-gutter-y:1.5rem}.g-sm-5,.gx-sm-5{--bs-gutter-x:3rem}.g-sm-5,.gy-sm-5{--bs-gutter-y:3rem}}@media (min-width:768px){.col-md{flex:1 0 0%}.row-cols-md-auto>*{flex:0 0 auto;width:auto}.row-cols-md-1>*{flex:0 0 auto;width:100%}.row-cols-md-2>*{flex:0 0 auto;width:50%}.row-cols-md-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-md-4>*{flex:0 0 auto;width:25%}.row-cols-md-5>*{flex:0 0 auto;width:20%}.row-cols-md-6>*{flex:0 0 auto;width:16.6666666667%}.col-md-auto{flex:0 0 auto;width:auto}.col-md-1{flex:0 0 auto;width:8.33333333%}.col-md-2{flex:0 0 auto;width:16.66666667%}.col-md-3{flex:0 0 auto;width:25%}.col-md-4{flex:0 0 auto;width:33.33333333%}.col-md-5{flex:0 0 auto;width:41.66666667%}.col-md-6{flex:0 0 auto;width:50%}.col-md-7{flex:0 0 auto;width:58.33333333%}.col-md-8{flex:0 0 auto;width:66.66666667%}.col-md-9{flex:0 0 auto;width:75%}.col-md-10{flex:0 0 auto;width:83.33333333%}.col-md-11{flex:0 0 auto;width:91.66666667%}.col-md-12{flex:0 0 auto;width:100%}.offset-md-0{margin-left:0}.offset-md-1{margin-left:8.33333333%}.offset-md-2{margin-left:16.66666667%}.offset-md-3{margin-left:25%}.offset-md-4{margin-left:33.33333333%}.offset-md-5{margin-left:41.66666667%}.offset-md-6{margin-left:50%}.offset-md-7{margin-left:58.33333333%}.offset-md-8{margin-left:66.66666667%}.offset-md-9{margin-left:75%}.offset-md-10{margin-left:83.33333333%}.offset-md-11{margin-left:91.66666667%}.g-md-0,.gx-md-0{--bs-gutter-x:0}.g-md-0,.gy-md-0{--bs-gutter-y:0}.g-md-1,.gx-md-1{--bs-gutter-x:0.25rem}.g-md-1,.gy-md-1{--bs-gutter-y:0.25rem}.g-md-2,.gx-md-2{--bs-gutter-x:0.5rem}.g-md-2,.gy-md-2{--bs-gutter-y:0.5rem}.g-md-3,.gx-md-3{--bs-gutter-x:1rem}.g-md-3,.gy-md-3{--bs-gutter-y:1rem}.g-md-4,.gx-md-4{--bs-gutter-x:1.5rem}.g-md-4,.gy-md-4{--bs-gutter-y:1.5rem}.g-md-5,.gx-md-5{--bs-gutter-x:3rem}.g-md-5,.gy-md-5{--bs-gutter-y:3rem}}@media (min-width:992px){.col-lg{flex:1 0 0%}.row-cols-lg-auto>*{flex:0 0 auto;width:auto}.row-cols-lg-1>*{flex:0 0 auto;width:100%}.row-cols-lg-2>*{flex:0 0 auto;width:50%}.row-cols-lg-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-lg-4>*{flex:0 0 auto;width:25%}.row-cols-lg-5>*{flex:0 0 auto;width:20%}.row-cols-lg-6>*{flex:0 0 auto;width:16.6666666667%}.col-lg-auto{flex:0 0 auto;width:auto}.col-lg-1{flex:0 0 auto;width:8.33333333%}.col-lg-2{flex:0 0 auto;width:16.66666667%}.col-lg-3{flex:0 0 auto;width:25%}.col-lg-4{flex:0 0 auto;width:33.33333333%}.col-lg-5{flex:0 0 auto;width:41.66666667%}.col-lg-6{flex:0 0 auto;width:50%}.col-lg-7{flex:0 0 auto;width:58.33333333%}.col-lg-8{flex:0 0 auto;width:66.66666667%}.col-lg-9{flex:0 0 auto;width:75%}.col-lg-10{flex:0 0 auto;width:83.33333333%}.col-lg-11{flex:0 0 auto;width:91.66666667%}.col-lg-12{flex:0 0 auto;width:100%}.offset-lg-0{margin-left:0}.offset-lg-1{margin-left:8.33333333%}.offset-lg-2{margin-left:16.66666667%}.offset-lg-3{margin-left:25%}.offset-lg-4{margin-left:33.33333333%}.offset-lg-5{margin-left:41.66666667%}.offset-lg-6{margin-left:50%}.offset-lg-7{margin-left:58.33333333%}.offset-lg-8{margin-left:66.66666667%}.offset-lg-9{margin-left:75%}.offset-lg-10{margin-left:83.33333333%}.offset-lg-11{margin-left:91.66666667%}.g-lg-0,.gx-lg-0{--bs-gutter-x:0}.g-lg-0,.gy-lg-0{--bs-gutter-y:0}.g-lg-1,.gx-lg-1{--bs-gutter-x:0.25rem}.g-lg-1,.gy-lg-1{--bs-gutter-y:0.25rem}.g-lg-2,.gx-lg-2{--bs-gutter-x:0.5rem}.g-lg-2,.gy-lg-2{--bs-gutter-y:0.5rem}.g-lg-3,.gx-lg-3{--bs-gutter-x:1rem}.g-lg-3,.gy-lg-3{--bs-gutter-y:1rem}.g-lg-4,.gx-lg-4{--bs-gutter-x:1.5rem}.g-lg-4,.gy-lg-4{--bs-gutter-y:1.5rem}.g-lg-5,.gx-lg-5{--bs-gutter-x:3rem}.g-lg-5,.gy-lg-5{--bs-gutter-y:3rem}}@media (min-width:1200px){.col-xl{flex:1 0 0%}.row-cols-xl-auto>*{flex:0 0 auto;width:auto}.row-cols-xl-1>*{flex:0 0 auto;width:100%}.row-cols-xl-2>*{flex:0 0 auto;width:50%}.row-cols-xl-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-xl-4>*{flex:0 0 auto;width:25%}.row-cols-xl-5>*{flex:0 0 auto;width:20%}.row-cols-xl-6>*{flex:0 0 auto;width:16.6666666667%}.col-xl-auto{flex:0 0 auto;width:auto}.col-xl-1{flex:0 0 auto;width:8.33333333%}.col-xl-2{flex:0 0 auto;width:16.66666667%}.col-xl-3{flex:0 0 auto;width:25%}.col-xl-4{flex:0 0 auto;width:33.33333333%}.col-xl-5{flex:0 0 auto;width:41.66666667%}.col-xl-6{flex:0 0 auto;width:50%}.col-xl-7{flex:0 0 auto;width:58.33333333%}.col-xl-8{flex:0 0 auto;width:66.66666667%}.col-xl-9{flex:0 0 auto;width:75%}.col-xl-10{flex:0 0 auto;width:83.33333333%}.col-xl-11{flex:0 0 auto;width:91.66666667%}.col-xl-12{flex:0 0 auto;width:100%}.offset-xl-0{margin-left:0}.offset-xl-1{margin-left:8.33333333%}.offset-xl-2{margin-left:16.66666667%}.offset-xl-3{margin-left:25%}.offset-xl-4{margin-left:33.33333333%}.offset-xl-5{margin-left:41.66666667%}.offset-xl-6{margin-left:50%}.offset-xl-7{margin-left:58.33333333%}.offset-xl-8{margin-left:66.66666667%}.offset-xl-9{margin-left:75%}.offset-xl-10{margin-left:83.33333333%}.offset-xl-11{margin-left:91.66666667%}.g-xl-0,.gx-xl-0{--bs-gutter-x:0}.g-xl-0,.gy-xl-0{--bs-gutter-y:0}.g-xl-1,.gx-xl-1{--bs-gutter-x:0.25rem}.g-xl-1,.gy-xl-1{--bs-gutter-y:0.25rem}.g-xl-2,.gx-xl-2{--bs-gutter-x:0.5rem}.g-xl-2,.gy-xl-2{--bs-gutter-y:0.5rem}.g-xl-3,.gx-xl-3{--bs-gutter-x:1rem}.g-xl-3,.gy-xl-3{--bs-gutter-y:1rem}.g-xl-4,.gx-xl-4{--bs-gutter-x:1.5rem}.g-xl-4,.gy-xl-4{--bs-gutter-y:1.5rem}.g-xl-5,.gx-xl-5{--bs-gutter-x:3rem}.g-xl-5,.gy-xl-5{--bs-gutter-y:3rem}}@media (min-width:1400px){.col-xxl{flex:1 0 0%}.row-cols-xxl-auto>*{flex:0 0 auto;width:auto}.row-cols-xxl-1>*{flex:0 0 auto;width:100%}.row-cols-xxl-2>*{flex:0 0 auto;width:50%}.row-cols-xxl-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-xxl-4>*{flex:0 0 auto;width:25%}.row-cols-xxl-5>*{flex:0 0 auto;width:20%}.row-cols-xxl-6>*{flex:0 0 auto;width:16.6666666667%}.col-xxl-auto{flex:0 0 auto;width:auto}.col-xxl-1{flex:0 0 auto;width:8.33333333%}.col-xxl-2{flex:0 0 auto;width:16.66666667%}.col-xxl-3{flex:0 0 auto;width:25%}.col-xxl-4{flex:0 0 auto;width:33.33333333%}.col-xxl-5{flex:0 0 auto;width:41.66666667%}.col-xxl-6{flex:0 0 auto;width:50%}.col-xxl-7{flex:0 0 auto;width:58.33333333%}.col-xxl-8{flex:0 0 auto;width:66.66666667%}.col-xxl-9{flex:0 0 auto;width:75%}.col-xxl-10{flex:0 0 auto;width:83.33333333%}.col-xxl-11{flex:0 0 auto;width:91.66666667%}.col-xxl-12{flex:0 0 auto;width:100%}.offset-xxl-0{margin-left:0}.offset-xxl-1{margin-left:8.33333333%}.offset-xxl-2{margin-left:16.66666667%}.offset-xxl-3{margin-left:25%}.offset-xxl-4{margin-left:33.33333333%}.offset-xxl-5{margin-left:41.66666667%}.offset-xxl-6{margin-left:50%}.offset-xxl-7{margin-left:58.33333333%}.offset-xxl-8{margin-left:66.66666667%}.offset-xxl-9{margin-left:75%}.offset-xxl-10{margin-left:83.33333333%}.offset-xxl-11{margin-left:91.66666667%}.g-xxl-0,.gx-xxl-0{--bs-gutter-x:0}.g-xxl-0,.gy-xxl-0{--bs-gutter-y:0}.g-xxl-1,.gx-xxl-1{--bs-gutter-x:0.25rem}.g-xxl-1,.gy-xxl-1{--bs-gutter-y:0.25rem}.g-xxl-2,.gx-xxl-2{--bs-gutter-x:0.5rem}.g-xxl-2,.gy-xxl-2{--bs-gutter-y:0.5rem}.g-xxl-3,.gx-xxl-3{--bs-gutter-x:1rem}.g-xxl-3,.gy-xxl-3{--bs-gutter-y:1rem}.g-xxl-4,.gx-xxl-4{--bs-gutter-x:1.5rem}.g-xxl-4,.gy-xxl-4{--bs-gutter-y:1.5rem}.g-xxl-5,.gx-xxl-5{--bs-gutter-x:3rem}.g-xxl-5,.gy-xxl-5{--bs-gutter-y:3rem}}.table{--bs-table-bg:transparent;--bs-table-accent-bg:transparent;--bs-table-striped-color:#212529;--bs-table-striped-bg:rgba(0, 0, 0, 0.05);--bs-table-active-color:#212529;--bs-table-active-bg:rgba(0, 0, 0, 0.1);--bs-table-hover-color:#212529;--bs-table-hover-bg:rgba(0, 0, 0, 0.075);width:100%;margin-bottom:1rem;color:#212529;vertical-align:top;border-color:#dee2e6}.table>:not(caption)>*>*{padding:.5rem .5rem;background-color:var(--bs-table-bg);border-bottom-width:1px;box-shadow:inset 0 0 0 9999px var(--bs-table-accent-bg)}.table>tbody{vertical-align:inherit}.table>thead{vertical-align:bottom}.table>:not(:first-child){border-top:2px solid currentColor}.caption-top{caption-side:top}.table-sm>:not(caption)>*>*{padding:.25rem .25rem}.table-bordered>:not(caption)>*{border-width:1px 0}.table-bordered>:not(caption)>*>*{border-width:0 1px}.table-borderless>:not(caption)>*>*{border-bottom-width:0}.table-borderless>:not(:first-child){border-top-width:0}.table-striped>tbody>tr:nth-of-type(odd)>*{--bs-table-accent-bg:var(--bs-table-striped-bg);color:var(--bs-table-striped-color)}.table-active{--bs-table-accent-bg:var(--bs-table-active-bg);color:var(--bs-table-active-color)}.table-hover>tbody>tr:hover>*{--bs-table-accent-bg:var(--bs-table-hover-bg);color:var(--bs-table-hover-color)}.table-primary{--bs-table-bg:#cfe2ff;--bs-table-striped-bg:#c5d7f2;--bs-table-striped-color:#000;--bs-table-active-bg:#bacbe6;--bs-table-active-color:#000;--bs-table-hover-bg:#bfd1ec;--bs-table-hover-color:#000;color:#000;border-color:#bacbe6}.table-secondary{--bs-table-bg:#e2e3e5;--bs-table-striped-bg:#d7d8da;--bs-table-striped-color:#000;--bs-table-active-bg:#cbccce;--bs-table-active-color:#000;--bs-table-hover-bg:#d1d2d4;--bs-table-hover-color:#000;color:#000;border-color:#cbccce}.table-success{--bs-table-bg:#d1e7dd;--bs-table-striped-bg:#c7dbd2;--bs-table-striped-color:#000;--bs-table-active-bg:#bcd0c7;--bs-table-active-color:#000;--bs-table-hover-bg:#c1d6cc;--bs-table-hover-color:#000;color:#000;border-color:#bcd0c7}.table-info{--bs-table-bg:#cff4fc;--bs-table-striped-bg:#c5e8ef;--bs-table-striped-color:#000;--bs-table-active-bg:#badce3;--bs-table-active-color:#000;--bs-table-hover-bg:#bfe2e9;--bs-table-hover-color:#000;color:#000;border-color:#badce3}.table-warning{--bs-table-bg:#fff3cd;--bs-table-striped-bg:#f2e7c3;--bs-table-striped-color:#000;--bs-table-active-bg:#e6dbb9;--bs-table-active-color:#000;--bs-table-hover-bg:#ece1be;--bs-table-hover-color:#000;color:#000;border-color:#e6dbb9}.table-danger{--bs-table-bg:#f8d7da;--bs-table-striped-bg:#eccccf;--bs-table-striped-color:#000;--bs-table-active-bg:#dfc2c4;--bs-table-active-color:#000;--bs-table-hover-bg:#e5c7ca;--bs-table-hover-color:#000;color:#000;border-color:#dfc2c4}.table-light{--bs-table-bg:#f8f9fa;--bs-table-striped-bg:#ecedee;--bs-table-striped-color:#000;--bs-table-active-bg:#dfe0e1;--bs-table-active-color:#000;--bs-table-hover-bg:#e5e6e7;--bs-table-hover-color:#000;color:#000;border-color:#dfe0e1}.table-dark{--bs-table-bg:#212529;--bs-table-striped-bg:#2c3034;--bs-table-striped-color:#fff;--bs-table-active-bg:#373b3e;--bs-table-active-color:#fff;--bs-table-hover-bg:#323539;--bs-table-hover-color:#fff;color:#fff;border-color:#373b3e}.table-responsive{overflow-x:auto;-webkit-overflow-scrolling:touch}@media (max-width:575.98px){.table-responsive-sm{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width:767.98px){.table-responsive-md{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width:991.98px){.table-responsive-lg{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width:1199.98px){.table-responsive-xl{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width:1399.98px){.table-responsive-xxl{overflow-x:auto;-webkit-overflow-scrolling:touch}}.form-label{margin-bottom:.5rem}.col-form-label{padding-top:calc(.375rem + 1px);padding-bottom:calc(.375rem + 1px);margin-bottom:0;font-size:inherit;line-height:1.5}.col-form-label-lg{padding-top:calc(.5rem + 1px);padding-bottom:calc(.5rem + 1px);font-size:1.25rem}.col-form-label-sm{padding-top:calc(.25rem + 1px);padding-bottom:calc(.25rem + 1px);font-size:.875rem}.form-text{margin-top:.25rem;font-size:.875em;color:#6c757d}.form-control{display:block;width:100%;padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;-webkit-appearance:none;-moz-appearance:none;appearance:none;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-control{transition:none}}.form-control[type=file]{overflow:hidden}.form-control[type=file]:not(:disabled):not([readonly]){cursor:pointer}.form-control:focus{color:#212529;background-color:#fff;border-color:#86b7fe;outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.form-control::-webkit-date-and-time-value{height:1.5em}.form-control::-moz-placeholder{color:#6c757d;opacity:1}.form-control::placeholder{color:#6c757d;opacity:1}.form-control:disabled,.form-control[readonly]{background-color:#e9ecef;opacity:1}.form-control::-webkit-file-upload-button{padding:.375rem .75rem;margin:-.375rem -.75rem;-webkit-margin-end:.75rem;margin-inline-end:.75rem;color:#212529;background-color:#e9ecef;pointer-events:none;border-color:inherit;border-style:solid;border-width:0;border-inline-end-width:1px;border-radius:0;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}.form-control::file-selector-button{padding:.375rem .75rem;margin:-.375rem -.75rem;-webkit-margin-end:.75rem;margin-inline-end:.75rem;color:#212529;background-color:#e9ecef;pointer-events:none;border-color:inherit;border-style:solid;border-width:0;border-inline-end-width:1px;border-radius:0;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-control::-webkit-file-upload-button{-webkit-transition:none;transition:none}.form-control::file-selector-button{transition:none}}.form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button{background-color:#dde0e3}.form-control:hover:not(:disabled):not([readonly])::file-selector-button{background-color:#dde0e3}.form-control::-webkit-file-upload-button{padding:.375rem .75rem;margin:-.375rem -.75rem;-webkit-margin-end:.75rem;margin-inline-end:.75rem;color:#212529;background-color:#e9ecef;pointer-events:none;border-color:inherit;border-style:solid;border-width:0;border-inline-end-width:1px;border-radius:0;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-control::-webkit-file-upload-button{-webkit-transition:none;transition:none}}.form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button{background-color:#dde0e3}.form-control-plaintext{display:block;width:100%;padding:.375rem 0;margin-bottom:0;line-height:1.5;color:#212529;background-color:transparent;border:solid transparent;border-width:1px 0}.form-control-plaintext.form-control-lg,.form-control-plaintext.form-control-sm{padding-right:0;padding-left:0}.form-control-sm{min-height:calc(1.5em + .5rem + 2px);padding:.25rem .5rem;font-size:.875rem;border-radius:.2rem}.form-control-sm::-webkit-file-upload-button{padding:.25rem .5rem;margin:-.25rem -.5rem;-webkit-margin-end:.5rem;margin-inline-end:.5rem}.form-control-sm::file-selector-button{padding:.25rem .5rem;margin:-.25rem -.5rem;-webkit-margin-end:.5rem;margin-inline-end:.5rem}.form-control-sm::-webkit-file-upload-button{padding:.25rem .5rem;margin:-.25rem -.5rem;-webkit-margin-end:.5rem;margin-inline-end:.5rem}.form-control-lg{min-height:calc(1.5em + 1rem + 2px);padding:.5rem 1rem;font-size:1.25rem;border-radius:.3rem}.form-control-lg::-webkit-file-upload-button{padding:.5rem 1rem;margin:-.5rem -1rem;-webkit-margin-end:1rem;margin-inline-end:1rem}.form-control-lg::file-selector-button{padding:.5rem 1rem;margin:-.5rem -1rem;-webkit-margin-end:1rem;margin-inline-end:1rem}.form-control-lg::-webkit-file-upload-button{padding:.5rem 1rem;margin:-.5rem -1rem;-webkit-margin-end:1rem;margin-inline-end:1rem}textarea.form-control{min-height:calc(1.5em + .75rem + 2px)}textarea.form-control-sm{min-height:calc(1.5em + .5rem + 2px)}textarea.form-control-lg{min-height:calc(1.5em + 1rem + 2px)}.form-control-color{width:3rem;height:auto;padding:.375rem}.form-control-color:not(:disabled):not([readonly]){cursor:pointer}.form-control-color::-moz-color-swatch{height:1.5em;border-radius:.25rem}.form-control-color::-webkit-color-swatch{height:1.5em;border-radius:.25rem}.form-select{display:block;width:100%;padding:.375rem 2.25rem .375rem .75rem;-moz-padding-start:calc(0.75rem - 3px);font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");background-repeat:no-repeat;background-position:right .75rem center;background-size:16px 12px;border:1px solid #ced4da;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;-webkit-appearance:none;-moz-appearance:none;appearance:none}@media (prefers-reduced-motion:reduce){.form-select{transition:none}}.form-select:focus{border-color:#86b7fe;outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.form-select[multiple],.form-select[size]:not([size="1"]){padding-right:.75rem;background-image:none}.form-select:disabled{background-color:#e9ecef}.form-select:-moz-focusring{color:transparent;text-shadow:0 0 0 #212529}.form-select-sm{padding-top:.25rem;padding-bottom:.25rem;padding-left:.5rem;font-size:.875rem;border-radius:.2rem}.form-select-lg{padding-top:.5rem;padding-bottom:.5rem;padding-left:1rem;font-size:1.25rem;border-radius:.3rem}.form-check{display:block;min-height:1.5rem;padding-left:1.5em;margin-bottom:.125rem}.form-check .form-check-input{float:left;margin-left:-1.5em}.form-check-input{width:1em;height:1em;margin-top:.25em;vertical-align:top;background-color:#fff;background-repeat:no-repeat;background-position:center;background-size:contain;border:1px solid rgba(0,0,0,.25);-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-print-color-adjust:exact;color-adjust:exact}.form-check-input[type=checkbox]{border-radius:.25em}.form-check-input[type=radio]{border-radius:50%}.form-check-input:active{filter:brightness(90%)}.form-check-input:focus{border-color:#86b7fe;outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.form-check-input:checked{background-color:#0d6efd;border-color:#0d6efd}.form-check-input:checked[type=checkbox]{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e")}.form-check-input:checked[type=radio]{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e")}.form-check-input[type=checkbox]:indeterminate{background-color:#0d6efd;border-color:#0d6efd;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e")}.form-check-input:disabled{pointer-events:none;filter:none;opacity:.5}.form-check-input:disabled~.form-check-label,.form-check-input[disabled]~.form-check-label{opacity:.5}.form-switch{padding-left:2.5em}.form-switch .form-check-input{width:2em;margin-left:-2.5em;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");background-position:left center;border-radius:2em;transition:background-position .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-switch .form-check-input{transition:none}}.form-switch .form-check-input:focus{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%2386b7fe'/%3e%3c/svg%3e")}.form-switch .form-check-input:checked{background-position:right center;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")}.form-check-inline{display:inline-block;margin-right:1rem}.btn-check{position:absolute;clip:rect(0,0,0,0);pointer-events:none}.btn-check:disabled+.btn,.btn-check[disabled]+.btn{pointer-events:none;filter:none;opacity:.65}.form-range{width:100%;height:1.5rem;padding:0;background-color:transparent;-webkit-appearance:none;-moz-appearance:none;appearance:none}.form-range:focus{outline:0}.form-range:focus::-webkit-slider-thumb{box-shadow:0 0 0 1px #fff,0 0 0 .25rem rgba(13,110,253,.25)}.form-range:focus::-moz-range-thumb{box-shadow:0 0 0 1px #fff,0 0 0 .25rem rgba(13,110,253,.25)}.form-range::-moz-focus-outer{border:0}.form-range::-webkit-slider-thumb{width:1rem;height:1rem;margin-top:-.25rem;background-color:#0d6efd;border:0;border-radius:1rem;-webkit-transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-webkit-appearance:none;appearance:none}@media (prefers-reduced-motion:reduce){.form-range::-webkit-slider-thumb{-webkit-transition:none;transition:none}}.form-range::-webkit-slider-thumb:active{background-color:#b6d4fe}.form-range::-webkit-slider-runnable-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:#dee2e6;border-color:transparent;border-radius:1rem}.form-range::-moz-range-thumb{width:1rem;height:1rem;background-color:#0d6efd;border:0;border-radius:1rem;-moz-transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-moz-appearance:none;appearance:none}@media (prefers-reduced-motion:reduce){.form-range::-moz-range-thumb{-moz-transition:none;transition:none}}.form-range::-moz-range-thumb:active{background-color:#b6d4fe}.form-range::-moz-range-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:#dee2e6;border-color:transparent;border-radius:1rem}.form-range:disabled{pointer-events:none}.form-range:disabled::-webkit-slider-thumb{background-color:#adb5bd}.form-range:disabled::-moz-range-thumb{background-color:#adb5bd}.form-floating{position:relative}.form-floating>.form-control,.form-floating>.form-select{height:calc(3.5rem + 2px);line-height:1.25}.form-floating>label{position:absolute;top:0;left:0;height:100%;padding:1rem .75rem;pointer-events:none;border:1px solid transparent;transform-origin:0 0;transition:opacity .1s ease-in-out,transform .1s ease-in-out}@media (prefers-reduced-motion:reduce){.form-floating>label{transition:none}}.form-floating>.form-control{padding:1rem .75rem}.form-floating>.form-control::-moz-placeholder{color:transparent}.form-floating>.form-control::placeholder{color:transparent}.form-floating>.form-control:not(:-moz-placeholder-shown){padding-top:1.625rem;padding-bottom:.625rem}.form-floating>.form-control:focus,.form-floating>.form-control:not(:placeholder-shown){padding-top:1.625rem;padding-bottom:.625rem}.form-floating>.form-control:-webkit-autofill{padding-top:1.625rem;padding-bottom:.625rem}.form-floating>.form-select{padding-top:1.625rem;padding-bottom:.625rem}.form-floating>.form-control:not(:-moz-placeholder-shown)~label{opacity:.65;transform:scale(.85) translateY(-.5rem) translateX(.15rem)}.form-floating>.form-control:focus~label,.form-floating>.form-control:not(:placeholder-shown)~label,.form-floating>.form-select~label{opacity:.65;transform:scale(.85) translateY(-.5rem) translateX(.15rem)}.form-floating>.form-control:-webkit-autofill~label{opacity:.65;transform:scale(.85) translateY(-.5rem) translateX(.15rem)}.input-group{position:relative;display:flex;flex-wrap:wrap;align-items:stretch;width:100%}.input-group>.form-control,.input-group>.form-select{position:relative;flex:1 1 auto;width:1%;min-width:0}.input-group>.form-control:focus,.input-group>.form-select:focus{z-index:3}.input-group .btn{position:relative;z-index:2}.input-group .btn:focus{z-index:3}.input-group-text{display:flex;align-items:center;padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:center;white-space:nowrap;background-color:#e9ecef;border:1px solid #ced4da;border-radius:.25rem}.input-group-lg>.btn,.input-group-lg>.form-control,.input-group-lg>.form-select,.input-group-lg>.input-group-text{padding:.5rem 1rem;font-size:1.25rem;border-radius:.3rem}.input-group-sm>.btn,.input-group-sm>.form-control,.input-group-sm>.form-select,.input-group-sm>.input-group-text{padding:.25rem .5rem;font-size:.875rem;border-radius:.2rem}.input-group-lg>.form-select,.input-group-sm>.form-select{padding-right:3rem}.input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),.input-group:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu){border-top-right-radius:0;border-bottom-right-radius:0}.input-group.has-validation>.dropdown-toggle:nth-last-child(n+4),.input-group.has-validation>:nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu){border-top-right-radius:0;border-bottom-right-radius:0}.input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback){margin-left:-1px;border-top-left-radius:0;border-bottom-left-radius:0}.valid-feedback{display:none;width:100%;margin-top:.25rem;font-size:.875em;color:#198754}.valid-tooltip{position:absolute;top:100%;z-index:5;display:none;max-width:100%;padding:.25rem .5rem;margin-top:.1rem;font-size:.875rem;color:#fff;background-color:rgba(25,135,84,.9);border-radius:.25rem}.is-valid~.valid-feedback,.is-valid~.valid-tooltip,.was-validated :valid~.valid-feedback,.was-validated :valid~.valid-tooltip{display:block}.form-control.is-valid,.was-validated .form-control:valid{border-color:#198754;padding-right:calc(1.5em + .75rem);background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");background-repeat:no-repeat;background-position:right calc(.375em + .1875rem) center;background-size:calc(.75em + .375rem) calc(.75em + .375rem)}.form-control.is-valid:focus,.was-validated .form-control:valid:focus{border-color:#198754;box-shadow:0 0 0 .25rem rgba(25,135,84,.25)}.was-validated textarea.form-control:valid,textarea.form-control.is-valid{padding-right:calc(1.5em + .75rem);background-position:top calc(.375em + .1875rem) right calc(.375em + .1875rem)}.form-select.is-valid,.was-validated .form-select:valid{border-color:#198754}.form-select.is-valid:not([multiple]):not([size]),.form-select.is-valid:not([multiple])[size="1"],.was-validated .form-select:valid:not([multiple]):not([size]),.was-validated .form-select:valid:not([multiple])[size="1"]{padding-right:4.125rem;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"),url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");background-position:right .75rem center,center right 2.25rem;background-size:16px 12px,calc(.75em + .375rem) calc(.75em + .375rem)}.form-select.is-valid:focus,.was-validated .form-select:valid:focus{border-color:#198754;box-shadow:0 0 0 .25rem rgba(25,135,84,.25)}.form-check-input.is-valid,.was-validated .form-check-input:valid{border-color:#198754}.form-check-input.is-valid:checked,.was-validated .form-check-input:valid:checked{background-color:#198754}.form-check-input.is-valid:focus,.was-validated .form-check-input:valid:focus{box-shadow:0 0 0 .25rem rgba(25,135,84,.25)}.form-check-input.is-valid~.form-check-label,.was-validated .form-check-input:valid~.form-check-label{color:#198754}.form-check-inline .form-check-input~.valid-feedback{margin-left:.5em}.input-group .form-control.is-valid,.input-group .form-select.is-valid,.was-validated .input-group .form-control:valid,.was-validated .input-group .form-select:valid{z-index:1}.input-group .form-control.is-valid:focus,.input-group .form-select.is-valid:focus,.was-validated .input-group .form-control:valid:focus,.was-validated .input-group .form-select:valid:focus{z-index:3}.invalid-feedback{display:none;width:100%;margin-top:.25rem;font-size:.875em;color:#dc3545}.invalid-tooltip{position:absolute;top:100%;z-index:5;display:none;max-width:100%;padding:.25rem .5rem;margin-top:.1rem;font-size:.875rem;color:#fff;background-color:rgba(220,53,69,.9);border-radius:.25rem}.is-invalid~.invalid-feedback,.is-invalid~.invalid-tooltip,.was-validated :invalid~.invalid-feedback,.was-validated :invalid~.invalid-tooltip{display:block}.form-control.is-invalid,.was-validated .form-control:invalid{border-color:#dc3545;padding-right:calc(1.5em + .75rem);background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");background-repeat:no-repeat;background-position:right calc(.375em + .1875rem) center;background-size:calc(.75em + .375rem) calc(.75em + .375rem)}.form-control.is-invalid:focus,.was-validated .form-control:invalid:focus{border-color:#dc3545;box-shadow:0 0 0 .25rem rgba(220,53,69,.25)}.was-validated textarea.form-control:invalid,textarea.form-control.is-invalid{padding-right:calc(1.5em + .75rem);background-position:top calc(.375em + .1875rem) right calc(.375em + .1875rem)}.form-select.is-invalid,.was-validated .form-select:invalid{border-color:#dc3545}.form-select.is-invalid:not([multiple]):not([size]),.form-select.is-invalid:not([multiple])[size="1"],.was-validated .form-select:invalid:not([multiple]):not([size]),.was-validated .form-select:invalid:not([multiple])[size="1"]{padding-right:4.125rem;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"),url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");background-position:right .75rem center,center right 2.25rem;background-size:16px 12px,calc(.75em + .375rem) calc(.75em + .375rem)}.form-select.is-invalid:focus,.was-validated .form-select:invalid:focus{border-color:#dc3545;box-shadow:0 0 0 .25rem rgba(220,53,69,.25)}.form-check-input.is-invalid,.was-validated .form-check-input:invalid{border-color:#dc3545}.form-check-input.is-invalid:checked,.was-validated .form-check-input:invalid:checked{background-color:#dc3545}.form-check-input.is-invalid:focus,.was-validated .form-check-input:invalid:focus{box-shadow:0 0 0 .25rem rgba(220,53,69,.25)}.form-check-input.is-invalid~.form-check-label,.was-validated .form-check-input:invalid~.form-check-label{color:#dc3545}.form-check-inline .form-check-input~.invalid-feedback{margin-left:.5em}.input-group .form-control.is-invalid,.input-group .form-select.is-invalid,.was-validated .input-group .form-control:invalid,.was-validated .input-group .form-select:invalid{z-index:2}.input-group .form-control.is-invalid:focus,.input-group .form-select.is-invalid:focus,.was-validated .input-group .form-control:invalid:focus,.was-validated .input-group .form-select:invalid:focus{z-index:3}.btn{display:inline-block;font-weight:400;line-height:1.5;color:#212529;text-align:center;text-decoration:none;vertical-align:middle;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.btn{transition:none}}.btn:hover{color:#212529}.btn-check:focus+.btn,.btn:focus{outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.btn.disabled,.btn:disabled,fieldset:disabled .btn{pointer-events:none;opacity:.65}.btn-primary{color:#fff;background-color:#0d6efd;border-color:#0d6efd}.btn-primary:hover{color:#fff;background-color:#0b5ed7;border-color:#0a58ca}.btn-check:focus+.btn-primary,.btn-primary:focus{color:#fff;background-color:#0b5ed7;border-color:#0a58ca;box-shadow:0 0 0 .25rem rgba(49,132,253,.5)}.btn-check:active+.btn-primary,.btn-check:checked+.btn-primary,.btn-primary.active,.btn-primary:active,.show>.btn-primary.dropdown-toggle{color:#fff;background-color:#0a58ca;border-color:#0a53be}.btn-check:active+.btn-primary:focus,.btn-check:checked+.btn-primary:focus,.btn-primary.active:focus,.btn-primary:active:focus,.show>.btn-primary.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(49,132,253,.5)}.btn-primary.disabled,.btn-primary:disabled{color:#fff;background-color:#0d6efd;border-color:#0d6efd}.btn-secondary{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-secondary:hover{color:#fff;background-color:#5c636a;border-color:#565e64}.btn-check:focus+.btn-secondary,.btn-secondary:focus{color:#fff;background-color:#5c636a;border-color:#565e64;box-shadow:0 0 0 .25rem rgba(130,138,145,.5)}.btn-check:active+.btn-secondary,.btn-check:checked+.btn-secondary,.btn-secondary.active,.btn-secondary:active,.show>.btn-secondary.dropdown-toggle{color:#fff;background-color:#565e64;border-color:#51585e}.btn-check:active+.btn-secondary:focus,.btn-check:checked+.btn-secondary:focus,.btn-secondary.active:focus,.btn-secondary:active:focus,.show>.btn-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(130,138,145,.5)}.btn-secondary.disabled,.btn-secondary:disabled{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-success{color:#fff;background-color:#198754;border-color:#198754}.btn-success:hover{color:#fff;background-color:#157347;border-color:#146c43}.btn-check:focus+.btn-success,.btn-success:focus{color:#fff;background-color:#157347;border-color:#146c43;box-shadow:0 0 0 .25rem rgba(60,153,110,.5)}.btn-check:active+.btn-success,.btn-check:checked+.btn-success,.btn-success.active,.btn-success:active,.show>.btn-success.dropdown-toggle{color:#fff;background-color:#146c43;border-color:#13653f}.btn-check:active+.btn-success:focus,.btn-check:checked+.btn-success:focus,.btn-success.active:focus,.btn-success:active:focus,.show>.btn-success.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(60,153,110,.5)}.btn-success.disabled,.btn-success:disabled{color:#fff;background-color:#198754;border-color:#198754}.btn-info{color:#000;background-color:#0dcaf0;border-color:#0dcaf0}.btn-info:hover{color:#000;background-color:#31d2f2;border-color:#25cff2}.btn-check:focus+.btn-info,.btn-info:focus{color:#000;background-color:#31d2f2;border-color:#25cff2;box-shadow:0 0 0 .25rem rgba(11,172,204,.5)}.btn-check:active+.btn-info,.btn-check:checked+.btn-info,.btn-info.active,.btn-info:active,.show>.btn-info.dropdown-toggle{color:#000;background-color:#3dd5f3;border-color:#25cff2}.btn-check:active+.btn-info:focus,.btn-check:checked+.btn-info:focus,.btn-info.active:focus,.btn-info:active:focus,.show>.btn-info.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(11,172,204,.5)}.btn-info.disabled,.btn-info:disabled{color:#000;background-color:#0dcaf0;border-color:#0dcaf0}.btn-warning{color:#000;background-color:#ffc107;border-color:#ffc107}.btn-warning:hover{color:#000;background-color:#ffca2c;border-color:#ffc720}.btn-check:focus+.btn-warning,.btn-warning:focus{color:#000;background-color:#ffca2c;border-color:#ffc720;box-shadow:0 0 0 .25rem rgba(217,164,6,.5)}.btn-check:active+.btn-warning,.btn-check:checked+.btn-warning,.btn-warning.active,.btn-warning:active,.show>.btn-warning.dropdown-toggle{color:#000;background-color:#ffcd39;border-color:#ffc720}.btn-check:active+.btn-warning:focus,.btn-check:checked+.btn-warning:focus,.btn-warning.active:focus,.btn-warning:active:focus,.show>.btn-warning.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(217,164,6,.5)}.btn-warning.disabled,.btn-warning:disabled{color:#000;background-color:#ffc107;border-color:#ffc107}.btn-danger{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-danger:hover{color:#fff;background-color:#bb2d3b;border-color:#b02a37}.btn-check:focus+.btn-danger,.btn-danger:focus{color:#fff;background-color:#bb2d3b;border-color:#b02a37;box-shadow:0 0 0 .25rem rgba(225,83,97,.5)}.btn-check:active+.btn-danger,.btn-check:checked+.btn-danger,.btn-danger.active,.btn-danger:active,.show>.btn-danger.dropdown-toggle{color:#fff;background-color:#b02a37;border-color:#a52834}.btn-check:active+.btn-danger:focus,.btn-check:checked+.btn-danger:focus,.btn-danger.active:focus,.btn-danger:active:focus,.show>.btn-danger.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(225,83,97,.5)}.btn-danger.disabled,.btn-danger:disabled{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-light{color:#000;background-color:#f8f9fa;border-color:#f8f9fa}.btn-light:hover{color:#000;background-color:#f9fafb;border-color:#f9fafb}.btn-check:focus+.btn-light,.btn-light:focus{color:#000;background-color:#f9fafb;border-color:#f9fafb;box-shadow:0 0 0 .25rem rgba(211,212,213,.5)}.btn-check:active+.btn-light,.btn-check:checked+.btn-light,.btn-light.active,.btn-light:active,.show>.btn-light.dropdown-toggle{color:#000;background-color:#f9fafb;border-color:#f9fafb}.btn-check:active+.btn-light:focus,.btn-check:checked+.btn-light:focus,.btn-light.active:focus,.btn-light:active:focus,.show>.btn-light.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(211,212,213,.5)}.btn-light.disabled,.btn-light:disabled{color:#000;background-color:#f8f9fa;border-color:#f8f9fa}.btn-dark{color:#fff;background-color:#212529;border-color:#212529}.btn-dark:hover{color:#fff;background-color:#1c1f23;border-color:#1a1e21}.btn-check:focus+.btn-dark,.btn-dark:focus{color:#fff;background-color:#1c1f23;border-color:#1a1e21;box-shadow:0 0 0 .25rem rgba(66,70,73,.5)}.btn-check:active+.btn-dark,.btn-check:checked+.btn-dark,.btn-dark.active,.btn-dark:active,.show>.btn-dark.dropdown-toggle{color:#fff;background-color:#1a1e21;border-color:#191c1f}.btn-check:active+.btn-dark:focus,.btn-check:checked+.btn-dark:focus,.btn-dark.active:focus,.btn-dark:active:focus,.show>.btn-dark.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(66,70,73,.5)}.btn-dark.disabled,.btn-dark:disabled{color:#fff;background-color:#212529;border-color:#212529}.btn-outline-primary{color:#0d6efd;border-color:#0d6efd}.btn-outline-primary:hover{color:#fff;background-color:#0d6efd;border-color:#0d6efd}.btn-check:focus+.btn-outline-primary,.btn-outline-primary:focus{box-shadow:0 0 0 .25rem rgba(13,110,253,.5)}.btn-check:active+.btn-outline-primary,.btn-check:checked+.btn-outline-primary,.btn-outline-primary.active,.btn-outline-primary.dropdown-toggle.show,.btn-outline-primary:active{color:#fff;background-color:#0d6efd;border-color:#0d6efd}.btn-check:active+.btn-outline-primary:focus,.btn-check:checked+.btn-outline-primary:focus,.btn-outline-primary.active:focus,.btn-outline-primary.dropdown-toggle.show:focus,.btn-outline-primary:active:focus{box-shadow:0 0 0 .25rem rgba(13,110,253,.5)}.btn-outline-primary.disabled,.btn-outline-primary:disabled{color:#0d6efd;background-color:transparent}.btn-outline-secondary{color:#6c757d;border-color:#6c757d}.btn-outline-secondary:hover{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-check:focus+.btn-outline-secondary,.btn-outline-secondary:focus{box-shadow:0 0 0 .25rem rgba(108,117,125,.5)}.btn-check:active+.btn-outline-secondary,.btn-check:checked+.btn-outline-secondary,.btn-outline-secondary.active,.btn-outline-secondary.dropdown-toggle.show,.btn-outline-secondary:active{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-check:active+.btn-outline-secondary:focus,.btn-check:checked+.btn-outline-secondary:focus,.btn-outline-secondary.active:focus,.btn-outline-secondary.dropdown-toggle.show:focus,.btn-outline-secondary:active:focus{box-shadow:0 0 0 .25rem rgba(108,117,125,.5)}.btn-outline-secondary.disabled,.btn-outline-secondary:disabled{color:#6c757d;background-color:transparent}.btn-outline-success{color:#198754;border-color:#198754}.btn-outline-success:hover{color:#fff;background-color:#198754;border-color:#198754}.btn-check:focus+.btn-outline-success,.btn-outline-success:focus{box-shadow:0 0 0 .25rem rgba(25,135,84,.5)}.btn-check:active+.btn-outline-success,.btn-check:checked+.btn-outline-success,.btn-outline-success.active,.btn-outline-success.dropdown-toggle.show,.btn-outline-success:active{color:#fff;background-color:#198754;border-color:#198754}.btn-check:active+.btn-outline-success:focus,.btn-check:checked+.btn-outline-success:focus,.btn-outline-success.active:focus,.btn-outline-success.dropdown-toggle.show:focus,.btn-outline-success:active:focus{box-shadow:0 0 0 .25rem rgba(25,135,84,.5)}.btn-outline-success.disabled,.btn-outline-success:disabled{color:#198754;background-color:transparent}.btn-outline-info{color:#0dcaf0;border-color:#0dcaf0}.btn-outline-info:hover{color:#000;background-color:#0dcaf0;border-color:#0dcaf0}.btn-check:focus+.btn-outline-info,.btn-outline-info:focus{box-shadow:0 0 0 .25rem rgba(13,202,240,.5)}.btn-check:active+.btn-outline-info,.btn-check:checked+.btn-outline-info,.btn-outline-info.active,.btn-outline-info.dropdown-toggle.show,.btn-outline-info:active{color:#000;background-color:#0dcaf0;border-color:#0dcaf0}.btn-check:active+.btn-outline-info:focus,.btn-check:checked+.btn-outline-info:focus,.btn-outline-info.active:focus,.btn-outline-info.dropdown-toggle.show:focus,.btn-outline-info:active:focus{box-shadow:0 0 0 .25rem rgba(13,202,240,.5)}.btn-outline-info.disabled,.btn-outline-info:disabled{color:#0dcaf0;background-color:transparent}.btn-outline-warning{color:#ffc107;border-color:#ffc107}.btn-outline-warning:hover{color:#000;background-color:#ffc107;border-color:#ffc107}.btn-check:focus+.btn-outline-warning,.btn-outline-warning:focus{box-shadow:0 0 0 .25rem rgba(255,193,7,.5)}.btn-check:active+.btn-outline-warning,.btn-check:checked+.btn-outline-warning,.btn-outline-warning.active,.btn-outline-warning.dropdown-toggle.show,.btn-outline-warning:active{color:#000;background-color:#ffc107;border-color:#ffc107}.btn-check:active+.btn-outline-warning:focus,.btn-check:checked+.btn-outline-warning:focus,.btn-outline-warning.active:focus,.btn-outline-warning.dropdown-toggle.show:focus,.btn-outline-warning:active:focus{box-shadow:0 0 0 .25rem rgba(255,193,7,.5)}.btn-outline-warning.disabled,.btn-outline-warning:disabled{color:#ffc107;background-color:transparent}.btn-outline-danger{color:#dc3545;border-color:#dc3545}.btn-outline-danger:hover{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-check:focus+.btn-outline-danger,.btn-outline-danger:focus{box-shadow:0 0 0 .25rem rgba(220,53,69,.5)}.btn-check:active+.btn-outline-danger,.btn-check:checked+.btn-outline-danger,.btn-outline-danger.active,.btn-outline-danger.dropdown-toggle.show,.btn-outline-danger:active{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-check:active+.btn-outline-danger:focus,.btn-check:checked+.btn-outline-danger:focus,.btn-outline-danger.active:focus,.btn-outline-danger.dropdown-toggle.show:focus,.btn-outline-danger:active:focus{box-shadow:0 0 0 .25rem rgba(220,53,69,.5)}.btn-outline-danger.disabled,.btn-outline-danger:disabled{color:#dc3545;background-color:transparent}.btn-outline-light{color:#f8f9fa;border-color:#f8f9fa}.btn-outline-light:hover{color:#000;background-color:#f8f9fa;border-color:#f8f9fa}.btn-check:focus+.btn-outline-light,.btn-outline-light:focus{box-shadow:0 0 0 .25rem rgba(248,249,250,.5)}.btn-check:active+.btn-outline-light,.btn-check:checked+.btn-outline-light,.btn-outline-light.active,.btn-outline-light.dropdown-toggle.show,.btn-outline-light:active{color:#000;background-color:#f8f9fa;border-color:#f8f9fa}.btn-check:active+.btn-outline-light:focus,.btn-check:checked+.btn-outline-light:focus,.btn-outline-light.active:focus,.btn-outline-light.dropdown-toggle.show:focus,.btn-outline-light:active:focus{box-shadow:0 0 0 .25rem rgba(248,249,250,.5)}.btn-outline-light.disabled,.btn-outline-light:disabled{color:#f8f9fa;background-color:transparent}.btn-outline-dark{color:#212529;border-color:#212529}.btn-outline-dark:hover{color:#fff;background-color:#212529;border-color:#212529}.btn-check:focus+.btn-outline-dark,.btn-outline-dark:focus{box-shadow:0 0 0 .25rem rgba(33,37,41,.5)}.btn-check:active+.btn-outline-dark,.btn-check:checked+.btn-outline-dark,.btn-outline-dark.active,.btn-outline-dark.dropdown-toggle.show,.btn-outline-dark:active{color:#fff;background-color:#212529;border-color:#212529}.btn-check:active+.btn-outline-dark:focus,.btn-check:checked+.btn-outline-dark:focus,.btn-outline-dark.active:focus,.btn-outline-dark.dropdown-toggle.show:focus,.btn-outline-dark:active:focus{box-shadow:0 0 0 .25rem rgba(33,37,41,.5)}.btn-outline-dark.disabled,.btn-outline-dark:disabled{color:#212529;background-color:transparent}.btn-link{font-weight:400;color:#0d6efd;text-decoration:underline}.btn-link:hover{color:#0a58ca}.btn-link.disabled,.btn-link:disabled{color:#6c757d}.btn-group-lg>.btn,.btn-lg{padding:.5rem 1rem;font-size:1.25rem;border-radius:.3rem}.btn-group-sm>.btn,.btn-sm{padding:.25rem .5rem;font-size:.875rem;border-radius:.2rem}.fade{transition:opacity .15s linear}@media (prefers-reduced-motion:reduce){.fade{transition:none}}.fade:not(.show){opacity:0}.collapse:not(.show){display:none}.collapsing{height:0;overflow:hidden;transition:height .35s ease}@media (prefers-reduced-motion:reduce){.collapsing{transition:none}}.collapsing.collapse-horizontal{width:0;height:auto;transition:width .35s ease}@media (prefers-reduced-motion:reduce){.collapsing.collapse-horizontal{transition:none}}.dropdown,.dropend,.dropstart,.dropup{position:relative}.dropdown-toggle{white-space:nowrap}.dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}.dropdown-toggle:empty::after{margin-left:0}.dropdown-menu{position:absolute;z-index:1000;display:none;min-width:10rem;padding:.5rem 0;margin:0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem}.dropdown-menu[data-bs-popper]{top:100%;left:0;margin-top:.125rem}.dropdown-menu-start{--bs-position:start}.dropdown-menu-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-end{--bs-position:end}.dropdown-menu-end[data-bs-popper]{right:0;left:auto}@media (min-width:576px){.dropdown-menu-sm-start{--bs-position:start}.dropdown-menu-sm-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-sm-end{--bs-position:end}.dropdown-menu-sm-end[data-bs-popper]{right:0;left:auto}}@media (min-width:768px){.dropdown-menu-md-start{--bs-position:start}.dropdown-menu-md-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-md-end{--bs-position:end}.dropdown-menu-md-end[data-bs-popper]{right:0;left:auto}}@media (min-width:992px){.dropdown-menu-lg-start{--bs-position:start}.dropdown-menu-lg-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-lg-end{--bs-position:end}.dropdown-menu-lg-end[data-bs-popper]{right:0;left:auto}}@media (min-width:1200px){.dropdown-menu-xl-start{--bs-position:start}.dropdown-menu-xl-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-xl-end{--bs-position:end}.dropdown-menu-xl-end[data-bs-popper]{right:0;left:auto}}@media (min-width:1400px){.dropdown-menu-xxl-start{--bs-position:start}.dropdown-menu-xxl-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-xxl-end{--bs-position:end}.dropdown-menu-xxl-end[data-bs-popper]{right:0;left:auto}}.dropup .dropdown-menu[data-bs-popper]{top:auto;bottom:100%;margin-top:0;margin-bottom:.125rem}.dropup .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:0;border-right:.3em solid transparent;border-bottom:.3em solid;border-left:.3em solid transparent}.dropup .dropdown-toggle:empty::after{margin-left:0}.dropend .dropdown-menu[data-bs-popper]{top:0;right:auto;left:100%;margin-top:0;margin-left:.125rem}.dropend .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:0;border-bottom:.3em solid transparent;border-left:.3em solid}.dropend .dropdown-toggle:empty::after{margin-left:0}.dropend .dropdown-toggle::after{vertical-align:0}.dropstart .dropdown-menu[data-bs-popper]{top:0;right:100%;left:auto;margin-top:0;margin-right:.125rem}.dropstart .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:""}.dropstart .dropdown-toggle::after{display:none}.dropstart .dropdown-toggle::before{display:inline-block;margin-right:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:.3em solid;border-bottom:.3em solid transparent}.dropstart .dropdown-toggle:empty::after{margin-left:0}.dropstart .dropdown-toggle::before{vertical-align:0}.dropdown-divider{height:0;margin:.5rem 0;overflow:hidden;border-top:1px solid rgba(0,0,0,.15)}.dropdown-item{display:block;width:100%;padding:.25rem 1rem;clear:both;font-weight:400;color:#212529;text-align:inherit;text-decoration:none;white-space:nowrap;background-color:transparent;border:0}.dropdown-item:focus,.dropdown-item:hover{color:#1e2125;background-color:#e9ecef}.dropdown-item.active,.dropdown-item:active{color:#fff;text-decoration:none;background-color:#0d6efd}.dropdown-item.disabled,.dropdown-item:disabled{color:#adb5bd;pointer-events:none;background-color:transparent}.dropdown-menu.show{display:block}.dropdown-header{display:block;padding:.5rem 1rem;margin-bottom:0;font-size:.875rem;color:#6c757d;white-space:nowrap}.dropdown-item-text{display:block;padding:.25rem 1rem;color:#212529}.dropdown-menu-dark{color:#dee2e6;background-color:#343a40;border-color:rgba(0,0,0,.15)}.dropdown-menu-dark .dropdown-item{color:#dee2e6}.dropdown-menu-dark .dropdown-item:focus,.dropdown-menu-dark .dropdown-item:hover{color:#fff;background-color:rgba(255,255,255,.15)}.dropdown-menu-dark .dropdown-item.active,.dropdown-menu-dark .dropdown-item:active{color:#fff;background-color:#0d6efd}.dropdown-menu-dark .dropdown-item.disabled,.dropdown-menu-dark .dropdown-item:disabled{color:#adb5bd}.dropdown-menu-dark .dropdown-divider{border-color:rgba(0,0,0,.15)}.dropdown-menu-dark .dropdown-item-text{color:#dee2e6}.dropdown-menu-dark .dropdown-header{color:#adb5bd}.btn-group,.btn-group-vertical{position:relative;display:inline-flex;vertical-align:middle}.btn-group-vertical>.btn,.btn-group>.btn{position:relative;flex:1 1 auto}.btn-group-vertical>.btn-check:checked+.btn,.btn-group-vertical>.btn-check:focus+.btn,.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group-vertical>.btn:hover,.btn-group>.btn-check:checked+.btn,.btn-group>.btn-check:focus+.btn,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus,.btn-group>.btn:hover{z-index:1}.btn-toolbar{display:flex;flex-wrap:wrap;justify-content:flex-start}.btn-toolbar .input-group{width:auto}.btn-group>.btn-group:not(:first-child),.btn-group>.btn:not(:first-child){margin-left:-1px}.btn-group>.btn-group:not(:last-child)>.btn,.btn-group>.btn:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:not(:first-child)>.btn,.btn-group>.btn:nth-child(n+3),.btn-group>:not(.btn-check)+.btn{border-top-left-radius:0;border-bottom-left-radius:0}.dropdown-toggle-split{padding-right:.5625rem;padding-left:.5625rem}.dropdown-toggle-split::after,.dropend .dropdown-toggle-split::after,.dropup .dropdown-toggle-split::after{margin-left:0}.dropstart .dropdown-toggle-split::before{margin-right:0}.btn-group-sm>.btn+.dropdown-toggle-split,.btn-sm+.dropdown-toggle-split{padding-right:.375rem;padding-left:.375rem}.btn-group-lg>.btn+.dropdown-toggle-split,.btn-lg+.dropdown-toggle-split{padding-right:.75rem;padding-left:.75rem}.btn-group-vertical{flex-direction:column;align-items:flex-start;justify-content:center}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group{width:100%}.btn-group-vertical>.btn-group:not(:first-child),.btn-group-vertical>.btn:not(:first-child){margin-top:-1px}.btn-group-vertical>.btn-group:not(:last-child)>.btn,.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle){border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:not(:first-child)>.btn,.btn-group-vertical>.btn~.btn{border-top-left-radius:0;border-top-right-radius:0}.nav{display:flex;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.nav-link{display:block;padding:.5rem 1rem;color:#0d6efd;text-decoration:none;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out}@media (prefers-reduced-motion:reduce){.nav-link{transition:none}}.nav-link:focus,.nav-link:hover{color:#0a58ca}.nav-link.disabled{color:#6c757d;pointer-events:none;cursor:default}.nav-tabs{border-bottom:1px solid #dee2e6}.nav-tabs .nav-link{margin-bottom:-1px;background:0 0;border:1px solid transparent;border-top-left-radius:.25rem;border-top-right-radius:.25rem}.nav-tabs .nav-link:focus,.nav-tabs .nav-link:hover{border-color:#e9ecef #e9ecef #dee2e6;isolation:isolate}.nav-tabs .nav-link.disabled{color:#6c757d;background-color:transparent;border-color:transparent}.nav-tabs .nav-item.show .nav-link,.nav-tabs .nav-link.active{color:#495057;background-color:#fff;border-color:#dee2e6 #dee2e6 #fff}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.nav-pills .nav-link{background:0 0;border:0;border-radius:.25rem}.nav-pills .nav-link.active,.nav-pills .show>.nav-link{color:#fff;background-color:#0d6efd}.nav-fill .nav-item,.nav-fill>.nav-link{flex:1 1 auto;text-align:center}.nav-justified .nav-item,.nav-justified>.nav-link{flex-basis:0;flex-grow:1;text-align:center}.nav-fill .nav-item .nav-link,.nav-justified .nav-item .nav-link{width:100%}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.navbar{position:relative;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;padding-top:.5rem;padding-bottom:.5rem}.navbar>.container,.navbar>.container-fluid,.navbar>.container-lg,.navbar>.container-md,.navbar>.container-sm,.navbar>.container-xl,.navbar>.container-xxl{display:flex;flex-wrap:inherit;align-items:center;justify-content:space-between}.navbar-brand{padding-top:.3125rem;padding-bottom:.3125rem;margin-right:1rem;font-size:1.25rem;text-decoration:none;white-space:nowrap}.navbar-nav{display:flex;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-nav .dropdown-menu{position:static}.navbar-text{padding-top:.5rem;padding-bottom:.5rem}.navbar-collapse{flex-basis:100%;flex-grow:1;align-items:center}.navbar-toggler{padding:.25rem .75rem;font-size:1.25rem;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:.25rem;transition:box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.navbar-toggler{transition:none}}.navbar-toggler:hover{text-decoration:none}.navbar-toggler:focus{text-decoration:none;outline:0;box-shadow:0 0 0 .25rem}.navbar-toggler-icon{display:inline-block;width:1.5em;height:1.5em;vertical-align:middle;background-repeat:no-repeat;background-position:center;background-size:100%}.navbar-nav-scroll{max-height:var(--bs-scroll-height,75vh);overflow-y:auto}@media (min-width:576px){.navbar-expand-sm{flex-wrap:nowrap;justify-content:flex-start}.navbar-expand-sm .navbar-nav{flex-direction:row}.navbar-expand-sm .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-sm .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-sm .navbar-nav-scroll{overflow:visible}.navbar-expand-sm .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-sm .navbar-toggler{display:none}.navbar-expand-sm .offcanvas-header{display:none}.navbar-expand-sm .offcanvas{position:inherit;bottom:0;z-index:1000;flex-grow:1;visibility:visible!important;background-color:transparent;border-right:0;border-left:0;transition:none;transform:none}.navbar-expand-sm .offcanvas-bottom,.navbar-expand-sm .offcanvas-top{height:auto;border-top:0;border-bottom:0}.navbar-expand-sm .offcanvas-body{display:flex;flex-grow:0;padding:0;overflow-y:visible}}@media (min-width:768px){.navbar-expand-md{flex-wrap:nowrap;justify-content:flex-start}.navbar-expand-md .navbar-nav{flex-direction:row}.navbar-expand-md .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-md .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-md .navbar-nav-scroll{overflow:visible}.navbar-expand-md .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-md .navbar-toggler{display:none}.navbar-expand-md .offcanvas-header{display:none}.navbar-expand-md .offcanvas{position:inherit;bottom:0;z-index:1000;flex-grow:1;visibility:visible!important;background-color:transparent;border-right:0;border-left:0;transition:none;transform:none}.navbar-expand-md .offcanvas-bottom,.navbar-expand-md .offcanvas-top{height:auto;border-top:0;border-bottom:0}.navbar-expand-md .offcanvas-body{display:flex;flex-grow:0;padding:0;overflow-y:visible}}@media (min-width:992px){.navbar-expand-lg{flex-wrap:nowrap;justify-content:flex-start}.navbar-expand-lg .navbar-nav{flex-direction:row}.navbar-expand-lg .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-lg .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-lg .navbar-nav-scroll{overflow:visible}.navbar-expand-lg .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-lg .navbar-toggler{display:none}.navbar-expand-lg .offcanvas-header{display:none}.navbar-expand-lg .offcanvas{position:inherit;bottom:0;z-index:1000;flex-grow:1;visibility:visible!important;background-color:transparent;border-right:0;border-left:0;transition:none;transform:none}.navbar-expand-lg .offcanvas-bottom,.navbar-expand-lg .offcanvas-top{height:auto;border-top:0;border-bottom:0}.navbar-expand-lg .offcanvas-body{display:flex;flex-grow:0;padding:0;overflow-y:visible}}@media (min-width:1200px){.navbar-expand-xl{flex-wrap:nowrap;justify-content:flex-start}.navbar-expand-xl .navbar-nav{flex-direction:row}.navbar-expand-xl .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-xl .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-xl .navbar-nav-scroll{overflow:visible}.navbar-expand-xl .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-xl .navbar-toggler{display:none}.navbar-expand-xl .offcanvas-header{display:none}.navbar-expand-xl .offcanvas{position:inherit;bottom:0;z-index:1000;flex-grow:1;visibility:visible!important;background-color:transparent;border-right:0;border-left:0;transition:none;transform:none}.navbar-expand-xl .offcanvas-bottom,.navbar-expand-xl .offcanvas-top{height:auto;border-top:0;border-bottom:0}.navbar-expand-xl .offcanvas-body{display:flex;flex-grow:0;padding:0;overflow-y:visible}}@media (min-width:1400px){.navbar-expand-xxl{flex-wrap:nowrap;justify-content:flex-start}.navbar-expand-xxl .navbar-nav{flex-direction:row}.navbar-expand-xxl .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-xxl .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-xxl .navbar-nav-scroll{overflow:visible}.navbar-expand-xxl .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-xxl .navbar-toggler{display:none}.navbar-expand-xxl .offcanvas-header{display:none}.navbar-expand-xxl .offcanvas{position:inherit;bottom:0;z-index:1000;flex-grow:1;visibility:visible!important;background-color:transparent;border-right:0;border-left:0;transition:none;transform:none}.navbar-expand-xxl .offcanvas-bottom,.navbar-expand-xxl .offcanvas-top{height:auto;border-top:0;border-bottom:0}.navbar-expand-xxl .offcanvas-body{display:flex;flex-grow:0;padding:0;overflow-y:visible}}.navbar-expand{flex-wrap:nowrap;justify-content:flex-start}.navbar-expand .navbar-nav{flex-direction:row}.navbar-expand .navbar-nav .dropdown-menu{position:absolute}.navbar-expand .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand .navbar-nav-scroll{overflow:visible}.navbar-expand .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand .navbar-toggler{display:none}.navbar-expand .offcanvas-header{display:none}.navbar-expand .offcanvas{position:inherit;bottom:0;z-index:1000;flex-grow:1;visibility:visible!important;background-color:transparent;border-right:0;border-left:0;transition:none;transform:none}.navbar-expand .offcanvas-bottom,.navbar-expand .offcanvas-top{height:auto;border-top:0;border-bottom:0}.navbar-expand .offcanvas-body{display:flex;flex-grow:0;padding:0;overflow-y:visible}.navbar-light .navbar-brand{color:rgba(0,0,0,.9)}.navbar-light .navbar-brand:focus,.navbar-light .navbar-brand:hover{color:rgba(0,0,0,.9)}.navbar-light .navbar-nav .nav-link{color:rgba(0,0,0,.55)}.navbar-light .navbar-nav .nav-link:focus,.navbar-light .navbar-nav .nav-link:hover{color:rgba(0,0,0,.7)}.navbar-light .navbar-nav .nav-link.disabled{color:rgba(0,0,0,.3)}.navbar-light .navbar-nav .nav-link.active,.navbar-light .navbar-nav .show>.nav-link{color:rgba(0,0,0,.9)}.navbar-light .navbar-toggler{color:rgba(0,0,0,.55);border-color:rgba(0,0,0,.1)}.navbar-light .navbar-toggler-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")}.navbar-light .navbar-text{color:rgba(0,0,0,.55)}.navbar-light .navbar-text a,.navbar-light .navbar-text a:focus,.navbar-light .navbar-text a:hover{color:rgba(0,0,0,.9)}.navbar-dark .navbar-brand{color:#fff}.navbar-dark .navbar-brand:focus,.navbar-dark .navbar-brand:hover{color:#fff}.navbar-dark .navbar-nav .nav-link{color:rgba(255,255,255,.55)}.navbar-dark .navbar-nav .nav-link:focus,.navbar-dark .navbar-nav .nav-link:hover{color:rgba(255,255,255,.75)}.navbar-dark .navbar-nav .nav-link.disabled{color:rgba(255,255,255,.25)}.navbar-dark .navbar-nav .nav-link.active,.navbar-dark .navbar-nav .show>.nav-link{color:#fff}.navbar-dark .navbar-toggler{color:rgba(255,255,255,.55);border-color:rgba(255,255,255,.1)}.navbar-dark .navbar-toggler-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")}.navbar-dark .navbar-text{color:rgba(255,255,255,.55)}.navbar-dark .navbar-text a,.navbar-dark .navbar-text a:focus,.navbar-dark .navbar-text a:hover{color:#fff}.card{position:relative;display:flex;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem}.card>hr{margin-right:0;margin-left:0}.card>.list-group{border-top:inherit;border-bottom:inherit}.card>.list-group:first-child{border-top-width:0;border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.card>.list-group:last-child{border-bottom-width:0;border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.card>.card-header+.list-group,.card>.list-group+.card-footer{border-top:0}.card-body{flex:1 1 auto;padding:1rem 1rem}.card-title{margin-bottom:.5rem}.card-subtitle{margin-top:-.25rem;margin-bottom:0}.card-text:last-child{margin-bottom:0}.card-link+.card-link{margin-left:1rem}.card-header{padding:.5rem 1rem;margin-bottom:0;background-color:rgba(0,0,0,.03);border-bottom:1px solid rgba(0,0,0,.125)}.card-header:first-child{border-radius:calc(.25rem - 1px) calc(.25rem - 1px) 0 0}.card-footer{padding:.5rem 1rem;background-color:rgba(0,0,0,.03);border-top:1px solid rgba(0,0,0,.125)}.card-footer:last-child{border-radius:0 0 calc(.25rem - 1px) calc(.25rem - 1px)}.card-header-tabs{margin-right:-.5rem;margin-bottom:-.5rem;margin-left:-.5rem;border-bottom:0}.card-header-pills{margin-right:-.5rem;margin-left:-.5rem}.card-img-overlay{position:absolute;top:0;right:0;bottom:0;left:0;padding:1rem;border-radius:calc(.25rem - 1px)}.card-img,.card-img-bottom,.card-img-top{width:100%}.card-img,.card-img-top{border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.card-img,.card-img-bottom{border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.card-group>.card{margin-bottom:.75rem}@media (min-width:576px){.card-group{display:flex;flex-flow:row wrap}.card-group>.card{flex:1 0 0%;margin-bottom:0}.card-group>.card+.card{margin-left:0;border-left:0}.card-group>.card:not(:last-child){border-top-right-radius:0;border-bottom-right-radius:0}.card-group>.card:not(:last-child) .card-header,.card-group>.card:not(:last-child) .card-img-top{border-top-right-radius:0}.card-group>.card:not(:last-child) .card-footer,.card-group>.card:not(:last-child) .card-img-bottom{border-bottom-right-radius:0}.card-group>.card:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.card-group>.card:not(:first-child) .card-header,.card-group>.card:not(:first-child) .card-img-top{border-top-left-radius:0}.card-group>.card:not(:first-child) .card-footer,.card-group>.card:not(:first-child) .card-img-bottom{border-bottom-left-radius:0}}.accordion-button{position:relative;display:flex;align-items:center;width:100%;padding:1rem 1.25rem;font-size:1rem;color:#212529;text-align:left;background-color:#fff;border:0;border-radius:0;overflow-anchor:none;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,border-radius .15s ease}@media (prefers-reduced-motion:reduce){.accordion-button{transition:none}}.accordion-button:not(.collapsed){color:#0c63e4;background-color:#e7f1ff;box-shadow:inset 0 -1px 0 rgba(0,0,0,.125)}.accordion-button:not(.collapsed)::after{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230c63e4'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");transform:rotate(-180deg)}.accordion-button::after{flex-shrink:0;width:1.25rem;height:1.25rem;margin-left:auto;content:"";background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");background-repeat:no-repeat;background-size:1.25rem;transition:transform .2s ease-in-out}@media (prefers-reduced-motion:reduce){.accordion-button::after{transition:none}}.accordion-button:hover{z-index:2}.accordion-button:focus{z-index:3;border-color:#86b7fe;outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.accordion-header{margin-bottom:0}.accordion-item{background-color:#fff;border:1px solid rgba(0,0,0,.125)}.accordion-item:first-of-type{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.accordion-item:first-of-type .accordion-button{border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.accordion-item:not(:first-of-type){border-top:0}.accordion-item:last-of-type{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.accordion-item:last-of-type .accordion-button.collapsed{border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.accordion-item:last-of-type .accordion-collapse{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.accordion-body{padding:1rem 1.25rem}.accordion-flush .accordion-collapse{border-width:0}.accordion-flush .accordion-item{border-right:0;border-left:0;border-radius:0}.accordion-flush .accordion-item:first-child{border-top:0}.accordion-flush .accordion-item:last-child{border-bottom:0}.accordion-flush .accordion-item .accordion-button{border-radius:0}.breadcrumb{display:flex;flex-wrap:wrap;padding:0 0;margin-bottom:1rem;list-style:none}.breadcrumb-item+.breadcrumb-item{padding-left:.5rem}.breadcrumb-item+.breadcrumb-item::before{float:left;padding-right:.5rem;color:#6c757d;content:var(--bs-breadcrumb-divider, "/")}.breadcrumb-item.active{color:#6c757d}.pagination{display:flex;padding-left:0;list-style:none}.page-link{position:relative;display:block;color:#0d6efd;text-decoration:none;background-color:#fff;border:1px solid #dee2e6;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.page-link{transition:none}}.page-link:hover{z-index:2;color:#0a58ca;background-color:#e9ecef;border-color:#dee2e6}.page-link:focus{z-index:3;color:#0a58ca;background-color:#e9ecef;outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.page-item:not(:first-child) .page-link{margin-left:-1px}.page-item.active .page-link{z-index:3;color:#fff;background-color:#0d6efd;border-color:#0d6efd}.page-item.disabled .page-link{color:#6c757d;pointer-events:none;background-color:#fff;border-color:#dee2e6}.page-link{padding:.375rem .75rem}.page-item:first-child .page-link{border-top-left-radius:.25rem;border-bottom-left-radius:.25rem}.page-item:last-child .page-link{border-top-right-radius:.25rem;border-bottom-right-radius:.25rem}.pagination-lg .page-link{padding:.75rem 1.5rem;font-size:1.25rem}.pagination-lg .page-item:first-child .page-link{border-top-left-radius:.3rem;border-bottom-left-radius:.3rem}.pagination-lg .page-item:last-child .page-link{border-top-right-radius:.3rem;border-bottom-right-radius:.3rem}.pagination-sm .page-link{padding:.25rem .5rem;font-size:.875rem}.pagination-sm .page-item:first-child .page-link{border-top-left-radius:.2rem;border-bottom-left-radius:.2rem}.pagination-sm .page-item:last-child .page-link{border-top-right-radius:.2rem;border-bottom-right-radius:.2rem}.badge{display:inline-block;padding:.35em .65em;font-size:.75em;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25rem}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.alert{position:relative;padding:1rem 1rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem}.alert-heading{color:inherit}.alert-link{font-weight:700}.alert-dismissible{padding-right:3rem}.alert-dismissible .btn-close{position:absolute;top:0;right:0;z-index:2;padding:1.25rem 1rem}.alert-primary{color:#084298;background-color:#cfe2ff;border-color:#b6d4fe}.alert-primary .alert-link{color:#06357a}.alert-secondary{color:#41464b;background-color:#e2e3e5;border-color:#d3d6d8}.alert-secondary .alert-link{color:#34383c}.alert-success{color:#0f5132;background-color:#d1e7dd;border-color:#badbcc}.alert-success .alert-link{color:#0c4128}.alert-info{color:#055160;background-color:#cff4fc;border-color:#b6effb}.alert-info .alert-link{color:#04414d}.alert-warning{color:#664d03;background-color:#fff3cd;border-color:#ffecb5}.alert-warning .alert-link{color:#523e02}.alert-danger{color:#842029;background-color:#f8d7da;border-color:#f5c2c7}.alert-danger .alert-link{color:#6a1a21}.alert-light{color:#636464;background-color:#fefefe;border-color:#fdfdfe}.alert-light .alert-link{color:#4f5050}.alert-dark{color:#141619;background-color:#d3d3d4;border-color:#bcbebf}.alert-dark .alert-link{color:#101214}@-webkit-keyframes progress-bar-stripes{0%{background-position-x:1rem}}@keyframes progress-bar-stripes{0%{background-position-x:1rem}}.progress{display:flex;height:1rem;overflow:hidden;font-size:.75rem;background-color:#e9ecef;border-radius:.25rem}.progress-bar{display:flex;flex-direction:column;justify-content:center;overflow:hidden;color:#fff;text-align:center;white-space:nowrap;background-color:#0d6efd;transition:width .6s ease}@media (prefers-reduced-motion:reduce){.progress-bar{transition:none}}.progress-bar-striped{background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-size:1rem 1rem}.progress-bar-animated{-webkit-animation:1s linear infinite progress-bar-stripes;animation:1s linear infinite progress-bar-stripes}@media (prefers-reduced-motion:reduce){.progress-bar-animated{-webkit-animation:none;animation:none}}.list-group{display:flex;flex-direction:column;padding-left:0;margin-bottom:0;border-radius:.25rem}.list-group-numbered{list-style-type:none;counter-reset:section}.list-group-numbered>li::before{content:counters(section, ".") ". ";counter-increment:section}.list-group-item-action{width:100%;color:#495057;text-align:inherit}.list-group-item-action:focus,.list-group-item-action:hover{z-index:1;color:#495057;text-decoration:none;background-color:#f8f9fa}.list-group-item-action:active{color:#212529;background-color:#e9ecef}.list-group-item{position:relative;display:block;padding:.5rem 1rem;color:#212529;text-decoration:none;background-color:#fff;border:1px solid rgba(0,0,0,.125)}.list-group-item:first-child{border-top-left-radius:inherit;border-top-right-radius:inherit}.list-group-item:last-child{border-bottom-right-radius:inherit;border-bottom-left-radius:inherit}.list-group-item.disabled,.list-group-item:disabled{color:#6c757d;pointer-events:none;background-color:#fff}.list-group-item.active{z-index:2;color:#fff;background-color:#0d6efd;border-color:#0d6efd}.list-group-item+.list-group-item{border-top-width:0}.list-group-item+.list-group-item.active{margin-top:-1px;border-top-width:1px}.list-group-horizontal{flex-direction:row}.list-group-horizontal>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal>.list-group-item.active{margin-top:0}.list-group-horizontal>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}@media (min-width:576px){.list-group-horizontal-sm{flex-direction:row}.list-group-horizontal-sm>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-sm>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-sm>.list-group-item.active{margin-top:0}.list-group-horizontal-sm>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-sm>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:768px){.list-group-horizontal-md{flex-direction:row}.list-group-horizontal-md>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-md>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-md>.list-group-item.active{margin-top:0}.list-group-horizontal-md>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-md>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:992px){.list-group-horizontal-lg{flex-direction:row}.list-group-horizontal-lg>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-lg>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-lg>.list-group-item.active{margin-top:0}.list-group-horizontal-lg>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-lg>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:1200px){.list-group-horizontal-xl{flex-direction:row}.list-group-horizontal-xl>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-xl>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-xl>.list-group-item.active{margin-top:0}.list-group-horizontal-xl>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-xl>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:1400px){.list-group-horizontal-xxl{flex-direction:row}.list-group-horizontal-xxl>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-xxl>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-xxl>.list-group-item.active{margin-top:0}.list-group-horizontal-xxl>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-xxl>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}.list-group-flush{border-radius:0}.list-group-flush>.list-group-item{border-width:0 0 1px}.list-group-flush>.list-group-item:last-child{border-bottom-width:0}.list-group-item-primary{color:#084298;background-color:#cfe2ff}.list-group-item-primary.list-group-item-action:focus,.list-group-item-primary.list-group-item-action:hover{color:#084298;background-color:#bacbe6}.list-group-item-primary.list-group-item-action.active{color:#fff;background-color:#084298;border-color:#084298}.list-group-item-secondary{color:#41464b;background-color:#e2e3e5}.list-group-item-secondary.list-group-item-action:focus,.list-group-item-secondary.list-group-item-action:hover{color:#41464b;background-color:#cbccce}.list-group-item-secondary.list-group-item-action.active{color:#fff;background-color:#41464b;border-color:#41464b}.list-group-item-success{color:#0f5132;background-color:#d1e7dd}.list-group-item-success.list-group-item-action:focus,.list-group-item-success.list-group-item-action:hover{color:#0f5132;background-color:#bcd0c7}.list-group-item-success.list-group-item-action.active{color:#fff;background-color:#0f5132;border-color:#0f5132}.list-group-item-info{color:#055160;background-color:#cff4fc}.list-group-item-info.list-group-item-action:focus,.list-group-item-info.list-group-item-action:hover{color:#055160;background-color:#badce3}.list-group-item-info.list-group-item-action.active{color:#fff;background-color:#055160;border-color:#055160}.list-group-item-warning{color:#664d03;background-color:#fff3cd}.list-group-item-warning.list-group-item-action:focus,.list-group-item-warning.list-group-item-action:hover{color:#664d03;background-color:#e6dbb9}.list-group-item-warning.list-group-item-action.active{color:#fff;background-color:#664d03;border-color:#664d03}.list-group-item-danger{color:#842029;background-color:#f8d7da}.list-group-item-danger.list-group-item-action:focus,.list-group-item-danger.list-group-item-action:hover{color:#842029;background-color:#dfc2c4}.list-group-item-danger.list-group-item-action.active{color:#fff;background-color:#842029;border-color:#842029}.list-group-item-light{color:#636464;background-color:#fefefe}.list-group-item-light.list-group-item-action:focus,.list-group-item-light.list-group-item-action:hover{color:#636464;background-color:#e5e5e5}.list-group-item-light.list-group-item-action.active{color:#fff;background-color:#636464;border-color:#636464}.list-group-item-dark{color:#141619;background-color:#d3d3d4}.list-group-item-dark.list-group-item-action:focus,.list-group-item-dark.list-group-item-action:hover{color:#141619;background-color:#bebebf}.list-group-item-dark.list-group-item-action.active{color:#fff;background-color:#141619;border-color:#141619}.btn-close{box-sizing:content-box;width:1em;height:1em;padding:.25em .25em;color:#000;background:transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;border:0;border-radius:.25rem;opacity:.5}.btn-close:hover{color:#000;text-decoration:none;opacity:.75}.btn-close:focus{outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25);opacity:1}.btn-close.disabled,.btn-close:disabled{pointer-events:none;-webkit-user-select:none;-moz-user-select:none;user-select:none;opacity:.25}.btn-close-white{filter:invert(1) grayscale(100%) brightness(200%)}.toast{width:350px;max-width:100%;font-size:.875rem;pointer-events:auto;background-color:rgba(255,255,255,.85);background-clip:padding-box;border:1px solid rgba(0,0,0,.1);box-shadow:0 .5rem 1rem rgba(0,0,0,.15);border-radius:.25rem}.toast.showing{opacity:0}.toast:not(.show){display:none}.toast-container{width:-webkit-max-content;width:-moz-max-content;width:max-content;max-width:100%;pointer-events:none}.toast-container>:not(:last-child){margin-bottom:.75rem}.toast-header{display:flex;align-items:center;padding:.5rem .75rem;color:#6c757d;background-color:rgba(255,255,255,.85);background-clip:padding-box;border-bottom:1px solid rgba(0,0,0,.05);border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.toast-header .btn-close{margin-right:-.375rem;margin-left:.75rem}.toast-body{padding:.75rem;word-wrap:break-word}.modal{position:fixed;top:0;left:0;z-index:1055;display:none;width:100%;height:100%;overflow-x:hidden;overflow-y:auto;outline:0}.modal-dialog{position:relative;width:auto;margin:.5rem;pointer-events:none}.modal.fade .modal-dialog{transition:transform .3s ease-out;transform:translate(0,-50px)}@media (prefers-reduced-motion:reduce){.modal.fade .modal-dialog{transition:none}}.modal.show .modal-dialog{transform:none}.modal.modal-static .modal-dialog{transform:scale(1.02)}.modal-dialog-scrollable{height:calc(100% - 1rem)}.modal-dialog-scrollable .modal-content{max-height:100%;overflow:hidden}.modal-dialog-scrollable .modal-body{overflow-y:auto}.modal-dialog-centered{display:flex;align-items:center;min-height:calc(100% - 1rem)}.modal-content{position:relative;display:flex;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem;outline:0}.modal-backdrop{position:fixed;top:0;left:0;z-index:1050;width:100vw;height:100vh;background-color:#000}.modal-backdrop.fade{opacity:0}.modal-backdrop.show{opacity:.5}.modal-header{display:flex;flex-shrink:0;align-items:center;justify-content:space-between;padding:1rem 1rem;border-bottom:1px solid #dee2e6;border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.modal-header .btn-close{padding:.5rem .5rem;margin:-.5rem -.5rem -.5rem auto}.modal-title{margin-bottom:0;line-height:1.5}.modal-body{position:relative;flex:1 1 auto;padding:1rem}.modal-footer{display:flex;flex-wrap:wrap;flex-shrink:0;align-items:center;justify-content:flex-end;padding:.75rem;border-top:1px solid #dee2e6;border-bottom-right-radius:calc(.3rem - 1px);border-bottom-left-radius:calc(.3rem - 1px)}.modal-footer>*{margin:.25rem}@media (min-width:576px){.modal-dialog{max-width:500px;margin:1.75rem auto}.modal-dialog-scrollable{height:calc(100% - 3.5rem)}.modal-dialog-centered{min-height:calc(100% - 3.5rem)}.modal-sm{max-width:300px}}@media (min-width:992px){.modal-lg,.modal-xl{max-width:800px}}@media (min-width:1200px){.modal-xl{max-width:1140px}}.modal-fullscreen{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen .modal-header{border-radius:0}.modal-fullscreen .modal-body{overflow-y:auto}.modal-fullscreen .modal-footer{border-radius:0}@media (max-width:575.98px){.modal-fullscreen-sm-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-sm-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-sm-down .modal-header{border-radius:0}.modal-fullscreen-sm-down .modal-body{overflow-y:auto}.modal-fullscreen-sm-down .modal-footer{border-radius:0}}@media (max-width:767.98px){.modal-fullscreen-md-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-md-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-md-down .modal-header{border-radius:0}.modal-fullscreen-md-down .modal-body{overflow-y:auto}.modal-fullscreen-md-down .modal-footer{border-radius:0}}@media (max-width:991.98px){.modal-fullscreen-lg-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-lg-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-lg-down .modal-header{border-radius:0}.modal-fullscreen-lg-down .modal-body{overflow-y:auto}.modal-fullscreen-lg-down .modal-footer{border-radius:0}}@media (max-width:1199.98px){.modal-fullscreen-xl-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-xl-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-xl-down .modal-header{border-radius:0}.modal-fullscreen-xl-down .modal-body{overflow-y:auto}.modal-fullscreen-xl-down .modal-footer{border-radius:0}}@media (max-width:1399.98px){.modal-fullscreen-xxl-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-xxl-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-xxl-down .modal-header{border-radius:0}.modal-fullscreen-xxl-down .modal-body{overflow-y:auto}.modal-fullscreen-xxl-down .modal-footer{border-radius:0}}.tooltip{position:absolute;z-index:1080;display:block;margin:0;font-family:var(--bs-font-sans-serif);font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.875rem;word-wrap:break-word;opacity:0}.tooltip.show{opacity:.9}.tooltip .tooltip-arrow{position:absolute;display:block;width:.8rem;height:.4rem}.tooltip .tooltip-arrow::before{position:absolute;content:"";border-color:transparent;border-style:solid}.bs-tooltip-auto[data-popper-placement^=top],.bs-tooltip-top{padding:.4rem 0}.bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow,.bs-tooltip-top .tooltip-arrow{bottom:0}.bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before,.bs-tooltip-top .tooltip-arrow::before{top:-1px;border-width:.4rem .4rem 0;border-top-color:#000}.bs-tooltip-auto[data-popper-placement^=right],.bs-tooltip-end{padding:0 .4rem}.bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow,.bs-tooltip-end .tooltip-arrow{left:0;width:.4rem;height:.8rem}.bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before,.bs-tooltip-end .tooltip-arrow::before{right:-1px;border-width:.4rem .4rem .4rem 0;border-right-color:#000}.bs-tooltip-auto[data-popper-placement^=bottom],.bs-tooltip-bottom{padding:.4rem 0}.bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow,.bs-tooltip-bottom .tooltip-arrow{top:0}.bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before,.bs-tooltip-bottom .tooltip-arrow::before{bottom:-1px;border-width:0 .4rem .4rem;border-bottom-color:#000}.bs-tooltip-auto[data-popper-placement^=left],.bs-tooltip-start{padding:0 .4rem}.bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow,.bs-tooltip-start .tooltip-arrow{right:0;width:.4rem;height:.8rem}.bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before,.bs-tooltip-start .tooltip-arrow::before{left:-1px;border-width:.4rem 0 .4rem .4rem;border-left-color:#000}.tooltip-inner{max-width:200px;padding:.25rem .5rem;color:#fff;text-align:center;background-color:#000;border-radius:.25rem}.popover{position:absolute;top:0;left:0;z-index:1070;display:block;max-width:276px;font-family:var(--bs-font-sans-serif);font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.875rem;word-wrap:break-word;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem}.popover .popover-arrow{position:absolute;display:block;width:1rem;height:.5rem}.popover .popover-arrow::after,.popover .popover-arrow::before{position:absolute;display:block;content:"";border-color:transparent;border-style:solid}.bs-popover-auto[data-popper-placement^=top]>.popover-arrow,.bs-popover-top>.popover-arrow{bottom:calc(-.5rem - 1px)}.bs-popover-auto[data-popper-placement^=top]>.popover-arrow::before,.bs-popover-top>.popover-arrow::before{bottom:0;border-width:.5rem .5rem 0;border-top-color:rgba(0,0,0,.25)}.bs-popover-auto[data-popper-placement^=top]>.popover-arrow::after,.bs-popover-top>.popover-arrow::after{bottom:1px;border-width:.5rem .5rem 0;border-top-color:#fff}.bs-popover-auto[data-popper-placement^=right]>.popover-arrow,.bs-popover-end>.popover-arrow{left:calc(-.5rem - 1px);width:.5rem;height:1rem}.bs-popover-auto[data-popper-placement^=right]>.popover-arrow::before,.bs-popover-end>.popover-arrow::before{left:0;border-width:.5rem .5rem .5rem 0;border-right-color:rgba(0,0,0,.25)}.bs-popover-auto[data-popper-placement^=right]>.popover-arrow::after,.bs-popover-end>.popover-arrow::after{left:1px;border-width:.5rem .5rem .5rem 0;border-right-color:#fff}.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow,.bs-popover-bottom>.popover-arrow{top:calc(-.5rem - 1px)}.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::before,.bs-popover-bottom>.popover-arrow::before{top:0;border-width:0 .5rem .5rem .5rem;border-bottom-color:rgba(0,0,0,.25)}.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::after,.bs-popover-bottom>.popover-arrow::after{top:1px;border-width:0 .5rem .5rem .5rem;border-bottom-color:#fff}.bs-popover-auto[data-popper-placement^=bottom] .popover-header::before,.bs-popover-bottom .popover-header::before{position:absolute;top:0;left:50%;display:block;width:1rem;margin-left:-.5rem;content:"";border-bottom:1px solid #f0f0f0}.bs-popover-auto[data-popper-placement^=left]>.popover-arrow,.bs-popover-start>.popover-arrow{right:calc(-.5rem - 1px);width:.5rem;height:1rem}.bs-popover-auto[data-popper-placement^=left]>.popover-arrow::before,.bs-popover-start>.popover-arrow::before{right:0;border-width:.5rem 0 .5rem .5rem;border-left-color:rgba(0,0,0,.25)}.bs-popover-auto[data-popper-placement^=left]>.popover-arrow::after,.bs-popover-start>.popover-arrow::after{right:1px;border-width:.5rem 0 .5rem .5rem;border-left-color:#fff}.popover-header{padding:.5rem 1rem;margin-bottom:0;font-size:1rem;background-color:#f0f0f0;border-bottom:1px solid rgba(0,0,0,.2);border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.popover-header:empty{display:none}.popover-body{padding:1rem 1rem;color:#212529}.carousel{position:relative}.carousel.pointer-event{touch-action:pan-y}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-inner::after{display:block;clear:both;content:""}.carousel-item{position:relative;display:none;float:left;width:100%;margin-right:-100%;-webkit-backface-visibility:hidden;backface-visibility:hidden;transition:transform .6s ease-in-out}@media (prefers-reduced-motion:reduce){.carousel-item{transition:none}}.carousel-item-next,.carousel-item-prev,.carousel-item.active{display:block}.active.carousel-item-end,.carousel-item-next:not(.carousel-item-start){transform:translateX(100%)}.active.carousel-item-start,.carousel-item-prev:not(.carousel-item-end){transform:translateX(-100%)}.carousel-fade .carousel-item{opacity:0;transition-property:opacity;transform:none}.carousel-fade .carousel-item-next.carousel-item-start,.carousel-fade .carousel-item-prev.carousel-item-end,.carousel-fade .carousel-item.active{z-index:1;opacity:1}.carousel-fade .active.carousel-item-end,.carousel-fade .active.carousel-item-start{z-index:0;opacity:0;transition:opacity 0s .6s}@media (prefers-reduced-motion:reduce){.carousel-fade .active.carousel-item-end,.carousel-fade .active.carousel-item-start{transition:none}}.carousel-control-next,.carousel-control-prev{position:absolute;top:0;bottom:0;z-index:1;display:flex;align-items:center;justify-content:center;width:15%;padding:0;color:#fff;text-align:center;background:0 0;border:0;opacity:.5;transition:opacity .15s ease}@media (prefers-reduced-motion:reduce){.carousel-control-next,.carousel-control-prev{transition:none}}.carousel-control-next:focus,.carousel-control-next:hover,.carousel-control-prev:focus,.carousel-control-prev:hover{color:#fff;text-decoration:none;outline:0;opacity:.9}.carousel-control-prev{left:0}.carousel-control-next{right:0}.carousel-control-next-icon,.carousel-control-prev-icon{display:inline-block;width:2rem;height:2rem;background-repeat:no-repeat;background-position:50%;background-size:100% 100%}.carousel-control-prev-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e")}.carousel-control-next-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e")}.carousel-indicators{position:absolute;right:0;bottom:0;left:0;z-index:2;display:flex;justify-content:center;padding:0;margin-right:15%;margin-bottom:1rem;margin-left:15%;list-style:none}.carousel-indicators [data-bs-target]{box-sizing:content-box;flex:0 1 auto;width:30px;height:3px;padding:0;margin-right:3px;margin-left:3px;text-indent:-999px;cursor:pointer;background-color:#fff;background-clip:padding-box;border:0;border-top:10px solid transparent;border-bottom:10px solid transparent;opacity:.5;transition:opacity .6s ease}@media (prefers-reduced-motion:reduce){.carousel-indicators [data-bs-target]{transition:none}}.carousel-indicators .active{opacity:1}.carousel-caption{position:absolute;right:15%;bottom:1.25rem;left:15%;padding-top:1.25rem;padding-bottom:1.25rem;color:#fff;text-align:center}.carousel-dark .carousel-control-next-icon,.carousel-dark .carousel-control-prev-icon{filter:invert(1) grayscale(100)}.carousel-dark .carousel-indicators [data-bs-target]{background-color:#000}.carousel-dark .carousel-caption{color:#000}@-webkit-keyframes spinner-border{to{transform:rotate(360deg)}}@keyframes spinner-border{to{transform:rotate(360deg)}}.spinner-border{display:inline-block;width:2rem;height:2rem;vertical-align:-.125em;border:.25em solid currentColor;border-right-color:transparent;border-radius:50%;-webkit-animation:.75s linear infinite spinner-border;animation:.75s linear infinite spinner-border}.spinner-border-sm{width:1rem;height:1rem;border-width:.2em}@-webkit-keyframes spinner-grow{0%{transform:scale(0)}50%{opacity:1;transform:none}}@keyframes spinner-grow{0%{transform:scale(0)}50%{opacity:1;transform:none}}.spinner-grow{display:inline-block;width:2rem;height:2rem;vertical-align:-.125em;background-color:currentColor;border-radius:50%;opacity:0;-webkit-animation:.75s linear infinite spinner-grow;animation:.75s linear infinite spinner-grow}.spinner-grow-sm{width:1rem;height:1rem}@media (prefers-reduced-motion:reduce){.spinner-border,.spinner-grow{-webkit-animation-duration:1.5s;animation-duration:1.5s}}.offcanvas{position:fixed;bottom:0;z-index:1045;display:flex;flex-direction:column;max-width:100%;visibility:hidden;background-color:#fff;background-clip:padding-box;outline:0;transition:transform .3s ease-in-out}@media (prefers-reduced-motion:reduce){.offcanvas{transition:none}}.offcanvas-backdrop{position:fixed;top:0;left:0;z-index:1040;width:100vw;height:100vh;background-color:#000}.offcanvas-backdrop.fade{opacity:0}.offcanvas-backdrop.show{opacity:.5}.offcanvas-header{display:flex;align-items:center;justify-content:space-between;padding:1rem 1rem}.offcanvas-header .btn-close{padding:.5rem .5rem;margin-top:-.5rem;margin-right:-.5rem;margin-bottom:-.5rem}.offcanvas-title{margin-bottom:0;line-height:1.5}.offcanvas-body{flex-grow:1;padding:1rem 1rem;overflow-y:auto}.offcanvas-start{top:0;left:0;width:400px;border-right:1px solid rgba(0,0,0,.2);transform:translateX(-100%)}.offcanvas-end{top:0;right:0;width:400px;border-left:1px solid rgba(0,0,0,.2);transform:translateX(100%)}.offcanvas-top{top:0;right:0;left:0;height:30vh;max-height:100%;border-bottom:1px solid rgba(0,0,0,.2);transform:translateY(-100%)}.offcanvas-bottom{right:0;left:0;height:30vh;max-height:100%;border-top:1px solid rgba(0,0,0,.2);transform:translateY(100%)}.offcanvas.show{transform:none}.placeholder{display:inline-block;min-height:1em;vertical-align:middle;cursor:wait;background-color:currentColor;opacity:.5}.placeholder.btn::before{display:inline-block;content:""}.placeholder-xs{min-height:.6em}.placeholder-sm{min-height:.8em}.placeholder-lg{min-height:1.2em}.placeholder-glow .placeholder{-webkit-animation:placeholder-glow 2s ease-in-out infinite;animation:placeholder-glow 2s ease-in-out infinite}@-webkit-keyframes placeholder-glow{50%{opacity:.2}}@keyframes placeholder-glow{50%{opacity:.2}}.placeholder-wave{-webkit-mask-image:linear-gradient(130deg,#000 55%,rgba(0,0,0,0.8) 75%,#000 95%);mask-image:linear-gradient(130deg,#000 55%,rgba(0,0,0,0.8) 75%,#000 95%);-webkit-mask-size:200% 100%;mask-size:200% 100%;-webkit-animation:placeholder-wave 2s linear infinite;animation:placeholder-wave 2s linear infinite}@-webkit-keyframes placeholder-wave{100%{-webkit-mask-position:-200% 0%;mask-position:-200% 0%}}@keyframes placeholder-wave{100%{-webkit-mask-position:-200% 0%;mask-position:-200% 0%}}.clearfix::after{display:block;clear:both;content:""}.link-primary{color:#0d6efd}.link-primary:focus,.link-primary:hover{color:#0a58ca}.link-secondary{color:#6c757d}.link-secondary:focus,.link-secondary:hover{color:#565e64}.link-success{color:#198754}.link-success:focus,.link-success:hover{color:#146c43}.link-info{color:#0dcaf0}.link-info:focus,.link-info:hover{color:#3dd5f3}.link-warning{color:#ffc107}.link-warning:focus,.link-warning:hover{color:#ffcd39}.link-danger{color:#dc3545}.link-danger:focus,.link-danger:hover{color:#b02a37}.link-light{color:#f8f9fa}.link-light:focus,.link-light:hover{color:#f9fafb}.link-dark{color:#212529}.link-dark:focus,.link-dark:hover{color:#1a1e21}.ratio{position:relative;width:100%}.ratio::before{display:block;padding-top:var(--bs-aspect-ratio);content:""}.ratio>*{position:absolute;top:0;left:0;width:100%;height:100%}.ratio-1x1{--bs-aspect-ratio:100%}.ratio-4x3{--bs-aspect-ratio:75%}.ratio-16x9{--bs-aspect-ratio:56.25%}.ratio-21x9{--bs-aspect-ratio:42.8571428571%}.fixed-top{position:fixed;top:0;right:0;left:0;z-index:1030}.fixed-bottom{position:fixed;right:0;bottom:0;left:0;z-index:1030}.sticky-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}@media (min-width:576px){.sticky-sm-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}@media (min-width:768px){.sticky-md-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}@media (min-width:992px){.sticky-lg-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}@media (min-width:1200px){.sticky-xl-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}@media (min-width:1400px){.sticky-xxl-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}.hstack{display:flex;flex-direction:row;align-items:center;align-self:stretch}.vstack{display:flex;flex:1 1 auto;flex-direction:column;align-self:stretch}.visually-hidden,.visually-hidden-focusable:not(:focus):not(:focus-within){position:absolute!important;width:1px!important;height:1px!important;padding:0!important;margin:-1px!important;overflow:hidden!important;clip:rect(0,0,0,0)!important;white-space:nowrap!important;border:0!important}.stretched-link::after{position:absolute;top:0;right:0;bottom:0;left:0;z-index:1;content:""}.text-truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.vr{display:inline-block;align-self:stretch;width:1px;min-height:1em;background-color:currentColor;opacity:.25}.align-baseline{vertical-align:baseline!important}.align-top{vertical-align:top!important}.align-middle{vertical-align:middle!important}.align-bottom{vertical-align:bottom!important}.align-text-bottom{vertical-align:text-bottom!important}.align-text-top{vertical-align:text-top!important}.float-start{float:left!important}.float-end{float:right!important}.float-none{float:none!important}.opacity-0{opacity:0!important}.opacity-25{opacity:.25!important}.opacity-50{opacity:.5!important}.opacity-75{opacity:.75!important}.opacity-100{opacity:1!important}.overflow-auto{overflow:auto!important}.overflow-hidden{overflow:hidden!important}.overflow-visible{overflow:visible!important}.overflow-scroll{overflow:scroll!important}.d-inline{display:inline!important}.d-inline-block{display:inline-block!important}.d-block{display:block!important}.d-grid{display:grid!important}.d-table{display:table!important}.d-table-row{display:table-row!important}.d-table-cell{display:table-cell!important}.d-flex{display:flex!important}.d-inline-flex{display:inline-flex!important}.d-none{display:none!important}.shadow{box-shadow:0 .5rem 1rem rgba(0,0,0,.15)!important}.shadow-sm{box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important}.shadow-lg{box-shadow:0 1rem 3rem rgba(0,0,0,.175)!important}.shadow-none{box-shadow:none!important}.position-static{position:static!important}.position-relative{position:relative!important}.position-absolute{position:absolute!important}.position-fixed{position:fixed!important}.position-sticky{position:-webkit-sticky!important;position:sticky!important}.top-0{top:0!important}.top-50{top:50%!important}.top-100{top:100%!important}.bottom-0{bottom:0!important}.bottom-50{bottom:50%!important}.bottom-100{bottom:100%!important}.start-0{left:0!important}.start-50{left:50%!important}.start-100{left:100%!important}.end-0{right:0!important}.end-50{right:50%!important}.end-100{right:100%!important}.translate-middle{transform:translate(-50%,-50%)!important}.translate-middle-x{transform:translateX(-50%)!important}.translate-middle-y{transform:translateY(-50%)!important}.border{border:1px solid #dee2e6!important}.border-0{border:0!important}.border-top{border-top:1px solid #dee2e6!important}.border-top-0{border-top:0!important}.border-end{border-right:1px solid #dee2e6!important}.border-end-0{border-right:0!important}.border-bottom{border-bottom:1px solid #dee2e6!important}.border-bottom-0{border-bottom:0!important}.border-start{border-left:1px solid #dee2e6!important}.border-start-0{border-left:0!important}.border-primary{border-color:#0d6efd!important}.border-secondary{border-color:#6c757d!important}.border-success{border-color:#198754!important}.border-info{border-color:#0dcaf0!important}.border-warning{border-color:#ffc107!important}.border-danger{border-color:#dc3545!important}.border-light{border-color:#f8f9fa!important}.border-dark{border-color:#212529!important}.border-white{border-color:#fff!important}.border-1{border-width:1px!important}.border-2{border-width:2px!important}.border-3{border-width:3px!important}.border-4{border-width:4px!important}.border-5{border-width:5px!important}.w-25{width:25%!important}.w-50{width:50%!important}.w-75{width:75%!important}.w-100{width:100%!important}.w-auto{width:auto!important}.mw-100{max-width:100%!important}.vw-100{width:100vw!important}.min-vw-100{min-width:100vw!important}.h-25{height:25%!important}.h-50{height:50%!important}.h-75{height:75%!important}.h-100{height:100%!important}.h-auto{height:auto!important}.mh-100{max-height:100%!important}.vh-100{height:100vh!important}.min-vh-100{min-height:100vh!important}.flex-fill{flex:1 1 auto!important}.flex-row{flex-direction:row!important}.flex-column{flex-direction:column!important}.flex-row-reverse{flex-direction:row-reverse!important}.flex-column-reverse{flex-direction:column-reverse!important}.flex-grow-0{flex-grow:0!important}.flex-grow-1{flex-grow:1!important}.flex-shrink-0{flex-shrink:0!important}.flex-shrink-1{flex-shrink:1!important}.flex-wrap{flex-wrap:wrap!important}.flex-nowrap{flex-wrap:nowrap!important}.flex-wrap-reverse{flex-wrap:wrap-reverse!important}.gap-0{gap:0!important}.gap-1{gap:.25rem!important}.gap-2{gap:.5rem!important}.gap-3{gap:1rem!important}.gap-4{gap:1.5rem!important}.gap-5{gap:3rem!important}.justify-content-start{justify-content:flex-start!important}.justify-content-end{justify-content:flex-end!important}.justify-content-center{justify-content:center!important}.justify-content-between{justify-content:space-between!important}.justify-content-around{justify-content:space-around!important}.justify-content-evenly{justify-content:space-evenly!important}.align-items-start{align-items:flex-start!important}.align-items-end{align-items:flex-end!important}.align-items-center{align-items:center!important}.align-items-baseline{align-items:baseline!important}.align-items-stretch{align-items:stretch!important}.align-content-start{align-content:flex-start!important}.align-content-end{align-content:flex-end!important}.align-content-center{align-content:center!important}.align-content-between{align-content:space-between!important}.align-content-around{align-content:space-around!important}.align-content-stretch{align-content:stretch!important}.align-self-auto{align-self:auto!important}.align-self-start{align-self:flex-start!important}.align-self-end{align-self:flex-end!important}.align-self-center{align-self:center!important}.align-self-baseline{align-self:baseline!important}.align-self-stretch{align-self:stretch!important}.order-first{order:-1!important}.order-0{order:0!important}.order-1{order:1!important}.order-2{order:2!important}.order-3{order:3!important}.order-4{order:4!important}.order-5{order:5!important}.order-last{order:6!important}.m-0{margin:0!important}.m-1{margin:.25rem!important}.m-2{margin:.5rem!important}.m-3{margin:1rem!important}.m-4{margin:1.5rem!important}.m-5{margin:3rem!important}.m-auto{margin:auto!important}.mx-0{margin-right:0!important;margin-left:0!important}.mx-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-3{margin-right:1rem!important;margin-left:1rem!important}.mx-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-5{margin-right:3rem!important;margin-left:3rem!important}.mx-auto{margin-right:auto!important;margin-left:auto!important}.my-0{margin-top:0!important;margin-bottom:0!important}.my-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-0{margin-top:0!important}.mt-1{margin-top:.25rem!important}.mt-2{margin-top:.5rem!important}.mt-3{margin-top:1rem!important}.mt-4{margin-top:1.5rem!important}.mt-5{margin-top:3rem!important}.mt-auto{margin-top:auto!important}.me-0{margin-right:0!important}.me-1{margin-right:.25rem!important}.me-2{margin-right:.5rem!important}.me-3{margin-right:1rem!important}.me-4{margin-right:1.5rem!important}.me-5{margin-right:3rem!important}.me-auto{margin-right:auto!important}.mb-0{margin-bottom:0!important}.mb-1{margin-bottom:.25rem!important}.mb-2{margin-bottom:.5rem!important}.mb-3{margin-bottom:1rem!important}.mb-4{margin-bottom:1.5rem!important}.mb-5{margin-bottom:3rem!important}.mb-auto{margin-bottom:auto!important}.ms-0{margin-left:0!important}.ms-1{margin-left:.25rem!important}.ms-2{margin-left:.5rem!important}.ms-3{margin-left:1rem!important}.ms-4{margin-left:1.5rem!important}.ms-5{margin-left:3rem!important}.ms-auto{margin-left:auto!important}.p-0{padding:0!important}.p-1{padding:.25rem!important}.p-2{padding:.5rem!important}.p-3{padding:1rem!important}.p-4{padding:1.5rem!important}.p-5{padding:3rem!important}.px-0{padding-right:0!important;padding-left:0!important}.px-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-3{padding-right:1rem!important;padding-left:1rem!important}.px-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-5{padding-right:3rem!important;padding-left:3rem!important}.py-0{padding-top:0!important;padding-bottom:0!important}.py-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-0{padding-top:0!important}.pt-1{padding-top:.25rem!important}.pt-2{padding-top:.5rem!important}.pt-3{padding-top:1rem!important}.pt-4{padding-top:1.5rem!important}.pt-5{padding-top:3rem!important}.pe-0{padding-right:0!important}.pe-1{padding-right:.25rem!important}.pe-2{padding-right:.5rem!important}.pe-3{padding-right:1rem!important}.pe-4{padding-right:1.5rem!important}.pe-5{padding-right:3rem!important}.pb-0{padding-bottom:0!important}.pb-1{padding-bottom:.25rem!important}.pb-2{padding-bottom:.5rem!important}.pb-3{padding-bottom:1rem!important}.pb-4{padding-bottom:1.5rem!important}.pb-5{padding-bottom:3rem!important}.ps-0{padding-left:0!important}.ps-1{padding-left:.25rem!important}.ps-2{padding-left:.5rem!important}.ps-3{padding-left:1rem!important}.ps-4{padding-left:1.5rem!important}.ps-5{padding-left:3rem!important}.font-monospace{font-family:var(--bs-font-monospace)!important}.fs-1{font-size:calc(1.375rem + 1.5vw)!important}.fs-2{font-size:calc(1.325rem + .9vw)!important}.fs-3{font-size:calc(1.3rem + .6vw)!important}.fs-4{font-size:calc(1.275rem + .3vw)!important}.fs-5{font-size:1.25rem!important}.fs-6{font-size:1rem!important}.fst-italic{font-style:italic!important}.fst-normal{font-style:normal!important}.fw-light{font-weight:300!important}.fw-lighter{font-weight:lighter!important}.fw-normal{font-weight:400!important}.fw-bold{font-weight:700!important}.fw-bolder{font-weight:bolder!important}.lh-1{line-height:1!important}.lh-sm{line-height:1.25!important}.lh-base{line-height:1.5!important}.lh-lg{line-height:2!important}.text-start{text-align:left!important}.text-end{text-align:right!important}.text-center{text-align:center!important}.text-decoration-none{text-decoration:none!important}.text-decoration-underline{text-decoration:underline!important}.text-decoration-line-through{text-decoration:line-through!important}.text-lowercase{text-transform:lowercase!important}.text-uppercase{text-transform:uppercase!important}.text-capitalize{text-transform:capitalize!important}.text-wrap{white-space:normal!important}.text-nowrap{white-space:nowrap!important}.text-break{word-wrap:break-word!important;word-break:break-word!important}.text-primary{--bs-text-opacity:1;color:rgba(var(--bs-primary-rgb),var(--bs-text-opacity))!important}.text-secondary{--bs-text-opacity:1;color:rgba(var(--bs-secondary-rgb),var(--bs-text-opacity))!important}.text-success{--bs-text-opacity:1;color:rgba(var(--bs-success-rgb),var(--bs-text-opacity))!important}.text-info{--bs-text-opacity:1;color:rgba(var(--bs-info-rgb),var(--bs-text-opacity))!important}.text-warning{--bs-text-opacity:1;color:rgba(var(--bs-warning-rgb),var(--bs-text-opacity))!important}.text-danger{--bs-text-opacity:1;color:rgba(var(--bs-danger-rgb),var(--bs-text-opacity))!important}.text-light{--bs-text-opacity:1;color:rgba(var(--bs-light-rgb),var(--bs-text-opacity))!important}.text-dark{--bs-text-opacity:1;color:rgba(var(--bs-dark-rgb),var(--bs-text-opacity))!important}.text-black{--bs-text-opacity:1;color:rgba(var(--bs-black-rgb),var(--bs-text-opacity))!important}.text-white{--bs-text-opacity:1;color:rgba(var(--bs-white-rgb),var(--bs-text-opacity))!important}.text-body{--bs-text-opacity:1;color:rgba(var(--bs-body-color-rgb),var(--bs-text-opacity))!important}.text-muted{--bs-text-opacity:1;color:#6c757d!important}.text-black-50{--bs-text-opacity:1;color:rgba(0,0,0,.5)!important}.text-white-50{--bs-text-opacity:1;color:rgba(255,255,255,.5)!important}.text-reset{--bs-text-opacity:1;color:inherit!important}.text-opacity-25{--bs-text-opacity:0.25}.text-opacity-50{--bs-text-opacity:0.5}.text-opacity-75{--bs-text-opacity:0.75}.text-opacity-100{--bs-text-opacity:1}.bg-primary{--bs-bg-opacity:1;background-color:rgba(var(--bs-primary-rgb),var(--bs-bg-opacity))!important}.bg-secondary{--bs-bg-opacity:1;background-color:rgba(var(--bs-secondary-rgb),var(--bs-bg-opacity))!important}.bg-success{--bs-bg-opacity:1;background-color:rgba(var(--bs-success-rgb),var(--bs-bg-opacity))!important}.bg-info{--bs-bg-opacity:1;background-color:rgba(var(--bs-info-rgb),var(--bs-bg-opacity))!important}.bg-warning{--bs-bg-opacity:1;background-color:rgba(var(--bs-warning-rgb),var(--bs-bg-opacity))!important}.bg-danger{--bs-bg-opacity:1;background-color:rgba(var(--bs-danger-rgb),var(--bs-bg-opacity))!important}.bg-light{--bs-bg-opacity:1;background-color:rgba(var(--bs-light-rgb),var(--bs-bg-opacity))!important}.bg-dark{--bs-bg-opacity:1;background-color:rgba(var(--bs-dark-rgb),var(--bs-bg-opacity))!important}.bg-black{--bs-bg-opacity:1;background-color:rgba(var(--bs-black-rgb),var(--bs-bg-opacity))!important}.bg-white{--bs-bg-opacity:1;background-color:rgba(var(--bs-white-rgb),var(--bs-bg-opacity))!important}.bg-body{--bs-bg-opacity:1;background-color:rgba(var(--bs-body-bg-rgb),var(--bs-bg-opacity))!important}.bg-transparent{--bs-bg-opacity:1;background-color:transparent!important}.bg-opacity-10{--bs-bg-opacity:0.1}.bg-opacity-25{--bs-bg-opacity:0.25}.bg-opacity-50{--bs-bg-opacity:0.5}.bg-opacity-75{--bs-bg-opacity:0.75}.bg-opacity-100{--bs-bg-opacity:1}.bg-gradient{background-image:var(--bs-gradient)!important}.user-select-all{-webkit-user-select:all!important;-moz-user-select:all!important;user-select:all!important}.user-select-auto{-webkit-user-select:auto!important;-moz-user-select:auto!important;user-select:auto!important}.user-select-none{-webkit-user-select:none!important;-moz-user-select:none!important;user-select:none!important}.pe-none{pointer-events:none!important}.pe-auto{pointer-events:auto!important}.rounded{border-radius:.25rem!important}.rounded-0{border-radius:0!important}.rounded-1{border-radius:.2rem!important}.rounded-2{border-radius:.25rem!important}.rounded-3{border-radius:.3rem!important}.rounded-circle{border-radius:50%!important}.rounded-pill{border-radius:50rem!important}.rounded-top{border-top-left-radius:.25rem!important;border-top-right-radius:.25rem!important}.rounded-end{border-top-right-radius:.25rem!important;border-bottom-right-radius:.25rem!important}.rounded-bottom{border-bottom-right-radius:.25rem!important;border-bottom-left-radius:.25rem!important}.rounded-start{border-bottom-left-radius:.25rem!important;border-top-left-radius:.25rem!important}.visible{visibility:visible!important}.invisible{visibility:hidden!important}@media (min-width:576px){.float-sm-start{float:left!important}.float-sm-end{float:right!important}.float-sm-none{float:none!important}.d-sm-inline{display:inline!important}.d-sm-inline-block{display:inline-block!important}.d-sm-block{display:block!important}.d-sm-grid{display:grid!important}.d-sm-table{display:table!important}.d-sm-table-row{display:table-row!important}.d-sm-table-cell{display:table-cell!important}.d-sm-flex{display:flex!important}.d-sm-inline-flex{display:inline-flex!important}.d-sm-none{display:none!important}.flex-sm-fill{flex:1 1 auto!important}.flex-sm-row{flex-direction:row!important}.flex-sm-column{flex-direction:column!important}.flex-sm-row-reverse{flex-direction:row-reverse!important}.flex-sm-column-reverse{flex-direction:column-reverse!important}.flex-sm-grow-0{flex-grow:0!important}.flex-sm-grow-1{flex-grow:1!important}.flex-sm-shrink-0{flex-shrink:0!important}.flex-sm-shrink-1{flex-shrink:1!important}.flex-sm-wrap{flex-wrap:wrap!important}.flex-sm-nowrap{flex-wrap:nowrap!important}.flex-sm-wrap-reverse{flex-wrap:wrap-reverse!important}.gap-sm-0{gap:0!important}.gap-sm-1{gap:.25rem!important}.gap-sm-2{gap:.5rem!important}.gap-sm-3{gap:1rem!important}.gap-sm-4{gap:1.5rem!important}.gap-sm-5{gap:3rem!important}.justify-content-sm-start{justify-content:flex-start!important}.justify-content-sm-end{justify-content:flex-end!important}.justify-content-sm-center{justify-content:center!important}.justify-content-sm-between{justify-content:space-between!important}.justify-content-sm-around{justify-content:space-around!important}.justify-content-sm-evenly{justify-content:space-evenly!important}.align-items-sm-start{align-items:flex-start!important}.align-items-sm-end{align-items:flex-end!important}.align-items-sm-center{align-items:center!important}.align-items-sm-baseline{align-items:baseline!important}.align-items-sm-stretch{align-items:stretch!important}.align-content-sm-start{align-content:flex-start!important}.align-content-sm-end{align-content:flex-end!important}.align-content-sm-center{align-content:center!important}.align-content-sm-between{align-content:space-between!important}.align-content-sm-around{align-content:space-around!important}.align-content-sm-stretch{align-content:stretch!important}.align-self-sm-auto{align-self:auto!important}.align-self-sm-start{align-self:flex-start!important}.align-self-sm-end{align-self:flex-end!important}.align-self-sm-center{align-self:center!important}.align-self-sm-baseline{align-self:baseline!important}.align-self-sm-stretch{align-self:stretch!important}.order-sm-first{order:-1!important}.order-sm-0{order:0!important}.order-sm-1{order:1!important}.order-sm-2{order:2!important}.order-sm-3{order:3!important}.order-sm-4{order:4!important}.order-sm-5{order:5!important}.order-sm-last{order:6!important}.m-sm-0{margin:0!important}.m-sm-1{margin:.25rem!important}.m-sm-2{margin:.5rem!important}.m-sm-3{margin:1rem!important}.m-sm-4{margin:1.5rem!important}.m-sm-5{margin:3rem!important}.m-sm-auto{margin:auto!important}.mx-sm-0{margin-right:0!important;margin-left:0!important}.mx-sm-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-sm-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-sm-3{margin-right:1rem!important;margin-left:1rem!important}.mx-sm-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-sm-5{margin-right:3rem!important;margin-left:3rem!important}.mx-sm-auto{margin-right:auto!important;margin-left:auto!important}.my-sm-0{margin-top:0!important;margin-bottom:0!important}.my-sm-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-sm-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-sm-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-sm-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-sm-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-sm-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-sm-0{margin-top:0!important}.mt-sm-1{margin-top:.25rem!important}.mt-sm-2{margin-top:.5rem!important}.mt-sm-3{margin-top:1rem!important}.mt-sm-4{margin-top:1.5rem!important}.mt-sm-5{margin-top:3rem!important}.mt-sm-auto{margin-top:auto!important}.me-sm-0{margin-right:0!important}.me-sm-1{margin-right:.25rem!important}.me-sm-2{margin-right:.5rem!important}.me-sm-3{margin-right:1rem!important}.me-sm-4{margin-right:1.5rem!important}.me-sm-5{margin-right:3rem!important}.me-sm-auto{margin-right:auto!important}.mb-sm-0{margin-bottom:0!important}.mb-sm-1{margin-bottom:.25rem!important}.mb-sm-2{margin-bottom:.5rem!important}.mb-sm-3{margin-bottom:1rem!important}.mb-sm-4{margin-bottom:1.5rem!important}.mb-sm-5{margin-bottom:3rem!important}.mb-sm-auto{margin-bottom:auto!important}.ms-sm-0{margin-left:0!important}.ms-sm-1{margin-left:.25rem!important}.ms-sm-2{margin-left:.5rem!important}.ms-sm-3{margin-left:1rem!important}.ms-sm-4{margin-left:1.5rem!important}.ms-sm-5{margin-left:3rem!important}.ms-sm-auto{margin-left:auto!important}.p-sm-0{padding:0!important}.p-sm-1{padding:.25rem!important}.p-sm-2{padding:.5rem!important}.p-sm-3{padding:1rem!important}.p-sm-4{padding:1.5rem!important}.p-sm-5{padding:3rem!important}.px-sm-0{padding-right:0!important;padding-left:0!important}.px-sm-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-sm-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-sm-3{padding-right:1rem!important;padding-left:1rem!important}.px-sm-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-sm-5{padding-right:3rem!important;padding-left:3rem!important}.py-sm-0{padding-top:0!important;padding-bottom:0!important}.py-sm-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-sm-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-sm-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-sm-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-sm-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-sm-0{padding-top:0!important}.pt-sm-1{padding-top:.25rem!important}.pt-sm-2{padding-top:.5rem!important}.pt-sm-3{padding-top:1rem!important}.pt-sm-4{padding-top:1.5rem!important}.pt-sm-5{padding-top:3rem!important}.pe-sm-0{padding-right:0!important}.pe-sm-1{padding-right:.25rem!important}.pe-sm-2{padding-right:.5rem!important}.pe-sm-3{padding-right:1rem!important}.pe-sm-4{padding-right:1.5rem!important}.pe-sm-5{padding-right:3rem!important}.pb-sm-0{padding-bottom:0!important}.pb-sm-1{padding-bottom:.25rem!important}.pb-sm-2{padding-bottom:.5rem!important}.pb-sm-3{padding-bottom:1rem!important}.pb-sm-4{padding-bottom:1.5rem!important}.pb-sm-5{padding-bottom:3rem!important}.ps-sm-0{padding-left:0!important}.ps-sm-1{padding-left:.25rem!important}.ps-sm-2{padding-left:.5rem!important}.ps-sm-3{padding-left:1rem!important}.ps-sm-4{padding-left:1.5rem!important}.ps-sm-5{padding-left:3rem!important}.text-sm-start{text-align:left!important}.text-sm-end{text-align:right!important}.text-sm-center{text-align:center!important}}@media (min-width:768px){.float-md-start{float:left!important}.float-md-end{float:right!important}.float-md-none{float:none!important}.d-md-inline{display:inline!important}.d-md-inline-block{display:inline-block!important}.d-md-block{display:block!important}.d-md-grid{display:grid!important}.d-md-table{display:table!important}.d-md-table-row{display:table-row!important}.d-md-table-cell{display:table-cell!important}.d-md-flex{display:flex!important}.d-md-inline-flex{display:inline-flex!important}.d-md-none{display:none!important}.flex-md-fill{flex:1 1 auto!important}.flex-md-row{flex-direction:row!important}.flex-md-column{flex-direction:column!important}.flex-md-row-reverse{flex-direction:row-reverse!important}.flex-md-column-reverse{flex-direction:column-reverse!important}.flex-md-grow-0{flex-grow:0!important}.flex-md-grow-1{flex-grow:1!important}.flex-md-shrink-0{flex-shrink:0!important}.flex-md-shrink-1{flex-shrink:1!important}.flex-md-wrap{flex-wrap:wrap!important}.flex-md-nowrap{flex-wrap:nowrap!important}.flex-md-wrap-reverse{flex-wrap:wrap-reverse!important}.gap-md-0{gap:0!important}.gap-md-1{gap:.25rem!important}.gap-md-2{gap:.5rem!important}.gap-md-3{gap:1rem!important}.gap-md-4{gap:1.5rem!important}.gap-md-5{gap:3rem!important}.justify-content-md-start{justify-content:flex-start!important}.justify-content-md-end{justify-content:flex-end!important}.justify-content-md-center{justify-content:center!important}.justify-content-md-between{justify-content:space-between!important}.justify-content-md-around{justify-content:space-around!important}.justify-content-md-evenly{justify-content:space-evenly!important}.align-items-md-start{align-items:flex-start!important}.align-items-md-end{align-items:flex-end!important}.align-items-md-center{align-items:center!important}.align-items-md-baseline{align-items:baseline!important}.align-items-md-stretch{align-items:stretch!important}.align-content-md-start{align-content:flex-start!important}.align-content-md-end{align-content:flex-end!important}.align-content-md-center{align-content:center!important}.align-content-md-between{align-content:space-between!important}.align-content-md-around{align-content:space-around!important}.align-content-md-stretch{align-content:stretch!important}.align-self-md-auto{align-self:auto!important}.align-self-md-start{align-self:flex-start!important}.align-self-md-end{align-self:flex-end!important}.align-self-md-center{align-self:center!important}.align-self-md-baseline{align-self:baseline!important}.align-self-md-stretch{align-self:stretch!important}.order-md-first{order:-1!important}.order-md-0{order:0!important}.order-md-1{order:1!important}.order-md-2{order:2!important}.order-md-3{order:3!important}.order-md-4{order:4!important}.order-md-5{order:5!important}.order-md-last{order:6!important}.m-md-0{margin:0!important}.m-md-1{margin:.25rem!important}.m-md-2{margin:.5rem!important}.m-md-3{margin:1rem!important}.m-md-4{margin:1.5rem!important}.m-md-5{margin:3rem!important}.m-md-auto{margin:auto!important}.mx-md-0{margin-right:0!important;margin-left:0!important}.mx-md-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-md-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-md-3{margin-right:1rem!important;margin-left:1rem!important}.mx-md-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-md-5{margin-right:3rem!important;margin-left:3rem!important}.mx-md-auto{margin-right:auto!important;margin-left:auto!important}.my-md-0{margin-top:0!important;margin-bottom:0!important}.my-md-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-md-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-md-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-md-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-md-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-md-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-md-0{margin-top:0!important}.mt-md-1{margin-top:.25rem!important}.mt-md-2{margin-top:.5rem!important}.mt-md-3{margin-top:1rem!important}.mt-md-4{margin-top:1.5rem!important}.mt-md-5{margin-top:3rem!important}.mt-md-auto{margin-top:auto!important}.me-md-0{margin-right:0!important}.me-md-1{margin-right:.25rem!important}.me-md-2{margin-right:.5rem!important}.me-md-3{margin-right:1rem!important}.me-md-4{margin-right:1.5rem!important}.me-md-5{margin-right:3rem!important}.me-md-auto{margin-right:auto!important}.mb-md-0{margin-bottom:0!important}.mb-md-1{margin-bottom:.25rem!important}.mb-md-2{margin-bottom:.5rem!important}.mb-md-3{margin-bottom:1rem!important}.mb-md-4{margin-bottom:1.5rem!important}.mb-md-5{margin-bottom:3rem!important}.mb-md-auto{margin-bottom:auto!important}.ms-md-0{margin-left:0!important}.ms-md-1{margin-left:.25rem!important}.ms-md-2{margin-left:.5rem!important}.ms-md-3{margin-left:1rem!important}.ms-md-4{margin-left:1.5rem!important}.ms-md-5{margin-left:3rem!important}.ms-md-auto{margin-left:auto!important}.p-md-0{padding:0!important}.p-md-1{padding:.25rem!important}.p-md-2{padding:.5rem!important}.p-md-3{padding:1rem!important}.p-md-4{padding:1.5rem!important}.p-md-5{padding:3rem!important}.px-md-0{padding-right:0!important;padding-left:0!important}.px-md-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-md-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-md-3{padding-right:1rem!important;padding-left:1rem!important}.px-md-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-md-5{padding-right:3rem!important;padding-left:3rem!important}.py-md-0{padding-top:0!important;padding-bottom:0!important}.py-md-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-md-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-md-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-md-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-md-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-md-0{padding-top:0!important}.pt-md-1{padding-top:.25rem!important}.pt-md-2{padding-top:.5rem!important}.pt-md-3{padding-top:1rem!important}.pt-md-4{padding-top:1.5rem!important}.pt-md-5{padding-top:3rem!important}.pe-md-0{padding-right:0!important}.pe-md-1{padding-right:.25rem!important}.pe-md-2{padding-right:.5rem!important}.pe-md-3{padding-right:1rem!important}.pe-md-4{padding-right:1.5rem!important}.pe-md-5{padding-right:3rem!important}.pb-md-0{padding-bottom:0!important}.pb-md-1{padding-bottom:.25rem!important}.pb-md-2{padding-bottom:.5rem!important}.pb-md-3{padding-bottom:1rem!important}.pb-md-4{padding-bottom:1.5rem!important}.pb-md-5{padding-bottom:3rem!important}.ps-md-0{padding-left:0!important}.ps-md-1{padding-left:.25rem!important}.ps-md-2{padding-left:.5rem!important}.ps-md-3{padding-left:1rem!important}.ps-md-4{padding-left:1.5rem!important}.ps-md-5{padding-left:3rem!important}.text-md-start{text-align:left!important}.text-md-end{text-align:right!important}.text-md-center{text-align:center!important}}@media (min-width:992px){.float-lg-start{float:left!important}.float-lg-end{float:right!important}.float-lg-none{float:none!important}.d-lg-inline{display:inline!important}.d-lg-inline-block{display:inline-block!important}.d-lg-block{display:block!important}.d-lg-grid{display:grid!important}.d-lg-table{display:table!important}.d-lg-table-row{display:table-row!important}.d-lg-table-cell{display:table-cell!important}.d-lg-flex{display:flex!important}.d-lg-inline-flex{display:inline-flex!important}.d-lg-none{display:none!important}.flex-lg-fill{flex:1 1 auto!important}.flex-lg-row{flex-direction:row!important}.flex-lg-column{flex-direction:column!important}.flex-lg-row-reverse{flex-direction:row-reverse!important}.flex-lg-column-reverse{flex-direction:column-reverse!important}.flex-lg-grow-0{flex-grow:0!important}.flex-lg-grow-1{flex-grow:1!important}.flex-lg-shrink-0{flex-shrink:0!important}.flex-lg-shrink-1{flex-shrink:1!important}.flex-lg-wrap{flex-wrap:wrap!important}.flex-lg-nowrap{flex-wrap:nowrap!important}.flex-lg-wrap-reverse{flex-wrap:wrap-reverse!important}.gap-lg-0{gap:0!important}.gap-lg-1{gap:.25rem!important}.gap-lg-2{gap:.5rem!important}.gap-lg-3{gap:1rem!important}.gap-lg-4{gap:1.5rem!important}.gap-lg-5{gap:3rem!important}.justify-content-lg-start{justify-content:flex-start!important}.justify-content-lg-end{justify-content:flex-end!important}.justify-content-lg-center{justify-content:center!important}.justify-content-lg-between{justify-content:space-between!important}.justify-content-lg-around{justify-content:space-around!important}.justify-content-lg-evenly{justify-content:space-evenly!important}.align-items-lg-start{align-items:flex-start!important}.align-items-lg-end{align-items:flex-end!important}.align-items-lg-center{align-items:center!important}.align-items-lg-baseline{align-items:baseline!important}.align-items-lg-stretch{align-items:stretch!important}.align-content-lg-start{align-content:flex-start!important}.align-content-lg-end{align-content:flex-end!important}.align-content-lg-center{align-content:center!important}.align-content-lg-between{align-content:space-between!important}.align-content-lg-around{align-content:space-around!important}.align-content-lg-stretch{align-content:stretch!important}.align-self-lg-auto{align-self:auto!important}.align-self-lg-start{align-self:flex-start!important}.align-self-lg-end{align-self:flex-end!important}.align-self-lg-center{align-self:center!important}.align-self-lg-baseline{align-self:baseline!important}.align-self-lg-stretch{align-self:stretch!important}.order-lg-first{order:-1!important}.order-lg-0{order:0!important}.order-lg-1{order:1!important}.order-lg-2{order:2!important}.order-lg-3{order:3!important}.order-lg-4{order:4!important}.order-lg-5{order:5!important}.order-lg-last{order:6!important}.m-lg-0{margin:0!important}.m-lg-1{margin:.25rem!important}.m-lg-2{margin:.5rem!important}.m-lg-3{margin:1rem!important}.m-lg-4{margin:1.5rem!important}.m-lg-5{margin:3rem!important}.m-lg-auto{margin:auto!important}.mx-lg-0{margin-right:0!important;margin-left:0!important}.mx-lg-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-lg-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-lg-3{margin-right:1rem!important;margin-left:1rem!important}.mx-lg-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-lg-5{margin-right:3rem!important;margin-left:3rem!important}.mx-lg-auto{margin-right:auto!important;margin-left:auto!important}.my-lg-0{margin-top:0!important;margin-bottom:0!important}.my-lg-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-lg-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-lg-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-lg-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-lg-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-lg-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-lg-0{margin-top:0!important}.mt-lg-1{margin-top:.25rem!important}.mt-lg-2{margin-top:.5rem!important}.mt-lg-3{margin-top:1rem!important}.mt-lg-4{margin-top:1.5rem!important}.mt-lg-5{margin-top:3rem!important}.mt-lg-auto{margin-top:auto!important}.me-lg-0{margin-right:0!important}.me-lg-1{margin-right:.25rem!important}.me-lg-2{margin-right:.5rem!important}.me-lg-3{margin-right:1rem!important}.me-lg-4{margin-right:1.5rem!important}.me-lg-5{margin-right:3rem!important}.me-lg-auto{margin-right:auto!important}.mb-lg-0{margin-bottom:0!important}.mb-lg-1{margin-bottom:.25rem!important}.mb-lg-2{margin-bottom:.5rem!important}.mb-lg-3{margin-bottom:1rem!important}.mb-lg-4{margin-bottom:1.5rem!important}.mb-lg-5{margin-bottom:3rem!important}.mb-lg-auto{margin-bottom:auto!important}.ms-lg-0{margin-left:0!important}.ms-lg-1{margin-left:.25rem!important}.ms-lg-2{margin-left:.5rem!important}.ms-lg-3{margin-left:1rem!important}.ms-lg-4{margin-left:1.5rem!important}.ms-lg-5{margin-left:3rem!important}.ms-lg-auto{margin-left:auto!important}.p-lg-0{padding:0!important}.p-lg-1{padding:.25rem!important}.p-lg-2{padding:.5rem!important}.p-lg-3{padding:1rem!important}.p-lg-4{padding:1.5rem!important}.p-lg-5{padding:3rem!important}.px-lg-0{padding-right:0!important;padding-left:0!important}.px-lg-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-lg-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-lg-3{padding-right:1rem!important;padding-left:1rem!important}.px-lg-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-lg-5{padding-right:3rem!important;padding-left:3rem!important}.py-lg-0{padding-top:0!important;padding-bottom:0!important}.py-lg-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-lg-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-lg-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-lg-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-lg-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-lg-0{padding-top:0!important}.pt-lg-1{padding-top:.25rem!important}.pt-lg-2{padding-top:.5rem!important}.pt-lg-3{padding-top:1rem!important}.pt-lg-4{padding-top:1.5rem!important}.pt-lg-5{padding-top:3rem!important}.pe-lg-0{padding-right:0!important}.pe-lg-1{padding-right:.25rem!important}.pe-lg-2{padding-right:.5rem!important}.pe-lg-3{padding-right:1rem!important}.pe-lg-4{padding-right:1.5rem!important}.pe-lg-5{padding-right:3rem!important}.pb-lg-0{padding-bottom:0!important}.pb-lg-1{padding-bottom:.25rem!important}.pb-lg-2{padding-bottom:.5rem!important}.pb-lg-3{padding-bottom:1rem!important}.pb-lg-4{padding-bottom:1.5rem!important}.pb-lg-5{padding-bottom:3rem!important}.ps-lg-0{padding-left:0!important}.ps-lg-1{padding-left:.25rem!important}.ps-lg-2{padding-left:.5rem!important}.ps-lg-3{padding-left:1rem!important}.ps-lg-4{padding-left:1.5rem!important}.ps-lg-5{padding-left:3rem!important}.text-lg-start{text-align:left!important}.text-lg-end{text-align:right!important}.text-lg-center{text-align:center!important}}@media (min-width:1200px){.float-xl-start{float:left!important}.float-xl-end{float:right!important}.float-xl-none{float:none!important}.d-xl-inline{display:inline!important}.d-xl-inline-block{display:inline-block!important}.d-xl-block{display:block!important}.d-xl-grid{display:grid!important}.d-xl-table{display:table!important}.d-xl-table-row{display:table-row!important}.d-xl-table-cell{display:table-cell!important}.d-xl-flex{display:flex!important}.d-xl-inline-flex{display:inline-flex!important}.d-xl-none{display:none!important}.flex-xl-fill{flex:1 1 auto!important}.flex-xl-row{flex-direction:row!important}.flex-xl-column{flex-direction:column!important}.flex-xl-row-reverse{flex-direction:row-reverse!important}.flex-xl-column-reverse{flex-direction:column-reverse!important}.flex-xl-grow-0{flex-grow:0!important}.flex-xl-grow-1{flex-grow:1!important}.flex-xl-shrink-0{flex-shrink:0!important}.flex-xl-shrink-1{flex-shrink:1!important}.flex-xl-wrap{flex-wrap:wrap!important}.flex-xl-nowrap{flex-wrap:nowrap!important}.flex-xl-wrap-reverse{flex-wrap:wrap-reverse!important}.gap-xl-0{gap:0!important}.gap-xl-1{gap:.25rem!important}.gap-xl-2{gap:.5rem!important}.gap-xl-3{gap:1rem!important}.gap-xl-4{gap:1.5rem!important}.gap-xl-5{gap:3rem!important}.justify-content-xl-start{justify-content:flex-start!important}.justify-content-xl-end{justify-content:flex-end!important}.justify-content-xl-center{justify-content:center!important}.justify-content-xl-between{justify-content:space-between!important}.justify-content-xl-around{justify-content:space-around!important}.justify-content-xl-evenly{justify-content:space-evenly!important}.align-items-xl-start{align-items:flex-start!important}.align-items-xl-end{align-items:flex-end!important}.align-items-xl-center{align-items:center!important}.align-items-xl-baseline{align-items:baseline!important}.align-items-xl-stretch{align-items:stretch!important}.align-content-xl-start{align-content:flex-start!important}.align-content-xl-end{align-content:flex-end!important}.align-content-xl-center{align-content:center!important}.align-content-xl-between{align-content:space-between!important}.align-content-xl-around{align-content:space-around!important}.align-content-xl-stretch{align-content:stretch!important}.align-self-xl-auto{align-self:auto!important}.align-self-xl-start{align-self:flex-start!important}.align-self-xl-end{align-self:flex-end!important}.align-self-xl-center{align-self:center!important}.align-self-xl-baseline{align-self:baseline!important}.align-self-xl-stretch{align-self:stretch!important}.order-xl-first{order:-1!important}.order-xl-0{order:0!important}.order-xl-1{order:1!important}.order-xl-2{order:2!important}.order-xl-3{order:3!important}.order-xl-4{order:4!important}.order-xl-5{order:5!important}.order-xl-last{order:6!important}.m-xl-0{margin:0!important}.m-xl-1{margin:.25rem!important}.m-xl-2{margin:.5rem!important}.m-xl-3{margin:1rem!important}.m-xl-4{margin:1.5rem!important}.m-xl-5{margin:3rem!important}.m-xl-auto{margin:auto!important}.mx-xl-0{margin-right:0!important;margin-left:0!important}.mx-xl-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-xl-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-xl-3{margin-right:1rem!important;margin-left:1rem!important}.mx-xl-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-xl-5{margin-right:3rem!important;margin-left:3rem!important}.mx-xl-auto{margin-right:auto!important;margin-left:auto!important}.my-xl-0{margin-top:0!important;margin-bottom:0!important}.my-xl-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-xl-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-xl-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-xl-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-xl-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-xl-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-xl-0{margin-top:0!important}.mt-xl-1{margin-top:.25rem!important}.mt-xl-2{margin-top:.5rem!important}.mt-xl-3{margin-top:1rem!important}.mt-xl-4{margin-top:1.5rem!important}.mt-xl-5{margin-top:3rem!important}.mt-xl-auto{margin-top:auto!important}.me-xl-0{margin-right:0!important}.me-xl-1{margin-right:.25rem!important}.me-xl-2{margin-right:.5rem!important}.me-xl-3{margin-right:1rem!important}.me-xl-4{margin-right:1.5rem!important}.me-xl-5{margin-right:3rem!important}.me-xl-auto{margin-right:auto!important}.mb-xl-0{margin-bottom:0!important}.mb-xl-1{margin-bottom:.25rem!important}.mb-xl-2{margin-bottom:.5rem!important}.mb-xl-3{margin-bottom:1rem!important}.mb-xl-4{margin-bottom:1.5rem!important}.mb-xl-5{margin-bottom:3rem!important}.mb-xl-auto{margin-bottom:auto!important}.ms-xl-0{margin-left:0!important}.ms-xl-1{margin-left:.25rem!important}.ms-xl-2{margin-left:.5rem!important}.ms-xl-3{margin-left:1rem!important}.ms-xl-4{margin-left:1.5rem!important}.ms-xl-5{margin-left:3rem!important}.ms-xl-auto{margin-left:auto!important}.p-xl-0{padding:0!important}.p-xl-1{padding:.25rem!important}.p-xl-2{padding:.5rem!important}.p-xl-3{padding:1rem!important}.p-xl-4{padding:1.5rem!important}.p-xl-5{padding:3rem!important}.px-xl-0{padding-right:0!important;padding-left:0!important}.px-xl-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-xl-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-xl-3{padding-right:1rem!important;padding-left:1rem!important}.px-xl-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-xl-5{padding-right:3rem!important;padding-left:3rem!important}.py-xl-0{padding-top:0!important;padding-bottom:0!important}.py-xl-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-xl-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-xl-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-xl-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-xl-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-xl-0{padding-top:0!important}.pt-xl-1{padding-top:.25rem!important}.pt-xl-2{padding-top:.5rem!important}.pt-xl-3{padding-top:1rem!important}.pt-xl-4{padding-top:1.5rem!important}.pt-xl-5{padding-top:3rem!important}.pe-xl-0{padding-right:0!important}.pe-xl-1{padding-right:.25rem!important}.pe-xl-2{padding-right:.5rem!important}.pe-xl-3{padding-right:1rem!important}.pe-xl-4{padding-right:1.5rem!important}.pe-xl-5{padding-right:3rem!important}.pb-xl-0{padding-bottom:0!important}.pb-xl-1{padding-bottom:.25rem!important}.pb-xl-2{padding-bottom:.5rem!important}.pb-xl-3{padding-bottom:1rem!important}.pb-xl-4{padding-bottom:1.5rem!important}.pb-xl-5{padding-bottom:3rem!important}.ps-xl-0{padding-left:0!important}.ps-xl-1{padding-left:.25rem!important}.ps-xl-2{padding-left:.5rem!important}.ps-xl-3{padding-left:1rem!important}.ps-xl-4{padding-left:1.5rem!important}.ps-xl-5{padding-left:3rem!important}.text-xl-start{text-align:left!important}.text-xl-end{text-align:right!important}.text-xl-center{text-align:center!important}}@media (min-width:1400px){.float-xxl-start{float:left!important}.float-xxl-end{float:right!important}.float-xxl-none{float:none!important}.d-xxl-inline{display:inline!important}.d-xxl-inline-block{display:inline-block!important}.d-xxl-block{display:block!important}.d-xxl-grid{display:grid!important}.d-xxl-table{display:table!important}.d-xxl-table-row{display:table-row!important}.d-xxl-table-cell{display:table-cell!important}.d-xxl-flex{display:flex!important}.d-xxl-inline-flex{display:inline-flex!important}.d-xxl-none{display:none!important}.flex-xxl-fill{flex:1 1 auto!important}.flex-xxl-row{flex-direction:row!important}.flex-xxl-column{flex-direction:column!important}.flex-xxl-row-reverse{flex-direction:row-reverse!important}.flex-xxl-column-reverse{flex-direction:column-reverse!important}.flex-xxl-grow-0{flex-grow:0!important}.flex-xxl-grow-1{flex-grow:1!important}.flex-xxl-shrink-0{flex-shrink:0!important}.flex-xxl-shrink-1{flex-shrink:1!important}.flex-xxl-wrap{flex-wrap:wrap!important}.flex-xxl-nowrap{flex-wrap:nowrap!important}.flex-xxl-wrap-reverse{flex-wrap:wrap-reverse!important}.gap-xxl-0{gap:0!important}.gap-xxl-1{gap:.25rem!important}.gap-xxl-2{gap:.5rem!important}.gap-xxl-3{gap:1rem!important}.gap-xxl-4{gap:1.5rem!important}.gap-xxl-5{gap:3rem!important}.justify-content-xxl-start{justify-content:flex-start!important}.justify-content-xxl-end{justify-content:flex-end!important}.justify-content-xxl-center{justify-content:center!important}.justify-content-xxl-between{justify-content:space-between!important}.justify-content-xxl-around{justify-content:space-around!important}.justify-content-xxl-evenly{justify-content:space-evenly!important}.align-items-xxl-start{align-items:flex-start!important}.align-items-xxl-end{align-items:flex-end!important}.align-items-xxl-center{align-items:center!important}.align-items-xxl-baseline{align-items:baseline!important}.align-items-xxl-stretch{align-items:stretch!important}.align-content-xxl-start{align-content:flex-start!important}.align-content-xxl-end{align-content:flex-end!important}.align-content-xxl-center{align-content:center!important}.align-content-xxl-between{align-content:space-between!important}.align-content-xxl-around{align-content:space-around!important}.align-content-xxl-stretch{align-content:stretch!important}.align-self-xxl-auto{align-self:auto!important}.align-self-xxl-start{align-self:flex-start!important}.align-self-xxl-end{align-self:flex-end!important}.align-self-xxl-center{align-self:center!important}.align-self-xxl-baseline{align-self:baseline!important}.align-self-xxl-stretch{align-self:stretch!important}.order-xxl-first{order:-1!important}.order-xxl-0{order:0!important}.order-xxl-1{order:1!important}.order-xxl-2{order:2!important}.order-xxl-3{order:3!important}.order-xxl-4{order:4!important}.order-xxl-5{order:5!important}.order-xxl-last{order:6!important}.m-xxl-0{margin:0!important}.m-xxl-1{margin:.25rem!important}.m-xxl-2{margin:.5rem!important}.m-xxl-3{margin:1rem!important}.m-xxl-4{margin:1.5rem!important}.m-xxl-5{margin:3rem!important}.m-xxl-auto{margin:auto!important}.mx-xxl-0{margin-right:0!important;margin-left:0!important}.mx-xxl-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-xxl-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-xxl-3{margin-right:1rem!important;margin-left:1rem!important}.mx-xxl-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-xxl-5{margin-right:3rem!important;margin-left:3rem!important}.mx-xxl-auto{margin-right:auto!important;margin-left:auto!important}.my-xxl-0{margin-top:0!important;margin-bottom:0!important}.my-xxl-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-xxl-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-xxl-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-xxl-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-xxl-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-xxl-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-xxl-0{margin-top:0!important}.mt-xxl-1{margin-top:.25rem!important}.mt-xxl-2{margin-top:.5rem!important}.mt-xxl-3{margin-top:1rem!important}.mt-xxl-4{margin-top:1.5rem!important}.mt-xxl-5{margin-top:3rem!important}.mt-xxl-auto{margin-top:auto!important}.me-xxl-0{margin-right:0!important}.me-xxl-1{margin-right:.25rem!important}.me-xxl-2{margin-right:.5rem!important}.me-xxl-3{margin-right:1rem!important}.me-xxl-4{margin-right:1.5rem!important}.me-xxl-5{margin-right:3rem!important}.me-xxl-auto{margin-right:auto!important}.mb-xxl-0{margin-bottom:0!important}.mb-xxl-1{margin-bottom:.25rem!important}.mb-xxl-2{margin-bottom:.5rem!important}.mb-xxl-3{margin-bottom:1rem!important}.mb-xxl-4{margin-bottom:1.5rem!important}.mb-xxl-5{margin-bottom:3rem!important}.mb-xxl-auto{margin-bottom:auto!important}.ms-xxl-0{margin-left:0!important}.ms-xxl-1{margin-left:.25rem!important}.ms-xxl-2{margin-left:.5rem!important}.ms-xxl-3{margin-left:1rem!important}.ms-xxl-4{margin-left:1.5rem!important}.ms-xxl-5{margin-left:3rem!important}.ms-xxl-auto{margin-left:auto!important}.p-xxl-0{padding:0!important}.p-xxl-1{padding:.25rem!important}.p-xxl-2{padding:.5rem!important}.p-xxl-3{padding:1rem!important}.p-xxl-4{padding:1.5rem!important}.p-xxl-5{padding:3rem!important}.px-xxl-0{padding-right:0!important;padding-left:0!important}.px-xxl-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-xxl-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-xxl-3{padding-right:1rem!important;padding-left:1rem!important}.px-xxl-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-xxl-5{padding-right:3rem!important;padding-left:3rem!important}.py-xxl-0{padding-top:0!important;padding-bottom:0!important}.py-xxl-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-xxl-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-xxl-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-xxl-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-xxl-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-xxl-0{padding-top:0!important}.pt-xxl-1{padding-top:.25rem!important}.pt-xxl-2{padding-top:.5rem!important}.pt-xxl-3{padding-top:1rem!important}.pt-xxl-4{padding-top:1.5rem!important}.pt-xxl-5{padding-top:3rem!important}.pe-xxl-0{padding-right:0!important}.pe-xxl-1{padding-right:.25rem!important}.pe-xxl-2{padding-right:.5rem!important}.pe-xxl-3{padding-right:1rem!important}.pe-xxl-4{padding-right:1.5rem!important}.pe-xxl-5{padding-right:3rem!important}.pb-xxl-0{padding-bottom:0!important}.pb-xxl-1{padding-bottom:.25rem!important}.pb-xxl-2{padding-bottom:.5rem!important}.pb-xxl-3{padding-bottom:1rem!important}.pb-xxl-4{padding-bottom:1.5rem!important}.pb-xxl-5{padding-bottom:3rem!important}.ps-xxl-0{padding-left:0!important}.ps-xxl-1{padding-left:.25rem!important}.ps-xxl-2{padding-left:.5rem!important}.ps-xxl-3{padding-left:1rem!important}.ps-xxl-4{padding-left:1.5rem!important}.ps-xxl-5{padding-left:3rem!important}.text-xxl-start{text-align:left!important}.text-xxl-end{text-align:right!important}.text-xxl-center{text-align:center!important}}@media (min-width:1200px){.fs-1{font-size:2.5rem!important}.fs-2{font-size:2rem!important}.fs-3{font-size:1.75rem!important}.fs-4{font-size:1.5rem!important}}@media print{.d-print-inline{display:inline!important}.d-print-inline-block{display:inline-block!important}.d-print-block{display:block!important}.d-print-grid{display:grid!important}.d-print-table{display:table!important}.d-print-table-row{display:table-row!important}.d-print-table-cell{display:table-cell!important}.d-print-flex{display:flex!important}.d-print-inline-flex{display:inline-flex!important}.d-print-none{display:none!important}}
/*# sourceMappingURL=bootstrap.min.css.map */

@font-face{font-family:boxicons;font-weight:400;font-style:normal;src:url(../fonts/boxicons.eot);src:url(../fonts/boxicons.eot) format('embedded-opentype'),url(../fonts/boxicons.woff2) format('woff2'),url(../fonts/boxicons.woff) format('woff'),url(../fonts/boxicons.ttf) format('truetype'),url(../fonts/boxicons.svg?#boxicons) format('svg')}.bx{font-family:boxicons!important;font-weight:400;font-style:normal;font-variant:normal;line-height:1;text-rendering:auto;display:inline-block;text-transform:none;speak:none;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.bx-ul{margin-left:2em;padding-left:0;list-style:none}.bx-ul>li{position:relative}.bx-ul .bx{font-size:inherit;line-height:inherit;position:absolute;left:-2em;width:2em;text-align:center}@-webkit-keyframes spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@-webkit-keyframes burst{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}90%{-webkit-transform:scale(1.5);transform:scale(1.5);opacity:0}}@keyframes burst{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}90%{-webkit-transform:scale(1.5);transform:scale(1.5);opacity:0}}@-webkit-keyframes flashing{0%{opacity:1}45%{opacity:0}90%{opacity:1}}@keyframes flashing{0%{opacity:1}45%{opacity:0}90%{opacity:1}}@-webkit-keyframes fade-left{0%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}75%{-webkit-transform:translateX(-20px);transform:translateX(-20px);opacity:0}}@keyframes fade-left{0%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}75%{-webkit-transform:translateX(-20px);transform:translateX(-20px);opacity:0}}@-webkit-keyframes fade-right{0%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}75%{-webkit-transform:translateX(20px);transform:translateX(20px);opacity:0}}@keyframes fade-right{0%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}75%{-webkit-transform:translateX(20px);transform:translateX(20px);opacity:0}}@-webkit-keyframes fade-up{0%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}75%{-webkit-transform:translateY(-20px);transform:translateY(-20px);opacity:0}}@keyframes fade-up{0%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}75%{-webkit-transform:translateY(-20px);transform:translateY(-20px);opacity:0}}@-webkit-keyframes fade-down{0%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}75%{-webkit-transform:translateY(20px);transform:translateY(20px);opacity:0}}@keyframes fade-down{0%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}75%{-webkit-transform:translateY(20px);transform:translateY(20px);opacity:0}}@-webkit-keyframes tada{from{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}10%,20%{-webkit-transform:scale3d(.95,.95,.95) rotate3d(0,0,1,-10deg);transform:scale3d(.95,.95,.95) rotate3d(0,0,1,-10deg)}30%,50%,70%,90%{-webkit-transform:scale3d(1,1,1) rotate3d(0,0,1,10deg);transform:scale3d(1,1,1) rotate3d(0,0,1,10deg)}40%,60%,80%{-webkit-transform:scale3d(1,1,1) rotate3d(0,0,1,-10deg);transform:scale3d(1,1,1) rotate3d(0,0,1,-10deg)}to{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}@keyframes tada{from{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}10%,20%{-webkit-transform:scale3d(.95,.95,.95) rotate3d(0,0,1,-10deg);transform:scale3d(.95,.95,.95) rotate3d(0,0,1,-10deg)}30%,50%,70%,90%{-webkit-transform:scale3d(1,1,1) rotate3d(0,0,1,10deg);transform:scale3d(1,1,1) rotate3d(0,0,1,10deg)}40%,60%,80%{-webkit-transform:rotate3d(0,0,1,-10deg);transform:rotate3d(0,0,1,-10deg)}to{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}.bx-spin{-webkit-animation:spin 2s linear infinite;animation:spin 2s linear infinite}.bx-spin-hover:hover{-webkit-animation:spin 2s linear infinite;animation:spin 2s linear infinite}.bx-tada{-webkit-animation:tada 1.5s ease infinite;animation:tada 1.5s ease infinite}.bx-tada-hover:hover{-webkit-animation:tada 1.5s ease infinite;animation:tada 1.5s ease infinite}.bx-flashing{-webkit-animation:flashing 1.5s infinite linear;animation:flashing 1.5s infinite linear}.bx-flashing-hover:hover{-webkit-animation:flashing 1.5s infinite linear;animation:flashing 1.5s infinite linear}.bx-burst{-webkit-animation:burst 1.5s infinite linear;animation:burst 1.5s infinite linear}.bx-burst-hover:hover{-webkit-animation:burst 1.5s infinite linear;animation:burst 1.5s infinite linear}.bx-fade-up{-webkit-animation:fade-up 1.5s infinite linear;animation:fade-up 1.5s infinite linear}.bx-fade-up-hover:hover{-webkit-animation:fade-up 1.5s infinite linear;animation:fade-up 1.5s infinite linear}.bx-fade-down{-webkit-animation:fade-down 1.5s infinite linear;animation:fade-down 1.5s infinite linear}.bx-fade-down-hover:hover{-webkit-animation:fade-down 1.5s infinite linear;animation:fade-down 1.5s infinite linear}.bx-fade-left{-webkit-animation:fade-left 1.5s infinite linear;animation:fade-left 1.5s infinite linear}.bx-fade-left-hover:hover{-webkit-animation:fade-left 1.5s infinite linear;animation:fade-left 1.5s infinite linear}.bx-fade-right{-webkit-animation:fade-right 1.5s infinite linear;animation:fade-right 1.5s infinite linear}.bx-fade-right-hover:hover{-webkit-animation:fade-right 1.5s infinite linear;animation:fade-right 1.5s infinite linear}.bx-xs{font-size:1rem!important}.bx-sm{font-size:1.55rem!important}.bx-md{font-size:2.25rem!important}.bx-lg{font-size:3rem!important}.bx-fw{font-size:1.2857142857em;line-height:.8em;width:1.2857142857em;height:.8em;margin-top:-.2em!important;vertical-align:middle}.bx-pull-left{float:left;margin-right:.3em!important}.bx-pull-right{float:right;margin-left:.3em!important}.bx-rotate-90{transform:rotate(90deg)}.bx-rotate-180{transform:rotate(180deg)}.bx-rotate-270{transform:rotate(270deg)}.bx-flip-horizontal{transform:scaleX(-1)}.bx-flip-vertical{transform:scaleY(-1)}.bx-border{padding:.25em;border:.07em solid rgba(0,0,0,.1);border-radius:.25em}.bx-border-circle{padding:.25em;border:.07em solid rgba(0,0,0,.1);border-radius:50%}.bxl-meta:before{content:"\ef27"}.bx-lemon:before{content:"\ef28"}.bxs-lemon:before{content:"\ef29"}.bx-cricket-ball:before{content:"\ef0c"}.bx-baguette:before{content:"\ef0d"}.bx-bowl-hot:before{content:"\ef0e"}.bx-bowl-rice:before{content:"\ef0f"}.bx-cable-car:before{content:"\ef10"}.bx-candles:before{content:"\ef11"}.bx-circle-half:before{content:"\ef12"}.bx-circle-quarter:before{content:"\ef13"}.bx-circle-three-quarter:before{content:"\ef14"}.bx-cross:before{content:"\ef15"}.bx-fork:before{content:"\ef16"}.bx-knife:before{content:"\ef17"}.bx-money-withdraw:before{content:"\ef18"}.bx-popsicle:before{content:"\ef19"}.bx-scatter-chart:before{content:"\ef1a"}.bxs-baguette:before{content:"\ef1b"}.bxs-bowl-hot:before{content:"\ef1c"}.bxs-bowl-rice:before{content:"\ef1d"}.bxs-cable-car:before{content:"\ef1e"}.bxs-circle-half:before{content:"\ef1f"}.bxs-circle-quarter:before{content:"\ef20"}.bxs-circle-three-quarter:before{content:"\ef21"}.bxs-cricket-ball:before{content:"\ef22"}.bxs-invader:before{content:"\ef23"}.bx-male-female:before{content:"\ef24"}.bxs-popsicle:before{content:"\ef25"}.bxs-tree-alt:before{content:"\ef26"}.bxl-venmo:before{content:"\e900"}.bxl-upwork:before{content:"\e901"}.bxl-netlify:before{content:"\e902"}.bxl-java:before{content:"\e903"}.bxl-heroku:before{content:"\e904"}.bxl-go-lang:before{content:"\e905"}.bxl-gmail:before{content:"\e906"}.bxl-flask:before{content:"\e907"}.bxl-99designs:before{content:"\e908"}.bxl-500px:before{content:"\e909"}.bxl-adobe:before{content:"\e90a"}.bxl-airbnb:before{content:"\e90b"}.bxl-algolia:before{content:"\e90c"}.bxl-amazon:before{content:"\e90d"}.bxl-android:before{content:"\e90e"}.bxl-angular:before{content:"\e90f"}.bxl-apple:before{content:"\e910"}.bxl-audible:before{content:"\e911"}.bxl-aws:before{content:"\e912"}.bxl-baidu:before{content:"\e913"}.bxl-behance:before{content:"\e914"}.bxl-bing:before{content:"\e915"}.bxl-bitcoin:before{content:"\e916"}.bxl-blender:before{content:"\e917"}.bxl-blogger:before{content:"\e918"}.bxl-bootstrap:before{content:"\e919"}.bxl-chrome:before{content:"\e91a"}.bxl-codepen:before{content:"\e91b"}.bxl-c-plus-plus:before{content:"\e91c"}.bxl-creative-commons:before{content:"\e91d"}.bxl-css3:before{content:"\e91e"}.bxl-dailymotion:before{content:"\e91f"}.bxl-deviantart:before{content:"\e920"}.bxl-dev-to:before{content:"\e921"}.bxl-digg:before{content:"\e922"}.bxl-digitalocean:before{content:"\e923"}.bxl-discord:before{content:"\e924"}.bxl-discord-alt:before{content:"\e925"}.bxl-discourse:before{content:"\e926"}.bxl-django:before{content:"\e927"}.bxl-docker:before{content:"\e928"}.bxl-dribbble:before{content:"\e929"}.bxl-dropbox:before{content:"\e92a"}.bxl-drupal:before{content:"\e92b"}.bxl-ebay:before{content:"\e92c"}.bxl-edge:before{content:"\e92d"}.bxl-etsy:before{content:"\e92e"}.bxl-facebook:before{content:"\e92f"}.bxl-facebook-circle:before{content:"\e930"}.bxl-facebook-square:before{content:"\e931"}.bxl-figma:before{content:"\e932"}.bxl-firebase:before{content:"\e933"}.bxl-firefox:before{content:"\e934"}.bxl-flickr:before{content:"\e935"}.bxl-flickr-square:before{content:"\e936"}.bxl-flutter:before{content:"\e937"}.bxl-foursquare:before{content:"\e938"}.bxl-git:before{content:"\e939"}.bxl-github:before{content:"\e93a"}.bxl-gitlab:before{content:"\e93b"}.bxl-google:before{content:"\e93c"}.bxl-google-cloud:before{content:"\e93d"}.bxl-google-plus:before{content:"\e93e"}.bxl-google-plus-circle:before{content:"\e93f"}.bxl-html5:before{content:"\e940"}.bxl-imdb:before{content:"\e941"}.bxl-instagram:before{content:"\e942"}.bxl-instagram-alt:before{content:"\e943"}.bxl-internet-explorer:before{content:"\e944"}.bxl-invision:before{content:"\e945"}.bxl-javascript:before{content:"\e946"}.bxl-joomla:before{content:"\e947"}.bxl-jquery:before{content:"\e948"}.bxl-jsfiddle:before{content:"\e949"}.bxl-kickstarter:before{content:"\e94a"}.bxl-kubernetes:before{content:"\e94b"}.bxl-less:before{content:"\e94c"}.bxl-linkedin:before{content:"\e94d"}.bxl-linkedin-square:before{content:"\e94e"}.bxl-magento:before{content:"\e94f"}.bxl-mailchimp:before{content:"\e950"}.bxl-markdown:before{content:"\e951"}.bxl-mastercard:before{content:"\e952"}.bxl-mastodon:before{content:"\e953"}.bxl-medium:before{content:"\e954"}.bxl-medium-old:before{content:"\e955"}.bxl-medium-square:before{content:"\e956"}.bxl-messenger:before{content:"\e957"}.bxl-microsoft:before{content:"\e958"}.bxl-microsoft-teams:before{content:"\e959"}.bxl-nodejs:before{content:"\e95a"}.bxl-ok-ru:before{content:"\e95b"}.bxl-opera:before{content:"\e95c"}.bxl-patreon:before{content:"\e95d"}.bxl-paypal:before{content:"\e95e"}.bxl-periscope:before{content:"\e95f"}.bxl-php:before{content:"\e960"}.bxl-pinterest:before{content:"\e961"}.bxl-pinterest-alt:before{content:"\e962"}.bxl-play-store:before{content:"\e963"}.bxl-pocket:before{content:"\e964"}.bxl-product-hunt:before{content:"\e965"}.bxl-python:before{content:"\e966"}.bxl-quora:before{content:"\e967"}.bxl-react:before{content:"\e968"}.bxl-redbubble:before{content:"\e969"}.bxl-reddit:before{content:"\e96a"}.bxl-redux:before{content:"\e96b"}.bxl-sass:before{content:"\e96c"}.bxl-shopify:before{content:"\e96d"}.bxl-sketch:before{content:"\e96e"}.bxl-skype:before{content:"\e96f"}.bxl-slack:before{content:"\e970"}.bxl-slack-old:before{content:"\e971"}.bxl-snapchat:before{content:"\e972"}.bxl-soundcloud:before{content:"\e973"}.bxl-spotify:before{content:"\e974"}.bxl-spring-boot:before{content:"\e975"}.bxl-squarespace:before{content:"\e976"}.bxl-stack-overflow:before{content:"\e977"}.bxl-steam:before{content:"\e978"}.bxl-stripe:before{content:"\e979"}.bxl-tailwind-css:before{content:"\e97a"}.bxl-telegram:before{content:"\e97b"}.bxl-tiktok:before{content:"\e97c"}.bxl-trello:before{content:"\e97d"}.bxl-trip-advisor:before{content:"\e97e"}.bxl-tumblr:before{content:"\e97f"}.bxl-tux:before{content:"\e980"}.bxl-twitch:before{content:"\e981"}.bxl-twitter:before{content:"\e982"}.bxl-unity:before{content:"\e983"}.bxl-unsplash:before{content:"\e984"}.bxl-vimeo:before{content:"\e985"}.bxl-visa:before{content:"\e986"}.bxl-visual-studio:before{content:"\e987"}.bxl-vk:before{content:"\e988"}.bxl-vuejs:before{content:"\e989"}.bxl-whatsapp:before{content:"\e98a"}.bxl-whatsapp-square:before{content:"\e98b"}.bxl-wikipedia:before{content:"\e98c"}.bxl-windows:before{content:"\e98d"}.bxl-wix:before{content:"\e98e"}.bxl-wordpress:before{content:"\e98f"}.bxl-yahoo:before{content:"\e990"}.bxl-yelp:before{content:"\e991"}.bxl-youtube:before{content:"\e992"}.bxl-zoom:before{content:"\e993"}.bx-collapse-alt:before{content:"\e994"}.bx-collapse-horizontal:before{content:"\e995"}.bx-collapse-vertical:before{content:"\e996"}.bx-expand-horizontal:before{content:"\e997"}.bx-expand-vertical:before{content:"\e998"}.bx-injection:before{content:"\e999"}.bx-leaf:before{content:"\e99a"}.bx-math:before{content:"\e99b"}.bx-party:before{content:"\e99c"}.bx-abacus:before{content:"\e99d"}.bx-accessibility:before{content:"\e99e"}.bx-add-to-queue:before{content:"\e99f"}.bx-adjust:before{content:"\e9a0"}.bx-alarm:before{content:"\e9a1"}.bx-alarm-add:before{content:"\e9a2"}.bx-alarm-exclamation:before{content:"\e9a3"}.bx-alarm-off:before{content:"\e9a4"}.bx-alarm-snooze:before{content:"\e9a5"}.bx-album:before{content:"\e9a6"}.bx-align-justify:before{content:"\e9a7"}.bx-align-left:before{content:"\e9a8"}.bx-align-middle:before{content:"\e9a9"}.bx-align-right:before{content:"\e9aa"}.bx-analyse:before{content:"\e9ab"}.bx-anchor:before{content:"\e9ac"}.bx-angry:before{content:"\e9ad"}.bx-aperture:before{content:"\e9ae"}.bx-arch:before{content:"\e9af"}.bx-archive:before{content:"\e9b0"}.bx-archive-in:before{content:"\e9b1"}.bx-archive-out:before{content:"\e9b2"}.bx-area:before{content:"\e9b3"}.bx-arrow-back:before{content:"\e9b4"}.bx-arrow-from-bottom:before{content:"\e9b5"}.bx-arrow-from-left:before{content:"\e9b6"}.bx-arrow-from-right:before{content:"\e9b7"}.bx-arrow-from-top:before{content:"\e9b8"}.bx-arrow-to-bottom:before{content:"\e9b9"}.bx-arrow-to-left:before{content:"\e9ba"}.bx-arrow-to-right:before{content:"\e9bb"}.bx-arrow-to-top:before{content:"\e9bc"}.bx-at:before{content:"\e9bd"}.bx-atom:before{content:"\e9be"}.bx-award:before{content:"\e9bf"}.bx-badge:before{content:"\e9c0"}.bx-badge-check:before{content:"\e9c1"}.bx-ball:before{content:"\e9c2"}.bx-band-aid:before{content:"\e9c3"}.bx-bar-chart:before{content:"\e9c4"}.bx-bar-chart-alt:before{content:"\e9c5"}.bx-bar-chart-alt-2:before{content:"\e9c6"}.bx-bar-chart-square:before{content:"\e9c7"}.bx-barcode:before{content:"\e9c8"}.bx-barcode-reader:before{content:"\e9c9"}.bx-baseball:before{content:"\e9ca"}.bx-basket:before{content:"\e9cb"}.bx-basketball:before{content:"\e9cc"}.bx-bath:before{content:"\e9cd"}.bx-battery:before{content:"\e9ce"}.bx-bed:before{content:"\e9cf"}.bx-been-here:before{content:"\e9d0"}.bx-beer:before{content:"\e9d1"}.bx-bell:before{content:"\e9d2"}.bx-bell-minus:before{content:"\e9d3"}.bx-bell-off:before{content:"\e9d4"}.bx-bell-plus:before{content:"\e9d5"}.bx-bible:before{content:"\e9d6"}.bx-bitcoin:before{content:"\e9d7"}.bx-blanket:before{content:"\e9d8"}.bx-block:before{content:"\e9d9"}.bx-bluetooth:before{content:"\e9da"}.bx-body:before{content:"\e9db"}.bx-bold:before{content:"\e9dc"}.bx-bolt-circle:before{content:"\e9dd"}.bx-bomb:before{content:"\e9de"}.bx-bone:before{content:"\e9df"}.bx-bong:before{content:"\e9e0"}.bx-book:before{content:"\e9e1"}.bx-book-add:before{content:"\e9e2"}.bx-book-alt:before{content:"\e9e3"}.bx-book-bookmark:before{content:"\e9e4"}.bx-book-content:before{content:"\e9e5"}.bx-book-heart:before{content:"\e9e6"}.bx-bookmark:before{content:"\e9e7"}.bx-bookmark-alt:before{content:"\e9e8"}.bx-bookmark-alt-minus:before{content:"\e9e9"}.bx-bookmark-alt-plus:before{content:"\e9ea"}.bx-bookmark-heart:before{content:"\e9eb"}.bx-bookmark-minus:before{content:"\e9ec"}.bx-bookmark-plus:before{content:"\e9ed"}.bx-bookmarks:before{content:"\e9ee"}.bx-book-open:before{content:"\e9ef"}.bx-book-reader:before{content:"\e9f0"}.bx-border-all:before{content:"\e9f1"}.bx-border-bottom:before{content:"\e9f2"}.bx-border-inner:before{content:"\e9f3"}.bx-border-left:before{content:"\e9f4"}.bx-border-none:before{content:"\e9f5"}.bx-border-outer:before{content:"\e9f6"}.bx-border-radius:before{content:"\e9f7"}.bx-border-right:before{content:"\e9f8"}.bx-border-top:before{content:"\e9f9"}.bx-bot:before{content:"\e9fa"}.bx-bowling-ball:before{content:"\e9fb"}.bx-box:before{content:"\e9fc"}.bx-bracket:before{content:"\e9fd"}.bx-braille:before{content:"\e9fe"}.bx-brain:before{content:"\e9ff"}.bx-briefcase:before{content:"\ea00"}.bx-briefcase-alt:before{content:"\ea01"}.bx-briefcase-alt-2:before{content:"\ea02"}.bx-brightness:before{content:"\ea03"}.bx-brightness-half:before{content:"\ea04"}.bx-broadcast:before{content:"\ea05"}.bx-brush:before{content:"\ea06"}.bx-brush-alt:before{content:"\ea07"}.bx-bug:before{content:"\ea08"}.bx-bug-alt:before{content:"\ea09"}.bx-building:before{content:"\ea0a"}.bx-building-house:before{content:"\ea0b"}.bx-buildings:before{content:"\ea0c"}.bx-bulb:before{content:"\ea0d"}.bx-bullseye:before{content:"\ea0e"}.bx-buoy:before{content:"\ea0f"}.bx-bus:before{content:"\ea10"}.bx-bus-school:before{content:"\ea11"}.bx-cabinet:before{content:"\ea12"}.bx-cake:before{content:"\ea13"}.bx-calculator:before{content:"\ea14"}.bx-calendar:before{content:"\ea15"}.bx-calendar-alt:before{content:"\ea16"}.bx-calendar-check:before{content:"\ea17"}.bx-calendar-edit:before{content:"\ea18"}.bx-calendar-event:before{content:"\ea19"}.bx-calendar-exclamation:before{content:"\ea1a"}.bx-calendar-heart:before{content:"\ea1b"}.bx-calendar-minus:before{content:"\ea1c"}.bx-calendar-plus:before{content:"\ea1d"}.bx-calendar-star:before{content:"\ea1e"}.bx-calendar-week:before{content:"\ea1f"}.bx-calendar-x:before{content:"\ea20"}.bx-camera:before{content:"\ea21"}.bx-camera-home:before{content:"\ea22"}.bx-camera-movie:before{content:"\ea23"}.bx-camera-off:before{content:"\ea24"}.bx-capsule:before{content:"\ea25"}.bx-captions:before{content:"\ea26"}.bx-car:before{content:"\ea27"}.bx-card:before{content:"\ea28"}.bx-caret-down:before{content:"\ea29"}.bx-caret-down-circle:before{content:"\ea2a"}.bx-caret-down-square:before{content:"\ea2b"}.bx-caret-left:before{content:"\ea2c"}.bx-caret-left-circle:before{content:"\ea2d"}.bx-caret-left-square:before{content:"\ea2e"}.bx-caret-right:before{content:"\ea2f"}.bx-caret-right-circle:before{content:"\ea30"}.bx-caret-right-square:before{content:"\ea31"}.bx-caret-up:before{content:"\ea32"}.bx-caret-up-circle:before{content:"\ea33"}.bx-caret-up-square:before{content:"\ea34"}.bx-carousel:before{content:"\ea35"}.bx-cart:before{content:"\ea36"}.bx-cart-alt:before{content:"\ea37"}.bx-cast:before{content:"\ea38"}.bx-category:before{content:"\ea39"}.bx-category-alt:before{content:"\ea3a"}.bx-cctv:before{content:"\ea3b"}.bx-certification:before{content:"\ea3c"}.bx-chair:before{content:"\ea3d"}.bx-chalkboard:before{content:"\ea3e"}.bx-chart:before{content:"\ea3f"}.bx-chat:before{content:"\ea40"}.bx-check:before{content:"\ea41"}.bx-checkbox:before{content:"\ea42"}.bx-checkbox-checked:before{content:"\ea43"}.bx-checkbox-minus:before{content:"\ea44"}.bx-checkbox-square:before{content:"\ea45"}.bx-check-circle:before{content:"\ea46"}.bx-check-double:before{content:"\ea47"}.bx-check-shield:before{content:"\ea48"}.bx-check-square:before{content:"\ea49"}.bx-chevron-down:before{content:"\ea4a"}.bx-chevron-down-circle:before{content:"\ea4b"}.bx-chevron-down-square:before{content:"\ea4c"}.bx-chevron-left:before{content:"\ea4d"}.bx-chevron-left-circle:before{content:"\ea4e"}.bx-chevron-left-square:before{content:"\ea4f"}.bx-chevron-right:before{content:"\ea50"}.bx-chevron-right-circle:before{content:"\ea51"}.bx-chevron-right-square:before{content:"\ea52"}.bx-chevrons-down:before{content:"\ea53"}.bx-chevrons-left:before{content:"\ea54"}.bx-chevrons-right:before{content:"\ea55"}.bx-chevrons-up:before{content:"\ea56"}.bx-chevron-up:before{content:"\ea57"}.bx-chevron-up-circle:before{content:"\ea58"}.bx-chevron-up-square:before{content:"\ea59"}.bx-chip:before{content:"\ea5a"}.bx-church:before{content:"\ea5b"}.bx-circle:before{content:"\ea5c"}.bx-clinic:before{content:"\ea5d"}.bx-clipboard:before{content:"\ea5e"}.bx-closet:before{content:"\ea5f"}.bx-cloud:before{content:"\ea60"}.bx-cloud-download:before{content:"\ea61"}.bx-cloud-drizzle:before{content:"\ea62"}.bx-cloud-lightning:before{content:"\ea63"}.bx-cloud-light-rain:before{content:"\ea64"}.bx-cloud-rain:before{content:"\ea65"}.bx-cloud-snow:before{content:"\ea66"}.bx-cloud-upload:before{content:"\ea67"}.bx-code:before{content:"\ea68"}.bx-code-alt:before{content:"\ea69"}.bx-code-block:before{content:"\ea6a"}.bx-code-curly:before{content:"\ea6b"}.bx-coffee:before{content:"\ea6c"}.bx-coffee-togo:before{content:"\ea6d"}.bx-cog:before{content:"\ea6e"}.bx-coin:before{content:"\ea6f"}.bx-coin-stack:before{content:"\ea70"}.bx-collapse:before{content:"\ea71"}.bx-collection:before{content:"\ea72"}.bx-color-fill:before{content:"\ea73"}.bx-columns:before{content:"\ea74"}.bx-command:before{content:"\ea75"}.bx-comment:before{content:"\ea76"}.bx-comment-add:before{content:"\ea77"}.bx-comment-check:before{content:"\ea78"}.bx-comment-detail:before{content:"\ea79"}.bx-comment-dots:before{content:"\ea7a"}.bx-comment-edit:before{content:"\ea7b"}.bx-comment-error:before{content:"\ea7c"}.bx-comment-minus:before{content:"\ea7d"}.bx-comment-x:before{content:"\ea7e"}.bx-compass:before{content:"\ea7f"}.bx-confused:before{content:"\ea80"}.bx-conversation:before{content:"\ea81"}.bx-cookie:before{content:"\ea82"}.bx-cool:before{content:"\ea83"}.bx-copy:before{content:"\ea84"}.bx-copy-alt:before{content:"\ea85"}.bx-copyright:before{content:"\ea86"}.bx-credit-card:before{content:"\ea87"}.bx-credit-card-alt:before{content:"\ea88"}.bx-credit-card-front:before{content:"\ea89"}.bx-crop:before{content:"\ea8a"}.bx-crosshair:before{content:"\ea8b"}.bx-crown:before{content:"\ea8c"}.bx-cube:before{content:"\ea8d"}.bx-cube-alt:before{content:"\ea8e"}.bx-cuboid:before{content:"\ea8f"}.bx-current-location:before{content:"\ea90"}.bx-customize:before{content:"\ea91"}.bx-cut:before{content:"\ea92"}.bx-cycling:before{content:"\ea93"}.bx-cylinder:before{content:"\ea94"}.bx-data:before{content:"\ea95"}.bx-desktop:before{content:"\ea96"}.bx-detail:before{content:"\ea97"}.bx-devices:before{content:"\ea98"}.bx-dialpad:before{content:"\ea99"}.bx-dialpad-alt:before{content:"\ea9a"}.bx-diamond:before{content:"\ea9b"}.bx-dice-1:before{content:"\ea9c"}.bx-dice-2:before{content:"\ea9d"}.bx-dice-3:before{content:"\ea9e"}.bx-dice-4:before{content:"\ea9f"}.bx-dice-5:before{content:"\eaa0"}.bx-dice-6:before{content:"\eaa1"}.bx-directions:before{content:"\eaa2"}.bx-disc:before{content:"\eaa3"}.bx-dish:before{content:"\eaa4"}.bx-dislike:before{content:"\eaa5"}.bx-dizzy:before{content:"\eaa6"}.bx-dna:before{content:"\eaa7"}.bx-dock-bottom:before{content:"\eaa8"}.bx-dock-left:before{content:"\eaa9"}.bx-dock-right:before{content:"\eaaa"}.bx-dock-top:before{content:"\eaab"}.bx-dollar:before{content:"\eaac"}.bx-dollar-circle:before{content:"\eaad"}.bx-donate-blood:before{content:"\eaae"}.bx-donate-heart:before{content:"\eaaf"}.bx-door-open:before{content:"\eab0"}.bx-dots-horizontal:before{content:"\eab1"}.bx-dots-horizontal-rounded:before{content:"\eab2"}.bx-dots-vertical:before{content:"\eab3"}.bx-dots-vertical-rounded:before{content:"\eab4"}.bx-doughnut-chart:before{content:"\eab5"}.bx-down-arrow:before{content:"\eab6"}.bx-down-arrow-alt:before{content:"\eab7"}.bx-down-arrow-circle:before{content:"\eab8"}.bx-download:before{content:"\eab9"}.bx-downvote:before{content:"\eaba"}.bx-drink:before{content:"\eabb"}.bx-droplet:before{content:"\eabc"}.bx-dumbbell:before{content:"\eabd"}.bx-duplicate:before{content:"\eabe"}.bx-edit:before{content:"\eabf"}.bx-edit-alt:before{content:"\eac0"}.bx-envelope:before{content:"\eac1"}.bx-envelope-open:before{content:"\eac2"}.bx-equalizer:before{content:"\eac3"}.bx-eraser:before{content:"\eac4"}.bx-error:before{content:"\eac5"}.bx-error-alt:before{content:"\eac6"}.bx-error-circle:before{content:"\eac7"}.bx-euro:before{content:"\eac8"}.bx-exclude:before{content:"\eac9"}.bx-exit:before{content:"\eaca"}.bx-exit-fullscreen:before{content:"\eacb"}.bx-expand:before{content:"\eacc"}.bx-expand-alt:before{content:"\eacd"}.bx-export:before{content:"\eace"}.bx-extension:before{content:"\eacf"}.bx-face:before{content:"\ead0"}.bx-fast-forward:before{content:"\ead1"}.bx-fast-forward-circle:before{content:"\ead2"}.bx-female:before{content:"\ead3"}.bx-female-sign:before{content:"\ead4"}.bx-file:before{content:"\ead5"}.bx-file-blank:before{content:"\ead6"}.bx-file-find:before{content:"\ead7"}.bx-film:before{content:"\ead8"}.bx-filter:before{content:"\ead9"}.bx-filter-alt:before{content:"\eada"}.bx-fingerprint:before{content:"\eadb"}.bx-first-aid:before{content:"\eadc"}.bx-first-page:before{content:"\eadd"}.bx-flag:before{content:"\eade"}.bx-folder:before{content:"\eadf"}.bx-folder-minus:before{content:"\eae0"}.bx-folder-open:before{content:"\eae1"}.bx-folder-plus:before{content:"\eae2"}.bx-font:before{content:"\eae3"}.bx-font-color:before{content:"\eae4"}.bx-font-family:before{content:"\eae5"}.bx-font-size:before{content:"\eae6"}.bx-food-menu:before{content:"\eae7"}.bx-food-tag:before{content:"\eae8"}.bx-football:before{content:"\eae9"}.bx-fridge:before{content:"\eaea"}.bx-fullscreen:before{content:"\eaeb"}.bx-game:before{content:"\eaec"}.bx-gas-pump:before{content:"\eaed"}.bx-ghost:before{content:"\eaee"}.bx-gift:before{content:"\eaef"}.bx-git-branch:before{content:"\eaf0"}.bx-git-commit:before{content:"\eaf1"}.bx-git-compare:before{content:"\eaf2"}.bx-git-merge:before{content:"\eaf3"}.bx-git-pull-request:before{content:"\eaf4"}.bx-git-repo-forked:before{content:"\eaf5"}.bx-glasses:before{content:"\eaf6"}.bx-glasses-alt:before{content:"\eaf7"}.bx-globe:before{content:"\eaf8"}.bx-globe-alt:before{content:"\eaf9"}.bx-grid:before{content:"\eafa"}.bx-grid-alt:before{content:"\eafb"}.bx-grid-horizontal:before{content:"\eafc"}.bx-grid-small:before{content:"\eafd"}.bx-grid-vertical:before{content:"\eafe"}.bx-group:before{content:"\eaff"}.bx-handicap:before{content:"\eb00"}.bx-happy:before{content:"\eb01"}.bx-happy-alt:before{content:"\eb02"}.bx-happy-beaming:before{content:"\eb03"}.bx-happy-heart-eyes:before{content:"\eb04"}.bx-hash:before{content:"\eb05"}.bx-hdd:before{content:"\eb06"}.bx-heading:before{content:"\eb07"}.bx-headphone:before{content:"\eb08"}.bx-health:before{content:"\eb09"}.bx-heart:before{content:"\eb0a"}.bx-heart-circle:before{content:"\eb0b"}.bx-heart-square:before{content:"\eb0c"}.bx-help-circle:before{content:"\eb0d"}.bx-hide:before{content:"\eb0e"}.bx-highlight:before{content:"\eb0f"}.bx-history:before{content:"\eb10"}.bx-hive:before{content:"\eb11"}.bx-home:before{content:"\eb12"}.bx-home-alt:before{content:"\eb13"}.bx-home-circle:before{content:"\eb14"}.bx-home-heart:before{content:"\eb15"}.bx-home-smile:before{content:"\eb16"}.bx-horizontal-center:before{content:"\eb17"}.bx-hotel:before{content:"\eb18"}.bx-hourglass:before{content:"\eb19"}.bx-id-card:before{content:"\eb1a"}.bx-image:before{content:"\eb1b"}.bx-image-add:before{content:"\eb1c"}.bx-image-alt:before{content:"\eb1d"}.bx-images:before{content:"\eb1e"}.bx-import:before{content:"\eb1f"}.bx-infinite:before{content:"\eb20"}.bx-info-circle:before{content:"\eb21"}.bx-info-square:before{content:"\eb22"}.bx-intersect:before{content:"\eb23"}.bx-italic:before{content:"\eb24"}.bx-joystick:before{content:"\eb25"}.bx-joystick-alt:before{content:"\eb26"}.bx-joystick-button:before{content:"\eb27"}.bx-key:before{content:"\eb28"}.bx-label:before{content:"\eb29"}.bx-landscape:before{content:"\eb2a"}.bx-laptop:before{content:"\eb2b"}.bx-last-page:before{content:"\eb2c"}.bx-laugh:before{content:"\eb2d"}.bx-layer:before{content:"\eb2e"}.bx-layer-minus:before{content:"\eb2f"}.bx-layer-plus:before{content:"\eb30"}.bx-layout:before{content:"\eb31"}.bx-left-arrow:before{content:"\eb32"}.bx-left-arrow-alt:before{content:"\eb33"}.bx-left-arrow-circle:before{content:"\eb34"}.bx-left-down-arrow-circle:before{content:"\eb35"}.bx-left-indent:before{content:"\eb36"}.bx-left-top-arrow-circle:before{content:"\eb37"}.bx-library:before{content:"\eb38"}.bx-like:before{content:"\eb39"}.bx-line-chart:before{content:"\eb3a"}.bx-line-chart-down:before{content:"\eb3b"}.bx-link:before{content:"\eb3c"}.bx-link-alt:before{content:"\eb3d"}.bx-link-external:before{content:"\eb3e"}.bx-lira:before{content:"\eb3f"}.bx-list-check:before{content:"\eb40"}.bx-list-minus:before{content:"\eb41"}.bx-list-ol:before{content:"\eb42"}.bx-list-plus:before{content:"\eb43"}.bx-list-ul:before{content:"\eb44"}.bx-loader:before{content:"\eb45"}.bx-loader-alt:before{content:"\eb46"}.bx-loader-circle:before{content:"\eb47"}.bx-location-plus:before{content:"\eb48"}.bx-lock:before{content:"\eb49"}.bx-lock-alt:before{content:"\eb4a"}.bx-lock-open:before{content:"\eb4b"}.bx-lock-open-alt:before{content:"\eb4c"}.bx-log-in:before{content:"\eb4d"}.bx-log-in-circle:before{content:"\eb4e"}.bx-log-out:before{content:"\eb4f"}.bx-log-out-circle:before{content:"\eb50"}.bx-low-vision:before{content:"\eb51"}.bx-magnet:before{content:"\eb52"}.bx-mail-send:before{content:"\eb53"}.bx-male:before{content:"\eb54"}.bx-male-sign:before{content:"\eb55"}.bx-map:before{content:"\eb56"}.bx-map-alt:before{content:"\eb57"}.bx-map-pin:before{content:"\eb58"}.bx-mask:before{content:"\eb59"}.bx-medal:before{content:"\eb5a"}.bx-meh:before{content:"\eb5b"}.bx-meh-alt:before{content:"\eb5c"}.bx-meh-blank:before{content:"\eb5d"}.bx-memory-card:before{content:"\eb5e"}.bx-menu:before{content:"\eb5f"}.bx-menu-alt-left:before{content:"\eb60"}.bx-menu-alt-right:before{content:"\eb61"}.bx-merge:before{content:"\eb62"}.bx-message:before{content:"\eb63"}.bx-message-add:before{content:"\eb64"}.bx-message-alt:before{content:"\eb65"}.bx-message-alt-add:before{content:"\eb66"}.bx-message-alt-check:before{content:"\eb67"}.bx-message-alt-detail:before{content:"\eb68"}.bx-message-alt-dots:before{content:"\eb69"}.bx-message-alt-edit:before{content:"\eb6a"}.bx-message-alt-error:before{content:"\eb6b"}.bx-message-alt-minus:before{content:"\eb6c"}.bx-message-alt-x:before{content:"\eb6d"}.bx-message-check:before{content:"\eb6e"}.bx-message-detail:before{content:"\eb6f"}.bx-message-dots:before{content:"\eb70"}.bx-message-edit:before{content:"\eb71"}.bx-message-error:before{content:"\eb72"}.bx-message-minus:before{content:"\eb73"}.bx-message-rounded:before{content:"\eb74"}.bx-message-rounded-add:before{content:"\eb75"}.bx-message-rounded-check:before{content:"\eb76"}.bx-message-rounded-detail:before{content:"\eb77"}.bx-message-rounded-dots:before{content:"\eb78"}.bx-message-rounded-edit:before{content:"\eb79"}.bx-message-rounded-error:before{content:"\eb7a"}.bx-message-rounded-minus:before{content:"\eb7b"}.bx-message-rounded-x:before{content:"\eb7c"}.bx-message-square:before{content:"\eb7d"}.bx-message-square-add:before{content:"\eb7e"}.bx-message-square-check:before{content:"\eb7f"}.bx-message-square-detail:before{content:"\eb80"}.bx-message-square-dots:before{content:"\eb81"}.bx-message-square-edit:before{content:"\eb82"}.bx-message-square-error:before{content:"\eb83"}.bx-message-square-minus:before{content:"\eb84"}.bx-message-square-x:before{content:"\eb85"}.bx-message-x:before{content:"\eb86"}.bx-meteor:before{content:"\eb87"}.bx-microchip:before{content:"\eb88"}.bx-microphone:before{content:"\eb89"}.bx-microphone-off:before{content:"\eb8a"}.bx-minus:before{content:"\eb8b"}.bx-minus-back:before{content:"\eb8c"}.bx-minus-circle:before{content:"\eb8d"}.bx-minus-front:before{content:"\eb8e"}.bx-mobile:before{content:"\eb8f"}.bx-mobile-alt:before{content:"\eb90"}.bx-mobile-landscape:before{content:"\eb91"}.bx-mobile-vibration:before{content:"\eb92"}.bx-money:before{content:"\eb93"}.bx-moon:before{content:"\eb94"}.bx-mouse:before{content:"\eb95"}.bx-mouse-alt:before{content:"\eb96"}.bx-move:before{content:"\eb97"}.bx-move-horizontal:before{content:"\eb98"}.bx-move-vertical:before{content:"\eb99"}.bx-movie:before{content:"\eb9a"}.bx-movie-play:before{content:"\eb9b"}.bx-music:before{content:"\eb9c"}.bx-navigation:before{content:"\eb9d"}.bx-network-chart:before{content:"\eb9e"}.bx-news:before{content:"\eb9f"}.bx-no-entry:before{content:"\eba0"}.bx-note:before{content:"\eba1"}.bx-notepad:before{content:"\eba2"}.bx-notification:before{content:"\eba3"}.bx-notification-off:before{content:"\eba4"}.bx-outline:before{content:"\eba5"}.bx-package:before{content:"\eba6"}.bx-paint:before{content:"\eba7"}.bx-paint-roll:before{content:"\eba8"}.bx-palette:before{content:"\eba9"}.bx-paperclip:before{content:"\ebaa"}.bx-paper-plane:before{content:"\ebab"}.bx-paragraph:before{content:"\ebac"}.bx-paste:before{content:"\ebad"}.bx-pause:before{content:"\ebae"}.bx-pause-circle:before{content:"\ebaf"}.bx-pen:before{content:"\ebb0"}.bx-pencil:before{content:"\ebb1"}.bx-phone:before{content:"\ebb2"}.bx-phone-call:before{content:"\ebb3"}.bx-phone-incoming:before{content:"\ebb4"}.bx-phone-off:before{content:"\ebb5"}.bx-phone-outgoing:before{content:"\ebb6"}.bx-photo-album:before{content:"\ebb7"}.bx-pie-chart:before{content:"\ebb8"}.bx-pie-chart-alt:before{content:"\ebb9"}.bx-pie-chart-alt-2:before{content:"\ebba"}.bx-pin:before{content:"\ebbb"}.bx-planet:before{content:"\ebbc"}.bx-play:before{content:"\ebbd"}.bx-play-circle:before{content:"\ebbe"}.bx-plug:before{content:"\ebbf"}.bx-plus:before{content:"\ebc0"}.bx-plus-circle:before{content:"\ebc1"}.bx-plus-medical:before{content:"\ebc2"}.bx-podcast:before{content:"\ebc3"}.bx-pointer:before{content:"\ebc4"}.bx-poll:before{content:"\ebc5"}.bx-polygon:before{content:"\ebc6"}.bx-pound:before{content:"\ebc7"}.bx-power-off:before{content:"\ebc8"}.bx-printer:before{content:"\ebc9"}.bx-pulse:before{content:"\ebca"}.bx-purchase-tag:before{content:"\ebcb"}.bx-purchase-tag-alt:before{content:"\ebcc"}.bx-pyramid:before{content:"\ebcd"}.bx-qr:before{content:"\ebce"}.bx-qr-scan:before{content:"\ebcf"}.bx-question-mark:before{content:"\ebd0"}.bx-radar:before{content:"\ebd1"}.bx-radio:before{content:"\ebd2"}.bx-radio-circle:before{content:"\ebd3"}.bx-radio-circle-marked:before{content:"\ebd4"}.bx-receipt:before{content:"\ebd5"}.bx-rectangle:before{content:"\ebd6"}.bx-recycle:before{content:"\ebd7"}.bx-redo:before{content:"\ebd8"}.bx-refresh:before{content:"\ebd9"}.bx-registered:before{content:"\ebda"}.bx-rename:before{content:"\ebdb"}.bx-repeat:before{content:"\ebdc"}.bx-reply:before{content:"\ebdd"}.bx-reply-all:before{content:"\ebde"}.bx-repost:before{content:"\ebdf"}.bx-reset:before{content:"\ebe0"}.bx-restaurant:before{content:"\ebe1"}.bx-revision:before{content:"\ebe2"}.bx-rewind:before{content:"\ebe3"}.bx-rewind-circle:before{content:"\ebe4"}.bx-right-arrow:before{content:"\ebe5"}.bx-right-arrow-alt:before{content:"\ebe6"}.bx-right-arrow-circle:before{content:"\ebe7"}.bx-right-down-arrow-circle:before{content:"\ebe8"}.bx-right-indent:before{content:"\ebe9"}.bx-right-top-arrow-circle:before{content:"\ebea"}.bx-rocket:before{content:"\ebeb"}.bx-rotate-left:before{content:"\ebec"}.bx-rotate-right:before{content:"\ebed"}.bx-rss:before{content:"\ebee"}.bx-ruble:before{content:"\ebef"}.bx-ruler:before{content:"\ebf0"}.bx-run:before{content:"\ebf1"}.bx-rupee:before{content:"\ebf2"}.bx-sad:before{content:"\ebf3"}.bx-save:before{content:"\ebf4"}.bx-scan:before{content:"\ebf5"}.bx-screenshot:before{content:"\ebf6"}.bx-search:before{content:"\ebf7"}.bx-search-alt:before{content:"\ebf8"}.bx-search-alt-2:before{content:"\ebf9"}.bx-selection:before{content:"\ebfa"}.bx-select-multiple:before{content:"\ebfb"}.bx-send:before{content:"\ebfc"}.bx-server:before{content:"\ebfd"}.bx-shape-circle:before{content:"\ebfe"}.bx-shape-polygon:before{content:"\ebff"}.bx-shape-square:before{content:"\ec00"}.bx-shape-triangle:before{content:"\ec01"}.bx-share:before{content:"\ec02"}.bx-share-alt:before{content:"\ec03"}.bx-shekel:before{content:"\ec04"}.bx-shield:before{content:"\ec05"}.bx-shield-alt:before{content:"\ec06"}.bx-shield-alt-2:before{content:"\ec07"}.bx-shield-quarter:before{content:"\ec08"}.bx-shield-x:before{content:"\ec09"}.bx-shocked:before{content:"\ec0a"}.bx-shopping-bag:before{content:"\ec0b"}.bx-show:before{content:"\ec0c"}.bx-show-alt:before{content:"\ec0d"}.bx-shuffle:before{content:"\ec0e"}.bx-sidebar:before{content:"\ec0f"}.bx-sitemap:before{content:"\ec10"}.bx-skip-next:before{content:"\ec11"}.bx-skip-next-circle:before{content:"\ec12"}.bx-skip-previous:before{content:"\ec13"}.bx-skip-previous-circle:before{content:"\ec14"}.bx-sleepy:before{content:"\ec15"}.bx-slider:before{content:"\ec16"}.bx-slider-alt:before{content:"\ec17"}.bx-slideshow:before{content:"\ec18"}.bx-smile:before{content:"\ec19"}.bx-sort:before{content:"\ec1a"}.bx-sort-alt-2:before{content:"\ec1b"}.bx-sort-a-z:before{content:"\ec1c"}.bx-sort-down:before{content:"\ec1d"}.bx-sort-up:before{content:"\ec1e"}.bx-sort-z-a:before{content:"\ec1f"}.bx-spa:before{content:"\ec20"}.bx-space-bar:before{content:"\ec21"}.bx-speaker:before{content:"\ec22"}.bx-spray-can:before{content:"\ec23"}.bx-spreadsheet:before{content:"\ec24"}.bx-square:before{content:"\ec25"}.bx-square-rounded:before{content:"\ec26"}.bx-star:before{content:"\ec27"}.bx-station:before{content:"\ec28"}.bx-stats:before{content:"\ec29"}.bx-sticker:before{content:"\ec2a"}.bx-stop:before{content:"\ec2b"}.bx-stop-circle:before{content:"\ec2c"}.bx-stopwatch:before{content:"\ec2d"}.bx-store:before{content:"\ec2e"}.bx-store-alt:before{content:"\ec2f"}.bx-street-view:before{content:"\ec30"}.bx-strikethrough:before{content:"\ec31"}.bx-subdirectory-left:before{content:"\ec32"}.bx-subdirectory-right:before{content:"\ec33"}.bx-sun:before{content:"\ec34"}.bx-support:before{content:"\ec35"}.bx-swim:before{content:"\ec36"}.bx-sync:before{content:"\ec37"}.bx-tab:before{content:"\ec38"}.bx-table:before{content:"\ec39"}.bx-tachometer:before{content:"\ec3a"}.bx-tag:before{content:"\ec3b"}.bx-tag-alt:before{content:"\ec3c"}.bx-target-lock:before{content:"\ec3d"}.bx-task:before{content:"\ec3e"}.bx-task-x:before{content:"\ec3f"}.bx-taxi:before{content:"\ec40"}.bx-tennis-ball:before{content:"\ec41"}.bx-terminal:before{content:"\ec42"}.bx-test-tube:before{content:"\ec43"}.bx-text:before{content:"\ec44"}.bx-time:before{content:"\ec45"}.bx-time-five:before{content:"\ec46"}.bx-timer:before{content:"\ec47"}.bx-tired:before{content:"\ec48"}.bx-toggle-left:before{content:"\ec49"}.bx-toggle-right:before{content:"\ec4a"}.bx-tone:before{content:"\ec4b"}.bx-traffic-cone:before{content:"\ec4c"}.bx-train:before{content:"\ec4d"}.bx-transfer:before{content:"\ec4e"}.bx-transfer-alt:before{content:"\ec4f"}.bx-trash:before{content:"\ec50"}.bx-trash-alt:before{content:"\ec51"}.bx-trending-down:before{content:"\ec52"}.bx-trending-up:before{content:"\ec53"}.bx-trim:before{content:"\ec54"}.bx-trip:before{content:"\ec55"}.bx-trophy:before{content:"\ec56"}.bx-tv:before{content:"\ec57"}.bx-underline:before{content:"\ec58"}.bx-undo:before{content:"\ec59"}.bx-unite:before{content:"\ec5a"}.bx-unlink:before{content:"\ec5b"}.bx-up-arrow:before{content:"\ec5c"}.bx-up-arrow-alt:before{content:"\ec5d"}.bx-up-arrow-circle:before{content:"\ec5e"}.bx-upload:before{content:"\ec5f"}.bx-upside-down:before{content:"\ec60"}.bx-upvote:before{content:"\ec61"}.bx-usb:before{content:"\ec62"}.bx-user:before{content:"\ec63"}.bx-user-check:before{content:"\ec64"}.bx-user-circle:before{content:"\ec65"}.bx-user-minus:before{content:"\ec66"}.bx-user-pin:before{content:"\ec67"}.bx-user-plus:before{content:"\ec68"}.bx-user-voice:before{content:"\ec69"}.bx-user-x:before{content:"\ec6a"}.bx-vector:before{content:"\ec6b"}.bx-vertical-center:before{content:"\ec6c"}.bx-vial:before{content:"\ec6d"}.bx-video:before{content:"\ec6e"}.bx-video-off:before{content:"\ec6f"}.bx-video-plus:before{content:"\ec70"}.bx-video-recording:before{content:"\ec71"}.bx-voicemail:before{content:"\ec72"}.bx-volume:before{content:"\ec73"}.bx-volume-full:before{content:"\ec74"}.bx-volume-low:before{content:"\ec75"}.bx-volume-mute:before{content:"\ec76"}.bx-walk:before{content:"\ec77"}.bx-wallet:before{content:"\ec78"}.bx-wallet-alt:before{content:"\ec79"}.bx-water:before{content:"\ec7a"}.bx-webcam:before{content:"\ec7b"}.bx-wifi:before{content:"\ec7c"}.bx-wifi-0:before{content:"\ec7d"}.bx-wifi-1:before{content:"\ec7e"}.bx-wifi-2:before{content:"\ec7f"}.bx-wifi-off:before{content:"\ec80"}.bx-wind:before{content:"\ec81"}.bx-window:before{content:"\ec82"}.bx-window-alt:before{content:"\ec83"}.bx-window-close:before{content:"\ec84"}.bx-window-open:before{content:"\ec85"}.bx-windows:before{content:"\ec86"}.bx-wine:before{content:"\ec87"}.bx-wink-smile:before{content:"\ec88"}.bx-wink-tongue:before{content:"\ec89"}.bx-won:before{content:"\ec8a"}.bx-world:before{content:"\ec8b"}.bx-wrench:before{content:"\ec8c"}.bx-x:before{content:"\ec8d"}.bx-x-circle:before{content:"\ec8e"}.bx-yen:before{content:"\ec8f"}.bx-zoom-in:before{content:"\ec90"}.bx-zoom-out:before{content:"\ec91"}.bxs-party:before{content:"\ec92"}.bxs-hot:before{content:"\ec93"}.bxs-droplet:before{content:"\ec94"}.bxs-cat:before{content:"\ec95"}.bxs-dog:before{content:"\ec96"}.bxs-injection:before{content:"\ec97"}.bxs-leaf:before{content:"\ec98"}.bxs-add-to-queue:before{content:"\ec99"}.bxs-adjust:before{content:"\ec9a"}.bxs-adjust-alt:before{content:"\ec9b"}.bxs-alarm:before{content:"\ec9c"}.bxs-alarm-add:before{content:"\ec9d"}.bxs-alarm-exclamation:before{content:"\ec9e"}.bxs-alarm-off:before{content:"\ec9f"}.bxs-alarm-snooze:before{content:"\eca0"}.bxs-album:before{content:"\eca1"}.bxs-ambulance:before{content:"\eca2"}.bxs-analyse:before{content:"\eca3"}.bxs-angry:before{content:"\eca4"}.bxs-arch:before{content:"\eca5"}.bxs-archive:before{content:"\eca6"}.bxs-archive-in:before{content:"\eca7"}.bxs-archive-out:before{content:"\eca8"}.bxs-area:before{content:"\eca9"}.bxs-arrow-from-bottom:before{content:"\ecaa"}.bxs-arrow-from-left:before{content:"\ecab"}.bxs-arrow-from-right:before{content:"\ecac"}.bxs-arrow-from-top:before{content:"\ecad"}.bxs-arrow-to-bottom:before{content:"\ecae"}.bxs-arrow-to-left:before{content:"\ecaf"}.bxs-arrow-to-right:before{content:"\ecb0"}.bxs-arrow-to-top:before{content:"\ecb1"}.bxs-award:before{content:"\ecb2"}.bxs-baby-carriage:before{content:"\ecb3"}.bxs-backpack:before{content:"\ecb4"}.bxs-badge:before{content:"\ecb5"}.bxs-badge-check:before{content:"\ecb6"}.bxs-badge-dollar:before{content:"\ecb7"}.bxs-ball:before{content:"\ecb8"}.bxs-band-aid:before{content:"\ecb9"}.bxs-bank:before{content:"\ecba"}.bxs-bar-chart-alt-2:before{content:"\ecbb"}.bxs-bar-chart-square:before{content:"\ecbc"}.bxs-barcode:before{content:"\ecbd"}.bxs-baseball:before{content:"\ecbe"}.bxs-basket:before{content:"\ecbf"}.bxs-basketball:before{content:"\ecc0"}.bxs-bath:before{content:"\ecc1"}.bxs-battery:before{content:"\ecc2"}.bxs-battery-charging:before{content:"\ecc3"}.bxs-battery-full:before{content:"\ecc4"}.bxs-battery-low:before{content:"\ecc5"}.bxs-bed:before{content:"\ecc6"}.bxs-been-here:before{content:"\ecc7"}.bxs-beer:before{content:"\ecc8"}.bxs-bell:before{content:"\ecc9"}.bxs-bell-minus:before{content:"\ecca"}.bxs-bell-off:before{content:"\eccb"}.bxs-bell-plus:before{content:"\eccc"}.bxs-bell-ring:before{content:"\eccd"}.bxs-bible:before{content:"\ecce"}.bxs-binoculars:before{content:"\eccf"}.bxs-blanket:before{content:"\ecd0"}.bxs-bolt:before{content:"\ecd1"}.bxs-bolt-circle:before{content:"\ecd2"}.bxs-bomb:before{content:"\ecd3"}.bxs-bone:before{content:"\ecd4"}.bxs-bong:before{content:"\ecd5"}.bxs-book:before{content:"\ecd6"}.bxs-book-add:before{content:"\ecd7"}.bxs-book-alt:before{content:"\ecd8"}.bxs-book-bookmark:before{content:"\ecd9"}.bxs-book-content:before{content:"\ecda"}.bxs-book-heart:before{content:"\ecdb"}.bxs-bookmark:before{content:"\ecdc"}.bxs-bookmark-alt:before{content:"\ecdd"}.bxs-bookmark-alt-minus:before{content:"\ecde"}.bxs-bookmark-alt-plus:before{content:"\ecdf"}.bxs-bookmark-heart:before{content:"\ece0"}.bxs-bookmark-minus:before{content:"\ece1"}.bxs-bookmark-plus:before{content:"\ece2"}.bxs-bookmarks:before{content:"\ece3"}.bxs-bookmark-star:before{content:"\ece4"}.bxs-book-open:before{content:"\ece5"}.bxs-book-reader:before{content:"\ece6"}.bxs-bot:before{content:"\ece7"}.bxs-bowling-ball:before{content:"\ece8"}.bxs-box:before{content:"\ece9"}.bxs-brain:before{content:"\ecea"}.bxs-briefcase:before{content:"\eceb"}.bxs-briefcase-alt:before{content:"\ecec"}.bxs-briefcase-alt-2:before{content:"\eced"}.bxs-brightness:before{content:"\ecee"}.bxs-brightness-half:before{content:"\ecef"}.bxs-brush:before{content:"\ecf0"}.bxs-brush-alt:before{content:"\ecf1"}.bxs-bug:before{content:"\ecf2"}.bxs-bug-alt:before{content:"\ecf3"}.bxs-building:before{content:"\ecf4"}.bxs-building-house:before{content:"\ecf5"}.bxs-buildings:before{content:"\ecf6"}.bxs-bulb:before{content:"\ecf7"}.bxs-bullseye:before{content:"\ecf8"}.bxs-buoy:before{content:"\ecf9"}.bxs-bus:before{content:"\ecfa"}.bxs-business:before{content:"\ecfb"}.bxs-bus-school:before{content:"\ecfc"}.bxs-cabinet:before{content:"\ecfd"}.bxs-cake:before{content:"\ecfe"}.bxs-calculator:before{content:"\ecff"}.bxs-calendar:before{content:"\ed00"}.bxs-calendar-alt:before{content:"\ed01"}.bxs-calendar-check:before{content:"\ed02"}.bxs-calendar-edit:before{content:"\ed03"}.bxs-calendar-event:before{content:"\ed04"}.bxs-calendar-exclamation:before{content:"\ed05"}.bxs-calendar-heart:before{content:"\ed06"}.bxs-calendar-minus:before{content:"\ed07"}.bxs-calendar-plus:before{content:"\ed08"}.bxs-calendar-star:before{content:"\ed09"}.bxs-calendar-week:before{content:"\ed0a"}.bxs-calendar-x:before{content:"\ed0b"}.bxs-camera:before{content:"\ed0c"}.bxs-camera-home:before{content:"\ed0d"}.bxs-camera-movie:before{content:"\ed0e"}.bxs-camera-off:before{content:"\ed0f"}.bxs-camera-plus:before{content:"\ed10"}.bxs-capsule:before{content:"\ed11"}.bxs-captions:before{content:"\ed12"}.bxs-car:before{content:"\ed13"}.bxs-car-battery:before{content:"\ed14"}.bxs-car-crash:before{content:"\ed15"}.bxs-card:before{content:"\ed16"}.bxs-caret-down-circle:before{content:"\ed17"}.bxs-caret-down-square:before{content:"\ed18"}.bxs-caret-left-circle:before{content:"\ed19"}.bxs-caret-left-square:before{content:"\ed1a"}.bxs-caret-right-circle:before{content:"\ed1b"}.bxs-caret-right-square:before{content:"\ed1c"}.bxs-caret-up-circle:before{content:"\ed1d"}.bxs-caret-up-square:before{content:"\ed1e"}.bxs-car-garage:before{content:"\ed1f"}.bxs-car-mechanic:before{content:"\ed20"}.bxs-carousel:before{content:"\ed21"}.bxs-cart:before{content:"\ed22"}.bxs-cart-add:before{content:"\ed23"}.bxs-cart-alt:before{content:"\ed24"}.bxs-cart-download:before{content:"\ed25"}.bxs-car-wash:before{content:"\ed26"}.bxs-category:before{content:"\ed27"}.bxs-category-alt:before{content:"\ed28"}.bxs-cctv:before{content:"\ed29"}.bxs-certification:before{content:"\ed2a"}.bxs-chalkboard:before{content:"\ed2b"}.bxs-chart:before{content:"\ed2c"}.bxs-chat:before{content:"\ed2d"}.bxs-checkbox:before{content:"\ed2e"}.bxs-checkbox-checked:before{content:"\ed2f"}.bxs-checkbox-minus:before{content:"\ed30"}.bxs-check-circle:before{content:"\ed31"}.bxs-check-shield:before{content:"\ed32"}.bxs-check-square:before{content:"\ed33"}.bxs-chess:before{content:"\ed34"}.bxs-chevron-down:before{content:"\ed35"}.bxs-chevron-down-circle:before{content:"\ed36"}.bxs-chevron-down-square:before{content:"\ed37"}.bxs-chevron-left:before{content:"\ed38"}.bxs-chevron-left-circle:before{content:"\ed39"}.bxs-chevron-left-square:before{content:"\ed3a"}.bxs-chevron-right:before{content:"\ed3b"}.bxs-chevron-right-circle:before{content:"\ed3c"}.bxs-chevron-right-square:before{content:"\ed3d"}.bxs-chevrons-down:before{content:"\ed3e"}.bxs-chevrons-left:before{content:"\ed3f"}.bxs-chevrons-right:before{content:"\ed40"}.bxs-chevrons-up:before{content:"\ed41"}.bxs-chevron-up:before{content:"\ed42"}.bxs-chevron-up-circle:before{content:"\ed43"}.bxs-chevron-up-square:before{content:"\ed44"}.bxs-chip:before{content:"\ed45"}.bxs-church:before{content:"\ed46"}.bxs-circle:before{content:"\ed47"}.bxs-city:before{content:"\ed48"}.bxs-clinic:before{content:"\ed49"}.bxs-cloud:before{content:"\ed4a"}.bxs-cloud-download:before{content:"\ed4b"}.bxs-cloud-lightning:before{content:"\ed4c"}.bxs-cloud-rain:before{content:"\ed4d"}.bxs-cloud-upload:before{content:"\ed4e"}.bxs-coffee:before{content:"\ed4f"}.bxs-coffee-alt:before{content:"\ed50"}.bxs-coffee-togo:before{content:"\ed51"}.bxs-cog:before{content:"\ed52"}.bxs-coin:before{content:"\ed53"}.bxs-coin-stack:before{content:"\ed54"}.bxs-collection:before{content:"\ed55"}.bxs-color-fill:before{content:"\ed56"}.bxs-comment:before{content:"\ed57"}.bxs-comment-add:before{content:"\ed58"}.bxs-comment-check:before{content:"\ed59"}.bxs-comment-detail:before{content:"\ed5a"}.bxs-comment-dots:before{content:"\ed5b"}.bxs-comment-edit:before{content:"\ed5c"}.bxs-comment-error:before{content:"\ed5d"}.bxs-comment-minus:before{content:"\ed5e"}.bxs-comment-x:before{content:"\ed5f"}.bxs-compass:before{content:"\ed60"}.bxs-component:before{content:"\ed61"}.bxs-confused:before{content:"\ed62"}.bxs-contact:before{content:"\ed63"}.bxs-conversation:before{content:"\ed64"}.bxs-cookie:before{content:"\ed65"}.bxs-cool:before{content:"\ed66"}.bxs-copy:before{content:"\ed67"}.bxs-copy-alt:before{content:"\ed68"}.bxs-copyright:before{content:"\ed69"}.bxs-coupon:before{content:"\ed6a"}.bxs-credit-card:before{content:"\ed6b"}.bxs-credit-card-alt:before{content:"\ed6c"}.bxs-credit-card-front:before{content:"\ed6d"}.bxs-crop:before{content:"\ed6e"}.bxs-crown:before{content:"\ed6f"}.bxs-cube:before{content:"\ed70"}.bxs-cube-alt:before{content:"\ed71"}.bxs-cuboid:before{content:"\ed72"}.bxs-customize:before{content:"\ed73"}.bxs-cylinder:before{content:"\ed74"}.bxs-dashboard:before{content:"\ed75"}.bxs-data:before{content:"\ed76"}.bxs-detail:before{content:"\ed77"}.bxs-devices:before{content:"\ed78"}.bxs-diamond:before{content:"\ed79"}.bxs-dice-1:before{content:"\ed7a"}.bxs-dice-2:before{content:"\ed7b"}.bxs-dice-3:before{content:"\ed7c"}.bxs-dice-4:before{content:"\ed7d"}.bxs-dice-5:before{content:"\ed7e"}.bxs-dice-6:before{content:"\ed7f"}.bxs-direction-left:before{content:"\ed80"}.bxs-direction-right:before{content:"\ed81"}.bxs-directions:before{content:"\ed82"}.bxs-disc:before{content:"\ed83"}.bxs-discount:before{content:"\ed84"}.bxs-dish:before{content:"\ed85"}.bxs-dislike:before{content:"\ed86"}.bxs-dizzy:before{content:"\ed87"}.bxs-dock-bottom:before{content:"\ed88"}.bxs-dock-left:before{content:"\ed89"}.bxs-dock-right:before{content:"\ed8a"}.bxs-dock-top:before{content:"\ed8b"}.bxs-dollar-circle:before{content:"\ed8c"}.bxs-donate-blood:before{content:"\ed8d"}.bxs-donate-heart:before{content:"\ed8e"}.bxs-door-open:before{content:"\ed8f"}.bxs-doughnut-chart:before{content:"\ed90"}.bxs-down-arrow:before{content:"\ed91"}.bxs-down-arrow-alt:before{content:"\ed92"}.bxs-down-arrow-circle:before{content:"\ed93"}.bxs-down-arrow-square:before{content:"\ed94"}.bxs-download:before{content:"\ed95"}.bxs-downvote:before{content:"\ed96"}.bxs-drink:before{content:"\ed97"}.bxs-droplet-half:before{content:"\ed98"}.bxs-dryer:before{content:"\ed99"}.bxs-duplicate:before{content:"\ed9a"}.bxs-edit:before{content:"\ed9b"}.bxs-edit-alt:before{content:"\ed9c"}.bxs-edit-location:before{content:"\ed9d"}.bxs-eject:before{content:"\ed9e"}.bxs-envelope:before{content:"\ed9f"}.bxs-envelope-open:before{content:"\eda0"}.bxs-eraser:before{content:"\eda1"}.bxs-error:before{content:"\eda2"}.bxs-error-alt:before{content:"\eda3"}.bxs-error-circle:before{content:"\eda4"}.bxs-ev-station:before{content:"\eda5"}.bxs-exit:before{content:"\eda6"}.bxs-extension:before{content:"\eda7"}.bxs-eyedropper:before{content:"\eda8"}.bxs-face:before{content:"\eda9"}.bxs-face-mask:before{content:"\edaa"}.bxs-factory:before{content:"\edab"}.bxs-fast-forward-circle:before{content:"\edac"}.bxs-file:before{content:"\edad"}.bxs-file-archive:before{content:"\edae"}.bxs-file-blank:before{content:"\edaf"}.bxs-file-css:before{content:"\edb0"}.bxs-file-doc:before{content:"\edb1"}.bxs-file-export:before{content:"\edb2"}.bxs-file-find:before{content:"\edb3"}.bxs-file-gif:before{content:"\edb4"}.bxs-file-html:before{content:"\edb5"}.bxs-file-image:before{content:"\edb6"}.bxs-file-import:before{content:"\edb7"}.bxs-file-jpg:before{content:"\edb8"}.bxs-file-js:before{content:"\edb9"}.bxs-file-json:before{content:"\edba"}.bxs-file-md:before{content:"\edbb"}.bxs-file-pdf:before{content:"\edbc"}.bxs-file-plus:before{content:"\edbd"}.bxs-file-png:before{content:"\edbe"}.bxs-file-txt:before{content:"\edbf"}.bxs-film:before{content:"\edc0"}.bxs-filter-alt:before{content:"\edc1"}.bxs-first-aid:before{content:"\edc2"}.bxs-flag:before{content:"\edc3"}.bxs-flag-alt:before{content:"\edc4"}.bxs-flag-checkered:before{content:"\edc5"}.bxs-flame:before{content:"\edc6"}.bxs-flask:before{content:"\edc7"}.bxs-florist:before{content:"\edc8"}.bxs-folder:before{content:"\edc9"}.bxs-folder-minus:before{content:"\edca"}.bxs-folder-open:before{content:"\edcb"}.bxs-folder-plus:before{content:"\edcc"}.bxs-food-menu:before{content:"\edcd"}.bxs-fridge:before{content:"\edce"}.bxs-game:before{content:"\edcf"}.bxs-gas-pump:before{content:"\edd0"}.bxs-ghost:before{content:"\edd1"}.bxs-gift:before{content:"\edd2"}.bxs-graduation:before{content:"\edd3"}.bxs-grid:before{content:"\edd4"}.bxs-grid-alt:before{content:"\edd5"}.bxs-group:before{content:"\edd6"}.bxs-guitar-amp:before{content:"\edd7"}.bxs-hand:before{content:"\edd8"}.bxs-hand-down:before{content:"\edd9"}.bxs-hand-left:before{content:"\edda"}.bxs-hand-right:before{content:"\eddb"}.bxs-hand-up:before{content:"\eddc"}.bxs-happy:before{content:"\eddd"}.bxs-happy-alt:before{content:"\edde"}.bxs-happy-beaming:before{content:"\eddf"}.bxs-happy-heart-eyes:before{content:"\ede0"}.bxs-hdd:before{content:"\ede1"}.bxs-heart:before{content:"\ede2"}.bxs-heart-circle:before{content:"\ede3"}.bxs-heart-square:before{content:"\ede4"}.bxs-help-circle:before{content:"\ede5"}.bxs-hide:before{content:"\ede6"}.bxs-home:before{content:"\ede7"}.bxs-home-circle:before{content:"\ede8"}.bxs-home-heart:before{content:"\ede9"}.bxs-home-smile:before{content:"\edea"}.bxs-hotel:before{content:"\edeb"}.bxs-hourglass:before{content:"\edec"}.bxs-hourglass-bottom:before{content:"\eded"}.bxs-hourglass-top:before{content:"\edee"}.bxs-id-card:before{content:"\edef"}.bxs-image:before{content:"\edf0"}.bxs-image-add:before{content:"\edf1"}.bxs-image-alt:before{content:"\edf2"}.bxs-inbox:before{content:"\edf3"}.bxs-info-circle:before{content:"\edf4"}.bxs-info-square:before{content:"\edf5"}.bxs-institution:before{content:"\edf6"}.bxs-joystick:before{content:"\edf7"}.bxs-joystick-alt:before{content:"\edf8"}.bxs-joystick-button:before{content:"\edf9"}.bxs-key:before{content:"\edfa"}.bxs-keyboard:before{content:"\edfb"}.bxs-label:before{content:"\edfc"}.bxs-landmark:before{content:"\edfd"}.bxs-landscape:before{content:"\edfe"}.bxs-laugh:before{content:"\edff"}.bxs-layer:before{content:"\ee00"}.bxs-layer-minus:before{content:"\ee01"}.bxs-layer-plus:before{content:"\ee02"}.bxs-layout:before{content:"\ee03"}.bxs-left-arrow:before{content:"\ee04"}.bxs-left-arrow-alt:before{content:"\ee05"}.bxs-left-arrow-circle:before{content:"\ee06"}.bxs-left-arrow-square:before{content:"\ee07"}.bxs-left-down-arrow-circle:before{content:"\ee08"}.bxs-left-top-arrow-circle:before{content:"\ee09"}.bxs-like:before{content:"\ee0a"}.bxs-location-plus:before{content:"\ee0b"}.bxs-lock:before{content:"\ee0c"}.bxs-lock-alt:before{content:"\ee0d"}.bxs-lock-open:before{content:"\ee0e"}.bxs-lock-open-alt:before{content:"\ee0f"}.bxs-log-in:before{content:"\ee10"}.bxs-log-in-circle:before{content:"\ee11"}.bxs-log-out:before{content:"\ee12"}.bxs-log-out-circle:before{content:"\ee13"}.bxs-low-vision:before{content:"\ee14"}.bxs-magic-wand:before{content:"\ee15"}.bxs-magnet:before{content:"\ee16"}.bxs-map:before{content:"\ee17"}.bxs-map-alt:before{content:"\ee18"}.bxs-map-pin:before{content:"\ee19"}.bxs-mask:before{content:"\ee1a"}.bxs-medal:before{content:"\ee1b"}.bxs-megaphone:before{content:"\ee1c"}.bxs-meh:before{content:"\ee1d"}.bxs-meh-alt:before{content:"\ee1e"}.bxs-meh-blank:before{content:"\ee1f"}.bxs-memory-card:before{content:"\ee20"}.bxs-message:before{content:"\ee21"}.bxs-message-add:before{content:"\ee22"}.bxs-message-alt:before{content:"\ee23"}.bxs-message-alt-add:before{content:"\ee24"}.bxs-message-alt-check:before{content:"\ee25"}.bxs-message-alt-detail:before{content:"\ee26"}.bxs-message-alt-dots:before{content:"\ee27"}.bxs-message-alt-edit:before{content:"\ee28"}.bxs-message-alt-error:before{content:"\ee29"}.bxs-message-alt-minus:before{content:"\ee2a"}.bxs-message-alt-x:before{content:"\ee2b"}.bxs-message-check:before{content:"\ee2c"}.bxs-message-detail:before{content:"\ee2d"}.bxs-message-dots:before{content:"\ee2e"}.bxs-message-edit:before{content:"\ee2f"}.bxs-message-error:before{content:"\ee30"}.bxs-message-minus:before{content:"\ee31"}.bxs-message-rounded:before{content:"\ee32"}.bxs-message-rounded-add:before{content:"\ee33"}.bxs-message-rounded-check:before{content:"\ee34"}.bxs-message-rounded-detail:before{content:"\ee35"}.bxs-message-rounded-dots:before{content:"\ee36"}.bxs-message-rounded-edit:before{content:"\ee37"}.bxs-message-rounded-error:before{content:"\ee38"}.bxs-message-rounded-minus:before{content:"\ee39"}.bxs-message-rounded-x:before{content:"\ee3a"}.bxs-message-square:before{content:"\ee3b"}.bxs-message-square-add:before{content:"\ee3c"}.bxs-message-square-check:before{content:"\ee3d"}.bxs-message-square-detail:before{content:"\ee3e"}.bxs-message-square-dots:before{content:"\ee3f"}.bxs-message-square-edit:before{content:"\ee40"}.bxs-message-square-error:before{content:"\ee41"}.bxs-message-square-minus:before{content:"\ee42"}.bxs-message-square-x:before{content:"\ee43"}.bxs-message-x:before{content:"\ee44"}.bxs-meteor:before{content:"\ee45"}.bxs-microchip:before{content:"\ee46"}.bxs-microphone:before{content:"\ee47"}.bxs-microphone-alt:before{content:"\ee48"}.bxs-microphone-off:before{content:"\ee49"}.bxs-minus-circle:before{content:"\ee4a"}.bxs-minus-square:before{content:"\ee4b"}.bxs-mobile:before{content:"\ee4c"}.bxs-mobile-vibration:before{content:"\ee4d"}.bxs-moon:before{content:"\ee4e"}.bxs-mouse:before{content:"\ee4f"}.bxs-mouse-alt:before{content:"\ee50"}.bxs-movie:before{content:"\ee51"}.bxs-movie-play:before{content:"\ee52"}.bxs-music:before{content:"\ee53"}.bxs-navigation:before{content:"\ee54"}.bxs-network-chart:before{content:"\ee55"}.bxs-news:before{content:"\ee56"}.bxs-no-entry:before{content:"\ee57"}.bxs-note:before{content:"\ee58"}.bxs-notepad:before{content:"\ee59"}.bxs-notification:before{content:"\ee5a"}.bxs-notification-off:before{content:"\ee5b"}.bxs-offer:before{content:"\ee5c"}.bxs-package:before{content:"\ee5d"}.bxs-paint:before{content:"\ee5e"}.bxs-paint-roll:before{content:"\ee5f"}.bxs-palette:before{content:"\ee60"}.bxs-paper-plane:before{content:"\ee61"}.bxs-parking:before{content:"\ee62"}.bxs-paste:before{content:"\ee63"}.bxs-pen:before{content:"\ee64"}.bxs-pencil:before{content:"\ee65"}.bxs-phone:before{content:"\ee66"}.bxs-phone-call:before{content:"\ee67"}.bxs-phone-incoming:before{content:"\ee68"}.bxs-phone-off:before{content:"\ee69"}.bxs-phone-outgoing:before{content:"\ee6a"}.bxs-photo-album:before{content:"\ee6b"}.bxs-piano:before{content:"\ee6c"}.bxs-pie-chart:before{content:"\ee6d"}.bxs-pie-chart-alt:before{content:"\ee6e"}.bxs-pie-chart-alt-2:before{content:"\ee6f"}.bxs-pin:before{content:"\ee70"}.bxs-pizza:before{content:"\ee71"}.bxs-plane:before{content:"\ee72"}.bxs-plane-alt:before{content:"\ee73"}.bxs-plane-land:before{content:"\ee74"}.bxs-planet:before{content:"\ee75"}.bxs-plane-take-off:before{content:"\ee76"}.bxs-playlist:before{content:"\ee77"}.bxs-plug:before{content:"\ee78"}.bxs-plus-circle:before{content:"\ee79"}.bxs-plus-square:before{content:"\ee7a"}.bxs-pointer:before{content:"\ee7b"}.bxs-polygon:before{content:"\ee7c"}.bxs-printer:before{content:"\ee7d"}.bxs-purchase-tag:before{content:"\ee7e"}.bxs-purchase-tag-alt:before{content:"\ee7f"}.bxs-pyramid:before{content:"\ee80"}.bxs-quote-alt-left:before{content:"\ee81"}.bxs-quote-alt-right:before{content:"\ee82"}.bxs-quote-left:before{content:"\ee83"}.bxs-quote-right:before{content:"\ee84"}.bxs-quote-single-left:before{content:"\ee85"}.bxs-quote-single-right:before{content:"\ee86"}.bxs-radiation:before{content:"\ee87"}.bxs-radio:before{content:"\ee88"}.bxs-receipt:before{content:"\ee89"}.bxs-rectangle:before{content:"\ee8a"}.bxs-registered:before{content:"\ee8b"}.bxs-rename:before{content:"\ee8c"}.bxs-report:before{content:"\ee8d"}.bxs-rewind-circle:before{content:"\ee8e"}.bxs-right-arrow:before{content:"\ee8f"}.bxs-right-arrow-alt:before{content:"\ee90"}.bxs-right-arrow-circle:before{content:"\ee91"}.bxs-right-arrow-square:before{content:"\ee92"}.bxs-right-down-arrow-circle:before{content:"\ee93"}.bxs-right-top-arrow-circle:before{content:"\ee94"}.bxs-rocket:before{content:"\ee95"}.bxs-ruler:before{content:"\ee96"}.bxs-sad:before{content:"\ee97"}.bxs-save:before{content:"\ee98"}.bxs-school:before{content:"\ee99"}.bxs-search:before{content:"\ee9a"}.bxs-search-alt-2:before{content:"\ee9b"}.bxs-select-multiple:before{content:"\ee9c"}.bxs-send:before{content:"\ee9d"}.bxs-server:before{content:"\ee9e"}.bxs-shapes:before{content:"\ee9f"}.bxs-share:before{content:"\eea0"}.bxs-share-alt:before{content:"\eea1"}.bxs-shield:before{content:"\eea2"}.bxs-shield-alt-2:before{content:"\eea3"}.bxs-shield-x:before{content:"\eea4"}.bxs-ship:before{content:"\eea5"}.bxs-shocked:before{content:"\eea6"}.bxs-shopping-bag:before{content:"\eea7"}.bxs-shopping-bag-alt:before{content:"\eea8"}.bxs-shopping-bags:before{content:"\eea9"}.bxs-show:before{content:"\eeaa"}.bxs-skip-next-circle:before{content:"\eeab"}.bxs-skip-previous-circle:before{content:"\eeac"}.bxs-skull:before{content:"\eead"}.bxs-sleepy:before{content:"\eeae"}.bxs-slideshow:before{content:"\eeaf"}.bxs-smile:before{content:"\eeb0"}.bxs-sort-alt:before{content:"\eeb1"}.bxs-spa:before{content:"\eeb2"}.bxs-speaker:before{content:"\eeb3"}.bxs-spray-can:before{content:"\eeb4"}.bxs-spreadsheet:before{content:"\eeb5"}.bxs-square:before{content:"\eeb6"}.bxs-square-rounded:before{content:"\eeb7"}.bxs-star:before{content:"\eeb8"}.bxs-star-half:before{content:"\eeb9"}.bxs-sticker:before{content:"\eeba"}.bxs-stopwatch:before{content:"\eebb"}.bxs-store:before{content:"\eebc"}.bxs-store-alt:before{content:"\eebd"}.bxs-sun:before{content:"\eebe"}.bxs-tachometer:before{content:"\eebf"}.bxs-tag:before{content:"\eec0"}.bxs-tag-alt:before{content:"\eec1"}.bxs-tag-x:before{content:"\eec2"}.bxs-taxi:before{content:"\eec3"}.bxs-tennis-ball:before{content:"\eec4"}.bxs-terminal:before{content:"\eec5"}.bxs-thermometer:before{content:"\eec6"}.bxs-time:before{content:"\eec7"}.bxs-time-five:before{content:"\eec8"}.bxs-timer:before{content:"\eec9"}.bxs-tired:before{content:"\eeca"}.bxs-toggle-left:before{content:"\eecb"}.bxs-toggle-right:before{content:"\eecc"}.bxs-tone:before{content:"\eecd"}.bxs-torch:before{content:"\eece"}.bxs-to-top:before{content:"\eecf"}.bxs-traffic:before{content:"\eed0"}.bxs-traffic-barrier:before{content:"\eed1"}.bxs-traffic-cone:before{content:"\eed2"}.bxs-train:before{content:"\eed3"}.bxs-trash:before{content:"\eed4"}.bxs-trash-alt:before{content:"\eed5"}.bxs-tree:before{content:"\eed6"}.bxs-trophy:before{content:"\eed7"}.bxs-truck:before{content:"\eed8"}.bxs-t-shirt:before{content:"\eed9"}.bxs-tv:before{content:"\eeda"}.bxs-up-arrow:before{content:"\eedb"}.bxs-up-arrow-alt:before{content:"\eedc"}.bxs-up-arrow-circle:before{content:"\eedd"}.bxs-up-arrow-square:before{content:"\eede"}.bxs-upside-down:before{content:"\eedf"}.bxs-upvote:before{content:"\eee0"}.bxs-user:before{content:"\eee1"}.bxs-user-account:before{content:"\eee2"}.bxs-user-badge:before{content:"\eee3"}.bxs-user-check:before{content:"\eee4"}.bxs-user-circle:before{content:"\eee5"}.bxs-user-detail:before{content:"\eee6"}.bxs-user-minus:before{content:"\eee7"}.bxs-user-pin:before{content:"\eee8"}.bxs-user-plus:before{content:"\eee9"}.bxs-user-rectangle:before{content:"\eeea"}.bxs-user-voice:before{content:"\eeeb"}.bxs-user-x:before{content:"\eeec"}.bxs-vector:before{content:"\eeed"}.bxs-vial:before{content:"\eeee"}.bxs-video:before{content:"\eeef"}.bxs-video-off:before{content:"\eef0"}.bxs-video-plus:before{content:"\eef1"}.bxs-video-recording:before{content:"\eef2"}.bxs-videos:before{content:"\eef3"}.bxs-virus:before{content:"\eef4"}.bxs-virus-block:before{content:"\eef5"}.bxs-volume:before{content:"\eef6"}.bxs-volume-full:before{content:"\eef7"}.bxs-volume-low:before{content:"\eef8"}.bxs-volume-mute:before{content:"\eef9"}.bxs-wallet:before{content:"\eefa"}.bxs-wallet-alt:before{content:"\eefb"}.bxs-washer:before{content:"\eefc"}.bxs-watch:before{content:"\eefd"}.bxs-watch-alt:before{content:"\eefe"}.bxs-webcam:before{content:"\eeff"}.bxs-widget:before{content:"\ef00"}.bxs-window-alt:before{content:"\ef01"}.bxs-wine:before{content:"\ef02"}.bxs-wink-smile:before{content:"\ef03"}.bxs-wink-tongue:before{content:"\ef04"}.bxs-wrench:before{content:"\ef05"}.bxs-x-circle:before{content:"\ef06"}.bxs-x-square:before{content:"\ef07"}.bxs-yin-yang:before{content:"\ef08"}.bxs-zap:before{content:"\ef09"}.bxs-zoom-in:before{content:"\ef0a"}.bxs-zoom-out:before{content:"\ef0b"}

/*!
 * Quill Editor v1.3.7
 * https://quilljs.com/
 * Copyright (c) 2014, Jason Chen
 * Copyright (c) 2013, salesforce.com
 */
.ql-container {
  box-sizing: border-box;
  font-family: Helvetica, Arial, sans-serif;
  font-size: 13px;
  height: 100%;
  margin: 0px;
  position: relative;
}
.ql-container.ql-disabled .ql-tooltip {
  visibility: hidden;
}
.ql-container.ql-disabled .ql-editor ul[data-checked] > li::before {
  pointer-events: none;
}
.ql-clipboard {
  left: -100000px;
  height: 1px;
  overflow-y: hidden;
  position: absolute;
  top: 50%;
}
.ql-clipboard p {
  margin: 0;
  padding: 0;
}
.ql-editor {
  box-sizing: border-box;
  line-height: 1.42;
  height: 100%;
  outline: none;
  overflow-y: auto;
  padding: 12px 15px;
  tab-size: 4;
  -moz-tab-size: 4;
  text-align: left;
  white-space: pre-wrap;
  word-wrap: break-word;
}
.ql-editor > * {
  cursor: text;
}
.ql-editor p,
.ql-editor ol,
.ql-editor ul,
.ql-editor pre,
.ql-editor blockquote,
.ql-editor h1,
.ql-editor h2,
.ql-editor h3,
.ql-editor h4,
.ql-editor h5,
.ql-editor h6 {
  margin: 0;
  padding: 0;
  counter-reset: list-1 list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9;
}
.ql-editor ol,
.ql-editor ul {
  padding-left: 1.5em;
}
.ql-editor ol > li,
.ql-editor ul > li {
  list-style-type: none;
}
.ql-editor ul > li::before {
  content: '\2022';
}
.ql-editor ul[data-checked=true],
.ql-editor ul[data-checked=false] {
  pointer-events: none;
}
.ql-editor ul[data-checked=true] > li *,
.ql-editor ul[data-checked=false] > li * {
  pointer-events: all;
}
.ql-editor ul[data-checked=true] > li::before,
.ql-editor ul[data-checked=false] > li::before {
  color: #777;
  cursor: pointer;
  pointer-events: all;
}
.ql-editor ul[data-checked=true] > li::before {
  content: '\2611';
}
.ql-editor ul[data-checked=false] > li::before {
  content: '\2610';
}
.ql-editor li::before {
  display: inline-block;
  white-space: nowrap;
  width: 1.2em;
}
.ql-editor li:not(.ql-direction-rtl)::before {
  margin-left: -1.5em;
  margin-right: 0.3em;
  text-align: right;
}
.ql-editor li.ql-direction-rtl::before {
  margin-left: 0.3em;
  margin-right: -1.5em;
}
.ql-editor ol li:not(.ql-direction-rtl),
.ql-editor ul li:not(.ql-direction-rtl) {
  padding-left: 1.5em;
}
.ql-editor ol li.ql-direction-rtl,
.ql-editor ul li.ql-direction-rtl {
  padding-right: 1.5em;
}
.ql-editor ol li {
  counter-reset: list-1 list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9;
  counter-increment: list-0;
}
.ql-editor ol li:before {
  content: counter(list-0, decimal) '. ';
}
.ql-editor ol li.ql-indent-1 {
  counter-increment: list-1;
}
.ql-editor ol li.ql-indent-1:before {
  content: counter(list-1, lower-alpha) '. ';
}
.ql-editor ol li.ql-indent-1 {
  counter-reset: list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9;
}
.ql-editor ol li.ql-indent-2 {
  counter-increment: list-2;
}
.ql-editor ol li.ql-indent-2:before {
  content: counter(list-2, lower-roman) '. ';
}
.ql-editor ol li.ql-indent-2 {
  counter-reset: list-3 list-4 list-5 list-6 list-7 list-8 list-9;
}
.ql-editor ol li.ql-indent-3 {
  counter-increment: list-3;
}
.ql-editor ol li.ql-indent-3:before {
  content: counter(list-3, decimal) '. ';
}
.ql-editor ol li.ql-indent-3 {
  counter-reset: list-4 list-5 list-6 list-7 list-8 list-9;
}
.ql-editor ol li.ql-indent-4 {
  counter-increment: list-4;
}
.ql-editor ol li.ql-indent-4:before {
  content: counter(list-4, lower-alpha) '. ';
}
.ql-editor ol li.ql-indent-4 {
  counter-reset: list-5 list-6 list-7 list-8 list-9;
}
.ql-editor ol li.ql-indent-5 {
  counter-increment: list-5;
}
.ql-editor ol li.ql-indent-5:before {
  content: counter(list-5, lower-roman) '. ';
}
.ql-editor ol li.ql-indent-5 {
  counter-reset: list-6 list-7 list-8 list-9;
}
.ql-editor ol li.ql-indent-6 {
  counter-increment: list-6;
}
.ql-editor ol li.ql-indent-6:before {
  content: counter(list-6, decimal) '. ';
}
.ql-editor ol li.ql-indent-6 {
  counter-reset: list-7 list-8 list-9;
}
.ql-editor ol li.ql-indent-7 {
  counter-increment: list-7;
}
.ql-editor ol li.ql-indent-7:before {
  content: counter(list-7, lower-alpha) '. ';
}
.ql-editor ol li.ql-indent-7 {
  counter-reset: list-8 list-9;
}
.ql-editor ol li.ql-indent-8 {
  counter-increment: list-8;
}
.ql-editor ol li.ql-indent-8:before {
  content: counter(list-8, lower-roman) '. ';
}
.ql-editor ol li.ql-indent-8 {
  counter-reset: list-9;
}
.ql-editor ol li.ql-indent-9 {
  counter-increment: list-9;
}
.ql-editor ol li.ql-indent-9:before {
  content: counter(list-9, decimal) '. ';
}
.ql-editor .ql-indent-1:not(.ql-direction-rtl) {
  padding-left: 3em;
}
.ql-editor li.ql-indent-1:not(.ql-direction-rtl) {
  padding-left: 4.5em;
}
.ql-editor .ql-indent-1.ql-direction-rtl.ql-align-right {
  padding-right: 3em;
}
.ql-editor li.ql-indent-1.ql-direction-rtl.ql-align-right {
  padding-right: 4.5em;
}
.ql-editor .ql-indent-2:not(.ql-direction-rtl) {
  padding-left: 6em;
}
.ql-editor li.ql-indent-2:not(.ql-direction-rtl) {
  padding-left: 7.5em;
}
.ql-editor .ql-indent-2.ql-direction-rtl.ql-align-right {
  padding-right: 6em;
}
.ql-editor li.ql-indent-2.ql-direction-rtl.ql-align-right {
  padding-right: 7.5em;
}
.ql-editor .ql-indent-3:not(.ql-direction-rtl) {
  padding-left: 9em;
}
.ql-editor li.ql-indent-3:not(.ql-direction-rtl) {
  padding-left: 10.5em;
}
.ql-editor .ql-indent-3.ql-direction-rtl.ql-align-right {
  padding-right: 9em;
}
.ql-editor li.ql-indent-3.ql-direction-rtl.ql-align-right {
  padding-right: 10.5em;
}
.ql-editor .ql-indent-4:not(.ql-direction-rtl) {
  padding-left: 12em;
}
.ql-editor li.ql-indent-4:not(.ql-direction-rtl) {
  padding-left: 13.5em;
}
.ql-editor .ql-indent-4.ql-direction-rtl.ql-align-right {
  padding-right: 12em;
}
.ql-editor li.ql-indent-4.ql-direction-rtl.ql-align-right {
  padding-right: 13.5em;
}
.ql-editor .ql-indent-5:not(.ql-direction-rtl) {
  padding-left: 15em;
}
.ql-editor li.ql-indent-5:not(.ql-direction-rtl) {
  padding-left: 16.5em;
}
.ql-editor .ql-indent-5.ql-direction-rtl.ql-align-right {
  padding-right: 15em;
}
.ql-editor li.ql-indent-5.ql-direction-rtl.ql-align-right {
  padding-right: 16.5em;
}
.ql-editor .ql-indent-6:not(.ql-direction-rtl) {
  padding-left: 18em;
}
.ql-editor li.ql-indent-6:not(.ql-direction-rtl) {
  padding-left: 19.5em;
}
.ql-editor .ql-indent-6.ql-direction-rtl.ql-align-right {
  padding-right: 18em;
}
.ql-editor li.ql-indent-6.ql-direction-rtl.ql-align-right {
  padding-right: 19.5em;
}
.ql-editor .ql-indent-7:not(.ql-direction-rtl) {
  padding-left: 21em;
}
.ql-editor li.ql-indent-7:not(.ql-direction-rtl) {
  padding-left: 22.5em;
}
.ql-editor .ql-indent-7.ql-direction-rtl.ql-align-right {
  padding-right: 21em;
}
.ql-editor li.ql-indent-7.ql-direction-rtl.ql-align-right {
  padding-right: 22.5em;
}
.ql-editor .ql-indent-8:not(.ql-direction-rtl) {
  padding-left: 24em;
}
.ql-editor li.ql-indent-8:not(.ql-direction-rtl) {
  padding-left: 25.5em;
}
.ql-editor .ql-indent-8.ql-direction-rtl.ql-align-right {
  padding-right: 24em;
}
.ql-editor li.ql-indent-8.ql-direction-rtl.ql-align-right {
  padding-right: 25.5em;
}
.ql-editor .ql-indent-9:not(.ql-direction-rtl) {
  padding-left: 27em;
}
.ql-editor li.ql-indent-9:not(.ql-direction-rtl) {
  padding-left: 28.5em;
}
.ql-editor .ql-indent-9.ql-direction-rtl.ql-align-right {
  padding-right: 27em;
}
.ql-editor li.ql-indent-9.ql-direction-rtl.ql-align-right {
  padding-right: 28.5em;
}
.ql-editor .ql-video {
  display: block;
  max-width: 100%;
}
.ql-editor .ql-video.ql-align-center {
  margin: 0 auto;
}
.ql-editor .ql-video.ql-align-right {
  margin: 0 0 0 auto;
}
.ql-editor .ql-bg-black {
  background-color: #000;
}
.ql-editor .ql-bg-red {
  background-color: #e60000;
}
.ql-editor .ql-bg-orange {
  background-color: #f90;
}
.ql-editor .ql-bg-yellow {
  background-color: #ff0;
}
.ql-editor .ql-bg-green {
  background-color: #008a00;
}
.ql-editor .ql-bg-blue {
  background-color: #06c;
}
.ql-editor .ql-bg-purple {
  background-color: #93f;
}
.ql-editor .ql-color-white {
  color: #fff;
}
.ql-editor .ql-color-red {
  color: #e60000;
}
.ql-editor .ql-color-orange {
  color: #f90;
}
.ql-editor .ql-color-yellow {
  color: #ff0;
}
.ql-editor .ql-color-green {
  color: #008a00;
}
.ql-editor .ql-color-blue {
  color: #06c;
}
.ql-editor .ql-color-purple {
  color: #93f;
}
.ql-editor .ql-font-serif {
  font-family: Georgia, Times New Roman, serif;
}
.ql-editor .ql-font-monospace {
  font-family: Monaco, Courier New, monospace;
}
.ql-editor .ql-size-small {
  font-size: 0.75em;
}
.ql-editor .ql-size-large {
  font-size: 1.5em;
}
.ql-editor .ql-size-huge {
  font-size: 2.5em;
}
.ql-editor .ql-direction-rtl {
  direction: rtl;
  text-align: inherit;
}
.ql-editor .ql-align-center {
  text-align: center;
}
.ql-editor .ql-align-justify {
  text-align: justify;
}
.ql-editor .ql-align-right {
  text-align: right;
}
.ql-editor.ql-blank::before {
  color: rgba(0,0,0,0.6);
  content: attr(data-placeholder);
  font-style: italic;
  left: 15px;
  pointer-events: none;
  position: absolute;
  right: 15px;
}
.ql-snow.ql-toolbar:after,
.ql-snow .ql-toolbar:after {
  clear: both;
  content: '';
  display: table;
}
.ql-snow.ql-toolbar button,
.ql-snow .ql-toolbar button {
  background: none;
  border: none;
  cursor: pointer;
  display: inline-block;
  float: left;
  height: 24px;
  padding: 3px 5px;
  width: 28px;
}
.ql-snow.ql-toolbar button svg,
.ql-snow .ql-toolbar button svg {
  float: left;
  height: 100%;
}
.ql-snow.ql-toolbar button:active:hover,
.ql-snow .ql-toolbar button:active:hover {
  outline: none;
}
.ql-snow.ql-toolbar input.ql-image[type=file],
.ql-snow .ql-toolbar input.ql-image[type=file] {
  display: none;
}
.ql-snow.ql-toolbar button:hover,
.ql-snow .ql-toolbar button:hover,
.ql-snow.ql-toolbar button:focus,
.ql-snow .ql-toolbar button:focus,
.ql-snow.ql-toolbar button.ql-active,
.ql-snow .ql-toolbar button.ql-active,
.ql-snow.ql-toolbar .ql-picker-label:hover,
.ql-snow .ql-toolbar .ql-picker-label:hover,
.ql-snow.ql-toolbar .ql-picker-label.ql-active,
.ql-snow .ql-toolbar .ql-picker-label.ql-active,
.ql-snow.ql-toolbar .ql-picker-item:hover,
.ql-snow .ql-toolbar .ql-picker-item:hover,
.ql-snow.ql-toolbar .ql-picker-item.ql-selected,
.ql-snow .ql-toolbar .ql-picker-item.ql-selected {
  color: #06c;
}
.ql-snow.ql-toolbar button:hover .ql-fill,
.ql-snow .ql-toolbar button:hover .ql-fill,
.ql-snow.ql-toolbar button:focus .ql-fill,
.ql-snow .ql-toolbar button:focus .ql-fill,
.ql-snow.ql-toolbar button.ql-active .ql-fill,
.ql-snow .ql-toolbar button.ql-active .ql-fill,
.ql-snow.ql-toolbar .ql-picker-label:hover .ql-fill,
.ql-snow .ql-toolbar .ql-picker-label:hover .ql-fill,
.ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-fill,
.ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-fill,
.ql-snow.ql-toolbar .ql-picker-item:hover .ql-fill,
.ql-snow .ql-toolbar .ql-picker-item:hover .ql-fill,
.ql-snow.ql-toolbar .ql-picker-item.ql-selected .ql-fill,
.ql-snow .ql-toolbar .ql-picker-item.ql-selected .ql-fill,
.ql-snow.ql-toolbar button:hover .ql-stroke.ql-fill,
.ql-snow .ql-toolbar button:hover .ql-stroke.ql-fill,
.ql-snow.ql-toolbar button:focus .ql-stroke.ql-fill,
.ql-snow .ql-toolbar button:focus .ql-stroke.ql-fill,
.ql-snow.ql-toolbar button.ql-active .ql-stroke.ql-fill,
.ql-snow .ql-toolbar button.ql-active .ql-stroke.ql-fill,
.ql-snow.ql-toolbar .ql-picker-label:hover .ql-stroke.ql-fill,
.ql-snow .ql-toolbar .ql-picker-label:hover .ql-stroke.ql-fill,
.ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-stroke.ql-fill,
.ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-stroke.ql-fill,
.ql-snow.ql-toolbar .ql-picker-item:hover .ql-stroke.ql-fill,
.ql-snow .ql-toolbar .ql-picker-item:hover .ql-stroke.ql-fill,
.ql-snow.ql-toolbar .ql-picker-item.ql-selected .ql-stroke.ql-fill,
.ql-snow .ql-toolbar .ql-picker-item.ql-selected .ql-stroke.ql-fill {
  fill: #06c;
}
.ql-snow.ql-toolbar button:hover .ql-stroke,
.ql-snow .ql-toolbar button:hover .ql-stroke,
.ql-snow.ql-toolbar button:focus .ql-stroke,
.ql-snow .ql-toolbar button:focus .ql-stroke,
.ql-snow.ql-toolbar button.ql-active .ql-stroke,
.ql-snow .ql-toolbar button.ql-active .ql-stroke,
.ql-snow.ql-toolbar .ql-picker-label:hover .ql-stroke,
.ql-snow .ql-toolbar .ql-picker-label:hover .ql-stroke,
.ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-stroke,
.ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-stroke,
.ql-snow.ql-toolbar .ql-picker-item:hover .ql-stroke,
.ql-snow .ql-toolbar .ql-picker-item:hover .ql-stroke,
.ql-snow.ql-toolbar .ql-picker-item.ql-selected .ql-stroke,
.ql-snow .ql-toolbar .ql-picker-item.ql-selected .ql-stroke,
.ql-snow.ql-toolbar button:hover .ql-stroke-miter,
.ql-snow .ql-toolbar button:hover .ql-stroke-miter,
.ql-snow.ql-toolbar button:focus .ql-stroke-miter,
.ql-snow .ql-toolbar button:focus .ql-stroke-miter,
.ql-snow.ql-toolbar button.ql-active .ql-stroke-miter,
.ql-snow .ql-toolbar button.ql-active .ql-stroke-miter,
.ql-snow.ql-toolbar .ql-picker-label:hover .ql-stroke-miter,
.ql-snow .ql-toolbar .ql-picker-label:hover .ql-stroke-miter,
.ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-stroke-miter,
.ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-stroke-miter,
.ql-snow.ql-toolbar .ql-picker-item:hover .ql-stroke-miter,
.ql-snow .ql-toolbar .ql-picker-item:hover .ql-stroke-miter,
.ql-snow.ql-toolbar .ql-picker-item.ql-selected .ql-stroke-miter,
.ql-snow .ql-toolbar .ql-picker-item.ql-selected .ql-stroke-miter {
  stroke: #06c;
}
@media (pointer: coarse) {
  .ql-snow.ql-toolbar button:hover:not(.ql-active),
  .ql-snow .ql-toolbar button:hover:not(.ql-active) {
    color: #444;
  }
  .ql-snow.ql-toolbar button:hover:not(.ql-active) .ql-fill,
  .ql-snow .ql-toolbar button:hover:not(.ql-active) .ql-fill,
  .ql-snow.ql-toolbar button:hover:not(.ql-active) .ql-stroke.ql-fill,
  .ql-snow .ql-toolbar button:hover:not(.ql-active) .ql-stroke.ql-fill {
    fill: #444;
  }
  .ql-snow.ql-toolbar button:hover:not(.ql-active) .ql-stroke,
  .ql-snow .ql-toolbar button:hover:not(.ql-active) .ql-stroke,
  .ql-snow.ql-toolbar button:hover:not(.ql-active) .ql-stroke-miter,
  .ql-snow .ql-toolbar button:hover:not(.ql-active) .ql-stroke-miter {
    stroke: #444;
  }
}
.ql-snow {
  box-sizing: border-box;
}
.ql-snow * {
  box-sizing: border-box;
}
.ql-snow .ql-hidden {
  display: none;
}
.ql-snow .ql-out-bottom,
.ql-snow .ql-out-top {
  visibility: hidden;
}
.ql-snow .ql-tooltip {
  position: absolute;
  transform: translateY(10px);
}
.ql-snow .ql-tooltip a {
  cursor: pointer;
  text-decoration: none;
}
.ql-snow .ql-tooltip.ql-flip {
  transform: translateY(-10px);
}
.ql-snow .ql-formats {
  display: inline-block;
  vertical-align: middle;
}
.ql-snow .ql-formats:after {
  clear: both;
  content: '';
  display: table;
}
.ql-snow .ql-stroke {
  fill: none;
  stroke: #444;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-width: 2;
}
.ql-snow .ql-stroke-miter {
  fill: none;
  stroke: #444;
  stroke-miterlimit: 10;
  stroke-width: 2;
}
.ql-snow .ql-fill,
.ql-snow .ql-stroke.ql-fill {
  fill: #444;
}
.ql-snow .ql-empty {
  fill: none;
}
.ql-snow .ql-even {
  fill-rule: evenodd;
}
.ql-snow .ql-thin,
.ql-snow .ql-stroke.ql-thin {
  stroke-width: 1;
}
.ql-snow .ql-transparent {
  opacity: 0.4;
}
.ql-snow .ql-direction svg:last-child {
  display: none;
}
.ql-snow .ql-direction.ql-active svg:last-child {
  display: inline;
}
.ql-snow .ql-direction.ql-active svg:first-child {
  display: none;
}
.ql-snow .ql-editor h1 {
  font-size: 2em;
}
.ql-snow .ql-editor h2 {
  font-size: 1.5em;
}
.ql-snow .ql-editor h3 {
  font-size: 1.17em;
}
.ql-snow .ql-editor h4 {
  font-size: 1em;
}
.ql-snow .ql-editor h5 {
  font-size: 0.83em;
}
.ql-snow .ql-editor h6 {
  font-size: 0.67em;
}
.ql-snow .ql-editor a {
  text-decoration: underline;
}
.ql-snow .ql-editor blockquote {
  border-left: 4px solid #ccc;
  margin-bottom: 5px;
  margin-top: 5px;
  padding-left: 16px;
}
.ql-snow .ql-editor code,
.ql-snow .ql-editor pre {
  background-color: #f0f0f0;
  border-radius: 3px;
}
.ql-snow .ql-editor pre {
  white-space: pre-wrap;
  margin-bottom: 5px;
  margin-top: 5px;
  padding: 5px 10px;
}
.ql-snow .ql-editor code {
  font-size: 85%;
  padding: 2px 4px;
}
.ql-snow .ql-editor pre.ql-syntax {
  background-color: #23241f;
  color: #f8f8f2;
  overflow: visible;
}
.ql-snow .ql-editor img {
  max-width: 100%;
}
.ql-snow .ql-picker {
  color: #444;
  display: inline-block;
  float: left;
  font-size: 14px;
  font-weight: 500;
  height: 24px;
  position: relative;
  vertical-align: middle;
}
.ql-snow .ql-picker-label {
  cursor: pointer;
  display: inline-block;
  height: 100%;
  padding-left: 8px;
  padding-right: 2px;
  position: relative;
  width: 100%;
}
.ql-snow .ql-picker-label::before {
  display: inline-block;
  line-height: 22px;
}
.ql-snow .ql-picker-options {
  background-color: #fff;
  display: none;
  min-width: 100%;
  padding: 4px 8px;
  position: absolute;
  white-space: nowrap;
}
.ql-snow .ql-picker-options .ql-picker-item {
  cursor: pointer;
  display: block;
  padding-bottom: 5px;
  padding-top: 5px;
}
.ql-snow .ql-picker.ql-expanded .ql-picker-label {
  color: #ccc;
  z-index: 2;
}
.ql-snow .ql-picker.ql-expanded .ql-picker-label .ql-fill {
  fill: #ccc;
}
.ql-snow .ql-picker.ql-expanded .ql-picker-label .ql-stroke {
  stroke: #ccc;
}
.ql-snow .ql-picker.ql-expanded .ql-picker-options {
  display: block;
  margin-top: -1px;
  top: 100%;
  z-index: 1;
}
.ql-snow .ql-color-picker,
.ql-snow .ql-icon-picker {
  width: 28px;
}
.ql-snow .ql-color-picker .ql-picker-label,
.ql-snow .ql-icon-picker .ql-picker-label {
  padding: 2px 4px;
}
.ql-snow .ql-color-picker .ql-picker-label svg,
.ql-snow .ql-icon-picker .ql-picker-label svg {
  right: 4px;
}
.ql-snow .ql-icon-picker .ql-picker-options {
  padding: 4px 0px;
}
.ql-snow .ql-icon-picker .ql-picker-item {
  height: 24px;
  width: 24px;
  padding: 2px 4px;
}
.ql-snow .ql-color-picker .ql-picker-options {
  padding: 3px 5px;
  width: 152px;
}
.ql-snow .ql-color-picker .ql-picker-item {
  border: 1px solid transparent;
  float: left;
  height: 16px;
  margin: 2px;
  padding: 0px;
  width: 16px;
}
.ql-snow .ql-picker:not(.ql-color-picker):not(.ql-icon-picker) svg {
  position: absolute;
  margin-top: -9px;
  right: 0;
  top: 50%;
  width: 18px;
}
.ql-snow .ql-picker.ql-header .ql-picker-label[data-label]:not([data-label=''])::before,
.ql-snow .ql-picker.ql-font .ql-picker-label[data-label]:not([data-label=''])::before,
.ql-snow .ql-picker.ql-size .ql-picker-label[data-label]:not([data-label=''])::before,
.ql-snow .ql-picker.ql-header .ql-picker-item[data-label]:not([data-label=''])::before,
.ql-snow .ql-picker.ql-font .ql-picker-item[data-label]:not([data-label=''])::before,
.ql-snow .ql-picker.ql-size .ql-picker-item[data-label]:not([data-label=''])::before {
  content: attr(data-label);
}
.ql-snow .ql-picker.ql-header {
  width: 98px;
}
.ql-snow .ql-picker.ql-header .ql-picker-label::before,
.ql-snow .ql-picker.ql-header .ql-picker-item::before {
  content: 'Normal';
}
.ql-snow .ql-picker.ql-header .ql-picker-label[data-value="1"]::before,
.ql-snow .ql-picker.ql-header .ql-picker-item[data-value="1"]::before {
  content: 'Heading 1';
}
.ql-snow .ql-picker.ql-header .ql-picker-label[data-value="2"]::before,
.ql-snow .ql-picker.ql-header .ql-picker-item[data-value="2"]::before {
  content: 'Heading 2';
}
.ql-snow .ql-picker.ql-header .ql-picker-label[data-value="3"]::before,
.ql-snow .ql-picker.ql-header .ql-picker-item[data-value="3"]::before {
  content: 'Heading 3';
}
.ql-snow .ql-picker.ql-header .ql-picker-label[data-value="4"]::before,
.ql-snow .ql-picker.ql-header .ql-picker-item[data-value="4"]::before {
  content: 'Heading 4';
}
.ql-snow .ql-picker.ql-header .ql-picker-label[data-value="5"]::before,
.ql-snow .ql-picker.ql-header .ql-picker-item[data-value="5"]::before {
  content: 'Heading 5';
}
.ql-snow .ql-picker.ql-header .ql-picker-label[data-value="6"]::before,
.ql-snow .ql-picker.ql-header .ql-picker-item[data-value="6"]::before {
  content: 'Heading 6';
}
.ql-snow .ql-picker.ql-header .ql-picker-item[data-value="1"]::before {
  font-size: 2em;
}
.ql-snow .ql-picker.ql-header .ql-picker-item[data-value="2"]::before {
  font-size: 1.5em;
}
.ql-snow .ql-picker.ql-header .ql-picker-item[data-value="3"]::before {
  font-size: 1.17em;
}
.ql-snow .ql-picker.ql-header .ql-picker-item[data-value="4"]::before {
  font-size: 1em;
}
.ql-snow .ql-picker.ql-header .ql-picker-item[data-value="5"]::before {
  font-size: 0.83em;
}
.ql-snow .ql-picker.ql-header .ql-picker-item[data-value="6"]::before {
  font-size: 0.67em;
}
.ql-snow .ql-picker.ql-font {
  width: 108px;
}
.ql-snow .ql-picker.ql-font .ql-picker-label::before,
.ql-snow .ql-picker.ql-font .ql-picker-item::before {
  content: 'Sans Serif';
}
.ql-snow .ql-picker.ql-font .ql-picker-label[data-value=serif]::before,
.ql-snow .ql-picker.ql-font .ql-picker-item[data-value=serif]::before {
  content: 'Serif';
}
.ql-snow .ql-picker.ql-font .ql-picker-label[data-value=monospace]::before,
.ql-snow .ql-picker.ql-font .ql-picker-item[data-value=monospace]::before {
  content: 'Monospace';
}
.ql-snow .ql-picker.ql-font .ql-picker-item[data-value=serif]::before {
  font-family: Georgia, Times New Roman, serif;
}
.ql-snow .ql-picker.ql-font .ql-picker-item[data-value=monospace]::before {
  font-family: Monaco, Courier New, monospace;
}
.ql-snow .ql-picker.ql-size {
  width: 98px;
}
.ql-snow .ql-picker.ql-size .ql-picker-label::before,
.ql-snow .ql-picker.ql-size .ql-picker-item::before {
  content: 'Normal';
}
.ql-snow .ql-picker.ql-size .ql-picker-label[data-value=small]::before,
.ql-snow .ql-picker.ql-size .ql-picker-item[data-value=small]::before {
  content: 'Small';
}
.ql-snow .ql-picker.ql-size .ql-picker-label[data-value=large]::before,
.ql-snow .ql-picker.ql-size .ql-picker-item[data-value=large]::before {
  content: 'Large';
}
.ql-snow .ql-picker.ql-size .ql-picker-label[data-value=huge]::before,
.ql-snow .ql-picker.ql-size .ql-picker-item[data-value=huge]::before {
  content: 'Huge';
}
.ql-snow .ql-picker.ql-size .ql-picker-item[data-value=small]::before {
  font-size: 10px;
}
.ql-snow .ql-picker.ql-size .ql-picker-item[data-value=large]::before {
  font-size: 18px;
}
.ql-snow .ql-picker.ql-size .ql-picker-item[data-value=huge]::before {
  font-size: 32px;
}
.ql-snow .ql-color-picker.ql-background .ql-picker-item {
  background-color: #fff;
}
.ql-snow .ql-color-picker.ql-color .ql-picker-item {
  background-color: #000;
}
.ql-toolbar.ql-snow {
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
  padding: 8px;
}
.ql-toolbar.ql-snow .ql-formats {
  margin-right: 15px;
}
.ql-toolbar.ql-snow .ql-picker-label {
  border: 1px solid transparent;
}
.ql-toolbar.ql-snow .ql-picker-options {
  border: 1px solid transparent;
  box-shadow: rgba(0,0,0,0.2) 0 2px 8px;
}
.ql-toolbar.ql-snow .ql-picker.ql-expanded .ql-picker-label {
  border-color: #ccc;
}
.ql-toolbar.ql-snow .ql-picker.ql-expanded .ql-picker-options {
  border-color: #ccc;
}
.ql-toolbar.ql-snow .ql-color-picker .ql-picker-item.ql-selected,
.ql-toolbar.ql-snow .ql-color-picker .ql-picker-item:hover {
  border-color: #000;
}
.ql-toolbar.ql-snow + .ql-container.ql-snow {
  border-top: 0px;
}
.ql-snow .ql-tooltip {
  background-color: #fff;
  border: 1px solid #ccc;
  box-shadow: 0px 0px 5px #ddd;
  color: #444;
  padding: 5px 12px;
  white-space: nowrap;
}
.ql-snow .ql-tooltip::before {
  content: "Visit URL:";
  line-height: 26px;
  margin-right: 8px;
}
.ql-snow .ql-tooltip input[type=text] {
  display: none;
  border: 1px solid #ccc;
  font-size: 13px;
  height: 26px;
  margin: 0px;
  padding: 3px 5px;
  width: 170px;
}
.ql-snow .ql-tooltip a.ql-preview {
  display: inline-block;
  max-width: 200px;
  overflow-x: hidden;
  text-overflow: ellipsis;
  vertical-align: top;
}
.ql-snow .ql-tooltip a.ql-action::after {
  border-right: 1px solid #ccc;
  content: 'Edit';
  margin-left: 16px;
  padding-right: 8px;
}
.ql-snow .ql-tooltip a.ql-remove::before {
  content: 'Remove';
  margin-left: 8px;
}
.ql-snow .ql-tooltip a {
  line-height: 26px;
}
.ql-snow .ql-tooltip.ql-editing a.ql-preview,
.ql-snow .ql-tooltip.ql-editing a.ql-remove {
  display: none;
}
.ql-snow .ql-tooltip.ql-editing input[type=text] {
  display: inline-block;
}
.ql-snow .ql-tooltip.ql-editing a.ql-action::after {
  border-right: 0px;
  content: 'Save';
  padding-right: 0px;
}
.ql-snow .ql-tooltip[data-mode=link]::before {
  content: "Enter link:";
}
.ql-snow .ql-tooltip[data-mode=formula]::before {
  content: "Enter formula:";
}
.ql-snow .ql-tooltip[data-mode=video]::before {
  content: "Enter video:";
}
.ql-snow a {
  color: #06c;
}
.ql-container.ql-snow {
  border: 1px solid #ccc;
}

/*!
 * Quill Editor v1.3.7
 * https://quilljs.com/
 * Copyright (c) 2014, Jason Chen
 * Copyright (c) 2013, salesforce.com
 */
.ql-container {
  box-sizing: border-box;
  font-family: Helvetica, Arial, sans-serif;
  font-size: 13px;
  height: 100%;
  margin: 0px;
  position: relative;
}
.ql-container.ql-disabled .ql-tooltip {
  visibility: hidden;
}
.ql-container.ql-disabled .ql-editor ul[data-checked] > li::before {
  pointer-events: none;
}
.ql-clipboard {
  left: -100000px;
  height: 1px;
  overflow-y: hidden;
  position: absolute;
  top: 50%;
}
.ql-clipboard p {
  margin: 0;
  padding: 0;
}
.ql-editor {
  box-sizing: border-box;
  line-height: 1.42;
  height: 100%;
  outline: none;
  overflow-y: auto;
  padding: 12px 15px;
  tab-size: 4;
  -moz-tab-size: 4;
  text-align: left;
  white-space: pre-wrap;
  word-wrap: break-word;
}
.ql-editor > * {
  cursor: text;
}
.ql-editor p,
.ql-editor ol,
.ql-editor ul,
.ql-editor pre,
.ql-editor blockquote,
.ql-editor h1,
.ql-editor h2,
.ql-editor h3,
.ql-editor h4,
.ql-editor h5,
.ql-editor h6 {
  margin: 0;
  padding: 0;
  counter-reset: list-1 list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9;
}
.ql-editor ol,
.ql-editor ul {
  padding-left: 1.5em;
}
.ql-editor ol > li,
.ql-editor ul > li {
  list-style-type: none;
}
.ql-editor ul > li::before {
  content: '\2022';
}
.ql-editor ul[data-checked=true],
.ql-editor ul[data-checked=false] {
  pointer-events: none;
}
.ql-editor ul[data-checked=true] > li *,
.ql-editor ul[data-checked=false] > li * {
  pointer-events: all;
}
.ql-editor ul[data-checked=true] > li::before,
.ql-editor ul[data-checked=false] > li::before {
  color: #777;
  cursor: pointer;
  pointer-events: all;
}
.ql-editor ul[data-checked=true] > li::before {
  content: '\2611';
}
.ql-editor ul[data-checked=false] > li::before {
  content: '\2610';
}
.ql-editor li::before {
  display: inline-block;
  white-space: nowrap;
  width: 1.2em;
}
.ql-editor li:not(.ql-direction-rtl)::before {
  margin-left: -1.5em;
  margin-right: 0.3em;
  text-align: right;
}
.ql-editor li.ql-direction-rtl::before {
  margin-left: 0.3em;
  margin-right: -1.5em;
}
.ql-editor ol li:not(.ql-direction-rtl),
.ql-editor ul li:not(.ql-direction-rtl) {
  padding-left: 1.5em;
}
.ql-editor ol li.ql-direction-rtl,
.ql-editor ul li.ql-direction-rtl {
  padding-right: 1.5em;
}
.ql-editor ol li {
  counter-reset: list-1 list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9;
  counter-increment: list-0;
}
.ql-editor ol li:before {
  content: counter(list-0, decimal) '. ';
}
.ql-editor ol li.ql-indent-1 {
  counter-increment: list-1;
}
.ql-editor ol li.ql-indent-1:before {
  content: counter(list-1, lower-alpha) '. ';
}
.ql-editor ol li.ql-indent-1 {
  counter-reset: list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9;
}
.ql-editor ol li.ql-indent-2 {
  counter-increment: list-2;
}
.ql-editor ol li.ql-indent-2:before {
  content: counter(list-2, lower-roman) '. ';
}
.ql-editor ol li.ql-indent-2 {
  counter-reset: list-3 list-4 list-5 list-6 list-7 list-8 list-9;
}
.ql-editor ol li.ql-indent-3 {
  counter-increment: list-3;
}
.ql-editor ol li.ql-indent-3:before {
  content: counter(list-3, decimal) '. ';
}
.ql-editor ol li.ql-indent-3 {
  counter-reset: list-4 list-5 list-6 list-7 list-8 list-9;
}
.ql-editor ol li.ql-indent-4 {
  counter-increment: list-4;
}
.ql-editor ol li.ql-indent-4:before {
  content: counter(list-4, lower-alpha) '. ';
}
.ql-editor ol li.ql-indent-4 {
  counter-reset: list-5 list-6 list-7 list-8 list-9;
}
.ql-editor ol li.ql-indent-5 {
  counter-increment: list-5;
}
.ql-editor ol li.ql-indent-5:before {
  content: counter(list-5, lower-roman) '. ';
}
.ql-editor ol li.ql-indent-5 {
  counter-reset: list-6 list-7 list-8 list-9;
}
.ql-editor ol li.ql-indent-6 {
  counter-increment: list-6;
}
.ql-editor ol li.ql-indent-6:before {
  content: counter(list-6, decimal) '. ';
}
.ql-editor ol li.ql-indent-6 {
  counter-reset: list-7 list-8 list-9;
}
.ql-editor ol li.ql-indent-7 {
  counter-increment: list-7;
}
.ql-editor ol li.ql-indent-7:before {
  content: counter(list-7, lower-alpha) '. ';
}
.ql-editor ol li.ql-indent-7 {
  counter-reset: list-8 list-9;
}
.ql-editor ol li.ql-indent-8 {
  counter-increment: list-8;
}
.ql-editor ol li.ql-indent-8:before {
  content: counter(list-8, lower-roman) '. ';
}
.ql-editor ol li.ql-indent-8 {
  counter-reset: list-9;
}
.ql-editor ol li.ql-indent-9 {
  counter-increment: list-9;
}
.ql-editor ol li.ql-indent-9:before {
  content: counter(list-9, decimal) '. ';
}
.ql-editor .ql-indent-1:not(.ql-direction-rtl) {
  padding-left: 3em;
}
.ql-editor li.ql-indent-1:not(.ql-direction-rtl) {
  padding-left: 4.5em;
}
.ql-editor .ql-indent-1.ql-direction-rtl.ql-align-right {
  padding-right: 3em;
}
.ql-editor li.ql-indent-1.ql-direction-rtl.ql-align-right {
  padding-right: 4.5em;
}
.ql-editor .ql-indent-2:not(.ql-direction-rtl) {
  padding-left: 6em;
}
.ql-editor li.ql-indent-2:not(.ql-direction-rtl) {
  padding-left: 7.5em;
}
.ql-editor .ql-indent-2.ql-direction-rtl.ql-align-right {
  padding-right: 6em;
}
.ql-editor li.ql-indent-2.ql-direction-rtl.ql-align-right {
  padding-right: 7.5em;
}
.ql-editor .ql-indent-3:not(.ql-direction-rtl) {
  padding-left: 9em;
}
.ql-editor li.ql-indent-3:not(.ql-direction-rtl) {
  padding-left: 10.5em;
}
.ql-editor .ql-indent-3.ql-direction-rtl.ql-align-right {
  padding-right: 9em;
}
.ql-editor li.ql-indent-3.ql-direction-rtl.ql-align-right {
  padding-right: 10.5em;
}
.ql-editor .ql-indent-4:not(.ql-direction-rtl) {
  padding-left: 12em;
}
.ql-editor li.ql-indent-4:not(.ql-direction-rtl) {
  padding-left: 13.5em;
}
.ql-editor .ql-indent-4.ql-direction-rtl.ql-align-right {
  padding-right: 12em;
}
.ql-editor li.ql-indent-4.ql-direction-rtl.ql-align-right {
  padding-right: 13.5em;
}
.ql-editor .ql-indent-5:not(.ql-direction-rtl) {
  padding-left: 15em;
}
.ql-editor li.ql-indent-5:not(.ql-direction-rtl) {
  padding-left: 16.5em;
}
.ql-editor .ql-indent-5.ql-direction-rtl.ql-align-right {
  padding-right: 15em;
}
.ql-editor li.ql-indent-5.ql-direction-rtl.ql-align-right {
  padding-right: 16.5em;
}
.ql-editor .ql-indent-6:not(.ql-direction-rtl) {
  padding-left: 18em;
}
.ql-editor li.ql-indent-6:not(.ql-direction-rtl) {
  padding-left: 19.5em;
}
.ql-editor .ql-indent-6.ql-direction-rtl.ql-align-right {
  padding-right: 18em;
}
.ql-editor li.ql-indent-6.ql-direction-rtl.ql-align-right {
  padding-right: 19.5em;
}
.ql-editor .ql-indent-7:not(.ql-direction-rtl) {
  padding-left: 21em;
}
.ql-editor li.ql-indent-7:not(.ql-direction-rtl) {
  padding-left: 22.5em;
}
.ql-editor .ql-indent-7.ql-direction-rtl.ql-align-right {
  padding-right: 21em;
}
.ql-editor li.ql-indent-7.ql-direction-rtl.ql-align-right {
  padding-right: 22.5em;
}
.ql-editor .ql-indent-8:not(.ql-direction-rtl) {
  padding-left: 24em;
}
.ql-editor li.ql-indent-8:not(.ql-direction-rtl) {
  padding-left: 25.5em;
}
.ql-editor .ql-indent-8.ql-direction-rtl.ql-align-right {
  padding-right: 24em;
}
.ql-editor li.ql-indent-8.ql-direction-rtl.ql-align-right {
  padding-right: 25.5em;
}
.ql-editor .ql-indent-9:not(.ql-direction-rtl) {
  padding-left: 27em;
}
.ql-editor li.ql-indent-9:not(.ql-direction-rtl) {
  padding-left: 28.5em;
}
.ql-editor .ql-indent-9.ql-direction-rtl.ql-align-right {
  padding-right: 27em;
}
.ql-editor li.ql-indent-9.ql-direction-rtl.ql-align-right {
  padding-right: 28.5em;
}
.ql-editor .ql-video {
  display: block;
  max-width: 100%;
}
.ql-editor .ql-video.ql-align-center {
  margin: 0 auto;
}
.ql-editor .ql-video.ql-align-right {
  margin: 0 0 0 auto;
}
.ql-editor .ql-bg-black {
  background-color: #000;
}
.ql-editor .ql-bg-red {
  background-color: #e60000;
}
.ql-editor .ql-bg-orange {
  background-color: #f90;
}
.ql-editor .ql-bg-yellow {
  background-color: #ff0;
}
.ql-editor .ql-bg-green {
  background-color: #008a00;
}
.ql-editor .ql-bg-blue {
  background-color: #06c;
}
.ql-editor .ql-bg-purple {
  background-color: #93f;
}
.ql-editor .ql-color-white {
  color: #fff;
}
.ql-editor .ql-color-red {
  color: #e60000;
}
.ql-editor .ql-color-orange {
  color: #f90;
}
.ql-editor .ql-color-yellow {
  color: #ff0;
}
.ql-editor .ql-color-green {
  color: #008a00;
}
.ql-editor .ql-color-blue {
  color: #06c;
}
.ql-editor .ql-color-purple {
  color: #93f;
}
.ql-editor .ql-font-serif {
  font-family: Georgia, Times New Roman, serif;
}
.ql-editor .ql-font-monospace {
  font-family: Monaco, Courier New, monospace;
}
.ql-editor .ql-size-small {
  font-size: 0.75em;
}
.ql-editor .ql-size-large {
  font-size: 1.5em;
}
.ql-editor .ql-size-huge {
  font-size: 2.5em;
}
.ql-editor .ql-direction-rtl {
  direction: rtl;
  text-align: inherit;
}
.ql-editor .ql-align-center {
  text-align: center;
}
.ql-editor .ql-align-justify {
  text-align: justify;
}
.ql-editor .ql-align-right {
  text-align: right;
}
.ql-editor.ql-blank::before {
  color: rgba(0,0,0,0.6);
  content: attr(data-placeholder);
  font-style: italic;
  left: 15px;
  pointer-events: none;
  position: absolute;
  right: 15px;
}
.ql-bubble.ql-toolbar:after,
.ql-bubble .ql-toolbar:after {
  clear: both;
  content: '';
  display: table;
}
.ql-bubble.ql-toolbar button,
.ql-bubble .ql-toolbar button {
  background: none;
  border: none;
  cursor: pointer;
  display: inline-block;
  float: left;
  height: 24px;
  padding: 3px 5px;
  width: 28px;
}
.ql-bubble.ql-toolbar button svg,
.ql-bubble .ql-toolbar button svg {
  float: left;
  height: 100%;
}
.ql-bubble.ql-toolbar button:active:hover,
.ql-bubble .ql-toolbar button:active:hover {
  outline: none;
}
.ql-bubble.ql-toolbar input.ql-image[type=file],
.ql-bubble .ql-toolbar input.ql-image[type=file] {
  display: none;
}
.ql-bubble.ql-toolbar button:hover,
.ql-bubble .ql-toolbar button:hover,
.ql-bubble.ql-toolbar button:focus,
.ql-bubble .ql-toolbar button:focus,
.ql-bubble.ql-toolbar button.ql-active,
.ql-bubble .ql-toolbar button.ql-active,
.ql-bubble.ql-toolbar .ql-picker-label:hover,
.ql-bubble .ql-toolbar .ql-picker-label:hover,
.ql-bubble.ql-toolbar .ql-picker-label.ql-active,
.ql-bubble .ql-toolbar .ql-picker-label.ql-active,
.ql-bubble.ql-toolbar .ql-picker-item:hover,
.ql-bubble .ql-toolbar .ql-picker-item:hover,
.ql-bubble.ql-toolbar .ql-picker-item.ql-selected,
.ql-bubble .ql-toolbar .ql-picker-item.ql-selected {
  color: #fff;
}
.ql-bubble.ql-toolbar button:hover .ql-fill,
.ql-bubble .ql-toolbar button:hover .ql-fill,
.ql-bubble.ql-toolbar button:focus .ql-fill,
.ql-bubble .ql-toolbar button:focus .ql-fill,
.ql-bubble.ql-toolbar button.ql-active .ql-fill,
.ql-bubble .ql-toolbar button.ql-active .ql-fill,
.ql-bubble.ql-toolbar .ql-picker-label:hover .ql-fill,
.ql-bubble .ql-toolbar .ql-picker-label:hover .ql-fill,
.ql-bubble.ql-toolbar .ql-picker-label.ql-active .ql-fill,
.ql-bubble .ql-toolbar .ql-picker-label.ql-active .ql-fill,
.ql-bubble.ql-toolbar .ql-picker-item:hover .ql-fill,
.ql-bubble .ql-toolbar .ql-picker-item:hover .ql-fill,
.ql-bubble.ql-toolbar .ql-picker-item.ql-selected .ql-fill,
.ql-bubble .ql-toolbar .ql-picker-item.ql-selected .ql-fill,
.ql-bubble.ql-toolbar button:hover .ql-stroke.ql-fill,
.ql-bubble .ql-toolbar button:hover .ql-stroke.ql-fill,
.ql-bubble.ql-toolbar button:focus .ql-stroke.ql-fill,
.ql-bubble .ql-toolbar button:focus .ql-stroke.ql-fill,
.ql-bubble.ql-toolbar button.ql-active .ql-stroke.ql-fill,
.ql-bubble .ql-toolbar button.ql-active .ql-stroke.ql-fill,
.ql-bubble.ql-toolbar .ql-picker-label:hover .ql-stroke.ql-fill,
.ql-bubble .ql-toolbar .ql-picker-label:hover .ql-stroke.ql-fill,
.ql-bubble.ql-toolbar .ql-picker-label.ql-active .ql-stroke.ql-fill,
.ql-bubble .ql-toolbar .ql-picker-label.ql-active .ql-stroke.ql-fill,
.ql-bubble.ql-toolbar .ql-picker-item:hover .ql-stroke.ql-fill,
.ql-bubble .ql-toolbar .ql-picker-item:hover .ql-stroke.ql-fill,
.ql-bubble.ql-toolbar .ql-picker-item.ql-selected .ql-stroke.ql-fill,
.ql-bubble .ql-toolbar .ql-picker-item.ql-selected .ql-stroke.ql-fill {
  fill: #fff;
}
.ql-bubble.ql-toolbar button:hover .ql-stroke,
.ql-bubble .ql-toolbar button:hover .ql-stroke,
.ql-bubble.ql-toolbar button:focus .ql-stroke,
.ql-bubble .ql-toolbar button:focus .ql-stroke,
.ql-bubble.ql-toolbar button.ql-active .ql-stroke,
.ql-bubble .ql-toolbar button.ql-active .ql-stroke,
.ql-bubble.ql-toolbar .ql-picker-label:hover .ql-stroke,
.ql-bubble .ql-toolbar .ql-picker-label:hover .ql-stroke,
.ql-bubble.ql-toolbar .ql-picker-label.ql-active .ql-stroke,
.ql-bubble .ql-toolbar .ql-picker-label.ql-active .ql-stroke,
.ql-bubble.ql-toolbar .ql-picker-item:hover .ql-stroke,
.ql-bubble .ql-toolbar .ql-picker-item:hover .ql-stroke,
.ql-bubble.ql-toolbar .ql-picker-item.ql-selected .ql-stroke,
.ql-bubble .ql-toolbar .ql-picker-item.ql-selected .ql-stroke,
.ql-bubble.ql-toolbar button:hover .ql-stroke-miter,
.ql-bubble .ql-toolbar button:hover .ql-stroke-miter,
.ql-bubble.ql-toolbar button:focus .ql-stroke-miter,
.ql-bubble .ql-toolbar button:focus .ql-stroke-miter,
.ql-bubble.ql-toolbar button.ql-active .ql-stroke-miter,
.ql-bubble .ql-toolbar button.ql-active .ql-stroke-miter,
.ql-bubble.ql-toolbar .ql-picker-label:hover .ql-stroke-miter,
.ql-bubble .ql-toolbar .ql-picker-label:hover .ql-stroke-miter,
.ql-bubble.ql-toolbar .ql-picker-label.ql-active .ql-stroke-miter,
.ql-bubble .ql-toolbar .ql-picker-label.ql-active .ql-stroke-miter,
.ql-bubble.ql-toolbar .ql-picker-item:hover .ql-stroke-miter,
.ql-bubble .ql-toolbar .ql-picker-item:hover .ql-stroke-miter,
.ql-bubble.ql-toolbar .ql-picker-item.ql-selected .ql-stroke-miter,
.ql-bubble .ql-toolbar .ql-picker-item.ql-selected .ql-stroke-miter {
  stroke: #fff;
}
@media (pointer: coarse) {
  .ql-bubble.ql-toolbar button:hover:not(.ql-active),
  .ql-bubble .ql-toolbar button:hover:not(.ql-active) {
    color: #ccc;
  }
  .ql-bubble.ql-toolbar button:hover:not(.ql-active) .ql-fill,
  .ql-bubble .ql-toolbar button:hover:not(.ql-active) .ql-fill,
  .ql-bubble.ql-toolbar button:hover:not(.ql-active) .ql-stroke.ql-fill,
  .ql-bubble .ql-toolbar button:hover:not(.ql-active) .ql-stroke.ql-fill {
    fill: #ccc;
  }
  .ql-bubble.ql-toolbar button:hover:not(.ql-active) .ql-stroke,
  .ql-bubble .ql-toolbar button:hover:not(.ql-active) .ql-stroke,
  .ql-bubble.ql-toolbar button:hover:not(.ql-active) .ql-stroke-miter,
  .ql-bubble .ql-toolbar button:hover:not(.ql-active) .ql-stroke-miter {
    stroke: #ccc;
  }
}
.ql-bubble {
  box-sizing: border-box;
}
.ql-bubble * {
  box-sizing: border-box;
}
.ql-bubble .ql-hidden {
  display: none;
}
.ql-bubble .ql-out-bottom,
.ql-bubble .ql-out-top {
  visibility: hidden;
}
.ql-bubble .ql-tooltip {
  position: absolute;
  transform: translateY(10px);
}
.ql-bubble .ql-tooltip a {
  cursor: pointer;
  text-decoration: none;
}
.ql-bubble .ql-tooltip.ql-flip {
  transform: translateY(-10px);
}
.ql-bubble .ql-formats {
  display: inline-block;
  vertical-align: middle;
}
.ql-bubble .ql-formats:after {
  clear: both;
  content: '';
  display: table;
}
.ql-bubble .ql-stroke {
  fill: none;
  stroke: #ccc;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-width: 2;
}
.ql-bubble .ql-stroke-miter {
  fill: none;
  stroke: #ccc;
  stroke-miterlimit: 10;
  stroke-width: 2;
}
.ql-bubble .ql-fill,
.ql-bubble .ql-stroke.ql-fill {
  fill: #ccc;
}
.ql-bubble .ql-empty {
  fill: none;
}
.ql-bubble .ql-even {
  fill-rule: evenodd;
}
.ql-bubble .ql-thin,
.ql-bubble .ql-stroke.ql-thin {
  stroke-width: 1;
}
.ql-bubble .ql-transparent {
  opacity: 0.4;
}
.ql-bubble .ql-direction svg:last-child {
  display: none;
}
.ql-bubble .ql-direction.ql-active svg:last-child {
  display: inline;
}
.ql-bubble .ql-direction.ql-active svg:first-child {
  display: none;
}
.ql-bubble .ql-editor h1 {
  font-size: 2em;
}
.ql-bubble .ql-editor h2 {
  font-size: 1.5em;
}
.ql-bubble .ql-editor h3 {
  font-size: 1.17em;
}
.ql-bubble .ql-editor h4 {
  font-size: 1em;
}
.ql-bubble .ql-editor h5 {
  font-size: 0.83em;
}
.ql-bubble .ql-editor h6 {
  font-size: 0.67em;
}
.ql-bubble .ql-editor a {
  text-decoration: underline;
}
.ql-bubble .ql-editor blockquote {
  border-left: 4px solid #ccc;
  margin-bottom: 5px;
  margin-top: 5px;
  padding-left: 16px;
}
.ql-bubble .ql-editor code,
.ql-bubble .ql-editor pre {
  background-color: #f0f0f0;
  border-radius: 3px;
}
.ql-bubble .ql-editor pre {
  white-space: pre-wrap;
  margin-bottom: 5px;
  margin-top: 5px;
  padding: 5px 10px;
}
.ql-bubble .ql-editor code {
  font-size: 85%;
  padding: 2px 4px;
}
.ql-bubble .ql-editor pre.ql-syntax {
  background-color: #23241f;
  color: #f8f8f2;
  overflow: visible;
}
.ql-bubble .ql-editor img {
  max-width: 100%;
}
.ql-bubble .ql-picker {
  color: #ccc;
  display: inline-block;
  float: left;
  font-size: 14px;
  font-weight: 500;
  height: 24px;
  position: relative;
  vertical-align: middle;
}
.ql-bubble .ql-picker-label {
  cursor: pointer;
  display: inline-block;
  height: 100%;
  padding-left: 8px;
  padding-right: 2px;
  position: relative;
  width: 100%;
}
.ql-bubble .ql-picker-label::before {
  display: inline-block;
  line-height: 22px;
}
.ql-bubble .ql-picker-options {
  background-color: #444;
  display: none;
  min-width: 100%;
  padding: 4px 8px;
  position: absolute;
  white-space: nowrap;
}
.ql-bubble .ql-picker-options .ql-picker-item {
  cursor: pointer;
  display: block;
  padding-bottom: 5px;
  padding-top: 5px;
}
.ql-bubble .ql-picker.ql-expanded .ql-picker-label {
  color: #777;
  z-index: 2;
}
.ql-bubble .ql-picker.ql-expanded .ql-picker-label .ql-fill {
  fill: #777;
}
.ql-bubble .ql-picker.ql-expanded .ql-picker-label .ql-stroke {
  stroke: #777;
}
.ql-bubble .ql-picker.ql-expanded .ql-picker-options {
  display: block;
  margin-top: -1px;
  top: 100%;
  z-index: 1;
}
.ql-bubble .ql-color-picker,
.ql-bubble .ql-icon-picker {
  width: 28px;
}
.ql-bubble .ql-color-picker .ql-picker-label,
.ql-bubble .ql-icon-picker .ql-picker-label {
  padding: 2px 4px;
}
.ql-bubble .ql-color-picker .ql-picker-label svg,
.ql-bubble .ql-icon-picker .ql-picker-label svg {
  right: 4px;
}
.ql-bubble .ql-icon-picker .ql-picker-options {
  padding: 4px 0px;
}
.ql-bubble .ql-icon-picker .ql-picker-item {
  height: 24px;
  width: 24px;
  padding: 2px 4px;
}
.ql-bubble .ql-color-picker .ql-picker-options {
  padding: 3px 5px;
  width: 152px;
}
.ql-bubble .ql-color-picker .ql-picker-item {
  border: 1px solid transparent;
  float: left;
  height: 16px;
  margin: 2px;
  padding: 0px;
  width: 16px;
}
.ql-bubble .ql-picker:not(.ql-color-picker):not(.ql-icon-picker) svg {
  position: absolute;
  margin-top: -9px;
  right: 0;
  top: 50%;
  width: 18px;
}
.ql-bubble .ql-picker.ql-header .ql-picker-label[data-label]:not([data-label=''])::before,
.ql-bubble .ql-picker.ql-font .ql-picker-label[data-label]:not([data-label=''])::before,
.ql-bubble .ql-picker.ql-size .ql-picker-label[data-label]:not([data-label=''])::before,
.ql-bubble .ql-picker.ql-header .ql-picker-item[data-label]:not([data-label=''])::before,
.ql-bubble .ql-picker.ql-font .ql-picker-item[data-label]:not([data-label=''])::before,
.ql-bubble .ql-picker.ql-size .ql-picker-item[data-label]:not([data-label=''])::before {
  content: attr(data-label);
}
.ql-bubble .ql-picker.ql-header {
  width: 98px;
}
.ql-bubble .ql-picker.ql-header .ql-picker-label::before,
.ql-bubble .ql-picker.ql-header .ql-picker-item::before {
  content: 'Normal';
}
.ql-bubble .ql-picker.ql-header .ql-picker-label[data-value="1"]::before,
.ql-bubble .ql-picker.ql-header .ql-picker-item[data-value="1"]::before {
  content: 'Heading 1';
}
.ql-bubble .ql-picker.ql-header .ql-picker-label[data-value="2"]::before,
.ql-bubble .ql-picker.ql-header .ql-picker-item[data-value="2"]::before {
  content: 'Heading 2';
}
.ql-bubble .ql-picker.ql-header .ql-picker-label[data-value="3"]::before,
.ql-bubble .ql-picker.ql-header .ql-picker-item[data-value="3"]::before {
  content: 'Heading 3';
}
.ql-bubble .ql-picker.ql-header .ql-picker-label[data-value="4"]::before,
.ql-bubble .ql-picker.ql-header .ql-picker-item[data-value="4"]::before {
  content: 'Heading 4';
}
.ql-bubble .ql-picker.ql-header .ql-picker-label[data-value="5"]::before,
.ql-bubble .ql-picker.ql-header .ql-picker-item[data-value="5"]::before {
  content: 'Heading 5';
}
.ql-bubble .ql-picker.ql-header .ql-picker-label[data-value="6"]::before,
.ql-bubble .ql-picker.ql-header .ql-picker-item[data-value="6"]::before {
  content: 'Heading 6';
}
.ql-bubble .ql-picker.ql-header .ql-picker-item[data-value="1"]::before {
  font-size: 2em;
}
.ql-bubble .ql-picker.ql-header .ql-picker-item[data-value="2"]::before {
  font-size: 1.5em;
}
.ql-bubble .ql-picker.ql-header .ql-picker-item[data-value="3"]::before {
  font-size: 1.17em;
}
.ql-bubble .ql-picker.ql-header .ql-picker-item[data-value="4"]::before {
  font-size: 1em;
}
.ql-bubble .ql-picker.ql-header .ql-picker-item[data-value="5"]::before {
  font-size: 0.83em;
}
.ql-bubble .ql-picker.ql-header .ql-picker-item[data-value="6"]::before {
  font-size: 0.67em;
}
.ql-bubble .ql-picker.ql-font {
  width: 108px;
}
.ql-bubble .ql-picker.ql-font .ql-picker-label::before,
.ql-bubble .ql-picker.ql-font .ql-picker-item::before {
  content: 'Sans Serif';
}
.ql-bubble .ql-picker.ql-font .ql-picker-label[data-value=serif]::before,
.ql-bubble .ql-picker.ql-font .ql-picker-item[data-value=serif]::before {
  content: 'Serif';
}
.ql-bubble .ql-picker.ql-font .ql-picker-label[data-value=monospace]::before,
.ql-bubble .ql-picker.ql-font .ql-picker-item[data-value=monospace]::before {
  content: 'Monospace';
}
.ql-bubble .ql-picker.ql-font .ql-picker-item[data-value=serif]::before {
  font-family: Georgia, Times New Roman, serif;
}
.ql-bubble .ql-picker.ql-font .ql-picker-item[data-value=monospace]::before {
  font-family: Monaco, Courier New, monospace;
}
.ql-bubble .ql-picker.ql-size {
  width: 98px;
}
.ql-bubble .ql-picker.ql-size .ql-picker-label::before,
.ql-bubble .ql-picker.ql-size .ql-picker-item::before {
  content: 'Normal';
}
.ql-bubble .ql-picker.ql-size .ql-picker-label[data-value=small]::before,
.ql-bubble .ql-picker.ql-size .ql-picker-item[data-value=small]::before {
  content: 'Small';
}
.ql-bubble .ql-picker.ql-size .ql-picker-label[data-value=large]::before,
.ql-bubble .ql-picker.ql-size .ql-picker-item[data-value=large]::before {
  content: 'Large';
}
.ql-bubble .ql-picker.ql-size .ql-picker-label[data-value=huge]::before,
.ql-bubble .ql-picker.ql-size .ql-picker-item[data-value=huge]::before {
  content: 'Huge';
}
.ql-bubble .ql-picker.ql-size .ql-picker-item[data-value=small]::before {
  font-size: 10px;
}
.ql-bubble .ql-picker.ql-size .ql-picker-item[data-value=large]::before {
  font-size: 18px;
}
.ql-bubble .ql-picker.ql-size .ql-picker-item[data-value=huge]::before {
  font-size: 32px;
}
.ql-bubble .ql-color-picker.ql-background .ql-picker-item {
  background-color: #fff;
}
.ql-bubble .ql-color-picker.ql-color .ql-picker-item {
  background-color: #000;
}
.ql-bubble .ql-toolbar .ql-formats {
  margin: 8px 12px 8px 0px;
}
.ql-bubble .ql-toolbar .ql-formats:first-child {
  margin-left: 12px;
}
.ql-bubble .ql-color-picker svg {
  margin: 1px;
}
.ql-bubble .ql-color-picker .ql-picker-item.ql-selected,
.ql-bubble .ql-color-picker .ql-picker-item:hover {
  border-color: #fff;
}
.ql-bubble .ql-tooltip {
  background-color: #444;
  border-radius: 25px;
  color: #fff;
}
.ql-bubble .ql-tooltip-arrow {
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  content: " ";
  display: block;
  left: 50%;
  margin-left: -6px;
  position: absolute;
}
.ql-bubble .ql-tooltip:not(.ql-flip) .ql-tooltip-arrow {
  border-bottom: 6px solid #444;
  top: -6px;
}
.ql-bubble .ql-tooltip.ql-flip .ql-tooltip-arrow {
  border-top: 6px solid #444;
  bottom: -6px;
}
.ql-bubble .ql-tooltip.ql-editing .ql-tooltip-editor {
  display: block;
}
.ql-bubble .ql-tooltip.ql-editing .ql-formats {
  visibility: hidden;
}
.ql-bubble .ql-tooltip-editor {
  display: none;
}
.ql-bubble .ql-tooltip-editor input[type=text] {
  background: transparent;
  border: none;
  color: #fff;
  font-size: 13px;
  height: 100%;
  outline: none;
  padding: 10px 20px;
  position: absolute;
  width: 100%;
}
.ql-bubble .ql-tooltip-editor a {
  top: 10px;
  position: absolute;
  right: 20px;
}
.ql-bubble .ql-tooltip-editor a:before {
  color: #ccc;
  content: "\D7";
  font-size: 16px;
  font-weight: bold;
}
.ql-container.ql-bubble:not(.ql-disabled) a {
  position: relative;
  white-space: nowrap;
}
.ql-container.ql-bubble:not(.ql-disabled) a::before {
  background-color: #444;
  border-radius: 15px;
  top: -5px;
  font-size: 12px;
  color: #fff;
  content: attr(href);
  font-weight: normal;
  overflow: hidden;
  padding: 5px 15px;
  text-decoration: none;
  z-index: 1;
}
.ql-container.ql-bubble:not(.ql-disabled) a::after {
  border-top: 6px solid #444;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  top: 0;
  content: " ";
  height: 0;
  width: 0;
}
.ql-container.ql-bubble:not(.ql-disabled) a::before,
.ql-container.ql-bubble:not(.ql-disabled) a::after {
  left: 0;
  margin-left: 50%;
  position: absolute;
  transform: translate(-50%, -100%);
  transition: visibility 0s ease 200ms;
  visibility: hidden;
}
.ql-container.ql-bubble:not(.ql-disabled) a:hover::before,
.ql-container.ql-bubble:not(.ql-disabled) a:hover::after {
  visibility: visible;
}

/*
* Remix Icon v2.5.0
* https://remixicon.com
* https://github.com/Remix-Design/RemixIcon
*
* Copyright RemixIcon.com
* Released under the Apache License Version 2.0
*
* Date: 2020-05-23
*/
@font-face {
  font-family: "remixicon";
  src: url('remixicon.eot?t=1590207869815'); /* IE9*/
  src: url('remixicon.eot?t=1590207869815#iefix') format('embedded-opentype'), /* IE6-IE8 */
  url("remixicon.woff2?t=1590207869815") format("woff2"),
  url("remixicon.woff?t=1590207869815") format("woff"),
  url('remixicon.ttf?t=1590207869815') format('truetype'), /* chrome, firefox, opera, Safari, Android, iOS 4.2+*/
  url('remixicon.svg?t=1590207869815#remixicon') format('svg'); /* iOS 4.1- */
  font-display: swap;
}

[class^="ri-"], [class*=" ri-"] {
  font-family: 'remixicon' !important;
  font-style: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.ri-lg { font-size: 1.3333em; line-height: 0.75em; vertical-align: -.0667em; }
.ri-xl { font-size: 1.5em; line-height: 0.6666em; vertical-align: -.075em; }
.ri-xxs { font-size: .5em; }
.ri-xs { font-size: .75em; }
.ri-sm { font-size: .875em }
.ri-1x { font-size: 1em; }
.ri-2x { font-size: 2em; }
.ri-3x { font-size: 3em; }
.ri-4x { font-size: 4em; }
.ri-5x { font-size: 5em; }
.ri-6x { font-size: 6em; }
.ri-7x { font-size: 7em; }
.ri-8x { font-size: 8em; }
.ri-9x { font-size: 9em; }
.ri-10x { font-size: 10em; }
.ri-fw { text-align: center; width: 1.25em; }

.ri-24-hours-fill:before { content: "\ea01"; }
.ri-24-hours-line:before { content: "\ea02"; }
.ri-4k-fill:before { content: "\ea03"; }
.ri-4k-line:before { content: "\ea04"; }
.ri-a-b:before { content: "\ea05"; }
.ri-account-box-fill:before { content: "\ea06"; }
.ri-account-box-line:before { content: "\ea07"; }
.ri-account-circle-fill:before { content: "\ea08"; }
.ri-account-circle-line:before { content: "\ea09"; }
.ri-account-pin-box-fill:before { content: "\ea0a"; }
.ri-account-pin-box-line:before { content: "\ea0b"; }
.ri-account-pin-circle-fill:before { content: "\ea0c"; }
.ri-account-pin-circle-line:before { content: "\ea0d"; }
.ri-add-box-fill:before { content: "\ea0e"; }
.ri-add-box-line:before { content: "\ea0f"; }
.ri-add-circle-fill:before { content: "\ea10"; }
.ri-add-circle-line:before { content: "\ea11"; }
.ri-add-fill:before { content: "\ea12"; }
.ri-add-line:before { content: "\ea13"; }
.ri-admin-fill:before { content: "\ea14"; }
.ri-admin-line:before { content: "\ea15"; }
.ri-advertisement-fill:before { content: "\ea16"; }
.ri-advertisement-line:before { content: "\ea17"; }
.ri-airplay-fill:before { content: "\ea18"; }
.ri-airplay-line:before { content: "\ea19"; }
.ri-alarm-fill:before { content: "\ea1a"; }
.ri-alarm-line:before { content: "\ea1b"; }
.ri-alarm-warning-fill:before { content: "\ea1c"; }
.ri-alarm-warning-line:before { content: "\ea1d"; }
.ri-album-fill:before { content: "\ea1e"; }
.ri-album-line:before { content: "\ea1f"; }
.ri-alert-fill:before { content: "\ea20"; }
.ri-alert-line:before { content: "\ea21"; }
.ri-aliens-fill:before { content: "\ea22"; }
.ri-aliens-line:before { content: "\ea23"; }
.ri-align-bottom:before { content: "\ea24"; }
.ri-align-center:before { content: "\ea25"; }
.ri-align-justify:before { content: "\ea26"; }
.ri-align-left:before { content: "\ea27"; }
.ri-align-right:before { content: "\ea28"; }
.ri-align-top:before { content: "\ea29"; }
.ri-align-vertically:before { content: "\ea2a"; }
.ri-alipay-fill:before { content: "\ea2b"; }
.ri-alipay-line:before { content: "\ea2c"; }
.ri-amazon-fill:before { content: "\ea2d"; }
.ri-amazon-line:before { content: "\ea2e"; }
.ri-anchor-fill:before { content: "\ea2f"; }
.ri-anchor-line:before { content: "\ea30"; }
.ri-ancient-gate-fill:before { content: "\ea31"; }
.ri-ancient-gate-line:before { content: "\ea32"; }
.ri-ancient-pavilion-fill:before { content: "\ea33"; }
.ri-ancient-pavilion-line:before { content: "\ea34"; }
.ri-android-fill:before { content: "\ea35"; }
.ri-android-line:before { content: "\ea36"; }
.ri-angularjs-fill:before { content: "\ea37"; }
.ri-angularjs-line:before { content: "\ea38"; }
.ri-anticlockwise-2-fill:before { content: "\ea39"; }
.ri-anticlockwise-2-line:before { content: "\ea3a"; }
.ri-anticlockwise-fill:before { content: "\ea3b"; }
.ri-anticlockwise-line:before { content: "\ea3c"; }
.ri-app-store-fill:before { content: "\ea3d"; }
.ri-app-store-line:before { content: "\ea3e"; }
.ri-apple-fill:before { content: "\ea3f"; }
.ri-apple-line:before { content: "\ea40"; }
.ri-apps-2-fill:before { content: "\ea41"; }
.ri-apps-2-line:before { content: "\ea42"; }
.ri-apps-fill:before { content: "\ea43"; }
.ri-apps-line:before { content: "\ea44"; }
.ri-archive-drawer-fill:before { content: "\ea45"; }
.ri-archive-drawer-line:before { content: "\ea46"; }
.ri-archive-fill:before { content: "\ea47"; }
.ri-archive-line:before { content: "\ea48"; }
.ri-arrow-down-circle-fill:before { content: "\ea49"; }
.ri-arrow-down-circle-line:before { content: "\ea4a"; }
.ri-arrow-down-fill:before { content: "\ea4b"; }
.ri-arrow-down-line:before { content: "\ea4c"; }
.ri-arrow-down-s-fill:before { content: "\ea4d"; }
.ri-arrow-down-s-line:before { content: "\ea4e"; }
.ri-arrow-drop-down-fill:before { content: "\ea4f"; }
.ri-arrow-drop-down-line:before { content: "\ea50"; }
.ri-arrow-drop-left-fill:before { content: "\ea51"; }
.ri-arrow-drop-left-line:before { content: "\ea52"; }
.ri-arrow-drop-right-fill:before { content: "\ea53"; }
.ri-arrow-drop-right-line:before { content: "\ea54"; }
.ri-arrow-drop-up-fill:before { content: "\ea55"; }
.ri-arrow-drop-up-line:before { content: "\ea56"; }
.ri-arrow-go-back-fill:before { content: "\ea57"; }
.ri-arrow-go-back-line:before { content: "\ea58"; }
.ri-arrow-go-forward-fill:before { content: "\ea59"; }
.ri-arrow-go-forward-line:before { content: "\ea5a"; }
.ri-arrow-left-circle-fill:before { content: "\ea5b"; }
.ri-arrow-left-circle-line:before { content: "\ea5c"; }
.ri-arrow-left-down-fill:before { content: "\ea5d"; }
.ri-arrow-left-down-line:before { content: "\ea5e"; }
.ri-arrow-left-fill:before { content: "\ea5f"; }
.ri-arrow-left-line:before { content: "\ea60"; }
.ri-arrow-left-right-fill:before { content: "\ea61"; }
.ri-arrow-left-right-line:before { content: "\ea62"; }
.ri-arrow-left-s-fill:before { content: "\ea63"; }
.ri-arrow-left-s-line:before { content: "\ea64"; }
.ri-arrow-left-up-fill:before { content: "\ea65"; }
.ri-arrow-left-up-line:before { content: "\ea66"; }
.ri-arrow-right-circle-fill:before { content: "\ea67"; }
.ri-arrow-right-circle-line:before { content: "\ea68"; }
.ri-arrow-right-down-fill:before { content: "\ea69"; }
.ri-arrow-right-down-line:before { content: "\ea6a"; }
.ri-arrow-right-fill:before { content: "\ea6b"; }
.ri-arrow-right-line:before { content: "\ea6c"; }
.ri-arrow-right-s-fill:before { content: "\ea6d"; }
.ri-arrow-right-s-line:before { content: "\ea6e"; }
.ri-arrow-right-up-fill:before { content: "\ea6f"; }
.ri-arrow-right-up-line:before { content: "\ea70"; }
.ri-arrow-up-circle-fill:before { content: "\ea71"; }
.ri-arrow-up-circle-line:before { content: "\ea72"; }
.ri-arrow-up-down-fill:before { content: "\ea73"; }
.ri-arrow-up-down-line:before { content: "\ea74"; }
.ri-arrow-up-fill:before { content: "\ea75"; }
.ri-arrow-up-line:before { content: "\ea76"; }
.ri-arrow-up-s-fill:before { content: "\ea77"; }
.ri-arrow-up-s-line:before { content: "\ea78"; }
.ri-artboard-2-fill:before { content: "\ea79"; }
.ri-artboard-2-line:before { content: "\ea7a"; }
.ri-artboard-fill:before { content: "\ea7b"; }
.ri-artboard-line:before { content: "\ea7c"; }
.ri-article-fill:before { content: "\ea7d"; }
.ri-article-line:before { content: "\ea7e"; }
.ri-aspect-ratio-fill:before { content: "\ea7f"; }
.ri-aspect-ratio-line:before { content: "\ea80"; }
.ri-asterisk:before { content: "\ea81"; }
.ri-at-fill:before { content: "\ea82"; }
.ri-at-line:before { content: "\ea83"; }
.ri-attachment-2:before { content: "\ea84"; }
.ri-attachment-fill:before { content: "\ea85"; }
.ri-attachment-line:before { content: "\ea86"; }
.ri-auction-fill:before { content: "\ea87"; }
.ri-auction-line:before { content: "\ea88"; }
.ri-award-fill:before { content: "\ea89"; }
.ri-award-line:before { content: "\ea8a"; }
.ri-baidu-fill:before { content: "\ea8b"; }
.ri-baidu-line:before { content: "\ea8c"; }
.ri-ball-pen-fill:before { content: "\ea8d"; }
.ri-ball-pen-line:before { content: "\ea8e"; }
.ri-bank-card-2-fill:before { content: "\ea8f"; }
.ri-bank-card-2-line:before { content: "\ea90"; }
.ri-bank-card-fill:before { content: "\ea91"; }
.ri-bank-card-line:before { content: "\ea92"; }
.ri-bank-fill:before { content: "\ea93"; }
.ri-bank-line:before { content: "\ea94"; }
.ri-bar-chart-2-fill:before { content: "\ea95"; }
.ri-bar-chart-2-line:before { content: "\ea96"; }
.ri-bar-chart-box-fill:before { content: "\ea97"; }
.ri-bar-chart-box-line:before { content: "\ea98"; }
.ri-bar-chart-fill:before { content: "\ea99"; }
.ri-bar-chart-grouped-fill:before { content: "\ea9a"; }
.ri-bar-chart-grouped-line:before { content: "\ea9b"; }
.ri-bar-chart-horizontal-fill:before { content: "\ea9c"; }
.ri-bar-chart-horizontal-line:before { content: "\ea9d"; }
.ri-bar-chart-line:before { content: "\ea9e"; }
.ri-barcode-box-fill:before { content: "\ea9f"; }
.ri-barcode-box-line:before { content: "\eaa0"; }
.ri-barcode-fill:before { content: "\eaa1"; }
.ri-barcode-line:before { content: "\eaa2"; }
.ri-barricade-fill:before { content: "\eaa3"; }
.ri-barricade-line:before { content: "\eaa4"; }
.ri-base-station-fill:before { content: "\eaa5"; }
.ri-base-station-line:before { content: "\eaa6"; }
.ri-basketball-fill:before { content: "\eaa7"; }
.ri-basketball-line:before { content: "\eaa8"; }
.ri-battery-2-charge-fill:before { content: "\eaa9"; }
.ri-battery-2-charge-line:before { content: "\eaaa"; }
.ri-battery-2-fill:before { content: "\eaab"; }
.ri-battery-2-line:before { content: "\eaac"; }
.ri-battery-charge-fill:before { content: "\eaad"; }
.ri-battery-charge-line:before { content: "\eaae"; }
.ri-battery-fill:before { content: "\eaaf"; }
.ri-battery-line:before { content: "\eab0"; }
.ri-battery-low-fill:before { content: "\eab1"; }
.ri-battery-low-line:before { content: "\eab2"; }
.ri-battery-saver-fill:before { content: "\eab3"; }
.ri-battery-saver-line:before { content: "\eab4"; }
.ri-battery-share-fill:before { content: "\eab5"; }
.ri-battery-share-line:before { content: "\eab6"; }
.ri-bear-smile-fill:before { content: "\eab7"; }
.ri-bear-smile-line:before { content: "\eab8"; }
.ri-behance-fill:before { content: "\eab9"; }
.ri-behance-line:before { content: "\eaba"; }
.ri-bell-fill:before { content: "\eabb"; }
.ri-bell-line:before { content: "\eabc"; }
.ri-bike-fill:before { content: "\eabd"; }
.ri-bike-line:before { content: "\eabe"; }
.ri-bilibili-fill:before { content: "\eabf"; }
.ri-bilibili-line:before { content: "\eac0"; }
.ri-bill-fill:before { content: "\eac1"; }
.ri-bill-line:before { content: "\eac2"; }
.ri-billiards-fill:before { content: "\eac3"; }
.ri-billiards-line:before { content: "\eac4"; }
.ri-bit-coin-fill:before { content: "\eac5"; }
.ri-bit-coin-line:before { content: "\eac6"; }
.ri-blaze-fill:before { content: "\eac7"; }
.ri-blaze-line:before { content: "\eac8"; }
.ri-bluetooth-connect-fill:before { content: "\eac9"; }
.ri-bluetooth-connect-line:before { content: "\eaca"; }
.ri-bluetooth-fill:before { content: "\eacb"; }
.ri-bluetooth-line:before { content: "\eacc"; }
.ri-blur-off-fill:before { content: "\eacd"; }
.ri-blur-off-line:before { content: "\eace"; }
.ri-body-scan-fill:before { content: "\eacf"; }
.ri-body-scan-line:before { content: "\ead0"; }
.ri-bold:before { content: "\ead1"; }
.ri-book-2-fill:before { content: "\ead2"; }
.ri-book-2-line:before { content: "\ead3"; }
.ri-book-3-fill:before { content: "\ead4"; }
.ri-book-3-line:before { content: "\ead5"; }
.ri-book-fill:before { content: "\ead6"; }
.ri-book-line:before { content: "\ead7"; }
.ri-book-mark-fill:before { content: "\ead8"; }
.ri-book-mark-line:before { content: "\ead9"; }
.ri-book-open-fill:before { content: "\eada"; }
.ri-book-open-line:before { content: "\eadb"; }
.ri-book-read-fill:before { content: "\eadc"; }
.ri-book-read-line:before { content: "\eadd"; }
.ri-booklet-fill:before { content: "\eade"; }
.ri-booklet-line:before { content: "\eadf"; }
.ri-bookmark-2-fill:before { content: "\eae0"; }
.ri-bookmark-2-line:before { content: "\eae1"; }
.ri-bookmark-3-fill:before { content: "\eae2"; }
.ri-bookmark-3-line:before { content: "\eae3"; }
.ri-bookmark-fill:before { content: "\eae4"; }
.ri-bookmark-line:before { content: "\eae5"; }
.ri-boxing-fill:before { content: "\eae6"; }
.ri-boxing-line:before { content: "\eae7"; }
.ri-braces-fill:before { content: "\eae8"; }
.ri-braces-line:before { content: "\eae9"; }
.ri-brackets-fill:before { content: "\eaea"; }
.ri-brackets-line:before { content: "\eaeb"; }
.ri-briefcase-2-fill:before { content: "\eaec"; }
.ri-briefcase-2-line:before { content: "\eaed"; }
.ri-briefcase-3-fill:before { content: "\eaee"; }
.ri-briefcase-3-line:before { content: "\eaef"; }
.ri-briefcase-4-fill:before { content: "\eaf0"; }
.ri-briefcase-4-line:before { content: "\eaf1"; }
.ri-briefcase-5-fill:before { content: "\eaf2"; }
.ri-briefcase-5-line:before { content: "\eaf3"; }
.ri-briefcase-fill:before { content: "\eaf4"; }
.ri-briefcase-line:before { content: "\eaf5"; }
.ri-bring-forward:before { content: "\eaf6"; }
.ri-bring-to-front:before { content: "\eaf7"; }
.ri-broadcast-fill:before { content: "\eaf8"; }
.ri-broadcast-line:before { content: "\eaf9"; }
.ri-brush-2-fill:before { content: "\eafa"; }
.ri-brush-2-line:before { content: "\eafb"; }
.ri-brush-3-fill:before { content: "\eafc"; }
.ri-brush-3-line:before { content: "\eafd"; }
.ri-brush-4-fill:before { content: "\eafe"; }
.ri-brush-4-line:before { content: "\eaff"; }
.ri-brush-fill:before { content: "\eb00"; }
.ri-brush-line:before { content: "\eb01"; }
.ri-bubble-chart-fill:before { content: "\eb02"; }
.ri-bubble-chart-line:before { content: "\eb03"; }
.ri-bug-2-fill:before { content: "\eb04"; }
.ri-bug-2-line:before { content: "\eb05"; }
.ri-bug-fill:before { content: "\eb06"; }
.ri-bug-line:before { content: "\eb07"; }
.ri-building-2-fill:before { content: "\eb08"; }
.ri-building-2-line:before { content: "\eb09"; }
.ri-building-3-fill:before { content: "\eb0a"; }
.ri-building-3-line:before { content: "\eb0b"; }
.ri-building-4-fill:before { content: "\eb0c"; }
.ri-building-4-line:before { content: "\eb0d"; }
.ri-building-fill:before { content: "\eb0e"; }
.ri-building-line:before { content: "\eb0f"; }
.ri-bus-2-fill:before { content: "\eb10"; }
.ri-bus-2-line:before { content: "\eb11"; }
.ri-bus-fill:before { content: "\eb12"; }
.ri-bus-line:before { content: "\eb13"; }
.ri-bus-wifi-fill:before { content: "\eb14"; }
.ri-bus-wifi-line:before { content: "\eb15"; }
.ri-cactus-fill:before { content: "\eb16"; }
.ri-cactus-line:before { content: "\eb17"; }
.ri-cake-2-fill:before { content: "\eb18"; }
.ri-cake-2-line:before { content: "\eb19"; }
.ri-cake-3-fill:before { content: "\eb1a"; }
.ri-cake-3-line:before { content: "\eb1b"; }
.ri-cake-fill:before { content: "\eb1c"; }
.ri-cake-line:before { content: "\eb1d"; }
.ri-calculator-fill:before { content: "\eb1e"; }
.ri-calculator-line:before { content: "\eb1f"; }
.ri-calendar-2-fill:before { content: "\eb20"; }
.ri-calendar-2-line:before { content: "\eb21"; }
.ri-calendar-check-fill:before { content: "\eb22"; }
.ri-calendar-check-line:before { content: "\eb23"; }
.ri-calendar-event-fill:before { content: "\eb24"; }
.ri-calendar-event-line:before { content: "\eb25"; }
.ri-calendar-fill:before { content: "\eb26"; }
.ri-calendar-line:before { content: "\eb27"; }
.ri-calendar-todo-fill:before { content: "\eb28"; }
.ri-calendar-todo-line:before { content: "\eb29"; }
.ri-camera-2-fill:before { content: "\eb2a"; }
.ri-camera-2-line:before { content: "\eb2b"; }
.ri-camera-3-fill:before { content: "\eb2c"; }
.ri-camera-3-line:before { content: "\eb2d"; }
.ri-camera-fill:before { content: "\eb2e"; }
.ri-camera-lens-fill:before { content: "\eb2f"; }
.ri-camera-lens-line:before { content: "\eb30"; }
.ri-camera-line:before { content: "\eb31"; }
.ri-camera-off-fill:before { content: "\eb32"; }
.ri-camera-off-line:before { content: "\eb33"; }
.ri-camera-switch-fill:before { content: "\eb34"; }
.ri-camera-switch-line:before { content: "\eb35"; }
.ri-capsule-fill:before { content: "\eb36"; }
.ri-capsule-line:before { content: "\eb37"; }
.ri-car-fill:before { content: "\eb38"; }
.ri-car-line:before { content: "\eb39"; }
.ri-car-washing-fill:before { content: "\eb3a"; }
.ri-car-washing-line:before { content: "\eb3b"; }
.ri-caravan-fill:before { content: "\eb3c"; }
.ri-caravan-line:before { content: "\eb3d"; }
.ri-cast-fill:before { content: "\eb3e"; }
.ri-cast-line:before { content: "\eb3f"; }
.ri-cellphone-fill:before { content: "\eb40"; }
.ri-cellphone-line:before { content: "\eb41"; }
.ri-celsius-fill:before { content: "\eb42"; }
.ri-celsius-line:before { content: "\eb43"; }
.ri-centos-fill:before { content: "\eb44"; }
.ri-centos-line:before { content: "\eb45"; }
.ri-character-recognition-fill:before { content: "\eb46"; }
.ri-character-recognition-line:before { content: "\eb47"; }
.ri-charging-pile-2-fill:before { content: "\eb48"; }
.ri-charging-pile-2-line:before { content: "\eb49"; }
.ri-charging-pile-fill:before { content: "\eb4a"; }
.ri-charging-pile-line:before { content: "\eb4b"; }
.ri-chat-1-fill:before { content: "\eb4c"; }
.ri-chat-1-line:before { content: "\eb4d"; }
.ri-chat-2-fill:before { content: "\eb4e"; }
.ri-chat-2-line:before { content: "\eb4f"; }
.ri-chat-3-fill:before { content: "\eb50"; }
.ri-chat-3-line:before { content: "\eb51"; }
.ri-chat-4-fill:before { content: "\eb52"; }
.ri-chat-4-line:before { content: "\eb53"; }
.ri-chat-check-fill:before { content: "\eb54"; }
.ri-chat-check-line:before { content: "\eb55"; }
.ri-chat-delete-fill:before { content: "\eb56"; }
.ri-chat-delete-line:before { content: "\eb57"; }
.ri-chat-download-fill:before { content: "\eb58"; }
.ri-chat-download-line:before { content: "\eb59"; }
.ri-chat-follow-up-fill:before { content: "\eb5a"; }
.ri-chat-follow-up-line:before { content: "\eb5b"; }
.ri-chat-forward-fill:before { content: "\eb5c"; }
.ri-chat-forward-line:before { content: "\eb5d"; }
.ri-chat-heart-fill:before { content: "\eb5e"; }
.ri-chat-heart-line:before { content: "\eb5f"; }
.ri-chat-history-fill:before { content: "\eb60"; }
.ri-chat-history-line:before { content: "\eb61"; }
.ri-chat-new-fill:before { content: "\eb62"; }
.ri-chat-new-line:before { content: "\eb63"; }
.ri-chat-off-fill:before { content: "\eb64"; }
.ri-chat-off-line:before { content: "\eb65"; }
.ri-chat-poll-fill:before { content: "\eb66"; }
.ri-chat-poll-line:before { content: "\eb67"; }
.ri-chat-private-fill:before { content: "\eb68"; }
.ri-chat-private-line:before { content: "\eb69"; }
.ri-chat-quote-fill:before { content: "\eb6a"; }
.ri-chat-quote-line:before { content: "\eb6b"; }
.ri-chat-settings-fill:before { content: "\eb6c"; }
.ri-chat-settings-line:before { content: "\eb6d"; }
.ri-chat-smile-2-fill:before { content: "\eb6e"; }
.ri-chat-smile-2-line:before { content: "\eb6f"; }
.ri-chat-smile-3-fill:before { content: "\eb70"; }
.ri-chat-smile-3-line:before { content: "\eb71"; }
.ri-chat-smile-fill:before { content: "\eb72"; }
.ri-chat-smile-line:before { content: "\eb73"; }
.ri-chat-upload-fill:before { content: "\eb74"; }
.ri-chat-upload-line:before { content: "\eb75"; }
.ri-chat-voice-fill:before { content: "\eb76"; }
.ri-chat-voice-line:before { content: "\eb77"; }
.ri-check-double-fill:before { content: "\eb78"; }
.ri-check-double-line:before { content: "\eb79"; }
.ri-check-fill:before { content: "\eb7a"; }
.ri-check-line:before { content: "\eb7b"; }
.ri-checkbox-blank-circle-fill:before { content: "\eb7c"; }
.ri-checkbox-blank-circle-line:before { content: "\eb7d"; }
.ri-checkbox-blank-fill:before { content: "\eb7e"; }
.ri-checkbox-blank-line:before { content: "\eb7f"; }
.ri-checkbox-circle-fill:before { content: "\eb80"; }
.ri-checkbox-circle-line:before { content: "\eb81"; }
.ri-checkbox-fill:before { content: "\eb82"; }
.ri-checkbox-indeterminate-fill:before { content: "\eb83"; }
.ri-checkbox-indeterminate-line:before { content: "\eb84"; }
.ri-checkbox-line:before { content: "\eb85"; }
.ri-checkbox-multiple-blank-fill:before { content: "\eb86"; }
.ri-checkbox-multiple-blank-line:before { content: "\eb87"; }
.ri-checkbox-multiple-fill:before { content: "\eb88"; }
.ri-checkbox-multiple-line:before { content: "\eb89"; }
.ri-china-railway-fill:before { content: "\eb8a"; }
.ri-china-railway-line:before { content: "\eb8b"; }
.ri-chrome-fill:before { content: "\eb8c"; }
.ri-chrome-line:before { content: "\eb8d"; }
.ri-clapperboard-fill:before { content: "\eb8e"; }
.ri-clapperboard-line:before { content: "\eb8f"; }
.ri-clipboard-fill:before { content: "\eb90"; }
.ri-clipboard-line:before { content: "\eb91"; }
.ri-clockwise-2-fill:before { content: "\eb92"; }
.ri-clockwise-2-line:before { content: "\eb93"; }
.ri-clockwise-fill:before { content: "\eb94"; }
.ri-clockwise-line:before { content: "\eb95"; }
.ri-close-circle-fill:before { content: "\eb96"; }
.ri-close-circle-line:before { content: "\eb97"; }
.ri-close-fill:before { content: "\eb98"; }
.ri-close-line:before { content: "\eb99"; }
.ri-closed-captioning-fill:before { content: "\eb9a"; }
.ri-closed-captioning-line:before { content: "\eb9b"; }
.ri-cloud-fill:before { content: "\eb9c"; }
.ri-cloud-line:before { content: "\eb9d"; }
.ri-cloud-off-fill:before { content: "\eb9e"; }
.ri-cloud-off-line:before { content: "\eb9f"; }
.ri-cloud-windy-fill:before { content: "\eba0"; }
.ri-cloud-windy-line:before { content: "\eba1"; }
.ri-cloudy-2-fill:before { content: "\eba2"; }
.ri-cloudy-2-line:before { content: "\eba3"; }
.ri-cloudy-fill:before { content: "\eba4"; }
.ri-cloudy-line:before { content: "\eba5"; }
.ri-code-box-fill:before { content: "\eba6"; }
.ri-code-box-line:before { content: "\eba7"; }
.ri-code-fill:before { content: "\eba8"; }
.ri-code-line:before { content: "\eba9"; }
.ri-code-s-fill:before { content: "\ebaa"; }
.ri-code-s-line:before { content: "\ebab"; }
.ri-code-s-slash-fill:before { content: "\ebac"; }
.ri-code-s-slash-line:before { content: "\ebad"; }
.ri-code-view:before { content: "\ebae"; }
.ri-codepen-fill:before { content: "\ebaf"; }
.ri-codepen-line:before { content: "\ebb0"; }
.ri-coin-fill:before { content: "\ebb1"; }
.ri-coin-line:before { content: "\ebb2"; }
.ri-coins-fill:before { content: "\ebb3"; }
.ri-coins-line:before { content: "\ebb4"; }
.ri-collage-fill:before { content: "\ebb5"; }
.ri-collage-line:before { content: "\ebb6"; }
.ri-command-fill:before { content: "\ebb7"; }
.ri-command-line:before { content: "\ebb8"; }
.ri-community-fill:before { content: "\ebb9"; }
.ri-community-line:before { content: "\ebba"; }
.ri-compass-2-fill:before { content: "\ebbb"; }
.ri-compass-2-line:before { content: "\ebbc"; }
.ri-compass-3-fill:before { content: "\ebbd"; }
.ri-compass-3-line:before { content: "\ebbe"; }
.ri-compass-4-fill:before { content: "\ebbf"; }
.ri-compass-4-line:before { content: "\ebc0"; }
.ri-compass-discover-fill:before { content: "\ebc1"; }
.ri-compass-discover-line:before { content: "\ebc2"; }
.ri-compass-fill:before { content: "\ebc3"; }
.ri-compass-line:before { content: "\ebc4"; }
.ri-compasses-2-fill:before { content: "\ebc5"; }
.ri-compasses-2-line:before { content: "\ebc6"; }
.ri-compasses-fill:before { content: "\ebc7"; }
.ri-compasses-line:before { content: "\ebc8"; }
.ri-computer-fill:before { content: "\ebc9"; }
.ri-computer-line:before { content: "\ebca"; }
.ri-contacts-book-2-fill:before { content: "\ebcb"; }
.ri-contacts-book-2-line:before { content: "\ebcc"; }
.ri-contacts-book-fill:before { content: "\ebcd"; }
.ri-contacts-book-line:before { content: "\ebce"; }
.ri-contacts-book-upload-fill:before { content: "\ebcf"; }
.ri-contacts-book-upload-line:before { content: "\ebd0"; }
.ri-contacts-fill:before { content: "\ebd1"; }
.ri-contacts-line:before { content: "\ebd2"; }
.ri-contrast-2-fill:before { content: "\ebd3"; }
.ri-contrast-2-line:before { content: "\ebd4"; }
.ri-contrast-drop-2-fill:before { content: "\ebd5"; }
.ri-contrast-drop-2-line:before { content: "\ebd6"; }
.ri-contrast-drop-fill:before { content: "\ebd7"; }
.ri-contrast-drop-line:before { content: "\ebd8"; }
.ri-contrast-fill:before { content: "\ebd9"; }
.ri-contrast-line:before { content: "\ebda"; }
.ri-copper-coin-fill:before { content: "\ebdb"; }
.ri-copper-coin-line:before { content: "\ebdc"; }
.ri-copper-diamond-fill:before { content: "\ebdd"; }
.ri-copper-diamond-line:before { content: "\ebde"; }
.ri-copyleft-fill:before { content: "\ebdf"; }
.ri-copyleft-line:before { content: "\ebe0"; }
.ri-copyright-fill:before { content: "\ebe1"; }
.ri-copyright-line:before { content: "\ebe2"; }
.ri-coreos-fill:before { content: "\ebe3"; }
.ri-coreos-line:before { content: "\ebe4"; }
.ri-coupon-2-fill:before { content: "\ebe5"; }
.ri-coupon-2-line:before { content: "\ebe6"; }
.ri-coupon-3-fill:before { content: "\ebe7"; }
.ri-coupon-3-line:before { content: "\ebe8"; }
.ri-coupon-4-fill:before { content: "\ebe9"; }
.ri-coupon-4-line:before { content: "\ebea"; }
.ri-coupon-5-fill:before { content: "\ebeb"; }
.ri-coupon-5-line:before { content: "\ebec"; }
.ri-coupon-fill:before { content: "\ebed"; }
.ri-coupon-line:before { content: "\ebee"; }
.ri-cpu-fill:before { content: "\ebef"; }
.ri-cpu-line:before { content: "\ebf0"; }
.ri-creative-commons-by-fill:before { content: "\ebf1"; }
.ri-creative-commons-by-line:before { content: "\ebf2"; }
.ri-creative-commons-fill:before { content: "\ebf3"; }
.ri-creative-commons-line:before { content: "\ebf4"; }
.ri-creative-commons-nc-fill:before { content: "\ebf5"; }
.ri-creative-commons-nc-line:before { content: "\ebf6"; }
.ri-creative-commons-nd-fill:before { content: "\ebf7"; }
.ri-creative-commons-nd-line:before { content: "\ebf8"; }
.ri-creative-commons-sa-fill:before { content: "\ebf9"; }
.ri-creative-commons-sa-line:before { content: "\ebfa"; }
.ri-creative-commons-zero-fill:before { content: "\ebfb"; }
.ri-creative-commons-zero-line:before { content: "\ebfc"; }
.ri-criminal-fill:before { content: "\ebfd"; }
.ri-criminal-line:before { content: "\ebfe"; }
.ri-crop-2-fill:before { content: "\ebff"; }
.ri-crop-2-line:before { content: "\ec00"; }
.ri-crop-fill:before { content: "\ec01"; }
.ri-crop-line:before { content: "\ec02"; }
.ri-css3-fill:before { content: "\ec03"; }
.ri-css3-line:before { content: "\ec04"; }
.ri-cup-fill:before { content: "\ec05"; }
.ri-cup-line:before { content: "\ec06"; }
.ri-currency-fill:before { content: "\ec07"; }
.ri-currency-line:before { content: "\ec08"; }
.ri-cursor-fill:before { content: "\ec09"; }
.ri-cursor-line:before { content: "\ec0a"; }
.ri-customer-service-2-fill:before { content: "\ec0b"; }
.ri-customer-service-2-line:before { content: "\ec0c"; }
.ri-customer-service-fill:before { content: "\ec0d"; }
.ri-customer-service-line:before { content: "\ec0e"; }
.ri-dashboard-2-fill:before { content: "\ec0f"; }
.ri-dashboard-2-line:before { content: "\ec10"; }
.ri-dashboard-3-fill:before { content: "\ec11"; }
.ri-dashboard-3-line:before { content: "\ec12"; }
.ri-dashboard-fill:before { content: "\ec13"; }
.ri-dashboard-line:before { content: "\ec14"; }
.ri-database-2-fill:before { content: "\ec15"; }
.ri-database-2-line:before { content: "\ec16"; }
.ri-database-fill:before { content: "\ec17"; }
.ri-database-line:before { content: "\ec18"; }
.ri-delete-back-2-fill:before { content: "\ec19"; }
.ri-delete-back-2-line:before { content: "\ec1a"; }
.ri-delete-back-fill:before { content: "\ec1b"; }
.ri-delete-back-line:before { content: "\ec1c"; }
.ri-delete-bin-2-fill:before { content: "\ec1d"; }
.ri-delete-bin-2-line:before { content: "\ec1e"; }
.ri-delete-bin-3-fill:before { content: "\ec1f"; }
.ri-delete-bin-3-line:before { content: "\ec20"; }
.ri-delete-bin-4-fill:before { content: "\ec21"; }
.ri-delete-bin-4-line:before { content: "\ec22"; }
.ri-delete-bin-5-fill:before { content: "\ec23"; }
.ri-delete-bin-5-line:before { content: "\ec24"; }
.ri-delete-bin-6-fill:before { content: "\ec25"; }
.ri-delete-bin-6-line:before { content: "\ec26"; }
.ri-delete-bin-7-fill:before { content: "\ec27"; }
.ri-delete-bin-7-line:before { content: "\ec28"; }
.ri-delete-bin-fill:before { content: "\ec29"; }
.ri-delete-bin-line:before { content: "\ec2a"; }
.ri-delete-column:before { content: "\ec2b"; }
.ri-delete-row:before { content: "\ec2c"; }
.ri-device-fill:before { content: "\ec2d"; }
.ri-device-line:before { content: "\ec2e"; }
.ri-device-recover-fill:before { content: "\ec2f"; }
.ri-device-recover-line:before { content: "\ec30"; }
.ri-dingding-fill:before { content: "\ec31"; }
.ri-dingding-line:before { content: "\ec32"; }
.ri-direction-fill:before { content: "\ec33"; }
.ri-direction-line:before { content: "\ec34"; }
.ri-disc-fill:before { content: "\ec35"; }
.ri-disc-line:before { content: "\ec36"; }
.ri-discord-fill:before { content: "\ec37"; }
.ri-discord-line:before { content: "\ec38"; }
.ri-discuss-fill:before { content: "\ec39"; }
.ri-discuss-line:before { content: "\ec3a"; }
.ri-dislike-fill:before { content: "\ec3b"; }
.ri-dislike-line:before { content: "\ec3c"; }
.ri-disqus-fill:before { content: "\ec3d"; }
.ri-disqus-line:before { content: "\ec3e"; }
.ri-divide-fill:before { content: "\ec3f"; }
.ri-divide-line:before { content: "\ec40"; }
.ri-donut-chart-fill:before { content: "\ec41"; }
.ri-donut-chart-line:before { content: "\ec42"; }
.ri-door-closed-fill:before { content: "\ec43"; }
.ri-door-closed-line:before { content: "\ec44"; }
.ri-door-fill:before { content: "\ec45"; }
.ri-door-line:before { content: "\ec46"; }
.ri-door-lock-box-fill:before { content: "\ec47"; }
.ri-door-lock-box-line:before { content: "\ec48"; }
.ri-door-lock-fill:before { content: "\ec49"; }
.ri-door-lock-line:before { content: "\ec4a"; }
.ri-door-open-fill:before { content: "\ec4b"; }
.ri-door-open-line:before { content: "\ec4c"; }
.ri-dossier-fill:before { content: "\ec4d"; }
.ri-dossier-line:before { content: "\ec4e"; }
.ri-douban-fill:before { content: "\ec4f"; }
.ri-douban-line:before { content: "\ec50"; }
.ri-double-quotes-l:before { content: "\ec51"; }
.ri-double-quotes-r:before { content: "\ec52"; }
.ri-download-2-fill:before { content: "\ec53"; }
.ri-download-2-line:before { content: "\ec54"; }
.ri-download-cloud-2-fill:before { content: "\ec55"; }
.ri-download-cloud-2-line:before { content: "\ec56"; }
.ri-download-cloud-fill:before { content: "\ec57"; }
.ri-download-cloud-line:before { content: "\ec58"; }
.ri-download-fill:before { content: "\ec59"; }
.ri-download-line:before { content: "\ec5a"; }
.ri-draft-fill:before { content: "\ec5b"; }
.ri-draft-line:before { content: "\ec5c"; }
.ri-drag-drop-fill:before { content: "\ec5d"; }
.ri-drag-drop-line:before { content: "\ec5e"; }
.ri-drag-move-2-fill:before { content: "\ec5f"; }
.ri-drag-move-2-line:before { content: "\ec60"; }
.ri-drag-move-fill:before { content: "\ec61"; }
.ri-drag-move-line:before { content: "\ec62"; }
.ri-dribbble-fill:before { content: "\ec63"; }
.ri-dribbble-line:before { content: "\ec64"; }
.ri-drive-fill:before { content: "\ec65"; }
.ri-drive-line:before { content: "\ec66"; }
.ri-drizzle-fill:before { content: "\ec67"; }
.ri-drizzle-line:before { content: "\ec68"; }
.ri-drop-fill:before { content: "\ec69"; }
.ri-drop-line:before { content: "\ec6a"; }
.ri-dropbox-fill:before { content: "\ec6b"; }
.ri-dropbox-line:before { content: "\ec6c"; }
.ri-dual-sim-1-fill:before { content: "\ec6d"; }
.ri-dual-sim-1-line:before { content: "\ec6e"; }
.ri-dual-sim-2-fill:before { content: "\ec6f"; }
.ri-dual-sim-2-line:before { content: "\ec70"; }
.ri-dv-fill:before { content: "\ec71"; }
.ri-dv-line:before { content: "\ec72"; }
.ri-dvd-fill:before { content: "\ec73"; }
.ri-dvd-line:before { content: "\ec74"; }
.ri-e-bike-2-fill:before { content: "\ec75"; }
.ri-e-bike-2-line:before { content: "\ec76"; }
.ri-e-bike-fill:before { content: "\ec77"; }
.ri-e-bike-line:before { content: "\ec78"; }
.ri-earth-fill:before { content: "\ec79"; }
.ri-earth-line:before { content: "\ec7a"; }
.ri-earthquake-fill:before { content: "\ec7b"; }
.ri-earthquake-line:before { content: "\ec7c"; }
.ri-edge-fill:before { content: "\ec7d"; }
.ri-edge-line:before { content: "\ec7e"; }
.ri-edit-2-fill:before { content: "\ec7f"; }
.ri-edit-2-line:before { content: "\ec80"; }
.ri-edit-box-fill:before { content: "\ec81"; }
.ri-edit-box-line:before { content: "\ec82"; }
.ri-edit-circle-fill:before { content: "\ec83"; }
.ri-edit-circle-line:before { content: "\ec84"; }
.ri-edit-fill:before { content: "\ec85"; }
.ri-edit-line:before { content: "\ec86"; }
.ri-eject-fill:before { content: "\ec87"; }
.ri-eject-line:before { content: "\ec88"; }
.ri-emotion-2-fill:before { content: "\ec89"; }
.ri-emotion-2-line:before { content: "\ec8a"; }
.ri-emotion-fill:before { content: "\ec8b"; }
.ri-emotion-happy-fill:before { content: "\ec8c"; }
.ri-emotion-happy-line:before { content: "\ec8d"; }
.ri-emotion-laugh-fill:before { content: "\ec8e"; }
.ri-emotion-laugh-line:before { content: "\ec8f"; }
.ri-emotion-line:before { content: "\ec90"; }
.ri-emotion-normal-fill:before { content: "\ec91"; }
.ri-emotion-normal-line:before { content: "\ec92"; }
.ri-emotion-sad-fill:before { content: "\ec93"; }
.ri-emotion-sad-line:before { content: "\ec94"; }
.ri-emotion-unhappy-fill:before { content: "\ec95"; }
.ri-emotion-unhappy-line:before { content: "\ec96"; }
.ri-empathize-fill:before { content: "\ec97"; }
.ri-empathize-line:before { content: "\ec98"; }
.ri-emphasis-cn:before { content: "\ec99"; }
.ri-emphasis:before { content: "\ec9a"; }
.ri-english-input:before { content: "\ec9b"; }
.ri-equalizer-fill:before { content: "\ec9c"; }
.ri-equalizer-line:before { content: "\ec9d"; }
.ri-eraser-fill:before { content: "\ec9e"; }
.ri-eraser-line:before { content: "\ec9f"; }
.ri-error-warning-fill:before { content: "\eca0"; }
.ri-error-warning-line:before { content: "\eca1"; }
.ri-evernote-fill:before { content: "\eca2"; }
.ri-evernote-line:before { content: "\eca3"; }
.ri-exchange-box-fill:before { content: "\eca4"; }
.ri-exchange-box-line:before { content: "\eca5"; }
.ri-exchange-cny-fill:before { content: "\eca6"; }
.ri-exchange-cny-line:before { content: "\eca7"; }
.ri-exchange-dollar-fill:before { content: "\eca8"; }
.ri-exchange-dollar-line:before { content: "\eca9"; }
.ri-exchange-fill:before { content: "\ecaa"; }
.ri-exchange-funds-fill:before { content: "\ecab"; }
.ri-exchange-funds-line:before { content: "\ecac"; }
.ri-exchange-line:before { content: "\ecad"; }
.ri-external-link-fill:before { content: "\ecae"; }
.ri-external-link-line:before { content: "\ecaf"; }
.ri-eye-2-fill:before { content: "\ecb0"; }
.ri-eye-2-line:before { content: "\ecb1"; }
.ri-eye-close-fill:before { content: "\ecb2"; }
.ri-eye-close-line:before { content: "\ecb3"; }
.ri-eye-fill:before { content: "\ecb4"; }
.ri-eye-line:before { content: "\ecb5"; }
.ri-eye-off-fill:before { content: "\ecb6"; }
.ri-eye-off-line:before { content: "\ecb7"; }
.ri-facebook-box-fill:before { content: "\ecb8"; }
.ri-facebook-box-line:before { content: "\ecb9"; }
.ri-facebook-circle-fill:before { content: "\ecba"; }
.ri-facebook-circle-line:before { content: "\ecbb"; }
.ri-facebook-fill:before { content: "\ecbc"; }
.ri-facebook-line:before { content: "\ecbd"; }
.ri-fahrenheit-fill:before { content: "\ecbe"; }
.ri-fahrenheit-line:before { content: "\ecbf"; }
.ri-feedback-fill:before { content: "\ecc0"; }
.ri-feedback-line:before { content: "\ecc1"; }
.ri-file-2-fill:before { content: "\ecc2"; }
.ri-file-2-line:before { content: "\ecc3"; }
.ri-file-3-fill:before { content: "\ecc4"; }
.ri-file-3-line:before { content: "\ecc5"; }
.ri-file-4-fill:before { content: "\ecc6"; }
.ri-file-4-line:before { content: "\ecc7"; }
.ri-file-add-fill:before { content: "\ecc8"; }
.ri-file-add-line:before { content: "\ecc9"; }
.ri-file-chart-2-fill:before { content: "\ecca"; }
.ri-file-chart-2-line:before { content: "\eccb"; }
.ri-file-chart-fill:before { content: "\eccc"; }
.ri-file-chart-line:before { content: "\eccd"; }
.ri-file-cloud-fill:before { content: "\ecce"; }
.ri-file-cloud-line:before { content: "\eccf"; }
.ri-file-code-fill:before { content: "\ecd0"; }
.ri-file-code-line:before { content: "\ecd1"; }
.ri-file-copy-2-fill:before { content: "\ecd2"; }
.ri-file-copy-2-line:before { content: "\ecd3"; }
.ri-file-copy-fill:before { content: "\ecd4"; }
.ri-file-copy-line:before { content: "\ecd5"; }
.ri-file-damage-fill:before { content: "\ecd6"; }
.ri-file-damage-line:before { content: "\ecd7"; }
.ri-file-download-fill:before { content: "\ecd8"; }
.ri-file-download-line:before { content: "\ecd9"; }
.ri-file-edit-fill:before { content: "\ecda"; }
.ri-file-edit-line:before { content: "\ecdb"; }
.ri-file-excel-2-fill:before { content: "\ecdc"; }
.ri-file-excel-2-line:before { content: "\ecdd"; }
.ri-file-excel-fill:before { content: "\ecde"; }
.ri-file-excel-line:before { content: "\ecdf"; }
.ri-file-fill:before { content: "\ece0"; }
.ri-file-forbid-fill:before { content: "\ece1"; }
.ri-file-forbid-line:before { content: "\ece2"; }
.ri-file-gif-fill:before { content: "\ece3"; }
.ri-file-gif-line:before { content: "\ece4"; }
.ri-file-history-fill:before { content: "\ece5"; }
.ri-file-history-line:before { content: "\ece6"; }
.ri-file-hwp-fill:before { content: "\ece7"; }
.ri-file-hwp-line:before { content: "\ece8"; }
.ri-file-info-fill:before { content: "\ece9"; }
.ri-file-info-line:before { content: "\ecea"; }
.ri-file-line:before { content: "\eceb"; }
.ri-file-list-2-fill:before { content: "\ecec"; }
.ri-file-list-2-line:before { content: "\eced"; }
.ri-file-list-3-fill:before { content: "\ecee"; }
.ri-file-list-3-line:before { content: "\ecef"; }
.ri-file-list-fill:before { content: "\ecf0"; }
.ri-file-list-line:before { content: "\ecf1"; }
.ri-file-lock-fill:before { content: "\ecf2"; }
.ri-file-lock-line:before { content: "\ecf3"; }
.ri-file-mark-fill:before { content: "\ecf4"; }
.ri-file-mark-line:before { content: "\ecf5"; }
.ri-file-music-fill:before { content: "\ecf6"; }
.ri-file-music-line:before { content: "\ecf7"; }
.ri-file-paper-2-fill:before { content: "\ecf8"; }
.ri-file-paper-2-line:before { content: "\ecf9"; }
.ri-file-paper-fill:before { content: "\ecfa"; }
.ri-file-paper-line:before { content: "\ecfb"; }
.ri-file-pdf-fill:before { content: "\ecfc"; }
.ri-file-pdf-line:before { content: "\ecfd"; }
.ri-file-ppt-2-fill:before { content: "\ecfe"; }
.ri-file-ppt-2-line:before { content: "\ecff"; }
.ri-file-ppt-fill:before { content: "\ed00"; }
.ri-file-ppt-line:before { content: "\ed01"; }
.ri-file-reduce-fill:before { content: "\ed02"; }
.ri-file-reduce-line:before { content: "\ed03"; }
.ri-file-search-fill:before { content: "\ed04"; }
.ri-file-search-line:before { content: "\ed05"; }
.ri-file-settings-fill:before { content: "\ed06"; }
.ri-file-settings-line:before { content: "\ed07"; }
.ri-file-shield-2-fill:before { content: "\ed08"; }
.ri-file-shield-2-line:before { content: "\ed09"; }
.ri-file-shield-fill:before { content: "\ed0a"; }
.ri-file-shield-line:before { content: "\ed0b"; }
.ri-file-shred-fill:before { content: "\ed0c"; }
.ri-file-shred-line:before { content: "\ed0d"; }
.ri-file-text-fill:before { content: "\ed0e"; }
.ri-file-text-line:before { content: "\ed0f"; }
.ri-file-transfer-fill:before { content: "\ed10"; }
.ri-file-transfer-line:before { content: "\ed11"; }
.ri-file-unknow-fill:before { content: "\ed12"; }
.ri-file-unknow-line:before { content: "\ed13"; }
.ri-file-upload-fill:before { content: "\ed14"; }
.ri-file-upload-line:before { content: "\ed15"; }
.ri-file-user-fill:before { content: "\ed16"; }
.ri-file-user-line:before { content: "\ed17"; }
.ri-file-warning-fill:before { content: "\ed18"; }
.ri-file-warning-line:before { content: "\ed19"; }
.ri-file-word-2-fill:before { content: "\ed1a"; }
.ri-file-word-2-line:before { content: "\ed1b"; }
.ri-file-word-fill:before { content: "\ed1c"; }
.ri-file-word-line:before { content: "\ed1d"; }
.ri-file-zip-fill:before { content: "\ed1e"; }
.ri-file-zip-line:before { content: "\ed1f"; }
.ri-film-fill:before { content: "\ed20"; }
.ri-film-line:before { content: "\ed21"; }
.ri-filter-2-fill:before { content: "\ed22"; }
.ri-filter-2-line:before { content: "\ed23"; }
.ri-filter-3-fill:before { content: "\ed24"; }
.ri-filter-3-line:before { content: "\ed25"; }
.ri-filter-fill:before { content: "\ed26"; }
.ri-filter-line:before { content: "\ed27"; }
.ri-filter-off-fill:before { content: "\ed28"; }
.ri-filter-off-line:before { content: "\ed29"; }
.ri-find-replace-fill:before { content: "\ed2a"; }
.ri-find-replace-line:before { content: "\ed2b"; }
.ri-finder-fill:before { content: "\ed2c"; }
.ri-finder-line:before { content: "\ed2d"; }
.ri-fingerprint-2-fill:before { content: "\ed2e"; }
.ri-fingerprint-2-line:before { content: "\ed2f"; }
.ri-fingerprint-fill:before { content: "\ed30"; }
.ri-fingerprint-line:before { content: "\ed31"; }
.ri-fire-fill:before { content: "\ed32"; }
.ri-fire-line:before { content: "\ed33"; }
.ri-firefox-fill:before { content: "\ed34"; }
.ri-firefox-line:before { content: "\ed35"; }
.ri-first-aid-kit-fill:before { content: "\ed36"; }
.ri-first-aid-kit-line:before { content: "\ed37"; }
.ri-flag-2-fill:before { content: "\ed38"; }
.ri-flag-2-line:before { content: "\ed39"; }
.ri-flag-fill:before { content: "\ed3a"; }
.ri-flag-line:before { content: "\ed3b"; }
.ri-flashlight-fill:before { content: "\ed3c"; }
.ri-flashlight-line:before { content: "\ed3d"; }
.ri-flask-fill:before { content: "\ed3e"; }
.ri-flask-line:before { content: "\ed3f"; }
.ri-flight-land-fill:before { content: "\ed40"; }
.ri-flight-land-line:before { content: "\ed41"; }
.ri-flight-takeoff-fill:before { content: "\ed42"; }
.ri-flight-takeoff-line:before { content: "\ed43"; }
.ri-flood-fill:before { content: "\ed44"; }
.ri-flood-line:before { content: "\ed45"; }
.ri-flow-chart:before { content: "\ed46"; }
.ri-flutter-fill:before { content: "\ed47"; }
.ri-flutter-line:before { content: "\ed48"; }
.ri-focus-2-fill:before { content: "\ed49"; }
.ri-focus-2-line:before { content: "\ed4a"; }
.ri-focus-3-fill:before { content: "\ed4b"; }
.ri-focus-3-line:before { content: "\ed4c"; }
.ri-focus-fill:before { content: "\ed4d"; }
.ri-focus-line:before { content: "\ed4e"; }
.ri-foggy-fill:before { content: "\ed4f"; }
.ri-foggy-line:before { content: "\ed50"; }
.ri-folder-2-fill:before { content: "\ed51"; }
.ri-folder-2-line:before { content: "\ed52"; }
.ri-folder-3-fill:before { content: "\ed53"; }
.ri-folder-3-line:before { content: "\ed54"; }
.ri-folder-4-fill:before { content: "\ed55"; }
.ri-folder-4-line:before { content: "\ed56"; }
.ri-folder-5-fill:before { content: "\ed57"; }
.ri-folder-5-line:before { content: "\ed58"; }
.ri-folder-add-fill:before { content: "\ed59"; }
.ri-folder-add-line:before { content: "\ed5a"; }
.ri-folder-chart-2-fill:before { content: "\ed5b"; }
.ri-folder-chart-2-line:before { content: "\ed5c"; }
.ri-folder-chart-fill:before { content: "\ed5d"; }
.ri-folder-chart-line:before { content: "\ed5e"; }
.ri-folder-download-fill:before { content: "\ed5f"; }
.ri-folder-download-line:before { content: "\ed60"; }
.ri-folder-fill:before { content: "\ed61"; }
.ri-folder-forbid-fill:before { content: "\ed62"; }
.ri-folder-forbid-line:before { content: "\ed63"; }
.ri-folder-history-fill:before { content: "\ed64"; }
.ri-folder-history-line:before { content: "\ed65"; }
.ri-folder-info-fill:before { content: "\ed66"; }
.ri-folder-info-line:before { content: "\ed67"; }
.ri-folder-keyhole-fill:before { content: "\ed68"; }
.ri-folder-keyhole-line:before { content: "\ed69"; }
.ri-folder-line:before { content: "\ed6a"; }
.ri-folder-lock-fill:before { content: "\ed6b"; }
.ri-folder-lock-line:before { content: "\ed6c"; }
.ri-folder-music-fill:before { content: "\ed6d"; }
.ri-folder-music-line:before { content: "\ed6e"; }
.ri-folder-open-fill:before { content: "\ed6f"; }
.ri-folder-open-line:before { content: "\ed70"; }
.ri-folder-received-fill:before { content: "\ed71"; }
.ri-folder-received-line:before { content: "\ed72"; }
.ri-folder-reduce-fill:before { content: "\ed73"; }
.ri-folder-reduce-line:before { content: "\ed74"; }
.ri-folder-settings-fill:before { content: "\ed75"; }
.ri-folder-settings-line:before { content: "\ed76"; }
.ri-folder-shared-fill:before { content: "\ed77"; }
.ri-folder-shared-line:before { content: "\ed78"; }
.ri-folder-shield-2-fill:before { content: "\ed79"; }
.ri-folder-shield-2-line:before { content: "\ed7a"; }
.ri-folder-shield-fill:before { content: "\ed7b"; }
.ri-folder-shield-line:before { content: "\ed7c"; }
.ri-folder-transfer-fill:before { content: "\ed7d"; }
.ri-folder-transfer-line:before { content: "\ed7e"; }
.ri-folder-unknow-fill:before { content: "\ed7f"; }
.ri-folder-unknow-line:before { content: "\ed80"; }
.ri-folder-upload-fill:before { content: "\ed81"; }
.ri-folder-upload-line:before { content: "\ed82"; }
.ri-folder-user-fill:before { content: "\ed83"; }
.ri-folder-user-line:before { content: "\ed84"; }
.ri-folder-warning-fill:before { content: "\ed85"; }
.ri-folder-warning-line:before { content: "\ed86"; }
.ri-folder-zip-fill:before { content: "\ed87"; }
.ri-folder-zip-line:before { content: "\ed88"; }
.ri-folders-fill:before { content: "\ed89"; }
.ri-folders-line:before { content: "\ed8a"; }
.ri-font-color:before { content: "\ed8b"; }
.ri-font-size-2:before { content: "\ed8c"; }
.ri-font-size:before { content: "\ed8d"; }
.ri-football-fill:before { content: "\ed8e"; }
.ri-football-line:before { content: "\ed8f"; }
.ri-footprint-fill:before { content: "\ed90"; }
.ri-footprint-line:before { content: "\ed91"; }
.ri-forbid-2-fill:before { content: "\ed92"; }
.ri-forbid-2-line:before { content: "\ed93"; }
.ri-forbid-fill:before { content: "\ed94"; }
.ri-forbid-line:before { content: "\ed95"; }
.ri-format-clear:before { content: "\ed96"; }
.ri-fridge-fill:before { content: "\ed97"; }
.ri-fridge-line:before { content: "\ed98"; }
.ri-fullscreen-exit-fill:before { content: "\ed99"; }
.ri-fullscreen-exit-line:before { content: "\ed9a"; }
.ri-fullscreen-fill:before { content: "\ed9b"; }
.ri-fullscreen-line:before { content: "\ed9c"; }
.ri-function-fill:before { content: "\ed9d"; }
.ri-function-line:before { content: "\ed9e"; }
.ri-functions:before { content: "\ed9f"; }
.ri-funds-box-fill:before { content: "\eda0"; }
.ri-funds-box-line:before { content: "\eda1"; }
.ri-funds-fill:before { content: "\eda2"; }
.ri-funds-line:before { content: "\eda3"; }
.ri-gallery-fill:before { content: "\eda4"; }
.ri-gallery-line:before { content: "\eda5"; }
.ri-gallery-upload-fill:before { content: "\eda6"; }
.ri-gallery-upload-line:before { content: "\eda7"; }
.ri-game-fill:before { content: "\eda8"; }
.ri-game-line:before { content: "\eda9"; }
.ri-gamepad-fill:before { content: "\edaa"; }
.ri-gamepad-line:before { content: "\edab"; }
.ri-gas-station-fill:before { content: "\edac"; }
.ri-gas-station-line:before { content: "\edad"; }
.ri-gatsby-fill:before { content: "\edae"; }
.ri-gatsby-line:before { content: "\edaf"; }
.ri-genderless-fill:before { content: "\edb0"; }
.ri-genderless-line:before { content: "\edb1"; }
.ri-ghost-2-fill:before { content: "\edb2"; }
.ri-ghost-2-line:before { content: "\edb3"; }
.ri-ghost-fill:before { content: "\edb4"; }
.ri-ghost-line:before { content: "\edb5"; }
.ri-ghost-smile-fill:before { content: "\edb6"; }
.ri-ghost-smile-line:before { content: "\edb7"; }
.ri-gift-2-fill:before { content: "\edb8"; }
.ri-gift-2-line:before { content: "\edb9"; }
.ri-gift-fill:before { content: "\edba"; }
.ri-gift-line:before { content: "\edbb"; }
.ri-git-branch-fill:before { content: "\edbc"; }
.ri-git-branch-line:before { content: "\edbd"; }
.ri-git-commit-fill:before { content: "\edbe"; }
.ri-git-commit-line:before { content: "\edbf"; }
.ri-git-merge-fill:before { content: "\edc0"; }
.ri-git-merge-line:before { content: "\edc1"; }
.ri-git-pull-request-fill:before { content: "\edc2"; }
.ri-git-pull-request-line:before { content: "\edc3"; }
.ri-git-repository-commits-fill:before { content: "\edc4"; }
.ri-git-repository-commits-line:before { content: "\edc5"; }
.ri-git-repository-fill:before { content: "\edc6"; }
.ri-git-repository-line:before { content: "\edc7"; }
.ri-git-repository-private-fill:before { content: "\edc8"; }
.ri-git-repository-private-line:before { content: "\edc9"; }
.ri-github-fill:before { content: "\edca"; }
.ri-github-line:before { content: "\edcb"; }
.ri-gitlab-fill:before { content: "\edcc"; }
.ri-gitlab-line:before { content: "\edcd"; }
.ri-global-fill:before { content: "\edce"; }
.ri-global-line:before { content: "\edcf"; }
.ri-globe-fill:before { content: "\edd0"; }
.ri-globe-line:before { content: "\edd1"; }
.ri-goblet-fill:before { content: "\edd2"; }
.ri-goblet-line:before { content: "\edd3"; }
.ri-google-fill:before { content: "\edd4"; }
.ri-google-line:before { content: "\edd5"; }
.ri-google-play-fill:before { content: "\edd6"; }
.ri-google-play-line:before { content: "\edd7"; }
.ri-government-fill:before { content: "\edd8"; }
.ri-government-line:before { content: "\edd9"; }
.ri-gps-fill:before { content: "\edda"; }
.ri-gps-line:before { content: "\eddb"; }
.ri-gradienter-fill:before { content: "\eddc"; }
.ri-gradienter-line:before { content: "\eddd"; }
.ri-grid-fill:before { content: "\edde"; }
.ri-grid-line:before { content: "\eddf"; }
.ri-group-2-fill:before { content: "\ede0"; }
.ri-group-2-line:before { content: "\ede1"; }
.ri-group-fill:before { content: "\ede2"; }
.ri-group-line:before { content: "\ede3"; }
.ri-guide-fill:before { content: "\ede4"; }
.ri-guide-line:before { content: "\ede5"; }
.ri-h-1:before { content: "\ede6"; }
.ri-h-2:before { content: "\ede7"; }
.ri-h-3:before { content: "\ede8"; }
.ri-h-4:before { content: "\ede9"; }
.ri-h-5:before { content: "\edea"; }
.ri-h-6:before { content: "\edeb"; }
.ri-hail-fill:before { content: "\edec"; }
.ri-hail-line:before { content: "\eded"; }
.ri-hammer-fill:before { content: "\edee"; }
.ri-hammer-line:before { content: "\edef"; }
.ri-hand-coin-fill:before { content: "\edf0"; }
.ri-hand-coin-line:before { content: "\edf1"; }
.ri-hand-heart-fill:before { content: "\edf2"; }
.ri-hand-heart-line:before { content: "\edf3"; }
.ri-hand-sanitizer-fill:before { content: "\edf4"; }
.ri-hand-sanitizer-line:before { content: "\edf5"; }
.ri-handbag-fill:before { content: "\edf6"; }
.ri-handbag-line:before { content: "\edf7"; }
.ri-hard-drive-2-fill:before { content: "\edf8"; }
.ri-hard-drive-2-line:before { content: "\edf9"; }
.ri-hard-drive-fill:before { content: "\edfa"; }
.ri-hard-drive-line:before { content: "\edfb"; }
.ri-hashtag:before { content: "\edfc"; }
.ri-haze-2-fill:before { content: "\edfd"; }
.ri-haze-2-line:before { content: "\edfe"; }
.ri-haze-fill:before { content: "\edff"; }
.ri-haze-line:before { content: "\ee00"; }
.ri-hd-fill:before { content: "\ee01"; }
.ri-hd-line:before { content: "\ee02"; }
.ri-heading:before { content: "\ee03"; }
.ri-headphone-fill:before { content: "\ee04"; }
.ri-headphone-line:before { content: "\ee05"; }
.ri-health-book-fill:before { content: "\ee06"; }
.ri-health-book-line:before { content: "\ee07"; }
.ri-heart-2-fill:before { content: "\ee08"; }
.ri-heart-2-line:before { content: "\ee09"; }
.ri-heart-3-fill:before { content: "\ee0a"; }
.ri-heart-3-line:before { content: "\ee0b"; }
.ri-heart-add-fill:before { content: "\ee0c"; }
.ri-heart-add-line:before { content: "\ee0d"; }
.ri-heart-fill:before { content: "\ee0e"; }
.ri-heart-line:before { content: "\ee0f"; }
.ri-heart-pulse-fill:before { content: "\ee10"; }
.ri-heart-pulse-line:before { content: "\ee11"; }
.ri-hearts-fill:before { content: "\ee12"; }
.ri-hearts-line:before { content: "\ee13"; }
.ri-heavy-showers-fill:before { content: "\ee14"; }
.ri-heavy-showers-line:before { content: "\ee15"; }
.ri-history-fill:before { content: "\ee16"; }
.ri-history-line:before { content: "\ee17"; }
.ri-home-2-fill:before { content: "\ee18"; }
.ri-home-2-line:before { content: "\ee19"; }
.ri-home-3-fill:before { content: "\ee1a"; }
.ri-home-3-line:before { content: "\ee1b"; }
.ri-home-4-fill:before { content: "\ee1c"; }
.ri-home-4-line:before { content: "\ee1d"; }
.ri-home-5-fill:before { content: "\ee1e"; }
.ri-home-5-line:before { content: "\ee1f"; }
.ri-home-6-fill:before { content: "\ee20"; }
.ri-home-6-line:before { content: "\ee21"; }
.ri-home-7-fill:before { content: "\ee22"; }
.ri-home-7-line:before { content: "\ee23"; }
.ri-home-8-fill:before { content: "\ee24"; }
.ri-home-8-line:before { content: "\ee25"; }
.ri-home-fill:before { content: "\ee26"; }
.ri-home-gear-fill:before { content: "\ee27"; }
.ri-home-gear-line:before { content: "\ee28"; }
.ri-home-heart-fill:before { content: "\ee29"; }
.ri-home-heart-line:before { content: "\ee2a"; }
.ri-home-line:before { content: "\ee2b"; }
.ri-home-smile-2-fill:before { content: "\ee2c"; }
.ri-home-smile-2-line:before { content: "\ee2d"; }
.ri-home-smile-fill:before { content: "\ee2e"; }
.ri-home-smile-line:before { content: "\ee2f"; }
.ri-home-wifi-fill:before { content: "\ee30"; }
.ri-home-wifi-line:before { content: "\ee31"; }
.ri-honor-of-kings-fill:before { content: "\ee32"; }
.ri-honor-of-kings-line:before { content: "\ee33"; }
.ri-honour-fill:before { content: "\ee34"; }
.ri-honour-line:before { content: "\ee35"; }
.ri-hospital-fill:before { content: "\ee36"; }
.ri-hospital-line:before { content: "\ee37"; }
.ri-hotel-bed-fill:before { content: "\ee38"; }
.ri-hotel-bed-line:before { content: "\ee39"; }
.ri-hotel-fill:before { content: "\ee3a"; }
.ri-hotel-line:before { content: "\ee3b"; }
.ri-hotspot-fill:before { content: "\ee3c"; }
.ri-hotspot-line:before { content: "\ee3d"; }
.ri-hq-fill:before { content: "\ee3e"; }
.ri-hq-line:before { content: "\ee3f"; }
.ri-html5-fill:before { content: "\ee40"; }
.ri-html5-line:before { content: "\ee41"; }
.ri-ie-fill:before { content: "\ee42"; }
.ri-ie-line:before { content: "\ee43"; }
.ri-image-2-fill:before { content: "\ee44"; }
.ri-image-2-line:before { content: "\ee45"; }
.ri-image-add-fill:before { content: "\ee46"; }
.ri-image-add-line:before { content: "\ee47"; }
.ri-image-edit-fill:before { content: "\ee48"; }
.ri-image-edit-line:before { content: "\ee49"; }
.ri-image-fill:before { content: "\ee4a"; }
.ri-image-line:before { content: "\ee4b"; }
.ri-inbox-archive-fill:before { content: "\ee4c"; }
.ri-inbox-archive-line:before { content: "\ee4d"; }
.ri-inbox-fill:before { content: "\ee4e"; }
.ri-inbox-line:before { content: "\ee4f"; }
.ri-inbox-unarchive-fill:before { content: "\ee50"; }
.ri-inbox-unarchive-line:before { content: "\ee51"; }
.ri-increase-decrease-fill:before { content: "\ee52"; }
.ri-increase-decrease-line:before { content: "\ee53"; }
.ri-indent-decrease:before { content: "\ee54"; }
.ri-indent-increase:before { content: "\ee55"; }
.ri-indeterminate-circle-fill:before { content: "\ee56"; }
.ri-indeterminate-circle-line:before { content: "\ee57"; }
.ri-information-fill:before { content: "\ee58"; }
.ri-information-line:before { content: "\ee59"; }
.ri-infrared-thermometer-fill:before { content: "\ee5a"; }
.ri-infrared-thermometer-line:before { content: "\ee5b"; }
.ri-ink-bottle-fill:before { content: "\ee5c"; }
.ri-ink-bottle-line:before { content: "\ee5d"; }
.ri-input-cursor-move:before { content: "\ee5e"; }
.ri-input-method-fill:before { content: "\ee5f"; }
.ri-input-method-line:before { content: "\ee60"; }
.ri-insert-column-left:before { content: "\ee61"; }
.ri-insert-column-right:before { content: "\ee62"; }
.ri-insert-row-bottom:before { content: "\ee63"; }
.ri-insert-row-top:before { content: "\ee64"; }
.ri-instagram-fill:before { content: "\ee65"; }
.ri-instagram-line:before { content: "\ee66"; }
.ri-install-fill:before { content: "\ee67"; }
.ri-install-line:before { content: "\ee68"; }
.ri-invision-fill:before { content: "\ee69"; }
.ri-invision-line:before { content: "\ee6a"; }
.ri-italic:before { content: "\ee6b"; }
.ri-kakao-talk-fill:before { content: "\ee6c"; }
.ri-kakao-talk-line:before { content: "\ee6d"; }
.ri-key-2-fill:before { content: "\ee6e"; }
.ri-key-2-line:before { content: "\ee6f"; }
.ri-key-fill:before { content: "\ee70"; }
.ri-key-line:before { content: "\ee71"; }
.ri-keyboard-box-fill:before { content: "\ee72"; }
.ri-keyboard-box-line:before { content: "\ee73"; }
.ri-keyboard-fill:before { content: "\ee74"; }
.ri-keyboard-line:before { content: "\ee75"; }
.ri-keynote-fill:before { content: "\ee76"; }
.ri-keynote-line:before { content: "\ee77"; }
.ri-knife-blood-fill:before { content: "\ee78"; }
.ri-knife-blood-line:before { content: "\ee79"; }
.ri-knife-fill:before { content: "\ee7a"; }
.ri-knife-line:before { content: "\ee7b"; }
.ri-landscape-fill:before { content: "\ee7c"; }
.ri-landscape-line:before { content: "\ee7d"; }
.ri-layout-2-fill:before { content: "\ee7e"; }
.ri-layout-2-line:before { content: "\ee7f"; }
.ri-layout-3-fill:before { content: "\ee80"; }
.ri-layout-3-line:before { content: "\ee81"; }
.ri-layout-4-fill:before { content: "\ee82"; }
.ri-layout-4-line:before { content: "\ee83"; }
.ri-layout-5-fill:before { content: "\ee84"; }
.ri-layout-5-line:before { content: "\ee85"; }
.ri-layout-6-fill:before { content: "\ee86"; }
.ri-layout-6-line:before { content: "\ee87"; }
.ri-layout-bottom-2-fill:before { content: "\ee88"; }
.ri-layout-bottom-2-line:before { content: "\ee89"; }
.ri-layout-bottom-fill:before { content: "\ee8a"; }
.ri-layout-bottom-line:before { content: "\ee8b"; }
.ri-layout-column-fill:before { content: "\ee8c"; }
.ri-layout-column-line:before { content: "\ee8d"; }
.ri-layout-fill:before { content: "\ee8e"; }
.ri-layout-grid-fill:before { content: "\ee8f"; }
.ri-layout-grid-line:before { content: "\ee90"; }
.ri-layout-left-2-fill:before { content: "\ee91"; }
.ri-layout-left-2-line:before { content: "\ee92"; }
.ri-layout-left-fill:before { content: "\ee93"; }
.ri-layout-left-line:before { content: "\ee94"; }
.ri-layout-line:before { content: "\ee95"; }
.ri-layout-masonry-fill:before { content: "\ee96"; }
.ri-layout-masonry-line:before { content: "\ee97"; }
.ri-layout-right-2-fill:before { content: "\ee98"; }
.ri-layout-right-2-line:before { content: "\ee99"; }
.ri-layout-right-fill:before { content: "\ee9a"; }
.ri-layout-right-line:before { content: "\ee9b"; }
.ri-layout-row-fill:before { content: "\ee9c"; }
.ri-layout-row-line:before { content: "\ee9d"; }
.ri-layout-top-2-fill:before { content: "\ee9e"; }
.ri-layout-top-2-line:before { content: "\ee9f"; }
.ri-layout-top-fill:before { content: "\eea0"; }
.ri-layout-top-line:before { content: "\eea1"; }
.ri-leaf-fill:before { content: "\eea2"; }
.ri-leaf-line:before { content: "\eea3"; }
.ri-lifebuoy-fill:before { content: "\eea4"; }
.ri-lifebuoy-line:before { content: "\eea5"; }
.ri-lightbulb-fill:before { content: "\eea6"; }
.ri-lightbulb-flash-fill:before { content: "\eea7"; }
.ri-lightbulb-flash-line:before { content: "\eea8"; }
.ri-lightbulb-line:before { content: "\eea9"; }
.ri-line-chart-fill:before { content: "\eeaa"; }
.ri-line-chart-line:before { content: "\eeab"; }
.ri-line-fill:before { content: "\eeac"; }
.ri-line-height:before { content: "\eead"; }
.ri-line-line:before { content: "\eeae"; }
.ri-link-m:before { content: "\eeaf"; }
.ri-link-unlink-m:before { content: "\eeb0"; }
.ri-link-unlink:before { content: "\eeb1"; }
.ri-link:before { content: "\eeb2"; }
.ri-linkedin-box-fill:before { content: "\eeb3"; }
.ri-linkedin-box-line:before { content: "\eeb4"; }
.ri-linkedin-fill:before { content: "\eeb5"; }
.ri-linkedin-line:before { content: "\eeb6"; }
.ri-links-fill:before { content: "\eeb7"; }
.ri-links-line:before { content: "\eeb8"; }
.ri-list-check-2:before { content: "\eeb9"; }
.ri-list-check:before { content: "\eeba"; }
.ri-list-ordered:before { content: "\eebb"; }
.ri-list-settings-fill:before { content: "\eebc"; }
.ri-list-settings-line:before { content: "\eebd"; }
.ri-list-unordered:before { content: "\eebe"; }
.ri-live-fill:before { content: "\eebf"; }
.ri-live-line:before { content: "\eec0"; }
.ri-loader-2-fill:before { content: "\eec1"; }
.ri-loader-2-line:before { content: "\eec2"; }
.ri-loader-3-fill:before { content: "\eec3"; }
.ri-loader-3-line:before { content: "\eec4"; }
.ri-loader-4-fill:before { content: "\eec5"; }
.ri-loader-4-line:before { content: "\eec6"; }
.ri-loader-5-fill:before { content: "\eec7"; }
.ri-loader-5-line:before { content: "\eec8"; }
.ri-loader-fill:before { content: "\eec9"; }
.ri-loader-line:before { content: "\eeca"; }
.ri-lock-2-fill:before { content: "\eecb"; }
.ri-lock-2-line:before { content: "\eecc"; }
.ri-lock-fill:before { content: "\eecd"; }
.ri-lock-line:before { content: "\eece"; }
.ri-lock-password-fill:before { content: "\eecf"; }
.ri-lock-password-line:before { content: "\eed0"; }
.ri-lock-unlock-fill:before { content: "\eed1"; }
.ri-lock-unlock-line:before { content: "\eed2"; }
.ri-login-box-fill:before { content: "\eed3"; }
.ri-login-box-line:before { content: "\eed4"; }
.ri-login-circle-fill:before { content: "\eed5"; }
.ri-login-circle-line:before { content: "\eed6"; }
.ri-logout-box-fill:before { content: "\eed7"; }
.ri-logout-box-line:before { content: "\eed8"; }
.ri-logout-box-r-fill:before { content: "\eed9"; }
.ri-logout-box-r-line:before { content: "\eeda"; }
.ri-logout-circle-fill:before { content: "\eedb"; }
.ri-logout-circle-line:before { content: "\eedc"; }
.ri-logout-circle-r-fill:before { content: "\eedd"; }
.ri-logout-circle-r-line:before { content: "\eede"; }
.ri-luggage-cart-fill:before { content: "\eedf"; }
.ri-luggage-cart-line:before { content: "\eee0"; }
.ri-luggage-deposit-fill:before { content: "\eee1"; }
.ri-luggage-deposit-line:before { content: "\eee2"; }
.ri-lungs-fill:before { content: "\eee3"; }
.ri-lungs-line:before { content: "\eee4"; }
.ri-mac-fill:before { content: "\eee5"; }
.ri-mac-line:before { content: "\eee6"; }
.ri-macbook-fill:before { content: "\eee7"; }
.ri-macbook-line:before { content: "\eee8"; }
.ri-magic-fill:before { content: "\eee9"; }
.ri-magic-line:before { content: "\eeea"; }
.ri-mail-add-fill:before { content: "\eeeb"; }
.ri-mail-add-line:before { content: "\eeec"; }
.ri-mail-check-fill:before { content: "\eeed"; }
.ri-mail-check-line:before { content: "\eeee"; }
.ri-mail-close-fill:before { content: "\eeef"; }
.ri-mail-close-line:before { content: "\eef0"; }
.ri-mail-download-fill:before { content: "\eef1"; }
.ri-mail-download-line:before { content: "\eef2"; }
.ri-mail-fill:before { content: "\eef3"; }
.ri-mail-forbid-fill:before { content: "\eef4"; }
.ri-mail-forbid-line:before { content: "\eef5"; }
.ri-mail-line:before { content: "\eef6"; }
.ri-mail-lock-fill:before { content: "\eef7"; }
.ri-mail-lock-line:before { content: "\eef8"; }
.ri-mail-open-fill:before { content: "\eef9"; }
.ri-mail-open-line:before { content: "\eefa"; }
.ri-mail-send-fill:before { content: "\eefb"; }
.ri-mail-send-line:before { content: "\eefc"; }
.ri-mail-settings-fill:before { content: "\eefd"; }
.ri-mail-settings-line:before { content: "\eefe"; }
.ri-mail-star-fill:before { content: "\eeff"; }
.ri-mail-star-line:before { content: "\ef00"; }
.ri-mail-unread-fill:before { content: "\ef01"; }
.ri-mail-unread-line:before { content: "\ef02"; }
.ri-mail-volume-fill:before { content: "\ef03"; }
.ri-mail-volume-line:before { content: "\ef04"; }
.ri-map-2-fill:before { content: "\ef05"; }
.ri-map-2-line:before { content: "\ef06"; }
.ri-map-fill:before { content: "\ef07"; }
.ri-map-line:before { content: "\ef08"; }
.ri-map-pin-2-fill:before { content: "\ef09"; }
.ri-map-pin-2-line:before { content: "\ef0a"; }
.ri-map-pin-3-fill:before { content: "\ef0b"; }
.ri-map-pin-3-line:before { content: "\ef0c"; }
.ri-map-pin-4-fill:before { content: "\ef0d"; }
.ri-map-pin-4-line:before { content: "\ef0e"; }
.ri-map-pin-5-fill:before { content: "\ef0f"; }
.ri-map-pin-5-line:before { content: "\ef10"; }
.ri-map-pin-add-fill:before { content: "\ef11"; }
.ri-map-pin-add-line:before { content: "\ef12"; }
.ri-map-pin-fill:before { content: "\ef13"; }
.ri-map-pin-line:before { content: "\ef14"; }
.ri-map-pin-range-fill:before { content: "\ef15"; }
.ri-map-pin-range-line:before { content: "\ef16"; }
.ri-map-pin-time-fill:before { content: "\ef17"; }
.ri-map-pin-time-line:before { content: "\ef18"; }
.ri-map-pin-user-fill:before { content: "\ef19"; }
.ri-map-pin-user-line:before { content: "\ef1a"; }
.ri-mark-pen-fill:before { content: "\ef1b"; }
.ri-mark-pen-line:before { content: "\ef1c"; }
.ri-markdown-fill:before { content: "\ef1d"; }
.ri-markdown-line:before { content: "\ef1e"; }
.ri-markup-fill:before { content: "\ef1f"; }
.ri-markup-line:before { content: "\ef20"; }
.ri-mastercard-fill:before { content: "\ef21"; }
.ri-mastercard-line:before { content: "\ef22"; }
.ri-mastodon-fill:before { content: "\ef23"; }
.ri-mastodon-line:before { content: "\ef24"; }
.ri-medal-2-fill:before { content: "\ef25"; }
.ri-medal-2-line:before { content: "\ef26"; }
.ri-medal-fill:before { content: "\ef27"; }
.ri-medal-line:before { content: "\ef28"; }
.ri-medicine-bottle-fill:before { content: "\ef29"; }
.ri-medicine-bottle-line:before { content: "\ef2a"; }
.ri-medium-fill:before { content: "\ef2b"; }
.ri-medium-line:before { content: "\ef2c"; }
.ri-men-fill:before { content: "\ef2d"; }
.ri-men-line:before { content: "\ef2e"; }
.ri-mental-health-fill:before { content: "\ef2f"; }
.ri-mental-health-line:before { content: "\ef30"; }
.ri-menu-2-fill:before { content: "\ef31"; }
.ri-menu-2-line:before { content: "\ef32"; }
.ri-menu-3-fill:before { content: "\ef33"; }
.ri-menu-3-line:before { content: "\ef34"; }
.ri-menu-4-fill:before { content: "\ef35"; }
.ri-menu-4-line:before { content: "\ef36"; }
.ri-menu-5-fill:before { content: "\ef37"; }
.ri-menu-5-line:before { content: "\ef38"; }
.ri-menu-add-fill:before { content: "\ef39"; }
.ri-menu-add-line:before { content: "\ef3a"; }
.ri-menu-fill:before { content: "\ef3b"; }
.ri-menu-fold-fill:before { content: "\ef3c"; }
.ri-menu-fold-line:before { content: "\ef3d"; }
.ri-menu-line:before { content: "\ef3e"; }
.ri-menu-unfold-fill:before { content: "\ef3f"; }
.ri-menu-unfold-line:before { content: "\ef40"; }
.ri-merge-cells-horizontal:before { content: "\ef41"; }
.ri-merge-cells-vertical:before { content: "\ef42"; }
.ri-message-2-fill:before { content: "\ef43"; }
.ri-message-2-line:before { content: "\ef44"; }
.ri-message-3-fill:before { content: "\ef45"; }
.ri-message-3-line:before { content: "\ef46"; }
.ri-message-fill:before { content: "\ef47"; }
.ri-message-line:before { content: "\ef48"; }
.ri-messenger-fill:before { content: "\ef49"; }
.ri-messenger-line:before { content: "\ef4a"; }
.ri-meteor-fill:before { content: "\ef4b"; }
.ri-meteor-line:before { content: "\ef4c"; }
.ri-mic-2-fill:before { content: "\ef4d"; }
.ri-mic-2-line:before { content: "\ef4e"; }
.ri-mic-fill:before { content: "\ef4f"; }
.ri-mic-line:before { content: "\ef50"; }
.ri-mic-off-fill:before { content: "\ef51"; }
.ri-mic-off-line:before { content: "\ef52"; }
.ri-mickey-fill:before { content: "\ef53"; }
.ri-mickey-line:before { content: "\ef54"; }
.ri-microscope-fill:before { content: "\ef55"; }
.ri-microscope-line:before { content: "\ef56"; }
.ri-microsoft-fill:before { content: "\ef57"; }
.ri-microsoft-line:before { content: "\ef58"; }
.ri-mind-map:before { content: "\ef59"; }
.ri-mini-program-fill:before { content: "\ef5a"; }
.ri-mini-program-line:before { content: "\ef5b"; }
.ri-mist-fill:before { content: "\ef5c"; }
.ri-mist-line:before { content: "\ef5d"; }
.ri-money-cny-box-fill:before { content: "\ef5e"; }
.ri-money-cny-box-line:before { content: "\ef5f"; }
.ri-money-cny-circle-fill:before { content: "\ef60"; }
.ri-money-cny-circle-line:before { content: "\ef61"; }
.ri-money-dollar-box-fill:before { content: "\ef62"; }
.ri-money-dollar-box-line:before { content: "\ef63"; }
.ri-money-dollar-circle-fill:before { content: "\ef64"; }
.ri-money-dollar-circle-line:before { content: "\ef65"; }
.ri-money-euro-box-fill:before { content: "\ef66"; }
.ri-money-euro-box-line:before { content: "\ef67"; }
.ri-money-euro-circle-fill:before { content: "\ef68"; }
.ri-money-euro-circle-line:before { content: "\ef69"; }
.ri-money-pound-box-fill:before { content: "\ef6a"; }
.ri-money-pound-box-line:before { content: "\ef6b"; }
.ri-money-pound-circle-fill:before { content: "\ef6c"; }
.ri-money-pound-circle-line:before { content: "\ef6d"; }
.ri-moon-clear-fill:before { content: "\ef6e"; }
.ri-moon-clear-line:before { content: "\ef6f"; }
.ri-moon-cloudy-fill:before { content: "\ef70"; }
.ri-moon-cloudy-line:before { content: "\ef71"; }
.ri-moon-fill:before { content: "\ef72"; }
.ri-moon-foggy-fill:before { content: "\ef73"; }
.ri-moon-foggy-line:before { content: "\ef74"; }
.ri-moon-line:before { content: "\ef75"; }
.ri-more-2-fill:before { content: "\ef76"; }
.ri-more-2-line:before { content: "\ef77"; }
.ri-more-fill:before { content: "\ef78"; }
.ri-more-line:before { content: "\ef79"; }
.ri-motorbike-fill:before { content: "\ef7a"; }
.ri-motorbike-line:before { content: "\ef7b"; }
.ri-mouse-fill:before { content: "\ef7c"; }
.ri-mouse-line:before { content: "\ef7d"; }
.ri-movie-2-fill:before { content: "\ef7e"; }
.ri-movie-2-line:before { content: "\ef7f"; }
.ri-movie-fill:before { content: "\ef80"; }
.ri-movie-line:before { content: "\ef81"; }
.ri-music-2-fill:before { content: "\ef82"; }
.ri-music-2-line:before { content: "\ef83"; }
.ri-music-fill:before { content: "\ef84"; }
.ri-music-line:before { content: "\ef85"; }
.ri-mv-fill:before { content: "\ef86"; }
.ri-mv-line:before { content: "\ef87"; }
.ri-navigation-fill:before { content: "\ef88"; }
.ri-navigation-line:before { content: "\ef89"; }
.ri-netease-cloud-music-fill:before { content: "\ef8a"; }
.ri-netease-cloud-music-line:before { content: "\ef8b"; }
.ri-netflix-fill:before { content: "\ef8c"; }
.ri-netflix-line:before { content: "\ef8d"; }
.ri-newspaper-fill:before { content: "\ef8e"; }
.ri-newspaper-line:before { content: "\ef8f"; }
.ri-node-tree:before { content: "\ef90"; }
.ri-notification-2-fill:before { content: "\ef91"; }
.ri-notification-2-line:before { content: "\ef92"; }
.ri-notification-3-fill:before { content: "\ef93"; }
.ri-notification-3-line:before { content: "\ef94"; }
.ri-notification-4-fill:before { content: "\ef95"; }
.ri-notification-4-line:before { content: "\ef96"; }
.ri-notification-badge-fill:before { content: "\ef97"; }
.ri-notification-badge-line:before { content: "\ef98"; }
.ri-notification-fill:before { content: "\ef99"; }
.ri-notification-line:before { content: "\ef9a"; }
.ri-notification-off-fill:before { content: "\ef9b"; }
.ri-notification-off-line:before { content: "\ef9c"; }
.ri-npmjs-fill:before { content: "\ef9d"; }
.ri-npmjs-line:before { content: "\ef9e"; }
.ri-number-0:before { content: "\ef9f"; }
.ri-number-1:before { content: "\efa0"; }
.ri-number-2:before { content: "\efa1"; }
.ri-number-3:before { content: "\efa2"; }
.ri-number-4:before { content: "\efa3"; }
.ri-number-5:before { content: "\efa4"; }
.ri-number-6:before { content: "\efa5"; }
.ri-number-7:before { content: "\efa6"; }
.ri-number-8:before { content: "\efa7"; }
.ri-number-9:before { content: "\efa8"; }
.ri-numbers-fill:before { content: "\efa9"; }
.ri-numbers-line:before { content: "\efaa"; }
.ri-nurse-fill:before { content: "\efab"; }
.ri-nurse-line:before { content: "\efac"; }
.ri-oil-fill:before { content: "\efad"; }
.ri-oil-line:before { content: "\efae"; }
.ri-omega:before { content: "\efaf"; }
.ri-open-arm-fill:before { content: "\efb0"; }
.ri-open-arm-line:before { content: "\efb1"; }
.ri-open-source-fill:before { content: "\efb2"; }
.ri-open-source-line:before { content: "\efb3"; }
.ri-opera-fill:before { content: "\efb4"; }
.ri-opera-line:before { content: "\efb5"; }
.ri-order-play-fill:before { content: "\efb6"; }
.ri-order-play-line:before { content: "\efb7"; }
.ri-organization-chart:before { content: "\efb8"; }
.ri-outlet-2-fill:before { content: "\efb9"; }
.ri-outlet-2-line:before { content: "\efba"; }
.ri-outlet-fill:before { content: "\efbb"; }
.ri-outlet-line:before { content: "\efbc"; }
.ri-page-separator:before { content: "\efbd"; }
.ri-pages-fill:before { content: "\efbe"; }
.ri-pages-line:before { content: "\efbf"; }
.ri-paint-brush-fill:before { content: "\efc0"; }
.ri-paint-brush-line:before { content: "\efc1"; }
.ri-paint-fill:before { content: "\efc2"; }
.ri-paint-line:before { content: "\efc3"; }
.ri-palette-fill:before { content: "\efc4"; }
.ri-palette-line:before { content: "\efc5"; }
.ri-pantone-fill:before { content: "\efc6"; }
.ri-pantone-line:before { content: "\efc7"; }
.ri-paragraph:before { content: "\efc8"; }
.ri-parent-fill:before { content: "\efc9"; }
.ri-parent-line:before { content: "\efca"; }
.ri-parentheses-fill:before { content: "\efcb"; }
.ri-parentheses-line:before { content: "\efcc"; }
.ri-parking-box-fill:before { content: "\efcd"; }
.ri-parking-box-line:before { content: "\efce"; }
.ri-parking-fill:before { content: "\efcf"; }
.ri-parking-line:before { content: "\efd0"; }
.ri-passport-fill:before { content: "\efd1"; }
.ri-passport-line:before { content: "\efd2"; }
.ri-patreon-fill:before { content: "\efd3"; }
.ri-patreon-line:before { content: "\efd4"; }
.ri-pause-circle-fill:before { content: "\efd5"; }
.ri-pause-circle-line:before { content: "\efd6"; }
.ri-pause-fill:before { content: "\efd7"; }
.ri-pause-line:before { content: "\efd8"; }
.ri-pause-mini-fill:before { content: "\efd9"; }
.ri-pause-mini-line:before { content: "\efda"; }
.ri-paypal-fill:before { content: "\efdb"; }
.ri-paypal-line:before { content: "\efdc"; }
.ri-pen-nib-fill:before { content: "\efdd"; }
.ri-pen-nib-line:before { content: "\efde"; }
.ri-pencil-fill:before { content: "\efdf"; }
.ri-pencil-line:before { content: "\efe0"; }
.ri-pencil-ruler-2-fill:before { content: "\efe1"; }
.ri-pencil-ruler-2-line:before { content: "\efe2"; }
.ri-pencil-ruler-fill:before { content: "\efe3"; }
.ri-pencil-ruler-line:before { content: "\efe4"; }
.ri-percent-fill:before { content: "\efe5"; }
.ri-percent-line:before { content: "\efe6"; }
.ri-phone-camera-fill:before { content: "\efe7"; }
.ri-phone-camera-line:before { content: "\efe8"; }
.ri-phone-fill:before { content: "\efe9"; }
.ri-phone-find-fill:before { content: "\efea"; }
.ri-phone-find-line:before { content: "\efeb"; }
.ri-phone-line:before { content: "\efec"; }
.ri-phone-lock-fill:before { content: "\efed"; }
.ri-phone-lock-line:before { content: "\efee"; }
.ri-picture-in-picture-2-fill:before { content: "\efef"; }
.ri-picture-in-picture-2-line:before { content: "\eff0"; }
.ri-picture-in-picture-exit-fill:before { content: "\eff1"; }
.ri-picture-in-picture-exit-line:before { content: "\eff2"; }
.ri-picture-in-picture-fill:before { content: "\eff3"; }
.ri-picture-in-picture-line:before { content: "\eff4"; }
.ri-pie-chart-2-fill:before { content: "\eff5"; }
.ri-pie-chart-2-line:before { content: "\eff6"; }
.ri-pie-chart-box-fill:before { content: "\eff7"; }
.ri-pie-chart-box-line:before { content: "\eff8"; }
.ri-pie-chart-fill:before { content: "\eff9"; }
.ri-pie-chart-line:before { content: "\effa"; }
.ri-pin-distance-fill:before { content: "\effb"; }
.ri-pin-distance-line:before { content: "\effc"; }
.ri-ping-pong-fill:before { content: "\effd"; }
.ri-ping-pong-line:before { content: "\effe"; }
.ri-pinterest-fill:before { content: "\efff"; }
.ri-pinterest-line:before { content: "\f000"; }
.ri-pinyin-input:before { content: "\f001"; }
.ri-pixelfed-fill:before { content: "\f002"; }
.ri-pixelfed-line:before { content: "\f003"; }
.ri-plane-fill:before { content: "\f004"; }
.ri-plane-line:before { content: "\f005"; }
.ri-plant-fill:before { content: "\f006"; }
.ri-plant-line:before { content: "\f007"; }
.ri-play-circle-fill:before { content: "\f008"; }
.ri-play-circle-line:before { content: "\f009"; }
.ri-play-fill:before { content: "\f00a"; }
.ri-play-line:before { content: "\f00b"; }
.ri-play-list-2-fill:before { content: "\f00c"; }
.ri-play-list-2-line:before { content: "\f00d"; }
.ri-play-list-add-fill:before { content: "\f00e"; }
.ri-play-list-add-line:before { content: "\f00f"; }
.ri-play-list-fill:before { content: "\f010"; }
.ri-play-list-line:before { content: "\f011"; }
.ri-play-mini-fill:before { content: "\f012"; }
.ri-play-mini-line:before { content: "\f013"; }
.ri-playstation-fill:before { content: "\f014"; }
.ri-playstation-line:before { content: "\f015"; }
.ri-plug-2-fill:before { content: "\f016"; }
.ri-plug-2-line:before { content: "\f017"; }
.ri-plug-fill:before { content: "\f018"; }
.ri-plug-line:before { content: "\f019"; }
.ri-polaroid-2-fill:before { content: "\f01a"; }
.ri-polaroid-2-line:before { content: "\f01b"; }
.ri-polaroid-fill:before { content: "\f01c"; }
.ri-polaroid-line:before { content: "\f01d"; }
.ri-police-car-fill:before { content: "\f01e"; }
.ri-police-car-line:before { content: "\f01f"; }
.ri-price-tag-2-fill:before { content: "\f020"; }
.ri-price-tag-2-line:before { content: "\f021"; }
.ri-price-tag-3-fill:before { content: "\f022"; }
.ri-price-tag-3-line:before { content: "\f023"; }
.ri-price-tag-fill:before { content: "\f024"; }
.ri-price-tag-line:before { content: "\f025"; }
.ri-printer-cloud-fill:before { content: "\f026"; }
.ri-printer-cloud-line:before { content: "\f027"; }
.ri-printer-fill:before { content: "\f028"; }
.ri-printer-line:before { content: "\f029"; }
.ri-product-hunt-fill:before { content: "\f02a"; }
.ri-product-hunt-line:before { content: "\f02b"; }
.ri-profile-fill:before { content: "\f02c"; }
.ri-profile-line:before { content: "\f02d"; }
.ri-projector-2-fill:before { content: "\f02e"; }
.ri-projector-2-line:before { content: "\f02f"; }
.ri-projector-fill:before { content: "\f030"; }
.ri-projector-line:before { content: "\f031"; }
.ri-psychotherapy-fill:before { content: "\f032"; }
.ri-psychotherapy-line:before { content: "\f033"; }
.ri-pulse-fill:before { content: "\f034"; }
.ri-pulse-line:before { content: "\f035"; }
.ri-pushpin-2-fill:before { content: "\f036"; }
.ri-pushpin-2-line:before { content: "\f037"; }
.ri-pushpin-fill:before { content: "\f038"; }
.ri-pushpin-line:before { content: "\f039"; }
.ri-qq-fill:before { content: "\f03a"; }
.ri-qq-line:before { content: "\f03b"; }
.ri-qr-code-fill:before { content: "\f03c"; }
.ri-qr-code-line:before { content: "\f03d"; }
.ri-qr-scan-2-fill:before { content: "\f03e"; }
.ri-qr-scan-2-line:before { content: "\f03f"; }
.ri-qr-scan-fill:before { content: "\f040"; }
.ri-qr-scan-line:before { content: "\f041"; }
.ri-question-answer-fill:before { content: "\f042"; }
.ri-question-answer-line:before { content: "\f043"; }
.ri-question-fill:before { content: "\f044"; }
.ri-question-line:before { content: "\f045"; }
.ri-question-mark:before { content: "\f046"; }
.ri-questionnaire-fill:before { content: "\f047"; }
.ri-questionnaire-line:before { content: "\f048"; }
.ri-quill-pen-fill:before { content: "\f049"; }
.ri-quill-pen-line:before { content: "\f04a"; }
.ri-radar-fill:before { content: "\f04b"; }
.ri-radar-line:before { content: "\f04c"; }
.ri-radio-2-fill:before { content: "\f04d"; }
.ri-radio-2-line:before { content: "\f04e"; }
.ri-radio-button-fill:before { content: "\f04f"; }
.ri-radio-button-line:before { content: "\f050"; }
.ri-radio-fill:before { content: "\f051"; }
.ri-radio-line:before { content: "\f052"; }
.ri-rainbow-fill:before { content: "\f053"; }
.ri-rainbow-line:before { content: "\f054"; }
.ri-rainy-fill:before { content: "\f055"; }
.ri-rainy-line:before { content: "\f056"; }
.ri-reactjs-fill:before { content: "\f057"; }
.ri-reactjs-line:before { content: "\f058"; }
.ri-record-circle-fill:before { content: "\f059"; }
.ri-record-circle-line:before { content: "\f05a"; }
.ri-record-mail-fill:before { content: "\f05b"; }
.ri-record-mail-line:before { content: "\f05c"; }
.ri-recycle-fill:before { content: "\f05d"; }
.ri-recycle-line:before { content: "\f05e"; }
.ri-red-packet-fill:before { content: "\f05f"; }
.ri-red-packet-line:before { content: "\f060"; }
.ri-reddit-fill:before { content: "\f061"; }
.ri-reddit-line:before { content: "\f062"; }
.ri-refresh-fill:before { content: "\f063"; }
.ri-refresh-line:before { content: "\f064"; }
.ri-refund-2-fill:before { content: "\f065"; }
.ri-refund-2-line:before { content: "\f066"; }
.ri-refund-fill:before { content: "\f067"; }
.ri-refund-line:before { content: "\f068"; }
.ri-registered-fill:before { content: "\f069"; }
.ri-registered-line:before { content: "\f06a"; }
.ri-remixicon-fill:before { content: "\f06b"; }
.ri-remixicon-line:before { content: "\f06c"; }
.ri-remote-control-2-fill:before { content: "\f06d"; }
.ri-remote-control-2-line:before { content: "\f06e"; }
.ri-remote-control-fill:before { content: "\f06f"; }
.ri-remote-control-line:before { content: "\f070"; }
.ri-repeat-2-fill:before { content: "\f071"; }
.ri-repeat-2-line:before { content: "\f072"; }
.ri-repeat-fill:before { content: "\f073"; }
.ri-repeat-line:before { content: "\f074"; }
.ri-repeat-one-fill:before { content: "\f075"; }
.ri-repeat-one-line:before { content: "\f076"; }
.ri-reply-all-fill:before { content: "\f077"; }
.ri-reply-all-line:before { content: "\f078"; }
.ri-reply-fill:before { content: "\f079"; }
.ri-reply-line:before { content: "\f07a"; }
.ri-reserved-fill:before { content: "\f07b"; }
.ri-reserved-line:before { content: "\f07c"; }
.ri-rest-time-fill:before { content: "\f07d"; }
.ri-rest-time-line:before { content: "\f07e"; }
.ri-restart-fill:before { content: "\f07f"; }
.ri-restart-line:before { content: "\f080"; }
.ri-restaurant-2-fill:before { content: "\f081"; }
.ri-restaurant-2-line:before { content: "\f082"; }
.ri-restaurant-fill:before { content: "\f083"; }
.ri-restaurant-line:before { content: "\f084"; }
.ri-rewind-fill:before { content: "\f085"; }
.ri-rewind-line:before { content: "\f086"; }
.ri-rewind-mini-fill:before { content: "\f087"; }
.ri-rewind-mini-line:before { content: "\f088"; }
.ri-rhythm-fill:before { content: "\f089"; }
.ri-rhythm-line:before { content: "\f08a"; }
.ri-riding-fill:before { content: "\f08b"; }
.ri-riding-line:before { content: "\f08c"; }
.ri-road-map-fill:before { content: "\f08d"; }
.ri-road-map-line:before { content: "\f08e"; }
.ri-roadster-fill:before { content: "\f08f"; }
.ri-roadster-line:before { content: "\f090"; }
.ri-robot-fill:before { content: "\f091"; }
.ri-robot-line:before { content: "\f092"; }
.ri-rocket-2-fill:before { content: "\f093"; }
.ri-rocket-2-line:before { content: "\f094"; }
.ri-rocket-fill:before { content: "\f095"; }
.ri-rocket-line:before { content: "\f096"; }
.ri-rotate-lock-fill:before { content: "\f097"; }
.ri-rotate-lock-line:before { content: "\f098"; }
.ri-rounded-corner:before { content: "\f099"; }
.ri-route-fill:before { content: "\f09a"; }
.ri-route-line:before { content: "\f09b"; }
.ri-router-fill:before { content: "\f09c"; }
.ri-router-line:before { content: "\f09d"; }
.ri-rss-fill:before { content: "\f09e"; }
.ri-rss-line:before { content: "\f09f"; }
.ri-ruler-2-fill:before { content: "\f0a0"; }
.ri-ruler-2-line:before { content: "\f0a1"; }
.ri-ruler-fill:before { content: "\f0a2"; }
.ri-ruler-line:before { content: "\f0a3"; }
.ri-run-fill:before { content: "\f0a4"; }
.ri-run-line:before { content: "\f0a5"; }
.ri-safari-fill:before { content: "\f0a6"; }
.ri-safari-line:before { content: "\f0a7"; }
.ri-safe-2-fill:before { content: "\f0a8"; }
.ri-safe-2-line:before { content: "\f0a9"; }
.ri-safe-fill:before { content: "\f0aa"; }
.ri-safe-line:before { content: "\f0ab"; }
.ri-sailboat-fill:before { content: "\f0ac"; }
.ri-sailboat-line:before { content: "\f0ad"; }
.ri-save-2-fill:before { content: "\f0ae"; }
.ri-save-2-line:before { content: "\f0af"; }
.ri-save-3-fill:before { content: "\f0b0"; }
.ri-save-3-line:before { content: "\f0b1"; }
.ri-save-fill:before { content: "\f0b2"; }
.ri-save-line:before { content: "\f0b3"; }
.ri-scales-2-fill:before { content: "\f0b4"; }
.ri-scales-2-line:before { content: "\f0b5"; }
.ri-scales-3-fill:before { content: "\f0b6"; }
.ri-scales-3-line:before { content: "\f0b7"; }
.ri-scales-fill:before { content: "\f0b8"; }
.ri-scales-line:before { content: "\f0b9"; }
.ri-scan-2-fill:before { content: "\f0ba"; }
.ri-scan-2-line:before { content: "\f0bb"; }
.ri-scan-fill:before { content: "\f0bc"; }
.ri-scan-line:before { content: "\f0bd"; }
.ri-scissors-2-fill:before { content: "\f0be"; }
.ri-scissors-2-line:before { content: "\f0bf"; }
.ri-scissors-cut-fill:before { content: "\f0c0"; }
.ri-scissors-cut-line:before { content: "\f0c1"; }
.ri-scissors-fill:before { content: "\f0c2"; }
.ri-scissors-line:before { content: "\f0c3"; }
.ri-screenshot-2-fill:before { content: "\f0c4"; }
.ri-screenshot-2-line:before { content: "\f0c5"; }
.ri-screenshot-fill:before { content: "\f0c6"; }
.ri-screenshot-line:before { content: "\f0c7"; }
.ri-sd-card-fill:before { content: "\f0c8"; }
.ri-sd-card-line:before { content: "\f0c9"; }
.ri-sd-card-mini-fill:before { content: "\f0ca"; }
.ri-sd-card-mini-line:before { content: "\f0cb"; }
.ri-search-2-fill:before { content: "\f0cc"; }
.ri-search-2-line:before { content: "\f0cd"; }
.ri-search-eye-fill:before { content: "\f0ce"; }
.ri-search-eye-line:before { content: "\f0cf"; }
.ri-search-fill:before { content: "\f0d0"; }
.ri-search-line:before { content: "\f0d1"; }
.ri-secure-payment-fill:before { content: "\f0d2"; }
.ri-secure-payment-line:before { content: "\f0d3"; }
.ri-seedling-fill:before { content: "\f0d4"; }
.ri-seedling-line:before { content: "\f0d5"; }
.ri-send-backward:before { content: "\f0d6"; }
.ri-send-plane-2-fill:before { content: "\f0d7"; }
.ri-send-plane-2-line:before { content: "\f0d8"; }
.ri-send-plane-fill:before { content: "\f0d9"; }
.ri-send-plane-line:before { content: "\f0da"; }
.ri-send-to-back:before { content: "\f0db"; }
.ri-sensor-fill:before { content: "\f0dc"; }
.ri-sensor-line:before { content: "\f0dd"; }
.ri-separator:before { content: "\f0de"; }
.ri-server-fill:before { content: "\f0df"; }
.ri-server-line:before { content: "\f0e0"; }
.ri-service-fill:before { content: "\f0e1"; }
.ri-service-line:before { content: "\f0e2"; }
.ri-settings-2-fill:before { content: "\f0e3"; }
.ri-settings-2-line:before { content: "\f0e4"; }
.ri-settings-3-fill:before { content: "\f0e5"; }
.ri-settings-3-line:before { content: "\f0e6"; }
.ri-settings-4-fill:before { content: "\f0e7"; }
.ri-settings-4-line:before { content: "\f0e8"; }
.ri-settings-5-fill:before { content: "\f0e9"; }
.ri-settings-5-line:before { content: "\f0ea"; }
.ri-settings-6-fill:before { content: "\f0eb"; }
.ri-settings-6-line:before { content: "\f0ec"; }
.ri-settings-fill:before { content: "\f0ed"; }
.ri-settings-line:before { content: "\f0ee"; }
.ri-shape-2-fill:before { content: "\f0ef"; }
.ri-shape-2-line:before { content: "\f0f0"; }
.ri-shape-fill:before { content: "\f0f1"; }
.ri-shape-line:before { content: "\f0f2"; }
.ri-share-box-fill:before { content: "\f0f3"; }
.ri-share-box-line:before { content: "\f0f4"; }
.ri-share-circle-fill:before { content: "\f0f5"; }
.ri-share-circle-line:before { content: "\f0f6"; }
.ri-share-fill:before { content: "\f0f7"; }
.ri-share-forward-2-fill:before { content: "\f0f8"; }
.ri-share-forward-2-line:before { content: "\f0f9"; }
.ri-share-forward-box-fill:before { content: "\f0fa"; }
.ri-share-forward-box-line:before { content: "\f0fb"; }
.ri-share-forward-fill:before { content: "\f0fc"; }
.ri-share-forward-line:before { content: "\f0fd"; }
.ri-share-line:before { content: "\f0fe"; }
.ri-shield-check-fill:before { content: "\f0ff"; }
.ri-shield-check-line:before { content: "\f100"; }
.ri-shield-cross-fill:before { content: "\f101"; }
.ri-shield-cross-line:before { content: "\f102"; }
.ri-shield-fill:before { content: "\f103"; }
.ri-shield-flash-fill:before { content: "\f104"; }
.ri-shield-flash-line:before { content: "\f105"; }
.ri-shield-keyhole-fill:before { content: "\f106"; }
.ri-shield-keyhole-line:before { content: "\f107"; }
.ri-shield-line:before { content: "\f108"; }
.ri-shield-star-fill:before { content: "\f109"; }
.ri-shield-star-line:before { content: "\f10a"; }
.ri-shield-user-fill:before { content: "\f10b"; }
.ri-shield-user-line:before { content: "\f10c"; }
.ri-ship-2-fill:before { content: "\f10d"; }
.ri-ship-2-line:before { content: "\f10e"; }
.ri-ship-fill:before { content: "\f10f"; }
.ri-ship-line:before { content: "\f110"; }
.ri-shirt-fill:before { content: "\f111"; }
.ri-shirt-line:before { content: "\f112"; }
.ri-shopping-bag-2-fill:before { content: "\f113"; }
.ri-shopping-bag-2-line:before { content: "\f114"; }
.ri-shopping-bag-3-fill:before { content: "\f115"; }
.ri-shopping-bag-3-line:before { content: "\f116"; }
.ri-shopping-bag-fill:before { content: "\f117"; }
.ri-shopping-bag-line:before { content: "\f118"; }
.ri-shopping-basket-2-fill:before { content: "\f119"; }
.ri-shopping-basket-2-line:before { content: "\f11a"; }
.ri-shopping-basket-fill:before { content: "\f11b"; }
.ri-shopping-basket-line:before { content: "\f11c"; }
.ri-shopping-cart-2-fill:before { content: "\f11d"; }
.ri-shopping-cart-2-line:before { content: "\f11e"; }
.ri-shopping-cart-fill:before { content: "\f11f"; }
.ri-shopping-cart-line:before { content: "\f120"; }
.ri-showers-fill:before { content: "\f121"; }
.ri-showers-line:before { content: "\f122"; }
.ri-shuffle-fill:before { content: "\f123"; }
.ri-shuffle-line:before { content: "\f124"; }
.ri-shut-down-fill:before { content: "\f125"; }
.ri-shut-down-line:before { content: "\f126"; }
.ri-side-bar-fill:before { content: "\f127"; }
.ri-side-bar-line:before { content: "\f128"; }
.ri-signal-tower-fill:before { content: "\f129"; }
.ri-signal-tower-line:before { content: "\f12a"; }
.ri-signal-wifi-1-fill:before { content: "\f12b"; }
.ri-signal-wifi-1-line:before { content: "\f12c"; }
.ri-signal-wifi-2-fill:before { content: "\f12d"; }
.ri-signal-wifi-2-line:before { content: "\f12e"; }
.ri-signal-wifi-3-fill:before { content: "\f12f"; }
.ri-signal-wifi-3-line:before { content: "\f130"; }
.ri-signal-wifi-error-fill:before { content: "\f131"; }
.ri-signal-wifi-error-line:before { content: "\f132"; }
.ri-signal-wifi-fill:before { content: "\f133"; }
.ri-signal-wifi-line:before { content: "\f134"; }
.ri-signal-wifi-off-fill:before { content: "\f135"; }
.ri-signal-wifi-off-line:before { content: "\f136"; }
.ri-sim-card-2-fill:before { content: "\f137"; }
.ri-sim-card-2-line:before { content: "\f138"; }
.ri-sim-card-fill:before { content: "\f139"; }
.ri-sim-card-line:before { content: "\f13a"; }
.ri-single-quotes-l:before { content: "\f13b"; }
.ri-single-quotes-r:before { content: "\f13c"; }
.ri-sip-fill:before { content: "\f13d"; }
.ri-sip-line:before { content: "\f13e"; }
.ri-skip-back-fill:before { content: "\f13f"; }
.ri-skip-back-line:before { content: "\f140"; }
.ri-skip-back-mini-fill:before { content: "\f141"; }
.ri-skip-back-mini-line:before { content: "\f142"; }
.ri-skip-forward-fill:before { content: "\f143"; }
.ri-skip-forward-line:before { content: "\f144"; }
.ri-skip-forward-mini-fill:before { content: "\f145"; }
.ri-skip-forward-mini-line:before { content: "\f146"; }
.ri-skull-2-fill:before { content: "\f147"; }
.ri-skull-2-line:before { content: "\f148"; }
.ri-skull-fill:before { content: "\f149"; }
.ri-skull-line:before { content: "\f14a"; }
.ri-skype-fill:before { content: "\f14b"; }
.ri-skype-line:before { content: "\f14c"; }
.ri-slack-fill:before { content: "\f14d"; }
.ri-slack-line:before { content: "\f14e"; }
.ri-slice-fill:before { content: "\f14f"; }
.ri-slice-line:before { content: "\f150"; }
.ri-slideshow-2-fill:before { content: "\f151"; }
.ri-slideshow-2-line:before { content: "\f152"; }
.ri-slideshow-3-fill:before { content: "\f153"; }
.ri-slideshow-3-line:before { content: "\f154"; }
.ri-slideshow-4-fill:before { content: "\f155"; }
.ri-slideshow-4-line:before { content: "\f156"; }
.ri-slideshow-fill:before { content: "\f157"; }
.ri-slideshow-line:before { content: "\f158"; }
.ri-smartphone-fill:before { content: "\f159"; }
.ri-smartphone-line:before { content: "\f15a"; }
.ri-snapchat-fill:before { content: "\f15b"; }
.ri-snapchat-line:before { content: "\f15c"; }
.ri-snowy-fill:before { content: "\f15d"; }
.ri-snowy-line:before { content: "\f15e"; }
.ri-sort-asc:before { content: "\f15f"; }
.ri-sort-desc:before { content: "\f160"; }
.ri-sound-module-fill:before { content: "\f161"; }
.ri-sound-module-line:before { content: "\f162"; }
.ri-soundcloud-fill:before { content: "\f163"; }
.ri-soundcloud-line:before { content: "\f164"; }
.ri-space-ship-fill:before { content: "\f165"; }
.ri-space-ship-line:before { content: "\f166"; }
.ri-space:before { content: "\f167"; }
.ri-spam-2-fill:before { content: "\f168"; }
.ri-spam-2-line:before { content: "\f169"; }
.ri-spam-3-fill:before { content: "\f16a"; }
.ri-spam-3-line:before { content: "\f16b"; }
.ri-spam-fill:before { content: "\f16c"; }
.ri-spam-line:before { content: "\f16d"; }
.ri-speaker-2-fill:before { content: "\f16e"; }
.ri-speaker-2-line:before { content: "\f16f"; }
.ri-speaker-3-fill:before { content: "\f170"; }
.ri-speaker-3-line:before { content: "\f171"; }
.ri-speaker-fill:before { content: "\f172"; }
.ri-speaker-line:before { content: "\f173"; }
.ri-spectrum-fill:before { content: "\f174"; }
.ri-spectrum-line:before { content: "\f175"; }
.ri-speed-fill:before { content: "\f176"; }
.ri-speed-line:before { content: "\f177"; }
.ri-speed-mini-fill:before { content: "\f178"; }
.ri-speed-mini-line:before { content: "\f179"; }
.ri-split-cells-horizontal:before { content: "\f17a"; }
.ri-split-cells-vertical:before { content: "\f17b"; }
.ri-spotify-fill:before { content: "\f17c"; }
.ri-spotify-line:before { content: "\f17d"; }
.ri-spy-fill:before { content: "\f17e"; }
.ri-spy-line:before { content: "\f17f"; }
.ri-stack-fill:before { content: "\f180"; }
.ri-stack-line:before { content: "\f181"; }
.ri-stack-overflow-fill:before { content: "\f182"; }
.ri-stack-overflow-line:before { content: "\f183"; }
.ri-stackshare-fill:before { content: "\f184"; }
.ri-stackshare-line:before { content: "\f185"; }
.ri-star-fill:before { content: "\f186"; }
.ri-star-half-fill:before { content: "\f187"; }
.ri-star-half-line:before { content: "\f188"; }
.ri-star-half-s-fill:before { content: "\f189"; }
.ri-star-half-s-line:before { content: "\f18a"; }
.ri-star-line:before { content: "\f18b"; }
.ri-star-s-fill:before { content: "\f18c"; }
.ri-star-s-line:before { content: "\f18d"; }
.ri-star-smile-fill:before { content: "\f18e"; }
.ri-star-smile-line:before { content: "\f18f"; }
.ri-steam-fill:before { content: "\f190"; }
.ri-steam-line:before { content: "\f191"; }
.ri-steering-2-fill:before { content: "\f192"; }
.ri-steering-2-line:before { content: "\f193"; }
.ri-steering-fill:before { content: "\f194"; }
.ri-steering-line:before { content: "\f195"; }
.ri-stethoscope-fill:before { content: "\f196"; }
.ri-stethoscope-line:before { content: "\f197"; }
.ri-sticky-note-2-fill:before { content: "\f198"; }
.ri-sticky-note-2-line:before { content: "\f199"; }
.ri-sticky-note-fill:before { content: "\f19a"; }
.ri-sticky-note-line:before { content: "\f19b"; }
.ri-stock-fill:before { content: "\f19c"; }
.ri-stock-line:before { content: "\f19d"; }
.ri-stop-circle-fill:before { content: "\f19e"; }
.ri-stop-circle-line:before { content: "\f19f"; }
.ri-stop-fill:before { content: "\f1a0"; }
.ri-stop-line:before { content: "\f1a1"; }
.ri-stop-mini-fill:before { content: "\f1a2"; }
.ri-stop-mini-line:before { content: "\f1a3"; }
.ri-store-2-fill:before { content: "\f1a4"; }
.ri-store-2-line:before { content: "\f1a5"; }
.ri-store-3-fill:before { content: "\f1a6"; }
.ri-store-3-line:before { content: "\f1a7"; }
.ri-store-fill:before { content: "\f1a8"; }
.ri-store-line:before { content: "\f1a9"; }
.ri-strikethrough-2:before { content: "\f1aa"; }
.ri-strikethrough:before { content: "\f1ab"; }
.ri-subscript-2:before { content: "\f1ac"; }
.ri-subscript:before { content: "\f1ad"; }
.ri-subtract-fill:before { content: "\f1ae"; }
.ri-subtract-line:before { content: "\f1af"; }
.ri-subway-fill:before { content: "\f1b0"; }
.ri-subway-line:before { content: "\f1b1"; }
.ri-subway-wifi-fill:before { content: "\f1b2"; }
.ri-subway-wifi-line:before { content: "\f1b3"; }
.ri-suitcase-2-fill:before { content: "\f1b4"; }
.ri-suitcase-2-line:before { content: "\f1b5"; }
.ri-suitcase-3-fill:before { content: "\f1b6"; }
.ri-suitcase-3-line:before { content: "\f1b7"; }
.ri-suitcase-fill:before { content: "\f1b8"; }
.ri-suitcase-line:before { content: "\f1b9"; }
.ri-sun-cloudy-fill:before { content: "\f1ba"; }
.ri-sun-cloudy-line:before { content: "\f1bb"; }
.ri-sun-fill:before { content: "\f1bc"; }
.ri-sun-foggy-fill:before { content: "\f1bd"; }
.ri-sun-foggy-line:before { content: "\f1be"; }
.ri-sun-line:before { content: "\f1bf"; }
.ri-superscript-2:before { content: "\f1c0"; }
.ri-superscript:before { content: "\f1c1"; }
.ri-surgical-mask-fill:before { content: "\f1c2"; }
.ri-surgical-mask-line:before { content: "\f1c3"; }
.ri-surround-sound-fill:before { content: "\f1c4"; }
.ri-surround-sound-line:before { content: "\f1c5"; }
.ri-survey-fill:before { content: "\f1c6"; }
.ri-survey-line:before { content: "\f1c7"; }
.ri-swap-box-fill:before { content: "\f1c8"; }
.ri-swap-box-line:before { content: "\f1c9"; }
.ri-swap-fill:before { content: "\f1ca"; }
.ri-swap-line:before { content: "\f1cb"; }
.ri-switch-fill:before { content: "\f1cc"; }
.ri-switch-line:before { content: "\f1cd"; }
.ri-sword-fill:before { content: "\f1ce"; }
.ri-sword-line:before { content: "\f1cf"; }
.ri-syringe-fill:before { content: "\f1d0"; }
.ri-syringe-line:before { content: "\f1d1"; }
.ri-t-box-fill:before { content: "\f1d2"; }
.ri-t-box-line:before { content: "\f1d3"; }
.ri-t-shirt-2-fill:before { content: "\f1d4"; }
.ri-t-shirt-2-line:before { content: "\f1d5"; }
.ri-t-shirt-air-fill:before { content: "\f1d6"; }
.ri-t-shirt-air-line:before { content: "\f1d7"; }
.ri-t-shirt-fill:before { content: "\f1d8"; }
.ri-t-shirt-line:before { content: "\f1d9"; }
.ri-table-2:before { content: "\f1da"; }
.ri-table-alt-fill:before { content: "\f1db"; }
.ri-table-alt-line:before { content: "\f1dc"; }
.ri-table-fill:before { content: "\f1dd"; }
.ri-table-line:before { content: "\f1de"; }
.ri-tablet-fill:before { content: "\f1df"; }
.ri-tablet-line:before { content: "\f1e0"; }
.ri-takeaway-fill:before { content: "\f1e1"; }
.ri-takeaway-line:before { content: "\f1e2"; }
.ri-taobao-fill:before { content: "\f1e3"; }
.ri-taobao-line:before { content: "\f1e4"; }
.ri-tape-fill:before { content: "\f1e5"; }
.ri-tape-line:before { content: "\f1e6"; }
.ri-task-fill:before { content: "\f1e7"; }
.ri-task-line:before { content: "\f1e8"; }
.ri-taxi-fill:before { content: "\f1e9"; }
.ri-taxi-line:before { content: "\f1ea"; }
.ri-taxi-wifi-fill:before { content: "\f1eb"; }
.ri-taxi-wifi-line:before { content: "\f1ec"; }
.ri-team-fill:before { content: "\f1ed"; }
.ri-team-line:before { content: "\f1ee"; }
.ri-telegram-fill:before { content: "\f1ef"; }
.ri-telegram-line:before { content: "\f1f0"; }
.ri-temp-cold-fill:before { content: "\f1f1"; }
.ri-temp-cold-line:before { content: "\f1f2"; }
.ri-temp-hot-fill:before { content: "\f1f3"; }
.ri-temp-hot-line:before { content: "\f1f4"; }
.ri-terminal-box-fill:before { content: "\f1f5"; }
.ri-terminal-box-line:before { content: "\f1f6"; }
.ri-terminal-fill:before { content: "\f1f7"; }
.ri-terminal-line:before { content: "\f1f8"; }
.ri-terminal-window-fill:before { content: "\f1f9"; }
.ri-terminal-window-line:before { content: "\f1fa"; }
.ri-test-tube-fill:before { content: "\f1fb"; }
.ri-test-tube-line:before { content: "\f1fc"; }
.ri-text-direction-l:before { content: "\f1fd"; }
.ri-text-direction-r:before { content: "\f1fe"; }
.ri-text-spacing:before { content: "\f1ff"; }
.ri-text-wrap:before { content: "\f200"; }
.ri-text:before { content: "\f201"; }
.ri-thermometer-fill:before { content: "\f202"; }
.ri-thermometer-line:before { content: "\f203"; }
.ri-thumb-down-fill:before { content: "\f204"; }
.ri-thumb-down-line:before { content: "\f205"; }
.ri-thumb-up-fill:before { content: "\f206"; }
.ri-thumb-up-line:before { content: "\f207"; }
.ri-thunderstorms-fill:before { content: "\f208"; }
.ri-thunderstorms-line:before { content: "\f209"; }
.ri-ticket-2-fill:before { content: "\f20a"; }
.ri-ticket-2-line:before { content: "\f20b"; }
.ri-ticket-fill:before { content: "\f20c"; }
.ri-ticket-line:before { content: "\f20d"; }
.ri-time-fill:before { content: "\f20e"; }
.ri-time-line:before { content: "\f20f"; }
.ri-timer-2-fill:before { content: "\f210"; }
.ri-timer-2-line:before { content: "\f211"; }
.ri-timer-fill:before { content: "\f212"; }
.ri-timer-flash-fill:before { content: "\f213"; }
.ri-timer-flash-line:before { content: "\f214"; }
.ri-timer-line:before { content: "\f215"; }
.ri-todo-fill:before { content: "\f216"; }
.ri-todo-line:before { content: "\f217"; }
.ri-toggle-fill:before { content: "\f218"; }
.ri-toggle-line:before { content: "\f219"; }
.ri-tools-fill:before { content: "\f21a"; }
.ri-tools-line:before { content: "\f21b"; }
.ri-tornado-fill:before { content: "\f21c"; }
.ri-tornado-line:before { content: "\f21d"; }
.ri-trademark-fill:before { content: "\f21e"; }
.ri-trademark-line:before { content: "\f21f"; }
.ri-traffic-light-fill:before { content: "\f220"; }
.ri-traffic-light-line:before { content: "\f221"; }
.ri-train-fill:before { content: "\f222"; }
.ri-train-line:before { content: "\f223"; }
.ri-train-wifi-fill:before { content: "\f224"; }
.ri-train-wifi-line:before { content: "\f225"; }
.ri-translate-2:before { content: "\f226"; }
.ri-translate:before { content: "\f227"; }
.ri-travesti-fill:before { content: "\f228"; }
.ri-travesti-line:before { content: "\f229"; }
.ri-treasure-map-fill:before { content: "\f22a"; }
.ri-treasure-map-line:before { content: "\f22b"; }
.ri-trello-fill:before { content: "\f22c"; }
.ri-trello-line:before { content: "\f22d"; }
.ri-trophy-fill:before { content: "\f22e"; }
.ri-trophy-line:before { content: "\f22f"; }
.ri-truck-fill:before { content: "\f230"; }
.ri-truck-line:before { content: "\f231"; }
.ri-tumblr-fill:before { content: "\f232"; }
.ri-tumblr-line:before { content: "\f233"; }
.ri-tv-2-fill:before { content: "\f234"; }
.ri-tv-2-line:before { content: "\f235"; }
.ri-tv-fill:before { content: "\f236"; }
.ri-tv-line:before { content: "\f237"; }
.ri-twitch-fill:before { content: "\f238"; }
.ri-twitch-line:before { content: "\f239"; }
.ri-twitter-fill:before { content: "\f23a"; }
.ri-twitter-line:before { content: "\f23b"; }
.ri-typhoon-fill:before { content: "\f23c"; }
.ri-typhoon-line:before { content: "\f23d"; }
.ri-u-disk-fill:before { content: "\f23e"; }
.ri-u-disk-line:before { content: "\f23f"; }
.ri-ubuntu-fill:before { content: "\f240"; }
.ri-ubuntu-line:before { content: "\f241"; }
.ri-umbrella-fill:before { content: "\f242"; }
.ri-umbrella-line:before { content: "\f243"; }
.ri-underline:before { content: "\f244"; }
.ri-uninstall-fill:before { content: "\f245"; }
.ri-uninstall-line:before { content: "\f246"; }
.ri-unsplash-fill:before { content: "\f247"; }
.ri-unsplash-line:before { content: "\f248"; }
.ri-upload-2-fill:before { content: "\f249"; }
.ri-upload-2-line:before { content: "\f24a"; }
.ri-upload-cloud-2-fill:before { content: "\f24b"; }
.ri-upload-cloud-2-line:before { content: "\f24c"; }
.ri-upload-cloud-fill:before { content: "\f24d"; }
.ri-upload-cloud-line:before { content: "\f24e"; }
.ri-upload-fill:before { content: "\f24f"; }
.ri-upload-line:before { content: "\f250"; }
.ri-usb-fill:before { content: "\f251"; }
.ri-usb-line:before { content: "\f252"; }
.ri-user-2-fill:before { content: "\f253"; }
.ri-user-2-line:before { content: "\f254"; }
.ri-user-3-fill:before { content: "\f255"; }
.ri-user-3-line:before { content: "\f256"; }
.ri-user-4-fill:before { content: "\f257"; }
.ri-user-4-line:before { content: "\f258"; }
.ri-user-5-fill:before { content: "\f259"; }
.ri-user-5-line:before { content: "\f25a"; }
.ri-user-6-fill:before { content: "\f25b"; }
.ri-user-6-line:before { content: "\f25c"; }
.ri-user-add-fill:before { content: "\f25d"; }
.ri-user-add-line:before { content: "\f25e"; }
.ri-user-fill:before { content: "\f25f"; }
.ri-user-follow-fill:before { content: "\f260"; }
.ri-user-follow-line:before { content: "\f261"; }
.ri-user-heart-fill:before { content: "\f262"; }
.ri-user-heart-line:before { content: "\f263"; }
.ri-user-line:before { content: "\f264"; }
.ri-user-location-fill:before { content: "\f265"; }
.ri-user-location-line:before { content: "\f266"; }
.ri-user-received-2-fill:before { content: "\f267"; }
.ri-user-received-2-line:before { content: "\f268"; }
.ri-user-received-fill:before { content: "\f269"; }
.ri-user-received-line:before { content: "\f26a"; }
.ri-user-search-fill:before { content: "\f26b"; }
.ri-user-search-line:before { content: "\f26c"; }
.ri-user-settings-fill:before { content: "\f26d"; }
.ri-user-settings-line:before { content: "\f26e"; }
.ri-user-shared-2-fill:before { content: "\f26f"; }
.ri-user-shared-2-line:before { content: "\f270"; }
.ri-user-shared-fill:before { content: "\f271"; }
.ri-user-shared-line:before { content: "\f272"; }
.ri-user-smile-fill:before { content: "\f273"; }
.ri-user-smile-line:before { content: "\f274"; }
.ri-user-star-fill:before { content: "\f275"; }
.ri-user-star-line:before { content: "\f276"; }
.ri-user-unfollow-fill:before { content: "\f277"; }
.ri-user-unfollow-line:before { content: "\f278"; }
.ri-user-voice-fill:before { content: "\f279"; }
.ri-user-voice-line:before { content: "\f27a"; }
.ri-video-add-fill:before { content: "\f27b"; }
.ri-video-add-line:before { content: "\f27c"; }
.ri-video-chat-fill:before { content: "\f27d"; }
.ri-video-chat-line:before { content: "\f27e"; }
.ri-video-download-fill:before { content: "\f27f"; }
.ri-video-download-line:before { content: "\f280"; }
.ri-video-fill:before { content: "\f281"; }
.ri-video-line:before { content: "\f282"; }
.ri-video-upload-fill:before { content: "\f283"; }
.ri-video-upload-line:before { content: "\f284"; }
.ri-vidicon-2-fill:before { content: "\f285"; }
.ri-vidicon-2-line:before { content: "\f286"; }
.ri-vidicon-fill:before { content: "\f287"; }
.ri-vidicon-line:before { content: "\f288"; }
.ri-vimeo-fill:before { content: "\f289"; }
.ri-vimeo-line:before { content: "\f28a"; }
.ri-vip-crown-2-fill:before { content: "\f28b"; }
.ri-vip-crown-2-line:before { content: "\f28c"; }
.ri-vip-crown-fill:before { content: "\f28d"; }
.ri-vip-crown-line:before { content: "\f28e"; }
.ri-vip-diamond-fill:before { content: "\f28f"; }
.ri-vip-diamond-line:before { content: "\f290"; }
.ri-vip-fill:before { content: "\f291"; }
.ri-vip-line:before { content: "\f292"; }
.ri-virus-fill:before { content: "\f293"; }
.ri-virus-line:before { content: "\f294"; }
.ri-visa-fill:before { content: "\f295"; }
.ri-visa-line:before { content: "\f296"; }
.ri-voice-recognition-fill:before { content: "\f297"; }
.ri-voice-recognition-line:before { content: "\f298"; }
.ri-voiceprint-fill:before { content: "\f299"; }
.ri-voiceprint-line:before { content: "\f29a"; }
.ri-volume-down-fill:before { content: "\f29b"; }
.ri-volume-down-line:before { content: "\f29c"; }
.ri-volume-mute-fill:before { content: "\f29d"; }
.ri-volume-mute-line:before { content: "\f29e"; }
.ri-volume-off-vibrate-fill:before { content: "\f29f"; }
.ri-volume-off-vibrate-line:before { content: "\f2a0"; }
.ri-volume-up-fill:before { content: "\f2a1"; }
.ri-volume-up-line:before { content: "\f2a2"; }
.ri-volume-vibrate-fill:before { content: "\f2a3"; }
.ri-volume-vibrate-line:before { content: "\f2a4"; }
.ri-vuejs-fill:before { content: "\f2a5"; }
.ri-vuejs-line:before { content: "\f2a6"; }
.ri-walk-fill:before { content: "\f2a7"; }
.ri-walk-line:before { content: "\f2a8"; }
.ri-wallet-2-fill:before { content: "\f2a9"; }
.ri-wallet-2-line:before { content: "\f2aa"; }
.ri-wallet-3-fill:before { content: "\f2ab"; }
.ri-wallet-3-line:before { content: "\f2ac"; }
.ri-wallet-fill:before { content: "\f2ad"; }
.ri-wallet-line:before { content: "\f2ae"; }
.ri-water-flash-fill:before { content: "\f2af"; }
.ri-water-flash-line:before { content: "\f2b0"; }
.ri-webcam-fill:before { content: "\f2b1"; }
.ri-webcam-line:before { content: "\f2b2"; }
.ri-wechat-2-fill:before { content: "\f2b3"; }
.ri-wechat-2-line:before { content: "\f2b4"; }
.ri-wechat-fill:before { content: "\f2b5"; }
.ri-wechat-line:before { content: "\f2b6"; }
.ri-wechat-pay-fill:before { content: "\f2b7"; }
.ri-wechat-pay-line:before { content: "\f2b8"; }
.ri-weibo-fill:before { content: "\f2b9"; }
.ri-weibo-line:before { content: "\f2ba"; }
.ri-whatsapp-fill:before { content: "\f2bb"; }
.ri-whatsapp-line:before { content: "\f2bc"; }
.ri-wheelchair-fill:before { content: "\f2bd"; }
.ri-wheelchair-line:before { content: "\f2be"; }
.ri-wifi-fill:before { content: "\f2bf"; }
.ri-wifi-line:before { content: "\f2c0"; }
.ri-wifi-off-fill:before { content: "\f2c1"; }
.ri-wifi-off-line:before { content: "\f2c2"; }
.ri-window-2-fill:before { content: "\f2c3"; }
.ri-window-2-line:before { content: "\f2c4"; }
.ri-window-fill:before { content: "\f2c5"; }
.ri-window-line:before { content: "\f2c6"; }
.ri-windows-fill:before { content: "\f2c7"; }
.ri-windows-line:before { content: "\f2c8"; }
.ri-windy-fill:before { content: "\f2c9"; }
.ri-windy-line:before { content: "\f2ca"; }
.ri-wireless-charging-fill:before { content: "\f2cb"; }
.ri-wireless-charging-line:before { content: "\f2cc"; }
.ri-women-fill:before { content: "\f2cd"; }
.ri-women-line:before { content: "\f2ce"; }
.ri-wubi-input:before { content: "\f2cf"; }
.ri-xbox-fill:before { content: "\f2d0"; }
.ri-xbox-line:before { content: "\f2d1"; }
.ri-xing-fill:before { content: "\f2d2"; }
.ri-xing-line:before { content: "\f2d3"; }
.ri-youtube-fill:before { content: "\f2d4"; }
.ri-youtube-line:before { content: "\f2d5"; }
.ri-zcool-fill:before { content: "\f2d6"; }
.ri-zcool-line:before { content: "\f2d7"; }
.ri-zhihu-fill:before { content: "\f2d8"; }
.ri-zhihu-line:before { content: "\f2d9"; }
.ri-zoom-in-fill:before { content: "\f2da"; }
.ri-zoom-in-line:before { content: "\f2db"; }
.ri-zoom-out-fill:before { content: "\f2dc"; }
.ri-zoom-out-line:before { content: "\f2dd"; }
.ri-zzz-fill:before { content: "\f2de"; }
.ri-zzz-line:before { content: "\f2df"; }

.dataTable-wrapper.no-header .dataTable-container {
  border-top: 1px solid #d9d9d9;
}

.dataTable-wrapper.no-footer .dataTable-container {
  border-bottom: 1px solid #d9d9d9;
}

.dataTable-top,
.dataTable-bottom {
  padding: 8px 10px;
}

.dataTable-top > nav:first-child,
.dataTable-top > div:first-child,
.dataTable-bottom > nav:first-child,
.dataTable-bottom > div:first-child {
  float: left;
}

.dataTable-top > nav:last-child,
.dataTable-top > div:last-child,
.dataTable-bottom > nav:last-child,
.dataTable-bottom > div:last-child {
  float: right;
}

.dataTable-selector {
  padding: 6px;
}

.dataTable-input {
  padding: 6px 12px;
}

.dataTable-info {
  margin: 7px 0;
}

/* PAGER */
.dataTable-pagination ul {
  margin: 0;
  padding-left: 0;
}

.dataTable-pagination li {
  list-style: none;
  float: left;
}

.dataTable-pagination a {
  border: 1px solid transparent;
  float: left;
  margin-left: 2px;
  padding: 6px 12px;
  position: relative;
  text-decoration: none;
  color: #333;
}

.dataTable-pagination a:hover {
  background-color: #d9d9d9;
}

.dataTable-pagination .active a,
.dataTable-pagination .active a:focus,
.dataTable-pagination .active a:hover {
  background-color: #d9d9d9;
  cursor: default;
}

.dataTable-pagination .ellipsis a,
.dataTable-pagination .disabled a,
.dataTable-pagination .disabled a:focus,
.dataTable-pagination .disabled a:hover {
  cursor: not-allowed;
}

.dataTable-pagination .disabled a,
.dataTable-pagination .disabled a:focus,
.dataTable-pagination .disabled a:hover {
  cursor: not-allowed;
  opacity: 0.4;
}

.dataTable-pagination .pager a {
  font-weight: bold;
}

/* TABLE */
.dataTable-table {
  max-width: 100%;
  width: 100%;
  border-spacing: 0;
  border-collapse: separate;
}

.dataTable-table > tbody > tr > td,
.dataTable-table > tbody > tr > th,
.dataTable-table > tfoot > tr > td,
.dataTable-table > tfoot > tr > th,
.dataTable-table > thead > tr > td,
.dataTable-table > thead > tr > th {
  vertical-align: top;
  padding: 8px 10px;
}

.dataTable-table > thead > tr > th {
  vertical-align: bottom;
  text-align: left;
  border-bottom: 1px solid #d9d9d9;
}

.dataTable-table > tfoot > tr > th {
  vertical-align: bottom;
  text-align: left;
  border-top: 1px solid #d9d9d9;
}

.dataTable-table th {
  vertical-align: bottom;
  text-align: left;
}

.dataTable-table th a {
  text-decoration: none;
  color: inherit;
}

.dataTable-sorter {
  display: inline-block;
  height: 100%;
  position: relative;
  width: 100%;
}

.dataTable-sorter::before,
.dataTable-sorter::after {
  content: "";
  height: 0;
  width: 0;
  position: absolute;
  right: 4px;
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  opacity: 0.2;
}

.dataTable-sorter::before {
  border-top: 4px solid #000;
  bottom: 0px;
}

.dataTable-sorter::after {
  border-bottom: 4px solid #000;
  border-top: 4px solid transparent;
  top: 0px;
}

.asc .dataTable-sorter::after,
.desc .dataTable-sorter::before {
  opacity: 0.6;
}

.dataTables-empty {
  text-align: center;
}

.dataTable-top::after, .dataTable-bottom::after {
  clear: both;
  content: " ";
  display: table;
}

/**
* Template Name: NiceAdmin - v2.2.2
* Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
:root {
  scroll-behavior: smooth;
}

body {
  font-family: "Open Sans", sans-serif;
  background: #f6f9ff;
  color: #444444;
}

a {
  color: #4154f1;
  text-decoration: none;
}

a:hover {
  color: #717ff5;
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Nunito", sans-serif;
}

/*--------------------------------------------------------------
# Main
--------------------------------------------------------------*/
#main {
  margin-top: 60px;
  padding: 20px 30px;
  transition: all 0.3s;
}
@media (max-width: 1199px) {
  #main {
    padding: 20px;
  }
}

/*--------------------------------------------------------------
# Page Title
--------------------------------------------------------------*/
.pagetitle {
  margin-bottom: 10px;
}
.pagetitle h1 {
  font-size: 24px;
  margin-bottom: 0;
  font-weight: 600;
  color: #012970;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 99999;
  background: #4154f1;
  width: 40px;
  height: 40px;
  border-radius: 4px;
  transition: all 0.4s;
}
.back-to-top i {
  font-size: 24px;
  color: #fff;
  line-height: 0;
}
.back-to-top:hover {
  background: #6776f4;
  color: #fff;
}
.back-to-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Override some default Bootstrap stylings
--------------------------------------------------------------*/
/* Dropdown menus */
.dropdown-menu {
  border-radius: 4px;
  padding: 10px 0;
  -webkit-animation-name: dropdown-animate;
  animation-name: dropdown-animate;
  -webkit-animation-duration: 0.2s;
  animation-duration: 0.2s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  border: 0;
  box-shadow: 0 5px 30px 0 rgba(82, 63, 105, 0.2);
}
.dropdown-menu .dropdown-header, .dropdown-menu .dropdown-footer {
  text-align: center;
  font-size: 15px;
  padding: 10px 25px;
}
.dropdown-menu .dropdown-footer a {
  color: #444444;
  text-decoration: underline;
}
.dropdown-menu .dropdown-footer a:hover {
  text-decoration: none;
}
.dropdown-menu .dropdown-divider {
  color: #a5c5fe;
  margin: 0;
}
.dropdown-menu .dropdown-item {
  font-size: 14px;
  padding: 10px 15px;
  transition: 0.3s;
}
.dropdown-menu .dropdown-item i {
  margin-right: 10px;
  font-size: 18px;
  line-height: 0;
}
.dropdown-menu .dropdown-item:hover {
  background-color: #f6f9ff;
}

@media (min-width: 768px) {
  .dropdown-menu-arrow::before {
    content: "";
    width: 13px;
    height: 13px;
    background: #fff;
    position: absolute;
    top: -7px;
    right: 20px;
    transform: rotate(45deg);
    border-top: 1px solid #eaedf1;
    border-left: 1px solid #eaedf1;
  }
}
@-webkit-keyframes dropdown-animate {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
  0% {
    opacity: 0;
  }
}
@keyframes dropdown-animate {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
  0% {
    opacity: 0;
  }
}
/* Light Backgrounds */
.bg-primary-light {
  background-color: #cfe2ff;
  border-color: #cfe2ff;
}

.bg-secondary-light {
  background-color: #e2e3e5;
  border-color: #e2e3e5;
}

.bg-success-light {
  background-color: #d1e7dd;
  border-color: #d1e7dd;
}

.bg-danger-light {
  background-color: #f8d7da;
  border-color: #f8d7da;
}

.bg-warning-light {
  background-color: #fff3cd;
  border-color: #fff3cd;
}

.bg-info-light {
  background-color: #cff4fc;
  border-color: #cff4fc;
}

.bg-dark-light {
  background-color: #d3d3d4;
  border-color: #d3d3d4;
}

/* Card */
.card {
  margin-bottom: 30px;
  border: none;
  border-radius: 5px;
  box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);
}

.card-header, .card-footer {
  border-color: #ebeef4;
  background-color: #fff;
  color: #798eb3;
  padding: 15px;
}

.card-title {
  padding: 20px 0 15px 0;
  font-size: 18px;
  font-weight: 500;
  color: #012970;
  font-family: "Poppins", sans-serif;
}
.card-title span {
  color: #899bbd;
  font-size: 14px;
  font-weight: 400;
}
.card-body {
  padding: 0 20px 20px 20px;
}

.card-img-overlay {
  background-color: rgba(255, 255, 255, 0.6);
}

/* Alerts */
.alert-heading {
  font-weight: 500;
  font-family: "Poppins", sans-serif;
  font-size: 20px;
}

/* Close Button */
.btn-close {
  background-size: 25%;
}
.btn-close:focus {
  outline: 0;
  box-shadow: none;
}

/* Accordion */
.accordion-item {
  border: 1px solid #ebeef4;
}

.accordion-button:focus {
  outline: 0;
  box-shadow: none;
}
.accordion-button:not(.collapsed) {
  color: #012970;
  background-color: #f6f9ff;
}

.accordion-flush .accordion-button {
  padding: 15px 0;
  background: none;
  border: 0;
}
.accordion-flush .accordion-button:not(.collapsed) {
  box-shadow: none;
  color: #4154f1;
}
.accordion-flush .accordion-body {
  padding: 0 0 15px 0;
  color: #3e4f6f;
  font-size: 15px;
}

/* Breadcrumbs */
.breadcrumb {
  font-size: 14px;
  font-family: "Nunito", sans-serif;
  color: #899bbd;
  font-weight: 600;
}
.breadcrumb a {
  color: #899bbd;
  transition: 0.3s;
}
.breadcrumb a:hover {
  color: #51678f;
}
.breadcrumb .breadcrumb-item::before {
  color: #899bbd;
}
.breadcrumb .active {
  color: #51678f;
  font-weight: 600;
}

/* Bordered Tabs */
.nav-tabs-bordered {
  border-bottom: 2px solid #ebeef4;
}
.nav-tabs-bordered .nav-link {
  margin-bottom: -2px;
  border: none;
  color: #2c384e;
}
.nav-tabs-bordered .nav-link:hover, .nav-tabs-bordered .nav-link:focus {
  color: #4154f1;
}
.nav-tabs-bordered .nav-link.active {
  background-color: #fff;
  color: #4154f1;
  border-bottom: 2px solid #4154f1;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
.logo {
  line-height: 1;
}
@media (min-width: 1200px) {
  .logo {
    width: 280px;
  }
}
.logo img {
  max-height: 26px;
  margin-right: 6px;
}
.logo span {
  font-size: 26px;
  font-weight: 700;
  color: #012970;
  font-family: "Nunito", sans-serif;
}

.header {
  transition: all 0.5s;
  z-index: 997;
  height: 60px;
  box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);
  background-color: #fff;
  padding-left: 20px;
  /* Toggle Sidebar Button */
  /* Search Bar */
}
.header .toggle-sidebar-btn {
  font-size: 32px;
  padding-left: 10px;
  cursor: pointer;
  color: #012970;
}
.header .search-bar {
  min-width: 360px;
  padding: 0 20px;
}
@media (max-width: 1199px) {
  .header .search-bar {
    position: fixed;
    top: 50px;
    left: 0;
    right: 0;
    padding: 20px;
    box-shadow: 0px 0px 15px 0px rgba(1, 41, 112, 0.1);
    background: white;
    z-index: 9999;
    transition: 0.3s;
    visibility: hidden;
    opacity: 0;
  }
  .header .search-bar-show {
    top: 60px;
    visibility: visible;
    opacity: 1;
  }
}
.header .search-form {
  width: 100%;
}
.header .search-form input {
  border: 0;
  font-size: 14px;
  color: #012970;
  border: 1px solid rgba(1, 41, 112, 0.2);
  padding: 7px 38px 7px 8px;
  border-radius: 3px;
  transition: 0.3s;
  width: 100%;
}
.header .search-form input:focus, .header .search-form input:hover {
  outline: none;
  box-shadow: 0 0 10px 0 rgba(1, 41, 112, 0.15);
  border: 1px solid rgba(1, 41, 112, 0.3);
}
.header .search-form button {
  border: 0;
  padding: 0;
  margin-left: -30px;
  background: none;
}
.header .search-form button i {
  color: #012970;
}

/*--------------------------------------------------------------
# Header Nav
--------------------------------------------------------------*/
.header-nav ul {
  list-style: none;
}
.header-nav > ul {
  margin: 0;
  padding: 0;
}
.header-nav .nav-icon {
  font-size: 20px;
  color: #012970;
}
.header-nav .nav-profile {
  color: #012970;
}
.header-nav .nav-profile img {
  max-height: 36px;
}
.header-nav .nav-profile span {
  font-size: 14px;
  font-weight: 600;
}
.header-nav .badge-number {
  position: absolute;
  inset: 4px 6px auto auto;
  font-weight: normal;
  font-size: 11px;
  padding: 3px 6px;
}
.header-nav .notifications .notification-item {
  display: flex;
  align-items: center;
  padding: 15px 10px;
  transition: 0.3s;
}
.header-nav .notifications .notification-item i {
  margin: 0 20px 0 10px;
  font-size: 24px;
}
.header-nav .notifications .notification-item h4 {
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 5px;
}
.header-nav .notifications .notification-item p {
  font-size: 13px;
  margin-bottom: 3px;
  color: #919191;
}
.header-nav .notifications .notification-item:hover {
  background-color: #f6f9ff;
}
.header-nav .messages .message-item {
  padding: 15px 10px;
  transition: 0.3s;
}
.header-nav .messages .message-item a {
  display: flex;
}
.header-nav .messages .message-item img {
  margin: 0 20px 0 10px;
  max-height: 40px;
}
.header-nav .messages .message-item h4 {
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #444444;
}
.header-nav .messages .message-item p {
  font-size: 13px;
  margin-bottom: 3px;
  color: #919191;
}
.header-nav .messages .message-item:hover {
  background-color: #f6f9ff;
}
.header-nav .profile {
  min-width: 240px;
  padding-bottom: 0;
}
.header-nav .profile .dropdown-header h6 {
  font-size: 18px;
  margin-bottom: 0;
  font-weight: 600;
  color: #444444;
}
.header-nav .profile .dropdown-header span {
  font-size: 14px;
}
.header-nav .profile .dropdown-item {
  font-size: 14px;
  padding: 10px 15px;
  transition: 0.3s;
}
.header-nav .profile .dropdown-item i {
  margin-right: 10px;
  font-size: 18px;
  line-height: 0;
}
.header-nav .profile .dropdown-item:hover {
  background-color: #f6f9ff;
}

/*--------------------------------------------------------------
# Sidebar
--------------------------------------------------------------*/
.sidebar {
  position: fixed;
  top: 60px;
  left: 0;
  bottom: 0;
  width: 300px;
  z-index: 996;
  transition: all 0.3s;
  padding: 20px;
  overflow-y: auto;
  scrollbar-width: thin;
  scrollbar-color: #aab7cf transparent;
  box-shadow: 0px 0px 20px rgba(1, 41, 112, 0.1);
  background-color: #fff;
}
@media (max-width: 1199px) {
  .sidebar {
    left: -300px;
  }
}
.sidebar::-webkit-scrollbar {
  width: 5px;
  height: 8px;
  background-color: #fff;
}
.sidebar::-webkit-scrollbar-thumb {
  background-color: #aab7cf;
}

@media (min-width: 1200px) {
  #main, #footer {
    margin-left: 300px;
  }
}
@media (max-width: 1199px) {
  .toggle-sidebar .sidebar {
    left: 0;
  }
}
@media (min-width: 1200px) {
  .toggle-sidebar #main, .toggle-sidebar #footer {
    margin-left: 0;
  }
  .toggle-sidebar .sidebar {
    left: -300px;
  }
}

.sidebar-nav {
  padding: 0;
  margin: 0;
  list-style: none;
}
.sidebar-nav li {
  padding: 0;
  margin: 0;
  list-style: none;
}
.sidebar-nav .nav-item {
  margin-bottom: 5px;
}
.sidebar-nav .nav-heading {
  font-size: 11px;
  text-transform: uppercase;
  color: #899bbd;
  font-weight: 600;
  margin: 10px 0 5px 15px;
}
.sidebar-nav .nav-link {
  display: flex;
  align-items: center;
  font-size: 15px;
  font-weight: 600;
  color: #4154f1;
  transition: 0.3;
  background: #f6f9ff;
  padding: 10px 15px;
  border-radius: 4px;
}
.sidebar-nav .nav-link i {
  font-size: 16px;
  margin-right: 10px;
  color: #4154f1;
}
.sidebar-nav .nav-link.collapsed {
  color: #012970;
  background: #fff;
}
.sidebar-nav .nav-link.collapsed i {
  color: #899bbd;
}
.sidebar-nav .nav-link:hover {
  color: #4154f1;
  background: #f6f9ff;
}
.sidebar-nav .nav-link:hover i {
  color: #4154f1;
}
.sidebar-nav .nav-link .bi-chevron-down {
  margin-right: 0;
  transition: transform 0.2s ease-in-out;
}
.sidebar-nav .nav-link:not(.collapsed) .bi-chevron-down {
  transform: rotate(180deg);
}
.sidebar-nav .nav-content {
  padding: 5px 0 0 0;
  margin: 0;
  list-style: none;
}
.sidebar-nav .nav-content a {
  display: flex;
  align-items: center;
  font-size: 14px;
  font-weight: 600;
  color: #012970;
  transition: 0.3;
  padding: 10px 0 10px 40px;
  transition: 0.3s;
}
.sidebar-nav .nav-content a i {
  font-size: 6px;
  margin-right: 8px;
  line-height: 0;
  border-radius: 50%;
}
.sidebar-nav .nav-content a:hover, .sidebar-nav .nav-content a.active {
  color: #4154f1;
}
.sidebar-nav .nav-content a.active i {
  background-color: #4154f1;
}

/*--------------------------------------------------------------
# Dashboard
--------------------------------------------------------------*/
/* Filter dropdown */
.dashboard .filter {
  position: absolute;
  right: 0px;
  top: 15px;
}
.dashboard .filter .icon {
  color: #aab7cf;
  padding-right: 20px;
  padding-bottom: 5px;
  transition: 0.3s;
  font-size: 16px;
}
.dashboard .filter .icon:hover, .dashboard .filter .icon:focus {
  color: #4154f1;
}
.dashboard .filter .dropdown-header {
  padding: 8px 15px;
}
.dashboard .filter .dropdown-header h6 {
  text-transform: uppercase;
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 1px;
  color: #aab7cf;
  margin-bottom: 0;
  padding: 0;
}
.dashboard .filter .dropdown-item {
  padding: 8px 15px;
}

/* Info Cards */
.dashboard .info-card {
  padding-bottom: 10px;
}
.dashboard .info-card h6 {
  font-size: 28px;
  color: #012970;
  font-weight: 700;
  margin: 0;
  padding: 0;
}
.dashboard .card-icon {
  font-size: 32px;
  line-height: 0;
  width: 64px;
  height: 64px;
  flex-shrink: 0;
  flex-grow: 0;
}
.dashboard .sales-card .card-icon {
  color: #4154f1;
  background: #f6f6fe;
}
.dashboard .revenue-card .card-icon {
  color: #2eca6a;
  background: #e0f8e9;
}
.dashboard .customers-card .card-icon {
  color: #ff771d;
  background: #ffecdf;
}

/* Activity */
.dashboard .activity {
  font-size: 14px;
}
.dashboard .activity .activity-item .activite-label {
  color: #888;
  position: relative;
  flex-shrink: 0;
  flex-grow: 0;
  min-width: 64px;
}
.dashboard .activity .activity-item .activite-label::before {
  content: "";
  position: absolute;
  right: -11px;
  width: 4px;
  top: 0;
  bottom: 0;
  background-color: #eceefe;
}
.dashboard .activity .activity-item .activity-badge {
  margin-top: 3px;
  z-index: 1;
  font-size: 11px;
  line-height: 0;
  border-radius: 50%;
  flex-shrink: 0;
  border: 3px solid #fff;
  flex-grow: 0;
}
.dashboard .activity .activity-item .activity-content {
  padding-left: 10px;
  padding-bottom: 20px;
}
.dashboard .activity .activity-item:first-child .activite-label::before {
  top: 5px;
}
.dashboard .activity .activity-item:last-child .activity-content {
  padding-bottom: 0;
}

/* News & Updates */
.dashboard .news .post-item + .post-item {
  margin-top: 15px;
}
.dashboard .news img {
  width: 80px;
  float: left;
  border-radius: 5px;
}
.dashboard .news h4 {
  font-size: 15px;
  margin-left: 95px;
  font-weight: bold;
  margin-bottom: 5px;
}
.dashboard .news h4 a {
  color: #012970;
  transition: 0.3s;
}
.dashboard .news h4 a:hover {
  color: #4154f1;
}
.dashboard .news p {
  font-size: 14px;
  color: #777777;
  margin-left: 95px;
}

/* Recent Sales */
.dashboard .recent-sales {
  font-size: 14px;
}
.dashboard .recent-sales .table thead {
  background: #f6f6fe;
}
.dashboard .recent-sales .table thead th {
  border: 0;
}
.dashboard .recent-sales .dataTable-top {
  padding: 0 0 10px 0;
}
.dashboard .recent-sales .dataTable-bottom {
  padding: 10px 0 0 0;
}

/* Top Selling */
.dashboard .top-selling {
  font-size: 14px;
}
.dashboard .top-selling .table thead {
  background: #f6f6fe;
}
.dashboard .top-selling .table thead th {
  border: 0;
}
.dashboard .top-selling .table tbody td {
  vertical-align: middle;
}
.dashboard .top-selling img {
  border-radius: 5px;
  max-width: 60px;
}

/*--------------------------------------------------------------
# Icons list page
--------------------------------------------------------------*/
.iconslist {
  display: grid;
  max-width: 100%;
  grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
  gap: 1.25rem;
  padding-top: 15px;
}
.iconslist .icon {
  background-color: #fff;
  border-radius: 0.25rem;
  text-align: center;
  color: #012970;
  padding: 15px 0;
}
.iconslist i {
  margin: 0.25rem;
  font-size: 2.5rem;
}
.iconslist .label {
  font-family: var(--bs-font-monospace);
  display: inline-block;
  width: 100%;
  overflow: hidden;
  padding: 0.25rem;
  font-size: 12px;
  text-overflow: ellipsis;
  white-space: nowrap;
  color: #666;
}

/*--------------------------------------------------------------
# Profie Page
--------------------------------------------------------------*/
.profile .profile-card img {
  max-width: 120px;
}
.profile .profile-card h2 {
  font-size: 24px;
  font-weight: 700;
  color: #2c384e;
  margin: 10px 0 0 0;
}
.profile .profile-card h3 {
  font-size: 18px;
}
.profile .profile-card .social-links a {
  font-size: 20px;
  display: inline-block;
  color: rgba(1, 41, 112, 0.5);
  line-height: 0;
  margin-right: 10px;
  transition: 0.3s;
}
.profile .profile-card .social-links a:hover {
  color: #012970;
}
.profile .profile-overview .row {
  margin-bottom: 20px;
  font-size: 15px;
}
.profile .profile-overview .card-title {
  color: #012970;
}
.profile .profile-overview .label {
  font-weight: 600;
  color: rgba(1, 41, 112, 0.6);
}
.profile .profile-edit label {
  font-weight: 600;
  color: rgba(1, 41, 112, 0.6);
}
.profile .profile-edit img {
  max-width: 120px;
}

/*--------------------------------------------------------------
# F.A.Q Page
--------------------------------------------------------------*/
.faq .basic h6 {
  font-size: 18px;
  font-weight: 600;
  color: #4154f1;
}
.faq .basic p {
  color: #6980aa;
}

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact .info-box {
  padding: 28px 30px;
}
.contact .info-box i {
  font-size: 38px;
  line-height: 0;
  color: #4154f1;
}
.contact .info-box h3 {
  font-size: 20px;
  color: #012970;
  font-weight: 700;
  margin: 20px 0 10px 0;
}
.contact .info-box p {
  padding: 0;
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}
.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}
.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}
.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
}
.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}
.contact .php-email-form input, .contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  border-radius: 0;
}
.contact .php-email-form input:focus, .contact .php-email-form textarea:focus {
  border-color: #4154f1;
}
.contact .php-email-form input {
  padding: 10px 15px;
}
.contact .php-email-form textarea {
  padding: 12px 15px;
}
.contact .php-email-form button[type=submit] {
  background: #4154f1;
  border: 0;
  padding: 10px 30px;
  color: #fff;
  transition: 0.4s;
  border-radius: 4px;
}
.contact .php-email-form button[type=submit]:hover {
  background: #5969f3;
}
@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Error 404
--------------------------------------------------------------*/
.error-404 {
  padding: 30px;
}
.error-404 h1 {
  font-size: 180px;
  font-weight: 700;
  color: #4154f1;
  margin-bottom: 0;
  line-height: 150px;
}
.error-404 h2 {
  font-size: 24px;
  font-weight: 700;
  color: #012970;
  margin-bottom: 30px;
}
.error-404 .btn {
  background: #51678f;
  color: #fff;
  padding: 8px 30px;
}
.error-404 .btn:hover {
  background: #3e4f6f;
}
@media (min-width: 992px) {
  .error-404 img {
    max-width: 50%;
  }
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
.footer {
  padding: 20px 0;
  font-size: 14px;
  transition: all 0.3s;
  border-top: 1px solid #cddfff;
}
.footer .copyright {
  text-align: center;
  color: #012970;
}
.footer .credits {
  padding-top: 5px;
  text-align: center;
  font-size: 13px;
  color: #012970;
}

  </style>



  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ url('home') }}" class="logo d-flex align-items-center">
        <img src="https://drive.google.com/uc?export=view&id=1-53ECQVm3N6OLvXwiqGpFNdTbFsnFcmx" alt="">
        <span class="d-none d-lg-block"></span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      @guest
          @if (Route::has('login'))

                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

          @endif

          @if (Route::has('register'))
                  <a class="nav-link" href="{{ route('registro') }}">{{ __('Registrarme') }}</a>
          @endif
      @else
          <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
              <a class="nav-link nav-icon search-bar-toggle " href="#">
                <i class="bi bi-search"></i>
              </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown">

              <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-bell"></i>
                <!--span class="badge bg-primary badge-number">4</span-->
              </a><!-- End Notification Icon -->

              <!--ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                <li class="dropdown-header">
                  You have 4 new notifications
                  <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                  <i class="bi bi-exclamation-circle text-warning"></i>
                  <div>
                    <h4>Lorem Ipsum</h4>
                    <p>Quae dolorem earum veritatis oditseno</p>
                    <p>30 min. ago</p>
                  </div>
                </li>

                <li>
                  <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                  <i class="bi bi-x-circle text-danger"></i>
                  <div>
                    <h4>Atque rerum nesciunt</h4>
                    <p>Quae dolorem earum veritatis oditseno</p>
                    <p>1 hr. ago</p>
                  </div>
                </li>

                <li>
                  <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                  <i class="bi bi-check-circle text-success"></i>
                  <div>
                    <h4>Sit rerum fuga</h4>
                    <p>Quae dolorem earum veritatis oditseno</p>
                    <p>2 hrs. ago</p>
                  </div>
                </li>

                <li>
                  <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                  <i class="bi bi-info-circle text-primary"></i>
                  <div>
                    <h4>Dicta reprehenderit</h4>
                    <p>Quae dolorem earum veritatis oditseno</p>
                    <p>4 hrs. ago</p>
                  </div>
                </li>

                <li>
                  <hr class="dropdown-divider">
                </li>
                <li class="dropdown-footer">
                  <a href="#">Show all notifications</a>
                </li>

              </ul--><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->

            <li class="nav-item dropdown">

              <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-chat-left-text"></i>
                <!--span class="badge bg-success badge-number">3</span-->
              </a><!-- End Messages Icon -->

              <!--ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                <li class="dropdown-header">
                  You have 3 new messages
                  <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li class="message-item">
                  <a href="#">
                    <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                    <div>
                      <h4>Maria Hudson</h4>
                      <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                      <p>4 hrs. ago</p>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li class="message-item">
                  <a href="#">
                    <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                    <div>
                      <h4>Anna Nelson</h4>
                      <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                      <p>6 hrs. ago</p>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li class="message-item">
                  <a href="#">
                    <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                    <div>
                      <h4>David Muldon</h4>
                      <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                      <p>8 hrs. ago</p>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li class="dropdown-footer">
                  <a href="#">Show all messages</a>
                </li>

              </ul--><!-- End Messages Dropdown Items -->

            </li><!-- End Messages Nav -->

            <li class="nav-item dropdown pe-3">

              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
              </a><!-- End Profile Iamge Icon -->

              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                  <h6>{{ Auth::user()->name }}</h6>
                  <span></span>
                </li>
                <!--li>
                  <hr class="dropdown-divider">
                </li>

                <li>
                  <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li>
                  <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                    <i class="bi bi-gear"></i>
                    <span>Account Settings</span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li>
                  <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                    <i class="bi bi-question-circle"></i>
                    <span>Need Help?</span>
                  </a>
                </li-->
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li>
                  <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      <i class="bi bi-box-arrow-right"></i>
                      {{ __('Cerrar sesión') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </li>

              </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->
          </ul>
      @endguest

    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      @if(Auth::user()->id_rol == 1)
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('home') }}">
              <i class="bi bi-grid"></i><span>Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('admin/estandar/lista') }}">
              <i class="bx bx-award"></i><span>Estándares/Cursos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('admin/groups/lista') }}">
              <i class="bx bx-group"></i><span>Grupos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('admin/instructor/lista') }}">
              <i class="bx bx-user-voice"></i><span>Instructores</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('usuarios') }}">
              <i class="bx bx-group"></i><span>Usuarios</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('candidatos') }}">
              <i class="bx bx-speaker"></i><span>Candidatos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('certificaciones') }}">
              <i class="bx bx-select-multiple"></i><span>Certificaciones</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('certificados') }}">
              <i class="bx bx-spreadsheet"></i><span>Certificados pendientes</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('agenda') }}">
              <i class="bx bx-task"></i><span>Agenda</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('documentos') }}">
              <i class="bx bxs-file-blank"></i><span>Documentos recibidos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('pagos') }}">
              <i class="bx bxs-credit-card"></i><span>Pagos recibidos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('citas/lista') }}">
              <i class="bx bx-time"></i><span>Citas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('usuario/perfil') }}/{{Auth::user()->name}}">
              <i class="bx bx-user"></i><span>Perfil</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('usuario/preguntas') }}">
              <i class="bi bi-question-circle"></i><span>Preguntas frecuentes</span>
            </a>
          </li>
      @endif
      @if(Auth::user()->id_rol == 2)
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('documentos') }}">
              <i class="bx bxs-file-blank"></i><span>Documentos recibidos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('agenda') }}">
              <i class="bx bx-task"></i><span>Agenda</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('citas/lista') }}">
              <i class="bx bx-time"></i><span>Citas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('certificaciones') }}">
              <i class="bx bx-select-multiple"></i><span>Certificaciones</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('certificados') }}">
              <i class="bx bx-spreadsheet"></i><span>Certificados pendientes</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('usuario/preguntas') }}">
              <i class="bi bi-question-circle"></i><span>Preguntas frecuentes</span>
            </a>
          </li>
      @endif
      @if(Auth::user()->id_rol == 3)
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('pagos') }}">
              <i class="bx bxs-credit-card"></i><span>Pagos recibidos</span>
            </a>
          </li>
      @endif
      @if(Auth::user()->id_rol == 10)
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('usuario/perfil') }}/{{Auth::user()->name}}">
              <i class="bx bx-user"></i><span>Perfil</span>
            </a>
          </li>
          <!--li class="nav-item">
            <a class="nav-link"  href="{{ url('usuario/capacitaciones') }}/{{Auth::user()->name}}">
              <i class="bx bx-user"></i><span>Capacitaciones</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('usuario/certificaciones') }}/{{Auth::user()->name}}">
              <i class="bx bx-user"></i><span>Certificaciones</span>
            </a>
          </li-->
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('usuario/preguntas') }}">
              <i class="bi bi-question-circle"></i><span>Preguntas frecuentes</span>
            </a>
          </li>
      @endif
      <!-- End Dashboard Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
      @yield('content')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">

    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>
