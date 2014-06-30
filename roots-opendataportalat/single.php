<?php
if (is_singular('cpt_anwendungen')) {
    get_template_part('templates/content', 'anwendung');
} elseif (is_singular('cpt_datentools')) {
    get_template_part('templates/content', 'datentool');
} elseif (is_singular('cpt_highlights')) {
    get_template_part('templates/content', 'single');
} else {
    get_template_part('templates/content', 'single');
}