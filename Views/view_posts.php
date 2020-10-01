<?php

$guestbookItems = Guestbook::getPosts();

foreach ($guestbookItems as $guestbookItem) {
    ?>
    <div class=" container-sm border border-info mt-2 rounded-lg shadow-lg">
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

        <div class="d-flex justify-content-center">
            <span class="text-primary font-weight-bold">
                 <?php echo $guestbookItem->getTitle(); ?>
                <hr>
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