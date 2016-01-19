<?php
if ( $_POST['payload'] ) {
  shell_exec( 'cd /srv/www/git-repo/ && git reset --hard HEAD && git pull' );
}
?>
