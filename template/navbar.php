<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SGTSI Document Management System</a>
            </div>
            <!-- /.navbar-header -->
            <form class="navbar-form navbar-left    " role="search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Search</button>
                      </span>
                    </div>
                    
                  </form>
            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <!-- <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    
                </li> -->
                <!-- /.dropdown -->

                
                 <?php
                    if($_SESSION[WEBAPP]['user']['user_type']==1):
                ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench fa-fw"></i> Admin <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="asset_models.php"><i class="fa  fa-user"></i> Users</a>
                        </li>
                        <li><a href="asset_models.php"><i class="fa  fa-users"></i> User Groups</a>
                        </li>
                        <li><a href="asset_models.php"><i class="fa  fa-info"></i> Labels</a>
                        </li>
                        <li><a href="asset_models.php"><i class="fa  fa-bars"></i> Audit Logs</a>
                        </li>
                        
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <?php

                    endif;
                ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>Welcome, <?php echo $_SESSION[WEBAPP]['user']['first_name']?>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
               
                <!-- /.dropdown -->
            </ul>

            <!-- /.navbar-top-links -->

	<div class="navbar-default sidebar" role="navigation" style=''>
                <div class="sidebar-nav navbar-collapse">

                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search text-center">
                            <div class="btn-group" style="display:inline-block;width:80%">
                              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:100%">
                                <b>NEW</b> <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu">
                                <li style="border-bottom:0px"><a href="#">Folder</a></li>
                                <li role="separator" class="divider"></li>
                                <li style="border-bottom:0px"><a href="#"> File Upload</a></li>
                                <li style="border-bottom:0px"><a href="#"> Folder fa-upload</a></li>
                              </ul>
                            </div>
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-folder"></i> My Drive</a>
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-group"></i> Shared With Me</a>
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-files-o"></i> All Files</a>
                        </li>
                        
                        <li>
                            <a href="index.php"><i class="fa fa-trash"></i> Trash</a>
                        </li>

                        
                </div>
                <!-- /.sidebar-collapse -->
            </div>            
            <!-- /.navbar-static-side -->
</nav>
