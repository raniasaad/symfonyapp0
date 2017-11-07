<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9da032d9e006e712a25926552283262f55a6e96512ccd7350ae51433a01f5f94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40c6f12fd2fc85a4ec12ef3bbe554f8efc41b2940214e20dd596d0d92fa10268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c6f12fd2fc85a4ec12ef3bbe554f8efc41b2940214e20dd596d0d92fa10268->enter($__internal_40c6f12fd2fc85a4ec12ef3bbe554f8efc41b2940214e20dd596d0d92fa10268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_651b8f8b24a84bf75b12ec1927e945cced00a219f670ffa53bee0ca19421e892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651b8f8b24a84bf75b12ec1927e945cced00a219f670ffa53bee0ca19421e892->enter($__internal_651b8f8b24a84bf75b12ec1927e945cced00a219f670ffa53bee0ca19421e892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40c6f12fd2fc85a4ec12ef3bbe554f8efc41b2940214e20dd596d0d92fa10268->leave($__internal_40c6f12fd2fc85a4ec12ef3bbe554f8efc41b2940214e20dd596d0d92fa10268_prof);

        
        $__internal_651b8f8b24a84bf75b12ec1927e945cced00a219f670ffa53bee0ca19421e892->leave($__internal_651b8f8b24a84bf75b12ec1927e945cced00a219f670ffa53bee0ca19421e892_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d63a6921176082db6cb935c7b032c0af95bb1fbfb1af00c721c28b88aed2bbc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d63a6921176082db6cb935c7b032c0af95bb1fbfb1af00c721c28b88aed2bbc8->enter($__internal_d63a6921176082db6cb935c7b032c0af95bb1fbfb1af00c721c28b88aed2bbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a9b892e0ab23df47d34751f3b4f6a514d7e2076aa5f844b44f4043eec4fc3de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b892e0ab23df47d34751f3b4f6a514d7e2076aa5f844b44f4043eec4fc3de7->enter($__internal_a9b892e0ab23df47d34751f3b4f6a514d7e2076aa5f844b44f4043eec4fc3de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a9b892e0ab23df47d34751f3b4f6a514d7e2076aa5f844b44f4043eec4fc3de7->leave($__internal_a9b892e0ab23df47d34751f3b4f6a514d7e2076aa5f844b44f4043eec4fc3de7_prof);

        
        $__internal_d63a6921176082db6cb935c7b032c0af95bb1fbfb1af00c721c28b88aed2bbc8->leave($__internal_d63a6921176082db6cb935c7b032c0af95bb1fbfb1af00c721c28b88aed2bbc8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c9fb47f64081d88b613c54a77f1a564acafc7ca778c227f9341ebb592e570b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c9fb47f64081d88b613c54a77f1a564acafc7ca778c227f9341ebb592e570b8->enter($__internal_9c9fb47f64081d88b613c54a77f1a564acafc7ca778c227f9341ebb592e570b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b57c82d2f836d62d234e83abba98200fd2d072c795d5c02059c337dc42cde149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57c82d2f836d62d234e83abba98200fd2d072c795d5c02059c337dc42cde149->enter($__internal_b57c82d2f836d62d234e83abba98200fd2d072c795d5c02059c337dc42cde149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b57c82d2f836d62d234e83abba98200fd2d072c795d5c02059c337dc42cde149->leave($__internal_b57c82d2f836d62d234e83abba98200fd2d072c795d5c02059c337dc42cde149_prof);

        
        $__internal_9c9fb47f64081d88b613c54a77f1a564acafc7ca778c227f9341ebb592e570b8->leave($__internal_9c9fb47f64081d88b613c54a77f1a564acafc7ca778c227f9341ebb592e570b8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
