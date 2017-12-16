
<ul class="nav navbar-nav">
    <li class="dropdown user user-menu">
        <a class="dropdown-toggle no-border" data-toggle="dropdown">
            <img id="Pikk" src="{{asset('img/alunos/').'/'.Auth::user()->foto}}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{Auth::user()->username}}</span>
        </a>

        <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
                <img src="{{asset('img/alunos/').'/'.Auth::user()->foto}}" class="img-circle" alt="">
                <p style="color: #3c3f41">
                    {{Auth::user()->username}}
                    <small></small>
                </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                <div class="pull-left">
                    <a href="#" class="btn btn-default">Profile</a>
                </div>
                <div class="pull-right">
                    <a class="btn btn-default" data-toggle="modal" href="#myModalLogOut">Sair</a>
                </div>
            </li>
        </ul>
    </li>
</ul>
