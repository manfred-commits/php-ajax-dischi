<main>
    <?php foreach($database as $album){?>
        <div class="card">
            
            <div class="container-album-img">
                <img src="<?php echo $album['poster']; ?>" alt="">
            </div>
            <ul>
                <li>
                    <h3>
                        <?php echo $album['title'];?>
                    </h3>
                </li>
                <li>
                    <p>
                        <?php echo $album['author'];?>
                    </p>
                    <p>
                        <?php echo $album['year'];?>
                    </p>
                </li>
            </ul>
        </div>
    <?php }?>
</main>