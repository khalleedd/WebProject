var inp1 = document.getElementById("t1"),
	inp2 = document.getElementById("t2"),
	inp3 = document.getElementById("t3"),
	submit = document.getElementById("submit"),
	ul1   = document.getElementById("ul1"),
	ul2   = document.getElementById("ul2"),
	lis   = document.getElementById("lis"),
	lis2   = document.getElementById("lis2"),
	bef   = document.getElementById("before"),
	bef2   = document.getElementById("before2"),
	showall = document.getElementById("showall"),
	vip = document.getElementById("vip"),
	hidbtn = document.getElementById("hidbtn"),
	rads = document.querySelectorAll("input[type='radio']"),
	li    = document.querySelectorAll(".ul1 li");

window.onload = function(){for(var i =0;i<rads.length;i++){rads[i].checked = false;}}
inp1.onkeyup = function()
{
	var temp = inp2.value
	for(var i = 0 ; i <li.length;i++)
	{
		if(li[i].innerHTML.indexOf(inp1.value) > -1)
		{
			bef.style.display = "block";
			lis.style.display = "block";
			li[i].style.display = "block";
			li[i].addEventListener('click',function(){
				inp2.value = temp;
				inp1.value = this.innerHTML;
				bef.style.display = "none";
				lis.style.display = "none";
			});
		}
		else
		{
			li[i].style.display = "none";
		}
		if(inp1.value == "")
		{
			bef.style.display = "none";
			lis.style.display = "none";
			li[i].style.display = "none";
		}
	}
}	
inp2.onkeyup = function()
{
	var temp = inp1.value
	for(var i = 0 ; i <li.length;i++)
	{
		if(li[i].innerHTML.indexOf(inp2.value) > -1)
		{
			bef2.style.display = "block";
			lis2.style.display = "block";
			li[i].style.display = "block";
			li[i].addEventListener('click',function(){
				inp1.value = temp;
				inp2.value = this.innerHTML;
				bef2.style.display = "none";
				lis2.style.display = "none";
			});
		}
		else
		{
			li[i].style.display = "none";
		}
		if(inp2.value == "")
		{
			bef2.style.display = "none";
			lis2.style.display = "none";
			li[i].style.display = "none";
		}
	}
}
showall.onclick = function()
{
	vip.style.display = "block";
	for(var i = 0 ;i<rads.length;i++)
	{
		rads[i].style.display="block";
		rads[i].addEventListener('click',function(){
			vip.style.display="none";
			inp3.value=this.value;
		});
	}
}