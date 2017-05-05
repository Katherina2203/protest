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


 <p id="severalEvents">Проверка нескольких событий на одном элементе</p>

<script>
    const sE = document.getElementById('severalEvents');
    sE.addEventListener('click', function(e){
        setTimeout(function(){
          
             console.log('clicked');
             sE.style.backgroundColor='red';
        });
    });
    sE.addEventListener('click', function(e){
        const element = e.target;
       console.log('another');
       element.style.background='blue';
    });
   
    
</script>


 <p id="severalEvents2">Cобытий на одном элементе</p>

 <script>
   
    document.getElementById('severalEvents2').addEventListener('click', function(e){
        const element = e.target;
        console.log(e.pageX, e.pageY);
     
       if(element.style.background === 'aqua'){
           element.style.background = ''
       }else{
           element.style.background = 'aqua'
       }
    });
   
    
</script>





<ul class="sortable">
    <li>first <mark>Ilove</mark></li>
    <li>second</li>
    <li>third</li>
    <li>forth</li>
</ul>
<script>
//show the text li after click 
const lists = document.querySelector('ul.sortable');
    
    lists.addEventListener('click', e=> {
        const target = e.target,
        parent = target.closest('li');
        
        if(target.tagName === 'LI' || parent){
            console.log(parent ? parent.textContent : target.textContent);
        }
    });</script>

<div class="accordion-test">
<p>Accordion:</p>
<ul class="accordion">
    <li>First
        <ul>
            <li>1.1</li>
            <li>1.2</li>
            <li>1.3</li>
        </ul>
    </li>
    <li>Second
        <ul>
            <li>2.1</li>
            <li>2.2</li>
            <li>2.3</li>
        </ul>
    </li>
    <li>Third
        <ul>
            <li>3.1</li>
            <li>3.2</li>
            <li>3.3</li>
        </ul>
    </li>
    <li>Forth
        <ul>
            <li>4.1</li>
            <li>4.2</li>
            <li>4.3</li>
        </ul>
    </li>
</ul>
<script>
    //accordion
    (function(){
    const list = document.querySelector('.accordion'),
          activeClass = 'active';
    let currentActiveElement;
    
    if(!list){
        throw new Error('There is no such element');
    }
    
    list.addEventListener('click', (event) => {
        const target = event.target;
        
        if(target.tagName !== 'LI'){
            return ;
        }
       // const activeElement = list.querySelector('.' + activeClass);
        
        if(currentActiveElement){
            currentActiveElement.classList.remove(activeClass);
        }
       
        
        target.classList.add(activeClass);
        currentActiveElement = target;
    });
    })();
</script>
</div>
</body>
</html>