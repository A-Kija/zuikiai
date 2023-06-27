<?php if (empty($colors)) : ?>
    <li class="list-group-item">
        <h3>No colors yet</h3>
    </li>
<?php endif ?>

<?php foreach ($colors as $color) : ?>
    <li class="list-group-item">
        <div class="bin">
            <div class="color-block" style="background:<?= $color['hex'] ?>;"><?= $color['name'] ?></div>

                <button 
                type="submit" 
                class="button--delete delete" 
                data-url="<?= URL ?>colors/delete/<?= $color['id'] ?>"
                ></button>

            <a href="" class="edit"></a>
        </div>
    </li>
<?php endforeach ?>