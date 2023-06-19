<form method="POST">
  <input placeholder="Enter discriminator" name="discrim"> <input type="submit">
</form>
<?php
  $discrim = intval($_POST['discrim']);
  $calculated = fmod($discrim, 5);
?>
<img src="https://cdn.discordapp.com/embed/avatars/<?php echo $calculated;?>.png">
