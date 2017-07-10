<html>
<head>
<title>Untitled Document</title>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.6.2.min.js">
</script>
<script type="text/javascript">
$(document).ready(function(){
$("#submit").submit(function() {
var name = $('#name').val();
$.ajax({
type: "POST",
url: "ajax.php",
data: "name="+ name ,
success: function(){
alert("sucess");
}
});

});
});
</script>
</head>

<body>
<form action="" method="post">
Name:<input type="text" name="name" id="name" /><br />
<input type="submit" name="submit" id="submit" />
</form>
</body>
</html>