<?php
	$q=$_GET["q"];
	$p= "Ajax (Asynchronous JavaScript and XML) is a group of interrelated web development techniques used on the client-side to create asynchronous web applications. 			With Ajax, web applications can send data to, and retrieve data from, a server asynchronously (in the background) without interfering with the display and behavior of the existing page. 			Data can be retrieved using the XMLHttpRequest object. Despite the name, the use of XML is not required (JSON is often used instead), and the requests do not need to be asynchronous.			Ajax is not a single technology, but a group of technologies. HTML and CSS can be used in combination to mark up and style information. 			The DOM is accessed with JavaScript to dynamically display, and to allow the user to interact with the information presented. 			JavaScript and the XMLHttpRequest object provide a method for exchanging data asynchronously between browser and server to avoid full page reloads.";

	$result = "";
	for ($i=0; $i<strlen($p);  $i++){
		if (strtolower($q)==strtolower(substr($p,$i,strlen($q))) && $i<strlen($p)-strlen($q)){
			$result = $result."<span style=\"background-color:red\">";
			$str= strtoupper($q);
			$result = $result.substr($p,$i,strlen($q));
			for ($j=1; $j<strlen($q); $j++){
				$i++;			}
			$result = $result."</span>";
			}		
else{			$result = $result.$p{$i};}	}

			echo $result;

?>
