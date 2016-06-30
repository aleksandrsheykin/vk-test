<!DOCTYPE html>
<!-- Ïîäêasdfasdfasdfjqueryasdf -->
<html>
<head>
<!-- Ïîäêëþ÷àåì jquery -->
<script src='http://code.jquery.com/jquery-1.7.1.js'></script>
<!-- Ïîäêëþ÷àåì VK-->
<script src="http://vk.com/js/api/xd_connection.js?2" type="text/javascript"></script>
<!-- Ïîäêëþ÷àåì ñêðèïò ðåãóëèðîâêè âûñîòû-->
<script src="vk_height.js" type="text/javascript"></script>
<!-- Ñêðèïò ïîëó÷åíèÿ ôîòîê äðóçåé è íåïîñðåäñòâåííî èõ âûâîä-->
<script>
// Ôóíêöèÿ ïîëó÷åíèÿ äðóçåé è âûâîäà èõ íà ýêðàí
function doIt(){
        /*
        VK.api('ìåòîä', {ïàðàìåòð: "çíà÷åíèå"}, callback ôóíêöèÿ{
        // ðàáîòàåì ñ ïîëó÷åííûìè äàííûìè
        });
        */

	VK.api("friends.get", {fields: "photo_medium"}, function(data) { 
		// Äåéñòâèÿ ñ ïîëó÷åííûìè äàííûìè 
		for(c=0;c<data.response.length;c++){
			$("body").append("<img src='"+data.response[c].photo_medium+"'>");
		}
	});
}
$(document).ready(function(){
	doIt();
});
</script>
</head>
<body style='text-align:center;padding-top:50px;' id='body'>
</body>
</html>
