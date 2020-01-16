//sve funkcije

function sortTable(kriterijum) {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("prvaTabela");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  

  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[kriterijum];
      y = rows[i + 1].getElementsByTagName("TD")[kriterijum];
      //check if the two rows should switch place:
      if(kriterijum==2){
        if (parseInt(x.innerHTML) > parseInt(y.innerHTML) ){
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }else{
      if (x.innerHTML > y.innerHTML) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}



function stateChanged(){ 

if (xmlHttp.readyState==4){ 
document.getElementById("livesearch").innerHTML=xmlHttp.responseText;
document.getElementById("livesearch").style.border="1px solid";
document.getElementById("livesearch").style.display="block";
} 
}


function GetXmlHttpObject(){
var xmlHttp=null;
try {
// Firefox, Opera 8.0+, Safari
xmlHttp=new XMLHttpRequest();
} catch (e) {
//Internet Explorer
try {

xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
} catch (e) {
xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
}
}
return xmlHttp;
}


function place(ele){ 
document.getElementById('txt').value = ele.innerHTML;
document.getElementById("livesearch").style.display = "none";
}

function obrisiIzBaze(naziv){
 xmlHttp=GetXmlHttpObject()
 if (xmlHttp==null){
  alert ("Browser does not support HTTP Request");
  return;
  }

 var url="phpUcitavanjaIBrisanja\obrisi.php";
 url=url+"?unos="+naziv;
 //url=url+"&sid="+Math.random();
 xmlHttp.onreadystatechange=stateChanged; 
 xmlHttp.open("GET",url,true);
 xmlHttp.send(null);
 }

 function stateChanged(){ 
 
 if (xmlHttp.readyState==4){ 
  document.getElementById("livesearch").innerHTML=xmlHttp.responseText;//code
  document.getElementById("livesearch").style.border="1px solid";
  document.getElementById("livesearch").style.display="block";
  } 
}



