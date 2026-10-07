
<div id="completable-<?php echo esc_attr( $user_id ); ?>">

  <?php foreach ($courses as $name => $values) : ?>
  <a href="<?php echo esc_url( 'users.php?page=wpcomplete-users&user_id=' . $user_id . '#' . $name ); ?>">
    <?php echo esc_html( $name ); ?>: <?php echo $values['stats']['completed']; ?> / <?php echo count($values['buttons']); ?>
    <?php if (count($values['buttons']) > 0) : ?> (<?php echo round(100 * ($values['stats']['completed'] / count($values['buttons'])), 1); ?>%)<?php endif; ?><br>
  </a>
  <?php endforeach; ?>
  
</div>
