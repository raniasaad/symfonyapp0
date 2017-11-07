<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2a6dca5c63f99bb122801f5826466c2d91a1ae63e59943b13502615d6fa6870a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5be54aaa6ec4d630c0acf78f47eaf7e08be1b8964d87f7aad1aa20ccb18433ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be54aaa6ec4d630c0acf78f47eaf7e08be1b8964d87f7aad1aa20ccb18433ea->enter($__internal_5be54aaa6ec4d630c0acf78f47eaf7e08be1b8964d87f7aad1aa20ccb18433ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_b690c7dd74723d435d7ccd3bdc9cc7b792ef7b06086bb8a7b44025b827e7e1f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b690c7dd74723d435d7ccd3bdc9cc7b792ef7b06086bb8a7b44025b827e7e1f8->enter($__internal_b690c7dd74723d435d7ccd3bdc9cc7b792ef7b06086bb8a7b44025b827e7e1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5be54aaa6ec4d630c0acf78f47eaf7e08be1b8964d87f7aad1aa20ccb18433ea->leave($__internal_5be54aaa6ec4d630c0acf78f47eaf7e08be1b8964d87f7aad1aa20ccb18433ea_prof);

        
        $__internal_b690c7dd74723d435d7ccd3bdc9cc7b792ef7b06086bb8a7b44025b827e7e1f8->leave($__internal_b690c7dd74723d435d7ccd3bdc9cc7b792ef7b06086bb8a7b44025b827e7e1f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
