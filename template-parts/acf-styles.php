<?php
$primary = get_field('primary_color', 'option');
$links = get_field('link_color', 'option');
$topfooter = get_field('top_footer_color', 'option');
$bottomfooter = get_field('bottom_footer_color', 'option');
?>

<style type="text/css">
  .site-branding .site-title a,
  .site-branding-links .header-link-icon i,
  #site-navigation a:hover,
  #site-navigation button {
    color: <?php echo $primary ?>;
  }

  #announcement-bar,
  #page-breadcrumb,
  article .entry-header h1:before,
  .btt {
    background: <?php echo $primary ?>;
  }

  a,
  .entry-meta .edit-link {
    color: <?php echo $links ?>;
  }

  #footer-widgets {
    background: <?php echo $topfooter ?>;
  }

  footer.site-footer {
    background: <?php echo $bottomfooter ?>;
  }
</style>
