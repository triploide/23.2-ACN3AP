<?php

require 'UploadedFile.php';

echo '<pre>';
$file = new UploadeFile('imagen');
$file->save('path');

// header('location: exito.php'); exit;
