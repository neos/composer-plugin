<?php
namespace Neos\ComposerPlugin;

/**
 * A composer plugin to install flow packages.
 *
 */
class Plugin implements \Composer\Plugin\PluginInterface
{
    /**
     * Add the Flow package installer
     *
     * @param \Composer\Composer $composer
     * @param \Composer\IO\IOInterface $io
     */
    public function activate(\Composer\Composer $composer, \Composer\IO\IOInterface $io)
    {
        $installer = new Installer($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
