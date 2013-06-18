 <?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 *
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

 /**
  * Implements hook_preprocess_page().
  */
function rose_preprocess_page(&$vars, $hook) {
  if (isset($vars['node'])) {
  // If the node type is "blog" the template suggestion will be "page--blog.tpl.php".
   $vars['theme_hook_suggestions'][] = 'page__node__'. str_replace('_', '--', $vars['node']->type);
  }
}

/**
 * Implements form_comment_form_alter().
 */
function rose_form_comment_form_alter(&$form) {
  $form['author']['homepage']['#access'] = FALSE;
}

/**
 * Implements hook_preprocess_comment().
 */
function rose_preprocess_comment(&$variables) {
  $comment = $variables['elements']['#comment'];
  $node = $variables['elements']['#node'];
  $variables['created'] = format_date($comment->created, 'custom', 'j/n-Y G:i');

  $variables['submitted'] = t('!username, !datetime', array('!username' => $variables['author'], '!datetime' => $variables['created']));
}

