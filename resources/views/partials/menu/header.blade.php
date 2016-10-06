<li class="nav-header">
    <div class="dropdown profile-element">
        <span>
            <img alt="image" height="75em" width="75em" class="img-responsive img-circle" src="{{ asset('assets/img/users/logo.jpg') }}" />
        </span>
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <span class="clear">
                <span class="block m-t-xs">
                    <strong class="font-bold">{{  Auth::user()->email --}}</strong>
                </span>
                <span class="text-muted text-xs block">{{ Auth::user()->name }} <b class="caret"></b></span>
            </span>
        </a>
        <ul class="dropdown-menu animated fadeInRight m-t-xs">
            <li>
                <a href="{{ route('logout') }}">Logout</a>
            </li>
        </ul>
    </div>
    <div class="logo-element">
        {{ trans('general.header.short_title') }}
    </div>
</li>