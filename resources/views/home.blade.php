
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class = 'col-sm-3' id="left-nav">
            <nav class="nav flex-column" >
                @foreach($section_nav as $name => $link)
                <a class="nav-link" href="{{$link}}">{{$name}}</a>
                @endforeach
                <!-- <a class="nav-link active" href="#">Manage Customers</a> -->
            </nav>
            <div class="alert">
                <p>Ensure that you keep your password safe, secure and personal</p>
            </div>
        </div> <!-- end of left nav -->
        <div class="col-sm-9" id="main-content">
            <div class="card">
                <div class="card-header">
                    {{$variable_arr['card_header']}}
                    @if($variable_arr['session_isset'])
                    <span class="float-right">
                        <a href="{{url()->current().'?end_session=1'}}">
                            Switch Customer
                        </a>
                    </span>
                    @endif
                </div>
                <div class="card-body">
                    @include($section.'.'.$action)
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footerLinks')
<script>
    var _token = '{{ csrf_token() }}';
    //alert(token);
</script>
@endsection
