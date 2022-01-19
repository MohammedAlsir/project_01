@extends('layout-dashboard.main')
@section('main_title','الدرجات الوظيفية')
@section('functional_class','active')
@section('functional_class.index','active')


@section('content')
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green-haze">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>الدرجات الوظيفية
							</div>

						</div>
						<div class="portlet-body">
                            @if ($functional_class->count() > 0)
                                <table class="table table-striped table-bordered table-hover" id="sample_2">
                                    <thead>
                                    <tr>
                                        <th>
                                            الرقم
                                        </th>
                                        <th >
                                            الاسم
                                        </th>
                                        <th >
                                            الاعدادات
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($functional_class as $item)
                                            <tr >
                                                <td style=" vertical-align: middle;">
                                                    {{$id++}}
                                                </td>
                                                <td style=" vertical-align: middle;">
                                                    {{$item->name}}
                                                </td>

                                                <td style=" vertical-align: middle;">



                                                    <a href="{{route('functional_class.edit',$item->id)}}" class="btn btn-icon-only green">
                                                    <i class="fa fa-edit"></i>
                                                    </a>

                                                    <form style="display: inline-block" action="{{route('functional_class.destroy',[$item->id])}}" method="POST">
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
                                <p>لا يوجد درجات وظيفية حاليا</p>
                            @endif

						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->

@endsection
