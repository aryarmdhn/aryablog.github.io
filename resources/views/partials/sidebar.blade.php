<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">AryaBlog</span>
    </a>
    <ul class="side-menu top">
    
   
        <li class="{{ Request::is('/*') ? 'active' : '' }}">

            <a href="/">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Homepage</span>
            </a>
        </li>
        <li class="{{ Request::is('about*') ? 'active' : '' }}">
            <a href="/about">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">About</span>
            </a>
        </li>
        <li class="{{ Request::is('blog*') ? 'active' : '' }}">
            <a href="/blog">
                <i class='bx bxs-doughnut-chart' ></i>
                <span class="text">All Posts</span>
            </a>
        </li>
        <li class="{{ Request::is('categories*') ? 'active' : '' }}">
            <a href="/categories">
                <i class='bx bxs-doughnut-chart' ></i>
                <span class="text">Categories</span>
            </a>
        </li>
        
    </ul>
    <ul class="side-menu">  
            <ul class="navbar-nav ms-auto"> <!-- Menggunakan class "ms-auto" -->
                @auth
                        
                        <li>
                          <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="'bx bxs-log-out-circle'">Log Out</button>
                          </form>
                        </li>
                    
                
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>Login</a>
                </li>
                @endauth
            </ul>
            
        </li>
    </ul>
</section>