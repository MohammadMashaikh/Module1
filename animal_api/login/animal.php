<?php

      $animals = file_get_contents('../api_data/fav_animals.json');
      $animals = json_decode($animals);
?>


<?php foreach($animals as $animal) : ?>
 <img src="<?= $animal->image_link ?>" class="card-img-top" alt="<?= $animal->name ?>">
                    <input type="text" name="name" value="<?= $animal->name ?>">
                    <input type="text" name="latin_name" value="<?= $animal->latin_name ?>">
                    <input type="text" name="animal_type" value="<?= $animal->animal_type ?>">
                    <input type="text" name="active_time" value="<?= $animal->active_time ?>">
                    <input type="text" name="length_min" value="<?= $animal->length_min ?>">
                    <input type="text" name="length_max" value="<?= $animal->length_max ?>">
                    <input type="text" name="weight_min" value="<?= $animal->weight_min ?>">
                    <input type="text" name="weight_max" value="<?= $animal->weight_max ?>">
                    <input type="text" name="lifespan" value="<?= $animal->lifespan ?>">
                    <input type="text" name="habitat" value="<?= $animal->habitat ?>">
                    <input type="text" name="diet" value="<?= $animal->diet ?>">
                    <input type="text" name="geo_range" value="<?= $animal->geo_range ?>">
                    <input type="text" name="image_link" value="<?= $animal->image_link ?>">
                    <input type="text" name="id" value="<?= $animal->id ?>">

                    <?php endforeach ?>