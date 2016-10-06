<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            @include('partials.menu.header')

            {{-- menu admin
            @if(currentUser()->isAdmin())
                @include('partials.menu.toggle_menu',
                    ['title' => trans('menu.admin.title'),
                     'icon' => trans('menu.admin.icon'),
                     'items' => trans('menu.admin.items'),
                     'sections' => trans('menu.admin.sections')])
            @else {{-- owner - attendant - employee --}}
            {{--@foreach(trans('menu.others.items') as $item => $content)
                @include('partials.menu.item', [
                    'sections' => trans('menu.others.sections'),
                    'route' => route($content['route'], currentUser()->sportcenterSelected()->id),
                    'icon' => $content['icon'],
                    'text' => $content['text']
                    ])
            @endforeach
            @endif--}}
        </ul>
    </div>
</nav>