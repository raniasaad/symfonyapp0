<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_02c22419a1a0f3a59818ef00338f58b3856ed67a57c403d2362d0ed3abe9224e extends Twig_Template
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
        $__internal_0476d2d9e1a82b17d841f7d3eee0cb0e5bdc31d405f161e9facb374e68503e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0476d2d9e1a82b17d841f7d3eee0cb0e5bdc31d405f161e9facb374e68503e11->enter($__internal_0476d2d9e1a82b17d841f7d3eee0cb0e5bdc31d405f161e9facb374e68503e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_988526de83eab4cc643554c9d49b24ccdc12b46f3f5da6f0279223037b478126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988526de83eab4cc643554c9d49b24ccdc12b46f3f5da6f0279223037b478126->enter($__internal_988526de83eab4cc643554c9d49b24ccdc12b46f3f5da6f0279223037b478126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_0476d2d9e1a82b17d841f7d3eee0cb0e5bdc31d405f161e9facb374e68503e11->leave($__internal_0476d2d9e1a82b17d841f7d3eee0cb0e5bdc31d405f161e9facb374e68503e11_prof);

        
        $__internal_988526de83eab4cc643554c9d49b24ccdc12b46f3f5da6f0279223037b478126->leave($__internal_988526de83eab4cc643554c9d49b24ccdc12b46f3f5da6f0279223037b478126_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
