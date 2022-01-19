@extends('layout-dashboard.main')
@section('main_title','إضافة دورة تدريبية جديدة')
@section('courses','active')
@section('courses.create','active')

@section('content')
  	<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>إضافة دورة تدريبية جديدة
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form method="POST" action="{{route('courses.store')}}" class="form-horizontal" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            @csrf
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">اسم الدورة</label>
													<div class="col-md-4">
														<input required type="text" name="name" class="form-control input-circle" placeholder="اسم الدورة">
													</div>
												</div>

                                                <div class="form-group">
													<label class="col-md-3 control-label">تاريخ البداية</label>
													<div class="col-md-4">
														<input required type="date"  name="start_date" class="form-control input-circle" placeholder="">
													</div>
												</div>

                                                <div class="form-group">
													<label class="col-md-3 control-label">تاريخ البداية</label>
													<div class="col-md-4">
														<input required type="date"  name="finish_date" class="form-control input-circle" placeholder="">
													</div>
												</div>


                                                <div class="form-group">
													<label class="col-md-3 control-label">النوع</label>
													<div class="col-md-4">
														<input required type="text" name="type" class="form-control input-circle" placeholder=" النوع">
													</div>
												</div>

                                                <div class="form-group">
													<label class="col-md-3 control-label">اسم المتحدث</label>
													<div class="col-md-4">
														<input required type="text" name="speaker_name" class="form-control input-circle" placeholder="اسم المتحدث">
													</div>
												</div>

                                                <div class="form-group">
													<label class="col-md-3 control-label"> عدد المقاعد</label>
													<div class="col-md-4">
														<input required type="number" name="number" class="form-control input-circle" placeholder="عدد المقاعد">
													</div>
												</div>

                                                <div class="form-group">
													<label class="col-md-3 control-label">المحتوى</label>
													<div class="col-md-4">
														<textarea required  name="content" class="form-control input-circle" placeholder="المحتوى"></textarea>
													</div>
												</div>



                                                 <div class="form-group">
													<label class="col-md-3 control-label">القسم</label>
													<div class="col-md-4">
														 <select required class="form-control input-circle" name="section_id" id="">
                                                            @foreach ($section as $item)
                                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach

                                                        </select>
													</div>
												</div>

                                                <div class="form-group">
													<label class="col-md-3 control-label">الدرجة الوظيفية</label>
													<div class="col-md-4">
														 <select required class="form-control input-circle" name="functional_classe_id" id="">
                                                            @foreach ($functional_class as $item)
                                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach

                                                        </select>
													</div>
												</div>






											</div>

											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn btn-circle blue">إضافة </button>
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


