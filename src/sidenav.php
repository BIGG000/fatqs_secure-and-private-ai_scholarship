<?php
    $lessons = getAllLessons('@');
?>


<ul id="slide-out" class="sidenav">
    <li>
        <div class="user-view theme--bg">
            <a href="https://fatqs-private-and-secure-ai.herokuapp.com/">FATQs</a>
        </div>
    </li>
    <?php
    foreach ($lessons as $lesson) {
        echo '<li>';
        echo '<a href = "lesson.php?id=' . $lesson[0] . '&title=' . $lesson[1] . '" >' . $lesson[1] . '</a>';
        echo '</li>';
    }
    ?>
</ul>
