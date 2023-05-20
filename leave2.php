<style>
    body
    {
        background-image:url('displaybg.jpg');
        background-repeat:no-repeat;
        background-size:cover;
    }
.dbresult,.dbresult td,.dbresult th{
border:1px solid black;
border-collapse:collapse;
padding:8px;
}
.dbresult
{
width:500px;
margin:auto;
}
.dbresult tr:nth-child(odd)
{
background-color:white;
}
.dbresult tr:nth-child(even)
{
background-color:Cyan;
}
</style>
<?php
$link=mysqli_connect('localhost','root','','form');
if(!$link)
{
die('connection error'.myssqli_connect_error());
}
$query="SELECT * FROM sub";
$result=mysqli_query($link,$query);
$numrow=mysqli_num_rows($result);
if($numrow>0)
{
echo '<table class="dbresult">';
echo '<tr>><th colspan="9"><a href="form.html">GO BACK</a></th></tr>';
echo '<tr>';
echo '<th>name</th>';
echo '<th>roll_no</th>';
echo '<th>email</th>';
echo '<th>start_date</th>';
echo '<th>end_date</th>';
echo '<th>reason</th>';
echo '<th>APPROVE</th>';
echo '<th>REJECT</th>';
echo '</tr>';
while($row=mysqli_fetch_assoc($result))
{
$roll_no=$row['roll_no'];
$name=$row['name'];
$email=$row['email'];
$start_date=$row['start_date'];
$end_date=$row['end_date'];
$reason=$row['reason'];           
echo '<tr>';
echo '<td>' . $name . '</td>';
echo '<td>' . $roll_no . '</td>';
echo '<td>' . $email . '</td>';
echo '<td>' . $start_date . '</td>';
echo '<td>' . $end_date . '</td>';
echo '<td>' . $reason . '</td>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE-edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Application Approved</title>';
echo '</head>';
echo '<body>';
echo '<td><a href="mailto:'.$email.'?subject=Application%20Approved&body=Dear%20Sir/Madam,%0D%0A%0D%0AWe%20are%20pleased%20to%20inform%20you%20that%20your%20application%20has%20been%20approved.%20%0D%0A%0D%0AThank%20you."><button>approve</button></a></td>';

echo '</body>';
echo '</html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE-edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Application Approved</title>';
echo '</head>';
echo '<body>';
echo '<td><a href="mailto:'.$email.'?subject=Application%20Approved&body=Dear%20Sir/Madam,%0D%0A%0D%0AWe%20are%20pleased%20to%20inform%20you%20that%20your%20application%20has%20been%20rejected.%20%0D%0A%0D%0AThank%20you."><button>reject</button></a></td>';
echo '</body>';
echo '</html>';

}
}