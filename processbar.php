
<?php 


//set_time_limit(0);        //ע�⣬����ǰ�ȫģʽ���벻Ҫ�򿪣�������ǰ�ȫģʽ�����ѡ����Դ� 

for ($i = 0; $i < 500; $i++) { 
   $users[] = 'Tom_' . $i;

}

$width = 500;                       //��ʾ�Ľ��������ȣ���λ px

$total = count($users);             //�ܹ���Ҫ�����ļ�¼��

$pix = $width / $total;             //ÿ����¼�Ĳ�����ռ�Ľ�������λ���� 

$progress = 0;                      //��ǰ���������� 

?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/transitional.dtd"> 

<html> 

<head> 
   <title>��̬��ʾ���������г���Ľ�����</title> 

    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" /> 

 <style> 
    body, div input { font-family: Tahoma; font-size: 9pt } 

    </style> 
    <script language="JavaScript"> 

   <!-- 

    function updateProgress(sMsg, iWidth) 
    {   

        document.getElementById("status").innerHTML = sMsg; 
        document.getElementById("progress").style.width = iWidth + "px"; 
        document.getElementById("percent").innerHTML = parseInt(iWidth / <?php echo$width; ?> * 100) + "%"; 

     } 

    //--> 

    </script>      

</head> 

   

<body> 

<div style="margin: 4px; padding: 8px; border: 1px solid gray; background: #EAEAEA; width: <?php echo $width+8; ?>px"> 

    <div><font color="gray">���½������Ķ�̬Ч���ɷ������� PHP �����Ͽͻ��� JavaScript �������ɡ�</font></div> 

    <div style="padding: 0; background-color: white; border: 1px solid navy; width: <?php echo $width; ?>px"> 

    <div id="progress" style="padding: 0; background-color: #FFCC66; border: 0; width: 0px; text-align: center;   height: 16px"></div>             

    </div> 

    <div id="status"> </div> 

    <div id="percent" style="position: relative; top: -30px; text-align: center; font-weight: bold; font-size: 8pt">0%</div> 

</div> 

<?php 

flush();    //��������͸��ͻ�������� 

foreach ($users as $user) {   

    //      �ڴ˴�ʹ�ÿ�ѭ��ģ���Ϊ��ʱ�Ĳ�����ʵ��Ӧ�����轫���滻�� 

    //      �����Ĳ�������ʱ���������û��Ҫʹ������ű��� :) 

    //      �������ﴦ�����ҵ�� 

   for ($i = 0; $i < 1000000; $i++) {   

        ;; 

     } 

?> 

<script language="JavaScript"> 

    updateProgress("���ڲ����û���<?php echo $user; ?>�� ....", <?php echo min($width,intval($progress)); ?>); 

</script> 

<?php 

   flush();    //��������͸��ͻ����������ʹ���������ִ�з������������ JavaScript ���� 

   $progress += $pix;      

}   //end foreach 

//   ��󽫽��������ó����ֵ $width��ͬʱ��ʾ������� 

?> 

<script language="JavaScript"> 

    updateProgress("������ɣ�", <?php echo $width; ?>); 

</script> 

<?php 

flush(); 

?> 

</body> 

</html>