<?php

class View
{

    protected array $data = [];

    /**
     * @param $name
     * @param $value
     */
    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param string $template
     */
    public function display(string $template): void
    {
        if (file_exists(__DIR__ . $template)) {
            $data = $this->getData();
            include __DIR__ . $template;
        } else {
            echo 'file not exist';
        }
    }

    /**
     * @param string $template
     * @return string
     */
    public function render(string $template): string
    {
        return file_get_contents($template);
    }
}
