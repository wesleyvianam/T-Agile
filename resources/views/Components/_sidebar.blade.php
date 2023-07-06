<style>
    .sidebar {
        width: 250px;
        height: 250px;
    }
</style>

<aside class="sidebar border shadow-sm me-3 p-3">
    <h1 class="text-center pb-2 h5 text-danger">Todo Flash</h1>

    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('project.index') }}" class="nav-link {{ $active == 'project' ? 'active' : 'link-dark'}}">
                <i class="bi bi-list-task pe-3"></i>
                Projects
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('setting.index') }}" class="nav-link {{ $active == 'settings' ? 'active' : 'link-dark'}}">
                <i class="bi bi-gear pe-3"></i>
                Settings
            </a>
        </li>
    </ul>
</aside>
