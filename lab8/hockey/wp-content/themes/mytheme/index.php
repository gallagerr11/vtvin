<?php get_header(); ?>
<main>
    <section class="hero">
        <img src="<?php echo get_template_directory_uri(); ?>/hockeyman.gif" alt="Хоккеисты">
        <h1>Добро пожаловать в мир хоккея</h1>
        <p>Откройте для себя самых популярных хоккеистов мира и их достижения.</p>
    </section>
    <section class="gallery">
        <div class="grid">
            <div class="grid-item">
                <img src="<?php echo get_template_directory_uri(); ?>/sidneycrosby.webp" width="400" height="340" alt="Sidney Crosby">
                <a href="https://www.nhl.com/penguins/player/sidney-crosby-8471675">Sidney Crosby</a>
            </div>
            <div class="grid-item">
                <img src="<?php echo get_template_directory_uri(); ?>/alexanderovechkin.png" width="400" height="340" alt="Alexander Ovechkin">
                <a href="https://www.nhl.com/capitals/player/alex-ovechkin-8471214">Alexander Ovechkin</a>
            </div>
            <div class="grid-item">
                <img src="<?php echo get_template_directory_uri(); ?>/connor-mc-david.png" width="400" height="340" alt="Connor McDavid">
                <a href="https://www.nhl.com/oilers/player/connor-mcdavid-8478402">Connor McDavid</a>
            </div>
            <div class="grid-item">
                <img src="<?php echo get_template_directory_uri(); ?>/patrickkane.png" width="400" height="340" alt="Patrick Kane">
                <a href="https://www.nhl.com/redwings/player/patrick-kane-8474141">Patrick Kane</a>
            </div>
            <div class="grid-item">
                <img src="<?php echo get_template_directory_uri(); ?>/niklaslidstrom.png" width="400" height="340" alt="Niklas Lidstrom">
                <a href="https://www.nhl.com/player/nicklas-lidstrom-8457063">Niklas Lidstrom</a>
            </div>
            <div class="grid-item">
                <img src="<?php echo get_template_directory_uri(); ?>/nathanmackinnon.png" width="400" height="340" alt="Nathan Mackinnon">
                <a href="https://www.nhl.com/avalanche/player/nathan-mackinnon-8477492">Nathan Mackinnon</a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
