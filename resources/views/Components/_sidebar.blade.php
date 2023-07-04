<style>
    .sidebar {
        width: 300px;
        height: 300px;
    }
</style>

<aside class="sidebar border shadow-sm me-3 p-3">
    <h1 class="text-center pb-2 h5">Todo Flash</h1>

    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="#" class="nav-link {{ $active == 'task' ? 'active' : 'link-dark'}}">Task</a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link {{ $active == 'category' ? 'active' : 'link-dark'}}">Category</a>
        </li>
    </ul>
</aside>
