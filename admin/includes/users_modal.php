<!-- Add -->
<div class="modal fade" id="addnew1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>Add New User</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="POST" action="user_add" enctype="multipart/form-data">
            <div class="form-group">
              <label for="username" class="col-sm-3 control-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-3 control-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="password" class="col-sm-3 control-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
              <label for="firstname" class="col-sm-3 control-label">Firstname</label>
              <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>
            <div class="form-group">
              <label for="lastname" class="col-sm-3 control-label">Lastname</label>
              <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>
            <div class="form-group">
              <label for="contact" class="col-sm-3 control-label">Contact Info</label>
              <input type="text" class="form-control" id="contact" name="contact">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="mdi mdi-close"></i> Close</button>
            <button type="submit" class="btn btn-primary btn-rounded" name="add"><i class="ti-save"></i> Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit -->
  <div class="modal fade" id="edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"><b>Edit Wallet Balance</b></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="POST" action="user_edit">
              <input type="hidden" class="userid" name="id">
              <div class="form-group">
                <label for="edit_balance" class="col-sm-3 control-label">Balance</label>
                <input type="number" step="any" class="form-control" id="edit_balance" readonly>
              </div>
              <div class="form-group row">
                  <label class="col-sm-6 col-form-label">Fund Type</label>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="fund_type" value="credit" id="fund_type" required>
                        Credit
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="fund_type" value="debit" id="fund_type" required>
                        Debit
                     </label>
                   </div>
                 </div>
               </div>
              <div class="form-group">
                <label for="amount" class="col-sm-3 control-label">Amount</label>
                <input type="number" step="any" class="form-control" id="amount" name="amount">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="mdi mdi-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-rounded" name="edit"><i class="ti-upload"></i> Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Export -->
    <div class="modal fade" id="export">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title"><b>Export</b></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="user_export">
                <div class="text-center">
                  <p>Export Users Details</p>
                  <h2 class="bold fullname">Export all users data as CSV file?</h2>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="mdi mdi-close"></i> Close</button>
                <button type="submit" class="btn btn-info btn-rounded" name="export"><i class="mdi mdi-check"></i>  Yes</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    <!-- Delete -->
    <div class="modal fade" id="delete1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title"><b>Deleting...</b></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="user_delete">
                <input type="hidden" class="userid" name="id">
                <div class="text-center">
                  <p>DELETE USER</p>
                  <h2 class="bold fullname"></h2>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="mdi mdi-close"></i> Close</button>
                <button type="submit" class="btn btn-danger btn-rounded" name="delete"><i class="mdi mdi-delete"></i> Delete</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Update Photo -->
      <div class="modal fade" id="edit_photo1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="POST" action="user_photo" enctype="multipart/form-data">
                  <input type="hidden" class="userid" name="id">
                  <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <input type="file" id="photo" name="photo" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="mdi mdi-close"></i> Close</button>
                  <button type="submit" class="btn btn-success btn-rounded" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
                </form>
              </div>
            </div>
          </div>
        </div>


        <!-- Activate -->
        <div class="modal fade" id="activate1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title"><b>Verifing...</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal" method="POST" action="user_activate">
                    <input type="hidden" class="userid" name="id">
                    <div class="text-center">
                      <p>VERIFY USER</p>
                      <h2 class="bold fullname"></h2>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="mdi mdi-close"></i> Close</button>
                    <button type="submit" class="btn btn-success btn-rounded" name="activate"><i class="mdi mdi-check"></i> Activate</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Unblock -->
          <div class="modal fade" id="unblock">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title"><b>Unblocking...</b></h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="user_unblock">
                      <input type="hidden" class="userid" name="id">
                      <div class="text-center">
                        <p>UNBLOCK USER</p>
                        <h2 class="bold fullname"></h2>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="mdi mdi-close"></i> Close</button>
                      <button type="submit" class="btn btn-warning btn-rounded" name="unblock"><i class="mdi mdi-check"></i> Unblock</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <!-- Block -->
            <div class="modal fade" id="block">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                  <h4 class="modal-title"><b>Blocking...</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <form class="form-horizontal" method="POST" action="user_block">
                        <input type="hidden" class="userid" name="id">
                        <div class="text-center">
                          <p>BLOCK USER</p>
                          <h2 class="bold fullname"></h2>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="mdi mdi-close"></i> Close</button>
                        <button type="submit" class="btn btn-warning btn-rounded" name="block"><i class="mdi mdi-check"></i> Block</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
<!-- Export -->
<div class="modal fade" id="verifyall">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title"><b>Verify</b></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="user_verifyall">
                <div class="text-center">
                  <p>Verify all users emails</p>
                  <h2 class="bold fullname">Verify all users info?</h2>
                  <small>Note: This action is not reversable!</small>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="mdi mdi-close"></i> Close</button>
                <button type="submit" class="btn btn-info btn-rounded" name="verify"><i class="mdi mdi-check"></i>  Verify all</button>
              </form>
            </div>
          </div>
        </div>
      </div>