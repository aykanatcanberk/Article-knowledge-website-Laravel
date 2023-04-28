@extends("layouts.adminbase")
@section('title','Settings')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>SETTINGS</h2>
                </div>
            </div>
        </div>

        <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="col-lg-10 col-md-12 col-sm-12 mb-30">
                <div class="pd-20 card-box">
                    <div class="tab">
                        <div class="row clearfix">
                            <div class="col-md-3 col-sm-12">
                                <ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#general4" role="tab"
                                           aria-selected="false">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#email4" role="tab"
                                           aria-selected="true">Smtp Email</a>
                                    </li>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#contactpage4" role="tab"
                                           aria-selected="false">Contact Page</a>

                                </ul>
                            </div>
                            <div class="col-md-9 col-sm-12">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="general4" role="tabpanel">
                                        <div class="pd-20">
                                            <input type="hidden" id="id" name="id " value="{{$data->id}}"
                                                   class="form-control">
                                            <div class="form-group">


                                            </div>
                                            <div class="form-group">
                                                <label><b>Keywords</b></label>
                                                <input class="form-control" type="text" name="keywords"
                                                       value="{{$data->keywords}}">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Description</b></label>
                                                <input class="form-control" type="text" name="description"
                                                       value="{{$data->description}}">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Company</b></label>
                                                <input class="form-control" type="text" name="company"
                                                       value="{{$data->company}}">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Address</b></label>
                                                <input class="form-control" type="text" name="address"
                                                       value="{{$data->address}}">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Phone</b></label>
                                                <input class="form-control" type="text" name="phone"
                                                       value="{{$data->phone}}">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Email</b></label>
                                                <input class="form-control" type="text" name="email"
                                                       value="{{$data->email}}">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Status</b></label>
                                                <select class="custom-select col-12" name="status">
                                                    <option selected="">Choose...</option>
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                            </div>
                                    
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Update Setting</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="email4" role="tabpanel">
                                        <div class="pd-20">
                                            <div class="form-group">
                                                <label><b>Smtp Server</b></label>
                                                <input class="form-control" type="text" name="smtpserver"
                                                       value="{{$data->smtpserver}}">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Smtp Email</b></label>
                                                <input class="form-control" type="text" name="smtpemail"
                                                       value="{{$data->smtpemail}}">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Smtp Password</b></label>
                                                <input class="form-control" type="text" name="smtppassword"
                                                       value="{{$data->smtppassword}}">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Smtp Port</b></label>
                                                <input class="form-control" type="text" name="smtpport"
                                                       value="{{$data->smtpport}}">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Update Setting</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="socialmedia4" role="tabpanel">
                                        <div class="pd-20">
                                            <div class="form-group">
                                                <label><b>Fax</b></label>
                                                <input class="form-control" type="text" name="fax"
                                                       value="{{$data->fax}}">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Facebook</b></label>
                                                <input class="form-control" type="text" name="facebook"
                                                       value="{{$data->facebook}}">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Instagram</b></label>
                                                <input class="form-control" type="text" name="instagram"
                                                       value="{{$data->instagram}}">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Twitter</b></label>
                                                <input class="form-control" type="text" name="twitter"
                                                       value="{{$data->twitter}}">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Youtube</b></label>
                                                <input class="form-control" type="text" name="youtube"
                                                       value="{{$data->youtube}}">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Update Setting</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="contactpage4" role="tabpanel">
                                        <div class="pd-20">

                                            <div class="form-group">
                                                <label><b>Contact Page</b></label>
                                                <textarea class="form-control" id="contactpage" name="contact">
													$data->contact
													</textarea>
                                                <script>
                                                    ClassicEditor
                                                        .create(document.querySelector('#contactpage'))
                                                        .then(editor => {
                                                            console.log(editor);
                                                        })
                                                        .catch(error => {
                                                            console.error(error);
                                                        });
                                                </script>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Update Setting</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="references4" role="tabpanel">
                                        <div class="pd-20">

                                            <div class="form-group">
                                                <label><b>References</b></label>
                                                <textarea class="form-control" id="references" name="references">
																$data->references
									 				</textarea>
                                                <script>
                                                    ClassicEditor
                                                        .create(document.querySelector('#references'))
                                                        .then(editor => {
                                                            console.log(editor);
                                                        })
                                                        .catch(error => {
                                                            console.error(error);
                                                        });
                                                </script>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Update Setting</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>
@endsection
@section('foot')
    <script>
        $(function(){
            $('.textarea').summernote()
        } )
    </script>
@endsection