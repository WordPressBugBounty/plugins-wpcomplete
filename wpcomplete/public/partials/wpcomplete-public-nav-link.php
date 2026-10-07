<div class="wpc-nav <?php echo esc_attr($class); ?>">
  <a href="<?php echo esc_url($post_url); ?>">
    <?php echo wp_kses(html_entity_decode( $prepend ), array('strong' => array(), 'em' => array(), 'b' => array(), 'i' => array())); ?><?php echo wp_kses($post_title, array('strong' => array(), 'em' => array(), 'b' => array(), 'i' => array())); ?><?php echo wp_kses(html_entity_decode( $append ), array('strong' => array(), 'em' => array(), 'b' => array(), 'i' => array())); ?>
  </a>
</div>
