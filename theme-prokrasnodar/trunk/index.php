<?php get_header(); ?>

<main class="container">
    <h1>Галерея объектов</h1>
    <a class="filter-link" href="#">Фильтр объектов <span class="filter-link__arrow">&#9660;</span></a>
    <div class="filter">
        <fieldset>
            <legend><b>Объекты</b></legend>
            <label for="living">
                Жилые
                <input type="checkbox" name="type" id="living">
            </label>
            <label for="municipal">
                Муниципальные
                <input type="checkbox" name="type" id="municipal">
            </label>
            <label for="commercial">
                Коммерческие
                <input type="checkbox" name="type" id="commercial">
            </label>
        </fieldset>
        <fieldset>
            <legend><b>Города</b></legend>
            <label for="ekaterinburg">
                Екатеринбург
                <input type="checkbox" name="city" id="ekaterinburg">
            </label>
            <label for="omsk">
                Омск
                <input type="checkbox" name="city" id="omsk">
            </label>
            <label for="novosibirsk">
                Новосибирск
                <input type="checkbox" name="city" id="novosibirsk">
            </label>
        </fieldset>
        <div>
            <button id="change" class="button button_primary" type="button">Применить</button>
            <button id="reset" class="button button_outline" type="button">Сбросить</button>
        </div>
    </div>
    <div class="grid">

    <?php
    $query = new WP_Query(array( 'category_name' => 'objects' ));
    while ($query->have_posts()) : $query->the_post();
        $thumbnail_id = get_post_thumbnail_id( $post->ID );
        $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
        $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
        ?>
        <a class="object" href="<?php the_permalink(); ?>" data-type="<?php the_field('objects_type'); ?>" data-city="<?php the_field('objects_city'); ?>">
            <img class="object__thumbnail" src="<?php echo $thumbnail_url ?>" alt="<?php echo $thumbnail_alt ?>">
        </a>
    <?php endwhile; wp_reset_postdata(); ?>

    </div>
</main>

<?php get_footer(); ?>