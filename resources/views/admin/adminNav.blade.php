<?php
use App\Inscricao;
    $numPrIns = Inscricao::query()->where('estado','=','pre-inscrito')->count();
?>
<ul class="nav navbar-nav">
    <li style="border: none" class="dropdown notifications-menu">
        <a href="#" style="border: none" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning">{{$numPrIns}}</span>
        </a>
        <ul class="dropdown-menu">
            <li class="header"></li>
            <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-warning text-yellow">{{$numPrIns}} Pre-Inscrições</i>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <!-- Tasks: style can be found in dropdown.less -->
    <!-- User Account: style can be found in dropdown.less -->
    <li class="dropdown user user-menu">
        <a class="dropdown-toggle no-border" data-toggle="dropdown">
            <img src="{{asset('img/aluno.png')}}" class="user-image" alt="User Image">
            <span class="hidden-xs">Nome</span>
        </a>
        <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
                <img src="{{asset('img/logo1.jpg')}}" class="img-circle" alt="">
                <p style="color: #3c3f41">
                    So Nos
                    <small></small>
                </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                    <a class="btn btn-default btn-flat" data-toggle="modal" href="#myModalLogOut">Sair</a>
                </div>
            </li>
        </ul>
    </li>
    <!-- Control Sidebar Toggle Button -->
    <li>
        <a style="border: none" href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
    </li>
</ul>
