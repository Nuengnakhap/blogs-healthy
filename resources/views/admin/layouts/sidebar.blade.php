<div class="collapse col-4 col-sm-4 col-md-2 col-lg-2 display-table-cell valign-top d-md-block" id="side-menu">
  <h1 class="d-none d-lg-block">Navigation</h1>
  <ul class="list-group nav flex-column flex-nowrap sticky-top">
    <li class="link @yield('home')">
      <a href="{{route('home.index')}}">
        <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="link @yield('article')">
      <a href="#collapse-post" data-toggle="collapse" aria-controls="collapse-post">
        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
        <span>Articles</span>
      </a>
      <ul class="collapse collapseable" id="collapse-post">
        <li><a href="{{route('new-article.create')}}">Create New</a></li>
        <li><a href="{{route('articles.index')}}">View Article</a></li>
      </ul>
    </li>

    <li class="link @yield('comments')">
      <a href="#collapse-comments" data-toggle="collapse" aria-controls="collapse-comments">
        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
        <span>Comments</span>
      </a>
      <ul class="collapse collapseable" id="collapse-comments">
        <li>
          <a href="{{route('admin-approved')}}">Approved
            <span class="badge badge-success float-right">10</span>
          </a>
        </li>
        <li>
          <a href="{{route('admin-unapproved')}}">Unapproved
            <span class="badge badge-warning float-right">10</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item link @yield('commenters')">
      <a href="{{route('users.index')}}">
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
        <span>Users</span>
      </a>
    </li>

    <li class="link @yield('tags')">
      <a href="{{route('tags.index')}}">
        <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
        <span>Tags</span>
      </a>
    </li>

    <li class="link settings-btn @yield('settings')">
      <a href="{{route('admin-settings')}}">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        <span>Settings</span>
      </a>
    </li>
  </ul>
</div>