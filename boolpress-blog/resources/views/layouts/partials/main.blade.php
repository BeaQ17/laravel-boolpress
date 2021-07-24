
    <aside>
        <ul class="nav flex-column">
            <li class="nav-item nav-pills">
                <a class="nav-link {{Route::currentRouteName() === 'admin.dashboard' ? 'active' : ''}}" aria-current="page" href="{{route('admin.dashboard')}}">Dashboard</a>
            </li>
            <li class="nav-item nav-pills">
                <a class="nav-link {{Route::currentRouteName() === 'admin.articles.index' ? 'active' : ''}}" href="{{ route('admin.articles.index')}}">Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contacts</a>
            </li>
        </ul>
    </aside>