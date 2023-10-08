<?php include 'include/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
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
<style media="screen">
body,html {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  width: 100%;
  height: 100%;
}
.section-top {
  width: 100%;
  height: 100%;
  overflow: hidden;
  position: relative;
}
.content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  /* text-transform: uppercase; */
  text-align: center;
}
.content h1 .demo{
  background-color: red;
  color: green;
}
</style>
<body style="background-color: #e8e8e8;">
  <div class="section-top">
    <div class="content">
      <img src="<?php echo $settings['site_url']; ?>assets/images/<?php echo $settings['logo_line']; ?>" class="img-fluid mb-3" width="300" alt="img">
      <img src="<?php echo $settings['site_url']; ?>assets/images/letsgo.gif" class="img-fluid" width="500" alt="img">
      <h1 class="demo" id="demo"></h1>
      <h3>Maintenance Mode</h3>
      <h5>We'll be back soon 🥳</h5>
    </div>
  </div>

  <script>
  // Set the date we're counting down to
  var countDownDate = new Date('Oct 16, 2023 00:00:00').getTime();

  // Update the count down every 1 second
  var x = setInterval(function() {

  	// Get today's date and time
  	var now = new Date().getTime();

  	// Find the distance between now and the count down date
  	var distance = countDownDate - now;

  	// Time calculations for days, hours, minutes and seconds
  	var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  	var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  	// Display the result in the element with id="demo"
  	document.getElementById('demo').innerHTML = days + ' Days ' + hours + ' Hours '
  	+ minutes + ' Min ' + seconds + ' Sec ';

  	// If the count down is finished, write some text
  	if (distance < 0) {
  		clearInterval(x);
  		document.getElementById('demo').innerHTML = 'UPLOADING FILES...';
  	}
  }, 1000);
  </script>
</body>
</html>
