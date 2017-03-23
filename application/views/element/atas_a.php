 <div class="body-content" style="min-height: 1000px;">
 <!-- header section start-->
            <div class="header-section">



                <!--toggle button start-->
                <a class="toggle-btn"><i class="fa fa-outdent"></i></a>
                <!--toggle button end-->

                <!--right notification start-->
                <div class="right-notification">
                    <ul class="notification-menu">
                        <li>
                             <a href="<?php echo base_url();?>"  target="_blank" class="btn-warning btn-xs" style="color:#fff">View Web</a>
                        </li>
                        <li>
                            <form class="search-content" action="index.html" method="post">
                                <input type="text" class="form-control" name="keyword" placeholder="Search...">
                            </form>
                        </li>
                         <li>
                            <a href="javascript:;" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <img src="img/avatar-mini.jpg" alt=""><?php echo $this->session->userdata('USERNAME') ;?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu purple pull-right">
                                <li><a href="javascript:;">  Profile</a></li>
                              
                                <li><a href="<?php echo site_url('login/logout')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                    
                       

                    </ul>
                </div>
                <!--right notification end-->
              

            </div>
            <!-- header section end-->