@extends('layouts.admin')


@section('header')
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active">Dashboard</li>
    </ol>
</div>
<!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
</div>
<!--/.row-->
@endsection

@section('content')
<div class="panel panel-container">

    <div class="row">
         <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-teal panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-users color-blue"></em>
                    <div class="large">
                     {{$suplier = DB::table('users')->count();}}
                    </div>
                    <div class="text-muted">Data User</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-teal panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-users color-blue"></em>
                    <div class="large">
                     {{$suplier = DB::table('supliers')->count();}}
                    </div>
                    <div class="text-muted">Data Supplier</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--/.row-->


<!--/.col-->
<br>
@endsection

