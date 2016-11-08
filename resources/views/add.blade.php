@extends('layouts.task')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                      @if (Session::has('message'))
             <div class="alert alert-info">{{ Session::get('message') }}</div>
          @endif
          {{ $errors->first('age') }}
                    </div>
                    <div class="content">
                        <form action="/home" method="post" enctype="multipart/form-data">
                          	{{ csrf_field() }}

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Ad və Soyad</label>
                                        <input type="text" name="namesurname" class="form-control" placeholder="Ad və Soyad" value="">

                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Şəkil</label>
                                        <input type="file" name="photo" class="form-control" placeholder="" value="">
                                    </div>
                                </div>

                            </div>




                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Haqqında</label>

                                        <textarea rows="5" id="ckeditor1" name="about" class="form-control" placeholder="Haqqında"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Peşə</label>

                                            <input type="text" name="jobtitle" class="form-control" placeholder="Peşə" value="">

                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Əlavə Et</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>




@endsection
