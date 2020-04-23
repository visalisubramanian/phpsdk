<?php
namespace com\zoho\crm\api\logger;

use com\zoho\crm\api\util\Constants;

/**
 * This class used to give logger levels.
 */
abstract class Levels
{
    const fatal = Constants::FATAL;
    const error = Constants::ERROR_KEY;
    const warning = Constants::WARNING;
    const info = Constants::INFO_KEY;
    const debug = Constants::DEBUG;
    const trace = Constants::TRACE;
    const all = Constants::ALL;
}

?>