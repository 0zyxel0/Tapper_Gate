<script src="jquery.js"></script>
<script src="parsley.min.js"></script>
<script>
    $('#form').parsley();
</script>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Announcement to List</h1>
                    </div>


                    <div class="panel-heading">
                       <form id="form" action="<?= site_url('DataController/makeBulkMessageSmsToList') ?>" method="post" accept-charset="utf-8" autocomplete="off" class="form-signin" role="form" data-parsley-validate="">
  <label>Contact List</label>
                         <select class="form-control" name="contactListId" id="contactListId" required="">
                             <option value="" selected disabled>-------</option>
                             <?php

                             foreach($lists as $row)
                             {
                                 echo '<option value="'.$row->contactlistid.'">'.$row->contactlist_name.'</option>';
                             }
                             ?>
                         </select>
<br/>
                            <label>Message</label>
                            <br/>
                            <textarea name="message" id="message" class="form-control" rows="5" required=""></textarea>
                            <br/>
                            <br/>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Send</button>
                        </form>
                    </div>
                    <!-- /.panel-heading -->



                    <!-- /.col-lg-12 -->
                </div>
            </div>

                    <!-- /.row -->
                </div>
