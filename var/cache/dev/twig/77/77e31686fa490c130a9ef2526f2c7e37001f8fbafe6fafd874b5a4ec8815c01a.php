<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_09c13ae6ef47ff1fbe969c5cd84e5924ca8447338007c194a3b1ed0df609329d extends Twig_Template
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
        $__internal_f195a8641b9c669aa4a210d52deecd858e995b417606a663f349a5c1c5591c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f195a8641b9c669aa4a210d52deecd858e995b417606a663f349a5c1c5591c77->enter($__internal_f195a8641b9c669aa4a210d52deecd858e995b417606a663f349a5c1c5591c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_5de8c2644fd22902ba0cc11d77219f73f84f6e94205a5652b9afe4a41e39a09a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de8c2644fd22902ba0cc11d77219f73f84f6e94205a5652b9afe4a41e39a09a->enter($__internal_5de8c2644fd22902ba0cc11d77219f73f84f6e94205a5652b9afe4a41e39a09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_f195a8641b9c669aa4a210d52deecd858e995b417606a663f349a5c1c5591c77->leave($__internal_f195a8641b9c669aa4a210d52deecd858e995b417606a663f349a5c1c5591c77_prof);

        
        $__internal_5de8c2644fd22902ba0cc11d77219f73f84f6e94205a5652b9afe4a41e39a09a->leave($__internal_5de8c2644fd22902ba0cc11d77219f73f84f6e94205a5652b9afe4a41e39a09a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
