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
            </ul>
        </div>
    <?php }?>
</main>