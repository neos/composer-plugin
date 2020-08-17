<?php

namespace Neos\ComposerPlugin;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

/**
 * A composer plugin to install flow packages.
 */
class Plugin implements PluginInterface
{
    /**
     * @var Installer
     */
    private $installer;

    /**
     * @param Composer $composer
     * @param IOInterface $io
     */
    public function activate(Composer $composer, IOInterface $io): void
    {
        $this->installer = new Installer($io, $composer);
        $composer->getInstallationManager()->addInstaller($this->installer);
    }

    /**
     * @param Composer $composer
     * @param IOInterface $io
     */
    public function deactivate(Composer $composer, IOInterface $io): void
    {
        if ($this->installer !== null) {
            $composer->getInstallationManager()->removeInstaller($this->installer);
        }
    }

    /**
     * @param Composer $composer
     * @param IOInterface $io
     */
    public function uninstall(Composer $composer, IOInterface $io): void
    {
    }
}
