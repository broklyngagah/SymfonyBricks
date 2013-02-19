<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new JMS\AopBundle\JMSAopBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
                
            // FOSUserBundle
            new FOS\UserBundle\FOSUserBundle(),
            
            // StofDoctrineExtensionsBundle
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            
            // KnpMarkdownBundle
            new Knp\Bundle\MarkdownBundle\KnpMarkdownBundle(),
                
            // FOSJsRoutingBundle
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
                
            // KnpDisqusBundle
            new Knp\Bundle\DisqusBundle\KnpDisqusBundle(),

            // FOSMessageBundle
            new FOS\MessageBundle\FOSMessageBundle(),

            // RaulFraileLadybugBundle
            new RaulFraile\Bundle\LadybugBundle\RaulFraileLadybugBundle(),

            // PrestaSitemapBundle
            new Presta\SitemapBundle\PrestaSitemapBundle(),

            // PKMarkdownifyBundle
            new PK\MarkdownifyBundle\PKMarkdownifyBundle(),

            // VichUploaderBundle, KnpGaufretteBundle
            new Knp\Bundle\GaufretteBundle\KnpGaufretteBundle(),
            new Vich\UploaderBundle\VichUploaderBundle(),

            // AvalancheImagineBundle
            new Avalanche\Bundle\ImagineBundle\AvalancheImagineBundle(),

            // Bricks bundles
            new Bricks\SiteBundle\BricksSiteBundle(),
            new Bricks\WikiBundle\BricksWikiBundle(),
            new Bricks\UserBundle\BricksUserBundle(),
            new Bricks\MessageBundle\BricksMessageBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
