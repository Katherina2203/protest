<html>
<head>
	<link href="style.css" rel="stylesheet">
	<script src="main.js"></script>
</head>
<body>
<?php
$capitals = array("US" => "Washington", "UK" => "London", "Austria" => "Vienna");
asort($capitals);
?>

<input type="radio" value = "20px">20<br/>
<input type="radio" value = "40px">40<br/>
<input type="radio" value = "60px">60<br/>
<input type="submit" value = "send">

<div class="myfunction">
    <p>Наша служба проводит различные мероприятия по уничтожению вредных насекомых и грызунов. Все работы проводятся современными методами «горячего» и «холодного» тумана с применением технологии барьерной защиты. На услуги по выведению постельных клопов заключается договор, предоставляется документальная гарантия сроком от 6 месяцев до 1 года.</p>
</div>

<!-- Clicking on button to view date -->
<input id="btns" type="submit" value = "Click to view date">
<script>
    document.getElementById('btns').onclick = displayDate;
    function displayDate(){
        document.getElementById('test').innerHTML = Date();
    }
    
</script>
<div id="test"></div>



</body>
</html>