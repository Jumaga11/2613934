@auth
    <nav class="nav">
        <figure class="avatar">
            <img class="mask" src= "{{ asset('images') . '/' . Auth::user()->photo }}" alt="Photo">
            <img class="border" src= "{{ asset('images/border-menu.png') }}" alt="border">
        </figure>
        <h3>{{ Auth::user()->fullname }}</h3>
        <h4>{{ Auth::user()->role }}</h4>
        <menu>
            <a href="{{ url('myProfile') }}">
                <img src="images/ico-profile.svg" alt=""> Profile
            </a>
            <a href="{{ url('dashboard') }}">
                <img src="images/ico-dashboard.svg" alt=""> Dashboard
            </a>
            <a href="javascript:;" onclick="logout.submit();">
                <img src=" {{ asset('../images/ico-logout.svg') }}" alt=""> LogOut
            </a>
            <form action=" {{ route('logout') }}" id="logout" method="POST">@csrf</form>
        </menu>
    </nav>
@endauth

@guest
    <nav class="nav">
        <!--<img src="../images/tittle-menu.svg" alt="Menu" class="tittle-menu">-->
        <menu>
            <a href="{{ url('register') }}">
                <img src="../images/ico-register.png" alt=""> Register
            </a>
            <a href="{{ url('login') }}">
                <img src="../images/ico-login.png" alt=""> Login
            </a>
            <a href="{{ url('catalogue') }}">
                <img src="../images/ico-catalogue.svg" alt=""> Catalogue
            </a>
        </menu>
    </nav>
@endguest
