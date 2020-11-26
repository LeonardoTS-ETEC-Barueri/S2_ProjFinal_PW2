<div class="row d-flex m-0 p-0"> <!-- Botões de navegação -->

    <div class="btn-group-vertical btn-group-sm py-1 text-break m-auto w-75" role="group" aria-label="myNavigationMenu">

        <?php
            $count = 0;
            foreach ($navItems as $item) {
                echo '<button id="'.$item['id'].'" type="button" class="btn btn-dark my-1" onclick="goTo(navDataObj['.$count.'].id, navDataObj['.$count.'].slug)">'.$item['title'].'</button>';
                $count ++;
            }
        ?>
    </div>

</div>