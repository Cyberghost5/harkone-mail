<!-- Update Favicon -->
<div class="modal fade" id="edit_favicon">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><b>Edit Favicon Image</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="settings_favicon_edit" enctype="multipart/form-data">
                <input type="hidden" value="1" name="id">
                <p class="text-danger">Recommend Image Size is 50px * 50px</p>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="favicon" name="favicon" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Logo 1 -->
<div class="modal fade" id="edit_logo1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b>Edit Logo1 Image</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="settings_logo1_edit" enctype="multipart/form-data">
                <input type="hidden" value="1" name="id">
                <p class="text-danger">Recommend Image Size is 250px * 44px</p>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="logo" name="logo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Favicon -->
<div class="modal fade" id="edit_logo2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><b>Edit Logo2 Image</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="settings_logo2_edit" enctype="multipart/form-data">
                <input type="hidden" value="1" name="id">
                <p class="text-danger">Recommend Image Size is 250px * 44px</p>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="logo_light" name="logo_light" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit 3 -->
<div class="modal fade" id="edit3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><b>Edit Social Media</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="about3_edit">
                <input type="hidden" class="userid" value="1" name="id">

                <div class="form-group">
                    <label for="edit_name" class="col-sm-3 control-label">Whatsapp <i class="fab fa-whatsapp"></i> </label>

                      <input type="text" class="form-control" value="<?php echo $about['whatsapp']; ?>" name="whatsapp" required>
                </div>

                <div class="form-group">
                    <label for="edit_name" class="col-sm-3 control-label">Facebook <i class="fab fa-facebook"></i> </label>

                      <input type="text" class="form-control" value="<?php echo $about['facebook']; ?>" name="facebook" required>
                </div>

                <div class="form-group">
                    <label for="edit_name" class="col-sm-3 control-label">Twitter <i class="fab fa-twitter"></i></label>

                      <input type="text" class="form-control" value="<?php echo $about['twitter']; ?>" name="twitter" required>
                </div>

                <div class="form-group">
                    <label for="edit_name" class="col-sm-3 control-label">Instagram <i class="fab fa-instagram"></i></label>

                      <input type="text" class="form-control" value="<?php echo $about['instagram']; ?>" name="instagram" required>
                </div>

                <div class="form-group">
                    <label for="edit_name" class="col-sm-3 control-label">Email <i class="fa fa-envelope"></i></label>

                      <input type="text" class="form-control" value="<?php echo $about['email']; ?>" name="email" required>
                </div>

                <div class="form-group">
                    <label for="edit_name" class="col-sm-3 control-label">Phone <i class="fa fa-phone"></i></label>

                      <input type="text" class="form-control" value="<?php echo $about['tawk_link']; ?>" name="tawk_link" required>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit 3 -->
<div class="modal fade" id="edit4">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><b>Edit General Information</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="about3_edit">
                <input type="hidden" class="userid" value="1" name="id">
                <div class="form-group">
                    <label for="edit_name" class="col-sm-3 control-label">Notification</label>
                    <textarea name="gen_notification" id='tinyMceExample' class="form-control" rows="8" cols="80"><?php echo $settings['gen_notification']; ?></textarea>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit_notification"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>