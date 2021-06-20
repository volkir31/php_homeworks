<?php

class GuestBook
{
    protected string $path;
    protected array $data;

    public function __construct(string $path)
    {
        if (file_exists($path)) {
            $this->path = $path;
        }
        if (!file_exists($path)) {
            $file = fopen($path, 'w');
            fclose($file);
        }
    }

    /**
     * @return array
     */
    public function getDataFromFile(): array
    {
        if (file_exists($this->path)) {
            return file($this->path);
        }
        return [];
    }

    /**
     * @param string $text
     * @return void
     */
    public function append(string $text): void
    {
        $text = explode("\n", $text);
        $data = $this->getDataFromFile();
        foreach ($text as $item) {
            $data[] = $item . "\n";
        }
        $this->data = $data;
        $this->save();
    }

    /**
     * @return void
     */
    protected function save(): void
    {
        file_put_contents($this->path, $this->data);
    }
}

