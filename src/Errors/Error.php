<?php

namespace App\Errors;

class Error
{

    protected $line;
    protected $lineText;
    protected $message;
    protected $fieldName;
    protected $fieldValue;
    protected $header;
    protected $config;

    /**
     * Get the value of line
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Set the value of line
     */
    public function setLine($line): self
    {
        $this->line = $line;

        return $this;
    }

    /**
     * Get the value of lineText
     */
    public function getLineText()
    {
        return $this->lineText;
    }

    /**
     * Set the value of lineText
     */
    public function setLineText($lineText): self
    {
        $this->lineText = $lineText;

        return $this;
    }

    /**
     * Get the value of message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     */
    public function setMessage($message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of fieldName
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * Set the value of fieldName
     */
    public function setFieldName($fieldName): self
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    /**
     * Get the value of fieldValue
     */
    public function getFieldValue()
    {
        return $this->fieldValue;
    }

    /**
     * Set the value of fieldValue
     */
    public function setFieldValue($fieldValue): self
    {
        $this->fieldValue = $fieldValue;

        return $this;
    }

    /**
     * Get the value of config
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Set the value of config
     */
    public function setConfig($config): self
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Get the value of header
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Set the value of header
     */
    public function setHeader($header): self
    {
        $this->header = $header;

        return $this;
    }
}