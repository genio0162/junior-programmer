<div class="row justify-content-center">
<nav class="mt-5 mb-5 site-navigation align-items-center">
    <ul class="site-menu d-xl-block ml-0 pl-0">
      <li><a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a></li>
      <li><a href="/publishers" class="nav-link {{ Request::is('publishers') ? 'active' : '' }}">Publisher</a></li>
      <li><a href="/journals" class="nav-link {{ Request::is('journals') ? 'active' : '' }}">Journal</a></li>
      <li><a href="/subjects" class="nav-link {{ Request::is('subjects') ? 'active' : '' }}">Subject</a></li>
    </ul>
  </nav>
</div>