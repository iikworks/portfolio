<?php
namespace IIKWorks\Portfolio\App;

class Template
{
    private string $viewsRoot;

    public function __construct(string $viewsRoot)
    {
        $this->viewsRoot = $viewsRoot;
    }

    public function view(string $name, array $vars): void
    {
        if(!empty($vars)) extract($vars);
        include(sprintf('%s/%s.php', $this->viewsRoot, $name));
    }
}