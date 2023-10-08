<div class="modal fade" id="viewmessage">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
          <b>Message From <span class="fullname"></span>
          </b>
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <b>Subject:</b>
        <p id="edit_subject"></p>
        <b>Message:</b>
        <p id="edit_message"></p>
        <b>Total Recipient:</b>
        <p id="edit_total_no"></p>
        <b>From name & email:</b>
        <p id="fromname"></p>
      </div>
      <div class="modal-footer">
        <!-- <form class="form-horizontal" method="POST" action="message_read"> -->
          <!-- <input type="hidden" class="userid" name="id"> -->
          <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal">
            <i class="mdi mdi-window-close"></i> Close </button>
        <!-- </form> -->
      </div>
    </div>
  </div>
</div>

<!-- Delete -->
<div class="modal fade" id="resendmsg">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
          <b>Resending...</b>
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="text-center">
              <p>RESEND THIS MESSAGE</p>
              <h2 class="bold subjectfa"></h2>
            </div>
        </div>
        <div class="modal-footer">
        <form class="form-horizontal" method="POST" action="email">
        <input type="hidden" id="send_subject" name="subject">
        <input type="hidden" id="send_receipent" name="receipent">
        <input type="hidden" id="send_message" name="message">
        <input type="hidden" id="send_from_sender" name="from_sender">
        <input type="hidden" id="send_from_email" name="from_email">
        <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal">
          <i class="mdi mdi-window-close"></i> Close 
        </button>
        <button type="submit" class="btn btn-success btn-rounded" name="resend_email">
          <i class="mdi mdi-reload"></i> Resend 
        </button>
        </form>
      </div>
    </div>
  </div>
</div>