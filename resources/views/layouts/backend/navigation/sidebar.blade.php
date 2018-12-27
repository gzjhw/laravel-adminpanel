<div id="slide-out" class="side-nav fixed sn-bg-4">
    <ul class="custom-scrollbar">
        <!-- Logo -->
        <li class="logo-sn waves-effect">
            <div class=" text-center">
                <a href="#" class="pl-0">
                    <img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="">
                </a>
            </div>
        </li>
        <!--/. Logo -->
        <!--Search Form-->
        <li>
            <form class="search-form" role="search">
                <div class="form-group md-form mt-0 pt-1 waves-light">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
        </li>
        <!--/.Search Form-->
        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">
                {!! \App\Helpers\MainHelper::renderSideNav() !!}
            </ul>

            <ul class="collapsible collapsible-accordion">
                <li data-level="1" class=""><a class="collapsible-header waves-effect arrow-r"><i
                                class="fas fa-question-circle"></i>Help<i
                                class="fas fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body" style="display: none;">
                        <ul>
                            <li>
                                <a class="nav-link" href="{{ url('/home') }}">Home <span
                                            class="sr-only">(current)</span></a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ url('/users') }}">Userlist</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

        </li>
        <!--/. Side navigation links -->
    </ul>
    <div class="sidenav-bg rgba-blue-strong"></div>
</div>