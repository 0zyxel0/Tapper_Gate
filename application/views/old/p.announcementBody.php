<script src="jquery.js"></script>
<script src="parsley.min.js"></script>
<script>
    $('#form').parsley();
</script>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Announcements For Students</h1>
                    </div>


                    <div class="panel-heading">
                       <form id="form" action="<?= site_url('DataController/makeBulkMessageSms') ?>" method="post" accept-charset="utf-8" autocomplete="off" class="form-signin" role="form" data-parsley-validate="">
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
