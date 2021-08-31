@extends('admin.layouts.app')
@section('content')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/src/plugins/jquery-steps/jquery.steps.css">
<style>
    .image_hidden{display:none;}
    label{color: #f57200;font-size: 20px}
    .custom-file-label::after {display: none}
</style>
<style>
    .upload .upload-box {
        border: solid 1px #cfcfcf;
        padding: 10px 20px;
        position: relative;
    }
    .upload .upload-box .fa {
        color: #cfcfcf;
    }
</style>
@if(lang() == "ar")
    <style>
        .main-container{
            text-align: right !important;
        }
        .wizard-content .wizard>.actions>ul {float: left;}
        label, input, select{direction: rtl}
        .wizard-content .wizard>.actions>ul>li+li {
            margin-left: 0;
            margin-right: 10px;
        }
        .wizard-content .wizard>.actions>ul>li {
            float: right !important;
        }
        .gallery-wrap{direction: rtl}
        .wizard-content .wizard>.steps>ul{display: none}
    .page-header .breadcrumb {direction: rtl}
    </style>
@endif
@endpush
<div class="main-container mt-5">
    <div class="min-height-150px pt-30">
        <div class="page-header">
            <div class="row mb-2">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>{{$title}}</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{aurl('home')}}">{{ trans('web.Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
            @include('admin.includes.messages')
        </div>
    </div>
    <div class="pd-20 card-box mb-30">
        <div class="wizard-content">
            <form class="tab-wizard wizard-circle wizard" id="wizard" action="{{aurl('blog/create')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <h5>{{trans('web.Blog Details')}}</h5>
                <section>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label >&#9830; {{trans('web.Title Of New Blog')}}</label>
                                <input type="text" name="title" required placeholder="{{trans('web.Title Of New Blog')}}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="html-editor mb-30">
                                <label >&#9830; {{trans('web.Description Of New Blog')}}</label>
                                <textarea class="textarea_editor form-control border-radius-0" name="text" required placeholder="{{trans('web.Description Of New Blog')}}"></textarea>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Step 2 -->
                <h5>{{trans('web.Media')}}</h5>
                <section>
                    <div class="row p-3">
                        <label style="display: block;width:100%;">&#9830; {{trans('web.Images')}}</label>
                        <div class="container">
                            <div class="upload">
                                <div class="upload-box">
                                    <div class="row">
                                        <div class="col-md-1"><i class="fa fa-cloud-upload fa-4x"></i></div>
                                        <div class="col-md-11">
                                            <div class="edit custom-file mb-3">
                                                <input type="file" class="custom-file-input" id="customFile" name="files[]" multiple>
                                                <label class="custom-file-label mt-2" for="customFile" style="color: #cfcfcf;">{{trans('web.Choose file')}}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>
</div>
@push('script')
<script src="{{ asset('admin') }}/src/plugins/jquery-steps/jquery.steps.js"></script>
<script src="{{ asset('admin') }}/vendors/scripts/steps-setting.js"></script>
<script>
    $(".actions a[href='#finish']").on("click", function () {
        $('#wizard').submit();
    });
</script>
@if(lang() == "ar")
<script>
    $(".actions a[href='#next']").html("{{trans('web.next')}}");
    $(".actions a[href='#finish']").html("{{trans('web.submit')}}");
    $(".actions a[href='#previous']").html("{{trans('web.previous')}}");

</script>
@endif
@endpush
@endsection
