<!DOCTYPE html>
<!-- ����asdfasdfasdfjqueryasdf -->
<html>
<head>
<!-- ���������� jquery -->
<script src='http://code.jquery.com/jquery-1.7.1.js'></script>
<!-- ���������� VK-->
<script src="http://vk.com/js/api/xd_connection.js?2" type="text/javascript"></script>
<!-- ���������� ������ ����������� ������-->
<script src="vk_height.js" type="text/javascript"></script>
<!-- ������ ��������� ����� ������ � ��������������� �� �����-->
<script>
// ������� ��������� ������ � ������ �� �� �����
function doIt(){
        /*
        VK.api('�����', {��������: "��������"}, callback �������{
        // �������� � ����������� �������
        });
        */

	VK.api("friends.get", {fields: "photo_medium"}, function(data) { 
		// �������� � ����������� ������� 
		for(c=0;c<data.response.length;c++){
			$("body").append("<img src='"+data.response[c].photo_medium+"'>

");
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