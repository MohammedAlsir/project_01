@extends('layout-dashboard.main')
@section('main_title','المتدربين')
@section('recipient','active')
@section('recipient.index','active')


@section('content')
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green-haze">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>المتدربين
							</div>

						</div>
						<div class="portlet-body">
                            @if ($recipients->count() > 0)
                                <table class="table table-striped table-bordered table-hover" id="sample_2">
                                    <thead>
                                    <tr>
                                        <th>
                                            الرقم
                                        </th>
                                         <th>
                                            الاسم
                                        </th>
                                        <th>
                                            رقم الهاتف
                                        </th>

                                        <th>
                                             القسم
                                        </th>

                                        <th>
                                            الدرجة الوظيفية
                                        </th>

                                        <th>
                                            الاعدادات
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($recipients as $recipient)
                                            <tr>
                                                <td style=" vertical-align: middle;">
                                                    {{$id++}}
                                                </td>
                                                <td style=" vertical-align: middle;">
                                                    {{$recipient->name}}
                                                </td>
                                                <td style=" vertical-align: middle;">
                                                    {{$recipient->phone}}
                                                </td>

                                                <td style=" vertical-align: middle;">
                                                    {{$recipient->section->name}}
                                                </td>

                                                 <td style=" vertical-align: middle;">
                                                    {{$recipient->functionalClass->name}}
                                                </td>

                                                <td style=" vertical-align: middle;">


                                                    <a href="{{route('recipient.edit',$recipient->id)}}" class="btn btn-icon-only green">
                                                    <i class="fa fa-edit"></i>
                                                    </a>

                                                    <form style="display: inline-block" action="{{route('recipient.destroy',[$recipient->id])}}" method="POST">
                                                                {{ csrf_field()}}
                                                                {{ method_field('delete') }}



                                                        <button  type="submit" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only m-btn--pill red">
                                                                    <i class="fa fa-times"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            @else
                                <p>لا يوجد متدربين حاليا</p>
                            @endif

						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->

@endsection
