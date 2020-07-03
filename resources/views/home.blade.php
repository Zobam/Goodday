
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class = 'col-sm-3' id="left-nav">
            <nav class="nav flex-column" >
                @foreach($section_nav as $name => $link)
                <a class="nav-link {{ isset($section_nav[$name]['nav_link_active'])? 'active':'' }}" href="{{$link['link']}}"><i class="fas fa-{{$link['icon']}}"></i> {{$name}}</a>
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
                    <!-- {{$variable_arr['card_header']}} -->
                    {{Session()->get('current_customer')->full_name?? 'Customer Area'}}
                    @if($variable_arr['session_isset'])
                    <span class="float-right">
                        <a href="{{url()->current().'?end_session=1'}}">
                            Switch Customer
                        </a>
                    </span>
                    @endif
                </div>
                <div class="card-body">
                    @if($section =='transactions')
                        @include($section.'.view')
                    @else
                        @include($section.'.'.$action)
                    @endif
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
