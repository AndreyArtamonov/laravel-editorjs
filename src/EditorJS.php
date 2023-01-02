<?php

namespace AndreyArtamonov\EditorJS;

class EditorJS
{
    protected string $html = '';

    public function render(array $data): string
    {
        foreach ($data['blocks'] as $block) {
            $this->html .= view('vendor.editorjs.' . $block['type'], $block['data'])->render();
        }

        return $this->html;
    }
}
