<html>
<head>
<script language ="javascript">
var arr=new Array("http://cruises.local/images/sbi.png","http://cruises.local/images/sbi2.jpg","http://cruises.local/images/Screenshot from 2017-05-24 09-44-57.png","http://cruises.local/images/Screenshot from 2017-06-15 10-22-18.png");
var j=0;
function changeImage()
{
	if(j<4){   document .images [0].src=arr[j];
	j++;
	}
	else   {      j=0;   }
}
var v;
function Start()
{
	v=setInterval ("changeImage()",1000);
}
function Stop()
{
	clearInterval(v);
}
</script>
</head>
<body onload="Start()">
    <form id="form1" runat="server">
    <div>  
    </div>
 <img src="http://cruises.local/images/sbi.png" witdth="100px" height="100px"/>
 <input type="button" id="btn" onclick="Stop()"  value="Stop"
    </form>
</body>
</html>