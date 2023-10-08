<!-- Home -->
<div class="modal fade" id="visitor">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><b>Total Website Visitors</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="settings_visitors">
                <input type="hidden" value="1" name="id">
                <p>Website visitors count anytime someone visits your website.</p>
                <p class="text-danger">If you want to reset it, input Zero (0) or simply leave blank and save.</p>
                <div class="form-group">
                    <label for="visitors" class="col-sm-3 control-label">Total No.</label>
                    <?php
                    $conn = $pdo->open();

                    $stmt = $conn->prepare("SELECT * FROM about WHERE id = 1");
                		$stmt->execute();
                		$row = $stmt->fetch();

                		$pdo->close();
                     ?>
                      <input type="text" class="form-control" value="<?php echo $row['visitors']; ?>" name="visitors">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="mdi mdi-close"></i> Close</button>
              <button type="reset" class="btn btn-danger btn-rounded"><i class="mdi mdi-recycle"></i> Reset</button>
              <button type="submit" class="btn btn-primary btn-rounded" name="edit"><i class="ti-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Portal -->
<!-- Home -->
<div class="modal fade" id="portal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>School Portal</b></h4>
            </div>
            <div class="modal-body">
              <h1>Coming Soon!!!</h1>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              </form>
            </div>
        </div>
    </div>
</div>
