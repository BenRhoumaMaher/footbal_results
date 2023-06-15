<?php

require "header.php";
require "function.php";
?>
<?php  $response = yesterdayMatchs(); ?>
<div class="container-lg main">
    <h2 class="my-title mt-3 text-center"></h2>
    <div class="text-center">
        <img src="https://www.a-star.edu.sg/images/librariesprovider1/default-album/news-and-events/news/astar-news-masthead.jpg?sfvrsn=38c88bdb_4"
            class="main-img">
    </div>
    <div class="row mt-4">
        <?php if (array_key_exists('data', $response)) : ?>
        <?php  foreach($response['data'] as $match) : ?>
        <div class="col-lg-6 col-md-12 col-sm-12 text-center mb-3">
            <div class="card single-card">
                <img src="">
                <div class="card-body">
                    <div class="card-title" style="font-weight:bold;"></div>
                    <div class="card-text single-card-text">
                        <img src="<?php echo $match['teams']['home']['img'] ?>" style="width:50px" />
                        <?php echo $match['teams']['home']['name'] ?>
                        <?php echo $match['scores']['home_score'] ?>
                        <?php echo '-'; ?>
                        <?php echo $match['scores']['away_score'] ?>
                        <?php echo $match['teams']['away']['name'] ?>
                        <img src="<?php echo $match['teams']['away']['img'] ?>" style="width:50px" />
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php else : ?>
        <h3 class="text-center">There's no match yesterday </h3>
        <?php endif; ?>
    </div>
</div>


<?php require "footer.php"; ?>