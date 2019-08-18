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

                <?php
                if(isset($logo)){
                    foreach ($logo as $obj)
                    {
                        echo '<div style="margin-left:150px; width: 120px; height:150px;position:absolute;"><img id="logoContainer" src="'; echo base_url(); echo $obj->image_url; echo '" style="width:120px; height:150px;"></div>';
                    }
                }
                else{
                    echo '<div style="background-color: #00CC00; margin-left:150px; width: 120px; height:150px;position:absolute;"></div>';                                      }

                ?>
            </div>
            <!-- /.navbar-top-links -->
        </nav>