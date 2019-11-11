<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param string $mailgunDomain your mailgun private api key.
 * @param string $mailgunApiKey your mailgun domain relay.
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

//mailgun API Key authorization

$mailgunApiKey = "5d17b26a46f84c7c97404c301d8015fb-1df6ec32-4e4a18af";
$mailgunDomain = "sandboxdc3436ed75834cefa960de89cf9cf541.mailgun.org";


// your Google reCAPTCHA keys here
// your Google reCAPTCHA keys here
$siteKey = '6LesKsIUAAAAADHbdDGWeqAbJdKSF4Rl5XgRrvmu';
$secret = '6LesKsIUAAAAAElXwH2vcqCGNODj1oMtCElS59TA';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = [ "dahakcyrus@yahoo.com", "NMSPR"];
$MAIL_RECIPIENT = ["dahakcyrus@yahoo.com"];