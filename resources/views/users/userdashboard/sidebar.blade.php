<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{ url('dashboard/index') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-user fa-fw"></i>My Profile<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('dashboard/flot') }}"><i class="fa fa-user fa-fw"></i>Profile Settings</a>
                    </li>
                    <li>
                        <a href="{{ url('dashboard/morris') }}"><i class="fa fa-tasks fa-fw"></i>Payment Details</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="tables.blade.php"><i class="fa fa-table fa-fw"></i>Recent Bet</a>
            </li>
            <li>
                <a href="forms.blade.php"><i class="fa fa-bar-chart-o fa-fw"></i>My Bet History</a>
            </li>
            <li>
                <a href="typography.blade.php"><i class="fa fa-money fa-fw"></i> Verified earnings<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="panels-wells.blade.php"><i class="fa fa-edit fa-fw"></i>My Payout Requests </a>
                    </li>
                    <li>
                        <a href="buttons.blade.php"><i class="fa fa-bar-chart-o fa-fw"></i>Payment History</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>


        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
