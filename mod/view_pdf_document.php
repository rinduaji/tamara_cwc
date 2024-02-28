<?php
$url =$_SERVER['REQUEST_URI'];
$file_url = substr($url, strpos($url, "=") + 1); 
$alamat_file_url = "file_document_control/".urldecode($file_url);
// print_r($alamat_file_url);
// exit();
// header('Content-Type: application/pdf');
// header("Content-Description: inline; filename=\"" . $alamat_file_url . "\"");
// header("Content-Transfer-Encoding: Binary"); 
// header('Accept-Ranges: bytes');

// @readfile($alamat_file_url);
?>
<head>
    <style>
        .embed-cover {
          position: absolute;
          top: 0;
          left: 0;
          bottom: 0;
          right: 0;
          
          /* Just for demonstration, remove this part */
          opacity: 0.25;
        }

        .wrapper {
          position: relative;
          overflow: hidden;
        }
    </style>
    <script type="text/javascript">
        function disableContextMenu() {
            window.frames["pdfframe"].contentDocument.oncontextmenu = function(){return true;};   
            var myFrame = document.getElementById('pdfframe');
            myFrame.window.eval('document.addEventListener("contextmenu", function (e) {e.preventDefault();}, false)');
        }
        $("body").on("contextmenu", function () {  
               return false;  
           }); 
           function disableRightClick() 
{ 
alert("Sorry, right click is not allowed !!"); 
return false; 
} 
    </script>
</head>
<body onload="disableContextMenu();" oncontextmenu="return disableRightClick();" >
    <div class="wrapper">
        <!-- <div class="embed-cover"></div> -->
        <embed id="pdfframe" src="<?=$alamat_file_url?>#toolbar=0" width="100%" height="100%" scrolling="yes">
    </div>
</body>