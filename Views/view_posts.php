<?php

$guestbookItems = Guestbook::getPosts();

foreach ($guestbookItems as $guestbookItem) {
    ?>
    <div class="container border border-warning mt-1 p-1 rounded-pill">
        <div class="">
            <span class="d-flex justify-content-center">
                <?php echo $guestbookItem->getAuthor(); ?>
            </span>
        </div>

        <div class="d-flex justify-content-center">
            <span class="">
                <?php echo $guestbookItem->getPostDate() . '<br>'; ?>
            </span>
        </div>

        <div class="">
            <span class="">
              <hr>
                <p>TITLE:</p><?php echo $guestbookItem->getTitle(); ?>
            </span>
        </div>

        <p class="">
            <span class="d-flex justify-content-center">
                <?php echo $guestbookItem->getContent(); ?>
            </span>
        </p>
    </div>

    <?php
}
?>