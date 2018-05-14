
    <option value=" "> Select Area</option>

            <?php $area = $page->tournaments()->toStructure()->sortBy('area', 'asc') ?>
            <?php $arr = [];
            foreach($area as $a) {
            array_push($arr, $a->area);
            }
            ?>

        <?php $unique = array_unique($arr); ?>



        <?php foreach($unique as $a2) { ?>
    <option value="<?php echo $a2 ?>"><?php echo $a2 ?></option>

    <?php } ?>