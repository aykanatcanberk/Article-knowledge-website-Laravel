@extends('layouts.adminbase')

@section('title','Edit Content:')

@section('head')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="midde_cont">
        <div class="container-fluid">
            <div class="row column_title">
                <div class="col-md-12">
                    <div class="page_title">
                        <h1>Edit Content</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="section">
                <div class="container-fluid">
                    <div class="row column_title">
                        <div class="col-md-12">
                            <div class="page_title">
                                <h5>Edit</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-wrapper">
                    <section class="content">
                    <form role="form" action="{{route('admin.content.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group-inner">
                                <label>Parent Category</label>
                                <select class="form-control select2" name="category_id">
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}"  @if ($rs->id == $data->category_id)  selected="selected"  @endif>
                                        {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category, $rs->category->title) }}
                                    </option>
                                @endforeach
                                </select>
                            </div>  


                            <div class="form-group-inner">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="{{$data->title}}" >
                            </div>

                            <div class="form-group-inner">
                                <label>Keywords</label>
                                <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                            </div>
                            <div class="form-group-inner">
                                <label>Description</label>
                                <input type="text" class="form-control" name="description" value="{{$data->description}}">
                            </div>

                            <div class="form-group-inner">
                                <label>Detail</label>
                                <textarea class="form-control" name="detail" value="{$data->detail}">

                                    </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose Image
                                            File</label>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>

                            <div class="login-btn-inner">
                                <div class="inline-remember-me">
                                    <button class="btn btn-sm btn-primary pull-right login-submit-cs" type="submit">
                                        Update
                                    </button>
                                    <label class="">
                                        <div class="icheckbox_square-green" style="position: relative;"><input
                                                type="checkbox" class="i-checks"
                                                style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('foot')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    $(function () {
        // Summernote
        $('.textarea').summernote()
    })
</script>
@endsection