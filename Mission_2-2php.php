<html>
    <head>
    <meta charset = "UTF-8">
    <title>Mission_2-2</title>
    </head>
    <body>
        <form action = "" method = "post">
        <input type = "text" required name = "str" value = "コメント">
        <input type = "submit" name = "submit" value = "送信">
        </form>
        <?php
       
        
            if(!empty($_POST["str"])){  
            $str = $_POST["str"];
               if($str == "ありがとう"){
                echo "こちらこそ！！" ;   
               }
               else{
               echo $str."を受け付けました<br>";
               }      
                $filename = "Mission_2-2.txt";
                $fp = fopen($filename,"w");
                fwrite($fp,$str.PHP_EOL);
                fclose($fp);
        
                    if(file_exists($filename)){
                    $lines = file($filename,FILE_IGNORE_NEW_LINES);

                    }
            }
        ?>
    </body>
</html>