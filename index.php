<?php
session_start();
require 'gmail.php';
//Create a session of username and logging in the user to the chat room
if(isset($_POST['password'])){

//Unset session and logging out user from the chat room

if ($_POST['password'] == "567" && $_POST['username'] != null) {
 $_SESSION['username']=trim(htmlentities(trim($_POST['username']), ENT_NOQUOTES, 'utf-8'));

  $_SESSION['password']=htmlspecialchars($_POST['password']);
$_SESSION['function']="onload='myFunctions();'";
 $_SESSION['functionget']="<script src='chat.js'></script>";
 $_SESSION['clear']=null;
$mail->addAddress('mdhassandbg7352@gmail.com', $_SESSION['username']);     // Add a recipient
 $mail->addAddress('Inzemamhaq05@gmail.com', $_SESSION['username']); 

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Roboticeye';
    $mail->Body    = $_SESSION['username']." is online
<br><a href='http://roboticeye.tk'>click here</a>

";

   $mail->send();  

} elseif($_POST['password']=="654321") { 
 $_SESSION['username']=$_POST['username']; 
  $_SESSION['password']=$_POST['password'];
$_SESSION['function']="onload='myFunctions();'";
 $_SESSION['functionget']="<script src='chat.js'></script>";
 $_SESSION['clear']="<div class='actions'> <i name='clear'  id='clear'>
<img  src='clear.png'   height=25px width=25px>
                </i> 
              </div>";


}

elseif($_POST['password']=="7352") { 
 $_SESSION['username']=$_POST['username']; 
  $_SESSION['password']=$_POST['password'];
$_SESSION['function']="onload='myFunctions();'";
 $_SESSION['functionget']="<script src='chat.js'></script>";
 $_SESSION['clear']="<div class='actions'> <i name='clear'  id='clear'>
<img  src='clear.png'   height=25px width=25px>
                </i> 
              </div>";

}


else
{
 unset($_SESSION['password']);
 echo "<div class='danger'>
  <p><strong>Error!</strong> incorrect passcode </p>
</div>";

}
}

if(isset($_GET['logout'])){
	unset($_SESSION['password']);
	header('Location:index.php');
}

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  
<meta name="theme-color" content="#000000" />
<meta name="mobile-web-app-capable" content="yes">
<meta property="og:url" content="http://roboticeye
tk/" />
 <meta property="og:type" content="Robotic eye" /> 
<meta property="og:title" content="Roboticeye" /> 
<meta property="og:description" content="Roboticeye" /> 
<meta property="og:image" content="http://roboticeye.tk/robotic.png" />
	<title>Robotic Eye</title>
    <link rel="shortcut icon" href="hello.png">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.1.2/css/material-design-iconic-font.min.css" />
<link rel="stylesheet" href="https://rawgit.com/marvelapp/devices.css/master/assets/devices.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700,300" />
<link rel="stylesheet" href="newcss2.php" />
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="Image-Upload-Preview-Plugin-With-jQuery-Bootstrap-img-upload/dist/css/bootstrap-imageupload.css" rel="stylesheet">
	<script type="text/javascript" src="jquery-1.10.2.min.js" ></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
<style>
body{
    background-color: #000000;
}

</style>

<?php if(isset($_SESSION['password'])) { ?>
   <?php echo $_SESSION['functionget']; ?>
</head>
<?php echo "
<body style='bgcolor: #1a598c;' ".$_SESSION['function'];  ?>


	
 <div class="screen-container">        <div class="chat">
          <div class="chat-container" style"background: #1a598c;">
            <div class="user-bar">
              <div class="back"><a  href="?logout">
                <i class="zmdi zmdi-arrow-left"></i></a>
              </div>
              <div class="avatar">
                <img src="robotic.png" alt="Avatar">
              </div>
              <div class="name">
                <span>Robotic Eye</span>
                <span class="status">online</span>
              </div><div class="actions more">
                <i class="zmdi zmdi-more-vert">
             </i>
              </div>  
           <?php echo $_SESSION['clear']; ?>


              <div class="actions attachment"> 

  <i data-toggle="modal" data-target="#myModal" class="zmdi zmdi-attachment-alt" ></i>
              </div>
      
            </div>

<div id="snackbar">This page is underconstruction</div>

	<?php } ?>

	
<div class='main' >
<?php //Check if the user is logged in or not ?>
<?php if(isset($_SESSION['password'])) { ?>

<div id="preloader" >
  <div id="loader"></div>
</div> 
  <div style="display:none;" id="myDiv" class="animate-bottom">

<div  class="conversation">
<div>
   <div class="conversation-container"  id='result'>






</div>
</div>

  
</div></div>

<div class="fixed-footer">

	<form method="post" onsubmit="return submitchat();" class="conversation-compose" >
                <div class="emoji" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" id="smiley" x="3147" y="3209"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.153 11.603c.795 0 1.44-.88 1.44-1.962s-.645-1.96-1.44-1.96c-.795 0-1.44.88-1.44 1.96s.645 1.965 1.44 1.965zM5.95 12.965c-.027-.307-.132 5.218 6.062 5.55 6.066-.25 6.066-5.55 6.066-5.55-6.078 1.416-12.13 0-12.13 0zm11.362 1.108s-.67 1.96-5.05 1.96c-3.506 0-5.39-1.165-5.608-1.96 0 0 5.912 1.055 10.658 0zM11.804 1.01C5.61 1.01.978 6.034.978 12.23s4.826 10.76 11.02 10.76S23.02 18.424 23.02 12.23c0-6.197-5.02-11.22-11.216-11.22zM12 21.355c-5.273 0-9.38-3.886-9.38-9.16 0-5.272 3.94-9.547 9.214-9.547a9.548 9.548 0 0 1 9.548 9.548c0 5.272-4.11 9.16-9.382 9.16zm3.108-9.75c.795 0 1.44-.88 1.44-1.963s-.645-1.96-1.44-1.96c-.795 0-1.44.878-1.44 1.96s.645 1.963 1.44 1.963z" fill="#7d8489"/></svg>
                </div>
                <input type='text' name='chat' id='chatbox' class="input-msg" autocomplete="off" placeholder="ENTER CHAT HERE" /></input>
                <div class="photo">


                  <i class="zmdi zmdi-camera" onclick="myFunction()"></i>
                </div>
                <button class="send" name='send' id='send'>
                    <div class="circle">
                      <i class="zmdi zmdi-mail-send"></i>
                    </div>
                  </button>
              </form>

</div>





  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
             <div class="imageupload panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Upload Image</h3>
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default active">File</button>
                        <button type="button" class="btn btn-default">URL</button>
                    </div>
                </div>
                <div class="file-tab panel-body">
                    <label class="btn btn-default btn-file">
                        <span>Browse</span>
                        <!-- The file is stored here. -->
                        <input type="file" name="image-file">
                    </label>
                    <button type="button" class="btn btn-default">Remove</button>
                </div>
                <div class="url-tab panel-body">
                    <div class="input-group">
                        <input type="text" class="form-control hasclear" placeholder="Image URL">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                    <button type="button" class="btn btn-default">Remove</button>
                    <!-- The URL is stored here. -->
                    <input type="hidden" name="image-url">
                </div>
            </div>

            <!-- bootstrap-imageupload method buttons. -->
            <button type="button" id="imageupload-disable" class="btn btn-danger">Disable</button>
            <button type="button" id="imageupload-enable" class="btn btn-success">Enables</button>
            <button type="button" id="imageupload-reset" class="btn btn-primary">Reset</button>
<input type="button" id="imageupload-reset" class="btn btn-primary">send</button>

        </div>
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

    
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="Image-Upload-Preview-Plugin-With-jQuery-Bootstrap-img-upload/dist/js/bootstrap-imageupload.js"></script>

<!--
        <script>
            var $imageupload = $('.imageupload');
            $imageupload.imageupload();

            $('#imageupload-disable').on('click', function() {
                $imageupload.imageupload('disable');
                $(this).blur();
            })

            $('#imageupload-enable').on('click', function() {
                $imageupload.imageupload('enable');
                $(this).blur();
            })

            $('#imageupload-reset').on('click', function() {
                $imageupload.imageupload('reset');
                $(this).blur();
            });
        </script>
-->

<script>
    function navSlide() {
  var objDiv = $(window).scrollTop();

  if (objDiv >= offset_val) { // the detection!
   objDiv.scrollTop = objDiv.scrollHeight;
  } else {
    $nav_header.removeClass('is-sticky');
  }
}
</script>

<script>
$("#result").scrollTop($("#result")[0].scrollHeight);
</script>


<script>


// Javascript function to submit new chat entered by user
function submitchat(){
		if($('#chat').val()=='' || $('#chatbox').val()==' ') return false;
		$.ajax({
			url:'chat.php',
			data:{chat:$('#chatbox').val(),ajaxsend:true},
			method:'post',
			success:function(data){
				$('#result').html(data); // Get the chat records and add it to result div
				$('#chatbox').val(''); //Clear chat box after successful submition
				document.getElementById('result').scrollTop=document.getElementById('result').scrollHeight; // Bring the scrollbar to bottom of the chat resultbox in case of long chatbox
			}
		})
		return false;
};

// Function to continously check the some has submitted any new chat
setInterval(function(){
	$.ajax({
			url:'chat.php',
			data:{ajaxget:true},
			method:'post',
			success:function(data){
				$('#result').html(data);
			}
	})
},1000);

// Function to continously check the some has submitted any new chat
setInterval(function(){
	$.ajax({
			url:'chat.php',
			data:{ajaxget:true},
			method:'post',
			success:function(data){
				$('#result').html(data);
			}
	})
},1000);

// Function to chat history
$(document).ready(function(){
	$('#clear').click(function(){
		if(!confirm('Are you sure you want to clear chat?'))
			return false;
		$.ajax({
			url:'chat.php',
			data:{username:"<?php echo $_SESSION['username'] ?>",ajaxclear:true},
			method:'post',
			success:function(data){
				$('#result').html(data);
			}
		});
	});
});





</script>
<script>

window.setInterval(function() {
	var elem = document.getElementById('result');
 elem.scrollTop = elem.scrollHeight;  }, 10);
 </script>

<?php } else { ?>

<center>
<div class='userscreen'><center>

<img src="hello.png" height=150px width=150px>
</center>
	<form method="post">
	    	<input type='text' class='binput' placeholder="ENTER YOUR NAME HERE" name='username' /><BR>
		<input type='password' class='binput' placeholder="ENTER YOUR PASSCODE HERE" name='password' />
<center>
    
		<input type='submit' class='bbutton' value='START CHAT' /></center>


	</form>

</div>
<center><h3 class='bbutton' >passcode:-567</h3></center>

<?php } ?>

</div>
</body>
</html>
