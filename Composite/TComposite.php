<?php

namespace Composite;

trait TComposite
{
    use TComponent {
        TComponent::display as displaySelf;
    }

    protected $children = [];

    public function add(IComponent $item)
    {
        $this->children[$item->name] = $item;
    }

    public function remove(IComponent $item)
    {
        unset($this->children[$item->name]);
    }

    public function display()
    {
        $this->displaySelf();
        foreach ($this->children as $child) {
            $child->display();
        }
    }
}