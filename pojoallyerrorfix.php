    private $_page_title;

    private $_page_menu_title;

    private $_menu_parent;

    public function __construct() {

        // Initialize private properties

        $this->_page_title = __( 'One Click Accessibility', 'pojo-accessibility' );

        $this->_page_menu_title = __( 'One Click Accessibility', 'pojo-accessibility' );

        $this->_menu_parent = 'themes.php';

        add_action('admin_menu', array($this, 'admin_menu'), 20);

        add_action('admin_init', array($this, 'admin_init'), 20);

        add_action('admin_footer', array($this, 'print_js'));

        add_filter('plugin_action_links_' . POJO_A11Y_BASE, array($this, 'plugin_action_links'), 10, 2);

    }

This has to go into the “includes\pojo-a11y-settings.php” file at line 635, replacing what is already there.

Then the notices go away. Can confirm that it works.
credit: https://wordpress.org/support/topic/php8-2-deprecated-php-error/
