<script>
    $.ajax({
        type: "GET",
        url: "<?php echo site_url('PageController/getHeaderTitle'); ?>",
        success: function (data) {
            var json = JSON.parse(data);
          var getTitle = JSON.stringify(json[0]["header_name"]);
          var cleanTitleString = getTitle.substring(1, getTitle.length-1);
            document.getElementsByClassName("headerDiv")[0].getElementsByTagName('a')[0].innerHTML=cleanTitleString;
        }


        }
    );

</script>






<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="col">
                    <div class="headerDiv">
                        <a class="navbar-brand" href="<?php echo base_url(); ?>"></a>
                    </div>
                </div>

            </div>

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>

                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>  <?= $this->session->userdata('username') ?></a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?= site_url('PageController/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url(); ?>PageController/ActiveUsers"><i class="glyphicon glyphicon-user"></i> Gate Users<span class="fa arrow"></span></a>

                        </li>
                        <li>
                            <a class="accordion-heading" data-toggle="collapse" data-target="#submenu1"><i class="glyphicon glyphicon-volume-up"></i><span class="nav-header-primary"> Announcement<span class="pull-right"><b class="caret"></b></span></span>
                            </a>

                            <ul class="nav nav-list collapse" id="submenu1">
                                <li>
                                    <a class="accordion-heading" data-toggle="collapse" data-target="#submenu2" href="<?php echo base_url(); ?>PageController/msgTemplates">Message Templates</a>
                                </li>
                                    <li><a class="accordion-heading" data-toggle="collapse" data-target="#submenu2" href="<?php echo base_url(); ?>PageController/broadcast">Send To All Students</a></li>
                                    <li><a class="accordion-heading" data-toggle="collapse" data-target="#submenu2" href="<?php echo base_url(); ?>PageController/broadcastTeacher">Send To All Teachers</a></li>
                                    <li><a class="accordion-heading" data-toggle="collapse" data-target="#submenu2" href="<?php echo base_url(); ?>PageController/broadcastAll">Send To All</a></li>
                                    <li><a class="accordion-heading" data-toggle="collapse" data-target="#submenu2" href="<?php echo base_url(); ?>PageController/broadcastGuardian">Send To All Guardians</a></li>
                                    <li><a class="accordion-heading" data-toggle="collapse" data-target="#submenu2" href="<?php echo base_url(); ?>PageController/broadcastToList">Send To Contact List</a></li>
                                    <li><a class="accordion-heading" data-toggle="collapse" data-target="#submenu2" href="<?php echo base_url(); ?>PageController/manageUserContactList">Manage Contact List</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>PageController/reporting"><i class="fa fa-table fa-fw"></i>Reports<span class="fa arrow"></span></a>

                        </li>
                         <li>
                            <a href="<?php echo base_url(); ?>PageController/gate"><i class="glyphicon glyphicon-oil"></i> Gate<span class="fa arrow"></span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>PageController/cardList"><i class="glyphicon glyphicon-erase"></i> Card User List<span class="fa arrow"></span></a>
                        </li>


                        <li>
                            <a href="<?php echo base_url(); ?>PageController/guardianList"><i class="fa fa-users fa-fw"></i>Guardian List<span class="fa arrow"></span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>PageController/UserCategoryList"><i class="fa fa-user-times fa-fw"></i>Category List<span class="fa arrow"></span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>PageController/sysSettings"><i class="fa fa-cogs fa-fw"></i>System Setup<span class="fa arrow"></span></a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
