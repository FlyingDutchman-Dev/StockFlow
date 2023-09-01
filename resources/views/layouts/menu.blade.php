<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('config') }}" class="nav-link {{ Request::is('config') ? 'active' : '' }}">
        <i class="nav-icon fas fa-cog"></i>
        <p>Configurações</p>
    </a>
</li>
