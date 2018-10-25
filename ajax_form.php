<html>
 <head>
  <title></title>
 </head>
 <body>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
  <?php
if (isset($_REQUEST['ok'])) {
 $xml = new DOMDocument("1.0","UTF-8");
 $xml->load("hp.xml");
 

 $rootTag = $xml->getElementsByTagName("fullcart")->item(0);
 $dataTag = $xml->createElement("cart");
 
 $aTag = $xml->createElement("id",$_REQUEST['a']);
 $bTag = $xml->createElement("image",$_REQUEST['b']);
// $cTag = $xml->createElement("name",$_REQUEST['c']);
// $dTag = $xml->createElement("price",$_REQUEST['d']);
 
 $dataTag->appendChild($aTag);
 $dataTag->appendChild($bTag);
// $dataTag->appendChild($cTag);
// $dataTag->appendChild($dTag);
 
 $rootTag->appendChild($dataTag);
 
 $xml->save("hp.xml");
}
?>


<div class="container mt-5" style="padding: 10px" cl>  
    <form action="upload2.php" method="post" enctype="multipart/form-data">
 id:
 <input type="text" class="form-control" name="a" /><br>
 Image:
 <input type="file" class="form-control" name="b" /><br>
 <input type="submit" class="btn btn-info" name="ok">
</form>
    
     </div>
    </body>
</html>