<?php
  function hoaphat_plugin_activation() {
    // Khai bao plugin can cai dat
    $plugins = array(
      array(
        'name' => 'Redux Framework',
        'slug' => 'redux-framework',
        'required' => true
      )
    );

    // Thiet lap TGM
    $configs = array(
      'menu' => 'hp_plugin_install',
      'has_notice' => true,
      'dismissable' => false,
      'is_automatic' => true
    );
    tgmpa( $plugins, $configs );

}
add_action('tgmpa_register', 'hoaphat_plugin_activation');
?>