
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <img src="/assets/img/logo jp.png" width="90" height="90" alt="lorem">
            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 25px;">
                <span class="text-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">J</font><font color="#9C0568">a</font><font color="blue">j</font><font color="#06960E">j</font><font color="#9C0568">i</font><br> 
                    <font color="red">P</font><font color="black">r</font><font color="#E0D605">o</font><font color="#33F7EB">f</font><font color="#EDB426">e</font><font color="red">s</font><font color="#26D2ED">s</font><font color="#A54A4A">o</font><font color="blue">r</font></span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="/" class="nav-item nav-link  @yield('home')">@lang('navbar.home')</a>
                    <!-- <a href="about.html" class="nav-item nav-link">About</a> -->
                    <a href="/groups" class="nav-item nav-link @yield('classes')">@lang('navbar.classes')</a>
                    <a href="/teachers" class="nav-item nav-link @yield('teachers')">@lang('navbar.teachers')</a>
                    <a href="/achievements" class="nav-item nav-link  @yield('wins')">@lang('navbar.wins')</a>
                    <a href="/gallery" class="nav-item nav-link @yield('gallery')">@lang('navbar.gallery')</a>
                    <a href="/blog" class="nav-item nav-link @yield('posts')">@lang('navbar.posts')</a>
                    <a href="contact.html" class="nav-item nav-link @yield('contact')">@lang('navbar.contact')</a>
                </div>
            </div>
            <a class="btn btn-primaryy px-4" href="/lang/uz"><img style="padding: 3px;" src="/assets/img/Uzbekistan-Flag-icon.png" width="35" height="35" alt="lorem"></a>
            <a class="btn btn-primaryy px-4" href="/lang/ru"><img style="padding: 3px;" src="/assets/img/united-states-of-america-flag-png-xl.png" width="35" height="35" alt="lorem"></a>
            <a class="btn btn-primaryy px-4" href="/lang/en"><img style="padding: 3px;" src="/assets/img/Russia-flag.png" width="35" height="35" alt="lorem"></a>
            <!-- <a  href="tel:+998996111300" class="btn btn-primary px-4"><img src="/assets/img/missed-call.png" width="35" height="35" alt="lorem">  Qong'iroq qiling</a> -->
    </div>
    </nav>
    </div>
    <!-- Navbar End -->
