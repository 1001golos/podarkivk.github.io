<!--
document.write('<span id="ny_date">hackerstvo.ru</span>') 
function ojidanieNG() 
{ 
  var today = new Date(); 
    
  var BigDay = new Date("December 31, 2014"); 
  var timeLeft = (BigDay.getTime() - today.getTime()); 
    
  var e_daysLeft = timeLeft / 86400000; 
  var daysLeft = Math.floor(e_daysLeft); 
    
  var e_hrsLeft = (e_daysLeft - daysLeft)*24; 
  var hrsLeft = Math.floor(e_hrsLeft); 
    
  var e_minsLeft = (e_hrsLeft - hrsLeft)*60; 
  var minsLeft = Math.floor(e_minsLeft); 
    
  var seksLeft = Math.floor((e_minsLeft - minsLeft)*60); 
    
  if (BigDay.getTime() > today.getTime() ) 
  document.getElementById("ny_date").innerHTML = '<font color=grey><b>Внимание до 31 декабря осталось</b></font>: <b>'+daysLeft+'</b> дн., <b>'+hrsLeft+'</b> ч. , <b>'+minsLeft+'</b> мин. , <b>'+seksLeft+'</b> сек.' 
  else 
  document.getElementById("ny_date").innerHTML = '<b><font color=red>С наступающим Новым годом ! </font></b>' 
} 
setInterval("ojidanieNG()", 50)
//-->