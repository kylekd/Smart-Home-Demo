<?php
// send a JSON message to website 
// header('Content-Type: application/json');

// ket noi database
$server = "localhost";
$user = "kyle";
$password ="123456";
$dbname = "smart_home";
$conn = mysqli_connect($server,$user,$password,$dbname);

// Check connection
if($conn === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
//kiem tra ket noi

// set du lieu cho database
if(isset($_POST['Value_bt1']))
{
 // Getting the value of button
 $Value_bt1 = $_POST['Value_bt1'];
 $sql = "update myhome set STATE = '$Value_bt1' where ID =1 ";
 mysqli_query($conn,$sql);
  // Sending Response
 echo "Success";
}
if(isset($_POST['Value_bt2']))
{
 // Getting the value of button
 $Value_bt2 = $_POST['Value_bt2'];
 $sql = "update myhome set STATE = '$Value_bt2' where ID =1 ";
 mysqli_query($conn,$sql);
  // Sending Response
 echo "Success";
}   
if(isset($_POST['Value_bt3']))
{
 // Getting the value of button
 $Value_bt3 = $_POST['Value_bt3'];
 $sql = "update myhome set STATE = '$Value_bt3' where ID =2 ";
 mysqli_query($conn,$sql);
  // Sending Response
 echo "Success";
}
if(isset($_POST['Value_bt4']))
{
 // Getting the value of button
 $Value_bt4 = $_POST['Value_bt4'];
 $sql = "update myhome set STATE = '$Value_bt4' where ID =2 ";
 mysqli_query($conn,$sql);
  // Sending Response
 echo "Success";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Smart House Control</title>
        <link rel='stylesheet' href='style.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css'>

    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <body>

    <input type='checkbox' id='check'>
    <!--header area start-->
    <header>
        <label for='check'>
            <i class='fas fa-bars' id='sidebar_btn'></i>
        </label>
        <div class = 'left_area'>
            <h3>Control and Monitor</h3>
        </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class='sidebar'>
        <center>
            <img src='home.png' class='home' width="200" height="200" alt=''>
            <h4>Smart home control</h4>
        </center>
        <a href="index.html"><i class="fas fa-home"></i><span>Dashboard</span></a>
        <a href="monitor.html"><i class="fas fa-desktop"></i><span>Monitor</span></a>
        <a href="SetValue.php"><i class="fas fa-sliders-h"></i><span>Control</span></a>
        <a href="member.html"><i class="fas fa-user-friends"></i><span>Member</span></a>
    </div>
    <!--sidebar end-->

    <div class='content'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <br>
        <center>
		<!-- Rounded Button-->
        <div class='wrapper'>
        <h1>Control Panel</h1>
            <h2>Light Control</h2>
            <img id="myImage1" src="lightbulb-off.png" style="width:150px">
            <br>
		    <label class="button">
			    <button class="button" id="bt1" value="On" onclick="document.getElementById('myImage1').src='lightbulb-on.png'">On</button>			
		    </label>
            <label class="button">
			    <button class="button" id="bt2" value="OFF" onclick="document.getElementById('myImage1').src='lightbulb-off.png'">Off</button>			
		    </label>
		    </label>

		    <h2>Fan Control</h2>
            <img id="myImage2" src="fan.png" style="width:100px">
            <br>
		    <label class="button">
			    <button class="button" id="bt3" value="On" onclick="document.getElementById('myImage2').src='fan-gif.gif'">On</button>			
		    </label>
            <label class="button">
			    <button class="button" id="bt4" value="OFF" onclick="document.getElementById('myImage2').src='fan.png'">Off</button>			
		    </label>
    </div>
<script>
    let bt1 = document.getElementById("bt1");
    bt1.addEventListener("click", () => {
                let Value_bt1 = bt1.value;
                $.post('<?php echo  htmlspecialchars($_SERVER["PHP_SELF"]); ?>', {
                    Value_bt1: Value_bt1
                }, (response) => {
                    // response from PHP 
                    console.log(response);
                });
            });

    let bt2 = document.getElementById("bt2");
    bt2.addEventListener("click", () => {
                let Value_bt2 = bt2.value;
                $.post('<?php echo  htmlspecialchars($_SERVER["PHP_SELF"]); ?>', {
                    Value_bt2: Value_bt2
                }, (response) => {
                    // response from PHP 
                    console.log(response);
                });
            });
    let bt3 = document.getElementById("bt3");
    bt3.addEventListener("click", () => {
                let Value_bt3 = bt3.value;
                $.post('<?php echo  htmlspecialchars($_SERVER["PHP_SELF"]); ?>', {
                    Value_bt3: Value_bt3
                }, (response) => {
                    // response from PHP 
                    console.log(response);
                });
            });

   
    let bt4 = document.getElementById("bt4");
    bt4.addEventListener("click", () => {
                let Value_bt4 = bt4.value;
                $.post('<?php echo  htmlspecialchars($_SERVER["PHP_SELF"]); ?>', {
                    Value_bt4: Value_bt4
                }, (response) => {
                    // response from PHP 
                    console.log(response);
                });
            });

</script>

 </body>
</html>