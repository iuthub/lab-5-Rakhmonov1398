
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=VjzoDXEx3eeudlywm1IaC2FR_BWyo-uNwg8G-Bk-m3RpUeRAxoom44Uxzz6Mo9KO4rBqsqzw1V_au0MxG5QMPfqdRpB0YwzFSS2hTOK_vBq6EzrmFBeOIuqummYqtjMy" charset="UTF-8"></script>
    <?php
    $num = $_POST["cardnum"];
    $name = $_POST["name"];
    $section = $_POST["select"];
    $card = $_POST["creditcard"];
    
    
    
    
$datanum=$num;
$dataname=$name;
$datasection=$section;
$datacard=$card;
$fp = 'data.txt';
$semicolon = ";";
$newline = "\r\n";
file_put_contents($fp, $dataname, FILE_APPEND | LOCK_EX);
file_put_contents($fp, $semicolon, FILE_APPEND | LOCK_EX);
file_put_contents($fp, $datasection, FILE_APPEND | LOCK_EX);
file_put_contents($fp, $semicolon, FILE_APPEND | LOCK_EX);
file_put_contents($fp, $datanum, FILE_APPEND | LOCK_EX);
file_put_contents($fp, $semicolon, FILE_APPEND | LOCK_EX);
file_put_contents($fp, $datacard, FILE_APPEND | LOCK_EX);
file_put_contents($fp, $newline, FILE_APPEND | LOCK_EX);




    ?>
</head>

	<body>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?php echo $name; ?></dd>

			<dt>Section</dt>
			<dd><?php echo $section; ?></dd>

			<dt>Credit Card</dt>
            <dd><?php 
                      echo "$num $card";
                       ?></dd>
        </dl>
        <pre>
            <?php
            echo file_get_contents("data.txt", true);
            ?>
        </pre>
        
	</body>
</html>  