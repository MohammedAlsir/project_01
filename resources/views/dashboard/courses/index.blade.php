@extends('layout-dashboard.main')
@section('main_title','الدورات التدريبية')
@section('courses','active')
@section('courses.index','active')


@section('content')
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green-haze">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>الدورات التدريبية
							</div>

						</div>
						<div class="portlet-body">
                            @if ($courses->count() > 0)
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
                                            تاريخ البداية
                                        </th>

                                        <th>
                                            تاريخ النهاية
                                        </th>

                                        <th>
                                            النوع
                                        </th>

                                        <th>
                                            المتحدث
                                        </th>

                                        <th>
                                            الاعدادات
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($courses as $course)
                                            <tr>
                                                <td style=" vertical-align: middle;">
                                                    {{$id++}}
                                                </td>
                                                <td style=" vertical-align: middle;">
                                                    {{$course->name}}
                                                </td>
                                                <td style=" vertical-align: middle;">
                                                    {{$course->start_date}}
                                                </td>
                                                <td style=" vertical-align: middle;">
                                                    {{$course->finish_date}}
                                                </td>

                                                <td style=" vertical-align: middle;">
                                                    {{$course->type}}
                                                </td>

                                                <td>
                                                    {{$course->speaker_name}}
                                                </td>

                                                <td style=" vertical-align: middle;">



                                                    <a href="{{route('courses.edit',$course->id)}}" class="btn btn-icon-only green">
                                                    <i class="fa fa-edit"></i>
                                                    </a>

                                                    <form style="display: inline-block" action="{{route('courses.destroy',[$course->id])}}" method="POST">
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
                                <p>لا يوجد دورات تدريبية حاليا</p>
                            @endif

						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->

@endsection
