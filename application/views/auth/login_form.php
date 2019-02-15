<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
      <title>Please Login</title>
  </head>
  <body>
    <?php
    $ldaprdn = 'uid=cmm_manager,ou=admin,dc=kmutt,dc=ac,dc=th';
    $ldappass = '@431dkjsp$1';
    $ldapconn = ldap_connect("10.1.130.12")
        or die("could not connect");

        ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);

    if( $ldapconn) {
        $ldapbind = @ldap_bind($ldapconn, $ldaprdn, $ldappass);

        if ($ldapbind) {
            echo "LDAP Bind succ \n";
        } else {
            echo "failed\n";
        }
    }
    ?>

      <?php echo form_fieldset('Login'); ?>
      <?php echo validation_errors();?>

      <?php echo form_open('auth/login', array('id' => 'loginform')); ?>
      <?php
      
      $table = array(array('', ''),
          array(form_label('Username:', 'username'),
                form_input(array('name' => 'username', 'id' => 'username',
                     'class' => 'formfield'))),
          array(form_label('Password', 'password'),
                form_password(array('name' => 'password', 'id' => 'password',
                     'class' => 'formfield'))));
          echo $this->table->generate($table);
      ?>

      <?php echo form_label('Remember me', 'remember'); ?>
      <?php echo form_checkbox(array('name' => 'remember', 'id' => 'remember',
         'value' => 1,  'checked' => FALSE, 'disabled' => TRUE)); ?>
      <br />
      <?php echo form_submit('login', 'Login'); ?>
      <?php echo form_close(); ?>
      <?php echo form_fieldset_close(); ?>
<?php
        $ldaprdn = 'uid=cmm_manager,ou=admin,dc=kmutt,dc=ac,dc=th';
        $ldappass = '@431dkjsp$1';
        $ldapConn = ldap_connect("10.1.130.12")
            or die("could not connect");

            ldap_set_option($ldapConn, LDAP_OPT_PROTOCOL_VERSION, 3);
            ldap_set_option($ldapConn, LDAP_OPT_REFERRALS, 0);
        
        $uid = '58080500279';
            if(ldap_bind($ldapConn, $ldaprdn, $ldappass)) {

            $arr = array('cn=CMM,ou=Group,ou=st', 1);
            $result = ldap_search($ldapConn, $ldaprdn, "(uid=$uid)", array('dn'), 0, 1);
            $entries = ldap_get_entries($ldapConn, $result);
            if ($entries['count'] != 1) {
                if (ldap_bind($ldapConn, $entries[0]['dn'], $ldappass)) {
                    // user with mail $mail is checked with password $password
                }
            }
        }
        ldap_close($ldapConn);
?>

  </body>
</html>
