<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <script language="javascript">
function dateDiff(){

var myVar1 = document.getElementById('date1').value;//prompt("Enter a start date: ")
var myVar2 = document.getElementById('date2').value;//prompt("Enter a end date: ")

var first_date = Date.parse(myVar1)
var last_date = Date.parse(myVar2)
var diff_date =  first_date - last_date;

var num_years = diff_date/31536000000;
var num_months = (diff_date % 31536000000)/2628000000;
var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;

var result ="";

result +=(" " + Math.floor(num_years) + " ปี\n");
result +=(" " + Math.floor(num_months) + " ดือน\n");
result +=(" " + Math.floor(num_days) + " วัน");
alert(result);
//-->
}

    </script>

</head>
<body onload="">
    <form id="form1" runat="server">
        <div>
            วันที่(yyyy/mm/dd) <input type="text" id="date1" value="2009/12/01" />
            วันที่(yyyy/mm/dd)<input type="text" id="date2" value="2008/02/01" />
            <input type="button" id="submit" onclick="dateDiff()" value="calculate" />
        </div>
    </form>
</body>





</html>
