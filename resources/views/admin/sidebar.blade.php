<!-- Sidebar -->
<div class="sidebar">
    <a href="{{route('manage.dashboard')}}" class="site-logo">
        <i class="fa fa-bug"></i>
    </a>

    <a href="{{route('manage.dashboard')}}" class="side-item{{(request()->route()->getName() === 'manage.dashboard') ? ' active' : ''}}">
        <i class="fa fa-area-chart"></i>
    </a>

    <div class="dropdown">
        <div class="side-item{{in_array(request()->route()->getName(), ['manage.new-page']) ? ' active' : ''}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-plus"></i>
        </div>
        <div class="dropdown-menu pr-2">
            <a href="#" class="dropdown-item">
                <i class='fa fa-user-o dropped'></i>
                add user
            </a>
            <a href="{{route('manage.new-page')}}" class="dropdown-item{{(request()->route()->getName() === 'manage.new-page')?' active':''}}">
                <i class='fa fa-file-o dropped'></i>
                add page
            </a>
        </div>
    </div>

    <div class="dropdown">
        <div class="side-item{{in_array(request()->route()->getName(), ['manage.users', 'manage.pages', 'manage.edit-page']) ? ' active' : ''}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-pencil"></i>
        </div>
        <div class="dropdown-menu pr-2" aria-labelledby="navbarDropdown">
            <a href="{{route('manage.users')}}" class="dropdown-item{{(request()->route()->getName() === 'manage.users')?' active':''}}">
                <i class='fa fa-users dropped'></i>
                users
            </a>
            <a href="{{route('manage.pages')}}" class="dropdown-item{{(request()->route()->getName() === 'manage.pages')?' active':''}}">
                <i class='fa fa-files-o dropped'></i>
                pages
            </a>
        </div>
    </div>


    <a href="{{route('manage.settings')}}" class="side-item{{(request()->route()->getName() === 'manage.settings') ? ' active' : ''}}">
        <i class="fa fa-cog"></i>
    </a>
    <a href="#" class="side-item hide-sidebar">
        <i class="fa fa-times"></i>
    </a>
</div><!-- Sidebar -->
