<?php
/* ------------------------------------------------------------------------
  # Jootstrap - Twitter's Bootstrap for Joomla (with RocketTheme's Gantry administration)
  # ------------------------------------------------------------------------
  # author    Prieco S.A.
  # copyright Copyright (C) 2012 Prieco.com. All Rights Reserved.
  # @license - http://http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
  # Websites: http://www.prieco.com
  # Technical Support:  Forum - http://www.prieco.com/en/forum/index.html
  ------------------------------------------------------------------------- */

// no direct access
defined('_JEXEC') or die;
?>
<?php if (!empty($list)) : ?>
    <ul class="archive-module<?php echo $moduleclass_sfx; ?> nav nav-list">
        <?php foreach ($list as $item) : ?>
            <li>
                <a href="<?php echo $item->link; ?>">
                    <?php echo $item->text; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
