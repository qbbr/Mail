<?php
/**
 * Mail
 *
 * @package Q_Mail
 * @author Sokolov Innokenty, <sokolov.innokenty@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT License
 * @copyright Copyright (c) 2011, qbbr
 */
class Q_Mail
{
    protected $_transport;
    protected $_from;
    protected $_to;
    protected $_cc;
    protected $_bcc;
    protected $_replyTo;
    protected $_subject;
    protected $_contentType = 'text/plain';
    protected $_charset = 'utf-8';
    protected $_body;

    public function __construct(Q_Mail_Transport_Abstract $transport)
    {
        $this->_transport = $transport;
    }

    public function setFrom($from)
    {
        // fix me
        if (is_array($from)) {
            $this->_from = "{$from[0]} <{$from[1]}>";
        } else {
            $this->_from = $from;
        }

        return $this;
    }

    public function setTo($to)
    {
        $this->_to = $to;

        return $this;
    }

    public function setCc($cc)
    {
        $this->_cc = $cc;

        return $this;
    }

    public function setBcc($bcc)
    {
        $this->_bcc = $bcc;

        return $this;
    }

    public function setReplyTo($replyTo)
    {
        $this->_replyTo = $replyTo;

        return $this;
    }

    public function setSubject($subject)
    {
        $this->_subject = $subject;

        return $this;
    }

    public function setContentType($contentType)
    {
        $this->_contentType = $contentType;

        return $this;
    }

    public function setCharset($charset)
    {
        $this->_charset = $charset;

        return $this;
    }

    public function setBody($body, $isHtml = false)
    {
        if (true === $isHtml) {
            $this->setContentType('text/html');
        }

        $this->_body = $body;

        return $this;
    }

    public function send()
    {
    }
}
