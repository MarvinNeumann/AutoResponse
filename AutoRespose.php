<?php

/**
 * AutoResponse Mailer
 * - it searches the inbox for new email that match the subject
 * - then it sends an Email with a Response Message
 *
 * @author    marvin neumann
 * @version   1
 * @copyright 2014
 */
class AutoResponse {

    public $subject = "Keyword";
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
    public function __construct($hostname = NULL, $username = NULL, $password = NULL) {
        $this->hostname = $hostname ? $hostname : $this->hostname;
        $this->username = $username ? $username : $this->username;
        $this->password = $password ? $password : $this->password;

        $this->mbox = imap_open($this->hostname, $this->username, $this->password);
    }

    /**
     * get all EMail with specific subject
     * @param type $subject
     */
    public function getMail($subject = NULL) {
        $search = imap_search($this->mbox, 'SUBJECT "' . $this->subject . '"');
        print_r($search);   // array with message id
    }

    /**
     * send an Email Response
     * @param type $message
     */
    public function sendResponse($message = NULL) {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}

?>
