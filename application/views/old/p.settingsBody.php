<script type= 'text/javascript'>
    $(document).ready(function() {


        $("div.AddCoursebox").hide();





        $("#AddCoursetab").click(function() {
            if($('div.AddCoursebox').is(":visible")===true)
            {
                $('div.AddCoursebox').hide();
            }else
            {  $('div.AddCoursebox').show();}


        });



    });
</script>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">System Settings</h1>
            </div>
        </div>
        <div class="row">


            <div class="col-l-2">
                <!-- Nav tabs -->
                <div class="card">

                    <div class="panel-body">



                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading cb" id="">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-image fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">+</div>
                                            <div>Change Logo</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url(); ?>PageController/getLogoSettings">
                                    <div class="panel-footer">
                                        <span class="pull-left">Change Logo</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading cb" id="">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-header fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">+</div>
                                            <div>Change Header</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url(); ?>PageController/getHeaderSettings">
                                    <div class="panel-footer">
                                        <span class="pull-left">Change Header</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading cb" id="">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-file-picture-o fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">+</div>
                                            <div>Change Gate Background Image</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url(); ?>PageController/getBackgroundSettings">
                                    <div class="panel-footer">
                                        <span class="pull-left">Change Background Image</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>






                </div>
            </div>


        </div>
    </div>

    <!-- /.row -->
</div>