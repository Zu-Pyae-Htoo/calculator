<?php include("./template/header.php") ?>
<?php include("./template/sidebar.php") ?>
<section class=" bg-gray-200 p-10 rounded-lg ">
    <div class="mb-3">
        <ol class="flex items-center whitespace-nowrap" aria-label="Breadcrumb">
            <li class="inline-flex items-center">
                <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="#">
                    Home
                </a>
                <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </li>
            <li class="inline-flex items-center">
                <a href="./exchange.php" class=" flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="#">
                    Exchange Calculator
                    <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </li>
            <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
                Exchange List
            </li>
        </ol>
    </div>
    <hr class=" border border-gray-200 my-5">

    <?php

    $file_name = "exchange_record.txt";
    if (!file_exists($file_name)) {
        touch($file_name);
    };

    $file_stream = fopen($file_name, "r");
    while (!feof($file_stream)) :
        $contents = fgets($file_stream);
        if ($contents == "\n")
            continue;
    ?>
        <p class=" bg-gray-100 px-2 py-3 my-2">
            <?= $contents ?>
        </p>
    <?php endwhile; ?>


    <div class=" flex gap-3 mt-5">
        <a href="./exchange.php" name="cal_btn" class=" py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 flex-grow">
            Calculate Again
        </a>

    </div>
</section>
<?php include("./template/footer.php") ?>