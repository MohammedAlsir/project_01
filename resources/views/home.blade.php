@extends('layout-dashboard.main')
@section('home','active open')

@section('content')
<h2 class="text-center"></h2>
{{-- <div class="row text-right">

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
        <div class="dashboard-stat blue-madison">
            <div class="details">
                <div class="number">
                        {{$users}}
                </div>
                <div class="desc">
                        عدد المستخدمين
                </div>
            </div>
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            @if (auth::user()->role =='مدير')
                <a class="more" href="{{route('users.index')}}">
                عرض المستخدمين <i class="m-icon-swapright m-icon-white"></i>
                </a>
            @endif

            @if (auth::user()->role =='مشرف')
                <a class="more" href="">
                لايمكنك عرض المستخدمين
                </a>
            @endif

        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat red-intense">
            <div class="visual">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="details">
                <div class="number">
                        {{$sections}}
                </div>
                <div class="desc">
                        عدد الاقسام
                </div>
            </div>
            <a class="more" href="{{route('sections.index')}}">
            عرض الاقسام <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat green-haze">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                        {{$services}}
                </div>
                <div class="desc">
                        عدد الخدمات
                </div>
            </div>
            <a class="more" href="{{route('services.index')}}">
            عرض الخدمات <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>




    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat purple-plum">
            <div class="visual">
                <i class="fa fa-globe"></i>
            </div>
            <div class="details">
                <div class="number">
                        {{$setting->price_us}}
                </div>
                <div class="desc">
                        سعر الدولار
                </div>
            </div>
            @if (auth::user()->role =='مدير')
                <a class="more" href="{{route('setting.index')}}">
                تغيير السعر <i class="m-icon-swapright m-icon-white"></i>
                </a>
             @endif

              @if (auth::user()->role =='مشرف')
                <a class="more" href="">
                لايمكنك تعديل سعر الدولار
                </a>
             @endif

        </div>
    </div>


     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat blue">
            <div class="visual">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="details">
                <div class="number">
                        {{$order}}
                </div>
                <div class="desc">
                        عدد الطلبات الكلي
                </div>
            </div>
            <a class="more" href="{{route('orders.index')}}">
            عرض كل الطلبات <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat green">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                        {{$accepted}}
                </div>
                <div class="desc">
                        عدد الطلبات المقبولة
                </div>
            </div>
            <a class="more" href="{{route('orders.accepted')}}">
            عرض الطلبات المقبولة <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat yellow">
            <div class="visual">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="details">
                <div class="number">
                        {{$pending}}
                </div>
                <div class="desc">
                        عدد الطلبات المعلقة
                </div>
            </div>
            <a class="more" href="{{route('orders.pending')}}">
            عرض الطلبات المعلقة <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat red">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                        {{$rejected}}
                </div>
                <div class="desc">
                        عدد الطلبات المرفوضة
                </div>
            </div>
            <a class="more" href="{{route('orders.rejected')}}">
            عرض الطلبات المرفوضة <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
</div> --}}
@endsection
