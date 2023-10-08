<?php include '../../admin/include/conn.php'; ?>
<?php
$conn = $pdo->open();
try{
  $stmt = $conn->prepare("SELECT * FROM settings WHERE id = 1");
  $stmt->execute();
  $settings = $stmt->fetch();
}
catch(PDOException $e){
  echo "There is some problem in connection: " . $e->getMessage();
}
$pdo->close();
?>
<?php

header("Content-type: text/css; charset: UTF-8");

?>

/*------------------------------------------------------------------
 [Master Stylesheet]

  Project:	SkyDash Admin
  Version:	1.2.1
-------------------------------------------------------------------*/
/*-------------------------------------------------------------------
  ===== Table of Contents =====

  * Bootstrap functions
  * Template variables
  * SCSS Compass Functions
  * Boostrap Main SCSS
  * Template mixins
    + Animation Mixins
    + Badge Mixins
    + Button Mixins
    + Miscellaneous Mixins
    + BlockQuote Mixins
    + Cards Mixins
    + Color Functions Mixins
    + Tooltips
    + popovers
  * Core Styles
    + Reset Styles
    + Fonts
    + Functions
    + Backgrounds
    + Sidebar
    + Navbar
    + Typography
    + Miscellaneous
    + Footer
    + Layouts
    + Utilities
    + Demo styles
  * Components
    + Accordions
    + Badges
    + Bootstrap Alerts
    + Boostrap Progress
    + Buttons
    + Breadcrumbs
    + Cards
    + Checkboxes and Radios
    + Dropdowns
    + Forms
    + Google maps
    + Icons
    + Loaders
    + Lists
    + Modals
    + Pagination
    + Popover
    + Portfolio
    + Preview
    + Tables
    + Tabs
    + Timeline
    + Todo List
    + Tooltips
    + User Profile
    + Pricing table
    + Settings Panel
  * Email
    + Mail Sidebar
    + Mail List Container
    + Message Content
  * Plugin Overrides
    + Ace Editor
    + Avgrund Popup
    + Bootstrap Tour
    + Chartist
    + CodeMirror
    + Colcade
    + Colorpicker
    + Context Menu
    + Data Tables
    + Datepicker
    + Dropify
    + Dropzone
    + Flot chart
    + Full Calendar
    + Google Charts
    + Icheck
    + Jquery File Upload
    + Js-grid
    + Jvectormap
    + Light Gallery
    + Listify
    + No-ui-slider
    + Owl-carousel
    + Progressbar-js
    + Pws-tabs
    + Quill Editor
    + Rating
    + Select2
    + Summernote Editor
    + SweetAlert
    + Switchery
    + Tags
    + TinyMCE Editor
    + Toast
    + Typeahead
    + Wysi Editor
    + X-editable
    + Wizard
  * Landing screens
    + Auth
  * Horizontal Menu
    + Horizontal
-------------------------------------------------------------------*/
/*-------------------------------------------------------------------*/
/* === Import Bootstrap functions and variables === */
/*-------------------------------------------------------------------*/
/* === Import template variables === */
/*-------------------------------------------------------------------*/
/* === SCSS Compass Functions === */
@-moz-keyframes flash {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes flash {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-o-keyframes flash {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-ms-keyframes flash {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes flash {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-moz-keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  60% {
    -webkit-transform: translateY(-15px);
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -o-transform: translateY(-15px);
    transform: translateY(-15px);
  }
  80% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-webkit-keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  60% {
    -webkit-transform: translateY(-15px);
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -o-transform: translateY(-15px);
    transform: translateY(-15px);
  }
  80% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-o-keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  60% {
    -webkit-transform: translateY(-15px);
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -o-transform: translateY(-15px);
    transform: translateY(-15px);
  }
  80% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-ms-keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  60% {
    -webkit-transform: translateY(-15px);
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -o-transform: translateY(-15px);
    transform: translateY(-15px);
  }
  80% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  60% {
    -webkit-transform: translateY(-15px);
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -o-transform: translateY(-15px);
    transform: translateY(-15px);
  }
  80% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-moz-keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  20% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  30% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  40% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  50% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  60% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  70% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  90% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  20% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  30% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  40% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  50% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  60% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  70% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  90% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-o-keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  20% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  30% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  40% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  50% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  60% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  70% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  90% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-ms-keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  20% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  30% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  40% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  50% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  60% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  70% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  90% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  20% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  30% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  40% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  50% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  60% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  70% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  90% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-moz-keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
  }
}

@-webkit-keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
  }
}

@-o-keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
  }
}

@-ms-keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
  }
}

@keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
  }
}

@-moz-keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    -moz-transform-origin: top center 50%;
    -ms-transform-origin: top center 50%;
    -o-transform-origin: top center 50%;
    transform-origin: top center 50%;
  }
  20% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  40% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  60% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  80% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@-webkit-keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    -moz-transform-origin: top center 50%;
    -ms-transform-origin: top center 50%;
    -o-transform-origin: top center 50%;
    transform-origin: top center 50%;
  }
  20% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  40% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  60% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  80% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@-o-keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    -moz-transform-origin: top center 50%;
    -ms-transform-origin: top center 50%;
    -o-transform-origin: top center 50%;
    transform-origin: top center 50%;
  }
  20% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  40% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  60% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  80% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@-ms-keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    -moz-transform-origin: top center 50%;
    -ms-transform-origin: top center 50%;
    -o-transform-origin: top center 50%;
    transform-origin: top center 50%;
  }
  20% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  40% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  60% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  80% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    -moz-transform-origin: top center 50%;
    -ms-transform-origin: top center 50%;
    -o-transform-origin: top center 50%;
    transform-origin: top center 50%;
  }
  20% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  40% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  60% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  80% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@-moz-keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    -moz-transform: translateX(-25%) rotate(-5deg);
    -ms-transform: translateX(-25%) rotate(-5deg);
    -o-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg);
  }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    -moz-transform: translateX(20%) rotate(3deg);
    -ms-transform: translateX(20%) rotate(3deg);
    -o-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg);
  }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    -moz-transform: translateX(-15%) rotate(-3deg);
    -ms-transform: translateX(-15%) rotate(-3deg);
    -o-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg);
  }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    -moz-transform: translateX(10%) rotate(2deg);
    -ms-transform: translateX(10%) rotate(2deg);
    -o-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg);
  }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    -moz-transform: translateX(-5%) rotate(-1deg);
    -ms-transform: translateX(-5%) rotate(-1deg);
    -o-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg);
  }
  100% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}

@-webkit-keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    -moz-transform: translateX(-25%) rotate(-5deg);
    -ms-transform: translateX(-25%) rotate(-5deg);
    -o-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg);
  }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    -moz-transform: translateX(20%) rotate(3deg);
    -ms-transform: translateX(20%) rotate(3deg);
    -o-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg);
  }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    -moz-transform: translateX(-15%) rotate(-3deg);
    -ms-transform: translateX(-15%) rotate(-3deg);
    -o-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg);
  }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    -moz-transform: translateX(10%) rotate(2deg);
    -ms-transform: translateX(10%) rotate(2deg);
    -o-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg);
  }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    -moz-transform: translateX(-5%) rotate(-1deg);
    -ms-transform: translateX(-5%) rotate(-1deg);
    -o-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg);
  }
  100% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}

@-o-keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    -moz-transform: translateX(-25%) rotate(-5deg);
    -ms-transform: translateX(-25%) rotate(-5deg);
    -o-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg);
  }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    -moz-transform: translateX(20%) rotate(3deg);
    -ms-transform: translateX(20%) rotate(3deg);
    -o-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg);
  }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    -moz-transform: translateX(-15%) rotate(-3deg);
    -ms-transform: translateX(-15%) rotate(-3deg);
    -o-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg);
  }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    -moz-transform: translateX(10%) rotate(2deg);
    -ms-transform: translateX(10%) rotate(2deg);
    -o-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg);
  }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    -moz-transform: translateX(-5%) rotate(-1deg);
    -ms-transform: translateX(-5%) rotate(-1deg);
    -o-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg);
  }
  100% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}

@-ms-keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    -moz-transform: translateX(-25%) rotate(-5deg);
    -ms-transform: translateX(-25%) rotate(-5deg);
    -o-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg);
  }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    -moz-transform: translateX(20%) rotate(3deg);
    -ms-transform: translateX(20%) rotate(3deg);
    -o-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg);
  }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    -moz-transform: translateX(-15%) rotate(-3deg);
    -ms-transform: translateX(-15%) rotate(-3deg);
    -o-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg);
  }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    -moz-transform: translateX(10%) rotate(2deg);
    -ms-transform: translateX(10%) rotate(2deg);
    -o-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg);
  }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    -moz-transform: translateX(-5%) rotate(-1deg);
    -ms-transform: translateX(-5%) rotate(-1deg);
    -o-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg);
  }
  100% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}

@keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    -moz-transform: translateX(-25%) rotate(-5deg);
    -ms-transform: translateX(-25%) rotate(-5deg);
    -o-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg);
  }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    -moz-transform: translateX(20%) rotate(3deg);
    -ms-transform: translateX(20%) rotate(3deg);
    -o-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg);
  }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    -moz-transform: translateX(-15%) rotate(-3deg);
    -ms-transform: translateX(-15%) rotate(-3deg);
    -o-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg);
  }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    -moz-transform: translateX(10%) rotate(2deg);
    -ms-transform: translateX(10%) rotate(2deg);
    -o-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg);
  }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    -moz-transform: translateX(-5%) rotate(-1deg);
    -ms-transform: translateX(-5%) rotate(-1deg);
    -o-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg);
  }
  100% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}

@-moz-keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-webkit-keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-o-keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-ms-keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-moz-keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    -moz-transform: skewX(9deg);
    -ms-transform: skewX(9deg);
    -o-transform: skewX(9deg);
    transform: skewX(9deg);
  }
  10% {
    -webkit-transform: skewX(-8deg);
    -moz-transform: skewX(-8deg);
    -ms-transform: skewX(-8deg);
    -o-transform: skewX(-8deg);
    transform: skewX(-8deg);
  }
  20% {
    -webkit-transform: skewX(7deg);
    -moz-transform: skewX(7deg);
    -ms-transform: skewX(7deg);
    -o-transform: skewX(7deg);
    transform: skewX(7deg);
  }
  30% {
    -webkit-transform: skewX(-6deg);
    -moz-transform: skewX(-6deg);
    -ms-transform: skewX(-6deg);
    -o-transform: skewX(-6deg);
    transform: skewX(-6deg);
  }
  40% {
    -webkit-transform: skewX(5deg);
    -moz-transform: skewX(5deg);
    -ms-transform: skewX(5deg);
    -o-transform: skewX(5deg);
    transform: skewX(5deg);
  }
  50% {
    -webkit-transform: skewX(-4deg);
    -moz-transform: skewX(-4deg);
    -ms-transform: skewX(-4deg);
    -o-transform: skewX(-4deg);
    transform: skewX(-4deg);
  }
  60% {
    -webkit-transform: skewX(3deg);
    -moz-transform: skewX(3deg);
    -ms-transform: skewX(3deg);
    -o-transform: skewX(3deg);
    transform: skewX(3deg);
  }
  70% {
    -webkit-transform: skewX(-2deg);
    -moz-transform: skewX(-2deg);
    -ms-transform: skewX(-2deg);
    -o-transform: skewX(-2deg);
    transform: skewX(-2deg);
  }
  80% {
    -webkit-transform: skewX(1deg);
    -moz-transform: skewX(1deg);
    -ms-transform: skewX(1deg);
    -o-transform: skewX(1deg);
    transform: skewX(1deg);
  }
  90% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
  100% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
}

@-webkit-keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    -moz-transform: skewX(9deg);
    -ms-transform: skewX(9deg);
    -o-transform: skewX(9deg);
    transform: skewX(9deg);
  }
  10% {
    -webkit-transform: skewX(-8deg);
    -moz-transform: skewX(-8deg);
    -ms-transform: skewX(-8deg);
    -o-transform: skewX(-8deg);
    transform: skewX(-8deg);
  }
  20% {
    -webkit-transform: skewX(7deg);
    -moz-transform: skewX(7deg);
    -ms-transform: skewX(7deg);
    -o-transform: skewX(7deg);
    transform: skewX(7deg);
  }
  30% {
    -webkit-transform: skewX(-6deg);
    -moz-transform: skewX(-6deg);
    -ms-transform: skewX(-6deg);
    -o-transform: skewX(-6deg);
    transform: skewX(-6deg);
  }
  40% {
    -webkit-transform: skewX(5deg);
    -moz-transform: skewX(5deg);
    -ms-transform: skewX(5deg);
    -o-transform: skewX(5deg);
    transform: skewX(5deg);
  }
  50% {
    -webkit-transform: skewX(-4deg);
    -moz-transform: skewX(-4deg);
    -ms-transform: skewX(-4deg);
    -o-transform: skewX(-4deg);
    transform: skewX(-4deg);
  }
  60% {
    -webkit-transform: skewX(3deg);
    -moz-transform: skewX(3deg);
    -ms-transform: skewX(3deg);
    -o-transform: skewX(3deg);
    transform: skewX(3deg);
  }
  70% {
    -webkit-transform: skewX(-2deg);
    -moz-transform: skewX(-2deg);
    -ms-transform: skewX(-2deg);
    -o-transform: skewX(-2deg);
    transform: skewX(-2deg);
  }
  80% {
    -webkit-transform: skewX(1deg);
    -moz-transform: skewX(1deg);
    -ms-transform: skewX(1deg);
    -o-transform: skewX(1deg);
    transform: skewX(1deg);
  }
  90% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
  100% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
}

@-o-keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    -moz-transform: skewX(9deg);
    -ms-transform: skewX(9deg);
    -o-transform: skewX(9deg);
    transform: skewX(9deg);
  }
  10% {
    -webkit-transform: skewX(-8deg);
    -moz-transform: skewX(-8deg);
    -ms-transform: skewX(-8deg);
    -o-transform: skewX(-8deg);
    transform: skewX(-8deg);
  }
  20% {
    -webkit-transform: skewX(7deg);
    -moz-transform: skewX(7deg);
    -ms-transform: skewX(7deg);
    -o-transform: skewX(7deg);
    transform: skewX(7deg);
  }
  30% {
    -webkit-transform: skewX(-6deg);
    -moz-transform: skewX(-6deg);
    -ms-transform: skewX(-6deg);
    -o-transform: skewX(-6deg);
    transform: skewX(-6deg);
  }
  40% {
    -webkit-transform: skewX(5deg);
    -moz-transform: skewX(5deg);
    -ms-transform: skewX(5deg);
    -o-transform: skewX(5deg);
    transform: skewX(5deg);
  }
  50% {
    -webkit-transform: skewX(-4deg);
    -moz-transform: skewX(-4deg);
    -ms-transform: skewX(-4deg);
    -o-transform: skewX(-4deg);
    transform: skewX(-4deg);
  }
  60% {
    -webkit-transform: skewX(3deg);
    -moz-transform: skewX(3deg);
    -ms-transform: skewX(3deg);
    -o-transform: skewX(3deg);
    transform: skewX(3deg);
  }
  70% {
    -webkit-transform: skewX(-2deg);
    -moz-transform: skewX(-2deg);
    -ms-transform: skewX(-2deg);
    -o-transform: skewX(-2deg);
    transform: skewX(-2deg);
  }
  80% {
    -webkit-transform: skewX(1deg);
    -moz-transform: skewX(1deg);
    -ms-transform: skewX(1deg);
    -o-transform: skewX(1deg);
    transform: skewX(1deg);
  }
  90% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
  100% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
}

@-ms-keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    -moz-transform: skewX(9deg);
    -ms-transform: skewX(9deg);
    -o-transform: skewX(9deg);
    transform: skewX(9deg);
  }
  10% {
    -webkit-transform: skewX(-8deg);
    -moz-transform: skewX(-8deg);
    -ms-transform: skewX(-8deg);
    -o-transform: skewX(-8deg);
    transform: skewX(-8deg);
  }
  20% {
    -webkit-transform: skewX(7deg);
    -moz-transform: skewX(7deg);
    -ms-transform: skewX(7deg);
    -o-transform: skewX(7deg);
    transform: skewX(7deg);
  }
  30% {
    -webkit-transform: skewX(-6deg);
    -moz-transform: skewX(-6deg);
    -ms-transform: skewX(-6deg);
    -o-transform: skewX(-6deg);
    transform: skewX(-6deg);
  }
  40% {
    -webkit-transform: skewX(5deg);
    -moz-transform: skewX(5deg);
    -ms-transform: skewX(5deg);
    -o-transform: skewX(5deg);
    transform: skewX(5deg);
  }
  50% {
    -webkit-transform: skewX(-4deg);
    -moz-transform: skewX(-4deg);
    -ms-transform: skewX(-4deg);
    -o-transform: skewX(-4deg);
    transform: skewX(-4deg);
  }
  60% {
    -webkit-transform: skewX(3deg);
    -moz-transform: skewX(3deg);
    -ms-transform: skewX(3deg);
    -o-transform: skewX(3deg);
    transform: skewX(3deg);
  }
  70% {
    -webkit-transform: skewX(-2deg);
    -moz-transform: skewX(-2deg);
    -ms-transform: skewX(-2deg);
    -o-transform: skewX(-2deg);
    transform: skewX(-2deg);
  }
  80% {
    -webkit-transform: skewX(1deg);
    -moz-transform: skewX(1deg);
    -ms-transform: skewX(1deg);
    -o-transform: skewX(1deg);
    transform: skewX(1deg);
  }
  90% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
  100% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
}

@keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    -moz-transform: skewX(9deg);
    -ms-transform: skewX(9deg);
    -o-transform: skewX(9deg);
    transform: skewX(9deg);
  }
  10% {
    -webkit-transform: skewX(-8deg);
    -moz-transform: skewX(-8deg);
    -ms-transform: skewX(-8deg);
    -o-transform: skewX(-8deg);
    transform: skewX(-8deg);
  }
  20% {
    -webkit-transform: skewX(7deg);
    -moz-transform: skewX(7deg);
    -ms-transform: skewX(7deg);
    -o-transform: skewX(7deg);
    transform: skewX(7deg);
  }
  30% {
    -webkit-transform: skewX(-6deg);
    -moz-transform: skewX(-6deg);
    -ms-transform: skewX(-6deg);
    -o-transform: skewX(-6deg);
    transform: skewX(-6deg);
  }
  40% {
    -webkit-transform: skewX(5deg);
    -moz-transform: skewX(5deg);
    -ms-transform: skewX(5deg);
    -o-transform: skewX(5deg);
    transform: skewX(5deg);
  }
  50% {
    -webkit-transform: skewX(-4deg);
    -moz-transform: skewX(-4deg);
    -ms-transform: skewX(-4deg);
    -o-transform: skewX(-4deg);
    transform: skewX(-4deg);
  }
  60% {
    -webkit-transform: skewX(3deg);
    -moz-transform: skewX(3deg);
    -ms-transform: skewX(3deg);
    -o-transform: skewX(3deg);
    transform: skewX(3deg);
  }
  70% {
    -webkit-transform: skewX(-2deg);
    -moz-transform: skewX(-2deg);
    -ms-transform: skewX(-2deg);
    -o-transform: skewX(-2deg);
    transform: skewX(-2deg);
  }
  80% {
    -webkit-transform: skewX(1deg);
    -moz-transform: skewX(1deg);
    -ms-transform: skewX(1deg);
    -o-transform: skewX(1deg);
    transform: skewX(1deg);
  }
  90% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
  100% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
}

@-moz-keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    -ms-transform: scale(0.95, 0.95);
    -o-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
}

@-webkit-keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    -ms-transform: scale(0.95, 0.95);
    -o-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
}

@-o-keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    -ms-transform: scale(0.95, 0.95);
    -o-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
}

@-ms-keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    -ms-transform: scale(0.95, 0.95);
    -o-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
}

@keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    -ms-transform: scale(0.95, 0.95);
    -o-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
}

@-moz-keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@-webkit-keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@-o-keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@-ms-keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@-moz-keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-webkit-keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-o-keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-ms-keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-moz-keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-webkit-keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-o-keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-ms-keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-moz-keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-webkit-keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-o-keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-ms-keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-moz-keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
  }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    -moz-transform: scale(0.9, 0.9);
    -ms-transform: scale(0.9, 0.9);
    -o-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-webkit-keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
  }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    -moz-transform: scale(0.9, 0.9);
    -ms-transform: scale(0.9, 0.9);
    -o-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-o-keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
  }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    -moz-transform: scale(0.9, 0.9);
    -ms-transform: scale(0.9, 0.9);
    -o-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-ms-keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
  }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    -moz-transform: scale(0.9, 0.9);
    -ms-transform: scale(0.9, 0.9);
    -o-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
  }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    -moz-transform: scale(0.9, 0.9);
    -ms-transform: scale(0.9, 0.9);
    -o-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-moz-keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    -o-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-webkit-keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    -o-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-o-keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    -o-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-ms-keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    -o-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    -o-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-moz-keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  80% {
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-webkit-keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  80% {
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-o-keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  80% {
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-ms-keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  80% {
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  80% {
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-moz-keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    -moz-transform: translateX(-30px);
    -ms-transform: translateX(-30px);
    -o-transform: translateX(-30px);
    transform: translateX(-30px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    -moz-transform: translateX(-30px);
    -ms-transform: translateX(-30px);
    -o-transform: translateX(-30px);
    transform: translateX(-30px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-o-keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    -moz-transform: translateX(-30px);
    -ms-transform: translateX(-30px);
    -o-transform: translateX(-30px);
    transform: translateX(-30px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-ms-keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    -moz-transform: translateX(-30px);
    -ms-transform: translateX(-30px);
    -o-transform: translateX(-30px);
    transform: translateX(-30px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    -moz-transform: translateX(-30px);
    -ms-transform: translateX(-30px);
    -o-transform: translateX(-30px);
    transform: translateX(-30px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-moz-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    -moz-transform: translateX(30px);
    -ms-transform: translateX(30px);
    -o-transform: translateX(30px);
    transform: translateX(30px);
  }
  80% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    -moz-transform: translateX(30px);
    -ms-transform: translateX(30px);
    -o-transform: translateX(30px);
    transform: translateX(30px);
  }
  80% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-o-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    -moz-transform: translateX(30px);
    -ms-transform: translateX(30px);
    -o-transform: translateX(30px);
    transform: translateX(30px);
  }
  80% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-ms-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    -moz-transform: translateX(30px);
    -ms-transform: translateX(30px);
    -o-transform: translateX(30px);
    transform: translateX(30px);
  }
  80% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    -moz-transform: translateX(30px);
    -ms-transform: translateX(30px);
    -o-transform: translateX(30px);
    transform: translateX(30px);
  }
  80% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-moz-keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-webkit-keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-o-keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-ms-keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-moz-keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
}

@-webkit-keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
}

@-o-keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
}

@-ms-keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
}

@keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
}

@-moz-keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
}

@-webkit-keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
}

@-o-keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
}

@-ms-keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
}

@keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
}

@-moz-keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
}

@-webkit-keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
}

@-o-keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
}

@-ms-keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
}

@keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
}

@-moz-keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
}

@-webkit-keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
}

@-o-keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
}

@-ms-keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
}

@keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
}

@-moz-keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0;
  }
}

@-webkit-keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0;
  }
}

@-o-keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0;
  }
}

@-ms-keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0;
  }
}

@keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0;
  }
}

@-moz-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-webkit-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-o-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-ms-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-moz-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-webkit-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-o-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-ms-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-moz-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-webkit-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-o-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-ms-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-moz-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-o-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-ms-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-moz-keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-webkit-keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-o-keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-ms-keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-moz-keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-webkit-keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-o-keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-ms-keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-moz-keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-webkit-keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-o-keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-ms-keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-moz-keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-webkit-keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-o-keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-ms-keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-moz-keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-webkit-keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-o-keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-ms-keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-moz-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-webkit-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-o-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-ms-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-moz-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-o-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-ms-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-moz-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-o-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-ms-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-moz-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    -moz-transform: perspective(400px) rotateY(0);
    -ms-transform: perspective(400px) rotateY(0);
    -o-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    -moz-transform: perspective(400px) scale(1);
    -ms-transform: perspective(400px) scale(1);
    -o-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@-webkit-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    -moz-transform: perspective(400px) rotateY(0);
    -ms-transform: perspective(400px) rotateY(0);
    -o-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    -moz-transform: perspective(400px) scale(1);
    -ms-transform: perspective(400px) scale(1);
    -o-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@-o-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    -moz-transform: perspective(400px) rotateY(0);
    -ms-transform: perspective(400px) rotateY(0);
    -o-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    -moz-transform: perspective(400px) scale(1);
    -ms-transform: perspective(400px) scale(1);
    -o-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@-ms-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    -moz-transform: perspective(400px) rotateY(0);
    -ms-transform: perspective(400px) rotateY(0);
    -o-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    -moz-transform: perspective(400px) scale(1);
    -ms-transform: perspective(400px) scale(1);
    -o-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    -moz-transform: perspective(400px) rotateY(0);
    -ms-transform: perspective(400px) rotateY(0);
    -o-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    -moz-transform: perspective(400px) scale(1);
    -ms-transform: perspective(400px) scale(1);
    -o-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@-moz-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    -moz-transform: perspective(400px) rotateX(-10deg);
    -ms-transform: perspective(400px) rotateX(-10deg);
    -o-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    -moz-transform: perspective(400px) rotateX(10deg);
    -ms-transform: perspective(400px) rotateX(10deg);
    -o-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-webkit-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    -moz-transform: perspective(400px) rotateX(-10deg);
    -ms-transform: perspective(400px) rotateX(-10deg);
    -o-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    -moz-transform: perspective(400px) rotateX(10deg);
    -ms-transform: perspective(400px) rotateX(10deg);
    -o-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-o-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    -moz-transform: perspective(400px) rotateX(-10deg);
    -ms-transform: perspective(400px) rotateX(-10deg);
    -o-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    -moz-transform: perspective(400px) rotateX(10deg);
    -ms-transform: perspective(400px) rotateX(10deg);
    -o-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-ms-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    -moz-transform: perspective(400px) rotateX(-10deg);
    -ms-transform: perspective(400px) rotateX(-10deg);
    -o-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    -moz-transform: perspective(400px) rotateX(10deg);
    -ms-transform: perspective(400px) rotateX(10deg);
    -o-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    -moz-transform: perspective(400px) rotateX(-10deg);
    -ms-transform: perspective(400px) rotateX(-10deg);
    -o-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    -moz-transform: perspective(400px) rotateX(10deg);
    -ms-transform: perspective(400px) rotateX(10deg);
    -o-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-moz-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-webkit-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-o-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-ms-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-moz-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    -moz-transform: perspective(400px) rotateY(-10deg);
    -ms-transform: perspective(400px) rotateY(-10deg);
    -o-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    -moz-transform: perspective(400px) rotateY(10deg);
    -ms-transform: perspective(400px) rotateY(10deg);
    -o-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-webkit-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    -moz-transform: perspective(400px) rotateY(-10deg);
    -ms-transform: perspective(400px) rotateY(-10deg);
    -o-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    -moz-transform: perspective(400px) rotateY(10deg);
    -ms-transform: perspective(400px) rotateY(10deg);
    -o-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-o-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    -moz-transform: perspective(400px) rotateY(-10deg);
    -ms-transform: perspective(400px) rotateY(-10deg);
    -o-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    -moz-transform: perspective(400px) rotateY(10deg);
    -ms-transform: perspective(400px) rotateY(10deg);
    -o-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-ms-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    -moz-transform: perspective(400px) rotateY(-10deg);
    -ms-transform: perspective(400px) rotateY(-10deg);
    -o-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    -moz-transform: perspective(400px) rotateY(10deg);
    -ms-transform: perspective(400px) rotateY(10deg);
    -o-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    -moz-transform: perspective(400px) rotateY(-10deg);
    -ms-transform: perspective(400px) rotateY(-10deg);
    -o-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    -moz-transform: perspective(400px) rotateY(10deg);
    -ms-transform: perspective(400px) rotateY(10deg);
    -o-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-moz-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-webkit-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-o-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-ms-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-moz-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    -moz-transform: translateX(-20%) skewX(30deg);
    -ms-transform: translateX(-20%) skewX(30deg);
    -o-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    -moz-transform: translateX(0%) skewX(-15deg);
    -ms-transform: translateX(0%) skewX(-15deg);
    -o-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-webkit-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    -moz-transform: translateX(-20%) skewX(30deg);
    -ms-transform: translateX(-20%) skewX(30deg);
    -o-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    -moz-transform: translateX(0%) skewX(-15deg);
    -ms-transform: translateX(0%) skewX(-15deg);
    -o-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-o-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    -moz-transform: translateX(-20%) skewX(30deg);
    -ms-transform: translateX(-20%) skewX(30deg);
    -o-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    -moz-transform: translateX(0%) skewX(-15deg);
    -ms-transform: translateX(0%) skewX(-15deg);
    -o-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-ms-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    -moz-transform: translateX(-20%) skewX(30deg);
    -ms-transform: translateX(-20%) skewX(30deg);
    -o-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    -moz-transform: translateX(0%) skewX(-15deg);
    -ms-transform: translateX(0%) skewX(-15deg);
    -o-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    -moz-transform: translateX(-20%) skewX(30deg);
    -ms-transform: translateX(-20%) skewX(30deg);
    -o-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    -moz-transform: translateX(0%) skewX(-15deg);
    -ms-transform: translateX(0%) skewX(-15deg);
    -o-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-moz-keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-webkit-keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-o-keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-ms-keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-moz-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    -ms-transform: rotate(200deg);
    -o-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0;
  }
}

@-webkit-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    -ms-transform: rotate(200deg);
    -o-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0;
  }
}

@-o-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    -ms-transform: rotate(200deg);
    -o-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0;
  }
}

@-ms-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    -ms-transform: rotate(200deg);
    -o-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0;
  }
}

@keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    -ms-transform: rotate(200deg);
    -o-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0;
  }
}

@-moz-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-webkit-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-o-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-ms-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-moz-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-webkit-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-o-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-ms-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-moz-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-webkit-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-o-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-ms-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-moz-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-webkit-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-o-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-ms-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-moz-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    -moz-transform: rotate(-200deg);
    -ms-transform: rotate(-200deg);
    -o-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-webkit-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    -moz-transform: rotate(-200deg);
    -ms-transform: rotate(-200deg);
    -o-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-o-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    -moz-transform: rotate(-200deg);
    -ms-transform: rotate(-200deg);
    -o-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-ms-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    -moz-transform: rotate(-200deg);
    -ms-transform: rotate(-200deg);
    -o-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    -moz-transform: rotate(-200deg);
    -ms-transform: rotate(-200deg);
    -o-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-moz-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-webkit-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-o-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-ms-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-moz-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-webkit-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-o-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-ms-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-moz-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-webkit-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-o-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-ms-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-moz-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-webkit-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-o-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-ms-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-moz-keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    -moz-transform: rotate(80deg);
    -ms-transform: rotate(80deg);
    -o-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  40% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    -moz-transform: rotate(60deg) translateY(0);
    -ms-transform: rotate(60deg) translateY(0);
    -o-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  100% {
    -webkit-transform: translateY(700px);
    -moz-transform: translateY(700px);
    -ms-transform: translateY(700px);
    -o-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-webkit-keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    -moz-transform: rotate(80deg);
    -ms-transform: rotate(80deg);
    -o-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  40% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    -moz-transform: rotate(60deg) translateY(0);
    -ms-transform: rotate(60deg) translateY(0);
    -o-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  100% {
    -webkit-transform: translateY(700px);
    -moz-transform: translateY(700px);
    -ms-transform: translateY(700px);
    -o-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-o-keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    -moz-transform: rotate(80deg);
    -ms-transform: rotate(80deg);
    -o-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  40% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    -moz-transform: rotate(60deg) translateY(0);
    -ms-transform: rotate(60deg) translateY(0);
    -o-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  100% {
    -webkit-transform: translateY(700px);
    -moz-transform: translateY(700px);
    -ms-transform: translateY(700px);
    -o-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-ms-keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    -moz-transform: rotate(80deg);
    -ms-transform: rotate(80deg);
    -o-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  40% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    -moz-transform: rotate(60deg) translateY(0);
    -ms-transform: rotate(60deg) translateY(0);
    -o-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  100% {
    -webkit-transform: translateY(700px);
    -moz-transform: translateY(700px);
    -ms-transform: translateY(700px);
    -o-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    -moz-transform: rotate(80deg);
    -ms-transform: rotate(80deg);
    -o-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  40% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    -moz-transform: rotate(60deg) translateY(0);
    -ms-transform: rotate(60deg) translateY(0);
    -o-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  100% {
    -webkit-transform: translateY(700px);
    -moz-transform: translateY(700px);
    -ms-transform: translateY(700px);
    -o-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-moz-keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
}

@-webkit-keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
}

@-o-keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
}

@-ms-keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
}

@keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
}

@-moz-keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
}

@-webkit-keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
}

@-o-keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
}

@-ms-keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
}

@keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
}

/*-------------------------------------------------------------------*/
/* === Boostrap Main SCSS === */
/*!
 * Bootstrap v5.1.1 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
:root {
  --bs-blue: #5E50F9;
  --bs-indigo: #6610f2;
  --bs-purple: #6a008a;
  --bs-pink: #E91E63;
  --bs-red: #f96868;
  --bs-orange: #f2a654;
  --bs-yellow: #f6e84e;
  --bs-green: #46c35f;
  --bs-teal: #58d8a3;
  --bs-cyan: #57c7d4;
  --bs-white: #ffffff;
  --bs-gray: #434a54;
  --bs-gray-light: #aab2bd;
  --bs-gray-lighter: #e8eff4;
  --bs-gray-lightest: #e6e9ed;
  --bs-gray-dark: #0f1531;
  --bs-black: #000000;
  --bs-gray-100: #f8f9fa;
  --bs-gray-200: #e9ecef;
  --bs-gray-300: #dee2e6;
  --bs-gray-400: #ced4da;
  --bs-gray-500: #adb5bd;
  --bs-gray-600: #6c757d;
  --bs-gray-700: #495057;
  --bs-gray-800: #343a40;
  --bs-gray-900: #212529;
  --bs-primary: <?php echo $settings['theme']; ?>;
  --bs-secondary: #a3a4a5;
  --bs-success: #57B657;
  --bs-info: #248AFD;
  --bs-warning: #FFC100;
  --bs-danger: #FF4747;
  --bs-light: #f8f9fa;
  --bs-dark: #282f3a;
  --bs-primary-rgb: 13, 110, 253;
  --bs-secondary-rgb: 108, 117, 125;
  --bs-success-rgb: 25, 135, 84;
  --bs-info-rgb: 13, 202, 240;
  --bs-warning-rgb: 255, 193, 7;
  --bs-danger-rgb: 220, 53, 69;
  --bs-light-rgb: 248, 249, 250;
  --bs-dark-rgb: 33, 37, 41;
  --bs-white-rgb: 255, 255, 255;
  --bs-black-rgb: 0, 0, 0;
  --bs-body-color-rgb: 255, 255, 255;
  --bs-body-bg-rgb: 255, 255, 255;
  --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
  --bs-body-font-family: var(--bs-font-sans-serif);
  --bs-body-font-size: 1rem;
  --bs-body-font-weight: 400;
  --bs-body-line-height: 1.5;
  --bs-body-color: #fff;
  --bs-body-bg: #fff;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: smooth;
  }
}

body {
  margin: 0;
  font-family: var(--bs-body-font-family);
  font-size: var(--bs-body-font-size);
  font-weight: var(--bs-body-font-weight);
  line-height: var(--bs-body-line-height);
  color: var(--bs-body-color);
  text-align: var(--bs-body-text-align);
  background-color: var(--bs-body-bg);
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

hr {
  margin: 1rem 0;
  color: inherit;
  background-color: currentColor;
  border: 0;
  opacity: 0.25;
}

hr:not([size]) {
  height: 1px;
}

h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2;
}

h1, .h1 {
  font-size: calc(1.375rem + 1.5vw);
}

@media (min-width: 1200px) {
  h1, .h1 {
    font-size: 2.5rem;
  }
}

h2, .h2 {
  font-size: calc(1.325rem + 0.9vw);
}

@media (min-width: 1200px) {
  h2, .h2 {
    font-size: 2rem;
  }
}

h3, .h3 {
  font-size: calc(1.3rem + 0.6vw);
}

@media (min-width: 1200px) {
  h3, .h3 {
    font-size: 1.75rem;
  }
}

h4, .h4 {
  font-size: calc(1.275rem + 0.3vw);
}

@media (min-width: 1200px) {
  h4, .h4 {
    font-size: 1.5rem;
  }
}

h5, .h5 {
  font-size: 1.25rem;
}

h6, .h6 {
  font-size: 1rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-bs-original-title] {
  text-decoration: underline dotted;
  cursor: help;
  text-decoration-skip-ink: none;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul {
  padding-left: 2rem;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: .5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b,
strong {
  font-weight: bolder;
}

small, .small {
  font-size: 0.875em;
}

mark, .mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}

sub,
sup {
  position: relative;
  font-size: 0.75em;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -.25em;
}

sup {
  top: -.5em;
}

a {
  color: #0d6efd;
  text-decoration: underline;
}

a:hover {
  color: #0a58ca;
}

a:not([href]):not([class]), a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}

pre,
code,
kbd,
samp {
  font-family: var(--bs-font-monospace);
  font-size: 1em;
  direction: ltr /* rtl:ignore */;
  unicode-bidi: bidi-override;
}

pre {
  display: block;
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  font-size: 0.875em;
}

pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

code {
  font-size: 0.875em;
  color: #d63384;
  word-wrap: break-word;
}

a > code {
  color: inherit;
}

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 0.875em;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem;
}

kbd kbd {
  padding: 0;
  font-size: 1em;
  font-weight: 700;
}

figure {
  margin: 0 0 1rem;
}

img,
svg {
  vertical-align: middle;
}

table {
  caption-side: bottom;
  border-collapse: collapse;
}

caption {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  color: #6c757d;
  text-align: left;
}

th {
  text-align: inherit;
  text-align: -webkit-match-parent;
}

thead,
tbody,
tfoot,
tr,
td,
th {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

label {
  display: inline-block;
}

button {
  border-radius: 0;
}

button:focus:not(:focus-visible) {
  outline: 0;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
select {
  text-transform: none;
}

[role="button"] {
  cursor: pointer;
}

select {
  word-wrap: normal;
}

select:disabled {
  opacity: 1;
}

[list]::-webkit-calendar-picker-indicator {
  display: none;
}

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

button:not(:disabled),
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled) {
  cursor: pointer;
}

::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

textarea {
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  float: left;
  width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: calc(1.275rem + 0.3vw);
  line-height: inherit;
}

@media (min-width: 1200px) {
  legend {
    font-size: 1.5rem;
  }
}

legend + * {
  clear: left;
}

::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-year-field {
  padding: 0;
}

::-webkit-inner-spin-button {
  height: auto;
}

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: textfield;
}

/* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-color-swatch-wrapper {
  padding: 0;
}

::file-selector-button {
  font: inherit;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

iframe {
  border: 0;
}

summary {
  display: list-item;
  cursor: pointer;
}

progress {
  vertical-align: baseline;
}

[hidden] {
  display: none !important;
}

.lead {
  font-size: 1.25rem;
  font-weight: 300;
}

.display-1 {
  font-size: calc(1.625rem + 4.5vw);
  font-weight: 300;
  line-height: 1.2;
}

@media (min-width: 1200px) {
  .display-1 {
    font-size: 5rem;
  }
}

.display-2 {
  font-size: calc(1.575rem + 3.9vw);
  font-weight: 300;
  line-height: 1.2;
}

@media (min-width: 1200px) {
  .display-2 {
    font-size: 4.5rem;
  }
}

.display-3 {
  font-size: calc(1.525rem + 3.3vw);
  font-weight: 300;
  line-height: 1.2;
}

@media (min-width: 1200px) {
  .display-3 {
    font-size: 4rem;
  }
}

.display-4 {
  font-size: calc(1.475rem + 2.7vw);
  font-weight: 300;
  line-height: 1.2;
}

@media (min-width: 1200px) {
  .display-4 {
    font-size: 3.5rem;
  }
}

.display-5 {
  font-size: calc(1.425rem + 2.1vw);
  font-weight: 300;
  line-height: 1.2;
}

@media (min-width: 1200px) {
  .display-5 {
    font-size: 3rem;
  }
}

.display-6 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 300;
  line-height: 1.2;
}

@media (min-width: 1200px) {
  .display-6 {
    font-size: 2.5rem;
  }
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}

.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 0.875em;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem;
}

.blockquote > :last-child {
  margin-bottom: 0;
}

.blockquote-footer {
  margin-top: -1rem;
  margin-bottom: 1rem;
  font-size: 0.875em;
  color: #6c757d;
}

.blockquote-footer::before {
  content: "\2014\00A0";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 0.875em;
  color: #6c757d;
}

.container,
.container-fluid,
.container-sm,
.container-md,
.container-lg,
.container-xl,
.container-xxl {
  width: 100%;
  padding-right: var(--bs-gutter-x, 0.75rem);
  padding-left: var(--bs-gutter-x, 0.75rem);
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container, .container-sm {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container, .container-sm, .container-md {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container, .container-sm, .container-md, .container-lg {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {
  .container, .container-sm, .container-md, .container-lg, .container-xl {
    max-width: 1140px;
  }
}

@media (min-width: 1400px) {
  .container, .container-sm, .container-md, .container-lg, .container-xl, .container-xxl {
    max-width: 1320px;
  }
}

.row {
  --bs-gutter-x: 30px;
  --bs-gutter-y: 0;
  display: flex;
  flex-wrap: wrap;
  margin-top: calc(var(--bs-gutter-y) * -1);
  margin-right: calc(var(--bs-gutter-x) * -.5);
  margin-left: calc(var(--bs-gutter-x) * -.5);
}

.row > * {
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(var(--bs-gutter-x) * .5);
  padding-left: calc(var(--bs-gutter-x) * .5);
  margin-top: var(--bs-gutter-y);
}

.col {
  flex: 1 0 0%;
}

.row-cols-auto > * {
  flex: 0 0 auto;
  width: auto;
}

.row-cols-1 > * {
  flex: 0 0 auto;
  width: 100%;
}

.row-cols-2 > * {
  flex: 0 0 auto;
  width: 50%;
}

.row-cols-3 > * {
  flex: 0 0 auto;
  width: 33.33333%;
}

.row-cols-4 > * {
  flex: 0 0 auto;
  width: 25%;
}

.row-cols-5 > * {
  flex: 0 0 auto;
  width: 20%;
}

.row-cols-6 > * {
  flex: 0 0 auto;
  width: 16.66667%;
}

.col-auto {
  flex: 0 0 auto;
  width: auto;
}

.col-1 {
  flex: 0 0 auto;
  width: 8.33333%;
}

.col-2 {
  flex: 0 0 auto;
  width: 16.66667%;
}

.col-3 {
  flex: 0 0 auto;
  width: 25%;
}

.col-4 {
  flex: 0 0 auto;
  width: 33.33333%;
}

.col-5 {
  flex: 0 0 auto;
  width: 41.66667%;
}

.col-6, .lightGallery .image-tile {
  flex: 0 0 auto;
  width: 50%;
}

.col-7 {
  flex: 0 0 auto;
  width: 58.33333%;
}

.col-8 {
  flex: 0 0 auto;
  width: 66.66667%;
}

.col-9 {
  flex: 0 0 auto;
  width: 75%;
}

.col-10 {
  flex: 0 0 auto;
  width: 83.33333%;
}

.col-11 {
  flex: 0 0 auto;
  width: 91.66667%;
}

.col-12 {
  flex: 0 0 auto;
  width: 100%;
}

.offset-1 {
  margin-left: 8.33333%;
}

.offset-2 {
  margin-left: 16.66667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.33333%;
}

.offset-5 {
  margin-left: 41.66667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.33333%;
}

.offset-8 {
  margin-left: 66.66667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.33333%;
}

.offset-11 {
  margin-left: 91.66667%;
}

.g-0,
.gx-0 {
  --bs-gutter-x: 0;
}

.g-0,
.gy-0 {
  --bs-gutter-y: 0;
}

.g-1,
.gx-1 {
  --bs-gutter-x: 0.25rem;
}

.g-1,
.gy-1 {
  --bs-gutter-y: 0.25rem;
}

.g-2,
.gx-2 {
  --bs-gutter-x: 0.5rem;
}

.g-2,
.gy-2 {
  --bs-gutter-y: 0.5rem;
}

.g-3,
.gx-3 {
  --bs-gutter-x: 1rem;
}

.g-3,
.gy-3 {
  --bs-gutter-y: 1rem;
}

.g-4,
.gx-4 {
  --bs-gutter-x: 1.5rem;
}

.g-4,
.gy-4 {
  --bs-gutter-y: 1.5rem;
}

.g-5,
.gx-5 {
  --bs-gutter-x: 3rem;
}

.g-5,
.gy-5 {
  --bs-gutter-y: 3rem;
}

@media (min-width: 576px) {
  .col-sm {
    flex: 1 0 0%;
  }
  .row-cols-sm-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-sm-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-sm-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-sm-3 > * {
    flex: 0 0 auto;
    width: 33.33333%;
  }
  .row-cols-sm-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-sm-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-sm-6 > * {
    flex: 0 0 auto;
    width: 16.66667%;
  }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-sm-1 {
    flex: 0 0 auto;
    width: 8.33333%;
  }
  .col-sm-2 {
    flex: 0 0 auto;
    width: 16.66667%;
  }
  .col-sm-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-sm-4 {
    flex: 0 0 auto;
    width: 33.33333%;
  }
  .col-sm-5 {
    flex: 0 0 auto;
    width: 41.66667%;
  }
  .col-sm-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-sm-7 {
    flex: 0 0 auto;
    width: 58.33333%;
  }
  .col-sm-8 {
    flex: 0 0 auto;
    width: 66.66667%;
  }
  .col-sm-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-sm-10 {
    flex: 0 0 auto;
    width: 83.33333%;
  }
  .col-sm-11 {
    flex: 0 0 auto;
    width: 91.66667%;
  }
  .col-sm-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.33333%;
  }
  .offset-sm-2 {
    margin-left: 16.66667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.33333%;
  }
  .offset-sm-5 {
    margin-left: 41.66667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.33333%;
  }
  .offset-sm-8 {
    margin-left: 66.66667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.33333%;
  }
  .offset-sm-11 {
    margin-left: 91.66667%;
  }
  .g-sm-0,
  .gx-sm-0 {
    --bs-gutter-x: 0;
  }
  .g-sm-0,
  .gy-sm-0 {
    --bs-gutter-y: 0;
  }
  .g-sm-1,
  .gx-sm-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-sm-1,
  .gy-sm-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-sm-2,
  .gx-sm-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-sm-2,
  .gy-sm-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-sm-3,
  .gx-sm-3 {
    --bs-gutter-x: 1rem;
  }
  .g-sm-3,
  .gy-sm-3 {
    --bs-gutter-y: 1rem;
  }
  .g-sm-4,
  .gx-sm-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-sm-4,
  .gy-sm-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-sm-5,
  .gx-sm-5 {
    --bs-gutter-x: 3rem;
  }
  .g-sm-5,
  .gy-sm-5 {
    --bs-gutter-y: 3rem;
  }
}

@media (min-width: 768px) {
  .col-md {
    flex: 1 0 0%;
  }
  .row-cols-md-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-md-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-md-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-md-3 > * {
    flex: 0 0 auto;
    width: 33.33333%;
  }
  .row-cols-md-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-md-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-md-6 > * {
    flex: 0 0 auto;
    width: 16.66667%;
  }
  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-md-1 {
    flex: 0 0 auto;
    width: 8.33333%;
  }
  .col-md-2 {
    flex: 0 0 auto;
    width: 16.66667%;
  }
  .col-md-3, .lightGallery .image-tile {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-md-4, .lightGallery .image-tile {
    flex: 0 0 auto;
    width: 33.33333%;
  }
  .col-md-5 {
    flex: 0 0 auto;
    width: 41.66667%;
  }
  .col-md-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-md-7 {
    flex: 0 0 auto;
    width: 58.33333%;
  }
  .col-md-8 {
    flex: 0 0 auto;
    width: 66.66667%;
  }
  .col-md-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-md-10 {
    flex: 0 0 auto;
    width: 83.33333%;
  }
  .col-md-11 {
    flex: 0 0 auto;
    width: 91.66667%;
  }
  .col-md-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.33333%;
  }
  .offset-md-2 {
    margin-left: 16.66667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.33333%;
  }
  .offset-md-5 {
    margin-left: 41.66667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.33333%;
  }
  .offset-md-8 {
    margin-left: 66.66667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.33333%;
  }
  .offset-md-11 {
    margin-left: 91.66667%;
  }
  .g-md-0,
  .gx-md-0 {
    --bs-gutter-x: 0;
  }
  .g-md-0,
  .gy-md-0 {
    --bs-gutter-y: 0;
  }
  .g-md-1,
  .gx-md-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-md-1,
  .gy-md-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-md-2,
  .gx-md-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-md-2,
  .gy-md-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-md-3,
  .gx-md-3 {
    --bs-gutter-x: 1rem;
  }
  .g-md-3,
  .gy-md-3 {
    --bs-gutter-y: 1rem;
  }
  .g-md-4,
  .gx-md-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-md-4,
  .gy-md-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-md-5,
  .gx-md-5 {
    --bs-gutter-x: 3rem;
  }
  .g-md-5,
  .gy-md-5 {
    --bs-gutter-y: 3rem;
  }
}

@media (min-width: 992px) {
  .col-lg {
    flex: 1 0 0%;
  }
  .row-cols-lg-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-lg-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-lg-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-lg-3 > * {
    flex: 0 0 auto;
    width: 33.33333%;
  }
  .row-cols-lg-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-lg-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-lg-6 > * {
    flex: 0 0 auto;
    width: 16.66667%;
  }
  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-lg-1 {
    flex: 0 0 auto;
    width: 8.33333%;
  }
  .col-lg-2 {
    flex: 0 0 auto;
    width: 16.66667%;
  }
  .col-lg-3, .lightGallery .image-tile {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-lg-4 {
    flex: 0 0 auto;
    width: 33.33333%;
  }
  .col-lg-5 {
    flex: 0 0 auto;
    width: 41.66667%;
  }
  .col-lg-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-lg-7 {
    flex: 0 0 auto;
    width: 58.33333%;
  }
  .col-lg-8 {
    flex: 0 0 auto;
    width: 66.66667%;
  }
  .col-lg-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-lg-10 {
    flex: 0 0 auto;
    width: 83.33333%;
  }
  .col-lg-11 {
    flex: 0 0 auto;
    width: 91.66667%;
  }
  .col-lg-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.33333%;
  }
  .offset-lg-2 {
    margin-left: 16.66667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.33333%;
  }
  .offset-lg-5 {
    margin-left: 41.66667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.33333%;
  }
  .offset-lg-8 {
    margin-left: 66.66667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.33333%;
  }
  .offset-lg-11 {
    margin-left: 91.66667%;
  }
  .g-lg-0,
  .gx-lg-0 {
    --bs-gutter-x: 0;
  }
  .g-lg-0,
  .gy-lg-0 {
    --bs-gutter-y: 0;
  }
  .g-lg-1,
  .gx-lg-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-lg-1,
  .gy-lg-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-lg-2,
  .gx-lg-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-lg-2,
  .gy-lg-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-lg-3,
  .gx-lg-3 {
    --bs-gutter-x: 1rem;
  }
  .g-lg-3,
  .gy-lg-3 {
    --bs-gutter-y: 1rem;
  }
  .g-lg-4,
  .gx-lg-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-lg-4,
  .gy-lg-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-lg-5,
  .gx-lg-5 {
    --bs-gutter-x: 3rem;
  }
  .g-lg-5,
  .gy-lg-5 {
    --bs-gutter-y: 3rem;
  }
}

@media (min-width: 1200px) {
  .col-xl {
    flex: 1 0 0%;
  }
  .row-cols-xl-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xl-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xl-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xl-3 > * {
    flex: 0 0 auto;
    width: 33.33333%;
  }
  .row-cols-xl-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xl-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xl-6 > * {
    flex: 0 0 auto;
    width: 16.66667%;
  }
  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-xl-1 {
    flex: 0 0 auto;
    width: 8.33333%;
  }
  .col-xl-2 {
    flex: 0 0 auto;
    width: 16.66667%;
  }
  .col-xl-3, .lightGallery .image-tile {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xl-4 {
    flex: 0 0 auto;
    width: 33.33333%;
  }
  .col-xl-5 {
    flex: 0 0 auto;
    width: 41.66667%;
  }
  .col-xl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xl-7 {
    flex: 0 0 auto;
    width: 58.33333%;
  }
  .col-xl-8 {
    flex: 0 0 auto;
    width: 66.66667%;
  }
  .col-xl-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xl-10 {
    flex: 0 0 auto;
    width: 83.33333%;
  }
  .col-xl-11 {
    flex: 0 0 auto;
    width: 91.66667%;
  }
  .col-xl-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.33333%;
  }
  .offset-xl-2 {
    margin-left: 16.66667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.33333%;
  }
  .offset-xl-5 {
    margin-left: 41.66667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.33333%;
  }
  .offset-xl-8 {
    margin-left: 66.66667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.33333%;
  }
  .offset-xl-11 {
    margin-left: 91.66667%;
  }
  .g-xl-0,
  .gx-xl-0 {
    --bs-gutter-x: 0;
  }
  .g-xl-0,
  .gy-xl-0 {
    --bs-gutter-y: 0;
  }
  .g-xl-1,
  .gx-xl-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-xl-1,
  .gy-xl-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-xl-2,
  .gx-xl-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-xl-2,
  .gy-xl-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-xl-3,
  .gx-xl-3 {
    --bs-gutter-x: 1rem;
  }
  .g-xl-3,
  .gy-xl-3 {
    --bs-gutter-y: 1rem;
  }
  .g-xl-4,
  .gx-xl-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-xl-4,
  .gy-xl-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-xl-5,
  .gx-xl-5 {
    --bs-gutter-x: 3rem;
  }
  .g-xl-5,
  .gy-xl-5 {
    --bs-gutter-y: 3rem;
  }
}

@media (min-width: 1400px) {
  .col-xxl {
    flex: 1 0 0%;
  }
  .row-cols-xxl-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xxl-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xxl-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xxl-3 > * {
    flex: 0 0 auto;
    width: 33.33333%;
  }
  .row-cols-xxl-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xxl-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xxl-6 > * {
    flex: 0 0 auto;
    width: 16.66667%;
  }
  .col-xxl-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-xxl-1 {
    flex: 0 0 auto;
    width: 8.33333%;
  }
  .col-xxl-2 {
    flex: 0 0 auto;
    width: 16.66667%;
  }
  .col-xxl-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xxl-4 {
    flex: 0 0 auto;
    width: 33.33333%;
  }
  .col-xxl-5 {
    flex: 0 0 auto;
    width: 41.66667%;
  }
  .col-xxl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xxl-7 {
    flex: 0 0 auto;
    width: 58.33333%;
  }
  .col-xxl-8 {
    flex: 0 0 auto;
    width: 66.66667%;
  }
  .col-xxl-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xxl-10 {
    flex: 0 0 auto;
    width: 83.33333%;
  }
  .col-xxl-11 {
    flex: 0 0 auto;
    width: 91.66667%;
  }
  .col-xxl-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xxl-0 {
    margin-left: 0;
  }
  .offset-xxl-1 {
    margin-left: 8.33333%;
  }
  .offset-xxl-2 {
    margin-left: 16.66667%;
  }
  .offset-xxl-3 {
    margin-left: 25%;
  }
  .offset-xxl-4 {
    margin-left: 33.33333%;
  }
  .offset-xxl-5 {
    margin-left: 41.66667%;
  }
  .offset-xxl-6 {
    margin-left: 50%;
  }
  .offset-xxl-7 {
    margin-left: 58.33333%;
  }
  .offset-xxl-8 {
    margin-left: 66.66667%;
  }
  .offset-xxl-9 {
    margin-left: 75%;
  }
  .offset-xxl-10 {
    margin-left: 83.33333%;
  }
  .offset-xxl-11 {
    margin-left: 91.66667%;
  }
  .g-xxl-0,
  .gx-xxl-0 {
    --bs-gutter-x: 0;
  }
  .g-xxl-0,
  .gy-xxl-0 {
    --bs-gutter-y: 0;
  }
  .g-xxl-1,
  .gx-xxl-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-xxl-1,
  .gy-xxl-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-xxl-2,
  .gx-xxl-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-xxl-2,
  .gy-xxl-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-xxl-3,
  .gx-xxl-3 {
    --bs-gutter-x: 1rem;
  }
  .g-xxl-3,
  .gy-xxl-3 {
    --bs-gutter-y: 1rem;
  }
  .g-xxl-4,
  .gx-xxl-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-xxl-4,
  .gy-xxl-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-xxl-5,
  .gx-xxl-5 {
    --bs-gutter-x: 3rem;
  }
  .g-xxl-5,
  .gy-xxl-5 {
    --bs-gutter-y: 3rem;
  }
}

.table, .jsgrid .jsgrid-table {
  --bs-table-bg: transparent;
  --bs-table-accent-bg: transparent;
  --bs-table-striped-color: #fff;
  --bs-table-striped-bg: #151419;
  --bs-table-active-color: #212529;
  --bs-table-active-bg: rgba(0, 0, 0, 0.1);
  --bs-table-hover-color: #212529;
  --bs-table-hover-bg: #151419;
  width: 100%;
  margin-bottom: 1rem;
  color: #fff;
  vertical-align: top;
  border-color: #575757;
}

.table > :not(caption) > * > *, .jsgrid .jsgrid-table > :not(caption) > * > * {
  padding: 0.5rem 0.5rem;
  background-color: var(--bs-table-bg);
  border-bottom-width: 1px;
  box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}

.table > tbody, .jsgrid .jsgrid-table > tbody {
  vertical-align: inherit;
}

.table > thead, .jsgrid .jsgrid-table > thead {
  vertical-align: bottom;
}

.table > :not(:last-child) > :last-child > *, .jsgrid .jsgrid-table > :not(:last-child) > :last-child > * {
  border-bottom-color: currentColor;
}

.caption-top {
  caption-side: top;
}

.table-sm > :not(caption) > * > * {
  padding: 0.25rem 0.25rem;
}

.table-bordered > :not(caption) > * {
  border-width: 1px 0;
}

.table-bordered > :not(caption) > * > * {
  border-width: 0 1px;
}

.table-borderless > :not(caption) > * > * {
  border-bottom-width: 0;
}

.table-striped > tbody > tr:nth-of-type(odd) {
  --bs-table-accent-bg: var(--bs-table-striped-bg);
  color: var(--bs-table-striped-color);
}

.table-active {
  --bs-table-accent-bg: var(--bs-table-active-bg);
  color: var(--bs-table-active-color);
}

.table-hover > tbody > tr:hover {
  --bs-table-accent-bg: var(--bs-table-hover-bg);
  color: var(--bs-table-hover-color);
}

.table-primary {
  --bs-table-bg: #cfe2ff;
  --bs-table-striped-bg: #c5d7f2;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #bacbe6;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #bfd1ec;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #bacbe6;
}

.table-secondary {
  --bs-table-bg: #e2e3e5;
  --bs-table-striped-bg: #d7d8da;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #cbccce;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #d1d2d4;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #cbccce;
}

.table-success {
  --bs-table-bg: #d1e7dd;
  --bs-table-striped-bg: #c7dbd2;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #bcd0c7;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #c1d6cc;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #bcd0c7;
}

.table-info {
  --bs-table-bg: #cff4fc;
  --bs-table-striped-bg: #c5e8ef;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #badce3;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #bfe2e9;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #badce3;
}

.table-warning {
  --bs-table-bg: #fff3cd;
  --bs-table-striped-bg: #f2e7c3;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #e6dbb9;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #ece1be;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #e6dbb9;
}

.table-danger {
  --bs-table-bg: #f8d7da;
  --bs-table-striped-bg: #eccccf;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #dfc2c4;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #e5c7ca;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #dfc2c4;
}

.table-light {
  --bs-table-bg: #f8f9fa;
  --bs-table-striped-bg: #ecedee;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #dfe0e1;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #e5e6e7;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #dfe0e1;
}

.table-dark {
  --bs-table-bg: #212529;
  --bs-table-striped-bg: #2c3034;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: #373b3e;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #323539;
  --bs-table-hover-color: #fff;
  color: #fff;
  border-color: #373b3e;
}

.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}

@media (max-width: 767.98px) {
  .table-responsive-md {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}

@media (max-width: 991.98px) {
  .table-responsive-lg {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}

@media (max-width: 1399.98px) {
  .table-responsive-xxl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}

.form-label {
  margin-bottom: 0.5rem;
}

.col-form-label {
  padding-top: calc(1.125rem + 1px);
  padding-bottom: calc(1.125rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1;
}

.col-form-label-lg {
  padding-top: calc(0.94rem + 1px);
  padding-bottom: calc(0.94rem + 1px);
  font-size: 1.25rem;
}

.col-form-label-sm {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 0.875rem;
}

.form-text {
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #6c757d;
}

.form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
.tt-query,
.tt-hint {
  display: block;
  width: 100%;
  padding: 1.125rem 1.375rem;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1;
  color: #e9e6e6;
  background-color: #2b2e4c;
  background-clip: padding-box;
  border: 1px solid <?php echo $settings['theme']; ?>;
  appearance: none;
  border-radius: 2px;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text],
  .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
  .tt-query,
  .tt-hint {
    transition: none;
  }
}

.form-control[type="file"], .asColorPicker-input[type="file"], .dataTables_wrapper select[type="file"], .jsgrid .jsgrid-table .jsgrid-filter-row input[type="file"][type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select[type="file"], .jsgrid .jsgrid-table .jsgrid-filter-row input[type="file"][type=number], .select2-container--default .select2-selection--single[type="file"], .select2-container--default .select2-selection--single .select2-search__field[type="file"], .typeahead[type="file"],
.tt-query[type="file"],
.tt-hint[type="file"] {
  overflow: hidden;
}

.form-control[type="file"]:not(:disabled):not([readonly]), .asColorPicker-input[type="file"]:not(:disabled):not([readonly]), .dataTables_wrapper select[type="file"]:not(:disabled):not([readonly]), .jsgrid .jsgrid-table .jsgrid-filter-row input[type="file"]:not(:disabled):not([readonly])[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select[type="file"]:not(:disabled):not([readonly]), .jsgrid .jsgrid-table .jsgrid-filter-row input[type="file"]:not(:disabled):not([readonly])[type=number], .select2-container--default .select2-selection--single[type="file"]:not(:disabled):not([readonly]), .select2-container--default .select2-selection--single .select2-search__field[type="file"]:not(:disabled):not([readonly]), .typeahead[type="file"]:not(:disabled):not([readonly]),
.tt-query[type="file"]:not(:disabled):not([readonly]),
.tt-hint[type="file"]:not(:disabled):not([readonly]) {
  cursor: pointer;
}

.form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
.tt-query:focus,
.tt-hint:focus {
  color: #e9e6e6;
  background-color: #2b2e4c;
  border-color: <?php echo $settings['theme']; ?>;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.form-control::-webkit-date-and-time-value, .asColorPicker-input::-webkit-date-and-time-value, .dataTables_wrapper select::-webkit-date-and-time-value, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-webkit-date-and-time-value,
.jsgrid .jsgrid-table .jsgrid-filter-row select::-webkit-date-and-time-value, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-webkit-date-and-time-value, .select2-container--default .select2-selection--single::-webkit-date-and-time-value, .select2-container--default .select2-selection--single .select2-search__field::-webkit-date-and-time-value, .typeahead::-webkit-date-and-time-value,
.tt-query::-webkit-date-and-time-value,
.tt-hint::-webkit-date-and-time-value {
  height: 1em;
}

.form-control::placeholder, .asColorPicker-input::placeholder, .dataTables_wrapper select::placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::placeholder,
.jsgrid .jsgrid-table .jsgrid-filter-row select::placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::placeholder, .select2-container--default .select2-selection--single::placeholder, .select2-container--default .select2-selection--single .select2-search__field::placeholder, .typeahead::placeholder,
.tt-query::placeholder,
.tt-hint::placeholder {
  color: #aaa7a7;
  opacity: 1;
}

.form-control:disabled, .asColorPicker-input:disabled, .dataTables_wrapper select:disabled, .jsgrid .jsgrid-table .jsgrid-filter-row input:disabled[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select:disabled, .jsgrid .jsgrid-table .jsgrid-filter-row input:disabled[type=number], .select2-container--default .select2-selection--single:disabled, .select2-container--default .select2-selection--single .select2-search__field:disabled, .typeahead:disabled,
.tt-query:disabled,
.tt-hint:disabled, .form-control[readonly], .asColorPicker-input[readonly], .dataTables_wrapper select[readonly], .jsgrid .jsgrid-table .jsgrid-filter-row input[readonly][type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select[readonly], .jsgrid .jsgrid-table .jsgrid-filter-row input[readonly][type=number], .select2-container--default .select2-selection--single[readonly], .select2-container--default .select2-selection--single .select2-search__field[readonly], .typeahead[readonly],
.tt-query[readonly],
.tt-hint[readonly] {
  background-color: #e9ecef;
  opacity: 1;
}

.form-control::file-selector-button, .asColorPicker-input::file-selector-button, .dataTables_wrapper select::file-selector-button, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::file-selector-button,
.jsgrid .jsgrid-table .jsgrid-filter-row select::file-selector-button, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::file-selector-button, .select2-container--default .select2-selection--single::file-selector-button, .select2-container--default .select2-selection--single .select2-search__field::file-selector-button, .typeahead::file-selector-button,
.tt-query::file-selector-button,
.tt-hint::file-selector-button {
  padding: 1.125rem 1.375rem;
  margin: -1.125rem -1.375rem;
  margin-inline-end: 1.375rem;
  color: #212529;
  background-color: #e9ecef;
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 1px;
  border-radius: 0;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-control::file-selector-button, .asColorPicker-input::file-selector-button, .dataTables_wrapper select::file-selector-button, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::file-selector-button,
  .jsgrid .jsgrid-table .jsgrid-filter-row select::file-selector-button, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::file-selector-button, .select2-container--default .select2-selection--single::file-selector-button, .select2-container--default .select2-selection--single .select2-search__field::file-selector-button, .typeahead::file-selector-button,
  .tt-query::file-selector-button,
  .tt-hint::file-selector-button {
    transition: none;
  }
}

.form-control:hover:not(:disabled):not([readonly])::file-selector-button, .asColorPicker-input:hover:not(:disabled):not([readonly])::file-selector-button, .dataTables_wrapper select:hover:not(:disabled):not([readonly])::file-selector-button, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:hover:not(:disabled):not([readonly])::file-selector-button,
.jsgrid .jsgrid-table .jsgrid-filter-row select:hover:not(:disabled):not([readonly])::file-selector-button, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:hover:not(:disabled):not([readonly])::file-selector-button, .select2-container--default .select2-selection--single:hover:not(:disabled):not([readonly])::file-selector-button, .select2-container--default .select2-selection--single .select2-search__field:hover:not(:disabled):not([readonly])::file-selector-button, .typeahead:hover:not(:disabled):not([readonly])::file-selector-button,
.tt-query:hover:not(:disabled):not([readonly])::file-selector-button,
.tt-hint:hover:not(:disabled):not([readonly])::file-selector-button {
  background-color: #dde0e3;
}

.form-control::-webkit-file-upload-button, .asColorPicker-input::-webkit-file-upload-button, .dataTables_wrapper select::-webkit-file-upload-button, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-webkit-file-upload-button,
.jsgrid .jsgrid-table .jsgrid-filter-row select::-webkit-file-upload-button, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-webkit-file-upload-button, .select2-container--default .select2-selection--single::-webkit-file-upload-button, .select2-container--default .select2-selection--single .select2-search__field::-webkit-file-upload-button, .typeahead::-webkit-file-upload-button,
.tt-query::-webkit-file-upload-button,
.tt-hint::-webkit-file-upload-button {
  padding: 1.125rem 1.375rem;
  margin: -1.125rem -1.375rem;
  margin-inline-end: 1.375rem;
  color: #212529;
  background-color: #e9ecef;
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 1px;
  border-radius: 0;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-control::-webkit-file-upload-button, .asColorPicker-input::-webkit-file-upload-button, .dataTables_wrapper select::-webkit-file-upload-button, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-webkit-file-upload-button,
  .jsgrid .jsgrid-table .jsgrid-filter-row select::-webkit-file-upload-button, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-webkit-file-upload-button, .select2-container--default .select2-selection--single::-webkit-file-upload-button, .select2-container--default .select2-selection--single .select2-search__field::-webkit-file-upload-button, .typeahead::-webkit-file-upload-button,
  .tt-query::-webkit-file-upload-button,
  .tt-hint::-webkit-file-upload-button {
    transition: none;
  }
}

.form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button, .asColorPicker-input:hover:not(:disabled):not([readonly])::-webkit-file-upload-button, .dataTables_wrapper select:hover:not(:disabled):not([readonly])::-webkit-file-upload-button, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:hover:not(:disabled):not([readonly])::-webkit-file-upload-button,
.jsgrid .jsgrid-table .jsgrid-filter-row select:hover:not(:disabled):not([readonly])::-webkit-file-upload-button, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:hover:not(:disabled):not([readonly])::-webkit-file-upload-button, .select2-container--default .select2-selection--single:hover:not(:disabled):not([readonly])::-webkit-file-upload-button, .select2-container--default .select2-selection--single .select2-search__field:hover:not(:disabled):not([readonly])::-webkit-file-upload-button, .typeahead:hover:not(:disabled):not([readonly])::-webkit-file-upload-button,
.tt-query:hover:not(:disabled):not([readonly])::-webkit-file-upload-button,
.tt-hint:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
  background-color: #dde0e3;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 1.125rem 0;
  margin-bottom: 0;
  line-height: 1;
  color: #212529;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}

.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  min-height: 2.575rem;
  padding: 0.5rem 0.81rem;
  font-size: 0.875rem;
  border-radius: 0.2rem;
}

.form-control-sm::file-selector-button {
  padding: 0.5rem 0.81rem;
  margin: -0.5rem -0.81rem;
  margin-inline-end: 0.81rem;
}

.form-control-sm::-webkit-file-upload-button {
  padding: 0.5rem 0.81rem;
  margin: -0.5rem -0.81rem;
  margin-inline-end: 0.81rem;
}

.form-control-lg {
  min-height: 3.175rem;
  padding: 0.94rem 1.94rem;
  font-size: 1.25rem;
  border-radius: 0.3rem;
}

.form-control-lg::file-selector-button {
  padding: 0.94rem 1.94rem;
  margin: -0.94rem -1.94rem;
  margin-inline-end: 1.94rem;
}

.form-control-lg::-webkit-file-upload-button {
  padding: 0.94rem 1.94rem;
  margin: -0.94rem -1.94rem;
  margin-inline-end: 1.94rem;
}

textarea.form-control, textarea.asColorPicker-input, .select2-container--default textarea.select2-selection--single, .select2-container--default .select2-selection--single textarea.select2-search__field, textarea.typeahead,
textarea.tt-query,
textarea.tt-hint {
  min-height: 2.875rem;
}

textarea.form-control-sm {
  min-height: 2.575rem;
}

textarea.form-control-lg {
  min-height: 3.175rem;
}

.form-control-color {
  width: 3rem;
  height: auto;
  padding: 1.125rem;
}

.form-control-color:not(:disabled):not([readonly]) {
  cursor: pointer;
}

.form-control-color::-moz-color-swatch {
  height: 1em;
  border-radius: 2px;
}

.form-control-color::-webkit-color-swatch {
  height: 1em;
  border-radius: 2px;
}

.form-select {
  display: block;
  width: 100%;
  padding: 0.375rem 2.25rem 0.375rem 0.75rem;
  -moz-padding-start: calc(0.75rem - 3px);
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  background-color: #fff;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 0.75rem center;
  background-size: 16px 12px;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .form-select {
    transition: none;
  }
}

.form-select:focus {
  border-color: #86b7fe;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.form-select[multiple], .form-select[size]:not([size="1"]) {
  padding-right: 0.75rem;
  background-image: none;
}

.form-select:disabled {
  background-color: #e9ecef;
}

.form-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #212529;
}

.form-select-sm {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.5rem;
  font-size: 0.875rem;
}

.form-select-lg {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1rem;
  font-size: 1.25rem;
}

.form-check {
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5em;
  margin-bottom: 0.125rem;
}

.form-check .form-check-input {
  float: left;
  margin-left: -1.5em;
}

.form-check-input {
  width: 1em;
  height: 1em;
  margin-top: 0.25em;
  vertical-align: top;
  background-color: #fff;
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  border: 1px solid rgba(0, 0, 0, 0.25);
  appearance: none;
  color-adjust: exact;
}

.form-check-input[type="checkbox"] {
  border-radius: 0.25em;
}

.form-check-input[type="radio"] {
  border-radius: 50%;
}

.form-check-input:active {
  filter: brightness(90%);
}

.form-check-input:focus {
  border-color: #86b7fe;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.form-check-input:checked {
  background-color: #0d6efd;
  border-color: #0d6efd;
}

.form-check-input:checked[type="checkbox"] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e");
}

.form-check-input:checked[type="radio"] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e");
}

.form-check-input[type="checkbox"]:indeterminate {
  background-color: #0d6efd;
  border-color: #0d6efd;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
}

.form-check-input:disabled {
  pointer-events: none;
  filter: none;
  opacity: 0.5;
}

.form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
  opacity: 0.5;
}

.form-switch {
  padding-left: 2.5em;
}

.form-switch .form-check-input {
  width: 2em;
  margin-left: -2.5em;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
  background-position: left center;
  border-radius: 2em;
  transition: background-position 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-switch .form-check-input {
    transition: none;
  }
}

.form-switch .form-check-input:focus {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%2386b7fe'/%3e%3c/svg%3e");
}

.form-switch .form-check-input:checked {
  background-position: right center;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}

.form-check-inline {
  display: inline-block;
  margin-right: 1rem;
}

.btn-check {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}

.btn-check[disabled] + .btn, .fc .btn-check[disabled] + button, .ajax-upload-dragdrop .btn-check[disabled] + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-check[disabled] + .swal2-styled, .wizard > .actions .btn-check[disabled] + a, .btn-check:disabled + .btn, .fc .btn-check:disabled + button, .ajax-upload-dragdrop .btn-check:disabled + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-check:disabled + .swal2-styled, .wizard > .actions .btn-check:disabled + a {
  pointer-events: none;
  filter: none;
  opacity: 0.65;
}

.form-range {
  width: 100%;
  height: 1.5rem;
  padding: 0;
  background-color: transparent;
  appearance: none;
}

.form-range:focus {
  outline: 0;
}

.form-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.form-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.form-range::-moz-focus-outer {
  border: 0;
}

.form-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: #0d6efd;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .form-range::-webkit-slider-thumb {
    transition: none;
  }
}

.form-range::-webkit-slider-thumb:active {
  background-color: #b6d4fe;
}

.form-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.form-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #0d6efd;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .form-range::-moz-range-thumb {
    transition: none;
  }
}

.form-range::-moz-range-thumb:active {
  background-color: #b6d4fe;
}

.form-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.form-range:disabled {
  pointer-events: none;
}

.form-range:disabled::-webkit-slider-thumb {
  background-color: #adb5bd;
}

.form-range:disabled::-moz-range-thumb {
  background-color: #adb5bd;
}

.form-floating {
  position: relative;
}

.form-floating > .form-control, .form-floating > .asColorPicker-input, .dataTables_wrapper .form-floating > select, .jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > select, .jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > input[type=number], .select2-container--default .form-floating > .select2-selection--single, .select2-container--default .select2-selection--single .form-floating > .select2-search__field, .form-floating > .typeahead,
.form-floating > .tt-query,
.form-floating > .tt-hint,
.form-floating > .form-select {
  height: calc(3.5rem + 2px);
  line-height: 1.25;
}

.form-floating > label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  padding: 1rem 0.75rem;
  pointer-events: none;
  border: 1px solid transparent;
  transform-origin: 0 0;
  transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-floating > label {
    transition: none;
  }
}

.form-floating > .form-control, .form-floating > .asColorPicker-input, .dataTables_wrapper .form-floating > select, .jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > select, .jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > input[type=number], .select2-container--default .form-floating > .select2-selection--single, .select2-container--default .select2-selection--single .form-floating > .select2-search__field, .form-floating > .typeahead,
.form-floating > .tt-query,
.form-floating > .tt-hint {
  padding: 1rem 0.75rem;
}

.form-floating > .form-control::placeholder, .form-floating > .asColorPicker-input::placeholder, .dataTables_wrapper .form-floating > select::placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > input[type=text]::placeholder,
.jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > select::placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > input[type=number]::placeholder, .select2-container--default .form-floating > .select2-selection--single::placeholder, .select2-container--default .select2-selection--single .form-floating > .select2-search__field::placeholder, .form-floating > .typeahead::placeholder,
.form-floating > .tt-query::placeholder,
.form-floating > .tt-hint::placeholder {
  color: transparent;
}

.form-floating > .form-control:focus, .form-floating > .asColorPicker-input:focus, .dataTables_wrapper .form-floating > select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > input:focus[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > input:focus[type=number], .select2-container--default .form-floating > .select2-selection--single:focus, .select2-container--default .select2-selection--single .form-floating > .select2-search__field:focus, .form-floating > .typeahead:focus,
.form-floating > .tt-query:focus,
.form-floating > .tt-hint:focus, .form-floating > .form-control:not(:placeholder-shown), .form-floating > .asColorPicker-input:not(:placeholder-shown), .dataTables_wrapper .form-floating > select:not(:placeholder-shown), .jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > input:not(:placeholder-shown)[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > select:not(:placeholder-shown), .jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > input:not(:placeholder-shown)[type=number], .select2-container--default .form-floating > .select2-selection--single:not(:placeholder-shown), .select2-container--default .select2-selection--single .form-floating > .select2-search__field:not(:placeholder-shown), .form-floating > .typeahead:not(:placeholder-shown),
.form-floating > .tt-query:not(:placeholder-shown),
.form-floating > .tt-hint:not(:placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}

.form-floating > .form-control:-webkit-autofill, .form-floating > .asColorPicker-input:-webkit-autofill, .dataTables_wrapper .form-floating > select:-webkit-autofill, .jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > input:-webkit-autofill[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > select:-webkit-autofill, .jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > input:-webkit-autofill[type=number], .select2-container--default .form-floating > .select2-selection--single:-webkit-autofill, .select2-container--default .select2-selection--single .form-floating > .select2-search__field:-webkit-autofill, .form-floating > .typeahead:-webkit-autofill,
.form-floating > .tt-query:-webkit-autofill,
.form-floating > .tt-hint:-webkit-autofill {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}

.form-floating > .form-select {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}

.form-floating > .form-control:focus ~ label, .form-floating > .asColorPicker-input:focus ~ label, .dataTables_wrapper .form-floating > select:focus ~ label, .jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > input:focus[type=text] ~ label, .jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > select:focus ~ label, .jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > input:focus[type=number] ~ label, .select2-container--default .form-floating > .select2-selection--single:focus ~ label, .select2-container--default .select2-selection--single .form-floating > .select2-search__field:focus ~ label, .form-floating > .typeahead:focus ~ label, .form-floating > .tt-query:focus ~ label, .form-floating > .tt-hint:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .asColorPicker-input:not(:placeholder-shown) ~ label,
.dataTables_wrapper .form-floating > select:not(:placeholder-shown) ~ label,
.jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > input:not(:placeholder-shown)[type=text] ~ label,
.jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > select:not(:placeholder-shown) ~ label,
.jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > input:not(:placeholder-shown)[type=number] ~ label,
.select2-container--default .form-floating > .select2-selection--single:not(:placeholder-shown) ~ label,
.select2-container--default .select2-selection--single .form-floating > .select2-search__field:not(:placeholder-shown) ~ label,
.form-floating > .typeahead:not(:placeholder-shown) ~ label,
.form-floating > .tt-query:not(:placeholder-shown) ~ label,
.form-floating > .tt-hint:not(:placeholder-shown) ~ label,
.form-floating > .form-select ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}

.form-floating > .form-control:-webkit-autofill ~ label, .form-floating > .asColorPicker-input:-webkit-autofill ~ label, .dataTables_wrapper .form-floating > select:-webkit-autofill ~ label, .jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > input:-webkit-autofill[type=text] ~ label, .jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > select:-webkit-autofill ~ label, .jsgrid .jsgrid-table .jsgrid-filter-row .form-floating > input:-webkit-autofill[type=number] ~ label, .select2-container--default .form-floating > .select2-selection--single:-webkit-autofill ~ label, .select2-container--default .select2-selection--single .form-floating > .select2-search__field:-webkit-autofill ~ label, .form-floating > .typeahead:-webkit-autofill ~ label, .form-floating > .tt-query:-webkit-autofill ~ label, .form-floating > .tt-hint:-webkit-autofill ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}

.input-group, .asColorPicker-wrap {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%;
}

.input-group > .form-control, .asColorPicker-wrap > .form-control, .input-group > .asColorPicker-input, .asColorPicker-wrap > .asColorPicker-input, .dataTables_wrapper .input-group > select, .dataTables_wrapper .asColorPicker-wrap > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select,
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number], .select2-container--default .input-group > .select2-selection--single, .select2-container--default .asColorPicker-wrap > .select2-selection--single, .select2-container--default .select2-selection--single .input-group > .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field, .input-group > .typeahead, .asColorPicker-wrap > .typeahead,
.input-group > .tt-query,
.asColorPicker-wrap > .tt-query,
.input-group > .tt-hint,
.asColorPicker-wrap > .tt-hint,
.input-group > .form-select,
.asColorPicker-wrap > .form-select {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
  min-width: 0;
}

.input-group > .form-control:focus, .asColorPicker-wrap > .form-control:focus, .input-group > .asColorPicker-input:focus, .asColorPicker-wrap > .asColorPicker-input:focus, .dataTables_wrapper .input-group > select:focus, .dataTables_wrapper .asColorPicker-wrap > select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input:focus[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input:focus[type=number], .select2-container--default .input-group > .select2-selection--single:focus, .select2-container--default .asColorPicker-wrap > .select2-selection--single:focus, .select2-container--default .select2-selection--single .input-group > .select2-search__field:focus, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field:focus, .input-group > .typeahead:focus, .asColorPicker-wrap > .typeahead:focus,
.input-group > .tt-query:focus,
.asColorPicker-wrap > .tt-query:focus,
.input-group > .tt-hint:focus,
.asColorPicker-wrap > .tt-hint:focus,
.input-group > .form-select:focus,
.asColorPicker-wrap > .form-select:focus {
  z-index: 3;
}

.input-group .btn, .asColorPicker-wrap .btn, .input-group .fc button, .fc .input-group button, .asColorPicker-wrap .fc button, .fc .asColorPicker-wrap button, .input-group .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .input-group .ajax-file-upload, .asColorPicker-wrap .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .asColorPicker-wrap .ajax-file-upload, .input-group .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .input-group .swal2-styled, .asColorPicker-wrap .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .asColorPicker-wrap .swal2-styled, .input-group .wizard > .actions a, .wizard > .actions .input-group a, .asColorPicker-wrap .wizard > .actions a, .wizard > .actions .asColorPicker-wrap a {
  position: relative;
  z-index: 2;
}

.input-group .btn:focus, .asColorPicker-wrap .btn:focus, .input-group .fc button:focus, .fc .input-group button:focus, .asColorPicker-wrap .fc button:focus, .fc .asColorPicker-wrap button:focus, .input-group .ajax-upload-dragdrop .ajax-file-upload:focus, .ajax-upload-dragdrop .input-group .ajax-file-upload:focus, .asColorPicker-wrap .ajax-upload-dragdrop .ajax-file-upload:focus, .ajax-upload-dragdrop .asColorPicker-wrap .ajax-file-upload:focus, .input-group .swal2-modal .swal2-buttonswrapper .swal2-styled:focus, .swal2-modal .swal2-buttonswrapper .input-group .swal2-styled:focus, .asColorPicker-wrap .swal2-modal .swal2-buttonswrapper .swal2-styled:focus, .swal2-modal .swal2-buttonswrapper .asColorPicker-wrap .swal2-styled:focus, .input-group .wizard > .actions a:focus, .wizard > .actions .input-group a:focus, .asColorPicker-wrap .wizard > .actions a:focus, .wizard > .actions .asColorPicker-wrap a:focus {
  z-index: 3;
}

.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.375rem 0.75rem;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1;
  color: #212529;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 2px;
}

.input-group-lg > .form-control, .input-group-lg > .asColorPicker-input, .dataTables_wrapper .input-group-lg > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > input[type=number], .select2-container--default .input-group-lg > .select2-selection--single, .select2-container--default .select2-selection--single .input-group-lg > .select2-search__field, .input-group-lg > .typeahead,
.input-group-lg > .tt-query,
.input-group-lg > .tt-hint,
.input-group-lg > .form-select,
.input-group-lg > .input-group-text,
.input-group-lg > .btn,
.fc .input-group-lg > button,
.ajax-upload-dragdrop .input-group-lg > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .input-group-lg > .swal2-styled,
.wizard > .actions .input-group-lg > a {
  padding: 0.94rem 1.94rem;
  font-size: 1.25rem;
  border-radius: 0.3rem;
}

.input-group-sm > .form-control, .input-group-sm > .asColorPicker-input, .dataTables_wrapper .input-group-sm > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > input[type=number], .select2-container--default .input-group-sm > .select2-selection--single, .select2-container--default .select2-selection--single .input-group-sm > .select2-search__field, .input-group-sm > .typeahead,
.input-group-sm > .tt-query,
.input-group-sm > .tt-hint,
.input-group-sm > .form-select,
.input-group-sm > .input-group-text,
.input-group-sm > .btn,
.fc .input-group-sm > button,
.ajax-upload-dragdrop .input-group-sm > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .input-group-sm > .swal2-styled,
.wizard > .actions .input-group-sm > a {
  padding: 0.5rem 0.81rem;
  font-size: 0.875rem;
  border-radius: 0.2rem;
}

.input-group-lg > .form-select,
.input-group-sm > .form-select {
  padding-right: 3rem;
}

.input-group:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu), .asColorPicker-wrap:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),
.input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n + 3),
.asColorPicker-wrap:not(.has-validation) > .dropdown-toggle:nth-last-child(n + 3) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group.has-validation > :nth-last-child(n + 3):not(.dropdown-toggle):not(.dropdown-menu), .has-validation.asColorPicker-wrap > :nth-last-child(n + 3):not(.dropdown-toggle):not(.dropdown-menu),
.input-group.has-validation > .dropdown-toggle:nth-last-child(n + 4),
.has-validation.asColorPicker-wrap > .dropdown-toggle:nth-last-child(n + 4) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback), .asColorPicker-wrap > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: -1px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #198754;
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  color: #fff;
  background-color: rgba(25, 135, 84, 0.9);
  border-radius: 0.25rem;
}

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-control:valid, .was-validated .asColorPicker-input:valid, .was-validated .dataTables_wrapper select:valid, .dataTables_wrapper .was-validated select:valid, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:valid[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:valid[type=text],
.was-validated .jsgrid .jsgrid-table .jsgrid-filter-row select:valid, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:valid, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:valid[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:valid[type=number], .was-validated .select2-container--default .select2-selection--single:valid, .select2-container--default .was-validated .select2-selection--single:valid, .was-validated .select2-container--default .select2-selection--single .select2-search__field:valid, .select2-container--default .select2-selection--single .was-validated .select2-search__field:valid, .was-validated .typeahead:valid,
.was-validated .tt-query:valid,
.was-validated .tt-hint:valid, .form-control.is-valid, .is-valid.asColorPicker-input, .dataTables_wrapper select.is-valid, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select.is-valid, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=number], .select2-container--default .is-valid.select2-selection--single, .select2-container--default .select2-selection--single .is-valid.select2-search__field, .is-valid.typeahead,
.is-valid.tt-query,
.is-valid.tt-hint {
  border-color: #198754;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-control:valid:focus, .was-validated .asColorPicker-input:valid:focus, .was-validated .dataTables_wrapper select:valid:focus, .dataTables_wrapper .was-validated select:valid:focus, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:valid:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:valid:focus[type=text],
.was-validated .jsgrid .jsgrid-table .jsgrid-filter-row select:valid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:valid:focus, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:valid:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:valid:focus[type=number], .was-validated .select2-container--default .select2-selection--single:valid:focus, .select2-container--default .was-validated .select2-selection--single:valid:focus, .was-validated .select2-container--default .select2-selection--single .select2-search__field:valid:focus, .select2-container--default .select2-selection--single .was-validated .select2-search__field:valid:focus, .was-validated .typeahead:valid:focus,
.was-validated .tt-query:valid:focus,
.was-validated .tt-hint:valid:focus, .form-control.is-valid:focus, .is-valid.asColorPicker-input:focus, .dataTables_wrapper select.is-valid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid:focus[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select.is-valid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid:focus[type=number], .select2-container--default .is-valid.select2-selection--single:focus, .select2-container--default .select2-selection--single .is-valid.select2-search__field:focus, .is-valid.typeahead:focus,
.is-valid.tt-query:focus,
.is-valid.tt-hint:focus {
  border-color: #198754;
  box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}

.was-validated textarea.form-control:valid, .was-validated textarea.asColorPicker-input:valid, .was-validated .select2-container--default textarea.select2-selection--single:valid, .select2-container--default .was-validated textarea.select2-selection--single:valid, .was-validated .select2-container--default .select2-selection--single textarea.select2-search__field:valid, .select2-container--default .select2-selection--single .was-validated textarea.select2-search__field:valid, .was-validated textarea.typeahead:valid,
.was-validated textarea.tt-query:valid,
.was-validated textarea.tt-hint:valid, textarea.form-control.is-valid, textarea.is-valid.asColorPicker-input, .select2-container--default textarea.is-valid.select2-selection--single, .select2-container--default .select2-selection--single textarea.is-valid.select2-search__field, textarea.is-valid.typeahead,
textarea.is-valid.tt-query,
textarea.is-valid.tt-hint {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .form-select:valid, .form-select.is-valid {
  border-color: #198754;
}

.was-validated .form-select:valid:not([multiple]):not([size]), .was-validated .form-select:valid:not([multiple])[size="1"], .form-select.is-valid:not([multiple]):not([size]), .form-select.is-valid:not([multiple])[size="1"] {
  padding-right: 4.125rem;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-position: right 0.75rem center, center right 2.25rem;
  background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-select:valid:focus, .form-select.is-valid:focus {
  border-color: #198754;
  box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}

.was-validated .form-check-input:valid, .form-check-input.is-valid {
  border-color: #198754;
}

.was-validated .form-check-input:valid:checked, .form-check-input.is-valid:checked {
  background-color: #198754;
}

.was-validated .form-check-input:valid:focus, .form-check-input.is-valid:focus {
  box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #198754;
}

.form-check-inline .form-check-input ~ .valid-feedback {
  margin-left: .5em;
}

.was-validated .input-group .form-control:valid, .was-validated .asColorPicker-wrap .form-control:valid, .was-validated .input-group .asColorPicker-input:valid, .was-validated .asColorPicker-wrap .asColorPicker-input:valid, .was-validated .input-group .dataTables_wrapper select:valid, .dataTables_wrapper .was-validated .input-group select:valid, .was-validated .asColorPicker-wrap .dataTables_wrapper select:valid, .dataTables_wrapper .was-validated .asColorPicker-wrap select:valid, .was-validated .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:valid[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .input-group input:valid[type=text], .was-validated .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:valid[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .asColorPicker-wrap input:valid[type=text],
.was-validated .input-group .jsgrid .jsgrid-table .jsgrid-filter-row select:valid, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .input-group select:valid,
.was-validated .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select:valid, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .asColorPicker-wrap select:valid, .was-validated .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:valid[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .input-group input:valid[type=number], .was-validated .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:valid[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .asColorPicker-wrap input:valid[type=number], .was-validated .input-group .select2-container--default .select2-selection--single:valid, .select2-container--default .was-validated .input-group .select2-selection--single:valid, .was-validated .asColorPicker-wrap .select2-container--default .select2-selection--single:valid, .select2-container--default .was-validated .asColorPicker-wrap .select2-selection--single:valid, .was-validated .input-group .select2-container--default .select2-selection--single .select2-search__field:valid, .select2-container--default .select2-selection--single .was-validated .input-group .select2-search__field:valid, .was-validated .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:valid, .select2-container--default .select2-selection--single .was-validated .asColorPicker-wrap .select2-search__field:valid, .was-validated .input-group .typeahead:valid, .was-validated .asColorPicker-wrap .typeahead:valid,
.was-validated .input-group .tt-query:valid,
.was-validated .asColorPicker-wrap .tt-query:valid,
.was-validated .input-group .tt-hint:valid,
.was-validated .asColorPicker-wrap .tt-hint:valid, .input-group .form-control.is-valid, .asColorPicker-wrap .form-control.is-valid, .input-group .is-valid.asColorPicker-input, .asColorPicker-wrap .is-valid.asColorPicker-input, .input-group .dataTables_wrapper select.is-valid, .dataTables_wrapper .input-group select.is-valid, .asColorPicker-wrap .dataTables_wrapper select.is-valid, .dataTables_wrapper .asColorPicker-wrap select.is-valid, .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group input.is-valid[type=text], .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap input.is-valid[type=text],
.input-group .jsgrid .jsgrid-table .jsgrid-filter-row select.is-valid, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group select.is-valid,
.asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select.is-valid, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap select.is-valid, .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group input.is-valid[type=number], .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap input.is-valid[type=number], .input-group .select2-container--default .is-valid.select2-selection--single, .select2-container--default .input-group .is-valid.select2-selection--single, .asColorPicker-wrap .select2-container--default .is-valid.select2-selection--single, .select2-container--default .asColorPicker-wrap .is-valid.select2-selection--single, .input-group .select2-container--default .select2-selection--single .is-valid.select2-search__field, .select2-container--default .select2-selection--single .input-group .is-valid.select2-search__field, .asColorPicker-wrap .select2-container--default .select2-selection--single .is-valid.select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap .is-valid.select2-search__field, .input-group .is-valid.typeahead, .asColorPicker-wrap .is-valid.typeahead,
.input-group .is-valid.tt-query,
.asColorPicker-wrap .is-valid.tt-query,
.input-group .is-valid.tt-hint,
.asColorPicker-wrap .is-valid.tt-hint, .was-validated .input-group .form-select:valid, .was-validated .asColorPicker-wrap .form-select:valid,
.input-group .form-select.is-valid,
.asColorPicker-wrap .form-select.is-valid {
  z-index: 1;
}

.was-validated .input-group .form-control:valid:focus, .was-validated .asColorPicker-wrap .form-control:valid:focus, .was-validated .input-group .asColorPicker-input:valid:focus, .was-validated .asColorPicker-wrap .asColorPicker-input:valid:focus, .was-validated .input-group .dataTables_wrapper select:valid:focus, .dataTables_wrapper .was-validated .input-group select:valid:focus, .was-validated .asColorPicker-wrap .dataTables_wrapper select:valid:focus, .dataTables_wrapper .was-validated .asColorPicker-wrap select:valid:focus, .was-validated .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:valid:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .input-group input:valid:focus[type=text], .was-validated .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:valid:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .asColorPicker-wrap input:valid:focus[type=text],
.was-validated .input-group .jsgrid .jsgrid-table .jsgrid-filter-row select:valid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .input-group select:valid:focus,
.was-validated .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select:valid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .asColorPicker-wrap select:valid:focus, .was-validated .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:valid:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .input-group input:valid:focus[type=number], .was-validated .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:valid:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .asColorPicker-wrap input:valid:focus[type=number], .was-validated .input-group .select2-container--default .select2-selection--single:valid:focus, .select2-container--default .was-validated .input-group .select2-selection--single:valid:focus, .was-validated .asColorPicker-wrap .select2-container--default .select2-selection--single:valid:focus, .select2-container--default .was-validated .asColorPicker-wrap .select2-selection--single:valid:focus, .was-validated .input-group .select2-container--default .select2-selection--single .select2-search__field:valid:focus, .select2-container--default .select2-selection--single .was-validated .input-group .select2-search__field:valid:focus, .was-validated .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:valid:focus, .select2-container--default .select2-selection--single .was-validated .asColorPicker-wrap .select2-search__field:valid:focus, .was-validated .input-group .typeahead:valid:focus, .was-validated .asColorPicker-wrap .typeahead:valid:focus,
.was-validated .input-group .tt-query:valid:focus,
.was-validated .asColorPicker-wrap .tt-query:valid:focus,
.was-validated .input-group .tt-hint:valid:focus,
.was-validated .asColorPicker-wrap .tt-hint:valid:focus, .input-group .form-control.is-valid:focus, .asColorPicker-wrap .form-control.is-valid:focus, .input-group .is-valid.asColorPicker-input:focus, .asColorPicker-wrap .is-valid.asColorPicker-input:focus, .input-group .dataTables_wrapper select.is-valid:focus, .dataTables_wrapper .input-group select.is-valid:focus, .asColorPicker-wrap .dataTables_wrapper select.is-valid:focus, .dataTables_wrapper .asColorPicker-wrap select.is-valid:focus, .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group input.is-valid:focus[type=text], .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap input.is-valid:focus[type=text],
.input-group .jsgrid .jsgrid-table .jsgrid-filter-row select.is-valid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group select.is-valid:focus,
.asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select.is-valid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap select.is-valid:focus, .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group input.is-valid:focus[type=number], .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap input.is-valid:focus[type=number], .input-group .select2-container--default .is-valid.select2-selection--single:focus, .select2-container--default .input-group .is-valid.select2-selection--single:focus, .asColorPicker-wrap .select2-container--default .is-valid.select2-selection--single:focus, .select2-container--default .asColorPicker-wrap .is-valid.select2-selection--single:focus, .input-group .select2-container--default .select2-selection--single .is-valid.select2-search__field:focus, .select2-container--default .select2-selection--single .input-group .is-valid.select2-search__field:focus, .asColorPicker-wrap .select2-container--default .select2-selection--single .is-valid.select2-search__field:focus, .select2-container--default .select2-selection--single .asColorPicker-wrap .is-valid.select2-search__field:focus, .input-group .is-valid.typeahead:focus, .asColorPicker-wrap .is-valid.typeahead:focus,
.input-group .is-valid.tt-query:focus,
.asColorPicker-wrap .is-valid.tt-query:focus,
.input-group .is-valid.tt-hint:focus,
.asColorPicker-wrap .is-valid.tt-hint:focus, .was-validated .input-group .form-select:valid:focus, .was-validated .asColorPicker-wrap .form-select:valid:focus,
.input-group .form-select.is-valid:focus,
.asColorPicker-wrap .form-select.is-valid:focus {
  z-index: 3;
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #dc3545;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  color: #fff;
  background-color: rgba(220, 53, 69, 0.9);
  border-radius: 0.25rem;
}

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-control:invalid, .was-validated .asColorPicker-input:invalid, .was-validated .dataTables_wrapper select:invalid, .dataTables_wrapper .was-validated select:invalid, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:invalid[type=text],
.was-validated .jsgrid .jsgrid-table .jsgrid-filter-row select:invalid, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:invalid, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:invalid[type=number], .was-validated .select2-container--default .select2-selection--single:invalid, .select2-container--default .was-validated .select2-selection--single:invalid, .was-validated .select2-container--default .select2-selection--single .select2-search__field:invalid, .select2-container--default .select2-selection--single .was-validated .select2-search__field:invalid, .was-validated .typeahead:invalid,
.was-validated .tt-query:invalid,
.was-validated .tt-hint:invalid, .form-control.is-invalid, .is-invalid.asColorPicker-input, .dataTables_wrapper select.is-invalid, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select.is-invalid, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=number], .select2-container--default .is-invalid.select2-selection--single, .select2-container--default .select2-selection--single .is-invalid.select2-search__field, .is-invalid.typeahead,
.is-invalid.tt-query,
.is-invalid.tt-hint {
  border-color: #dc3545;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-control:invalid:focus, .was-validated .asColorPicker-input:invalid:focus, .was-validated .dataTables_wrapper select:invalid:focus, .dataTables_wrapper .was-validated select:invalid:focus, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:invalid:focus[type=text],
.was-validated .jsgrid .jsgrid-table .jsgrid-filter-row select:invalid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:invalid:focus, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:invalid:focus[type=number], .was-validated .select2-container--default .select2-selection--single:invalid:focus, .select2-container--default .was-validated .select2-selection--single:invalid:focus, .was-validated .select2-container--default .select2-selection--single .select2-search__field:invalid:focus, .select2-container--default .select2-selection--single .was-validated .select2-search__field:invalid:focus, .was-validated .typeahead:invalid:focus,
.was-validated .tt-query:invalid:focus,
.was-validated .tt-hint:invalid:focus, .form-control.is-invalid:focus, .is-invalid.asColorPicker-input:focus, .dataTables_wrapper select.is-invalid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid:focus[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select.is-invalid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid:focus[type=number], .select2-container--default .is-invalid.select2-selection--single:focus, .select2-container--default .select2-selection--single .is-invalid.select2-search__field:focus, .is-invalid.typeahead:focus,
.is-invalid.tt-query:focus,
.is-invalid.tt-hint:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}

.was-validated textarea.form-control:invalid, .was-validated textarea.asColorPicker-input:invalid, .was-validated .select2-container--default textarea.select2-selection--single:invalid, .select2-container--default .was-validated textarea.select2-selection--single:invalid, .was-validated .select2-container--default .select2-selection--single textarea.select2-search__field:invalid, .select2-container--default .select2-selection--single .was-validated textarea.select2-search__field:invalid, .was-validated textarea.typeahead:invalid,
.was-validated textarea.tt-query:invalid,
.was-validated textarea.tt-hint:invalid, textarea.form-control.is-invalid, textarea.is-invalid.asColorPicker-input, .select2-container--default textarea.is-invalid.select2-selection--single, .select2-container--default .select2-selection--single textarea.is-invalid.select2-search__field, textarea.is-invalid.typeahead,
textarea.is-invalid.tt-query,
textarea.is-invalid.tt-hint {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .form-select:invalid, .form-select.is-invalid {
  border-color: #dc3545;
}

.was-validated .form-select:invalid:not([multiple]):not([size]), .was-validated .form-select:invalid:not([multiple])[size="1"], .form-select.is-invalid:not([multiple]):not([size]), .form-select.is-invalid:not([multiple])[size="1"] {
  padding-right: 4.125rem;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
  background-position: right 0.75rem center, center right 2.25rem;
  background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-select:invalid:focus, .form-select.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}

.was-validated .form-check-input:invalid, .form-check-input.is-invalid {
  border-color: #dc3545;
}

.was-validated .form-check-input:invalid:checked, .form-check-input.is-invalid:checked {
  background-color: #dc3545;
}

.was-validated .form-check-input:invalid:focus, .form-check-input.is-invalid:focus {
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #dc3545;
}

.form-check-inline .form-check-input ~ .invalid-feedback {
  margin-left: .5em;
}

.was-validated .input-group .form-control:invalid, .was-validated .asColorPicker-wrap .form-control:invalid, .was-validated .input-group .asColorPicker-input:invalid, .was-validated .asColorPicker-wrap .asColorPicker-input:invalid, .was-validated .input-group .dataTables_wrapper select:invalid, .dataTables_wrapper .was-validated .input-group select:invalid, .was-validated .asColorPicker-wrap .dataTables_wrapper select:invalid, .dataTables_wrapper .was-validated .asColorPicker-wrap select:invalid, .was-validated .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .input-group input:invalid[type=text], .was-validated .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .asColorPicker-wrap input:invalid[type=text],
.was-validated .input-group .jsgrid .jsgrid-table .jsgrid-filter-row select:invalid, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .input-group select:invalid,
.was-validated .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select:invalid, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .asColorPicker-wrap select:invalid, .was-validated .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .input-group input:invalid[type=number], .was-validated .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .asColorPicker-wrap input:invalid[type=number], .was-validated .input-group .select2-container--default .select2-selection--single:invalid, .select2-container--default .was-validated .input-group .select2-selection--single:invalid, .was-validated .asColorPicker-wrap .select2-container--default .select2-selection--single:invalid, .select2-container--default .was-validated .asColorPicker-wrap .select2-selection--single:invalid, .was-validated .input-group .select2-container--default .select2-selection--single .select2-search__field:invalid, .select2-container--default .select2-selection--single .was-validated .input-group .select2-search__field:invalid, .was-validated .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:invalid, .select2-container--default .select2-selection--single .was-validated .asColorPicker-wrap .select2-search__field:invalid, .was-validated .input-group .typeahead:invalid, .was-validated .asColorPicker-wrap .typeahead:invalid,
.was-validated .input-group .tt-query:invalid,
.was-validated .asColorPicker-wrap .tt-query:invalid,
.was-validated .input-group .tt-hint:invalid,
.was-validated .asColorPicker-wrap .tt-hint:invalid, .input-group .form-control.is-invalid, .asColorPicker-wrap .form-control.is-invalid, .input-group .is-invalid.asColorPicker-input, .asColorPicker-wrap .is-invalid.asColorPicker-input, .input-group .dataTables_wrapper select.is-invalid, .dataTables_wrapper .input-group select.is-invalid, .asColorPicker-wrap .dataTables_wrapper select.is-invalid, .dataTables_wrapper .asColorPicker-wrap select.is-invalid, .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group input.is-invalid[type=text], .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap input.is-invalid[type=text],
.input-group .jsgrid .jsgrid-table .jsgrid-filter-row select.is-invalid, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group select.is-invalid,
.asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select.is-invalid, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap select.is-invalid, .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group input.is-invalid[type=number], .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap input.is-invalid[type=number], .input-group .select2-container--default .is-invalid.select2-selection--single, .select2-container--default .input-group .is-invalid.select2-selection--single, .asColorPicker-wrap .select2-container--default .is-invalid.select2-selection--single, .select2-container--default .asColorPicker-wrap .is-invalid.select2-selection--single, .input-group .select2-container--default .select2-selection--single .is-invalid.select2-search__field, .select2-container--default .select2-selection--single .input-group .is-invalid.select2-search__field, .asColorPicker-wrap .select2-container--default .select2-selection--single .is-invalid.select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap .is-invalid.select2-search__field, .input-group .is-invalid.typeahead, .asColorPicker-wrap .is-invalid.typeahead,
.input-group .is-invalid.tt-query,
.asColorPicker-wrap .is-invalid.tt-query,
.input-group .is-invalid.tt-hint,
.asColorPicker-wrap .is-invalid.tt-hint, .was-validated .input-group .form-select:invalid, .was-validated .asColorPicker-wrap .form-select:invalid,
.input-group .form-select.is-invalid,
.asColorPicker-wrap .form-select.is-invalid {
  z-index: 2;
}

.was-validated .input-group .form-control:invalid:focus, .was-validated .asColorPicker-wrap .form-control:invalid:focus, .was-validated .input-group .asColorPicker-input:invalid:focus, .was-validated .asColorPicker-wrap .asColorPicker-input:invalid:focus, .was-validated .input-group .dataTables_wrapper select:invalid:focus, .dataTables_wrapper .was-validated .input-group select:invalid:focus, .was-validated .asColorPicker-wrap .dataTables_wrapper select:invalid:focus, .dataTables_wrapper .was-validated .asColorPicker-wrap select:invalid:focus, .was-validated .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .input-group input:invalid:focus[type=text], .was-validated .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .asColorPicker-wrap input:invalid:focus[type=text],
.was-validated .input-group .jsgrid .jsgrid-table .jsgrid-filter-row select:invalid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .input-group select:invalid:focus,
.was-validated .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select:invalid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .asColorPicker-wrap select:invalid:focus, .was-validated .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .input-group input:invalid:focus[type=number], .was-validated .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated .asColorPicker-wrap input:invalid:focus[type=number], .was-validated .input-group .select2-container--default .select2-selection--single:invalid:focus, .select2-container--default .was-validated .input-group .select2-selection--single:invalid:focus, .was-validated .asColorPicker-wrap .select2-container--default .select2-selection--single:invalid:focus, .select2-container--default .was-validated .asColorPicker-wrap .select2-selection--single:invalid:focus, .was-validated .input-group .select2-container--default .select2-selection--single .select2-search__field:invalid:focus, .select2-container--default .select2-selection--single .was-validated .input-group .select2-search__field:invalid:focus, .was-validated .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:invalid:focus, .select2-container--default .select2-selection--single .was-validated .asColorPicker-wrap .select2-search__field:invalid:focus, .was-validated .input-group .typeahead:invalid:focus, .was-validated .asColorPicker-wrap .typeahead:invalid:focus,
.was-validated .input-group .tt-query:invalid:focus,
.was-validated .asColorPicker-wrap .tt-query:invalid:focus,
.was-validated .input-group .tt-hint:invalid:focus,
.was-validated .asColorPicker-wrap .tt-hint:invalid:focus, .input-group .form-control.is-invalid:focus, .asColorPicker-wrap .form-control.is-invalid:focus, .input-group .is-invalid.asColorPicker-input:focus, .asColorPicker-wrap .is-invalid.asColorPicker-input:focus, .input-group .dataTables_wrapper select.is-invalid:focus, .dataTables_wrapper .input-group select.is-invalid:focus, .asColorPicker-wrap .dataTables_wrapper select.is-invalid:focus, .dataTables_wrapper .asColorPicker-wrap select.is-invalid:focus, .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group input.is-invalid:focus[type=text], .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap input.is-invalid:focus[type=text],
.input-group .jsgrid .jsgrid-table .jsgrid-filter-row select.is-invalid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group select.is-invalid:focus,
.asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select.is-invalid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap select.is-invalid:focus, .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group input.is-invalid:focus[type=number], .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap input.is-invalid:focus[type=number], .input-group .select2-container--default .is-invalid.select2-selection--single:focus, .select2-container--default .input-group .is-invalid.select2-selection--single:focus, .asColorPicker-wrap .select2-container--default .is-invalid.select2-selection--single:focus, .select2-container--default .asColorPicker-wrap .is-invalid.select2-selection--single:focus, .input-group .select2-container--default .select2-selection--single .is-invalid.select2-search__field:focus, .select2-container--default .select2-selection--single .input-group .is-invalid.select2-search__field:focus, .asColorPicker-wrap .select2-container--default .select2-selection--single .is-invalid.select2-search__field:focus, .select2-container--default .select2-selection--single .asColorPicker-wrap .is-invalid.select2-search__field:focus, .input-group .is-invalid.typeahead:focus, .asColorPicker-wrap .is-invalid.typeahead:focus,
.input-group .is-invalid.tt-query:focus,
.asColorPicker-wrap .is-invalid.tt-query:focus,
.input-group .is-invalid.tt-hint:focus,
.asColorPicker-wrap .is-invalid.tt-hint:focus, .was-validated .input-group .form-select:invalid:focus, .was-validated .asColorPicker-wrap .form-select:invalid:focus,
.input-group .form-select.is-invalid:focus,
.asColorPicker-wrap .form-select.is-invalid:focus {
  z-index: 3;
}

.btn, .fc button, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel, .wizard > .actions a {
  display: inline-block;
  font-weight: 400;
  line-height: 1;
  color: #fff;
  text-align: center;
  text-decoration: none;
  vertical-align: middle;
  cursor: pointer;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.875rem 1.5rem;
  font-size: 0.875rem;
  border-radius: 0.1875rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .btn, .fc button, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel, .wizard > .actions a {
    transition: none;
  }
}

.btn:hover, .fc button:hover, .ajax-upload-dragdrop .ajax-file-upload:hover, .swal2-modal .swal2-buttonswrapper .swal2-styled:hover, .wizard > .actions a:hover {
  color: #fff;
}

.btn-check:focus + .btn, .fc .btn-check:focus + button, .ajax-upload-dragdrop .btn-check:focus + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-check:focus + .swal2-styled, .wizard > .actions .btn-check:focus + a, .btn:focus, .fc button:focus, .ajax-upload-dragdrop .ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper .swal2-styled:focus, .wizard > .actions a:focus {
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.btn:disabled, .fc button:disabled, .ajax-upload-dragdrop .ajax-file-upload:disabled, .swal2-modal .swal2-buttonswrapper .swal2-styled:disabled, .wizard > .actions a:disabled, .btn.disabled, .fc button.disabled, .ajax-upload-dragdrop .disabled.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .disabled.swal2-styled, .wizard > .actions a.disabled,
fieldset:disabled .btn,
fieldset:disabled .fc button,
.fc fieldset:disabled button,
fieldset:disabled .ajax-upload-dragdrop .ajax-file-upload,
.ajax-upload-dragdrop fieldset:disabled .ajax-file-upload,
fieldset:disabled .swal2-modal .swal2-buttonswrapper .swal2-styled,
.swal2-modal .swal2-buttonswrapper fieldset:disabled .swal2-styled,
fieldset:disabled .wizard > .actions a,
.wizard > .actions fieldset:disabled a {
  pointer-events: none;
  opacity: 0.65;
}

.btn-primary, .wizard > .actions a {
  color: #fff;
  background-color: <?php echo $settings['theme']; ?>;
  border-color: <?php echo $settings['theme']; ?>;
}

.btn-primary:hover, .wizard > .actions a:hover {
  color: #fff;
  background-color: #403e92;
  border-color: #3c3a8a;
}

.btn-check:focus + .btn-primary, .wizard > .actions .btn-check:focus + a, .btn-primary:focus, .wizard > .actions a:focus {
  color: #fff;
  background-color: #403e92;
  border-color: #3c3a8a;
  box-shadow: 0 0 0 0.25rem rgba(102, 100, 184, 0.5);
}

.btn-check:checked + .btn-primary, .wizard > .actions .btn-check:checked + a,
.btn-check:active + .btn-primary,
.wizard > .actions .btn-check:active + a, .btn-primary:active, .wizard > .actions a:active, .btn-primary.active, .wizard > .actions a.active,
.show > .btn-primary.dropdown-toggle,
.wizard > .actions .show > a.dropdown-toggle {
  color: #fff;
  background-color: #3c3a8a;
  border-color: #383781;
}

.btn-check:checked + .btn-primary:focus, .wizard > .actions .btn-check:checked + a:focus,
.btn-check:active + .btn-primary:focus,
.wizard > .actions .btn-check:active + a:focus, .btn-primary:active:focus, .wizard > .actions a:active:focus, .btn-primary.active:focus, .wizard > .actions a.active:focus,
.show > .btn-primary.dropdown-toggle:focus,
.wizard > .actions .show > a.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(102, 100, 184, 0.5);
}

.btn-primary:disabled, .wizard > .actions a:disabled, .btn-primary.disabled, .wizard > .actions a.disabled {
  color: #fff;
  background-color: <?php echo $settings['theme']; ?>;
  border-color: <?php echo $settings['theme']; ?>;
}

.btn-secondary, .wizard > .actions .disabled a {
  color: #000;
  background-color: #a3a4a5;
  border-color: #a3a4a5;
}

.btn-secondary:hover, .wizard > .actions .disabled a:hover {
  color: #000;
  background-color: #b1b2b3;
  border-color: #acadae;
}

.btn-check:focus + .btn-secondary, .wizard > .actions .disabled .btn-check:focus + a, .btn-secondary:focus, .wizard > .actions .disabled a:focus {
  color: #000;
  background-color: #b1b2b3;
  border-color: #acadae;
  box-shadow: 0 0 0 0.25rem rgba(139, 139, 140, 0.5);
}

.btn-check:checked + .btn-secondary, .wizard > .actions .disabled .btn-check:checked + a,
.btn-check:active + .btn-secondary,
.wizard > .actions .disabled .btn-check:active + a, .btn-secondary:active, .wizard > .actions .disabled a:active, .btn-secondary.active, .wizard > .actions .disabled a.active,
.show > .btn-secondary.dropdown-toggle,
.wizard > .actions .disabled .show > a.dropdown-toggle {
  color: #000;
  background-color: #b5b6b7;
  border-color: #acadae;
}

.btn-check:checked + .btn-secondary:focus, .wizard > .actions .disabled .btn-check:checked + a:focus,
.btn-check:active + .btn-secondary:focus,
.wizard > .actions .disabled .btn-check:active + a:focus, .btn-secondary:active:focus, .wizard > .actions .disabled a:active:focus, .btn-secondary.active:focus, .wizard > .actions .disabled a.active:focus,
.show > .btn-secondary.dropdown-toggle:focus,
.wizard > .actions .disabled .show > a.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(139, 139, 140, 0.5);
}

.btn-secondary:disabled, .wizard > .actions .disabled a:disabled, .btn-secondary.disabled, .wizard > .actions .disabled a.disabled {
  color: #000;
  background-color: #a3a4a5;
  border-color: #a3a4a5;
}

.btn-success {
  color: #000;
  background-color: #57B657;
  border-color: #57B657;
}

.btn-success:hover {
  color: #000;
  background-color: #70c170;
  border-color: #68bd68;
}

.btn-check:focus + .btn-success, .btn-success:focus {
  color: #000;
  background-color: #70c170;
  border-color: #68bd68;
  box-shadow: 0 0 0 0.25rem rgba(74, 155, 74, 0.5);
}

.btn-check:checked + .btn-success,
.btn-check:active + .btn-success, .btn-success:active, .btn-success.active,
.show > .btn-success.dropdown-toggle {
  color: #000;
  background-color: #79c579;
  border-color: #68bd68;
}

.btn-check:checked + .btn-success:focus,
.btn-check:active + .btn-success:focus, .btn-success:active:focus, .btn-success.active:focus,
.show > .btn-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(74, 155, 74, 0.5);
}

.btn-success:disabled, .btn-success.disabled {
  color: #000;
  background-color: #57B657;
  border-color: #57B657;
}

.btn-info {
  color: #000;
  background-color: #248AFD;
  border-color: #248AFD;
}

.btn-info:hover {
  color: #000;
  background-color: #459cfd;
  border-color: #3a96fd;
}

.btn-check:focus + .btn-info, .btn-info:focus {
  color: #000;
  background-color: #459cfd;
  border-color: #3a96fd;
  box-shadow: 0 0 0 0.25rem rgba(31, 117, 215, 0.5);
}

.btn-check:checked + .btn-info,
.btn-check:active + .btn-info, .btn-info:active, .btn-info.active,
.show > .btn-info.dropdown-toggle {
  color: #000;
  background-color: #50a1fd;
  border-color: #3a96fd;
}

.btn-check:checked + .btn-info:focus,
.btn-check:active + .btn-info:focus, .btn-info:active:focus, .btn-info.active:focus,
.show > .btn-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(31, 117, 215, 0.5);
}

.btn-info:disabled, .btn-info.disabled {
  color: #000;
  background-color: #248AFD;
  border-color: #248AFD;
}

.btn-warning {
  color: #000;
  background-color: #FFC100;
  border-color: #FFC100;
}

.btn-warning:hover {
  color: #000;
  background-color: #ffca26;
  border-color: #ffc71a;
}

.btn-check:focus + .btn-warning, .btn-warning:focus {
  color: #000;
  background-color: #ffca26;
  border-color: #ffc71a;
  box-shadow: 0 0 0 0.25rem rgba(217, 164, 0, 0.5);
}

.btn-check:checked + .btn-warning,
.btn-check:active + .btn-warning, .btn-warning:active, .btn-warning.active,
.show > .btn-warning.dropdown-toggle {
  color: #000;
  background-color: #ffcd33;
  border-color: #ffc71a;
}

.btn-check:checked + .btn-warning:focus,
.btn-check:active + .btn-warning:focus, .btn-warning:active:focus, .btn-warning.active:focus,
.show > .btn-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(217, 164, 0, 0.5);
}

.btn-warning:disabled, .btn-warning.disabled {
  color: #000;
  background-color: #FFC100;
  border-color: #FFC100;
}

.btn-danger {
  color: #000;
  background-color: #FF4747;
  border-color: #FF4747;
}

.btn-danger:hover {
  color: #000;
  background-color: #ff6363;
  border-color: #ff5959;
}

.btn-check:focus + .btn-danger, .btn-danger:focus {
  color: #000;
  background-color: #ff6363;
  border-color: #ff5959;
  box-shadow: 0 0 0 0.25rem rgba(217, 60, 60, 0.5);
}

.btn-check:checked + .btn-danger,
.btn-check:active + .btn-danger, .btn-danger:active, .btn-danger.active,
.show > .btn-danger.dropdown-toggle {
  color: #000;
  background-color: #ff6c6c;
  border-color: #ff5959;
}

.btn-check:checked + .btn-danger:focus,
.btn-check:active + .btn-danger:focus, .btn-danger:active:focus, .btn-danger.active:focus,
.show > .btn-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(217, 60, 60, 0.5);
}

.btn-danger:disabled, .btn-danger.disabled {
  color: #000;
  background-color: #FF4747;
  border-color: #FF4747;
}

.btn-light {
  color: #000;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-light:hover {
  color: #000;
  background-color: #f9fafb;
  border-color: #f9fafb;
}

.btn-check:focus + .btn-light, .btn-light:focus {
  color: #000;
  background-color: #f9fafb;
  border-color: #f9fafb;
  box-shadow: 0 0 0 0.25rem rgba(211, 212, 213, 0.5);
}

.btn-check:checked + .btn-light,
.btn-check:active + .btn-light, .btn-light:active, .btn-light.active,
.show > .btn-light.dropdown-toggle {
  color: #000;
  background-color: #f9fafb;
  border-color: #f9fafb;
}

.btn-check:checked + .btn-light:focus,
.btn-check:active + .btn-light:focus, .btn-light:active:focus, .btn-light.active:focus,
.show > .btn-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(211, 212, 213, 0.5);
}

.btn-light:disabled, .btn-light.disabled {
  color: #000;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-dark {
  color: #fff;
  background-color: #282f3a;
  border-color: #282f3a;
}

.btn-dark:hover {
  color: #fff;
  background-color: #222831;
  border-color: #20262e;
}

.btn-check:focus + .btn-dark, .btn-dark:focus {
  color: #fff;
  background-color: #222831;
  border-color: #20262e;
  box-shadow: 0 0 0 0.25rem rgba(72, 78, 88, 0.5);
}

.btn-check:checked + .btn-dark,
.btn-check:active + .btn-dark, .btn-dark:active, .btn-dark.active,
.show > .btn-dark.dropdown-toggle {
  color: #fff;
  background-color: #20262e;
  border-color: #1e232c;
}

.btn-check:checked + .btn-dark:focus,
.btn-check:active + .btn-dark:focus, .btn-dark:active:focus, .btn-dark.active:focus,
.show > .btn-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(72, 78, 88, 0.5);
}

.btn-dark:disabled, .btn-dark.disabled {
  color: #fff;
  background-color: #282f3a;
  border-color: #282f3a;
}

.btn-outline-primary {
  color: <?php echo $settings['theme']; ?>;
  border-color: <?php echo $settings['theme']; ?>;
}

.btn-outline-primary:hover {
  color: #fff;
  background-color: <?php echo $settings['theme']; ?>;
  border-color: <?php echo $settings['theme']; ?>;
}

.btn-check:focus + .btn-outline-primary, .btn-outline-primary:focus {
  box-shadow: 0 0 0 0.25rem rgba(75, 73, 172, 0.5);
}

.btn-check:checked + .btn-outline-primary,
.btn-check:active + .btn-outline-primary, .btn-outline-primary:active, .btn-outline-primary.active, .btn-outline-primary.dropdown-toggle.show {
  color: #fff;
  background-color: <?php echo $settings['theme']; ?>;
  border-color: <?php echo $settings['theme']; ?>;
}

.btn-check:checked + .btn-outline-primary:focus,
.btn-check:active + .btn-outline-primary:focus, .btn-outline-primary:active:focus, .btn-outline-primary.active:focus, .btn-outline-primary.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(75, 73, 172, 0.5);
}

.btn-outline-primary:disabled, .btn-outline-primary.disabled {
  color: <?php echo $settings['theme']; ?>;
  background-color: transparent;
}

.btn-outline-secondary, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel {
  color: #a3a4a5;
  border-color: #a3a4a5;
}

.btn-outline-secondary:hover, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:hover {
  color: #000;
  background-color: #a3a4a5;
  border-color: #a3a4a5;
}

.btn-check:focus + .btn-outline-secondary, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn-check:focus + .editable-cancel, .btn-outline-secondary:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:focus {
  box-shadow: 0 0 0 0.25rem rgba(163, 164, 165, 0.5);
}

.btn-check:checked + .btn-outline-secondary, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn-check:checked + .editable-cancel,
.btn-check:active + .btn-outline-secondary,
.editable-container.editable-inline .editableform .control-group .editable-buttons .btn-check:active + .editable-cancel, .btn-outline-secondary:active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:active, .btn-outline-secondary.active, .editable-container.editable-inline .editableform .control-group .editable-buttons .active.editable-cancel, .btn-outline-secondary.dropdown-toggle.show, .editable-container.editable-inline .editableform .control-group .editable-buttons .dropdown-toggle.show.editable-cancel {
  color: #000;
  background-color: #a3a4a5;
  border-color: #a3a4a5;
}

.btn-check:checked + .btn-outline-secondary:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn-check:checked + .editable-cancel:focus,
.btn-check:active + .btn-outline-secondary:focus,
.editable-container.editable-inline .editableform .control-group .editable-buttons .btn-check:active + .editable-cancel:focus, .btn-outline-secondary:active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:active:focus, .btn-outline-secondary.active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .active.editable-cancel:focus, .btn-outline-secondary.dropdown-toggle.show:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .dropdown-toggle.show.editable-cancel:focus {
  box-shadow: 0 0 0 0.25rem rgba(163, 164, 165, 0.5);
}

.btn-outline-secondary:disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:disabled, .btn-outline-secondary.disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .disabled.editable-cancel {
  color: #a3a4a5;
  background-color: transparent;
}

.btn-outline-success, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit {
  color: #57B657;
  border-color: #57B657;
}

.btn-outline-success:hover, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:hover {
  color: #000;
  background-color: #57B657;
  border-color: #57B657;
}

.btn-check:focus + .btn-outline-success, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn-check:focus + .editable-submit, .btn-outline-success:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:focus {
  box-shadow: 0 0 0 0.25rem rgba(87, 182, 87, 0.5);
}

.btn-check:checked + .btn-outline-success, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn-check:checked + .editable-submit,
.btn-check:active + .btn-outline-success,
.editable-container.editable-inline .editableform .control-group .editable-buttons .btn-check:active + .editable-submit, .btn-outline-success:active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:active, .btn-outline-success.active, .editable-container.editable-inline .editableform .control-group .editable-buttons .active.editable-submit, .btn-outline-success.dropdown-toggle.show, .editable-container.editable-inline .editableform .control-group .editable-buttons .dropdown-toggle.show.editable-submit {
  color: #000;
  background-color: #57B657;
  border-color: #57B657;
}

.btn-check:checked + .btn-outline-success:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn-check:checked + .editable-submit:focus,
.btn-check:active + .btn-outline-success:focus,
.editable-container.editable-inline .editableform .control-group .editable-buttons .btn-check:active + .editable-submit:focus, .btn-outline-success:active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:active:focus, .btn-outline-success.active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .active.editable-submit:focus, .btn-outline-success.dropdown-toggle.show:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .dropdown-toggle.show.editable-submit:focus {
  box-shadow: 0 0 0 0.25rem rgba(87, 182, 87, 0.5);
}

.btn-outline-success:disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:disabled, .btn-outline-success.disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .disabled.editable-submit {
  color: #57B657;
  background-color: transparent;
}

.btn-outline-info {
  color: #248AFD;
  border-color: #248AFD;
}

.btn-outline-info:hover {
  color: #000;
  background-color: #248AFD;
  border-color: #248AFD;
}

.btn-check:focus + .btn-outline-info, .btn-outline-info:focus {
  box-shadow: 0 0 0 0.25rem rgba(36, 138, 253, 0.5);
}

.btn-check:checked + .btn-outline-info,
.btn-check:active + .btn-outline-info, .btn-outline-info:active, .btn-outline-info.active, .btn-outline-info.dropdown-toggle.show {
  color: #000;
  background-color: #248AFD;
  border-color: #248AFD;
}

.btn-check:checked + .btn-outline-info:focus,
.btn-check:active + .btn-outline-info:focus, .btn-outline-info:active:focus, .btn-outline-info.active:focus, .btn-outline-info.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(36, 138, 253, 0.5);
}

.btn-outline-info:disabled, .btn-outline-info.disabled {
  color: #248AFD;
  background-color: transparent;
}

.btn-outline-warning {
  color: #FFC100;
  border-color: #FFC100;
}

.btn-outline-warning:hover {
  color: #000;
  background-color: #FFC100;
  border-color: #FFC100;
}

.btn-check:focus + .btn-outline-warning, .btn-outline-warning:focus {
  box-shadow: 0 0 0 0.25rem rgba(255, 193, 0, 0.5);
}

.btn-check:checked + .btn-outline-warning,
.btn-check:active + .btn-outline-warning, .btn-outline-warning:active, .btn-outline-warning.active, .btn-outline-warning.dropdown-toggle.show {
  color: #000;
  background-color: #FFC100;
  border-color: #FFC100;
}

.btn-check:checked + .btn-outline-warning:focus,
.btn-check:active + .btn-outline-warning:focus, .btn-outline-warning:active:focus, .btn-outline-warning.active:focus, .btn-outline-warning.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(255, 193, 0, 0.5);
}

.btn-outline-warning:disabled, .btn-outline-warning.disabled {
  color: #FFC100;
  background-color: transparent;
}

.btn-outline-danger {
  color: #FF4747;
  border-color: #FF4747;
}

.btn-outline-danger:hover {
  color: #000;
  background-color: #FF4747;
  border-color: #FF4747;
}

.btn-check:focus + .btn-outline-danger, .btn-outline-danger:focus {
  box-shadow: 0 0 0 0.25rem rgba(255, 71, 71, 0.5);
}

.btn-check:checked + .btn-outline-danger,
.btn-check:active + .btn-outline-danger, .btn-outline-danger:active, .btn-outline-danger.active, .btn-outline-danger.dropdown-toggle.show {
  color: #000;
  background-color: #FF4747;
  border-color: #FF4747;
}

.btn-check:checked + .btn-outline-danger:focus,
.btn-check:active + .btn-outline-danger:focus, .btn-outline-danger:active:focus, .btn-outline-danger.active:focus, .btn-outline-danger.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(255, 71, 71, 0.5);
}

.btn-outline-danger:disabled, .btn-outline-danger.disabled {
  color: #FF4747;
  background-color: transparent;
}

.btn-outline-light {
  color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:hover {
  color: #000;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-check:focus + .btn-outline-light, .btn-outline-light:focus {
  box-shadow: 0 0 0 0.25rem rgba(248, 249, 250, 0.5);
}

.btn-check:checked + .btn-outline-light,
.btn-check:active + .btn-outline-light, .btn-outline-light:active, .btn-outline-light.active, .btn-outline-light.dropdown-toggle.show {
  color: #000;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-check:checked + .btn-outline-light:focus,
.btn-check:active + .btn-outline-light:focus, .btn-outline-light:active:focus, .btn-outline-light.active:focus, .btn-outline-light.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(248, 249, 250, 0.5);
}

.btn-outline-light:disabled, .btn-outline-light.disabled {
  color: #f8f9fa;
  background-color: transparent;
}

.btn-outline-dark {
  color: #282f3a;
  border-color: #282f3a;
}

.btn-outline-dark:hover {
  color: #fff;
  background-color: #282f3a;
  border-color: #282f3a;
}

.btn-check:focus + .btn-outline-dark, .btn-outline-dark:focus {
  box-shadow: 0 0 0 0.25rem rgba(40, 47, 58, 0.5);
}

.btn-check:checked + .btn-outline-dark,
.btn-check:active + .btn-outline-dark, .btn-outline-dark:active, .btn-outline-dark.active, .btn-outline-dark.dropdown-toggle.show {
  color: #fff;
  background-color: #282f3a;
  border-color: #282f3a;
}

.btn-check:checked + .btn-outline-dark:focus,
.btn-check:active + .btn-outline-dark:focus, .btn-outline-dark:active:focus, .btn-outline-dark.active:focus, .btn-outline-dark.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(40, 47, 58, 0.5);
}

.btn-outline-dark:disabled, .btn-outline-dark.disabled {
  color: #282f3a;
  background-color: transparent;
}

.btn-link {
  font-weight: 400;
  color: #0d6efd;
  text-decoration: underline;
}

.btn-link:hover {
  color: #0a58ca;
}

.btn-link:disabled, .btn-link.disabled {
  color: #6c757d;
}

.btn-lg, .btn-group-lg > .btn, .fc .btn-group-lg > button, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-lg > .swal2-styled, .wizard > .actions .btn-group-lg > a {
  padding: 1rem 3rem;
  font-size: 0.875rem;
  border-radius: 0.1875rem;
}

.btn-sm, .btn-group-sm > .btn, .fc .btn-group-sm > button, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-sm > .swal2-styled, .wizard > .actions .btn-group-sm > a, .fc button {
  padding: 0.5rem 0.81rem;
  font-size: 0.812rem;
  line-height: 1.5;
  border-radius: 0.1875rem;
}

.fade {
  transition: opacity 0.15s linear;
}

@media (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}

.fade:not(.show) {
  opacity: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}

@media (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}

.collapsing.collapse-horizontal {
  width: 0;
  height: auto;
  transition: width 0.35s ease;
}

@media (prefers-reduced-motion: reduce) {
  .collapsing.collapse-horizontal {
    transition: none;
  }
}

.dropup,
.dropend,
.dropdown,
.dropstart {
  position: relative;
}

.dropdown-toggle {
  white-space: nowrap;
}

.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}

.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  position: absolute;
  z-index: 1000;
  display: none;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #1f1e23;
  background-clip: padding-box;
  border: 1px solid #575757;
  border-radius: 0.25rem;
}

.dropdown-menu[data-bs-popper] {
  top: 100%;
  left: 0;
  margin-top: 0.125rem;
}

.dropdown-menu-start {
  --bs-position: start;
}

.dropdown-menu-start[data-bs-popper] {
  right: auto;
  left: 0;
}

.dropdown-menu-end {
  --bs-position: end;
}

.dropdown-menu-end[data-bs-popper] {
  right: 0;
  left: auto;
}

@media (min-width: 576px) {
  .dropdown-menu-sm-start {
    --bs-position: start;
  }
  .dropdown-menu-sm-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-sm-end {
    --bs-position: end;
  }
  .dropdown-menu-sm-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}

@media (min-width: 768px) {
  .dropdown-menu-md-start {
    --bs-position: start;
  }
  .dropdown-menu-md-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-md-end {
    --bs-position: end;
  }
  .dropdown-menu-md-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}

@media (min-width: 992px) {
  .dropdown-menu-lg-start {
    --bs-position: start;
  }
  .dropdown-menu-lg-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-lg-end {
    --bs-position: end;
  }
  .dropdown-menu-lg-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}

@media (min-width: 1200px) {
  .dropdown-menu-xl-start {
    --bs-position: start;
  }
  .dropdown-menu-xl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xl-end {
    --bs-position: end;
  }
  .dropdown-menu-xl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}

@media (min-width: 1400px) {
  .dropdown-menu-xxl-start {
    --bs-position: start;
  }
  .dropdown-menu-xxl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xxl-end {
    --bs-position: end;
  }
  .dropdown-menu-xxl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}

.dropup .dropdown-menu[data-bs-popper] {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem;
}

.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}

.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropend .dropdown-menu[data-bs-popper] {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem;
}

.dropend .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}

.dropend .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropend .dropdown-toggle::after {
  vertical-align: 0;
}

.dropstart .dropdown-menu[data-bs-popper] {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem;
}

.dropstart .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}

.dropstart .dropdown-toggle::after {
  display: none;
}

.dropstart .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}

.dropstart .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropstart .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #575757;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1rem;
  clear: both;
  font-weight: 400;
  color: #fff;
  text-align: inherit;
  text-decoration: none;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}

.dropdown-item:hover, .dropdown-item:focus {
  color: #1e2125;
  background-color: #212529;
}

.dropdown-item.active, .dropdown-item:active {
  color: #fff;
  text-decoration: none;
  background-color: #0d6efd;
}

.dropdown-item.disabled, .dropdown-item:disabled {
  color: #adb5bd;
  pointer-events: none;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: 0.5rem 1rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #fff;
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1rem;
  color: #fff;
}

.dropdown-menu-dark {
  color: #dee2e6;
  background-color: #343a40;
  border-color: rgba(0, 0, 0, 0.15);
}

.dropdown-menu-dark .dropdown-item {
  color: #dee2e6;
}

.dropdown-menu-dark .dropdown-item:hover, .dropdown-menu-dark .dropdown-item:focus {
  color: #fff;
  background-color: rgba(255, 255, 255, 0.15);
}

.dropdown-menu-dark .dropdown-item.active, .dropdown-menu-dark .dropdown-item:active {
  color: #fff;
  background-color: #0d6efd;
}

.dropdown-menu-dark .dropdown-item.disabled, .dropdown-menu-dark .dropdown-item:disabled {
  color: #adb5bd;
}

.dropdown-menu-dark .dropdown-divider {
  border-color: rgba(0, 0, 0, 0.15);
}

.dropdown-menu-dark .dropdown-item-text {
  color: #dee2e6;
}

.dropdown-menu-dark .dropdown-header {
  color: #adb5bd;
}

.btn-group, .fc .fc-button-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle;
}

.btn-group > .btn, .fc .fc-button-group > .btn, .fc .btn-group > button, .fc .fc-button-group > button, .ajax-upload-dragdrop .btn-group > .ajax-file-upload, .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled, .wizard > .actions .btn-group > a, .fc .wizard > .actions .fc-button-group > a, .wizard > .actions .fc .fc-button-group > a,
.btn-group-vertical > .btn,
.fc .btn-group-vertical > button,
.ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled,
.wizard > .actions .btn-group-vertical > a {
  position: relative;
  flex: 1 1 auto;
}

.btn-group > .btn-check:checked + .btn, .fc .fc-button-group > .btn-check:checked + .btn, .fc .btn-group > .btn-check:checked + button, .fc .fc-button-group > .btn-check:checked + button, .ajax-upload-dragdrop .btn-group > .btn-check:checked + .ajax-file-upload, .fc .ajax-upload-dragdrop .fc-button-group > .btn-check:checked + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group > .btn-check:checked + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group > .btn-check:checked + .swal2-styled, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .btn-check:checked + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .btn-check:checked + .swal2-styled, .wizard > .actions .btn-group > .btn-check:checked + a, .fc .wizard > .actions .fc-button-group > .btn-check:checked + a, .wizard > .actions .fc .fc-button-group > .btn-check:checked + a,
.btn-group > .btn-check:focus + .btn,
.fc .fc-button-group > .btn-check:focus + .btn,
.fc .btn-group > .btn-check:focus + button,
.fc .fc-button-group > .btn-check:focus + button,
.ajax-upload-dragdrop .btn-group > .btn-check:focus + .ajax-file-upload,
.fc .ajax-upload-dragdrop .fc-button-group > .btn-check:focus + .ajax-file-upload,
.ajax-upload-dragdrop .fc .fc-button-group > .btn-check:focus + .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group > .btn-check:focus + .swal2-styled,
.fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .btn-check:focus + .swal2-styled,
.swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .btn-check:focus + .swal2-styled,
.wizard > .actions .btn-group > .btn-check:focus + a,
.fc .wizard > .actions .fc-button-group > .btn-check:focus + a,
.wizard > .actions .fc .fc-button-group > .btn-check:focus + a,
.btn-group > .btn:hover,
.fc .fc-button-group > .btn:hover,
.fc .btn-group > button:hover,
.fc .fc-button-group > button:hover,
.ajax-upload-dragdrop .btn-group > .ajax-file-upload:hover,
.fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:hover,
.ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:hover,
.swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:hover,
.fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:hover,
.swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:hover,
.wizard > .actions .btn-group > a:hover,
.fc .wizard > .actions .fc-button-group > a:hover,
.wizard > .actions .fc .fc-button-group > a:hover,
.btn-group > .btn:focus,
.fc .fc-button-group > .btn:focus,
.fc .btn-group > button:focus,
.fc .fc-button-group > button:focus,
.ajax-upload-dragdrop .btn-group > .ajax-file-upload:focus,
.fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:focus,
.ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:focus,
.swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:focus,
.fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:focus,
.swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:focus,
.wizard > .actions .btn-group > a:focus,
.fc .wizard > .actions .fc-button-group > a:focus,
.wizard > .actions .fc .fc-button-group > a:focus,
.btn-group > .btn:active,
.fc .fc-button-group > .btn:active,
.fc .btn-group > button:active,
.fc .fc-button-group > button:active,
.ajax-upload-dragdrop .btn-group > .ajax-file-upload:active,
.fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:active,
.ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:active,
.swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:active,
.fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:active,
.swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:active,
.wizard > .actions .btn-group > a:active,
.fc .wizard > .actions .fc-button-group > a:active,
.wizard > .actions .fc .fc-button-group > a:active,
.btn-group > .btn.active,
.fc .fc-button-group > .btn.active,
.fc .btn-group > button.active,
.fc .fc-button-group > button.active,
.ajax-upload-dragdrop .btn-group > .active.ajax-file-upload,
.fc .ajax-upload-dragdrop .fc-button-group > .active.ajax-file-upload,
.ajax-upload-dragdrop .fc .fc-button-group > .active.ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group > .active.swal2-styled,
.fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .active.swal2-styled,
.swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .active.swal2-styled,
.wizard > .actions .btn-group > a.active,
.fc .wizard > .actions .fc-button-group > a.active,
.wizard > .actions .fc .fc-button-group > a.active,
.btn-group-vertical > .btn-check:checked + .btn,
.fc .btn-group-vertical > .btn-check:checked + button,
.ajax-upload-dragdrop .btn-group-vertical > .btn-check:checked + .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group-vertical > .btn-check:checked + .swal2-styled,
.wizard > .actions .btn-group-vertical > .btn-check:checked + a,
.btn-group-vertical > .btn-check:focus + .btn,
.fc .btn-group-vertical > .btn-check:focus + button,
.ajax-upload-dragdrop .btn-group-vertical > .btn-check:focus + .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group-vertical > .btn-check:focus + .swal2-styled,
.wizard > .actions .btn-group-vertical > .btn-check:focus + a,
.btn-group-vertical > .btn:hover,
.fc .btn-group-vertical > button:hover,
.ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:hover,
.swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:hover,
.wizard > .actions .btn-group-vertical > a:hover,
.btn-group-vertical > .btn:focus,
.fc .btn-group-vertical > button:focus,
.ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:focus,
.swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:focus,
.wizard > .actions .btn-group-vertical > a:focus,
.btn-group-vertical > .btn:active,
.fc .btn-group-vertical > button:active,
.ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:active,
.swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:active,
.wizard > .actions .btn-group-vertical > a:active,
.btn-group-vertical > .btn.active,
.fc .btn-group-vertical > button.active,
.ajax-upload-dragdrop .btn-group-vertical > .active.ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group-vertical > .active.swal2-styled,
.wizard > .actions .btn-group-vertical > a.active {
  z-index: 1;
}

.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
}

.btn-toolbar .input-group, .btn-toolbar .asColorPicker-wrap {
  width: auto;
}

.btn-group > .btn:not(:first-child), .fc .fc-button-group > .btn:not(:first-child), .fc .btn-group > button:not(:first-child), .fc .fc-button-group > button:not(:first-child), .ajax-upload-dragdrop .btn-group > .ajax-file-upload:not(:first-child), .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:not(:first-child), .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:not(:first-child), .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:not(:first-child), .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:not(:first-child), .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:not(:first-child), .wizard > .actions .btn-group > a:not(:first-child), .fc .wizard > .actions .fc-button-group > a:not(:first-child), .wizard > .actions .fc .fc-button-group > a:not(:first-child),
.btn-group > .btn-group:not(:first-child),
.fc .fc-button-group > .btn-group:not(:first-child),
.fc .btn-group > .fc-button-group:not(:first-child),
.fc .fc-button-group > .fc-button-group:not(:first-child) {
  margin-left: -1px;
}

.btn-group > .btn:not(:last-child):not(.dropdown-toggle), .fc .fc-button-group > .btn:not(:last-child):not(.dropdown-toggle), .fc .btn-group > button:not(:last-child):not(.dropdown-toggle), .fc .fc-button-group > button:not(:last-child):not(.dropdown-toggle), .ajax-upload-dragdrop .btn-group > .ajax-file-upload:not(:last-child):not(.dropdown-toggle), .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:not(:last-child):not(.dropdown-toggle), .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:not(:last-child):not(.dropdown-toggle), .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:not(:last-child):not(.dropdown-toggle), .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:not(:last-child):not(.dropdown-toggle), .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:not(:last-child):not(.dropdown-toggle), .wizard > .actions .btn-group > a:not(:last-child):not(.dropdown-toggle), .fc .wizard > .actions .fc-button-group > a:not(:last-child):not(.dropdown-toggle), .wizard > .actions .fc .fc-button-group > a:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn,
.fc .fc-button-group > .btn-group:not(:last-child) > .btn,
.fc .btn-group > .fc-button-group:not(:last-child) > .btn,
.fc .fc-button-group > .fc-button-group:not(:last-child) > .btn,
.fc .btn-group > .btn-group:not(:last-child) > button,
.fc .fc-button-group > .btn-group:not(:last-child) > button,
.fc .btn-group > .fc-button-group:not(:last-child) > button,
.fc .fc-button-group > .fc-button-group:not(:last-child) > button,
.ajax-upload-dragdrop .btn-group > .btn-group:not(:last-child) > .ajax-file-upload,
.fc .ajax-upload-dragdrop .fc-button-group > .btn-group:not(:last-child) > .ajax-file-upload,
.ajax-upload-dragdrop .fc .fc-button-group > .btn-group:not(:last-child) > .ajax-file-upload,
.fc .ajax-upload-dragdrop .btn-group > .fc-button-group:not(:last-child) > .ajax-file-upload,
.ajax-upload-dragdrop .fc .btn-group > .fc-button-group:not(:last-child) > .ajax-file-upload,
.fc .ajax-upload-dragdrop .fc-button-group > .fc-button-group:not(:last-child) > .ajax-file-upload,
.ajax-upload-dragdrop .fc .fc-button-group > .fc-button-group:not(:last-child) > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group > .btn-group:not(:last-child) > .swal2-styled,
.fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .btn-group:not(:last-child) > .swal2-styled,
.swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .btn-group:not(:last-child) > .swal2-styled,
.fc .swal2-modal .swal2-buttonswrapper .btn-group > .fc-button-group:not(:last-child) > .swal2-styled,
.swal2-modal .swal2-buttonswrapper .fc .btn-group > .fc-button-group:not(:last-child) > .swal2-styled,
.fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .fc-button-group:not(:last-child) > .swal2-styled,
.swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .fc-button-group:not(:last-child) > .swal2-styled,
.wizard > .actions .btn-group > .btn-group:not(:last-child) > a,
.fc .wizard > .actions .fc-button-group > .btn-group:not(:last-child) > a,
.wizard > .actions .fc .fc-button-group > .btn-group:not(:last-child) > a,
.fc .wizard > .actions .btn-group > .fc-button-group:not(:last-child) > a,
.wizard > .actions .fc .btn-group > .fc-button-group:not(:last-child) > a,
.fc .wizard > .actions .fc-button-group > .fc-button-group:not(:last-child) > a,
.wizard > .actions .fc .fc-button-group > .fc-button-group:not(:last-child) > a {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.btn-group > .btn:nth-child(n + 3), .fc .fc-button-group > .btn:nth-child(n + 3), .fc .btn-group > button:nth-child(n + 3), .fc .fc-button-group > button:nth-child(n + 3), .ajax-upload-dragdrop .btn-group > .ajax-file-upload:nth-child(n + 3), .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:nth-child(n + 3), .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:nth-child(n + 3), .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:nth-child(n + 3), .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:nth-child(n + 3), .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:nth-child(n + 3), .wizard > .actions .btn-group > a:nth-child(n + 3), .fc .wizard > .actions .fc-button-group > a:nth-child(n + 3), .wizard > .actions .fc .fc-button-group > a:nth-child(n + 3),
.btn-group > :not(.btn-check) + .btn,
.fc .fc-button-group > :not(.btn-check) + .btn,
.fc .btn-group > :not(.btn-check) + button,
.fc .fc-button-group > :not(.btn-check) + button,
.ajax-upload-dragdrop .btn-group > :not(.btn-check) + .ajax-file-upload,
.fc .ajax-upload-dragdrop .fc-button-group > :not(.btn-check) + .ajax-file-upload,
.ajax-upload-dragdrop .fc .fc-button-group > :not(.btn-check) + .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group > :not(.btn-check) + .swal2-styled,
.fc .swal2-modal .swal2-buttonswrapper .fc-button-group > :not(.btn-check) + .swal2-styled,
.swal2-modal .swal2-buttonswrapper .fc .fc-button-group > :not(.btn-check) + .swal2-styled,
.wizard > .actions .btn-group > :not(.btn-check) + a,
.fc .wizard > .actions .fc-button-group > :not(.btn-check) + a,
.wizard > .actions .fc .fc-button-group > :not(.btn-check) + a,
.btn-group > .btn-group:not(:first-child) > .btn,
.fc .fc-button-group > .btn-group:not(:first-child) > .btn,
.fc .btn-group > .fc-button-group:not(:first-child) > .btn,
.fc .fc-button-group > .fc-button-group:not(:first-child) > .btn,
.fc .btn-group > .btn-group:not(:first-child) > button,
.fc .fc-button-group > .btn-group:not(:first-child) > button,
.fc .btn-group > .fc-button-group:not(:first-child) > button,
.fc .fc-button-group > .fc-button-group:not(:first-child) > button,
.ajax-upload-dragdrop .btn-group > .btn-group:not(:first-child) > .ajax-file-upload,
.fc .ajax-upload-dragdrop .fc-button-group > .btn-group:not(:first-child) > .ajax-file-upload,
.ajax-upload-dragdrop .fc .fc-button-group > .btn-group:not(:first-child) > .ajax-file-upload,
.fc .ajax-upload-dragdrop .btn-group > .fc-button-group:not(:first-child) > .ajax-file-upload,
.ajax-upload-dragdrop .fc .btn-group > .fc-button-group:not(:first-child) > .ajax-file-upload,
.fc .ajax-upload-dragdrop .fc-button-group > .fc-button-group:not(:first-child) > .ajax-file-upload,
.ajax-upload-dragdrop .fc .fc-button-group > .fc-button-group:not(:first-child) > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group > .btn-group:not(:first-child) > .swal2-styled,
.fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .btn-group:not(:first-child) > .swal2-styled,
.swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .btn-group:not(:first-child) > .swal2-styled,
.fc .swal2-modal .swal2-buttonswrapper .btn-group > .fc-button-group:not(:first-child) > .swal2-styled,
.swal2-modal .swal2-buttonswrapper .fc .btn-group > .fc-button-group:not(:first-child) > .swal2-styled,
.fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .fc-button-group:not(:first-child) > .swal2-styled,
.swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .fc-button-group:not(:first-child) > .swal2-styled,
.wizard > .actions .btn-group > .btn-group:not(:first-child) > a,
.fc .wizard > .actions .fc-button-group > .btn-group:not(:first-child) > a,
.wizard > .actions .fc .fc-button-group > .btn-group:not(:first-child) > a,
.fc .wizard > .actions .btn-group > .fc-button-group:not(:first-child) > a,
.wizard > .actions .fc .btn-group > .fc-button-group:not(:first-child) > a,
.fc .wizard > .actions .fc-button-group > .fc-button-group:not(:first-child) > a,
.wizard > .actions .fc .fc-button-group > .fc-button-group:not(:first-child) > a {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 1.125rem;
  padding-left: 1.125rem;
}

.dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after,
.dropend .dropdown-toggle-split::after {
  margin-left: 0;
}

.dropstart .dropdown-toggle-split::before {
  margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split, .fc .btn-group-sm > button + .dropdown-toggle-split, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload + .dropdown-toggle-split, .swal2-modal .swal2-buttonswrapper .btn-group-sm > .swal2-styled + .dropdown-toggle-split, .wizard > .actions .btn-group-sm > a + .dropdown-toggle-split, .fc button + .dropdown-toggle-split {
  padding-right: 0.6075rem;
  padding-left: 0.6075rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split, .fc .btn-group-lg > button + .dropdown-toggle-split, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload + .dropdown-toggle-split, .swal2-modal .swal2-buttonswrapper .btn-group-lg > .swal2-styled + .dropdown-toggle-split, .wizard > .actions .btn-group-lg > a + .dropdown-toggle-split {
  padding-right: 2.25rem;
  padding-left: 2.25rem;
}

.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}


.btn-group-vertical > .btn,
.fc .btn-group-vertical > button,
.ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled,
.wizard > .actions .btn-group-vertical > a,
.btn-group-vertical > .btn-group,
.fc .btn-group-vertical > .fc-button-group {
  width: 100%;
}

.btn-group-vertical > .btn:not(:first-child), .fc .btn-group-vertical > button:not(:first-child), .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:not(:first-child), .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:not(:first-child), .wizard > .actions .btn-group-vertical > a:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child),
.fc .btn-group-vertical > .fc-button-group:not(:first-child) {
  margin-top: -1px;
}

.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle), .fc .btn-group-vertical > button:not(:last-child):not(.dropdown-toggle), .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:not(:last-child):not(.dropdown-toggle), .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:not(:last-child):not(.dropdown-toggle), .wizard > .actions .btn-group-vertical > a:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn,
.fc .btn-group-vertical > .fc-button-group:not(:last-child) > .btn,
.fc .btn-group-vertical > .btn-group:not(:last-child) > button,
.fc .btn-group-vertical > .fc-button-group:not(:last-child) > button,
.ajax-upload-dragdrop .btn-group-vertical > .btn-group:not(:last-child) > .ajax-file-upload,
.fc .ajax-upload-dragdrop .btn-group-vertical > .fc-button-group:not(:last-child) > .ajax-file-upload,
.ajax-upload-dragdrop .fc .btn-group-vertical > .fc-button-group:not(:last-child) > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group-vertical > .btn-group:not(:last-child) > .swal2-styled,
.fc .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .fc-button-group:not(:last-child) > .swal2-styled,
.swal2-modal .swal2-buttonswrapper .fc .btn-group-vertical > .fc-button-group:not(:last-child) > .swal2-styled,
.wizard > .actions .btn-group-vertical > .btn-group:not(:last-child) > a,
.fc .wizard > .actions .btn-group-vertical > .fc-button-group:not(:last-child) > a,
.wizard > .actions .fc .btn-group-vertical > .fc-button-group:not(:last-child) > a {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.btn-group-vertical > .btn ~ .btn, .fc .btn-group-vertical > button ~ .btn, .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload ~ .btn, .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled ~ .btn, .wizard > .actions .btn-group-vertical > a ~ .btn, .fc .btn-group-vertical > .btn ~ button, .fc .btn-group-vertical > button ~ button, .ajax-upload-dragdrop .fc .btn-group-vertical > .ajax-file-upload ~ button, .fc .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload ~ button, .swal2-modal .swal2-buttonswrapper .fc .btn-group-vertical > .swal2-styled ~ button, .fc .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled ~ button, .wizard > .actions .fc .btn-group-vertical > a ~ button, .fc .wizard > .actions .btn-group-vertical > a ~ button, .ajax-upload-dragdrop .btn-group-vertical > .btn ~ .ajax-file-upload, .fc .ajax-upload-dragdrop .btn-group-vertical > button ~ .ajax-file-upload, .ajax-upload-dragdrop .fc .btn-group-vertical > button ~ .ajax-file-upload, .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload ~ .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .btn-group-vertical > .swal2-styled ~ .ajax-file-upload, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled ~ .ajax-file-upload, .wizard > .actions .ajax-upload-dragdrop .btn-group-vertical > a ~ .ajax-file-upload, .ajax-upload-dragdrop .wizard > .actions .btn-group-vertical > a ~ .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .btn ~ .swal2-styled, .fc .swal2-modal .swal2-buttonswrapper .btn-group-vertical > button ~ .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .btn-group-vertical > button ~ .swal2-styled, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .ajax-file-upload ~ .swal2-styled, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload ~ .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled ~ .swal2-styled, .wizard > .actions .swal2-modal .swal2-buttonswrapper .btn-group-vertical > a ~ .swal2-styled, .swal2-modal .swal2-buttonswrapper .wizard > .actions .btn-group-vertical > a ~ .swal2-styled, .wizard > .actions .btn-group-vertical > .btn ~ a, .fc .wizard > .actions .btn-group-vertical > button ~ a, .wizard > .actions .fc .btn-group-vertical > button ~ a, .ajax-upload-dragdrop .wizard > .actions .btn-group-vertical > .ajax-file-upload ~ a, .wizard > .actions .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload ~ a, .swal2-modal .swal2-buttonswrapper .wizard > .actions .btn-group-vertical > .swal2-styled ~ a, .wizard > .actions .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled ~ a, .wizard > .actions .btn-group-vertical > a ~ a,
.btn-group-vertical > .btn-group:not(:first-child) > .btn,
.fc .btn-group-vertical > .fc-button-group:not(:first-child) > .btn,
.fc .btn-group-vertical > .btn-group:not(:first-child) > button,
.fc .btn-group-vertical > .fc-button-group:not(:first-child) > button,
.ajax-upload-dragdrop .btn-group-vertical > .btn-group:not(:first-child) > .ajax-file-upload,
.fc .ajax-upload-dragdrop .btn-group-vertical > .fc-button-group:not(:first-child) > .ajax-file-upload,
.ajax-upload-dragdrop .fc .btn-group-vertical > .fc-button-group:not(:first-child) > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group-vertical > .btn-group:not(:first-child) > .swal2-styled,
.fc .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .fc-button-group:not(:first-child) > .swal2-styled,
.swal2-modal .swal2-buttonswrapper .fc .btn-group-vertical > .fc-button-group:not(:first-child) > .swal2-styled,
.wizard > .actions .btn-group-vertical > .btn-group:not(:first-child) > a,
.fc .wizard > .actions .btn-group-vertical > .fc-button-group:not(:first-child) > a,
.wizard > .actions .fc .btn-group-vertical > .fc-button-group:not(:first-child) > a {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: 0.5rem 1rem;
  color: #0d6efd;
  text-decoration: none;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .nav-link {
    transition: none;
  }
}

.nav-link:hover, .nav-link:focus {
  color: #0a58ca;
}

.nav-link.disabled {
  color: #6c757d;
  pointer-events: none;
  cursor: default;
}

.nav-tabs {
  border-bottom: 1px solid #575757;
}

.nav-tabs .nav-link {
  margin-bottom: -1px;
  background: none;
  border: 1px solid transparent;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  border-color: #828494 #828494 #828494;
  isolation: isolate;
}

.nav-tabs .nav-link.disabled {
  color: #6c757d;
  background-color: transparent;
  border-color: transparent;
}

.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: #fff;
  background-color: #1f1e23;
  border-color: #575757 #575757 #1f1e23;
}

.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills .nav-link {
  background: none;
  border: 0;
  border-radius: 0.25rem;
}

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #0d6efd;
}

.nav-fill > .nav-link,
.nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center;
}

.nav-justified > .nav-link,
.nav-justified .nav-item {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center;
}

.nav-fill .nav-item .nav-link,
.nav-justified .nav-item .nav-link {
  width: 100%;
}

.tab-content > .tab-pane {
  display: none;
}

.tab-content > .active {
  display: block;
}

.navbar {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.navbar > .container,
.navbar > .container-fluid, .navbar > .container-sm, .navbar > .container-md, .navbar > .container-lg, .navbar > .container-xl, .navbar > .container-xxl {
  display: flex;
  flex-wrap: inherit;
  align-items: center;
  justify-content: space-between;
}

.navbar-brand {
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  text-decoration: none;
  white-space: nowrap;
}

.navbar-nav {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}

.navbar-nav .dropdown-menu {
  position: static;
}

.navbar-text {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center;
}

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem;
  transition: box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .navbar-toggler {
    transition: none;
  }
}

.navbar-toggler:hover {
  text-decoration: none;
}

.navbar-toggler:focus {
  text-decoration: none;
  outline: 0;
  box-shadow: 0 0 0 0.25rem;
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
}

.navbar-nav-scroll {
  max-height: var(--bs-scroll-height, 75vh);
  overflow-y: auto;
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-sm .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-sm .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
  .navbar-expand-sm .offcanvas-header {
    display: none;
  }
  .navbar-expand-sm .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    transition: none;
    transform: none;
  }
  .navbar-expand-sm .offcanvas-top,
  .navbar-expand-sm .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-sm .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}

@media (min-width: 768px) {
  .navbar-expand-md {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-md .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-md .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
  .navbar-expand-md .offcanvas-header {
    display: none;
  }
  .navbar-expand-md .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    transition: none;
    transform: none;
  }
  .navbar-expand-md .offcanvas-top,
  .navbar-expand-md .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-md .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}

@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-lg .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-lg .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
  .navbar-expand-lg .offcanvas-header {
    display: none;
  }
  .navbar-expand-lg .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    transition: none;
    transform: none;
  }
  .navbar-expand-lg .offcanvas-top,
  .navbar-expand-lg .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-lg .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}

@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xl .offcanvas-header {
    display: none;
  }
  .navbar-expand-xl .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    transition: none;
    transform: none;
  }
  .navbar-expand-xl .offcanvas-top,
  .navbar-expand-xl .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-xl .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}

@media (min-width: 1400px) {
  .navbar-expand-xxl {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xxl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xxl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xxl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xxl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xxl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xxl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xxl .offcanvas-header {
    display: none;
  }
  .navbar-expand-xxl .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    transition: none;
    transform: none;
  }
  .navbar-expand-xxl .offcanvas-top,
  .navbar-expand-xxl .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-xxl .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}

.navbar-expand {
  flex-wrap: nowrap;
  justify-content: flex-start;
}

.navbar-expand .navbar-nav {
  flex-direction: row;
}

.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}

.navbar-expand .navbar-nav .nav-link {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}

.navbar-expand .navbar-nav-scroll {
  overflow: visible;
}

.navbar-expand .navbar-collapse {
  display: flex !important;
  flex-basis: auto;
}

.navbar-expand .navbar-toggler {
  display: none;
}

.navbar-expand .offcanvas-header {
  display: none;
}

.navbar-expand .offcanvas {
  position: inherit;
  bottom: 0;
  z-index: 1000;
  flex-grow: 1;
  visibility: visible !important;
  background-color: transparent;
  border-right: 0;
  border-left: 0;
  transition: none;
  transform: none;
}

.navbar-expand .offcanvas-top,
.navbar-expand .offcanvas-bottom {
  height: auto;
  border-top: 0;
  border-bottom: 0;
}

.navbar-expand .offcanvas-body {
  display: flex;
  flex-grow: 0;
  padding: 0;
  overflow-y: visible;
}

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.55);
}

.navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
  color: rgba(0, 0, 0, 0.7);
}

.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(0, 0, 0, 0.3);
}

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.55);
  border-color: rgba(0, 0, 0, 0.1);
}

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.55);
}

.navbar-light .navbar-text a,
.navbar-light .navbar-text a:hover,
.navbar-light .navbar-text a:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-dark .navbar-brand {
  color: #fff;
}

.navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
  color: #fff;
}

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.55);
}

.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}

.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff;
}

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.55);
  border-color: rgba(255, 255, 255, 0.1);
}

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.55);
}

.navbar-dark .navbar-text a,
.navbar-dark .navbar-text a:hover,
.navbar-dark .navbar-text a:focus {
  color: #fff;
}

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #1f1e23;
  background-clip: border-box;
  border: 1px solid #313452;
  border-radius: 20px;
}

.card > hr {
  margin-right: 0;
  margin-left: 0;
}

.card > .list-group {
  border-top: inherit;
  border-bottom: inherit;
}

.card > .list-group:first-child {
  border-top-width: 0;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.card > .list-group:last-child {
  border-bottom-width: 0;
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

.card > .card-header + .list-group,
.card > .list-group + .card-footer {
  border-top: 0;
}

.card-body {
  flex: 1 1 auto;
  padding: 1rem 1rem;
}

.card-title {
  margin-bottom: 0.5rem;
}

.card-subtitle {
  margin-top: -0.25rem;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link + .card-link {
  margin-left: 1rem;
}

.card-header {
  padding: 0.5rem 1rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid #313452;
}

.card-header:first-child {
  border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-footer {
  padding: 0.5rem 1rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid #313452;
}

.card-footer:last-child {
  border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}

.card-header-tabs {
  margin-right: -0.5rem;
  margin-bottom: -0.5rem;
  margin-left: -0.5rem;
  border-bottom: 0;
}

.card-header-pills {
  margin-right: -0.5rem;
  margin-left: -0.5rem;
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  border-radius: calc(0.25rem - 1px);
}

.card-img,
.card-img-top,
.card-img-bottom {
  width: 100%;
}

.card-img,
.card-img-top {
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.card-img,
.card-img-bottom {
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

.card-group > .card {
  margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
  .card-group {
    display: flex;
    flex-flow: row wrap;
  }
  .card-group > .card {
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-top,
  .card-group > .card:not(:last-child) .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-bottom,
  .card-group > .card:not(:last-child) .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-top,
  .card-group > .card:not(:first-child) .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-bottom,
  .card-group > .card:not(:first-child) .card-footer {
    border-bottom-left-radius: 0;
  }
}

.accordion-button {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  padding: 1rem 1.25rem;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  background-color: #fff;
  border: 0;
  border-radius: 0;
  overflow-anchor: none;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
}

@media (prefers-reduced-motion: reduce) {
  .accordion-button {
    transition: none;
  }
}

.accordion-button:not(.collapsed) {
  color: #0c63e4;
  background-color: #e7f1ff;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.125);
}

.accordion-button:not(.collapsed)::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230c63e4'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
  transform: rotate(-180deg);
}

.accordion-button::after {
  flex-shrink: 0;
  width: 1.25rem;
  height: 1.25rem;
  margin-left: auto;
  content: "";
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-size: 1.25rem;
  transition: transform 0.2s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .accordion-button::after {
    transition: none;
  }
}

.accordion-button:hover {
  z-index: 2;
}

.accordion-button:focus {
  z-index: 3;
  border-color: #86b7fe;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.accordion-header {
  margin-bottom: 0;
}

.accordion-item {
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125);
}

.accordion-item:first-of-type {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.accordion-item:first-of-type .accordion-button {
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.accordion-item:not(:first-of-type) {
  border-top: 0;
}

.accordion-item:last-of-type {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.accordion-item:last-of-type .accordion-button.collapsed {
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

.accordion-item:last-of-type .accordion-collapse {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.accordion-body {
  padding: 1rem 1.25rem;
}

.accordion-flush .accordion-collapse {
  border-width: 0;
}

.accordion-flush .accordion-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}

.accordion-flush .accordion-item:first-child {
  border-top: 0;
}

.accordion-flush .accordion-item:last-child {
  border-bottom: 0;
}

.accordion-flush .accordion-item .accordion-button {
  border-radius: 0;
}

.breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: 0.56rem 1.13rem;
  margin-bottom: 1rem;
  font-size: 0.875rem;
  list-style: none;
  background-color: transparent;
}

.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem;
}

.breadcrumb-item + .breadcrumb-item::before {
  float: left;
  padding-right: 0.5rem;
  color: #6c757d;
  content: var(--bs-breadcrumb-divider, "/") /* rtl: var(--bs-breadcrumb-divider, "/") */;
}

.breadcrumb-item.active {
  color: #495057;
}

.pagination, .jsgrid .jsgrid-pager {
  display: flex;
  padding-left: 0;
  list-style: none;
}

.page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a,
.jsgrid .jsgrid-pager .jsgrid-pager-page a {
  position: relative;
  display: block;
  color: #0d6efd;
  text-decoration: none;
  background-color: #212529;
  border: 1px solid #dee2e6;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a,
  .jsgrid .jsgrid-pager .jsgrid-pager-page a {
    transition: none;
  }
}

.page-link:hover, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a:hover,
.jsgrid .jsgrid-pager .jsgrid-pager-page a:hover {
  z-index: 2;
  color: #0a58ca;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.page-link:focus, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a:focus,
.jsgrid .jsgrid-pager .jsgrid-pager-page a:focus {
  z-index: 3;
  color: #0a58ca;
  background-color: #e9ecef;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.page-item:not(:first-child) .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:not(:first-child) .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page:not(:first-child) .page-link, .page-item:not(:first-child) .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:not(:first-child) a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:not(:first-child) a,
.page-item:not(:first-child) .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:not(:first-child) a,
.jsgrid .jsgrid-pager .jsgrid-pager-page:not(:first-child) a {
  margin-left: -1px;
}

.page-item.active .page-link, .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item.active a, .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a,
.page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item.active a,
.jsgrid .jsgrid-pager .active.jsgrid-pager-page a {
  z-index: 3;
  color: #fff;
  background-color: #0d6efd;
  border-color: #0d6efd;
}

.page-item.disabled .page-link, .jsgrid .jsgrid-pager .disabled.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .disabled.jsgrid-pager-page .page-link, .page-item.disabled .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item.disabled a, .jsgrid .jsgrid-pager .disabled.jsgrid-pager-nav-button a,
.page-item.disabled .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item.disabled a,
.jsgrid .jsgrid-pager .disabled.jsgrid-pager-page a {
  color: #6c757d;
  pointer-events: none;
  background-color: #8b8d91;
  border-color: #dee2e6;
}

.page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a,
.jsgrid .jsgrid-pager .jsgrid-pager-page a {
  padding: 0.375rem 0.75rem;
}

.page-item:first-child .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child .page-link, .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:first-child a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child a,
.page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:first-child a,
.jsgrid .jsgrid-pager .jsgrid-pager-page:first-child a {
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.page-item:last-child .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child .page-link, .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:last-child a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child a,
.page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:last-child a,
.jsgrid .jsgrid-pager .jsgrid-pager-page:last-child a {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.pagination-lg .page-link, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-lg a,
.pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-lg a {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
}

.pagination-lg .page-item:first-child .page-link, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-nav-button:first-child .page-link, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child .page-link, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-page:first-child .page-link, .pagination-lg .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-lg .page-item:first-child a, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child a, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-nav-button:first-child a,
.pagination-lg .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-lg .page-item:first-child a,
.pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child a, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-page:first-child a {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}

.pagination-lg .page-item:last-child .page-link, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-nav-button:last-child .page-link, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child .page-link, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-page:last-child .page-link, .pagination-lg .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-lg .page-item:last-child a, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child a, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-nav-button:last-child a,
.pagination-lg .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-lg .page-item:last-child a,
.pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child a, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-page:last-child a {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}

.pagination-sm .page-link, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-sm a,
.pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-sm a {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
}

.pagination-sm .page-item:first-child .page-link, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-nav-button:first-child .page-link, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child .page-link, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-page:first-child .page-link, .pagination-sm .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-sm .page-item:first-child a, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child a, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-nav-button:first-child a,
.pagination-sm .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-sm .page-item:first-child a,
.pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child a, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-page:first-child a {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}

.pagination-sm .page-item:last-child .page-link, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-nav-button:last-child .page-link, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child .page-link, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-page:last-child .page-link, .pagination-sm .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-sm .page-item:last-child a, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child a, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-nav-button:last-child a,
.pagination-sm .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-sm .page-item:last-child a,
.pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child a, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-page:last-child a {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}

.badge {
  display: inline-block;
  padding: 0.35em 0.65em;
  font-size: 0.75em;
  font-weight: 700;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem;
}

.badge:empty {
  display: none;
}

.btn .badge, .fc button .badge, .ajax-upload-dragdrop .ajax-file-upload .badge, .swal2-modal .swal2-buttonswrapper .swal2-styled .badge, .wizard > .actions a .badge {
  position: relative;
  top: -1px;
}

.alert {
  position: relative;
  padding: 1rem 1rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 700;
}

.alert-dismissible {
  padding-right: 3rem;
}

.alert-dismissible .btn-close {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 1.25rem 1rem;
}

.alert-primary {
  color: #2d2c67;
  background-color: #dbdbee;
  border-color: #c9c8e6;
}

.alert-primary .alert-link {
  color: #242352;
}

.alert-secondary {
  color: #626263;
  background-color: #ededed;
  border-color: #e3e4e4;
}

.alert-secondary .alert-link {
  color: #4e4e4f;
}

.alert-success {
  color: #346d34;
  background-color: #ddf0dd;
  border-color: #cde9cd;
}

.alert-success .alert-link {
  color: #2a572a;
}

.alert-info {
  color: #165398;
  background-color: #d3e8ff;
  border-color: #bddcfe;
}

.alert-info .alert-link {
  color: #12427a;
}

.alert-warning {
  color: #664d00;
  background-color: #fff3cc;
  border-color: #ffecb3;
}

.alert-warning .alert-link {
  color: #523e00;
}

.alert-danger {
  color: #992b2b;
  background-color: #ffdada;
  border-color: #ffc8c8;
}

.alert-danger .alert-link {
  color: #7a2222;
}

.alert-light {
  color: #636464;
  background-color: #fefefe;
  border-color: #fdfdfe;
}

.alert-light .alert-link {
  color: #4f5050;
}

.alert-dark {
  color: #181c23;
  background-color: #d4d5d8;
  border-color: #bfc1c4;
}

.alert-dark .alert-link {
  color: #13161c;
}

@keyframes progress-bar-stripes {
  0% {
    background-position-x: 1rem;
  }
}

.progress {
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.75rem;
  background-color: #878c9e;
  border-radius: 0.25rem;
}

.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #0d6efd;
  transition: width 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
  .progress-bar {
    transition: none;
  }
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem;
}

.progress-bar-animated {
  animation: 1s linear infinite progress-bar-stripes;
}

@media (prefers-reduced-motion: reduce) {
  .progress-bar-animated {
    animation: none;
  }
}

.list-group {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: 0.25rem;
}

.list-group-numbered {
  list-style-type: none;
  counter-reset: section;
}

.list-group-numbered > li::before {
  content: counters(section, ".") ". ";
  counter-increment: section;
}

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit;
}

.list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: #495057;
  text-decoration: none;
  background-color: #f8f9fa;
}

.list-group-item-action:active {
  color: #212529;
  background-color: #e9ecef;
}

.list-group-item {
  position: relative;
  display: block;
  padding: 0.5rem 1rem;
  color: #212529;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125);
}

.list-group-item:first-child {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
}

.list-group-item:last-child {
  border-bottom-right-radius: inherit;
  border-bottom-left-radius: inherit;
}

.list-group-item.disabled, .list-group-item:disabled {
  color: #6c757d;
  pointer-events: none;
  background-color: #fff;
}

.list-group-item.active {
  z-index: 2;
  color: #fff;
  background-color: #0d6efd;
  border-color: #0d6efd;
}

.list-group-item + .list-group-item {
  border-top-width: 0;
}

.list-group-item + .list-group-item.active {
  margin-top: -1px;
  border-top-width: 1px;
}

.list-group-horizontal {
  flex-direction: row;
}

.list-group-horizontal > .list-group-item:first-child {
  border-bottom-left-radius: 0.25rem;
  border-top-right-radius: 0;
}

.list-group-horizontal > .list-group-item:last-child {
  border-top-right-radius: 0.25rem;
  border-bottom-left-radius: 0;
}

.list-group-horizontal > .list-group-item.active {
  margin-top: 0;
}

.list-group-horizontal > .list-group-item + .list-group-item {
  border-top-width: 1px;
  border-left-width: 0;
}

.list-group-horizontal > .list-group-item + .list-group-item.active {
  margin-left: -1px;
  border-left-width: 1px;
}

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    flex-direction: row;
  }
  .list-group-horizontal-sm > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

@media (min-width: 768px) {
  .list-group-horizontal-md {
    flex-direction: row;
  }
  .list-group-horizontal-md > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

@media (min-width: 992px) {
  .list-group-horizontal-lg {
    flex-direction: row;
  }
  .list-group-horizontal-lg > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    flex-direction: row;
  }
  .list-group-horizontal-xl > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

@media (min-width: 1400px) {
  .list-group-horizontal-xxl {
    flex-direction: row;
  }
  .list-group-horizontal-xxl > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xxl > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xxl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

.list-group-flush {
  border-radius: 0;
}

.list-group-flush > .list-group-item {
  border-width: 0 0 1px;
}

.list-group-flush > .list-group-item:last-child {
  border-bottom-width: 0;
}

.list-group-item-primary {
  color: #2d2c67;
  background-color: #dbdbee;
}

.list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
  color: #2d2c67;
  background-color: #c5c5d6;
}

.list-group-item-primary.list-group-item-action.active {
  color: #ffffff;
  background-color: #2d2c67;
  border-color: #2d2c67;
}

.list-group-item-secondary {
  color: #626263;
  background-color: #ededed;
}

.list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
  color: #626263;
  background-color: #d5d5d5;
}

.list-group-item-secondary.list-group-item-action.active {
  color: #ffffff;
  background-color: #626263;
  border-color: #626263;
}

.list-group-item-success {
  color: #346d34;
  background-color: #ddf0dd;
}

.list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
  color: #346d34;
  background-color: #c7d8c7;
}

.list-group-item-success.list-group-item-action.active {
  color: #ffffff;
  background-color: #346d34;
  border-color: #346d34;
}

.list-group-item-info {
  color: #165398;
  background-color: #d3e8ff;
}

.list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
  color: #165398;
  background-color: #bed1e6;
}

.list-group-item-info.list-group-item-action.active {
  color: #ffffff;
  background-color: #165398;
  border-color: #165398;
}

.list-group-item-warning {
  color: #664d00;
  background-color: #fff3cc;
}

.list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
  color: #664d00;
  background-color: #e6dbb8;
}

.list-group-item-warning.list-group-item-action.active {
  color: #ffffff;
  background-color: #664d00;
  border-color: #664d00;
}

.list-group-item-danger {
  color: #992b2b;
  background-color: #ffdada;
}

.list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
  color: #992b2b;
  background-color: #e6c4c4;
}

.list-group-item-danger.list-group-item-action.active {
  color: #ffffff;
  background-color: #992b2b;
  border-color: #992b2b;
}

.list-group-item-light {
  color: #636464;
  background-color: #fefefe;
}

.list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
  color: #636464;
  background-color: #e5e5e5;
}

.list-group-item-light.list-group-item-action.active {
  color: #ffffff;
  background-color: #636464;
  border-color: #636464;
}

.list-group-item-dark {
  color: #181c23;
  background-color: #d4d5d8;
}

.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
  color: #181c23;
  background-color: #bfc0c2;
}

.list-group-item-dark.list-group-item-action.active {
  color: #ffffff;
  background-color: #181c23;
  border-color: #181c23;
}

.btn-close {
  box-sizing: content-box;
  width: 1em;
  height: 1em;
  padding: 0.25em 0.25em;
  color: #000;
  background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
  border: 0;
  border-radius: 8px;
  opacity: 0.5;
}

.btn-close:hover {
  color: #000;
  text-decoration: none;
  opacity: 0.75;
}

.btn-close:focus {
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
  opacity: 1;
}

.btn-close:disabled, .btn-close.disabled {
  pointer-events: none;
  user-select: none;
  opacity: 0.25;
}

.btn-close-white {
  filter: invert(1) grayscale(100%) brightness(200%);
}

.toast {
  width: 350px;
  max-width: 100%;
  font-size: 0.875rem;
  pointer-events: auto;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.1);
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
}

.toast.showing {
  opacity: 0;
}

.toast:not(.show) {
  display: none;
}

.toast-container {
  width: max-content;
  max-width: 100%;
  pointer-events: none;
}

.toast-container > :not(:last-child) {
  margin-bottom: 0.75rem;
}

.toast-header {
  display: flex;
  align-items: center;
  padding: 0.5rem 0.75rem;
  color: #6c757d;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.toast-header .btn-close {
  margin-right: -0.375rem;
  margin-left: 0.75rem;
}

.toast-body {
  padding: 0.75rem;
  word-wrap: break-word;
}

.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1055;
  display: none;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  overflow-y: auto;
  outline: 0;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
  pointer-events: none;
}

.modal.fade .modal-dialog {
  transition: transform 0.4s ease;
  transform: translate(0, -50px);
}

@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}

.modal.show .modal-dialog {
  transform: none;
}

.modal.modal-static .modal-dialog {
  transform: scale(1.02);
}

.modal-dialog-scrollable {
  height: calc(100% - 20px);
}

.modal-dialog-scrollable .modal-content {
  max-height: 100%;
  overflow: hidden;
}

.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}

.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - 20px);
}

.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #323748;
  background-clip: padding-box;
  border: 1px solid #575757;
  border-radius: 0.3rem;
  outline: 0;
}

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  width: 100vw;
  height: 100vh;
  background-color: #000;
}

.modal-backdrop.fade {
  opacity: 0;
}

.modal-backdrop.show {
  opacity: 0.5;
}

.modal-header {
  display: flex;
  flex-shrink: 0;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid #575757;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}

.modal-header .btn-close {
  padding: 12.5px 13px;
  margin: -12.5px -13px -12.5px auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: 0.9375rem;
}

.modal-footer {
  display: flex;
  flex-wrap: wrap;
  flex-shrink: 0;
  align-items: center;
  justify-content: flex-end;
  padding: 0.6875rem;
  border-top: 1px solid #575757;
  border-bottom-right-radius: calc(0.3rem - 1px);
  border-bottom-left-radius: calc(0.3rem - 1px);
}

.modal-footer > * {
  margin: 0.25rem;
}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 30px auto;
  }
  .modal-dialog-scrollable {
    height: calc(100% - 60px);
  }
  .modal-dialog-centered {
    min-height: calc(100% - 60px);
  }
  .modal-sm {
    max-width: 300px;
  }
}

@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    max-width: 90%;
  }
}

@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px;
  }
}

.modal-fullscreen {
  width: 100vw;
  max-width: none;
  height: 100%;
  margin: 0;
}

.modal-fullscreen .modal-content {
  height: 100%;
  border: 0;
  border-radius: 0;
}

.modal-fullscreen .modal-header {
  border-radius: 0;
}

.modal-fullscreen .modal-body {
  overflow-y: auto;
}

.modal-fullscreen .modal-footer {
  border-radius: 0;
}

@media (max-width: 575.98px) {
  .modal-fullscreen-sm-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-sm-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-sm-down .modal-footer {
    border-radius: 0;
  }
}

@media (max-width: 767.98px) {
  .modal-fullscreen-md-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-md-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-md-down .modal-footer {
    border-radius: 0;
  }
}

@media (max-width: 991.98px) {
  .modal-fullscreen-lg-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-lg-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-lg-down .modal-footer {
    border-radius: 0;
  }
}

@media (max-width: 1199.98px) {
  .modal-fullscreen-xl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-xl-down .modal-footer {
    border-radius: 0;
  }
}

@media (max-width: 1399.98px) {
  .modal-fullscreen-xxl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xxl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xxl-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-xxl-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-xxl-down .modal-footer {
    border-radius: 0;
  }
}

.tooltip {
  position: absolute;
  z-index: 1080;
  display: block;
  margin: 0;
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.75rem;
  word-wrap: break-word;
  opacity: 0;
}

.tooltip.show {
  opacity: 0.9;
}

.tooltip .tooltip-arrow {
  position: absolute;
  display: block;
  width: 0.8rem;
  height: 0.4rem;
}

.tooltip .tooltip-arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top, .bs-tooltip-auto[data-popper-placement^="top"] {
  padding: 0.4rem 0;
}

.bs-tooltip-top .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^="top"] .tooltip-arrow {
  bottom: 0;
}

.bs-tooltip-top .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^="top"] .tooltip-arrow::before {
  top: -1px;
  border-width: 0.4rem 0.4rem 0;
  border-top-color: #000;
}

.bs-tooltip-end, .bs-tooltip-auto[data-popper-placement^="right"] {
  padding: 0 0.4rem;
}

.bs-tooltip-end .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^="right"] .tooltip-arrow {
  left: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-end .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^="right"] .tooltip-arrow::before {
  right: -1px;
  border-width: 0.4rem 0.4rem 0.4rem 0;
  border-right-color: #000;
}

.bs-tooltip-bottom, .bs-tooltip-auto[data-popper-placement^="bottom"] {
  padding: 0.4rem 0;
}

.bs-tooltip-bottom .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^="bottom"] .tooltip-arrow {
  top: 0;
}

.bs-tooltip-bottom .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^="bottom"] .tooltip-arrow::before {
  bottom: -1px;
  border-width: 0 0.4rem 0.4rem;
  border-bottom-color: #000;
}

.bs-tooltip-start, .bs-tooltip-auto[data-popper-placement^="left"] {
  padding: 0 0.4rem;
}

.bs-tooltip-start .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^="left"] .tooltip-arrow {
  right: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-start .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^="left"] .tooltip-arrow::before {
  left: -1px;
  border-width: 0.4rem 0 0.4rem 0.4rem;
  border-left-color: #000;
}

.tooltip-inner {
  max-width: 200px;
  padding: 0.4rem 0.75rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.375rem;
}

.popover {
  position: absolute;
  top: 0;
  left: 0 /* rtl:ignore */;
  z-index: 1070;
  display: block;
  max-width: 276px;
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #636877;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
}

.popover .popover-arrow {
  position: absolute;
  display: block;
  width: 1rem;
  height: 0.5rem;
}

.popover .popover-arrow::before, .popover .popover-arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-popover-top > .popover-arrow, .bs-popover-auto[data-popper-placement^="top"] > .popover-arrow {
  bottom: calc(-0.5rem - 1px);
}

.bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^="top"] > .popover-arrow::before {
  bottom: 0;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^="top"] > .popover-arrow::after {
  bottom: 1px;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: #636877;
}

.bs-popover-end > .popover-arrow, .bs-popover-auto[data-popper-placement^="right"] > .popover-arrow {
  left: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem;
}

.bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^="right"] > .popover-arrow::before {
  left: 0;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^="right"] > .popover-arrow::after {
  left: 1px;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: #636877;
}

.bs-popover-bottom > .popover-arrow, .bs-popover-auto[data-popper-placement^="bottom"] > .popover-arrow {
  top: calc(-0.5rem - 1px);
}

.bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^="bottom"] > .popover-arrow::before {
  top: 0;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^="bottom"] > .popover-arrow::after {
  top: 1px;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: #636877;
}

.bs-popover-bottom .popover-header::before, .bs-popover-auto[data-popper-placement^="bottom"] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 1rem;
  margin-left: -0.5rem;
  content: "";
  border-bottom: 1px solid #636877;
}

.bs-popover-start > .popover-arrow, .bs-popover-auto[data-popper-placement^="left"] > .popover-arrow {
  right: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem;
}

.bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^="left"] > .popover-arrow::before {
  right: 0;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^="left"] > .popover-arrow::after {
  right: 1px;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: #636877;
}

.popover-header {
  padding: 0.5rem 1rem;
  margin-bottom: 0;
  font-size: 1rem;
  color: #000;
  background-color: #636877;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}

.popover-header:empty {
  display: none;
}

.popover-body {
  padding: 1rem 1rem;
  color: #000;
}

.carousel {
  position: relative;
}

.carousel.pointer-event {
  touch-action: pan-y;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  backface-visibility: hidden;
  transition: transform 0.6s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

/* rtl:begin:ignore */
.carousel-item-next:not(.carousel-item-start),
.active.carousel-item-end {
  transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-end),
.active.carousel-item-start {
  transform: translateX(-100%);
}

/* rtl:end:ignore */
.carousel-fade .carousel-item {
  opacity: 0;
  transition-property: opacity;
  transform: none;
}

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-start,
.carousel-fade .carousel-item-prev.carousel-item-end {
  z-index: 1;
  opacity: 1;
}

.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
  z-index: 0;
  opacity: 0;
  transition: opacity 0s 0.6s;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-fade .active.carousel-item-start,
  .carousel-fade .active.carousel-item-end {
    transition: none;
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 15%;
  padding: 0;
  color: #fff;
  text-align: center;
  background: none;
  border: 0;
  opacity: 0.5;
  transition: opacity 0.15s ease;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-control-prev,
  .carousel-control-next {
    transition: none;
  }
}

.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: 100% 100%;
}

/* rtl:options: {
  "autoRename": true,
  "stringMap":[ {
    "name"    : "prev-next",
    "search"  : "prev",
    "replace" : "next"
  } ]
} */
.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  display: flex;
  justify-content: center;
  padding: 0;
  margin-right: 15%;
  margin-bottom: 1rem;
  margin-left: 15%;
  list-style: none;
}

.carousel-indicators [data-bs-target] {
  box-sizing: content-box;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  padding: 0;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: 0.5;
  transition: opacity 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-indicators [data-bs-target] {
    transition: none;
  }
}

.carousel-indicators .active {
  opacity: 1;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 1.25rem;
  left: 15%;
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
  color: #fff;
  text-align: center;
}

.carousel-dark .carousel-control-prev-icon,
.carousel-dark .carousel-control-next-icon {
  filter: invert(1) grayscale(100);
}

.carousel-dark .carousel-indicators [data-bs-target] {
  background-color: #000;
}

.carousel-dark .carousel-caption {
  color: #000;
}

@keyframes spinner-border {
  to {
    transform: rotate(360deg) /* rtl:ignore */;
  }
}

.spinner-border {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: -0.125em;
  border: 0.25em solid currentColor;
  border-right-color: transparent;
  border-radius: 50%;
  animation: 0.75s linear infinite spinner-border;
}

.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.2em;
}

@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
  }
}

.spinner-grow {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: -0.125em;
  background-color: currentColor;
  border-radius: 50%;
  opacity: 0;
  animation: 0.75s linear infinite spinner-grow;
}

.spinner-grow-sm {
  width: 1rem;
  height: 1rem;
}

@media (prefers-reduced-motion: reduce) {
  .spinner-border,
  .spinner-grow {
    animation-duration: 1.5s;
  }
}

.offcanvas {
  position: fixed;
  bottom: 0;
  z-index: 1045;
  display: flex;
  flex-direction: column;
  max-width: 100%;
  visibility: hidden;
  background-color: #fff;
  background-clip: padding-box;
  outline: 0;
  transition: transform 0.3s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .offcanvas {
    transition: none;
  }
}

.offcanvas-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000;
}

.offcanvas-backdrop.fade {
  opacity: 0;
}

.offcanvas-backdrop.show {
  opacity: 0.5;
}

.offcanvas-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 1rem;
}

.offcanvas-header .btn-close {
  padding: 0.5rem 0.5rem;
  margin-top: -0.5rem;
  margin-right: -0.5rem;
  margin-bottom: -0.5rem;
}

.offcanvas-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.offcanvas-body {
  flex-grow: 1;
  padding: 1rem 1rem;
  overflow-y: auto;
}

.offcanvas-start {
  top: 0;
  left: 0;
  width: 400px;
  border-right: 1px solid rgba(0, 0, 0, 0.2);
  transform: translateX(-100%);
}

.offcanvas-end {
  top: 0;
  right: 0;
  width: 400px;
  border-left: 1px solid rgba(0, 0, 0, 0.2);
  transform: translateX(100%);
}

.offcanvas-top {
  top: 0;
  right: 0;
  left: 0;
  height: 30vh;
  max-height: 100%;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  transform: translateY(-100%);
}

.offcanvas-bottom {
  right: 0;
  left: 0;
  height: 30vh;
  max-height: 100%;
  border-top: 1px solid rgba(0, 0, 0, 0.2);
  transform: translateY(100%);
}

.offcanvas.show {
  transform: none;
}

.placeholder {
  display: inline-block;
  min-height: 1em;
  vertical-align: middle;
  cursor: wait;
  background-color: currentColor;
  opacity: 0.5;
}

.placeholder.btn::before, .fc button.placeholder::before, .ajax-upload-dragdrop .placeholder.ajax-file-upload::before, .swal2-modal .swal2-buttonswrapper .placeholder.swal2-styled::before, .wizard > .actions a.placeholder::before {
  display: inline-block;
  content: "";
}

.placeholder-xs {
  min-height: .6em;
}

.placeholder-sm {
  min-height: .8em;
}

.placeholder-lg {
  min-height: 1.2em;
}

.placeholder-glow .placeholder {
  animation: placeholder-glow 2s ease-in-out infinite;
}

@keyframes placeholder-glow {
  50% {
    opacity: 0.2;
  }
}

.placeholder-wave {
  mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
  mask-size: 200% 100%;
  animation: placeholder-wave 2s linear infinite;
}

@keyframes placeholder-wave {
  100% {
    mask-position: -200% 0%;
  }
}

.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.link-primary {
  color: <?php echo $settings['theme']; ?>;
}

.link-primary:hover, .link-primary:focus {
  color: #3c3a8a;
}

.link-secondary {
  color: #a3a4a5;
}

.link-secondary:hover, .link-secondary:focus {
  color: #b5b6b7;
}

.link-success {
  color: #57B657;
}

.link-success:hover, .link-success:focus {
  color: #79c579;
}

.link-info {
  color: #248AFD;
}

.link-info:hover, .link-info:focus {
  color: #50a1fd;
}

.link-warning {
  color: #FFC100;
}

.link-warning:hover, .link-warning:focus {
  color: #ffcd33;
}

.link-danger {
  color: #FF4747;
}

.link-danger:hover, .link-danger:focus {
  color: #ff6c6c;
}

.link-light {
  color: #f8f9fa;
}

.link-light:hover, .link-light:focus {
  color: #f9fafb;
}

.link-dark {
  color: #282f3a;
}

.link-dark:hover, .link-dark:focus {
  color: #20262e;
}

.ratio {
  position: relative;
  width: 100%;
}

.ratio::before {
  display: block;
  padding-top: var(--bs-aspect-ratio);
  content: "";
}

.ratio > * {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.ratio-1x1 {
  --bs-aspect-ratio: 100%;
}

.ratio-4x3 {
  --bs-aspect-ratio: calc(3 / 4 * 100%);
}

.ratio-16x9 {
  --bs-aspect-ratio: calc(9 / 16 * 100%);
}

.ratio-21x9 {
  --bs-aspect-ratio: calc(9 / 21 * 100%);
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

.sticky-top {
  position: sticky;
  top: 0;
  z-index: 1020;
}

@media (min-width: 576px) {
  .sticky-sm-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

@media (min-width: 768px) {
  .sticky-md-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

@media (min-width: 992px) {
  .sticky-lg-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

@media (min-width: 1200px) {
  .sticky-xl-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

@media (min-width: 1400px) {
  .sticky-xxl-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

.hstack {
  display: flex;
  flex-direction: row;
  align-items: center;
  align-self: stretch;
}

.vstack {
  display: flex;
  flex: 1 1 auto;
  flex-direction: column;
  align-self: stretch;
}

.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important;
}

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  content: "";
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.vr {
  display: inline-block;
  align-self: stretch;
  width: 1px;
  min-height: 1em;
  background-color: currentColor;
  opacity: 0.25;
}

.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.float-start {
  float: left !important;
}

.float-end {
  float: right !important;
}

.float-none {
  float: none !important;
}

.opacity-0 {
  opacity: 0 !important;
}

.opacity-25 {
  opacity: 0.25 !important;
}

.opacity-50 {
  opacity: 0.5 !important;
}

.opacity-75 {
  opacity: 0.75 !important;
}

.opacity-100 {
  opacity: 1 !important;
}

.overflow-auto {
  overflow: auto !important;
}

.overflow-hidden {
  overflow: hidden !important;
}

.overflow-visible {
  overflow: visible !important;
}

.overflow-scroll {
  overflow: scroll !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-grid {
  display: grid !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex, .loader-demo-box, .data-icon-card-primary .background-icon, .data-icon-card-secondary .background-icon, .data-icon-card-success .background-icon, .data-icon-card-info .background-icon, .data-icon-card-warning .background-icon, .data-icon-card-danger .background-icon, .data-icon-card-light .background-icon, .data-icon-card-dark .background-icon, .list-wrapper ul li, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user, .email-wrapper .mail-list-container .mail-list .details, .email-wrapper .mail-view .message-body .attachments-sections ul li .thumb, .email-wrapper .mail-view .message-body .attachments-sections ul li .details .buttons, .lightGallery .image-tile .demo-gallery-poster, .swal2-modal, .navbar .navbar-menu-wrapper .navbar-nav, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item, .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right .nav-item {
  display: flex !important;
}

.d-inline-flex, .email-wrapper .mail-view .message-body .attachments-sections ul li {
  display: inline-flex !important;
}

.d-none, .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right .nav-item.nav-settings {
  display: none !important;
}

.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
  box-shadow: none !important;
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: sticky !important;
}

.top-0 {
  top: 0 !important;
}

.top-50 {
  top: 50% !important;
}

.top-100 {
  top: 100% !important;
}

.bottom-0 {
  bottom: 0 !important;
}

.bottom-50 {
  bottom: 50% !important;
}

.bottom-100 {
  bottom: 100% !important;
}

.start-0 {
  left: 0 !important;
}

.start-50 {
  left: 50% !important;
}

.start-100 {
  left: 100% !important;
}

.end-0 {
  right: 0 !important;
}

.end-50 {
  right: 50% !important;
}

.end-100 {
  right: 100% !important;
}

.translate-middle {
  transform: translate(-50%, -50%) !important;
}

.translate-middle-x {
  transform: translateX(-50%) !important;
}

.translate-middle-y {
  transform: translateY(-50%) !important;
}

.border, .loader-demo-box {
  border: 1px solid #575757 !important;
}

.border-0 {
  border: 0 !important;
}

.border-top {
  border-top: 1px solid #575757 !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-end {
  border-right: 1px solid #575757 !important;
}

.border-end-0 {
  border-right: 0 !important;
}

.border-bottom {
  border-bottom: 1px solid #575757 !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-start {
  border-left: 1px solid #575757 !important;
}

.border-start-0 {
  border-left: 0 !important;
}

.border-primary {
  border-color: <?php echo $settings['theme']; ?> !important;
}

.border-secondary, .loader-demo-box {
  border-color: #a3a4a5 !important;
}

.border-success, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm {
  border-color: #57B657 !important;
}

.border-info {
  border-color: #248AFD !important;
}

.border-warning {
  border-color: #FFC100 !important;
}

.border-danger {
  border-color: #FF4747 !important;
}

.border-light {
  border-color: #f8f9fa !important;
}

.border-dark {
  border-color: #282f3a !important;
}

.border-white {
  border-color: #ffffff !important;
}

.border-1 {
  border-width: 1px !important;
}

.border-2 {
  border-width: 2px !important;
}

.border-3 {
  border-width: 3px !important;
}

.border-4 {
  border-width: 4px !important;
}

.border-5 {
  border-width: 5px !important;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.w-auto {
  width: auto !important;
}

.mw-100 {
  max-width: 100% !important;
}

.vw-100 {
  width: 100vw !important;
}

.min-vw-100 {
  min-width: 100vw !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.h-auto {
  height: auto !important;
}

.mh-100 {
  max-height: 100% !important;
}

.vh-100 {
  height: 100vh !important;
}

.min-vh-100 {
  min-height: 100vh !important;
}

.flex-fill {
  flex: 1 1 auto !important;
}

.flex-row, .email-wrapper .mail-view .message-body .attachments-sections ul li, .navbar .navbar-menu-wrapper .navbar-nav {
  flex-direction: row !important;
}

.flex-column, .nav-tabs.nav-tabs-vertical, .nav-tabs.nav-tabs-vertical-custom, .nav-pills.nav-pills-vertical, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user {
  flex-direction: column !important;
}

.flex-row-reverse {
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  flex-direction: column-reverse !important;
}

.flex-grow-0 {
  flex-grow: 0 !important;
}

.flex-grow-1 {
  flex-grow: 1 !important;
}

.flex-shrink-0 {
  flex-shrink: 0 !important;
}

.flex-shrink-1 {
  flex-shrink: 1 !important;
}

.flex-wrap {
  flex-wrap: wrap !important;
}

.flex-nowrap {
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important;
}

.gap-0 {
  gap: 0 !important;
}

.gap-1 {
  gap: 0.25rem !important;
}

.gap-2 {
  gap: 0.5rem !important;
}

.gap-3 {
  gap: 1rem !important;
}

.gap-4 {
  gap: 1.5rem !important;
}

.gap-5 {
  gap: 3rem !important;
}

.justify-content-start, .list-wrapper ul li {
  justify-content: flex-start !important;
}

.justify-content-end, .data-icon-card-primary .background-icon, .data-icon-card-secondary .background-icon, .data-icon-card-success .background-icon, .data-icon-card-info .background-icon, .data-icon-card-warning .background-icon, .data-icon-card-danger .background-icon, .data-icon-card-light .background-icon, .data-icon-card-dark .background-icon, .email-wrapper .mail-list-container .mail-list .details {
  justify-content: flex-end !important;
}

.justify-content-center, .email-wrapper .mail-view .message-body .attachments-sections ul li .thumb {
  justify-content: center !important;
}

.justify-content-between {
  justify-content: space-between !important;
}

.justify-content-around {
  justify-content: space-around !important;
}

.justify-content-evenly {
  justify-content: space-evenly !important;
}

.align-items-start {
  align-items: flex-start !important;
}

.align-items-end {
  align-items: flex-end !important;
}

.align-items-center, .loader-demo-box, .list-wrapper ul li, .email-wrapper .mail-view .message-body .attachments-sections ul li .thumb, .email-wrapper .mail-view .message-body .attachments-sections ul li .details .buttons, .navbar .navbar-menu-wrapper .navbar-nav, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item, .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right .nav-item {
  align-items: center !important;
}

.align-items-baseline {
  align-items: baseline !important;
}

.align-items-stretch, .email-wrapper .mail-view .message-body .attachments-sections ul li, .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
  align-items: stretch !important;
}

.align-content-start {
  align-content: flex-start !important;
}

.align-content-end {
  align-content: flex-end !important;
}

.align-content-center {
  align-content: center !important;
}

.align-content-between {
  align-content: space-between !important;
}

.align-content-around {
  align-content: space-around !important;
}

.align-content-stretch {
  align-content: stretch !important;
}

.align-self-auto {
  align-self: auto !important;
}

.align-self-start {
  align-self: flex-start !important;
}

.align-self-end {
  align-self: flex-end !important;
}

.align-self-center {
  align-self: center !important;
}

.align-self-baseline {
  align-self: baseline !important;
}

.align-self-stretch, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings, .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
  align-self: stretch !important;
}

.order-first {
  order: -1 !important;
}

.order-0 {
  order: 0 !important;
}

.order-1 {
  order: 1 !important;
}

.order-2 {
  order: 2 !important;
}

.order-3 {
  order: 3 !important;
}

.order-4 {
  order: 4 !important;
}

.order-5 {
  order: 5 !important;
}

.order-last {
  order: 6 !important;
}

.m-0 {
  margin: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important;
}

.mx-1 {
  margin-right: 0.25rem !important;
  margin-left: 0.25rem !important;
}

.mx-2 {
  margin-right: 0.5rem !important;
  margin-left: 0.5rem !important;
}

.mx-3 {
  margin-right: 1rem !important;
  margin-left: 1rem !important;
}

.mx-4 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important;
}

.mx-5 {
  margin-right: 3rem !important;
  margin-left: 3rem !important;
}

.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important;
}

.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

.my-1 {
  margin-top: 0.25rem !important;
  margin-bottom: 0.25rem !important;
}

.my-2 {
  margin-top: 0.5rem !important;
  margin-bottom: 0.5rem !important;
}

.my-3 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important;
}

.my-4 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important;
}

.my-5 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important;
}

.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important;
}

.mt-0, .demo-modal .modal-dialog {
  margin-top: 0 !important;
}

.mt-1, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel {
  margin-top: 0.25rem !important;
}

.mt-2, .template-demo > .btn-group, .fc .template-demo > .fc-button-group,
.template-demo > .btn-group-vertical, .template-demo .circle-progress {
  margin-top: 0.5rem !important;
}

.mt-3, .template-demo > .btn, .fc .template-demo > button, .ajax-upload-dragdrop .template-demo > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .template-demo > .swal2-styled, .wizard > .actions .template-demo > a, .template-demo > .btn-toolbar {
  margin-top: 1rem !important;
}

.mt-4 {
  margin-top: 1.5rem !important;
}

.mt-5 {
  margin-top: 3rem !important;
}

.mt-auto {
  margin-top: auto !important;
}

.me-0, .rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item i, .rtl .settings-panel .events i {
  margin-right: 0 !important;
}

.me-1 {
  margin-right: 0.25rem !important;
}

.me-2, .template-demo > .btn, .fc .template-demo > button, .ajax-upload-dragdrop .template-demo > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .template-demo > .swal2-styled, .wizard > .actions .template-demo > a, .template-demo > .btn-group, .fc .template-demo > .fc-button-group,
.template-demo > .btn-group-vertical, .template-demo > .dropdown {
  margin-right: 0.5rem !important;
}

.me-3, .template-demo > .btn-toolbar {
  margin-right: 1rem !important;
}

.me-4 {
  margin-right: 1.5rem !important;
}

.me-5 {
  margin-right: 3rem !important;
}

.me-auto, .rtl .list-wrapper .remove {
  margin-right: auto !important;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.mb-1 {
  margin-bottom: 0.25rem !important;
}

.mb-2 {
  margin-bottom: 0.5rem !important;
}

.mb-3, .template-demo .circle-progress-block {
  margin-bottom: 1rem !important;
}

.mb-4 {
  margin-bottom: 1.5rem !important;
}

.mb-5 {
  margin-bottom: 3rem !important;
}

.mb-auto {
  margin-bottom: auto !important;
}

.ms-0, .rtl .preview-list .preview-item .preview-thumbnail .preview-icon i, .rtl .list-wrapper .remove {
  margin-left: 0 !important;
}

.ms-1 {
  margin-left: 0.25rem !important;
}

.ms-2, .btn-toolbar .btn-group + .btn-group, .btn-toolbar .fc .fc-button-group + .btn-group, .fc .btn-toolbar .fc-button-group + .btn-group, .btn-toolbar .fc .btn-group + .fc-button-group, .fc .btn-toolbar .btn-group + .fc-button-group, .btn-toolbar .fc .fc-button-group + .fc-button-group, .fc .btn-toolbar .fc-button-group + .fc-button-group, .rtl .settings-panel .events i {
  margin-left: 0.5rem !important;
}

.ms-3 {
  margin-left: 1rem !important;
}

.ms-4 {
  margin-left: 1.5rem !important;
}

.ms-5 {
  margin-left: 3rem !important;
}

.ms-auto, .list-wrapper .remove {
  margin-left: auto !important;
}

.p-0 {
  padding: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important;
}

.px-1 {
  padding-right: 0.25rem !important;
  padding-left: 0.25rem !important;
}

.px-2, .template-demo .circle-progress-block {
  padding-right: 0.5rem !important;
  padding-left: 0.5rem !important;
}

.px-3 {
  padding-right: 1rem !important;
  padding-left: 1rem !important;
}

.px-4 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important;
}

.px-5 {
  padding-right: 3rem !important;
  padding-left: 3rem !important;
}

.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}

.py-1 {
  padding-top: 0.25rem !important;
  padding-bottom: 0.25rem !important;
}

.py-2 {
  padding-top: 0.5rem !important;
  padding-bottom: 0.5rem !important;
}

.py-3 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important;
}

.py-4 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important;
}

.py-5 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important;
}

.pt-0 {
  padding-top: 0 !important;
}

.pt-1 {
  padding-top: 0.25rem !important;
}

.pt-2 {
  padding-top: 0.5rem !important;
}

.pt-3 {
  padding-top: 1rem !important;
}

.pt-4 {
  padding-top: 1.5rem !important;
}

.pt-5 {
  padding-top: 3rem !important;
}

.pe-0 {
  padding-right: 0 !important;
}

.pe-1 {
  padding-right: 0.25rem !important;
}

.pe-2 {
  padding-right: 0.5rem !important;
}

.pe-3 {
  padding-right: 1rem !important;
}

.pe-4 {
  padding-right: 1.5rem !important;
}

.pe-5 {
  padding-right: 3rem !important;
}

.pb-0 {
  padding-bottom: 0 !important;
}

.pb-1 {
  padding-bottom: 0.25rem !important;
}

.pb-2 {
  padding-bottom: 0.5rem !important;
}

.pb-3 {
  padding-bottom: 1rem !important;
}

.pb-4 {
  padding-bottom: 1.5rem !important;
}

.pb-5 {
  padding-bottom: 3rem !important;
}

.ps-0 {
  padding-left: 0 !important;
}

.ps-1 {
  padding-left: 0.25rem !important;
}

.ps-2 {
  padding-left: 0.5rem !important;
}

.ps-3 {
  padding-left: 1rem !important;
}

.ps-4 {
  padding-left: 1.5rem !important;
}

.ps-5 {
  padding-left: 3rem !important;
}

.font-monospace {
  font-family: var(--bs-font-monospace) !important;
}

.fs-1 {
  font-size: calc(1.375rem + 1.5vw) !important;
}

.fs-2 {
  font-size: calc(1.325rem + 0.9vw) !important;
}

.fs-3 {
  font-size: calc(1.3rem + 0.6vw) !important;
}

.fs-4 {
  font-size: calc(1.275rem + 0.3vw) !important;
}

.fs-5 {
  font-size: 1.25rem !important;
}

.fs-6 {
  font-size: 1rem !important;
}

.fst-italic {
  font-style: italic !important;
}

.fst-normal {
  font-style: normal !important;
}

.fw-light {
  font-weight: 300 !important;
}

.fw-lighter {
  font-weight: lighter !important;
}

.fw-normal {
  font-weight: 400 !important;
}

.fw-bold {
  font-weight: 700 !important;
}

.fw-bolder {
  font-weight: bolder !important;
}

.lh-1 {
  line-height: 1 !important;
}

.lh-sm {
  line-height: 1.25 !important;
}

.lh-base {
  line-height: 1.5 !important;
}

.lh-lg {
  line-height: 2 !important;
}

.text-start {
  text-align: left !important;
}

.text-end {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

.text-decoration-none {
  text-decoration: none !important;
}

.text-decoration-underline {
  text-decoration: underline !important;
}

.text-decoration-line-through {
  text-decoration: line-through !important;
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.text-wrap {
  white-space: normal !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

/* rtl:begin:remove */
.text-break {
  word-wrap: break-word !important;
  word-break: break-word !important;
}

/* rtl:end:remove */
.text-primary, .list-wrapper .completed .remove {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
}

.text-secondary, .list-wrapper .remove {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important;
}

.text-success {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-success-rgb), var(--bs-text-opacity)) !important;
}

.text-info {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-info-rgb), var(--bs-text-opacity)) !important;
}

.text-warning {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important;
}

.text-danger {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-danger-rgb), var(--bs-text-opacity)) !important;
}

.text-light {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-light-rgb), var(--bs-text-opacity)) !important;
}

.text-dark {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important;
}

.text-black {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-black-rgb), var(--bs-text-opacity)) !important;
}

.text-white {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
}

.text-body {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-body-color-rgb), var(--bs-text-opacity)) !important;
}

.text-muted, .preview-list .preview-item .preview-item-content p .content-category, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation, .email-wrapper .mail-list-container .mail-list .content .message_text, .email-wrapper .mail-list-container .mail-list .details .date {
  --bs-text-opacity: 1;
  color: #9c9fa6 !important;
}

.text-black-50 {
  --bs-text-opacity: 1;
  color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
  --bs-text-opacity: 1;
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-reset {
  --bs-text-opacity: 1;
  color: inherit !important;
}

.text-opacity-25 {
  --bs-text-opacity: 0.25;
}

.text-opacity-50 {
  --bs-text-opacity: 0.5;
}

.text-opacity-75 {
  --bs-text-opacity: 0.75;
}

.text-opacity-100 {
  --bs-text-opacity: 1;
}

.bg-primary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
}

.bg-secondary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important;
}

.bg-success, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important;
}

.bg-info {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-info-rgb), var(--bs-bg-opacity)) !important;
}

.bg-warning {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-warning-rgb), var(--bs-bg-opacity)) !important;
}

.bg-danger {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-danger-rgb), var(--bs-bg-opacity)) !important;
}

.bg-light {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
}

.bg-dark {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
}

.bg-black {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-black-rgb), var(--bs-bg-opacity)) !important;
}

.bg-white {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important;
}

.bg-body {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-body-bg-rgb), var(--bs-bg-opacity)) !important;
}

.bg-transparent {
  --bs-bg-opacity: 1;
  background-color: transparent !important;
}

.bg-opacity-10 {
  --bs-bg-opacity: 0.1;
}

.bg-opacity-25 {
  --bs-bg-opacity: 0.25;
}

.bg-opacity-50 {
  --bs-bg-opacity: 0.5;
}

.bg-opacity-75 {
  --bs-bg-opacity: 0.75;
}

.bg-opacity-100 {
  --bs-bg-opacity: 1;
}

.bg-gradient {
  background-image: var(--bs-gradient) !important;
}

.user-select-all {
  user-select: all !important;
}

.user-select-auto {
  user-select: auto !important;
}

.user-select-none {
  user-select: none !important;
}

.pe-none {
  pointer-events: none !important;
}

.pe-auto {
  pointer-events: auto !important;
}

.rounded, .loader-demo-box {
  border-radius: 8px !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.rounded-1 {
  border-radius: 0.2rem !important;
}

.rounded-2 {
  border-radius: 8px !important;
}

.rounded-3 {
  border-radius: 0.3rem !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.rounded-pill {
  border-radius: 50rem !important;
}

.rounded-top {
  border-top-left-radius: 8px !important;
  border-top-right-radius: 8px !important;
}

.rounded-end {
  border-top-right-radius: 8px !important;
  border-bottom-right-radius: 8px !important;
}

.rounded-bottom {
  border-bottom-right-radius: 8px !important;
  border-bottom-left-radius: 8px !important;
}

.rounded-start {
  border-bottom-left-radius: 8px !important;
  border-top-left-radius: 8px !important;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

@media (min-width: 576px) {
  .float-sm-start {
    float: left !important;
  }
  .float-sm-end {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-grid {
    display: grid !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: inline-flex !important;
  }
  .d-sm-none {
    display: none !important;
  }
  .flex-sm-fill {
    flex: 1 1 auto !important;
  }
  .flex-sm-row {
    flex-direction: row !important;
  }
  .flex-sm-column {
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-sm-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-sm-wrap {
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-sm-0 {
    gap: 0 !important;
  }
  .gap-sm-1 {
    gap: 0.25rem !important;
  }
  .gap-sm-2 {
    gap: 0.5rem !important;
  }
  .gap-sm-3 {
    gap: 1rem !important;
  }
  .gap-sm-4 {
    gap: 1.5rem !important;
  }
  .gap-sm-5 {
    gap: 3rem !important;
  }
  .justify-content-sm-start {
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    justify-content: center !important;
  }
  .justify-content-sm-between {
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    justify-content: space-around !important;
  }
  .justify-content-sm-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-sm-start {
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    align-items: center !important;
  }
  .align-items-sm-baseline {
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    align-items: stretch !important;
  }
  .align-content-sm-start {
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    align-content: center !important;
  }
  .align-content-sm-between {
    align-content: space-between !important;
  }
  .align-content-sm-around {
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    align-self: auto !important;
  }
  .align-self-sm-start {
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    align-self: center !important;
  }
  .align-self-sm-baseline {
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    align-self: stretch !important;
  }
  .order-sm-first {
    order: -1 !important;
  }
  .order-sm-0 {
    order: 0 !important;
  }
  .order-sm-1 {
    order: 1 !important;
  }
  .order-sm-2 {
    order: 2 !important;
  }
  .order-sm-3 {
    order: 3 !important;
  }
  .order-sm-4 {
    order: 4 !important;
  }
  .order-sm-5 {
    order: 5 !important;
  }
  .order-sm-last {
    order: 6 !important;
  }
  .m-sm-0 {
    margin: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 1rem !important;
  }
  .m-sm-4 {
    margin: 1.5rem !important;
  }
  .m-sm-5 {
    margin: 3rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mx-sm-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-sm-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-sm-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-sm-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-sm-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-sm-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-sm-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-sm-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-sm-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-sm-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-sm-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-sm-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-sm-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-sm-0 {
    margin-top: 0 !important;
  }
  .mt-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mt-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mt-sm-3 {
    margin-top: 1rem !important;
  }
  .mt-sm-4 {
    margin-top: 1.5rem !important;
  }
  .mt-sm-5 {
    margin-top: 3rem !important;
  }
  .mt-sm-auto {
    margin-top: auto !important;
  }
  .me-sm-0 {
    margin-right: 0 !important;
  }
  .me-sm-1 {
    margin-right: 0.25rem !important;
  }
  .me-sm-2 {
    margin-right: 0.5rem !important;
  }
  .me-sm-3 {
    margin-right: 1rem !important;
  }
  .me-sm-4 {
    margin-right: 1.5rem !important;
  }
  .me-sm-5 {
    margin-right: 3rem !important;
  }
  .me-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-0 {
    margin-bottom: 0 !important;
  }
  .mb-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-sm-3 {
    margin-bottom: 1rem !important;
  }
  .mb-sm-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-sm-5 {
    margin-bottom: 3rem !important;
  }
  .mb-sm-auto {
    margin-bottom: auto !important;
  }
  .ms-sm-0 {
    margin-left: 0 !important;
  }
  .ms-sm-1 {
    margin-left: 0.25rem !important;
  }
  .ms-sm-2 {
    margin-left: 0.5rem !important;
  }
  .ms-sm-3 {
    margin-left: 1rem !important;
  }
  .ms-sm-4 {
    margin-left: 1.5rem !important;
  }
  .ms-sm-5 {
    margin-left: 3rem !important;
  }
  .ms-sm-auto {
    margin-left: auto !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 1rem !important;
  }
  .p-sm-4 {
    padding: 1.5rem !important;
  }
  .p-sm-5 {
    padding: 3rem !important;
  }
  .px-sm-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-sm-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-sm-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-sm-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-sm-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-sm-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-sm-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-sm-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-sm-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-sm-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-sm-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-sm-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-sm-0 {
    padding-top: 0 !important;
  }
  .pt-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pt-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pt-sm-3 {
    padding-top: 1rem !important;
  }
  .pt-sm-4 {
    padding-top: 1.5rem !important;
  }
  .pt-sm-5 {
    padding-top: 3rem !important;
  }
  .pe-sm-0 {
    padding-right: 0 !important;
  }
  .pe-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pe-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pe-sm-3 {
    padding-right: 1rem !important;
  }
  .pe-sm-4 {
    padding-right: 1.5rem !important;
  }
  .pe-sm-5 {
    padding-right: 3rem !important;
  }
  .pb-sm-0 {
    padding-bottom: 0 !important;
  }
  .pb-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-sm-3 {
    padding-bottom: 1rem !important;
  }
  .pb-sm-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-sm-5 {
    padding-bottom: 3rem !important;
  }
  .ps-sm-0 {
    padding-left: 0 !important;
  }
  .ps-sm-1 {
    padding-left: 0.25rem !important;
  }
  .ps-sm-2 {
    padding-left: 0.5rem !important;
  }
  .ps-sm-3 {
    padding-left: 1rem !important;
  }
  .ps-sm-4 {
    padding-left: 1.5rem !important;
  }
  .ps-sm-5 {
    padding-left: 3rem !important;
  }
  .text-sm-start {
    text-align: left !important;
  }
  .text-sm-end {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}

@media (min-width: 768px) {
  .float-md-start {
    float: left !important;
  }
  .float-md-end {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-grid {
    display: grid !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: flex !important;
  }
  .d-md-inline-flex {
    display: inline-flex !important;
  }
  .d-md-none {
    display: none !important;
  }
  .flex-md-fill {
    flex: 1 1 auto !important;
  }
  .flex-md-row {
    flex-direction: row !important;
  }
  .flex-md-column {
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-md-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-md-wrap {
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-md-0 {
    gap: 0 !important;
  }
  .gap-md-1 {
    gap: 0.25rem !important;
  }
  .gap-md-2 {
    gap: 0.5rem !important;
  }
  .gap-md-3 {
    gap: 1rem !important;
  }
  .gap-md-4 {
    gap: 1.5rem !important;
  }
  .gap-md-5 {
    gap: 3rem !important;
  }
  .justify-content-md-start {
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    justify-content: center !important;
  }
  .justify-content-md-between {
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    justify-content: space-around !important;
  }
  .justify-content-md-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-md-start {
    align-items: flex-start !important;
  }
  .align-items-md-end {
    align-items: flex-end !important;
  }
  .align-items-md-center {
    align-items: center !important;
  }
  .align-items-md-baseline {
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    align-items: stretch !important;
  }
  .align-content-md-start {
    align-content: flex-start !important;
  }
  .align-content-md-end {
    align-content: flex-end !important;
  }
  .align-content-md-center {
    align-content: center !important;
  }
  .align-content-md-between {
    align-content: space-between !important;
  }
  .align-content-md-around {
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    align-content: stretch !important;
  }
  .align-self-md-auto {
    align-self: auto !important;
  }
  .align-self-md-start {
    align-self: flex-start !important;
  }
  .align-self-md-end {
    align-self: flex-end !important;
  }
  .align-self-md-center {
    align-self: center !important;
  }
  .align-self-md-baseline {
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    align-self: stretch !important;
  }
  .order-md-first {
    order: -1 !important;
  }
  .order-md-0 {
    order: 0 !important;
  }
  .order-md-1 {
    order: 1 !important;
  }
  .order-md-2 {
    order: 2 !important;
  }
  .order-md-3 {
    order: 3 !important;
  }
  .order-md-4 {
    order: 4 !important;
  }
  .order-md-5 {
    order: 5 !important;
  }
  .order-md-last {
    order: 6 !important;
  }
  .m-md-0 {
    margin: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .m-md-3 {
    margin: 1rem !important;
  }
  .m-md-4 {
    margin: 1.5rem !important;
  }
  .m-md-5 {
    margin: 3rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mx-md-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-md-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-md-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-md-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-md-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-md-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-md-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-md-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-md-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-md-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-md-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-md-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-md-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-md-0 {
    margin-top: 0 !important;
  }
  .mt-md-1 {
    margin-top: 0.25rem !important;
  }
  .mt-md-2 {
    margin-top: 0.5rem !important;
  }
  .mt-md-3 {
    margin-top: 1rem !important;
  }
  .mt-md-4 {
    margin-top: 1.5rem !important;
  }
  .mt-md-5 {
    margin-top: 3rem !important;
  }
  .mt-md-auto {
    margin-top: auto !important;
  }
  .me-md-0 {
    margin-right: 0 !important;
  }
  .me-md-1 {
    margin-right: 0.25rem !important;
  }
  .me-md-2 {
    margin-right: 0.5rem !important;
  }
  .me-md-3 {
    margin-right: 1rem !important;
  }
  .me-md-4 {
    margin-right: 1.5rem !important;
  }
  .me-md-5 {
    margin-right: 3rem !important;
  }
  .me-md-auto {
    margin-right: auto !important;
  }
  .mb-md-0 {
    margin-bottom: 0 !important;
  }
  .mb-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-md-3 {
    margin-bottom: 1rem !important;
  }
  .mb-md-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-md-5 {
    margin-bottom: 3rem !important;
  }
  .mb-md-auto {
    margin-bottom: auto !important;
  }
  .ms-md-0 {
    margin-left: 0 !important;
  }
  .ms-md-1 {
    margin-left: 0.25rem !important;
  }
  .ms-md-2 {
    margin-left: 0.5rem !important;
  }
  .ms-md-3 {
    margin-left: 1rem !important;
  }
  .ms-md-4 {
    margin-left: 1.5rem !important;
  }
  .ms-md-5 {
    margin-left: 3rem !important;
  }
  .ms-md-auto {
    margin-left: auto !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .p-md-3 {
    padding: 1rem !important;
  }
  .p-md-4 {
    padding: 1.5rem !important;
  }
  .p-md-5 {
    padding: 3rem !important;
  }
  .px-md-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-md-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-md-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-md-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-md-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-md-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-md-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-md-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-md-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-md-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-md-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-md-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-md-0 {
    padding-top: 0 !important;
  }
  .pt-md-1 {
    padding-top: 0.25rem !important;
  }
  .pt-md-2 {
    padding-top: 0.5rem !important;
  }
  .pt-md-3 {
    padding-top: 1rem !important;
  }
  .pt-md-4 {
    padding-top: 1.5rem !important;
  }
  .pt-md-5 {
    padding-top: 3rem !important;
  }
  .pe-md-0 {
    padding-right: 0 !important;
  }
  .pe-md-1 {
    padding-right: 0.25rem !important;
  }
  .pe-md-2 {
    padding-right: 0.5rem !important;
  }
  .pe-md-3 {
    padding-right: 1rem !important;
  }
  .pe-md-4 {
    padding-right: 1.5rem !important;
  }
  .pe-md-5 {
    padding-right: 3rem !important;
  }
  .pb-md-0 {
    padding-bottom: 0 !important;
  }
  .pb-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-md-3 {
    padding-bottom: 1rem !important;
  }
  .pb-md-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-md-5 {
    padding-bottom: 3rem !important;
  }
  .ps-md-0 {
    padding-left: 0 !important;
  }
  .ps-md-1 {
    padding-left: 0.25rem !important;
  }
  .ps-md-2 {
    padding-left: 0.5rem !important;
  }
  .ps-md-3 {
    padding-left: 1rem !important;
  }
  .ps-md-4 {
    padding-left: 1.5rem !important;
  }
  .ps-md-5 {
    padding-left: 3rem !important;
  }
  .text-md-start {
    text-align: left !important;
  }
  .text-md-end {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}

@media (min-width: 992px) {
  .float-lg-start {
    float: left !important;
  }
  .float-lg-end {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-grid {
    display: grid !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex, .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right .nav-item.nav-settings {
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: inline-flex !important;
  }
  .d-lg-none {
    display: none !important;
  }
  .flex-lg-fill {
    flex: 1 1 auto !important;
  }
  .flex-lg-row {
    flex-direction: row !important;
  }
  .flex-lg-column {
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-lg-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-lg-wrap {
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-lg-0 {
    gap: 0 !important;
  }
  .gap-lg-1 {
    gap: 0.25rem !important;
  }
  .gap-lg-2 {
    gap: 0.5rem !important;
  }
  .gap-lg-3 {
    gap: 1rem !important;
  }
  .gap-lg-4 {
    gap: 1.5rem !important;
  }
  .gap-lg-5 {
    gap: 3rem !important;
  }
  .justify-content-lg-start {
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    justify-content: center !important;
  }
  .justify-content-lg-between {
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    justify-content: space-around !important;
  }
  .justify-content-lg-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-lg-start {
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    align-items: center !important;
  }
  .align-items-lg-baseline {
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    align-items: stretch !important;
  }
  .align-content-lg-start {
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    align-content: center !important;
  }
  .align-content-lg-between {
    align-content: space-between !important;
  }
  .align-content-lg-around {
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    align-self: auto !important;
  }
  .align-self-lg-start {
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    align-self: center !important;
  }
  .align-self-lg-baseline {
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    align-self: stretch !important;
  }
  .order-lg-first {
    order: -1 !important;
  }
  .order-lg-0 {
    order: 0 !important;
  }
  .order-lg-1 {
    order: 1 !important;
  }
  .order-lg-2 {
    order: 2 !important;
  }
  .order-lg-3 {
    order: 3 !important;
  }
  .order-lg-4 {
    order: 4 !important;
  }
  .order-lg-5 {
    order: 5 !important;
  }
  .order-lg-last {
    order: 6 !important;
  }
  .m-lg-0 {
    margin: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 1rem !important;
  }
  .m-lg-4 {
    margin: 1.5rem !important;
  }
  .m-lg-5 {
    margin: 3rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mx-lg-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-lg-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-lg-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-lg-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-lg-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-lg-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-lg-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-lg-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-lg-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-lg-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-lg-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-lg-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-lg-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-lg-0 {
    margin-top: 0 !important;
  }
  .mt-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mt-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mt-lg-3 {
    margin-top: 1rem !important;
  }
  .mt-lg-4 {
    margin-top: 1.5rem !important;
  }
  .mt-lg-5 {
    margin-top: 3rem !important;
  }
  .mt-lg-auto {
    margin-top: auto !important;
  }
  .me-lg-0 {
    margin-right: 0 !important;
  }
  .me-lg-1 {
    margin-right: 0.25rem !important;
  }
  .me-lg-2 {
    margin-right: 0.5rem !important;
  }
  .me-lg-3 {
    margin-right: 1rem !important;
  }
  .me-lg-4 {
    margin-right: 1.5rem !important;
  }
  .me-lg-5 {
    margin-right: 3rem !important;
  }
  .me-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-0 {
    margin-bottom: 0 !important;
  }
  .mb-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-lg-3 {
    margin-bottom: 1rem !important;
  }
  .mb-lg-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-lg-5 {
    margin-bottom: 3rem !important;
  }
  .mb-lg-auto {
    margin-bottom: auto !important;
  }
  .ms-lg-0 {
    margin-left: 0 !important;
  }
  .ms-lg-1 {
    margin-left: 0.25rem !important;
  }
  .ms-lg-2 {
    margin-left: 0.5rem !important;
  }
  .ms-lg-3 {
    margin-left: 1rem !important;
  }
  .ms-lg-4 {
    margin-left: 1.5rem !important;
  }
  .ms-lg-5 {
    margin-left: 3rem !important;
  }
  .ms-lg-auto {
    margin-left: auto !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 1rem !important;
  }
  .p-lg-4 {
    padding: 1.5rem !important;
  }
  .p-lg-5 {
    padding: 3rem !important;
  }
  .px-lg-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-lg-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-lg-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-lg-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-lg-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-lg-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-lg-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-lg-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-lg-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-lg-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-lg-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-lg-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-lg-0 {
    padding-top: 0 !important;
  }
  .pt-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pt-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pt-lg-3 {
    padding-top: 1rem !important;
  }
  .pt-lg-4 {
    padding-top: 1.5rem !important;
  }
  .pt-lg-5 {
    padding-top: 3rem !important;
  }
  .pe-lg-0 {
    padding-right: 0 !important;
  }
  .pe-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pe-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pe-lg-3 {
    padding-right: 1rem !important;
  }
  .pe-lg-4 {
    padding-right: 1.5rem !important;
  }
  .pe-lg-5 {
    padding-right: 3rem !important;
  }
  .pb-lg-0 {
    padding-bottom: 0 !important;
  }
  .pb-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-lg-3 {
    padding-bottom: 1rem !important;
  }
  .pb-lg-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-lg-5 {
    padding-bottom: 3rem !important;
  }
  .ps-lg-0 {
    padding-left: 0 !important;
  }
  .ps-lg-1 {
    padding-left: 0.25rem !important;
  }
  .ps-lg-2 {
    padding-left: 0.5rem !important;
  }
  .ps-lg-3 {
    padding-left: 1rem !important;
  }
  .ps-lg-4 {
    padding-left: 1.5rem !important;
  }
  .ps-lg-5 {
    padding-left: 3rem !important;
  }
  .text-lg-start {
    text-align: left !important;
  }
  .text-lg-end {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}

@media (min-width: 1200px) {
  .float-xl-start {
    float: left !important;
  }
  .float-xl-end {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-grid {
    display: grid !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: inline-flex !important;
  }
  .d-xl-none {
    display: none !important;
  }
  .flex-xl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xl-row {
    flex-direction: row !important;
  }
  .flex-xl-column {
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-xl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-xl-0 {
    gap: 0 !important;
  }
  .gap-xl-1 {
    gap: 0.25rem !important;
  }
  .gap-xl-2 {
    gap: 0.5rem !important;
  }
  .gap-xl-3 {
    gap: 1rem !important;
  }
  .gap-xl-4 {
    gap: 1.5rem !important;
  }
  .gap-xl-5 {
    gap: 3rem !important;
  }
  .justify-content-xl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    justify-content: center !important;
  }
  .justify-content-xl-between {
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    justify-content: space-around !important;
  }
  .justify-content-xl-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-xl-start {
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    align-items: center !important;
  }
  .align-items-xl-baseline {
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    align-items: stretch !important;
  }
  .align-content-xl-start {
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    align-content: center !important;
  }
  .align-content-xl-between {
    align-content: space-between !important;
  }
  .align-content-xl-around {
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    align-self: auto !important;
  }
  .align-self-xl-start {
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    align-self: center !important;
  }
  .align-self-xl-baseline {
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    align-self: stretch !important;
  }
  .order-xl-first {
    order: -1 !important;
  }
  .order-xl-0 {
    order: 0 !important;
  }
  .order-xl-1 {
    order: 1 !important;
  }
  .order-xl-2 {
    order: 2 !important;
  }
  .order-xl-3 {
    order: 3 !important;
  }
  .order-xl-4 {
    order: 4 !important;
  }
  .order-xl-5 {
    order: 5 !important;
  }
  .order-xl-last {
    order: 6 !important;
  }
  .m-xl-0 {
    margin: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 1rem !important;
  }
  .m-xl-4 {
    margin: 1.5rem !important;
  }
  .m-xl-5 {
    margin: 3rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mx-xl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xl-0 {
    margin-top: 0 !important;
  }
  .mt-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xl-3 {
    margin-top: 1rem !important;
  }
  .mt-xl-4 {
    margin-top: 1.5rem !important;
  }
  .mt-xl-5 {
    margin-top: 3rem !important;
  }
  .mt-xl-auto {
    margin-top: auto !important;
  }
  .me-xl-0 {
    margin-right: 0 !important;
  }
  .me-xl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xl-3 {
    margin-right: 1rem !important;
  }
  .me-xl-4 {
    margin-right: 1.5rem !important;
  }
  .me-xl-5 {
    margin-right: 3rem !important;
  }
  .me-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xl-3 {
    margin-bottom: 1rem !important;
  }
  .mb-xl-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xl-5 {
    margin-bottom: 3rem !important;
  }
  .mb-xl-auto {
    margin-bottom: auto !important;
  }
  .ms-xl-0 {
    margin-left: 0 !important;
  }
  .ms-xl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xl-3 {
    margin-left: 1rem !important;
  }
  .ms-xl-4 {
    margin-left: 1.5rem !important;
  }
  .ms-xl-5 {
    margin-left: 3rem !important;
  }
  .ms-xl-auto {
    margin-left: auto !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 1rem !important;
  }
  .p-xl-4 {
    padding: 1.5rem !important;
  }
  .p-xl-5 {
    padding: 3rem !important;
  }
  .px-xl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-xl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-xl-0 {
    padding-top: 0 !important;
  }
  .pt-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xl-3 {
    padding-top: 1rem !important;
  }
  .pt-xl-4 {
    padding-top: 1.5rem !important;
  }
  .pt-xl-5 {
    padding-top: 3rem !important;
  }
  .pe-xl-0 {
    padding-right: 0 !important;
  }
  .pe-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xl-3 {
    padding-right: 1rem !important;
  }
  .pe-xl-4 {
    padding-right: 1.5rem !important;
  }
  .pe-xl-5 {
    padding-right: 3rem !important;
  }
  .pb-xl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xl-3 {
    padding-bottom: 1rem !important;
  }
  .pb-xl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xl-5 {
    padding-bottom: 3rem !important;
  }
  .ps-xl-0 {
    padding-left: 0 !important;
  }
  .ps-xl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xl-3 {
    padding-left: 1rem !important;
  }
  .ps-xl-4 {
    padding-left: 1.5rem !important;
  }
  .ps-xl-5 {
    padding-left: 3rem !important;
  }
  .text-xl-start {
    text-align: left !important;
  }
  .text-xl-end {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}

@media (min-width: 1400px) {
  .float-xxl-start {
    float: left !important;
  }
  .float-xxl-end {
    float: right !important;
  }
  .float-xxl-none {
    float: none !important;
  }
  .d-xxl-inline {
    display: inline !important;
  }
  .d-xxl-inline-block {
    display: inline-block !important;
  }
  .d-xxl-block {
    display: block !important;
  }
  .d-xxl-grid {
    display: grid !important;
  }
  .d-xxl-table {
    display: table !important;
  }
  .d-xxl-table-row {
    display: table-row !important;
  }
  .d-xxl-table-cell {
    display: table-cell !important;
  }
  .d-xxl-flex {
    display: flex !important;
  }
  .d-xxl-inline-flex {
    display: inline-flex !important;
  }
  .d-xxl-none {
    display: none !important;
  }
  .flex-xxl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xxl-row {
    flex-direction: row !important;
  }
  .flex-xxl-column {
    flex-direction: column !important;
  }
  .flex-xxl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xxl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xxl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xxl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xxl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xxl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-xxl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xxl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xxl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-xxl-0 {
    gap: 0 !important;
  }
  .gap-xxl-1 {
    gap: 0.25rem !important;
  }
  .gap-xxl-2 {
    gap: 0.5rem !important;
  }
  .gap-xxl-3 {
    gap: 1rem !important;
  }
  .gap-xxl-4 {
    gap: 1.5rem !important;
  }
  .gap-xxl-5 {
    gap: 3rem !important;
  }
  .justify-content-xxl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xxl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xxl-center {
    justify-content: center !important;
  }
  .justify-content-xxl-between {
    justify-content: space-between !important;
  }
  .justify-content-xxl-around {
    justify-content: space-around !important;
  }
  .justify-content-xxl-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-xxl-start {
    align-items: flex-start !important;
  }
  .align-items-xxl-end {
    align-items: flex-end !important;
  }
  .align-items-xxl-center {
    align-items: center !important;
  }
  .align-items-xxl-baseline {
    align-items: baseline !important;
  }
  .align-items-xxl-stretch {
    align-items: stretch !important;
  }
  .align-content-xxl-start {
    align-content: flex-start !important;
  }
  .align-content-xxl-end {
    align-content: flex-end !important;
  }
  .align-content-xxl-center {
    align-content: center !important;
  }
  .align-content-xxl-between {
    align-content: space-between !important;
  }
  .align-content-xxl-around {
    align-content: space-around !important;
  }
  .align-content-xxl-stretch {
    align-content: stretch !important;
  }
  .align-self-xxl-auto {
    align-self: auto !important;
  }
  .align-self-xxl-start {
    align-self: flex-start !important;
  }
  .align-self-xxl-end {
    align-self: flex-end !important;
  }
  .align-self-xxl-center {
    align-self: center !important;
  }
  .align-self-xxl-baseline {
    align-self: baseline !important;
  }
  .align-self-xxl-stretch {
    align-self: stretch !important;
  }
  .order-xxl-first {
    order: -1 !important;
  }
  .order-xxl-0 {
    order: 0 !important;
  }
  .order-xxl-1 {
    order: 1 !important;
  }
  .order-xxl-2 {
    order: 2 !important;
  }
  .order-xxl-3 {
    order: 3 !important;
  }
  .order-xxl-4 {
    order: 4 !important;
  }
  .order-xxl-5 {
    order: 5 !important;
  }
  .order-xxl-last {
    order: 6 !important;
  }
  .m-xxl-0 {
    margin: 0 !important;
  }
  .m-xxl-1 {
    margin: 0.25rem !important;
  }
  .m-xxl-2 {
    margin: 0.5rem !important;
  }
  .m-xxl-3 {
    margin: 1rem !important;
  }
  .m-xxl-4 {
    margin: 1.5rem !important;
  }
  .m-xxl-5 {
    margin: 3rem !important;
  }
  .m-xxl-auto {
    margin: auto !important;
  }
  .mx-xxl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xxl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xxl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xxl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xxl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xxl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xxl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xxl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xxl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xxl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xxl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xxl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xxl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xxl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xxl-0 {
    margin-top: 0 !important;
  }
  .mt-xxl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xxl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xxl-3 {
    margin-top: 1rem !important;
  }
  .mt-xxl-4 {
    margin-top: 1.5rem !important;
  }
  .mt-xxl-5 {
    margin-top: 3rem !important;
  }
  .mt-xxl-auto {
    margin-top: auto !important;
  }
  .me-xxl-0 {
    margin-right: 0 !important;
  }
  .me-xxl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xxl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xxl-3 {
    margin-right: 1rem !important;
  }
  .me-xxl-4 {
    margin-right: 1.5rem !important;
  }
  .me-xxl-5 {
    margin-right: 3rem !important;
  }
  .me-xxl-auto {
    margin-right: auto !important;
  }
  .mb-xxl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xxl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xxl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xxl-3 {
    margin-bottom: 1rem !important;
  }
  .mb-xxl-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xxl-5 {
    margin-bottom: 3rem !important;
  }
  .mb-xxl-auto {
    margin-bottom: auto !important;
  }
  .ms-xxl-0 {
    margin-left: 0 !important;
  }
  .ms-xxl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xxl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xxl-3 {
    margin-left: 1rem !important;
  }
  .ms-xxl-4 {
    margin-left: 1.5rem !important;
  }
  .ms-xxl-5 {
    margin-left: 3rem !important;
  }
  .ms-xxl-auto {
    margin-left: auto !important;
  }
  .p-xxl-0 {
    padding: 0 !important;
  }
  .p-xxl-1 {
    padding: 0.25rem !important;
  }
  .p-xxl-2 {
    padding: 0.5rem !important;
  }
  .p-xxl-3 {
    padding: 1rem !important;
  }
  .p-xxl-4 {
    padding: 1.5rem !important;
  }
  .p-xxl-5 {
    padding: 3rem !important;
  }
  .px-xxl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xxl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xxl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xxl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xxl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xxl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-xxl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xxl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xxl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xxl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xxl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xxl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-xxl-0 {
    padding-top: 0 !important;
  }
  .pt-xxl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xxl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xxl-3 {
    padding-top: 1rem !important;
  }
  .pt-xxl-4 {
    padding-top: 1.5rem !important;
  }
  .pt-xxl-5 {
    padding-top: 3rem !important;
  }
  .pe-xxl-0 {
    padding-right: 0 !important;
  }
  .pe-xxl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xxl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xxl-3 {
    padding-right: 1rem !important;
  }
  .pe-xxl-4 {
    padding-right: 1.5rem !important;
  }
  .pe-xxl-5 {
    padding-right: 3rem !important;
  }
  .pb-xxl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xxl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xxl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xxl-3 {
    padding-bottom: 1rem !important;
  }
  .pb-xxl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xxl-5 {
    padding-bottom: 3rem !important;
  }
  .ps-xxl-0 {
    padding-left: 0 !important;
  }
  .ps-xxl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xxl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xxl-3 {
    padding-left: 1rem !important;
  }
  .ps-xxl-4 {
    padding-left: 1.5rem !important;
  }
  .ps-xxl-5 {
    padding-left: 3rem !important;
  }
  .text-xxl-start {
    text-align: left !important;
  }
  .text-xxl-end {
    text-align: right !important;
  }
  .text-xxl-center {
    text-align: center !important;
  }
}

@media (min-width: 1200px) {
  .fs-1 {
    font-size: 2.5rem !important;
  }
  .fs-2 {
    font-size: 2rem !important;
  }
  .fs-3 {
    font-size: 1.75rem !important;
  }
  .fs-4 {
    font-size: 1.5rem !important;
  }
}

@media print {
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-grid {
    display: grid !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: flex !important;
  }
  .d-print-inline-flex {
    display: inline-flex !important;
  }
  .d-print-none {
    display: none !important;
  }
}

/*-------------------------------------------------------------------*/
/* === Template mixins === */
/* Miscellaneous Mixins */
.list-wrapper ul li .form-check, .list-wrapper ul li .form-check .form-check-label, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-name, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation, .email-wrapper .mail-list-container .mail-list .content .sender-name, .email-wrapper .mail-view .message-body .attachments-sections ul li .details p.file-name, .settings-panel .chat-list .list .info p {
  text-overflow: ellipsis;
  overflow: hidden;
  max-width: 100%;
  white-space: nowrap;
}

.list-wrapper ul li .form-check, .list-wrapper ul li .form-check .form-check-label, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-name, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation, .email-wrapper .mail-list-container .mail-list .content .sender-name, .email-wrapper .mail-view .message-body .attachments-sections ul li .details p.file-name, .settings-panel .chat-list .list .info p {
  text-overflow: ellipsis;
  overflow: hidden;
  max-width: 100%;
  white-space: nowrap;
}

/* Animation Mixins */
@keyframes dropdownAnimation {
  from {
    opacity: 0;
    transform: translate3d(0, -30px, 0);
  }
  to {
    opacity: 1;
    transform: none;
    transform: translate3d(0, 0px, 0);
  }
}

.dropdownAnimation, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu {
  animation-name: dropdownAnimation;
  -webkit-animation-duration: 0.25s;
  -moz-animation-duration: 0.25s;
  -ms-animation-duration: 0.25s;
  -o-animation-duration: 0.25s;
  animation-duration: 0.25s;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
}

@keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}

.fadeOut {
  animation-name: fadeOut;
}

.infinite-spin, #settings-trigger i {
  animation-name: spin;
  animation-duration: 3s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}

@keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translate3d(0, 100%, 0);
  }
  to {
    opacity: 1;
    transform: none;
  }
}

.fadeInUp, #settings-trigger {
  animation-name: fadeInUp;
}

/*-------------------------------------------------------------------*/
/* === Core Styles === */
/* Reset Styles */
body {
  padding: 0;
  margin: 0;
  overflow-x: hidden;
}

.form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
.tt-query,
.tt-hint, .form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
.tt-query:focus,
.tt-hint:focus {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  outline: 0;
}

a,
div, h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5,
p,
span {
  text-shadow: none;
}

[type=button]:focus,
a:active,
a:focus,
a:visited,
button::-moz-focus-inner,
input[type=reset]::-moz-focus-inner,
input[type=button]::-moz-focus-inner,
input[type=submit]::-moz-focus-inner,
input[type=file] > input[type=button]::-moz-focus-inner,
select::-moz-focus-inner {
  outline: 0;
}

input, .form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
.tt-query:focus,
.tt-hint:focus,
input:focus,
select:focus,
textarea:focus,
button:focus {
  outline: none;
  outline-width: 0;
  outline-color: transparent;
  box-shadow: none;
  outline-style: none;
}

textarea {
  resize: none;
  overflow-x: hidden;
}

.btn, .fc button, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel, .wizard > .actions a,
.btn-group.open .dropdown-toggle,
.fc .open.fc-button-group .dropdown-toggle,
.btn:active,
.fc button:active,
.ajax-upload-dragdrop .ajax-file-upload:active,
.swal2-modal .swal2-buttonswrapper .swal2-styled:active,
.wizard > .actions a:active, .btn:focus, .fc button:focus, .ajax-upload-dragdrop .ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper .swal2-styled:focus, .wizard > .actions a:focus, .btn:hover, .fc button:hover, .ajax-upload-dragdrop .ajax-file-upload:hover, .swal2-modal .swal2-buttonswrapper .swal2-styled:hover, .wizard > .actions a:hover,
.btn:visited,
.fc button:visited,
.ajax-upload-dragdrop .ajax-file-upload:visited,
.swal2-modal .swal2-buttonswrapper .swal2-styled:visited,
.wizard > .actions a:visited,
a,
a:active,
a:checked,
a:focus,
a:hover,
a:visited,
body,
button,
button:active,
button:hover,
button:visited,
div,
input,
input:active,
input:focus,
input:hover,
input:visited,
select,
select:active,
select:focus,
select:visited,
textarea,
textarea:active,
textarea:focus,
textarea:hover,
textarea:visited {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}

.btn.active.focus, .fc button.active.focus, .ajax-upload-dragdrop .active.focus.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .active.focus.swal2-styled, .wizard > .actions a.active.focus,
.btn.active:focus,
.fc button.active:focus,
.ajax-upload-dragdrop .active.ajax-file-upload:focus,
.swal2-modal .swal2-buttonswrapper .active.swal2-styled:focus,
.wizard > .actions a.active:focus,
.btn.focus,
.fc button.focus,
.ajax-upload-dragdrop .focus.ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .focus.swal2-styled,
.wizard > .actions a.focus,
.btn:active.focus,
.fc button:active.focus,
.ajax-upload-dragdrop .ajax-file-upload:active.focus,
.swal2-modal .swal2-buttonswrapper .swal2-styled:active.focus,
.wizard > .actions a:active.focus,
.btn:active:focus,
.fc button:active:focus,
.ajax-upload-dragdrop .ajax-file-upload:active:focus,
.swal2-modal .swal2-buttonswrapper .swal2-styled:active:focus,
.wizard > .actions a:active:focus, .btn:focus, .fc button:focus, .ajax-upload-dragdrop .ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper .swal2-styled:focus, .wizard > .actions a:focus,
button,
button:active,
button:checked,
button:focus,
button:hover,
button:visited {
  outline: 0;
  outline-offset: 0;
}

.bootstrap-select .dropdown-toggle:focus {
  outline: 0;
  outline-offset: 0;
}

.dropdown-menu > li > a:active,
.dropdown-menu > li > a:focus,
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:visited {
  outline: 0;
}

a:focus,
input:focus {
  border-color: transparent;
  outline: none;
}

@font-face {
  font-family: 'Nunito';
  src: url("../../fonts/Nunito/Nunito-Light.eot");
  src: url("../../fonts/Nunito/Nunito-Light.eot?#iefix") format("embedded-opentype"), url("../../fonts/Nunito/Nunito-Light.woff2") format("woff2"), url("../../fonts/Nunito/Nunito-Light.woff") format("woff"), url("../../fonts/Nunito/Nunito-Light.ttf") format("truetype");
  font-weight: 300;
  font-style: normal;
}

@font-face {
  font-family: 'Nunito';
  src: url("../../fonts/Nunito/Nunito-Bold.eot");
  src: url("../../fonts/Nunito/Nunito-Bold.eot?#iefix") format("embedded-opentype"), url("../../fonts/Nunito/Nunito-Bold.woff2") format("woff2"), url("../../fonts/Nunito/Nunito-Bold.woff") format("woff"), url("../../fonts/Nunito/Nunito-Bold.ttf") format("truetype");
  font-weight: bold;
  font-style: normal;
}

@font-face {
  font-family: 'Nunito';
  src: url("../../fonts/Nunito/Nunito-SemiBold.eot");
  src: url("../../fonts/Nunito/Nunito-SemiBold.eot?#iefix") format("embedded-opentype"), url("../../fonts/Nunito/Nunito-SemiBold.woff2") format("woff2"), url("../../fonts/Nunito/Nunito-SemiBold.woff") format("woff"), url("../../fonts/Nunito/Nunito-SemiBold.ttf") format("truetype");
  font-weight: 500;
  font-style: normal;
}

@font-face {
  font-family: 'Nunito';
  src: url("../../fonts/Nunito/Nunito-Regular.eot");
  src: url("../../fonts/Nunito/Nunito-Regular.eot?#iefix") format("embedded-opentype"), url("../../fonts/Nunito/Nunito-Regular.woff2") format("woff2"), url("../../fonts/Nunito/Nunito-Regular.woff") format("woff"), url("../../fonts/Nunito/Nunito-Regular.ttf") format("truetype");
  font-weight: normal;
  font-style: normal;
}

.bg-twitter {
  background: #2caae1;
}

.bg-facebook {
  background: #3b579d;
}

.bg-google {
  background: #dc4a38;
}

.bg-linkedin {
  background: #0177b5;
}

.bg-pinterest {
  background: #cc2127;
}

.bg-youtube {
  background: #e52d27;
}

.bg-github {
  background: #333333;
}

.bg-behance {
  background: #1769ff;
}

.bg-dribbble {
  background: #ea4c89;
}

.bg-reddit {
  background: #ff4500;
}

.bg-gradient-primary {
  background: linear-gradient(230deg, #759bff, #843cf6);
}

.bg-gradient-secondary {
  background: linear-gradient(to right, #e7ebf0, #868e96);
}

.bg-gradient-success {
  background: linear-gradient(45deg, #7bffce, #30c93e);
}

.bg-gradient-info {
  background: linear-gradient(to bottom, #0e4cfd, #6a8eff);
}

.bg-gradient-warning {
  background: linear-gradient(135deg, #ffc480, #ff763b);
}

.bg-gradient-danger {
  background: linear-gradient(316deg, #fc5286, #fbaaa2);
}

.bg-gradient-light {
  background: linear-gradient(to right, #cfd9df 0%, #e2ebf0 100%);
}

.bg-gradient-dark {
  background: linear-gradient(to right, #7d7979 0%, #000000 100%);
}

/* Typography */
body {
  font-size: 1rem;
  font-family: "Nunito", sans-serif;
  font-weight: initial;
  line-height: normal;
  -webkit-font-smoothing: antialiased;
}

h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-weight: 500;
  line-height: 1;
}

p {
  font-size: 0.875rem;
  margin-bottom: .5rem;
  line-height: 1.3rem;
}

h1, .h1,
.h1 {
  font-size: 3.125rem;
}

h2, .h2,
.h2 {
  font-size: 2.187rem;
}

h3, .h3,
.h3 {
  font-size: 1.525rem;
}

h4, .h4,
.h4 {
  font-size: 1.125rem;
}

h5, .h5,
.h5 {
  font-size: 1rem;
}

h6, .h6,
.h6 {
  font-size: .9375rem;
}

.display-1 {
  font-size: 3.75rem;
}

@media (max-width: 991px) {
  .display-1 {
    font-size: 3rem;
  }
}

.display-2 {
  font-size: 3.125rem;
}

@media (max-width: 991px) {
  .display-2 {
    font-size: 2.5rem;
  }
}

.display-3 {
  font-size: 2.5rem;
}

@media (max-width: 991px) {
  .display-3 {
    font-size: 2rem;
  }
}

.display-4 {
  font-size: 1.875rem;
}

@media (max-width: 991px) {
  .display-4 {
    font-size: 1.5rem;
  }
}

.display-5 {
  font-size: 1.25rem;
}

@media (max-width: 991px) {
  .display-5 {
    font-size: 1rem;
  }
}

.blockquote {
  padding: 1.25rem;
  border: 1px solid #575757;
}

address p {
  margin-bottom: 0;
}

.blockquote-primary {
  border-color: <?php echo $settings['theme']; ?>;
}

.blockquote-primary .blockquote-footer {
  color: <?php echo $settings['theme']; ?>;
}

.blockquote-secondary {
  border-color: #a3a4a5;
}

.blockquote-secondary .blockquote-footer {
  color: #a3a4a5;
}

.blockquote-success {
  border-color: #57B657;
}

.blockquote-success .blockquote-footer {
  color: #57B657;
}

.blockquote-info {
  border-color: #248AFD;
}

.blockquote-info .blockquote-footer {
  color: #248AFD;
}

.blockquote-warning {
  border-color: #FFC100;
}

.blockquote-warning .blockquote-footer {
  color: #FFC100;
}

.blockquote-danger {
  border-color: #FF4747;
}

.blockquote-danger .blockquote-footer {
  color: #FF4747;
}

.blockquote-light {
  border-color: #f8f9fa;
}

.blockquote-light .blockquote-footer {
  color: #f8f9fa;
}

.blockquote-dark {
  border-color: #282f3a;
}

.blockquote-dark .blockquote-footer {
  color: #282f3a;
}

.error-page h1, .error-page .h1 {
  font-size: 12rem;
}

@media (max-width: 991px) {
  .error-page h1, .error-page .h1 {
    font-size: 8rem;
  }
}

.text-twitter {
  color: #2caae1;
}

.text-facebook {
  color: #3b579d;
}

.text-google {
  color: #dc4a38;
}

.text-linkedin {
  color: #0177b5;
}

.text-pinterest {
  color: #cc2127;
}

.text-youtube {
  color: #e52d27;
}

.text-github {
  color: #333333;
}

.text-behance {
  color: #1769ff;
}

.text-dribbble {
  color: #ea4c89;
}

.text-reddit {
  color: #ff4500;
}

.page-header {
  margin-bottom: 2.5rem;
}

.page-header .page-title {
  margin-bottom: 0;
  line-height: .85;
}

.font-weight-medium {
  font-weight: 500;
}

/* Miscellanoeous */
body,
html {
  overflow-x: hidden;
  padding-right: 0 !important;
}

*:-moz-full-screen,
*:-webkit-full-screen,
*:fullscreen *:-ms-fullscreen {
  overflow: auto;
}

.container-scroller {
  overflow: hidden;
}

pre {
  background: color(gray-lighter);
  padding: 15px;
  font-size: 14px;
}

code {
  padding: 5px;
  color: #dc3545;
  font-family: "Nunito", sans-serif;
  font-weight: 300;
  font-size: 0.875rem;
  border-radius: 4px;
}

.media {
  display: flex;
}

/* Footer */
.footer {
  background: #151419;
  color: color(dark);
  padding: 30px 2.45rem;
  transition: all 0.25s ease;
  -moz-transition: all 0.25s ease;
  -webkit-transition: all 0.25s ease;
  -ms-transition: all 0.25s ease;
  font-size: calc(0.875rem - 0.05rem);
  font-family: "Nunito", sans-serif;
  font-weight: 400;
  border-top: 1px solid rgba(0, 0, 0, 0.06);
}

.footer a {
  color: #0d6efd;
  font-size: inherit;
}

@media (max-width: 991px) {
  .footer {
    margin-left: 0;
    width: 100%;
  }
}

/* Utilities */
.grid-margin {
  margin-bottom: 1.875rem;
}

@media (min-width: 576px) {
  .grid-margin-sm-0 {
    margin-bottom: 0;
  }
}

@media (min-width: 768px) {
  .grid-margin-md-0 {
    margin-bottom: 0;
  }
}

@media (min-width: 992px) {
  .grid-margin-lg-0 {
    margin-bottom: 0;
  }
}

@media (min-width: 1200px) {
  .grid-margin-xl-0 {
    margin-bottom: 0;
  }
}

.img-lg {
  width: 92px;
  height: 92px;
}

.img-sm {
  width: 43px;
  height: 43px;
}

.img-xs {
  width: 37px;
  height: 37px;
}

.img-ss {
  width: 26px;
  height: 26px;
}

.stretch-card {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: stretch;
  align-items: stretch;
  -webkit-justify-content: stretch;
  justify-content: stretch;
}

.stretch-card > .card {
  width: 100%;
  min-width: 100%;
}

@media (min-width: 576px) {
  .border-right-sm {
    border-right: 1px solid #575757;
  }
}

@media (min-width: 768px) {
  .border-right-md {
    border-right: 1px solid #575757;
  }
}

@media (min-width: 992px) {
  .border-right-lg {
    border-right: 1px solid #575757;
  }
}

@media (min-width: 576px) {
  .border-left-sm {
    border-left: 1px solid #575757;
  }
}

@media (min-width: 768px) {
  .border-left-md {
    border-left: 1px solid #575757;
  }
}

@media (min-width: 992px) {
  .border-left-lg {
    border-left: 1px solid #575757;
  }
}

.text-gray, .card .card-subtitle {
  color: #8c8c8c;
}

.text-black {
  color: #000;
}

.text-small {
  font-size: 12px;
}

.flex-grow {
  flex-grow: 1;
}

.hover-cursor:hover {
  cursor: pointer;
}

/* Demo Styles */
.template-demo .slider-wrap {
  height: 100px;
}

.template-demo .progress {
  margin-top: 1.5rem;
}

.template-demo > h2, .template-demo > .h2,
.template-demo > h3,
.template-demo > .h3,
.template-demo > h4,
.template-demo > .h4,
.template-demo > h5,
.template-demo > .h5,
.template-demo > h6,
.template-demo > .h6,
.template-demo > h1,
.template-demo > .h1 {
  border-top: 1px solid #575757;
  padding: 0.5rem 0 0;
}

.template-demo .ul-slider.noUi-horizontal {
  margin-top: 2rem;
}

.template-demo .ul-slider.noUi-vertical {
  margin-right: 2rem;
}

.template-demo > .dropdown {
  display: inline-block;
  margin-bottom: 0.5rem;
}

.template-demo nav .breadcrumb {
  margin-bottom: 1.375rem;
}

.template-demo nav:last-child .breadcrumb {
  margin-bottom: 0;
}

.template-demo .editable-form > .form-group {
  border-bottom: 1px solid #575757;
  padding-bottom: 0.8rem;
  margin-bottom: 0.8rem;
}

.template-demo .circle-progress {
  padding: 15px;
}

.demo-modal {
  position: static;
  display: block;
}

.demo-modal .modal-dialog.modal-lg {
  max-width: 100%;
}

.loader-demo-box {
  width: 100%;
  height: 200px;
}

.dropdown-menu-static-demo {
  height: 250px;
  margin-bottom: 20px;
}

.dropdown-menu-static-demo .dropdown-menu {
  z-index: 0;
}

.rounded-legend ul li {
  list-style-type: none;
  color: #9c9fa6;
  font-size: .75rem;
}

.rounded-legend ul li .legend-dots {
  width: 1rem;
  height: 1rem;
  border-radius: 100%;
  display: inline-block;
  vertical-align: text-bottom;
  margin-right: .5rem;
}

.rtl .rounded-legend ul li .legend-dots {
  margin-left: .5rem;
}

.rounded-legend.legend-horizontal {
  display: -webkit-flex;
  display: flex;
}

.rounded-legend.legend-horizontal ul li {
  display: inline-block;
  margin-right: 1.5rem;
}

.rtl .rounded-legend.legend-horizontal ul li {
  margin-right: auto;
  margin-left: 1.5rem;
}

.rounded-legend.legend-top-right ul {
  float: right;
}

.rtl .rounded-legend.legend-top-right ul {
  float: left;
}

.rounded-legend.legend-vertical ul li {
  margin-top: 1rem;
}

.demo-chart {
  height: 300px;
}

@media (max-width: 767px) {
  .demo-chart {
    height: 200px;
  }
}

.chartjs-legend ul {
  margin-bottom: 0;
  list-style: none;
  padding-left: 0;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: column;
  flex-direction: column;
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
}

.chartjs-legend ul li {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
}

.chartjs-legend ul li span {
  width: 2.25rem;
  height: 1rem;
  margin-right: .4rem;
  display: inline-block;
  font-size: 0.875rem;
}

.rtl .chartjs-legend ul {
  padding-right: 0;
}

.rtl .chartjs-legend ul li {
  margin-right: 0;
  margin-left: 8%;
}

.rtl .chartjs-legend ul li span {
  margin-right: 0;
  margin-left: 1rem;
}

.chartjs-legend.analytics-legend ul {
  padding-left: 0;
}

.documentation {
  padding-top: 0;
  max-width: 100%;
}

.documentation .content-wrapper {
  padding-top: 0;
  min-height: calc(100vh - 75px);
}

.doc-table-contents,
.doc-header {
  position: fixed;
}

.doc-header {
  padding-top: 16px;
  padding-bottom: 16px;
  z-index: 10;
  background: #151419;
}

.doc-content {
  padding-top: 157px;
}

.doc-table-contents {
  overflow: auto;
  max-height: calc(100% - 157px);
}

.doc-table-contents ul li {
  margin-top: 10px;
}

.doc-credits ul li {
  margin-bottom: 10px;
}

.doc-credits ul li a {
  margin-left: .25rem;
}

.demo-vector-map {
  width: 100%;
  height: 500px;
}

.sparkline-demo-chart canvas {
  max-width: 100%;
}

.performance-overview-carousel .carousel-inner .item::after {
  content: '';
  width: 1px;
  height: 60px;
  background: #0dcaf0;
  position: absolute;
  right: 0;
  top: 25%;
}

@media (max-width: 767px) {
  .performance-overview-carousel .carousel-inner .item::after {
    display: none;
  }
}

.performance-overview-carousel .carousel-inner .item .icon::before {
  position: absolute;
  z-index: -1;
}

.performance-overview-carousel .carousel-inner .item .icon.icon-a::before {
  content: url("../../images/dashboard/shape-1.svg");
}

.performance-overview-carousel .carousel-inner .item .icon.icon-b::before {
  content: url("../../images/dashboard/shape-1.svg");
}

.performance-overview-carousel .carousel-inner .item .icon.icon-c::before {
  content: url("../../images/dashboard/shape-3.svg");
}

.performance-overview-carousel .carousel-control-prev,
.performance-overview-carousel .carousel-control-next {
  top: 1.3rem;
  width: 1.875rem;
  height: 1.875rem;
  background: #3698fc;
  border-radius: 0.375rem;
  opacity: 1;
}

.performance-overview-carousel .carousel-control-prev:hover,
.performance-overview-carousel .carousel-control-next:hover {
  opacity: .7;
}

.performance-overview-carousel .carousel-control-prev {
  left: auto;
  right: 4rem;
}

.performance-overview-carousel .carousel-control-prev .carousel-control-prev-icon {
  background-image: none;
}

.performance-overview-carousel .carousel-control-prev:after {
  font-family: "themify";
  content: '\e64a';
  font-size: .875rem;
  color: #ffffff;
  line-height: 1.875rem;
  margin-right: 0.48rem;
}

.performance-overview-carousel .carousel-control-next {
  left: auto;
  right: 1.681rem;
}

.performance-overview-carousel .carousel-control-next .carousel-control-next-icon {
  background-image: none;
}

.performance-overview-carousel .carousel-control-next:after {
  font-family: "themify";
  content: '\e649';
  font-size: .875rem;
  color: #ffffff;
  line-height: 1.875rem;
  margin-right: 0.48rem;
}

.detailed-report-carousel .carousel-control-prev,
.detailed-report-carousel .carousel-control-next {
  top: 1.3rem;
  width: 1.875rem;
  height: 1.875rem;
  border: 1px solid #575757;
  border-radius: 0.375rem;
  opacity: 1;
}

.detailed-report-carousel .carousel-control-prev:hover,
.detailed-report-carousel .carousel-control-next:hover {
  opacity: .7;
}

.detailed-report-carousel .carousel-control-prev {
  left: auto;
  right: 4rem;
}

.detailed-report-carousel .carousel-control-prev .carousel-control-prev-icon {
  background-image: none;
}

.detailed-report-carousel .carousel-control-prev:after {
  font-family: "themify";
  content: '\e64a';
  font-size: .875rem;
  color: #6c7383;
  line-height: 1.875rem;
  margin-right: 0.48rem;
}

.detailed-report-carousel .carousel-control-next {
  left: auto;
  right: 1.681rem;
}

.detailed-report-carousel .carousel-control-next .carousel-control-next-icon {
  background-image: none;
}

.detailed-report-carousel .carousel-control-next:after {
  font-family: "themify";
  content: '\e649';
  font-size: .875rem;
  color: #6c7383;
  line-height: 1.875rem;
  margin-right: 0.48rem;
}

.charts-data .progress {
  background: transparent;
}

.charts-data .progress .progress-bar {
  border-radius: 11px;
}

.card-people {
  position: relative;
  padding-top: 20px;
  color: #000;
}

.card-people img {
  border-radius: 20px;
  width: 100%;
  vertical-align: bottom;
}

.card-people .weather-info {
  position: absolute;
  top: 30px;
  right: 24px;
}

.card-people .weather-info sup {
  font-size: 18px;
}

.card-people .weather-info .location {
  font-size: 20px;
  margin-bottom: 0;
}

.fs-30 {
  font-size: 30px;
}

.chartjs-legend ul {
  margin-bottom: 0;
  list-style: none;
  padding-left: 0;
}

.chartjs-legend ul li {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
}

.chartjs-legend ul li span {
  width: 1.562rem;
  height: 0.312rem;
  margin-right: .4rem;
  display: inline-block;
  font-size: 0.875rem;
  border-radius: 3px;
}

.rtl .chartjs-legend ul {
  padding-right: 0;
}

.rtl .chartjs-legend ul li {
  margin-right: 0;
  margin-left: 8%;
}

.rtl .chartjs-legend ul li span {
  margin-right: 0;
  margin-left: 1rem;
}

.chartjs-legend.analytics-legend ul {
  padding-left: 0;
}

/*-------------------------------------------------------------------*/
/* === Components === */
/* Accordions */
.accordion .card {
  margin-bottom: .75rem;
  box-shadow: 0px 1px 7px 1px rgba(255, 255, 255, 0.08);
  border-radius: .25rem;
}

.accordion .card .card-header {
  background-color: transparent;
  border: none;
  padding: 2rem;
}

.accordion .card .card-header * {
  font-weight: 400;
  font-size: 1rem;
}

.accordion .card .card-header a {
  display: block;
  color: inherit;
  text-decoration: none;
  font-size: inherit;
  position: relative;
  -webkit-transition: color 0.5s ease;
  -moz-transition: color 0.5s ease;
  -ms-transition: color 0.5s ease;
  -o-transition: color 0.5s ease;
  transition: color 0.5s ease;
  padding-right: 1.5rem;
}

.accordion .card .card-header a:before {
  font-family: "themify";
  position: absolute;
  right: 7px;
  top: 0;
  font-size: 14px;
  display: block;
}

.accordion .card .card-header a[aria-expanded="true"] {
  color: #0d6efd;
}

.accordion .card .card-header a[aria-expanded="true"]:before {
  content: "\e622";
}

.accordion .card .card-header a[aria-expanded="false"]:before {
  content: "\e61a";
}

.accordion .card .card-body {
  font-size: 14px;
  padding: 0 2rem 2rem 2rem;
  font-weight: 400;
  line-height: 1.5;
}

.accordion .card .card-body i {
  font-size: 1.25rem;
}

.accordion.accordion-bordered {
  background: #1f1e23;
  box-shadow: 0px 1px 7px 1px rgba(255, 255, 255, 0.08);
}

.accordion.accordion-bordered .card {
  margin: 0 2rem;
  border-top: 1px solid #575757;
  box-shadow: none;
  border-radius: 0;
  border-right: 0;
  border-left: 0;
}

.accordion.accordion-bordered .card .card-header,
.accordion.accordion-bordered .card .card-body {
  padding-left: 0;
  padding-right: 0;
}

.accordion.accordion-bordered .card .card-header a:before {
  color: #dc3545;
}

.accordion.accordion-bordered .card .card-header a[aria-expanded="true"] {
  color: inherit;
}

.accordion.accordion-bordered .card .card-header a[aria-expanded="true"]:before {
  content: "\e65c";
}

.accordion.accordion-bordered .card .card-header a[aria-expanded="false"]:before {
  content: "\e65f";
}

.accordion.accordion-bordered .card:first-child {
  border-top: 0;
}

.accordion.accordion-bordered .card:last-child {
  border-bottom: 0;
}

.accordion.accordion-filled .card {
  padding: 0;
}

.accordion.accordion-filled .card .card-header {
  padding: 0;
}

.accordion.accordion-filled .card .card-header a {
  padding: 2rem 4.5rem 2rem 2rem;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.accordion.accordion-filled .card .card-header a:before {
  top: 40%;
  right: 40px;
}

.accordion.accordion-filled .card .card-header a[aria-expanded="true"] {
  background: #0d6efd;
  color: #ffffff;
}

.accordion.accordion-filled .card .card-header a[aria-expanded="true"]:before {
  content: "\e648";
  color: #ffffff;
}

.accordion.accordion-filled .card .card-header a[aria-expanded="false"]:before {
  content: "\e64b";
}

.accordion.accordion-filled .card .card-body {
  padding: 0 2rem 2rem 2rem;
  background: #0d6efd;
  color: #ffffff;
}

.accordion.accordion-solid-header .card {
  padding: 0;
}

.accordion.accordion-solid-header .card .card-header {
  padding: 0;
}

.accordion.accordion-solid-header .card .card-header a {
  padding: 2rem 4.5rem 2rem 2rem;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.accordion.accordion-solid-header .card .card-header a:before {
  top: 40%;
  right: 40px;
}

.accordion.accordion-solid-header .card .card-header a[aria-expanded="true"] {
  background: #0d6efd;
  color: #ffffff;
}

.accordion.accordion-solid-header .card .card-header a[aria-expanded="true"]:before {
  content: "\e648";
  color: #ffffff;
}

.accordion.accordion-solid-header .card .card-header a[aria-expanded="false"]:before {
  content: "\e64b";
}

.accordion.accordion-solid-header .card .card-body {
  padding: 2rem;
}

.accordion.accordion-solid-content .card {
  padding: 0;
}

.accordion.accordion-solid-content .card .card-header {
  padding: 0;
}

.accordion.accordion-solid-content .card .card-header a {
  padding: 2rem 4.5rem 2rem 2rem;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.accordion.accordion-solid-content .card .card-header a:before {
  top: 40%;
  right: 40px;
}

.accordion.accordion-solid-content .card .card-header a[aria-expanded="true"] {
  color: inherit;
}

.accordion.accordion-solid-content .card .card-header a[aria-expanded="true"]:before {
  content: "\e648";
}

.accordion.accordion-solid-content .card .card-header a[aria-expanded="false"]:before {
  content: "\e64b";
}

.accordion.accordion-solid-content .card .card-body {
  padding: 2rem;
  background: #198754;
  color: #ffffff;
}

.accordion.accordion-multi-colored .card .card-header,
.accordion.accordion-multi-colored .card .card-body {
  background: transparent;
  color: #ffffff;
}

.accordion.accordion-multi-colored .card:nth-child(1) {
  background: #0d6efd;
}

.accordion.accordion-multi-colored .card:nth-child(2) {
  background: #198754;
}

.accordion.accordion-multi-colored .card:nth-child(3) {
  background: #dc3545;
}

.accordion.accordion-multi-colored .card:nth-child(4) {
  background: #ffc107;
}

.accordion.accordion-multi-colored .card:nth-child(5) {
  background: #0dcaf0;
}

.accordion.accordion-multi-colored .card .card-header a[aria-expanded="true"] {
  color: inherit;
}

.accordion.accordion-multi-colored .card .card-header a[aria-expanded="true"]:before {
  content: "\e648";
}

.accordion.accordion-multi-colored .card .card-header a[aria-expanded="false"]:before {
  content: "\e64b";
}

/* Badges */
.badge {
  border-radius: 20px;
  font-size: 12px;
  line-height: 1;
  padding: .375rem .5625rem;
  font-weight: normal;
}

.badge.badge-pill {
  border-radius: 10rem;
}

/*Badge outlined variations*/
.badge-outline-primary {
  color: <?php echo $settings['theme']; ?>;
  border: 1px solid <?php echo $settings['theme']; ?>;
}

.badge-outline-secondary {
  color: #a3a4a5;
  border: 1px solid #a3a4a5;
}

.badge-outline-success {
  color: #57B657;
  border: 1px solid #57B657;
}

.badge-outline-info {
  color: #248AFD;
  border: 1px solid #248AFD;
}

.badge-outline-warning {
  color: #FFC100;
  border: 1px solid #FFC100;
}

.badge-outline-danger {
  color: #FF4747;
  border: 1px solid #FF4747;
}

.badge-outline-light {
  color: #f8f9fa;
  border: 1px solid #f8f9fa;
}

.badge-outline-dark {
  color: #282f3a;
  border: 1px solid #282f3a;
}

.badge-primary {
  color: <?php echo $settings['theme']; ?>;
  border: 1px solid <?php echo $settings['theme']; ?>;
}

.badge-secondary {
  color: #a3a4a5;
  border: 1px solid #a3a4a5;
}

.badge-success, .preview-list .preview-item .preview-thumbnail .badge.badge-online {
  color: #57B657;
  border: 1px solid #57B657;
}

.badge-info, .preview-list .preview-item .preview-thumbnail .badge.badge-offline {
  color: #248AFD;
  border: 1px solid #248AFD;
}

.badge-warning, .preview-list .preview-item .preview-thumbnail .badge.badge-busy {
  color: #FFC100;
  border: 1px solid #FFC100;
}

.badge-danger {
  color: #FF4747;
  border: 1px solid #FF4747;
}

.badge-light {
  color: #f8f9fa;
  border: 1px solid #f8f9fa;
}

.badge-dark {
  color: #282f3a;
  border: 1px solid #282f3a;
}

/* Bootstrap Alerts */
.alert {
  font-size: 0.875rem;
}

.alert i {
  font-size: 1.25rem;
  margin-right: 1.25rem;
  vertical-align: middle;
  line-height: .5;
}

/* Bootstrap Progress */
.progress {
  border-radius: 7px;
  height: 8px;
}

.progress .progress-bar {
  border-radius: 7px;
}

.progress.progress-sm {
  height: 0.375rem;
}

.progress.progress-md {
  height: 11px;
}

.progress.progress-lg {
  height: 15px;
}

.progress.progress-xl {
  height: 18px;
}

/* Buttons */
.btn, .fc button, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel, .wizard > .actions a {
  font-size: 0.875rem;
  line-height: 1;
  font-weight: 400;
  /* Buttons with only icons */
  /* Buttons with icon and text */
}

.btn i, .fc button i, .ajax-upload-dragdrop .ajax-file-upload i, .swal2-modal .swal2-buttonswrapper .swal2-styled i, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm i, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel i, .wizard > .actions a i {
  font-size: 1rem;
}

.btn.btn-rounded, .fc button.btn-rounded, .ajax-upload-dragdrop .btn-rounded.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-rounded.swal2-styled, .wizard > .actions a.btn-rounded {
  border-radius: 50px;
}

.btn.btn-sm, .btn-group-sm > .btn, .fc .btn-group-sm > button, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-sm > .swal2-styled, .wizard > .actions .btn-group-sm > a, .fc button, .ajax-upload-dragdrop .btn-sm.ajax-file-upload, .ajax-upload-dragdrop .fc button.ajax-file-upload, .fc .ajax-upload-dragdrop button.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-sm.swal2-styled, .swal2-modal .swal2-buttonswrapper .fc button.swal2-styled, .fc .swal2-modal .swal2-buttonswrapper button.swal2-styled, .wizard > .actions a.btn-sm {
  font-size: 0.812rem;
  border-radius: 15px;
}

.btn.btn-lg, .btn-group-lg > .btn, .fc .btn-group-lg > button, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-lg > .swal2-styled, .wizard > .actions .btn-group-lg > a, .fc button.btn-lg, .ajax-upload-dragdrop .btn-lg.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-lg.swal2-styled, .wizard > .actions a.btn-lg {
  font-size: 0.875rem;
  padding: 1.375rem 3.4rem;
}

.btn.btn-xs, .fc button.btn-xs, .fc .editable-container.editable-inline .editableform .control-group .editable-buttons button.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .fc button.editable-submit, .fc .editable-container.editable-inline .editableform .control-group .editable-buttons button.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .fc button.editable-cancel, .ajax-upload-dragdrop .btn-xs.ajax-file-upload, .ajax-upload-dragdrop .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-file-upload.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-upload-dragdrop .ajax-file-upload.editable-submit, .ajax-upload-dragdrop .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-file-upload.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-upload-dragdrop .ajax-file-upload.editable-cancel, .swal2-modal .swal2-buttonswrapper .btn-xs.swal2-styled, .swal2-modal .swal2-buttonswrapper .editable-container.editable-inline .editableform .control-group .editable-buttons .swal2-styled.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .swal2-modal .swal2-buttonswrapper .swal2-styled.editable-submit, .swal2-modal .swal2-buttonswrapper .editable-container.editable-inline .editableform .control-group .editable-buttons .swal2-styled.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .swal2-modal .swal2-buttonswrapper .swal2-styled.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .wizard > .actions a.editable-submit, .wizard > .actions .editable-container.editable-inline .editableform .control-group .editable-buttons a.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .wizard > .actions a.editable-cancel, .wizard > .actions .editable-container.editable-inline .editableform .control-group .editable-buttons a.editable-cancel, .wizard > .actions a.btn-xs {
  padding: 0.5rem 0.75rem;
  font-size: 0.625rem;
}

.btn.btn-icon, .fc button.btn-icon, .ajax-upload-dragdrop .btn-icon.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-icon.swal2-styled, .wizard > .actions a.btn-icon {
  width: 42px;
  height: 42px;
  padding: 0;
}

.btn.btn-icon-text .btn-icon-prepend, .fc button.btn-icon-text .btn-icon-prepend, .ajax-upload-dragdrop .btn-icon-text.ajax-file-upload .btn-icon-prepend, .swal2-modal .swal2-buttonswrapper .btn-icon-text.swal2-styled .btn-icon-prepend, .wizard > .actions a.btn-icon-text .btn-icon-prepend {
  margin-right: .5rem;
}

.btn.btn-icon-text .btn-icon-append, .fc button.btn-icon-text .btn-icon-append, .ajax-upload-dragdrop .btn-icon-text.ajax-file-upload .btn-icon-append, .swal2-modal .swal2-buttonswrapper .btn-icon-text.swal2-styled .btn-icon-append, .wizard > .actions a.btn-icon-text .btn-icon-append {
  margin-left: .5rem;
}

.btn.btn-social-icon, .fc button.btn-social-icon, .ajax-upload-dragdrop .btn-social-icon.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-social-icon.swal2-styled, .wizard > .actions a.btn-social-icon {
  width: 50px;
  height: 50px;
  padding: 0;
}

.btn-group .btn + .btn, .fc .fc-button-group .btn + .btn, .btn-group .fc button + .btn, .fc .btn-group button + .btn, .fc .fc-button-group button + .btn, .btn-group .ajax-upload-dragdrop .ajax-file-upload + .btn, .ajax-upload-dragdrop .btn-group .ajax-file-upload + .btn, .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + .btn, .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + .btn, .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn, .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + .btn, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + .btn, .btn-group .wizard > .actions a + .btn, .wizard > .actions .btn-group a + .btn, .fc .fc-button-group .wizard > .actions a + .btn, .wizard > .actions .fc .fc-button-group a + .btn, .btn-group .fc .btn + button, .fc .btn-group .btn + button, .fc .fc-button-group .btn + button, .btn-group .fc button + button, .fc .btn-group button + button, .fc .fc-button-group button + button, .btn-group .ajax-upload-dragdrop .fc .ajax-file-upload + button, .fc .btn-group .ajax-upload-dragdrop .ajax-file-upload + button, .ajax-upload-dragdrop .btn-group .fc .ajax-file-upload + button, .fc .ajax-upload-dragdrop .btn-group .ajax-file-upload + button, .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + button, .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + button, .btn-group .swal2-modal .swal2-buttonswrapper .fc .swal2-styled + button, .fc .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + button, .swal2-modal .swal2-buttonswrapper .btn-group .fc .swal2-styled + button, .fc .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + button, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + button, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + button, .btn-group .wizard > .actions .fc a + button, .fc .btn-group .wizard > .actions a + button, .wizard > .actions .btn-group .fc a + button, .fc .wizard > .actions .btn-group a + button, .fc .fc-button-group .wizard > .actions a + button, .wizard > .actions .fc .fc-button-group a + button, .btn-group .ajax-upload-dragdrop .btn + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .btn + .ajax-file-upload, .fc .fc-button-group .ajax-upload-dragdrop .btn + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .btn + .ajax-file-upload, .btn-group .fc .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .fc button + .ajax-file-upload, .fc .btn-group .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .fc .btn-group button + .ajax-file-upload, .fc .fc-button-group .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group button + .ajax-file-upload, .btn-group .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .ajax-file-upload + .ajax-file-upload, .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + .ajax-file-upload, .btn-group .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + .ajax-file-upload, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + .ajax-file-upload, .btn-group .wizard > .actions .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .wizard > .actions a + .ajax-file-upload, .wizard > .actions .btn-group .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .wizard > .actions .btn-group a + .ajax-file-upload, .fc .fc-button-group .wizard > .actions .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .wizard > .actions a + .ajax-file-upload, .wizard > .actions .fc .fc-button-group .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .wizard > .actions .fc .fc-button-group a + .ajax-file-upload, .btn-group .swal2-modal .swal2-buttonswrapper .btn + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .btn + .swal2-styled, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .btn + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .btn + .swal2-styled, .btn-group .fc .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .fc button + .swal2-styled, .fc .btn-group .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .btn-group button + .swal2-styled, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group button + .swal2-styled, .btn-group .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .ajax-upload-dragdrop .ajax-file-upload + .swal2-styled, .ajax-upload-dragdrop .btn-group .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .btn-group .ajax-file-upload + .swal2-styled, .fc .fc-button-group .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + .swal2-styled, .ajax-upload-dragdrop .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + .swal2-styled, .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + .swal2-styled, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + .swal2-styled, .btn-group .wizard > .actions .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .wizard > .actions a + .swal2-styled, .wizard > .actions .btn-group .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .wizard > .actions .btn-group a + .swal2-styled, .fc .fc-button-group .wizard > .actions .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .wizard > .actions a + .swal2-styled, .wizard > .actions .fc .fc-button-group .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .wizard > .actions .fc .fc-button-group a + .swal2-styled, .btn-group .wizard > .actions .btn + a, .wizard > .actions .btn-group .btn + a, .fc .fc-button-group .wizard > .actions .btn + a, .wizard > .actions .fc .fc-button-group .btn + a, .btn-group .fc .wizard > .actions button + a, .wizard > .actions .btn-group .fc button + a, .fc .btn-group .wizard > .actions button + a, .wizard > .actions .fc .btn-group button + a, .fc .fc-button-group .wizard > .actions button + a, .wizard > .actions .fc .fc-button-group button + a, .btn-group .ajax-upload-dragdrop .wizard > .actions .ajax-file-upload + a, .wizard > .actions .btn-group .ajax-upload-dragdrop .ajax-file-upload + a, .ajax-upload-dragdrop .btn-group .wizard > .actions .ajax-file-upload + a, .wizard > .actions .ajax-upload-dragdrop .btn-group .ajax-file-upload + a, .fc .fc-button-group .ajax-upload-dragdrop .wizard > .actions .ajax-file-upload + a, .wizard > .actions .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + a, .ajax-upload-dragdrop .fc .fc-button-group .wizard > .actions .ajax-file-upload + a, .wizard > .actions .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + a, .btn-group .swal2-modal .swal2-buttonswrapper .wizard > .actions .swal2-styled + a, .wizard > .actions .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + a, .swal2-modal .swal2-buttonswrapper .btn-group .wizard > .actions .swal2-styled + a, .wizard > .actions .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + a, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .wizard > .actions .swal2-styled + a, .wizard > .actions .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + a, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .wizard > .actions .swal2-styled + a, .wizard > .actions .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + a, .btn-group .wizard > .actions a + a, .wizard > .actions .btn-group a + a, .fc .fc-button-group .wizard > .actions a + a, .wizard > .actions .fc .fc-button-group a + a {
  border-left: 0;
}

/*social buttons*/
.btn-twitter {
  background: #2caae1;
  color: #ffffff;
}

.btn-twitter:hover, .btn-twitter:focus {
  background: #1b8dbf;
  color: #ffffff;
}

.btn-twitter.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #59bce7;
}

.btn-twitter.btn-social-icon-text i {
  background: #2caae1;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
  border-radius: 15px 0 0 15px;
}

.btn-outline-twitter {
  border: 1px solid #2caae1;
  background: transparent;
  color: #2caae1;
}

.btn-outline-twitter:hover {
  background: #2caae1;
  color: #ffffff;
}

.btn-facebook {
  background: #3b579d;
  color: #ffffff;
}

.btn-facebook:hover, .btn-facebook:focus {
  background: #2d4278;
  color: #ffffff;
}

.btn-facebook.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #4e6ebd;
}

.btn-facebook.btn-social-icon-text i {
  background: #3b579d;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
  border-radius: 15px 0 0 15px;
}

.btn-outline-facebook {
  border: 1px solid #3b579d;
  background: transparent;
  color: #3b579d;
}

.btn-outline-facebook:hover {
  background: #3b579d;
  color: #ffffff;
}

.btn-google {
  background: #dc4a38;
  color: #ffffff;
}

.btn-google:hover, .btn-google:focus {
  background: #bf3322;
  color: #ffffff;
}

.btn-google.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #e47163;
}

.btn-google.btn-social-icon-text i {
  background: #dc4a38;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
  border-radius: 15px 0 0 15px;
}

.btn-outline-google {
  border: 1px solid #dc4a38;
  background: transparent;
  color: #dc4a38;
}

.btn-outline-google:hover {
  background: #dc4a38;
  color: #ffffff;
}

.btn-linkedin {
  background: #0177b5;
  color: #ffffff;
}

.btn-linkedin:hover, .btn-linkedin:focus {
  background: #015682;
  color: #ffffff;
}

.btn-linkedin.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #0198e8;
}

.btn-linkedin.btn-social-icon-text i {
  background: #0177b5;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
  border-radius: 15px 0 0 15px;
}

.btn-outline-linkedin {
  border: 1px solid #0177b5;
  background: transparent;
  color: #0177b5;
}

.btn-outline-linkedin:hover {
  background: #0177b5;
  color: #ffffff;
}

.btn-pinterest {
  background: #cc2127;
  color: #ffffff;
}

.btn-pinterest:hover, .btn-pinterest:focus {
  background: #a01a1f;
  color: #ffffff;
}

.btn-pinterest.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #e04046;
}

.btn-pinterest.btn-social-icon-text i {
  background: #cc2127;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
  border-radius: 15px 0 0 15px;
}

.btn-outline-pinterest {
  border: 1px solid #cc2127;
  background: transparent;
  color: #cc2127;
}

.btn-outline-pinterest:hover {
  background: #cc2127;
  color: #ffffff;
}

.btn-youtube {
  background: #e52d27;
  color: #ffffff;
}

.btn-youtube:hover, .btn-youtube:focus {
  background: #c21d17;
  color: #ffffff;
}

.btn-youtube.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #ea5955;
}

.btn-youtube.btn-social-icon-text i {
  background: #e52d27;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
  border-radius: 15px 0 0 15px;
}

.btn-outline-youtube {
  border: 1px solid #e52d27;
  background: transparent;
  color: #e52d27;
}

.btn-outline-youtube:hover {
  background: #e52d27;
  color: #ffffff;
}

.btn-github {
  background: #333333;
  color: #ffffff;
}

.btn-github:hover, .btn-github:focus {
  background: #1a1a1a;
  color: #ffffff;
}

.btn-github.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #4d4d4d;
}

.btn-github.btn-social-icon-text i {
  background: #333333;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
  border-radius: 15px 0 0 15px;
}

.btn-outline-github {
  border: 1px solid #333333;
  background: transparent;
  color: #333333;
}

.btn-outline-github:hover {
  background: #333333;
  color: #ffffff;
}

.btn-behance {
  background: #1769ff;
  color: #ffffff;
}

.btn-behance:hover, .btn-behance:focus {
  background: #0050e3;
  color: #ffffff;
}

.btn-behance.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #4a8aff;
}

.btn-behance.btn-social-icon-text i {
  background: #1769ff;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
  border-radius: 15px 0 0 15px;
}

.btn-outline-behance {
  border: 1px solid #1769ff;
  background: transparent;
  color: #1769ff;
}

.btn-outline-behance:hover {
  background: #1769ff;
  color: #ffffff;
}

.btn-dribbble {
  background: #ea4c89;
  color: #ffffff;
}

.btn-dribbble:hover, .btn-dribbble:focus {
  background: #e51e6b;
  color: #ffffff;
}

.btn-dribbble.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #ef7aa7;
}

.btn-dribbble.btn-social-icon-text i {
  background: #ea4c89;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
  border-radius: 15px 0 0 15px;
}

.btn-outline-dribbble {
  border: 1px solid #ea4c89;
  background: transparent;
  color: #ea4c89;
}

.btn-outline-dribbble:hover {
  background: #ea4c89;
  color: #ffffff;
}

.btn-reddit {
  background: #ff4500;
  color: #ffffff;
}

.btn-reddit:hover, .btn-reddit:focus {
  background: #cc3700;
  color: #ffffff;
}

.btn-reddit.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #ff6a33;
}

.btn-reddit.btn-social-icon-text i {
  background: #ff4500;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
  border-radius: 15px 0 0 15px;
}

.btn-outline-reddit {
  border: 1px solid #ff4500;
  background: transparent;
  color: #ff4500;
}

.btn-outline-reddit:hover {
  background: #ff4500;
  color: #ffffff;
}

/* inverse buttons */
.btn-inverse-primary {
  background-color: rgba(75, 73, 172, 0.2);
  background-image: none;
  border-color: rgba(75, 73, 172, 0);
}

.btn-inverse-primary:not(.btn-inverse-light) {
  color: <?php echo $settings['theme']; ?>;
}

.btn-inverse-primary.focus, .btn-inverse-primary:focus {
  box-shadow: 0 0 0 3px rgba(75, 73, 172, 0.5);
}

.btn-inverse-primary.disabled, .btn-inverse-primary:disabled {
  color: <?php echo $settings['theme']; ?>;
  background-color: transparent;
}

.btn-inverse-primary.active, .btn-inverse-primary:active,
.show > .btn-inverse-primary.dropdown-toggle {
  color: #ffffff;
  background-color: <?php echo $settings['theme']; ?>;
  border-color: <?php echo $settings['theme']; ?>;
}

.btn-inverse-secondary {
  background-color: rgba(163, 164, 165, 0.2);
  background-image: none;
  border-color: rgba(163, 164, 165, 0);
}

.btn-inverse-secondary:not(.btn-inverse-light) {
  color: #a3a4a5;
}

.btn-inverse-secondary.focus, .btn-inverse-secondary:focus {
  box-shadow: 0 0 0 3px rgba(163, 164, 165, 0.5);
}

.btn-inverse-secondary.disabled, .btn-inverse-secondary:disabled {
  color: #a3a4a5;
  background-color: transparent;
}

.btn-inverse-secondary.active, .btn-inverse-secondary:active,
.show > .btn-inverse-secondary.dropdown-toggle {
  color: #ffffff;
  background-color: #a3a4a5;
  border-color: #a3a4a5;
}

.btn-inverse-success {
  background-color: rgba(87, 182, 87, 0.2);
  background-image: none;
  border-color: rgba(87, 182, 87, 0);
}

.btn-inverse-success:not(.btn-inverse-light) {
  color: #57B657;
}

.btn-inverse-success.focus, .btn-inverse-success:focus {
  box-shadow: 0 0 0 3px rgba(87, 182, 87, 0.5);
}

.btn-inverse-success.disabled, .btn-inverse-success:disabled {
  color: #57B657;
  background-color: transparent;
}

.btn-inverse-success.active, .btn-inverse-success:active,
.show > .btn-inverse-success.dropdown-toggle {
  color: #ffffff;
  background-color: #57B657;
  border-color: #57B657;
}

.btn-inverse-info {
  background-color: rgba(36, 138, 253, 0.2);
  background-image: none;
  border-color: rgba(36, 138, 253, 0);
}

.btn-inverse-info:not(.btn-inverse-light) {
  color: #248AFD;
}

.btn-inverse-info.focus, .btn-inverse-info:focus {
  box-shadow: 0 0 0 3px rgba(36, 138, 253, 0.5);
}

.btn-inverse-info.disabled, .btn-inverse-info:disabled {
  color: #248AFD;
  background-color: transparent;
}

.btn-inverse-info.active, .btn-inverse-info:active,
.show > .btn-inverse-info.dropdown-toggle {
  color: #ffffff;
  background-color: #248AFD;
  border-color: #248AFD;
}

.btn-inverse-warning {
  background-color: rgba(255, 193, 0, 0.2);
  background-image: none;
  border-color: rgba(255, 193, 0, 0);
}

.btn-inverse-warning:not(.btn-inverse-light) {
  color: #FFC100;
}

.btn-inverse-warning.focus, .btn-inverse-warning:focus {
  box-shadow: 0 0 0 3px rgba(255, 193, 0, 0.5);
}

.btn-inverse-warning.disabled, .btn-inverse-warning:disabled {
  color: #FFC100;
  background-color: transparent;
}

.btn-inverse-warning.active, .btn-inverse-warning:active,
.show > .btn-inverse-warning.dropdown-toggle {
  color: #ffffff;
  background-color: #FFC100;
  border-color: #FFC100;
}

.btn-inverse-danger {
  background-color: rgba(255, 71, 71, 0.2);
  background-image: none;
  border-color: rgba(255, 71, 71, 0);
}

.btn-inverse-danger:not(.btn-inverse-light) {
  color: #FF4747;
}

.btn-inverse-danger.focus, .btn-inverse-danger:focus {
  box-shadow: 0 0 0 3px rgba(255, 71, 71, 0.5);
}

.btn-inverse-danger.disabled, .btn-inverse-danger:disabled {
  color: #FF4747;
  background-color: transparent;
}

.btn-inverse-danger.active, .btn-inverse-danger:active,
.show > .btn-inverse-danger.dropdown-toggle {
  color: #ffffff;
  background-color: #FF4747;
  border-color: #FF4747;
}

.btn-inverse-light {
  background-color: rgba(248, 249, 250, 0.2);
  background-image: none;
  border-color: rgba(248, 249, 250, 0);
}

.btn-inverse-light:not(.btn-inverse-light) {
  color: #f8f9fa;
}

.btn-inverse-light.focus, .btn-inverse-light:focus {
  box-shadow: 0 0 0 3px rgba(248, 249, 250, 0.5);
}

.btn-inverse-light.disabled, .btn-inverse-light:disabled {
  color: #f8f9fa;
  background-color: transparent;
}

.btn-inverse-light.active, .btn-inverse-light:active,
.show > .btn-inverse-light.dropdown-toggle {
  color: #ffffff;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-inverse-dark {
  background-color: rgba(40, 47, 58, 0.2);
  background-image: none;
  border-color: rgba(40, 47, 58, 0);
}

.btn-inverse-dark:not(.btn-inverse-light) {
  color: #282f3a;
}

.btn-inverse-dark.focus, .btn-inverse-dark:focus {
  box-shadow: 0 0 0 3px rgba(40, 47, 58, 0.5);
}

.btn-inverse-dark.disabled, .btn-inverse-dark:disabled {
  color: #282f3a;
  background-color: transparent;
}

.btn-inverse-dark.active, .btn-inverse-dark:active,
.show > .btn-inverse-dark.dropdown-toggle {
  color: #ffffff;
  background-color: #282f3a;
  border-color: #282f3a;
}

.btn-outline-dark {
  border-color: #424351;
}

/* Breadcrumbs */
.breadcrumb {
  border: 1px solid #575757;
}

.breadcrumb .breadcrumb-item {
  font-size: 0.875rem;
}

.breadcrumb.breadcrumb-custom {
  padding: 0 0;
  border-color: #555b71;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item {
  font-size: 0.875rem;
  background: #555b71;
  padding: 0.56rem 12px;
  color: inherit;
  display: inline-block;
  vertical-align: top;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item:before {
  content: "";
  padding-right: 0;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item a {
  position: relative;
  color: inherit;
  border: 1px solid #555b71;
  display: inline-block;
  vertical-align: top;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item a:before, .breadcrumb.breadcrumb-custom .breadcrumb-item a:after {
  position: absolute;
  top: -9px;
  width: 0;
  height: 0;
  content: "";
  border-top: 21px solid transparent;
  border-bottom: 21px solid transparent;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item a:before {
  right: -22px;
  z-index: 3;
  border-left-color: #555b71;
  border-left-style: solid;
  border-left-width: 12px;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item a:after {
  border-top: 21px solid transparent;
  border-bottom: 22px solid transparent;
  border-left: 12px solid #575757;
  top: -9px;
  right: -23px;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item span {
  display: inline-block;
  vertical-align: top;
}

.breadcrumb.bg-success, .swal2-modal .swal2-buttonswrapper .breadcrumb.swal2-styled.swal2-confirm, .breadcrumb.bg-dark, .breadcrumb.bg-danger, .breadcrumb.bg-warning, .breadcrumb.bg-primary, .breadcrumb.bg-info {
  border: none;
}

.breadcrumb.bg-success .breadcrumb-item, .swal2-modal .swal2-buttonswrapper .breadcrumb.swal2-styled.swal2-confirm .breadcrumb-item, .breadcrumb.bg-dark .breadcrumb-item, .breadcrumb.bg-danger .breadcrumb-item, .breadcrumb.bg-warning .breadcrumb-item, .breadcrumb.bg-primary .breadcrumb-item, .breadcrumb.bg-info .breadcrumb-item {
  color: #ffffff;
}

.breadcrumb.bg-success .breadcrumb-item:before, .swal2-modal .swal2-buttonswrapper .breadcrumb.swal2-styled.swal2-confirm .breadcrumb-item:before, .breadcrumb.bg-dark .breadcrumb-item:before, .breadcrumb.bg-danger .breadcrumb-item:before, .breadcrumb.bg-warning .breadcrumb-item:before, .breadcrumb.bg-primary .breadcrumb-item:before, .breadcrumb.bg-info .breadcrumb-item:before {
  color: inherit;
}

.breadcrumb.bg-success .breadcrumb-item a, .swal2-modal .swal2-buttonswrapper .breadcrumb.swal2-styled.swal2-confirm .breadcrumb-item a, .breadcrumb.bg-success .breadcrumb-item span, .swal2-modal .swal2-buttonswrapper .breadcrumb.swal2-styled.swal2-confirm .breadcrumb-item span, .breadcrumb.bg-dark .breadcrumb-item a, .breadcrumb.bg-dark .breadcrumb-item span, .breadcrumb.bg-danger .breadcrumb-item a, .breadcrumb.bg-danger .breadcrumb-item span, .breadcrumb.bg-warning .breadcrumb-item a, .breadcrumb.bg-warning .breadcrumb-item span, .breadcrumb.bg-primary .breadcrumb-item a, .breadcrumb.bg-primary .breadcrumb-item span, .breadcrumb.bg-info .breadcrumb-item a, .breadcrumb.bg-info .breadcrumb-item span {
  color: inherit;
}

/* inverse breadcrumb */
.bg-inverse-primary {
  background: #a09ed6;
  border-color: <?php echo $settings['theme']; ?>;
}

.bg-inverse-primary .breadcrumb-item {
  color: <?php echo $settings['theme']; ?>;
}

.bg-inverse-primary .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-primary .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-primary.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-primary.breadcrumb-custom .breadcrumb-item {
  background: #a09ed6;
}

.bg-inverse-primary.breadcrumb-custom .breadcrumb-item a {
  color: <?php echo $settings['theme']; ?>;
  border: none;
}

.bg-inverse-primary.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #a09ed6;
}

.bg-inverse-primary.breadcrumb-custom .breadcrumb-item span {
  color: <?php echo $settings['theme']; ?>;
}

.bg-inverse-primary.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-secondary {
  background: #e3e4e4;
  border-color: #a3a4a5;
}

.bg-inverse-secondary .breadcrumb-item {
  color: #a3a4a5;
}

.bg-inverse-secondary .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-secondary .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-secondary.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-secondary.breadcrumb-custom .breadcrumb-item {
  background: #e3e4e4;
}

.bg-inverse-secondary.breadcrumb-custom .breadcrumb-item a {
  color: #a3a4a5;
  border: none;
}

.bg-inverse-secondary.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #e3e4e4;
}

.bg-inverse-secondary.breadcrumb-custom .breadcrumb-item span {
  color: #a3a4a5;
}

.bg-inverse-secondary.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-success {
  background: #b0ddb0;
  border-color: #57B657;
}

.bg-inverse-success .breadcrumb-item {
  color: #57B657;
}

.bg-inverse-success .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-success .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-success.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-success.breadcrumb-custom .breadcrumb-item {
  background: #b0ddb0;
}

.bg-inverse-success.breadcrumb-custom .breadcrumb-item a {
  color: #57B657;
  border: none;
}

.bg-inverse-success.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #b0ddb0;
}

.bg-inverse-success.breadcrumb-custom .breadcrumb-item span {
  color: #57B657;
}

.bg-inverse-success.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-info {
  background: #a2cefe;
  border-color: #248AFD;
}

.bg-inverse-info .breadcrumb-item {
  color: #248AFD;
}

.bg-inverse-info .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-info .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-info.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-info.breadcrumb-custom .breadcrumb-item {
  background: #a2cefe;
}

.bg-inverse-info.breadcrumb-custom .breadcrumb-item a {
  color: #248AFD;
  border: none;
}

.bg-inverse-info.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #a2cefe;
}

.bg-inverse-info.breadcrumb-custom .breadcrumb-item span {
  color: #248AFD;
}

.bg-inverse-info.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-warning {
  background: #ffe080;
  border-color: #FFC100;
}

.bg-inverse-warning .breadcrumb-item {
  color: #FFC100;
}

.bg-inverse-warning .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-warning .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-warning.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-warning.breadcrumb-custom .breadcrumb-item {
  background: #ffe080;
}

.bg-inverse-warning.breadcrumb-custom .breadcrumb-item a {
  color: #FFC100;
  border: none;
}

.bg-inverse-warning.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #ffe080;
}

.bg-inverse-warning.breadcrumb-custom .breadcrumb-item span {
  color: #FFC100;
}

.bg-inverse-warning.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-danger {
  background: #ffc7c7;
  border-color: #FF4747;
}

.bg-inverse-danger .breadcrumb-item {
  color: #FF4747;
}

.bg-inverse-danger .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-danger .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-danger.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-danger.breadcrumb-custom .breadcrumb-item {
  background: #ffc7c7;
}

.bg-inverse-danger.breadcrumb-custom .breadcrumb-item a {
  color: #FF4747;
  border: none;
}

.bg-inverse-danger.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #ffc7c7;
}

.bg-inverse-danger.breadcrumb-custom .breadcrumb-item span {
  color: #FF4747;
}

.bg-inverse-danger.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-light {
  background: white;
  border-color: #f8f9fa;
}

.bg-inverse-light .breadcrumb-item {
  color: #f8f9fa;
}

.bg-inverse-light .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-light .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-light.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-light.breadcrumb-custom .breadcrumb-item {
  background: white;
}

.bg-inverse-light.breadcrumb-custom .breadcrumb-item a {
  color: #f8f9fa;
  border: none;
}

.bg-inverse-light.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: white;
}

.bg-inverse-light.breadcrumb-custom .breadcrumb-item span {
  color: #f8f9fa;
}

.bg-inverse-light.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-dark {
  background: #5c6c85;
  border-color: #282f3a;
}

.bg-inverse-dark .breadcrumb-item {
  color: #282f3a;
}

.bg-inverse-dark .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-dark .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-dark.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-dark.breadcrumb-custom .breadcrumb-item {
  background: #5c6c85;
}

.bg-inverse-dark.breadcrumb-custom .breadcrumb-item a {
  color: #282f3a;
  border: none;
}

.bg-inverse-dark.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #5c6c85;
}

.bg-inverse-dark.breadcrumb-custom .breadcrumb-item span {
  color: #282f3a;
}

.bg-inverse-dark.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

/* Cards */
.card {
  border: none;
  box-shadow: 0 1px 20px 0 rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 1px 20px 0 rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 1px 20px 0 rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 1px 20px 0 rgba(0, 0, 0, 0.1);
}

.card.tale-bg {
  background: #DAE7FF;
}

.card .card-body {
  padding: 1.25rem 1.437rem;
}

.card .card-body + .card-body {
  padding-top: 1rem;
}

.card .card-title {
  color: #fff;
  margin-bottom: 1.2rem;
  text-transform: capitalize;
  font-size: 1.125rem;
  font-weight: 600;
}

.card .card-subtitle {
  font-weight: 400;
  margin-top: 0.625rem;
  margin-bottom: 0.625rem;
}

.card .card-description {
  margin-bottom: .875rem;
  font-weight: 400;
  color: #76838f;
}

.card.card-outline-success {
  border: 1px solid theme-color("success");
}

.card.card-outline-primary {
  border: 1px solid theme-color("primary");
}

.card.card-outline-warning {
  border: 1px solid theme-color("warning");
}

.card.card-outline-danger {
  border: 1px solid theme-color("danger");
}

.card.card-rounded {
  border-radius: 5px;
}

.card.card-faded {
  background: #b5b0b2;
  border-color: #b5b0b2;
}

.card.card-circle-progress {
  color: #ffffff;
  text-align: center;
}

.card.card-img-holder {
  position: relative;
}

.card.card-img-holder .card-img-absolute {
  position: absolute;
  top: 0;
  right: 0;
  height: 100%;
}

.card.card-weather .weather-daily .weather-day {
  opacity: .5;
  font-weight: 900;
}

.card.card-weather .weather-daily i {
  font-size: 20px;
}

.card.card-weather .weather-daily .weather-temp {
  margin-top: .5rem;
  margin-bottom: 0;
  opacity: .5;
  font-size: .75rem;
}

.card.card-tale {
  background: #000000;
  color: #ffffff;
}

.card.card-tale:hover {
  background: <?php echo $settings['theme']; ?>;
}

.card.card-dark-blue {
  background: <?php echo $settings['theme']; ?>;
  color: #ffffff;
}

.card.card-dark-blue:hover {
  background: #000000;
}

.card.card-light-blue {
  background: <?php echo $settings['theme']; ?>;
  color: #ffffff;
}

.card.card-light-blue:hover {
  background: #000000;
}

.card.card-light-danger {
  background: #F3797E;
  color: #ffffff;
}

.card.card-light-danger:hover {
  background: #f59095;
}

.card-columns .card {
  margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
  .card-columns {
    column-count: 3;
    column-gap: 1.25rem;
    orphans: 1;
    widows: 1;
  }
  .card-columns .card {
    display: inline-block;
    width: 100%;
  }
}

.card-inverse-primary {
  background: rgba(75, 73, 172, 0.2);
  border: 1px solid theme-color-level(primary, 1);
  color: theme-color-level(primary, 3);
}

.card-inverse-secondary {
  background: rgba(163, 164, 165, 0.2);
  border: 1px solid theme-color-level(secondary, 1);
  color: theme-color-level(secondary, 3);
}

.card-inverse-success {
  background: rgba(87, 182, 87, 0.2);
  border: 1px solid theme-color-level(success, 1);
  color: theme-color-level(success, 3);
}

.card-inverse-info {
  background: rgba(36, 138, 253, 0.2);
  border: 1px solid theme-color-level(info, 1);
  color: theme-color-level(info, 3);
}

.card-inverse-warning {
  background: rgba(255, 193, 0, 0.2);
  border: 1px solid theme-color-level(warning, 1);
  color: theme-color-level(warning, 3);
}

.card-inverse-danger {
  background: rgba(255, 71, 71, 0.2);
  border: 1px solid theme-color-level(danger, 1);
  color: theme-color-level(danger, 3);
}

.card-inverse-light {
  background: rgba(248, 249, 250, 0.2);
  border: 1px solid theme-color-level(light, 1);
  color: theme-color-level(light, 3);
}

.card-inverse-dark {
  background: rgba(40, 47, 58, 0.2);
  border: 1px solid theme-color-level(dark, 1);
  color: theme-color-level(dark, 3);
}

.data-icon-card-primary {
  background: <?php echo $settings['theme']; ?>;
  color: #ffffff;
}

.data-icon-card-primary .card-title {
  color: #ffffff;
}

.data-icon-card-primary .background-icon::before {
  content: url("../../images/dashboard/shape-4.svg");
  position: absolute;
}

.data-icon-card-primary .background-icon i {
  z-index: 1;
  color: #ffffff;
}

.data-icon-card-secondary {
  background: #a3a4a5;
  color: #ffffff;
}

.data-icon-card-secondary .card-title {
  color: #ffffff;
}

.data-icon-card-secondary .background-icon::before {
  content: url("../../images/dashboard/shape-4.svg");
  position: absolute;
}

.data-icon-card-secondary .background-icon i {
  z-index: 1;
  color: #ffffff;
}

.data-icon-card-success {
  background: #57B657;
  color: #ffffff;
}

.data-icon-card-success .card-title {
  color: #ffffff;
}

.data-icon-card-success .background-icon::before {
  content: url("../../images/dashboard/shape-4.svg");
  position: absolute;
}

.data-icon-card-success .background-icon i {
  z-index: 1;
  color: #ffffff;
}

.data-icon-card-info {
  background: #248AFD;
  color: #ffffff;
}

.data-icon-card-info .card-title {
  color: #ffffff;
}

.data-icon-card-info .background-icon::before {
  content: url("../../images/dashboard/shape-4.svg");
  position: absolute;
}

.data-icon-card-info .background-icon i {
  z-index: 1;
  color: #ffffff;
}

.data-icon-card-warning {
  background: #FFC100;
  color: #ffffff;
}

.data-icon-card-warning .card-title {
  color: #ffffff;
}

.data-icon-card-warning .background-icon::before {
  content: url("../../images/dashboard/shape-4.svg");
  position: absolute;
}

.data-icon-card-warning .background-icon i {
  z-index: 1;
  color: #ffffff;
}

.data-icon-card-danger {
  background: #FF4747;
  color: #ffffff;
}

.data-icon-card-danger .card-title {
  color: #ffffff;
}

.data-icon-card-danger .background-icon::before {
  content: url("../../images/dashboard/shape-4.svg");
  position: absolute;
}

.data-icon-card-danger .background-icon i {
  z-index: 1;
  color: #ffffff;
}

.data-icon-card-light {
  background: #f8f9fa;
  color: #ffffff;
}

.data-icon-card-light .card-title {
  color: #ffffff;
}

.data-icon-card-light .background-icon::before {
  content: url("../../images/dashboard/shape-4.svg");
  position: absolute;
}

.data-icon-card-light .background-icon i {
  z-index: 1;
  color: #ffffff;
}

.data-icon-card-dark {
  background: #282f3a;
  color: #ffffff;
}

.data-icon-card-dark .card-title {
  color: #ffffff;
}

.data-icon-card-dark .background-icon::before {
  content: url("../../images/dashboard/shape-4.svg");
  position: absolute;
}

.data-icon-card-dark .background-icon i {
  z-index: 1;
  color: #ffffff;
}

/* Checkboxes and Radios */
.form-check {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
  padding-left: 0;
}

.form-check .form-check-label {
  min-height: 18px;
  display: block;
  margin-left: 1.75rem;
  font-size: 0.875rem;
  line-height: 1.5;
}

.rtl .form-check .form-check-label {
  margin-left: 0;
  margin-right: 1.75rem;
}

.form-check .form-check-label input {
  position: absolute;
  top: 0;
  left: 0;
  margin-left: 0;
  margin-top: 0;
  z-index: 1;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
}

.rtl .form-check .form-check-label input {
  left: auto;
  right: 0;
}

.form-check .form-check-label input[type="checkbox"] + .input-helper:before, .form-check .form-check-label input[type="checkbox"] + .input-helper:after {
  position: absolute;
  top: 0;
  left: 0;
}

.rtl .form-check .form-check-label input[type="checkbox"] + .input-helper:before, .rtl .form-check .form-check-label input[type="checkbox"] + .input-helper:after {
  left: auto;
  right: 0;
}

.form-check .form-check-label input[type="checkbox"] + .input-helper:before {
  content: "";
  width: 18px;
  height: 18px;
  border-radius: 2px;
  border: solid #0d6efd;
  border-width: 2px;
  -webkit-transition: all;
  -moz-transition: all;
  -ms-transition: all;
  -o-transition: all;
  transition: all;
  transition-duration: 0s;
  -webkit-transition-duration: 250ms;
  transition-duration: 250ms;
}

.form-check .form-check-label input[type="checkbox"] + .input-helper:after {
  -webkit-transition: all;
  -moz-transition: all;
  -ms-transition: all;
  -o-transition: all;
  transition: all;
  transition-duration: 0s;
  -webkit-transition-duration: 250ms;
  transition-duration: 250ms;
  font-family: themify;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  transform: scale(0);
  content: '\e64c';
  font-size: .9375rem;
  font-weight: bold;
  color: #ffffff;
}

.form-check .form-check-label input[type="checkbox"]:checked + .input-helper:before {
  background: #0d6efd;
  border-width: 0;
}

.form-check .form-check-label input[type="checkbox"]:checked + .input-helper:after {
  width: 18px;
  opacity: 1;
  line-height: 18px;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}

.form-check .form-check-label input[type="checkbox"]:disabled + .input-helper:before {
  border-color: #575757;
}

.form-check .form-check-label input[type="checkbox"]:disabled:checked + .input-helper:after {
  background: #575757;
  color: #ffffff;
}

.form-check .form-check-label input[type="radio"] + .input-helper:before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  border: solid #0d6efd;
  border-width: 2px;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  -webkit-transition: all;
  -moz-transition: all;
  -ms-transition: all;
  -o-transition: all;
  transition: all;
  transition-duration: 0s;
  -webkit-transition-duration: 250ms;
  transition-duration: 250ms;
}

.rtl .form-check .form-check-label input[type="radio"] + .input-helper:before {
  left: auto;
  right: 0;
}

.form-check .form-check-label input[type="radio"] + .input-helper:after {
  content: "";
  width: 8px;
  height: 8px;
  background: #ffffff;
  border-radius: 50%;
  top: 6px;
  left: 6px;
  -webkit-transition: all;
  -o-transition: all;
  transition: all;
  transition-duration: 0s;
  -webkit-transition-duration: 250ms;
  transition-duration: 250ms;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  transform: scale(0);
  position: absolute;
}

.rtl .form-check .form-check-label input[type="radio"] + .input-helper:after {
  left: auto;
  right: 6px;
}

.form-check .form-check-label input[type="radio"]:checked + .input-helper:before {
  background: #0d6efd;
  border-width: 0;
}

.form-check .form-check-label input[type="radio"]:checked + .input-helper:after {
  opacity: 1;
  line-height: 1.5;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}

.form-check .form-check-label input[type="radio"]:disabled + .input-helper:before {
  border-color: #575757;
}

.form-check .form-check-label input[type="radio"]:disabled:checked + .input-helper:before {
  background: #575757;
}

.form-check .form-check-label input[type="radio"]:disabled:checked + .input-helper:after {
  background: #ffffff;
}

.form-check-primary.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-primary.form-check label input[type="radio"] + .input-helper:before {
  border-color: primary;
}

.form-check-primary.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-primary.form-check label input[type="radio"]:checked + .input-helper:before {
  background: <?php echo $settings['theme']; ?>;
}

.form-check-secondary.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-secondary.form-check label input[type="radio"] + .input-helper:before {
  border-color: secondary;
}

.form-check-secondary.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-secondary.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #a3a4a5;
}

.form-check-success.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-success.form-check label input[type="radio"] + .input-helper:before {
  border-color: success;
}

.form-check-success.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-success.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #57B657;
}

.form-check-info.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-info.form-check label input[type="radio"] + .input-helper:before {
  border-color: info;
}

.form-check-info.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-info.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #248AFD;
}

.form-check-warning.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-warning.form-check label input[type="radio"] + .input-helper:before {
  border-color: warning;
}

.form-check-warning.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-warning.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #FFC100;
}

.form-check-danger.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-danger.form-check label input[type="radio"] + .input-helper:before {
  border-color: danger;
}

.form-check-danger.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-danger.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #FF4747;
}

.form-check-light.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-light.form-check label input[type="radio"] + .input-helper:before {
  border-color: light;
}

.form-check-light.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-light.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #f8f9fa;
}

.form-check-dark.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-dark.form-check label input[type="radio"] + .input-helper:before {
  border-color: dark;
}

.form-check-dark.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-dark.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #282f3a;
}

/* Dropdowns */
.dropdown .dropdown-toggle:after {
  border-top: 0;
  border-right: 0;
  border-left: 0;
  border-bottom: 0;
  font: normal normal normal 24px/1 "themify";
  content: "\e64b";
  width: auto;
  height: auto;
  vertical-align: middle;
  line-height: .625rem;
  font-size: .875rem;
  margin-left: .3rem;
}

.dropdown .dropdown-menu {
  margin-top: 2px;
  font-size: 0.875rem;
  box-shadow: 0 1px 20px 0 rgba(0, 0, 0, 0.1);
}

.dropdown .dropdown-menu .dropdown-item {
  font-size: .875rem;
  padding: .25rem 1.5rem;
}

.dropdown .dropdown-menu .dropdown-item:hover {
  background-color: #fff;
}

.dropdown .dropdown-menu .dropdown-item:active {
  background: initial;
}

/* Forms */
.form-group {
  margin-bottom: 1.5rem;
}

.input-group-append,
.input-group-prepend {
  color: #aaa7a7;
  width: auto;
  border: none;
}

.input-group-append .input-group-text,
.input-group-prepend .input-group-text {
  background: #22243c;
  border-color: #575757;
  padding: 1.125rem 0.75rem;
  color: #aaa7a7;
}

.form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
.tt-query,
.tt-hint {
  border: 1px solid #575757;
  font-weight: 400;
  font-size: 0.875rem;
}

select.form-control, select.asColorPicker-input, .dataTables_wrapper select,
.jsgrid .jsgrid-table .jsgrid-filter-row select, .select2-container--default select.select2-selection--single, .select2-container--default .select2-selection--single select.select2-search__field, select.typeahead,
select.tt-query,
select.tt-hint {
  padding: .4375rem .75rem;
  border: 0;
  outline: 0;
  color: #aaa7a7;
}

select.form-control:focus, select.asColorPicker-input:focus, .dataTables_wrapper select:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .select2-container--default select.select2-selection--single:focus, .select2-container--default .select2-selection--single select.select2-search__field:focus, select.typeahead:focus,
select.tt-query:focus,
select.tt-hint:focus {
  outline: 1px solid #575757;
}

select.form-control.border-primary, select.border-primary.asColorPicker-input, .dataTables_wrapper select.border-primary,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-primary, .select2-container--default select.border-primary.select2-selection--single, .select2-container--default .select2-selection--single select.border-primary.select2-search__field, select.border-primary.typeahead,
select.border-primary.tt-query,
select.border-primary.tt-hint {
  outline: 1px solid <?php echo $settings['theme']; ?>;
}

select.form-control.border-primary:focus, select.border-primary.asColorPicker-input:focus, .dataTables_wrapper select.border-primary:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-primary:focus, .select2-container--default select.border-primary.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-primary.select2-search__field:focus, select.border-primary.typeahead:focus,
select.border-primary.tt-query:focus,
select.border-primary.tt-hint:focus {
  outline: 1px solid <?php echo $settings['theme']; ?>;
}

select.form-control.border-secondary, select.form-control.loader-demo-box, select.loader-demo-box.asColorPicker-input, .dataTables_wrapper select.loader-demo-box,
.jsgrid .jsgrid-table .jsgrid-filter-row select.loader-demo-box, .select2-container--default select.loader-demo-box.select2-selection--single, .select2-container--default .select2-selection--single select.loader-demo-box.select2-search__field, select.loader-demo-box.typeahead,
select.loader-demo-box.tt-query,
select.loader-demo-box.tt-hint, select.border-secondary.asColorPicker-input, .dataTables_wrapper select.border-secondary,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-secondary, .select2-container--default select.border-secondary.select2-selection--single, .select2-container--default .select2-selection--single select.border-secondary.select2-search__field, select.border-secondary.typeahead,
select.border-secondary.tt-query,
select.border-secondary.tt-hint {
  outline: 1px solid #a3a4a5;
}

select.form-control.border-secondary:focus, select.form-control.loader-demo-box:focus, select.loader-demo-box.asColorPicker-input:focus, .dataTables_wrapper select.loader-demo-box:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select.loader-demo-box:focus, .select2-container--default select.loader-demo-box.select2-selection--single:focus, .select2-container--default .select2-selection--single select.loader-demo-box.select2-search__field:focus, select.loader-demo-box.typeahead:focus,
select.loader-demo-box.tt-query:focus,
select.loader-demo-box.tt-hint:focus, select.border-secondary.asColorPicker-input:focus, .dataTables_wrapper select.border-secondary:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-secondary:focus, .select2-container--default select.border-secondary.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-secondary.select2-search__field:focus, select.border-secondary.typeahead:focus,
select.border-secondary.tt-query:focus,
select.border-secondary.tt-hint:focus {
  outline: 1px solid #a3a4a5;
}

select.form-control.border-success, select.border-success.asColorPicker-input, .swal2-modal .swal2-buttonswrapper select.asColorPicker-input.swal2-styled.swal2-confirm, .dataTables_wrapper select.border-success, .dataTables_wrapper .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .dataTables_wrapper select.swal2-styled.swal2-confirm,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-success, .jsgrid .jsgrid-table .jsgrid-filter-row .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .jsgrid .jsgrid-table .jsgrid-filter-row select.swal2-styled.swal2-confirm, .select2-container--default select.border-success.select2-selection--single, .select2-container--default .swal2-modal .swal2-buttonswrapper select.select2-selection--single.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .select2-container--default select.select2-selection--single.swal2-styled.swal2-confirm, .select2-container--default .select2-selection--single select.border-success.select2-search__field, .select2-container--default .select2-selection--single .swal2-modal .swal2-buttonswrapper select.select2-search__field.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .select2-container--default .select2-selection--single select.select2-search__field.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper select.form-control.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.typeahead,
.swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.tt-query,
.swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.tt-hint, select.border-success.typeahead,
select.border-success.tt-query,
select.border-success.tt-hint {
  outline: 1px solid #57B657;
}

select.form-control.border-success:focus, select.border-success.asColorPicker-input:focus, .swal2-modal .swal2-buttonswrapper select.asColorPicker-input.swal2-styled.swal2-confirm:focus, .dataTables_wrapper select.border-success:focus, .dataTables_wrapper .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper .dataTables_wrapper select.swal2-styled.swal2-confirm:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-success:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper .jsgrid .jsgrid-table .jsgrid-filter-row select.swal2-styled.swal2-confirm:focus, .select2-container--default select.border-success.select2-selection--single:focus, .select2-container--default .swal2-modal .swal2-buttonswrapper select.select2-selection--single.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper .select2-container--default select.select2-selection--single.swal2-styled.swal2-confirm:focus, .select2-container--default .select2-selection--single select.border-success.select2-search__field:focus, .select2-container--default .select2-selection--single .swal2-modal .swal2-buttonswrapper select.select2-search__field.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper .select2-container--default .select2-selection--single select.select2-search__field.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper select.form-control.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.typeahead:focus,
.swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.tt-query:focus,
.swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.tt-hint:focus, select.border-success.typeahead:focus,
select.border-success.tt-query:focus,
select.border-success.tt-hint:focus {
  outline: 1px solid #57B657;
}

select.form-control.border-info, select.border-info.asColorPicker-input, .dataTables_wrapper select.border-info,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-info, .select2-container--default select.border-info.select2-selection--single, .select2-container--default .select2-selection--single select.border-info.select2-search__field, select.border-info.typeahead,
select.border-info.tt-query,
select.border-info.tt-hint {
  outline: 1px solid #248AFD;
}

select.form-control.border-info:focus, select.border-info.asColorPicker-input:focus, .dataTables_wrapper select.border-info:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-info:focus, .select2-container--default select.border-info.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-info.select2-search__field:focus, select.border-info.typeahead:focus,
select.border-info.tt-query:focus,
select.border-info.tt-hint:focus {
  outline: 1px solid #248AFD;
}

select.form-control.border-warning, select.border-warning.asColorPicker-input, .dataTables_wrapper select.border-warning,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-warning, .select2-container--default select.border-warning.select2-selection--single, .select2-container--default .select2-selection--single select.border-warning.select2-search__field, select.border-warning.typeahead,
select.border-warning.tt-query,
select.border-warning.tt-hint {
  outline: 1px solid #FFC100;
}

select.form-control.border-warning:focus, select.border-warning.asColorPicker-input:focus, .dataTables_wrapper select.border-warning:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-warning:focus, .select2-container--default select.border-warning.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-warning.select2-search__field:focus, select.border-warning.typeahead:focus,
select.border-warning.tt-query:focus,
select.border-warning.tt-hint:focus {
  outline: 1px solid #FFC100;
}

select.form-control.border-danger, select.border-danger.asColorPicker-input, .dataTables_wrapper select.border-danger,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-danger, .select2-container--default select.border-danger.select2-selection--single, .select2-container--default .select2-selection--single select.border-danger.select2-search__field, select.border-danger.typeahead,
select.border-danger.tt-query,
select.border-danger.tt-hint {
  outline: 1px solid #FF4747;
}

select.form-control.border-danger:focus, select.border-danger.asColorPicker-input:focus, .dataTables_wrapper select.border-danger:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-danger:focus, .select2-container--default select.border-danger.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-danger.select2-search__field:focus, select.border-danger.typeahead:focus,
select.border-danger.tt-query:focus,
select.border-danger.tt-hint:focus {
  outline: 1px solid #FF4747;
}

select.form-control.border-light, select.border-light.asColorPicker-input, .dataTables_wrapper select.border-light,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-light, .select2-container--default select.border-light.select2-selection--single, .select2-container--default .select2-selection--single select.border-light.select2-search__field, select.border-light.typeahead,
select.border-light.tt-query,
select.border-light.tt-hint {
  outline: 1px solid #f8f9fa;
}

select.form-control.border-light:focus, select.border-light.asColorPicker-input:focus, .dataTables_wrapper select.border-light:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-light:focus, .select2-container--default select.border-light.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-light.select2-search__field:focus, select.border-light.typeahead:focus,
select.border-light.tt-query:focus,
select.border-light.tt-hint:focus {
  outline: 1px solid #f8f9fa;
}

select.form-control.border-dark, select.border-dark.asColorPicker-input, .dataTables_wrapper select.border-dark,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-dark, .select2-container--default select.border-dark.select2-selection--single, .select2-container--default .select2-selection--single select.border-dark.select2-search__field, select.border-dark.typeahead,
select.border-dark.tt-query,
select.border-dark.tt-hint {
  outline: 1px solid #282f3a;
}

select.form-control.border-dark:focus, select.border-dark.asColorPicker-input:focus, .dataTables_wrapper select.border-dark:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-dark:focus, .select2-container--default select.border-dark.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-dark.select2-search__field:focus, select.border-dark.typeahead:focus,
select.border-dark.tt-query:focus,
select.border-dark.tt-hint:focus {
  outline: 1px solid #282f3a;
}

.form-group label {
  font-size: 0.875rem;
  line-height: 1.4rem;
  vertical-align: top;
  margin-bottom: .5rem;
}

.form-group.has-danger .form-control, .form-group.has-danger .asColorPicker-input, .form-group.has-danger .dataTables_wrapper select, .dataTables_wrapper .form-group.has-danger select, .form-group.has-danger .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .form-group.has-danger input[type=text],
.form-group.has-danger .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .form-group.has-danger select, .form-group.has-danger .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .form-group.has-danger input[type=number], .form-group.has-danger .select2-container--default .select2-selection--single, .select2-container--default .form-group.has-danger .select2-selection--single, .form-group.has-danger .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .form-group.has-danger .select2-search__field, .form-group.has-danger .typeahead,
.form-group.has-danger .tt-query,
.form-group.has-danger .tt-hint {
  border-color: #dc3545;
}

.form-group .file-upload-default {
  visibility: hidden;
  position: absolute;
}

.form-group .file-upload-info {
  background: transparent;
}

.map-container {
  position: relative;
  min-width: 100%;
  max-width: 100%;
  display: block;
  padding: 35% 0;
  overflow: hidden;
  border-radius: 5px;
}

.map-container .google-map {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
}

.map-container .google-map.no-controls .gmnoprint, .map-container .google-map.no-controls .gm-style-cc {
  display: none;
}

/* Icons */
.icons-list {
  border-left: 1px solid #575757;
  border-top: 1px solid #575757;
}

.icons-list > div {
  background: transparent;
  border-bottom: 1px solid #575757;
  border-right: 1px solid #575757;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  padding: 15px 15px;
  font-weight: 400;
  font-size: 0.875rem;
}

.icons-list > div i {
  display: inline-block;
  font-size: 20px;
  width: 40px;
  text-align: left;
  color: #0d6efd;
}

.icon-in-bg {
  width: 55px;
  height: 55px;
  text-align: center;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
}

.icon-lg, .data-icon-card-primary .background-icon i, .data-icon-card-secondary .background-icon i, .data-icon-card-success .background-icon i, .data-icon-card-info .background-icon i, .data-icon-card-warning .background-icon i, .data-icon-card-danger .background-icon i, .data-icon-card-light .background-icon i, .data-icon-card-dark .background-icon i {
  font-size: 2.875rem;
}

.icon-md {
  font-size: 2rem;
}

.icon-sm {
  font-size: 1rem;
}

/* Loaders */
#pgloading {
  position: static;
}

#pgloading .bokeh {
  font-size: 100px;
  width: 1em;
  height: 1em;
  position: relative;
  margin: 0 auto;
  border-radius: 50%;
  border: 0.01em solid #575757;
  list-style: none;
  padding: 0;
}

#pgloading .bokeh li {
  position: absolute;
  width: .2em;
  height: .2em;
  border-radius: 50%;
}

#pgloading .bokeh li:nth-child(1) {
  left: 50%;
  top: 0;
  margin: 0 0 0 -.1em;
  background: #198754;
  -webkit-transform-origin: 50% 250%;
  transform-origin: 50% 250%;
  -webkit-animation: rota 1.13s linear infinite, opa 3.67s ease-in-out infinite alternate;
  animation: rota 1.13s linear infinite, opa 3.67s ease-in-out infinite alternate;
}

#pgloading .bokeh li:nth-child(2) {
  top: 50%;
  right: 0;
  margin: -.1em 0 0 0;
  background: #dc3545;
  -webkit-transform-origin: -150% 50%;
  transform-origin: -150% 50%;
  -webkit-animation: rota 1.86s linear infinite, opa 4.29s ease-in-out infinite alternate;
  animation: rota 1.86s linear infinite, opa 4.29s ease-in-out infinite alternate;
}

#pgloading .bokeh li:nth-child(3) {
  left: 50%;
  bottom: 0;
  margin: 0 0 0 -.1em;
  background: #ffc107;
  -webkit-transform-origin: 50% -150%;
  transform-origin: 50% -150%;
  -webkit-animation: rota 1.45s linear infinite, opa 5.12s ease-in-out infinite alternate;
  animation: rota 1.45s linear infinite, opa 5.12s ease-in-out infinite alternate;
}

#pgloading .bokeh li:nth-child(4) {
  top: 50%;
  left: 0;
  margin: -.1em 0 0 0;
  background: #0d6efd;
  -webkit-transform-origin: 250% 50%;
  transform-origin: 250% 50%;
  -webkit-animation: rota 1.72s linear infinite, opa 5.25s ease-in-out infinite alternate;
  animation: rota 1.72s linear infinite, opa 5.25s ease-in-out infinite alternate;
}

@-webkit-keyframes rota {
  from {
  }
  to {
    -webkit-transform: rotate(360deg);
  }
}

@keyframes rota {
  from {
  }
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@-webkit-keyframes opa {
  0% {
  }
  12.0% {
    opacity: 0.80;
  }
  19.5% {
    opacity: 0.88;
  }
  37.2% {
    opacity: 0.64;
  }
  40.5% {
    opacity: 0.52;
  }
  52.7% {
    opacity: 0.69;
  }
  60.2% {
    opacity: 0.60;
  }
  66.6% {
    opacity: 0.52;
  }
  70.0% {
    opacity: 0.63;
  }
  79.9% {
    opacity: 0.60;
  }
  84.2% {
    opacity: 0.75;
  }
  91.0% {
    opacity: 0.87;
  }
}

@keyframes opa {
  0% {
  }
  12.0% {
    opacity: 0.80;
  }
  19.5% {
    opacity: 0.88;
  }
  37.2% {
    opacity: 0.64;
  }
  40.5% {
    opacity: 0.52;
  }
  52.7% {
    opacity: 0.69;
  }
  60.2% {
    opacity: 0.60;
  }
  66.6% {
    opacity: 0.52;
  }
  70.0% {
    opacity: 0.63;
  }
  79.9% {
    opacity: 0.60;
  }
  84.2% {
    opacity: 0.75;
  }
  91.0% {
    opacity: 0.87;
  }
}

.glowing-loader {
  position: relative;
}

.s2 {
  position: absolute;
  height: 70px;
  width: 70px;
  top: 50px;
  background-color: transparent;
  left: 50%;
  transform: translate(-50%, -50%);
}

.s1 {
  position: absolute;
  height: 70px;
  width: 70px;
  left: 50%;
  top: 50px;
  transform-origin: center;
  transform: translate(-50%, -50%) rotate(45deg);
  background-color: transparent;
}

.bigcon {
  position: absolute;
  height: 75px;
  width: 75px;
  left: 50%;
  top: 50px;
  transform-origin: center;
  transform: translate(-50%, -50%) rotate(-45deg);
  background-color: transparent;
  animation: bigcon 2s infinite linear;
  animation-delay: 0.25s;
}

.b {
  border-radius: 50%;
  position: absolute;
}

.s {
  width: 15px;
  height: 15px;
  animation: small 2s infinite ease;
  box-shadow: 0px 2px rgba(0, 0, 0, 0.3);
  background-color: #0d6efd;
}

.s:nth-child(1) {
  top: 0%;
  left: 0%;
}

.s:nth-child(2) {
  top: 0%;
  right: 0%;
}

.s:nth-child(3) {
  right: 0%;
  bottom: 0%;
}

.s:nth-child(4) {
  bottom: 0%;
  left: 0%;
}

.big {
  width: 15px;
  height: 15px;
  border-radius: 15px;
  box-shadow: 0px 0px 10px #0d6efd, 0px 0px 20px #0d6efd, 0px 0px 30px #0d6efd, 0px 0px 50px #0d6efd, 0px 0px 60px #0d6efd;
  z-index: 1;
  background-color: #0d6efd;
  animation: bigball 1s infinite linear;
}

.sb1 {
  animation-delay: -1.75s;
}

.sb6 {
  animation-delay: -1.5s;
}

.sb2 {
  animation-delay: -1.25s;
}

.sb7 {
  animation-delay: -1s;
}

.sb3 {
  animation-delay: -0.75s;
}

.sb8 {
  animation-delay: -0.5s;
}

.sb4 {
  animation-delay: -0.25s;
}

.sb5 {
  animation-delay: -0s;
}

@keyframes bigcon {
  0% {
    transform-origin: center;
    transform: translate(-50%, -50%) rotate(45deg);
  }
  100% {
    transform-origin: center;
    transform: translate(-50%, -50%) rotate(405deg);
  }
}

@keyframes small {
  0% {
    transform: scale(1);
    background-color: #72abfe;
  }
  10% {
    transform: scale(1.3);
    background-color: #0d6efd;
  }
  15% {
    transform: scale(1);
  }
  25% {
    transform: scale(1);
    background-color: #0d6efd;
  }
  100% {
    transform: scale(1);
    background-color: #0d6efd;
  }
}

/* Pixel loader */
.pixel-loader {
  width: 10px;
  height: 10px;
  background: #ffc107;
  color: #ffc107;
  margin: 80px auto;
  box-shadow: 15px 15px  0 0, -15px -15px  0 0, 15px -15px  0 0, -15px 15px  0 0, 0 15px  0 0, 15px 0  0 0, -15px 0  0 0, 0 -15px 0 0;
  animation: anim 2s linear infinite;
}

@keyframes anim {
  0% {
    -webkit-filter: hue-rotate(0deg);
  }
  50% {
    box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0;
  }
  75% {
    box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0;
  }
  100% {
    transform: rotate(360deg);
    -webkit-filter: hue-rotate(360deg);
  }
}

/* Square box loader */
@keyframes dyinglight {
  15% {
    transform: scale(1.6);
  }
  50% {
    transform: rotate(-89deg);
  }
  100% {
    transform: rotate(-90deg);
  }
}

.square-box-loader {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  display: inline-block;
}

.square-box-loader-square {
  display: block;
  width: 30px;
  height: 30px;
  background: #0d6efd;
}

.square-box-loader-container {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  transform-origin: 50% 50% 0;
  animation: dyinglight 1s ease infinite;
  backface-visibility: hidden;
}

.square-box-loader-corner-top:before,
.square-box-loader-corner-top:after,
.square-box-loader-corner-bottom:before,
.square-box-loader-corner-bottom:after {
  position: absolute;
  width: 10px;
  height: 10px;
  color: #0d6efd;
  content: '';
}

.square-box-loader-corner-top:before {
  border-left: 1px solid;
  border-top: 1px solid;
  top: -4px;
  left: -4px;
}

.square-box-loader-corner-top:after {
  border-right: 1px solid;
  border-top: 1px solid;
  top: -4px;
  right: -4px;
}

.square-box-loader-corner-bottom:before {
  border-left: 1px solid;
  border-bottom: 1px solid;
  bottom: -4px;
  left: -4px;
}

.square-box-loader-corner-bottom:after {
  border-right: 1px solid;
  border-bottom: 1px solid;
  bottom: -4px;
  right: -4px;
}

/* Circle loader */
.circle-loader {
  width: 70px;
  height: 70px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.circle-loader:before, .circle-loader:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 100%;
  border: 10px solid transparent;
  border-top-color: #ffc107;
}

.circle-loader:before {
  z-index: 10;
  animation: spin 1s infinite;
}

.circle-loader:after {
  border: 10px solid #6c757d;
}

@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

/* Jumping dots loader */
.jumping-dots-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.jumping-dots-loader span {
  display: inline-block;
  width: 20px;
  height: 20px;
  border-radius: 100%;
  background-color: rgba(220, 53, 69, 0.8);
  margin: 35px 5px;
}

.jumping-dots-loader span:nth-child(1) {
  animation: bounce 1s ease-in-out infinite;
}

.jumping-dots-loader span:nth-child(2) {
  animation: bounce 1s ease-in-out 0.33s infinite;
}

.jumping-dots-loader span:nth-child(3) {
  animation: bounce 1s ease-in-out 0.66s infinite;
}

@keyframes bounce {
  0%, 75%, 100% {
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  25% {
    -webkit-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
}

/* Bar loader */
.bar-loader {
  width: 50px;
  height: 50px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.bar-loader span {
  display: inline-block;
  width: 5px;
  height: 30px;
  background-color: rgba(220, 53, 69, 0.7);
}

.bar-loader span:nth-child(1) {
  animation: grow 1s ease-in-out infinite;
}

.bar-loader span:nth-child(2) {
  animation: grow 1s ease-in-out 0.15s infinite;
}

.bar-loader span:nth-child(3) {
  animation: grow 1s ease-in-out 0.30s infinite;
}

.bar-loader span:nth-child(4) {
  animation: grow 1s ease-in-out 0.45s infinite;
}

@keyframes grow {
  0%, 100% {
    -webkit-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -o-transform: scaleY(1);
    transform: scaleY(1);
  }
  50% {
    -webkit-transform: scaleY(1.8);
    -ms-transform: scaleY(1.8);
    -o-transform: scaleY(1.8);
    transform: scaleY(1.8);
  }
}

/* Square path loader */
.square-path-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.square-path-loader:before, .square-path-loader:after {
  content: "";
  width: 15px;
  height: 15px;
  position: absolute;
  top: 0;
  left: calc(50% - 10px);
  background-color: rgba(25, 135, 84, 0.7);
  animation: squaremove 1s ease-in-out infinite;
}

.square-path-loader:after {
  bottom: 0;
  animation-delay: 0.5s;
}

@keyframes squaremove {
  0%, 100% {
    -webkit-transform: translate(0, 0) rotate(0);
    -ms-transform: translate(0, 0) rotate(0);
    -o-transform: translate(0, 0) rotate(0);
    transform: translate(0, 0) rotate(0);
  }
  25% {
    -webkit-transform: translate(40px, 40px) rotate(45deg);
    -ms-transform: translate(40px, 40px) rotate(45deg);
    -o-transform: translate(40px, 40px) rotate(45deg);
    transform: translate(40px, 40px) rotate(45deg);
  }
  50% {
    -webkit-transform: translate(0px, 80px) rotate(0deg);
    -ms-transform: translate(0px, 80px) rotate(0deg);
    -o-transform: translate(0px, 80px) rotate(0deg);
    transform: translate(0px, 80px) rotate(0deg);
  }
  75% {
    -webkit-transform: translate(-40px, 40px) rotate(45deg);
    -ms-transform: translate(-40px, 40px) rotate(45deg);
    -o-transform: translate(-40px, 40px) rotate(45deg);
    transform: translate(-40px, 40px) rotate(45deg);
  }
}

/* Dot opacity loader */
.dot-opacity-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.dot-opacity-loader span {
  display: inline-block;
  width: 20px;
  height: 20px;
  border-radius: 100%;
  background-color: #0d6efd;
  margin: 35px 5px;
  opacity: 0;
}

.dot-opacity-loader span:nth-child(1) {
  animation: opacitychange 1s ease-in-out infinite;
}

.dot-opacity-loader span:nth-child(2) {
  animation: opacitychange 1s ease-in-out 0.33s infinite;
}

.dot-opacity-loader span:nth-child(3) {
  animation: opacitychange 1s ease-in-out 0.66s infinite;
}

@keyframes opacitychange {
  0%, 100% {
    opacity: 0;
  }
  60% {
    opacity: 1;
  }
}

/* Flip square */
.flip-square-loader {
  -webkit-perspective: 120px;
  -moz-perspective: 120px;
  -ms-perspective: 120px;
  perspective: 120px;
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.flip-square-loader:before {
  content: "";
  position: absolute;
  left: 25px;
  top: 25px;
  width: 50px;
  height: 50px;
  background-color: rgba(25, 135, 84, 0.7);
  animation: flip 1s infinite;
}

@keyframes flip {
  0% {
    transform: rotate(0);
  }
  50% {
    transform: rotateY(180deg);
  }
  100% {
    transform: rotateY(180deg) rotateX(180deg);
  }
}

/* Moving square loader */
.moving-square-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.moving-square-loader:before {
  content: "";
  position: absolute;
  width: 10px;
  height: 10px;
  top: calc(50% - 10px);
  left: 0px;
  background-color: rgba(220, 53, 69, 0.7);
  animation: rotatemove 1s infinite;
}

@keyframes rotatemove {
  0% {
    -webkit-transform: scale(1) translateX(0px);
    -ms-transform: scale(1) translateX(0px);
    -o-transform: scale(1) translateX(0px);
    transform: scale(1) translateX(0px);
  }
  100% {
    -webkit-transform: scale(2) translateX(45px);
    -ms-transform: scale(2) translateX(45px);
    -o-transform: scale(2) translateX(45px);
    transform: scale(2) translateX(45px);
  }
}

/* Lists */
ul,
ol,
dl {
  padding-left: 1rem;
  font-size: 0.875rem;
}

ul li,
ol li,
dl li {
  line-height: 1.8;
}

.list-ticked,
.list-arrow,
.list-star {
  list-style: none;
  padding: 0;
}

.list-ticked li,
.list-arrow li,
.list-star li {
  padding-left: 1.5rem;
}

.list-ticked li:before,
.list-arrow li:before,
.list-star li:before {
  font-family: "themify";
  margin-left: -1.5rem;
  width: 1.5rem;
  margin-right: .5rem;
  font-size: .6rem;
}

.list-ticked li:before {
  content: '\e64c';
  color: #dc3545;
}

.list-arrow li:before {
  content: '\e649';
  color: #198754;
}

.list-star li:before {
  content: '\e60a';
  color: #ffc107;
}

.solid-bullet-list {
  position: relative;
  padding-left: 0;
}

.rtl .solid-bullet-list {
  padding-right: 0;
}

.solid-bullet-list li {
  position: relative;
  list-style-type: none;
  padding-left: 25px;
  line-height: 1;
  padding-bottom: 2.125rem;
}

.solid-bullet-list li * {
  line-height: .8;
}

.solid-bullet-list li:before, .solid-bullet-list li:after {
  content: "";
  position: absolute;
}

.solid-bullet-list li:before {
  top: 0;
  left: 0;
  width: 10px;
  height: 10px;
  border-radius: 100%;
  background: #0d6efd;
  z-index: 1;
}

.solid-bullet-list:after {
  content: "";
  border: 1px solid #575757;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 4px;
  z-index: 0;
}

.bullet-line-list {
  padding-left: 30px;
  position: relative;
  list-style-type: none;
}

.rtl .bullet-line-list {
  padding-left: unset;
  padding-right: 30px;
}

.bullet-line-list li {
  position: relative;
}

.bullet-line-list li:before {
  width: 15px;
  height: 15px;
  left: -30px;
  top: 0;
  border: 4px solid #0d6efd;
  margin-right: 15px;
  z-index: 2;
  background: color(white);
}

.rtl .bullet-line-list li:before {
  left: unset;
  right: -45px;
}

.bullet-line-list li:before {
  content: "";
  position: absolute;
  border-radius: 100%;
}

.bullet-line-list:after {
  content: "";
  border: 1px solid #575757;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 7px;
}

.rtl .bullet-line-list:after {
  left: unset;
  right: 7px;
}

.icon-data-list {
  list-style-type: none;
  padding-left: 0;
  position: relative;
  margin-bottom: 0;
  font-family: "Nunito", sans-serif;
}

.icon-data-list li {
  margin-bottom: 1rem;
}

.icon-data-list li img {
  width: 40px;
  height: 40px;
  margin-right: 10px;
  border-radius: 100%;
}

/* Modals */
.modal .modal-dialog {
  margin-top: 100px;
}

.modal .modal-dialog .modal-content .modal-header {
  padding: 25px 26px;
}

.modal .modal-dialog .modal-content .modal-header .close span {
  font-size: 20px;
  font-weight: 400;
  color: #6a6a6a;
}

.modal .modal-dialog .modal-content .modal-body {
  padding: 35px 26px;
}

.modal .modal-dialog .modal-content .modal-footer {
  padding: 15px 31px;
}

@media (max-width: 400px) {
  .modal .modal-dialog .modal-content .modal-footer {
    padding-left: .25rem;
    padding-right: .25rem;
    flex-direction: column;
  }
  .modal .modal-dialog .modal-content .modal-footer > :not(:last-child) {
    margin-right: 0;
    margin-bottom: .7rem;
  }
  .modal .modal-dialog .modal-content .modal-footer > :not(:first-child) {
    margin-left: 0;
  }
}

/* Pagination */
.pagination .page-item .page-link, .jsgrid .jsgrid-pager .page-item .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a,
.jsgrid .jsgrid-pager .jsgrid-pager-page a {
  border-color: #575757;
  color: #ffffff;
  font-size: .875rem;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
}

.pagination .page-item .page-link:focus, .jsgrid .jsgrid-pager .page-item .page-link:focus, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link:focus, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link:focus, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a:focus,
.jsgrid .jsgrid-pager .jsgrid-pager-page a:focus {
  background: inherit;
}

.pagination .page-item .page-link i:before, .jsgrid .jsgrid-pager .page-item .page-link i:before, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link i:before, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link i:before, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a i:before, .jsgrid .jsgrid-pager .jsgrid-pager-page a i:before {
  font-size: inherit;
  line-height: 1;
  vertical-align: middle;
}

.pagination .page-item.active .page-link, .jsgrid .jsgrid-pager .page-item.active .page-link, .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .pagination .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .page-item.active .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item.active a, .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a,
.pagination .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .page-item.active .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item.active a,
.jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .pagination .page-item:hover .page-link, .jsgrid .jsgrid-pager .page-item:hover .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page:hover .page-link, .pagination .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .page-item:hover .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:hover a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover a,
.pagination .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .page-item:hover .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:hover a,
.jsgrid .jsgrid-pager .jsgrid-pager-page:hover a, .pagination .page-item:focus .page-link, .jsgrid .jsgrid-pager .page-item:focus .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:focus .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page:focus .page-link, .pagination .page-item:focus .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .page-item:focus .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:focus a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:focus a,
.pagination .page-item:focus .jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .page-item:focus .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:focus a,
.jsgrid .jsgrid-pager .jsgrid-pager-page:focus a, .pagination .page-item:active .page-link, .jsgrid .jsgrid-pager .page-item:active .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:active .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page:active .page-link, .pagination .page-item:active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .page-item:active .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:active a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:active a,
.pagination .page-item:active .jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .page-item:active .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:active a,
.jsgrid .jsgrid-pager .jsgrid-pager-page:active a {
  background: theme-color("primary");
  border-color: theme-color("primary");
  color: color(white);
}

.pagination.pagination-flat .page-item, .jsgrid .pagination-flat.jsgrid-pager .page-item, .pagination.pagination-flat .jsgrid .jsgrid-pager .jsgrid-pager-nav-button, .jsgrid .jsgrid-pager .pagination.pagination-flat .jsgrid-pager-nav-button, .jsgrid .pagination-flat.jsgrid-pager .jsgrid-pager-nav-button,
.pagination.pagination-flat .jsgrid .jsgrid-pager .jsgrid-pager-page, .jsgrid .jsgrid-pager .pagination.pagination-flat .jsgrid-pager-page,
.jsgrid .pagination-flat.jsgrid-pager .jsgrid-pager-page {
  margin: 0 .25rem;
}

.pagination.pagination-flat .page-item .page-link, .jsgrid .pagination-flat.jsgrid-pager .page-item .page-link, .pagination.pagination-flat .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination.pagination-flat .jsgrid-pager-nav-button .page-link, .jsgrid .pagination-flat.jsgrid-pager .jsgrid-pager-nav-button .page-link, .pagination.pagination-flat .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination.pagination-flat .jsgrid-pager-page .page-link, .jsgrid .pagination-flat.jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.pagination-flat .page-item a, .pagination.pagination-flat .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination.pagination-flat .jsgrid-pager-nav-button a, .jsgrid .pagination-flat.jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.pagination-flat .page-item a,
.pagination.pagination-flat .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination.pagination-flat .jsgrid-pager-page a,
.jsgrid .pagination-flat.jsgrid-pager .jsgrid-pager-page a {
  border: none;
  border-radius: 2px;
}

.pagination.pagination-separated .page-item, .jsgrid .pagination-separated.jsgrid-pager .page-item, .pagination.pagination-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button, .jsgrid .jsgrid-pager .pagination.pagination-separated .jsgrid-pager-nav-button, .jsgrid .pagination-separated.jsgrid-pager .jsgrid-pager-nav-button,
.pagination.pagination-separated .jsgrid .jsgrid-pager .jsgrid-pager-page, .jsgrid .jsgrid-pager .pagination.pagination-separated .jsgrid-pager-page,
.jsgrid .pagination-separated.jsgrid-pager .jsgrid-pager-page {
  margin-left: 2px;
  margin-right: 2px;
}

.pagination.pagination-separated .page-item:first-child, .jsgrid .pagination-separated.jsgrid-pager .page-item:first-child, .pagination.pagination-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child, .jsgrid .jsgrid-pager .pagination.pagination-separated .jsgrid-pager-nav-button:first-child, .jsgrid .pagination-separated.jsgrid-pager .jsgrid-pager-nav-button:first-child,
.pagination.pagination-separated .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child, .jsgrid .jsgrid-pager .pagination.pagination-separated .jsgrid-pager-page:first-child,
.jsgrid .pagination-separated.jsgrid-pager .jsgrid-pager-page:first-child {
  margin-left: 0;
}

.pagination.pagination-separated .page-item:last-child, .jsgrid .pagination-separated.jsgrid-pager .page-item:last-child, .pagination.pagination-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child, .jsgrid .jsgrid-pager .pagination.pagination-separated .jsgrid-pager-nav-button:last-child, .jsgrid .pagination-separated.jsgrid-pager .jsgrid-pager-nav-button:last-child,
.pagination.pagination-separated .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child, .jsgrid .jsgrid-pager .pagination.pagination-separated .jsgrid-pager-page:last-child,
.jsgrid .pagination-separated.jsgrid-pager .jsgrid-pager-page:last-child {
  margin-right: 0;
}

.pagination.pagination-separated .page-item .page-link, .jsgrid .pagination-separated.jsgrid-pager .page-item .page-link, .pagination.pagination-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination.pagination-separated .jsgrid-pager-nav-button .page-link, .jsgrid .pagination-separated.jsgrid-pager .jsgrid-pager-nav-button .page-link, .pagination.pagination-separated .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination.pagination-separated .jsgrid-pager-page .page-link, .jsgrid .pagination-separated.jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.pagination-separated .page-item a, .pagination.pagination-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination.pagination-separated .jsgrid-pager-nav-button a, .jsgrid .pagination-separated.jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.pagination-separated .page-item a,
.pagination.pagination-separated .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination.pagination-separated .jsgrid-pager-page a,
.jsgrid .pagination-separated.jsgrid-pager .jsgrid-pager-page a {
  border-radius: 2px;
}

.pagination.pagination-rounded .page-item:first-child .page-link, .jsgrid .pagination-rounded.jsgrid-pager .page-item:first-child .page-link, .pagination.pagination-rounded .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .jsgrid-pager .pagination.pagination-rounded .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .pagination.pagination-rounded .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child .page-link, .jsgrid .jsgrid-pager .pagination.pagination-rounded .jsgrid-pager-page:first-child .page-link, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-page:first-child .page-link, .pagination.pagination-rounded .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.pagination-rounded .page-item:first-child a, .jsgrid .pagination-rounded.jsgrid-pager .page-item:first-child .jsgrid-pager-nav-button a, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-nav-button .page-item:first-child a, .pagination.pagination-rounded .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child a, .jsgrid .jsgrid-pager .pagination.pagination-rounded .jsgrid-pager-nav-button:first-child a, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-nav-button:first-child a,
.pagination.pagination-rounded .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.pagination-rounded .page-item:first-child a,
.jsgrid .pagination-rounded.jsgrid-pager .page-item:first-child .jsgrid-pager-page a, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-page .page-item:first-child a,
.pagination.pagination-rounded .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child a, .jsgrid .jsgrid-pager .pagination.pagination-rounded .jsgrid-pager-page:first-child a,
.jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-page:first-child a {
  border-radius: 25px 0 0 25px;
}

.pagination.pagination-rounded .page-item:last-child .page-link, .jsgrid .pagination-rounded.jsgrid-pager .page-item:last-child .page-link, .pagination.pagination-rounded .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .jsgrid-pager .pagination.pagination-rounded .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .pagination.pagination-rounded .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child .page-link, .jsgrid .jsgrid-pager .pagination.pagination-rounded .jsgrid-pager-page:last-child .page-link, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-page:last-child .page-link, .pagination.pagination-rounded .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.pagination-rounded .page-item:last-child a, .jsgrid .pagination-rounded.jsgrid-pager .page-item:last-child .jsgrid-pager-nav-button a, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-nav-button .page-item:last-child a, .pagination.pagination-rounded .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child a, .jsgrid .jsgrid-pager .pagination.pagination-rounded .jsgrid-pager-nav-button:last-child a, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-nav-button:last-child a,
.pagination.pagination-rounded .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.pagination-rounded .page-item:last-child a,
.jsgrid .pagination-rounded.jsgrid-pager .page-item:last-child .jsgrid-pager-page a, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-page .page-item:last-child a,
.pagination.pagination-rounded .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child a, .jsgrid .jsgrid-pager .pagination.pagination-rounded .jsgrid-pager-page:last-child a,
.jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-page:last-child a {
  border-radius: 0 25px 25px 0;
}

.pagination.pagination-rounded-flat .page-item, .jsgrid .pagination-rounded-flat.jsgrid-pager .page-item, .pagination.pagination-rounded-flat .jsgrid .jsgrid-pager .jsgrid-pager-nav-button, .jsgrid .jsgrid-pager .pagination.pagination-rounded-flat .jsgrid-pager-nav-button, .jsgrid .pagination-rounded-flat.jsgrid-pager .jsgrid-pager-nav-button,
.pagination.pagination-rounded-flat .jsgrid .jsgrid-pager .jsgrid-pager-page, .jsgrid .jsgrid-pager .pagination.pagination-rounded-flat .jsgrid-pager-page,
.jsgrid .pagination-rounded-flat.jsgrid-pager .jsgrid-pager-page {
  margin-right: 3px;
  margin-left: 3px;
}

.pagination.pagination-rounded-flat .page-item .page-link, .jsgrid .pagination-rounded-flat.jsgrid-pager .page-item .page-link, .pagination.pagination-rounded-flat .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination.pagination-rounded-flat .jsgrid-pager-nav-button .page-link, .jsgrid .pagination-rounded-flat.jsgrid-pager .jsgrid-pager-nav-button .page-link, .pagination.pagination-rounded-flat .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination.pagination-rounded-flat .jsgrid-pager-page .page-link, .jsgrid .pagination-rounded-flat.jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.pagination-rounded-flat .page-item a, .pagination.pagination-rounded-flat .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination.pagination-rounded-flat .jsgrid-pager-nav-button a, .jsgrid .pagination-rounded-flat.jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.pagination-rounded-flat .page-item a,
.pagination.pagination-rounded-flat .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination.pagination-rounded-flat .jsgrid-pager-page a,
.jsgrid .pagination-rounded-flat.jsgrid-pager .jsgrid-pager-page a {
  border: none;
  border-radius: 50px;
}

.pagination.pagination-rounded-separated .page-item, .jsgrid .pagination-rounded-separated.jsgrid-pager .page-item, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-nav-button, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button,
.pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-page,
.jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page {
  margin-left: 2px;
  margin-right: 2px;
}

.pagination.pagination-rounded-separated .page-item:first-child, .jsgrid .pagination-rounded-separated.jsgrid-pager .page-item:first-child, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-nav-button:first-child, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button:first-child,
.pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-page:first-child,
.jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page:first-child {
  margin-left: 0;
}

.pagination.pagination-rounded-separated .page-item:first-child .page-link, .jsgrid .pagination-rounded-separated.jsgrid-pager .page-item:first-child .page-link, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child .page-link, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-page:first-child .page-link, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page:first-child .page-link, .pagination.pagination-rounded-separated .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.pagination-rounded-separated .page-item:first-child a, .jsgrid .pagination-rounded-separated.jsgrid-pager .page-item:first-child .jsgrid-pager-nav-button a, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button .page-item:first-child a, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child a, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-nav-button:first-child a, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button:first-child a,
.pagination.pagination-rounded-separated .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.pagination-rounded-separated .page-item:first-child a,
.jsgrid .pagination-rounded-separated.jsgrid-pager .page-item:first-child .jsgrid-pager-page a, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page .page-item:first-child a,
.pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child a, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-page:first-child a,
.jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page:first-child a {
  border-radius: 10px 0 0 10px;
}

.pagination.pagination-rounded-separated .page-item:last-child, .jsgrid .pagination-rounded-separated.jsgrid-pager .page-item:last-child, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-nav-button:last-child, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button:last-child,
.pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-page:last-child,
.jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page:last-child {
  margin-right: 0;
}

.pagination.pagination-rounded-separated .page-item:last-child .page-link, .jsgrid .pagination-rounded-separated.jsgrid-pager .page-item:last-child .page-link, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child .page-link, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-page:last-child .page-link, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page:last-child .page-link, .pagination.pagination-rounded-separated .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.pagination-rounded-separated .page-item:last-child a, .jsgrid .pagination-rounded-separated.jsgrid-pager .page-item:last-child .jsgrid-pager-nav-button a, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button .page-item:last-child a, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child a, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-nav-button:last-child a, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button:last-child a,
.pagination.pagination-rounded-separated .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.pagination-rounded-separated .page-item:last-child a,
.jsgrid .pagination-rounded-separated.jsgrid-pager .page-item:last-child .jsgrid-pager-page a, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page .page-item:last-child a,
.pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child a, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-page:last-child a,
.jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page:last-child a {
  border-radius: 0 10px 10px 0;
}

.pagination.pagination-rounded-separated .page-item .page-link, .jsgrid .pagination-rounded-separated.jsgrid-pager .page-item .page-link, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-nav-button .page-link, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button .page-link, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-page .page-link, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.pagination-rounded-separated .page-item a, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-nav-button a, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.pagination-rounded-separated .page-item a,
.pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-page a,
.jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page a {
  border-radius: 2px;
}

/* pagination variations */
.pagination-primary .page-item.active .page-link, .pagination-primary .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-primary .active.jsgrid-pager-nav-button .page-link, .pagination-primary .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination-primary .active.jsgrid-pager-page .page-link, .pagination-primary .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-primary .page-item.active a, .pagination-primary .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-primary .active.jsgrid-pager-nav-button a,
.pagination-primary .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-primary .page-item.active a,
.pagination-primary .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-primary .active.jsgrid-pager-page a {
  background: <?php echo $settings['theme']; ?>;
  border-color: <?php echo $settings['theme']; ?>;
}

.pagination-primary .page-item:hover .page-link, .pagination-primary .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover .page-link, .jsgrid .jsgrid-pager .pagination-primary .jsgrid-pager-nav-button:hover .page-link, .pagination-primary .jsgrid .jsgrid-pager .jsgrid-pager-page:hover .page-link, .jsgrid .jsgrid-pager .pagination-primary .jsgrid-pager-page:hover .page-link, .pagination-primary .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-primary .page-item:hover a, .pagination-primary .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover a, .jsgrid .jsgrid-pager .pagination-primary .jsgrid-pager-nav-button:hover a,
.pagination-primary .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-primary .page-item:hover a,
.pagination-primary .jsgrid .jsgrid-pager .jsgrid-pager-page:hover a, .jsgrid .jsgrid-pager .pagination-primary .jsgrid-pager-page:hover a {
  background: #5957b8;
  border-color: <?php echo $settings['theme']; ?>;
  color: #ffffff;
}

.pagination-secondary .page-item.active .page-link, .pagination-secondary .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-secondary .active.jsgrid-pager-nav-button .page-link, .pagination-secondary .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination-secondary .active.jsgrid-pager-page .page-link, .pagination-secondary .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-secondary .page-item.active a, .pagination-secondary .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-secondary .active.jsgrid-pager-nav-button a,
.pagination-secondary .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-secondary .page-item.active a,
.pagination-secondary .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-secondary .active.jsgrid-pager-page a {
  background: #a3a4a5;
  border-color: #a3a4a5;
}

.pagination-secondary .page-item:hover .page-link, .pagination-secondary .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover .page-link, .jsgrid .jsgrid-pager .pagination-secondary .jsgrid-pager-nav-button:hover .page-link, .pagination-secondary .jsgrid .jsgrid-pager .jsgrid-pager-page:hover .page-link, .jsgrid .jsgrid-pager .pagination-secondary .jsgrid-pager-page:hover .page-link, .pagination-secondary .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-secondary .page-item:hover a, .pagination-secondary .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover a, .jsgrid .jsgrid-pager .pagination-secondary .jsgrid-pager-nav-button:hover a,
.pagination-secondary .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-secondary .page-item:hover a,
.pagination-secondary .jsgrid .jsgrid-pager .jsgrid-pager-page:hover a, .jsgrid .jsgrid-pager .pagination-secondary .jsgrid-pager-page:hover a {
  background: #b0b1b2;
  border-color: #a3a4a5;
  color: #ffffff;
}

.pagination-success .page-item.active .page-link, .pagination-success .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-success .active.jsgrid-pager-nav-button .page-link, .pagination-success .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination-success .active.jsgrid-pager-page .page-link, .pagination-success .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-success .page-item.active a, .pagination-success .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-success .active.jsgrid-pager-nav-button a,
.pagination-success .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-success .page-item.active a,
.pagination-success .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-success .active.jsgrid-pager-page a {
  background: #57B657;
  border-color: #57B657;
}

.pagination-success .page-item:hover .page-link, .pagination-success .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover .page-link, .jsgrid .jsgrid-pager .pagination-success .jsgrid-pager-nav-button:hover .page-link, .pagination-success .jsgrid .jsgrid-pager .jsgrid-pager-page:hover .page-link, .jsgrid .jsgrid-pager .pagination-success .jsgrid-pager-page:hover .page-link, .pagination-success .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-success .page-item:hover a, .pagination-success .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover a, .jsgrid .jsgrid-pager .pagination-success .jsgrid-pager-nav-button:hover a,
.pagination-success .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-success .page-item:hover a,
.pagination-success .jsgrid .jsgrid-pager .jsgrid-pager-page:hover a, .jsgrid .jsgrid-pager .pagination-success .jsgrid-pager-page:hover a {
  background: #69be69;
  border-color: #57B657;
  color: #ffffff;
}

.pagination-info .page-item.active .page-link, .pagination-info .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-info .active.jsgrid-pager-nav-button .page-link, .pagination-info .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination-info .active.jsgrid-pager-page .page-link, .pagination-info .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-info .page-item.active a, .pagination-info .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-info .active.jsgrid-pager-nav-button a,
.pagination-info .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-info .page-item.active a,
.pagination-info .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-info .active.jsgrid-pager-page a {
  background: #248AFD;
  border-color: #248AFD;
}

.pagination-info .page-item:hover .page-link, .pagination-info .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover .page-link, .jsgrid .jsgrid-pager .pagination-info .jsgrid-pager-nav-button:hover .page-link, .pagination-info .jsgrid .jsgrid-pager .jsgrid-pager-page:hover .page-link, .jsgrid .jsgrid-pager .pagination-info .jsgrid-pager-page:hover .page-link, .pagination-info .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-info .page-item:hover a, .pagination-info .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover a, .jsgrid .jsgrid-pager .pagination-info .jsgrid-pager-nav-button:hover a,
.pagination-info .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-info .page-item:hover a,
.pagination-info .jsgrid .jsgrid-pager .jsgrid-pager-page:hover a, .jsgrid .jsgrid-pager .pagination-info .jsgrid-pager-page:hover a {
  background: #3d98fd;
  border-color: #248AFD;
  color: #ffffff;
}

.pagination-warning .page-item.active .page-link, .pagination-warning .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-warning .active.jsgrid-pager-nav-button .page-link, .pagination-warning .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination-warning .active.jsgrid-pager-page .page-link, .pagination-warning .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-warning .page-item.active a, .pagination-warning .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-warning .active.jsgrid-pager-nav-button a,
.pagination-warning .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-warning .page-item.active a,
.pagination-warning .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-warning .active.jsgrid-pager-page a {
  background: #FFC100;
  border-color: #FFC100;
}

.pagination-warning .page-item:hover .page-link, .pagination-warning .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover .page-link, .jsgrid .jsgrid-pager .pagination-warning .jsgrid-pager-nav-button:hover .page-link, .pagination-warning .jsgrid .jsgrid-pager .jsgrid-pager-page:hover .page-link, .jsgrid .jsgrid-pager .pagination-warning .jsgrid-pager-page:hover .page-link, .pagination-warning .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-warning .page-item:hover a, .pagination-warning .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover a, .jsgrid .jsgrid-pager .pagination-warning .jsgrid-pager-nav-button:hover a,
.pagination-warning .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-warning .page-item:hover a,
.pagination-warning .jsgrid .jsgrid-pager .jsgrid-pager-page:hover a, .jsgrid .jsgrid-pager .pagination-warning .jsgrid-pager-page:hover a {
  background: #ffc71a;
  border-color: #FFC100;
  color: #ffffff;
}

.pagination-danger .page-item.active .page-link, .pagination-danger .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-danger .active.jsgrid-pager-nav-button .page-link, .pagination-danger .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination-danger .active.jsgrid-pager-page .page-link, .pagination-danger .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-danger .page-item.active a, .pagination-danger .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-danger .active.jsgrid-pager-nav-button a,
.pagination-danger .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-danger .page-item.active a,
.pagination-danger .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-danger .active.jsgrid-pager-page a {
  background: #FF4747;
  border-color: #FF4747;
}

.pagination-danger .page-item:hover .page-link, .pagination-danger .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover .page-link, .jsgrid .jsgrid-pager .pagination-danger .jsgrid-pager-nav-button:hover .page-link, .pagination-danger .jsgrid .jsgrid-pager .jsgrid-pager-page:hover .page-link, .jsgrid .jsgrid-pager .pagination-danger .jsgrid-pager-page:hover .page-link, .pagination-danger .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-danger .page-item:hover a, .pagination-danger .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover a, .jsgrid .jsgrid-pager .pagination-danger .jsgrid-pager-nav-button:hover a,
.pagination-danger .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-danger .page-item:hover a,
.pagination-danger .jsgrid .jsgrid-pager .jsgrid-pager-page:hover a, .jsgrid .jsgrid-pager .pagination-danger .jsgrid-pager-page:hover a {
  background: #ff6161;
  border-color: #FF4747;
  color: #ffffff;
}

.pagination-light .page-item.active .page-link, .pagination-light .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-light .active.jsgrid-pager-nav-button .page-link, .pagination-light .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination-light .active.jsgrid-pager-page .page-link, .pagination-light .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-light .page-item.active a, .pagination-light .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-light .active.jsgrid-pager-nav-button a,
.pagination-light .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-light .page-item.active a,
.pagination-light .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-light .active.jsgrid-pager-page a {
  background: #f8f9fa;
  border-color: #f8f9fa;
}

.pagination-light .page-item:hover .page-link, .pagination-light .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover .page-link, .jsgrid .jsgrid-pager .pagination-light .jsgrid-pager-nav-button:hover .page-link, .pagination-light .jsgrid .jsgrid-pager .jsgrid-pager-page:hover .page-link, .jsgrid .jsgrid-pager .pagination-light .jsgrid-pager-page:hover .page-link, .pagination-light .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-light .page-item:hover a, .pagination-light .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover a, .jsgrid .jsgrid-pager .pagination-light .jsgrid-pager-nav-button:hover a,
.pagination-light .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-light .page-item:hover a,
.pagination-light .jsgrid .jsgrid-pager .jsgrid-pager-page:hover a, .jsgrid .jsgrid-pager .pagination-light .jsgrid-pager-page:hover a {
  background: white;
  border-color: #f8f9fa;
  color: #ffffff;
}

.pagination-dark .page-item.active .page-link, .pagination-dark .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-dark .active.jsgrid-pager-nav-button .page-link, .pagination-dark .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination-dark .active.jsgrid-pager-page .page-link, .pagination-dark .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-dark .page-item.active a, .pagination-dark .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-dark .active.jsgrid-pager-nav-button a,
.pagination-dark .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-dark .page-item.active a,
.pagination-dark .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-dark .active.jsgrid-pager-page a {
  background: #282f3a;
  border-color: #282f3a;
}

.pagination-dark .page-item:hover .page-link, .pagination-dark .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover .page-link, .jsgrid .jsgrid-pager .pagination-dark .jsgrid-pager-nav-button:hover .page-link, .pagination-dark .jsgrid .jsgrid-pager .jsgrid-pager-page:hover .page-link, .jsgrid .jsgrid-pager .pagination-dark .jsgrid-pager-page:hover .page-link, .pagination-dark .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-dark .page-item:hover a, .pagination-dark .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover a, .jsgrid .jsgrid-pager .pagination-dark .jsgrid-pager-nav-button:hover a,
.pagination-dark .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-dark .page-item:hover a,
.pagination-dark .jsgrid .jsgrid-pager .jsgrid-pager-page:hover a, .jsgrid .jsgrid-pager .pagination-dark .jsgrid-pager-page:hover a {
  background: #323b49;
  border-color: #282f3a;
  color: #ffffff;
}

/* Popovers */
.popover-static-demo .popover {
  width: 185px;
  position: relative;
  display: block;
  float: left;
  margin: 1rem .5rem;
  z-index: 10;
}

.popover-static-demo .popover.bs-popover-bottom-demo .arrow, .popover-static-demo .popover.bs-popover-top-demo .arrow {
  left: 50%;
}

.popover-static-demo .popover.bs-popover-left-demo .arrow, .popover-static-demo .popover.bs-popover-right-demo .arrow {
  top: 50%;
}

.popover {
  z-index: 1029;
}

.popover.bs-popover-top-demo .arrow:before {
  border-top-color: rgba(0, 0, 0, 0.2);
}

.popover.bs-popover-top-demo .arrow:after {
  border-top-color: #636877;
}

.popover.bs-popover-right-demo .arrow:before {
  border-right-color: rgba(0, 0, 0, 0.2);
}

.popover.bs-popover-right-demo .arrow:after {
  border-right-color: #636877;
}

.popover.bs-popover-bottom-demo .arrow:before {
  border-bottom-color: rgba(0, 0, 0, 0.2);
}

.popover.bs-popover-bottom-demo .arrow:after {
  border-bottom-color: #636877;
}

.popover.bs-popover-bottom-demo .popover-header:before {
  border-bottom: 0;
}

.popover.bs-popover-left-demo .arrow:before {
  border-left-color: rgba(0, 0, 0, 0.2);
}

.popover.bs-popover-left-demo .arrow:after {
  border-left-color: #636877;
}

.popover .popover-header {
  font-size: .9375rem;
  border-bottom: 0;
  color: #000;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
}

.popover.left .arrow:before {
  border-left-color: rgba(0, 0, 0, 0.2);
}

.popover.left .arrow:after {
  border-left-color: #636877;
}

.popover.right .arrow:before {
  border-right-color: rgba(0, 0, 0, 0.2);
}

.popover.right .arrow:after {
  border-right-color: #636877;
}

.popover.top .arrow:before {
  border-top-color: rgba(0, 0, 0, 0.2);
}

.popover.top .arrow:after {
  border-top-color: #636877;
}

.popover.bottom .arrow:before {
  border-bottom-color: rgba(0, 0, 0, 0.2);
}

.popover.bottom .arrow:after {
  border-bottom-color: #636877;
}

.popover-primary {
  border-color: <?php echo $settings['theme']; ?>;
}

.popover-primary .popover-header {
  background: <?php echo $settings['theme']; ?>;
  color: #ffffff;
  border-bottom: 0;
}

.popover-primary.bs-popover-top .arrow:before, .popover-primary.bs-popover-auto[data-popper-placement^="top"] .arrow:before, .popover-primary.bs-popover-top .arrow:after, .popover-primary.bs-popover-auto[data-popper-placement^="top"] .arrow:after {
  border-top-color: <?php echo $settings['theme']; ?>;
}

.popover-primary.bs-popover-right .arrow:before, .popover-primary.bs-popover-right .arrow:after {
  border-right-color: <?php echo $settings['theme']; ?>;
}

.popover-primary.bs-popover-bottom .arrow:before, .popover-primary.bs-popover-auto[data-popper-placement^="bottom"] .arrow:before, .popover-primary.bs-popover-bottom .arrow:after, .popover-primary.bs-popover-auto[data-popper-placement^="bottom"] .arrow:after {
  border-bottom-color: <?php echo $settings['theme']; ?>;
}

.popover-primary.bs-popover-left .arrow:before, .popover-primary.bs-popover-left .arrow:after {
  border-left-color: <?php echo $settings['theme']; ?>;
}

.popover-secondary {
  border-color: #a3a4a5;
}

.popover-secondary .popover-header {
  background: #a3a4a5;
  color: #ffffff;
  border-bottom: 0;
}

.popover-secondary.bs-popover-top .arrow:before, .popover-secondary.bs-popover-auto[data-popper-placement^="top"] .arrow:before, .popover-secondary.bs-popover-top .arrow:after, .popover-secondary.bs-popover-auto[data-popper-placement^="top"] .arrow:after {
  border-top-color: #a3a4a5;
}

.popover-secondary.bs-popover-right .arrow:before, .popover-secondary.bs-popover-right .arrow:after {
  border-right-color: #a3a4a5;
}

.popover-secondary.bs-popover-bottom .arrow:before, .popover-secondary.bs-popover-auto[data-popper-placement^="bottom"] .arrow:before, .popover-secondary.bs-popover-bottom .arrow:after, .popover-secondary.bs-popover-auto[data-popper-placement^="bottom"] .arrow:after {
  border-bottom-color: #a3a4a5;
}

.popover-secondary.bs-popover-left .arrow:before, .popover-secondary.bs-popover-left .arrow:after {
  border-left-color: #a3a4a5;
}

.popover-success {
  border-color: #57B657;
}

.popover-success .popover-header {
  background: #57B657;
  color: #ffffff;
  border-bottom: 0;
}

.popover-success.bs-popover-top .arrow:before, .popover-success.bs-popover-auto[data-popper-placement^="top"] .arrow:before, .popover-success.bs-popover-top .arrow:after, .popover-success.bs-popover-auto[data-popper-placement^="top"] .arrow:after {
  border-top-color: #57B657;
}

.popover-success.bs-popover-right .arrow:before, .popover-success.bs-popover-right .arrow:after {
  border-right-color: #57B657;
}

.popover-success.bs-popover-bottom .arrow:before, .popover-success.bs-popover-auto[data-popper-placement^="bottom"] .arrow:before, .popover-success.bs-popover-bottom .arrow:after, .popover-success.bs-popover-auto[data-popper-placement^="bottom"] .arrow:after {
  border-bottom-color: #57B657;
}

.popover-success.bs-popover-left .arrow:before, .popover-success.bs-popover-left .arrow:after {
  border-left-color: #57B657;
}

.popover-info {
  border-color: #248AFD;
}

.popover-info .popover-header {
  background: #248AFD;
  color: #ffffff;
  border-bottom: 0;
}

.popover-info.bs-popover-top .arrow:before, .popover-info.bs-popover-auto[data-popper-placement^="top"] .arrow:before, .popover-info.bs-popover-top .arrow:after, .popover-info.bs-popover-auto[data-popper-placement^="top"] .arrow:after {
  border-top-color: #248AFD;
}

.popover-info.bs-popover-right .arrow:before, .popover-info.bs-popover-right .arrow:after {
  border-right-color: #248AFD;
}

.popover-info.bs-popover-bottom .arrow:before, .popover-info.bs-popover-auto[data-popper-placement^="bottom"] .arrow:before, .popover-info.bs-popover-bottom .arrow:after, .popover-info.bs-popover-auto[data-popper-placement^="bottom"] .arrow:after {
  border-bottom-color: #248AFD;
}

.popover-info.bs-popover-left .arrow:before, .popover-info.bs-popover-left .arrow:after {
  border-left-color: #248AFD;
}

.popover-warning {
  border-color: #FFC100;
}

.popover-warning .popover-header {
  background: #FFC100;
  color: #ffffff;
  border-bottom: 0;
}

.popover-warning.bs-popover-top .arrow:before, .popover-warning.bs-popover-auto[data-popper-placement^="top"] .arrow:before, .popover-warning.bs-popover-top .arrow:after, .popover-warning.bs-popover-auto[data-popper-placement^="top"] .arrow:after {
  border-top-color: #FFC100;
}

.popover-warning.bs-popover-right .arrow:before, .popover-warning.bs-popover-right .arrow:after {
  border-right-color: #FFC100;
}

.popover-warning.bs-popover-bottom .arrow:before, .popover-warning.bs-popover-auto[data-popper-placement^="bottom"] .arrow:before, .popover-warning.bs-popover-bottom .arrow:after, .popover-warning.bs-popover-auto[data-popper-placement^="bottom"] .arrow:after {
  border-bottom-color: #FFC100;
}

.popover-warning.bs-popover-left .arrow:before, .popover-warning.bs-popover-left .arrow:after {
  border-left-color: #FFC100;
}

.popover-danger {
  border-color: #FF4747;
}

.popover-danger .popover-header {
  background: #FF4747;
  color: #ffffff;
  border-bottom: 0;
}

.popover-danger.bs-popover-top .arrow:before, .popover-danger.bs-popover-auto[data-popper-placement^="top"] .arrow:before, .popover-danger.bs-popover-top .arrow:after, .popover-danger.bs-popover-auto[data-popper-placement^="top"] .arrow:after {
  border-top-color: #FF4747;
}

.popover-danger.bs-popover-right .arrow:before, .popover-danger.bs-popover-right .arrow:after {
  border-right-color: #FF4747;
}

.popover-danger.bs-popover-bottom .arrow:before, .popover-danger.bs-popover-auto[data-popper-placement^="bottom"] .arrow:before, .popover-danger.bs-popover-bottom .arrow:after, .popover-danger.bs-popover-auto[data-popper-placement^="bottom"] .arrow:after {
  border-bottom-color: #FF4747;
}

.popover-danger.bs-popover-left .arrow:before, .popover-danger.bs-popover-left .arrow:after {
  border-left-color: #FF4747;
}

.popover-light {
  border-color: #f8f9fa;
}

.popover-light .popover-header {
  background: #f8f9fa;
  color: #ffffff;
  border-bottom: 0;
}

.popover-light.bs-popover-top .arrow:before, .popover-light.bs-popover-auto[data-popper-placement^="top"] .arrow:before, .popover-light.bs-popover-top .arrow:after, .popover-light.bs-popover-auto[data-popper-placement^="top"] .arrow:after {
  border-top-color: #f8f9fa;
}

.popover-light.bs-popover-right .arrow:before, .popover-light.bs-popover-right .arrow:after {
  border-right-color: #f8f9fa;
}

.popover-light.bs-popover-bottom .arrow:before, .popover-light.bs-popover-auto[data-popper-placement^="bottom"] .arrow:before, .popover-light.bs-popover-bottom .arrow:after, .popover-light.bs-popover-auto[data-popper-placement^="bottom"] .arrow:after {
  border-bottom-color: #f8f9fa;
}

.popover-light.bs-popover-left .arrow:before, .popover-light.bs-popover-left .arrow:after {
  border-left-color: #f8f9fa;
}

.popover-dark {
  border-color: #282f3a;
}

.popover-dark .popover-header {
  background: #282f3a;
  color: #ffffff;
  border-bottom: 0;
}

.popover-dark.bs-popover-top .arrow:before, .popover-dark.bs-popover-auto[data-popper-placement^="top"] .arrow:before, .popover-dark.bs-popover-top .arrow:after, .popover-dark.bs-popover-auto[data-popper-placement^="top"] .arrow:after {
  border-top-color: #282f3a;
}

.popover-dark.bs-popover-right .arrow:before, .popover-dark.bs-popover-right .arrow:after {
  border-right-color: #282f3a;
}

.popover-dark.bs-popover-bottom .arrow:before, .popover-dark.bs-popover-auto[data-popper-placement^="bottom"] .arrow:before, .popover-dark.bs-popover-bottom .arrow:after, .popover-dark.bs-popover-auto[data-popper-placement^="bottom"] .arrow:after {
  border-bottom-color: #282f3a;
}

.popover-dark.bs-popover-left .arrow:before, .popover-dark.bs-popover-left .arrow:after {
  border-left-color: #282f3a;
}

/* Portfolio */
.portfolio-grid figure {
  position: relative;
  float: left;
  overflow: hidden;
  width: 100%;
  background: #0d6efd;
  text-align: center;
  cursor: pointer;
}

.portfolio-grid figure img {
  position: relative;
  display: block;
  min-height: 100%;
  max-width: 100%;
  width: 100%;
  opacity: 0.8;
}

.portfolio-grid figure figcaption {
  padding: 2em;
  color: #ffffff;
  text-transform: uppercase;
  font-size: 1.25em;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.portfolio-grid figure figcaption:after, .portfolio-grid figure figcaption:before {
  pointer-events: none;
}

.portfolio-grid figure.effect-text-in {
  border-radius: 0.25rem;
}

.portfolio-grid figure.effect-text-in h4, .portfolio-grid figure.effect-text-in .h4,
.portfolio-grid figure.effect-text-in img {
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
}

.portfolio-grid figure.effect-text-in img {
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.portfolio-grid figure.effect-text-in h4, .portfolio-grid figure.effect-text-in .h4,
.portfolio-grid figure.effect-text-in p {
  position: absolute;
  bottom: 10px;
  left: 0;
  padding: 10px;
  margin-bottom: 0;
  width: 100%;
}

.portfolio-grid figure.effect-text-in p {
  text-transform: none;
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0, 50px, 0);
  transform: translate3d(0, 50px, 0);
}

.portfolio-grid figure.effect-text-in:hover img {
  -webkit-transform: translate3d(0, -80px, 0);
  transform: translate3d(0, -80px, 0);
}

.portfolio-grid figure.effect-text-in:hover h4, .portfolio-grid figure.effect-text-in:hover .h4 {
  -webkit-transform: translate3d(0, -100px, 0);
  transform: translate3d(0, -100px, 0);
}

.portfolio-grid figure.effect-text-in:hover p {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

/* Preview */
.preview-list .preview-item {
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
  -webkit-align-items: flex-start;
  align-items: flex-start;
  padding: 1.25rem 0;
}

.preview-list .preview-item:last-child {
  border-bottom: 0;
}

.preview-list .preview-item .form-check {
  margin-top: 8px;
  margin-right: 1rem;
}

.preview-list .preview-item .preview-thumbnail {
  color: #ffffff;
  position: relative;
}

.preview-list .preview-item .preview-thumbnail img,
.preview-list .preview-item .preview-thumbnail .preview-icon {
  width: 36px;
  height: 36px;
  border-radius: 100%;
}

.preview-list .preview-item .preview-thumbnail .preview-icon {
  padding: 6px;
  text-align: center;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
}

.preview-list .preview-item .preview-thumbnail .preview-icon i {
  font-size: 1.125rem;
  margin: 0;
}

.preview-list .preview-item .preview-thumbnail .badge {
  border: 2px solid color(white);
  border-radius: 100%;
  bottom: 5px;
  display: block;
  height: 14px;
  left: -5px;
  padding: 0;
  position: absolute;
  width: 14px;
}

.preview-list .preview-item .preview-item-content {
  line-height: 1;
  padding-left: 15px;
}

.preview-list .preview-item .preview-item-content:first-child {
  padding-left: 0;
}

.preview-list .preview-item .preview-item-content p {
  margin-bottom: 10px;
}

.preview-list .preview-item .preview-item-content p .content-category {
  font-family: 'source-sans-pro-semibold', sans-serif;
  padding-right: 15px;
  border-right: 1px solid #575757;
}

.rtl .preview-list .preview-item .preview-item-content {
  padding-left: 0;
  padding-right: 1rem;
  margin-right: 0;
  margin-left: auto;
}

.preview-list .preview-item .preview-actions {
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
}

.preview-list .preview-item .preview-actions i {
  width: 29px;
  color: #e6e9ed;
  height: 29px;
  border: 2px solid #e6e9ed;
  border-radius: 100%;
  padding: 3px 6px;
  display: inline-block;
}

.preview-list .preview-item .preview-actions i:first-child {
  margin-right: 10px;
}

.preview-list.comment-preview .preview-item {
  padding: .87rem 0;
}

.preview-list.comment-preview .preview-item:first-child {
  padding-top: 0;
}

.preview-list.comment-preview .preview-item p {
  line-height: 27px;
}

.preview-list.bordered .preview-item {
  border-bottom: 1px solid #575757;
}

.preview-list.bordered .preview-item:last-child {
  border-bottom: 0;
}

/* Tables */
.table, .jsgrid .jsgrid-table {
  margin-bottom: 0;
}

.table thead th, .jsgrid .jsgrid-table thead th {
  border-top: 0;
  border-bottom-width: 1px;
  font-weight: 500;
  font-size: 1rem;
}

.table thead th i, .jsgrid .jsgrid-table thead th i {
  margin-left: 0.325rem;
}

.table th, .jsgrid .jsgrid-table th,
.table td,
.jsgrid .jsgrid-table td {
  vertical-align: middle;
  line-height: 1;
  white-space: nowrap;
  padding: 1.25rem 0.9375rem;
}


.table td,
.jsgrid .jsgrid-table td {
  font-size: 0.875rem;
}

.table td img, .jsgrid .jsgrid-table td img {
  width: 36px;
  height: 36px;
  border-radius: 100%;
}

.table td .badge, .jsgrid .jsgrid-table td .badge {
  margin-bottom: 0;
}

.table.table-borderless, .jsgrid .table-borderless.jsgrid-table {
  border: none;
}

.table.table-borderless tr, .jsgrid .table-borderless.jsgrid-table tr,
.table.table-borderless td,
.jsgrid .table-borderless.jsgrid-table td,
.table.table-borderless th,
.jsgrid .table-borderless.jsgrid-table th {
  border: none;
}

.table.table-bordered, .jsgrid .table-bordered.jsgrid-table {
  border-top: 1px solid #575757;
}

.nav-tabs .nav-link {
  background: #292f42;
  color: #fff;
  border-radius: 0;
  border: 1px solid #575757;
  padding: .75rem 1.5rem;
}

@media (max-width: 767px) {
  .nav-tabs .nav-link {
    padding: .75rem .5rem;
  }
}

.nav-tabs .nav-item:first-child .nav-link {
  border-radius: 4px 0 0 0;
}

.nav-tabs .nav-item:last-child .nav-link {
  border-radius: 0 4px 0 0;
}

.nav-tabs.nav-tabs-vertical, .nav-tabs.nav-tabs-vertical-custom {
  border-bottom: 0;
}

.nav-tabs.nav-tabs-vertical .nav-link.active, .nav-tabs.nav-tabs-vertical-custom .nav-link.active {
  border-bottom-color: #575757;
}

.nav-tabs.nav-tabs-vertical .nav-item:first-child .nav-link, .nav-tabs.nav-tabs-vertical-custom .nav-item:first-child .nav-link {
  border-radius: 4px 4px 0 0;
}

.nav-tabs.nav-tabs-vertical .nav-item:last-child .nav-link, .nav-tabs.nav-tabs-vertical-custom .nav-item:last-child .nav-link {
  border-radius: 0 0 4px 4px;
}

.nav-tabs.nav-tabs-vertical-custom {
  background: #0d6efd;
  border-radius: 4px;
}

.nav-tabs.nav-tabs-vertical-custom .nav-link {
  background: transparent;
  border-color: rgba(255, 255, 255, 0.2);
  color: #012e70;
  font-weight: 600;
  padding: 1.75rem;
}

.nav-tabs.nav-tabs-vertical-custom .nav-link.active {
  color: #ffffff;
  border-color: rgba(255, 255, 255, 0.2);
}

.nav-pills {
  border-bottom: 1px solid #575757;
  padding-bottom: 1rem;
}

.nav-pills .nav-link {
  border: 1px solid #575757;
  padding: .5rem 1.75rem;
}

@media (max-width: 767px) {
  .nav-pills .nav-link {
    padding: .5rem .5rem;
  }
}

.nav-pills .nav-item {
  margin-right: 1rem;
}

@media (max-width: 767px) {
  .nav-pills .nav-item {
    margin-right: .5rem;
  }
}

.nav-pills.nav-pills-vertical {
  border-bottom: 0;
}

.nav-pills.nav-pills-vertical .nav-item {
  margin-right: 0;
  margin-bottom: 1rem;
}

.nav-pills.nav-pills-custom {
  border-bottom: 0;
}

.nav-pills.nav-pills-custom .nav-link {
  border-radius: 20px;
  padding: .5rem 2.5rem;
  background: #fcfcfd;
  color: #000;
}

.nav-pills.nav-pills-custom .nav-link.active {
  background: #dc3545;
  color: #ffffff;
}

/* Pills color variations */
.nav-pills-primary .nav-link {
  color: <?php echo $settings['theme']; ?>;
}

.nav-pills-primary .nav-link.active {
  background: primary;
}

.nav-pills-secondary .nav-link {
  color: #a3a4a5;
}

.nav-pills-secondary .nav-link.active {
  background: secondary;
}

.nav-pills-success .nav-link {
  color: #57B657;
}

.nav-pills-success .nav-link.active {
  background: success;
}

.nav-pills-info .nav-link {
  color: #248AFD;
}

.nav-pills-info .nav-link.active {
  background: info;
}

.nav-pills-warning .nav-link {
  color: #FFC100;
}

.nav-pills-warning .nav-link.active {
  background: warning;
}

.nav-pills-danger .nav-link {
  color: #FF4747;
}

.nav-pills-danger .nav-link.active {
  background: danger;
}

.nav-pills-light .nav-link {
  color: #f8f9fa;
}

.nav-pills-light .nav-link.active {
  background: light;
}

.nav-pills-dark .nav-link {
  color: #282f3a;
}

.nav-pills-dark .nav-link.active {
  background: dark;
}

.tab-content {
  border: 1px solid #575757;
  border-top: 0;
  padding: 2rem 1rem;
  text-align: justify;
}

.tab-content.tab-content-vertical {
  border-top: 1px solid #575757;
}

.tab-content.tab-content-vertical-custom {
  border: 0;
  padding-top: 0;
}

.tab-content.tab-content-custom-pill {
  border: 0;
  padding-left: 0;
}

/* Timeline */
.timeline {
  list-style: none;
  padding: 0;
  position: relative;
}

.timeline:before {
  top: 0;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 3px;
  background-color: #575757;
  left: 50%;
  margin-left: -1.5px;
}

.timeline .timeline-wrapper {
  display: block;
  margin-bottom: 20px;
  position: relative;
  width: 100%;
  padding-right: 90px;
}

.timeline .timeline-wrapper:before {
  content: " ";
  display: table;
}

.timeline .timeline-wrapper:after {
  content: " ";
  display: table;
  clear: both;
}

.timeline .timeline-wrapper .timeline-panel {
  border-radius: 2px;
  padding: 20px;
  position: relative;
  background: transparent;
  border-radius: 6px;
  box-shadow: 1px -1px 24px 0 rgba(255, 255, 255, 0.09);
  width: 35%;
  margin-left: 15%;
}

.timeline .timeline-wrapper .timeline-panel:before {
  position: absolute;
  top: 0;
  width: 100%;
  height: 2px;
  content: "";
  left: 0;
  right: 0;
}

.timeline .timeline-wrapper .timeline-panel:after {
  position: absolute;
  top: 10px;
  right: -14px;
  display: inline-block;
  border-top: 14px solid transparent;
  border-left: 14px solid #1f1e23;
  border-right: 0 solid #1f1e23;
  border-bottom: 14px solid transparent;
  content: " ";
}

.timeline .timeline-wrapper .timeline-panel .timeline-title {
  margin-top: 0;
  color: #212529;
  text-transform: uppercase;
}

.timeline .timeline-wrapper .timeline-panel .timeline-body p + p {
  margin-top: 5px;
}

.timeline .timeline-wrapper .timeline-panel .timeline-body ul {
  margin-bottom: 0;
}

.timeline .timeline-wrapper .timeline-panel .timeline-footer span {
  font-size: .6875rem;
}

.timeline .timeline-wrapper .timeline-panel .timeline-footer i {
  font-size: 1.5rem;
}

.timeline .timeline-wrapper .timeline-badge {
  width: 14px;
  height: 14px;
  position: absolute;
  top: 16px;
  left: calc(50% - 7px);
  z-index: 10;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
  border: 2px solid #575757;
}

.timeline .timeline-wrapper .timeline-badge i {
  color: #ffffff;
}

.timeline .timeline-wrapper.timeline-inverted {
  padding-right: 0;
  padding-left: 90px;
}

.timeline .timeline-wrapper.timeline-inverted .timeline-panel {
  margin-left: auto;
  margin-right: 15%;
}

.timeline .timeline-wrapper.timeline-inverted .timeline-panel:after {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}

@media (max-width: 767px) {
  .timeline .timeline-wrapper {
    padding-right: 150px;
  }
  .timeline .timeline-wrapper.timeline-inverted {
    padding-left: 150px;
  }
  .timeline .timeline-wrapper .timeline-panel {
    width: 60%;
    margin-left: 0;
    margin-right: 0;
  }
}

@media (max-width: 576px) {
  .timeline .timeline-wrapper .timeline-panel {
    width: 68%;
  }
}

.timeline-wrapper-primary .timeline-panel:before {
  background: primary;
}

.timeline-wrapper-primary .timeline-badge {
  background: primary;
}

.timeline-wrapper-secondary .timeline-panel:before {
  background: secondary;
}

.timeline-wrapper-secondary .timeline-badge {
  background: secondary;
}

.timeline-wrapper-success .timeline-panel:before {
  background: success;
}

.timeline-wrapper-success .timeline-badge {
  background: success;
}

.timeline-wrapper-info .timeline-panel:before {
  background: info;
}

.timeline-wrapper-info .timeline-badge {
  background: info;
}

.timeline-wrapper-warning .timeline-panel:before {
  background: warning;
}

.timeline-wrapper-warning .timeline-badge {
  background: warning;
}

.timeline-wrapper-danger .timeline-panel:before {
  background: danger;
}

.timeline-wrapper-danger .timeline-badge {
  background: danger;
}

.timeline-wrapper-light .timeline-panel:before {
  background: light;
}

.timeline-wrapper-light .timeline-badge {
  background: light;
}

.timeline-wrapper-dark .timeline-panel:before {
  background: dark;
}

.timeline-wrapper-dark .timeline-badge {
  background: dark;
}

/* Tabs */
.add-items {
  margin-bottom: 1.5rem;
  overflow: hidden;
}

.add-items input[type="text"] {
  width: 100%;
  background: transparent;
  border: 0;
  padding-left: 0;
}

.add-items input[type="text"]::-webkit-input-placeholder {
  font-size: 1rem;
  color: #9b9b9b;
}

.add-items input[type="text"]:-moz-placeholder {
  font-size: 1rem;
  color: #9b9b9b;
}

.add-items input[type="text"]::-moz-placeholder {
  font-size: 1rem;
  color: #9b9b9b;
}

.add-items input[type="text"]:-ms-input-placeholder {
  font-size: 1rem;
  color: #9b9b9b;
}

.add-items .btn, .add-items .fc button, .fc .add-items button, .add-items .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .add-items .ajax-file-upload, .add-items .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .add-items .swal2-styled, .add-items .wizard > .actions a, .wizard > .actions .add-items a {
  margin-left: .5rem;
}

.add-items .btn i, .add-items .fc button i, .fc .add-items button i, .add-items .ajax-upload-dragdrop .ajax-file-upload i, .ajax-upload-dragdrop .add-items .ajax-file-upload i, .add-items .swal2-modal .swal2-buttonswrapper .swal2-styled i, .swal2-modal .swal2-buttonswrapper .add-items .swal2-styled i, .add-items .wizard > .actions a i, .wizard > .actions .add-items a i {
  font-size: 1.25rem;
}

.rtl .add-items .btn, .rtl .add-items .fc button, .fc .rtl .add-items button, .rtl .add-items .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .rtl .add-items .ajax-file-upload, .rtl .add-items .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .rtl .add-items .swal2-styled, .rtl .add-items .wizard > .actions a, .wizard > .actions .rtl .add-items a {
  margin-left: auto;
  margin-right: .5rem;
}

.list-wrapper {
  height: 100%;
  max-height: 390px;
  overflow: scroll;
}

.list-wrapper ul {
  padding: 0;
  text-align: left;
  list-style: none;
  margin-bottom: 0;
}

.list-wrapper ul li {
  font-size: .9375rem;
  padding: 1.063rem 1.4rem;
  border: none;
  margin-bottom: 0.812rem;
  border-radius: 7px;
  background: transparent;
}

.list-wrapper ul li .form-check {
  max-width: 90%;
  margin-top: .25rem;
  margin-bottom: .25rem;
}

.list-wrapper input[type="checkbox"] {
  margin-right: 15px;
}

.list-wrapper .remove {
  cursor: pointer;
  font-size: .7rem;
  font-weight: 600;
  width: 1.25rem;
  height: 1.25rem;
  line-height: 1.25rem;
  text-align: center;
}

.list-wrapper .completed .form-check {
  text-decoration: line-through;
  text-decoration-color: #0dcaf0;
}

/* Tooltips */
.tooltip-static-demo .tooltip {
  position: relative;
  display: inline-block;
  opacity: 1;
  margin: 0 10px 10px 0;
  z-index: 10;
}

.tooltip-static-demo .bs-tooltip-bottom-demo .arrow,
.tooltip-static-demo .bs-tooltip-top-demo .arrow {
  left: 50%;
}

.tooltip-static-demo .bs-tooltip-right-demo .arrow:before,
.tooltip-static-demo .bs-tooltip-left-demo .arrow:before {
  top: calc((100%-0.8rem)/2);
}

.tooltip {
  font-size: 0.75rem;
  min-width: 5.625rem;
  z-index: 1029;
}

.tooltip .tooltip-inner {
  font-weight: 400;
}

.tooltip-primary .tooltip-inner {
  background: <?php echo $settings['theme']; ?>;
  color: #ffffff;
}

.tooltip-primary.bs-tooltip-top .arrow::before, .tooltip-primary.bs-tooltip-auto[data-popper-placement^="top"] .arrow::before {
  border-top-color: <?php echo $settings['theme']; ?>;
}

.tooltip-primary.bs-tooltip-right .arrow::before {
  border-right-color: <?php echo $settings['theme']; ?>;
}

.tooltip-primary.bs-tooltip-bottom .arrow::before, .tooltip-primary.bs-tooltip-auto[data-popper-placement^="bottom"] .arrow::before {
  border-bottom-color: <?php echo $settings['theme']; ?>;
}

.tooltip-primary.bs-tooltip-left .arrow::before {
  border-left-color: <?php echo $settings['theme']; ?>;
}

.tooltip-secondary .tooltip-inner {
  background: #a3a4a5;
  color: #ffffff;
}

.tooltip-secondary.bs-tooltip-top .arrow::before, .tooltip-secondary.bs-tooltip-auto[data-popper-placement^="top"] .arrow::before {
  border-top-color: #a3a4a5;
}

.tooltip-secondary.bs-tooltip-right .arrow::before {
  border-right-color: #a3a4a5;
}

.tooltip-secondary.bs-tooltip-bottom .arrow::before, .tooltip-secondary.bs-tooltip-auto[data-popper-placement^="bottom"] .arrow::before {
  border-bottom-color: #a3a4a5;
}

.tooltip-secondary.bs-tooltip-left .arrow::before {
  border-left-color: #a3a4a5;
}

.tooltip-success .tooltip-inner {
  background: #57B657;
  color: #ffffff;
}

.tooltip-success.bs-tooltip-top .arrow::before, .tooltip-success.bs-tooltip-auto[data-popper-placement^="top"] .arrow::before {
  border-top-color: #57B657;
}

.tooltip-success.bs-tooltip-right .arrow::before {
  border-right-color: #57B657;
}

.tooltip-success.bs-tooltip-bottom .arrow::before, .tooltip-success.bs-tooltip-auto[data-popper-placement^="bottom"] .arrow::before {
  border-bottom-color: #57B657;
}

.tooltip-success.bs-tooltip-left .arrow::before {
  border-left-color: #57B657;
}

.tooltip-info .tooltip-inner {
  background: #248AFD;
  color: #ffffff;
}

.tooltip-info.bs-tooltip-top .arrow::before, .tooltip-info.bs-tooltip-auto[data-popper-placement^="top"] .arrow::before {
  border-top-color: #248AFD;
}

.tooltip-info.bs-tooltip-right .arrow::before {
  border-right-color: #248AFD;
}

.tooltip-info.bs-tooltip-bottom .arrow::before, .tooltip-info.bs-tooltip-auto[data-popper-placement^="bottom"] .arrow::before {
  border-bottom-color: #248AFD;
}

.tooltip-info.bs-tooltip-left .arrow::before {
  border-left-color: #248AFD;
}

.tooltip-warning .tooltip-inner {
  background: #FFC100;
  color: #ffffff;
}

.tooltip-warning.bs-tooltip-top .arrow::before, .tooltip-warning.bs-tooltip-auto[data-popper-placement^="top"] .arrow::before {
  border-top-color: #FFC100;
}

.tooltip-warning.bs-tooltip-right .arrow::before {
  border-right-color: #FFC100;
}

.tooltip-warning.bs-tooltip-bottom .arrow::before, .tooltip-warning.bs-tooltip-auto[data-popper-placement^="bottom"] .arrow::before {
  border-bottom-color: #FFC100;
}

.tooltip-warning.bs-tooltip-left .arrow::before {
  border-left-color: #FFC100;
}

.tooltip-danger .tooltip-inner {
  background: #FF4747;
  color: #ffffff;
}

.tooltip-danger.bs-tooltip-top .arrow::before, .tooltip-danger.bs-tooltip-auto[data-popper-placement^="top"] .arrow::before {
  border-top-color: #FF4747;
}

.tooltip-danger.bs-tooltip-right .arrow::before {
  border-right-color: #FF4747;
}

.tooltip-danger.bs-tooltip-bottom .arrow::before, .tooltip-danger.bs-tooltip-auto[data-popper-placement^="bottom"] .arrow::before {
  border-bottom-color: #FF4747;
}

.tooltip-danger.bs-tooltip-left .arrow::before {
  border-left-color: #FF4747;
}

.tooltip-light .tooltip-inner {
  background: #f8f9fa;
  color: #ffffff;
}

.tooltip-light.bs-tooltip-top .arrow::before, .tooltip-light.bs-tooltip-auto[data-popper-placement^="top"] .arrow::before {
  border-top-color: #f8f9fa;
}

.tooltip-light.bs-tooltip-right .arrow::before {
  border-right-color: #f8f9fa;
}

.tooltip-light.bs-tooltip-bottom .arrow::before, .tooltip-light.bs-tooltip-auto[data-popper-placement^="bottom"] .arrow::before {
  border-bottom-color: #f8f9fa;
}

.tooltip-light.bs-tooltip-left .arrow::before {
  border-left-color: #f8f9fa;
}

.tooltip-dark .tooltip-inner {
  background: #282f3a;
  color: #ffffff;
}

.tooltip-dark.bs-tooltip-top .arrow::before, .tooltip-dark.bs-tooltip-auto[data-popper-placement^="top"] .arrow::before {
  border-top-color: #282f3a;
}

.tooltip-dark.bs-tooltip-right .arrow::before {
  border-right-color: #282f3a;
}

.tooltip-dark.bs-tooltip-bottom .arrow::before, .tooltip-dark.bs-tooltip-auto[data-popper-placement^="bottom"] .arrow::before {
  border-bottom-color: #282f3a;
}

.tooltip-dark.bs-tooltip-left .arrow::before {
  border-left-color: #282f3a;
}

.profile-navbar .nav-item .nav-link {
  color: #fff;
}

.profile-navbar .nav-item .nav-link.active {
  color: #0d6efd;
}

.profile-navbar .nav-item .nav-link i {
  font-size: 1.25rem;
}

.profile-feed-item {
  padding: 1.5rem 0;
  border-bottom: 1px solid #575757;
}

/* Pricing table */
.pricing-table .pricing-card .pricing-card-body {
  padding: 50px 56px 43px 56px;
}

.pricing-table .pricing-card .pricing-card-body .plan-features {
  width: 100%;
  margin-bottom: 32px;
}

.pricing-table .pricing-card .pricing-card-body .plan-features li {
  text-align: left;
  padding: 4px 0px;
  font-weight: 400;
  font-size: 0.875rem;
}

/*-------------------------------------------------------------------*/
/* === Email === */
/* Mail Sidebar */
.email-wrapper .mail-sidebar {
  background: #1f1e23;
}

@media (max-width: 769px) {
  .email-wrapper .mail-sidebar {
    position: relative;
  }
}

@media (max-width: 575.98px) {
  .email-wrapper .mail-sidebar {
    position: fixed;
    z-index: 99;
    background: color(white);
    width: 45%;
    min-width: 300px;
    left: -100%;
    display: block;
    transition: 0.4s ease;
    -webkit-transition: 0.4s ease;
    -moz-transition: 0.4s ease;
  }
}

.email-wrapper .mail-sidebar .menu-bar {
  width: 100%;
  float: right;
  height: 100%;
  min-height: 100%;
}

@media (max-width: 575.98px) {
  .email-wrapper .mail-sidebar .menu-bar {
    min-height: 100vh;
    max-height: 100%;
    height: auto;
    overflow-y: auto;
    overflow-x: hidden;
  }
}

.email-wrapper .mail-sidebar .menu-bar .menu-items {
  padding: 0;
  margin-bottom: 0;
  height: auto;
  list-style-type: none;
}

.email-wrapper .mail-sidebar .menu-bar .menu-items li {
  padding: 10px 15px;
  transition: 0.4s;
  position: relative;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: space-between;
  justify-content: space-between;
}

.email-wrapper .mail-sidebar .menu-bar .menu-items li:hover {
  background: rgba(255, 255, 255, 0.2);
}

.email-wrapper .mail-sidebar .menu-bar .menu-items li a {
  color: #fff;
  font-size: 0.875rem;
  text-decoration: none;
}

.email-wrapper .mail-sidebar .menu-bar .menu-items li a i {
  margin-right: 8px;
  font-size: 0.875rem;
  line-height: 1.5;
}

.email-wrapper .mail-sidebar .menu-bar .menu-items li.active {
  background: rgba(255, 255, 255, 0.2);
  border-radius: 4px;
}

.email-wrapper .mail-sidebar .menu-bar .menu-items li.compose:hover {
  background: transparent;
}

.email-wrapper .mail-sidebar .menu-bar .online-status {
  margin-top: 1rem;
}

.email-wrapper .mail-sidebar .menu-bar .online-status .chat {
  font-size: 0.875rem;
  color: #0d6efd;
  margin-bottom: 0;
  font-weight: 600;
}

.email-wrapper .mail-sidebar .menu-bar .online-status .status {
  height: 10px;
  width: 10px;
  border-radius: 100%;
  display: inline-flex;
  justify-content: flex-start;
  transform: translateX(-43px) translateY(2px);
}

.email-wrapper .mail-sidebar .menu-bar .online-status .status:after {
  font-size: 12px;
  color: #fff;
  margin: 0 0 0 18px;
}

.email-wrapper .mail-sidebar .menu-bar .online-status .status.offline {
  background: #dc3545;
}

.email-wrapper .mail-sidebar .menu-bar .online-status .status.offline:after {
  content: "Offline";
}

.email-wrapper .mail-sidebar .menu-bar .online-status .status.online {
  background: #198754;
}

.email-wrapper .mail-sidebar .menu-bar .online-status .status.online:after {
  content: "Online";
}

.email-wrapper .mail-sidebar .menu-bar .profile-list {
  padding: 10px 0;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item {
  border-bottom: 1px solid #575757;
  padding: 6px 0;
  display: block;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item:last-child {
  border-bottom: 0;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item a {
  text-decoration: none;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item a .pro-pic {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  padding: 0;
  width: 20%;
  max-width: 40px;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item a .pro-pic img {
  max-width: 100%;
  width: 100%;
  border-radius: 100%;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user {
  width: 100%;
  padding: 5px 10px 0 15px;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-name {
  font-weight: 400;
  font-size: 0.875rem;
  line-height: 1;
  color: #fff;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation {
  font-size: calc(0.875rem - 0.1rem);
  margin-bottom: 0;
}

.email-wrapper .sidebar.open {
  left: 0;
}

/* Mail List Container */
.email-wrapper .mail-list-container {
  background: #1f1e23;
  border-left: 1px solid #575757;
  height: 100%;
  padding-left: 0;
  padding-right: 0;
}

.email-wrapper .mail-list-container a {
  text-decoration: none;
}

.email-wrapper .mail-list-container .mail-list {
  border-bottom: 1px solid #575757;
  display: flex;
  flex-direction: row;
  padding: 10px 15px;
  width: 100%;
}

.email-wrapper .mail-list-container .mail-list:last-child {
  border-bottom: none;
}

.email-wrapper .mail-list-container .mail-list .form-check {
  margin-top: 12px;
  width: 11%;
  min-width: 20px;
}

.email-wrapper .mail-list-container .mail-list .content {
  width: 83%;
  padding-left: 0;
  padding-right: 0;
}

.email-wrapper .mail-list-container .mail-list .content .sender-name {
  font-size: 0.875rem;
  font-weight: 400;
  max-width: 95%;
}

.email-wrapper .mail-list-container .mail-list .content .message_text {
  margin: 0;
  max-width: 93%;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.email-wrapper .mail-list-container .mail-list .details {
  width: 5.5%;
}

.email-wrapper .mail-list-container .mail-list .details .date {
  text-align: right;
  margin: auto 15px auto 0;
  white-space: nowrap;
}

.email-wrapper .mail-list-container .mail-list .details i {
  margin: auto 0;
  color: #ddd;
}

.email-wrapper .mail-list-container .mail-list .details i.favorite {
  color: #ffc107;
}

.email-wrapper .mail-list-container .mail-list.new_mail {
  background: rgba(255, 255, 255, 0.2);
}

.email-wrapper .mail-list-container .mail-list.new_mail .details .date {
  color: color(black);
}

/* Message Content */
.email-wrapper .mail-view {
  background: #1f1e23;
}

.email-wrapper .mail-view .message-body .sender-details {
  padding: 20px 15px 0;
  border-bottom: 1px solid #575757;
  display: -webkit-flex;
  display: flex;
}

.email-wrapper .mail-view .message-body .sender-details .details {
  padding-bottom: 0;
}

.email-wrapper .mail-view .message-body .sender-details .details .msg-subject {
  font-weight: 600;
}

.email-wrapper .mail-view .message-body .sender-details .details .sender-email {
  margin-bottom: 20px;
  font-weight: 400;
}

.email-wrapper .mail-view .message-body .sender-details .details .sender-email i {
  font-size: 1rem;
  font-weight: 600;
  margin: 0 1px 0 7px;
}

.email-wrapper .mail-view .message-body .message-content {
  padding: 50px 15px;
}

.email-wrapper .mail-view .message-body .attachments-sections ul {
  list-style: none;
  border-top: 1px solid #575757;
  padding: 30px 15px 20px;
}

.email-wrapper .mail-view .message-body .attachments-sections ul li {
  padding: 10px;
  margin-right: 20px;
  border: 1px solid #575757;
  border-radius: 5px;
}

.email-wrapper .mail-view .message-body .attachments-sections ul li .thumb {
  display: inline-block;
  margin-right: 10px;
}

.email-wrapper .mail-view .message-body .attachments-sections ul li .thumb i {
  font-size: 30px;
  margin: 0;
  color: #fff;
}

.email-wrapper .mail-view .message-body .attachments-sections ul li .details p.file-name {
  display: block;
  margin-bottom: 0;
  color: #fff;
}

.email-wrapper .mail-view .message-body .attachments-sections ul li .details .buttons .file-size {
  margin-right: 10px;
  margin-bottom: 0;
  font-size: 13px;
}

.email-wrapper .mail-view .message-body .attachments-sections ul li .details .buttons a {
  font-size: 13px;
  margin-right: 10px;
}

.email-wrapper .mail-view .message-body .attachments-sections ul li .details .buttons a:last-child {
  margin-right: 0;
}

/*-------------------------------------------------------------------*/
/* === Plugin overrides === */
/* Ace Editor */
.ace_editor {
  margin: auto;
  height: 300px;
  width: 100%;
  font: 14px/normal SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

.ace_editor .ace_content {
  font-size: 0.875rem;
}

/* Avgrund Popup */
.avgrund-popin {
  position: fixed;
  background: #fff;
  padding: 37px 33px;
  overflow: hidden;
  visibility: hidden;
  opacity: 0;
  filter: alpha(opacity=0);
  top: 50%;
  left: 53%;
  z-index: 1000;
  font-size: 0.875rem;
  font-weight: 400;
  font-weight: initial;
  line-height: 1.85;
  border-radius: 10px;
  -webkit-transform: scale(0.8);
  -moz-transform: scale(0.8);
  -ms-transform: scale(0.8);
  -o-transform: scale(0.8);
  transform: scale(0.8);
}

.avgrund-popin p {
  font-size: 0.875rem;
  font-weight: 400;
  font-weight: initial;
}

.avgrund-overlay {
  background: #000;
  width: 100%;
  position: fixed;
  top: 0px;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 101;
  visibility: hidden;
  opacity: 0;
  filter: alpha(opacity=0);
}

body.avgrund-ready,
.avgrund-ready .avgrund-popin,
.avgrund-ready .avgrund-overlay {
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  -webkit-transition: 0.3s all ease-out;
  -moz-transition: 0.3s all ease-out;
  -ms-transition: 0.3s all ease-out;
  -o-transition: 0.3s all ease-out;
  transition: 0.3s all ease-out;
}

body.avgrund-active {
  overflow: hidden;
}

.avgrund-active .avgrund-popin {
  visibility: visible;
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -ms-transform: scale(1.1);
  -o-transform: scale(1.1);
  transform: scale(1.1);
}

@media (max-width: 767px) {
  .avgrund-active .avgrund-popin {
    -webkit-transform: scale(0.8);
    -moz-transform: scale(0.8);
    -ms-transform: scale(0.8);
    -o-transform: scale(0.8);
    transform: scale(0.8);
  }
}

.avgrund-active .avgrund-overlay {
  visibility: visible;
  opacity: .5;
  filter: alpha(opacity=50);
  height: 20000px;
}

.avgrund-popin.stack {
  -webkit-transform: scale(1.5);
  -moz-transform: scale(1.5);
  -ms-transform: scale(1.5);
  -o-transform: scale(1.5);
  transform: scale(1.5);
}

.avgrund-active .avgrund-popin.stack {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -ms-transform: scale(1.1);
  -o-transform: scale(1.1);
  transform: scale(1.1);
}

/* Optional close button styles */
.avgrund-close {
  display: block;
  color: #fff;
  background: #fff;
  font-size: 10px;
  text-decoration: none;
  text-transform: uppercase;
  position: absolute;
  top: 10px;
  right: 10px;
  height: 17px;
  width: 17px;
  text-align: center;
  line-height: 16px;
  border-radius: 50px;
}

.avgrund-close:hover {
  color: #fff;
  text-decoration: none;
}

/* Chartist */
.ct-series-a .ct-line {
  stroke: #a29afc;
  stroke-width: 3px;
  stroke-dasharray: 10px 20px;
}

.ct-series-a .ct-point {
  stroke: #6355f9;
  stroke-width: 10px;
  stroke-linecap: round;
}

.ct-series-b .ct-line {
  stroke: #80d691;
  stroke-width: 3px;
  stroke-dasharray: 10px 20px;
}

.ct-series-b .ct-point {
  stroke: #4ac462;
  stroke-width: 10px;
  stroke-linecap: round;
}

.ct-series-c .ct-line {
  stroke: #f7cb9b;
  stroke-width: 3px;
  stroke-dasharray: 10px 20px;
}

.ct-series-c .ct-point {
  stroke: #f2a859;
  stroke-width: 10px;
  stroke-linecap: round;
}

.ct-series-a .ct-bar {
  stroke: #a29afc;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

.ct-series-b .ct-bar {
  stroke: #80d691;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

.ct-series-c .ct-bar {
  stroke: #f7cb9b;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

.ct-series-d .ct-bar {
  stroke: #fcb2b2;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

.ct-series-a .ct-slice-pie {
  fill: #a29afc;
  stroke-width: 4px;
}

.ct-series-b .ct-slice-pie {
  fill: #80d691;
  stroke-width: 4px;
}

.ct-series-c .ct-slice-pie {
  fill: #fcb2b2;
  stroke-width: 4px;
}

.ct-series-d .ct-slice-pie {
  fill: #f7cb9b;
  stroke-width: 4px;
}

.ct-series-a .ct-slice-donut-solid {
  fill: #a29afc;
}

.ct-series-b .ct-slice-donut-solid {
  fill: #80d691;
}

.ct-series-c .ct-slice-donut-solid {
  fill: #fcb2b2;
}

.ct-series-a .ct-slice-donut-solid {
  fill: #f7cb9b;
}

#ct-chart-dash-barChart .ct-series-a .ct-bar {
  stroke: #fb9999;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

#ct-chart-dash-barChart .ct-series-b .ct-bar {
  stroke: #8b81fb;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

#ct-chart-dash-barChart .ct-series-c .ct-bar {
  stroke: #a29afc;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

#ct-chart-dash-barChart .ct-series-d .ct-bar {
  stroke: #b9b3fc;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

/* CodeMirror */
.CodeMirror {
  font-size: 0.875rem;
  height: auto;
  text-align: left;
  min-height: auto;
}

.CodeMirror-scroll {
  min-height: auto;
}

/* Colcade */
* {
  box-sizing: border-box;
}

.grid {
  border: 1px solid color(gray-light) est;
}

.grid:after {
  display: block;
  content: '';
  clear: both;
}

.grid-col {
  float: left;
  width: 49%;
  margin-right: 2%;
  background: rgba(13, 110, 253, 0.2);
}

.grid-col--4 {
  margin-right: 0;
}

/* hide two middle */
.grid-col--2, .grid-col--3 {
  display: none;
}

@media (min-width: 768px) {
  .grid-col {
    width: 32%;
  }
  .grid-col--2 {
    display: block;
  }
}

@media (min-width: 1200px) {
  .grid-col {
    width: 23.5%;
  }
  .grid-col--2, .grid-col--3 {
    display: block;
  }
}

.grid-item {
  background: #0d6efd;
  margin-bottom: 20px;
}

.grid-item--a {
  height: 80px;
}

.grid-item--b {
  height: 140px;
}

.grid-item--c {
  height: 300px;
}

/* Colorpicker */
.asColorPicker-dropdown {
  max-width: initial;
}

.asColorPicker-trigger {
  height: auto;
  border: 0;
}

.asColorPicker-trigger span {
  border-radius: 2px;
  width: 35px;
}

/* Context Menu */
.context-menu-icon:before {
  color: #fff;
  font: normal normal normal 15px/1 "themify";
}

.context-menu-icon.context-menu-icon-cut:before {
  content: '\e613';
}

.context-menu-icon.context-menu-icon-edit:before {
  content: '\e61c';
}

.context-menu-icon.context-menu-icon-copy:before {
  content: '\e6a3';
}

.context-menu-icon.context-menu-icon-paste:before {
  content: '\e6c8';
}

.context-menu-icon.context-menu-icon-delete:before {
  content: '\e605';
}

.context-menu-icon.context-menu-icon-quit:before {
  content: '\e646';
}

.context-menu-list {
  background: #1f1e23;
  box-shadow: none;
  border: 1px solid #575757;
}

.context-menu-list .context-menu-item {
  background: #1f1e23;
}

.context-menu-list .context-menu-item span {
  color: #fff;
  font-size: .75rem;
  font-weight: 600;
}

.context-menu-list .context-menu-item.context-menu-hover {
  background: rgba(255, 255, 255, 0.3);
}

.context-menu-list .context-menu-item.context-menu-hover span {
  color: #ffffff;
}

.context-menu-list .context-menu-separator {
  border-bottom: 1px solid #575757;
}

/* Data Tables */
.dataTables_wrapper {
  padding-left: 0;
  padding-right: 0;
}

.dataTables_wrapper label {
  font-size: .8125rem;
}

.dataTables_wrapper select {
  padding: .4rem;
  outline-offset: -2px;
}

.dataTables_wrapper .dataTables_length select {
  min-width: 70px;
  margin-left: .25rem;
  margin-right: .25rem;
  width: -webkit-fill-available;
  border-radius: 4px;
}

.dataTables_wrapper .dataTable .btn, .dataTables_wrapper .dataTable .fc button, .fc .dataTables_wrapper .dataTable button, .dataTables_wrapper .dataTable .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .dataTables_wrapper .dataTable .ajax-file-upload, .dataTables_wrapper .dataTable .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .dataTables_wrapper .dataTable .swal2-styled, .dataTables_wrapper .dataTable .wizard > .actions a, .wizard > .actions .dataTables_wrapper .dataTable a {
  padding: 0.1rem 1rem;
  vertical-align: top;
}

.dataTables_wrapper .dataTable .btn i, .dataTables_wrapper .dataTable .fc button i, .fc .dataTables_wrapper .dataTable button i, .dataTables_wrapper .dataTable .ajax-upload-dragdrop .ajax-file-upload i, .ajax-upload-dragdrop .dataTables_wrapper .dataTable .ajax-file-upload i, .dataTables_wrapper .dataTable .swal2-modal .swal2-buttonswrapper .swal2-styled i, .swal2-modal .swal2-buttonswrapper .dataTables_wrapper .dataTable .swal2-styled i, .dataTables_wrapper .dataTable .wizard > .actions a i, .wizard > .actions .dataTables_wrapper .dataTable a i {
  font-size: .875rem;
  margin-right: .3rem;
}

.dataTables_wrapper .dataTable thead th {
  border-bottom-width: 0;
}

.dataTables_wrapper .dataTable thead .sorting:before, .dataTables_wrapper .dataTable thead .sorting:after,
.dataTables_wrapper .dataTable thead .sorting_asc:before,
.dataTables_wrapper .dataTable thead .sorting_asc:after,
.dataTables_wrapper .dataTable thead .sorting_desc:before,
.dataTables_wrapper .dataTable thead .sorting_desc:after,
.dataTables_wrapper .dataTable thead .sorting_asc_disabled:before,
.dataTables_wrapper .dataTable thead .sorting_asc_disabled:after,
.dataTables_wrapper .dataTable thead .sorting_desc_disabled:before,
.dataTables_wrapper .dataTable thead .sorting_desc_disabled:after {
  line-height: 2.5;
  font-family: 'themify';
  font-size: .65rem;
}

.dataTables_wrapper .dataTable thead .sorting:before,
.dataTables_wrapper .dataTable thead .sorting_asc:before,
.dataTables_wrapper .dataTable thead .sorting_desc:before,
.dataTables_wrapper .dataTable thead .sorting_asc_disabled:before,
.dataTables_wrapper .dataTable thead .sorting_desc_disabled:before {
  content: "\e627";
  right: 1.2em;
}

.dataTables_wrapper .dataTable thead .sorting:after,
.dataTables_wrapper .dataTable thead .sorting_asc:after,
.dataTables_wrapper .dataTable thead .sorting_desc:after,
.dataTables_wrapper .dataTable thead .sorting_asc_disabled:after,
.dataTables_wrapper .dataTable thead .sorting_desc_disabled:after {
  content: "\e62a";
  right: 0.2em;
}

.dataTables_wrapper .dataTables_paginate {
  margin-top: 20px;
}

.dataTables_wrapper .dataTables_info {
  font-size: 0.875rem;
}

@media (max-width: 576px) {
  .dataTables_wrapper .dataTables_info {
    margin-bottom: 1rem;
  }
}

.expandable-table thead tr th {
  background: #0d6efd;
  padding: 10px;
  color: #ffffff;
  font-size: 14px;
}

.expandable-table thead tr th:first-child {
  border-radius: 8px 0 0 8px;
}

.expandable-table thead tr th:last-child {
  border-radius: 0 8px 8px 0;
}

.expandable-table tr.odd, .expandable-table tr.even {
  box-shadow: 0px 0px 8px #0c0c0e;
  border-radius: 4px;
  background: transparent;
}

.expandable-table tr.odd td:first-child, .expandable-table tr.even td:first-child {
  padding-left: 40px;
}

.expandable-table tr td {
  padding: 14px;
  font-size: 14px;
}

.expandable-table tr td.select-checkbox {
  padding-left: 26px;
}

.expandable-table tr td.select-checkbox:after {
  top: 2rem;
}

.expandable-table tr td.select-checkbox:before {
  top: 2rem;
}

.expandable-table tr td .cell-hilighted {
  background-color: #0d6efd;
  border-radius: 10px;
  padding: 18px;
  color: #fff;
  font-size: 11px;
}

.expandable-table tr td .cell-hilighted h5, .expandable-table tr td .cell-hilighted .h5 {
  font-size: 20px;
  color: #52C4FF;
}

.expandable-table tr td .cell-hilighted p {
  opacity: .6;
  margin-bottom: 0;
}

.expandable-table tr td .cell-hilighted h6, .expandable-table tr td .cell-hilighted .h6 {
  font-size: 14px;
  color: #52C4FF;
}

.expandable-table tr td .expanded-table-normal-cell {
  padding: 10px;
}

.expandable-table tr td .expanded-table-normal-cell p {
  font-size: 11px;
  margin-bottom: 0;
}

.expandable-table tr td .expanded-table-normal-cell h6, .expandable-table tr td .expanded-table-normal-cell .h6 {
  color: #fff;
  font-size: 14px;
}

.expandable-table tr td .expanded-table-normal-cell .highlighted-alpha {
  width: 34px;
  height: 34px;
  border-radius: 100%;
  background: #FE5C83;
  color: #ffffff;
  text-align: center;
  padding-top: 7px;
  font-size: 14px;
  margin-right: 8px;
}

.expandable-table tr td .expanded-table-normal-cell img {
  width: 34px;
  height: 34px;
  border-radius: 100%;
  margin-right: 8px;
}

.expandable-table tr td.details-control:before {
  content: '\e64b';
  font-family: "themify";
}

.expandable-table tr td:first-child {
  padding-left: 10px;
  background: transparent;
}

.expandable-table tr td.details-control {
  cursor: pointer;
}

.expandable-table tr td.row-bg {
  background: #1f1e23;
  border-radius: 10px;
}

.expandable-table tr td.details-control {
  cursor: pointer;
}

.expandable-table tr.shown td.details-control:before {
  content: '\e648';
}

.expandable-table tr.expanded-row {
  background: #1f1e23;
}

table.dataTable {
  border-collapse: separate;
  border-spacing: 0 2px;
}

table.dataTable tbody td.select-checkbox:before {
  top: 1.4rem;
  left: 20px;
  border: 1px solid #575757;
  width: 14px;
  height: 14px;
}

table.dataTable tbody td.select-checkbox:after {
  top: 1.5rem;
  left: 10px;
}

/* Datepicker */
.datepicker.datepicker-dropdown,
.datepicker.datepicker-inline {
  padding: 0;
  width: 30%;
  max-width: 500px;
  min-width: 250px;
}

.datepicker.datepicker-dropdown .datepicker-days,
.datepicker.datepicker-inline .datepicker-days {
  padding: 0;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed,
.datepicker.datepicker-inline .datepicker-days table.table-condensed {
  width: 100%;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th,
.datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th {
  text-align: center;
  padding: 0.5rem 0;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.prev,
.datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.prev {
  color: #2e383e;
  padding-bottom: 1rem;
  padding-top: 1rem;
  background: transparent;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.datepicker-switch,
.datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.datepicker-switch {
  color: #2e383e;
  background: transparent;
  padding-bottom: 1rem;
  padding-top: 1rem;
  font-size: 1rem;
  font-weight: 600;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.next,
.datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.next {
  color: grey;
  padding-bottom: 1rem;
  padding-top: 1rem;
  background: transparent;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.dow,
.datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.dow {
  font-family: "Nunito", sans-serif;
  color: #2e383e;
  font-size: 0.875rem;
  font-weight: initial;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody {
  position: relative;
  top: 13px;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td {
  text-align: center;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day {
  font-size: 0.9375rem;
  padding: 0.5rem 0;
  color: #fff;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day:hover,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day:hover {
  background: transparent;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day.active,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day.active {
  color: #fff;
  background: transparent;
  position: relative;
  z-index: 1;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day.active:before,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day.active:before {
  content: "";
  width: 28px;
  height: 28px;
  background: #198754;
  border-radius: 4px;
  display: block;
  margin: auto;
  vertical-align: middle;
  position: absolute;
  top: 6px;
  z-index: -1;
  left: 0;
  right: 0;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day.today,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day.today {
  color: #fff;
  background: transparent;
  position: relative;
  z-index: 1;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day.today:before,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day.today:before {
  content: "";
  width: 28px;
  height: 28px;
  background: #0d6efd;
  border-radius: 4px;
  display: block;
  margin: auto;
  vertical-align: middle;
  position: absolute;
  top: 6px;
  z-index: -1;
  left: 0;
  right: 0;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.old.day,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.old.day {
  color: #464b57;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.new.day,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.new.day {
  color: #fff;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range-start, .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range-end,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range-start,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range-end {
  background: transparent;
  position: relative;
  color: #198754;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range-start::before, .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range-end::before,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range-start::before,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range-end::before {
  content: "";
  width: 28px;
  height: 28px;
  background: rgba(25, 135, 84, 0.2);
  border-radius: 4px;
  display: block;
  margin: auto;
  vertical-align: middle;
  position: absolute;
  top: 6px;
  z-index: -1;
  left: 0;
  right: 0;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range {
  position: relative;
  background: transparent;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range::before,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range::before {
  content: "";
  width: 28px;
  height: 28px;
  background: #1b1b1b;
  border-radius: 4px;
  display: block;
  margin: auto;
  vertical-align: middle;
  position: absolute;
  top: 6px;
  z-index: -1;
  left: 0;
  right: 0;
}

.datepicker.datepicker-inline {
  width: 100%;
  max-width: 100%;
  min-width: 250px;
}

.datepicker.datepicker-inline thead tr th.prev {
  color: grey;
  padding-bottom: 0.5rem;
  padding-top: 0.5rem;
}

.datepicker.datepicker-inline thead tr th.datepicker-switch {
  color: #0d6efd;
  padding-bottom: 0.5rem;
  padding-top: 0.5rem;
}

.datepicker.datepicker-inline thead tr th.next {
  color: grey;
  padding-bottom: 0.5rem;
  padding-top: 0.5rem;
}

.datepicker > div {
  display: initial;
  padding: 0;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  border-radius: 2px;
}

.datepicker.input-group, .datepicker.asColorPicker-wrap {
  border: 1px solid #575757;
  padding: 0;
}

.datepicker.input-group .form-control, .datepicker.asColorPicker-wrap .form-control, .datepicker.input-group .asColorPicker-input, .datepicker.asColorPicker-wrap .asColorPicker-input, .datepicker.input-group .dataTables_wrapper select, .dataTables_wrapper .datepicker.input-group select, .datepicker.asColorPicker-wrap .dataTables_wrapper select, .dataTables_wrapper .datepicker.asColorPicker-wrap select, .datepicker.input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .datepicker.input-group input[type=text], .datepicker.asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .datepicker.asColorPicker-wrap input[type=text],
.datepicker.input-group .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .datepicker.input-group select,
.datepicker.asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .datepicker.asColorPicker-wrap select, .datepicker.input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .datepicker.input-group input[type=number], .datepicker.asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .datepicker.asColorPicker-wrap input[type=number], .datepicker.input-group .select2-container--default .select2-selection--single, .select2-container--default .datepicker.input-group .select2-selection--single, .datepicker.asColorPicker-wrap .select2-container--default .select2-selection--single, .select2-container--default .datepicker.asColorPicker-wrap .select2-selection--single, .datepicker.input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .datepicker.input-group .select2-search__field, .datepicker.asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .datepicker.asColorPicker-wrap .select2-search__field, .datepicker.input-group .typeahead, .datepicker.asColorPicker-wrap .typeahead,
.datepicker.input-group .tt-query,
.datepicker.asColorPicker-wrap .tt-query,
.datepicker.input-group .tt-hint,
.datepicker.asColorPicker-wrap .tt-hint {
  border: none;
}

.datepicker-dropdown:after {
  border-bottom-color: #1f1e23;
}

.datepicker-dropdown:before {
  border-bottom-color: #575757;
}

.datepicker-dropdown.datepicker-orient-top:before, .datepicker-dropdown.datepicker-orient-top:after {
  top: auto;
}

.datepicker-dropdown.datepicker-orient-top:after {
  border-top-color: #1f1e23;
}

.datepicker-dropdown.datepicker-orient-top:before {
  border-top-color: #575757;
}

/* Dropify */
.dropify-wrapper {
  border: 2px dashed #575757;
  background: transparent;
  border-radius: 7px;
}

.dropify-wrapper:hover {
  background-size: 30px 30px;
  background-image: -webkit-linear-gradient(135deg, #F2F7F8 25%, transparent 25%, transparent 50%, #F2F7F8 50%, #F2F7F8 75%, transparent 75%, transparent);
  background-image: linear-gradient(135deg, #F2F7F8 25%, transparent 25%, transparent 50%, #F2F7F8 50%, #F2F7F8 75%, transparent 75%, transparent);
  -webkit-animation: stripes 2s linear infinite;
  animation: stripes 2s linear infinite;
}

.dropify-wrapper .dropify-message span.file-icon:before {
  display: inline-block;
  font: normal normal normal 24px/1 "themify";
  font-size: inherit;
  text-rendering: auto;
  line-height: inherit;
  -webkit-font-smoothing: antialiased;
  content: '\e66b';
  color: #fff;
  font-size: 1.25rem;
}

.dropify-wrapper .dropify-message p {
  font-size: .8125rem;
  color: #fff;
}

.dropify-wrapper .dropify-preview .dropify-infos {
  background: rgba(255, 255, 255, 0.9);
}

.dropify-wrapper .dropify-preview .dropify-infos .dropify-infos-inner .dropify-filename {
  color: #0d6efd;
  font-size: 20px;
  font-weight: 400;
}

.dropify-wrapper .dropify-preview .dropify-infos .dropify-infos-inner .dropify-infos-message {
  color: #333;
  font-weight: 500;
}

.dropify-wrapper .dropify-preview .dropify-render img {
  opacity: 0.7;
}

.dropify-wrapper .dropify-clear {
  background: #fff;
  border: none;
  font-weight: 600;
  color: #2e383e;
}

/* Dropzone */
.dropzone {
  border: 1px solid #575757;
  min-height: 200px;
  background: #151419;
}

.dropzone .dz-message {
  text-align: center;
  width: 100%;
}

.dropzone .dz-message span {
  font-size: .8125rem;
  color: #fff;
}

.dropzone .dz-preview {
  margin: 5px;
}

.dropzone .dz-preview.dz-image-preview {
  background: #151419;
}

.dropzone .dz-preview .dz-image {
  width: 75px;
  height: 75px;
  border-radius: 6px;
}

.dropzone .dz-preview .dz-error-message {
  top: 80px;
  left: -35px;
}

.dropzone .dz-preview .dz-success-mark,
.dropzone .dz-preview .dz-error-mark {
  margin-left: -17px;
}

.dropzone .dz-preview .dz-success-mark svg,
.dropzone .dz-preview .dz-error-mark svg {
  width: 35px;
  height: 35px;
}

/* Flot chart */
.flot-chart-container {
  box-sizing: border-box;
  width: 100%;
  height: 100%;
  min-height: 300px;
  max-height: 100%;
}

.flot-chart {
  width: 100%;
  position: relative;
  max-width: none;
  height: 400px;
}

.flot-chart canvas {
  position: absolute;
  top: 0;
  bottom: 0;
}

/* Full Calendar */
.fc button {
  height: auto;
  background-image: none;
  text-shadow: none;
  font-weight: 400;
  background-color: #212529;
  border-color: #575757;
  text-transform: capitalize;
  color: #a8b2b9;
}

.fc button .fc-icon-right-single-arrow:after,
.fc button .fc-icon-left-single-arrow:after {
  color: #a8b2b9;
  font: normal normal normal 15px/1 "themify";
}

.fc button .fc-icon-right-single-arrow:after {
  content: "\e649";
}

.fc button .fc-icon-left-single-arrow:after {
  content: "\e64a";
}

.fc .fc-button-group .fc-button {
  background-color: #212529;
  margin: 0;
}

.fc .fc-button-group .fc-button.fc-state-active {
  color: #dc3545;
}

.fc .fc-header-toolbar {
  margin-top: 2rem;
}

.fc .fc-header-toolbar .fc-center h2, .fc .fc-header-toolbar .fc-center .h2 {
  font-size: 1rem;
}

@media (max-width: 767px) {
  .fc .fc-header-toolbar .fc-left,
  .fc .fc-header-toolbar .fc-right,
  .fc .fc-header-toolbar .fc-center {
    float: none;
    margin-bottom: 10px;
  }
  .fc .fc-header-toolbar .fc-left:after,
  .fc .fc-header-toolbar .fc-right:after,
  .fc .fc-header-toolbar .fc-center:after {
    content: "";
    clear: both;
    display: block;
  }
  .fc .fc-header-toolbar .fc-left .fc-today-button {
    float: right;
  }
  .fc .fc-header-toolbar .fc-right .fc-button-group {
    float: none;
  }
}

.fc .fc-widget-header {
  border: 0;
}

.fc .fc-widget-header table tr th {
  border-width: 0 0 1px 0;
  text-align: right;
  padding: 1rem;
}

.fc .fc-widget-header table tr th span {
  font-size: 10px;
  text-transform: uppercase;
  color: #a8b2b9;
  letter-spacing: 1px;
}

.fc.fc-unthemed .fc-row,
.fc.fc-unthemed td {
  border-color: #575757;
}

.fc .fc-content-skeleton table tr td {
  padding: .5rem;
  font-size: .875rem;
}

.fc .fc-event {
  border: 0;
  color: #ffffff;
  padding: .5rem;
}

.fc .fc-event.fc-start {
  background: #0d6efd;
  border-radius: 4px;
  border-left: 4px solid #0d6efd;
}

.fc .fc-event.fc-not-start, .fc .fc-event.fc-not-end {
  background: #dc3545;
  border-left: 4px solid #dc3545;
  padding-left: .5rem;
}

.fc .fc-event.fc-not-end {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.fc .fc-event .fc-title,
.fc .fc-event .fc-time {
  color: #ffffff;
}

.fc-external-events .fc-event {
  background: #1f1e23;
  color: #fff;
  border-width: 0 0 0 4px;
  padding: 16px;
  border-radius: 0;
  margin-bottom: 10px;
}

.fc-external-events .fc-event:nth-child(1) {
  border-color: #0d6efd;
}

.fc-external-events .fc-event:nth-child(2) {
  border-color: #dc3545;
}

.fc-external-events .fc-event:nth-child(3) {
  border-color: #198754;
}

.fc-external-events .fc-event:nth-child(4) {
  border-color: #0dcaf0;
}

.fc-external-events .fc-event:nth-child(4) {
  border-color: #ffc107;
}

/* Google Charts */
.google-chart-container .google-charts {
  width: 100%;
  height: 280px;
  min-height: 280px;
  min-width: 100%;
}

/* Icheck */
.icheck,
.icheck-flat,
.icheck-square,
.icheck-line {
  margin-bottom: .5rem;
}

.icheck label,
.icheck-flat label,
.icheck-square label,
.icheck-line label {
  font-size: .8125rem;
  line-height: 1.5;
  margin-left: 5px;
  margin-bottom: 0;
}

/* Jquery File Upload */
.ajax-upload-dragdrop {
  border-color: #575757;
  border-style: dotted;
  max-width: 100%;
}

.ajax-upload-dragdrop span b {
  font-size: .8125rem;
  color: #fff;
  font-weight: initial;
}

.ajax-upload-dragdrop .ajax-file-upload {
  background: #0dcaf0;
  box-shadow: none;
  height: auto;
}

.ajax-file-upload-container {
  min-height: 100px;
}

.ajax-file-upload-container .ajax-file-upload-statusbar {
  max-width: 100%;
}

/* Js-grid */
.jsgrid .jsgrid-button {
  background-image: url(../../images/sprites/jsgrid-icons.png);
}

.jsgrid .jsgrid-grid-header {
  background: transparent;
  border: 1px solid #575757;
  border-top: 0;
}

.jsgrid .jsgrid-grid-header .jsgrid-header-row > .jsgrid-header-cell {
  border-color: #575757;
}

.jsgrid .jsgrid-grid-body {
  border-color: #575757;
}

.jsgrid .jsgrid-table th {
  background: transparent;
  font-weight: initial;
  font-weight: 600;
}

.jsgrid .jsgrid-table .jsgrid-filter-row input[type=number] {
  padding: .56rem 0;
}

.jsgrid .jsgrid-table .jsgrid-filter-row > .jsgrid-cell {
  background: transparent;
  border-color: #575757;
}

.jsgrid .jsgrid-table .jsgrid-row > .jsgrid-cell {
  background: transparent;
  border-color: #575757;
}

.jsgrid .jsgrid-table .jsgrid-alt-row > .jsgrid-cell {
  background: transparent;
  border-color: #575757;
}

.jsgrid .jsgrid-header-sort:before {
  margin-top: 10px;
  float: right;
}

.jsgrid .jsgrid-header-sort-asc:before {
  border-color: transparent transparent #fff;
}

.jsgrid .jsgrid-header-sort-desc:before {
  border-color: #fff transparent transparent;
}

.jsgrid .jsgrid-pager {
  line-height: 2;
  @extedn .flex-wrap;
}

.jsgrid .jsgrid-pager-current-page {
  padding: 0.5rem 0.75rem;
  font-weight: initial;
  line-height: 1.25;
}

/* Jvectormap */
.jvectormap-container {
  background: #ffffff;
}

/* Light Gallery */
.lightGallery {
  width: 100%;
  margin: 0;
}

.lightGallery .image-tile {
  position: relative;
  margin-bottom: 30px;
}

.lightGallery .image-tile .demo-gallery-poster {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}

.lightGallery .image-tile .demo-gallery-poster img {
  display: block;
  margin: auto;
  width: 40%;
  max-width: 60px;
  min-width: 20px;
}

.lightGallery .image-tile img {
  max-width: 100%;
  width: 100%;
}

/* Listify */
.listify-list input {
  border: 1px solid #f2f7f8;
  color: color(gray-light);
  background: #fff;
}

.listify-list ul.list {
  list-style: none;
  padding-left: 0;
}

.listify-list ul.list li {
  display: block;
  border-bottom: 1px solid #575757;
  padding: 15px 10px;
}

.listify-list ul.list li h5, .listify-list ul.list li .h5 {
  color: theme-color("primary");
}

.listify-list ul.list li p {
  color: color(gray-light);
  margin: 0;
}

.mapael svg {
  max-width: 100%;
}

/* No-ui-slider */
.noUi-target {
  border: none;
  box-shadow: none;
  border-radius: 0px;
}

.noUi-target.noUi-horizontal {
  height: 0.25rem;
}

.noUi-target.noUi-horizontal .noUi-handle {
  left: -17px;
}

.noUi-target.noUi-vertical {
  width: 0.25rem;
  height: 156px;
  display: inline-block;
}

.noUi-target.noUi-vertical .noUi-handle {
  left: -6px;
}

.noUi-target .noUi-base {
  background: #212529;
  box-shadow: none;
  border: none;
}

.noUi-target .noUi-base .noUi-connect {
  background: #0d6efd;
  box-shadow: none;
}

.noUi-target .noUi-base .noUi-origin {
  background: #198754;
}

.noUi-target .noUi-base .noUi-origin .noUi-handle {
  background: #ffffff;
  border-radius: 100%;
  border: 1px solid #575757;
  width: 18px;
  height: 18px;
  top: -7px;
  outline: none;
  -webkit-transition-duration: 0.4s;
  -moz-transition-duration: 0.4s;
  -o-transition-duration: 0.4s;
  transition-duration: 0.4s;
  box-shadow: none;
}

.noUi-target .noUi-base .noUi-origin .noUi-handle:after, .noUi-target .noUi-base .noUi-origin .noUi-handle:before {
  display: none;
}

.noUi-target .noUi-base .noUi-origin .noUi-handle:after {
  display: block;
  position: absolute;
  top: 5px;
  left: 0;
  right: 0;
  margin: auto;
  width: 6px;
  height: 6px;
  background: #0d6efd;
  border-radius: 100%;
}

.noUi-target .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  font-weight: 600;
  border-radius: 4px;
  border: none;
  line-height: 1;
  font-size: 0.875rem;
  padding: 13px 12px;
  bottom: 190%;
}

.noUi-target .noUi-pips .noUi-marker-horizontal,
.noUi-target .noUi-pips .noUi-marker-vertical {
  background: #575757;
}

.noUi-target .noUi-pips .noUi-marker-horizontal {
  height: 9px;
  width: 1px;
  background: #fff;
}

.noUi-target .noUi-pips .noUi-marker-vertical {
  height: 1px;
  width: 9px;
}

.noUi-target .noUi-pips .noUi-value {
  color: #fff;
  font-size: 0.94rem;
  font-weight: 600;
}

/* Slider Color variations */
.slider-primary .noUi-base .noUi-connect {
  background: <?php echo $settings['theme']; ?>;
}

.slider-primary .noUi-base .noUi-origin {
  background: <?php echo $settings['theme']; ?>;
}

.slider-primary .noUi-base .noUi-origin .noUi-handle:after {
  background: <?php echo $settings['theme']; ?>;
}

.slider-primary .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: <?php echo $settings['theme']; ?>;
  color: #ffffff;
}

.slider-secondary .noUi-base .noUi-connect {
  background: #a3a4a5;
}

.slider-secondary .noUi-base .noUi-origin {
  background: #a3a4a5;
}

.slider-secondary .noUi-base .noUi-origin .noUi-handle:after {
  background: #a3a4a5;
}

.slider-secondary .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #a3a4a5;
  color: #ffffff;
}

.slider-success .noUi-base .noUi-connect {
  background: #57B657;
}

.slider-success .noUi-base .noUi-origin {
  background: #57B657;
}

.slider-success .noUi-base .noUi-origin .noUi-handle:after {
  background: #57B657;
}

.slider-success .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #57B657;
  color: #ffffff;
}

.slider-info .noUi-base .noUi-connect {
  background: #248AFD;
}

.slider-info .noUi-base .noUi-origin {
  background: #248AFD;
}

.slider-info .noUi-base .noUi-origin .noUi-handle:after {
  background: #248AFD;
}

.slider-info .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #248AFD;
  color: #ffffff;
}

.slider-warning .noUi-base .noUi-connect {
  background: #FFC100;
}

.slider-warning .noUi-base .noUi-origin {
  background: #FFC100;
}

.slider-warning .noUi-base .noUi-origin .noUi-handle:after {
  background: #FFC100;
}

.slider-warning .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #FFC100;
  color: #ffffff;
}

.slider-danger .noUi-base .noUi-connect {
  background: #FF4747;
}

.slider-danger .noUi-base .noUi-origin {
  background: #FF4747;
}

.slider-danger .noUi-base .noUi-origin .noUi-handle:after {
  background: #FF4747;
}

.slider-danger .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #FF4747;
  color: #ffffff;
}

.slider-light .noUi-base .noUi-connect {
  background: #f8f9fa;
}

.slider-light .noUi-base .noUi-origin {
  background: #f8f9fa;
}

.slider-light .noUi-base .noUi-origin .noUi-handle:after {
  background: #f8f9fa;
}

.slider-light .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #f8f9fa;
  color: #ffffff;
}

.slider-dark .noUi-base .noUi-connect {
  background: #282f3a;
}

.slider-dark .noUi-base .noUi-origin {
  background: #282f3a;
}

.slider-dark .noUi-base .noUi-origin .noUi-handle:after {
  background: #282f3a;
}

.slider-dark .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #282f3a;
  color: #ffffff;
}

/* Owl-carousel */
.owl-carousel img {
  border-radius: 4px;
}

.owl-carousel.full-width .owl-nav {
  position: absolute;
  top: 30%;
  width: 100%;
  margin-top: 0;
}

.owl-carousel.full-width .owl-nav .owl-prev,
.owl-carousel.full-width .owl-nav .owl-next {
  background: transparent;
  color: #ffffff;
}

.owl-carousel.full-width .owl-nav .owl-prev i:before,
.owl-carousel.full-width .owl-nav .owl-next i:before {
  width: 60px;
  height: 60px;
  background: rgba(0, 0, 0, 0.5);
  border-radius: 100%;
  font-size: 1.875rem;
  font-weight: bold;
  line-height: 2;
  display: block;
}

.owl-carousel.full-width .owl-nav .owl-prev {
  float: left;
}

.owl-carousel.full-width .owl-nav .owl-next {
  float: right;
}

.owl-carousel.full-width .owl-dots {
  margin-top: 1rem;
}

.owl-carousel .item-video {
  width: 200px;
  height: 200px;
}

/* Progressbar-js */
.progress-bar-js-line {
  height: 6px;
}

.progressbar-js-circle {
  width: 100%;
  position: relative;
}

/* Pws-tabs */
.pws_tabs_container ul.pws_tabs_controll li:first-child a {
  border-radius: 5px 0px 0px 0px;
}

.pws_tabs_container ul.pws_tabs_controll li:last-child a {
  border-right: 1px solid #0d6efd;
  border-radius: 0px 5px 0px 0px;
}

.pws_tabs_container ul.pws_tabs_controll li a {
  border: 1px solid #0d6efd;
  border-bottom: none;
  border-right: none;
  background: #fff;
  color: #0d6efd;
  padding: 0.6em 1.3em;
  margin-right: 0;
}

.pws_tabs_container ul.pws_tabs_controll li a:hover {
  background: #fff;
  color: #0d6efd;
}

.pws_tabs_container ul.pws_tabs_controll li a.pws_tab_active {
  background: #0d6efd;
  color: #fff;
}

.pws_tabs_container .demo-tabs {
  border: 1px solid #0d6efd;
  border-radius: 0px 5px 5px 5px;
  overflow: hidden;
  background: color(white-smoke);
  margin-bottom: 45px;
  padding-top: 3.5rem;
}

.pws_tabs_container .demo-tabs .CodeMirror {
  margin-bottom: 20px;
}

.pws_tabs_container.pws_tabs_vertical .pws_tabs_controll {
  border-right: none;
  border-bottom: none;
}

.pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li:first-child a {
  border-radius: 5px 0px 0px 0px;
}

.pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li:last-child a {
  border-bottom: 1px solid #0d6efd;
  border-radius: 0px 0px 0px 5px;
  border-right: 0px;
}

.pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li a {
  border-radius: 0px;
  border: 1px solid #0d6efd;
  border-right: none;
  border-bottom: none;
  margin-bottom: 0;
}

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_list {
  margin-bottom: 0;
}

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll {
  border-top: 1px solid #0d6efd;
  border-right: none;
  border-bottom: none;
}

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li:first-child a {
  border-radius: 0px 0px 0px 5px;
}

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li:last-child a {
  border-radius: 0px 0px 5px 0px;
  border-right: 1px solid #0d6efd;
}

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li a {
  border-radius: 0px;
  border: 1px solid #0d6efd;
  border-top: none;
  border-right: none;
  margin-right: 0;
  margin-bottom: 0;
}

.pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li:first-child a {
  border-radius: 0px 5px 0px 0px;
  border-right: 1px solid #0d6efd;
}

.pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li:last-child a {
  border-right: none;
  border-radius: 5px 0px 0px 0px;
}

.pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li a {
  border: 1px solid #0d6efd;
  border-bottom: none;
  border-right: none;
  margin-right: 0;
  margin-left: 0;
}

/* Quill Editor */
.quill-container {
  height: 300px;
}

.ql-toolbar.ql-snow,
.quill-container.ql-snow {
  border-color: #575757;
}

/* Rating */
.br-theme-fontawesome-stars .br-widget a,
.br-theme-css-stars .br-widget a {
  font-size: 20px;
}

.br-theme-fontawesome-stars .br-widget a.br-selected:after, .br-theme-fontawesome-stars .br-widget a.br-active:after,
.br-theme-css-stars .br-widget a.br-selected:after,
.br-theme-css-stars .br-widget a.br-active:after {
  color: #0d6efd;
}

.br-theme-bars-1to10 .br-widget a,
.br-theme-bars-movie .br-widget a,
.br-theme-bars-pill .br-widget a,
.br-theme-bars-reversed .br-widget a,
.br-theme-bars-horizontal .br-widget a {
  background-color: rgba(13, 110, 253, 0.6);
  color: #0d6efd;
}

.br-theme-bars-1to10 .br-widget a.br-selected, .br-theme-bars-1to10 .br-widget a.br-active,
.br-theme-bars-movie .br-widget a.br-selected,
.br-theme-bars-movie .br-widget a.br-active,
.br-theme-bars-pill .br-widget a.br-selected,
.br-theme-bars-pill .br-widget a.br-active,
.br-theme-bars-reversed .br-widget a.br-selected,
.br-theme-bars-reversed .br-widget a.br-active,
.br-theme-bars-horizontal .br-widget a.br-selected,
.br-theme-bars-horizontal .br-widget a.br-active {
  background-color: #0d6efd;
}

.br-theme-bars-square .br-widget a {
  background: #65727e;
  border-color: rgba(13, 110, 253, 0.5);
  color: rgba(13, 110, 253, 0.5);
}

.br-theme-bars-square .br-widget a.br-selected, .br-theme-bars-square .br-widget a.br-active {
  border-color: #0d6efd;
  color: #0d6efd;
}

.br-theme-bars-movie .br-widget .br-current-rating,
.br-theme-bars-reversed .br-widget .br-current-rating,
.br-theme-bars-1to10 .br-widget .br-current-rating,
.br-theme-bars-horizontal .br-widget .br-current-rating {
  color: #fff;
  font-size: 0.875rem;
  font-weight: initial;
}

.br-theme-bars-1to10 {
  height: 26px;
}

.br-theme-bars-1to10 .br-widget {
  height: 24px;
}

.br-theme-bars-1to10 .br-widget .br-current-rating {
  line-height: 1;
}

.br-theme-bars-pill .br-widget a {
  line-height: 2.5;
}

/* Select2 */
.select2-container--default .select2-results__option--highlighted[aria-selected] {
  background: #0d6efd;
}

.select2-container--default .select2-selection--single,
.select2-container--default .select2-dropdown,
.select2-container--default .select2-selection--multiple {
  border-color: #575757;
}

.select2-container--default .select2-selection--single {
  height: auto;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
  line-height: 14px;
  color: #e9e6e6;
}

.select2-container--default .select2-dropdown {
  background: #1f1e23;
  font-size: .8125rem;
}

.select2-container--default.select2-container--focus .select2-selection--multiple {
  border-color: #575757;
}

.select2-container--default .select2-selection--multiple {
  background: #2b2e4c;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice {
  color: color(white);
  border: 0;
  border-radius: 3px;
  padding: 6px;
  font-size: .625rem;
  font-family: inherit;
  line-height: 1;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove {
  color: color(white);
}

.select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+1) {
  background: #0d6efd;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+2) {
  background: #198754;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+3) {
  background: #0dcaf0;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+4) {
  background: #dc3545;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+5) {
  background: #ffc107;
}

.select2-container--default .select2-selection--multiple .select2-selection__rendered {
  background: #2b2e4c;
}

/* Summernote Editor */
.note-editor.note-frame {
  border: 1px solid #575757;
}

.note-editor.note-frame .note-editing-area .note-editable {
  background: transparent;
  color: #e9e6e6;
}

.note-popover {
  border: 1px solid #575757;
}

/* SweetAlert */
.swal2-container {
  z-index: 1500;
}

.swal2-modal {
  min-height: 315px;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-flex-direction: column;
  flex-direction: column;
  border-radius: 10px;
}

.swal2-modal .swal2-title {
  font-size: 25px;
  line-height: 1;
  font-weight: 600;
  color: #fff;
  font-weight: initial;
  margin-bottom: 0;
}

.swal2-modal .swal2-icon,
.swal2-modal .swal2-success-ring {
  margin-top: 0;
  margin-bottom: 42px;
}

.swal2-modal .swal2-buttonswrapper {
  margin-top: 0;
  padding: 0;
}

.swal2-modal .swal2-buttonswrapper .swal2-styled {
  margin-top: 0;
  font-weight: initial;
}

.swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm {
  font-weight: initial;
  margin-top: 32px;
}

.swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel {
  margin-top: 32px;
  border: 1px solid #575757;
  color: #ffffff;
  font-weight: initial;
}

.swal2-modal .swal2-content {
  font-size: 0.875rem;
  font-weight: 600;
  color: #fff;
  font-weight: initial;
  margin-top: 11px;
}

.swal2-modal .swal2-close {
  font-size: 20px;
}

.swal2-modal .swal2-success-ring {
  left: -30px;
}

/* Switchery */
.switchery {
  width: 35px;
  height: 21px;
  border-radius: 11px;
}

.switchery > small, .switchery > .small {
  width: 20px;
  height: 20px;
}

.switchery-small {
  width: 25px;
  height: 13px;
}

.switchery-small > small, .switchery-small > .small {
  width: 13px;
  height: 13px;
}

.switchery-large {
  width: 50px;
  height: 28px;
  border-radius: 14px;
}

.switchery-large > small, .switchery-large > .small {
  width: 27px;
  height: 27px;
}

/* Tags */
div.tagsinput {
  padding: 15px 15px 10px;
  border-color: #575757;
  background: transparent;
}

div.tagsinput span.tag {
  background: #0d6efd;
  border: 0;
  color: color(white);
  padding: 6px 14px;
  font-size: .8125rem;
  font-family: inherit;
  line-height: 1;
}

div.tagsinput span.tag a {
  color: color(white);
}

/* TinyMCE Editor */
.mce-tinymce.mce-panel,
.mce-tinymce .mce-panel {
  border-color: #575757;
}

.mce-tinymce .mce-panel {
  background: #2b2e4c;
  color: #e9e6e6;
}

/* Toast */
.jq-toast-wrap .jq-icon-success {
  background-color: theme-color("success");
}

.jq-toast-wrap .jq-icon-info {
  background-color: theme-color("info");
}

.jq-toast-wrap .jq-icon-warning {
  background-color: theme-color("warning");
}

.jq-toast-wrap .jq-icon-error {
  background-color: theme-color("danger");
}

/* Typeahead */
.tt-menu,
.gist {
  text-align: left;
}

.twitter-typeahead {
  max-width: 100%;
}

.typeahead {
  background-color: #2b2e4c;
}

.typeahead:focus {
  border-color: #575757;
}

.tt-query {
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}

.tt-hint {
  color: color(gray);
}

.tt-menu {
  width: 100%;
  margin: 12px 0;
  padding: 8px 0;
  background-color: #1f1e23;
  border: 1px solid #575757;
  -webkit-border-radius: 8px;
  -moz-border-radius: 8px;
  border-radius: 8px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.tt-suggestion {
  padding: 3px 20px;
  font-size: inherit;
}

.tt-suggestion:hover {
  cursor: pointer;
  color: color(white);
  background-color: #0d6efd;
}

.tt-suggestion .tt-cursor {
  color: color(white);
  background-color: #0d6efd;
}

.tt-suggestion p {
  margin: 0;
}

/* Wysi Editor */
.wysi-editor #toolbar [data-wysihtml-action] {
  float: right;
}

.wysi-editor #toolbar,
.wysi-editor textarea {
  width: 920px;
  padding: 5px;
  -webkit-box-sizing: border-box;
  -ms-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.wysi-editor textarea {
  height: 280px;
  border: 1px solid #575757;
  font-family: inherit;
  font-size: 1rem;
}

.wysi-editor textarea:focus {
  color: black;
  border: 1px solid #575757;
}

.wysi-editor .wysihtml-action-active,
.wysi-editor .wysihtml-command-active {
  font-weight: bold;
}

.wysi-editor [data-wysihtml-dialog] {
  margin: 5px 0 0;
  padding: 5px;
  border: 1px solid #666;
}

.wysi-editor a[data-wysihtml-command-value="red"] {
  color: #dc3545;
}

.wysi-editor a[data-wysihtml-command-value="green"] {
  color: #198754;
}

.wysi-editor a[data-wysihtml-command-value="blue"] {
  color: #0dcaf0;
}

.wysi-editor .wysihtml-editor,
.wysi-editor .wysihtml-editor table td {
  outline: 1px dotted #575757;
}

.wysi-editor code {
  background: #ddd;
  padding: 10px;
  white-space: pre;
  display: block;
  margin: 1em 0;
}

.wysi-editor .toolbar {
  display: block;
  border-radius: 3px;
  border: 1px solid #fff;
  margin-bottom: 9px;
  line-height: 1em;
}

.wysi-editor .toolbar a {
  display: inline-block;
  height: 1.5em;
  border-radius: 3px;
  font-size: 1rem;
  line-height: 1.5em;
  text-decoration: none;
  background: color(white);
  border: 1px solid #575757;
  padding: 0 0.2em;
  margin: 1px 0;
  color: #0d6efd;
}

.wysi-editor .toolbar .wysihtml-action-active,
.wysi-editor .toolbar a.wysihtml-command-active {
  background: #222;
  color: white;
}

.wysi-editor .toolbar .block {
  padding: 1px;
  display: inline-block;
  background: #eee;
  border-radius: 3px;
  margin: 0 1px 1px 0;
}

.wysi-editor div[data-wysihtml-dialog="createTable"] {
  position: absolute;
  background: white;
}

.wysi-editor div[data-wysihtml-dialog="createTable"] td {
  width: 10px;
  height: 5px;
  border: 1px solid #575757;
}

.wysi-editor .wysihtml-editor table td.wysiwyg-tmp-selected-cell {
  outline: 2px solid #198754;
}

.wysi-editor .editor-container-tag {
  padding: 5px 10px;
  position: absolute;
  color: white;
  background: rgba(0, 0, 0, 0.8);
  width: 100px;
  margin-left: -50px;
  -webkit-transition: 0.1s left, 0.1s top;
}

.wysi-editor .wrap {
  max-width: 700px;
  margin: 40px;
}

.wysi-editor .editable .wysihtml-uneditable-container {
  outline: 1px dotted #575757;
  position: relative;
}

.wysi-editor .editable .wysihtml-uneditable-container-right {
  float: right;
  width: 50%;
  margin-left: 2em;
  margin-bottom: 1em;
}

.wysi-editor .editable .wysihtml-uneditable-container-left {
  float: left;
  width: 50%;
  margin-right: 2em;
  margin-bottom: 1em;
}

/* X-editable */
.editable-form .editable {
  color: #fff;
  font-size: .8125rem;
}

.editable-form .editable-click {
  border-color: #fff;
}

.editable-container.editable-inline {
  max-width: 100%;
}

.editable-container.editable-inline .editableform {
  max-width: 100%;
}

.editable-container.editable-inline .editableform .control-group {
  max-width: 100%;
  white-space: initial;
}

.editable-container.editable-inline .editableform .control-group > div {
  max-width: 100%;
}

.editable-container.editable-inline .editableform .control-group .editable-input input,
.editable-container.editable-inline .editableform .control-group .editable-input textarea {
  max-width: 100%;
  width: 100%;
}

.editable-container.editable-inline .editableform .control-group .editable-input .combodate .form-control, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .asColorPicker-input, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .dataTables_wrapper select, .dataTables_wrapper .editable-container.editable-inline .editableform .control-group .editable-input .combodate select, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .editable-container.editable-inline .editableform .control-group .editable-input .combodate input[type=text],
.editable-container.editable-inline .editableform .control-group .editable-input .combodate .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .editable-container.editable-inline .editableform .control-group .editable-input .combodate select, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .editable-container.editable-inline .editableform .control-group .editable-input .combodate input[type=number], .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-container--default .select2-selection--single, .select2-container--default .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-selection--single, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-search__field, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .typeahead,
.editable-container.editable-inline .editableform .control-group .editable-input .combodate .tt-query,
.editable-container.editable-inline .editableform .control-group .editable-input .combodate .tt-hint {
  padding-left: 0;
  padding-right: 0;
}

@media (max-width: 991px) {
  .editable-container.editable-inline .editableform .control-group .editable-buttons {
    display: block;
    margin-top: 10px;
  }
}

/* Wizard */
.wizard {
  display: block;
  width: 100%;
  overflow: hidden;
}

.wizard a {
  outline: 0;
}

.wizard ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.wizard ul > li {
  display: block;
  padding: 0;
}

.wizard > .steps {
  position: relative;
  display: block;
  width: 100%;
}

.wizard > .steps .current-info {
  position: absolute;
  left: -999em;
}

.wizard > .steps .number {
  font-size: 0.875rem;
}

.wizard > .steps > ul > li {
  width: 25%;
  float: left;
  text-align: center;
}

@media (max-width: 767px) {
  .wizard > .steps > ul > li {
    width: 50%;
  }
}

.wizard > .steps a {
  display: block;
  width: auto;
  margin: 0 0.5em 0.5em;
  padding: 1em 1em;
  text-decoration: none;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  font-size: 0.875rem;
  font-weight: 600;
}

.wizard > .steps a:hover {
  display: block;
  width: auto;
  margin: 0 0.5em 0.5em;
  padding: 1em;
  text-decoration: none;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}

.wizard > .steps a:active {
  display: block;
  width: auto;
  margin: 0 0.5em 0.5em;
  padding: 1em;
  text-decoration: none;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}

.wizard > .steps .disabled a {
  background: #6c757d;
  color: #f8f9fa;
  cursor: default;
}

.wizard > .steps .disabled a:hover {
  background: #e6e9ed;
  color: #212529;
  cursor: default;
}

.wizard > .steps .disabled a:active {
  background: #e6e9ed;
  color: #f8f9fa;
  cursor: default;
}

.wizard > .steps .current a {
  background: #0d6efd;
  color: #ffffff;
  cursor: default;
}

.wizard > .steps .current a:hover {
  background: #0d6efd;
  color: #212529;
  cursor: default;
}

.wizard > .steps .current a:active {
  background: #0d6efd;
  color: #ffffff;
  cursor: default;
}

.wizard > .steps .done a {
  background: #72abfe;
  color: #ffffff;
}

.wizard > .steps .done a:hover {
  background: #72abfe;
  color: #ffffff;
}

.wizard > .steps .done a:active {
  background: #72abfe;
  color: #ffffff;
}

.wizard > .steps .error a {
  background: #dc3545;
  color: #fff;
}

.wizard > .steps .error a:hover {
  background: #dc3545;
  color: #fff;
}

.wizard > .steps .error a:active {
  background: #dc3545;
  color: #fff;
}

.wizard > .content {
  background: transparent;
  display: block;
  margin: 0.5em;
  min-height: 24em;
  overflow: auto;
  position: relative;
  width: auto;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  border: 1px solid #575757;
}

.wizard > .content > .title {
  position: absolute;
  left: -999em;
}

.wizard > .content > .body {
  float: left;
  position: absolute;
  width: 95%;
  height: 95%;
  padding: 2.5%;
}

.wizard > .content > .body ul {
  list-style: disc;
}

.wizard > .content > .body ul > li {
  display: list-item;
}

.wizard > .content > .body > iframe {
  border: 0 none;
  width: 100%;
  height: 100%;
}

.wizard > .content > .body input {
  display: block;
  border: 1px solid #575757;
}

.wizard > .content > .body input[type="checkbox"] {
  display: inline-block;
}

.wizard > .content > .body input.error {
  background: #fbe3e4;
  border: 1px solid #eb8c95;
  color: #dc3545;
}

.wizard > .content > .body label {
  display: inline-block;
  margin-bottom: 0.5em;
}

.wizard > .content > .body label.error {
  color: #dc3545;
  display: inline-block;
  margin-left: 1.5em;
}

.wizard > .actions {
  padding-top: 20px;
  position: relative;
  display: block;
  text-align: right;
  width: 100%;
}

.wizard > .actions > ul {
  display: inline-block;
  text-align: right;
}

.wizard > .actions > ul > li {
  float: left;
  margin: 0 0.5em;
}

.wizard.vertical > .steps {
  display: inline;
  float: left;
  width: 30%;
}

@media (max-width: 767px) {
  .wizard.vertical > .steps {
    width: 42%;
  }
}

.wizard.vertical > .steps > ul > li {
  float: none;
  width: 100%;
  text-align: left;
}

.wizard.vertical > .content {
  display: inline;
  float: left;
  margin: 0 2.5% 0.5em 2.5%;
  width: 65%;
}

@media (max-width: 767px) {
  .wizard.vertical > .content {
    width: 52%;
  }
}

.wizard.vertical > .actions {
  display: inline;
  float: right;
  margin: 0 2.5%;
  width: 95%;
}

@media (max-width: 767px) {
  .wizard.vertical > .actions {
    margin: 0;
    width: 100%;
  }
}

.wizard.vertical > .actions > ul > li {
  margin: 0 0 0 1em;
}

/*-------------------------------------------------------------------*/
/* === Landing screens === */
/* Auth */
.auth .login-half-bg {
  background: url("../../images/auth/login-bg.jpg");
  background-size: cover;
}

.auth .register-half-bg {
  background: url("../../images/auth/register-bg.jpg");
  background-size: cover;
}

.auth.lock-full-bg {
  background: url("../../images/auth/lockscreen-bg.jpg");
  background-size: cover;
}

.auth .lock-profile-img {
  width: 90px;
  height: 90px;
  border-radius: 100%;
}

.auth .auth-form-light {
  background: #ffffff;
}

.auth .auth-form-light select {
  color: #aaa7a7;
}

.auth .auth-form-light .input-group .form-control:focus, .auth .auth-form-light .asColorPicker-wrap .form-control:focus, .auth .auth-form-light .input-group .asColorPicker-input:focus, .auth .auth-form-light .asColorPicker-wrap .asColorPicker-input:focus, .auth .auth-form-light .input-group .dataTables_wrapper select:focus, .dataTables_wrapper .auth .auth-form-light .input-group select:focus, .auth .auth-form-light .asColorPicker-wrap .dataTables_wrapper select:focus, .dataTables_wrapper .auth .auth-form-light .asColorPicker-wrap select:focus, .auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group input:focus[type=text], .auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap input:focus[type=text],
.auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group select:focus,
.auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap select:focus, .auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group input:focus[type=number], .auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap input:focus[type=number], .auth .auth-form-light .input-group .select2-container--default .select2-selection--single:focus, .select2-container--default .auth .auth-form-light .input-group .select2-selection--single:focus, .auth .auth-form-light .asColorPicker-wrap .select2-container--default .select2-selection--single:focus, .select2-container--default .auth .auth-form-light .asColorPicker-wrap .select2-selection--single:focus, .auth .auth-form-light .input-group .select2-container--default .select2-selection--single .select2-search__field:focus, .select2-container--default .select2-selection--single .auth .auth-form-light .input-group .select2-search__field:focus, .auth .auth-form-light .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:focus, .select2-container--default .select2-selection--single .auth .auth-form-light .asColorPicker-wrap .select2-search__field:focus, .auth .auth-form-light .input-group .typeahead:focus, .auth .auth-form-light .asColorPicker-wrap .typeahead:focus,
.auth .auth-form-light .input-group .tt-query:focus,
.auth .auth-form-light .asColorPicker-wrap .tt-query:focus,
.auth .auth-form-light .input-group .tt-hint:focus,
.auth .auth-form-light .asColorPicker-wrap .tt-hint:focus, .auth .auth-form-light .input-group .form-control:active, .auth .auth-form-light .asColorPicker-wrap .form-control:active, .auth .auth-form-light .input-group .asColorPicker-input:active, .auth .auth-form-light .asColorPicker-wrap .asColorPicker-input:active, .auth .auth-form-light .input-group .dataTables_wrapper select:active, .dataTables_wrapper .auth .auth-form-light .input-group select:active, .auth .auth-form-light .asColorPicker-wrap .dataTables_wrapper select:active, .dataTables_wrapper .auth .auth-form-light .asColorPicker-wrap select:active, .auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:active[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group input:active[type=text], .auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:active[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap input:active[type=text],
.auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row select:active, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group select:active,
.auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select:active, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap select:active, .auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:active[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group input:active[type=number], .auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:active[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap input:active[type=number], .auth .auth-form-light .input-group .select2-container--default .select2-selection--single:active, .select2-container--default .auth .auth-form-light .input-group .select2-selection--single:active, .auth .auth-form-light .asColorPicker-wrap .select2-container--default .select2-selection--single:active, .select2-container--default .auth .auth-form-light .asColorPicker-wrap .select2-selection--single:active, .auth .auth-form-light .input-group .select2-container--default .select2-selection--single .select2-search__field:active, .select2-container--default .select2-selection--single .auth .auth-form-light .input-group .select2-search__field:active, .auth .auth-form-light .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:active, .select2-container--default .select2-selection--single .auth .auth-form-light .asColorPicker-wrap .select2-search__field:active, .auth .auth-form-light .input-group .typeahead:active, .auth .auth-form-light .asColorPicker-wrap .typeahead:active,
.auth .auth-form-light .input-group .tt-query:active,
.auth .auth-form-light .asColorPicker-wrap .tt-query:active,
.auth .auth-form-light .input-group .tt-hint:active,
.auth .auth-form-light .asColorPicker-wrap .tt-hint:active {
  border-color: #575757;
}

.auth .auth-form-transparent {
  background: transparent;
}

.auth .auth-form-transparent .form-control, .auth .auth-form-transparent .asColorPicker-input, .auth .auth-form-transparent .dataTables_wrapper select, .dataTables_wrapper .auth .auth-form-transparent select, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input[type=text],
.auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent select, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input[type=number], .auth .auth-form-transparent .select2-container--default .select2-selection--single, .select2-container--default .auth .auth-form-transparent .select2-selection--single, .auth .auth-form-transparent .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .auth .auth-form-transparent .select2-search__field, .auth .auth-form-transparent .typeahead,
.auth .auth-form-transparent .tt-query,
.auth .auth-form-transparent .tt-hint,
.auth .auth-form-transparent .input-group-text {
  border-color: #6c757d;
}

.auth .auth-form-transparent .form-control:focus, .auth .auth-form-transparent .asColorPicker-input:focus, .auth .auth-form-transparent .dataTables_wrapper select:focus, .dataTables_wrapper .auth .auth-form-transparent select:focus, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input:focus[type=text],
.auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent select:focus, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input:focus[type=number], .auth .auth-form-transparent .select2-container--default .select2-selection--single:focus, .select2-container--default .auth .auth-form-transparent .select2-selection--single:focus, .auth .auth-form-transparent .select2-container--default .select2-selection--single .select2-search__field:focus, .select2-container--default .select2-selection--single .auth .auth-form-transparent .select2-search__field:focus, .auth .auth-form-transparent .typeahead:focus,
.auth .auth-form-transparent .tt-query:focus,
.auth .auth-form-transparent .tt-hint:focus, .auth .auth-form-transparent .form-control:active, .auth .auth-form-transparent .asColorPicker-input:active, .auth .auth-form-transparent .dataTables_wrapper select:active, .dataTables_wrapper .auth .auth-form-transparent select:active, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input:active[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input:active[type=text],
.auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row select:active, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent select:active, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input:active[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input:active[type=number], .auth .auth-form-transparent .select2-container--default .select2-selection--single:active, .select2-container--default .auth .auth-form-transparent .select2-selection--single:active, .auth .auth-form-transparent .select2-container--default .select2-selection--single .select2-search__field:active, .select2-container--default .select2-selection--single .auth .auth-form-transparent .select2-search__field:active, .auth .auth-form-transparent .typeahead:active,
.auth .auth-form-transparent .tt-query:active,
.auth .auth-form-transparent .tt-hint:active,
.auth .auth-form-transparent .input-group-text:focus,
.auth .auth-form-transparent .input-group-text:active {
  border-color: #6c757d;
}

.auth .auth-form-transparent select {
  outline-color: #6c757d;
}

.auth.auth-img-bg {
  padding: 0;
}

@media (min-width: 768px) {
  .auth.auth-img-bg .auth-form-transparent {
    width: 55%;
    margin: auto;
  }
}

.auth .brand-logo {
  margin-bottom: 2rem;
}

.auth .brand-logo img {
  width: 150px;
}

.auth form .form-group {
  margin-bottom: 1.5rem;
}

.auth form .form-group label {
  font-size: .8125rem;
}

.auth form .form-group .form-control, .auth form .form-group .asColorPicker-input, .auth form .form-group .dataTables_wrapper select, .dataTables_wrapper .auth form .form-group select, .auth form .form-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth form .form-group input[type=text],
.auth form .form-group .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .auth form .form-group select, .auth form .form-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth form .form-group input[type=number], .auth form .form-group .select2-container--default .select2-selection--single, .select2-container--default .auth form .form-group .select2-selection--single, .auth form .form-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .auth form .form-group .select2-search__field, .auth form .form-group .typeahead,
.auth form .form-group .tt-query,
.auth form .form-group .tt-hint {
  background: transparent;
  border-radius: 0;
  font-size: .9375rem;
}

.auth form .auth-form-btn {
  padding: 1rem 3rem;
  line-height: 1.5;
}

.auth form .auth-link {
  font-size: 0.875rem;
}

.auth form .auth-link:hover {
  color: initial;
}

.page-body-wrapper {
  min-height: calc(100vh - 60px);
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
  padding-left: 0;
  padding-right: 0;
  padding-top: 60px;
}

.page-body-wrapper.full-page-wrapper {
  width: 100%;
  min-height: 100vh;
  padding-top: 0;
}

.main-panel {
  transition: width 0.25s ease, margin 0.25s ease;
  width: calc(100% - 237px);
  min-height: calc(100vh - 60px);
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: column;
  flex-direction: column;
}

@media (max-width: 991px) {
  .main-panel {
    margin-left: 0;
    width: 100%;
  }
}

.content-wrapper {
  background: #151419;
  padding: 2.68rem 2.5rem;
  width: 100%;
  -webkit-flex-grow: 1;
  flex-grow: 1;
}

@media (max-width: 767px) {
  .content-wrapper {
    padding: 1.5rem 1.5rem;
  }
}

/* Sidebar */
.sidebar {
  min-height: calc(100vh - 60px);
  background: #232227;
  font-family: "Nunito", sans-serif;
  font-weight: 400;
  padding: 0;
  width: 237px;
  z-index: 11;
  transition: width 0.25s ease, background 0.25s ease;
  -webkit-transition: width 0.25s ease, background 0.25s ease;
  -moz-transition: width 0.25s ease, background 0.25s ease;
  -ms-transition: width 0.25s ease, background 0.25s ease;
}

.sidebar .nav {
  overflow: hidden;
  flex-wrap: nowrap;
  flex-direction: column;
  margin-bottom: 60px;
}

.sidebar .nav .nav-item {
  -webkit-transition-duration: 0.25s;
  -moz-transition-duration: 0.25s;
  -o-transition-duration: 0.25s;
  transition-duration: 0.25s;
  transition-property: background;
  -webkit-transition-property: background;
}

.sidebar .nav .nav-item .collapse {
  z-index: 999;
}

.sidebar .nav .nav-item .nav-link {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  white-space: nowrap;
  padding: 13px 1.937rem 13px 1rem;
  color: #FFFFFF;
  -webkit-transition-duration: 0.45s;
  -moz-transition-duration: 0.45s;
  -o-transition-duration: 0.45s;
  transition-duration: 0.45s;
  transition-property: color;
  -webkit-transition-property: color;
}

.sidebar .nav .nav-item .nav-link i {
  color: inherit;
}

.sidebar .nav .nav-item .nav-link i.menu-icon {
  font-size: 1rem;
  line-height: 1;
  margin-right: 1rem;
  color: inherit;
}

.rtl .sidebar .nav .nav-item .nav-link i.menu-icon {
  margin-left: 2rem;
  margin-right: 0;
}

.sidebar .nav .nav-item .nav-link i.menu-icon:before {
  vertical-align: middle;
}

.sidebar .nav .nav-item .nav-link i.menu-arrow {
  display: inline-block;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin-left: auto;
  margin-right: 0;
  color: #FFFFFF;
}

.rtl .sidebar .nav .nav-item .nav-link i.menu-arrow {
  margin-left: 0;
  margin-right: auto;
}

.sidebar .nav .nav-item .nav-link i.menu-arrow:before {
  content: "\e649";
  font-family: "themify";
  font-style: normal;
  display: block;
  font-size: .687rem;
  line-height: 10px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

.sidebar .nav .nav-item .nav-link .menu-title {
  color: inherit;
  display: inline-block;
  font-size: 0.875rem;
  line-height: 1;
  vertical-align: middle;
  font-weight: 600;
}

.sidebar .nav .nav-item .nav-link .badge {
  margin-left: auto;
}

.rtl .sidebar .nav .nav-item .nav-link .badge {
  margin-left: 0;
  margin-right: auto;
}

.sidebar .nav .nav-item .nav-link[aria-expanded="true"] i.menu-arrow:before {
  -moz-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}

.sidebar .nav .nav-item.active > .nav-link {
  background: <?php echo $settings['theme']; ?>;
  position: relative;
}

.sidebar .nav .nav-item.active > .nav-link i,
.sidebar .nav .nav-item.active > .nav-link .menu-title,
.sidebar .nav .nav-item.active > .nav-link .menu-arrow {
  color: #fff;
}

.sidebar .nav:not(.sub-menu) {
  margin-top: 1.45rem;
  margin-left: .375rem;
  margin-right: .375rem;
}

.sidebar .nav:not(.sub-menu) > .nav-item {
  margin-top: .2rem;
}

.sidebar .nav:not(.sub-menu) > .nav-item.active {
  background: <?php echo $settings['theme']; ?>;
  border-radius: 0.437rem;
}

.sidebar .nav:not(.sub-menu) > .nav-item.active .nav-link {
  border-radius: 0.437rem 0.437rem 0 0;
}

.sidebar .nav:not(.sub-menu) > .nav-item > .nav-link {
  margin: 0;
}

.sidebar .nav:not(.sub-menu) > .nav-item > .nav-link[aria-expanded="true"] {
  background: <?php echo $settings['theme']; ?>;
  border-radius: 0.437rem 0.437rem 0 0;
}

.sidebar .nav:not(.sub-menu) > .nav-item:hover > .nav-link {
  background: <?php echo $settings['theme']; ?>;
  color: #d0cfcf;
}

.sidebar .nav:not(.sub-menu) > .nav-item:hover > .nav-link:not([aria-expanded="true"]) {
  border-radius: .437rem;
}

.sidebar .nav.sub-menu {
  margin-bottom: 0;
  margin-top: 0;
  list-style: none;
  padding: 0.25rem 0 0.6rem 3.07rem;
  background: <?php echo $settings['theme']; ?>;
}

.sidebar .nav.sub-menu .nav-item {
  padding: 0;
}

.sidebar .nav.sub-menu .nav-item::before {
  content: '';
  width: 5px;
  height: 5px;
  position: absolute;
  margin-top: 16px;
  border-radius: 50%;
  background: #b2b2b2;
}

.sidebar .nav.sub-menu .nav-item .nav-link {
  color: #FFFFFF;
  padding: 0.7rem 1rem;
  position: relative;
  font-size: 0.875rem;
  line-height: 1;
  height: auto;
  border-top: 0;
}

.sidebar .nav.sub-menu .nav-item .nav-link:hover {
  color: #bebdc2;
}

.sidebar .nav.sub-menu .nav-item .nav-link.active {
  color: #ffffff;
  background: transparent;
}

.sidebar .nav.sub-menu .nav-item:hover {
  background: transparent;
}

/* style for off-canvas menu*/
@media screen and (max-width: 991px) {
  .sidebar-offcanvas {
    position: fixed;
    max-height: calc(100vh - 60px);
    top: 60px;
    bottom: 0;
    overflow: auto;
    right: -237px;
    -webkit-transition: all 0.25s ease-out;
    -o-transition: all 0.25s ease-out;
    transition: all 0.25s ease-out;
  }
  .sidebar-offcanvas.active {
    right: 0;
  }
}

/* Navbar */
.navbar {
  font-weight: 400;
  transition: background 0.25s ease;
  -webkit-transition: background 0.25s ease;
  -moz-transition: background 0.25s ease;
  -ms-transition: background 0.25s ease;
  border-bottom: none;
  /* Navbar color variations */
}

.navbar .navbar-brand-wrapper {
  background: #232227;
  transition: width 0.25s ease, background 0.25s ease;
  -webkit-transition: width 0.25s ease, background 0.25s ease;
  -moz-transition: width 0.25s ease, background 0.25s ease;
  -ms-transition: width 0.25s ease, background 0.25s ease;
  width: 237px;
  height: 60px;
  padding-left: 1rem;
}

.navbar .navbar-brand-wrapper .navbar-brand {
  color: #27367f;
  font-size: 1.5rem;
  margin-right: 0;
  padding: .25rem 0;
}

.navbar .navbar-brand-wrapper .navbar-brand.brand-logo-mini {
  display: none;
}

.navbar .navbar-brand-wrapper .navbar-brand:active, .navbar .navbar-brand-wrapper .navbar-brand:focus, .navbar .navbar-brand-wrapper .navbar-brand:hover {
  color: #1b2658;
}

.navbar .navbar-brand-wrapper .navbar-brand img {
  max-width: 100%;
  height: 34px;
  margin: auto;
  vertical-align: middle;
}

.navbar .navbar-brand-wrapper .brand-logo-mini {
  padding-left: 0;
  text-align: center;
}

.navbar .navbar-brand-wrapper .brand-logo-mini img {
  width: calc(70px - 30px);
  max-width: 100%;
  margin: auto;
}

.navbar .navbar-menu-wrapper {
  background: #232227;
  transition: width 0.25s ease;
  -webkit-transition: width 0.25s ease;
  -moz-transition: width 0.25s ease;
  -ms-transition: width 0.25s ease;
  color: #b1b1b5;
  padding-left: 2.55rem;
  padding-right: 2.55rem;
  width: calc(100% - 237px);
  height: 60px;
}

@media (max-width: 991px) {
  .navbar .navbar-menu-wrapper {
    width: calc(100% - 55px);
    padding-left: 15px;
    padding-right: 15px;
  }
}

.navbar .navbar-menu-wrapper .navbar-toggler {
  border-radius: 0;
  border: 0;
  color: inherit;
  font-size: 1.25rem;
  padding: 0;
}

.navbar .navbar-menu-wrapper .navbar-toggler:focus {
  box-shadow: none;
}

.navbar .navbar-menu-wrapper .navbar-toggler:not(.navbar-toggler-right) {
  transform: rotate(0deg);
  -webkit-transition: transform 0.3s linear;
  -moz-transition: transform 0.3s linear;
  -ms-transition: transform 0.3s linear;
  -o-transition: transform 0.3s linear;
  transition: transform 0.3s linear;
}

@media (max-width: 991px) {
  .navbar .navbar-menu-wrapper .navbar-toggler:not(.navbar-toggler-right) {
    display: none;
  }
}

.sidebar-icon-only .navbar .navbar-menu-wrapper .navbar-toggler:not(.navbar-toggler-right) {
  transform: rotate(180deg);
}

@media (max-width: 991px) {
  .navbar .navbar-menu-wrapper .navbar-toggler.navbar-toggler-right {
    padding-left: 15px;
    padding-right: 11px;
  }
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item {
  margin-left: 1rem;
  margin-right: 1rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item:last-child {
  margin-right: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link {
  color: inherit;
  font-size: 1rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search {
  margin-left: 2rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap {
  border-radius: 4px;
  padding: .75rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .form-control, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .asColorPicker-input, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .dataTables_wrapper select, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input[type=text], .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input[type=text],
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input[type=number], .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input[type=number], .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-selection--single, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-search__field, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .typeahead,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-query,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-query,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-hint,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-hint,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .input-group-text,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .input-group-text {
  background: transparent;
  border: 0;
  color: #b1b1b5;
  padding: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .input-group-text i, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .input-group-text i {
  font-size: 1.25rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .form-control, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .asColorPicker-input, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .dataTables_wrapper select, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input[type=text], .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input[type=text],
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input[type=number], .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input[type=number], .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-selection--single, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-search__field, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .typeahead,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-query,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-query,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-hint,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-hint {
  margin-left: .5rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .form-control::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .asColorPicker-input::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-webkit-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input[type=text]::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-webkit-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input[type=text]::-webkit-input-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row select::-webkit-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select::-webkit-input-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select::-webkit-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-webkit-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input[type=number]::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-webkit-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input[type=number]::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .typeahead::-webkit-input-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-query::-webkit-input-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-query::-webkit-input-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-hint::-webkit-input-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-hint::-webkit-input-placeholder {
  color: #b1b1b5;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .form-control:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .asColorPicker-input:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:-moz-placeholder[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input:-moz-placeholder[type=text], .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:-moz-placeholder[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input:-moz-placeholder[type=text],
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row select:-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select:-moz-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select:-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:-moz-placeholder[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input:-moz-placeholder[type=number], .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:-moz-placeholder[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input:-moz-placeholder[type=number], .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .typeahead:-moz-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-query:-moz-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-query:-moz-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-hint:-moz-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-hint:-moz-placeholder {
  color: #b1b1b5;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .form-control::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .asColorPicker-input::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input[type=text]::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input[type=text]::-moz-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row select::-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select::-moz-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select::-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input[type=number]::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input[type=number]::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .typeahead::-moz-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-query::-moz-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-query::-moz-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-hint::-moz-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-hint::-moz-placeholder {
  color: #b1b1b5;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .form-control:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .asColorPicker-input:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:-ms-input-placeholder[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input:-ms-input-placeholder[type=text], .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:-ms-input-placeholder[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input:-ms-input-placeholder[type=text],
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row select:-ms-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select:-ms-input-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select:-ms-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:-ms-input-placeholder[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input:-ms-input-placeholder[type=number], .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:-ms-input-placeholder[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input:-ms-input-placeholder[type=number], .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .typeahead:-ms-input-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-query:-ms-input-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-query:-ms-input-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-hint:-ms-input-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-hint:-ms-input-placeholder {
  color: #b1b1b5;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings {
  margin: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings .nav-link {
  padding: 0;
  text-align: center;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings i {
  font-size: 1.25rem;
  vertical-align: middle;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile {
  margin-left: .2rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile img {
  width: 40px;
  height: 40px;
  border-radius: 100%;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile.dropdown .dropdown-toggle:after {
  display: none;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-profile-name {
  margin-left: .5rem;
}

@media (max-width: 767px) {
  .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-profile-name {
    display: none;
  }
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu {
  border: none;
  -webkit-box-shadow: 0px 3px 21px 0px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0px 3px 21px 0px rgba(0, 0, 0, 0.2);
  box-shadow: 0px 3px 21px 0px rgba(0, 0, 0, 0.2);
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown {
  position: absolute;
  font-size: 0.9rem;
  margin-top: 0;
  right: 0;
  left: auto;
  top: 70px;
}

.rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown {
  right: auto;
  left: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item {
  margin-bottom: 0;
  padding: 0.687rem 1.562rem;
  color: #ffffff;
  cursor: pointer;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item:hover {
  background: #1e1e2f;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item i {
  font-size: 17px;
  color: #ffffff;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item .badge {
  margin-left: 2.5rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item .ellipsis {
  max-width: 200px;
  overflow: hidden;
  text-overflow: ellipsis;
}

.rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item i {
  margin-left: 10px;
}

.rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item .badge {
  margin-left: 0;
  margin-right: 2.5rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-divider {
  margin: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown i {
  margin-right: .5rem;
  vertical-align: middle;
}

@media (max-width: 991px) {
  .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown {
    position: static;
  }
  .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown {
    left: 20px;
    right: 20px;
    top: 60px;
    width: calc(100% - 40px);
  }
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator {
  position: relative;
  padding: 0;
  text-align: center;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator i {
  font-size: 1.25rem;
  margin-right: 0;
  vertical-align: middle;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator .count {
  position: absolute;
  left: 55%;
  width: 12px;
  height: 12px;
  border-radius: 100%;
  background: #0dcaf0;
  top: 1px;
  border: 1px solid #ffffff;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator:after {
  display: none;
}

@media (min-width: 992px) {
  .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
    margin-left: auto;
  }
  .rtl .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
    margin-left: 0;
    margin-right: auto;
  }
}

.navbar.navbar-primary .navbar-menu-wrapper {
  background: <?php echo $settings['theme']; ?>;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #212529;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #212529;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #0d6efd;
}

.navbar.navbar-secondary .navbar-menu-wrapper {
  background: #a3a4a5;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #212529;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #212529;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #0d6efd;
}

.navbar.navbar-success .navbar-menu-wrapper {
  background: #57B657;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #212529;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #212529;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #0d6efd;
}

.navbar.navbar-info .navbar-menu-wrapper {
  background: #248AFD;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #212529;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #212529;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #0d6efd;
}

.navbar.navbar-warning .navbar-menu-wrapper {
  background: #FFC100;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #212529;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #212529;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #0d6efd;
}

.navbar.navbar-danger .navbar-menu-wrapper {
  background: #FF4747;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #212529;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #212529;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #0d6efd;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #f8f9fa;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #212529;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #212529;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #0d6efd;
}

.navbar.navbar-dark .navbar-menu-wrapper {
  background: #282f3a;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #212529;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #212529;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #0d6efd;
}

@media (max-width: 991px) {
  .navbar {
    flex-direction: row;
  }
  .navbar .navbar-brand-wrapper {
    width: 55px;
  }
  .navbar .navbar-brand-wrapper .navbar-brand.brand-logo {
    display: none;
  }
  .navbar .navbar-brand-wrapper .navbar-brand.brand-logo-mini {
    display: inline-block;
  }
  .navbar-collapse {
    display: flex;
    margin-top: 0.5rem;
  }
}

@media (max-width: 480px) {
  .navbar .navbar-brand-wrapper {
    width: 55px;
  }
  .navbar .navbar-brand-wrapper .brand-logo-mini {
    padding-top: 0px;
  }
}

/* Layouts */
@media (min-width: 992px) {
  .sidebar-mini .navbar .navbar-brand-wrapper {
    width: 185px;
  }
  .sidebar-mini .navbar .navbar-menu-wrapper {
    width: calc(100% - 185px);
  }
  .sidebar-mini .sidebar {
    width: 185px;
  }
  .sidebar-mini .sidebar .nav .nav-item {
    padding: 0;
  }
  .sidebar-mini .sidebar .nav .nav-item .nav-link {
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-flex-direction: column;
    flex-direction: column;
    text-align: center;
    position: relative;
    border-bottom: none;
  }
  .sidebar-mini .sidebar .nav .nav-item .nav-link .menu-title {
    display: block;
    margin: auto;
  }
  .sidebar-mini .sidebar .nav .nav-item .nav-link .badge {
    margin-left: 5px;
    display: none;
  }
  .sidebar-mini .sidebar .nav .nav-item .nav-link i.menu-icon {
    display: block;
    margin-right: auto;
    margin-left: auto;
    margin-bottom: .625rem;
  }
  .sidebar-mini .sidebar .nav .nav-item .nav-link i.menu-arrow {
    display: inline-block;
    margin-left: 5px;
    position: absolute;
    top: 50%;
    right: 10px;
    -moz-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
  }
  .sidebar-mini .main-panel {
    width: calc(100% - 185px);
  }
  .sidebar-mini:not(.sidebar-icon-only) .sidebar .nav.sub-menu {
    padding: 0;
    border-top: none;
  }
  .sidebar-mini:not(.sidebar-icon-only) .sidebar .nav.sub-menu .nav-item .nav-link {
    padding: .75rem 0 .75rem 1.5rem;
    margin-left: auto;
    margin-right: auto;
    display: block;
    text-align: left;
    width: 66%;
  }
}

@media (min-width: 992px) {
  .sidebar-icon-only .navbar .navbar-brand-wrapper {
    width: 70px;
  }
  .sidebar-icon-only .navbar .navbar-brand-wrapper .brand-logo {
    display: none;
  }
  .sidebar-icon-only .navbar .navbar-brand-wrapper .brand-logo-mini {
    display: inline-block;
  }
  .sidebar-icon-only .navbar .navbar-menu-wrapper {
    width: calc(100% - 70px);
  }
  .sidebar-icon-only .sidebar {
    width: 70px;
  }
  .sidebar-icon-only .sidebar .nav {
    overflow: visible;
    margin-left: 0;
    margin-right: 0;
  }
  .sidebar-icon-only .sidebar .nav .nav-item {
    position: relative;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link {
    display: block;
    padding-left: .5rem;
    padding-right: .5rem;
    text-align: center;
    position: static;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-title,
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link .badge, .sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-sub-title {
    display: none;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-title {
    border-radius: 0 5px 5px 0px;
  }
  .rtl.sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-title {
    border-radius: 5px 0 0 5px;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link i.menu-icon {
    margin-right: 0;
    margin-left: 0;
    margin-bottom: 0;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link i.menu-arrow {
    display: none;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link[aria-expanded] .menu-title {
    border-radius: 0 5px 0 0px;
  }
  .rtl.sidebar-icon-only .sidebar .nav .nav-item .nav-link[aria-expanded] .menu-title {
    border-radius: 5px 0 0 0;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .collapse {
    display: none;
  }
  .sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
    background: <?php echo $settings['theme']; ?>;
    padding: 0.5rem 1.4rem;
    left: 70px;
    position: absolute;
    text-align: left;
    top: 0;
    bottom: 0;
    width: 190px;
    z-index: 1;
    line-height: 1.8;
    -webkit-box-shadow: 4px 4px 7px 0px #1e1e2f;
    box-shadow: 4px 4px 7px 0px #1e1e2f;
  }
  .rtl.sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
    left: auto;
    right: 70px;
    text-align: left;
    -webkit-box-shadow: -4px 4px 7px 0px #1e1e2f;
    box-shadow: -4px 4px 7px 0px #1e1e2f;
  }
  .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
    color: #ffffff;
  }
  .sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title:after {
    display: none;
  }
  .sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapse,
  .sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapsing {
    display: block;
    background: #232227;
    border-radius: 0 0 5px 0;
    position: absolute;
    left: 70px;
    width: 190px;
    -webkit-box-shadow: 4px 4px 7px 0px #1e1e2f;
    box-shadow: 4px 4px 7px 0px #1e1e2f;
  }
  .rtl.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapse, .rtl.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapsing {
    left: auto;
    right: 70px;
    border-radius: 0 0 0 5px;
    -webkit-box-shadow: -4px 4px 7px 0px #1e1e2f;
    box-shadow: -4px 4px 7px 0px #1e1e2f;
  }
  .sidebar-icon-only .sidebar .nav.sub-menu {
    padding: 0 0 0.6rem 1.5rem;
  }
  .sidebar-icon-only .sidebar .nav.sub-menu .nav-item .nav-link {
    text-align: left;
    padding-left: 20px;
  }
  .sidebar-icon-only .sidebar .nav:not(.sub-menu) .nav-item:hover .nav-link {
    border-radius: 0;
  }
  .sidebar-icon-only .main-panel {
    width: calc(100% - 70px);
  }
}

@media (min-width: 992px) {
  .sidebar-hidden .sidebar {
    transition: width 0.25s ease;
    -webkit-transition: width 0.25s ease;
    -moz-transition: width 0.25s ease;
    -ms-transition: width 0.25s ease;
    width: 0;
  }
  .sidebar-hidden .main-panel {
    width: 100%;
  }
}

@media (min-width: 992px) {
  .sidebar-absolute .page-body-wrapper {
    position: relative;
  }
  .sidebar-absolute .page-body-wrapper .sidebar {
    -webkit-transition: none;
    transition: none;
  }
  .sidebar-absolute:not(.sidebar-hidden) .sidebar {
    position: absolute;
    height: 100%;
    -webkit-box-shadow: 0 0 3px 1px #a7a3a3;
    /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
    /* Firefox 3.5 - 3.6 */
    box-shadow: 0 0 3px 1px #a7a3a3;
    /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */
  }
  .sidebar-absolute .main-panel {
    width: 100%;
    -webkit-transition: none;
    transition: none;
  }
}

@media (min-width: 992px) {
  .sidebar-fixed .sidebar {
    position: fixed;
    max-height: auto;
  }
  .sidebar-fixed .sidebar .nav {
    max-height: calc(100vh - 60px);
    overflow: auto;
    position: relative;
  }
  .sidebar-fixed .sidebar .nav.sub-menu {
    max-height: none;
  }
  .sidebar-fixed .main-panel {
    margin-left: 237px;
  }
  .sidebar-fixed.sidebar-icon-only .main-panel {
    margin-left: 70px;
  }
}

@media (min-width: 992px) {
  .boxed-layout .container-scroller {
    background: #c6c8ca;
    padding: 0 calc((100% - 1200px) / 2);
  }
  .boxed-layout .navbar.fixed-top {
    margin: auto;
    max-width: 1200px;
  }
}

.rtl {
  direction: rtl;
  text-align: right;
}

.rtl .sidebar .nav {
  padding-right: 0;
}

.rtl .sidebar .nav.sub-menu {
  padding: 0 4.5rem 0 0;
}

.sidebar-icon-only.rtl .sidebar .nav.sub-menu {
  padding-right: 0rem;
}

.sidebar-icon-only.rtl .sidebar .nav.sub-menu .nav-item .nav-link {
  padding-right: 3rem;
  text-align: right;
}

.sidebar-icon-only.rtl .sidebar .nav.sub-menu .nav-item .nav-link:before {
  right: 1.75rem;
}

.rtl .product-chart-wrapper::-webkit-scrollbar,
.rtl .settings-panel .tab-content .tab-pane .scroll-wrapper::-webkit-scrollbar,
.rtl .sidebar-fixed .nav::-webkit-scrollbar,
.rtl .table-responsive::-webkit-scrollbar,
.rtl ul.chats::-webkit-scrollbar {
  width: 0.5em;
}

.rtl .product-chart-wrapper::-webkit-scrollbar-track,
.rtl .settings-panel .tab-content .tab-pane .scroll-wrapper::-webkit-scrollbar-track,
.rtl .sidebar-fixed .nav::-webkit-scrollbar-track,
.rtl .table-responsive::-webkit-scrollbar-track,
.rtl ul.chats::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

.rtl .product-chart-wrapper::-webkit-scrollbar-thumb,
.rtl .settings-panel .tab-content .tab-pane .scroll-wrapper::-webkit-scrollbar-thumb,
.rtl .sidebar-fixed .nav::-webkit-scrollbar-thumb,
.rtl .table-responsive::-webkit-scrollbar-thumb,
.rtl ul.chats::-webkit-scrollbar-thumb {
  background-color: darkgrey;
  outline: 1px solid slategrey;
}

/* Settings Panel */
.settings-panel {
  display: block;
  position: fixed;
  top: 60px;
  right: -300px;
  bottom: 0;
  width: 300px;
  height: 100vh;
  min-height: 100%;
  background: #1f1e23;
  -webkit-transition-duration: 0.25s;
  -moz-transition-duration: 0.25s;
  -o-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  -webkit-transition-property: right, box-shadow;
  -moz-transition-property: right, box-shadow;
  -o-transition-property: right, box-shadow;
  transition-property: right, box-shadow;
  z-index: 9999;
}

.settings-panel .nav-tabs {
  display: -webkit-flex;
  display: flex;
  -webkit-justify-content: center;
  justify-content: center;
  width: auto;
  margin: 0;
  padding: 0;
  background: #1f1e23;
}

.settings-panel .nav-tabs .nav-item {
  border: none;
}

.settings-panel .nav-tabs .nav-item .nav-link {
  background: transparent;
  text-align: center;
  border: none;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  color: #fff;
  -webkit-transition-duration: 0.4s;
  -moz-transition-duration: 0.4s;
  -o-transition-duration: 0.4s;
  transition-duration: 0.4s;
  transition-property: color;
  -webkit-transition-property: color;
  -webkit-justify-content: center;
  justify-content: center;
}

.settings-panel .nav-tabs .nav-item .nav-link.active {
  background: transparent;
  color: #0d6efd;
}

.settings-panel .tab-content {
  border: none;
  padding: 20px 0 0px 0;
}

.settings-panel .tab-content .tab-pane.scroll-wrapper {
  position: relative;
  max-height: 100vh;
  height: 100%;
  padding-bottom: 150px;
}

.settings-panel .settings-heading {
  padding: 16px 0 13px 35px;
  font-size: 0.875rem;
  font-family: "Nunito", sans-serif;
  font-weight: 500;
  line-height: 1;
  color: #fff;
  opacity: 0.9;
  margin-bottom: 0;
  border-top: 1px solid #575757;
  border-bottom: 1px solid #575757;
}

.rtl .settings-panel .settings-heading {
  padding: 16px 35px 13px 0;
  text-align: right;
}

.rtl .settings-panel small.settings-heading, .rtl .settings-panel .settings-heading.small {
  padding: 16px 0 13px 12px;
}

.settings-panel .chat-list {
  padding-left: 0;
}

.settings-panel .chat-list .list {
  padding: 0.4rem 0.8rem;
  display: -webkit-flex;
  display: flex;
  -webkit-justify-content: space-between;
  justify-content: space-between;
  border-bottom: 1px solid #575757;
}

.settings-panel .chat-list .list:last-child {
  border-bottom: none;
}

.settings-panel .chat-list .list .profile {
  position: relative;
  margin-right: 1rem;
}

.settings-panel .chat-list .list .profile img {
  width: 2.50rem;
  height: 2.50rem;
  border-radius: 100%;
}

.settings-panel .chat-list .list .profile span {
  height: 0.75rem;
  width: 0.75rem;
  position: absolute;
  bottom: 0.34rem;
  right: 0;
  border: 0.13rem solid #ffffff;
  border-radius: 100%;
}

.settings-panel .chat-list .list .profile span.online {
  background: #198754;
}

.settings-panel .chat-list .list .profile span.offline {
  background: #ffc107;
}

.settings-panel .chat-list .list .info {
  margin-right: auto;
}

.settings-panel .chat-list .list .info p {
  display: block;
  margin-bottom: 0;
}

.settings-panel .chat-list .list .info p:last-child {
  opacity: 0.5;
  font-size: 0.8rem;
}

.rtl .settings-panel .chat-list .list .info p:last-child {
  text-align: right;
}

.settings-panel .chat-list .list.active {
  background: #212529;
}

.settings-panel.open {
  right: 0;
  -webkit-box-shadow: 7px 0px 80px -9px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 7px 0px 80px -9px rgba(0, 0, 0, 0.15);
  box-shadow: 7px 0px 80px -9px rgba(0, 0, 0, 0.15);
}

.settings-panel .settings-close {
  position: absolute;
  top: 16px;
  right: 10px;
  color: #0d6efd;
  background: transparent;
  border-radius: 4px;
  padding: 0 3px;
  cursor: pointer;
  -webkit-transition-duration: 0.2s;
  -moz-transition-duration: 0.2s;
  -o-transition-duration: 0.2s;
  transition-duration: 0.2s;
  z-index: 999;
  font-size: .7rem;
  padding: .25rem;
}

.settings-panel .settings-close:hover {
  background: rgba(255, 255, 255, 0.3);
}

.rtl .settings-panel .settings-close {
  right: unset;
  left: 10px;
}

.settings-panel .events p {
  font-family: "Nunito", sans-serif;
  font-weight: 400;
}

.rtl .settings-panel .events p {
  text-align: right;
}

.rtl .settings-panel {
  right: unset;
  left: -300px;
  -webkit-transition-property: left;
  -moz-transition-property: left;
  -o-transition-property: left;
  transition-property: left;
}

.rtl .settings-panel .chat-list {
  padding-right: 0;
}

.rtl .settings-panel .chat-list .list .profile {
  margin-right: 0;
  margin-left: 1rem;
}

.rtl .settings-panel .chat-list .list .info {
  margin-right: 0;
  margin-left: auto;
}

.rtl .settings-panel .chat-list .list .info .badge {
  margin-right: 10px;
}

.rtl .settings-panel.open {
  left: 0;
  right: unset;
}

#theme-settings .settings-close {
  top: 12px;
  background: transparent;
}

#settings-trigger {
  position: fixed;
  bottom: 40px;
  right: 30px;
  height: 45px;
  width: 45px;
  background: #0d6efd;
  z-index: 99;
  -webkit-box-shadow: 0px 0px 31px 6px rgba(0, 0, 0, 0.17);
  -moz-box-shadow: 0px 0px 31px 6px rgba(0, 0, 0, 0.17);
  box-shadow: 0px 0px 31px 6px rgba(0, 0, 0, 0.17);
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
  border-radius: 100%;
  -webkit-animation-duration: 1s;
  -moz-animation-duration: 1s;
  -ms-animation-duration: 1s;
  -o-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  -ms-animation-delay: 1s;
  -o-animation-delay: 1s;
  animation-delay: 1s;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
}

#settings-trigger i {
  color: #ffffff;
  font-size: 1rem;
  line-height: 1rem;
}

.rtl #settings-trigger {
  right: auto;
  left: 30px;
}

@media (max-width: 991px) {
  #settings-trigger {
    display: none;
  }
}

/*# sourceMappingURL=../maps/vertical-layout-dark/style.css.map */