@extends("layouts.adminbase")
@section('title','Category List')

@section('content')
<div class="container-fluid">
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <h2>Add Category</h2>
            </div>
        </div>
    </div>

    <div class="row column1">
    <div class="container-fluid">
            <div class="section">
                <div class="container-fluid">
                    <div class="row column_title">
                        <div class="col-md-12">
                            <div class="page_title">
                                <h5>Category</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-wrapper">
                    <section class="content">
                        <form action="/admin/category/store" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group-inner">
                                    <label>Parent Category</label>
                                
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
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="description"
                                           placeholder="description">
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

        

</div>
@endsection