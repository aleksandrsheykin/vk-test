VK.init(
  function(){
});
    function autosize(width) {
        //��������� ������� body �� �������.
        if (!document.getElementById('body')) {
			alert('error');
            return;
        }
        // ������� �� ��������� �� ������
        if (typeof VK.callMethod != 'undefined') {
        /*
        �������� ������� vk js api ��� ���������� �����.
        VK.callMethod('�������', ���������)
        � ������ ������ � ��� - VK.callMethod('���������_��������_����', ������, ������);
        ��� �� ��������� ��� 60 �������� ��� �� ���� ��������� ����������.
        */
            VK.callMethod('resizeWindow', 840, document.getElementById('body').clientHeight + 60);
        } else {
	    alert('error #2');
        }
    }
    $(document).ready( function(){
        //�������� ������� ����������� ������ ������ ��� �������.
        setInterval('autosize(607)', 500);
    });