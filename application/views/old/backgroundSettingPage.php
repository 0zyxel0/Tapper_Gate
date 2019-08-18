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
            $("#updateLogo").hide();
            $("#uploadLogo").hide();

            if(document.getElementById("logoContainer") !== null)
            {
                $("#updateLogo").show();

            }
            else
            {
                $("#uploadLogo").show();
            }


            $('#file-input').on('change', function(){
                if (window.File && window.FileReader && window.FileList && window.Blob)
                {
                    $('#thumb-output').html('');
                    var data = $(this)[0].files;

                    $.each(data, function(index, file){
                        if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
                            var fRead = new FileReader();
                            fRead.onload = (function(file){
                                return function(e) {
                                    var img = $('<img/>').addClass('thumb').attr('src', e.target.result).css('height',200).css('width',200);
                                    $('#thumb-output').append(img);
                                };
                            })(file);
                            fRead.readAsDataURL(file);
                            fn_updateFileNameBox();
                        }
                    });
                }else{
                    alert("Your browser doesn't support File API!");
                }
            });


            $('#file-input-upload').on('change', function(){
                if (window.File && window.FileReader && window.FileList && window.Blob)
                {
                    $('#thumb-output-upload').html('');
                    var data = $(this)[0].files;

                    $.each(data, function(index, file){
                        if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
                            var fRead = new FileReader();
                            fRead.onload = (function(file){
                                return function(e) {
                                    var img = $('<img/>').addClass('thumb').attr('src', e.target.result).css('height',200).css('width',200);
                                    $('#thumb-output-upload').append(img);
                                };
                            })(file);
                            fRead.readAsDataURL(file);
                            fn_updateFileNameBoxUpload();
                        }
                    });
                }else{
                    alert("Your browser doesn't support File API!");
                }
            });


            $('#file-input-update').on('change', function(){
                if (window.File && window.FileReader && window.FileList && window.Blob)
                {
                    $('#thumb-output-update').html('');
                    var data = $(this)[0].files;

                    $.each(data, function(index, file){
                        if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
                            var fRead = new FileReader();
                            fRead.onload = (function(file){
                                return function(e) {
                                    var img = $('<img/>').addClass('thumb').attr('src', e.target.result).css('height',200).css('width',200);
                                    $('#thumb-output-update').append(img);
                                };
                            })(file);
                            fRead.readAsDataURL(file);
                            fn_updateFileNameBoxUpdate();
                        }
                    });
                }else{
                    alert("Your browser doesn't support File API!");
                }
            });

            function fn_updateFileNameBox()
            {
                var extractedFileName = document.getElementById('file-input');
                var cleanedExtFileName = extractedFileName.value.replace('C:\\fakepath\\', '');
                $('#FilePathName_edit').attr('value',cleanedExtFileName);

            }

            function fn_updateFileNameBoxUpload()
            {
                var extractedFileName = document.getElementById('file-input-upload');
                var cleanedExtFileName = extractedFileName.value.replace('C:\\fakepath\\', '');
                $('#FilePathName_upload').attr('value',cleanedExtFileName);
            }

            function fn_updateFileNameBoxUpdate()
            {
                var extractedFileName = document.getElementById('file-input-update');
                var cleanedExtFileName = extractedFileName.value.replace('C:\\fakepath\\', '');
                $('#FilePathName_update').attr('value',cleanedExtFileName);
            }


        });



    </script>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Manage Gate Background</h1>
                    <!--Upload Modal body-->


                    <div class="panel">
                        <div class="panel-title"><h3>Current Background Image </h3></div>
                        <div class="panel-body">

                            <?php
                            if(isset($background_img)){
                                foreach ($background_img as $obj)
                                {
                                    echo '<img id="logoContainer" src="'; echo base_url(); echo $obj->background_url; echo '" style="width:400px; height:200px;">';
                                }
                            }
                            else{
                                return false;                                       }

                            ?>



                        </div>
                    </div>

                    <div class="panel" id="uploadLogo">
                        <div class="panel-header">
                            <h3 class="panel-info">Upload New Photo</h3>

                        </div>
                        <div class="panel-body">
                            <div id="DataTable_dataPrompt_Fields" style="text-align: center;">


                                <div id="thumb-output-upload"></div>
                                <br/>
                                <?php echo form_open_multipart('DataController/ctl_uploadGateBackground');?>
                                <fieldset>

                                    <div class="form-group">
                                        <input class="form-control" placeholder="Image Filename" name="FilePathName_upload" id="FilePathName_upload" value="" readonly>
                                        <br/>
                                        <input type="file" name="userfile" id="file-input-upload"/>
                                    </div>
                                    <input id ="submit" type="submit" name="submit" value="Save" onclick="" class="btn btn-lg btn-success btn-block"/>
                                    <input type="button" class="remove-prepend btn btn-primary btn-block" value="Close" onclick=""  data-dismiss="modal"/>
                                </fieldset>
                                </form>
                            </div>

                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>




                    <div class="panel" id="updateLogo">
                        <div class="panel-header">
                            <h3 class="panel-info">Update Photo</h3>

                        </div>
                        <div class="panel-body">
                            <div id="DataTable_dataPrompt_Fields" style="text-align: center;">


                                <div id="thumb-output-update"></div>
                                <br/>
                                <?php echo form_open_multipart('DataController/ctl_updateGateBackground');?>
                                <fieldset>

                                    <div class="form-group">
                                        <input class="form-control" placeholder="Image Filename" name="FilePathName_update" id="FilePathName_update" value="" readonly>
                                        <br/>
                                        <input type="file" name="userfile" id="file-input-update"/>
                                    </div>
                                    <input id ="submit" type="submit" name="submit" value="Save" onclick="" class="btn btn-lg btn-success btn-block"/>
                                    <input type="button" class="remove-prepend btn btn-primary btn-block" value="Close" onclick=""  data-dismiss="modal"/>
                                </fieldset>
                                </form>
                            </div>

                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
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
