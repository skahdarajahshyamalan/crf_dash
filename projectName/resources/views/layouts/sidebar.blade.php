

<nav class="dash-sidebar light-sidebar transprent-bg">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="" class="b-brand text-center">
                <!-- ========   change your logo hear   ============ -->
                
            </a>
        </div>
        <div class="navbar-content">
            <ul class="dash-navbar" style="display: block;">
                <li class="dash-item dash-hasmenu {{ request()->is('/') ? 'active' : '' }}">
                    <a href="" class="dash-link"><span class="dash-micon"><i
                                class="ti ti-home"></i></span>
                        <span class="dash-mtext custom-weight">{{ __('Dashboard') }}</span></a>
                </li>

                    <li class="dash-item dash-hasmenu {{ request()->is('roles*') ? 'active' : '' }}">
                        <a class="dash-link" href=""><span class="dash-micon">
                                <i class="ti ti-key"></i></span>
                            <span class="dash-mtext">{{ __('Roles') }}</span>
                        </a>
                    </li>
                
                @can('manage-setting')
                    <li class="dash-item dash-hasmenu">
                        <a class="dash-link" href=""><span class="dash-micon">
                                <i class="ti ti-settings"></i></span>
                            <span class="dash-mtext">{{ __('Settings') }}</span>
                        </a>
                    </li>
                @endcan
                @can('manage-form')
                    <li class="dash-item dash-hasmenu {{ request()->is('forms*','design*') ? 'active' : '' }}">
                        <a class="dash-link" href=""><span class="dash-micon">
                                <i class="ti ti-forms"></i></span>
                            <span class="dash-mtext">{{ __('Forms') }}</span>
                        </a>
                    </li>
                @endcan
                @can('manage-submitted-form')

                    <li class="dash-item dash-hasmenu {{ request()->is('formvalues*') ? 'active' : '' }}">
                        <a href="#" class="dash-link"><span class="dash-micon"><i
                                    class="ti ti-list"></i></span><span
                                class="dash-mtext">{{ __('Submitted Forms') }}</span><span class="dash-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul
                            class="dash-submenu {{ Request::route()->getName() == 'view.form.values' ? 'd-block' : '' }}">
                            @foreach ($forms as $form)
                                <li class="dash-item">
                                    <a class="dash-link {{ Request::route()->getName() == 'view.form.values' ? 'show' : '' }}"
                                        href="{{ route('view.form.values', $form->id) }}">{{ $form->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endcan
                @can('manage-chat')
                    @if (setting('pusher_status') == '1')
                        <li class="dash-item dash-hasmenu {{ request()->is('chat*') ? 'active' : '' }}">

                            <a class="dash-link" href="{{ route('chat') }}"><span class="dash-micon">
                                    <i class="ti ti-brand-hipchat"></i></span>
                                <span class="dash-mtext">{{ __('Chat') }}</span>
                            </a>
                        </li>
                    @endif
                @endcan
                @can('manage-language')
                    <li class="dash-item dash-hasmenu {{ request()->is('lang*') ? 'active' : '' }}">
                        <a class="dash-link" href="{{ route('manage.language', [$currantLang]) }}"><span
                                class="dash-micon">
                                <i class="ti ti-world"></i></span>
                            <span class="dash-mtext">{{ __('Manage Language') }}</span>
                        </a>
                    </li>
                @endcan
            </ul>

        </div>
</nav>
