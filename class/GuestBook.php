<?php

require_once 'Message.php';
class GuestBook{

    private $file;

    public function __construct(string $file)
    {
        $this->emptyFile = false;
        $directory = dirname($file);
        if(!is_dir($directory)){
            mkdir($directory, 0777, true);
        }
        if(!file_exists($file)){
            touch($file);
        }

        $this->file = $file;
    }

    public function emptyFile():bool
    {
        return empty(file_get_contents($this->file));
    }

    public function addMessage(Message $message):void
    {
        file_put_contents($this->file, $message->toJSON() . "\n", FILE_APPEND);
    }

    public function getMessages():array
    {
        $content = trim(file_get_contents($this->file));
        $lines = explode("\n", $content);
        $messages = [];
        foreach($lines as $line){
            $messages[] = Message::fromJSON($line);
        }

        return array_reverse($messages);
    }
}