@extends('layouts.task')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">İşçi heyəti</h4></br>
                        @if (Session::has('message'))
                          <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                              <th>ID</th>
                              <th>Ad, Soyad</th>
                              <th>Peşə</th>
                              <th>Haqqında</th>
                              <th>Redaktə</th>
                              <th>Sil</th>
                            </thead>
                        @foreach($allDb as $staff)
                            <tbody>
                              <th>{{$staff->id}}</th>
                              <th>{{$staff->nameSurname}}</th>
                              <th>{{$staff->jobTitle}}</th>
                              <th>{{$staff->about}}</th>
                              <th>
                                <form action="{{ url("home/$staff->id/edit") }}" method="get">
                                    <input type="submit" value="Redaktə" class="btn btn-danger">
                                  </form>
                              </th>
                              <th>
                                <form action="{{ url("home/$staff->id") }}" method="post">
                                  {{ csrf_field() }}
                                  <input type="hidden" name="_method" value="DELETE">
                                  <input type="submit" value="Sil" class="btn btn-danger">
                                </form>
                              </th>
                            </tbody>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
