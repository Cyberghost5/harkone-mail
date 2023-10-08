<!-- plugins:js -->
<script src="<?php echo $settings['site_url']; ?>vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
  <!-- plugin js for this page -->
  <script src="<?php echo $settings['site_url']; ?>vendors/tinymce/tinymce.min.js"></script>
  <script src="<?php echo $settings['site_url']; ?>vendors/quill/quill.min.js"></script>
  <script src="<?php echo $settings['site_url']; ?>vendors/simplemde/simplemde.min.js"></script>
  <!-- End plugin js for this page -->
<!-- Plugin js for this page -->
<script src="<?php echo $settings['site_url']; ?>vendors/chart.js/Chart.min.js"></script>
<script src="<?php echo $settings['site_url']; ?>vendors/datatables.net/jquery.dataTables.js"></script>
<script src="<?php echo $settings['site_url']; ?>vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="<?php echo $settings['site_url']; ?>js/dataTables.select.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?php echo $settings['site_url']; ?>js/off-canvas.js"></script>
<script src="<?php echo $settings['site_url']; ?>js/hoverable-collapse.js"></script>
<script src="<?php echo $settings['site_url']; ?>js/template.js"></script>
<script src="<?php echo $settings['site_url']; ?>js/settings.js"></script>
<script src="<?php echo $settings['site_url']; ?>js/todolist.js"></script>
<script src="<?php echo $settings['site_url']; ?>js/tooltips.js"></script>
<script src="<?php echo $settings['site_url']; ?>js/codeEditor.js"></script>
<script src="<?php echo $settings['site_url']; ?>js/tabs.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?php echo $settings['site_url']; ?>js/dashboard.js"></script>
<script src="<?php echo $settings['site_url']; ?>js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->

<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?php echo $settings['site_url']; ?>vendors/typeahead.js/typeahead.bundle.min.js"></script>
<script src="<?php echo $settings['site_url']; ?>vendors/select2/select2.min.js"></script>
<script src="<?php echo $settings['site_url']; ?>vendors/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script src="<?php echo $settings['site_url']; ?>vendors/codemirror/codemirror.js"></script>
<script src="<?php echo $settings['site_url']; ?>vendors/codemirror/javascript.js"></script>
<script src="<?php echo $settings['site_url']; ?>vendors/codemirror/shell.js"></script>
<script src="<?php echo $settings['site_url']; ?>vendors/pwstabs/jquery.pwstabs.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->

<!-- Custom js for this page-->
<script src="<?php echo $settings['site_url']; ?>js/file-upload.js"></script>
<script src="<?php echo $settings['site_url']; ?>js/typeahead.js"></script>
<script src="<?php echo $settings['site_url']; ?>js/select2.js"></script>
 <script src="<?php echo $settings['site_url']; ?>js/editorDemo.js"></script>
<!-- End custom js for this page-->
<script>
// Function to set a cookie
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

// Function to delete a cookie
function deleteCookie(name) {
    document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}

// Function to handle the click event for saving the cookie
function darkMode() {
    // You can change these values as needed
    var cookieName = "mode";
    var cookieValue = "dark";
    var cookieExpirationDays = 30;

    // Call the setCookie function to save the cookie
    setCookie(cookieName, cookieValue, cookieExpirationDays);

    // alert("Cookie has been saved!");
    location.reload();
}

// Function to handle the click event for deleting the cookie
function lightMode() {
    var cookieName = "mode";

    // Call the deleteCookie function to remove the cookie
    deleteCookie(cookieName);

    // alert("Cookie has been deleted!");

    // Refresh the page
    location.reload();
}

// Add click event listeners to the buttons
// document.getElementById("saveCookieButton").addEventListener("click", handleSaveCookieClick);
// document.getElementById("deleteCookieButton").addEventListener("click", handleDeleteCookieClick);
</script>