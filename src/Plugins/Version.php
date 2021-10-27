<?php

declare(strict_types=1);

namespace Pest\Plugins;

use Pest\Contracts\Plugins\HandlesArguments;
use function Pest\version;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @internal
 */
final class Version implements HandlesArguments
{
    /**
     * Creates a new instance of the plugin.
     */
    public function __construct(
        private OutputInterface $output
    ) {
        // ..
    }

    public function handleArguments(array $arguments): array
    {
        if (in_array('--version', $arguments, true)) {
            $this->output->writeln(
                sprintf('Pest    %s', version()),
            );
        }

        return $arguments;
    }
}
