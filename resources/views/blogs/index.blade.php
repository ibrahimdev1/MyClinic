@extends('app')
@section('title')
Blogs
@endsection
@section('content')
<div class="row">
@foreach ($blogs as $blog)
<div class=" col-lg-6">
<div class="m-portlet m-portlet--creative m-portlet--bordered-semi ">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <span class="m-portlet__head-icon m--hide">
                    <i class="flaticon-statistics"></i>
                </span>
                <h2 class="m-portlet__head-label m-portlet__head-label--success"    style=" width: max-content;"
                >
                    <span >
                       {{$blog->title}}
                    </span>
                </h2>
            </div>
        </div>
        <div class="m-portlet__head-tools">
            <ul class="m-portlet__nav">
                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                    <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                        <i class="la la-ellipsis-h m--font-brand"></i>
                    </a>
                    <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 22.5px;"></span>
                        <div class="m-dropdown__inner">
                            <div class="m-dropdown__body">
                                <div class="m-dropdown__content">
                                    <ul class="m-nav">
                                        <li class="m-nav__section m-nav__section--first">
                                            <span class="m-nav__section-text">
                                                Quick Actions
                                            </span>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="{{ url('') }}/EditBlogs/{{ $blog->id }}" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                <span class="m-nav__link-text">
                                                   Edit
                                                </span>
                                            </a>
                                        </li>



                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="m-portlet__body">
        {{$blog->description}}

    </div>
</div>
</div>
@endforeach
</div>
@endsection

