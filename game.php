

<html>
<head>
<style type="text/css">
#wrapper {
	
	width:950px;
	 height:auto;
	 padding: 13px;
	 margin-right:auto;
	 margin-left:auto;
	 margin-top: 200px;
	 background-color:#fff;
}

body, html {
    background-attachment: fixed ;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
	

}
</style>
</head>

<body background="giphy.gif">

<div id="wrapper">

<center><font face="Tahu!" size="55"> Game Tebak Tebakan!</font></center>
	<a href="index.php">
  			<img border="0" id="button2" src="menu1.png"></a>
	<a href="index2.php">
  			<img border="0" id="button2" src="menu2.png"></a>
<br />
<br />

</div><!--- end of wrapper div --->

</body>
<script>
myAudio = new Audio('bg2.mp3'); 
myAudio.addEventListener('ended', function() {
    this.play();
}, true);
myAudio.play();
</script>
</html>