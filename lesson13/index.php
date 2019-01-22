<center>
<?php

$myDirectory = opendir(".");

// get each entry
while($entryName = readdir($myDirectory)) {
	$dirArray[] = $entryName;
}

// close directory
closedir($myDirectory);

//	count elements in array
$indexCount	= count($dirArray);
//Print ("$indexCount files<br>\n");

// sort 'em
sort($dirArray);

// print 'em
print("<TABLE border=0 cellpadding=5 cellspacing=0 class=whitelinks>\n");
print("<TR><TH><font color=\"#FF80000\" size= 3>Filename</font></TH><th><font color=\"#FF80000\" size= 3>Filesize</font></th></TR>\n");
// loop through the array of files and print them all
for($index=0; $index < $indexCount; $index++) {
        if (substr("$dirArray[$index]", 0, 1) != "."){ // don't list hidden files
		if($dirArray[$index]!="index.php" && $dirArray[$index]!="error_log" && filesize($dirArray[$index])>0)
		{
		print("<TR><TD><a href=\"$dirArray[$index]\"><font color=\"#01DF01\"> $dirArray[$index]</font></a></td>");
		print("<td>");
		print("<font color=\"#01DF01\">".filesize($dirArray[$index])."</font>");
		print("</td>");
		print("</TR>\n");
		}
	}
}
print("</TABLE>\n");

?>
</center>