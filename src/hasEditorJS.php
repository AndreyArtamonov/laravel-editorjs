<?php

namespace AndreyArtamonov\EditorJS;

trait hasEditorJS
{
    protected bool $cache = true;
    protected int $cacheTTL = 3600;

    protected editorJS $editorJS;
    protected string $editorJSAttribute = 'content';

    public function __construct()
    {
        $this->editorJS = new EditorJS();
    }

    public function getHTML(): string
    {
        if ($this->cache) {
            return cache()->remember('editorjs.' . $this->getTable() . '.' . $this->getAttribute('id'), $this->cacheTTL, function () {
                return $this->editorJS->render($this->getAttribute($this->editorJSAttribute));
            });
        }

        return $this->editorJS->render($this->getAttribute($this->editorJSAttribute));
    }

    public function forgetCache(): bool
    {
        return cache()->forget('editorjs.' . $this->getTable() . '.' . $this->getAttribute('id'));
    }
}
