@extends('layouts.adminbase')

@section('title','Add Content')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div class="midde_cont">
        <div class="container-fluid">
            <div class="row column_title">
                <div class="col-md-12">
                    <div class="page_title">
                        <h1>Add Content</h1>
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
                                <h5>Content</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-wrapper">
                    <section class="content">
                        <form action="/admin/content/store" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group-inner">
                                    <label>Parent Content</label>
                                    <select class="form-control select2" name="menu_id">
                                        <option value="0" selected="selected">Main Content</option>
                                        @foreach($data as $rs)
                                            <option
                                                value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\MenuController::getParentsTree($rs,$rs->title) }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group-inner">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Title">
                                </div>

                                <div class="form-group-inner">
                                    <label>Keywords</label>
                                    <input type="text" class="form-control" name="keywords" placeholder="keywords">
                                </div>
                                <div class="form-group-inner">
                                    <label>Detail</label>
                                    <textarea class="form-control" id="detail" name="detail">
                                    </textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#detail' ) )
                                            .then( editor => {
                                                console.log( editor );
                                            } )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                </div>

                                <div class="form-group-inner">
                                    <label>Content</label>
                                    <input type="text" class="form-control" name="Content">
                                </div>
                                <div class="form-group-inner">

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
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>

                                <div class="login-btn-inner">
                                    <div class="inline-remember-me">
                                        <button class="btn btn-sm btn-primary pull-right login-submit-cs"
                                                type="submit">
                                            Save
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
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
