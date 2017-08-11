<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper">
        <a href="/" class="brand-logo"><span class="logo">Logo</span></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="navitems right hide-on-med-and-down">
            <li>
                <a class="dropdown-button" data-activates='article-content-desktop-view' data-beloworigin="true">
                <i class="material-icons right">arrow_drop_down</i>
                    Articles
                </a>
                <ul id='article-content-desktop-view' class='dropdown-content'>

                    <li><a href="/incometax">Income Tax</a></li>
                    <li class="divider"></li>

                    <li><a href="/vat">VAT</a></li>
                    <li class="divider"></li>

                    <li><a href="/finance">Finance</a></li>
                    <li class="divider"></li>

                    <li><a href="/law">Law</a></li>
                    <li class="divider"></li>

                    <li><a href="miscellaneous">Miscellaneous</a></li>
                    <li class="divider"></li>

                </ul>
            </li>
            <li><a href='/new'>News</a></li>
            <li><a href="/forum">Forum</a></li>
            <li>
                <a class="dropdown-button" data-activates='vacancy-content-desktop-view' data-beloworigin="true">
                <i class="material-icons right">arrow_drop_down</i>
                    Vacancy
                </a>
                <ul id='vacancy-content-desktop-view' class='dropdown-content'>

                    <li><a href="/audit">Article/Audit Assistant</a></li>
                    <li class="divider"></li>

                    <li><a href="/qualified">Qualified/Semi-Qualified CA</a></li>
                    <li class="divider"></li>

                </ul>
            </li>
            {{--<li><a href="#">Forms & Downloads </a></li>--}}
            @if(!Auth::user())
                <li><a href="#login"><i class="material-icons left">person</i>Login</a></li>
                <li><a href="#register"><i class="material-icons right">exit_to_app</i>Sign up</a></li>
            @else
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>

            @endif
        </ul>

        <ul class="navitems side-nav" id="mobile-demo">
            <li>
                <a class="dropdown-button" data-activates='article-content-mob-view' data-beloworigin="true">
                    <i class="material-icons right">arrow_drop_down</i>
                    Articles
                </a>
                <ul id='article-content-mob-view' class='dropdown-content'>

                    <li><a href="/incometax">Income Tax</a></li>

                    <li><a href="/vat">VAT</a></li>

                    <li><a href="/finance">Finance</a></li>

                    <li><a href="/law">Law</a></li>

                    <li><a href="/miscellaneous">Miscellaneous</a></li>

                </ul>
            </li>
            <li><a href='/new'>News</a></li>
            <li><a href="/forum">Forum</a></li>
            <li>
                <a class="dropdown-button" data-activates='vacancy-content-mob-view' data-beloworigin="true">
                    <i class="material-icons right">arrow_drop_down</i>
                    Vacancy
                </a>
                <ul id='vacancy-content-mob-view' class='dropdown-content'>

                    <li><a href="/audit">Article/Audit Assistant</a></li>
                    <li class="divider"></li>

                    <li><a href="/qualified">Qualified/Semi-Qualified CA</a></li>
                    <li class="divider"></li>

                </ul>
            </li>
            {{--<li><a href="#">Forms & Downloads </a></li>--}}
            @if(!Auth::user())
                <li><a href="#login"><i class="material-icons right">person</i>Login</a></li>
                <li><a href="#register"><i class="material-icons right">exit_to_app</i>Sign up</a></li>
            @else
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>

            @endif
        </ul>
    </div>
</nav>
</div>

