<aside class="border p-3 w-40">
    <h1 class=""></h1>

    <ul class="">
        <li class="py-1">
            <a href="{{ route('epic.index', ['id' => $projectId]) }}" class="{{ $active == 'epics' ? 'px-3 border-s-4 border-indigo-500' : 'px-4'}}">
                <i class=""></i>
                Epics
            </a>
        </li>

        <li class="py-1">
            <a href="{{ route('project.show', $projectId) }}" class="{{ $active == 'backlog' ? 'px-3 border-s-4 border-indigo-500' : 'px-4 '}}">
                <i class=""></i>
                backlog
            </a>
        </li>

        <li class="py-1">
            <a href="" class="{{ $active == 'kambam' ? 'px-3 border-s-4 border-indigo-500' : 'px-4 '}}">
                <i class=""></i>
                Kambam
            </a>
        </li>

        <li class="py-1">
            <a href="{{ route('setting.index', ['id' => $projectId]) }}" class="{{ $active == 'settings' ? 'px-3 border-s-4 border-indigo-500' : 'px-4 '}}">
                <i class=""></i>
                Settings
            </a>
        </li>
    </ul>
</aside>

