function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
    // document.getElementById("flipkart-navbar").style.width = "50%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "rgba(0,0,0,0)";
}



function localFilename(url)	// creating a counter file
{
	var x = url.lastIndexOf("/");
	url = url.slice(x + 1);
	return url;		
}


function changeImage(element)
{ 
	var v = element.getAttribute("src");
	v = localFilename(v);   // for a local filename

	if(v == "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxr7imsyYNfZNJCRGLW7rUM73GvJYpADsfmMqxT9zgBYsqGFHP")
		v = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrYFXLuYdSlnvzdzSSZC_udJlIPNUbPY8ty5QQFS7Mu2nKJotExQ";
	else
		v = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrYFXLuYdSlnvzdzSSZC_udJlIPNUbPY8ty5QQFS7Mu2nKJotExQ";

	element.setAttribute("src", v);	

}

function changeBackground()
{
	var z = new Image();
	z.src = "http://www.xul.fr/images/road.jpg";
	document.body.background=z.src;
} 
