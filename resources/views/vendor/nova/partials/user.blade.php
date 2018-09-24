<dropdown-trigger class="h-9 flex items-center" slot-scope="{toggle}" :handle-click="toggle">
    <img src="https://secure.gravatar.com/avatar/{{ md5(auth()->user()->email) }}?size=512" class="rounded-full w-8 h-8 mr-3"/>

    <span class="text-90">
        {{ auth()->user()->name }}
    </span>
</dropdown-trigger>

<dropdown-menu slot="menu" width="200" direction="rtl">
    <ul class="list-reset">
        <li>
<<<<<<< HEAD
            <a href="{{ Laravel\Nova\Nova::path() }}/logout" class="block no-underline text-90 hover:bg-30 p-3">
=======
            <a href="{{ route('nova.logout') }}" class="block no-underline text-90 hover:bg-30 p-3">
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb
                {{ __('Logout') }}
            </a>
        </li>
    </ul>
</dropdown-menu>
