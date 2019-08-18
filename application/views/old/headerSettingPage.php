<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tapper</title>
    <?php require('StyleBundle.php')?>
    <?php require('ScriptBundle.php')?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <?php require('navBar.php')?>

        <!-- Page Content -->
        <script type= 'text/javascript'>
            $(document).ready(function() {});



        </script>

        <div id="page-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="page-header">Manage System Header</h3>
                            </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-body">


                                    <?php
                                    if(isset($title)){
                                        foreach ($title as $obj)
                                        {
                                           echo '<span style="font-size: 20px">Current System Header : '; echo $obj->header_name;
                                            echo '</span>';

                                        }
                                    }
                                    else{
                                        return "";
                                    }

                                    ?>



                                </div>
                                <div class="panel-footer">
                                <h3>Update Header</h3>
                                    <hr>
                                <form method="post" action="<?= site_url('DataController/ctl_editSystemHeader') ?>">
                                <input class="form-control" placeholder="Input New Header Title" name="p_header" id="p_header" value="" autocomplete="false">
                                    <br>

                                    <input class="btn btn-primary" type="submit" value="Save">

                                </form>
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>
                </div>
        </div>



        <!-- /.container-fluid -->
    </div>
            <!-- /#page-wrapper -->


        <!-- /#wrapper -->


</body>

</html>
