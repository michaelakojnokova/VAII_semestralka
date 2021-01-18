<?php
$vote = $_REQUEST['vote'];

//vycucnem obsah textoveho suboru
$filename = "PollResult.txt";
$content = file($filename);

//vlozim obsah do pola
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if ($vote == 0) {
    $yes = $yes + 1;
}
if ($vote == 1) {
    $no = $no + 1;
}

//vlozim obsah do textaku
$insertvote = $yes."||".$no;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2 style="font-family: 'Neutraface 2 Display Medium'">Result:</h2>
<table>
    <tr>
        <td>Yes:</td>
        <td><img src="images/poll.jpg"
                 width='<?php echo(100*round($yes/($no+$yes),2)); ?>'
                 height='20'>
            <?php echo(100*round($yes/($no+$yes),2)); ?>%
        </td>
    </tr>
    <tr>
        <td>No:</td>
        <td><img src="images/poll.jpg"
                 width='<?php echo(100*round($no/($no+$yes),2)); ?>'
                 height='20'>
            <?php echo(100*round($no/($no+$yes),2)); ?>%
        </td>
    </tr>
</table>