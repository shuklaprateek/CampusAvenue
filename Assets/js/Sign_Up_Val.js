function NAME()
{
	var nm=document.getElementById("nm");
	var msg=document.getElementById("nmsg");
	nmsg.innerHTML="";
	document.getElementById("sb").disabled=false;
	document.getElementById("cn").disabled=false;
					document.getElementById("em").disabled=false;
					document.getElementById("pwd").disabled=false;
					document.getElementById("cpwd").disabled=false;

	for(var i=0;i<nm.value.length;i++)
			{
				var a=nm.value.charCodeAt(i);
				if(!((a>=65 && a<=91) || (a>=97 && a<=123) || (a==32)))
				{
					msg.innerHTML="<font color=red><b>please enter only character</b></font>";
					document.getElementById("sb").disabled=true;
					document.getElementById("cn").disabled=true;
					document.getElementById("em").disabled=true;
					document.getElementById("pwd").disabled=true;
					document.getElementById("cpwd").disabled=true;
				}


		}


	}


	function Contact()
	{
		var cn=document.getElementById("cn");
		var cmsg=document.getElementById("cmsg");
		cmsg.innerHTML="";
		document.getElementById("sb").disabled=false;



if(cn.value.length<=10)
{
	if(cn.value.length<10)
			 document.getElementById("sb").disabled=true;
		for(var i=0;i<cn.value.length;i++)
		{
			var a=cn.value.charCodeAt(i);
			if(!(a>=48 && a<=57))
			{
				cmsg.innerHTML="<font color=red><b>please enter only digits</b></font>";
					document.getElementById("sb").disabled=true;

										document.getElementById("em").disabled=true;
										document.getElementById("pwd").disabled=true;
					document.getElementById("cpwd").disabled=true;
					document.getElementById("nm").disabled=true;
				}
			}
}
else
{
				cmsg.innerHTML="<font color=red><b>please enter only  10 digits no.</b></font>";
					document.getElementById("sb").disabled=true;

															document.getElementById("em").disabled=true;
															document.getElementById("pwd").disabled=true;
					document.getElementById("cpwd").disabled=true;
					document.getElementById("nm").disabled=true;
				}



		}



		function Email()
		{
		     var em=document.getElementById("em");
		     var emsg=document.getElementById("emsg");
		     emsg.innerHTML="";
		     var str=em.value.split("@");
		     var str1=str[1].split(".");



		for(var i=0;i<str[0].length;i++)
			 		{
			 			var a=str[0].charCodeAt(i);
			 			if(!((a>=65 && a<=91) || (a>=97 && a<=123) || (a==95) || (a>=48 && a<=57) ))
			 			{
			 				emsg.innerHTML="<font color=red><b>please enter only character /digits / _ sign before @ </b></font>";

			 			}

				}
		     if(str1[1]=="com")
		     {
				document.getElementById("sb").disabled=false;

				 }
				 else
				 {
		            document.getElementById("sb").disabled=true;
					 }


		}


function Username()
{
	var unm=document.getElementById("unm");
	var em=document.getElementById("em");
	var str=em.value.split("@");
document.getElementById("unm").innerHTML="";

	var opt=document.createElement("option");
					opt.value=str[0];
					opt.text=str[0];
				document.my.unm.options.add(opt);
	}



function Cont()

{
var cn=document.getElementById("cn");
		var cmsg=document.getElementById("cmsg");
			document.getElementById("em").disabled=false;
									document.getElementById("pwd").disabled=false;
							document.getElementById("cpwd").disabled=false;
										document.getElementById("nm").disabled=false;
		cmsg.innerHTML="";
		if(cn.value.length!=10)
		{
			cmsg.innerHTML="<font color=red><b>please enter   10 digits no.</b></font>";


																		document.getElementById("em").disabled=true;
																		document.getElementById("pwd").disabled=true;
								document.getElementById("cpwd").disabled=true;
					document.getElementById("nm").disabled=true;
			}

	}

	function cot()
	{
		var cn=document.getElementById("cn");
		if(cn.value.length==10)
		{
			document.getElementById("em").disabled=false;
												document.getElementById("pwd").disabled=false;
										document.getElementById("cpwd").disabled=false;
										document.getElementById("nm").disabled=false;
			}
		}




function Passe()
{
	if(cpwd.value!="")
	{
		pmsg.innerHTML="";
		if(cpwd.value!=pwd.value)
		{
			document.getElementById("sb").disabled=true;
			pmsg.innerHTML="<font color=red><b>password do not match</b></font>";
			}
			else
			{
				document.getElementById("sb").disabled=false;
				}
		}

	}


