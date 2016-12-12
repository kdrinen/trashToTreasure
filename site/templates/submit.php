<?php snippet('header') ?>

<h1><?php echo $page->title()->html() ?></h1>

<p>

  <?php echo $page->text()->kirbytext() ?>
</p>

<?php echo $page->subtext()->kirbytext() ?>

<form class="submit-box" action="<?= $page->url() ?>" method="post">

  <div class="form-element">
    <label for="age">How long have you had the item? *</label>
    <input type="text" id="age" name="age" placeholder="..." value="<?= isset($data['age']) ? $data['age'] : '' ?>" required/>
  </div>

  <div class="form-element">
    <label for="message">Why have you held onto this item? *</label>
    <textarea name="message" id="message" placeholder="..."><?= isset($data['message']) ? $data['message'] : '' ?></textarea>
  </div>

  <div class="honey">
     <label for="message">If you are a human, leave this field empty</label>
     <input type="website" name="website" id="website" placeholder="..." value="<?= isset($data['website']) ? $data['website'] : '' ?>"/>
  </div>
  <p>* required</p>

  <form action="submit.php" method="post" enctype="multipart/form-data">
      Select image to upload:
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Upload Image" name="submit">
  </form>

  <?php
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"][" "]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }
  // Check if file already exists
  if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
      echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
      $uploadOk = 0;
  }
  else {
      echo " ";
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }
  ?>

  <button class="button" type="submit" name="submit" value="Submit">Submit</button>

</form>

<?php snippet('footer') ?>
