<?php

$pageTitle="Post result";
include "view-header.php";
?>
<h1>Post result</h1>h1>



<?php
if (isset($_GET['my-name'])){
?>

<p>The value sent is:</p>
<?php
  echo $_GET['my-name'];



}
else

{

?>
  <p>Nothing sent to the page.</p>
<?php
  


}
include "view-footer.php";
?>
