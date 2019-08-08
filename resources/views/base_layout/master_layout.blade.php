<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="{{app()->getLocale() =='ar' ?'rtl':'ltr'}}">
@includeIf('base_layout.header.meta_header')
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
@includeIf("base_layout.header.header")
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">

            <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-search-wrapper">
                    <form class="sidebar-search  sidebar-search-bordered" action="page_general_search_3.html" method="POST">
                        <a href="javascript:;" class="remove">
                            <i class="icon-close"></i>
                        </a>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                        </div>
                    </form>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                </li>
                <?php $links =\DB::table('link')->select('*')->get();?>

                @foreach($links as $link)
                <li class="nav-item start ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="{{$link->icon}}"></i>
                        <span class="title">{{$link->name}}</span>
                        <span class="arrow"></span>
                    </a>
                       <?php $subLinks = \DB::table('sub_link')->leftjoin('link','parent_id','=','link.id')->where('parent_id','=',$link->id)->get(['sub_link.name','sub_link.icon','sub_link.value'])?>

                    <ul class="sub-menu">
                        @foreach($subLinks as $subLink)
                           <li class="nav-item start ">
                            <a href="index.html" class="nav-link ">
                                <i class="{{$subLink->icon}}"></i>
                                <span class="title">{{$subLink->name}}</span>
                            </a>
                        </li>
                            @endforeach
                    </ul>
                </li>
                @endforeach


            </ul>
            <!-- END SIDEBAR MENU -->
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->


      @yield("content")
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    <a href="javascript:;" class="page-quick-sidebar-toggler">
        <i class="icon-login"></i>
    </a>
    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
@includeIf("base_layout.footer.footer")
@includeIf("base_layout.footer.meta_footer")
</body>
