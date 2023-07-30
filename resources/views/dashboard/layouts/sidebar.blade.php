
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AryaBlog</span>
		</a>
		<ul class="side-menu top">
			<li class="{{ Request::is('dashboard') ? 'active' : '' }}">
				<a href="/dashboard">
					<i class='bx bxs-group' ></i>
					<span class="text">Profile</span>
				</a>
			</li>

			<li class="{{ Request::is('dashboard/blog*') ? 'active' : '' }}">
				<a href="/dashboard/blog">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">My Posts</span>
				</a>
			</li>
		
		
		</ul>


		<ul class="side-menu">
			
					@can('admin')
					<ul>
						<li class="{{ Request::is('dashboard/categories*') ? 'active' : '' }}">
							<a href="/dashboard/categories">
								<i class='bx bxs-cog' ></i>
								<span class="text">Posts Category</span>
							</a>
						</li>
					</ul>
			@endcan
			
			<li>
				<form action="/logout" method="POST">
					@csrf
					<button type="submit">
						<i class='bx bxs-log-out-circle'></i>
						Log Out
					</button>
				</form>
			</li>
		</ul>
	</section>
    
    