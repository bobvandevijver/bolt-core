<?php

declare(strict_types=1);

namespace Bolt\Widget;

use Bolt\Snippet\Target;
use Bolt\Snippet\Zone;

class SnippetWidget extends BaseWidget
{
    protected $name = 'Nameless Snippet';
    protected $type = 'snippet';
    protected $target = Target::NOWHERE;
    protected $zone = Zone::NOWHERE;
    protected $priority = 200;
    protected $snippet = '';

    public function __construct(?string $snippet = null, ?string $name = null, ?string $target = null, ?string $zone = null)
    {
        if ($snippet !== null) {
            $this->setName($snippet);
        }

        if ($name !== null) {
            $this->setName($name);
        }

        if ($target !== null) {
            $this->setName($target);
        }

        if ($zone !== null) {
            $this->setName($zone);
        }
    }

    public function getSnippet(): string
    {
        return $this->snippet;
    }

    public function setSnippet(string $snippet): self
    {
        $this->snippet = $snippet;

        return $this;
    }

    public function __invoke(?string $template = null): string
    {
        return $this->getSnippet();
    }
}
