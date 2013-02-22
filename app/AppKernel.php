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
            
            // Base bundle for project based on techgardeners/sfbaseprj
            new FOS\UserBundle\FOSUserBundle(), // https://github.com/FriendsOfSymfony/FOSUserBundle
            new Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(), // https://github.com/doctrine/DoctrineMigrationsBundle
            new Avalanche\Bundle\ImagineBundle\AvalancheImagineBundle(), // https://github.com/avalanche123/AvalancheImagineBundle           
            new SunCat\MobileDetectBundle\MobileDetectBundle(),  // http://knpbundles.com/egeloen/IvoryGoogleMapBundle
            //new Ivory\GoogleMapBundle\IvoryGoogleMapBundle(),   // https://github.com/egeloen/IvoryGoogleMapBundle         
            new TechG\Bundle\SfBaseprjBundle\TechGSfBaseprjBundle(),
            
            // Base bundle for project based on techgardeners/sfbaseprj
            new TechG\BaseProjectBundle\TechGBaseProjectBundle(),
            new TechG\AuthProjectBundle\TechGAuthProjectBundle(),
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
