@extends('layout-dashboard.main')
@section('main_title','تعديل بيانات المستخدم')
@section('recipient','active')


@section('content')
  	<div class="tab-content">
        <div class="tab-pane active" id="tab_0">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>تعديل بيانات المستخدم
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method="POST" action="{{route('recipient.update',$recipient->id)}}" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">اسم المتدرب</label>
                                <div class="col-md-4">
                                    <input required type="text" value="{{$recipient->name}}" name="name" class="form-control input-circle" placeholder="اسم المستخدم">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">رقم الهاتف</label>
                                <div class="col-md-4">
                                    <input required type="phone"  value="{{$recipient->phone}}" name="phone" class="form-control input-circle" placeholder="رقم الهاتف">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 control-label">القسم</label>
                                <div class="col-md-4">
                                        <select required class="form-control input-circle" name="section_id" id="">
                                        @foreach ($section as $item)
                                            <option {{$recipient->section_id == $item->id? 'selected':''}} value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">الدرجة الوظيفية</label>
                                <div class="col-md-4">
                                        <select required class="form-control input-circle" name="functional_classe_id" id="">
                                        @foreach ($functional_class as $item)
                                            <option {{$recipient->functional_classe_id == $item->id? 'selected':''}} value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-4">
                                    <img style="width: 150px; height: 150px;" src="{{asset('uploads/recipients/'.$recipient->photo)}}" alt="لايوجد صورة حاليا" srcset="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">الصورة </label>
                                <div class="col-md-4">
                                    <input  type="file" name="photo" class="form-control input-circle" placeholder="">
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


