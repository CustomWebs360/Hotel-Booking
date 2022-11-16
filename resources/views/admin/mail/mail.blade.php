<!DOCTYPE html>
<!--
Template Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/vuexy_admin
Renew Support: https://1.envato.market/vuexy_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Email Application - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{asset('admin')}}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin')}}/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/vendors/css/editors/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/vendors/css/editors/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/vendors/css/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/vendors/css/extensions/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Inconsolata&amp;family=Roboto+Slab&amp;family=Slabo+27px&amp;family=Sofia&amp;family=Ubuntu+Mono&amp;display=swap">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/plugins/forms/form-quill-editor.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/plugins/extensions/ext-component-toastr.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/app-assets/css/pages/app-email.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern content-left-sidebar navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar">

    <!-- BEGIN: Header-->
      @include('layouts.admin.partial.sidebar')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
        @include('layouts.admin.partial.header')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content email-application">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-area-wrapper">
        <div class="sidebar-left">
          <div class="sidebar"><div class="sidebar-content email-app-sidebar">
  <div class="email-app-menu">
    <div class="form-group-compose text-center compose-btn">
      <button
        type="button"
        class="compose-email btn btn-primary btn-block"
        data-backdrop="false"
        data-toggle="modal"
        data-target="#compose-mail"
      >
        Compose
      </button>
    </div>
    <div class="sidebar-menu-list">
      <div class="list-group list-group-messages">
        <a href="javascript:void(0)" id="mail_inbox" class="list-group-item list-group-item-action active">
          <i data-feather="mail" class="font-medium-3 mr-50"></i>
          <span class="align-middle">Inbox</span>
          <span class="badge badge-light-primary badge-pill float-right">{{total_unread_contat()}}</span>
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
          <i data-feather="send" class="font-medium-3 mr-50"></i>
          <span class="align-middle">Sent</span>
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
          <i data-feather="edit-2" class="font-medium-3 mr-50"></i>
          <span class="align-middle">Draft</span>
          <span class="badge badge-light-warning badge-pill float-right">2</span>
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
          <i data-feather="star" class="font-medium-3 mr-50"></i>
          <span class="align-middle">Starred</span>
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
          <i data-feather="info" class="font-medium-3 mr-50"></i>
          <span class="align-middle">Spam</span>
          <span class="badge badge-light-danger badge-pill float-right">5</span>
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
          <i data-feather="trash" class="font-medium-3 mr-50"></i>
          <span class="align-middle">Trash</span>
        </a>
      </div>
      <!-- <hr /> -->
      <h6 class="section-label mt-3 mb-1 px-2">Labels</h6>
      <div class="list-group list-group-labels">
        <a href="javascript:void(0)" class="list-group-item list-group-item-action"
          ><span class="bullet bullet-sm bullet-success mr-1"></span>Personal</a
        >
        <a href="javascript:void(0)" class="list-group-item list-group-item-action"
          ><span class="bullet bullet-sm bullet-primary mr-1"></span>Company</a
        >
        <a href="javascript:void(0)" class="list-group-item list-group-item-action"
          ><span class="bullet bullet-sm bullet-warning mr-1"></span>Important</a
        >
        <a href="javascript:void(0)" class="list-group-item list-group-item-action"
          ><span class="bullet bullet-sm bullet-danger mr-1"></span>Private</a
        >
      </div>
    </div>
  </div>
</div>

          </div>
        </div>
        <div class="content-right">
          <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body"><div class="body-content-overlay"></div>
<!-- Email list Area -->
<div class="email-app-list">
  <!-- Email search starts -->
  <div class="app-fixed-search d-flex align-items-center">
    <div class="sidebar-toggle d-block d-lg-none ml-1">
      <i data-feather="menu" class="font-medium-5"></i>
    </div>
    <div class="d-flex align-content-center justify-content-between w-100">
      <div class="input-group input-group-merge">
        <div class="input-group-prepend">
          <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
        </div>
        <input
          type="text"
          class="form-control"
          id="email-search"
          placeholder="Search email"
          aria-label="Search..."
          aria-describedby="email-search"
        />
      </div>
    </div>
  </div>
  <!-- Email search ends -->

  <!-- Email actions starts -->
  <div class="app-action">
    <div class="action-left">
      <div class="custom-control custom-checkbox selectAll">
        <input type="checkbox" class="custom-control-input" id="selectAllCheck" />
        <label class="custom-control-label font-weight-bolder pl-25" for="selectAllCheck">Select All</label>
      </div>
    </div>
    <div class="action-right">
      <ul class="list-inline m-0">
        <li class="list-inline-item">
          <div class="dropdown">
            <a
              href="javascript:void(0);"
              class="dropdown-toggle"
              id="folder"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i data-feather="folder" class="font-medium-2"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="folder">
              <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                <i data-feather="edit-2" class="font-small-4 mr-50"></i>
                <span>Draft</span>
              </a>
              <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                <i data-feather="info" class="font-small-4 mr-50"></i>
                <span>Spam</span>
              </a>
              <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                <i data-feather="trash" class="font-small-4 mr-50"></i>
                <span>Trash</span>
              </a>
            </div>
          </div>
        </li>
        <li class="list-inline-item">
          <div class="dropdown">
            <a
              href="javascript:void(0);"
              class="dropdown-toggle"
              id="tag"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i data-feather="tag" class="font-medium-2"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="tag">
              <a href="javascript:void(0);" class="dropdown-item"
                ><span class="mr-50 bullet bullet-success bullet-sm"></span>Personal</a
              >
              <a href="javascript:void(0);" class="dropdown-item"
                ><span class="mr-50 bullet bullet-primary bullet-sm"></span>Company</a
              >
              <a href="javascript:void(0);" class="dropdown-item"
                ><span class="mr-50 bullet bullet-warning bullet-sm"></span>Important</a
              >
              <a href="javascript:void(0);" class="dropdown-item"
                ><span class="mr-50 bullet bullet-danger bullet-sm"></span>Private</a
              >
            </div>
          </div>
        </li>
        <li class="list-inline-item mail-unread">
          <span class="action-icon"><i data-feather="mail" class="font-medium-2"></i></span>
        </li>
        <li class="list-inline-item mail-delete">
          <span class="action-icon"><i data-feather="trash-2" class="font-medium-2"></i></span>
        </li>
      </ul>
    </div>
  </div>
  <!-- Email actions ends -->

  <!-- Email list starts -->
  <div class="email-user-list" id="all_mail">
    <ul class="email-media-list">
        @foreach ($contacts as $contact )
            <li class="media mail-read single_mail" id="{{$contact->id}}">
            <div class="media-left pr-50">
                <div class="avatar">
                <img src="{{asset('admin')}}/app-assets/images/portrait/small/avatar-s-20.jpg" alt="avatar img holder" />
                </div>
                <div class="user-action">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" />
                    <label class="custom-control-label" for="customCheck1"></label>
                </div>
                <span class="email-favorite"><i data-feather="star"></i></span>
                </div>
            </div>
            <div class="media-body">

                <div class="mail-details">
                <div class="mail-items">
                    <h5 class="mb-25">{{$contact->name}}</h5>
                    <span class="text-truncate">🎯 Focused impactful open system </span>
                </div>
                <div class="mail-meta-item">
                    <span class="mr-50 bullet bullet-success bullet-sm"></span>
                    <span class="mail-date">{{ \Carbon\Carbon::parse($contact->created_at)->format('d M y, h::m') }}</span>
                </div>
                </div>
                <div class="mail-message">
                <p class="text-truncate  mb-0">
                        {{$contact->message}}
                </p>
                </div>
            </div>
            </li>
        @endforeach
            <div class="no-results">
            <h5>No Items Found</h5>
            </div>
    </ul>
  </div>
  <!-- Email list ends -->
</div>
<!--/ Email list Area -->
<!-- Detailed Email View -->
<div class="email-app-details">
  <!-- Detailed Email Header starts -->
  <div class="email-detail-header">
    <div class="email-header-left d-flex align-items-center">
      <span class="go-back mr-1"><i data-feather="chevron-left" class="font-medium-4"></i></span>
      <h4 class="email-subject email_subject mb-0"></h4>
    </div>
    <div class="email-header-right ml-2 pl-1">
      <ul class="list-inline m-0">
        <li class="list-inline-item">
          <span class="action-icon favorite"><i data-feather="star" class="font-medium-2"></i></span>
        </li>
        <li class="list-inline-item">
          <div class="dropdown no-arrow">
            <a
              href="javascript:void(0);"
              class="dropdown-toggle"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i data-feather="folder" class="font-medium-2"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="folder">
              <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                <i data-feather="edit-2" class="font-medium-3 mr-50"></i>
                <span>Draft</span>
              </a>
              <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                <i data-feather="info" class="font-medium-3 mr-50"></i>
                <span>Spam</span>
              </a>
              <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                <i data-feather="trash" class="font-medium-3 mr-50"></i>
                <span>Trash</span>
              </a>
            </div>
          </div>
        </li>
        <li class="list-inline-item">
          <div class="dropdown no-arrow">
            <a
              href="javascript:void(0);"
              class="dropdown-toggle"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i data-feather="tag" class="font-medium-2"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="tag">
              <a href="javascript:void(0);" class="dropdown-item"
                ><span class="mr-50 bullet bullet-success bullet-sm"></span>Personal</a
              >
              <a href="javascript:void(0);" class="dropdown-item"
                ><span class="mr-50 bullet bullet-primary bullet-sm"></span>Company</a
              >
              <a href="javascript:void(0);" class="dropdown-item"
                ><span class="mr-50 bullet bullet-warning bullet-sm"></span>Important</a
              >
              <a href="javascript:void(0);" class="dropdown-item"
                ><span class="mr-50 bullet bullet-danger bullet-sm"></span>Private</a
              >
            </div>
          </div>
        </li>
        <li class="list-inline-item">
          <span class="action-icon"><i data-feather="mail" class="font-medium-2"></i></span>
        </li>
        <li class="list-inline-item">
          <span class="action-icon"><i data-feather="trash" class="font-medium-2"></i></span>
        </li>
        <li class="list-inline-item email-prev">
          <span class="action-icon"><i data-feather="chevron-left" class="font-medium-2"></i></span>
        </li>
        <li class="list-inline-item email-next">
          <span class="action-icon"><i data-feather="chevron-right" class="font-medium-2"></i></span>
        </li>
      </ul>
    </div>
  </div>
  <!-- Detailed Email Header ends -->

  <!-- Detailed Email Content starts -->
  <div class="email-scroll-area">
    {{-- <div class="row">
      <div class="col-12">
        <div class="email-label">
          <span class="mail-label badge badge-pill badge-light-primary">Company</span>
        </div>
      </div>
    </div> --}}
    {{-- <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header email-detail-head">
            <div class="user-details d-flex justify-content-between align-items-center flex-wrap">
              <div class="avatar mr-75">
                <img
                  src="{{asset('admin')}}/app-assets/images/portrait/small/avatar-s-9.jpg"
                  alt="avatar img holder"
                  width="48"
                  height="48"
                />
              </div>
              <div class="mail-items">
                <h5 class="mb-0">Carlos Williamson</h5>
                <div class="email-info-dropup dropdown">
                  <span
                    role="button"
                    class="dropdown-toggle font-small-3 text-muted"
                    id="card_top01"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    carlos@gmail.com
                  </span>
                  <div class="dropdown-menu" aria-labelledby="card_top01">
                    <table class="table table-sm table-borderless">
                      <tbody>
                        <tr>
                          <td class="text-right">From:</td>
                          <td>carlos@gmail.com</td>
                        </tr>
                        <tr>
                          <td class="text-right">To:</td>
                          <td>johndoe@ow.ly</td>
                        </tr>
                        <tr>
                          <td class="text-right">Date:</td>
                          <td>14:58, 29 Aug 2020</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="mail-meta-item d-flex align-items-center">
              <small class="mail-date-time text-muted">29 Aug, 2020, 14:58</small>
              <div class="dropdown ml-50">
                <div
                  role="button"
                  class="dropdown-toggle hide-arrow"
                  id="email_more"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i data-feather="more-vertical" class="font-medium-2"></i>
                </div>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="email_more">
                  <div class="dropdown-item"><i data-feather="corner-up-left" class="mr-50"></i>Reply</div>
                  <div class="dropdown-item"><i data-feather="corner-up-right" class="mr-50"></i>Forward</div>
                  <div class="dropdown-item"><i data-feather="trash-2" class="mr-50"></i>Delete</div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body mail-message-wrapper pt-2">
            <div class="mail-message">
              <p class="card-text">Hey John,</p>
              <p class="card-text">
                bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders demidolmen
                Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored
                fulfillment scientifical Pianokoto Chelonia
              </p>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header email-detail-head">
            <div class="user-details d-flex justify-content-between align-items-center flex-wrap">
              <div class="avatar mr-75">
                <img
                  src="{{asset('admin')}}/app-assets/images/portrait/small/avatar-s-18.jpg"
                  alt="avatar img holder"
                  width="48"
                  height="48"
                />
              </div>
              <div class="mail-items">
                <h5 class="mb-0 sender_name"></h5>
                <div class="email-info-dropup dropdown">
                  <span
                    role="button"
                    class="dropdown-toggle font-small-3 text-muted sender_email"
                    id="dropdownMenuButton200"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    {{-- abaldersong@utexas.edu --}}
                  </span>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton200">
                    <table class="table table-sm table-borderless">
                      <tbody>
                        <tr>
                          <td class="text-right">From:</td>
                          <td>abaldersong@utexas.edu</td>
                        </tr>
                        <tr>
                          <td class="text-right">To:</td>
                          <td>johndoe@ow.ly</td>
                        </tr>
                        <tr>
                          <td class="text-right">Date:</td>
                          <td>4:25 AM 13 Jan 2018</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="mail-meta-item d-flex align-items-center">
              <small class="mail-date-time text-muted send_date">
                {{-- 17 May, 2020, 4:14 --}}
            </small>
              <div class="dropdown ml-50">
                <div
                  role="button"
                  class="dropdown-toggle hide-arrow"
                  id="email_more_2"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i data-feather="more-vertical" class="font-medium-2"></i>
                </div>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="email_more_2">
                  <div class="dropdown-item"><i data-feather="corner-up-left" class="mr-50"></i>Reply</div>
                  <div class="dropdown-item"><i data-feather="corner-up-right" class="mr-50"></i>Forward</div>
                  <div class="dropdown-item"><i data-feather="trash-2" class="mr-50"></i>Delete</div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body mail-message-wrapper pt-2">
            <div class="mail-message">
              <p class="card-text">Hey John,</p>
              <p class="card-text mail_message">
                {{-- bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders demidolmen
                Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored
                fulfillment scientifical Pianokoto Chelonia --}}
              </p>

            </div>
          </div>
          <div class="card-footer">
            <div class="mail-attachments">
              <div class="d-flex align-items-center mb-1">
                <i data-feather="paperclip" class="font-medium-1 mr-50"></i>
                <h5 class="font-weight-bolder text-body mb-0">2 Attachments</h5>
              </div>
              <div class="d-flex flex-column">
                <a href="javascript:void(0);" class="mb-50">
                  <img src="{{asset('admin')}}/app-assets/images/icons/doc.png" class="mr-25" alt="png" height="18" />
                  <small class="text-muted font-weight-bolder">interdum.docx</small>
                </a>
                <a href="javascript:void(0);">
                  <img src="{{asset('admin')}}/app-assets/images/icons/jpg.png" class="mr-25" alt="png" height="18" />
                  <small class="text-muted font-weight-bolder">image.png</small>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <h5 class="mb-0">
                Click here to
                <a href="javascript:void(0);">Reply</a>
                or
                <a href="javascript:void(0);">Forward</a>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
  </div>
  <!-- Detailed Email Content ends -->
</div>
<!--/ Detailed Email View -->

<!-- compose email -->
<div class="modal modal-sticky" id="compose-mail">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content p-0">
      <div class="modal-header">
        <h5 class="modal-title">Compose Mail</h5>
        <div class="modal-actions">
          <a href="javascript:void(0);" class="text-body mr-75"><i data-feather="minus"></i></a>
          <a href="javascript:void(0);" class="text-body mr-75"><i data-feather="maximize-2"></i></a>
          <a class="text-body" href="javascript:void(0);" data-dismiss="modal" aria-label="Close"
            ><i data-feather="x"></i
          ></a>
        </div>
      </div>
      <div class="modal-body flex-grow-1 p-0">
        <form class="" id="compose_form" action="{{route('admin.mail.compose')}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="compose-mail-form-field select2-primary">
            <label for="email-to" class="form-label">To: </label>
            <div class="flex-grow-1">
              <select name="to_eamil" class="select2 form-control w-100" id="email-to" multiple>
                  {{-- <option data-avatar="{{asset('admin')}}/app-assets/images/portrait/small/avatar-s-18.jpg" value="{{$contact->email}}">{{$contact->email}}</option> --}}
                @foreach ($contacts as $contact)
                    <option value="{{$contact->email}}">{{$contact->email}}</option>
                @endforeach
              </select>
            </div>
            <div>
              <a class="toggle-cc text-body mr-1" href="javascript:void(0);">Cc</a>
              <a class="toggle-bcc text-body" href="javascript:void(0);">Bcc</a>
            </div>
          </div>
          {{-- cc  --}}
          {{-- <div class="compose-mail-form-field cc-wrapper">
            <label for="emailCC">Cc: </label>
            <div class="flex-grow-1">
              <!-- <input type="text" id="emailCC" class="form-control" placeholder="CC"/> -->
              <select class="select2 form-control w-100" id="emailCC" multiple>
                <option data-avatar="1-small.png" value="Jane Foster">Jane Foster</option>
                <option data-avatar="3-small.png" value="Donna Frank">Donna Frank</option>
                <option data-avatar="5-small.png" value="Gabrielle Robertson">Gabrielle Robertson</option>
                <option data-avatar="7-small.png" value="Lori Spears">Lori Spears</option>
              </select>
            </div>
            <a class="text-body toggle-cc" href="javascript:void(0);"><i data-feather="x"></i></a>
          </div> --}}
          {{-- bcc  --}}
          {{-- <div class="compose-mail-form-field bcc-wrapper">
            <label for="emailBCC">Bcc: </label>
            <div class="flex-grow-1">
              <!-- <input type="text" id="emailBCC" class="form-control" placeholder="BCC"/> -->
              <select class="select2 form-control w-100" id="emailBCC" multiple>
                <option data-avatar="{{asset('admin')}}/app-assets/1-small.png" value="Jane Foster">Jane Foster</option>
              </select>
            </div>
            <a class="text-body toggle-bcc" href="javascript:void(0);"><i data-feather="x"></i></a>
          </div> --}}
          <div class="compose-mail-form-field">
            <label for="emailSubject">Subject: </label>
            <input type="text" id="emailSubject" class="form-control" placeholder="Subject" name="email_subject" />
          </div>
          <div id="message-editor">
            <div class="editor" id="quill_text_editor" data-placeholder="Type message..."></div>

            <div class="compose-editor-toolbar">
              <span class="ql-formats mr-0">
                <select class="ql-font">
                  <option selected>Sailec Light</option>
                  <option value="sofia">Sofia Pro</option>
                  <option value="slabo">Slabo 27px</option>
                  <option value="roboto">Roboto Slab</option>
                  <option value="inconsolata">Inconsolata</option>
                  <option value="ubuntu">Ubuntu Mono</option>
                </select>
              </span>
              <span class="ql-formats mr-0">
                <button class="ql-bold"></button>
                <button class="ql-italic"></button>
                <button class="ql-underline"></button>
                <button class="ql-link"></button>
              </span>
            </div>
          </div>
          <div class="compose-footer-wrapper">
            <div class="btn-wrapper d-flex align-items-center">
              <div class="btn-group dropup mr-1">
                <button type="submit" class="btn btn-primary">Send</button>
                <button
                  type="button"
                  class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  data-reference="parent"
                >
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"> Schedule Send</a>
                </div>
              </div>
              <!-- add attachment -->
              <div class="email-attachement">
                <label for="file-input">
                  <i data-feather="paperclip" width="17" height="17" class="ml-50"></i>
                </label>

                <input id="file-input" type="file" class="d-none" />
              </div>
            </div>
            <div class="footer-action d-flex align-items-center">
              <div class="dropup d-inline-block">
                <i
                  class="font-medium-2 cursor-pointer mr-50"
                  data-feather="more-vertical"
                  role="button"
                  id="composeActions"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                </i>
                <div class="dropdown-menu" aria-labelledby="composeActions">
                  <a class="dropdown-item" href="javascript:void(0);">
                    <span class="align-middle">Add Label</span>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0);">
                    <span class="align-middle">Plain text mode</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0);">
                    <span class="align-middle">Print</span>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0);">
                    <span class="align-middle">Check Spelling</span>
                  </a>
                </div>
              </div>
              <i data-feather="trash" class="font-medium-2 cursor-pointer" data-dismiss="modal"></i>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ compose email -->

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    <div class="customizer d-none d-md-block"><a class="customizer-toggle d-flex align-items-center justify-content-center" href="javascript:void(0);"><i class="spinner" data-feather="settings"></i></a><div class="customizer-content">
  <!-- Customizer header -->
  <div class="customizer-header px-2 pt-1 pb-0 position-relative">
    <h4 class="mb-0">Theme Customizer</h4>
    <p class="m-0">Customize & Preview in Real Time</p>

    <a class="customizer-close" href="javascript:void(0);"><i data-feather="x"></i></a>
  </div>

  <hr />

  <!-- Styling & Text Direction -->
  <div class="customizer-styling-direction px-2">
    <p class="font-weight-bold">Skin</p>
    <div class="d-flex">
      <div class="custom-control custom-radio mr-1">
        <input
          type="radio"
          id="skinlight"
          name="skinradio"
          class="custom-control-input layout-name"
          checked
          data-layout=""
        />
        <label class="custom-control-label" for="skinlight">Light</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input
          type="radio"
          id="skinbordered"
          name="skinradio"
          class="custom-control-input layout-name"
          data-layout="bordered-layout"
        />
        <label class="custom-control-label" for="skinbordered">Bordered</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input
          type="radio"
          id="skindark"
          name="skinradio"
          class="custom-control-input layout-name"
          data-layout="dark-layout"
        />
        <label class="custom-control-label" for="skindark">Dark</label>
      </div>
      <div class="custom-control custom-radio">
        <input
          type="radio"
          id="skinsemidark"
          name="skinradio"
          class="custom-control-input layout-name"
          data-layout="semi-dark-layout"
        />
        <label class="custom-control-label" for="skinsemidark">Semi Dark</label>
      </div>
    </div>
  </div>

  <hr />

  <!-- Menu -->
  <div class="customizer-menu px-2">
    <div id="customizer-menu-collapsible" class="d-flex">
      <p class="font-weight-bold mr-auto m-0">Menu Collapsed</p>
      <div class="custom-control custom-control-primary custom-switch">
        <input type="checkbox" class="custom-control-input" id="collapse-sidebar-switch" />
        <label class="custom-control-label" for="collapse-sidebar-switch"></label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Layout Width -->
  <div class="customizer-footer px-2">
    <p class="font-weight-bold">Layout Width</p>
    <div class="d-flex">
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="layout-width-full" name="layoutWidth" class="custom-control-input" checked />
        <label class="custom-control-label" for="layout-width-full">Full Width</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="layout-width-boxed" name="layoutWidth" class="custom-control-input" />
        <label class="custom-control-label" for="layout-width-boxed">Boxed</label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Navbar -->
  <div class="customizer-navbar px-2">
    <div id="customizer-navbar-colors">
      <p class="font-weight-bold">Navbar Color</p>
      <ul class="list-inline unstyled-list">
        <li class="color-box bg-white border selected" data-navbar-default=""></li>
        <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
        <li class="color-box bg-secondary" data-navbar-color="bg-secondary"></li>
        <li class="color-box bg-success" data-navbar-color="bg-success"></li>
        <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
        <li class="color-box bg-info" data-navbar-color="bg-info"></li>
        <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
        <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
      </ul>
    </div>

    <p class="navbar-type-text font-weight-bold">Navbar Type</p>
    <div class="d-flex">
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="nav-type-floating" name="navType" class="custom-control-input" checked />
        <label class="custom-control-label" for="nav-type-floating">Floating</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="nav-type-sticky" name="navType" class="custom-control-input" />
        <label class="custom-control-label" for="nav-type-sticky">Sticky</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="nav-type-static" name="navType" class="custom-control-input" />
        <label class="custom-control-label" for="nav-type-static">Static</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="nav-type-hidden" name="navType" class="custom-control-input" />
        <label class="custom-control-label" for="nav-type-hidden">Hidden</label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Footer -->
  <div class="customizer-footer px-2">
    <p class="font-weight-bold">Footer Type</p>
    <div class="d-flex">
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="footer-type-sticky" name="footerType" class="custom-control-input" />
        <label class="custom-control-label" for="footer-type-sticky">Sticky</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="footer-type-static" name="footerType" class="custom-control-input" checked />
        <label class="custom-control-label" for="footer-type-static">Static</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="footer-type-hidden" name="footerType" class="custom-control-input" />
        <label class="custom-control-label" for="footer-type-hidden">Hidden</label>
      </div>
    </div>
  </div>
</div>

    </div>
    <!-- End: Customizer-->
    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
      @include('layouts.admin.partial.footer')
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('admin')}}/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('admin')}}/app-assets/vendors/js/editors/quill/katex.min.js"></script>
    <script src="{{asset('admin')}}/app-assets/vendors/js/editors/quill/highlight.min.js"></script>
    <script src="{{asset('admin')}}/app-assets/vendors/js/editors/quill/quill.min.js"></script>
    <script src="{{asset('admin')}}/app-assets/vendors/js/extensions/toastr.min.js"></script>
    <script src="{{asset('admin')}}/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Page Vendor JS-->
    <script>
    $(document).ready(function (){
        (function(){
            if($(".custom-editor-wrapper").length){
                /* Initialize QUill editor */
                let quillEditor = new Quill('.custom-editor', {
                    modules: {
                        // imageResize: {
                        //     displaySize: true
                        // },
                        toolbar: [
                            [{ header: [1, 2, 3, 4, 5, 6,  false] }],
                            ['bold', 'italic', 'underline','strike'],
                            ['blockquote', 'code-block'],
                            // ['image', 'video'],
                            ['link'],
                            [{ 'script': 'sub'}, { 'script': 'super' }],
                            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                            [{'color': []},{'background': []}],
                            [{ 'align': [] }],
                            ['clean']
                        ]
                    },
                    theme: 'snow'
                });

                /* Set QUill editor data into closest input */
                quillEditor.on('text-change', function(delta, source) {
                    getQuillEditorData();
                });

                /* Get QUill editor data function */
                function getQuillEditorData() {
                    let quillEditorData = quillEditor.root.innerHTML;
                    $(".custom-editor").closest(".custom-editor-wrapper").find(".custom-editor-input").val(quillEditorData);
                };
                getQuillEditorData();
            }
        })();
    })
    </script>
    <!-- BEGIN: Theme JS-->
    <script src="{{asset('admin')}}/app-assets/js/core/app-menu.min.js"></script>
    <script src="{{asset('admin')}}/app-assets/js/core/app.min.js"></script>
    <script src="{{asset('admin')}}/app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin')}}/app-assets/js/scripts/pages/app-email.min.js"></script>
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
    <script>
        $(document).on('click', '#mail_inbox', function(e){
            e.preventDefault();
            window.location.reload();
            // $.ajax({
            //     method:'get',
            //     url:"{{route('admin.mail.inbox')}}",
            //     success:function(response){
            //         $('#all_mail').html(response);
            //     }
            // });

        });
        $(document).on('click', '.single_mail', function(e){
            e.preventDefault();
            var data  = $(this).attr('id');
            $.ajax({
                method:'get',
                url:"{{route('admin.mail.details')}}",
                data:{'data':data},
                success:function(response){
                    console.log(response.mail_details);
                    $('.email_subject').text(response.mail_details.subject);
                    $('.sender_name').text(response.mail_details.name);
                    $('.sender_email').text(response.mail_details.email);
                    $('.send_date').text(response.mail_details.created_at);
                    $('.mail_message').text(response.mail_details.message);
                }
            });

        //    alert($('#quill_text_editor').text());
        //     $(document).on('change', '#', function(){
        //     });

        });
    </script>


  </body>
  <!-- END: Body-->
</html>
