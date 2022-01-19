 <div class="page-sidebar-wrapper">
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->

                <ul class="page-sidebar-menu page-sidebar-menu-light" data-keep-expanded="false" data-auto-scroll="true"
                    data-slide-speed="200">
                    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                    <li class="sidebar-toggler-wrapper">
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                        <div class="sidebar-toggler">
                        </div>
                        <!-- END SIDEBAR TOGGLER BUTTON -->
                    </li>
                    <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                    <li style="margin-top:5px " class="@yield('home') start  ">
                        <a href="{{route('home')}}">
                            <i class="icon-home"></i>
                            <span class="title">الصفحة الرئيسية</span>
                            {{-- <span class="selected"></span> --}}
                            {{-- <span class="arrow "></span> --}}
                        </a>
                    </li>

                    @if (auth::user()->role =='مدير')
                        <li style="margin-top:5px " class="@yield('users') start  ">
                            <a href="javascript:;">
                                <i class="icon-users"></i>
                                <span class="title">المستخدمين</span>
                                <span class="selected"></span>
                                <span class="arrow "></span>
                            </a>

                                <ul class="sub-menu">
                                    <li class="@yield('users.index')">
                                        <a href="{{route('users.index')}}">
                                            <i class="icon-"></i>
                                            عرض المستخدمين
                                            </a>
                                    </li>
                                    <li class="@yield('users.create')">
                                        <a href="{{route('users.create')}}">
                                            <i class="icon-"></i>
                                            إضافة مستخدم جديد
                                        </a>
                                    </li>
                                </ul>
                        </li>
                    @endif

                    <li style="margin-top:5px " class="@yield('sections') start  ">
                            <a href="javascript:;">
                                <i class="icon-users"></i>
                                <span class="title">الاقسام</span>
                                <span class="selected"></span>
                                <span class="arrow "></span>
                            </a>

                                <ul class="sub-menu">
                                    <li class="@yield('sections.index')">
                                        <a href="{{route('sections.index')}}">
                                            <i class="icon-"></i>
                                            عرض الاقسام
                                            </a>
                                    </li>
                                    <li class="@yield('sections.create')">
                                        <a href="{{route('sections.create')}}">
                                            <i class="icon-"></i>
                                            إضافة قسم جديد
                                        </a>
                                    </li>
                                </ul>
                        </li>


                        <li style="margin-top:5px " class="@yield('functional_class') start  ">
                            <a href="javascript:;">
                                <i class="icon-users"></i>
                                <span class="title">الدرجات الوظيفية</span>
                                <span class="selected"></span>
                                <span class="arrow "></span>
                            </a>

                            <ul class="sub-menu">
                                <li class="@yield('functional_class.index')">
                                    <a href="{{route('functional_class.index')}}">
                                        <i class="icon-"></i>
                                        عرض الدرجات الوظيفية
                                        </a>
                                </li>
                                <li class="@yield('functional_class.create')">
                                    <a href="{{route('functional_class.create')}}">
                                        <i class="icon-"></i>
                                        إضافة درجة وظيفية جديدة
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li style="margin-top:5px " class="@yield('courses') start  ">
                            <a href="javascript:;">
                                <i class="icon-users"></i>
                                <span class="title">الدورات التدريبية</span>
                                <span class="selected"></span>
                                <span class="arrow "></span>
                            </a>

                            <ul class="sub-menu">
                                <li class="@yield('courses.index')">
                                    <a href="{{route('courses.index')}}">
                                        <i class="icon-"></i>
                                        عرض الدورات التدريبية
                                        </a>
                                </li>
                                <li class="@yield('courses.create')">
                                    <a href="{{route('courses.create')}}">
                                        <i class="icon-"></i>
                                        إضافة الدورات التدريبية جديدة
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li style="margin-top:5px " class="@yield('recipient') start  ">
                            <a href="javascript:;">
                                <i class="icon-users"></i>
                                <span class="title">المتدربين</span>
                                <span class="selected"></span>
                                <span class="arrow "></span>
                            </a>

                            <ul class="sub-menu">
                                <li class="@yield('recipient.index')">
                                    <a href="{{route('recipient.index')}}">
                                        <i class="icon-"></i>
                                        عرض المتدربين
                                        </a>
                                </li>
                                <li class="@yield('recipient.create')">
                                    <a href="{{route('recipient.create')}}">
                                        <i class="icon-"></i>
                                        إضافة  متدرب جديد
                                    </a>
                                </li>
                            </ul>
                        </li>

                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
        </div>
