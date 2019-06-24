<?php
require __DIR__ . '/common/helper.php';

$searchText = '@';
if(isset($_GET['search_text'])){
   $searchText = $_GET['search_text'];
}
$lessons = getAllLessons($searchText);
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>

<body>
<section class="banner center-align theme--bg">

    <h1>Secure and Private AI</h1>
    <h2>FATQs in the Slack channel of Udacity's Secure and Private Scholarship Challenge 2019.</h2>
    <a href="https://github.com/elie-wanko/fatqs_secure-and-private-ai_scholarship">View on GitHub</a>
</section>
<section class="main__content--block">


    <h2>Content</h2>
    <ul>
        <?php
        foreach ($lessons as $lesson) {
            echo '<li>';
            echo '<a href = "src/lesson.php?id=' . $lesson[0] . '&title=' . $lesson[1] . '" >' . $lesson[1] . '</a>';
            echo '</li>';
        }
        ?>
    </ul>


    <h2>Why we created this repo?</h2>
    <p>All the channels of our Slack community are constantly buzzing with great questions and amazing answers.
        These answers can be in the form of lucid explanations from our peers or references to some awesome resources.
        But due to a limitation of the free plan of Slack, we can search only upto the last 10K messages. As such, we
        solutions shared by our peers in the Slack channels. Also, this repo would help future students of this course as they
        would find solutions to most of the common problems in a single repo.</p>

    <p>We hope to make this repo useful not only for the students of “Secure and Private AI Scholarship Challenge with
        Facebook” but also for future students of <a href="https://www.udacity.com/course/secure-and-private-ai--ud185" target = "_blank">Secure
        and Private AI course</a> by Facebook AI on Udacity.</p>


    <h2>Other Resources</h2>
    <ol>
        <li>
            For <b>Newbies,</b> you can find an Intro to Deep Learning with PyTorch course by Udacity <a href="https://www.udacity.com/course/deep-learning-pytorch--ud188"
            target = "_blank">here</a>.  If you're buzy and overwhelmed, here is a <a href="https://docs.google.com/spreadsheets/d/1b7eD6dgWXgFuFpbWHImC5lovWLBfPR_zgaedBRA_21s/edit#gid=0" target = "_blank">
            collection of summary notes</a> compiled by previous scholars in the PyTorch scholarship challenge.
        </li>
        <li><a href="https://github.com/ishgirwan/faqs_pytorch_scholarship" target = "_blank">FATQs 2018/19 PyTorch Scholarship
                challenge</a>.
        </li>
        <li><a href="https://airtable.com/shrwVC7gPOuTJkxW0/tblUf4zxlIMLjwrbv?blocks=hide" target = "_blank">Airtable - Pytorch Udacity
                resource database.</a>.
        </li>
        <li><a href="https://airtable.com/shrnw72B7jTxkb6IB/tblmTxH5ToKfHAqkO/viw6ngRCOjK9dwc5C?blocks=hide" target = "_blank">Airtable -
                Secure and Private AI resource database</a>, you can contribute by submitting your resource
            through this <a href="https://airtable.com/shrohsUEV89f5zZge" target = "_blank">link</a>.
        </li>
    </ol>
</section>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
