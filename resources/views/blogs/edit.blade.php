@extends('app')
@section('title')
Add new Blogs
@endsection
@section('content')
<div class="m-portlet m-portlet--tab">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <span class="m-portlet__head-icon m--hide">
                    <i class="la la-gear"></i>
                </span>
                <h3 class="m-portlet__head-text">
                    Add New Blog
                </h3>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form class="m-form m-form--fit m-form--label-align-right" action="{{url('')}}/UpdateBlogs/{{$blogs->id}}" method="post" role="form">
        @csrf
        <div class="m-portlet__body">

            <div class="form-group m-form__group">
                <label for="title">
                    Title
                </label>
                <input type="text" class="form-control m-input m-input--solid" id="title" name="title" value="{{$blogs->title}}" placeholder="Blog Title">
            </div>

            <div class="form-group m-form__group">
                <label for="active">
                    Status
                </label>
                <select class="form-control m-input m-input--solid" id="active" name="active">
                    <option value="1" <?php if( $blogs->active == 1 ){ echo 'selected'; } ?> >
                        Appear
                    </option>
                    <option value="0" <?php if( $blogs->active == 0 ){ echo 'selected'; } ?>>
                        Disappear
                    </option>

                </select>
            </div>
            <div class="form-group m-form__group">
                <label for="description">
                    Description
                </label>
                <textarea class="form-control m-input m-input--solid" id="description" name="description" rows="3">{{ $blogs->description }}</textarea>
            </div>
        </div>
        <div class="m-portlet__foot m-portlet__foot--fit">
            <div class="m-form__actions">
                <button type="submit" class="btn btn-success">
                    Submit
                </button>
                <button type="reset" class="btn btn-secondary">
                    Cancel
                </button>
            </div>
        </div>
    </form>
    <!--end::Form-->
</div>
@endsection


