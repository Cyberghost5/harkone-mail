<div class="modal fade" id="details">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><b>API Response From <span class="fullname"></span></b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <b>Full Type:</b> <p id="name"></p>
                <b>User:</b> <p id="userid"></p> <span><a id="link" target="_blank" class="btn btn-success btn-sm btn-rounded pull-left"><i class="mdi mdi-eye"></i></a></span><br>
                <b>Message:</b> <pre><p id="desc"></p></pre>
            </div>
            <div class="modal-footer">
              <form class="form-horizontal" method="POST" action="api_response_read">
                <input type="hidden" class="userid" name="id">
                <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="mdi mdi-window-close"></i> Close</button>
                <!--<button type="submit" class="btn btn-success btn-rounded" name="read"><i class="mdi mdi-check"></i> Mark as read</button>-->
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
              <form class="form-horizontal" method="POST" action="api_response_delete">
                <input type="hidden" class="userid" name="id">
                <div class="text-center">
                  <p>DELETE API RESPONSE FOR</p>
                  <h2 class="bold fullname"></h2>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="mdi mdi-window-close"></i> Close</button>
                <button type="submit" class="btn btn-danger btn-rounded" name="delete"><i class="mdi mdi-delete"></i> Delete</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="deleteall">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b>Deleting...</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="POST" action="api_response_delete_all">
                  <div class="text-center">
                    <p>DELETE ALL API RESPONSE</p>
                    <h2 class="bold">Are you sure you want to delete all API Resonse?</h2>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="mdi mdi-window-close"></i> Close</button>
                  <button type="submit" class="btn btn-danger btn-rounded" name="delete"><i class="mdi mdi-delete"></i> Delete</button>
                </form>
              </div>
            </div>
          </div>
        </div>
