
        <!-- /navbar -->
       
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    
                                    <a  class="btn-box big span4"><i class=" icon-random"></i><b><?php foreach ($service_counter as  $value4) {
                                if($value4->cnt1 == 0) {
                                    echo "0"; } else {
                                     echo $value4->cnt1;           
                                    }
                             
                             }?></b>
                                        <p class="text-muted">
                                            Services</p>
                                    </a><a  class="btn-box big span4"><i class="icon-user"></i><b><?php foreach ($join_counter as  $value5) {
                                if($value5->cnt2 == 0) {
                                    echo "0"; } else {
                                     echo $value5->cnt2;           
                                    }
                             
                             }?></b>
                                        <p class="text-muted">
                                            Join Users</p>
                                    </a><a  class="btn-box big span4"><i class="icon-bell"></i><b><?php foreach ($inquiry_counter as  $value6) {
                                if($value6->cnt3 == 0) {
                                    echo "0"; } else {
                                     echo $value6->cnt3;           
                                    }
                             
                             }?></b>
                                        <p class="text-muted">
                                            Inquiry</p>
                                    </a>
                                </div>
                               
                            </div>
                            <!--/#btn-controls-->
                           
                            <!--/.module-->
                          
                           
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
       
