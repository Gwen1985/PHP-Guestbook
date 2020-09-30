<div class="container">
    <div class="row">
        <!--   FIRST NAME   -->
        <div class="col col-lg">
            <label for="name-first" class="">First
                Name</label>
            <input type="text" id="name-first" name="name-first" value="<?php echo $nameFirst; ?>"
                   class="  <?php echo (empty($nameFirstError)) ? ' rounded-pill border-gray-200 focus:border-gray-500' : 'border-red-500'; ?>">
            <?php echo $nameFirstError; ?>
        </div>
        <!--   LAST NAME   -->
        <div class="col col-lg">
            <label for="name-last" class="">Last
                Name</label>
            <input type="text" id="name-last" name="name-last" value="<?php echo $nameLast; ?>"
                   class=" <?php echo (empty($nameLastError)) ? ' text-wrap rounded-pill border-gray-200 focus:border-gray-500' : 'border-red-500'; ?> "
                   placeholder="Last name">
            <?php echo $nameLastError; ?>
        </div>
    </div>

    <div class="row">
        <!--   TITTLE   -->
        <div class="col col-lg">
            <label for="title" class="">
                Title </label>
            <input type="text" id="title" name="title" value="<?php echo $title; ?>"
                   class=" <?php echo (empty($titleError)) ? ' rounded-pill border-gray-200 focus:border-gray-500' : 'border-red-500'; ?>">
            <?php echo $titleError; ?>
        </div>
    </div>


    <div class="row">
        <div class="">
            <label for="message" class="text-wrap">
                Message </label>
            <textarea id="message" name="message"
                      class=" text-wrap <?php echo (empty($messageError)) ? '  border border-primary focus:border-gray-500' : 'border-red-500'; ?>"><?php echo $message; ?></textarea>
            <?php echo $messageError; ?>
        </div>
    </div>
</div>

<div class="w-full px-3 text-center ">
    <button type="submit" id="submit" name="submit"
            class="shadow bg-green-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
        Post
    </button>
</div>