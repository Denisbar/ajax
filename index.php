<html>
<head>
<meta charset=utf-8>
<style type="text/css">
.messagebox{
 position:absolute;
 width:100px;
 margin-left:30px;
 border:1px solid #c93;
 background:#ffc;
 padding:3px;
}
.messageboxok{
 position:absolute;
 width:auto;
 margin-left:30px;
 border:1px solid #349534;
 background:#C9FFCA;
 padding:3px;
 font-weight:bold;
 color:#008000;
}
.messageboxerror{
 position:absolute;
 width:auto;
 margin-left:30px;
 border:1px solid #CC0000;
 background:#F7CBCA;
 padding:3px;
 font-weight:bold;
 color:#CC0000;
}
</style>
</head>

<body>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script language="javascript">
      
      $(document).ready(function()
      {
$("#username").blur(function()
{
$("#msgbox").removeClass().addClass('messagebox').text('Проверка...').fadeIn("slow");
//Проверить существует ли имя
$.post("user_availability.php",{ user_name:$(this).val() } ,function(data)
{
if(data=='no') //если имя не доступно
{
$("#msgbox").fadeTo(200,1,function() //начнет появляться сообщение
{ 
$(this).html('Это имя уже занято').addClass('messageboxerror').fadeTo(900,1);
}); 
}
else
{
$("#msgbox").fadeTo(200,0.1,function() 
{ 
//тут прописывается сообщение о доступности имени
$(this).html('Имя доступно для регистрации').addClass('messageboxok').fadeTo(900,1); 
});
}

});

});
});
</script>


<div >
 User Name : <input name="username" type="text" id="username" value="" maxlength="15" />
 <span id="msgbox" style="display:none"></span>
</div>


</body>
</html>