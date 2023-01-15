<?php

/* 
* Get the data from the form. 
* The GET method gets the data from the url and the POST method from the body.
* You can only send files with the POST method.
*/
$name = array_key_exists('course', $_POST) ? $_POST['name'] : '---';
$courses = array_key_exists('courses', $_POST) ? implode(' - ', $_POST['courses']) : '---';
$options = array_key_exists('options', $_POST) ? implode(' - ', $_POST['options']) : '---';

echo "Name: $name <br> Courses: $courses <br> Options: $options <br>";

if (mime_content_type($_FILES['file']['tmp_name']) !== 'image/jpeg' && mime_content_type($_FILES['file']['tmp_name']) !== 'image/png' && mime_content_type($_FILES['file']['tmp_name']) !== 'image/gif') {
    echo 'Invalid file type';
    exit();
}

if ($_FILES['file']['size'] / 1024 > 4 * 1024) {
    echo 'File too large';
    exit();
}

if (!file_exists('files') && !mkdir('files', 0777)) {
    echo 'Error creating the directory';
    exit();
}

chmod('files', 0777);

if (move_uploaded_file($_FILES['file']['tmp_name'], 'files/' . $_FILES['file']['name'])) {
    echo 'File uploaded successfully';
} else {
    echo 'Error uploading the file';
}
