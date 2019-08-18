<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tapper</title>
    <?php require('StyleBundle.php') ?>
    <?php require('ScriptBundle.php') ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <?php require('navBar.php') ?>

        <!-- Page Content -->
        <script type= 'text/javascript'>
            $(document).ready(function() {
               /* $('#dataTables').DataTable({
                    "ajax": {
                        url : "<!--?php echo site_url("PageController/ReportDataTable") ?-->",
                        type : 'GET'
                    }
                });*/

               var table =  $('#dataTables').DataTable({
                 "ajax": {
                 url : "<?php echo site_url("PageController/ctl_generateContactList") ?>",
                 type : 'GET'
                 },"columnDefs": [
                       {
                           "targets": 0,
                           "visible": false,
                           "searchable": false
                       },

                     {
                         "targets": 5,
                         "data": null,
                         "defaultContent": "<button id='btn_ManageList'>Manage</button> | <button id='btn_DeleteMessage'>Delete</button>"
                     } ]
                 });

                $('#dataTables tbody').on( 'click', '#btn_ManageList', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    window.location.href='<?php echo site_url("PageController/editUserContactList/")?>'+data[0];


                } );

                $('#dataTables tbody').on( 'click', '#btn_DeleteMessage', function () {
                    $('#deleteContactListModal').modal("show");
                    var data = table.row( $(this).parents('tr') ).data();
                    $('#dlt_ListId').attr('value', data[0]);
                    $('#dlt_ListName').attr('value', data[1]);
                    } );



                $('#btn_AddModal').on( 'click', function () {

                    $('#addContactList').modal("show")

                });

            });
        </script>

        <div id="page-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">Manage Contact Lists</h1>
                            </div>
                            <div class="row">
                            <button type="button" id="btn_AddModal" class="btn btn-primary btn-lg" style="float:right;">Create Contact List</button>
                            </div>
                        <div class="row">



                                              <div class="col-l-2">
                                <!-- Nav tabs -->
                                <div class="card">

                                            <div class="panel-body">

                                                <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Contact List Name</th>
                                                        <th>Number of Members</th>
                                                        <th>Updated On</th>
                                                        <th>Updated By</th>
                                                      <th>Option</th>


                                                    </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



            <div class="modal fade" id="deleteContactListModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Message Details</h3>

                        </div>




                        <div class="modal-body">
                            <form action="<?= site_url('DataController/ctl_deleteContactList') ?>" id="msgForm" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Contact List Id" id="dlt_ListId" name="dlt_ListId"  value="" autocomplete="false" type="hidden"><br/>
<label> List Name </label>
                                        <input class="form-control" placeholder="Contact List Name" id="dlt_ListName" name="dlt_ListName"  value="" autocomplete="false" readonly><br/>
                                    </div>
                                    <input id="submit" type="submit" name="padd" value="Delete" onclick="" class="btn btn-lg btn-danger btn-block"/>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>



            <div class="modal fade" id="addContactList" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Create Contact List</h3>

                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('DataController/ctl_createContactList') ?>" id="msgForm2" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Contact List Name" id="contactListName" name="contactListName" autocomplete="false" autofocus><br/>
                                    </div>
                                    <input id="submit" type="submit" name="padd" value="Save" onclick="" class="btn btn-lg btn-success btn-block"/>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>







        </div>



        <!-- /.container-fluid -->
    </div>
            <!-- /#page-wrapper -->


        <!-- /#wrapper -->


</body>

</html>
