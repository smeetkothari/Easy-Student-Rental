/* JavaScript Media Queries */
if (matchMedia) {
	var mq = window.matchMedia("(min-width: 1124px)");
	mq.addListener(WidthChange);
	window.onresize = WidthChange(mq);
}

/* media query change 
function WidthChange(mq) {
	var msg = (mq.matches ? "more" : "less") + " than 1124 pixels";
	document.getElementById("current").firstChild.nodeValue = msg;
} 

*/

// media query change
function WidthChange(mq) {

  if (mq.matches) {
    // window width is at least 500px
    var msg = " more than 1124 pixels";
	document.getElementById("current").firstChild.nodeValue = msg;

	

  } else {
    // window width is less than 500px
    var msg = " Less than 1124 pixels";
	document.getElementById("current").firstChild.nodeValue = msg;
	


  }


}
  








//Getting location....................................................


var locate = window.location.search
//document.searchbar.burns.value = locate
//var text = document.searchbar.burns.value
//document.write("Varrrr isss " + text);

queryString = locate.substring(1);
delineate(queryString);



function delineate(str)
{
var theleft = str.indexOf("=") + 1;
var finalloc = "";
finalloc = str.substring(theleft);
document.getElementById('text-box-search').value = finalloc;
}

//document.getElementById('text-box-search').value = "hello";




//document.write("First Name is " + delineate(text));


 
 //   lolz = document.getElementById('text-box-search');
    

  //  document.write("Varrrr isss " + lolz);



