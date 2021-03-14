var i = 0;
var images = [];
var time = 5000;

images[0] = "public/images/bosschair.jpg"
images[1] = "public/images/rtx30series.jpg"
images[2] = "public/images/huawei.jpg"

function changeImage()
{
	document.slideshow.src = images[i];
	if(i < images.length -1)
	{
		i++;
	}
	else
	{
		i = 0;
	}
	
	setTimeout("changeImage()", time);
}

function forceChangeImage(n)
{
	document.slideshow.src = images[i];
	if( i < images.length - 1)
	{
		i += 1
	}
	else
	{
		i = 0;
	}
}
window.onload = changeImage;