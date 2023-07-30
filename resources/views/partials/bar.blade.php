<nav>
    <i class='bx bx-menu'></i>
    <form action="/blog">
        @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
        <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <div class="form-input">
            <input type="search" class="form-control search" placeholder="Search.." name="search"
                value="{{ request('search') }}">
            <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
        </div>
    </form>
    <input type="checkbox" id="switch-mode" hidden>
    <label for="switch-mode" class="switch-mode"></label>
    @yield('container2')
</nav>
