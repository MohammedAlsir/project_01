@extends('layout-dashboard.main')
@section('main_title','تعديل بيانات الدرجة الوظيفية')
@section('functional_class','active')

@section('content')
  	<div class="tab-content">
        <div class="tab-pane active" id="tab_0">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>تعديل بيانات الدرجة الوظيفية
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method="POST" action="{{route('functional_class.update',$functional_class->id)}}" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">اسم الدرجة الوظيفية</label>
                                <div class="col-md-4">
                                    <input required type="text" maxlength="255" value="{{$functional_class->name}}" name="name" class="form-control input-circle" placeholder="اسم الدرجة الوظيفية">
                                </div>
                            </div>

                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn btn-circle blue">تعديل </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
        </div>

    </div>
@endsection


