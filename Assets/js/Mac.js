function Macc()
{
	var nme=document.getElementById("nme").disabled=true;
	var cne=document.getElementById("cne").disabled=true;
	var cpwde=document.getElementById("cpwde").disabled=true;
	var npwde=document.getElementById("npwde").disabled=true;
	var cnpwde=document.getElementById("cnpwde").disabled=true;
	var sc=document.getElementById("sc").disabled=true;
}

function Edt()
{
	var nme=document.getElementById("nme").disabled=false;
	var cne=document.getElementById("cne").disabled=false;
	var cpwde=document.getElementById("cpwde").disabled=false;
	//var npwde=document.getElementById("npwde").disabled=false;
	//var cnpwde=document.getElementById("cnpwde").disabled=false;
	var sc=document.getElementById("sc").disabled=false;
}


function Namee()
{
	var nme=document.getElementById("nme");
	var nmsge=document.getElementById("nmsge");
	nmsge.innerHTML="";
	document.getElementById("sc").disabled=false;
	if(nme.value=="")
	{
		nmsge.innerHTML="<font color=red><b>Name cant be empty</b></font>";
		document.getElementById("sc").disabled=true;
		}
		else
		{
			document.getElementById("sc").disabled=false;
			}

	for(var i=0;i<nme.value.length;i++)
			{
				var a=nme.value.charCodeAt(i);
				if(!((a>=65 && a<=91) || (a>=97 && a<=123) || (a==32)))
				{
					nmsge.innerHTML="<font color=red><b>please enter only character</b></font>";
					document.getElementById("sc").disabled=true;
				}


		}


	}


	function Contacte()
	{
		var cne=document.getElementById("cne");
		var cmsge=document.getElementById("cmsge");
		cmsge.innerHTML="";
		document.getElementById("sc").disabled=false;
if(cne.value.length<=10)
{
	if(cne.value.length<10)
			 document.getElementById("sc").disabled=true;
		for(var i=0;i<cne.value.length;i++)
		{
			var a=cne.value.charCodeAt(i);
			if(!(a>=48 && a<=57))
			{
				cmsge.innerHTML="<font color=red><b>please enter only digits</b></font>";
					document.getElementById("sc").disabled=true;
				}
			}
}
else
{
				cmsge.innerHTML="<font color=red><b>please enter only  10 digits no.</b></font>";
					document.getElementById("sc").disabled=true;
				}



		}


function Passe()
{
	if(cnpwde.value!="")
	{
		msge.innerHTML="";
		if(cnpwde.value!=npwde.value)
		{
			document.getElementById("sc").disabled=true;
			msge.innerHTML="<font color=red><b>password do not match</b></font>";
			}
			else
			{
				document.getElementById("sc").disabled=false;
				}
		}

	}

	function Lod()
	{
		location.reload();

		}




