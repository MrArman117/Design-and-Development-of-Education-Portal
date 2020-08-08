<?php
$conn = mysqli_connect('localhost', 'root', '', 'ramr');
$id = $_POST['id'];
$query = "select * from teacher where id = '$id'";
$result = mysqli_query($conn, $query);
$teacher_info = mysqli_fetch_assoc($result);
$degrees2 = mysqli_query($conn, "select * from teacher_degree where teacher_id='$teacher_info[id]'");
$output = '';
$output .= " <h4>Teacher Information </h4>";
$output .= "
            <table class='table'>
                <tr>
                    <td>
                        Name:
                        " .
    ucfirst($teacher_info['first_name']) . ' ' . $teacher_info['last_name']
    . "
                        <br>
                        Email:" . $teacher_info['email'] . "
                    </td>
                </tr>
            </table>
            <h4>Position</h4>
            <table class='table'>
                <tr>
                    <td>" .
    $teacher_info['position']
    . " 
                    </td>
                </tr>
            </table>
            <h4>Degrees</h4>
            <table class='table'>";
while ($ro = mysqli_fetch_array($degrees2)) {
    $output .= "        <tr>
                        <td>
                                " . $ro['degree_name'] . "
                        </td>
                    </tr>
            ";
}
$output .=           '  </table>';
echo $output;
