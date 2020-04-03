<?php

/**
 *@class Logs
 */
class Logs
{

  function __construct()
  {
    if(){}
     openlog("Error occurred", LOG_PID|LOG_NDELAY, LOG_SYSLOG|LOG_USER|LOG_AUTHPRIV);
     syslog(LOG_NOTICE|LOG_WARNING|LOG_CRITICAL|LOG_EMERG, "Error %m");
     closelog();
  }
new Logs();
}
 ?>
