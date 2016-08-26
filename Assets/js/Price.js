function Pric()
{
	var esd=document.getElementById("esd");
	var pr=document.getElementById("pr");
document.getElementById("prmsg").innerHTML="";


		if(esd.value=="Exchange" || esd.value=="Donate")
		{
			pr.value="N/A";
					pr.text="N/A";
					pr.placeholder="";



				document.getElementById("pr").disabled=true;
			}

			if(esd.value=="Sell")
			{
				document.getElementById("pr").disabled=false;
				pr.value="";
					pr.text="";
					pr.placeholder="Enter the price";


				}

	}

function pp()
{
	document.getElementById("pr").disabled=true;
	}




