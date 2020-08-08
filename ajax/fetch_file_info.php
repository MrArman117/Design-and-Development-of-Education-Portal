<?php
$id = $_POST['id'];
$conn = mysqli_connect('localhost', 'root', '', 'ramr');
$query = "select * from upload where course_type = 'programming' and teacher_id = '$id'";
function fetchName($id)
{
    $conn = mysqli_connect('localhost', 'root', '', 'ramr');
    $temp  = mysqli_query($conn, "select first_name,last_name from teacher where id='$id'");
    $array = mysqli_fetch_assoc($temp);
    $fullName = $array['first_name'] . ' ' . $array['last_name'];
    return $fullName;
}


$queryuploads = mysqli_query($conn, $query);
$output = '';
while ($ro = mysqli_fetch_array($queryuploads)) {
    $output .=  "<span><b>" . $ro['description'] . '    ' . "</b></span>";
    $output .=  "<span><i>" . $ro['filepath'] . '     ' . "</i></span>";
    $output .=  "<a href='uploads/" . $ro['filepath'] . "'" . ">Download</a>";
    $output .=  "<small><span>uploaded by <i>" . ucfirst(fetchName($ro['teacher_id'])) . "</i></span></small>";
    $output .=  "<button type='button' name='delete' id=" . $ro['id'] . " class='btn btn-info btn-xs mr-2 delete mb-2'>Delete</button><br>";
}
echo $output;
