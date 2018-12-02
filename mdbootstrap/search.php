<?php
$connection = new mysqli("localhost","root","",'property');
if(isset($_POST['submit'])){
  $title = mysqli_real_escape_string($connection, trim($_POST['title']));
}
$query = "select * from search_property";
$result = $connection->query($query);
while($row = mysqli_fetch_array($result)) 
{
  if($row['title'] == $title){
    ?>
    <script>
      var link = "<?php echo $row['link'] ?>";
      window.location = link;
    </script>
    <?php
  }
}
?>