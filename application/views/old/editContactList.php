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
            $(document).ready(function() {


              var url_str = window.location.href;
              var arr=url_str.split('/');
              var parameter=arr[arr.length-1].split('/');
              var list_segment = parameter[0];

                var urlListRequest= "<?php echo site_url("DataController/ctl_getAllContactsInList/") ?>"+list_segment+"";



                var table_ToContacts =  $('#dataTables_ContactList').DataTable({
                  "ajax": {
                            url : urlListRequest,
                            type : 'GET'
                          },
                  "deferLoading": 57,
                  "columnDefs": [
                          {
                          "targets": 5,
                          "data": null,
                          "defaultContent": "<button id='btn_RemoveContact'>Delete</button>"
                      },{
                          "targets": 0,
                           "visible": false,
                      },{
                          "targets": 1,
                           "visible": false,
                      } ]
                  });


                  var table_ToList =  $('#dataTables_AvailableContacts').DataTable({
                    "ajax": {
                              url : "<?php echo site_url("DataController/ctl_getAllContactAvailable/") ?>"+list_segment+"",
                              type : 'GET'
                            },
                    "deferLoading": 57,
                    "columnDefs": [
                      {
                              "targets": 5,
                              "data": null,
                              "defaultContent": "<button id='btn_AddContact'>Add To List</button>"
                          },
                          {
                              "targets": 0,
                               "visible": false,
                          }
                        ]
                    });

                    $('#dataTables_ContactList tbody').on( 'click', '#btn_RemoveContact', function () {
                          $('#removeContactModal').modal("show");
                        var data = table_ToContacts.row( $(this).parents('tr') ).data();
                        $('#dlt_removeListId').attr('value', list_segment);
                        $('#dlt_removecontactId').attr('value', data[1]);
                        $('#dlt_removecontactName').attr('value', data[2]+' ' + data[3]);

                    } );

                    $('#dataTables_AvailableContacts tbody').on( 'click', '#btn_AddContact', function () {
                          $('#addContactModal').modal("show");
                        var data = table_ToList.row( $(this).parents('tr') ).data();
                        $('#dlt_ListId').attr('value', list_segment);
                        $('#dlt_contactId').attr('value', data[0]);
                        $('#dlt_contactName').attr('value', data[2]+' ' + data[3]);
                        $('#dlt_contactNumber').attr('value', data[4]);
                    } );


            });
        </script>

        <div id="page-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">Users in List</h1>
                            </div>

                        <div class="row">



                                              <div class="col-l-2">
                                <!-- Nav tabs -->
                                <div class="card">

                                            <div class="panel-body">

                                              <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables_ContactList" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>

                                                    <th>userid</th>
                                                    <th>Given Name</th>
                                                    <th>Family Name</th>
                                                    <th>Mobile Number</th>
                                                      <th>Option</th>
                                                </tr>
                                                </thead>
                                              </table>
                                              <hr/>
                                              <h4>Users To Add</h4>
                                              <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables_AvailableContacts" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                                  <thead>
                                                  <tr>
                                                      <th>Id</th>
                                                      <th>CardId</th>
                                                      <th>Given Name</th>
                                                      <th>Family Name</th>
                                                      <th>Mobile Number</th>
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


                        <div class="modal fade" id="addContactModal" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">Add Contact To List</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= site_url('DataController/ctl_insertContactToList') ?>" id="msgForm" method="post">
                                            <fieldset>
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Contact List Id" id="dlt_ListId" name="dlt_ListId"   autocomplete="false" type="hidden"><br/>
                                                    <input class="form-control" placeholder="Contact Id" id="dlt_contactId" name="dlt_contactId"  autocomplete="false" type="hidden"><br/>
                                                    <input class="form-control" placeholder="Contact Name" id="dlt_contactName" name="dlt_contactName"   autocomplete="false" readonly><br/>
                                                    <input class="form-control" placeholder="Contact Name" id="dlt_contactNumber" name="dlt_contactNumber"   autocomplete="false" readonly><br/>
                                                </div>
                                                <input id="submit" type="submit" name="padd" value="Save" onclick="" class="btn btn-lg btn-danger btn-block"/>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>


                                                <div class="modal fade" id="removeContactModal" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h3 class="modal-title">Remove From List</h3>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?= site_url('DataController/ctl_deleteContactinList') ?>" id="msgForm" method="post">
                                                                    <fieldset>
                                                                        <div class="form-group">
                                                                            <input class="form-control" placeholder="Contact List Id" id="dlt_removeListId" name="dlt_removeListId"   autocomplete="false" type="hidden"><br/>
                                                                            <input class="form-control" placeholder="Contact Id" id="dlt_removecontactId" name="dlt_removecontactId"  autocomplete="false" type="hidden"><br/>
                                                                            <input class="form-control" placeholder="Contact Name" id="dlt_removecontactName" name="dlt_removecontactName"   autocomplete="false" readonly><br/>
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





        </div>
    </div>

</body>

</html>
