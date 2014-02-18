<?php

/**
 * simple autoresponse mailer
 *
 * @author    Marvin Neumann
 * @version   1
 * @copyright 2014
 * @todo messagelist
 * @todo html response
 * @todo sendmail
 */
class AutoResponse {

    public $subject = "*";  // default
    private $msgid;
    private $mbox;

    /**
     *  server connection parameter
     */
    private $hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
    private $username = 'user.name@gmail.com';
    private $password = 'password';

    /**
     * connection
     */
    public function __construct($subject = NULL) {
        if($subject) {
            $this->subject = $subject;
        }
        $this->mbox = imap_open($this->hostname, $this->username, $this->password);
    }

    /**
     * get all EMail with specific subject
     * @param type $subject
     */
    public function getMail($subject = NULL) {
        if($subject) {
            $this->subject = $subject;
        }
        $search = imap_search($this->mbox, 'SUBJECT "' . $this->subject . '"');
        var_dump($search);   // message id
        return $search;
    }

    /**
     * send an Email Response to 
     * @param type $message
     */
    public function sendResponse($message = NULL) {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}

?>
