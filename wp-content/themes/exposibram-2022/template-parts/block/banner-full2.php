<?php

/**
 * Banner Full 2 Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'bannerfull2-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'bannerfull2';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
// $add_number = get_field('add_number');

?>

<div id="<?php echo esc_attr($id); ?>" class="block-number <?php echo esc_attr($className); ?>">
  <div class="">
    <img src="<?php the_field('img_full2'); ?>" alt="Banner Full" class="w-100">
  </div>
</div>