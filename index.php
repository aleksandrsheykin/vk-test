<!DOCTYPE html>
<html>
<head>
    <script src='http://code.jquery.com/jquery-1.7.1.js'></script>
    <script src="http://vk.com/js/api/xd_connection.js?2" type="text/javascript"></script>
    <script src="js.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        // ������� ��������� ������ � ������ �� �� �����
        function doIt(){
                /*
                VK.api('�����', {��������: "��������"}, callback �������{
                // �������� � ����������� �������
                });

            VK.api("friends.get", {fields: "photo_medium"}, function(data) { 
                // �������� � ����������� ������� 
                for(c=0;c<data.response.length;c++){
                    $("body").append("<img src='"+data.response[c].photo_medium+"'>");
                }
            });                
                
                */
                
            VK.init(function() { 
                //alert('good');
                VK.api("wall.post", {"message": "Hello!"}, function (data) {
                    alert("Post ID:" + data.response.post_id);
                });
            }, function() { 
                alert('failed');
            }, '5.53');

        }
        $(document).ready(function(){
            doIt();
            //SetQuestion();
            
        });
    </script>
</head>
<body style='text-align:center; padding-top:50px;' id='body'>
    <div class="center" id="center">
        <p id="question"></p>
        <input type="hidden" id="question_number" value="0" />
        <div class="button" onClick="Answer(1);">��</div>
        <div class="button" onClick="Answer(0);">���</div>
        <p id="paginator">1/80</p>
    </div>
</body>
</html>