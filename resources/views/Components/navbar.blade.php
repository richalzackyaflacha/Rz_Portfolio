{{-- Navbar Component --}}
<nav class="navbar navbar-expand-sm navbar-dark fixed-top" id="navbar">
    <div class="container-fluid">
        {{-- Logo --}}
        <div class="my-logo">
            <a href=""><img src="{{ asset('img/icon/logo.png') }}" alt="RZ Logo"></a>
        </div>

        {{-- Menu Navbar --}}
        <div class="menu-nav-top">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#project">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skill">Skill</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>

        {{-- Button Dark Mode --}}
        <div class="dark-mode">
            <div id="toggle">
                <i class="indicator">
                    <i class="fa-solid fa-moon icon-d" onclick="setDarkMode(true)"></i>
                    <i class="fa-solid fa-sun icon-l"onclick="setDarkMode(false)"></i>
                </i>
            </div>
        </div>
    </div>
</nav>